<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_friendlink`;");
E_C("CREATE TABLE `pre_common_friendlink` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT '',
  `type` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_friendlink` values('1','0','�ٷ���̳','http://www.discuz.net','�ṩ���� Discuz! ��Ʒ���š���������뼼������','static/image/common/logo_88_31.gif','2');");
E_D("replace into `pre_common_friendlink` values('2','4','�ҵ����','http://www.5d6d.com/','','','2');");
E_D("replace into `pre_common_friendlink` values('3','2','����ƽ̨','http://www.manyou.com/','','','2');");
E_D("replace into `pre_common_friendlink` values('4','3','Yeswan','http://www.yeswan.com','','','2');");
E_D("replace into `pre_common_friendlink` values('5','1','Comsenz','http://www.comsenz.com','','','2');");

require("../../inc/footer.php");
?>