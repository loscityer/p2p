<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_block_pic`;");
E_C("CREATE TABLE `pre_common_block_pic` (
  `picid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `itemid` int(10) unsigned NOT NULL DEFAULT '0',
  `pic` varchar(255) NOT NULL DEFAULT '',
  `picflag` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`picid`),
  KEY `bid` (`bid`,`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>