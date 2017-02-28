<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_users_friends_invite`;");
E_C("CREATE TABLE `yyd_users_friends_invite` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '???',
  `friends_userid` int(11) DEFAULT '0' COMMENT '????',
  `status` int(2) DEFAULT '0' COMMENT '??',
  `type` int(2) DEFAULT '0',
  `content` varchar(250) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=gbk COMMENT='??????'");
E_D("replace into `yyd_users_friends_invite` values('43','1781','1933','1','1',NULL,'1383702353','127.0.0.1');");

require("../../inc/footer.php");
?>