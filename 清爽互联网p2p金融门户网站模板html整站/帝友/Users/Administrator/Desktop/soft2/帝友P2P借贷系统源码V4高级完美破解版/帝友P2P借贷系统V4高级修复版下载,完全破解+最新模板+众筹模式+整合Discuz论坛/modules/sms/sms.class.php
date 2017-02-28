<?php
/******************************
 * $File: sms.class.php
 * $Description: ����ģ���̨
 * $Author: ahui 
 * $Time:2010-06-06
 * $Update:Ahui
 * $UpdateDate:2012-06-10  
 * Copyright(c) 2010 - 2012 by deayou.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

require_once("sms.model.php");

class smsClass{	
	
	
	/**
	 * ��������б�
	 *	@param $param $data
	 * @return Array ('list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��')
	 */
	function GetList($data = array()){
		global $mysql;
		
		$name = $data['name'];
		$type_id = $data['type_id'];
		
		$_sql = " where 1=1 ";
		if ($name!=""){
			$_sql .= " and p1.`name` like '%$name%'";
		}
		if ($type_id!=""){
			$_sql .= " and p1.`type_id` = '$type_id'";
		}
		
		$_select = "p1.*,p2.name as type_name";
		$sql = "select SELECT from {sms} as p1 
				left join {sms_type} as p2 on p1.type_id=p2.id
				{$_sql}   ORDER LIMIT ";
		
	
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
		
	}
	
	/**
	 * ����б�
	 * @param $param $data
	 * @return Array
	 */
	function GetLists($data = array()){
		global $mysql,$_G;
		if (isset($data['user_id'])){
			$user_id = $data['user_id'];
		}else{
			return self::ERROR;
		}
		$sql = "select * from `{sms_user}` where user_id='{$user_id}'";
		$sms_result = $mysql->db_fetch_array($sql);
		if ($sms_result==false){
			$sql = "insert into `{sms_user}` set user_id='{$user_id}'";
			$mysql->db_query($sql);
			$sql = "select * from `{sms_user}` where user_id='{$user_id}'";
			$sms_result = $mysql->db_fetch_array($sql);
		}
		$sms_user = unserialize($sms_result['sms']);
		
		//����û��������б�
		$sql = "select id,name,nid from {sms_type} order by `order` desc";
		$type_list = $mysql->db_fetch_arrays($sql);
		
		//������е��б�
		$sql = "select SELECT from {sms} ORDER ";
		$sms_list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER'), array('*', ' order by `order` desc'), $sql));
		
		
		//�ж��Ƿ��Ѿ������ֻ���֤
		$phone_status = $_G['user_info']['phone_status'];
		//$phone_module = $mysql->db_fetch_array($sql);
		
		$_result = "";
		foreach ($type_list as $key =>$value){
			$_result[$value['id']] = $value;
			foreach ($sms_list as $_key => $_value){
				if ($_value['type_id']==$value['id']){
					if ($phone_status!=1){
						$_value['phone'] = 2;
					}
					
					if ($sms_user!=false){
						if (isset($sms_user[$_value['nid']]['message'])){
							if ($_value['message']!=1 && $_value['message']!=2){
								$_value['message'] = 3;
							}
						}else{
							if ($_value['message']==3){
								$_value['message'] = 4;
							}
						}
						if (isset($sms_user[$_value['nid']]['email'])){
							if ($_value['email']!=1 && $_value['email']!=2){
								$_value['email'] = 3;
							}
						}else{
							if ($_value['email']==3){
								$_value['email'] = 4;
							}
						}
						if (isset($sms_user[$_value['nid']]['phone'])){
							if ($_value['phone']!=1 && $_value['phone']!=2){
								$_value['phone'] = 3;
							};
						}else{
							if ($_value['phone']==3){
								$_value['phone'] = 4;
							}
						}
					}
					
					$_result[$value['id']]['list'][$_value['id']] = $_value;
				}
			}
		}
		return $_result;
	}
	
	/**
	 * �鿴����
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetOne($data = array()){
		global $mysql;
		$id = $data['id'];
		if($id == "") return "sms_error_id_empty";
		$sql = "select * from {sms} where id=$id";
		return $mysql->db_fetch_array($sql);
	}
	
	/**
	 * �鿴��������
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetNidOne($data = array()){
		global $mysql;
		$nid = $data['nid'];
		if($nid == "") return "sms_error_nid_empty";
		$sql = "select * from {sms} where nid='$nid'";
		return $mysql->db_fetch_array($sql);
	}
	
	
	
	/**
	 * �������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Add($data = array()){
	  // var_dump($data);exit();
		global $mysql;
        if (!isset($data['typename']) || $data['typename'] == "" ) {
            return "sms_error_name_empty";
        }
          if(strlen($data['type_content'])>104){
            return 'sms_type_content_error';
        }elseif(strlen($data['type_content'])==0){
           return 'sms_type_content_empty';
        }
        if (!isset($data['nid']) || $data['nid'] == "" ) {
            return "sms_error_nid_empty";
        }
         if ($data['advance_time'] == ""  ) {
            return "sms_error_advance_time_empty";
        }
        
        /*if (!isset($data['sms_pre']) || $data['sms_pre'] == "" ) {
            return "sms_error_pre_empty";
        }*/
        if (!isset($data['type_content']) || $data['type_content'] == "" ) {
            return "sms_error_content_empty";
        }
        $sql = "select 1 from `{sms_type}` where nid = '{$data['sms_nid']}'";
        $result = $mysql->db_fetch_array($sql);
        if ($result!=false) return "sms_error_nid_empty";
		$sql = "insert into `{sms_type}` set `addtime` = '".time()."',`addip` = '".ip_address()."',`updatetime` = '".time()."',`updateip` = '".ip_address()."'";
		
		foreach($data as $key => $value){
			$sql .= ",`$key` = '$value'";
		}
       return $mysql->db_query($sql);
	}
	
	
	
	/**
	 * �޸�
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Update($data = array()){
		global $mysql;
		$id = $data['id'];
        if ($data['name'] == ""  || $data['id'] == "") {
            return "sms_error_id_empty";
        }
		$sql = "update `{sms}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where id = '$id'";
        $result = $mysql->db_query($sql);
		if ($result == false) return "sms_error_id_empty";
		return true;
	}
	
	
	/**
	 * ɾ��
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function Delete($data = array()){
		global $mysql;
		$id = $data['id'];
		if (!is_array($id)){
			$id = array($id);
		}
		$sql = "delete from {sms}  where id in (".join(",",$id).")";
		$mysql->db_query($sql);
		return true;
	}
	
	
	/**
	 * �޸�������Ϣ
	 *
	 * @param Array $data['name'],$data['nid'],$data['order'],$data['message'],$data['phone'],$data['email'],$data['type']
	 * @return Boolen
	 */
	public static function Action($data = array()){
		global $mysql;
		$name = $data['name'];
		$nid = $data['nid'];
		$order = $data['order'];
		$message = $data['message'];
		$phone = $data['phone'];
		$email = $data['email'];
		$type = $data['type'];
		unset($data['type']);
		if ($type == "add"){
			$type_id = $data['type_id'];
			foreach ($name as $key => $val){
				if ($val!="" && $nid[$key]!=""){
					$sql = "insert into {sms} set `type_id`='".trim($type_id)."',`name`='".trim($name[$key])."',`nid`='".trim($nid[$key])."',`message`='".$message[$key]."',`email`='".$email[$key]."',`phone`='".$phone[$key]."',`order`='".trim($order[$key])."' ";			
					$mysql->db_query($sql);
				}
			}
		}else{
			$id = $data['id'];
			foreach ($id as $key => $val){
				if ($name[$key]!="" && $nid[$key]!=""){
					$sql = "update {sms} set `name`='".trim($name[$key])."',`nid`='".trim($nid[$key])."',`order`='".$order[$key]."',`message`='".$message[$key]."',`email`='".$email[$key]."',`phone`='".$phone[$key]."' where id=$val";			
					$mysql->db_query($sql);
				}
			}
		}
		
		return true;
	}
	
	
	
	/**
	 * ���������б�
	 *
	 * @param Array $data
	 * @return Array ('list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��')
	 */
	public static function GetTypeList($data = array()){
		global $mysql;
	
		$name = $data['name'];		
		$_sql = " where 1=1 ";
		if ($name!=""){
			$_sql .= " and p1.`name` like '%$name%'";
		}
		$_select = " p1.*";
		$sql = "select SELECT from {sms_type} as p1 {$_sql}   ORDER LIMIT";
		
		//�Ƿ���ʾȫ������Ϣ
		if (IsExiest($data['limit'])!=false){
			if ($data['limit'] != "all"){ $_limit = "  limit ".$data['limit']; }
			return $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array($_select, $_sql, $_order, $_limit), $sql));
		}			 
		
		//�ж��ܵ�����
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array('count(1) as num', $_sql,'', ''), $sql));
		$total = intval($row['num']);
		
		//��ҳ���ؽ��
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_limit = " limit ".($data['epage'] * ($data['page'] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	/**
	 * �鿴
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetTypeOne($data = array()){
		global $mysql;
		$id = $data['id'];
		if($id == "") return "sms_error_id_empty";
		$sql = "select * from `{sms_type}` where id=$id";
		$result = $mysql->db_fetch_array($sql);
		return $result;
	}
	
	/**
	 * ���
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddType($data = array()){
		global $mysql;
        if ($data['name'] == ""  ) {
            return "sms_error_name_empty";
        }
		 if ($data['nid'] == ""  ) {
            return "sms_error_nid_empty";
        }
        if ($data['advance_time'] == ""  ) {
            return "sms_error_advance_time_empty";
        }
		$sql = "select * from {sms_type} where `nid` = '".$data['nid']."'";
		$result = $mysql->db_fetch_array($sql);
		if ($result !=false) return "sms_error_id_empty";
		
		$_sql = "";
		$sql = "insert into `{sms_type}` set ";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." ";
        return $mysql->db_query($sql);
	}
	
	
	/**
	 * ������������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function UpdateType($data = array()){
		global $mysql;
        //var_dump($data);exit;
        if ($data['typename'] == ""  || $data['id'] == "") {
            return "sms_error_id_empty";
        }
        if ($data['advance_time'] == ""  ) {
            return "sms_error_advance_time_empty";
        }
		$id = $data['id'];
		
		$sql = "update `{sms_type}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql).",`updatetime`='".time()."',`updateip`='".ip_address()."' where `id` = '$id'";
        $mysql->db_query($sql);
		return true;
	}
	
	/**
	 * ɾ����������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function DeleteType($data = array()){
		global $mysql;
		$id = $data['id'];
		if  ($id == "") return "sms_error_id_empty";
		if (!is_array($id)){
			$id = array($id);
		}
		$sql = "delete from {`sms_type`}  where `id` in (".join(",",$id).")";
		$mysql->db_query($sql);
		$sql = "delete from {`sms`}  where `type_id` in (".join(",",$id).")";
		$mysql->db_query($sql);
		return true;
	}
	
	
	/**
	 * �޸���������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function ActionType($data = array()){
		global $mysql;
		$nid = $data['nid'];
		$name = $data['name'];
		$order = $data['order'];
		$type = $data['type'];
		unset($data['type']);
		if ($type == "add"){
			foreach ($name as $key => $val){
				if ($val!="" && $nid[$key]!=""){
					$sql = "insert into {sms_type} set `name`='".$name[$key]."',`nid`='".$nid[$key]."',`order`='".$order[$key]."' ";			
					$mysql->db_query($sql);
				}
			}
		}else{
			$id = $data['id'];
			foreach ($id as $key => $val){
				$sql = "update {sms_type} set `name`='".$name[$key]."',`order`='".$order[$key]."' where id=$val";			
				$mysql->db_query($sql);
			}
		}
		return true;
	}
	
	/**
	 * �޸��û�����
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function ActionsmsUser($data){
		global $mysql;
		if  (!isset($data['user_id'])) return "sms_error_nid_empty";
		$user_id = $data['user_id'];
		$sms = $data['sms'];
		$sql = "update {sms_user} set sms='{$sms}' where user_id=$user_id";
		return $mysql->db_query($sql);
	}
	
	
	//nid,��Ҫ�����ı�ʶ��
	//title ����
	//content ����
	//phone���ֻ�����
	//email������
	//sent_user,�����û�id
	//receive_user,�����û�id
	//type,����
	function sendsms($data){
	   //var_dump($data);exit;
		global $mysql,$user,$_G;
		
		//�Ƿ��ֹ����ģ��
		//if ($_G['system']['sms_status']==0) return "";
		$sms_user = array();
		if ($data['receive_user']!=""){
		$data['receive_userid'] = $data['receive_user'];
		}
        //�ж��Ƿ����
        $sql = "select 1 from `{sms_log}` where sms_nid='{$data['sms_nid']}'";
        $_log_result = $mysql->db_fetch_array($sql);
        if ($_log_result==false){
            $_log["user_id"] = $data["receive_userid"];
            $_log["nid"] = $data["nid"];
            $_log["sms_nid"] = $data["sms_nid"];
            $_log["code"] = $data["code"];
            $_log["article_id"] = $data["article_id"];
            $_log["title"] = $data["title"];
            $_log["content"] = $data["content"];
            self::AddLog($_log);
        }else{
            return "";
        }
       
		$sql = "select sms from `{sms_user}` where user_id='{$data['receive_userid']}'";
		$result = $mysql->db_fetch_array($sql);
       
       //var_dump($result);
       //echo 'sssssssssssssss';
		if ($result !=false){		  
			$sms_user = unserialize ($result['sms']);
            //var_dump($sms_user);
		}
	    if($sms_user!=false){
    		$sms_result = self::GetNidOne(array("nid"=>$data['nid']));
    		//echo '++++++++++++++++';
            //echo '<pre>';
            //var_dump($sms_result);exit;
    		/* $message_status = isset($sms_user[$data['nid']]['message'])?$sms_user[$data['nid']]['message']:$sms_result['message'];	
    		$email_status = isset($sms_user[$data['nid']]['email'])?$sms_user[$data['nid']]['email']:$sms_result['email'];	 */
    		
    		if($sms_result['message']==3||$sms_result['message']==4){
    			$message_status = isset($sms_user[$data['nid']]['message'])?$sms_user[$data['nid']]['message']:4;	
    		}else{
    			$message_status = $sms_result['message'];
    		}
    		if($sms_result['email']==3||$sms_result['email']==4){
    			$email_status = isset($sms_user[$data['nid']]['email'])?$sms_user[$data['nid']]['email']:4;	
    		}else{
    			$email_status = $sms_result['email'];
    		}
    		
    		if ($data['phone_status']==""){
    			$phone_status = isset($sms_user[$data['nid']]['phone'])?$sms_user[$data['nid']]['phone']:$sms_result['phone'];	
    		}else{
    			$phone_status = $data['phone_status'];
    		}	
          
    		$email = isset($data['email'])?$data['email']:$result['email'];
    		$phone = isset($data['phone'])?$data['phone']:$result['phone'];
    		$_result = array();
    		//echo $message_status.'+++++++'.$email_status.'++++++++++'.$phone_status; exit;
    		if ($message_status==1 || $message_status==3){
    			require_once("modules/message/message.class.php");
    			$message['send_userid'] = "0";
    			$message['user_id'] = $data['receive_userid'];
    			$message['name'] = $data['title'];
    			$message['contents'] = $data['content'];
    			$message['type'] = 'user';
    			$message['status'] = $data['status'];
               // var_dump($message);exit;
    			$_result['message_result'] = messageClass::SendMessages($message);
    		}
    		
    		if ($email_status==1 || $email_status==3){
    			$remail['user_id'] = $data['receive_userid'];
    			$remail['title'] = $data['title'];
    			if ($data['email_content']==""){
    				$remail['msg'] =  $_G["system"]["con_webname"]."��ʾ��".$data['content'];
    			}else{
    				$remail['msg'] =$data['email_content'];
    			}
                require_once(ROOT_PATH."modules/users/users.function.php");
                if (function_exists("GetEmailMsg")){
                    $remail['msg'] = GetEmailMsg(array("user_id"=>$remail['user_id'],"contents"=>$remail['msg']));
                }
    			$_result['email_result'] = usersClass::SendEmail($remail);
    		}
    		if ($phone_status==1 || $phone_status==3){
    			require_once("modules/approve/approve.class.php");
    			$send_sms['status'] = 1;
    			$send_sms['type'] = $data['type'];
    			if ($data['phone_content']==""){
    				$send_sms['contents'] =  $data['content']."[{$_G['system']['con_webname']}]";
    			}else{
    				$send_sms['contents'] =$data['phone_content'];
    			}
    				$send_sms['phone'] = $data['phone'];
    				$send_sms['user_id'] = $data['receive_userid'];
    			
    			$_result['phone_result'] = approveClass::SendSMS($send_sms);
    		}
        }
		return $_result;
	}
	//��Ӽ�¼
	//$data['user_id']�û�id
	//$data['type']�������� �� message����Ϣ sms ���� email����
	//$data['style'] ���ͣ�
	//$data['content']����
	//$data['contract']��ϵ��ʽ
	//$data['status']��ϵ��ʽ
	function AddLog($data){
		global $mysql;
		$sql = "insert into `{sms_log}` set `addtime` = '".time()."',`addip` = '".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." ";
        return $mysql->db_query($sql);
	}
    
    //���� ���� ĳ ����
    function Open($data){
        global $mysql;
        if(!isset($data['id'])){
            return 'sms_option_fail';
        }
        $o_sql="update `{sms_type}` set status=1,`updatetime` = '".time()."',`updateip` = '".ip_address()."' where id='{$data['id']}' ";
        $mysql->db_query($o_sql);
		return true;
    }
    //�ر� ���� ĳ ����
    function Close($data){
        global $mysql;
        if(!isset($data['id'])){
            return 'sms_option_fail';
        }
        $c_sql="update `{sms_type}` set status=0,`updatetime` = '".time()."',`updateip` = '".ip_address()."' where id='{$data['id']}' ";
        $mysql->db_query($c_sql);
		return true;
    }
    
    //���Ͷ��ŷ��� 
    /*
    * @param Array $data = array("smstype"=>"sms","type"=>"����","user_id"=>"�û�","phone"=>"�绰","content"=>"����","time"=>"����ʱ��");
	* @return Array
    */
    function sendsSms($data){
        global $mysql,$_G;
        require_once("modules/approve/approve.class.php");	
       //var_dump($data['user_id']);exit;
       //echo count($data['user_id']);
        if(is_array($data['user_id'])){//�±���������
            //��ȡ�ñ���Ϣ
            $borrow_sql="select user_id,borrow_period,borrow_apr,account,borrow_type,name from `{borrow}` where borrow_nid='{$data['borrow_nid']}'";
            $borr_result=$mysql->db_fetch_array($borrow_sql);
            $borr_username = $mysql->db_fetch_array("select username from `{users}` where user_id='{$borr_result['user_id']}'");
            //foreach($data['user_id'] as $key=>$value){
               
            for($j=0;$j<count($data['user_id']);$j++){  
                
                $send_sms['type'] = $data['type'];
        		//ͨ������ ��ȡ����ģ��
                $type=$data['type'];
                $sql="select p1.status as smsstatus,p1.type_content,p1.bz,p2.*,p3.sex,p4.phone as app_phone from `{sms_type}` as p1 left join  `{users_info}` as p2 on p2.user_id='".$data['user_id'][$j]."' left join `{rating_info}` as p3 on p3.user_id ='".$data['user_id'][$j]."' left join `{approve_sms}` as p4 on p4.user_id='".$data['user_id'][$j]."' and p4.status=1 where p1.nid='".$type."'";
                $result=$mysql->db_fetch_array($sql);
                $result['type_content']=str_replace('[newusername]',$borr_username['username'],$result['type_content']);
                $result['type_content']=str_replace('[newaccount]',$borr_result['account'],$result['type_content']);
                $result['type_content']=str_replace('[newmonth]',$borr_result['borrow_period'],$result['type_content']);
                $result['type_content']=str_replace('[newapr]',$borr_result['borrow_apr'],$result['type_content']);
                $result['type_content']=str_replace('[newtitle]',$borr_result['name'],$result['type_content']);
                if($result['sex']=="0"||$result['sex']==""){
                    $t_result=$mysql->db_fetch_array('select sex from `{approve_realname}` where user_id='.$data['user_id'][$j].'');
                    $result['sex']=$t_result['sex'];
                }
                if($result['sex']==1){
                    $result['type_content']=str_replace('����/Ůʿ','����',$result['type_content']);
                }else if($result['sex']==2){
                    $result['type_content']=str_replace('����/Ůʿ','Ůʿ',$result['type_content']);
                }
                /*if($result['realname']==""||$result['realname']==null){
                    $sql_t0='select username from `{users}` where user_id='.$value.'';
                    $t_result0 = $mysql->db_fetch_array($sql_t0);
                    $send_sms['contents'] =$t_result0['username'].$result['type_content'];
                }else{
                    $send_sms['contents'] =$result['realname'].$result['type_content'];  
                }*/
                $send_sms['contents']=$result['type_content'];
                //echo 	$result['phone'].'++'.$data['user_id'][$j];
        		$send_sms['phone'] = $result['app_phone'];
                $bzarry=explode('|',$result['bz']);
                
                $bztf=false;
               
                /*foreach($bzarry as $key0 => $value0){
                    
                        if($value0==$borr_result['borrow_type']){
                            $bztf=true;
                           echo $data['user_id'][$j].'---';
                        }
                }*/
                if(in_array($borr_result['borrow_type'],$bzarry)){
                    $bztf=true;
                }
               if($send_sms['phone']!=""&&$bztf==true){
                    $send_sms['user_id'] = $data['user_id'][$j];
                    $send_sms['send_code'] = $data['smstype'];
            		if($result['smsstatus']==1&&$data['user_id'][$j]!=$borr_result['user_id']){
            		    $send_sms['status'] = $result['smsstatus'];
                        
            		  	$_result['phone_result'] = approveClass::SendSMS($send_sms);
                       
                       
            		}else{
            		    $_result['phone_result'] = 'δ������������';
            		}
                }
        		
            }
        }else{
            $send_sms['type'] = $data['type'];
    		//ͨ������ ��ȡ����ģ��
            $type=$data['type'];
            $sql="select p1.status as smsstatus,p1.type_content,p1.bz,p2.*,p3.sex,p4.phone as app_phone from `{sms_type}` as p1 left join  `{users_info}` as p2 on p2.user_id='".$data['user_id']."' left join `{rating_info}` as p3 on p3.user_id ='".$data['user_id']."' left join `{approve_sms}` as p4 on p4.user_id='".$data['user_id']."' and p4.status=1 where p1.nid='".$type."'";
            $result=$mysql->db_fetch_array($sql);
          
            if($data['account']!=''&&isset($data['account'])){
                $result['type_content']=str_replace('[cashaccount]',"{$data['account']}",$result['type_content']);
                $result['type_content']=str_replace('[date]',date("Y-m-d"),$result['type_content']);
            }
            if($data['to_user']!=""&&isset($data['to_user'])){
                //$sql_t='select username from `{users}` where user_id='.$data['to_user'].'';
                //$t_result = $mysql->db_fetch_array($sql_t);
                $result['type_content']=str_replace('[tenderuname]',$data['to_user'],$result['type_content']);
                $result['type_content']=str_replace('[repayaccount]',$data['account'],$result['type_content']);
                $result['type_content']=str_replace('[time]',date("Y-m-d H:i:s", time()),$result['type_content']);
                $result['type_content']=str_replace('[t]',$data['title'],$result['type_content']);
                $result['type_content']=str_replace('[q]',$data['period'],$result['type_content']);
            
            }
            if($result['sex']=="0"||$result['sex']==""){
                $t_result=$mysql->db_fetch_array("select sex from `{approve_realname}` where user_id='{$data['user_id']}'");
                $result['sex']=$t_result['sex'];
            }
            if($result['sex']==1){
                $result['type_content']=str_replace('����/Ůʿ','����',$result['type_content']);
            }else if($result['sex']==2){
                $result['type_content']=str_replace('����/Ůʿ','Ůʿ',$result['type_content']);
            }
            if($result['realname']==""||$result['realname']==null){
                $sql_t0="select username from `{users}` where user_id='{$data['user_id']}'";
                $t_result0 = $mysql->db_fetch_array($sql_t0);
                $send_sms['contents'] =$t_result0['username'].$result['type_content'];
            }else{
                $send_sms['contents'] =$result['realname'].$result['type_content'];  
            }
    
    		$send_sms['phone'] = $result['app_phone'];
            if($send_sms['phone']==""){
                return false;
            }
    		$send_sms['user_id'] = $data['user_id'];
            $send_sms['send_code'] = $data['smstype'];
    		if($result['smsstatus']==1){
    		  $send_sms['status'] = $result['smsstatus'];
              //var_dump($send_sms);exit();
    		  	$_result['phone_result'] = approveClass::SendSMS($send_sms);
    		}else{
    		    $_result['phone_result'] = 'δ������������';
    		}
        }
        return $_result;
    }
    /**
	 * 3,��������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function Actionsms($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "sms_id_empty";
		if ($data['type'] == "delete"){
			$sql = "delete from `{approve_smslog}`  where id in ({$data['id']})";
			$mysql -> db_query($sql);
		}elseif ($data['type'] == "yes"){
			$sql = "update `{approve_smslog}`  set status=1 where id in ({$data['id']}) ";
			$mysql -> db_query($sql);
		}elseif ($data['type'] == "no"){
			$sql = "update `{approve_smslog}`  set status=2 where id in ({$data['id']}) ";
			$mysql -> db_query($sql);
		}
		return $data['id'];
	}
	
    /*
    ** ��ȡ���ż�¼
    */
    function getSmslogList($data){
        global $mysql;
        
        require_once("modules/approve/approve.class.php");
        $result=approveClass::GetSmslogList($data);
        
        $sql="select typename from `{sms_type}` where nid='{$result['type']}'";
        $sms_type=$mysql->db_fetch_array($sql);
        $result['type']=$sms_type;
        return $result;
    }
    
    /*function sendrepaynotice(){
        require_once("modules/approve/approve.class.php");
        $sql="select p1.user_id,p1.repay_time,p1.repay_period,p2.status as smsstatus,p2.type_content,p2.bz,p3.name as borrow_name, from `{borrow_repay}` as p1 left join `{sms_type}` as p2 on p2.nid='repay_notice' left join `{borrow}` as p3 on p1.borrow_nid = p3.borrow_nid where repay_time>".time()." and repay_status=0";
        $result=$mysql->db_fetch_arrays($sql);
        
        foreach($result as $key=>$value){
            $newsql="select p1.username,p2.realname,p2.sex,p3.phone as app_phone from `{users}` as p1 left join `{user_info}` as p2 on p2.user_id='".$value['user_id']."' left join `{rating_info}` as p3 on p3.user_id='".$value['user_id']."' where p1.user_id='".$value['user_id']."'";
            $newresult=$mysql->db_fetch_array($newsql); 
            if($newresult['sex']==1){
                $result['type_content']=str_replace('����/Ůʿ','����',$result['type_content']);
            }else if($newresult['sex']==2){
                $result['type_content']=str_replace('����/Ůʿ','Ůʿ',$result['type_content']);
            }
            $result['type_content']=str_replace('[t]',$result['borrow_name'],$result['type_content']);
            $result['type_content']=str_replace('[q]',$result['repay_period'],$result['type_content']);
            $result['type_content']=str_replace('[date]',date("Y-m-d",$result['repay_time']),$result['type_content']);
            	    if($newresult['realname']==""||$newresult['realname']==null){ 
                      $send_sms['contents'] =$newresult['username'].$result['type_content'];
                    }else{
                      $send_sms['contents'] =$newresult['realname'].$result['type_content'];  
                    }
                    $send_sms['phone'] = $result['app_phone'];
                    if($send_sms['phone']==""){
                        return false;
                    }
            		$send_sms['user_id'] = $value['user_id'];
                    $send_sms['send_code'] = $value['smstype'];
            		if($result['smsstatus']==1){
            		  $send_sms['status'] = $result['smsstatus'];
            		  	$_result['phone_result'] = approveClass::SendSMS($send_sms);
            		}else{
            		    $_result['phone_result'] = 'δ������������';
            		}
        }
    }*/
}
?>