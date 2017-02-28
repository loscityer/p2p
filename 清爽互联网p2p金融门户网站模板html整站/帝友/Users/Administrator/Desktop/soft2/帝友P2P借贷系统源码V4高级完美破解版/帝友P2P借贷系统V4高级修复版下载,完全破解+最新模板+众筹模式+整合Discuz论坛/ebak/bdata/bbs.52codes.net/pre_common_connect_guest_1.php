<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_connect_guest`;");
E_C("CREATE TABLE `pre_common_connect_guest` (
  `conopenid` char(32) NOT NULL DEFAULT '',
  `conuin` char(40) NOT NULL DEFAULT '',
  `conuinsecret` char(16) NOT NULL DEFAULT '',
  `conqqnick` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`conopenid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>