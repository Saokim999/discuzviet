<?php

// Admins' CP Language Pack for Discuz! Version 1.0.0
// Discuz Việt! – Develope, translate and support by DiscuzViet Group

$msglang = array
(
	'undefined_action' => ' bạn có hành động kỳ quặc ',
	'noaccess' => 'Bạn chưa đủ quyền truy cập khu vực quản lý',
	'noaccess_isfounder' => 'Bạn chưa đủ quyền truy cập khu vực này, cài đặt này chỉ người sáng lập diễn đàn được dùng',
	'noaccess_ip' => 'địa chỉ IP của bạn không được phép vào phạm vi này',
	'action_noaccess' => 'Xin lỗi, Admin giới hạn quyền của bạn để sử dụng tính năng này',
	'action_noaccess_config' => 'Admin đã đóng chức năng này, nếu bạn muốn kích hoạt chức năng hãy sửa config.inc.php',
	'action_access_noexists' => 'Diễn đàn thiết lập thiếu an toàn, xem lại file config.inc.php cẩn thận để sửa đổi cấu hình của bạn. Nếu không, bạn không thể sử dụng tính năng này.',
	'import_data_invalid' => 'Dữ liệu không có giá trị',
	'import_data_typeinvalid' => 'Kiểu dữ liệu lỗi, xin vui lòng trở lại',

	'settings_gzip_invalid' => 'Bản PHP hiện tại không hỗ trợ nén Gzip.',
	'settings_maxonlines_invalid' => 'Phải nhập số lượng người online lớn nhất và không quá 65535，quay lại để thực hiện',
	'settings_creditsformula_invalid' => 'Công thức tính điểm có chứa một biến không hợp lệ, hãy quay lại để thực hiện',
	'settings_ipaccess_invalid' => 'Hành động không hợp lệ! IP của bạn không có trong Danh sách IP được phép, hãy quay lại',
	'settings_adminipaccess_invalid' => 'Hành động không hợp lệ! IP của bạn không có trong Danh sách IP được phép, hãy quay lại',
	'settings_credits_title_invalid' => 'Bạn phải nhập tên cho các loại điểm đã chọn',
	'settings_creditstrans_invalid' => 'Điểm giao dịch được kích hoạt phải là số nguyên, xin vui lòng quay lại sửa đổi',
	'settings_update_succeed' => 'Cấu hình tổng thể đã cập nhật thành công',
	'settings_seccodewidthheight_invalid' => 'Mã hình ảnh xác minh có chiều rộng hoặc chiều cao vượt ngoài phạm vi giới hạn, xin vui lòng quay lại sửa đổi',
	'settings_extcredits_must_available' => 'Bạn cần ít nhất 1 loại điểm để mở rộng, hãy trở về sửa đổi',

	'uc_database_connect_error' => 'Kết nối uCenter đến người sử dụng không thành công, hãy quay lại kiểm tra các thiết lập',
	'uc_database_select_db_error' => 'Cơ sở dữ liệu uCenter có thể không tồn tại, xin hãy trở lại để kiểm tra các thiết lập',
	'uc_config_write_error' => 'Việc lưu tập tin cấu hình không thành công, quay trở lại để kiểm tra các thiết lập',

	'forums_add_category_succeed' => 'Thể loại <b>$newcat</b> đã thêm thành công',
	'forums_add_forum_succeed' => 'Diễn đàn <b>$newforum</b> đã thêm thành công',
	'forums_update_succeed' => 'Thiết lập diễn đàn đã được cập nhật',
	'forums_copy_source_invalid' => 'Bạn đã không chọn diễn đàn nguồn để sao chép, quay trở lại để kiểm tra',
	'forums_copy_target_invalid' => 'Bạn đã không chọn diễn đàn đích để sao chép, quay trở lại để kiểm tra',
	'forums_copy_options_invalid' => 'Chức năng để sao chép không có giá trị, xin vui lòng quay lại sửa đổi',
	'forums_copy_succeed' => 'Sao chép thiết lập của diễn đàn thành công',
	'forums_moderators_update_succeed' => 'Moderator Settings đã được cập nhật',
	'forums_merge_source_sub_notnull' => 'Vẫn còn diễn đàn con, xin vui lòng quay lại để sửa đổi',
	'forums_merge_succeed' => 'Đã trộn diễn đàn thành công',
	'forums_edit_name_invalid' => 'Bạn nhập tên thể loại/board không có giá trị, xin vui lòng quay lại để sửa đổi',
	'forums_edit_sub_notnull' => 'Vẫn còn diễn đàn con, xin vui lòng quay lại để sửa đổi',
	'forums_edit_succeed' => 'Diễn đàn đã được cập nhật',
	'forums_delete_sub_notnull' => 'Vẫn còn diễn đàn con, xin vui lòng quay lại để sửa đổi',
	'forums_delete_confirm' => 'Hành động này không thể khôi phục, bạn có chắc muốn xoá bỏ những bài viết, và đính kèm?<br />Lưu ý: Hủy diễn đàn sẽ không cập nhật lại số người sử dụng và các điểm viết bài',
	'forums_delete_succeed' => 'Diễn đàn đã bị xóa',
	'forums_nonexistence' => 'Diễn đàn được chỉ định không tồn tại, xin hãy trở lại sửa đổi',
	'forums_threadtypes_duplicate' => 'Phân loại chủ đề này đã có, hãy trở lại sửa đổi',
	'forums_threadtypes_succeed' => 'Cập nhật thành công Phân loại chủ đề',
	'forums_threadsorts_duplicate' => 'Không cho phép thể hiện một loạt các thông tin phân loại, xin vui lòng quay lại để sửa đổi',
	'forums_rules_nopermission' => 'Bạn chưa đủ quyền để sửa Nội quy',
	'forums_rules_succeed' => 'Nội quy đã được cập nhật',
	'forums_noparent' => 'Bạn chưa chọn diễn đàn cấp cao hơn, quay trở lại để sửa đổi',
	'forums_name_toolong' => 'Diễn đàn có tên dài hơn 50 ký tự, quay trở lại để sửa đổi',
	'forums_formulaperm_error' => 'Thiết lập quyền hạn gặp sự cố, xin vui lòng quay lại để sửa đổi',
	'forums_delete_alarm' => 'Thao tác này không thể phục hồi, toàn bộ dữ liệu diễn đàn này sẽ bị xóa...',
	'forums_edit_nonexistence' => 'Xin hãy chọn diễn đàn mà bạn muốn sửa:',
	'forums_edit_threadsort_nonexistence' => 'Chưa chọn phân loại mặc định, hãy trở về sửa đổi',

	'announce_nonexistence' => 'Thông báo chỉ định không tồn tại hoặc không có quyền sửa đổi, xin vui lòng trở lại',
	'announce_time_invalid' => 'Bạn nhập vào thời gian bắt đầu hoặc kết thúc không đúng, xin vui lòng quay lại để sửa đổi',
	'announce_invalid' => 'Bạn phải nhập tiêu đề và nội dung của thông báo này, xin vui lòng quay lại để sửa đổi',
	'announce_succeed' => 'Thông báo đã chỉnh sửa hoàn tất',
	'announce_update_succeed' => 'Đã cập nhật nội dung thông báo',

	'modcp_ann_empty' => 'Bạn phải nhập tiêu đề và nội dung của thông báo này, xin vui lòng quay lại để sửa đổi',
	'modcp_ann_urlerror' => 'URL không hợp lệ, xin vui lòng quay lại để sửa đổi',

	'admingroups_edit_succeed' => 'Các thiết lập quyền hạn cho nhóm Admin đã được sửa',
	'admingroups_edit_nonexistence' => 'Hãy lựa chọn nhóm quản lý của bạn để tiến hành các hoạt động:',

	'usergroups_update_credits_invalid' => '"UserGroup" settings không có giá trị hoặc 0 thành viên trong nhóm, xin vui lòng quay lại sửa đổi',
	'usergroups_update_credits_duplicate' => 'Các cấu hình cho nhóm người sử dụng với hạn mức thấp đã có',
	'usergroups_update_succeed' => 'Đã thêm một nhóm người dùng mới. <br />Xin đừng quên cấp quyền hạn thích hợp cho nhóm',
	'usergroups_edit_public_invalid' => 'Nhóm người dùng công cộng không thể liên kết với các nhóm quản lý, hoặc sẽ có một nguy cơ về bảo mật, quay trở lại để sửa đổi',
	'usergroups_edit_creditstrans_disabled' => 'Bạn cần phải bật hệ thống điểm giao dịch, thiết lập lệ phí liên quan đến nhóm người sử dụng công cộng',
	'usergroups_edit_rate_invalid' => 'Cấu hình hệ thống giới hạn điểm, thời gian cho UserGroup này không đúng',
	'usergroups_edit_succeed' => 'User-group permissions settings đã cập nhật',
	'usergroups_type_nonexistence' => 'Nhập sai kiểu Usergroup hoặc nó không tồn tại',
	'usergroups_edit_nonexistence' => 'Hãy chọn nhóm người dùng bạn muốn thao tác:',
	'usergroups_edit_fail' => 'Bạn không được phép chỉnh sửa một người dùng có quyền hạn của nhóm Admin',

	'ranks_succeed' => 'Cấp bậc viết bài đã được cập nhật',

	'members_add_toolong' => 'Tên người dùng của bạn dài hơn 15 ký tự, trở về nhập vào một tên ngắn hơn',
	'members_add_tooshort' => 'Tên mà bạn nhập ít hơn 3 ký tự, hãy trở về nhập lại',
	'members_add_illegal' => 'Tên người dùng chứa các ký tự nhạy cảm hoặc bị chặn bởi hệ thống của chúng tôi, xin vui lòng quay lại',
	'members_username_protect' => 'Tên người dùng có chứa các ký tự được bảo vệ từ hệ thống, xin vui lòng trở lại',
	'members_add_invalid' => 'Bạn không phải hoàn tất các thông tin người sử dụng, xin vui lòng quay lại để sửa đổi',
	'members_add_username_duplicate' => 'Tên người sử dụng đã tồn tại, quay trở lại để sửa đổi',
	'members_add_username_activation' => 'Tên người dùng đã tồn tại, nhưng chưa được kích hoạt, trở về sửa đổi',
	'members_email_duplicate' => 'Địa chỉ email đã được đăng ký, xin hãy điền cái mới',
	'members_email_illegal' => 'Email này không có giá trị hoặc bị cấm',
	'members_email_domain_illegal' => 'Email có chứa tên miền bị cấm hoặc không giá trị',
	'members_add_succeed' => 'Đã thêm $newusername(UID $uid) vào hệ thống',
	'members_search_invalid' => 'Bạn không cung cấp điều kiện tìm kiếm, xin vui lòng trở lại',
	'members_search_noresults' => 'Không tìm thấy thành viên đủ điều kiện này',
	'members_delete_confirm' => 'Hành động này không thể phục hồi, bạn có chắc muốn xoá $membernum ?',
	'members_delete_succeed' => 'Người sử dụng đủ điều kiện $numdeleted này đã bị xóa',
	'members_edit_nonexistence' => 'Người sử dụng được chỉ định không tồn tại',
	'members_edit_illegal' => 'Bạn không thể sửa người dùng đặc biệt, quay trở lại',
	'members_edit_reason_invalid' => 'Bạn không nhập lý do thực hiện thay đổi này, xin vui lòng trở lại sửa đổi.',
	'members_edit_duplicate' => 'Tên người sử dụng mới đổi bị trùng người khác, hãy trở lại sửa đổi',
	'members_edit_succeed' => 'Thông tin người sử dụng cập nhật thành công',
	'members_edit_groups_toomany' => 'bạn đã thiết lập quá nhiều nhóm người sử dụng mở rộng, vượt quá khả năng lưu trữ mà hệ thống cho phép, xin vui lòng trở lại thay đổi',
	'members_edit_groups_illegal' => 'Nhóm đã hết hạn sử dụng và người sử dụng hiện tại đang thuộc về nhóm này, xin vui lòng trở lại sửa đổi',
	'members_edit_groups_succeed' => 'Chỉnh sửa thuộc tính nhóm người sử dụng của người dùng thành công.',
	'members_edit_credits_succeed' => 'Điểm của người dùng đã sửa thành công',
	'members_edit_medals_nonexistence' => 'Không có huy chương này, đến "Hệ thống huy chương" bắt đầu cho hoạt động này.',
	'members_edit_medals_succeed' => 'Huy chương của người dùng đã được sửa',
	'members_newsletter_sm_invalid' => 'Bạn đã không nhập tiêu đề hoặc nội dung của newsletter, quay trở lại để sửa đổi.',
	'members_newsletter_notify_succeed' => 'Newsletter của Diễn đàn đã gửi thành công.',
	'members_reward_invalid' => 'Thao tác thưởng điểm này không có giá trị, quay về hệ thống điểm để thay đổi',
	'members_reward_succeed' => 'Thực hiện thành công hệ thống điểm thưởng và hình phạt cho người sử dụng',
	'members_reward_notify_succeed' => 'Hệ thống điểm thưởng và hình phạt đã được thông báo đến người sử dụng có liên quan.',
	'members_confermedal_succeed' => 'Thực hiện thành công việc cấp phát huy chương',
	'members_confermedal_notify_succeed' => 'Trao tặng huy chương thực hiện thành công, và đã thông báo đến người sử dụng có liên quan.',
	'members_merge_invalid' => 'Bạn đã không nhập tên thành viên bạn muốn kết hợp, hoặc những người sử dụng chỉ định không tồn tại, quay trở lại để sửa đổi.',
	'members_merge_confirm' => 'Hành động này không thể phục hồi, bạn xác định rằng $sourcemember với tất cả thông tin sẽ trộn vào $targetmember bạn có muốn xóa $sourcemember ?',
	'members_merge_succeed' => 'Thành viên $sourcemember đã được tích hợp vào người dùng này: $targetmember ',
	'members_sameness' => 'Xin lỗi, tên người dùng ban đầu không thể giống như tên người dùng mục tiêu, hãy quay lại để sửa đổi.',
	'members_add_admin_none' => 'Xin lỗi, vì lý do bảo mật, không cho phép trực tiếp thêm một quản trị viên, xin vui lòng quay lại để sửa đổi.',
	'members_add_ban_all_none' => 'Tha cho tôi, tôi không cho phép bạn thêm người bị chặn IP, khách thăm, và các nhóm người sử dụng bị cấm',
	'members_no_find_deluser' => 'Không cần phải loại bỏ người dùng, quay trở lại để sửa điều kiện tìm kiếm hoặc chọn người dùng mà bạn muốn xóa',
	'members_dont_contain_admin_merge' => 'Nội dung bao gồm cả quản trị viên. Bạn không thể hợp nhất. Xin vui lòng xóa các quyền quản trị trước khi tiếp tục',
	'members_super_edit_admin_allow' => 'Người sáng lập ra diễn đàn mới có thể sửa đổi thông tin quản trị viên',
	'members_access_succeed' => 'User Permission đã được sửa',
	'members_ipban_nopermission' => 'Chỉ quản trị viên có thể sử dụng "*" là ký tự đại diện, xin vui lòng trở lại.',
	'members_ipban_illegal' => 'IP của bạn có trong danh sách bị cấm, xin vui lòng quay lại để sửa đổi',
	'members_ipban_invalid' => 'IP đã tồn tại trong danh sách, xin vui lòng trở lại',
	'members_ipban_succeed' => 'Cập nhật danh sách IP bị cấm thành công.',
	'members_nonexistence' => 'Nhập tên người dùng của bạn để thực hiện',

	'moderate_members_succeed' => 'Xét duyệt thành viên thành công, tổng cộng $numvalidated người dùng được thông qua, $numinvalidated đã bị từ chối, $numdeleted người dùng bị loại bỏ.',
	'moderate_threads_succeed' => 'Duyệt chủ đề thành công, có tổng cộng $validates chủ đề được thông qua, $ignores bị bỏ qua, $recycles trong thùng rác, $deletes bị xóa',
	'moderate_replies_succeed' => 'Duyệt bài viết thành công, có tổng cộng $validates bài được thông qua, $ignores bị bỏ qua, $deletes bài bị xóa',
	'moderate_posts_no_access_all' => 'Bạn không có quyền xét duyệt bất kỳ bài đăng nào, xin vui lòng trở lại.',
	'moderate_posts_no_access_this' => 'Bạn không có quyền xét duyệt phần này, xin vui lòng trở lại.',
	'threads_move_invalid' => 'Bạn chưa chọn Diễn đàn mục tiêu / Chủ đề không tồn tại, xin hãy trở lại.',
	'threads_forumstick_del_succeed' => 'Danh sách Sticky Topic cập nhật thành công',
	'threads_forumstick_edit_succeed' => 'Diễn đàn mục tiêu thay đổi thành công',
	'threads_forumstick_add_succeed' => 'Chủ đề được stick thành công',
	'threads_forumstick_targets_empty' => 'Hãy chọn một hoặc nhiều  Diễn đàn mục tiêu',
	'threads_forumstick_url_invalid' => 'URL bạn nhập vào không hợp lệ',

	'recyclebin_succeed' => 'Recycle Bin cập nhật thành công, tổng số chủ đề $threadsdel bị xóa, $threadsundel được phục hồi.',
	'recyclebin_none_selected' => 'Chưa chọn bài viết để thao tác',

	'google_succeed' => 'Google Search Settings successfully updated',

	'qihoo_adminemail_invalid' => 'Webmaster Email you fill out not correct, please return the modified',
	'qihoo_succeed' => 'Search settings successfully updated',
	'qihoo_topics_succeed' => 'Topic special settings successfully updated',

	'alipay_ratio_invalid' => 'The cash/credit ratio less than 0, this is invalid',
	'alipay_account_invalid' => 'Account invalid',
	'alipay_securitycode_invalid' => 'Security code invalid',
	'alipay_succeed' => 'Set Alipay function successfully',
	'tenpay_bargainor_invalid' => 'Please enter a 10-digit number for the fiscal pay-pass merchant',
	'tenpay_key_invalid' => 'Keys only be used 32 letters or numbers, please return to modify',
	'tenpay_succeed' => 'Finance successfully set up to pay',
	'ec_credit_succeed' => 'Set credit evaluation system successfully',

	'orders_disabled' => 'Bạn chưa mở hệ thống giao dịch, không thể quản lý phiếu đặt hàng.',
	'orders_validate_succeed' => 'Phiếu Đặt hàng xử lý thành công',

	'magics_config_succeed' => 'Cấu hình Thẻ VIP đã cập nhật',
	'magics_data_succeed' => 'Thông tin Thẻ VIP đã cập nhật',
	'magics_parameter_invalid' => 'Tham số điền không đầy đủ, xin vui lòng quay lại để sửa đổi.',
	'magics_identifier_invalid' => 'Trùng định danh thẻ VIP',
	'magics_filename_illegal' => 'Tên file Thẻ mà bạn nhập vào có chứa các ký tự bị chặn, quay lại để sửa đổi.',
	'magics_filename_invalid' => 'File ($magicfile) không tồn tại hoặc lỗi',
	'magics_present_invalid' => 'Quà tặng phải có ít nhất một loại Thẻ khác, trở về sửa đổi',

	'medals_succeed' => 'Huy chương đã sửa thành công',
	'medals_validate_succeed' => 'Đã kiểm tra, xét duyệt huy chương',
	'medals_invalidate_succeed' => 'Ứng dụng của Medal đã bị loại bỏ',
	'medals_add_succeed' => 'Đã thêm huy chương',
	'medals_please_input' => 'Chọn các hoạt động cần huy chương',

	'tasks_succeed' => 'Đã thêm nhiệm vụ',
	'tasks_settings_invalid' => 'Một vài cấu hình cho nhiệm vụ chưa được kích hoạt',
	'tasks_noscript_or_nocfg' => '指定的任务配置文件或脚本文件不存在。',
	'tasks_basic_invalid' => '任务设置不完整，请返回！',
	'tasks_time_invalid' => '上线时间或下线时间设置不合理，请返回！',
	'tasks_reward_invalid' => '任务奖励设置不合理，请返回！',
	'tasks_del_confirm' => '你确定要删除当前任务吗？',
	'tasks_del' => '任务成功删除',
	'tasks_code_invalid' => '任务脚本代码不符合规范，无法安装，请与作者联系。',
	'tasks_install_duplicate' => '指定的任务脚本已安装，请返回。',
	'tasks_installed' => '指定任务成功安装！',
	'tasks_uninstall_confirm' => '该操作将卸载当前任务类型并删除其下所有任务，请确认！',
	'tasks_noscript' => '指定的任务脚本文件不存在。',
	'tasks_uninstalled' => '指定任务成功卸载！',
	'tasks_newest' => '请上传更高版本的任务脚本，然后刷新本页。',
	'tasks_updated' => '指定任务成功升级！',
	'tasks_newbie_setting_invalid_tid' => '您必须设置一个指定的主题，请返回修改。',
	'tasks_newbie_setting_invalid_fid' => '您必须设置一个指定的版块，请返回修改。',
	'tasks_newbie_setting_invalid_uid' => '您必须设置一个指定的会员，请返回修改。',

	'counter_forum_succeed' => '论坛帖数重建完成。',
	'counter_digest_succeed' => '精华帖数重建完成。',
	'counter_member_succeed' => '用户发帖数重建完成。',
	'counter_thread_succeed' => '主题帖数重建完成。',
	'counter_moved_thread_succeed' => '移动标记清理完成。',
	'counter_moved_favorites_logs_succeed' => '清理收藏夹和日志数据完成。',
	'counter_special_arrange_succeed' => '分类信息数据整理完成。',

	'database_export_custom_invalid' => '您至少需要选择一个数据表进行备份，请返回修改。',
	'database_export_file_invalid' => '数据文件无法保存到服务器，请检查目录属性。',
	'database_export_multivol_redirect' => '分卷备份: 数据文件 #$volume 成功创建，程序将自动继续。',
	'database_export_succeed' => '数据成功备份至服务器 <a href=\"$filename\">$filename</a> 中。',
	'database_export_filename_invalid' => '您没有输入备份文件名或文件名中使用了敏感的扩展名，请返回修改。',
	'database_export_multivol_succeed' => '恭喜您，全部 $volume 个备份文件成功创建，备份完成。\n<br />$filelist',
	'database_export_zip_succeed' => '数据成功备份并压缩至服务器 <a href=\"$filename\">$filename</a> 中。',
	'database_export_dest_invalid' => '目录不存在或无法访问，请检查 ./forumdata/ 目录。',
	'database_import_multivol_succeed' => '分卷数据成功导入论坛数据库。',
	'database_import_file_illegal' => '数据文件不存在: 可能服务器不允许上传文件或尺寸超过限制。',
	'database_import_format_illegal' => '数据文件非 Discuz! 格式，无法导入。',
	'database_import_multivol_prompt' => '分卷数据第一卷成功导入数据库，您需要自动导入本次备份的其他分卷吗？',
	'database_import_multivol_redirect' => '数据文件 #$dumpinfo[volume] 成功导入，程序将自动继续。',
	'database_import_confirm' => '导入和当前 Discuz! 版本不一致的数据极有可能产生无法解决的故障，您确定继续吗？',
	'database_import_unzip' => '$info<br />备份文件解压缩完毕，您需要自动导入备份吗？导入后解压缩的文件将会被删除。',
	'database_import_multivol_unzip' => '$info<br />备份文件解压缩完毕，您需要自动解压缩其他的分卷文件吗？',
	'database_import_multivol_unzip_redirect' => '数据文件 #$multivol 成功解压缩，程序将自动继续。',
	'database_import_multivol_confirm' => '所有分卷文件解压缩完毕，您需要自动导入备份吗？导入后解压缩的文件将会被删除。',
	'database_import_succeed' => '数据成功导入论坛数据库。',
	'database_shell_fail' => 'Shell 权限被禁止或服务器不支持，无法使用 MySQL Dump 方式备份或恢复数据，请返回。',
	'database_file_delete_succeed' => '指定备份文件成功删除。',
	'database_file_delete_invalid' => '您没有选择要删除的备份文件，请返回。',
	'database_run_query_invalid' => '升级错误，MySQL 提示: {$sqlerror} ，请返回。',
	'database_run_query_succeed' => 'Discuz! 数据结构成功升级，影响的记录行数 {$affected_rows}，请返回。',

	'adv_config_succeed' => '广告设置成功更新。',
	'adv_title_invalid' => '您没有填写广告标题，请返回修改。',
	'adv_endtime_invalid' => '您输入的广告结束时间早于当前时间或广告起始时间，请返回修改。',
	'adv_parameter_invalid' => '您没有完成与展现方式相对应的必填内容，请返回修改。',
	'adv_update_succeed' => '广告列表成功更新。',
	'adv_succeed' => '广告成功添加或更新。',
	'adv_title_more' => '对不起，您的广告标题超过 50 个字符，请返回修改。',

	'crons_filename_illegal' => '您输入的任务脚本文件名包含非法字符，请返回修改。',
	'crons_filename_invalid' => '您指定的任务脚本文件($cronfile)不存在或包含语法错误，请返回修改。',
	'crons_time_invalid' => '您没有指定计划任务执行的时间或条件，请返回修改。',
	'crons_succeed' => '计划任务成功更新。',
	'crons_run_invalid' => '您要运行任务的脚本文件($cronfile)不存在或包含语法错误，任务无法运行，请返回。',
	'crons_run_succeed' => '计划任务成功执行。',

	'onlinelist_succeed' => '在线列表项目成功更新。',
	'forumlinks_succeed' => '友情链接成功更新。',
	'censor_succeed' => '词语过滤成功更新。',
	'censor_batch_add_succeed' => '批量导入词语完毕。总共新增词语 <b>($newcount)</b>, 更新词语 <b>($updatecount)</b>, 忽略词语 <b>($ignorecount)</b>。',
	'censor_keywords_tooshort' => '添加关键词长度过短(少于 3 个字节)，请返回修改。',
	'censor_keywords_existence' => '当前词库中已经有此关键词，请勿添加重复词语，请返回修改',
	'smilies_type_nonexistence' => '指定的表情分类不存在。',
	'smilies_delete_invalid' => '您不能直接删除非空的表情分类，请先返回删除本分类下的所有表情。',
	'smilies_edit_succeed' => '表情列表成功更新。',
	'smilies_import_succeed_renamed' => '导入表情分类名称与现有重复，已被自动重命名。表情成功导入。',
	'smilies_import_succeed' => '表情成功导入。',
	'smilies_directory_invalid' => '表情目录 $smurl 不存在，您可以通过 FTP 创建目录 $smurl 并上传相应的表情图片。请返回。',
	'smilies_update_succeed' => '更新成功，在 $smurl 目录中共搜索到 $num 个尚未启用的表情，已自动添加到表情分类“$smtype[name]”。',
	'smilies_update_error' => '目录 $smurl 中没有找到尚未使用的表情图片，请返回。<br />添加表情请通过 FTP 上传表情图片到 $smurl 目录，然后刷新本页。',
	'thread_icon_succeed' => '主题图标成功更新。',
	'thread_stamp_succeed' => '主题图章成功更新。',
	'attachtypes_duplicate' => '新增扩展名与现有重复，请返回修改。',
	'attachtypes_succeed' => '附件类型成功更新。',

	'styles_export_invalid' => '指定的风格不存在，无法导出。',
	'styles_delete_invalid' => '您不能直接删除系统默认的风格，请返回选择其他风格为默认后再进行删除。',
	'styles_delete_invalid_default' => '请勿删除 ID 为 1 的风格，这是系统内置风格。如果您不喜欢这款风格，可以禁用它。',
	'styles_edit_succeed' => '界面方案成功更新。',
	'styles_import_version_invalid' => '本风格适用于 Discuz! $stylearray[version] 与当前版本($version)不一致，请返回。',
	'styles_import_version_invalid_confirm' => '本风格适用于 Discuz! $stylearray[version] 与当前版本($version)不一致，您确定要安装吗？',
	'styles_import_directory_invalid' => '模板目录无法自动建立，请设置 $basedir 目录属性为 777<br />或通过 FTP 建立目录 $stylearray[directory] 并设置属性为 777。',
	'styles_import_succeed_renamed' => '导入风格或模板名称与现有重复，已被自动重命名。界面方案成功导入。',
	'styles_import_succeed' => '界面方案成功导入。',
	'styles_install_succeed' => '界面方案成功安装！',
	'styles_edit_variable_duplicate' => '新增的替换变量名已经存在，请返回修改。',
	'styles_edit_variable_illegal' => '新增的替换变量名称不合法，请返回修改。',
	'styles_copy_succeed' => '界面方案成功复制。',
	'styles_nonexistence' => '请先选择您要进行操作的界面方案：',

	'tpl_directory_invalid' => '模板目录 $directory 不存在于 ./templates 中，或以 \"/\" 结尾，请返回修改。',
	'tpl_new_directory_invalid' => '您没有填写模板所在目录，请返回修改。',
	'tpl_default_directory_invalid' => '您不能修改默认模板的目录设置，请返回。',
	'tpl_delete_invalid' => '您不能删除默认模板，请返回。',
	'tpl_update_succeed' => '模板套系成功更新。',
	'tpl_reset_confirm' => '您确定要恢复 $template[directory]/$fn 为默认模板吗？',
	'tpl_reset_succeed' => '指定模板已恢复成默认模板，现在将转入模板列表。',
	'tpl_edit_nonexistence' => '指定模板套系不存在，请返回。',
	'tpl_edit_invalid' => '指定文件 $template[directory]/$fn 无法写入，<br />若需在线编辑，请将该文件和所在目录属性设置为 777。',
	'tpl_edit_succeed' => '指定模板成功编辑，现在将转入模板列表。',
	'tpl_add_invalid' => '指定模板套系不存在或已被删除，请返回。',
	'tpl_add_duplicate' => '新增模板已经存在，请返回选择其他名称。',
	'tpl_add_file_invalid' => '指定文件 $template[directory]/$name.htm 无法写入，<br />若需在线编辑，请将该文件和所在目录属性设置为 777。',
	'tpl_add_succeed' => '指定模板成功添加，现在将转入模板编辑页。',
	'tpl_delete_confirm' => '本操作不可恢复，您确定要删除模板 $fn 吗？',
	'tpl_delete_succeed' => '指定模板成功删除，现在将转入模板列表。',
	'tpl_delete_fail' => '程序无权删除模板文件，请用 FTP 登录后再试。',
	'tpl_desctpl_exists' => '目标文件 $desctemplate[directory]/$fn 已经存在，您确定要覆盖吗？',
	'tpl_tplcopy_succeed' => '模板 $fn 已成功复制到 $desctemplate[directory] ，请返回。',
	'tpl_tplcopy_invalid' => '指定文件 $desctemplate[directory]/$fn 无法写入，<br />若需在线编辑，请将该文件和所在目录属性设置为 777。',

	'fields_edit_succeed' => '用户资料栏目成功更新。',
	'fields_edit_invalid' => '项目名称和长度不能为空，请返回修改。',

	'dzcode_edit_succeed' => 'Discuz! 代码成功更新。',
	'dzcode_edit_tag_invalid' => '代码标签为空或包含非法字符，请返回修改。',
	'dzcode_edit_range_invalid' => '代码参数个数或嵌套层数范围无效，请返回修改。',

	'plugins_settings_module_nonexistence' => '指定的插件管理模块文件($modfile)不存在或存在语法错误，请检查是否已将插件完整上传。',
	'plugins_settings_succeed' => '插件参数设置成功更新。',
	'plugins_edit_name_invalid' => '您没有输入插件名称，请返回修改。',
	'plugins_edit_directory_invalid' => '您输入的插件目录不合法或没有使用 \"/\" 结尾，请返回修改。',
	'plugins_edit_identifier_invalid' => '您输入的唯一标识符不合法或与现有插件重复，请返回修改。',
	'plugins_edit_modules_duplicated' => '您输入的程序模块名称与现有模块重复，请返回修改。',
	'plugins_edit_modules_name_invalid' => '您输入的程序模块名称不合法，请返回修改。',
	'plugins_edit_modules_url_invalid' => '您没有输入直接链接 URL，请返回修改。',
	'plugins_edit_modules_menu_invalid' => '您没有输入菜单名称，请返回修改。',
	'plugins_edit_hooks_title_invalid' => '您输入的钩子名称不合法或与现有钩子重复，请返回修改。',
	'plugins_edit_language_invalid' => '插件语言包文件($langfile)不存在。',
	'plugins_edit_hooks_succeed' => '插件钩子成功更新。',
	'plugins_edit_var_invalid' => '您输入的配置变量名不合法或重复，请返回修改。',
	'plugins_edit_var_title_invalid' => '您没有输入配置名称，请返回修改。',
	'plugins_edit_vars_succeed' => '插件变量配置成功更新。',
	'plugins_edit_succeed' => '插件配置成功更新。',
	'plugins_add_succeed' => '插件已成功添加，请继续进行详细设置。',
	'plugins_import_version_invalid' => '本插件适用于 Discuz! $pluginarray[version] 与当前版本($version)不一致，请返回。',
	'plugins_import_version_invalid_confirm' => '本插件适用于 Discuz! $pluginarray[version] 与当前版本($version)不一致，您确定要安装吗？<br />如果本插件的安装说明中不包含修改文件的内容则说明此插件为绿色插件，您可放心安装。',
	'plugins_import_identifier_duplicated' => '您要导入的插件($plugin[name])已经安装，请返回。',
	'plugins_import_succeed' => '插件数据成功导入！<br />为了正常使用此插件，您可能还需要上传或修改相应的文件或模板，详情请查看本插件的安装说明',
	'plugins_import_hooks_title_invalid' => '插件的钩子名称不合法，无法导入。',
	'plugins_import_var_invalid' => '插件的钩子名称不合法，无法导入。',
	'plugins_install_succeed' => '插件成功安装！<br />为了正常使用此插件，您可能还需要上传或修改相应的文件或模板，详情请查看本插件的安装说明',
	'plugins_nonexistence' => '您即将进行的操作：设计插件。请先选择插件：',
	'plugins_delete_confirm' => '您确定要卸载此插件吗？',
	'plugins_delete_succeed' => '插件成功卸载！<br />为了正常使用此插件，您可能还需要删除或修改相应的文件或模板，详情请查看本插件的安装说明',
	'plugins_upgrade_hooks_title_invalid' => '插件的钩子名称不合法，无法升级。',
	'plugins_upgrade_var_invalid' => '插件的钩子名称不合法，无法升级。',
	'plugins_upgrade_succeed' => '插件成功升级到 {$toversion}！',

	'addons_provider_nonexistence' => '资源提供商不存在，请返回。',
	'addons_provider_disabled' => '资源提供商不存在或已被关闭，请返回',
	'addons_provider_apiinvalid' => '资源提供商资源连接错误，请返回。',
	'addons_provider_removesucceed' => '资源提供商已经移除。',
	'addons_provider_exists' => '资源提供商已经存在。',
	'addons_provider_addsucceed' => '资源提供商成功添加。',

	'trade_fee_error' => '交易设置有误，请返回修改。',
	'reward_credits_error' => '悬赏交易积分设置有误，请返回修改。',

	'update_cache_succeed' => '全部缓存更新完毕。',
	'csscache_update' => 'CSS 缓存文件已更新',

	'jswizard_disabled' => '论坛JS调用功能没有开启。',
	'jswizard_overflow' => '存储区域超出容量限制，请返回修改。',
	'jswizard_jskey_exists' => '数据调用的模块名称已经存在，请返回更改。',
	'jswizard_succeed' => '数据调用成功添加或更新。',
	'jswizard_copy_succeed' => '数据调用项目已复制为“{$requestdata[variable]}”。',
	'jswizard_infoside_succeed' => '边栏成功更新。',
	'jswizard_import_exist' => '需要导入的数据调用模块名称已经存在 ({$existkeys})，请返回修改。',
	'jswizard_relatedtag_succeed' => '标签聚合成功更新。',

	'creditwizard_resetusercredit_warning' => '<font color=\"FF0000\"><b>警告：</b></font>此操作将重置所有用户的扩展积分 extcredits{$resetcredit} 为 {$initcredits[$resetcredit]}，您是否确认此操作？',
	'creditwizard_resetusercredit_ok' => '所有用户的积分已重置',
	'creditwizard_edit_rate_invalid' => '{$group[grouptitle]} 评分上下限或 24 小时最大评分数设置有误，请返回修改。',
	'creditwizard_edit_succeed' => '积分项目设置成功更新。',

	'filecheck_nofound_md5file' => '不存在校验文件，无法进行此操作。',

	'dbcheck_permissions_invalid' => '您的服务器环境不允许执行数据库校验，无法进行此操作。',
	'dbcheck_checking' => '正在进行数据库校验，请稍候......',
	'dbcheck_nofound_md5file' => '不存在校验文件，无法进行此操作。',
	'dbcheck_ok' => '您的数据库完整无误',
	'dbcheck_repair_completed' => '数据库修复成功。',
	'dbcheck_repair_error' => '数据库修复成功，但仍有 $errorcount 个数据字段修复失败，请返回。<br /><br />$error',

	'faq_list_update' => '帮助列表更新',
	'faq_no_title' => '您没有填写帮助标题，请返回修改。',
	'faq_identifier_invalid' => '帮助标识重复，请返回修改。',
	'faq_keyword_toolong' => '帮助关键词过长，请返回修改。',

	'ftp_password_short' => 'FTP 密码不得少于 3 位，请返回修改。',
	'cachethread_dir_noexists' => '对不起，您所指定的目录 $settingsnew[cachethreaddir] 不存在或者不可写！请返回并尝试通过 FTP 将其属性改为 777。',

	'project_update_forum' => '论坛全局设置更新。',
	'project_import_succeed' => '设置方案成功导入',
	'project_no_title' => '没有填写方案名称，请返回。',
	'project_no_usergroup' => '你选择的用户组不存在。',
	'project_no_item' => '没有填写要保存的项目，请返回。',
	'project_sava_succeed' => '成功保存设置方案。',
	'project_target_item_invalid' => '没有指定目标项目，请返回。',
	'project_no_scheme' => '您选择的设置方案不存在，请返回。',
	'project_scheme_succeed' => '目标设置方案更新。',
	'project_invalid' => '论坛方案参数非法，请返回。',


	'watermarkpreview_error' => '水印功能未启用，无法预览',
	'watermarkpreview_fontpath_error' => '文本水印 TrueType 字体文件不存在',
	'watermarkpreview_createerror' => '水印图片无法生成或不符合生成水印的条件，请检查设置',
	'thumbpreview_error' => '缩略图功能未启用，无法预览',
	'thumbpreview_createerror' => '缩略图片无法生成，请检查设置',

	'ecommerce_invalidcredit' => '信用度必须大于 0 才能进行评级！请返回修改。',
	'ecommerce_must_larger' => '信用等级 $rank 的信用度必须大于上一等级的信用度！请返回修改。',

	'tags_updated' => '主题标签设置成功更新。',
	'tags_not_open' => '主题标签(TAG)功能没有开启。',

	'threadtype_infotypes_succeed' => '分类选项成功更新',
	'threadtype_infotypes_optionvariable_invalid' => '分类选项变量名重复，请返回修改',
	'threadtype_infotypes_noexist' => '主题选项分类不存在',
	'threadtype_infotypes_option_succeed' => '分类扩展选项成功更新',
	'threadtype_infotypes_option_invalid' => '分类扩展选项名称或者变量名为空，请返回修改。',
	'threadtype_infotypes_invalid' => '分类信息至少应该有一个选项，请返回修改。',
	'threadtype_infotypes_model_succeed' => '分类信息模型成功更新',

	// Custom menu related
	'custommenu_edit_succeed' => '常用操作成功更新',
	'custommenu_history_delete_succeed' => '历史操作记录已清空',
	'custommenu_add_succeed' => '菜单 $lang[$title] 已成功添加到常用操作，即将返回上一页，您可以<a href=\"$BASESCRIPT?action=misc&operation=custommenu\">点这里编辑常用操作</a>',
	'custommenu_history_delete_confirm' => '本操作不可恢复，您确定要删除历史操作记录吗？',

	'search_result_noexists' => '对不起，没有找到相关设置或管理操作！<br />输入多个词语搜索（不同字词之间用一个空格隔开，不区分大小写），可以获得更精确的搜索结果。',
	'search_keyword_noexists' => '请输入要搜索的关键词！',

	'nav_add_succeed' => '导航栏成功更新。',

	'focus_update_succeed' => '站长推荐成功更新。',
	'focus_add_num_limit' => '对不起，最多只能添加 10 条站长推荐。',
	'focus_add_succeed' => '站长推荐添加成功。',
	'focus_topic_noexists' => '指定的站长推荐不存在。',
	'focus_topic_exists' => '添加的站长推荐已存在。',
	'focus_edit_succeed' => '站长推荐编辑成功。',
	'focus_conf_succeed' => '站长推荐设置成功。',

	'delete_position_succeed' => '删除帖子索引成功。',
	'select_thread_empty' => '没有选择主题，请返回重新选择。',
	'add_postposition_succeed' => '添加帖子索引成功。',
	'addpostposition_continue' => '正在添加帖子索引，切勿关闭浏览器！',
	'delete_position_gotu_add' => '已经删除了帖子索引，正转向重新创建帖子索引，切勿关闭浏览器！',

);

?>