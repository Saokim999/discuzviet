<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: quickqueries.inc.php 16688 2008-11-14 06:41:07Z cnteacher $
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
        exit('Access Denied');
}

$simplequeries = array(
	array('comment' => 'Fast Opening Board function', 'sql' => ''),
	array('comment' => 'Open RecycleBin for all Forum Topics', 'sql' => 'UPDATE {tablepre}forums SET recyclebin=\'1\''),
	array('comment' => 'Open to all Forum Discuz! Code', 'sql' => 'UPDATE {tablepre}forums SET allowbbcode=\'1\''),
	array('comment' => 'Open to all Forum [IMG] code', 'sql' => 'UPDATE {tablepre}forums SET allowimgcode=\'1\''),
	array('comment' => 'Open to all Forum Smilies code', 'sql' => 'UPDATE {tablepre}forums SET allowsmilies=\'1\''),
	array('comment' => 'Open to all Forum interference content', 'sql' => 'UPDATE {tablepre}forums SET jammer=\'1\''),
	array('comment' => 'Open to all Forum allow anonymous post', 'sql' => 'UPDATE {tablepre}forums SET allowanonymous=\'1\''),

	array('comment' => 'Fast Close Board function', 'sql' => ''),
	array('comment' => 'Close all Forum topics RecycleBin', 'sql' => 'UPDATE {tablepre}forums SET recyclebin=\'0\''),
	array('comment' => 'Close all Forum HTML code', 'sql' => 'UPDATE {tablepre}forums SET allowhtml=\'0\''),
	array('comment' => 'Close all Forum Discuz! code', 'sql' => 'UPDATE {tablepre}forums SET allowbbcode=\'0\''),
	array('comment' => 'Close all Forum [IMG] code', 'sql' => 'UPDATE {tablepre}forums SET allowimgcode=\'0\''),
	array('comment' => 'Close all Forum Smilies code', 'sql' => 'UPDATE {tablepre}forums SET allowsmilies=\'0\''),
	array('comment' => 'Close all Forum interference content', 'sql' => 'UPDATE {tablepre}forums SET jammer=\'0\''),
	array('comment' => 'Close all Forum anonymous post', 'sql' => 'UPDATE {tablepre}forums SET allowanonymous=\'0\''),

	array('comment' => 'Members related operation', 'sql' => ''),
	array('comment' => 'Clear all Member Custom Style', 'sql' => 'UPDATE {tablepre}members SET styleid=\'0\''),
	array('comment' => 'Clear all Member Points transactions', 'sql' => 'TRUNCATE {tablepre}creditslog;'),
	array('comment' => 'Clear all Member favorites', 'sql' => 'TRUNCATE {tablepre}favorites;'),
);

?>