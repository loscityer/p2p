<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `yyd_articles_type`;");
E_C("CREATE TABLE `yyd_articles_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `contents` text NOT NULL,
  `order` int(11) NOT NULL DEFAULT '10' COMMENT '????',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk");
E_D("replace into `yyd_articles_type` values('6','���¹���','publicnotice','0','','10');");
E_D("replace into `yyd_articles_type` values('10','��������','cjwt','11','','9');");
E_D("replace into `yyd_articles_type` values('11','��������','help','0','','10');");
E_D("replace into `yyd_articles_type` values('12','������·','jczs','11','','12');");
E_D("replace into `yyd_articles_type` values('13','�˻����','zhxg','11','','10');");
E_D("replace into `yyd_articles_type` values('14','Ͷ�����','tzxg','11','','10');");
E_D("replace into `yyd_articles_type` values('15','������','jcxg','11','','10');");
E_D("replace into `yyd_articles_type` values('16','��������','aboutus','0','���ӿ͵۹�   ��Ϊ�й�һ�����ڻ�������P2P��Ϣ��ѯ��ҵ����Ч�����š����ݻ�������ҵģʽӮ�������õ��û��ڱ����ӿ͵۹�P2P��Ϣ��ѯϵͳ����������ͨ����Ч���û�ģ�ͺʹ��ģ�������ھ��𲽽������Ʒ���ʱ�������Ľ��ڷ��ն�����ϵ���������л����������Ҫ�������˲������ҵ����,����Ͷ���߼���ҵ�߸��õ�Ӧ��Ŀǰ�������Σ��Ӱ���µľ���������<br />\r\n<br />\r\n <br />\r\n<br />\r\n   �����ӿ͵۹�����ƽ̨�Ĳ����������ӿ͵۹�������ٷ�չ�Ŀ쳵�����ӿ͵۹��ϸ����ع�����ط��ɷ��棬�ڷ��ɡ�����涨�ķ�Χ��Ϊ����˫���ṩ�н���񣬴�ʹ�������Ϊ���⻯���Ϸ����������ơ������Ͻ����С΢��ҵ���������⡣ͬʱ,����Ҳ���߾�����,�������ƶ���վƽ̨�Ĺ���,Ŭ��������վ����Ա�����ʣ��߳�Ϊ����û��ṩ�����ʵ���Ʋ�Ʒ�������Ƶķ���Ϊ�ͻ�����Ͷ�ʼ�ֵ�����ų��š�������͸���ķ�����������ӿ͵۹�P2P��Ϣ��ѯƽ̨Ϊ���Ĵ�ҵ�߹�ͬ����һ�����š���ƽ�����ɵĻ��������ڷ���ƽ̨��<br />\r\n<br />\r\n <br />\r\n<br />\r\n   �ӿ͵۹���ӭ���ļ��룬Ϊ���������õ�δ����<br />\r\n','11');");
E_D("replace into `yyd_articles_type` values('21','Э���ı�','xywb','11','','10');");
E_D("replace into `yyd_articles_type` values('22','������','shxg','11','','10');");
E_D("replace into `yyd_articles_type` values('23','��ֵ����','qztx','11','','10');");
E_D("replace into `yyd_articles_type` values('29','��Աר��','hyzx','11','','11');");
E_D("replace into `yyd_articles_type` values('30','ý�屨��','reports','0','ý�屨��','10');");
E_D("replace into `yyd_articles_type` values('31','�ȵ�����','hotque','0','','10');");
E_D("replace into `yyd_articles_type` values('34','��������','sense','0','��������','10');");
E_D("replace into `yyd_articles_type` values('35','�ͷ�����','kefu','0','','10');");
E_D("replace into `yyd_articles_type` values('38','�����ı�','hetong','0','','10');");

require("../../inc/footer.php");
?>