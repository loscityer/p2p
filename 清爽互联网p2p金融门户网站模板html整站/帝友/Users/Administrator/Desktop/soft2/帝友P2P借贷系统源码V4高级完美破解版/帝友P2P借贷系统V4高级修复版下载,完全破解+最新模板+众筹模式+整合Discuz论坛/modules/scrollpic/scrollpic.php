<?
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

include_once("scrollpic.class.php");


$_A['list_purview']["scrollpic"]["name"] = "flash��ͼ����";
$_A['list_purview']["scrollpic"]["result"]["scrollpic_list"] = array("name"=>"�б����","url"=>"code/scrollpic/list");
$_A['list_purview']["scrollpic"]["result"]["scrollpic_new"] = array("name"=>"��ӹ���","url"=>"code/scrollpic/new");
$_A['list_purview']["scrollpic"]["result"]["scrollpic_type"] = array("name"=>"���͹���","url"=>"code/scrollpic/type");


check_rank("scrollpic_list");//���Ȩ��
/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/
if ($_A['query_type'] == "list"){
	
}
	
	
/**
 * ��������
**/
elseif ($_A['query_type'] == "type"){
	if (isset($_REQUEST['del_id'])){
		if ($_REQUEST['del_id'] !=1){
			$mysql->db_delete("scrollpic_type","id=".$_REQUEST['del_id']);
			$msg = array("ɾ���ɹ�","",$_A['query_url']."/type");
		}else{
			$msg = array("����ID1Ϊϵͳ���ͣ�����ɾ��","",$_A['query_url']."/type");
		}
	}elseif (!isset($_POST['submit'])){
		$_A['scrollpic_type_list'] = scrollpicClass::GetTypeList();
	}else{
		foreach ($_POST['id'] as $key => $val){
			$mysql->db_query("update {scrollpic_type} set typename='".$_POST['typename'][$key]."' where id=".$val);
		}
		if ($_POST['typename1']!=""){
			$index['typename'] = $_POST['typename1'];
			$mysql->db_add("scrollpic_type",$index,"notime");
		}
		$msg = array("���Ͳ����ɹ�","",$_A['query_url']."/type");
	}
}

/**
 * ���
**/
elseif ($_A['query_type'] == "new" || $_A['query_type'] == "edit" ){
	if (isset($_POST['type_id']) && $_POST['type_id']!=""){
		$var = array("type_id","status","order","url","name","summary");
		foreach ( $var as $val){
			$data[$val] = !isset($_POST[$val])?"":$_POST[$val];
		}
		
		$datapic['file'] = "pic";
		$datapic['code'] = "scrollpic";
		$datapic['user_id'] = $_G['user_id'];
		$datapic['type'] = "new";
		$datapic['aid'] = $data['type_id'];
		$pic_result = $upload->upfile($datapic);
		if ($pic_result!=""){
			$data['pic'] = $pic_result[0]['filename'];
		}
		
		
		if ($_A['query_type'] != "new"){
			$data['id'] = $_POST['id'];
			$result = scrollpicClass::Update($data);
		}else{
			$result = scrollpicClass::Add($data);
		}
		if ($result == false){
			$msg = array("���������������Ա��ϵ");
		}else{
			$msg = array("�����ɹ�","������һҳ",$_A['query_url']);
		}
	
	
	}else{
		$_A['scrollpic_type_list'] = scrollpicClass::GetTypeList();
		if ($_A['query_type'] == "edit"){
			$_A['scrollpic_result'] = scrollpicClass::GetOne(array("id"=>$_REQUEST['id']));
		}
	}
}
	
	
/**
 * ɾ��
**/
elseif ($_A['query_type'] == "del"){
	$data['id'] = $_REQUEST['id'];
	$result = scrollpicClass::Delete($data);
	if ($result !== true){
		$msg = array($result);
	}else{
		$msg = array("ɾ���ɹ�","������һҳ",$_A['query_url']);
	}
}


?>