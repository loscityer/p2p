<?php
/******************************
 * $File: admin.module.php
 * $Description: ģ���ദ��
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

class moduleClass {
	
	
	/**
	 * ���ģ���б�
	 *
	 * @return Array
	 */
	function GetModuleList($data = array()){
		global $mysql;
		
		if ($data['type']=="system"){
			$_sql = " where type='system' ";
		}elseif ($data['type']=="all"){
			$_sql = " where 1=1 ";
		}else{
			$_sql = " where type!='system' ";
		}
		//�ж����������Ƿ����
		$data['nid'] = isset($data['nid'])?$data['nid']:"";
        if (IsExiest($data['nid'])!=false) {
            $_sql .= " and p1.nid ='{$data['nid']}'";
        }
		
		$data['name'] = isset($data['name'])?$data['name']:"";
		if (IsExiest($data['name'])!=false) {
            $_sql .= " and p1.name like '%{$data['name']}%'";
        }
		
		$_select = " p1.* ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{modules}` as p1 SQL ORDER ";
		$_limit = "";
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
	
	function GetModule( $data){
		global $mysql;
		if (!IsExiest($data['nid'])) return "admin_module_nid_empty";
		$sql = "select * from `{modules}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$code = $data['nid'];
			$result = array_merge(self::GetModuleInfo($code),array("code"=>$code));
			$result['nid'] = $result['code'];
			return $result;	
		}else{
			return $result;
		}
	}
	
	function GetModulePurview( $data){
		global $mysql,$_G;
		$_sql = "";
		
		
		$result = $_G['module'];
		
		$_purview = array();
		if ($result!=false){
			foreach($result as $key => $value){
				if ($value['purview']!=""){
					$_purview = array_merge($_purview,unserialize(html_entity_decode($value['purview'])));
				}
			}
			if (IsExiest($data['code'])!=false){
				$_purview[$data['code']]['result'] = isset($_purview[$data['code']]['result'])?$_purview[$data['code']]['result']:"";
				$result =   $_purview[$data['code']]['result'];
				if (IsExiest($data['type_id']!=1)){
					if (IsExiest($data['purview'])!=false){
						$purview = explode(",",$data['purview']);
						$_result = array();
						if ($result!=""){
						foreach ($result as $key => $value){
							if (in_array($key,$purview)){
								$_result[$key] = $value;
							}
						}
						}
						$result = $_result;
					}
				}
				return $result;
				
			}else{
			
				return $_purview;
			}
		}else{
			return $result;
		}
	}
	
	/**
	 * ����û���Ȩ��
	 *
	 * @param Array $fields_id 
	 * @param Array $order 
	 * @return Integer
	 */
	function GetModuleAdmin($data){
		global $mysql;
		
		if (isset($data['user_id']) && $data['user_id']==""){
			return "";
		}
		
		//��һ��������Ա��𣬲��Ҷ�ȡ���͵�����Ȩ��
		$sql = "select p1.*,p2.purview from `{users_admin}` as p1 left join `{users_admin_type}` as p2 on p1.type_id=p2.id where p1.user_id='{$data['user_id']}'";
		$result = $mysql -> db_fetch_array($sql);
		$purview = explode(",",$result['purview']);//�ֽ�Ȩ��
		//�ڶ�������ȡ����ϵͳ������������е�ģ�飬����������
		$sql = "select * from `{modules}`  order by `order` desc,id desc";
		$module_result = $mysql->db_fetch_arrays($sql);
		
		//print_r($module_result);
		
		//����������ȡȨ�����е�ֵ
		$purview_all = array();
		$purview_top = array();
		$purview_other = array();
		$_purview_top_first = array('articles','users','site','system');
		$_purview_other_first = array('rating','areas','linkages','message');
		$i=0;
		foreach ($module_result as  $key => $value){
			if ($value['purview']!="" && $value["type"]!='system'){
				if ($value['status']==1 && $i<6){
					$purview_top = array_merge($purview_top,unserialize(html_entity_decode($value['purview'])));
					$i++;
				}else{
					$purview_other = array_merge($purview_other,unserialize(html_entity_decode($value['purview'])));
				}
			}else{
				$purview_top_other = array_merge($purview_top,unserialize(html_entity_decode($value['purview'])));
			}
			$purview_all = array_merge($purview_all,unserialize(html_entity_decode($value['purview'])));
		}
		
		if ($result['type_id']== 1){//��ʾϵͳ����Ա
			//�ڶ�������ȡ����ϵͳ������������е�ģ�飬����������
			$sql = "select * from `{modules}` where type='system'  order by `order` desc,id desc";
			$module_system_result = $mysql->db_fetch_arrays($sql);
			foreach ($module_system_result as $key => $value){
				if (in_array($value['nid'],$_purview_top_first) || $value['nid']=="admin"){
					$purview_top = array_merge($purview_top,unserialize(html_entity_decode($value['purview'])));
				}
				if (in_array($value['nid'],$_purview_other_first) ){
					$purview_other = array_merge($purview_other,unserialize(html_entity_decode($value['purview'])));
				}
			}
			return array("all"=>$purview_all,"top"=>$purview_top,"other"=>$purview_other,"purview"=>"");
		}else{
			$_purview_all = array();
			
			
			
			//Ĭ�ϵļ���ģ��
			foreach ($purview_top_other as $key => $value){
				foreach ($value['result'] as $_key=>$_value){
					if (in_array($_key,$purview)){
						$_purview_top[$key] = $value;
					}
				}
			}
			
			foreach ($purview_all as $key => $value){
				foreach ($value['result'] as $_key=>$_value){
					if (in_array($key,$_purview_top_first) && in_array($_key,$purview)){
						$_purview_top[$key] = $value;
					}
				}
			}
			
			foreach ($purview_all as $key => $value){
				foreach ($value['result'] as $_key=>$_value){
					if (in_array($_key,$purview)){
						$_purview_all[$key] = $value;
					}
					if (in_array($key,$_purview_other_first) && in_array($_key,$purview)){
						$_purview_other[$key] = $value;
					}
				}
				
		   }
			
			
			
			foreach ($purview_other as $key => $value){
				foreach ($value['result'] as $_key=>$_value){
					if (in_array($_key,$purview)){
						$_purview_other[$key] = $value;
					}
				}
			}
		}
		return  array("all"=>$_purview_all,"top"=>$_purview_top,"other"=>$_purview_other,"purview"=>$purview);
	}
	 
	 
	 
	/**
	 * �޸�
	 *
	 * @param Array $fields_id 
	 * @param Array $order 
	 * @return Integer
	 */
	public static function UpdateModule($data){
		global $mysql;
		if (!IsExiest($data['nid'])) return "admin_module_nid_empty";
		$sql = "select id from `{modules}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_module_empty"; 
		$id = $result['id'];
		
		$sql = "update `{modules}` set ";
		foreach ($data as $key => $value){
			$_sql[] = "`$key`='$value'";
		}
		$sql .= join(",",$_sql);
		$sql .= " where nid = '{$data['nid']}'";
		$result =  $mysql->db_query($sql);
		
		//����Ȩ�޵���Ϣ
		$nid = $data['nid'];
		$_A['list_purview'] = array();
		if (file_exists(ROOT_PATH."modules/$nid/".$nid.".php")){
			require_once(ROOT_PATH."modules/$nid/".$nid.".php");
		}
		$purview = serialize($_A['list_purview']);
		$sql = "update `{modules}` set purview='{$purview}' where nid='{$nid}'";
		$mysql->db_query($sql);
				
		return $id;
	}
	
	
	/**
	 * ���ģ��
	 *
	 * @param Array $fields_id 
	 * @param Array $order 
	 * @return Integer
	 */
	public static function AddModule($data){
		global $mysql;
		if (!IsExiest($data['nid'])) return "admin_module_nid_empty";
		$code = $nid = $data['nid'];
		//���ģ���Ƿ�װ
		$sql = "select 1 from `{modules}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if($result !=false) return "admin_module_exiest";
		
		//ִ�����ݱ�
		$url = ROOT_PATH."modules/$code/".$code.".install.php";
		if (file_exists($url)){
			require_once($url);
		}
		
		//����ģ���
		$sql = "insert into  `{modules}` set ";
		foreach ($data as $key => $value){
			$_sql[] = "`$key`='$value'";
		}
		$sql .= join(",",$_sql);
		$sql .= ",`addtime`='".time()."',`addip`='".ip_address()."'";
		$mysql->db_query($sql);
		$id = $mysql->db_insert_id();
		//����Ȩ�޵���Ϣ
		$_A['list_purview'] = array();
		if (file_exists(ROOT_PATH."modules/$nid/".$nid.".php")){
			require_once(ROOT_PATH."modules/$nid/".$nid.".php");
		}
		$purview = serialize($_A['list_purview']);
		$sql = "update `{modules}` set purview='{$purview}' where nid='{$nid}'";
		$mysql->db_query($sql);
		return $id;
		
	}
	
	
	
	/**
	 * ж��ģ��
	 */
	function DeleteModule($data = array()){
		global $mysql;
		
		if (!IsExiest($data['nid'])) return "admin_module_nid_empty";
		
		$sql = "select nid from `{modules}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "admin_module_empty"; 
			
		$code = $result['nid'];
		
		
		//ִ�����ݱ�
		$url = ROOT_PATH."modules/$code/".$code.".unstall.php";
		if (file_exists($url)){
			require_once($url);
		}
		
		
		$sql = "delete from {modules} where nid='$code' and type!='system'";
		$mysql->db_query($sql);
	
		return true;
		
	}
	
	/**
	 * �������ݱ� data = array("table"=>"Ҫ���ݵı������,����","filedir"=>"���ݵ�Ŀ¼","page"=>"��ҳ","limit"=>"����")
	 * 
	 * @return Array
	 */
	public static  function SaveModules($data = array() ){
		global $mysql;
		if (!IsExiest($data['nid'])) return "";
		if (!IsExiest($data['table'])) return "";
		$table = $data['table'];
		$limit = (!IsExiest($data['limit']))?0:$data['limit'];
		
		$table_page = (!IsExiest($data['page']))?1:$data['page'];
		$filedir = "modules/{$data['nid']}/dbback/".date("Ymd",time());
		$file = $filedir."/".$table."_".$table_page.".sql";
		create_file($file);
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
		
		$sql = "select * from `{".$table."}` ";
		
		$result= $mysql->db_fetch_arrays($sql)  ; 
		if (count($result)>0){
			foreach ($result as $key => $value){
				$text .= "insert into {".$table."}` ( ";
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
	
	
	
	//���ģ����б�
	function  GetModuleFileList($data = array()){
		global $mysql;
		
		//ģ�������е�ģ��
		$module_file = get_file("modules");
		
		if ($data['type']=="system"){
			//���Ѱ�װ��ģ����д���
			$sql = "select * from `{modules}` where type='system'  order by `order` desc,id desc ";
			$module_list = $mysql->db_fetch_arrays($sql);
			if ($module_list!=false){
				foreach ($module_list as $key => $value){
					$code = $value['nid'];
					$url = ROOT_PATH."modules/$code/".$code.".info";
					if (file_exists($url)){
						require_once($url);
						$module_list[$key]["version_new"] = $version;
					}
				}
			}
			return $module_list;
		}
		elseif ($data['type']=="install"){
			//���Ѱ�װ��ģ����д���
			$sql = "select * from `{modules}` where type!='system'  order by `status` desc,`order` desc ";
			$module_list = $mysql->db_fetch_arrays($sql);
			if ($module_list!=false){
				foreach ($module_list as $key => $value){
					$code = $value['nid'];
					$url = ROOT_PATH."modules/$code/".$code.".info";
					if (file_exists($url)){
						require_once($url);
						$module_list[$key]["version_new"] = $version;
					}
				}
			}
			return $module_list;
		
		}
		
		else{
			//���Ѱ�װ��ģ����д���
			$sql = "select * from `{modules}`  order by `order` desc ";
			$module_list = $mysql->db_fetch_arrays($sql);
			//���Ѱ�װ��ģ����д���
			$_module_list = array();
			if ($module_list!=false){
				foreach ($module_list as $key => $value){
					$_module_list[] = $value['nid'];
				}
			}
			$result = "";
			foreach($module_file as $code){
				$type = "";
				$url = ROOT_PATH."modules/$code/".$code.".info";
				if (file_exists($url)){
					require_once($url);
					if (!in_array($code,$_module_list) && $type!="system"){
						$result[] = array_merge(self::GetModuleInfo($code),array("code"=>$code));
					}
				}
			}
			return $result;
		}
		
	}
	
	
	function GetModuleInfo ($module){
		$var = array("code","name","version","description","author","date","update","type");
		if ($module_dir=="") $module_dir = ROOT_PATH."modules/$module/";
		include ($module_dir."".$module.".info");
		foreach($var as $val){
			$result[$val] = empty($$val)?"":$$val;
		}
		return $result;
	}
	
	
	
	function UpdateModuleSystem($data){
		global $mysql;
		
		//����ĳһģ��
		if (IsExiest($data['nid'])!=false){
			$nid = $data['nid'];
			if (file_exists("modules/$nid/".$nid.".info")){
				$url = "modules/$nid/".$nid.".info";
				require_once($url);
				
				//����ģ�����Ϣ
				if (file_exists(ROOT_PATH."modules/$nid/".$nid.".update.php")){
					require_once(ROOT_PATH."modules/$nid/".$nid.".update.php");
				}
				$sql = "update `{modules}` set name='{$name}',version='{$version}',version_new='{$version}',date='{$date}',description='{$description}',author='{$author}',`update`='{$update}',type='{$type}' where nid='{$nid}'";
				$mysql->db_query($sql);
				
				//����Ȩ�޵���Ϣ
				$_A['list_purview'] = array();
				if (file_exists(ROOT_PATH."modules/$nid/".$nid.".php")){
					require_once(ROOT_PATH."modules/$nid/".$nid.".php");
				}
				$purview = serialize($_A['list_purview']);
				$sql = "update `{modules}` set purview='{$purview}' where nid='{$nid}'";
				$mysql->db_query($sql);
			}
		}
		
		//ģ�������е�ģ��
		else{
			$module_file = get_file(ROOT_PATH."/modules");
			foreach($module_file as $nid){
				//����Ȩ�޵���Ϣ
				
				if (file_exists(ROOT_PATH."modules/$nid/".$nid.".info")){
					$url = ROOT_PATH."modules/$nid/".$nid.".info";
					require_once($url);
					$sql = "select 1 from `{modules}` where nid='{$nid}'";
					$result = $mysql->db_fetch_array($sql);
					if ($result!=false){
						if (file_exists(ROOT_PATH."modules/$nid/".$nid.".update.php")){
							require_once(ROOT_PATH."modules/$nid/".$nid.".update.php");
						}
						$sql = "update `{modules}` set name='{$name}',nid='{$nid}',version='{$version}',version_new='{$version}',date='{$date}',description='{$description}',author='{$author}',`update`='{$update}',type='{$type}' where nid='{$nid}'";
						
						$mysql->db_query($sql);
						
					}else{
						if ($type=="system"){
							$sql = "insert into `{modules}` set name='{$name}',nid='{$nid}',version='{$version}',version_new='{$version}',date='{$date}',description='{$description}',author='{$author}',`update`='{$update}',type='{$type}'";
							$mysql->db_query($sql);
						}
					}
					$_A['list_purview'] = array();
					if (file_exists(ROOT_PATH."modules/$nid/".$nid.".php")){
						require_once(ROOT_PATH."modules/$nid/".$nid.".php");
					}
					$purview = serialize($_A['list_purview']);
					
					$sql = "update `{modules}` set purview='{$purview}' where nid='{$nid}'";
					$result = $mysql->db_query($sql);
				}
			}
		}		
	}
	
	//�޸�ģ��������״̬
	function ActionModule($data){
		global $mysql;
		foreach ($data['id'] as $key => $value){
			$sql ="update `{modules}` set `order`='{$data['order'][$key]}',`status`='{$data['status'][$key]}' where id='{$value}'";
			$mysql->db_query($sql);
		}
		return 1;
	}
	
	//�ж��Ƿ���Ҫǿ�Ʋ˵���1��ʾ��Ҫ��0��ʾ����Ҫ
	function GetModuleStatus($data){
		global $mysql;
		$sql = "select * from `{modules}` where nid='{$data['nid']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result['status']==0){
			if ($result['type']=="system") return 0;
			return 1;
		}else{
			$id = $result['id'];
			$sql = "select count(1) as num from `{modules}` where  status=1 and type!='system' and id>$id order by `order` desc,id asc";
			$result = $mysql->db_fetch_array($sql);
			if ($result['num']<=6){
				return 0;
			}else{
				return 1;
			}
		}
	}
}
?>
