<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$_A['list_purview']["ucenter"]["name"] = "UCenter";
$_A['list_purview']["ucenter"]["result"]["ucenter_user"] = array("name"=>"��������","url"=>"code/ucenter/list");



/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/
if ($_A['query_type'] == "list"){
	include_once("ucenter.class.php");
	if (IsExiest($_POST['uc_dbhost'])!=""){
		$var = array("uc_status","uc_dbhost","uc_dbuser","uc_dbpw","uc_dbname","uc_charset","uc_dbtablepre","dz_dbtablepre","uc_key","uc_api","uc_ip","uc_appid");
		$index = post_var($var);
		$result = ucenterClass::Manage($index);
		$content = "<? define('UC_CONNECT', 'mysql');
					define('UC_DBHOST', '".$index['uc_dbhost']."');
					define('UC_DBUSER', '".$index['uc_dbuser']."');
					define('UC_DBPW', '".$index['uc_dbpw']."');
					define('UC_DBNAME', '".$index['uc_dbname']."');
					define('UC_DBCHARSET', '".$index['uc_charset']."');
					define('UC_DBTABLEPRE', '".$index['uc_dbtablepre']."');
					define('UC_DZTABLEPRE', '".$index['dz_dbtablepre']."');
					define('UC_DBCONNECT', '0');
					define('UC_KEY', '".$index['uc_key']."');
					define('UC_API', '".$index['uc_api']."');
					define('UC_CHARSET', '".$index['uc_charset']."');
					define('UC_IP', '".$index['uc_ip']."');
					define('UC_APPID', '".$index['uc_appid']."');
					define('UC_PPP', '20'); ?>";
		create_file("modules/ucenter/config.inc.php",$content);
		$msg = array("�޸ĳɹ�","",$url);
	
	}else{
		$_A['result'] = ucenterClass::GetList();
	
	}
	
}

?>