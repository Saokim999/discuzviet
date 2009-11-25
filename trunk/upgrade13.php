<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
@set_magic_quotes_runtime(0);
@set_time_limit(0);

define('DISCUZ_ROOT', getcwd().'/');
define('IN_DISCUZ', TRUE);
$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);


if(!function_exists('file_put_contents')) {
	define('FILE_APPEND', 'FILE_APPEND');
	if(!defined('LOCK_EX')) {
		define('LOCK_EX', 'LOCK_EX');
	}

	function file_put_contents($file, $data, $flags = '') {
		$contents = (is_array($data)) ? implode('', $data) : $data;

		$mode = ($flags == 'FILE_APPEND') ? 'ab+' : 'wb';

		if(($fp = @fopen($file, $mode)) === false) {
			return false;
		} else {
			$bytes = fwrite($fp, $contents);
			fclose($fp);
			return $bytes;
		}
	}
}

$lang = array(
	'error_message' => '錯誤信息',
	'message_return' => '返回',
	'old_step' => '上一步',
	'new_step' => '下一步',
	'uc_appname' => '論壇',
	'uc_appreg' => '註冊',
	'uc_appreg_succeed' => '到 UCenter 成功，',
	'uc_continue' => '點擊這裡繼續',
	'uc_setup' => '<font color="red">如果沒有安裝過，點擊這裡安裝 UCenter</font>',
	'uc_title_ucenter' => '請填寫 UCenter 的相關信息',
	'uc_url' => 'UCenter 的 URL',
	'uc_ip' => 'UCenter 的 IP',
	'uc_admin' => 'UCenter 的管理員帳號',
	'uc_adminpw' => 'UCenter 的管理員密碼',
	'uc_title_app' => '相關信息',
	'uc_app_name' => '的名稱',
	'uc_app_url' => '的 URL',
	'uc_app_ip' => '的 IP',
	'uc_app_ip_comment' => '當主機 DNS 有問題時需要設置，默認請保留為空',
	'uc_connent_invalid1' => '連接服務器',
	'uc_connent_invalid2' => ' 失敗，請返回檢查。',
	'error_message' => '提示信息',
	'error_return' => '返回',

	'tagtemplates_subject' => '標題',
	'tagtemplates_uid' => '用戶 ID',
	'tagtemplates_username' => '發帖者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主題地址',
);

$msglang = array(
	'redirect_msg' => '瀏覽器會自動跳轉頁面，無需人工干預。除非當您的瀏覽器長時間沒有自動跳轉時，請點擊這裡',
	'uc_url_empty' => '您沒有填寫 UCenter 的 URL，請返回填寫。',
	'uc_url_invalid' => 'UCenter 的 URL 格式不合法，正常的格式為： http://www.domain.com ，請返回檢查。',
	'uc_ip_invalid' => '<font color="red">無法連接 UCenter 所在的 Web 服務器，請填寫 UCenter 服務器的IP，如果 UCenter 與論壇在同一台服務器，可以嘗試填寫：127.0.0.1。</font>',
	'uc_admin_invalid' => '<font color="red">登錄 UCenter 的管理員帳號密碼錯誤。</font>',
	'uc_data_invalid' => 'UCenter 獲取數據失敗，請返回檢查 UCenter URL、管理員帳號、密碼。 ',
);

require DISCUZ_ROOT.'./include/db_mysql.class.php';
@include DISCUZ_ROOT.'./config.inc.php';

$version['old'] = 'Discuz! 7.1 正式版';
$version['new'] = 'Discuz! 7.2';
$version['newnumber'] = '7.2';
$lock_file = DISCUZ_ROOT.'./forumdata/upgrade13.lock';

if(!$dbhost || !$dbname || !$dbuser) {
	instmsg('論壇數據庫的主機，數據庫名，用戶名為空。');
}

$db = new dbstuff();
$db->connect($dbhost, $dbuser, $dbpw, $dbname, $pconnect, true, $dbcharset);
function get_charset($tablename) {
	global $db;
	$tablestruct = $db->fetch_first("show create table $tablename");
	preg_match("/CHARSET=(\w+)/", $tablestruct['Create Table'], $m);
	return $m[1];
}

if($db->version() > '4.1.0') {
	$tablethreadcharset = get_charset($tablepre.'threads');
	$dbcharset = strtolower($dbcharset);
	$tablethreadcharset = strtolower($tablethreadcharset);
	if($dbcharset && $dbcharset !=  $tablethreadcharset) {
		instmsg("您的配置文件 (./config.inc.php) 中的字符集 ($dbcharset) 與表的字符集 ($tablethreadcharset) 不匹配。");
	}
}

$upgrade1 = <<<EOT
#帖子位置信息存儲;
DROP TABLE IF EXISTS cdb_postposition;
CREATE TABLE cdb_postposition (
	`tid` int(10) unsigned NOT NULL,
        `position` int(10) unsigned NOT NULL,
        `pid` int(10) unsigned NOT NULL,
         PRIMARY KEY (`tid`,`position`)
) ENGINE=MyISAM;


