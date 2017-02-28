<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_borrow_amount_apply`;");
E_C("CREATE TABLE `yyd_borrow_amount_apply` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `amount_type` varchar(100) NOT NULL,
  `oprate` varchar(50) NOT NULL COMMENT '??????????add??????reduce',
  `amount_account` decimal(11,2) NOT NULL DEFAULT '0.00',
  `account` decimal(11,2) NOT NULL COMMENT '???????',
  `status` int(11) DEFAULT '0',
  `content` text NOT NULL,
  `remark` varchar(200) NOT NULL,
  `verify_remark` varchar(255) DEFAULT NULL,
  `verify_time` varchar(10) DEFAULT NULL,
  `verify_user` int(11) DEFAULT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nid` (`nid`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_borrow_amount_apply` values('81','1935','apply138381033792','borrow','add','10000.00','10000.00','1','OK','','ok','1383810369','1','1383810337','113.134.32.246');");
E_D("replace into `yyd_borrow_amount_apply` values('82','1934','apply138386360516','borrow','add','100000.00','100000.00','1','��Ҫ���','��Ҫ���','OK','1383864765','1','1383863605','60.55.40.6');");
E_D("replace into `yyd_borrow_amount_apply` values('83','1938','apply138614575477','borrow','add','1000000.00','1000000.00','1','����','����','ok','1386147518','1','1386145754','222.94.187.146');");
E_D("replace into `yyd_borrow_amount_apply` values('84','1938','apply138621095223','borrow','add','1000.00','0.00','0','','',NULL,NULL,NULL,'1386210952','117.62.164.25');");
E_D("replace into `yyd_borrow_amount_apply` values('85','1942','apply138753154332','borrow','add','10000.00','10000.00','1','','','���Լ��Ĺ�˾����������ͨ��  ���','1387531680','1','1387531543','171.216.224.66');");
E_D("replace into `yyd_borrow_amount_apply` values('86','1956','apply139334837772','borrow','add','10000000.00','10000000.00','1','��ݸ�й�����Ӱ�Ӵ�ý���޹�˾����������','��ݸ�й�����Ӱ�Ӵ�ý���޹�˾����������','������','1393348588','1','1393348377','14.127.24.153');");
E_D("replace into `yyd_borrow_amount_apply` values('87','1983','apply139971784644','borrow','add','100000.00','100000.00','1','','','����','1399717913','1','1399717846','124.207.38.24');");

require("../../inc/footer.php");
?>