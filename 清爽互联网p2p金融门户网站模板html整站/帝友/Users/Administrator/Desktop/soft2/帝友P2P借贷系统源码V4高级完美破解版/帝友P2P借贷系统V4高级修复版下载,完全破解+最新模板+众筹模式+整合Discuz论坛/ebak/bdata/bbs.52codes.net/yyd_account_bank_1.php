<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_account_bank`;");
E_C("CREATE TABLE `yyd_account_bank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(2) NOT NULL,
  `name` varchar(100) DEFAULT NULL COMMENT '????????',
  `nid` varchar(50) NOT NULL,
  `litpic` varchar(255) DEFAULT NULL COMMENT '????????',
  `cash_money` varchar(100) DEFAULT NULL COMMENT '???????????',
  `reach_day` int(11) NOT NULL COMMENT '????????',
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk COMMENT='???????'");
E_D("replace into `yyd_account_bank` values('1','1','��������','����','','20000000','1','1365428017','112.230.73.39');");
E_D("replace into `yyd_account_bank` values('2','1','��������','����','','2000000','1','1369234854','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('3','1','��������','����','','200000','1','1369234878','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('4','1','ũҵ����','ũҵ','','200000','1','1369234904','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('5','1','��������','����','','200000','1','1369234963','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('6','1','��ͨ����','��ͨ','','200000','1','1369234983','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('7','1','�й�����','�й�','','200000','1','1369235011','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('8','1','��ҵ����','��ҵ','','200000','1','1369235074','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('9','1','�Ϻ��ֶ���չ����','�ַ�','','200000','1','1369235212','110.115.216.37');");
E_D("replace into `yyd_account_bank` values('10','1','��������','����','','200000','0','1369239911','123.233.230.75');");
E_D("replace into `yyd_account_bank` values('11','1','��������','��������','','','0','1369318955','123.233.221.209');");

require("../../inc/footer.php");
?>