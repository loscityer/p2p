<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_remind_type`;");
E_C("CREATE TABLE `yyd_remind_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` smallint(6) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `addip` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_remind_type` values('1','10','�ʽ�վ��������','account','0','');");
E_D("replace into `yyd_remind_type` values('2','10','������վ��������','borrow','0','');");
E_D("replace into `yyd_remind_type` values('3','10','Ͷ����վ��������','invest','0','');");

require("../../inc/footer.php");
?>