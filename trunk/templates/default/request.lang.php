<?php

$requestlang = array
(
	'assistant_name' => 'My Assistant',
	'assistant_desc' => 'Sử dụng trên Sidebar, hiển thị thông tin người sử dụng hiện tại và liên kết phổ biến',

	'birthday_name' => 'Sinh nhật hôm nay',
	'birthday_desc' => 'Hiển thị hình avatar của thành viên có sinh nhật',
	'birthday_limit' => 'Số lượng thành viên',
	'birthday_limit_comment' => 'Đặt số lượng hiển thị tối đa các thành viên có sinh nhật trong ngày',

	'forumtree_name' => 'Forum Tree',
	'forumtree_desc' => 'Hiển thị danh sách diễn đàn dạng cây thư mục',

	'html_name' => 'HTML Code',
	'html_desc' => 'Module này có thể viết HTML, Discuz code',
	'html_type' => 'Loại code',
	'html_type_comment' => 'Chọn loại code, nếu bạn không hiểu biết nhiều về HTML, bạn có thể chọn định dạng Discuz! code',
	'html_type_html' => 'HTML Code',
	'html_type_code' => 'Discuz Code',
	'html_code' => 'Code',
	'html_code_comment' => 'Nhập nội dung với code thích hợp mà bạn đã chọn',
	'html_side' => 'Hiển thị trên Sidebar',
	'html_side_comment' => 'Nếu muốn module này áp dụng cho Sidebar thì hãy chọn',

	'modlist_name' => 'TOP Moderator & Forum',
	'modlist_desc' => 'Liệt kê người điều hành, Forums hiện tại，chỉ áp dụng tại trang (forumdisplay.php)<br />Nếu mở "Thống kê Diễn đàn" thì list moderator sẽ được sắp theo thời gian điều hành hoặc theo bài viết',

	'rowcombine_title' => 'Module Tiêu đề',
	'rowcombine_title_comment' => 'Nếu module là loại dữ liệu tập hợp nhiều modules có thể được đặt một tiêu đề làm tên chung để hiển thị',
	'rowcombine_name' => 'Rowcombine Module',
	'rowcombine_desc' => 'Hiển thị module tổng hợp nhiều modules nằm ngang',
	'rowcombine_data' => 'Module tổng hợp',
	'rowcombine_data_comment' => 'Mỗi dòng là 1 module, có dấu phẩy trước tên module sau tên mô tả<br />VD:<br />SidebarModules_LatestTopics,Latest topics<br />SidebarModules_LatestReply,Latest reply',

	'tag_name' => 'TAG',
	'tag_desc' => 'Hiển thị số lượng TAG được chỉ định',
	'tag_type' => 'Kiểu TAG',
	'tag_type_comment' => 'Thiết lập cách hiển thị TAG',
	'tag_type_0' => 'Hiển thị ngẫu nhiên',
	'tag_type_1' => 'Hiển thị HOT tag',
	'tag_type_limit' => 'Số lượng TAG',
	'tag_type_limit_comment' => 'Số lượng TAG sẽ được hiển thị',

	'thread_name' => 'Chủ đề',
	'thread_desc' => 'Hiển thị danh sách tiêu đề, có thể nhập ID của chủ đề (TID), các chủ đề đặc biệt cũng sẽ được hiển thị theo style riêng của nó',
	'thread_id' => 'ID của chủ đề',

	'google_name' => 'Google search',
	'google_desc' => 'Hộp tìm kiếm của Google',
	'google_lang' => 'Ngôn ngữ tìm kiếm',
	'google_lang_comment' => 'Thiết lập phù hợp với ngôn ngữ diễn đàn để cải thiện chất lượng kết quả tìm kiếm',
	'google_lang_any' => 'Tất cả',
	'google_lang_en' => 'Tiếng Anh',
	'google_lang_zh-CN' => 'Trung Quốc',
	'google_lang_zh-TW' => 'Đài Loan',
	'google_default' => 'Cách tìm kiếm',
	'google_default_comment' => 'Mặc định loại hình tìm kiếm cho Google',
	'google_default_0' => 'Tìm trên internet',
	'google_default_1' => 'Tìm trong diễn đàn',

	'feed_name' => 'UCHome Feed',
	'feed_desc' => 'Hiển thị các hoạt động của người dùng từ UCHome',
	'feed_title' => 'Tiêu đề',
	'feed_title_comment' => 'Nội dung tiêu đề sẽ xuất hiện trên Sidebar',
	'feed_title_value' => 'Thành viên mới',
	'feed_uids' => 'Chỉ định UID',
	'feed_uids_comment' => 'Muốn nhiều UID thì sử dụng dấu "," để phân cách',
	'feed_friend' => 'Kiểu hoạt động',
	'feed_friend_nolimit' => 'Không giới hạn',
	'feed_friend_friendonly' => 'Chỉ lấy Friend list',
	'feed_start' => 'Số dòng để bắt đầu',
	'feed_start_comment' => 'Thiết lập số bắt đầu từ dòng nào, VD: nhập giá trị 0 bắt đầu từ dòng đầu tiên',
	'feed_limit' => 'Số lượng hoạt động',
	'feed_limit_comment' => 'Số lượng các hoạt động được hiển thị, thiết lập một số nguyên lớn hơn 0',
	'feed_template' => 'Hiển thị template độc lập',
	'feed_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{iconurl}\', \'parameter[settings][template]\')">{iconurl}</a>Đại diện Icon của hoạt động
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>Đại diện Tên đăng nhập<br />
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>Đại diện Avatar<br />
		<a href="###" onclick="insertunit(\'{title_template}\', \'parameter[settings][template]\')">{title_template}</a>Đại diện tiêu đề feed
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>Đại diện website của user<br />
		<a href="###" onclick="insertunit(\'{body_template}\', \'parameter[settings][template]\')">{body_template}</a>Đại diện nội dung feed
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>Đại diện thời gian feed<br />
		</div>',

	'doing_name' => 'Doing Module',
	'doing_desc' => 'Đây là hoạt động ghi chú (doing) từ UCHome',
	'doing_title' => 'Tiêu đề',
	'doing_title_comment' => 'Được hiển thị trên Sidebar',
	'doing_title_value' => 'Ghi chú mới nhất',
	'doing_uids' => 'Chỉ định UID',
	'doing_uids_comment' => 'Muốn nhiều UID thì sử dụng dấu "," để phân cách',
	'doing_mood' => 'Kiểu ghi chú',
	'doing_mood_nolimit' => 'Không giới hạn',
	'doing_mood_moodonly' => 'Chỉ bản ghi cảm nhận',
	'doing_start' => 'Số dòng bắt đầu',
	'doing_start_comment' => 'Thiết lập số bắt đầu từ dòng nào, VD: nhập giá trị 0 là bắt đầu từ dòng đầu tiên',
	'doing_limit' => 'Số lượng ghi chú',
	'doing_limit_comment' => 'Số lượng hoạt động ghi chú được hiển thị, thiết lập một số nguyên lớn hơn 0',
	'doing_template' => 'Hiển thị template độc lập',
	'doing_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>代表 用户名
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>代表 用户头像地址<br />
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>代表 用户个人主页地址<br />
		<a href="###" onclick="insertunit(\'{replynum}\', \'parameter[settings][template]\')">{replynum}</a>代表 回复数
		<a href="###" onclick="insertunit(\'{link}\', \'parameter[settings][template]\')">{link}</a>代表 记录地址<br />
		<a href="###" onclick="insertunit(\'{message}\', \'parameter[settings][template]\')">{message}</a>代表 记录内容
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>代表 创建时间<br />
		</div>',
	
	'app_name' => 'UCHome 应用调用模块',
	'app_desc' => '调用 UCHome 中的应用列表',
	'app_title' => '模块标题',
	'app_title_comment' => '模块在侧边栏显示的标题',
	'app_title_value' => '应用列表',
	'app_uids' => '指定用户 UID',
	'app_uids_comment' => '多个 UID 请用半角逗号 "," 隔开',
	'app_type' => '应用类型',
	'app_type_nolimit' => '不限制',
	'app_type_default' => '只获取默认',
	'app_type_userapp' => '只用户自已的应用',
	'app_start' => '起始数据行数',
	'app_start_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'app_limit' => '显示数据条数',
	'app_limit_comment' => '设置一次显示的应用条目数，请设置为大于 0 的整数，该条件对默认应用无效',
	'app_template' => '单条显示模板',
	'app_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{icon}\', \'parameter[settings][template]\')">{icon}</a>代表 应用小图标
		<a href="###" onclick="insertunit(\'{link}\', \'parameter[settings][template]\')">{link}</a>代表 应用地址<br />
		<a href="###" onclick="insertunit(\'{appname}\', \'parameter[settings][template]\')">{appname}</a>代表 应用名称<br />
		</div>',


	'space_name' => 'UCHome 成员调用模块',
	'space_desc' => '调用 UCHome 中的用户',
	'space_title' => '模块标题',
	'space_title_comment' => '模块在侧边栏显示的标题',
	'space_title_value' => '最新成员',
	'space_uids' => '指定用户 UID',
	'space_uids_comment' => '多个 UID 请用半角逗号 "," 隔开',
	'space_startfriendnum' => '空间好友数起始值',
	'space_endfriendnum' => '空间好友数结束值',
	'space_startviewnum' => '空间访问数起始值',
	'space_endviewnum' => '空间访问数结束值',
	'space_startcredit' => '积分起始值',
	'space_endcredit' => '积分结束值',
	'space_avatar' => '上传头像',
	'space_avatar_comment' => '用户是否上传过头像',
	'space_avatar_nolimit' => '不限制',
	'space_avatar_noexists' => '未上传',
	'space_avatar_exists' => '已上传',
	'space_namestatus' => '实名认证',
	'space_namestatus_comment' => '获取是否通过实名认证的用户',
	'space_namestatus_nolimit' => '不限制',
	'space_namestatus_nopass' => '未通过',
	'space_namestatus_pass' => '已通过',
	'space_dateline' => '建立时间',
	'space_dateline_comment' => '空间创建时间',
	'space_updatetime' => '更新时间',
	'space_updatetime_comment' => '空间更新时间',
	'space_order' => '排序类型',
	'space_order_comment' => '数据排序类型',
	'space_orderselect' => array(
		array('', '默认顺序'),
		array('dateline', '建立时间'),
		array('updatetime', '更新时间'),
		array('viewnum', '空间访问数'),
		array('friendnum', '空间好友数'),
		array('credit', '成员积分')
	),
	'space_dateselect' => array(
		array('0' , '不限制'),
		array('86400' , '一天以来'),
		array('172800' , '两天以来'),
		array('604800' , '一周以来'),
		array('1209600' , '两周以来'),
		array('2592000' , '一个月以来'),
		array('7948800' , '三个月以来'),
		array('15897600' , '六个月以来'),
		array('31536000' , '一年以来')
	),
	'space_sc' => '排序方式',
	'space_sc_comment' => '返回记录的排序方式',
	'space_sc_asc' => '递增',
	'space_sc_desc' => '递减',
	'space_start' => '起始数据行数',
	'space_start_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'space_limit' => '显示数据条数',
	'space_limit_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'space_template' => '单条显示模板',
	'space_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>代表 用户名
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>代表 用户头像地址<br />
		<a href="###" onclick="insertunit(\'{viewnum}\', \'parameter[settings][template]\')">{viewnum}</a>代表 查看数
		<a href="###" onclick="insertunit(\'{credit}\', \'parameter[settings][template]\')">{credit}</a>代表 积分<br />
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>代表 用户个人主页地址
		<a href="###" onclick="insertunit(\'{friendnum}\', \'parameter[settings][template]\')">{friendnum}</a>代表 用户好友数<br />
		<a href="###" onclick="insertunit(\'{updatetime}\', \'parameter[settings][template]\')">{updatetime}</a>代表 更新时间
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>代表 创建时间<br />
	</div>',

);

?>