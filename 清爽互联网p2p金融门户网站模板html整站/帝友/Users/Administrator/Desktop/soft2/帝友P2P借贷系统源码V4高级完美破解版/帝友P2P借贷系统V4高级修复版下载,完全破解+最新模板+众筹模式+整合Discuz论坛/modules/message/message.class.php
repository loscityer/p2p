<?
/******************************
 * $File: message.class.php
 * $Description: ����Ϣ���ļ�
 * $Author: hummer 
 * $Time:2010-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

$_A['list_purview']["message"]["name"] = "����Ϣ";
$_A['list_purview']["message"]["result"]["message_list"] = array("name"=>"����Ϣ�б�","url"=>"code/message/list");

$message_type = array("all"=>"�����û�","group"=>"Ⱥ��","users"=>"���û�","user"=>"����","user_type"=>"�û�����","admin_type"=>"��������");
require_once("message.model.php");

class messageClass{
	
	/**
	 * 1,����Ϣ����
	 *
	 * @param array $data =array("name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddMessage($data = array()){
		global $mysql;
		 //�ж������Ƿ����
		$receive_user = $data['receive_user'];
		$receive_userid = $data['receive_userid'];
		$receive_users = $data['receive_users'];
		$receive_user_type = $data['receive_user_type'];
		$receive_admin_type = $data['receive_admin_type'];
		unset($data['receive_user']);
		unset($data['receive_userid']);
		unset($data['receive_users']);
		unset($data['receive_user_type']);
		unset($data['receive_admin_type']);
        if (!IsExiest($data['name'])) {
            return "message_name_empty";
        }
        if (!IsExiest($data['contents'])) {
            return "message_contents_empty";
        }
		
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['type'])) {
            return "message_type_empty";
        }
		
		
		if ($data['type']=="user"){
			if($receive_user=="" && $receive_userid=="") return "message_receive_user_empty";
			if ($receive_user!=""){
				$sql = "select user_id from `{users}` where username ='{$receive_user}'";
				$result = $mysql->db_fetch_array($sql);
				if ($result == false) return "message_receive_username_not_exiest";
				$data['receive_value'] = $result['user_id'];
			}elseif ($receive_userid!=""){
				$sql = "select user_id from `{users}` where user_id ='{$receive_userid}'";
				$result = $mysql->db_fetch_array($sql);
				if ($result == false) return "message_receive_username_not_exiest";
				$data['receive_value'] = $result['user_id'];
			}
			$data['status'] = 1;
			if ($data['status']==""){
				$_data['send_status'] = 2;
			}else{
				$_data['send_status'] = 1;
			}
			
		}elseif ($data['type']=="users"){
			if($receive_users=="") return "message_receive_users_empty";
			$data['receive_value'] = $receive_users;
		}elseif ($data['type']=="user_type"){
			if($receive_user_type=="") return "message_receive_user_type_empty";
			$data['receive_value'] = $receive_user_type;
		}elseif ($data['type']=="admin_type"){
			if($receive_admin_type=="") return "message_receive_admin_type_empty";
			$data['receive_value'] = $receive_admin_type;
		}
		
		$sql = "insert into `{message}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
		$send_id =  $mysql->db_insert_id();
		
		if ($data['status']==1){
			$_data['send_id'] = $send_id;
			$_data['send_status'] = $data['status'];
			$result = self::SendMessage($_data);
		}
    	return 1;
	}
	
	/**
	 * 2,���Ͷ���Ϣ
	 *
	 * @param array $data =array("send_id"=>"������id","send_status"=>"����");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function SendMessage($data = array()){
		global $mysql;
		
		 //�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['send_id'])) {
            return "message_id_empty";
		}
		
		//����״̬
		$send_status = $data['send_status'];
		unset($data['send_status']);
		
		$sql = "select * from `{message}` where id='{$data['send_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "message_empty";
		$receive_value = $result['receive_value'];
		$data['contents'] = $result['contents'];
		$data['name'] = $result['name'];
		$data['type'] = $result['type'];
		$data['send_userid'] = $result['user_id'];
		//�жϱ�ʶ���Ƿ����
        if (!IsExiest($data['contents'])) {
            return "message_contents_empty";
		}
		if ($data['type']=="all"){
			$data['user_id'] = 0;
		}
		elseif ($data['type']=="users"){
			$receive_value = explode(",",$receive_value);
			foreach ($receive_value as $key => $value){
				$_receive_value[] = "'".$value."'";
			}
			$receive_value = join(",",$_receive_value);
			$sql = "select user_id,username from `{users}` where username in ({$receive_value})";
			$result = $mysql->db_fetch_arrays($sql);
			if ($result !=false){
				foreach ($result as $key => $value){
					$_result[] = $value['user_id'];
					$_result_username[] = $value['username'];
				}
				$data['receive_id'] = join(",",$_result);
				$data['receive_value'] = join(",",$_result_username);
			}
			$data['user_id'] = 0;
		}
		elseif ($data['type']=="user_type"){
			$data['user_id'] = 0;
			$data['receive_id'] = $receive_value;
		}elseif ($data['type']=="admin_type"){
			$data['user_id'] = 0;
			$data['receive_id'] = $receive_value;
		}elseif ($data['type']=="user"){
			$data['user_id'] = $receive_value;
			$data['receive_id'] = $receive_value;
		}
		//���¶���Ϣ
		$sql = "update `{message}` set status='{$send_status}' where id='{$data['send_id']}'";
		$mysql->db_query($sql);
		
		$sql = "insert into `{message_receive}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
		
		return 1;
	}
	
	
	

	
		
	/**
	 * 3,ɾ��
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteMessage($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "message_id_empty";
		if (is_array($data['id'])){
			$data['id'] = join(",",$data['id']);
		}
		$_sql = " where id in ({$data['id']})";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_sql .= " and user_id='{$data['user_id']}' ";
		}
		$sql = "delete from `{message}` {$_sql}";
		$mysql -> db_query($sql);
		return 1;
	}
	
	
	/**
	 * 6,��ö���Ϣ�ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetMessageOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "message_id_empty";
		
		$sql = "select p1.* from `{message}` as p1   where p1.id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		
		if ($result==false) return "message_empty";
		return $result;
	}
	
	
	
	
	
	/**
	 * �б�
	 * @param $param $data
	 * @return Array��'list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��'��
	 */
	function GetMessageList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
	
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p2.username = '{$data['username']}'";
		}		
	 	$_select = "p1.*,p2.username,p3.username as receive_username";
		$_order = " order by p1.id desc ";
		$sql = "select SELECT from {message} as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users}` as p3 on p1.receive_value =p3.user_id	$_sql ORDER LIMIT";
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
	 * �б�
	 * @param $param $data
	 * @return Array��'list'=>"�б�",page=>'��ǰҳ��','epage'=>'ҳ��','total_page'=>'��ҳ��'��
	 */
	function GetMessageReceiveList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		if ($data['status']!="" || $data['status']=="0" ){
			$_sql .= " and p1.status='{$data['status']}'";
		}
		$receive_result = 1;
		if (isset($data['username']) && $data['username']!=""){
			$sql = "select p1.user_id,p2.type_id from `{users}` as p1 left join `{users_info}` as p2 on p1.user_id=p2.user_id  where p1.username ='{$data['username']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) {
				$receive_result = "";
			}else{
				$receive_result = $result;
				$_sql .= " and (p1.user_id='{$result['user_id']}' or (p1.type='all' and  !find_in_set('{$result['user_id']}',receive_yes)) or ( p1.type='users' and  find_in_set('{$data['username']}',receive_value) and  !find_in_set('{$result['user_id']}',receive_yes)) or (p1.type='user_type' and  p1.receive_id='{$result['type_id']}'  and  !find_in_set('{$result['user_id']}',receive_yes)) ";
				$sql = "select type_id from `{users_admin}` where user_id='{$result['user_id']}'";
				$result = $mysql->db_fetch_array($sql);
				if ($result !=false){
					$_sql .= " or (p1.type='admin_type' and  p1.receive_id='{$result['type_id']}'  and  !find_in_set('{$result['user_id']}',receive_yes))";
				}
				$_sql .= " )";
			}
		}
		if ($receive_result !=""){
			$_select = "p1.*,p2.username as receive_username,p3.username as send_username";
			$_order = " order by p1.id desc ";
			$sql = "select SELECT from {message_receive} as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users}` as p3 on p1.send_userid=p3.user_id SQL ORDER LIMIT";
		
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
		$user_type_result = usersClass::GetUsersTypelist(array("limit"=>"all"));
		foreach ($user_type_result as $key => $value){
			$_user_type_result[$value['id']] = $value['name'];
		}
		$admin_type_result = usersClass::GetAdminTypelist(array("limit"=>"all"));
		foreach ($admin_type_result as $key => $value){
			$_admin_type_result[$value['id']] = $value['name'];
		}
		foreach ($list as $key => $value){
			if ($value['type']!="user"){
				$list[$key]["send_username"] = "ϵͳ";
				if ($value['type']=="user_type"){
					$list[$key]["receive_username"] = $_user_type_result[$value['receive_id']];
				}elseif ($value['type']=="admin_type"){
					$list[$key]["receive_username"] = $_admin_type_result[$value['receive_id']];
				}elseif ($value['type']=="users"){
					$list[$key]["receive_username"] = $value['receive_value'];
				}elseif ($value['type']=="all"){
					$list[$key]["receive_username"] = "�����û�";
				}
			}
		}
		}
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
		
	}
	
		
	/**
	 * 3,ɾ��
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteMessageReceive($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "message_receive_id_empty";
		if (is_array($data['id'])){
			$data['id'] = join(",",$data['id']);
		}
		$_sql = " where id in ({$data['id']})";
		if (isset($data['user_id']) && $data['user_id']!=""){
			$_result = self::GetMessageReceiveOne($data);
			
			$_sql .= " and user_id='{$data['user_id']}' and type='user'";
			$sql = "delete from `{message_receive}` {$_sql}";
			$mysql -> db_query($sql);
			if ($_result['type']!='user'){
				$sql = "delete from `{message_receive}` where user_id='{$data['user_id']}' and receive_value='{$data['id']}'";
				$mysql -> db_query($sql);
			}
			return $data['user_id'];
		}else{
			$sql = "delete from `{message_receive}` {$_sql}";
			$mysql -> db_query($sql);
		}
		return $data['id'];
	}
	
	/**
	 * 4,��ö���Ϣ�ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetMessageReceiveOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "message_id_empty";
		if (!IsExiest($data['user_id'])) return "message_user_id_empty";
		$sql = "select p1.*,p2.username as receive_username,p3.username as send_username from `{message_receive}` as p1 left join  `{users}` as p2 on p1.user_id=p2.user_id left join  `{users}` as p3 on p1.send_userid=p3.user_id  where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "message_receive_empty";
		if ($result['type']=="user"){
			if ($result['user_id']!=$data['user_id']) return "message_receive_not_view";
			if ($data['status']!=''){
				$sql = "update `{message_receive}` set status='{$data['status']}' where id='{$data['id']}'";
				$mysql->db_query($sql);
			}
		}else{
			if ($result['type']=="users"){
				$sql = "select 1 from `{message_receive}` where id='{$data['id']}'  and  find_in_set('{$data['user_id']}',receive_id)";
				$_result = $mysql->db_fetch_array($sql);
				if ($_result==false) return "message_receive_not_view";
			}elseif ($result['type']=="user_type"){
				$sql = "select type_id `{users_info}`   where user_id='{$data['user_id']}'";
				$_result = $mysql->db_fetch_array($sql);
				$sql = "select 1 from `{message_receive}` where id='{$data['id']}'  and  find_in_set('{$_result['type_id']}',receive_id)";
				$_result = $mysql->db_fetch_array($sql);
				if ($_result==false) return "message_receive_not_view";
			}elseif ($result['type']=="admin_type"){
				$sql = "select type_id `{users_admin}`   where user_id='{$data['user_id']}'";
				$_result = $mysql->db_fetch_array($sql);
				$sql = "select 1 from `{message_receive}` where id='{$data['id']}'  and  find_in_set('{$_result['type_id']}',receive_id)";
				$_result = $mysql->db_fetch_array($sql);
				if ($_result==false) return "message_receive_not_view";
			}
			
			$sql = "select id from `{message_receive}` where user_id='{$data['user_id']}' and receive_value='{$data['id']}'";
			$_result = $mysql->db_fetch_array($sql);
			if ($_result==false){
				$sql = "update `{message_receive}` set receive_yes='{$result['receive_yes']}{$data['user_id']},' where id in ({$data['id']})";
				$mysql->db_query($sql);
				
				$sql = "insert into `{message_receive}` set type='user',user_id='{$data['user_id']}',status=1,send_id='{$result['send_id']}',send_userid='{$result['send_userid']}',receive_id='{$data['user_id']}',receive_value='{$result['id']}',`name`='{$result['name']}',contents='{$result['contents']}',addtime='{$result['addtime']}',addip='{$result['addip']}'";
				$mysql->db_query($sql);
				$id = $mysql->db_insert_id();
				return self::GetMessageReceiveOne(array("id"=>$id,'user_id'=>$data['user_id']));
			}else{
				return self::GetMessageReceiveOne(array("id"=>$_result['id'],'user_id'=>$data['user_id']));
			}
			
		}
		
		return $result;	
		
	}
	
		
	/**
	 * 5,����
	 *
	 * @param Array $data = array("id"=>"ID","user_id"=>"ID"��"status"=>"ID")
	 * @return Boolen
	 */
	function ActionMessageReceive($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "message_receive_id_empty";
		if (!IsExiest($data['user_id'])) return "message_receive_user_id_empty";
		
		$_sql = " where id in ({$data['id']})";
		foreach ($data['id'] as $key => $value){
			$_data['id'] = $value;
			$_data['user_id'] = $data['user_id'];
			$_result = self::GetMessageReceiveOne($_data);
			$sql = "update `{message_receive}` set status='{$data['status']}' where user_id='{$data['user_id']}' and (id='{$value}'  or receive_value='{$value}')";
			$mysql->db_query($sql);
		}	
			
		return $data['user_id'];
	}
	
	/**
	 * 6,��ȡδ������Ϣ
	 *
	 * @param Array $data = array("id"=>"ID","user_id"=>"ID"��"status"=>"ID")
	 * @return Boolen
	 */
	 function GetUsersMessage($data){
	 	global $mysql;
		$_sql = "where 1=1 ";	
		if ($data['status']!="" || $data['status']=="0" ){
			$_sql .= " and p1.status='{$data['status']}'";
		}
		$receive_result = 1;
		if (isset($data['user_id']) && $data['user_id']!=""){
			$sql = "select p1.user_id,p2.type_id from `{users}` as p1 left join `{users_info}` as p2 on p1.user_id=p2.user_id  where p1.user_id ='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) {
				$receive_result = "";
			}else{
				$receive_result = $result;
				$_sql .= " and (p1.user_id='{$result['user_id']}' or (p1.type='all' and  !find_in_set('{$result['user_id']}',receive_yes)) or ( p1.type='users' and  find_in_set('{$data['username']}',receive_value) and  !find_in_set('{$result['user_id']}',receive_yes)) or (p1.type='user_type' and  p1.receive_id='{$result['type_id']}'  and  !find_in_set('{$result['user_id']}',receive_yes)) ";
				$sql = "select type_id from `{users_admin}` where user_id='{$result['user_id']}'";
				$result = $mysql->db_fetch_array($sql);
				if ($result !=false){
					$_sql .= " or (p1.type='admin_type' and  p1.receive_id='{$result['type_id']}'  and  !find_in_set('{$result['user_id']}',receive_yes))";
				}
				$_sql .= " )";
			}
		}
		$_select = "p1.*,p2.username as receive_username,p3.username as send_username";
		$_order = " order by p1.id desc ";
		$sql = "select SELECT from {message_receive} as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users}` as p3 on p1.send_userid=p3.user_id SQL ORDER group by p1.status ";
	
		$result = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL', 'ORDER', 'LIMIT'), array(" count(1) as num,p1.status", $_sql,"", $_limit), $sql));
		$_result = array();
		foreach ($result as $key =>$value){
			if ($value['status']==0){
				$_result['message_no'] = $value['num'];
			}
			$_result['message_all'] += $value['num'];
		}
		return $_result;
		
		
	 }
}
?>