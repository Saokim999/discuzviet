<?php

$language = array
(

	'reason_moderate' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_merge' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_delete_post' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_ban_post' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_warn_post' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}<br />
 tiếp tục $warningexpiration trong $warninglimit lần nhắc nhở，bạn sẽ bị cấm đăng bài $warningexpiration ngày.<br />
Hiện nay, bạn đã bị nhắc nhở $authorwarnings lần，Hãy cẩn thận！
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_move' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> chuyển đến <a href=\"{boardurl}forumdisplay.php?from=notice&fid={$toforum[fid]}\">{$toforum[name]}</a> {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_copy' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> copy đến <a href=\"{boardurl}viewthread.php?from=notice&tid=$threadid\">{$thread[subject]}</a> {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_stamp_update' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> do <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> đã được đóng dấu {$_DCACHE[stamps][$stamp][text]} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_stamp_delete' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> do <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> đã được thu hồi con dấu {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modthreads_delete' => '<div class=\"f_manage\">Chủ đề {$threadsubject} đã bị kiểm duyệt，hiện đã được gỡ bỏ！ {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modthreads_validate' => '<div class=\"f_manage\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$threadsubject}</a> đã được chấp thuận！ {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">Chi tiết</a>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modreplies_delete' => '<div class=\"f_manage\">Trả lời của bạn chưa được kiểm duyệt, nay đã bị gỡ bỏ! {time}
<dl class=\"summary\"><dt>Nội dung trả lời: </dt><dd>$post</dd></dl>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modreplies_validate' => '<div class=\"f_manage\">Trả lời của bạn đã được chấp nhận và xuất bản！ {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\"> Chi tiết </a>
<dl class=\"summary\"><dt>Nội dung trả lời: </dt><dd>$post</dd></dl>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reportpost' => '<div><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> Thông báo cho bạn {time}
<a href=\"{boardurl}{$posturl}\" class=\"il to\"> Chi tiết </a>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'transfer' => '<div class=\"f_credit\">Bạn nhận được từ <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> điểm {$extcredits[$creditstrans][title]} {$netamount} {$extcredits[$creditstrans][unit]} {time}
<a href=\"{boardurl}memcp.php?from=notice&action=creditslog\" class=\"il to\"> Chi tiết </a>
<fieldset><ins>{$transfermessage}</ins></fieldset></div>',

	'addfunds' => '<div class=\"f_credit\">Số điểm bạn yêu cầu đã gởi thành công và được đưa vào tài khoản của bạn {time}
<a href=\"{boardurl}memcp.php?from=notice&action=creditslog\" class=\"il to\"> Chi tiết </a>
<dl class=\"summary\"><dt>Phiếu đặt mua: </dt><dd>{$order[orderid]}<dt>Đã trả: </dt><dd>{$order[price]} đồng</dd><dt>Thực nhận: </dt><dd>{$extcredits[$creditstrans][title]} {$order[amount]} {$extcredits[$creditstrans][unit]}</dd></dl></div>',

	'rate_reason' => '<div class=\"f_rate\">Chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> chấm điểm: {$ratescore} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'rate_removereason' => '<div class=\"f_rate\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> bị thu hồi từ <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> số điểm: {$ratescore} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'trade_seller_send' => '<div class=\"f_trade\"><a href=\"{boardurl}space.php?from=notice&uid={$userid}\">{$user}</a> mua sản phẩm <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a>，Bên kia đã trả tiền, chờ bạn gởi hàng {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\"> Chi tiết </a></div>',

	'trade_buyer_confirm' => '<div class=\"f_trade\">Bạn đã mua sản phẩm <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a>，<a href=\"{boardurl}space.php?from=notice&uid={$userid}\">{$user}</a> đã được gởi đi, chờ bạn xác nhận {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\"> Chi tiết </a></div>',

	'trade_fefund_success' => '<div class=\"f_trade\">Hàng <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a> gởi thành công, được {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">đánh giá</a></div>',

	'trade_success' => '<div class=\"f_trade\">Hàng <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a> đã giao dịch thành công {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">đánh giá</a></div>',

	'eccredit' => '<div class=\"f_trade\">Giao dịch <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> đã được đánh giá {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">Xem chi tiết</a></div>',

	'activity_apply' => '<div class=\"f_activity\">Sự kiện <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$activity_subject}</a> người tổ chức đã cho bạn tham gia vào sự kiện này {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\"> Chi tiết </a></div>',

	'activity_delete' => '<div class=\"f_activity\">Sự kiện <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$activity_subject}</a> người tổ chức đã từ chối bạn tham gia vào sự kiện này {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\"> Chi tiết </a></div>',

	'reward_question' => '<div class=\"f_reward\">Bài thưởng <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> thiết lập câu trả lời hay nhất để {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\"> Chi tiết </a></div>',

	'reward_bestanswer' => '<div class=\"f_reward\">Trả lời của bạn cho bài thưởng <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> tác giả <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> chọn là câu trả lời hay nhất với {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\"> Chi tiết </a></div>',

	'favoritethreads_notice' => '<div class=\"f_thread\">{actor} thông báo chủ đề đang theo dõi <a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">{$thread[subject]}</a> {time}