# 後台是否在頁面上顯示帖子評分記錄;
REPLACE INTO cdb_settings (variable, value) VALUES ('ratelogon', '0');

#主題列表分割帶;
REPLACE INTO cdb_settings (variable, value) VALUES ('forumseparator', '1');

# 附件 URL 即可直接參與媒體播放功能開關;
REPLACE INTO cdb_settings (variable, value) VALUES ('allowattachurl', '0');

# 個人資料頁可自由查看他人的帖子;
REPLACE INTO cdb_settings (variable, value) VALUES ('allowviewuserthread', '');

#不受審核限制的 IP 列表;
REPLACE INTO cdb_settings (variable, value) VALUES ('ipverifywhite', '');

EOT;

$upgradetable = array(

	# 編輯帖子時間按照用戶組設置
	array('usergroups', 'ADD', 'edittimelimit', "smallint(6) UNSIGNED NOT NULL DEFAULT '0'"),

	# 增加主題狀態標示
	array('threads', 'ADD', 'status', "smallint (6)UNSIGNED  DEFAULT '0' NOT NULL"),

	#主題圖章
	array('smilies', 'MODIFY', 'type', "ENUM('smiley','icon','stamp') NOT NULL DEFAULT 'smiley'"),
	array('threadsmod', 'ADD', 'stamp', "TINYINT(3) NOT NULL"),

	#是否允許發表搶樓貼
	array('usergroups', 'ADD', 'allowpostrushreply', "TINYINT(1) NOT NULL DEFAULT '0'"),
	# 分類信息加強
	array('typevars', 'ADD', 'subjectshow', "TINYINT(1) NOT NULL DEFAULT '0'"),
	array('threadtypes', 'ADD', 'stemplate', "TEXT NOT NULL"),
	array('typeoptions', 'ADD', 'unit', "VARCHAR(40) NOT NULL AFTER `type`"),
	# 前台權限細化
	array('admingroups', 'ADD', 'allowhighlightthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowdigestthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowrecommendthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowbumpthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowclosethread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowmovethread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowedittypethread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowstampthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowcopythread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowmergethread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowsplitthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowrepairthread', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowwarnpost', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowviewreport', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'alloweditforum', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowremovereward', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'allowedittrade', "tinyint(1) NOT NULL DEFAULT '0'"),
	array('admingroups', 'ADD', 'alloweditactivity', "tinyint(1) NOT NULL DEFAULT '0'"),
	
	#有關版塊的其他信息
	array('forumfields', 'ADD', 'extra', "TEXT NOT NULL DEFAULT ''"),
);

$upgrade3 = <<<EOT
#主題圖章;
DELETE FROM `cdb_smilies` WHERE `typeid` = 0 AND `type` = 'stamp';
INSERT INTO `cdb_smilies` (`typeid`, `displayorder`, `type`, `code`, `url`) VALUES
  (0, 0, 'stamp', '精華', '001.gif'),
  (0, 1, 'stamp', '熱帖', '002.gif'),
  (0, 2, 'stamp', '美圖', '003.gif'),
  (0, 3, 'stamp', '優秀', '004.gif'),
  (0, 4, 'stamp', '置頂', '005.gif'),
  (0, 5, 'stamp', '推薦', '006.gif'),
  (0, 6, 'stamp', '原創', '007.gif'),
  (0, 7, 'stamp', '版主推薦', '008.gif'),
  (0, 8, 'stamp', '爆料', '009.gif');

#權限細化;
UPDATE cdb_admingroups SET allowhighlightthread='1',allowdigestthread='3',allowrecommendthread='1',allowbumpthread='1',allowclosethread='1',allowmovethread='1',allowedittypethread='1',allowstampthread='1',allowcopythread='1',allowmergethread='1',allowsplitthread='1',allowrepairthread='1',allowwarnpost='1',allowviewreport='1',alloweditforum='1',allowviewlog='1',allowremovereward='1',allowedittrade='0',alloweditactivity='0';

UPDATE cdb_admingroups SET allowedittrade='1',alloweditactivity='1' WHERE admingid='1';

UPDATE cdb_usergroups SET allowpostrushreply='1' WHERE groupid='1' AND radminid='1';

EOT;

$newfunc = getgpc('newfunc');
$newfunc = empty($newfunc) ? 0 : $newfunc;
$step = getgpc('step');
$step = empty($step) ? 1 : $step;
instheader();
if(!isset($cookiepre)) {
	instmsg('config_nonexistence');
} elseif(!ini_get('short_open_tag')) {
	instmsg('short_open_tag_invalid');
}

if(file_exists($lock_file)) {
	instmsg('升級被鎖定，應該是已經升級過了，如果已經恢複數據請手動刪除<br />'.str_replace(DISCUZ_ROOT, '', $lock_file).'<br />之後再來刷新頁面。');
}

if($step == 1) {

	$msg = '<div class="btnbox marginbot">
			<form method="get">
			<input type="hidden" name="step" value="check" />
				<input type="submit" style="padding: 2px;" value="開始升級" name="submit" />
			</form>
		</div>';

echo <<<EOT
		<div class="licenseblock">
		<div class="license">
	<h1>本升級程序只能從 $version[old] 升級到 $version[new]</h1>
	升級之前<b>務必備份數據庫資料</b>，否則升級失敗無法恢復<br /><br />
		正確的升級方法為:
	<ol>
		<li>關閉原有論壇，上傳 $version[new] 的全部文件和目錄（除install目錄和config.inc.php文件），覆蓋服務器上的 $version[old]
		<li>上傳升級程序到論壇目錄中。
		<li>運行本程序，直到出現升級完成的提示
		<li>如果中途失敗，請使用Discuz!工具箱（./utilities/tools.php）裡面的數據恢復工具恢復備份，去除錯誤後重新運行本程序
	</ol>
</div></div>
	$msg

EOT;

	instfooter();

} elseif($step == 'check') {

	@touch(DISCUZ_ROOT.'./forumdata/install.lock');
	@unlink(DISCUZ_ROOT.'./install/index.php');

//	echo "<h4>Discuz!程序版本檢測</h4>";

	if(!defined('UC_CONNECT')) {
		instmsg('您的config.inc.php文件被覆蓋，請恢復備份好的config.inc.php文件，之後再嘗試升級。');
	}

	include_once DISCUZ_ROOT.'./discuz_version.php';
	if(!defined('DISCUZ_VERSION') || DISCUZ_VERSION != $version['newnumber']) {
		instmsg('您還沒有上傳(或者上傳不完全)最新的'.$version['new'].'的程序文件，請先上傳之後再嘗試升級。');
	}

	instmsg("Discuz!程序版本檢測通過，自動執行下一步。", '?step=2');

} elseif($step == 2) {

//	echo "<h4>新增數據表</h4>";

	dir_clear('./forumdata/cache');
	dir_clear('./forumdata/templates');

	runquery($upgrade1);

	instmsg("新增數據表處理完畢。", '?step=3');
	instfooter();
	
} elseif($step == 3) {

	$start = isset($_GET['start']) ? intval($_GET['start']) : 0;

	//echo "<h4></h4>";

	if(isset($upgradetable[$start]) && $upgradetable[$start][0]) {

		//echo "升級數據表 [ $start ] {$tablepre}{$upgradetable[$start][0]} {$upgradetable[$start][3]}:";
		$successed = upgradetable($upgradetable[$start]);

		if($successed === TRUE) {
			$start ++;
			if(isset($upgradetable[$start]) && $upgradetable[$start][0]) {
				instmsg("升級數據表 [ $start ] {$tablepre}{$upgradetable[$start][0]} {$upgradetable[$start][3]}:<span class='w'>OK</span>", "?step=3&start=$start");
			}
		} elseif($successed === FALSE) {
			instmsg("調整數據表結構失敗：{$tablepre}{$upgradetable[$start][0]} {$upgradetable[$start][3]}");
		} elseif($successed == 'TABLE NOT EXISTS') {
			instmsg("<span class=red>數據表：{$tablepre}{$upgradetable[$start][0]}不存在，升級無法繼續，請確認您的論壇版本是否正確!</span>");
		}
	}

	instmsg("論壇數據表結構調整完畢。", "?step=4");
	instfooter();

} elseif($step == 4) {

//	echo "<h4>更新部分數據</h4>";
	runquery($upgrade3);

	@include_once DISCUZ_ROOT.'./forumdata/cache/cache_settings.php';
	$timestamp = time();
	$data = array('title' => array(
		'bbname' => $_DCACHE['settings']['bbname'],
		'time' => gmdate($_DCACHE['settings']['dateformat'], $timestamp + $_DCACHE['settings']['timeoffset'] * 3600),
		'version' => $version['new'],
		)
	);
	$template = array('title' => '{bbname} 於 {time} 升級到 {version}');
	$db->query("INSERT INTO {$tablepre}feeds (type, fid, typeid, sortid, appid, uid, username, data, template, dateline)
		VALUES ('feed_announce', '0', '0', '0', '0', '0', '', '".addslashes(serialize($data))."', '".addslashes(serialize($template))."', '$timestamp')");
	$edittimelimit = $db->result_first("SELECT value FROM {$tablepre}settings WHERE variable='edittimelimit'");
	$db->query("UPDATE {$tablepre}usergroups SET edittimelimit='$edittimelimit'");
	updatespecial();
	instmsg("部分數據更新完畢。", "?step=5");
	instfooter();
} elseif($step == 5) {
	if(getgpc('addfounder_contact','P')) {
		$email = strip_tags(getgpc('email', 'P'));
		$msn = strip_tags(getgpc('msn', 'P'));
		$qq = strip_tags(getgpc('qq', 'P'));
		if(!preg_match("/^[\d]+$/", $qq)) $qq = '';
		if(strlen($email) < 6 || !preg_match("/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/", $email)) $email = '';
		if(strlen($msn) < 6 || !preg_match("/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/", $msn)) $msn = '';

		$contact = serialize(array('qq' => $qq, 'msn' => $msn, 'email' => $email));
		$db->query("REPLACE {$tablepre}settings (variable, value) VALUES ('founder_contact', '$contact')");
		instmsg("進入下一步。","?step=7");
	} else {
		$contact = array();
		$contact = unserialize($db->result_first("SELECT value FROM {$tablepre}settings WHERE variable='founder_contact'"));
		$founder_contact = str_replace(array("\n","\t"), array('<br>','&nbsp;&nbsp;&nbsp;&nbsp;'), $founder_contact);
echo <<<EOD
 		<div class="licenseblock">
		<div class="license">
	<h1>關於《康盛改善計劃》的說明</h1>
	<ol>
		<li>為了不斷改進產品質量，改善用戶體驗，$version[new]版內置了統計系統。</li>
		<li>該統計系統有利於我們分析用戶在論壇的操作習慣，進而幫助我們在未來的版本中對產品進行改進，設計出更符合用戶需求的新功能。</li>
		<li>該統計系統不會收集站點敏感信息，不收集用戶資料，不存在安全風險，並且經過實際測試不會影響論壇的運行效率。</li>
		<li>您安裝使用本版本表示您同意加入《康盛改善計劃》，Discuz!運營部門會通過對站點數據的分析為您提供運營指導建議，我們將提示您如何根據站點運行情況開啟論壇功能，如何進行合理的功能配置，以及提供其他的一些運營經驗等。</li>
		<li>為了方便我們和您溝通運營策略，請您留下常用的網絡聯繫方式。</li>
	</ol>
</div></div>
<div class="desc">
	<h4>填寫聯繫方式</h4>
	<p>正確的聯繫方式有助於我們給你提供最新的信息和安全方面的報告</p>
</div>

<form action="$url_forward" method="post" id="postform">
	<table class="tb2">
		<tr>
			<th class="tbopt">QQ：</th>
			<td><input type="text" value="$contact[qq]" name="qq" size="35" class="txt" /></td>
			<td>請正確填寫QQ號碼</td>
		</tr>
		<tr>

			<th class="tbopt">MSN：</th>
			<td><input type="text" value="$contact[msn]" name="msn" size="35" class="txt" /></td>
			<td>MSN賬號</td>
		</tr>
		<tr>
			<th class="tbopt">E-mail：</th>
			<td><input type="text" value="$contact[email]" name="email" size="35" class="txt" /></td>

			<td>郵箱地址</td>
		</tr>
		<tr>
			<th class="tbopt"></th>
			<td><input type="submit" class="btn" name="addfounder_contact" value="下一步" /> &nbsp; &nbsp;<a href='?step=6'>跳過</a>
			<td></td>
		</tr>
	</table>
</form>

EOD;

	}

} else {

	$settings = array();
	$query = $db->query("SELECT value, variable FROM {$tablepre}settings WHERE variable IN('statid', 'statkey', 'bbname')");
	while($row = $db->fetch_array($query)) {
		$settings[$row['variable']] = $row['value'];
	}
	getstatinfo($settings['statid'], $settings['statkey']);

	dir_clear('./forumdata/cache');
	dir_clear('./forumdata/templates');
	dir_clear('./uc_client/data/cache');
	@touch($lock_file);
	if(!@unlink('upgrade13.php')) {
		$msg = '<li><b>必刪除本程序</b></li>';
	} else {
		$msg = '';
	}
echo <<<EOT
		<div class="licenseblock">
		<div class="license">
	<h1>恭喜您論壇數據升級成功</h1>
	<h3>接下來請您：</h3>
	<ol>
		$msg
		<li>使用管理員身份登錄論壇，進入後台，更新緩存</li>
		<li>進行論壇註冊、登錄、發貼等常規測試，看看運行是否正常</li>
	</ol>
</div></div>

EOT;
echo '<div class="btnbox marginbot">
			<form method="get" action="index.php">
				<b>感謝您選用我們的產品！</b><input type="submit" style="padding: 2px;" value="您現在可以訪問論壇，查看升級情況" name="submit" />
			</form>
		</div><iframe width="0" height="0" src="index.php" style="display:none;"></iframe>';
		
	instfooter();

}

function send_sql_to_uc($sql) {
	$url = UC_API.'/accept_sql.php?appid='.UC_APPID.'&uckey='.UC_KEY.'&sql='.urlencode($sql);
	return file_get_contents($url);
}

function insertconfig($s, $find, $replace) {
	if(preg_match($find, $s)) {
		$s = preg_replace($find, $replace, $s);
	} else {
		// 插入到最後一行
		$s .= "\r\n".$replace;
	}
	return $s;
}

function instheader() {
	global $charset, $version;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Discuz! 升級嚮導</title>
<style type="text/css">
/*
(C) 2001-2009 Comsenz Inc.
*/

/* common */
*{ word-wrap:break-word; }
body{ padding:5px 0; background:#FFF; text-align:center; }
body, td, input, textarea, select, button{ color:#666; font:12px Verdana, Tahoma, Arial, sans-serif; }
ul, dl, dd, p, h1, h2, h3, h4, h5, h6, form, fieldset { margin:0; padding:0; }
h1, h2, h3, h4, h5, h6{ font-size:12px; }
a{ color:#2366A8; text-decoration:none; }
	a:hover { text-decoration:underline; }
	a img{ border:none; }
em, cite, strong, th{ font-style:normal; font-weight:normal; }
table{ border-collapse:collapse; }

/* box */
.container{ overflow:hidden; margin:0 auto; width:700px; height:auto !important;text-align:left; border:1px solid #B5CFD9; }
.header{ height:71px; background:url(images/upgrade/bg_repx.gif) repeat-x; }
	.header h1{ text-indent:-9999px; width:270px; height:48px; background:url(images/upgrade/bg_repno.gif) no-repeat 26px 22px; }
	.header span { float: right; padding-right: 10px; }
.main{ padding:20px 20px 0; background:#F7FBFE url(images/upgrade/bg_repx.gif) repeat-x 0 -194px; }
	.main h3{ margin:10px auto; width:75%; color:#6CA1B4; font-weight:700; }
.desc{ margin:0 auto; width:537px; line-height:180%; clear:both; }
	.desc ul{ margin-left:20px; }
.desc1{ margin:10px 0; width:100%; }
	.desc1 ul{ margin-left:25px; }
	.desc1 li{ margin:3px 0; }
.tb2{ margin:15px 0 15px 67px; }
	.tb2 th, .tb2 td{ padding:3px 5px; }
	.tbopt{ width:120px; text-align: left; }
.btnbox{ text-align:center; }
	.btnbox input{ margin:0 2px; }
	.btnbox textarea{ margin-bottom:10px; height:150px; }
.btn{ margin-top:10px; }
.footer{ line-height:40px; text-align:center; background:url(images/upgrade/bg_footer.gif) repeat-x; font-size:11px; }

/* form */
.txt{ width:200px; }

/* file status */
.w{ margin-left: 8px; padding-left: 16px; background:url(images/upgrade/bg_repno.gif) no-repeat 0 -149px;  }
.nw{ margin-left: 8px; padding-left: 16px; background:url(images/upgrade/bg_repno.gif) no-repeat 0 -198px; }

/* space */
.marginbot{ margin-bottom:20px; }
.margintop{ margin-top:20px; }
.red{ color:red; }

.licenseblock{ margin-bottom:15px; padding:8px; border:1px solid #EEE; background:#FFF; overflow:scroll; overflow-x:hidden; }
.license{}
	.license h1{ padding-bottom:10px; font-size:14px; text-align:center; }
	.license h3{ margin:0; color:#666; }
	.license p{ line-height:150%; margin:10px 0; text-indent:25px; }
	.license li{ line-height:150%; margin:5px 0; }
.title{ margin:5px 0 -15px 58px; }
.showmessage { margin: 0 0 20px; line-height: 160%; }
	.showmessage h2 { margin-bottom: 10px;font-size: 14px; }
	.showmessage .btnbox { margin-top: 20px;}
</style>
<meta name="copyright" content="Comsenz Inc." />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<script type="text/javascript">
function redirect(url) {
	window.location=url;
}
function $(id) {
	return document.getElementById(id);
}
</script>
</head>
<div class="container">
	<div class="header">
		<h1>Discuz! 升級嚮導</h1>
		<span>從 Discuz! 7.1 升級到 7.2</span>
	</div>
	<div class="main">

<?php
}

function instfooter() {
	global $version;
?>
		<div class="footer">&copy;2001 - 2009 <a href="http://www.comsenz.com/">Comsenz</a> Inc.</div>
	</div>
</div>
</body>
</html>
<?php
}

function instmsg($message, $url_forward = '', $postdata = '') {
	global $lang, $msglang;
	$message = $msglang[$message] ? $msglang[$message] : $message;
	if($url_forward) {
		$message .= "<p><a href=\"$url_forward\">$msglang[redirect_msg]</a></p>";
		$message .= "<script>setTimeout(\"redirect('$url_forward');\", 1250);</script>";
	} elseif(strpos($message, $lang['return'])) {
		$message .= "<p><a href=\"javascript:history.go(-1);\" class=\"mediumtxt\">$lang[message_return]</a></p>";
	}

echo <<<EOD
	<div class="showmessage">
	<h2>{$lang[error_message]}</h2>
	<p>$message</p>
	<!--<div class="btnbox"><input type="button" class="btn" value="按鈕文字" /></div>-->
	</div>
EOD;
		
	instfooter();
	exit;
}

function getgpc($k, $var='G') {
	switch($var) {
		case 'G': $var = &$_GET; break;
		case 'P': $var = &$_POST; break;
		case 'C': $var = &$_COOKIE; break;
		case 'R': $var = &$_REQUEST; break;
	}
	return isset($var[$k]) ? $var[$k] : NULL;
}

function dir_clear($dir) {
	if($directory = dir($dir)) {
		while($entry = $directory->read()) {
			$filename = $dir.'/'.$entry;
			if(is_file($filename)) {
				@unlink($filename);
			}
		}
		@touch($dir.'/index.htm');
		$directory->close();
	}
}

function createtable($sql, $dbcharset) {
	$type = strtoupper(preg_replace("/^\s*CREATE TABLE\s+.+\s+\(.+?\).*(ENGINE|TYPE)\s*=\s*([a-z]+?).*$/isU", "\\2", $sql));
	$type = in_array($type, array('MYISAM', 'HEAP')) ? $type : 'MYISAM';
	return preg_replace("/^\s*(CREATE TABLE\s+.+\s+\(.+?\)).*$/isU", "\\1", $sql).
		(mysql_get_server_info() > '4.1' ? " ENGINE=$type DEFAULT CHARSET=$dbcharset" : " TYPE=$type");
}

function runquery($query) {
	global $db, $tablepre, $dbcharset;

	$query = str_replace("\r", "\n", str_replace(' cdb_', ' '.$tablepre, $query));
	$expquery = explode(";\n", $query);
	foreach($expquery as $sql) {
		$sql = trim($sql);
		if($sql == '' || $sql[0] == '#') continue;

		if(strtoupper(substr($sql, 0, 12)) == 'CREATE TABLE') {
			$db->query(createtable($sql, $dbcharset));
		} else {
			$db->query($sql);
		}
	}
}

function upgradetable($updatesql) {
	global $db, $tablepre, $dbcharset;

	$successed = TRUE;

	if(is_array($updatesql) && !empty($updatesql[0])) {

		list($table, $action, $field, $sql) = $updatesql;

		if(empty($field) && !empty($sql)) {

			$query = "ALTER TABLE {$tablepre}{$table} ";
			if($action == 'INDEX') {
				$successed = $db->query("$query $sql", "SILENT");
			} elseif ($action == 'UPDATE') {
				$successed = $db->query("UPDATE {$tablepre}{$table} SET $sql", 'SILENT');
			}

		} elseif($tableinfo = loadtable($table)) {

			$fieldexist = isset($tableinfo[$field]) ? 1 : 0;

			$query = "ALTER TABLE {$tablepre}{$table} ";

			if($action == 'MODIFY') {

				$query .= $fieldexist ? "MODIFY $field $sql" : "ADD $field $sql";
				$successed = $db->query($query, 'SILENT');

			} elseif($action == 'CHANGE') {

				$field2 = trim(substr($sql, 0, strpos($sql, ' ')));
				$field2exist = isset($tableinfo[$field2]);

				if($fieldexist && ($field == $field2 || !$field2exist)) {
					$query .= "CHANGE $field $sql";
				} elseif($fieldexist && $field2exist) {
					$db->query("ALTER TABLE {$tablepre}{$table} DROP $field2", 'SILENT');
					$query .= "CHANGE $field $sql";
				} elseif(!$fieldexist && $fieldexist2) {
					$db->query("ALTER TABLE {$tablepre}{$table} DROP $field2", 'SILENT');
					$query .= "ADD $sql";
				} elseif(!$fieldexist && !$field2exist) {
					$query .= "ADD $sql";
				}
				$successed = $db->query($query);

			} elseif($action == 'ADD') {

				$query .= $fieldexist ? "CHANGE $field $field $sql" :  "ADD $field $sql";
				$successed = $db->query($query);

			} elseif($action == 'DROP') {
				if($fieldexist) {
					$successed = $db->query("$query DROP $field", "SILENT");
				}
				$successed = TRUE;
			}

		} else {

			$successed = 'TABLE NOT EXISTS';

		}
	}
	return $successed;
}

function loadtable($table, $force = 0) {
	global $db, $tablepre, $dbcharset;
	static $tables = array();

	if(!isset($tables[$table]) || $force) {
		if($db->version() > '4.1') {
			$query = $db->query("SHOW FULL COLUMNS FROM {$tablepre}$table", 'SILENT');
		} else {
			$query = $db->query("SHOW COLUMNS FROM {$tablepre}$table", 'SILENT');
		}
		while($field = @$db->fetch_array($query)) {
			$tables[$table][$field['Field']] = $field;
		}
	}
	return $tables[$table];
}

function daddslashes($string, $force = 0) {
	!defined('MAGIC_QUOTES_GPC') && define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
	if(!MAGIC_QUOTES_GPC || $force) {
		if(is_array($string)) {
			foreach($string as $key => $val) {
				$string[$key] = daddslashes($val, $force);
			}
		} else {
			$string = addslashes($string);
		}
	}
	return $string;
}

function get_uc_root() {
	$uc_root = '';
	$uc = parse_url(UC_API);
	if($uc['host'] == $_SERVER['HTTP_HOST']) {
		$php_self_len = strlen($_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);
		$uc_root = substr(__FILE__, 0, -$php_self_len).$uc['path'];
	}
	return $uc_root;
}

function random($length, $numeric = 0) {
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric) {
		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	} else {
		$hash = '';
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
}

function getstatinfo($siteid = 0, $key = '') {
	global $db, $tablepre, $dbcharset, $settings, $version;
	if($siteid && $key) {
		return;
	} else {
		$siteid = $key = '';
	}
	$versionnumber = $version['newnumber'];
	$onlineip = '';
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
		$onlineip = getenv('HTTP_CLIENT_IP');
	} elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
		$onlineip = getenv('HTTP_X_FORWARDED_FOR');
	} elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
		$onlineip = getenv('REMOTE_ADDR');
	} elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
		$onlineip = $_SERVER['REMOTE_ADDR'];
	}
	$members = $db->result_first("SELECT COUNT(*) FROM {$tablepre}members");
	$funcurl = 'http://stat.discuz.com/stat_ins.php';
	$bbname = $settings['bbname'];
	$PHP_SELF = htmlspecialchars($_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);
	$url = htmlspecialchars('http://'.$_SERVER['HTTP_HOST'].preg_replace("/\/+(api|archiver|wap)?\/*$/i", '', substr($PHP_SELF, 0, strrpos($PHP_SELF, '/'))));
	$posts = $db->result($db->query("SELECT count(*) FROM {$tablepre}posts"), 0);
	$domain = $_SERVER['HTTP_HOST'];
	$hash = $bbname.$url.$mark.$versionnumber.$posts;
	$threads = $db->result($db->query("SELECT count(*) FROM {$tablepre}threads"), 0);
	$hash = md5($hash.$members.$threads.$email.$siteid.md5($key).'install');
	$q = "bbname=$bbname&url=$url&domain=$domain&mark=$mark&version=$versionnumber&posts=$posts&members=$members&threads=$threads&email=$email&siteid=$siteid&key=".md5($key)."&ip=$onlineip&time=".time()."&hash=$hash";
	$q=rawurlencode(base64_encode($q));
	$siteinfo = dfopen($funcurl."?action=install&q=$q");
	if(empty($siteinfo)) {
		$siteinfo = dfopen($funcurl."?action=install&q=$q");
	}
	if($siteinfo && preg_match("/^[a-zA-Z0-9_]+,[A-Z]+$/i", $siteinfo)) {
		$siteinfo = explode(',', $siteinfo);
		$db->query("REPLACE INTO {$tablepre}settings (variable, value) VALUES ('statid', '$siteinfo[0]')");
		$db->query("REPLACE INTO {$tablepre}settings (variable, value) VALUES ('statkey', '$siteinfo[1]')");
	}
}

function dfopen($url, $limit = 0, $post = '', $cookie = '', $bysocket = FALSE, $ip = '', $timeout = 15, $block = TRUE) {
	$return = '';
	$matches = parse_url($url);
	$host = $matches['host'];
	$path = $matches['path'] ? $matches['path'].($matches['query'] ? '?'.$matches['query'] : '') : '/';
	$port = !empty($matches['port']) ? $matches['port'] : 80;

	if($post) {
		$out = "POST $path HTTP/1.0\r\n";
		$out .= "Accept: */*\r\n";
		//$out .= "Referer: $boardurl\r\n";
		$out .= "Accept-Language: zh-cn\r\n";
		$out .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$out .= "User-Agent: $_SERVER[HTTP_USER_AGENT]\r\n";
		$out .= "Host: $host\r\n";
		$out .= 'Content-Length: '.strlen($post)."\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Cache-Control: no-cache\r\n";
		$out .= "Cookie: $cookie\r\n\r\n";
		$out .= $post;
	} else {
		$out = "GET $path HTTP/1.0\r\n";
		$out .= "Accept: */*\r\n";
		//$out .= "Referer: $boardurl\r\n";
		$out .= "Accept-Language: zh-cn\r\n";
		$out .= "User-Agent: $_SERVER[HTTP_USER_AGENT]\r\n";
		$out .= "Host: $host\r\n";
		$out .= "Connection: Close\r\n";
		$out .= "Cookie: $cookie\r\n\r\n";
	}
	$fp = @fsockopen(($ip ? $ip : $host), $port, $errno, $errstr, $timeout);
	if(!$fp) {
		return '';
	} else {
		stream_set_blocking($fp, $block);
		stream_set_timeout($fp, $timeout);
		@fwrite($fp, $out);
		$status = stream_get_meta_data($fp);
		if(!$status['timed_out']) {
			while (!feof($fp)) {
				if(($header = @fgets($fp)) && ($header == "\r\n" ||  $header == "\n")) {
					break;
				}
			}

			$stop = false;
			while(!feof($fp) && !$stop) {
				$data = fread($fp, ($limit == 0 || $limit > 8192 ? 8192 : $limit));
				$return .= $data;
				if($limit) {
					$limit -= strlen($data);
					$stop = $limit <= 0;
				}
			}
		}
		@fclose($fp);
		return $return;
	}
}

function updatespecial() {
	global $db, $tablepre, $dbcharset;
	$fieldtypes = array('number' => 'bigint(20)', 'text' => 'mediumtext', 'radio' => 'smallint(6)', 'checkbox' => 'mediumtext', 'textarea' => 'mediumtext', 'select' => 'smallint(6)', 'calendar' => 'mediumtext', 'email' => 'mediumtext', 'url' => 'mediumtext', 'image' => 'mediumtext');

	$optionvalues = array();
	
	$query = $db->query("SELECT v.*, p.identifier, p.type FROM {$tablepre}typevars v LEFT JOIN {$tablepre}typeoptions p ON p.optionid=v.optionid WHERE search='1' OR p.type IN('radio','select')");
	$optionvalues = array();
	while($row = $db->fetch_array($query)) {
		$optionvalues[$row['sortid']][$row['identifier']] = $row['type'];
		$optionids[$row['sortid']][$row['optionid']] = $row['identifier'];
	}
	foreach($optionvalues as $sortid => $options) {
		$keys = array('KEY tid (tid)', 'KEY fid (fid)');
		$tablename = "{$tablepre}optionvalue{$sortid}";
		$db->query("DROP TABLE IF EXISTS $tablename");
		$sql = "CREATE TABLE $tablename (\n tid int(10) NOT NULL DEFAULT '0',\n fid int(10) NOT NULL DEFAULT '0',";
		foreach($options as $fieldname => $type) {
			$unsigned = $default = '';
			if(strstr($fieldtypes[$type], 'int')) {
				$unsigned = 'unsigned';
				$default = 0;
				$keys[] = "KEY $fieldname ($fieldname)";
			}
			$sql .= "\n$fieldname $fieldtypes[$type] $unsigned NOT NULL DEFAULT '$default',";
		}
		if($keys) {
			$sql .= implode(",\n", $keys);
		}
		$sql .= "\n) TYPE=MyISAM;";
		$sql = syntablestruct(trim($sql), $db->version() > '4.1', $dbcharset);
		$db->query($sql);
		$opids = array_keys($optionids[$sortid]);
		$query = $db->query("SELECT t.*, th.fid FROM {$tablepre}typeoptionvars t left join {$tablepre}threads th ON th.tid=t.tid WHERE t.sortid='$sortid' AND t.optionid IN ('".implode("','", $opids)."')");
		$inserts = array();
		while($row = $db->fetch_array($query)) {
			$opname = $optionids[$sortid][$row['optionid']];
			if(empty($inserts[$row[tid]])) {
				$inserts[$row['tid']]['tid'] = $row['tid'];
				$inserts[$row['tid']]['fid'] = $row['fid'];
			}
			$inserts[$row['tid']][$opname] = addslashes($row['value']);
		}
		if($inserts) {
			foreach($inserts as $tid => $fieldval) {
				$ikeys = $ivals = array();
				foreach($fieldval as $ikey => $ival) {
					$ikeys[] = $ikey;
					$ivals[] = $ival;
				}
				$db->query("INSERT INTO $tablename (`".implode("`,`", $ikeys)."`) VALUES ('".implode("','", $ivals)."')");
			}
		}
	}
}

function syntablestruct($sql, $version, $dbcharset) {

	if(strpos(trim(substr($sql, 0, 18)), 'CREATE TABLE') === FALSE) {
		return $sql;
	}

	$sqlversion = strpos($sql, 'ENGINE=') === FALSE ? FALSE : TRUE;

	if($sqlversion === $version) {

		return $sqlversion && $dbcharset ? preg_replace(array('/ character set \w+/i', '/ collate \w+/i', "/DEFAULT CHARSET=\w+/is"), array('', '', "DEFAULT CHARSET=$dbcharset"), $sql) : $sql;
	}

	if($version) {
		return preg_replace(array('/TYPE=HEAP/i', '/TYPE=(\w+)/is'), array("ENGINE=MEMORY DEFAULT CHARSET=$dbcharset", "ENGINE=\\1 DEFAULT CHARSET=$dbcharset"), $sql);

	} else {
		return preg_replace(array('/character set \w+/i', '/collate \w+/i', '/ENGINE=MEMORY/i', '/\s*DEFAULT CHARSET=\w+/is', '/\s*COLLATE=\w+/is', '/ENGINE=(\w+)(.*)/is'), array('', '', 'ENGINE=HEAP', '', '', 'TYPE=\\1\\2'), $sql);
	}
}
?>