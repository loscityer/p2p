<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_connect_disktask`;");
E_C("CREATE TABLE `pre_connect_disktask` (
  `taskid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `openid` char(32) NOT NULL DEFAULT '',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `verifycode` char(32) NOT NULL DEFAULT '',
  `status` smallint(6) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `downloadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `extra` text,
  PRIMARY KEY (`taskid`),
  KEY `openid` (`openid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>