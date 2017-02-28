<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_links`;");
E_C("CREATE TABLE `yyd_links` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` smallint(2) unsigned NOT NULL DEFAULT '0',
  `order` smallint(6) NOT NULL DEFAULT '0',
  `flag` smallint(6) DEFAULT NULL,
  `type_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `url` char(60) NOT NULL DEFAULT '',
  `webname` char(30) NOT NULL DEFAULT '',
  `summary` char(200) NOT NULL DEFAULT '',
  `linkman` char(50) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `logo` char(100) NOT NULL DEFAULT '',
  `logoimg` char(100) NOT NULL DEFAULT '',
  `province` char(10) NOT NULL DEFAULT '',
  `city` char(10) NOT NULL DEFAULT '',
  `area` char(10) NOT NULL DEFAULT '',
  `hits` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `addip` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_links` values('3','0','1','10',NULL,'1','http://123.668zg.com','中国农业银行','','','','','3621','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('2','0','1','10',NULL,'1','http://123.668zg.com/','中国银行','','','','','3622','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('4','0','1','10',NULL,'1','http://123.668zg.com/','财付通','','','','','3623','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('5','0','1','10',NULL,'1','http://123.668zg.com/','支付宝','','','','','3626','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('6','0','1','10',NULL,'1','http://123.668zg.com/','平安银行','','','','','3627','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('7','0','1','10',NULL,'1','http://123.668zg.com/','建设银行','','','','','3628','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('8','0','1','10',NULL,'2','http://123.668zg.com/','工商银行','','','','','3629','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('15','0','1','10',NULL,'4','http://bbs.gope.cn','源码论坛','','','','','','','','','0','1399716657','124.207.38.24');");
E_D("replace into `yyd_links` values('10','0','1','10',NULL,'3','https://ipcrs.pbccrc.org.cn/','人民银行征信中心','','','','','','','','','0','1376101802','123.145.29.175');");
E_D("replace into `yyd_links` values('16','0','1','10',NULL,'1','http://www.ygidc.com','免备案主机','','','','','','','','','0','1399716677','124.207.38.24');");
E_D("replace into `yyd_links` values('17','0','1','1',NULL,'4','http://dir.gope.cn','网站目录','','','','','','','','','0','1409742820','127.0.0.1');");
E_D("replace into `yyd_links` values('18','0','1','10',NULL,'4','http://yun.gope.cn','免费VPS','','','','','','','','','0','1409742847','127.0.0.1');");

require("../../inc/footer.php");
?>