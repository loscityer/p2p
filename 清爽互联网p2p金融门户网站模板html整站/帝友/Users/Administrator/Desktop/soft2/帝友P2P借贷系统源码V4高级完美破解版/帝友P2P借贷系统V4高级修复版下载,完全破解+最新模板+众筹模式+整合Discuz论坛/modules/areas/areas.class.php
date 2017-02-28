<?
/******************************
 * $File: user.class.php
 * $Description: ���ݿ⴦���ļ�
******************************/
//�����Ը������
require_once("areas.model.php");
class areasClass{
	
	const ERROR = '���������벻Ҫ�Ҳ���';
	
	function areasClass(){
		//�������ݿ������Ϣ
		
	}
	
	/**
	 * ����б�
	 *
	 * @return Array
	 */
	function GetAreas($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		$_select = "p1.*";
		$_order = "";
		$sql = "select SELECT from `{areas}` as p1 SQL ORDER LIMIT";
		
		//��������
		$data['excel'] = isset($data['excel'])?$data['excel']:"";
		$_limit = "";
		if (IsExiest($data['excel'])=="true"){
			
		} 
		//�Ƿ���ʾȫ������Ϣ
		elseif (IsExiest($data['limit'])!=false){
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
		
	}
	
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
			 
		//�����û�id
		if (IsExiest($data['user_id'])!=false) {
			$_sql .= " and p1.user_id = '{$data['user_id']}'";
		}
		
		//����
		if ($data['type']=="province"){
			$result = self::GetProvince($data);
		}elseif ($data['type']=="city"){
			$result = self::GetCity($data);
		}elseif ($data['type']=="area"){
			$result = self::GetArea($data);
		}
		
		//��ҳ���ؽ��
		$total = count($result);
		$data['page'] = !IsExiest($data['page'])?1:$data['page'];
		$data['epage'] = !IsExiest($data['epage'])?10:$data['epage'];
		$total_page = ceil($total / $data['epage']);
		$_epage = $data['epage'] * ($data['page'] - 1);
		if ($total>0){
			foreach ($result as $key => $value){
				if ($key>=$_epage && $key<$_epage+$data['epage']){
					$_result[$key] = $value;
				}
			}
		}
		//�������յĽ��
		$result = array('list' => $_result?$_result:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	/**
	 * ���ʡ���б�
	 *
	 * @param Array $data = array("page"=>"��ҳ","epage"=>"ÿҳ������","limit"=>"��ʾ��ҳ��")
	 * @return Array 
	 */
	function GetProvince($data = array()){
		global $_G;
		if (!IsExiest($_G['areas'])) return "areas_data_empty"; 
		$result = array();
		$i=0;
		foreach ($_G['areas'] as $key => $value){
			if ($value['province']==0){
				if (IsExiest($data['limit'])!=false){
					if ($data['limit']=="all"){
						$result[] = $value;
					}else{
						if ($data["limit"]>$i){
							$result[] = $value;
						}
						$i++;
					}
				}else{
					$result[] = $value;
				}
			}
		}
		return $result;
	}
	
	/**
	 * ��ó����б�
	 *
	 * @return Array
	 */
	function GetCity($data = array()){
		global $_G;
		if (!IsExiest($_G['areas'])) return "areas_data_empty"; 
		$result = array();
		if (IsExiest($data['id'])!=false){
			foreach ($_G['areas'] as $key => $value){
				if (($value['province']==$data['id'] && $value['city']==0)){
					if (IsExiest($data['limit'])!=false){
						if ($data['limit']=="all"){
							$result[] = $value;
						}else{
							if ($data["limit"]>$i){
								$result[] = $value;
							}
							$i++;
						}
					}else{
						$result[] = $value;
					}
				}
			}
		}else{
			foreach ($_G['areas'] as $key => $value){
				if (($value['province']>0 && $value['city']==0)){
					if (IsExiest($data['limit'])!=false){
						if ($data['limit']=="all"){
							$result[] = $value;
						}else{
							if ($data["limit"]>$i){
								$result[] = $value;
							}
							$i++;
						}
					}else{
						$result[] = $value;
					}
				}
			}
		}
		return $result;
	}
	
	
	/**
	 * ��õ����б�
	 *
	 * @return Array
	 */
	function GetArea($data = array()){
		global $_G;
		if (!IsExiest($_G['areas'])) return "areas_data_empty"; 
		$result = array();
		if (IsExiest($data['id'])!=false){
			foreach ($_G['areas'] as $key => $value){
				if ($value['province']>0 && $value['city']==$data['id'] ){
					if (IsExiest($data['limit'])!=false){
						if ($data['limit']=="all"){
							$result[] = $value;
						}else{
							if ($data["limit"]>$i){
								$result[] = $value;
							}
							$i++;
						}
					}else{
						$result[] = $value;
					}
				}
			}
		}else{
			foreach ($_G['areas'] as $key => $value){
				if ($value['province']>0 && $value['city']>0){
					if (IsExiest($data['limit'])!=false){
						if ($data['limit']=="all"){
							$result[] = $value;
						}else{
							if ($data["limit"]>$i){
								$result[] = $value;
							}
							$i++;
						}
					}else{
						$result[] = $value;
					}
				}
			}
		}
		return $result;
	}
	/**
	 * �鿴�û�
	 *
	 * @param Array $data
	 * @return Array
	 */
	public static function GetOne($data = array()){
		global $mysql;
		$id = $data['id'];
		if($id == "") return "";
		$id = $data['id'];
		$sql = "select * from `{areas}` where id=$id";
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
		
       if (!IsExiest($data['name'])) {
			return "areas_name_empty";
		}
		
		if (!IsExiest($data['nid'])) {
			return "areas_nid_empty";
		} 
		
		$sql = "select 1 from `{areas}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "areas_nid_exiest";
		$_sql = "";
		$sql = "insert into `{areas}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	$id = $mysql->db_insert_id();
		
		return $id;
	}
	
	
	/**
	 * ���
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function Update($data = array()){
		global $mysql;
        if (!IsExiest($data['id'])) {
			return "areas_id_empty";
		} 
		
		if (!IsExiest($data['name'])) {
			return "areas_name_empty";
		} 
		
		if (!IsExiest($data['nid'])) {
			return "areas_nid_empty";
		} 
		
		
		$sql = "select 1 from `{areas}` where nid='{$data['nid']}' and id != '{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "areas_nid_exiest";
		
		$sql = "update `{areas}` set ";
		$_sql = "";
		foreach($data as $key => $value){
			$_sql[] .= "`$key` = '$value'";
		}
		$sql .= join(",",$_sql)." where id = '{$data['id']}'";
        $mysql->db_query($sql);
		
		return $data['id'];
	}
	
	
	
	/**
	 * ɾ��
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	public static function Delete($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "areas_id_empty";
		//�жϳ����Ƿ��У�������ɾ��ʡ��
		$sql = "select 1 from `{areas}` where province='{$data[id]}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "areas_del_city_not_empty";
		
		
		//�жϵ����Ƿ��У�������ɾ������
		$sql = "select 1 from `{areas}` where city='{$data[id]}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "areas_del_area_not_empty";
		
		$sql = "delete from `{areas}`  where id  ='{$data['id']}'";
		$mysql->db_query($sql);
		return $data['id'];
	}
	
	/**
	 * �޸�����
	 *
	 * @param Array $data = array("id"=>"","order"=>"����");
	 * @return Boolen
	 */
	public static function Action($data = array()){
		global $mysql;
		if (count($data['order'])>0){
			foreach ($data['order'] as $key => $value){
				$sql = "update `{areas}` set `order` = '{$value}'  where id ='{$data['id'][$key]}'";
				$mysql->db_query($sql);
			}
		}
		return true;
	}
	
	function GetProvinceAll($data = array()){
		global $_G;
		$_result = array();
		$areas  = $data['areas'];
		foreach ($areas as $key => $value){
			if ($value['pid']==0){
				$letter = $value['nid']{0};
				$_result[$letter][$key]['letter']=$letter;
				$_result[$letter][$key]['id']=$value['id'];
				$_result[$letter][$key]['name']=$value['name'];
				$_result[$letter][$key]['nid']=$value['nid'];
				
			}
		}
		ksort($_result);
		return $_result;
		
	}
	
	
	function GetCityAll($data = array()){
		global $_G;
		$_result = array();
		$areas  = $data['areas'];
		foreach ($areas as $key => $value){
			if ($value['province']>0 && $value['city']==0  ){
				$letter = $value['nid']{0};
				$_result[$letter][$key]['letter']=$letter;
				$_result[$letter][$key]['id']=$value['id'];
				$_result[$letter][$key]['name']=$value['name'];
				$_result[$letter][$key]['nid']=$value['nid'];
				
			}
		}
		ksort($_result);
		return $_result;
		
	}
	
	
}

?>