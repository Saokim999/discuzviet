<?php

// Email Pack for Discuz! Version 3.1.0
// Translated by Discuz Viet Group

// ATTENTION: Please add slashes(\) before single & double quotes( ' & " )

$language = array
(
	'moderate_member_invalidate' => 'Bị từ chối',
	'moderate_member_delete' => 'Loại bỏ',
	'moderate_member_validate' => 'Bởi',


	'get_passwd_subject' =>		'Lấy lại mật khẩu',
	'get_passwd_message' =>		'
$member[username]，
Bức thư này được gửi bởi $bbname.

Bạn nhận được bức thư này là do lúc bạn đăng kí có thiết lập chế độ 
nhận Email của diễn đàn.
----------------------------------------------------------------------
Chú ý!
----------------------------------------------------------------------

Nếu như bạn không kích hoạt lấy lại mật khẩu, hãy lập tức xóa ngay bức thư này!

----------------------------------------------------------------------
Lấy lại mật khẩu
----------------------------------------------------------------------

Link dưới đây có thời hạn 3 ngày :
{$boardurl}member.php?action=getpasswd&uid=$member[uid]&id=$idstring
(Nếu như bạn không thấy liên kết, xin hãy copy & paste vào trình duyệt!)
Link ở trên sẽ tự động mở trang mới, Bạn chỉ cần nhập mật khẩu mới là 
hoàn tất. Bạn cũng có thể thay đổi mật khẩu tại Bảng điều khiển cá nhân.
IP của bạn là: $onlineip

Thân

Diễn đàn $bbname.
$boardurl',


	'email_verify_subject' =>	'Email',
	'email_verify_message' =>	'
$discuz_userss
Bức thư này đã được gửi từ $bbname .

Bạn nhận được bức thư này là do lúc bạn đăng ký đánh dấu vào phần nhận 
email của Ban quản trị, hoặc lúc đổi email có dùng. Nếu như bạn chưa 
từng tham gia diễn đàn này lần nào thì xin mời xóa nó ngay lập tức và 
chúng tôi xin chân thành cáo lỗi.

----------------------------------------------------------------------
Phần kích hoạt
----------------------------------------------------------------------

Bạn là một thành viên mới của diễn đàn, hoặc bạn đã là thành viên muốn 
thay đổi email mới. Để phòng ngừa lạm dụng email và để bạn được hưởng 
đầy đủ mọi quyền lời của diễn đàn.

Bạn chỉ cần bấm vào liên kết ở dưới để kích hoạt email :


{$boardurl}member.php?action=activate&uid=$discuz_uid&id=$idstring

(Nếu như không hiển thị link liên kết, xin hãy copy và paste 
vào trình duyệt web của bạn!)

Cảm ơn bạn đã tham gia diễn đàn. Chúc bạn một ngày tốt lành!



Thân chào

Quản lý diễn đàn $bbname.
$boardurl',


	'email_notify_subject' =>	'Bài trả lời mới $thread[subject]',
	'email_notify_message' =>	'
Chào bạn,
Bức thư này được gửi từ diễn đàn $bbname

Bạn nhận được bức thư này là do lúc bạn viết bài có đánh dâu quan tâm 
đến chủ đè này` và trong vòng 24 giờ vừa qua có bài trả lời mới, nếu 
bạn chưa làm qua hành động này thì xin mời cứ thẳng tay xóa thư này nhé!

----------------------------------------------------------------------
Thông tin chi tiết
----------------------------------------------------------------------
Link (URL):  {$boardurl}viewthread.php?tid=$thread[tid]
Chủ đề: $thread[subject]
Tác giả: $thread[author]
Xem: $thread[views]
Trả lời: $thread[replies]

Bài viết : $thread[lastposter] viết trả lời $thread[lastpost] .

Bạn đặt chú ý cho bài viết có thể rất nhiều bài viết, để không làm ảnh
hưởng đến hòm thư của bạn. 24 giờ chúng tôi gửi cho bạn một bức thư duy nhất.



Thân chào

Ban quản trị $bbname.
$boardurl',


	'add_member_subject' =>		'Bạn đã được thêm vào danh sách bè bạn',
	'add_member_message' => 	'
$newusername .
Bức thư này được gửi từ $bbname

Tôi là $discuz_userss, quản lý diễn đàn $bbname. Bạn nhận được bức thư
này bởi vì có người trong diễn đàn đã thêm bạn vào danh sách thành viên,
do đó hệ thống đã gửi email đến thông báo cho bạn biết.

----------------------------------------------------------------------
Chú ý!
----------------------------------------------------------------------

Nếu bạn không quan tâm hoặc không muốn làm thành viên diễn đàn, 
xin mời xóa bức thư này.

----------------------------------------------------------------------
Thông tin tài khoản
----------------------------------------------------------------------

Tên diễn đàn: $bbname
Địa chỉ: $boardurl

Tài khoản: $newusername
Mật khẩu: $newpassword

Ngay từ bây giờ các bạn có thể đăng nhập vào diễn đàn. 
Chúc bạn có một ngày thật vui vẻ!



Thân chào!

Quản trị $bbname.
$boardurl',


	'birthday_subject' =>		'Chúc bạn sinh nhật vui vẻ',
	'birthday_message' => 		'
$member[username]
Bức thư này được gửi từ $bbname

Bạn nhận được bức thư này là do lúc đăng ký có nhận email thông tin
từ diễn đàn.
Hôm nay là sinh nhật của bạn, lúc này chắc bạn đang cùng bè bạn vui vẻ,
chúng tôi cũng vui cùng bạn, hy vọng sang tuổi mới bạn sẽ thêm nhiều 
cái mới, vui cùng diễn đàn nhiều hơn. Cuối cùng xin chúc bạn một ngày
thật vui vẻ và tràn đầy hạnh phúc.

Nếu như bạn không phải mem của diễn đàn, hoặc hôm nay không phải là 
sinh nhật của bạn, có thể có người đang dùng email của bạn đăng ký trong 
diễn đàn. Xin mời lập tức xóa ngay email này. Xin cảm ơn,



Thân chào!

Ban quản trị $bbname.
$boardurl',


	'email_to_friend_subject' =>	'$discuz_userss giới thiệu đến bạn chủ đề: $thread[subject]',
	'email_to_friend_message' =>	'
Bức thư này được gửi từ diễn đàn $bbname 
và thành viên $discuz_userss gửi tặng bạn

Bạn nhận được bức thư này từ thành viên $discuz_userss giới thiệu cho 
bạn bài hay. Nếu bạn không quan tâm cứ việc xóa thẳng tay!

----------------------------------------------------------------------
Tin tức
----------------------------------------------------------------------

$message

----------------------------------------------------------------------
Kết thúc
----------------------------------------------------------------------

Xin chú ý, đây là thư được gửi do chức năng "Giới thiệu cho bạn bè" - 
không phải thư của Ban quản trị, nên BQT không chịu trách nhiệm về 
nội dung được đăng trong bức thư.

Chào mừng bạn đến với $bbname
$boardurl',

	'email_to_invite_subject' =>	'Thành viên $discuz_userss gửi mã kích hoạt $bbname cho bạn',
	'email_to_invite_message' =>	'
$sendtoname,
Bức thư này được gửi từ thành viên $discuz_userss.

Bạn nhận được bức thư này là do thành viên $discuz_userss gửi tặng bạn 
mã kích hoạt. Nếu không quan tâm, xin bạn hãy xóa bức thư này

----------------------------------------------------------------------
Bắt đầu
----------------------------------------------------------------------

$message

----------------------------------------------------------------------
Kết thúc
----------------------------------------------------------------------

Chú ý, đây là thư do thành viên gửi tặng mã kích hoạt cho bạn - không
phải thư của Ban quản trị, nên BQT không chịu trách nhiệm về nội dung
được đăng trong bức thư.

Chào mừng bạn đến với $bbname
$boardurl',


	'moderate_member_subject' =>	'Kích hoạt cho thành viên',
	'moderate_member_message' =>	'
$member[username] 
Bức thư này dược gửi từ $bbname
Đây là bức thư kích hoạt của thành viên
----------------------------------------------------------------------
Thời gian đăng ký và kết quả
----------------------------------------------------------------------

Tên đăng nhập: $member[username]
Ngày tham gia: $member[regdate]
Thời gian gửi: $member[submitdate]
Số lần gửi: $member[submittimes]
Lý do đăng ký: $member[message]

Kết quả kiểm tra: {$language[\'moderate_member_\'.$member[operation]]}
Thời gian kiểm tra: $member[moddate]
Người kiểm tra: $discuz_userss
Lời nhận xét: $member[remark]

----------------------------------------------------------------------
Kết quả
----------------------------------------------------------------------

Duyệt: Đăng kí thành công. Bạn đã là thành viên chính thức của diễn đàn! 

Từ chối: Mẫu đăng kí của bạn không hoàn chỉnh, hoặc chưa đủ điều kiện.
Bạn có thể để lại lời nhắn cho quản trị diễn đàn.

Xóa bỏ: Mẫu đăng ký của bạn đã bị chúng tôi xóa bỏ vì có sự sai lầm trong đó,
hoặc mẫu đăng ký của bạn đã quá hạn. Xin được thứ lỗi!


Thân chào

Ban quản trị $bbname
$boardurl'

);

?>