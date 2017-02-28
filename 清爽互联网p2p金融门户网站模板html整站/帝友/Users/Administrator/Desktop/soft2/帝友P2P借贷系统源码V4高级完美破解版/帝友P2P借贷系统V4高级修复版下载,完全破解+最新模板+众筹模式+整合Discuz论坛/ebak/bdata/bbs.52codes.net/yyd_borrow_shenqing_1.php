<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_borrow_shenqing`;");
E_C("CREATE TABLE `yyd_borrow_shenqing` (
  `s_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `borrow_period` double(10,2) NOT NULL DEFAULT '0.00',
  `borrow_style` varchar(100) NOT NULL,
  `account` varchar(50) DEFAULT '',
  `borrow_type` varchar(100) NOT NULL,
  `borrow_use` varchar(100) NOT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `verify_time` varchar(50) DEFAULT NULL,
  `verify_remark` varchar(255) DEFAULT NULL,
  `verify_userid` int(10) unsigned NOT NULL DEFAULT '0',
  `b_enterprise` varchar(50) DEFAULT NULL,
  `b_regist` varchar(50) DEFAULT NULL,
  `b_legal` varchar(50) DEFAULT NULL,
  `b_card` varchar(50) DEFAULT NULL,
  `b_tel` varchar(50) DEFAULT NULL,
  `b_phone` varchar(50) DEFAULT NULL,
  `b_agent` varchar(50) DEFAULT NULL,
  `b_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>