<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_credit_class`;");
E_C("CREATE TABLE `yyd_credit_class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_credit_class` values('3','������','borrow');");
E_D("replace into `yyd_credit_class` values('4','���','tender');");
E_D("replace into `yyd_credit_class` values('6','���û���','credit');");

require("../../inc/footer.php");
?>