<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_forum_collectionteamworker`;");
E_C("CREATE TABLE `pre_forum_collectionteamworker` (
  `ctid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(15) NOT NULL DEFAULT '',
  `lastvisit` int(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ctid`,`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>