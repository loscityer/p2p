<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_template_permission`;");
E_C("CREATE TABLE `pre_common_template_permission` (
  `targettplname` varchar(100) NOT NULL DEFAULT '',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `allowmanage` tinyint(1) NOT NULL DEFAULT '0',
  `allowrecommend` tinyint(1) NOT NULL DEFAULT '0',
  `needverify` tinyint(1) NOT NULL DEFAULT '0',
  `inheritedtplname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`targettplname`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>