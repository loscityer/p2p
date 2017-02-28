<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_home_click`;");
E_C("CREATE TABLE `pre_home_click` (
  `clickid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL DEFAULT '',
  `icon` char(100) NOT NULL DEFAULT '',
  `idtype` char(15) NOT NULL DEFAULT '',
  `available` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`clickid`),
  KEY `idtype` (`idtype`,`displayorder`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `pre_home_click` values('1','·��','luguo.gif','blogid','1','0');");
E_D("replace into `pre_home_click` values('2','����','leiren.gif','blogid','1','0');");
E_D("replace into `pre_home_click` values('3','����','woshou.gif','blogid','1','0');");
E_D("replace into `pre_home_click` values('4','�ʻ�','xianhua.gif','blogid','1','0');");
E_D("replace into `pre_home_click` values('5','����','jidan.gif','blogid','1','0');");
E_D("replace into `pre_home_click` values('6','Ư��','piaoliang.gif','picid','1','0');");
E_D("replace into `pre_home_click` values('7','���','kubi.gif','picid','1','0');");
E_D("replace into `pre_home_click` values('8','����','leiren.gif','picid','1','0');");
E_D("replace into `pre_home_click` values('9','�ʻ�','xianhua.gif','picid','1','0');");
E_D("replace into `pre_home_click` values('10','����','jidan.gif','picid','1','0');");
E_D("replace into `pre_home_click` values('11','·��','luguo.gif','aid','1','0');");
E_D("replace into `pre_home_click` values('12','����','leiren.gif','aid','1','0');");
E_D("replace into `pre_home_click` values('13','����','woshou.gif','aid','1','0');");
E_D("replace into `pre_home_click` values('14','�ʻ�','xianhua.gif','aid','1','0');");
E_D("replace into `pre_home_click` values('15','����','jidan.gif','aid','1','0');");

require("../../inc/footer.php");
?>