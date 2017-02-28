<?
/******************************
 * $File: admin.class.php
 * $Description: �������ļ�
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���


//�����Ը������
require_once("admin.model.php");

require_once("admin.module.php");

class adminClass extends moduleClass {
	
	function adminClass(){
		//�������ݿ������Ϣ
		
        
	}
	
	/**
	 * 1,�޸�ϵͳ��Ϣ
	 *
	 * @param array $data
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateSystem($data = array()){
		global $mysql,$upload;
		$code = $data['code'];
		unset($data['code']);
		if (IsExiest($data['con_watermark_file'])!=false){
			$sql = "select value from `{system}` where nid='con_watermark_file'";
			$result = $mysql->db_fetch_array($sql);
			if ($result['value']!=""){
				$_data['user_id'] =0;
				$_data['id'] = $result['value'];
				$upload->Delete($_data);
			}
		}
		foreach($data as $key => $value){
			
			$sql = "select * from `{system}` where nid='$key'";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false){
				$sql = "insert into `{system}` set nid='$key',`value`='',code='{$code}',style=1,status=1";
				$mysql->db_query($sql);
			}
			
			$sql = "update `{system}` set `value` = '$value',code='$code' where nid='$key'";
			$mysql->db_query($sql);
		}
		
		return true;
	}
	
	/**
	 * 2,��ȡϵͳ��Ϣ
	 *
	 * @param array $data
	 * @param string $data['code'],$data['status'];
	 * @return boolen(true,false)
	 */
	function GetSystem($data = array()){
		global $mysql;
		$sql = "select * from `{system}` where 1=1 ";
		if (IsExiest($data["code"])!=false){
			$sql .= " and `code` = '{$data['code']}'";
		}
		if (IsExiest($data["status"])!=false){
			$sql .= " and `status` = '{$data['status']}'";
		}
		$result = $mysql->db_fetch_arrays($sql);
		if ($result !=false){
			foreach ($result as $key => $value){
				$_result[$value['nid']] = $value['value'];
			}
		}
		return $_result;
	}
	
	
	/**
	 * 3,������ݱ�
	 * 
	 * @return Array
	 */
	function GetSystemTables($data = array()){
		global $mysql;
		$_result = "";
		$sql = "show tables";
		$result = $mysql->db_fetch_arrays($sql);
		foreach ($result as $key => $value){
			foreach($value as $val){
				$_val = explode("_",$val);
				if($mysql->db_prefix!="" && $_val[0]."_"==$mysql->db_prefix){
					$num = $mysql->db_count(str_replace($mysql->db_prefix,"",$val));
					$_result[$key]['name'] = $val;
					$_result[$key]['num'] = $num;
				}else{
					$num = $mysql->db_count($val);
					$_result[$key]['name'] = $val;
					$_result[$key]['num'] = $num;
				}
			}
		}
		return  $_result;
	
	}
	
	
	/**
	 * 4,�޸�ϵͳ����
	 * 
	 * @return Array
	 */
	function  ActionSystem($data = array()){
		global $mysql;
		$class = $data["class"];
		$style = $data["style"];
		if ($class == "list"){
			$sql = "select * from {system} where `style` = '$style' order by id asc ";
			return $mysql->db_fetch_arrays($sql);
		}
		
		elseif ($class == "view"){
			$id = $data["id"];
			$sql = "select * from {system} where `style` = '$style' and `id` = '$id' order by id asc";
			return $mysql->db_fetch_array($sql);
		}
		
		elseif ($class == "add"){
			unset($data['class']);
			if (!ereg ("^con_", $data['nid'])){
				return "admin_system_not_con";
			}
			$_sql = "";
			$sql = "select 1 from {system} where nid = '".$data['nid']."' ";
			$result = $mysql -> db_fetch_array($sql);
			if ($result!=false) return  "admin_system_nid_exiest";
			$sql = "insert into `{system}` set ";
			foreach($data as $key => $value){
				$_sql[] = "`$key` = '$value'";
			}
			$result =  $mysql->db_query($sql.join(",",$_sql));
			return $mysql->db_insert_id();;
		}
		
		elseif ($class == "update"){
			unset($data['class']);
			if (!ereg ("^con_", $data['nid'])){
				return self::SYSTEM_ADD_NO_CON;
			}
			
			$sql = "select * from {system} where nid = '".$data['nid']."' and id !=".$data['id'];
			$result = $mysql -> db_fetch_array($sql);
			if ($result!=false) return  self::SYSTEM_NID_IS_EXIST;
			
			$_sql = "";
			$sql = "update `{system}` set ";
			foreach($data as $key => $value){
				$_sql[] = "`$key` = '$value'";
			}
			$result =  $mysql->db_query($sql.join(",",$_sql)." where id = '".$data['id']."'");
			if ($result == false) return self::ERROR;else return true;
			
		}
		
		elseif ($class == "action"){
			foreach ($data['value'] as $key =>$val){
				$val = nl2br($val);
				$sql  = "update {system} set `value` = '{$val}',`name` = '{$data['name'][$key]}' where `nid` = '$key'";
				$mysql->db_query($sql);
			}
			return 1;
		}
		
		//ɾ��ϵͳ����
		elseif ($class == "del"){
			
			$_sql = "";
			if (IsExiest($data['type_id'])!=false){
				$_sql = " and type_id='{$data['type_id']}'";
			}
			$sql = "select status from `{system}`  where `id` = '{$data['id']}' $_sql";
			$result = $mysql->db_fetch_array($sql);
			if ($result==false) return "admin_system_del_error";
			if ($result['status']==0) return "admin_system_not_del";
 			$sql  = "delete from `{system}` where `id` = '{$data['id']}' $_sql";
			$result = $mysql->db_query($sql);
			if ($result==false) return "admin_system_del_error";
			return $data['id'];
		}
	}
	/**
	 * �������ݱ� data = array("table"=>"Ҫ���ݵı������,����","filedir"=>"���ݵ�Ŀ¼")
	 * 
	 * @return Array
	 */
	public static  function SaveModulesTable($data = array() ){
		global $mysql;
		if (!IsExiest($data['table'])) return "";
		$filedir = "data/".(!IsExiest($data['table']))?"":$data['table'];;
	
	
	}
	/**
	 * �������ݱ�
	 * 
	 * @return Array
	 */
	public static  function BackupTables($data = array() ){
		global $mysql;
		$filedir = $data['filedir'];
		$tables = $data['table'];
		$size = $data['size'];
		$tid = $data['tid'];//��ȡ�ĸ���
		$limit = $data['limit'];//���ȡ���Ǽ���
		$table_page = $data['table_page'];//�ļ��ķ�ҳ
		$table = $tables[$tid];
		if ($tables == "") return self::ERROR;
		
		/*
		 *���ݱ�ṹ
		*/
		if ($tid==0){
			$sql = "";
			$filename = $filedir."/show_table.sql";
			foreach ($tables as $key => $tbl){
				//$sql .="# ���ݱ�".$tbl."���Ľṹ;\r\n";	
				$sql .="DROP TABLE IF EXISTS `$tbl`;\r\n";//�������ھ�ɾ�����ڵı�
				$_sql = "show create table $tbl";
				$result = $mysql->db_fetch_array($_sql);
				$sql .= $result['Create Table'].";\r\n\r\n";
				create_file($filename,$sql);
			}
		}
		
		if ($table != ""){
			$file = $filedir."/".$table."_".$table_page.".sql";
			$text = read_file($file);
			if (strlen($text) > $size * 1024) {
				 $file = $filedir."/".$table."_".($table_page+1).".sql";
				 $text = read_file($file);
			}
			/*
			 *��ȡ��������ֶ�
			*/
			$fields = $mysql->db_show_fields(str_replace($mysql->db_prefix,"",$table));
			$_fields = join(",",$fields);
			
			$sql = "select *  from `$table` limit $limit,100";
			
			$result= $mysql->db_fetch_arrays($sql)  ; 
			if (count($result)>0){
				foreach ($result as $key => $value){
					$text .= "insert into `$table` ( ";
					foreach ($fields as $fkey => $fvalue){
						$_value[$fkey] ="\"".mysql_escape_string($value[$fvalue])."\"";
						$_fie[$fkey] ="`$fvalue`";
					}
					$text .= join(",",$_fie).") values (".join(",",$_value).");\r\n\r\n";
					$limit++;
				}
				create_file($file,$text);
				$data['limit'] = $limit;
				$data['table_page'] = $table_page;
				$data['tid'] = $tid;
			}else{
				$data['limit'] = 0;
				$data['table_page'] = 0;
				$data['tid'] = $tid+1;
			}
			return $data;
		}
		return "";
	}
	
	/**
	 * �������ݱ�
	 * 
	 * @return Array
	 */
	public static function RevertTables($data = array() ){
		global $mysql;
		
		$tables = $data['table'];
		$nameid = $data['nameid'];
		if (isset($tables[$nameid]) && $tables[$nameid]!=""){
			$value = $tables[$nameid];
			if ($value!="show_table.sql"){
				$sql = file_get_contents($data['filedir']."/".$value);
				$_sql = explode("\r\n",$sql);
				foreach ($_sql as $val){
					if ($val!=""){
						$mysql->db_query($val,"true");
					}
				}
			}
			return $value;
		}else{
			return "";
		}
	}
	
	/**
	 * ��Ӳ˵�
	 *
	 * @param array $data =array("name"=>"����","nid"=>"����","pid"=>"����","contents"=>"����");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function AddSiteMenu($data = array()){
		global $mysql;
		 //�ж����������Ƿ����
        if (!IsExiest($data['name'])) {
            return "admin_site_menu_name_empty";
        }
		
		//�ж����͵ı�ʾ���Ƿ����
		if (!IsExiest($data['nid'])) {
             return "admin_site_menu_nid_empty";
        }
		//�жϲ˵��Ƿ���ڣ�������ڵĻ�����ӵ�վ���Զ�ת��ΪĬ��վ��
		$sql = "select 1 from `{site_menu}` where checked=1";
		$result = $mysql->db_fetch_array($sql);
	
		if ($result==false) {
			$data["checked"] = 1;
		}
		
		
		$sql = "select 1 from `{site_menu}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_site_menu_nid_exiest";
		if ($data['checked']==1){
			$sql = "update `{site_menu}` set `checked`=0 ";
			$mysql->db_query($sql);
		}
		
		$sql = "insert into `{site_menu}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	return $mysql->db_insert_id();
	}
	/**
	 * �޸Ĳ˵�
	 *
	 * @param array $data =array("name"=>"����","nid"=>"����","pid"=>"����","contents"=>"����");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateSiteMenu($data = array()){
		global $mysql;
		 //�ж�Id�Ƿ����
        if (!IsExiest($data['id'])) {
            return "admin_site_menu_id_empty";
        } 
		
		//�ж������Ƿ����
        if (!IsExiest($data['name'])) {
            return "admin_site_menu_name_empty";
        }
		
		//�жϱ�ʾ���Ƿ����
		if (!IsExiest($data['nid'])) {
             return "admin_site_menu_nid_empty";
        }
		$sql = "select 1 from `{site_menu}` where nid='{$data['nid']}' and id!='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_site_menu_nid_exiest";
		
		if ($data['checked']==1){
			$sql = "update `{site_menu}` set `checked`=0 ";
			$mysql->db_query($sql);
		}
		
		$sql = "update `{site_menu}` set ";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
		return $data['id'];
	}
	
		/**
	 * �޸Ĳ˵�
	 *
	 * @param array $data =array("name"=>"����","nid"=>"����","pid"=>"����","contents"=>"����");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateSiteMenuChecked($data = array()){
		global $mysql;
		 //�ж�Id�Ƿ����
        if (!IsExiest($data['id'])) {
            return "admin_site_menu_id_empty";
        } 
		
		$sql = "update `{site_menu}` set `checked`=0 ";
		$mysql->db_query($sql);
		
		
		$sql = "update `{site_menu}` set `checked`=1 where id='{$data['id']}' ";
		$mysql->db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * ��ò˵��б�
	 *
	 * @return Array
	 */
	function GetSiteMenuList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.* ";
		$_order = " order by p1.checked desc,p1.order desc ,p1.id desc";
		$sql = "select SELECT from `{site_menu}` as p1 SQL ORDER ";
		
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
		$_limit = " limit ".($epage * ($page - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		return $result;
	}
	
	/**
	 * 5,��ò˵����б�
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	public static function GetSiteMenuOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "admin_site_menu_id_empty";
		$sql = "select * from `{site_menu}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_site_menu_empty";
		return $result;
	}
	
	/**
	 * 7,ɾ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelSiteMenu($data = array()){
		global $mysql;
		
		if (!IsExiest($data['id'])) return "admin_site_menu_id_empty";
		$sql = "select count(1) as num from `{site_menu}`";
		$result = $mysql->db_fetch_array($sql);
		if ($result['num']==1) return "admin_site_menu_only_one";
		//�ж��Ƿ�������
		$sql = "select 1 from `{site}` where menu_id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_site_menu_site_exiest";
		if ($result['checked']==1){
			$sql = "update  `{site_menu}` set checked=1 limit 1";
			$mysql->db_query($sql);
		}
		
		$sql = "delete from `{site_menu}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * ����б�
	 *
	 * @return Array
	 */
	 /**
	 * 2,�����б�
	 * $data = array("user_id"=>"�û�id","username"=>"�û���");
	 * @return Array
	 */
	function GetSiteList($data = array()){
		global $mysql;
		
		$_sql = "where 1=1 ";	
		if ($data['pid']!=""){
			$_sql .= " and p1.pid='{$data['pid']}'";
		}
		if ($data['status']!=""){
			$_sql .= " and p1.status='{$data['status']}'";
		}
		$_order = " order by p1.order desc ,p1.id asc ";
		
		$_select = " p1.*";
		$sql = "select SELECT from `{site}` as p1  SQL ORDER LIMIT ";
		
		//�Ƿ���ʾȫ������Ϣ
		
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
		
		return $result;
	}
	
	/**
	 * 3,�������
	 *
	 * @param Array $data = array("name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function AddSite($data = array()){
		global $mysql;
		if (!IsExiest($data['name'])) return "admin_site_name_empty";
		if (!IsExiest($data['nid'])) return "admin_site_nid_empty";
		$sql = "select 1 from `{site}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_site_nid_exiest";
		
		
		$sql = "insert into `{site}` set ";
		$_sql = array();
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	$id = $mysql->db_insert_id();
		
		return $id;
	}
	
	
	/**
	 * 4,���ͷ���
	 *
	 * @param Array $data = array("name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function GetSite($data = array()){
		global $_G,$mysql;
		//��ȡվ����б�
		if (isset($_G["site"])){
			$result = $_G['site'];
		}else{
			//$result = self::GetSiteList(array("limit"=>"all"));
		}
		//��ȡվ��Ĭ�ϵĲ˵�
		if (!IsExiest($data['menu_id'])){
			if (isset($_G["site_menu_id"])){
				$data['menu_id'] = $_G['site_menu_id'];
			}else{
				$sql = "select * from `{site_menu}` where checked=1";
				$_result = $mysql->db_fetch_array($sql);
				$data['menu_id'] = $_result['id'];
			}
		}
		
		$_result = array();
		$_res_pid = array();
		$var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$type_var="��";
		foreach ($result as  $key => $value){
			if ($value['menu_id']==$data['menu_id']){
				$site_result[$value['id']] = $value;
				$_res_pid[$value['pid']][] = $value['id'];
			}
		}
		if (IsExiest($data['lgnore'])!=false){
			unset($_res_pid[$data['lgnore']]);
		}
		if (count($_res_pid)>0){
			foreach ($_res_pid[0] as $key => $value){
				$_result[$value] = $site_result[$value];
				$_result[$value]['_name'] = $_result[$value]['name'];
				$_result[$value]['type_name'] = $_result[$value]['name'];
				
				$_site_data['site_result'] = $site_result;
				$_site_data['result'] = $_res_pid;
				$_site_data['_result'] = $_res_pid[$value];
				$_site_data['var'] = $var;
				$_site_data['type_var'] = $type_var;
				$_result = $_result +  self::_GetSite($_site_data);
					
			}
		}
		if (IsExiest($data['lgnore'])!=false){
			unset($_result[$data['lgnore']]);
		}
		return $_result;
	}
	function _GetSite($_site_data){
		$var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$type_var="��";
		$_var = $_site_data["var"];
		$_type_var = $_site_data["type_var"];
		$_result = array();
		if (isset($_site_data['_result']) && $_site_data['_result']!=""){
			foreach ($_site_data['_result'] as $key => $value){
				$_result[$value] = $_site_data["site_result"][$value];
				$_result[$value]['_name'] = $_var.$_result[$value]['name'];
				$_result[$value]['type_name'] = $_type_var.$_result[$value]['name'];
				$_site_data["result"][$value] = isset($_site_data["result"][$value])?$_site_data["result"][$value]:"";
				$_site_data['_result'] = $_site_data["result"][$value];
				$_site_data['var'] = $_site_data['var'].$var;
				$_site_data['type_var'] = $_site_data['type_var'].$type_var;
				$_result = $_result +  self::_GetSite($_site_data);
			}
		}
		return $_result;
	}
	
	/**
	 * 4,���ͷ���
	 *
	 * @param Array $data = array("name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function GetSites($data = array()){
		global $_G,$mysql;
		//��ȡվ����б�
		if (isset($_G["site"])){
			$result = $_G['site'];
		}else{
			$result = self::GetSiteList(array("limit"=>"all"));
		}
		//��ȡվ��Ĭ�ϵĲ˵�
		$data['menu_id'] = isset($data['menu_id'])?$data['menu_id']:"";
		if (!IsExiest($data['menu_id'])){
			if (isset($_G["site_menu_id"])){
				$data['menu_id'] = $_G['site_menu_id'];
			}else{
				$sql = "select * from `{site_menu}` where checked=1";
				$_result = $mysql->db_fetch_array($sql);
				$data['menu_id'] = $_result['id'];
			}
		}
		$_result = array();
		$var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$type_var="��";
		if (IsExiest($data['menu_id'])!=false){
			foreach ($result as  $key => $value){
				$_res[$value['id']]['pid'] = $value['pid'];
				if ($value['pid']==0 && $value['menu_id']==$data['menu_id']){
					$_result[$value['id']] = $value;
					$_result[$value['id']]['_name'] = $value['name'];
					$_result[$value['id']]['type_name'] = $value['name'];
					$_result[$value['id']]['var'] = "";
					if ($value['nid']=="index"){
						$_result[$value['id']]['url'] = "/";
					}elseif ($value['type']=="url"){
						$_result[$value['id']]['url'] = $value['value'];
					}else{
						$_result[$value['id']]['url'] = "/{$value['nid']}/index.html";
					}
					$_result[$value['id']]['list_result'] = self::_GetSites($result,$value['id'],$var,$type_var);
					;
				}
			}
		}else{
			foreach ($result as  $key => $value){
				$_res[$value['id']]['pid'] = $value['pid'];
				if ($value['pid']==0){
					
					$_result[$value['id']] = $value;
					$_result[$value['id']]['_name'] = $value['name'];
					$_result[$value['id']]['type_name'] = $value['name'];
					$_result[$value['id']]['var'] = "";
					if ($value['type']=="url"){
						$_result[$value['id']]['url'] = $value['value'];
					}else{
						$_result[$value['id']]['url'] = "/{$value['nid']}/index.html";
					}
					$_result[$value['id']]['list_result'] = self::_GetSites($result,$value['id'],$var,$type_var);
					
				}
			}
		}
		return $_result;
	}
	function _GetSites($result,$pid,$var,$type_var){
		$_result = array();
		$_var = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$_type_var="��";
		$opid = "";
		foreach ($result as  $key => $value){
			if ($value['pid'] == $pid){
				if ($opid==""){
					$_result[$value['id']] = $value;
					$_result[$value['id']]['_name'] = $var.$value['name'];
					$_result[$value['id']]['type_name'] = $type_var.$value['name'];
					$_result[$value['id']]['var'] = $var.$_var;	
					if ($value['type']=="url"){
						$_result[$value['id']]['url'] = $value['value'];
					}else{
						$_result[$value['id']]['url'] = "/{$value['nid']}/index.html";
					}
					$_result[$value['id']]['list_result'] = self::_GetSites($result,$value['id'],$var.$_var,$type_var.$_type_var);
				}else{
					$_result[$value['id']] = $value;
					$_result[$value['id']]['_name'] = $var.$value['name'];
					$_result[$value['id']]['type_name'] = $type_var.$value['name'];
					$_result[$value['id']]['var'] = $var.$_var;	
					if ($value['type']=="url"){
						$_result[$value['id']]['url'] = $value['value'];
					}else{
						$_result[$value['id']]['url'] = "/{$value['nid']}/index.html";
					}
					$_result[$value['id']]['list_result'] = self::_GetSites($result,$value['id'],$var.$_var,$type_var.$_type_var);
				}
			}
		}
		return $_result;
	}

	
	/**
	 * 5,������͵��б�
	 *
	 * @param Array $data = array("id"=>"");

	 * @return Array
	 */
	public static function GetSiteOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "admin_site_id_empty";
		$sql = "select * from `{site}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_site_empty";
		return $result;
	}
	
	
	/**
	 * 6,�޸�����
	 *
	 * @param Array $data = array("id"=>"ID","name"=>"����","nid"=>"����","contents"=>"����","order"=>"����")
	 * @return Boolen
	 */
	function UpdateSite($data = array()){
		global $mysql;
		if (!IsExiest($data['name'])) return "admin_site_name_empty";
		if (!IsExiest($data['nid'])) return "admin_site_nid_empty";
		$sql = "select 1 from `{site}` where nid='{$data['nid']}' and id!='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_site_nid_exiest";
		$sql = "update `{site}` set ";
		$_sql = array();
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
    	
		return $data['id'];
	}
	
	/**
	 * 7,ɾ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DelSite($data = array()){
		global $mysql;
		
		//�ж��Ƿ����
		$sql = "select 1 from `{site}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_site_not_exiest";
		
		//�ж��Ƿ�������
		$sql = "select 1 from `{site}` where pid='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_site_pid_exiest";
		
		$sql = "delete from `{site}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	/**
	 * 8,���վ��ĵ�����Ϣ
	 *
	 * @param Array $data = array("id"=>"");

	 * @return Array
	 */
	public static function GetSiteOnes($data = array()){
		global $_G;
		//��ȡվ����б�
		if (isset($_G["site"])){
			$result = $_G['site'];
		}else{
			$result = self::GetSiteList(array("limit"=>"all"));
		}
		$_result = false;
		foreach ($result as $key => $value){
			if ($value["nid"]==$data['nid']){
				$_result = $value;
			}
		}
		
		return $_result;
	}
	
	
	function ActionSite($data){
		global $mysql;
		if ($data['id']!=""){
			foreach ($data['id'] as $key => $value){
				$sql = "update `{site}` set `order` = '{$data['order'][$key]}' where id='{$value}'";
				$mysql->db_query($sql);
			}
		
		}
	
	}
	/**
	 * 1,������͵��б�
	 *
	 * @param Array $data = array("id"=>"");

	 * @return Array
	 */
	public static function GetSystemTypeOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "admin_system_type_id_empty";
		$sql = "select * from `{system_type}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_system_type_empty";
		return $result;
	}
	
	
	/**
	 * 2,�޸�����
	 *
	 * @param Array $data = array("id"=>"ID","name"=>"����","nid"=>"����")
	 * @return Boolen
	 */
	function UpdateSystemType($data = array()){
		global $mysql;
		if (!IsExiest($data['name'])) return "admin_system_type_name_empty";
		if (!IsExiest($data['nid'])) return "admin_system_type_nid_empty";
		$sql = "select 1 from `{system_type}` where nid='{$data['nid']}' and id!='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_system_type_nid_exiest";
		$sql = "update `{system_type}` set ";
		$_sql = array();
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where id='{$data['id']}'");
    	
		return $data['id'];
	}
	
	
	/**
	 * 3,�������
	 *
	 * @param Array $data = array("id"=>"ID","name"=>"����","nid"=>"����")
	 * @return Boolen
	 */
	function AddSystemType($data = array()){
		global $mysql;
		if (!IsExiest($data['name'])) return "admin_system_type_name_empty";
		if (!IsExiest($data['nid'])) return "admin_system_type_nid_empty";
		$sql = "select 1 from `{system_type}` where nid='{$data['nid']}' ";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_system_type_nid_exiest";
		$sql = "insert into `{system_type}` set ";
		$_sql = array();
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql));
    	
		return $mysql->db_insert_id();
	}
	
	/**
	 * 4,ɾ������
	 *
	 * @param Array $data = array("id"=>"ID")
	 * @return Boolen
	 */
	function DeleteSystemType($data = array()){
		global $mysql;
		
		//�ж��Ƿ����
		$sql = "select nid from `{system_type}` where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_system_type_empty";
		$sql = "select 1 from `{system}` where code='{$result['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "admin_system_type_code_exiest";
		$sql = "delete from `{system_type}`  where id='{$data['id']}'";
    	$mysql -> db_query($sql);
		
		return $data['id'];
	}
	
	/**
	 * 5,�б�
	 *
	 * @return Array
	 */
	function GetSystemTypeList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		
		
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
            $_sql .= " and p1.status = '{$data['status']}'";
        }
		$_select = " p1.*,p2.name as module_name ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{system_type}` as p1 left join `{modules}` as p2 on p1.code=p2.nid SQL ORDER LIMIT ";
		
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
	 * ���ͼƬ
	 * 
	 * @return Array
	 */
	function GetUpfiles($data = array()){
		global $mysql,$_G;
		$_sql = " where 1=1 ";
		if (isset($data['username']) && $data['username']!=""){
			$_sql .= " and p2.username like '%{$data['username']}%'";
		}
		if (isset($data['quer']) && $data['quer']!=""){
			$_sql .= " and p1.query like '%{$data['quer']}%'";
		}
		$page = empty($data['page'])?1:$data['page'];
		$epage = empty($data['epage'])?10:$data['epage'];
		
		$_select = "p1.*,p2.username";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{users_upfiles}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id  {$_sql} ORDER LIMIT";
		
		$row = $mysql->db_fetch_array(str_replace(array('SELECT', 'ORDER', 'LIMIT'), array('count(1) as num', '', ''), $sql));
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
	 * �޸�ͼƬ
	 * 
	 * @return Array
	 */
	function UpdateUpfiles($data = array()){
		global $mysql;
		if (count($data['id']>0)){
			foreach($data['id'] as $key => $value){
				$contents = iconv('UTF-8', 'GB2312',$data['contents'][$key]);
				$sql = "update `{users_upfiles}` set contents='$contents' where id='{$value}'";
				$mysql->db_query($sql);
			}
		}
        return "";
	}
}
?>