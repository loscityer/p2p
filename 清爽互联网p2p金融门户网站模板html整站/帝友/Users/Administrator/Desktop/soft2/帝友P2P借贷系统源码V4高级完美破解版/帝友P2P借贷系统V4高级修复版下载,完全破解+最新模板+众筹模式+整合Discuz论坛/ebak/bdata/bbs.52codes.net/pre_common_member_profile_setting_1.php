<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_member_profile_setting`;");
E_C("CREATE TABLE `pre_common_member_profile_setting` (
  `fieldid` varchar(255) NOT NULL DEFAULT '',
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `invisible` tinyint(1) NOT NULL DEFAULT '0',
  `needverify` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `displayorder` smallint(6) unsigned NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `unchangeable` tinyint(1) NOT NULL DEFAULT '0',
  `showincard` tinyint(1) NOT NULL DEFAULT '0',
  `showinthread` tinyint(1) NOT NULL DEFAULT '0',
  `showinregister` tinyint(1) NOT NULL DEFAULT '0',
  `allowsearch` tinyint(1) NOT NULL DEFAULT '0',
  `formtype` varchar(255) NOT NULL,
  `size` smallint(6) unsigned NOT NULL DEFAULT '0',
  `choices` text NOT NULL,
  `validate` text NOT NULL,
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_member_profile_setting` values('realname','1','0','0','��ʵ����','','0','0','0','0','0','0','1','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('gender','1','0','0','�Ա�','','0','0','0','0','0','0','1','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthyear','1','0','0','�������','','0','0','0','0','0','0','1','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthmonth','1','0','0','�����·�','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthday','1','0','0','����','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('constellation','1','1','0','����','����(���������Զ�����)','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('zodiac','1','1','0','��Ф','��Ф(���������Զ�����)','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('telephone','1','1','0','�̶��绰','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('mobile','1','1','0','�ֻ�','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('idcardtype','1','1','0','֤������','���֤ ���� ��ʻ֤��','0','0','0','0','0','0','0','select','0','���֤\n����\n��ʻ֤','');");
E_D("replace into `pre_common_member_profile_setting` values('idcard','1','1','0','֤����','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('address','1','1','0','�ʼĵ�ַ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('zipcode','1','1','0','�ʱ�','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('nationality','0','0','0','����','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthprovince','1','0','0','����ʡ��','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthcity','1','0','0','������','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthdist','1','0','0','������','����������/��','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('birthcommunity','1','0','0','����С��','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('resideprovince','1','0','0','��סʡ��','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('residecity','1','0','0','��ס��','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('residedist','1','0','0','��ס��','��ס������/��','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('residecommunity','1','0','0','��סС��','','0','0','0','0','0','0','0','select','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('residesuite','0','0','0','����','С����д��¥���ƺ�','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('graduateschool','1','0','0','��ҵѧУ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('education','1','0','0','ѧ��','','0','0','0','0','0','0','0','select','0','��ʿ\n˶ʿ\n����\nר��\n��ѧ\nСѧ\n����','');");
E_D("replace into `pre_common_member_profile_setting` values('company','1','0','0','��˾','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('occupation','1','0','0','ְҵ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('position','1','0','0','ְλ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('revenue','1','1','0','������','��λ Ԫ','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('affectivestatus','1','1','0','���״̬','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('lookingfor','1','0','0','����Ŀ��','ϣ������վ�ҵ�ʲô��������','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('bloodtype','1','1','0','Ѫ��','','0','0','0','0','0','0','0','select','0','A\nB\nAB\nO\n����','');");
E_D("replace into `pre_common_member_profile_setting` values('height','0','1','0','���','��λ cm','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('weight','0','1','0','����','��λ kg','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('alipay','1','1','0','֧����','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('icq','0','1','0','ICQ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('qq','1','1','0','QQ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('yahoo','0','1','0','YAHOO�ʺ�','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('msn','1','1','0','MSN','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('taobao','1','1','0','��������','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('site','1','0','0','������ҳ','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('bio','1','1','0','���ҽ���','','0','0','0','0','0','0','0','textarea','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('interest','1','0','0','��Ȥ����','','0','0','0','0','0','0','0','textarea','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field1','0','1','0','�Զ����ֶ�1','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field2','0','1','0','�Զ����ֶ�2','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field3','0','1','0','�Զ����ֶ�3','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field4','0','1','0','�Զ����ֶ�4','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field5','0','1','0','�Զ����ֶ�5','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field6','0','1','0','�Զ����ֶ�6','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field7','0','1','0','�Զ����ֶ�7','','0','0','0','0','0','0','0','text','0','','');");
E_D("replace into `pre_common_member_profile_setting` values('field8','0','1','0','�Զ����ֶ�8','','0','0','0','0','0','0','0','text','0','','');");

require("../../inc/footer.php");
?>