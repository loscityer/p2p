<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_home_friend`;");
E_C("CREATE TABLE `pre_home_friend` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `fuid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `fusername` varchar(15) NOT NULL DEFAULT '',
  `gid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `num` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`,`fuid`),
  KEY `fuid` (`fuid`),
  KEY `uid` (`uid`,`num`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>