<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_member_field_home`;");
E_C("CREATE TABLE `pre_common_member_field_home` (
  `uid` mediumint(8) unsigned NOT NULL,
  `videophoto` varchar(255) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacedescription` varchar(255) NOT NULL DEFAULT '',
  `domain` char(15) NOT NULL DEFAULT '',
  `addsize` int(10) unsigned NOT NULL DEFAULT '0',
  `addfriend` smallint(6) unsigned NOT NULL DEFAULT '0',
  `menunum` smallint(6) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(20) NOT NULL DEFAULT '',
  `spacecss` text NOT NULL,
  `blockposition` text NOT NULL,
  `recentnote` text NOT NULL,
  `spacenote` text NOT NULL,
  `privacy` text NOT NULL,
  `feedfriend` mediumtext NOT NULL,
  `acceptemail` text NOT NULL,
  `magicgift` text NOT NULL,
  `stickblogs` text NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_member_field_home` values('1','','','','','0','0','0','','','','','','','','','','');");
E_D("replace into `pre_common_member_field_home` values('53','','','','','0','0','0','','','','','','','','','','');");
E_D("replace into `pre_common_member_field_home` values('1302','','','','','0','0','0','','','','','','','','','','');");
E_D("replace into `pre_common_member_field_home` values('1301','','','','','0','0','0','','','','','','','','','','');");
E_D("replace into `pre_common_member_field_home` values('1288','','','','','0','0','0','','','','','','','','','','');");
E_D("replace into `pre_common_member_field_home` values('1279','','','','','0','0','0','','','','','','','','','','');");
E_D("replace into `pre_common_member_field_home` values('1020','','','','','0','0','0','','','','��ϵͳ�����ˣ��Ͽ�������һ�°ɣ�','','','','','','');");

require("../../inc/footer.php");
?>