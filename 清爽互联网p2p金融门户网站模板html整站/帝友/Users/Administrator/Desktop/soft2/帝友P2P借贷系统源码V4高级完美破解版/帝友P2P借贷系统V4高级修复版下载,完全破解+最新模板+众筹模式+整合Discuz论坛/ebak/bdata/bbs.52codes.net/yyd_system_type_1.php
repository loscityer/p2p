<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_system_type`;");
E_C("CREATE TABLE `yyd_system_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_system_type` values('1','vip','vip����','borrow','1','','');");
E_D("replace into `yyd_system_type` values('2','borrow','������','borrow','1','','');");
E_D("replace into `yyd_system_type` values('3','account','�ʽ����','links','1','','');");
E_D("replace into `yyd_system_type` values('4','fengxianjin','���ս��շ�','borrow','1','','');");
E_D("replace into `yyd_system_type` values('5','spread','�ƹ����','account','1','','');");
E_D("replace into `yyd_system_type` values('6','other','����','spread','1','','');");

require("../../inc/footer.php");
?>