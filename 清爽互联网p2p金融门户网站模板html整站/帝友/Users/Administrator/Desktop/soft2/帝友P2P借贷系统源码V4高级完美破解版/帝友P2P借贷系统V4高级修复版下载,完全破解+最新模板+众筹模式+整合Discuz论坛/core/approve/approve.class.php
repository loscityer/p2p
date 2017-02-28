<?
/******************************
 * $File: approve.class.php
 * $Description: ��֤˵��
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

//�����Ը������
require_once("approve.model.php");
//require_once ("nusoap.php");
require_once("approve.id5.php");

class approveClass{
	
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetSmsList($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		
		if (IsExiest($data['phone'])!=false) {
            $_sql .= " and p1.phone like '%{$data['phone']}%'";
        }
		
		
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
            $_sql .= " and p1.status = '{$data['status']}'";
        }
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{approve_sms}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT ";
		
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
	 * �����ŵ���֤�룬��ȡ�����һ��
	 *
	 * @param Array $data = array("user_id"=>"�û�id","type"=>"����");
	 * @return Array
	 */
	function CheckSmsCode($data){
		global $mysql;
		$sql = "select * from `{approve_smslog}` where user_id={$data['user_id']} and type='{$data['type']}' order by id desc";
		$result = $mysql->db_fetch_array($sql);
	
		if ($result==false) return "approve_sms_not_exiest";
		if ($result['code_status']==1) return "approve_sms_check_yes";
		if ($result['phone']!=$data['phone']) return "approve_sms_phone_error";
		if ($result['code']!=$data['code']) return "approve_sms_code_error";
		
		$sql = "update `{approve_smslog}` set code_status=1,code_time='".time()."' where id={$result['id']}";
		$mysql->db_query($sql);
		
		$sql = "select id from `{approve_sms}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		$_data['id'] = $result['id'];
		$_data['verify_remark'] = "�û��ֻ���֤ͨ��";
		$_data['status'] = 1;
		$_data['verify_userid'] = 0;
		self::CheckSms($_data);
		return $data['user_id'];
	
	}
	
	
	
	public static function update_tender_status($data = array()){
	global $mysql;
	$sql="update `{users_info}` set `tender_status`=1 where `user_id` = {$data['user_id']}";
			$mysql->db_query($sql);
	}
	/**
	 * �鿴
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	public static function GetSmsOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "approve_sms_id_empty";
		$sql = "select p1.*,p2.username from `{approve_sms}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_sms_not_exiest";
		return $result;
	}
	
	/**
	 * ���
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddSms($data = array()){
		global $mysql;
		//�ֻ����벻��Ϊ��
		if (!IsExiest($data['phone'])) return "approve_sms_phone_empty";
		
		//�ж��ֻ��Ƿ���ȷ
		if (!preg_match("/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{9}$/", $data['phone'])){
			return "approve_sms_phone_error";
		}	
		
		//�ж��û����Ƿ����
		if (IsExiest($data['username']) != false){
			$sql = "select user_id from `{users}` where username='{$data['username']}'";
			$result =  $mysql->db_fetch_array($sql);
			if ($result==false) return "approve_sms_username_not_exiest";
			$data['user_id'] = $result['user_id'];
		}
		
		//�ж��û�id�Ƿ����
		if (!IsExiest($data['user_id'])){
			return "approve_sms_userid_not_exiest";
		}
		
		//�ж��Ƿ��д���˵Ķ�����֤��
		$status =0 ;
		$sql = "select 1 from `{approve_sms}` where `user_id`='{$data['user_id']}' ";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false && $result['status']==1) return "approve_sms_phone_status_exiest";
		if ($result!=false) $status = 1;
		//�ж��ֻ������Ƿ����,״̬0��ʾ�����У�1��ʾͨ����2��ʾ��˲�ͨ����3��ʾ����
		$sql = "select 1 from `{approve_sms}` where `phone`='{$data['phone']}' and status=1";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "approve_sms_phone_exiest";
		
		if ($status==0){
			$sql = "insert into `{approve_sms}` set `addtime` = '".time()."',`addip` = '".ip_address()."',user_id='{$data['user_id']}',status=0,`phone`='{$data['phone']}'";
			$mysql->db_query($sql);
		}else{
			$sql = "update `{approve_sms}` set phone='{$data['phone']}',status=0 where user_id='{$data['user_id']}'";
			$mysql->db_query($sql);
		
		}
		return $data['user_id'];
	}
	
	/**
	 * �޸�
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function UpdateSms($data = array()){
		global $mysql;
		//id����Ϊ��
		if (!IsExiest($data['id'])) return "approve_sms_id_empty";
		
		//�ֻ����벻��Ϊ��
		if (!IsExiest($data['phone'])) return "approve_sms_phone_empty";
		
		//�ж��û����Ƿ����
		if (IsExiest($data['username']) != false){
			$sql = "select user_id from `{users}` where username='{$data['username']}'";
			$result =  $mysql->db_fetch_array($sql);
			if ($result==false) return "approve_sms_username_not_exiest";
			$data['user_id'] = $result['user_id'];
		}
		//�ж��û�id�Ƿ����
		if (!IsExiest($data['user_id'])){
			return "approve_sms_userid_not_exiest";
		}
		//�ж��Ƿ��д���˵Ķ�����֤��
		$sql = "select * from `{approve_sms}` where `id`='{$data['id']}' ";
		$result = $mysql->db_fetch_array($sql);
		if ($data['user_id']==$result['user_id'] && $data['phone']==$result['phone'] ){
			return "approve_sms_update_success";
		}
		
		//�ж��ֻ������Ƿ����,״̬0��ʾ�����У�1��ʾͨ����2��ʾ��˲�ͨ����3��ʾ����
		$sql = "select 1 from `{approve_sms}` where `phone`='{$data['phone']}' and status<2";
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) return "approve_sms_phone_exiest";
		
		$sql = "update `{approve_sms}` set status=3 where id='{$data['id']}'";
		$mysql->db_query($sql);
		
		
		return $id;
	}
	
	/**
	 * 5,���ѧ��
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckSms($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "approve_sms_id_empty";
		
		$sql = "select p1.* from `{approve_sms}` as p1  where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_sms_not_exiest";
		$user_id = $result['user_id'];
		$phone = $result['phone'];
		//�����ͨ���Ļ�������ֱ�Ϊ0
		if ($data['status']==2) $data['credit'] = 0;
		
		//���ͨ���Ļ��򽫶�����֤״̬����Ϊ3
		if ($data['status']==1){
			$sql = "update `{approve_sms}` set status=3,credit=0 where user_id='{$result['user_id']}' and status=1";
			$result = $mysql->db_query($sql);
		}
		
		$sql = "update `{approve_sms}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}',credit='{$data['credit']}' where id='{$data['id']}'";
		$result = $mysql->db_query($sql);
		if ($result!=false){
			$user_info['user_id'] = $user_id;
			if ($data['status']!=1){
				$phone = "";
			}
			$user_info['phone'] = $phone;
			$user_info['phone_status'] = $data['status'];
			$result = usersClass::UpdateUsersInfo($user_info);
		}
		//������˼�¼
		$_data["user_id"] = $user_id;
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "sms";
		$_data["article_id"] = $data["id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		
		//��ӻ��ּ�¼
		$credit_log['user_id'] = $user_id;
		$credit_log['nid'] = "phone";
		$credit_log['code'] = "approve";
		$credit_log['type'] = "phone";
		$credit_log['addtime'] = time();
		$credit_log['article_id'] =$user_id;
		$credit_log['remark'] = "�ֻ���֤ͨ�����û���";
		creditClass::ActionCreditLog($credit_log);
		
		return $data['id'];
	}
	
	/**
	 * ���Ͷ���
	 *
	 * @param Array $data = array("type"=>"����","type"=>"����","user_id"=>"�û�","phone"=>"�绰","content"=>"����","time"=>"����ʱ��");
	 * @return Array
	 */
	public static  function SendSMS($data)
	{
		global $mysql,$_G;
		
		$_sms_url = explode("?",$_G['system']['con_sms_url']);
		$http = $_sms_url[0];
		if ($data['phone']=="" && $data['user_id']>0){
			$sql = "select phone,phone_status from `{users_info}` where user_id='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result['phone_status']==1){
				$data['phone'] = $result['phone'];
			}	
		}
		$data['contents'] = $data['contents'];//.$_G['system']['con_sms_text'];
