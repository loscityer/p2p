<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_template`;");
E_C("CREATE TABLE `pre_common_template` (
  `templateid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `directory` varchar(100) NOT NULL DEFAULT '',
  `copyright` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`templateid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_template` values('1','Ĭ��ģ����ϵ','./template/default','������ʢ�´��Ƽ��������ι�˾');");
E_D("replace into `pre_common_template` values('2','Singcere_Note','./template/singcere_note','Singcere! �³ϻ���');");

require("../../inc/footer.php");
?>