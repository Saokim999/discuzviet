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
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>Đại diện Trang cá nhân<br />
		<a href="###" onclick="insertunit(\'{body_template}\', \'parameter[settings][template]\')">{body_template}</a>Đại diện nội dung feed
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>Đại diện Ngày tạo<br />
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
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>Thay cho Tên đăng nhập
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>Thay cho Avatar<br />
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>Thay cho Trang cá nhân<br />
		<a href="###" onclick="insertunit(\'{replynum}\', \'parameter[settings][template]\')">{replynum}</a>Thay cho Bài trả lời
		<a href="###" onclick="insertunit(\'{link}\', \'parameter[settings][template]\')">{link}</a>Thay cho Doing link<br />
		<a href="###" onclick="insertunit(\'{message}\', \'parameter[settings][template]\')">{message}</a>Thay cho nội dung Doing
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>Thay cho ngày tạo<br />
		</div>',
	
	'app_name' => 'Module ứng dụng',
	'app_desc' => 'Các ứng dụng được tạo trên ucHome',
	'app_title' => 'Tiêu đề',
	'app_title_comment' => 'Được hiển thị trên Sidebar',
	'app_title_value' => 'Danh sách ứng dụng',
	'app_uids' => 'Chỉ định UID',
	'app_uids_comment' => 'Muốn nhiều UID thì sử dụng dấu "," để phân cách',
	'app_type' => 'Loại ứng dụng',
	'app_type_nolimit' => 'Không giới hạn',
	'app_type_default' => 'Mặc định',
	'app_type_userapp' => 'Ứng dụng của User',
	'app_start' => 'Số dòng bắt đầu',
	'app_start_comment' => 'Thiết lập số bắt đầu từ dòng nào, VD: nhập giá trị 0 là bắt đầu từ dòng đầu tiên',
	'app_limit' => 'Số lượng',
	'app_limit_comment' => 'Số lượng ứng dụng được hiển thị, thiết lập một số nguyên lớn hơn 0',
	'app_template' => 'Hiển thị template độc lập',
	'app_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{icon}\', \'parameter[settings][template]\')">{icon}</a>Thay cho Icon ứng dụng
		<a href="###" onclick="insertunit(\'{link}\', \'parameter[settings][template]\')">{link}</a>Thay cho link Ứng dụng<br />
		<a href="###" onclick="insertunit(\'{appname}\', \'parameter[settings][template]\')">{appname}</a>Thay cho tên Ứng dụng<br />
		</div>',


	'space_name' => 'Module Trang cá nhân',
	'space_desc' => 'Trang cá nhân của user từ UCHome',
	'space_title' => 'Tiêu đề',
	'space_title_comment' => 'Được hiển thị trên Sidebar',
	'space_title_value' => 'Thành viên mới nhất',
	'space_uids' => 'Chỉ định UID',
	'space_uids_comment' => 'Muốn nhiều UID thì sử dụng dấu "," để phân cách',
	'space_startfriendnum' => 'Giá trị đầu của số Friend',
	'space_endfriendnum' => 'Giá trị cuối của số Friend',
	'space_startviewnum' => 'Giá trị đầu của Lần xem',
	'space_endviewnum' => 'Giá trị cuối của Lần xem',
	'space_startcredit' => 'Giá trị đầu của Điểm số',
	'space_endcredit' => 'Giá trị cuối của Điểm số',
	'space_avatar' => 'Hình Avatar',
	'space_avatar_comment' => 'Hình đại diện của User',
	'space_avatar_nolimit' => 'Không giới hạn',
	'space_avatar_noexists' => 'Chưa có',
	'space_avatar_exists' => 'Đã có',
	'space_namestatus' => 'Tên thật',
	'space_namestatus_comment' => 'Cho dù có được thông qua tên thật người dùng hay không',
	'space_namestatus_nolimit' => 'Không giới hạn',
	'space_namestatus_nopass' => 'Chưa thông qua',
	'space_namestatus_pass' => 'Được thông qua',
	'space_dateline' => 'Ngày tạo',
	'space_dateline_comment' => 'Ngày tạo trang cá nhân',
	'space_updatetime' => 'Cập nhật',
	'space_updatetime_comment' => 'Ngày cập nhật trang cá nhân',
	'space_order' => 'Sắp xếp dữ liệu',
	'space_order_comment' => 'Kiểu sắp đặt dữ liệu',
	'space_orderselect' => array(
		array('', 'Mặc định'),
		array('dateline', 'Ngày tạo'),
		array('updatetime', 'Ngày cập nhật'),
		array('viewnum', 'Lần xem'),
		array('friendnum', 'Số bạn bè'),
		array('credit', 'Số điểm')
	),
	'space_dateselect' => array(
		array('0' , 'tất cả'),
		array('86400' , '1 ngày'),
		array('172800' , '2 ngày'),
		array('604800' , '1 tuần'),
		array('1209600' , '2 tuần'),
		array('2592000' , '1 tháng'),
		array('7948800' , '3 tháng'),
		array('15897600' , '6 tháng'),
		array('31536000' , '1 năm')
	),
	'space_sc' => 'Kiểu sắp xếp',
	'space_sc_comment' => 'Theo thứ tự sắp xếp của dữ liệu nhận được',
	'space_sc_asc' => 'Tăng dần',
	'space_sc_desc' => 'Giảm dần',
	'space_start' => 'Số dòng khởi tạo',
	'space_start_comment' => 'Thiết lập số bắt đầu từ dòng nào, VD: nhập giá trị 0 là bắt đầu từ dòng đầu tiên',
	'space_limit' => 'Số lượng bản ghi',
	'space_limit_comment' => 'Số lượng bản ghi được hiển thị, thiết lập một số nguyên lớn hơn 0',
	'space_template' => 'Hiển thị template độc lập',
	'space_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>Thay cho Tên đăng nhập
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>Thay cho Avatar<br />
		<a href="###" onclick="insertunit(\'{viewnum}\', \'parameter[settings][template]\')">{viewnum}</a>Thay cho Lần xem
		<a href="###" onclick="insertunit(\'{credit}\', \'parameter[settings][template]\')">{credit}</a>Thay cho Số điểm<br />
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>Thay cho Liên kết
		<a href="###" onclick="insertunit(\'{friendnum}\', \'parameter[settings][template]\')">{friendnum}</a>Thay cho Số lượng bạn bè<br />
		<a href="###" onclick="insertunit(\'{updatetime}\', \'parameter[settings][template]\')">{updatetime}</a>Thay cho ngày cập nhật
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>Thay cho Ngày tạo<br />
	</div>',

);

?>