<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_credit_rule`;");
E_C("CREATE TABLE `pre_common_credit_rule` (
  `rid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `rulename` varchar(20) NOT NULL DEFAULT '',
  `action` varchar(20) NOT NULL DEFAULT '',
  `cycletype` tinyint(1) NOT NULL DEFAULT '0',
  `cycletime` int(10) NOT NULL DEFAULT '0',
  `rewardnum` tinyint(2) NOT NULL DEFAULT '1',
  `norepeat` tinyint(1) NOT NULL DEFAULT '0',
  `extcredits1` int(10) NOT NULL DEFAULT '0',
  `extcredits2` int(10) NOT NULL DEFAULT '0',
  `extcredits3` int(10) NOT NULL DEFAULT '0',
  `extcredits4` int(10) NOT NULL DEFAULT '0',
  `extcredits5` int(10) NOT NULL DEFAULT '0',
  `extcredits6` int(10) NOT NULL DEFAULT '0',
  `extcredits7` int(10) NOT NULL DEFAULT '0',
  `extcredits8` int(10) NOT NULL DEFAULT '0',
  `fids` text NOT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_credit_rule` values('1','��������','post','4','0','0','0','0','2','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('2','����ظ�','reply','4','0','0','0','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('3','�Ӿ���','digest','4','0','0','0','0','5','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('4','�ϴ�����','postattach','4','0','0','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('5','���ظ���','getattach','4','0','0','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('6','������Ϣ','sendpm','4','0','0','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('7','����','search','4','0','0','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('8','�����ƹ�','promotion_visit','4','0','0','0','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('9','ע���ƹ�','promotion_register','4','0','0','0','0','2','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('10','�ɹ�����','tradefinished','4','0','0','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('11','������֤','realemail','0','0','1','0','0','10','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('12','����ͷ��','setavatar','0','0','1','0','0','5','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('13','��Ƶ��֤','videophoto','0','0','1','0','0','10','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('14','�ȵ���Ϣ','hotinfo','4','0','0','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('15','ÿ���¼','daylogin','1','0','1','0','0','2','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('16','���ʱ��˿ռ�','visit','1','0','10','2','0','2','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('17','���к�','poke','1','0','10','2','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('18','����','guestbook','1','0','20','2','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('19','������','getguestbook','1','0','5','2','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('20','�����¼','doing','1','0','5','0','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('21','������־','publishblog','1','0','3','0','0','2','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('22','����ͶƱ','joinpoll','1','0','10','1','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('23','�������','createshare','1','0','3','0','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('24','����','comment','1','0','40','1','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('25','������','getcomment','1','0','20','1','0','2','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('26','��װӦ��','installapp','4','0','0','3','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('27','ʹ��Ӧ��','useapp','1','0','10','3','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('28','��Ϣ��̬','click','1','0','10','1','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('29','�޸�����','modifydomain','0','0','1','0','0','0','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('30','��������','portalcomment','1','0','40','1','0','1','0','0','0','0','0','0','');");
E_D("replace into `pre_common_credit_rule` values('31','��ר��������','followedcollection','1','0','3','0','0','1','0','0','0','0','0','0','');");

require("../../inc/footer.php");
?>