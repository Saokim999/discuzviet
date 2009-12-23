<?php

/*
	[Discuz!] (C)2001-2006 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$RCSfile: config5.inc.php,v $
	$Revision: 1.9 $
	$Date: 2007/01/26 01:11:32 $
*/

// [CH] Neu co cau hoi nao moi ban vao http://traitimyenbai.net .Duoi day la cac muc dien tham so, tai khoan CSDL. 

	$dbhost = 'localhost';		// Server Nam : Thuong dat la localhost
	$dbuser = 'username';		// Database User Name
	$dbpw = '';				// Database Password
	$dbname = 'discuz';			// Database Name
	$pconnect = 0;				// Persistent database connection 0 = closed, 1 = Open

// [CH] Mysql Secondary server settings, only when you have more than one Mysql Server when you work together and set

	$multiserver = array();		// Server variable initialization, do not modify or delete
	
// [CH] Bien doi de phu hoi cac nhu cau dang nhap dien dan. Ban co the de mac dinh

	$cookiepre = 'cdb_';		// cookie perfix
	$cookiedomain = ''; 		// cookie Scope
	$cookiepath = '/';			// cookie The role of path

// [CH] Forum in use can not be changed after the variable

	$tablepre = 'cdb_';   		// Table Perfix. Dung de thay doi ten table. tranh bi trung khi cai nhieu ma nguon

// [CH] Can than thay doi cac tuy bien sau vi se anh huong den dien dan

	$database = 'mysql';		// Loai CSDL. Tuyet doi khong thay doi
	$dbcharset = '';			// MySQL ky tu dat ko bat buoc 'gbk', 'big5', 'utf8', 'latin1', De trong tu dong cai dat ma phu hop

	$charset = 'utf-8';			// Dat ky tu mac dinh cho dien dan, tuy chon 'gbk', 'big5', 'utf-8'
	$headercharset = 0;			// Mandatory forum pages use the default character set to avoid some server space page appears garbled, the general need to open. 0 = closed 1 = open

	$tplrefresh = 1;			// Skin dien dan tu dong lam moi. De 1 la tu dong. 0 la tat.

// [CH] Cai dat bao mat cho dien dan traitimyenbai.net

	$adminemail = 'admin@your.com';		//  Email cua Admin

	$forumfounders = '';		// ID của Root Admin, co the dung dau "," de phan cach giua cac id
								// Neu ban dien id cua admin khac, thi coi nhu dong sang lap va co quyen ngang nhau.

	$dbreport = 0;		// Khi co loi database, he thong se gui thong bao toi email Admin. Dat 0 = tat, 1 = Mo

	$errorreport = 1;	// Bao loi: 0 = mask all errors (Safety), 1 cho admin va mod, 2 bao cho tat ca

	$attackevasive = 0;	// Cau hinh de co the chan so luong lon yeu cau tu choi tan cong tu choi dich vu
						// So luong yeu cau de han che tan cong
						// 0=dong, 1=cookie= thiet lap gioi han, 2=Quy dinh han che truy cap, 4=Yeu cau thu 2, 8=Lan truy cap dau tien can tra loi cau hoi
						// Co the ket hop nhu sau: 1|2, 1|4, 2|8, 1|2|4...
	
	$urlxssdefend = 1;		// Forum defensive switch access page, users can avoid the url address of the illegal users of the site detrimental, it is recommended to open. 1 = open 0 closed

	$admincp = array();
	$admincp['forcesecques'] = 0;	// Yeu cau bat buoc Admin phai cai dat cau hoi bao mat moi vao dc AdminCp 0= tat 1 = mo
	$admincp['checkip'] = 1;		// Cho phep admin co the xac minh ip an toan ko. 
	$admincp['tpledit'] = 0;		// Cho phep sua truc tuyen cac file. Khong an toan. Nen dat =0
	$admincp['runquery'] = 0;		// Cho phep admin chay Query SQL trong Admincp  1=co 0=tat ( an toan)
	$admincp['dbimport'] = 0;		// Cho phep admin Import Data. 1= mo, 0= tat ( an toan)

// ============================================================================

