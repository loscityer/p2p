<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_admincp_group`;");
E_C("CREATE TABLE `pre_common_admincp_group` (
  `cpgroupid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `cpgroupname` varchar(255) NOT NULL,
  PRIMARY KEY (`cpgroupid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_admincp_group` values('1','�Ż�����Ա');");
E_D("replace into `pre_common_admincp_group` values('2','��̳����Ա');");
E_D("replace into `pre_common_admincp_group` values('3','Ⱥ�����Ա');");
E_D("replace into `pre_common_admincp_group` values('4','�ռ����Ա');");
E_D("replace into `pre_common_admincp_group` values('5','�û�����Ա');");

require("../../inc/footer.php");
?>