<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_member_security`;");
E_C("CREATE TABLE `pre_common_member_security` (
  `securityid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `fieldid` varchar(255) NOT NULL DEFAULT '',
  `oldvalue` text NOT NULL,
  `newvalue` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`securityid`),
  KEY `uid` (`uid`,`fieldid`),
  KEY `dateline` (`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>