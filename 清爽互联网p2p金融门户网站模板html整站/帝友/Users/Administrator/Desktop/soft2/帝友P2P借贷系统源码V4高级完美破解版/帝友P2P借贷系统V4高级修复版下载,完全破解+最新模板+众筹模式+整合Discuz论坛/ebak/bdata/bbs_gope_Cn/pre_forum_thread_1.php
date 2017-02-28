<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_forum_thread`;");
E_C("CREATE TABLE `pre_forum_thread` (
  `tid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `fid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `posttableid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `sortid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `readperm` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `price` smallint(6) NOT NULL DEFAULT '0',
  `author` char(15) NOT NULL DEFAULT '',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `subject` char(80) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `lastpost` int(10) unsigned NOT NULL DEFAULT '0',
  `lastposter` char(15) NOT NULL DEFAULT '',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(1) NOT NULL DEFAULT '0',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `digest` tinyint(1) NOT NULL DEFAULT '0',
  `rate` tinyint(1) NOT NULL DEFAULT '0',
  `special` tinyint(1) NOT NULL DEFAULT '0',
  `attachment` tinyint(1) NOT NULL DEFAULT '0',
  `moderated` tinyint(1) NOT NULL DEFAULT '0',
  `closed` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `stickreply` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `recommends` smallint(6) NOT NULL DEFAULT '0',
  `recommend_add` smallint(6) NOT NULL DEFAULT '0',
  `recommend_sub` smallint(6) NOT NULL DEFAULT '0',
  `heats` int(10) unsigned NOT NULL DEFAULT '0',
  `status` smallint(6) unsigned NOT NULL DEFAULT '0',
  `isgroup` tinyint(1) NOT NULL DEFAULT '0',
  `favtimes` mediumint(8) NOT NULL DEFAULT '0',
  `sharetimes` mediumint(8) NOT NULL DEFAULT '0',
  `stamp` tinyint(3) NOT NULL DEFAULT '-1',
  `icon` tinyint(3) NOT NULL DEFAULT '-1',
  `pushedaid` mediumint(8) NOT NULL DEFAULT '0',
  `cover` smallint(6) NOT NULL DEFAULT '0',
  `replycredit` smallint(6) NOT NULL DEFAULT '0',
  `relatebytag` char(255) NOT NULL DEFAULT '0',
  `maxposition` int(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `digest` (`digest`),
  KEY `sortid` (`sortid`),
  KEY `displayorder` (`fid`,`displayorder`,`lastpost`),
  KEY `typeid` (`fid`,`typeid`,`displayorder`,`lastpost`),
  KEY `recommends` (`recommends`),
  KEY `heats` (`heats`),
  KEY `authorid` (`authorid`),
  KEY `isgroup` (`isgroup`,`lastpost`),
  KEY `special` (`special`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `pre_forum_thread` values('19','37','0','0','0','0','0','tianjin','1020','��ϵͳ�����ˣ��Ͽ�������һ�°ɣ�','1380414826','1380414826','tianjin','97','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','20','0','0','0','0','0');");

require("../../inc/footer.php");
?>