<?php
/******************************
 * $File: index.php
 * $Description: ��̨�����ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

//�����̨�Ĺ�ͬ���ñ���
$_A = array();
//���
$_A['list_purview']["system"]["name"] = "ϵͳ����";
$_A['list_purview']["system"]["result"]["system_clearcache"] = array("name"=>"��ջ���","url"=>"system/clearcache");
$_A['list_purview']["system"]["result"]["system_info"] = array("name"=>"ϵͳ����","url"=>"system/info");
$_A['list_purview']["system"]["result"]["system_watermark"] = array("name"=>"ͼƬˮӡ","url"=>"system/watermark");
//$_A['list_purview']["system"]["result"]["system_fujian"] = array("name"=>"��������","url"=>"system/fujian");
$_A['list_purview']["system"]["result"]["system_email"] = array("name"=>"��������","url"=>"system/email");
$_A['list_purview']["system"]["result"]["system_id5"] = array("name"=>"ID5����","url"=>"system/id5");
//$_A['list_purview']["system"]["result"]["system_module"] = array("name"=>"ģ�����","url"=>"system/module");
$_A['list_purview']["system"]["result"]["system_upfiles"] = array("name"=>"ͼƬ����","url"=>"system/upfiles");
$_A['list_purview']["system"]["result"]["system_users_admin"] = array("name"=>"����Ա����","url"=>"code/users/admin");
$_A['list_purview']["system"]["result"]["system_users_admin_type"] = array("name"=>"����Ա����","url"=>"code/users/admin_type");
$_A['list_purview']["system"]["result"]["system_users_admin_log"] = array("name"=>"����Ա��¼","url"=>"code/users/admin_log");
//$_A['list_purview']["system"]["result"]["system_dbbackup_back"] = array("name"=>"���ݿⱸ��","url"=>"system/dbbackup/back");


$_A['list_purview']["site"]["name"] = "վ�����";
$_A['list_purview']["site"]["result"]["site_list"] = array("name"=>"վ���б�","url"=>"system/site/list");
$_A['list_purview']["site"]["result"]["site_new"] = array("name"=>"���վ��","url"=>"system/site/new");
$_A['list_purview']["site"]["result"]["site_menu"] = array("name"=>"�˵�����","url"=>"system/site/menu");

?>