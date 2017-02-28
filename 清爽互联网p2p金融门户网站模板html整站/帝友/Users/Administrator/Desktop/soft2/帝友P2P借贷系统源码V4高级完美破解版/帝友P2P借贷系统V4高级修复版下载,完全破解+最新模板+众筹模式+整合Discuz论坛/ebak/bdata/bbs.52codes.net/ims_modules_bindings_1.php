<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_modules_bindings`;");
E_C("CREATE TABLE `ims_modules_bindings` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(30) NOT NULL DEFAULT '',
  `entry` varchar(10) NOT NULL DEFAULT '',
  `call` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL,
  `do` varchar(30) NOT NULL,
  `state` varchar(200) NOT NULL,
  `direct` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ims_modules_bindings` values('1','fans','menu','','粉丝管理选项','settings','','0');");
E_D("replace into `ims_modules_bindings` values('2','fans','menu','','地理位置分布','location','','0');");
E_D("replace into `ims_modules_bindings` values('3','fans','menu','','粉丝分组','group','','0');");
E_D("replace into `ims_modules_bindings` values('4','fans','menu','','粉丝列表','display','','0');");
E_D("replace into `ims_modules_bindings` values('5','fans','profile','','我的资料','profile','','0');");
E_D("replace into `ims_modules_bindings` values('6','member','menu','','消费密码管理','password','','0');");
E_D("replace into `ims_modules_bindings` values('7','member','profile','','我的会员卡','mycard','','0');");
E_D("replace into `ims_modules_bindings` values('8','member','menu','','优惠券管理','coupon','','0');");
E_D("replace into `ims_modules_bindings` values('9','member','menu','','商家设置','store','','0');");
E_D("replace into `ims_modules_bindings` values('10','member','menu','','会员管理','member','','0');");
E_D("replace into `ims_modules_bindings` values('11','member','menu','','会员卡设置','card','','0');");
E_D("replace into `ims_modules_bindings` values('12','member','cover','','优惠券入口设置','entrycoupon','','0');");
E_D("replace into `ims_modules_bindings` values('13','member','cover','','会员卡入口设置','card','','0');");
E_D("replace into `ims_modules_bindings` values('14','member','profile','','我的充值记录','mycredit','','0');");
E_D("replace into `ims_modules_bindings` values('15','member','profile','','我的优惠券','entrycoupon','','0');");

require("../../inc/footer.php");
?>