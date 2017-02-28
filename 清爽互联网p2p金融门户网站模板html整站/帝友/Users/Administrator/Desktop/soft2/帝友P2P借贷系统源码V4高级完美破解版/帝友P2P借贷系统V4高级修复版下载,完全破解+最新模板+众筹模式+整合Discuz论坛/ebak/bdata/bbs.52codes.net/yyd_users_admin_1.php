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
E_D("replace into `yyd_users_admin` values('1','admin','1','40e84b91b26c5e06bb1cb5cb44ff4ec2','1','ึฺบอด๛','','439','451','468658901','','1376101802','127.0.0.1','1411623581','127.0.0.1','2450','1411622637','127.0.0.1');");

require("../../inc/footer.php");
?>