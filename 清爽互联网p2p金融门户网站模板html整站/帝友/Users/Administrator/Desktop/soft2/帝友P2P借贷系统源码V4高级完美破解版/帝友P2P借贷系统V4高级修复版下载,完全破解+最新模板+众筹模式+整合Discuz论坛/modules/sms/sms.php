<?php
/******************************
 * $File: sms.php
 * $Description: ����ģ���̨�����ļ�
 * $Author: ahui 
 * $Time:2010-06-06
 * $Update:Ahui
 * $UpdateDate:2012-06-10  
 * Copyright(c) 2010 - 2012 by deayou.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

require_once("sms.class.php");
//require_once("sms.inc.php");
$_A['list_purview']["sms"]["name"] = "���Ź���";
$_A['list_purview']["sms"]["result"]["sms_set"] = array("name"=>"���Ź���","url"=>"code/sms/set");/*
$_A['list_purview']["sms"]["result"]["sms_list"] = array("name"=>"���ͼ�¼","url"=>"code/sms/list");
*/
/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/
if ($_A['query_type'] == "list"){
	    if (isset($_POST['type']) && $_POST['type']!=""){
    		$var = array("type","id");
    		$_data = post_var($var);
    		
    		$_result = smsClass::Actionsms($_data);
    		if ($_result>0){
    			$msg = array($MsgInfo['sms_action_success'],"",$_A['query_url']);
    		}else{
    			$msg = array($MsgInfo[$_result]);
    		}	
		}
}


/**
 * ���
**/
elseif ($_A['query_type'] == "new"){
    //var_dump($_POST);exit;
	if (isset($_POST['typename'])){
		$var = array("typename","type_content","nid","advance_time","status");
		$data = post_var($var);
       
            $data['bz'] = $_POST['dyb'].'|'.$_POST['xyb'].'|'.$_POST['jzb'].'|'.$_POST['tb'].'|'.$_POST['dbb'].'|'.$_POST['lzb'].'|'.$_POST['mb'];        
    		$result = smsClass::Add($data);
    		if ($result !== true){
    			$msg = array($MsgInfo[$result]);
    		}else{
    			$msg = array("�����ɹ�");
    		}
        
	}else{
		$data['limit'] = "all";
		$data['id'] = $_REQUEST['id'];
		$_A['sms_type_result'] =smsClass::GetTypeOne($data);
		if (is_array($_A['sms_type_result'])){
		            $bzarry=explode('|',$_A['sms_type_result']['bz']);
                   
                    foreach($bzarry as $key => $value){
                        $_A['sms_type_result'][$value]=$value;
                    }
			$data['type_id'] = $_REQUEST['id'];
			$_A['sms_list'] = smsClass::GetList($data);
		}else{
			$msg = array($result);
		}
		$pname = empty($pname)?"��������":$pname;
		$magic->assign("pname",$pname);
	}
}


/**
 * ����
**/
elseif ($_A['query_type'] == "actions"){
	if (isset($_POST['id'])){
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['nid'] = $_POST['nid'];
		$data['order'] = $_POST['order'];$data['order'] = $_POST['order'];
		$data['message'] = $_POST['message'];
		$data['phone'] = $_POST['phone'];
		$data['email'] = $_POST['email'];
		$result = smsClass::Action($data);
		if ($result !== true){
			$msg = array($result);
		}else{
			$msg = array("�����ɹ�");
		}
	}else{
		//���
		if (isset($_POST['name'])){
			$data['type'] = "add";
			$data['name'] = $_POST['name'];
			$data['nid'] = $_POST['nid'];
			$data['type_id'] = $_POST['type_id'];
			$data['order'] = $_POST['order'];
			$data['message'] = $_POST['message'];
			$data['phone'] = $_POST['phone'];
			$data['email'] = $_POST['email'];
			$result = smsClass::Action($data);
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�");
			}
		}else{
			$msg = array("��������");
		}
	}
}
/**
 * �ر�
**/
elseif ($_A['query_type'] == "close"){
	$id = $_REQUEST['id'];
	$result = smsClass::Close(array("id"=>$id));
	if ($result !== true){
		$msg = array($MsgInfo[$result]);
	}else{
		$msg = array("�رճɹ�");
	}
}
/*
* ����
*/
elseif ($_A['query_type'] == "open"){
	$id = $_REQUEST['id'];
	$result = smsClass::Open(array("id"=>$id));
	if ($result !== true){
		$msg = array($MsgInfo[$result]);
	}else{
		$msg = array("�����ɹ�");
	}
}
/**
 * �޸�
**/
elseif ($_A['query_type'] == "type_edit"){
	if (isset($_POST['typename'])){
		$var = array("typename","nid","type_content","advance_time","status");
		$data = post_var($var);
        if(strlen($data['type_content'])>104){
            $msg=array("����ģ��������������");
         }elseif(strlen($data['type_content'])==0){
            $msg=array("����ģ����������Ϊ��");
        }else{
            $data['bz'] = $_POST['dyb'].'|'.$_POST['xyb'].'|'.$_POST['jzb'].'|'.$_POST['tb'].'|'.$_POST['dbb'].'|'.$_POST['lzb'].'|'.$_POST['mb'];        
    		
    		if ($_A['query_type'] == "type_new"){
    			$result = smsClass::AddType($data);
    			if ($result !== true){
    				$msg = array($result);
    			}else{
    				$msg = array("��ӳɹ�");
    			}
    		}else{
    			$data['id'] = $_POST['id'];
               
    			$result = smsClass::UpdateType($data);
    			if ($result !== true){
    				$msg = array($MsgInfo[$result]);
    			}else{
    				$msg = array("�޸ĳɹ�",'',$_A['query_url']."/set");
    			}
    		}
         }
		//$user->add_log($_log,$result);//��¼����
	}elseif( $_A['query_type'] == "type_edit"){
		$data['id'] = $_REQUEST['id'];
		$_A['sms_type_result'] = smsClass::GetTypeOne($data);
        	if (is_array($_A['sms_type_result'])){
		            $bzarry=explode('|',$_A['sms_type_result']['bz']);
                   
                    foreach($bzarry as $key => $value){
                        $_A['sms_type_result'][$value]=$value;
                    }
                    }
	}
}

/**
 * ɾ��
**/
elseif ($_A['query_type'] == "type_del"){
	$result = LsmsClass::DeleteType($_REQUEST['id']);
	if ($result !== true){
		$msg = array($result);
	}else{
		$msg = array("ɾ���ɹ�");
	}
	$user->add_log($_log,$result);//��¼����
}
/**
 * ��������
**/
elseif ($_A['query_type'] == "type_action"){
	if (isset($_POST['id'])){
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['nid'] = $_POST['nid'];
		$data['order'] = $_POST['order'];
		$result = smsClass::ActionType($data);
		if ($result !== true){
			$msg = array($result);
		}else{
			$msg = array("�����ɹ�");
		}
	}else{
		if (isset($_POST['name'])){
			$data['type'] = $_POST['type'];
			$data['name'] = $_POST['name'];
			$data['nid'] = $_POST['nid'];
			$data['order'] = $_POST['order'];
			$result = smsClass::ActionType($data);
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("�����ɹ�");
			}
		}else{
			$msg = array("��������");
		}
	}
}

/*//��ֹ�Ҳ���
else{
	$msg = array("���������벻Ҫ�Ҳ���","",$url);
}*/



?>