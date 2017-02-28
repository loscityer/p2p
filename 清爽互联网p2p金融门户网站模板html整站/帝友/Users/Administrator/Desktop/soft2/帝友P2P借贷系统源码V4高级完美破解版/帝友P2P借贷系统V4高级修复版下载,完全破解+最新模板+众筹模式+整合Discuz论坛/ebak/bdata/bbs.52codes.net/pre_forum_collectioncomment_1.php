<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_forum_collectioncomment`;");
E_C("CREATE TABLE `pre_forum_collectioncomment` (
  `cid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ctid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(15) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `useip` varchar(16) NOT NULL DEFAULT '',
  `rate` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `ctid` (`ctid`,`dateline`),
  KEY `userrate` (`ctid`,`uid`,`rate`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>