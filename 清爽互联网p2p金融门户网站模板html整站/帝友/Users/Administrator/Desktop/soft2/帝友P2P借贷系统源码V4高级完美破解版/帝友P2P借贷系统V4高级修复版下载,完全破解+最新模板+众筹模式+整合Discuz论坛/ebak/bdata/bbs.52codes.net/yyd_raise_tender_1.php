<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_raise_tender`;");
E_C("CREATE TABLE `yyd_raise_tender` (
  `tender_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tender_account` decimal(11,2) DEFAULT '0.00',
  `user_id` int(11) DEFAULT '0',
  `raise_id` int(11) DEFAULT '0',
  `message` varchar(255) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  PRIMARY KEY (`tender_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_raise_tender` values('1','100.00','1934','1','您一定要加油哦，我们支持下','1388378393','124.156.66.22','0');");

require("../../inc/footer.php");
?>