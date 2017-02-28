<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_scrollpic`;");
E_C("CREATE TABLE `yyd_scrollpic` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` smallint(2) unsigned NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `flag` smallint(6) DEFAULT NULL,
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `url` char(60) NOT NULL DEFAULT '',
  `name` char(100) NOT NULL DEFAULT '',
  `pic` char(200) NOT NULL DEFAULT '',
  `summary` char(250) NOT NULL DEFAULT '',
  `hits` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `addip` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_scrollpic` values('11','0','1','10',NULL,'1','','野野','data/upfiles/images/2014-02/28/1_scrollpic_new_13936003325.jpg','','0','1393600332','115.197.209.39');");
E_D("replace into `yyd_scrollpic` values('7','0','1','10',NULL,'1','','野野','data/upfiles/images/2014-02/28/1_scrollpic_new_13936004095.jpg','野野','0','1393500717','114.221.188.247');");
E_D("replace into `yyd_scrollpic` values('10','0','1','10',NULL,'1','','野野','data/upfiles/images/2014-02/28/1_scrollpic_new_13936005154.jpg','','0','1393518226','110.114.125.242');");

require("../../inc/footer.php");
?>