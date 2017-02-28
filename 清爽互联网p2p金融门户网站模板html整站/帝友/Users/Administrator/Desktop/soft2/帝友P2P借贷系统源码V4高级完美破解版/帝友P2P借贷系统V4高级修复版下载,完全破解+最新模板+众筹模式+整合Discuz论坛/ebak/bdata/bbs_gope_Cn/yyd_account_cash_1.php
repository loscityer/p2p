<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_account_cash`;");
E_C("CREATE TABLE `yyd_account_cash` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '???ID',
  `nid` varchar(100) NOT NULL,
  `status` int(2) DEFAULT '0' COMMENT '??',
  `account` varchar(100) DEFAULT '0' COMMENT '???',
  `bank` varchar(302) DEFAULT NULL COMMENT '????????',
  `bank_id` varchar(100) NOT NULL,
  `branch` varchar(100) DEFAULT NULL COMMENT '???',
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `total` decimal(11,2) DEFAULT '0.00' COMMENT '???',
  `credited` decimal(11,2) DEFAULT '0.00' COMMENT '???????',
  `fee` varchar(20) DEFAULT '0' COMMENT '??????',
  `verify_userid` decimal(11,2) DEFAULT NULL,
  `verify_time` int(11) DEFAULT NULL,
  `verify_remark` varchar(250) DEFAULT NULL,
  `addtime` varchar(11) DEFAULT NULL,
  `addip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nid` (`nid`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1077 DEFAULT CHARSET=gbk COMMENT='??????'");
E_D("replace into `yyd_account_cash` values('1064','1938','cash_19381386205799749','1','50000','��������','111111a',NULL,'0','0','50000.00','50000.00','0','1.00','1386205925','ok','1386205799','180.110.188.178');");
E_D("replace into `yyd_account_cash` values('1065','1938','cash_19381386206267363','1','50000','��������','111111',NULL,'0','0','50000.00','50000.00','0','1.00','1386206294','ok','1386206267','180.110.188.178');");
E_D("replace into `yyd_account_cash` values('1066','1938','cash_19381386206421755','1','623.89','��������','111111',NULL,'0','0','623.89','623.89','0','1.00','1386206495','ok','1386206421','180.110.188.178');");
E_D("replace into `yyd_account_cash` values('1067','1938','cash_19381386212286600','3','500','��������','111111',NULL,'0','0','500.00','500.00','0','1.00','1386212654','ok','1386212286','117.62.164.25');");
E_D("replace into `yyd_account_cash` values('1068','1934','cash_19341390092634376','0','100','ũҵ����ũҵ����','323434344343434312',NULL,'0','0','100.00','100.00','0',NULL,NULL,NULL,'1390092634','124.156.66.241');");
E_D("replace into `yyd_account_cash` values('1069','1938','cash_19381390228617682','0','16','��������','111111',NULL,'0','0','16.00','16.00','0',NULL,NULL,NULL,'1390228617','112.80.125.126');");
E_D("replace into `yyd_account_cash` values('1070','1934','cash_19341392868800738','0','8','ũҵ����ũҵ����','323434344343434312',NULL,'0','0','8.00','8.00','0',NULL,NULL,NULL,'1392868800','122.96.43.31');");
E_D("replace into `yyd_account_cash` values('1071','1934','cash_19341392994753834','0','1','ũҵ����ũҵ����','323434344343434312',NULL,'0','0','1.00','1.00','0',NULL,NULL,NULL,'1392994753','122.96.43.225');");
E_D("replace into `yyd_account_cash` values('1072','1934','cash_19341393427149265','0','1','ũҵ����ũҵ����','323434344343434312',NULL,'0','0','1.00','1.00','0',NULL,NULL,NULL,'1393427149','122.96.95.190');");
E_D("replace into `yyd_account_cash` values('1073','1946','cash_19461393428035167','0','100','�����������ڷ���������·֧��','6225887825339027',NULL,'0','0','100.00','100.00','0',NULL,NULL,NULL,'1393428035','113.87.125.8');");
E_D("replace into `yyd_account_cash` values('1074','1934','cash_19341393431009575','0','1','ũҵ����ũҵ����','323434344343434312',NULL,'0','0','1.00','1.00','0',NULL,NULL,NULL,'1393431009','122.96.95.190');");
E_D("replace into `yyd_account_cash` values('1075','1946','cash_19461393465994221','0','100','�����������ڷ���������·֧��','6225887825339027',NULL,'0','0','100.00','100.00','0',NULL,NULL,NULL,'1393465994','202.105.136.60');");
E_D("replace into `yyd_account_cash` values('1076','1950','cash_19501393466204427','0','100','���������й��������ж�ݸԪ��֧��','6222082010002721912',NULL,'0','0','100.00','100.00','0',NULL,NULL,NULL,'1393466204','14.221.1.52');");

require("../../inc/footer.php");
?>