<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_common_pluginvar`;");
E_C("CREATE TABLE `pre_common_pluginvar` (
  `pluginvarid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pluginid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(3) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `variable` varchar(40) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT 'text',
  `value` text NOT NULL,
  `extra` text NOT NULL,
  PRIMARY KEY (`pluginvarid`),
  KEY `pluginid` (`pluginid`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=gbk");
E_D("replace into `pre_common_pluginvar` values('80','14','25','��һ������ɫ','','textcolor1','color','#FFFF00','');");
E_D("replace into `pre_common_pluginvar` values('81','14','26','��һ������ɫ','','textcolor2','color','#FF0000','');");
E_D("replace into `pre_common_pluginvar` values('82','14','27','��������','','direction','select','3','1=���Ϲ���\r\n2=���¹���\r\n3=�������\r\n4=���ҹ���');");
E_D("replace into `pre_common_pluginvar` values('83','14','28','�����ٶ�','��ֵԽ��,�ٶ�Խ��,����������\r\nIE��֧��','speed','text','5','');");
E_D("replace into `pre_common_pluginvar` values('84','14','29','�Ƿ���ʾ����Ԥ��','','isweater','radio','0','');");
E_D("replace into `pre_common_pluginvar` values('85','14','30','����Ԥ����ʾλ��','��ѡ���Ҳ���ʾʱ,��LED���߶�С������Ԥ���߶�ʱ,LED���ᱻ�Ÿ�','weaterposition','select','2','1=LED���Ҳ�(����)\r\n2=LED���·�(����)');");
E_D("replace into `pre_common_pluginvar` values('78','14','23','ժҪ��������','��ֵԽС���Խ��','spacing','number','8','');");
E_D("replace into `pre_common_pluginvar` values('79','14','24','ժҪ�����Ǳ���ļ���','����Խ���ִ�Խ��.����������,С��Ҳ��,�����һ���ַ�����������','messagelen','number','2','');");
E_D("replace into `pre_common_pluginvar` values('77','14','22','�Ƿ���ʾ��Ҫ����','��������,������,����ʾ���Ӳ�������,���ݳ���Ϊ���������.','ismessage','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('75','14','20','��������','Ĭ��Ϊ ΢���ź�','typeface','text','��������','');");
E_D("replace into `pre_common_pluginvar` values('76','14','21','������ʾλ��','�����¹���ʱ��Ч','position','select','center','left=����\r\ncenter=����\r\nright=����');");
E_D("replace into `pre_common_pluginvar` values('74','14','20','���ִ�С','','fontsize','number','30','');");
E_D("replace into `pre_common_pluginvar` values('73','14','19','LED���߿���','','ledwidth','number','0','');");
E_D("replace into `pre_common_pluginvar` values('72','14','18','LED���߿���ɫ','','ledcolor','color','#CCCCCC','');");
E_D("replace into `pre_common_pluginvar` values('70','14','16','LED���߶�','','ledheight','number','58','');");
E_D("replace into `pre_common_pluginvar` values('71','14','17','LED���߿���ʽ','','ledstyle','select','none','none=��\r\nsolid=ʵ��\r\ndashed=����\r\ndotted=����\r\ndouble=˫ʵ��\r\ngroove=ǳ��ʵ��\r\ninset=����ʵ��\r\noutset=͹��ʵ��\r\nridge=¡��ʵ��');");
E_D("replace into `pre_common_pluginvar` values('68','14','14','ʱ��ѡ��','','clocks','select','2','1=��Ƭʽ\r\n2=LED��');");
E_D("replace into `pre_common_pluginvar` values('69','14','15','LED����ͼ','����·�������·������,Ϊ�����Զ�����Ĭ��ͼƬ\r\n��˵�����ѿ�����˵Բ��̫����˵Ҫ��Բ�㡭���������湤��������˵̫���ˣ��ɴ�Ӹ�ͼƬ���ӣ�վ�����Լ���ͼ��^_^','ledimg','text','./source/plugin/drk_ledadv/image/drk_led.png','');");
E_D("replace into `pre_common_pluginvar` values('67','14','13','�Ƿ���ʾʱ��','','showclock','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('66','14','12','ʱ����ʾ���','','clockwidth','number','170','');");
E_D("replace into `pre_common_pluginvar` values('65','14','12','�Ƿ�������ҳ��ʾ','','isview','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('64','14','11','�Ƿ���Ƶ���б�ҳ��ʾ','','islist','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('62','14','9','��Ͷ�Ű������ҳͷ����ʾ','','istopictop','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('63','14','10','�Ƿ����Ż�ҳ����ʾ','���ѡ��,�������Ƶ��������ѡ������','isportal','radio','0','');");
E_D("replace into `pre_common_pluginvar` values('60','14','7','Ͷ�Ű��','������ѡ����ȫ��ʱ,�˴�ѡ��Ͷ�Ű��ľ��','forumss','forums','a:2:{i:0;s:2:\"54\";i:1;s:2:\"53\";}','');");
E_D("replace into `pre_common_pluginvar` values('61','14','8','��Ͷ�Ű�����ڰ�����ʾ','�Ƿ�������Ͷ�Ű�����ڵİ�����ʾLED��','isfup','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('58','14','6','�Ƿ�ȫ��','��ѡ��ȫ��ʱ,��������Ͷ��ѡ�ľ��','isall','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('59','14','7','�Ƿ�����̳��ҳ��ʾ','','isforum','radio','0','');");
E_D("replace into `pre_common_pluginvar` values('57','14','5','�Զ�������','һ��һ�������,��д����   http://www.4dkj.net|�Ķȿռ�   ÿ�й������ӵ�ַ�͹������ | ���뿪','myadv','textarea','a|�Զ�����1\r\nb|�Զ�����2','');");
E_D("replace into `pre_common_pluginvar` values('55','14','3','����������������','ѡ�����ʱ��������������̫�࣬���������������٣���������ӷ�����������','threadnum','number','2','');");
E_D("replace into `pre_common_pluginvar` values('56','14','4','��������','','threadtype','select','1','1=��������\r\n2=��ע���\r\n3=�������');");
E_D("replace into `pre_common_pluginvar` values('53','14','1','����ѡ��','��ס CTRL ��ѡ','selecttype','select','1','1=����ʾ��������\r\n2=����ʾ�Զ�������\r\n3=��ʾ��������+�����');");
E_D("replace into `pre_common_pluginvar` values('54','14','2','���ѡ��','','forums','forums','a:2:{i:0;s:2:\"54\";i:1;s:2:\"53\";}','');");
E_D("replace into `pre_common_pluginvar` values('51','13','1','�������','','offset','radio','0','');");
E_D("replace into `pre_common_pluginvar` values('52','14','0','�Ƿ�����','','isopen','radio','1','');");
E_D("replace into `pre_common_pluginvar` values('50','13','5','��Ա�б���','����/�ر��������߻�Ա�б�','offset_ml','radio','0','');");
E_D("replace into `pre_common_pluginvar` values('49','13','7','��߼�¼��ʱ��','��ʷ��߷��ʼ�¼����ʽ����߼�¼������ֵ��|ʱ�䣨2011-12-23��','onlineinfo','text','1529|2011-12-23','');");
E_D("replace into `pre_common_pluginvar` values('47','13','4','��ǰ���߻�Ա��','1����ֵ��ʽ�����磺100����ǰ���߻�Ա��=ʵ�����߻�Ա��+100\r\n2��������Ա�б��عر�ʱ��Ч','membercount','text','5','');");
E_D("replace into `pre_common_pluginvar` values('48','13','2','��������','С�ڴ���ʱ���⣬��д��ֵ�����磺286������ʾ��ǰ��������С��286ʱ������������','minmember','text','5','');");
E_D("replace into `pre_common_pluginvar` values('46','13','3','��ǰ��������','1����ֵ��ʽ�����磺1000����ǰ��������=ʵ����������+1000\r\n2���������С�����������е���ֵ����ǰ��������=��������','onlinenum','text','529','');");
E_D("replace into `pre_common_pluginvar` values('45','13','6','��ԱUID�б�','���߻�Ա�б����ݣ���ʽ����Աuid|��Աuid|��Աuid|��Աuid�����磺10|12|24|32|36|48','onlinelist','textarea','1|2|3|4|5','');");

require("../../inc/footer.php");
?>