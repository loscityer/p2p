<?
/******************************
 * $File: spread.php
 * $Description: �ƹ����
 * $Author: Xiaowu 
 * $Time:2012-04-19
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$_A['list_purview']["spread"]["name"] = "�ƹ����";
$_A['list_purview']["spread"]["result"]["spread_user"] = array("name"=>"�����ƹ�","url"=>"code/spread/user");
$_A['list_purview']["spread"]["result"]["spread_setting"] = array("name"=>"�ƹ�����","url"=>"code/spread/setting&type=1");
$_A['list_purview']["spread"]["result"]["spread_tender"] = array("name"=>"Ͷ���ƹ�","url"=>"code/spread/tender");
$_A['list_purview']["spread"]["result"]["spread_borrow"] = array("name"=>"����ƹ�","url"=>"code/spread/borrow");
$_A['list_purview']["spread"]["result"]["spread_verify"] = array("name"=>"����ƹ�","url"=>"code/spread/verify");
$_A['list_purview']["spread"]["result"]["spread_other"] = array("name"=>"�����ƹ�","url"=>"code/spread/other");
$_A['list_purview']["spread"]["result"]["spread_more"] = array("name"=>"�����ƹ�","url"=>"code/spread/more");

require_once("spread.class.php");
require_once("spread.model.php");
require_once(ROOT_PATH."modules/account/account.class.php");


/**
 * �����ƹ�
**/
if ($_A['query_type'] == "user"){
	check_rank("spread_user");
	if (isset($_POST['submit'])){
		$var = array("spread_userid","type","alone_status");
		$data = post_var($var);
		$data['style']=0;
		if ($_POST['type']==1){
			$data['user_id']=$_POST['user_id_1'];
		}elseif ($_POST['type']==2){
			$data['user_id']=$_POST['user_id_2'];
		}elseif ($_POST['type']==3){
			$data['user_id']=$_POST['user_id_3'];
			$data['style']=$_POST['style'];
			$data['alone_status']=1;
		}elseif ($_POST['type']==6){
			$data['style']=$_POST['style'];
			$data['user_id']=$_POST['user_id_4'];
		}
		if ($data['user_id']==$data['spread_userid']){
			$msg = array($MsgInfo["spread_user_id_same"],"",$_A['query_url']."/user");
		}
		if ($msg == ""){
			$result=spreadClass::GetSpreadUserOne($data);
			if ($result>0){
				$result=spreadClass::UpdateSpreadUser($data);
			}else{
				$result=spreadClass::AddSpreadUser($data);
			}
			if ($result>0){
				$msg = array($MsgInfo["spread_action_success"],"",$_A['query_url']."/user");
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
	}
}

/**
 * Ͷ���ƹ��б�
**/
if ($_A['query_type'] == "tender"){

	check_rank("spread_tender");
}

/**
 * ����ƹ��б�
**/
elseif ($_A['query_type'] == "borrow"){

	check_rank("spread_borrow");
}

/**
 * ����ƹ��б�
**/
elseif ($_A['query_type'] == "verify"){

	check_rank("spread_verify");
}

/**
 *�����ƹ��б�
**/
elseif ($_A['query_type'] == "other"){

	check_rank("spread_other");
}

elseif ($_A['query_type'] == "addone"){

		if ($_REQUEST['style']=="borrow"){
			$name="����ƹ�";
		}elseif ($_REQUEST['style']=="tender"){
			$name="Ͷ���ƹ�";
		}else{
			$name="�����ƹ�";
		}
		$log_info["user_id"] = $_REQUEST['user_id'];//�����û�id
		$log_info["nid"] = "spread_add_".$_REQUEST['user_id'].time();//������
		$log_info["money"] = $_REQUEST['money'];//�������
		$log_info["income"] = $_REQUEST['money'];//����
		$log_info["expend"] = 0;//֧��
		$log_info["balance_cash"] = $_REQUEST['money'];//�����ֽ��
		$log_info["balance_frost"] = 0;//�������ֽ��
		$log_info["frost"] = 0;//������
		$log_info["await"] = 0;//���ս��
		$log_info["type"] = $_REQUEST['style']."_spread_add";//����
		$log_info["to_userid"] = 0;//����˭
		$log_info["remark"] =  "{$_REQUEST['year']}��{$_REQUEST['month']}��{$name}��{$_REQUEST['money']}Ԫ";
		accountClass::AddLog($log_info);
		$web['money']=$_REQUEST['money'];
		$web['user_id']=$_REQUEST['user_id'];
		$web['nid']="spread_addin_".$_REQUEST['user_id']."_".time();
		$web['type']="spread_addin";
		$web['remark']="�û��յ���վ�����{$_REQUEST['year']}��{$_REQUEST['month']}��{$name}��{$_REQUEST['money']}Ԫ";
		accountClass::AddAccountWeb($web);
		$data['year']=$_REQUEST['year'];
		$data['month']=$_REQUEST['month'];
		$data['money']=$_REQUEST['money'];
		$data['user_id']=$_REQUEST['user_id'];
		$result=spreadClass::AddMoney($data);
		if ($result>0){
			$msg = array("�����˻��ɹ�","",$_A['query_url']."/".$_REQUEST['style']."info&user_id={$_REQUEST['user_id']}");
		}
}

elseif ($_A['query_type'] == "delsetting"){

	check_rank("spread_setting");
	if ($_REQUEST['id']!=""){
		$data['id']=$_REQUEST['id'];
		$result=spreadClass::DelSetting($data);
		if ($result>0){
			$msg = array("ɾ���ɹ�","",$_A['query_url']."/setting&type=1");
		}
	}
}

/**
 *�ƹ��������
**/
elseif ($_A['query_type'] == "setting"){

	check_rank("spread_setting");
	check_rank("setting");
	if (isset($_POST['submit'])){
		$var = array("month","task","admin_userid","type","id","task_fee","task_first","task_last");
		$data = post_var($var);
		if ($data['id']==""){
			$result=spreadClass::AddSetting($data);
		}else{
			$result=spreadClass::UpdateSetting($data);
		}
		if ($result>0){
			$msg = array($MsgInfo["spread_action_success"],"",$_A['query_url']."/setting&type=1");
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}
}
?>