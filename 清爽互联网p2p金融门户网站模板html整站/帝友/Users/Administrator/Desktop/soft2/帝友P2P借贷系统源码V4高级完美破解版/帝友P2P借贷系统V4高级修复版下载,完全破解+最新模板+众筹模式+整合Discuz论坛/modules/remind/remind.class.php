<?php
/******************************
 * $File: remind.class.php
 * $Description: ����ģ���̨
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once("remind.model.php");

class remindClass{	
	
	
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
		$sql = "select SELECT from {remind} as p1 
				left join {remind_type} as p2 on p1.type_id=p2.id
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
		$sql = "select * from `{remind_user}` where user_id='{$user_id}'";
		$remind_result = $mysql->db_fetch_array($sql);
		if ($remind_result==false){
			$sql = "insert into `{remind_user}` set user_id='{$user_id}'";
			$mysql->db_query($sql);
			$sql = "select * from `{remind_user}` where user_id='{$user_id}'";
			$remind_result = $mysql->db_fetch_array($sql);
		}
		$remind_user = unserialize($remind_result['remind']);
		
		//����û��������б�
		$sql = "select id,name,nid from {remind_type} order by `order` desc";
		$type_list = $mysql->db_fetch_arrays($sql);
		
		//������е��б�
		$sql = "select SELECT from {remind} ORDER ";
		$remind_list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'ORDER'), array('*', ' order by `order` desc'), $sql));
		
		
		//�ж��Ƿ��Ѿ������ֻ���֤
		$phone_status = $_G['user_info']['phone_status'];
		//$phone_module = $mysql->db_fetch_array($sql);
		
		$_result = "";
		foreach ($type_list as $key =>$value){
			$_result[$value['id']] = $value;
			foreach ($remind_list as $_key => $_value){
				if ($_value['type_id']==$value['id']){
					if ($phone_status!=1){
						$_value['phone'] = 2;
					}
					
					if ($remind_user!=false){
						if (isset($remind_user[$_value['nid']]['message'])){
							if ($_value['message']!=1 && $_value['message']!=2){
								$_value['message'] = 3;
							}
						}else{
							if ($_value['message']==3){
								$_value['message'] = 4;
							}
						}
						if (isset($remind_user[$_value['nid']]['email'])){
							if ($_value['email']!=1 && $_value['email']!=2){
								$_value['email'] = 3;
							}
						}else{
							if ($_value['email']==3){
								$_value['email'] = 4;
							}
						}
						if (isset($remind_user[$_value['nid']]['phone'])){
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
		if($id == "") return "remind_error_id_empty";
		$sql = "select * from {remind} where id=$id";
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
		if($nid == "") return "remind_error_nid_empty";
		$sql = "select * from {remind} where nid='$nid'";
		return $mysql->db_fetch_array($sql);
	}
	
	
	
	/**
	 * �������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Add($data = array()){
		global $mysql;
        if (!isset($data['name']) || $data['name'] == "" ) {
            return "remind_error_name_empty";
        }if (!isset($data['nid']) || $data['nid'] == "" ) {
            return "remind_error_nid_empty";
        }
		$sql = "insert into `{remind}` set `addtime` = '".time()."',`addip` = '".ip_address()."'";
		
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
            return "remind_error_id_empty";
        }
		$sql = "update `{remind}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where id = '$id'";
        $result = $mysql->db_query($sql);
		if ($result == false) return "remind_error_id_empty";
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
		$sql = "delete from {remind}  where id in (".join(",",$id).")";
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
					$sql = "insert into {remind} set `type_id`='".trim($type_id)."',`name`='".trim($name[$key])."',`nid`='".trim($nid[$key])."',`message`='".$message[$key]."',`email`='".$email[$key]."',`phone`='".$phone[$key]."',`order`='".trim($order[$key])."' ";			
					$mysql->db_query($sql);
				}
			}
		}else{
			$id = $data['id'];
			foreach ($id as $key => $val){
				if ($name[$key]!="" && $nid[$key]!=""){
					$sql = "update {remind} set `name`='".trim($name[$key])."',`nid`='".trim($nid[$key])."',`order`='".$order[$key]."',`message`='".$message[$key]."',`email`='".$email[$key]."',`phone`='".$phone[$key]."' where id=$val";			
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
		$sql = "select SELECT from {remind_type} as p1 {$_sql}   ORDER LIMIT";
		
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
		if($id == "") return "remind_error_id_empty";
		$sql = "select * from `{remind_type}` where id=$id";
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
            return "remind_error_name_empty";
        }
		 if ($data['nid'] == ""  ) {
            return "remind_error_nid_empty";
        }
		$sql = "select * from {remind_type} where `nid` = '".$data['nid']."'";
		$result = $mysql->db_fetch_array($sql);
		if ($result !=false) return "remind_error_id_empty";
		
		$_sql = "";
		$sql = "insert into `{remind_type}` set ";
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
        if ($data['name'] == ""  || $data['id'] == "") {
            return "remind_error_id_empty";
        }
		$id = $data['id'];
		
		$sql = "update `{remind_type}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where `id` = '$id'";
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
		if  ($id == "") return "remind_error_id_empty";
		if (!is_array($id)){
			$id = array($id);
		}
		$sql = "delete from {`remind_type`}  where `id` in (".join(",",$id).")";
		$mysql->db_query($sql);
		$sql = "delete from {`remind`}  where `type_id` in (".join(",",$id).")";
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
					$sql = "insert into {remind_type} set `name`='".$name[$key]."',`nid`='".$nid[$key]."',`order`='".$order[$key]."' ";			
					$mysql->db_query($sql);
				}
			}
		}else{
			$id = $data['id'];
			foreach ($id as $key => $val){
				$sql = "update {remind_type} set `name`='".$name[$key]."',`order`='".$order[$key]."' where id=$val";			
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
	function ActionRemindUser($data){
		global $mysql;
		if  (!isset($data['user_id'])) return "remind_error_nid_empty";
		$user_id = $data['user_id'];
		$remind = $data['remind'];
		$sql = "update {remind_user} set remind='{$remind}' where user_id=$user_id";
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
	function sendRemind($data){
		global $mysql,$user,$_G;
		
		//�Ƿ��ֹ����ģ��
		//if ($_G['system']['remind_status']==0) return "";
		$remind_user = array();
		if ($data['receive_user']!=""){
		$data['receive_userid'] = $data['receive_user'];
		}
		$sql = "select remind from `{remind_user}` where user_id={$data['receive_userid']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result !=false){
			$remind_user = unserialize ($result['remind']);
		}
		
		$remind_result = self::GetNidOne(array("nid"=>$data['nid']));
		
		$message_status = isset($remind_user[$data['nid']]['message'])?$remind_user[$data['nid']]['message']:$remind_result['message'];	
		$email_status = isset($remind_user[$data['nid']]['email'])?$remind_user[$data['nid']]['email']:$remind_result['email'];	
		if ($data['phone_status']==""){
			$phone_status = isset($remind_user[$data['nid']]['phone'])?$remind_user[$data['nid']]['phone']:$remind_result['phone'];	
		}else{
			$phone_status = $data['phone_status'];
		}	
		$email = isset($data['email'])?$data['email']:$result['email'];
		$phone = isset($data['phone'])?$data['phone']:$result['phone'];
		$_result = array();
		require_once("modules/message/message.class.php");
		$message['send_userid'] = "0";
		$message['user_id'] = $data['receive_userid'];
		$message['name'] = $data['title'];
		$message['contents'] = $data['content'];
		$message['type'] = 'user';
		$message['status'] = $data['status'];
		$_result['message_result'] = messageClass::AddMessage($message);
		if ($email_status==1 || $email_status==3){
			$remail['user_id'] = $data['receive_userid'];
			$remail['title'] = $data['title'];
			if ($data['email_content']==""){
				$remail['msg'] =  $_G["system"]["con_webname"]."��ʾ��".$data['content'];
			}else{
				$remail['msg'] =$data['email_content'];
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
		$sql = "insert into `{remind_log}` set `addtime` = '".time()."',`addip` = '".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." ";
        return $mysql->db_query($sql);
	}
}
?>