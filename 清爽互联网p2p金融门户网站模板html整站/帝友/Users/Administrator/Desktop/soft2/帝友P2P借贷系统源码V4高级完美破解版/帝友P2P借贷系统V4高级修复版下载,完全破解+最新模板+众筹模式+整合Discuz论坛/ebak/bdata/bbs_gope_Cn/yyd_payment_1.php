<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_payment`;");
E_C("CREATE TABLE `yyd_payment` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '????',
  `nid` varchar(100) DEFAULT NULL COMMENT '?????',
  `status` smallint(3) unsigned DEFAULT '0' COMMENT '??',
  `litpic` varchar(100) NOT NULL COMMENT '?????',
  `style` int(2) DEFAULT NULL COMMENT '????',
  `config` longtext COMMENT '???????',
  `description` longtext COMMENT '????',
  `order` smallint(3) unsigned DEFAULT '0' COMMENT '????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_payment` values('17','�й��������г���֧��','offline','1','',NULL,'s:0:\"\";','<p>�˺ţ�11111111111111111111111 &nbsp; ������С��</p>','10');");
E_D("replace into `yyd_payment` values('14','��ѶIPS����֧��3.0','ips','0','',NULL,'a:2:{s:9:\"member_id\";s:6:\"022476\";s:10:\"PrivateKey\";s:128:\"43343497845979972100052765472863878988134143241756762289168892597219098407690841372510068882033265603165735469821641097615021636\";}','��ѶIPS����֧��3.0','10');");
E_D("replace into `yyd_payment` values('20','�й����а���֧��','offline','1','',NULL,'s:0:\"\";','<p>�˺ţ�11111111111111111111111 &nbsp; ������С��</p>','10');");
E_D("replace into `yyd_payment` values('18','�й�ũҵ���а���֧��','offline','1','',NULL,'s:0:\"\";','<p>�˺ţ�11111111111111111111111 &nbsp; ������С��</p>','10');");
E_D("replace into `yyd_payment` values('19','�й��������а����ص���֧��','offline','1','',NULL,'s:0:\"\";','<p>�˺ţ�11111111111111111111111 &nbsp; ������С��</p>','10');");
E_D("replace into `yyd_payment` values('22','����(������Ͷ)','baofoo','0','',NULL,'a:2:{s:10:\"MerchantID\";s:6:\"120827\";s:15:\"VerficationCode\";s:16:\"wlm4s59hc866nhkk\";}','����֧��(������Ͷ)','10');");
E_D("replace into `yyd_payment` values('24','E��ͨ','ecpss','1','',NULL,'a:2:{s:10:\"MerchantID\";s:5:\"18299\";s:15:\"VerficationCode\";s:8:\"snvL(}By\";}','E��ͨ','10');");
E_D("replace into `yyd_payment` values('25','֧����','alipay','1','',NULL,'a:4:{s:9:\"alipay_id\";s:17:\"32356565656566565\";s:10:\"alipay_key\";s:24:\"fdsfsewweewffewewffewwef\";s:12:\"alipay_email\";s:11:\"test@qq.com\";s:11:\"alipay_type\";s:1:\"1\";}','֧������ʱ���ʣ��ǹ����Ƚ�������֧����ʽ��','10');");

require("../../inc/footer.php");
?>