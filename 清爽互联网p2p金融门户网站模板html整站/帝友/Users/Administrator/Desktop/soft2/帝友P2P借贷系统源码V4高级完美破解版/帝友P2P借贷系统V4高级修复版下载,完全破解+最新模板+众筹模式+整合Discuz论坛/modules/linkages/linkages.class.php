<?
/******************************
 * $File: linkage.class.php
 * $Description: ֤��
 * $Author: hummer 
 * $Time:2010-08-09
 * $Update:None 
 * $UpdateDate:None 
******************************/
//�����Ը������
require_once("linkages.model.php");

class linkagesClass{
	
	
	/**
	 * ����б�
	 *
	 * @return Array
	 */
	function GetList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
		$data['type_id'] = isset($data['type_id'])?$data['type_id']:"";
        if (IsExiest($data['type_id'])!=false) {
            $_sql .= " and p1.type_id ='{$data['type_id']}'";
        }
		
		$data['name'] = isset($data['name'])?$data['name']:"";
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.* ,p2.code,p2.name as type_name,p2.nid as type_nid";
		$_order = " order by p1.order desc ,p1.id asc";
		$sql = "select SELECT from {linkages} as p1 
				left join {linkages_type} as p2 on p1.type_id=p2.id
				{$_sql}   ORDER ";
		
		//�Ƿ���ʾȫ������Ϣ
		$data['limit'] = isset($data['limit'])?$data['limit']:"";
		$_limit = "";
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
		
	}
	
	/**
	 * �鿴
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetOne($data = array()){
		global $mysql;
		$id = $data['id'];
		if($id == "") return self::ERROR;
		$sql = "select * from {linkage} where id=$id";
		return $mysql->db_fetch_array($sql);
	}
	
	
	
	/**
	 * ���
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Add($data = array()){
		global $mysql;
        //�ж����������Ƿ����
        if (!IsExiest($data['name'])) {
            return "linkages_name_empty";
        }
		
		//�ж����͵ı�ʾ���Ƿ����
		if (!IsExiest($data['value']) && $data['value']!=0) {
             return "linkages_value_empty";
        }
		
		$sql = "insert into `{linkages}` set ";
		
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
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
            return self::ERROR;
        }
		$sql = "update `{linkage}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where id = '$id'";
        $result = $mysql->db_query($sql);
		if ($result == false) return self::ERROR;
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
		$sql = "delete from {linkages}  where id in (".join(",",$id).")";
		$mysql->db_query($sql);
		return $data['id'];
	}
	
	
	/**
	 * �޸���Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function Action($data = array()){
		global $mysql;
		$name = $data['name'];
		$value = $data['value'];
		$order = $data['order'];
		$type = isset($data['type'])?$data['type']:"";
		unset($data['type']);
		if ($type == "add"){
			$type_id = $data['type_id'];
			
			foreach ($name as $key => $val){
				if ($value[$key]==""){
					$value[$key] = $val;
				}
				if ($val!=""){
					$sql = "insert into `{linkages}` set `type_id`='".$type_id."',`name`='".$name[$key]."',`value`='".$value[$key]."',`order`='".$order[$key]."' ";			
					$mysql->db_query($sql);
				}
			}
		}else{
			$id = $data['id'];
			foreach ($id as $key => $val){
				if ($name[$key]!=""){
					$sql = "update `{linkages}` set `name`='".$name[$key]."',`value`='".$value[$key]."',`order`='".$order[$key]."' where id=$val";			
					$mysql->db_query($sql);
				}
			}
		}
		
		return true;
	}
	
	
	
	/**
	 * �б�
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetTypeList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";;
        }
		
		//�ж����͵ı�ʾ���Ƿ����
		if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid  = '{$data['nid']}'";;
        }
		//����ģ��
		if (IsExiest($data['code'])!=false) {
            $_sql .= " and p1.code  = '{$data['code']}'";;
        }
		
		$_select = "*";
		$_order = " order by p1.`order` desc,p1.id desc";
		$sql = "select SELECT from `{linkages_type}` as p1 SQL  ORDER LIMIT";
		
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
		return array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
	}
	
	/**
	 * �鿴����
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetType($data = array()){
		global $mysql;
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['id'])!=false) {
            $_sql .= " and p1.id ='{$data['id']}'";;
        }
		
		//�ж����͵ı�ʾ���Ƿ����
		if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid  = '{$data['nid']}'";;
        }
		$sql = "select * from `{linkages_type}` as p1 {$_sql}";
		$result = $mysql->db_fetch_array($sql);
		
		return $result;
	}
	
	/**
	 * �����������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddType($data = array()){
		global $mysql;
		
		//�ж����������Ƿ����
        if (!IsExiest($data['name'])) {
            return "linkages_type_name_empty";
        }
		
		//�ж����͵ı�ʾ���Ƿ����
		if (!IsExiest($data['nid'])) {
            return "linkages_type_nid_empty";
        }
		
		//��������
		$sql = "select * from {linkages_type} where `nid` = '".$data['nid']."'";
		$result = $mysql->db_fetch_array($sql);
		if ($result !=false) return "linkages_type_nid_exiest";
		
		$_sql = "";
		$sql = "insert into `{linkages_type}` set ";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." ";
         $mysql->db_query($sql);
		 return $mysql->db_insert_id();
	}
	
	
	/**
	 * �޸���������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function UpdateType($data = array()){
		global $mysql;
		
        //�ж����͵�ID�Ƿ����
        if (!IsExiest($data['id'])) {
            return "linkages_type_id_empty";
        }
		
		 //�ж����������Ƿ����
        if (!IsExiest($data['name'])) {
            return "linkages_type_name_empty";
        }
		
		//�ж����͵ı�ʾ���Ƿ����
		if (!IsExiest($data['nid'])) {
            return "linkages_type_nid_empty";
        }
		//��������
		$sql = "select * from {linkages_type} where `nid` = '".$data['nid']."' and id!='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result !=false) return "linkages_type_nid_exiest";
		
		$sql = "update `{linkages_type}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where `id` = '{$data['id']}'";
        $mysql->db_query($sql);
		return $data['id'];
	}
	
	/**
	 * ɾ������
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function DelType($data = array()){
		global $mysql;
		//�ж����͵�ID�Ƿ����
        if (!IsExiest($data['id'])) {
            return "linkages_type_id_empty";
        }
		//�ж������Ƿ�������
		$sql = "select * from `{linkages}` where `type_id` ='{$data['id']}' ";
		$result = $mysql -> db_fetch_array($sql);
		if ($result!=false) return "linkages_type_sub_exiest";
		
		//ɾ������
		$sql = "delete from `{linkages_type}`  where `id` ='{$data['id']}' ";
		
		$mysql->db_query($sql);
		return $data['id'];
	}
	
	/**
	 * �޸���Ϣ
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function ActionType($data = array()){
		global $mysql;
		$nid = $data['nid'];
		$name = $data['name'];
		$order = $data['order'];
		
		$id = $data['id'];
		foreach ($id as $key => $val){
			if ($name[$key]!=""){
				$sql = "update {linkages_type} set `name`='".$name[$key]."',`order`='".$order[$key]."' where id={$val}";			
				$mysql->db_query($sql);
			}
		}
		
		return true;
	}
	
}
?>