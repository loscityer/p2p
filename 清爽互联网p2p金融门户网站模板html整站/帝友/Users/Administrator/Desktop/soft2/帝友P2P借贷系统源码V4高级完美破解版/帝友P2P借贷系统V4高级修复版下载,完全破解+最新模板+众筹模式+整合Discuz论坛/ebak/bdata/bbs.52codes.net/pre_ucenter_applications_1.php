<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_ucenter_applications`;");
E_C("CREATE TABLE `pre_ucenter_applications` (
  `appid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(16) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `authkey` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `viewprourl` varchar(255) NOT NULL,
  `apifilename` varchar(30) NOT NULL DEFAULT 'uc.php',
  `charset` varchar(8) NOT NULL DEFAULT '',
  `dbcharset` varchar(8) NOT NULL DEFAULT '',
  `synlogin` tinyint(1) NOT NULL DEFAULT '0',
  `recvnote` tinyint(1) DEFAULT '0',
  `extra` text NOT NULL,
  `tagtemplates` text NOT NULL,
  `allowips` text NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `pre_ucenter_applications` values('1','DISCUZX','帝友p2p借贷交流论坛','http://demo.wanpin123.com/bbs','096bfgVjSSn3W5XmxxQDScUu6xMOaiyae44a6t2bl7RN+ACVnpmW7hO+dZYtPYGo+qOgq36Y5e6Nhb8+REcNKxPHn9jQxcNATO/Axeq0qcpXCNpXwm+2dxFMusJT','','','uc.php','','','1','1','a:2:{s:7:\"apppath\";s:0:\"\";s:8:\"extraurl\";a:0:{}}','<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n	<item id=\"template\"><![CDATA[]]></item>\r\n</root>','');");
E_D("replace into `pre_ucenter_applications` values('2','OTHER','帝友p2p v4.0借贷系统主站','http://demo.wanpin123.com/modules/ucenter','ee7bRaiFwDPNB8zulKbYhhbeCvFykfYuHdNEUA7cbIuerS3XhCyQ3r4T7vc+9fjqWQpWZN9/rIOgmQT3h/A1KSeAPbrAI61vk4GDm60sllO/D/v5LniNnutCFIWU','','','uc.php','','','1','1','a:2:{s:7:\"apppath\";s:0:\"\";s:8:\"extraurl\";a:0:{}}','<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n	<item id=\"template\"><![CDATA[]]></item>\r\n</root>','');");

require("../../inc/footer.php");
?>