<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_account_payment`;");
E_C("CREATE TABLE `yyd_account_payment` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '????',
  `nid` varchar(100) DEFAULT NULL COMMENT '?????',
  `status` smallint(3) unsigned DEFAULT '0' COMMENT '??',
  `litpic` varchar(100) NOT NULL COMMENT '?????',
  `style` int(2) DEFAULT NULL COMMENT '????',
  `config` longtext COMMENT '???????',
  `description` longtext COMMENT '????',
  `order` smallint(3) unsigned DEFAULT '0' COMMENT '????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>