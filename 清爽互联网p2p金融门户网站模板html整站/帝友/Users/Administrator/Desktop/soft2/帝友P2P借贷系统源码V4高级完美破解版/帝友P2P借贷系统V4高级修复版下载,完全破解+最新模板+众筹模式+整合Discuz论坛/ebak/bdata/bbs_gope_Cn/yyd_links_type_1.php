<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_links_type`;");
E_C("CREATE TABLE `yyd_links_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_links_type` values('1','�������ۺ�ƽ̨��');");
E_D("replace into `yyd_links_type` values('2','���������ߡ�');");
E_D("replace into `yyd_links_type` values('3','����ѯƽ̨��');");
E_D("replace into `yyd_links_type` values('4','�������������ӡ�');");

require("../../inc/footer.php");
?>