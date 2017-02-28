<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_profile_fields`;");
E_C("CREATE TABLE `ims_profile_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(255) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `displayorder` smallint(6) NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否必填',
  `unchangeable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否不可修改',
  `showinregister` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示在注册表单',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8");
E_D("replace into `ims_profile_fields` values('1','realname','1','真实姓名','','0','1','1','1');");
E_D("replace into `ims_profile_fields` values('2','nickname','1','昵称','','1','1','0','1');");
E_D("replace into `ims_profile_fields` values('3','avatar','1','头像','','1','0','0','0');");
E_D("replace into `ims_profile_fields` values('4','qq','1','QQ号','','0','0','0','1');");
E_D("replace into `ims_profile_fields` values('5','mobile','1','手机号码','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('6','vip','1','VIP级别','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('7','gender','1','性别','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('8','birthyear','1','出生生日','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('9','constellation','1','星座','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('10','zodiac','1','生肖','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('11','telephone','1','固定电话','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('12','idcard','1','证件号码','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('13','studentid','1','学号','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('14','grade','1','班级','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('15','address','1','邮寄地址','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('16','zipcode','1','邮编','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('17','nationality','1','国籍','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('18','resideprovince','1','居住地址','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('19','graduateschool','1','毕业学校','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('20','company','1','公司','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('21','education','1','学历','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('22','occupation','1','职业','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('23','position','1','职位','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('24','revenue','1','年收入','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('25','affectivestatus','1','情感状态','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('26','lookingfor','1',' 交友目的','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('27','bloodtype','1','血型','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('28','height','1','身高','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('29','weight','1','体重','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('30','alipay','1','支付宝帐号','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('31','msn','1','MSN','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('32','email','1','电子邮箱','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('33','taobao','1','阿里旺旺','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('34','site','1','主页','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('35','bio','1','自我介绍','','0','0','0','0');");
E_D("replace into `ims_profile_fields` values('36','interest','1','兴趣爱好','','0','0','0','0');");

require("../../inc/footer.php");
?>