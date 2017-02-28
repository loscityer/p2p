<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_usergroup`;");
E_C("CREATE TABLE `pre_common_usergroup` (
  `groupid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `radminid` tinyint(3) NOT NULL DEFAULT '0',
  `type` enum('system','special','member') NOT NULL DEFAULT 'member',
  `system` varchar(255) NOT NULL DEFAULT 'private',
  `grouptitle` varchar(255) NOT NULL DEFAULT '',
  `creditshigher` int(10) NOT NULL DEFAULT '0',
  `creditslower` int(10) NOT NULL DEFAULT '0',
  `stars` tinyint(3) NOT NULL DEFAULT '0',
  `color` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL DEFAULT '',
  `allowvisit` tinyint(1) NOT NULL DEFAULT '0',
  `allowsendpm` tinyint(1) NOT NULL DEFAULT '1',
  `allowinvite` tinyint(1) NOT NULL DEFAULT '0',
  `allowmailinvite` tinyint(1) NOT NULL DEFAULT '0',
  `maxinvitenum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `inviteprice` smallint(6) unsigned NOT NULL DEFAULT '0',
  `maxinviteday` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`),
  KEY `creditsrange` (`creditshigher`,`creditslower`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_usergroup` values('1','1','system','private','����Ա','0','0','9','','','1','1','1','1','0','0','10');");
E_D("replace into `pre_common_usergroup` values('2','2','system','private','��������','0','0','8','','','1','1','1','1','0','0','10');");
E_D("replace into `pre_common_usergroup` values('3','3','system','private','����','0','0','7','','','1','1','1','1','0','0','10');");
E_D("replace into `pre_common_usergroup` values('4','0','system','private','��ֹ����','0','0','0','','','1','1','0','0','0','0','0');");
E_D("replace into `pre_common_usergroup` values('5','0','system','private','��ֹ����','0','0','0','','','0','1','0','0','0','0','0');");
E_D("replace into `pre_common_usergroup` values('6','0','system','private','��ֹ IP','0','0','0','','','0','1','0','0','0','0','0');");
E_D("replace into `pre_common_usergroup` values('7','0','system','private','�ο�','0','0','0','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('8','0','system','private','�ȴ���֤��Ա','0','0','0','','','1','1','0','0','0','0','0');");
E_D("replace into `pre_common_usergroup` values('9','0','member','private','���ƻ�Ա','-9999999','0','0','','','1','1','0','0','0','0','0');");
E_D("replace into `pre_common_usergroup` values('10','0','member','private','������·','0','50','1','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('11','0','member','private','ע���Ա','50','200','2','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('12','0','member','private','�м���Ա','200','500','3','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('13','0','member','private','�߼���Ա','500','1000','4','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('14','0','member','private','���ƻ�Ա','1000','3000','6','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('15','0','member','private','��̳Ԫ��','3000','9999999','8','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('16','3','special','private','ʵϰ����','0','0','7','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('17','2','special','private','��վ�༭','0','0','8','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('18','1','special','private','��Ϣ���Ա','0','0','9','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('19','3','special','private','���Ա','0','0','7','','','1','1','0','0','0','0','10');");
E_D("replace into `pre_common_usergroup` values('20','0','special','private','QQ�ο�','0','0','0','','','1','1','0','0','0','0','0');");

require("../../inc/footer.php");
?>