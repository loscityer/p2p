<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_news_reply`;");
E_C("CREATE TABLE `ims_news_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumb` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ims_news_reply` values('1','2','0','这里是默认图文回复','这里是默认图文描述','images/2013/01/d090d8e61995e971bb1f8c0772377d.png','这里是默认图文原文这里是默认图文原文这里是默认图文原文','');");
E_D("replace into `ims_news_reply` values('2','2','1','这里是默认图文回复内容','','images/2013/01/112487e19d03eaecc5a9ac87537595.jpg','这里是默认图文回复原文这里是默认图文回复原文<br />','');");

require("../../inc/footer.php");
?>