//		if ($_G['system']['con_sms_utf_status']==1){
//			$contents = iconv("GBK", "UTF-8",$data['contents']);
//		}
//		$_data = str_replace("#phone#",$data['phone'],$_sms_url[1]);
//		$_data = str_replace("#content#",$contents,$_data );
//		$_data = str_replace("#time#",$data['time'],$_data );
//		$__data = explode("&",$_data);
//		foreach ($__data as $key => $value){
//			$_val = explode("=",$value);
//			$_res[$_val[0]] = $_val[1];
//		}
		$mySmsDataInfoArray = array("apikey"=>"2661d34cad9d1e5da9251120551d60c5","mobile"=>$data['phone'],"text"=>iconv("GBK", "UTF-8",$data['contents']));
		$result = self::SendSMSByPost("http://yunpian.com/v1/sms/send.json",$mySmsDataInfoArray);
		//$result= self::postSMS($data['phone'],$data['contents']);		//POST��ʽ�ύ
		//$result =2;
		//$xml = simplexml_load_string($result);
		//$result = $xml->result;
		$sql = "insert into `{approve_smslog}` set `addtime` = '".time()."',`addip` = '".ip_address()."',user_id='{$data['user_id']}',status='{$result}',`phone`='{$data['phone']}',`type`='{$data['type']}',`code`='{$data['code']}',`contents`='{$data['contents']}'";
		$mysql->db_query($sql);
		if ($result>=0) return array(1,$http."?".$_data,$result);
		return array(2,$http."?".$_data,$result);
	}
	
	function SendSMSByPost($url,$data=''){
		$row = parse_url($url);
		$host = $row['host'];
		$port = $row['port'] ? $row['port']:80;
		$file = $row['path'];
		while (list($k,$v) = each($data)) 
		{
			$post .= rawurlencode($k)."=".rawurlencode($v)."&";	//תURL��׼��
		}
		$post = substr( $post , 0 , -1 );
		$len = strlen($post);
		$fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
		if (!$fp) {
			return "$errstr ($errno)\n";
		} else {
			$receive = '';
			$out = "POST $file HTTP/1.1\r\n";
			$out .= "Host: $host\r\n";
			$out .= "Content-type: application/x-www-form-urlencoded\r\n";
			$out .= "Connection: Close\r\n";
			$out .= "Content-Length: $len\r\n\r\n";
			$out .= $post;		
			fwrite($fp, $out);
			while (!feof($fp)) {
				$receive .= fgets($fp, 128);
			}
			fclose($fp);
			$receive = explode("\r\n\r\n",$receive);
			unset($receive[0]);
			return implode("",$receive);
		}
	}
	
