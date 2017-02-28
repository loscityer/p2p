<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_site_styles`;");
E_C("CREATE TABLE `ims_site_styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL DEFAULT '0',
  `templateid` int(10) unsigned NOT NULL COMMENT '风格ID',
  `variable` varchar(50) NOT NULL COMMENT '模板预设变量',
  `content` text NOT NULL COMMENT '变量值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ims_site_styles` values('1','1','1','indexbgcolor','#e06666');");
E_D("replace into `ims_site_styles` values('2','1','1','fontfamily','Tahoma,Helvetica,''SimSun'',sans-serif');");
E_D("replace into `ims_site_styles` values('3','1','1','fontsize','12px/1.5');");
E_D("replace into `ims_site_styles` values('4','1','1','fontcolor','#434343');");
E_D("replace into `ims_site_styles` values('5','1','1','fontnavcolor','#ffffff');");
E_D("replace into `ims_site_styles` values('6','1','1','linkcolor','#ffffff');");
E_D("replace into `ims_site_styles` values('7','1','1','indexbgimg','bg_index.jpg');");

require("../../inc/footer.php");
?>