<a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\" class=\"il to\"> Chi tiết </a>
<dfn><a href=\"my.php?from=notice&item=attention&action=remove&tid={$thread[tid]}\" onclick=\"ajaxmenu(this, 3000);doane(event);\" class=\"deloption\" title=\"Hủy bỏ\">Hủy theo dõi</a></dfn></div>',

	'repquote_noticeauthor' => '<div class=\"f_quote\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> đã trích dẫn trong chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> bài viết {time}
<dl class=\"summary\"><dt>Bài của bạn: <dt><dd>{$noticeauthormsg}</dd><dt><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> là: </dt><dd>{$postmsg}</dd></dl>
<p><a href=\"{boardurl}post.php?from=notice&action=reply&fid={$fid}&tid={$thread[tid]}&reppost={$pid}\">Trả lời</a><i>|</i><a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\"> Chi tiết </a></p></div>',

	'reppost_noticeauthor' => '<div class=\"f_reply\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> trả lời chủ đề <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> bài {time}
<dl class=\"summary\"><dt>Bài của bạn: <dt><dd>{$noticeauthormsg}</dd><dt><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> là: </dt><dd>{$postmsg}</dd></dl>
<p><a href=\"{boardurl}post.php?from=notice&action=reply&fid={$fid}&tid={$thread[tid]}&reppost={$pid}\">Trả lời</a><i>|</i><a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\"> Chi tiết </a></p></div>',

	'magics_sell' => '<div class=\"f_magic\">Bạn có {$magic[name]} được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> mua，điểm nhận được {$totalcredit} {time}</div>',

	'magics_receive' => '<div class=\"f_magic\">Bạn được <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> tặng {$magicarray[$magicid][name]} {time}
<fieldset><ins>{$givemessage}</ins></fieldset>
<p><a href=\"{boardurl}magic.php\"> khuyến mãi </a><i>|</i><a href=\"{boardurl}magic.php?from=notice&action=mybox\" class=\"to\">hộp thẻ VIP của tôi</a></p></div>',

	'magic_thread' => '<div class=\"f_magic\">Chủ đề {$thread[subject]} được <a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_user}</a> sử dụng {$magic[name]} {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">Xem trong cửa hàng</a></div>',

	'magic_thread_anonymous' => '<div class=\"f_magic\">Chủ đề {$thread[subject]} được sử dụng {$magic[name]} {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">Xem trong cửa hàng</a></div>',

	'magic_user' => '<div class=\"f_magic\">{$discuz_user} Bạn đã dùng {$magic[name]} {time}
<a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid]\" class=\"il to\">Xem trong cửa hàng</a></div>',

	'magic_user_anonymous' => '<div class=\"f_magic\">Đã có người dùng {$magic[name]}！ {time}</div>',

	'buddy_new' => '<div class=\"f_buddy\"><a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_userss}</a> thêm một bạn mới {time}