function postSMS($phone,$contents=''){
		
		
		  // $ka=fopen("1.txt","a+");
		  // fwrite($ka,$phone);
		  // fclose($ka);
		
		$flag = 0; 
        //Ҫpost������ 
         $argv = array( 
         'sn'=>'SDK-WSS-010-05870', //�ṩ���˺�
		 'pwd'=>strtoupper(md5('SDK-WSS-010-05870'.'53eD1467')), //�˴�������Ҫ���� ���ܷ�ʽΪ md5(sn+password) 32λ��д
		 'mobile'=>$phone,//�ֻ��� �����Ӣ�ĵĶ��Ÿ��� post����û�г�������.�Ƽ�Ⱥ��һ��С�ڵ���10000���ֻ���
		 'content'=>$contents,//��������;
		 'ext'=>'',
		 'rrid'=>'',//Ĭ�Ͽ� ����շ���ϵͳ���ɵı�ʶ�� �����ֵ��ֵ֤Ψһ �ɹ��򷵻ش����ֵ
		 'stime'=>''//��ʱʱ�� ��ʽΪ2011-6-29 11:09:21
		 ); 
//����Ҫpost���ַ��� 
        foreach ($argv as $key=>$value) { 
          if ($flag!=0) { 
                         $params .= "&"; 
                         $flag = 1; 
          } 
         $params.= $key."="; $params.= urlencode($value); 
         $flag = 1; 
          } 
         $length = strlen($params); 
                 //����socket���� 
         $fp = fsockopen("sdk105.entinfo.cn",8060,$errno,$errstr,10) or exit($errstr."--->".$errno); 
         //����post�����ͷ 
         $header = "POST /z_mdsmssend.aspx HTTP/1.1\r\n"; 
         $header .= "Host:sdk105.entinfo.cn\r\n"; 
         $header .= "Content-Type: application/x-www-form-urlencoded\r\n"; 
         $header .= "Content-Length: ".$length."\r\n"; 
         $header .= "Connection: Close\r\n\r\n"; 
         //���post���ַ��� 
         $header .= $params."\r\n"; 
         //����post������ 
         fputs($fp,$header); 
         $inheader = 1; 
          while (!feof($fp)) { 
                         $line = fgets($fp,1024); //ȥ���������ͷֻ��ʾҳ��ķ������� 
                         if ($inheader && ($line == "\n" || $line == "\r\n")) { 
                                 $inheader = 0; 
                          } 
                          if ($inheader == 0) { 
                               //  echo $line; 
                          } 
          } 
            //echo $line; 
           fclose($fp); 
		   //exit;


	}
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetSmslogList($data = array()){
		global $mysql;
		global $mysql;
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		
		if (IsExiest($data['phone'])!=false) {
            $_sql .= " and p1.phone like '%{$data['phone']}%'";
        }
		
		
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
            $_sql .= " and p1.status = '{$data['status']}'";
        }
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{approve_smslog}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT ";
		
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
	 * ��Ӷ��ŷ��ͼ�¼
	 *
	 * @param Array $data
	 * @return Boolen
	 */
	function AddSmslogGroup($data = array()){
		global $mysql,$_G;
		//�ֻ����벻��Ϊ��
		if (!IsExiest($data['type'])) return "approve_sms_send_type_empty";
		if (!IsExiest($data['contents'])) return "approve_sms_send_contents_empty";
		
		if (IsExiest($data['user_id1']) != false && IsExiest($data['user_id2']) != false){
			$sql = "select p1.phone,p1.user_id from `{approve_sms}` as p1 where p1.user_id>='{$data['user_id1']}' or  p1.user_id<='{$data['user_id2']}' and p1.status=1";
			$result =  $mysql->db_fetch_arrays($sql);
			
			if ($result !=false){
				foreach ($result as $key => $value){
					$sql = "insert into `{approve_smslog}` set `addtime` = '".time()."',`addip` = '".ip_address()."',user_id='{$value['user_id']}',status='{$data['status']}',`phone`='{$value['phone']}',`type`='{$data['type']}',`contents`='{$data['contents']}'";
					$mysql->db_query($sql);
					$id = $mysql -> db_insert_id();
					if ($data['status']==1){
						if ($_G["system"]["con_sms_status"]==1){
							//�Ƚ����е�״̬��Ϊ2
							$sql = "update `{approve_smslog}` set status=2 where id='{$id}'";
							$mysql->db_query($sql);
							
							$send_sms["phone"] = $value['phone'];
							$send_sms["contents"] = $data['contents'];
							$send_sms["time"] = $value['user_id'];
							$result = self::SendSMS($send_sms);
							$sql = "update `{approve_smslog}` set status='{$result[0]}',send_code='{$result[1]}',send_time='".time()."',send_return='{$result[2]}',send_status=1 where id='{$id}'";
							$mysql->db_query($sql);
						}else{
							//�Ƚ����е�״̬��Ϊ3,��ʾ���ż�¼�ر��ڼ䷢�͵���Ϣ
							$sql = "update `{approve_smslog}` set status=3 where id='{$id}'";
							$mysql->db_query($sql);
						}
					}
					return 1;
				}
			}
		}elseif (IsExiest($data['username']) != false){
			$sql = "select p1.phone,p1.user_id from `{approve_sms}` as p1 left join `{users}`as p2 on p1.user_id = p2.user_id where p2.username='{$data['username']}' and p1.status=1";
			$result =  $mysql->db_fetch_array($sql);
			if ($result==false ) return "approve_sms_phone_not_check";
			$data["phone"] = $result['phone'];
			$data["user_id"] = $result['user_id'];
		}elseif (IsExiest($data['phone']) == false){
			$data["user_id"] = 0;
		}elseif (IsExiest($data['user_id']) != false){
			
		}else{
			return "approve_sms_send_not_select";
		}
		
		$sql = "insert into `{approve_smslog}` set `addtime` = '".time()."',`addip` = '".ip_address()."',user_id='{$data['user_id']}',status='{$data['status']}',`code`='{$data['code']}',`phone`='{$data['phone']}',`type`='{$data['type']}',`contents`='{$data['contents']}'";
		
		$mysql->db_query($sql);
		$id = $mysql -> db_insert_id();
		
		if ($data['status']==1){
			if ($_G["system"]["con_sms_status"]==1){
				//�Ƚ����е�״̬��Ϊ2
				$sql = "update `{approve_smslog}` set status=2 where id='{$id}'";
				$mysql->db_query($sql);
				
				$send_sms["phone"] = $data['phone'];
				$send_sms["contents"] = $data['contents'];
				$send_sms["time"] = $data['user_id'];
				$result = self::SendSMS($send_sms);
				$sql = "update `{approve_smslog}` set status='{$result[0]}',send_code='{$result[1]}',send_time='".time()."',send_return='{$result[2]}',send_status=1 where id='{$id}'";
				$mysql->db_query($sql);
			}else{
				//�Ƚ����е�״̬��Ϊ3,��ʾ���ż�¼�ر��ڼ䷢�͵���Ϣ
				$sql = "update `{approve_smslog}` set status=3 where id='{$id}'";
				$mysql->db_query($sql);
			}
		}
		return $id;
	}
	
	
	/**
	 * �鿴
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	public static function GetSmslogOne($data = array()){
		global $mysql;
		if (!IsExiest($data['id'])) return "approve_smslog_id_empty";
		$sql = "select p1.*,p2.username from `{approve_smslog}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where id='{$data['id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_smslog_not_exiest";
		return $result;
	}
	
	
	

	
	/**
	 * 5,����û�����б�
	 *
	 * @return Array
	 */
	function GetUserid($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p2.user_id ='{$data['user_id']}'";
        }
		
		//�����û���
		elseif (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username = '{$data['username']}'";
        }
		
		//�����û���
		elseif (IsExiest($data['email'])!=false) {
            $_sql .= " and p2.email = '{$data['email']}'";
        }
		
		$sql = "select p2.user_id from `{users}` as p2 {$_sql}";
		$result = $mysql -> db_fetch_array($sql);
		if ($result == false  || (!IsExiest($data['username']) && !IsExiest($data['user_id']) && !IsExiest($data['email']))){
			return "realname_user_not_exiest";
		}
		return $result['user_id'];
	}
	
	
	function AddRealname($data){
		global $mysql;
		if ($data["pic_result"]=="") return "";
		foreach ($data["pic_result"] as $key => $value){
			$sql = "insert into `{realname}` set addtime='".time()."',addip='".ip_address()."',user_id='{$data['user_id']}',upfiles_id='{$value['upfiles_id']}',`order`='{$value['order']}',type_id='{$data['type_id']}'";
			$mysql->db_query($sql);
		
		}
		
		return $data['type_id'];
	}
	
	
	function GetRealnameList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		
		if (IsExiest($data['realname'])!=false) {
            $_sql .= " and p1.realname like '%".urldecode($data['realname'])."%'";
        }
		
		if (IsExiest($data['card_id'])!=false) {
            $_sql .= " and p1.card_id like '%{$data['card_id']}%'";
        }
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		$_order = " order by p1.id desc";
		$_select = " p1.*,p2.username,p3.fileurl as card_pic1_url,p4.fileurl as card_pic2_url";
		$sql = "select SELECT from `{approve_realname}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users_upfiles}` as p3 on p1.card_pic1 = p3.id left join `{users_upfiles}` as p4 on p1.card_pic2 = p4.id  SQL ORDER LIMIT";
		
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
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	/**
	 * 6,������ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetRealnameOne($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_realname_user_id_empty";
		
		$_select = " p1.*,p2.username,p3.fileurl as card_pic1_url,p4.fileurl as card_pic2_url";
		$sql = "select {$_select} from `{approve_realname}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{users_upfiles}` as p3 on p1.card_pic1 = p3.id left join `{users_upfiles}` as p4 on p1.card_pic2 = p4.id  where p1.user_id={$data['user_id']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = " insert into `{approve_realname}` set user_id='{$data['user_id']}',status=0";
			$mysql->db_query($sql);
			$result = self::GetRealnameOne($data);
		}
		
		return $result;
	}
	
	/**
	 * 2,�޸�ʵ����֤
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateRealname($data = array()){
		global $mysql,$upload;
		
		//id
		if (!IsExiest($data['user_id'])) return "approve_realname_user_id_empty";
		
         //�ж���ʵ�����Ƿ����
        if (!IsExiest($data['realname'])) {
            return "approve_realname_realname_empty";
        }
         //�ж����֤���Ƿ����
        if (!IsExiest($data['card_id'])) {
            return "approve_realname_card_id_empty";
        }
		if (!self::isIdCard($data['card_id'])) {
			return "approve_realname_card_id_error";
		}
		
		$sql = "select * from `{approve_realname}` where card_id='{$data['card_id']}' and status=1 and user_id!='{$data['user_id']}'" ;
		$result = $mysql->db_fetch_array($sql);
		if ($result!=false) { return "approve_realname_card_id_exiest";}
		
		$result = self::GetRealnameOne(array("user_id"=>$data['user_id']));
   		if (IsExiest($data['card_pic1'])!=false){
			$_data['user_id'] = $result["user_id"];
			$_data['id'] = $result["card_pic1"];
			$upload->Delete($_data);
		}
		if (IsExiest($data['card_pic2'])!=false){
			$_data['user_id'] = $result["user_id"];
			$_data['id'] = $result["card_pic2"];
			$upload->Delete($_data);
		}
		$sql = "update `{approve_realname}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}'");
		return $data["user_id"];
	}
	

	
	/**
	 *4,���ʵ����֤
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckRealname($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_realname_user_id_empty";
		
		$sql = "select p1.*,p2.username from `{approve_realname}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_realname_empty";
		$realname = $result['realname'];
		if ($data['status']==1){
			$sql = "select * from `{approve_realname}` where card_id='{$result['card_id']}' and status=1 and user_id!='{$data['user_id']}'";
			$result = $mysql->db_fetch_array($sql);
			if ($result!=false) { return "approve_realname_card_id_exiest";}
		}
		
		$sql = "update `{approve_realname}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		$user_info['user_id'] = $data["user_id"];
		if ($data['status']!=1){
			$realname = "";
		}
		$user_info['realname'] = $realname;
		$user_info['realname_status'] = $data['status'];
		$result = usersClass::UpdateUsersInfo($user_info);
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "realname";
		$_data["article_id"] = $data["user_id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		
		//��ӻ��ּ�¼
		$sql="select * from `{credit_log}` where user_id={$data['user_id']} and type='realname'";
		$cre_result=$mysql->db_fetch_array($sql);
		if ($cre_result==false){
			$credit_log['user_id'] = $data['user_id'];
			$credit_log['nid'] = "realname";
			$credit_log['code'] = "approve";
			$credit_log['type'] = "realname";
			$credit_log['addtime'] = time();
			$credit_log['article_id'] =$data['user_id'];
			$credit_log['remark'] = "ʵ����֤ͨ�����û���";
			creditClass::ActionCreditLog($credit_log);
		}
		
		return $data['user_id'];
	}
	
	
	/**
	 *4,���ʵ����֤ID5
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckRealnameId5($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_realname_user_id_empty";
		
		$sql = "select p1.*,p2.username from `{approve_realname}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_realname_empty";
		
		//�Ѿ�ͨ����ˣ������ٽ���id5�����
		if ($result['status']>0){
			return "approve_realname_check_yes";
		}
		
		if ($data['status']==1){
			$sql = "select * from `{approve_realname}` where card_id='{$result['card_id']}' and status=1 and user_id!='{$data['user_id']}'";
			$_result = $mysql->db_fetch_array($sql);
			if ($_result!=false) { return "approve_realname_card_id_exiest";}
		}
		$_id5['realname'] = $result['realname'];
		$_id5['card_id'] = $result['card_id'];
		$_id5['user_id'] = $result['user_id'];
		$_id5['type'] = 'realname';
		$status = id5Class::CheckId5($_id5);
		$id5_status = $status>0?$status:0;
		if ($id5_status==3){
			$status=1;
		}else{
			$status =2;
		}
		$sql = "update `{approve_realname}` set verify_id5_userid='{$data['verify_id5_userid']}',verify_id5_remark='{$data['verify_id5_remark']}', verify_id5_time='".time()."',id5_status='{$id5_status}',status='{$status}' where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "realname";
		$_data["article_id"] = $data["user_id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		
		//��ӻ��ּ�¼
		$credit_log['user_id'] = $data['user_id'];
		$credit_log['nid'] = "realname";
		$credit_log['code'] = "approve";
		$credit_log['type'] = "realname";
		$credit_log['addtime'] = time();
		$credit_log['article_id'] =$data['user_id'];
		$credit_log['remark'] = "ʵ����֤ͨ�����û���";
		creditClass::ActionCreditLog($credit_log);
		return $data['user_id'];
	}
	
	/**
	 *4,���ʵ����֤ID5
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckEduId5($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_edu_user_id_empty";
		
		$sql = "select p1.*,p2.username from `{approve_edu}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_edu_empty";
		
		//�Ѿ�ͨ����ˣ������ٽ���id5�����
		if ($result['status']>0){
			return "approve_edu_check_yes";
		}
		//�ж�edu��ʵ���Ƿ��Ѿ�ͨ��
		$sql = "select * from `{approve_realname}` where user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result['status']!=1) return "approve_edu_realname_not_check";
		
		$_id5['realname'] = $result['realname'];
		$_id5['card_id'] = $result['card_id'];
		$_id5['user_id'] = $result['user_id'];
		$_id5['type'] = 'edu';
		$status = id5Class::CheckId5Edu($_id5);
		$id5_status = $status>0?$status:0;
		if ($id5_status==3){
			$status=1;
		}else{
			$status =2;
		}
		$sql = "update `{approve_edu}` set verify_id5_userid='{$data['verify_id5_userid']}',verify_id5_remark='{$data['verify_id5_remark']}', verify_id5_time='".time()."',id5_status='{$id5_status}',status='{$status}' where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "realname";
		$_data["article_id"] = $data["user_id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
	
		//��ӻ��ּ�¼
		$credit_log['user_id'] = $data['user_id'];
		$credit_log['nid'] = "education";
		$credit_log['code'] = "approve";
		$credit_log['type'] = "education";
		$credit_log['addtime'] = time();
		$credit_log['article_id'] =$data['user_id'];
		$credit_log['remark'] = "ѧ����֤ͨ�����û���";
		creditClass::ActionCreditLog($credit_log);
		
		$user_info['user_id'] = $data['user_id'];
		$user_info['education_status'] = $data['status'];
		$result = usersClass::UpdateUsersInfo($user_info);
		return $data['user_id'];
	}
	
	function isIdCard($number) {
		//��Ȩ���� 
		$wi = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
		//У���봮 
		$ai = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
		//��˳��ѭ������ǰ17λ 
		for ($i = 0;$i < 17;$i++) { 
			//��ȡǰ17λ������һλ��������������תΪʵ�� 
			$b = (int) $number{$i}; 
	 
			//��ȡ��Ӧ�ļ�Ȩ���� 
			$w = $wi[$i]; 
	 
			//�Ѵ����֤��������ȡ��һλ���ֺͼ�Ȩ������ˣ����ۼ� 
			$sigma += $b * $w; 
		}
		//������� 
		$snumber = $sigma % 11; 
	 
		//������Ŵ�У���봮����ȡ��Ӧ���ַ��� 
		$check_number = $ai[$snumber];
	 
		if ($number{17} == $check_number) {
			return true;
		} else {
			return false;
		}
	}
	
	
	/**
	 * �б�
	 *
	 * @return Array
	 */
	function GetId5List($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		
		if (IsExiest($data['realname'])!=false) {
            $_sql .= " and p1.realname = '".urldecode($data['realname'])."'";
        }
		
		if (IsExiest($data['card_id'])!=false) {
            $_sql .= " and p1.card_id like '%{$data['card_id']}%'";
        }
		
		
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
            $_sql .= " and p1.status = '{$data['status']}'";
        }
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{approve_id5}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT ";
		
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
	 *
	 * @return Array
	 */
	function GetEduId5List($data = array()){
		global $mysql;
		
		$_sql = " where 1=1 ";
		//�ж����������Ƿ����
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		if (IsExiest($data['realname'])!=false) {
            $_sql .= " and p1.realname = '".urldecode($data['realname'])."'";
        }
		
		if (IsExiest($data['card_id'])!=false) {
            $_sql .= " and p1.card_id like '%{$data['card_id']}%'";
        }
		
		if (IsExiest($data['status'])!=false || $data['status']=="0") {
            $_sql .= " and p1.status = '{$data['status']}'";
        }
		$_select = " p1.*,p2.username ";
		$_order = " order by p1.id desc";
		$sql = "select SELECT from `{approve_edu_id5}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id SQL ORDER LIMIT ";
		
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
	
	
	function GetEduList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		$_order = " order by p1.id desc";
		$_select = " p1.*,p2.username,p3.fileurl as edu_pic_url,p4.realname";
		$sql = "select SELECT from `{approve_edu}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{approve_realname}` as p4 on p1.user_id=p4.user_id left join `{users_upfiles}` as p3 on p1.edu_pic = p3.id  SQL ORDER LIMIT";
		
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
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	
	/**
	 * 6,������ĵ�����¼
	 *
	 * @param Array $data = array("id"=>"");
	 * @return Array
	 */
	 function GetEduOne($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_edu_user_id_empty";
		
		$_select = " p1.*,p2.username,p3.fileurl as edu_pic_url,p4.realname";
		$sql = "select {$_select} from `{approve_edu}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{approve_realname}` as p4 on p1.user_id=p4.user_id left join `{users_upfiles}` as p3 on p1.edu_pic = p3.id  where p1.user_id={$data['user_id']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = " insert into `{approve_edu}` set user_id='{$data['user_id']}',status=0";
			$mysql->db_query($sql);
			$result = self::GetRealnameOne($data);
		}
		
		return $result;
	}
	
	/**
	 * 2,�޸�ѧ��
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateEdu($data = array()){
		global $mysql,$upload;
		
		//id
		if (!IsExiest($data['user_id'])) return "approve_edu_user_id_empty";
		
		$result = self::GetEduOne(array("user_id"=>$data['user_id']));
   		if (IsExiest($data['edu_pic'])!=false){
			$_data['user_id'] = $result["user_id"];
			$_data['id'] = $result["edu_pic"];
			$upload->Delete($_data);
		}
		
		$sql = "update `{approve_edu}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}'");
		return $data["user_id"];
	}
	
	
	
	/**
	 *4,���ʵ����֤
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckEdu($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_edu_user_id_empty";
		
		$sql = "select p1.*,p2.username from `{approve_edu}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_edu_empty";
		
		
		$sql = "update `{approve_edu}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "edu";
		$_data["article_id"] = $data["user_id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		
		if ($data['status']==1){
			//��ӻ��ּ�¼
			$sql="select * from `{credit_log}` where user_id={$data['user_id']} and type='education'";
			$cre_result=$mysql->db_fetch_array($sql);
			if ($cre_result==false){
				$credit_log['user_id'] = $data['user_id'];
				$credit_log['nid'] = "education";
				$credit_log['code'] = "approve";
				$credit_log['type'] = "education";
				$credit_log['addtime'] = time();
				$credit_log['article_id'] =$data['user_id'];
				$credit_log['remark'] = "ѧ����֤ͨ�����û���";
				creditClass::ActionCreditLog($credit_log);
			}
		}else{
			$sql="delete from `{credit_log}` where user_id={$data['user_id']} and type='education'";
			$mysql->db_query($sql);
		}
		
		$user_info['user_id'] = $data['user_id'];
		$user_info['education_status'] = $data['status'];
		$result = usersClass::UpdateUsersInfo($user_info);
		
		return $data['user_id'];
	}
	
	
	
	function GetVideoList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		$_order = " order by p1.id desc";
		$_select = " p1.*,p2.username,p4.realname";
		$sql = "select SELECT from `{approve_video}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{approve_realname}` as p4 on p1.user_id=p4.user_id SQL ORDER LIMIT";
		
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
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
	function GetVideoOne($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_realname_user_id_empty";
		
		$_select = " p1.*,p2.username";
		$sql = "select {$_select} from `{approve_video}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id={$data['user_id']}";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false){
			$sql = " insert into `{approve_video}` set user_id='{$data['user_id']}',status=0";
			$mysql->db_query($sql);
			$result = self::GetVideoOne($data);
		}
		
		return $result;
	}
	
	/**
	 * 2,�޸�ѧ��
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateVideo($data = array()){
		global $mysql,$upload;
		
		//id
		if (!IsExiest($data['user_id'])) return "approve_video_user_id_empty";
		
		$result = self::GetVideoOne(array("user_id"=>$data['user_id']));
   		
		$sql = "update `{approve_video}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}'");
		return $data["user_id"];
	}


// <!--��ת�� 2-->��ת��֤
	/**
	 * 2,�޸���ת
	 *
	 * @param array $data =array("id"=>"id","name"=>"����","status"=>"״̬");
	 * @param string $data;
	 * @return boolen(true,false)
	 */
	function UpdateFlow($data = array()){
		global $mysql,$upload;
		
		//id
		if (!IsExiest($data['user_id'])) return "�û�ID�Ƿ�";
		
		$result = self::GetFlowOne(array("user_id"=>$data['user_id']));
   		
		if ($result==false){
			$sql = " insert into `{approve_flow}` set user_id='{$data['user_id']}',status=0,addtime='".time()."',addip='".ip_address()."' ";
			$mysql->db_query($sql);
			$result = self::GetRealnameOne($data);
		}
		
		$sql = "update `{approve_flow}` set addtime='".time()."',addip='".ip_address()."',";
		foreach($data as $key => $value){
			$_sql[] = "`$key` = '$value'";
		}
        $mysql->db_query($sql.join(",",$_sql)." where user_id='{$data['user_id']}'");
		return $data["user_id"];
	}
	
		function GetFlowList($data = array()){
		global $mysql;
		
		
		$_sql = " where 1=1 ";
		
		//�����û�id
        if (IsExiest($data['user_id'])!=false) {
            $_sql .= " and p1.user_id ='{$data['user_id']}'";
        }
		
		
		//�����û���
		if (IsExiest($data['username'])!=false) {
            $_sql .= " and p2.username like '%{$data['username']}%'";
        }
		
		$_order = " order by p1.id desc";
		$_select = " p1.*,p2.username,p4.realname";
		$sql = "select SELECT from `{approve_flow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id left join `{approve_realname}` as p4 on p1.user_id=p4.user_id SQL ORDER LIMIT";
		
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
		$_limit = " limit ".($data["epage"] * ($data["page"] - 1)).", {$data['epage']}";
		$list = $mysql->db_fetch_arrays(str_replace(array('SELECT', 'SQL','ORDER', 'LIMIT'), array($_select,$_sql,$_order, $_limit), $sql));
		
		//�������յĽ��
		$result = array('list' => $list?$list:array(),'total' => $total,'page' => $data['page'],'epage' => $data['epage'],'total_page' => $total_page);
		
		return $result;
	}
	
		 function CheckFlow($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_edu_user_id_empty";
		
		$sql = "select p1.*,p2.username from `{approve_flow}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_video_empty";
		
		
		$sql = "update `{approve_flow}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "flow";
		$_data["article_id"] = $data["user_id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);

		//$user_info['user_id'] = $data['user_id'];
		//$user_info['video_status'] = $data['status'];
		//$result = usersClass::UpdateUsersInfo($user_info);
		
		return $data['user_id'];
	}
	
	function GetFlowOne($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "�û�ID�Ƿ�";
		
		$_select = " p1.*,p2.username";
		$sql = "select {$_select} from `{approve_flow}` as p1 left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id={$data['user_id']}";
		$result = $mysql->db_fetch_array($sql);
		
		
		
		return $result;
	}

	/**
	 *4,�����Ƶ
	 *
	 * @param Array $data = array("id"=>"");
	 * @return id
	 */
	 function CheckVideo($data = array()){
		global $mysql;
		if (!IsExiest($data['user_id'])) return "approve_edu_user_id_empty";
		
		$sql = "select p1.*,p2.username from `{approve_video}` as p1  left join `{users}` as p2 on p1.user_id=p2.user_id where p1.user_id='{$data['user_id']}'";
		$result = $mysql->db_fetch_array($sql);
		if ($result==false) return "approve_video_empty";
		
		
		$sql = "update `{approve_video}` set verify_userid='{$data['verify_userid']}',verify_remark='{$data['verify_remark']}', verify_time='".time()."',status='{$data['status']}' where user_id='{$data['user_id']}'";
		$mysql->db_query($sql);
		
		//������˼�¼
		$_data["user_id"] = $result["user_id"];
		$_data["result"] = $data["status"];
		$_data["code"] = "approve";
		$_data["type"] = "video";
		$_data["article_id"] = $data["user_id"];
		$_data["verify_userid"] = $data["verify_userid"];
		$_data["remark"] = $data["verify_remark"];
		usersClass::AddExamine($_data);
		
		//��ӻ��ּ�¼
		$credit_log['user_id'] = $data['user_id'];
		$credit_log['nid'] = "video";
		$credit_log['code'] = "approve";
		$credit_log['type'] = "video";
		$credit_log['addtime'] = time();
		$credit_log['article_id'] =$data['user_id'];
		$credit_log['remark'] = "��Ƶ��֤ͨ�����û���";
		creditClass::ActionCreditLog($credit_log);
		
		$user_info['user_id'] = $data['user_id'];
		$user_info['video_status'] = $data['status'];
		$result = usersClass::UpdateUsersInfo($user_info);
		
		return $data['user_id'];
	}
	
}

?>