<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_users_admin`;");
E_C("CREATE TABLE `yyd_users_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `adminname` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `purview` longtext NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  `update_time` varchar(50) NOT NULL,
  `update_ip` varchar(50) NOT NULL,
  `logintimes` int(50) NOT NULL DEFAULT '0',
  `login_time` varchar(50) NOT NULL,
  `login_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_users_admin` values('1','admin','1','310606aa9a0e4a8a3460b1c8f0c7a67a','1','众和贷','','439','451','','','1376101802','127.0.0.1','1411207885','127.0.0.1','2449','1411207446','127.0.0.1');");
E_D("replace into `yyd_users_admin` values('47','客服','1934','741a627471982d84d67177464d006a01','3','我是客服我怕谁','','1','2','1874578390','13161103551','1383813609','113.134.32.246','1399718206','124.207.38.24','0','','');");

require("../../inc/footer.php");
?>