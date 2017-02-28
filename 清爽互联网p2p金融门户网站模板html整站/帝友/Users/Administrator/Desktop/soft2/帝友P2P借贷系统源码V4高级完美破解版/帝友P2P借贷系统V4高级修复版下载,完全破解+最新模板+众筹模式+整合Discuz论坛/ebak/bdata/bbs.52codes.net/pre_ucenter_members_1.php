<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `pre_ucenter_members`;");
E_C("CREATE TABLE `pre_ucenter_members` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `email` char(32) NOT NULL DEFAULT '',
  `myid` char(30) NOT NULL DEFAULT '',
  `myidkey` char(16) NOT NULL DEFAULT '',
  `regip` char(15) NOT NULL DEFAULT '',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0',
  `lastloginip` int(10) NOT NULL DEFAULT '0',
  `lastlogintime` int(10) unsigned NOT NULL DEFAULT '0',
  `salt` char(6) NOT NULL,
  `secques` char(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=1341 DEFAULT CHARSET=gbk");
E_D("replace into `pre_ucenter_members` values('53','admin','25705ea579ff096c32200b4afebac2b6','','','','111.174.89.114','1368864610','0','0','180253','');");
E_D("replace into `pre_ucenter_members` values('1302','fxy','478f828eda555a9792893c9d38777bdc','swolves@yeah.net','','','58.240.102.112','1390490765','0','0','d13d0d','');");
E_D("replace into `pre_ucenter_members` values('1301','ttw321','fd042b1755e2483755f0a4199f4af151','425841784@qq.com','','','124.156.66.46','1390333672','0','0','87b692','');");
E_D("replace into `pre_ucenter_members` values('1300','363783736','4611f1a6711433589dbbf2d4145af98f','363783736@qq.com','','','125.85.41.236','1389933784','0','0','7f05c6','');");
E_D("replace into `pre_ucenter_members` values('1293','testa','a19a8944fddcf077547cd44da930f66e','728853482@qq.com','','','222.94.187.146','1386147825','0','0','15fb12','');");
E_D("replace into `pre_ucenter_members` values('1294','ttw333','ebdc29005d228ac34934f6e9ddf47318','2329947570@qq.com','','','124.156.66.26','1386779083','0','0','b63f34','');");
E_D("replace into `pre_ucenter_members` values('1295','zhuceliyuhua00','72751c02f98d278992504acf8ae70c6c','401616060@qq.com','','','171.216.224.45','1387173382','0','0','6e67ed','');");
E_D("replace into `pre_ucenter_members` values('1279','ttw123','8b85b80386e8979887d1d217335f66c7','1582978230@qq.com','','','60.55.40.7','1382702014','0','0','e72889','');");
E_D("replace into `pre_ucenter_members` values('1299','mmsbb','d63f5fa31f6b3a15f7403549d307120d','mmsbb@163.com','','','211.162.34.19','1389110479','0','0','fd6912','');");
E_D("replace into `pre_ucenter_members` values('1296','zhuceliyuhua01','d6caa3ed930a78a37b01c0948bdd49f2','liyuhua@11.com','','','171.216.224.66','1387530176','0','0','0445eb','');");
E_D("replace into `pre_ucenter_members` values('1292','test0','49e95bebcf24fd51e35a7fe70302df28','1244@qq.com','','','222.94.187.146','1386147748','0','0','409b4a','');");
E_D("replace into `pre_ucenter_members` values('1291','lxx','0b47f0f436b65f3110caac72040f6702','1027901300@qq.com','','','222.94.187.146','1386144461','0','0','dc8d51','');");
E_D("replace into `pre_ucenter_members` values('1290','test1','027011fdb48b04cbe8c9539490a21c17','gongkepop@sina.com','','','222.94.187.146','1386143914','0','0','a3b450','');");
E_D("replace into `pre_ucenter_members` values('1289','btfs','0424a0b801e2482dc462f5cc53da7c67','btdyxhfw@163.com','','','110.16.12.74','1384134876','0','0','caa786','');");
E_D("replace into `pre_ucenter_members` values('1288','sixfeel','85eebc7237fad9e8bd8b8389cb47dae5','64868318@qq.com','','','117.22.71.105','1383793018','0','0','adc08f','');");
E_D("replace into `pre_ucenter_members` values('1298','pll','2f7ae4fbcca08b2359683a5055aa0937','dtybs_pll@163.com','','','124.65.129.102','1387765843','0','0','3aff58','');");
E_D("replace into `pre_ucenter_members` values('1297','yanqin','598c164caf43d1b99fac06dfb4d680ed','yanqin@vip.sina.com','','','124.65.129.102','1387764020','0','0','4e2766','');");
E_D("replace into `pre_ucenter_members` values('1303','samax','f55589bf4ab0387df6d7a96780890351','samax@126.com','','','14.156.41.252','1392859430','0','0','6ecf05','');");
E_D("replace into `pre_ucenter_members` values('1304','������','409b90610c96a13a8cbd895eb640b853','13713356306@139.com','','','14.221.105.92','1392965955','0','0','3006d6','');");
E_D("replace into `pre_ucenter_members` values('1305','������','c036dae25572911a8f28e148f9457c59','790196829@qq.com','','','14.18.168.6','1392965979','0','0','b3204c','');");
E_D("replace into `pre_ucenter_members` values('1306','chutian','e5812f8f547566fa9583ea4990b3b681','228104223@qq.com','','','59.36.84.249','1392995790','0','0','e7270e','');");
E_D("replace into `pre_ucenter_members` values('1307','king','2ee6f60cb48f29458c828bf4d29687f7','371608908@qq.com','','','27.24.141.41','1393292426','0','0','aadc53','');");
E_D("replace into `pre_ucenter_members` values('1308','����������','8f7b4e931982ba740fb9697191ef8397','39333715@qq.com','','','14.127.24.153','1393345721','0','0','955f7e','');");
E_D("replace into `pre_ucenter_members` values('1309','�ɹ�','37ff5e7a50cca533c4a350f126368539','724577201@qq.com','','','121.13.249.10','1393397133','0','0','d2f66b','');");
E_D("replace into `pre_ucenter_members` values('1310','azralcarl','76b4da901bc9e1030737531e392a49f8','173848751@qq.com','','','121.13.249.10','1393401433','0','0','97e3c8','');");
E_D("replace into `pre_ucenter_members` values('1311','�ɿ�����','9c725f5a7a888cf4e712e0b3cdb8f816','2674615860@qq.com','','','117.62.227.29','1393550665','0','0','98ecc7','');");
E_D("replace into `pre_ucenter_members` values('1312','itroad','f0a025b6e283794d604232cd43f998e1','344136609@qq.com','','','117.62.227.29','1393551822','0','0','ebc2d8','');");
E_D("replace into `pre_ucenter_members` values('1313','a123456','5d67af83a5d1e9b969963aff03efe067','3383844@qq.com','','','115.197.209.39','1393557439','0','0','f96f0c','');");
E_D("replace into `pre_ucenter_members` values('1314','qaz123','216a7e517dd57b58d5c4c0b23c730d92','4554444@qq.com','','','115.197.209.39','1393560295','0','0','7d7ca5','');");
E_D("replace into `pre_ucenter_members` values('1315','wsxedc','2e87b5a37a310aaeaf23ff523b7b0892','ddd@qq.com','','','115.197.209.39','1393573394','0','0','259e7b','');");
E_D("replace into `pre_ucenter_members` values('1316','test123','4b2becb4f8353add0495c22cc7ce5a4d','test123@qq.com','','','113.84.238.108','1393574599','0','0','709cbf','');");
E_D("replace into `pre_ucenter_members` values('1317','bbsbbs','305cfc947d2ff74d49da13461f785de4','415267408@qq.com','','','183.42.247.94','1393594893','0','0','ddb9ae','');");
E_D("replace into `pre_ucenter_members` values('1318','wsxrfv','57ab2d249b3291b8e0a33ef0f39e1fdc','542544@qq.com','','','36.250.226.195','1393668614','0','0','6aa039','');");
E_D("replace into `pre_ucenter_members` values('1319','cuiling','d572d818f831b0d40141cdde0c5e0e01','505279601@qq.com','','','121.15.220.137','1393685963','0','0','bb945d','');");
E_D("replace into `pre_ucenter_members` values('1320','refo1983','ccc343913ecc75d69af436da8371454c','refo@qq.com','','','220.187.194.108','1393769312','0','0','0153da','');");
E_D("replace into `pre_ucenter_members` values('1321','edcrfv','e4b50b62d5cc8e3029a2fc8a325d6d78','33333@qq.com','','','115.199.58.216','1393906619','0','0','bdd28d','');");
E_D("replace into `pre_ucenter_members` values('1322','abc12345','842fc1a08d0c876d9ae70d4083894004','898181618@qq.com','','','222.178.221.94','1393912363','0','0','b153da','');");
E_D("replace into `pre_ucenter_members` values('1323','bbsbbs123','4014696d8b594c3d1d664121f0151556','1195897920@qq.com','','','125.88.77.22','1393985371','0','0','b96f0c','');");
E_D("replace into `pre_ucenter_members` values('1324','facai888','2d26173acf4962c45789483ee6d57ec0','2644380989@qq.com','','','113.112.195.222','1393985744','0','0','0190e2','');");
E_D("replace into `pre_ucenter_members` values('1325','aamm','376c0098b264ca2adbfa8a67d501ce0a','aamm126@126.com','','','106.34.153.167','1393987418','0','0','a93204','');");
E_D("replace into `pre_ucenter_members` values('1326','zhanghao','d794ac53062593a351df6f077aa6c2a1','783548244@qq.com','','','223.69.41.48','1399565467','0','0','b5309e','');");
E_D("replace into `pre_ucenter_members` values('1327','zhangbin','ec2bdc9e656eaacf09a46fc3d82f2f46','1874578390@qq.com','','','223.69.41.48','1399565512','0','0','8e3ff3','');");
E_D("replace into `pre_ucenter_members` values('1328','zhangyun','eaa8bc2d80312c80d41182b0daced4e3','zhanghaozixn@163.com','','','223.69.41.48','1399565726','0','0','ee7cfd','');");
E_D("replace into `pre_ucenter_members` values('1329','zhanghao123','2b37179c3657b0c54a23944f51d8af20','7835482441@qq.com','','','223.69.41.48','1399566105','0','0','906be9','');");
E_D("replace into `pre_ucenter_members` values('1330','zhangyan','708c7bef2577ab6d7c1e2890137588ae','2222222@qq.com','','','61.148.243.239','1399567239','0','0','74f395','');");
E_D("replace into `pre_ucenter_members` values('1331','qibochuan','efe7a84a8f2a79a8058766c8683a26a8','qibochuan@163.com','','','123.134.182.138','1399615272','0','0','8e02eb','');");
E_D("replace into `pre_ucenter_members` values('1332','zhanghao1','2ed019ae27a9acb96d73dbed53741baf','18745783901@qq.com','','','223.69.41.168','1399633891','0','0','36dbdd','');");
E_D("replace into `pre_ucenter_members` values('1333','zhanghao4444','cca18b25db112b9eb5c537a84704f5de','1118745783901@qq.com','','','223.69.41.168','1399634928','0','0','0b6388','');");
E_D("replace into `pre_ucenter_members` values('1334','zhanghao2013','822fb81c56de5f1452cf2f5d3e2a2642','zhanghaozixin@163.com','','','223.69.41.168','1399635320','0','0','843c7a','');");
E_D("replace into `pre_ucenter_members` values('1335','zhanghao990','f0d9f53c26698ead969e4d5f28c94a87','mqw1210@163.com','','','124.207.38.24','1399711331','0','0','319d17','');");
E_D("replace into `pre_ucenter_members` values('1336','souho','31763850cddb228415a114856339274f','test@souho.net','','','127.0.0.1','1405220322','0','0','2b5fc3','');");
E_D("replace into `pre_ucenter_members` values('1337','wanpin123','9998d5d0ae8b8e6c10ffb6803b36b982','admin@wanpin123.com','','','127.0.0.1','1409742036','0','0','452512','');");
E_D("replace into `pre_ucenter_members` values('1338','wanpin123com','01fcf50ba3dd130a8032b5f85cf96b00','wanpin123@wanpin123.com','','','127.0.0.1','1409742085','0','0','5b80bc','');");
E_D("replace into `pre_ucenter_members` values('1339','wanpin123com1','dc8f5267038fd806b3e929d9da942313','wanpin123@wanpin123.com1','','','127.0.0.1','1409742525','0','0','dd8748','');");
E_D("replace into `pre_ucenter_members` values('1340','1817426104','9578365e1310693a98eddc49c3eb3549','1817426104@qqs.com','','','127.0.0.1','1409742737','0','0','140b05','');");

require("../../inc/footer.php");
?>