<a href=\"{boardurl}my.php?from=notice&item=buddylist&newbuddyid={$discuz_uid}&buddysubmit=yes\" class=\"il to\" onclick=\"ajaxmenu(this, 3000);doane(event);\">Thêm {$discuz_userss} vào danh sách</a></div>',

	'buddy_new_uch' => '<div class=\"f_buddy\"><a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_userss}</a> Thêm bạn mới từ ucHome {time}
<p><a href=\"{boardurl}my.php?from=notice&item=buddylist&newbuddyid={$discuz_uid}&buddysubmit=yes\" onclick=\"ajaxmenu(this, 3000);doane(event);\">Thêm {$discuz_userss} vào danh sách</a><i>|</i>
<a href=\"{$uchomeurl}/space.php?from=notice&uid={$discuz_uid}\" class=\"to\"> Xem trang cá nhân {$discuz_userss}</a></p></div>',

	'task_reward_credit' => '<div class=\"f_task\">Xin chúc mừng bạn hoàn thành nhiệm vụ: <a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，đã nhận {$extcredits[$task[prize]][title]} {$task[bonus]} {$extcredits[$task[prize]][unit]} {time}
<p><a href=\"{boardurl}memcp.php?from=notice&action=credits\">Xem điểm của tôi</a><i>|</i><a href=\"{boardurl}memcp.php?from=notice&action=creditslog&operation=creditslog\" class=\"il to\">Xem nhật ký điểm</a></p></div>',

	'task_reward_magic' => '<div class=\"f_task\">Xin chúc mừng bạn hoàn thành nhiệm vụ: <a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>, nhận được <a href=\"{boardurl}magic.php\">{$magicname}</a> {$task[bonus]} cái {time}</div>',

	'task_reward_medal' => '<div class=\"f_task\">Xin chúc mừng bạn hoàn thành nhiệm vụ: <a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，được huy chương <a href=\"{boardurl}medal.php\">{$medalname}</a> hiệu lực {$task[bonus]} ngày {time}</div>',

	'task_reward_invite' => '<div class=\"f_task\">Xin chúc mừng bạn hoàn thành nhiệm vụ: <a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，được một Invite Code <a href=\"{boardurl}invite.php\">{$task[prize]}</a> có hiệu lực {$task[bonus]} ngày {time}
<dl class=\"summary\"><dt>Invite Code: </dt><dd>{$rewards}</dd></dl></div>',

	'task_reward_group' => '<div class=\"f_task\">Xin chúc mừng bạn hoàn thành nhiệm vụ: <a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，được vào nhóm {$grouptitle} hiệu lực {$task[bonus]} ngày {time}
<a href=\"{boardurl}faq.php?from=notice&action=grouppermission\" class=\"il to\">Hãy xem những gì bạn có thể làm</a></div>',

	'thread_views' => '<div>Chủ đề {subject} được xem: {count} {time}</div>',

	'thread_replies' => '<div>Chủ đề {subject} được trả lời: {count} {time}</div>',

	'thread_rate' => '<div>Chủ đề {subject} được chấm điểm: {count} {time}</div>',

	'post_rate' => '<div>Bài viết {thread} được chấm điểm: {count} {time}</div>',

	'user_usergroup' => '<div>Chuyển lên nhóm {usergroup} {time}
<a href=\"{boardurl}faq.php?from=notice&action=grouppermission\" class=\"il to\">Hãy xem những gì bạn có thể làm</a></div>',

	'user_credit' => '<div>Có tổng số điểm: {count} {time}</div>',

	'user_threads' => '<div>Có tổng số chủ đề: {count} {time}</div>',

	'user_posts' =>	'<div>Có tổng số bài viết: {count} {time}</div>',

	'user_digest' => '<div>Có bài hay: {count} {time}</div>',

);

?>