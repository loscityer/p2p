<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_site_nav`;");
E_C("CREATE TABLE `ims_site_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `module` varchar(50) NOT NULL DEFAULT '',
  `displayorder` smallint(5) unsigned NOT NULL COMMENT '排序',
  `name` varchar(50) NOT NULL COMMENT '导航名称',
  `description` varchar(1000) NOT NULL DEFAULT '',
  `position` tinyint(4) NOT NULL DEFAULT '1' COMMENT '显示位置，1首页，2个人中心',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `icon` varchar(500) NOT NULL DEFAULT '' COMMENT '图标',
  `css` varchar(1000) NOT NULL DEFAULT '' COMMENT '扩展CSS',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '0为隐藏，1为显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>