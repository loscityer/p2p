<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_style`;");
E_C("CREATE TABLE `pre_common_style` (
  `styleid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `templateid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `extstyle` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_style` values('1','Ĭ�Ϸ��','1','1','t1	t2	t3	t4	t5|');");
E_D("replace into `pre_common_style` values('2','Singcere_note','1','2','|');");

require("../../inc/footer.php");
?>