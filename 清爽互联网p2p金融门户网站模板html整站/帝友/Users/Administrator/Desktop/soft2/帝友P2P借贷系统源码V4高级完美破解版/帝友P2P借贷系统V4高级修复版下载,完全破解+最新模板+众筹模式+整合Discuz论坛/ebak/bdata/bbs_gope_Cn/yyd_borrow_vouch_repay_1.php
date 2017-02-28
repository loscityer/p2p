<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_borrow_vouch_repay`;");
E_C("CREATE TABLE `yyd_borrow_vouch_repay` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `borrow_nid` varchar(50) NOT NULL,
  `order` int(2) DEFAULT NULL,
  `repay_time` varchar(50) DEFAULT NULL COMMENT '??????????',
  `repay_yestime` varchar(50) DEFAULT NULL COMMENT '??????????',
  `repay_account` varchar(50) DEFAULT '0' COMMENT '???????',
  `repay_yesaccount` varchar(50) DEFAULT '0' COMMENT '???????',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>