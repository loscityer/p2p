<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_forum_onlinelist`;");
E_C("CREATE TABLE `pre_forum_onlinelist` (
  `groupid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `pre_forum_onlinelist` values('1','1','����Ա','online_admin.gif');");
E_D("replace into `pre_forum_onlinelist` values('2','2','��������','online_supermod.gif');");
E_D("replace into `pre_forum_onlinelist` values('3','3','����','online_moderator.gif');");
E_D("replace into `pre_forum_onlinelist` values('0','4','��Ա','online_member.gif');");

require("../../inc/footer.php");
?>