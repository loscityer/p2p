<?
/******************************
 * $File: borrow.php
 * $Description: ���˵���û������ļ�
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���

$_A['list_purview']["borrow"]["name"] = "������";
$_A['list_purview']["borrow"]["result"]["borrow_all"] = array("name"=>"���н��","url"=>"code/borrow");
//$_A['list_purview']["borrow"]["result"]["borrow_shenqing"] = array("name"=>"�������","url"=>"code/borrow/shenqing");
$_A['list_purview']["borrow"]["result"]["borrow_first"] = array("name"=>"������","url"=>"code/borrow/first");
$_A['list_purview']["borrow"]["result"]["borrow_full"] = array("name"=>"������","url"=>"code/borrow/full");
$_A['list_purview']["borrow"]["result"]["borrow_first_flow"] = array("name"=>"��ת���","url"=>"code/borrow/first&is_flow=1");
$_A['list_purview']["borrow"]["result"]["borrow_repay"] = array("name"=>"���ڵ渶","url"=>"code/borrow/repay");
$_A['list_purview']["borrow"]["result"]["borrow_amount"] = array("name"=>"�����","url"=>"code/borrow/amount");
$_A['list_purview']["borrow"]["result"]["borrow_change"] = array("name"=>"ծȨת��","url"=>"code/borrow/change");
$_A['list_purview']["borrow"]["result"]["borrow_fxc"] = array("name"=>"���ճ�","url"=>"code/borrow/fengxianchi");
$_A['list_purview']["borrow"]["result"]["borrow_tool"] = array("name"=>"��⹤��","url"=>"code/borrow/tool");
$_A['list_purview']["borrow"]["result"]["raise"] = array("name"=>"�ڳ���Ŀ","url"=>"code/borrow/raise");

require_once("borrow.class.php");


$_A['borrow_amount_type'] = $borrow_amount_type;
/**
 * �������Ϊ�յĻ�����ʾ���е��ļ��б�
**/


if ($_A['query_type'] == "first" ){
	check_rank("borrow_first");
	
	
	if ($_REQUEST['check']!=""){
		if (isset($_POST['borrow_nid']) && $_POST['borrow_nid']!=""){
			$var = array("borrow_nid","status","verify_remark","recommend");
			$data = post_var($var);
			
			$result = borrowClass::Verify($data);
			if ($result>0){
				$msg = array($MsgInfo["borrow_verify_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "borrow";
			$admin_log["type"] = "borrow";
			$admin_log["operating"] = "verify";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}else{
			$data['borrow_nid'] = $_REQUEST['check'];
			$result = borrowClass::GetOne($data);
			if (!is_array($result)){
				$msg = array($MsgInfo[$result]);
			}elseif ($result['status']!=0){
				$msg = array($MsgInfo["borrow_not_exiest"]);
			}else{
				$_A['borrow_result'] = $result;
			}
		}
	}elseif ($_REQUEST['view']!=""){
		$data['borrow_nid'] = $_REQUEST['view'];
		$result = borrowClass::GetOne($data);
		if (!is_array($result)){
			$msg = array($MsgInfo[$result]);
		}else{
			$_A['borrow_result'] = $result;
		}
	}elseif ($_REQUEST['cancel']!=""){
		$data['borrow_nid'] = $_REQUEST['cancel'];
		$result = borrowClass::Cancel($data);
		
		if($result>0){
			 $msg = array("���سɹ�","",$_A['query_url'].$_A['site_url']);
		 }else{
			$msg = array($MsgInfo[$result]);
		 }
		 
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "borrow";
		$admin_log["type"] = "borrow";
		$admin_log["operating"] = "cancel";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}elseif ($_REQUEST['s_nid']!=""){
	
	     $data['borrow_nid'] = $_REQUEST['s_nid'];
		 $borrow_result = borrowClass::GetOne($data);

		 
		 $borrow_period=$borrow_result['borrow_period'];
		 if($borrow_period== 0.03){
		 $borrow_period="1��";
		 }elseif($borrow_period== 0.06){
		 $borrow_period="2��";
		 }elseif($borrow_period== 0.10){
		 $borrow_period="3��";
		 }elseif($borrow_period== 0.13){
		 $borrow_period="4��";
		 }elseif($borrow_period== 0.16){
		 $borrow_period="5��";
		 }elseif($borrow_period== 0.20){
		 $borrow_period="6��";
		 }elseif($borrow_period== 0.23){
		 $borrow_period="7��";
		 }elseif($borrow_period== 0.26){
		 $borrow_period="8��";
		 }elseif($borrow_period== 0.30){
		 $borrow_period="9��";
		 }elseif($borrow_period== 0.33){
		 $borrow_period="10��";
		 }elseif($borrow_period== 0.36){
		 $borrow_period="11��";
		 }elseif($borrow_period== 0.40){
		 $borrow_period="12��";
		 }elseif($borrow_period== 0.43){
		 $borrow_period="13��";
		 }elseif($borrow_period== 0.46){
		 $borrow_period="14��";
		 }elseif($borrow_period== 0.50){
		 $borrow_period="15��";
		 }elseif($borrow_period== 0.53){
		 $borrow_period="16��";
		 }elseif($borrow_period== 0.56){
		 $borrow_period="17��";
		 }elseif($borrow_period== 0.60){
		 $borrow_period="18��";
		 }elseif($borrow_period== 0.63){
		 $borrow_period="19��";
		 }elseif($borrow_period== 0.66){
		 $borrow_period="20��";
		 }elseif($borrow_period== 0.70){
		 $borrow_period="21��";
		 }elseif($borrow_period== 0.73){
		 $borrow_period="22��";
		 }elseif($borrow_period== 0.76){
		 $borrow_period="23��";
		 }elseif($borrow_period== 0.80){
		 $borrow_period="24��";
		 }elseif($borrow_period== 0.83){
		 $borrow_period="25��";
		 }elseif($borrow_period== 0.86){
		 $borrow_period="25��";
		 }elseif($borrow_period== 0.90){
		 $borrow_period="26��";
		 }elseif($borrow_period== 0.93){
		 $borrow_period="27��";
		 }elseif($borrow_period== 0.96){
		 $borrow_period="28��";
		 }elseif($borrow_period== 0.83){
		 $borrow_period="29��";
		 }else{
		 $borrow_period=$borrow_period."����";
		 }
		 
		 $result = usersClass::GetUsersInfoList(array("phone_status"=>1,"limit"=>"all"));
		 $phone="";
		 $contents="";
		 $num_sms=0;
		 	foreach ($result as $key => $value){
			$num_sms=$num_sms+1;
			$phone.=$value['phone'].",";                    	
			$contents.=urlencode('���±����ߡ�'.$borrow_result['name'].'���'.$borrow_result['account'].'��ת'.$borrow_period.'���ۺ���������'.$borrow_result['borrow_apr'].'%�������½������Ͷ�����鿴����������Ͷ��').",";
			}
	
			$phone=rtrim($phone, ",");
			$contents=rtrim($contents, ",");
			borrowClass::borrow_postSMS($phone,$contents);
			$msg = array('���ͳɹ�,������'.$num_sms.'����');
	
	}

}


//�ڳ���Ŀ
elseif ($_A['query_type'] == "raise"){


}

/**
 * ���
**/
elseif ($_A['query_type'] == "raise_add" || $_A['query_type'] == "raise_edit" ){
	if (isset($_POST['raise_name'])){
		$var = array("raise_name","raise_contents","user_id","status","tags","order","raise_intro","raise_account","raise_period","raise_type");
		$data = post_var($var);
        $data['raise_period']=intval($data['raise_period']);
		$data['raise_account']=intval($data['raise_account']);
		if ($_POST['flag']!=""){
			$data['flag'] = join(",",$_POST['flag']);
		}
		if ($_POST['clearlitpic']==1){
			$data['litpic'] = "";
		}
		$_G['upimg']['file'] = "litpic";
		$_G['upimg']['code'] = "raise";
		$_G['upimg']['filesize'] = "2048";
		$_G['upimg']['type'] = "raise";
		$_G['upimg']['user_id'] = $data['user_id'];
		$_G['upimg']['article_id'] = $_POST['id'];
		$uploadfiles = $upload->UpfileSwfupload($_G['upimg']);
		if (is_array($uploadfiles)){
			$data['litpic'] = $uploadfiles['upfiles_id'];
		}
	    if ($uploadfiles == -3 || $uploadfiles == -4){
			$result = "articles_img_error";
			$data['img_error'] = $result;
		}
		if ($_A['query_type'] == "raise_add"){
			$data['user_id'] = $_G['user_id'];
			$result = borrowClass::Addraise($data);
		}else{
			$data['id'] = $_POST['id'];
			if ($data['litpic']!="" || $_POST['clearlitpic']==1){
				$_data['user_id'] = $data["user_id"];
				$_data['id'] = $_POST["oldlitpic"];
				$upload->Delete($_data);
				
			}
			$result = borrowClass::Updateraise($data);
		}
		if ($result >0){
			$msg = array("�����ɹ�","",$_A['query_url']."/raise");
			
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "raise";
		$admin_log["type"] = "raise";
		$admin_log["operating"] = $_A['query_type'];
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}else{

		if ($_A['query_type'] == "raise_edit"){
			$data['id'] = $_REQUEST['id'];
			$result = borrowClass::GetraiseOne($data);
			if (is_array($result)){
				$_A['articles_result'] = $result;
			}else{
				$msg = array($MsgInfo[$result]);
			}
		}
		
		
	}
}


elseif ($_A['query_type'] == "wind"){
    if ($_REQUEST['view']!=""){
		$data['borrow_nid'] = $_REQUEST['view'];
		$data['wind_control'] = $_POST['wind_control'];
		$result = borrowClass::update_borrow($data);
		if ($result!=true){
			$msg = array($MsgInfo[$result]);
		}else{
			$msg = array($MsgInfo['right'],"",$_A['query_url']."&view=".$data['borrow_nid']);
		}
	}	
}
/**
 * �����б�
**/
// <!--��ת��2-->  
elseif ($_A['query_type'] == "stop_flow"){
	check_rank("borrow_cancel");//���Ȩ��
	$_A['list_title'] = "ֹͣ��ת";
	
	$data['id'] = $_REQUEST['id'];
	$result =  borrowClass::GetOne($data);
	if ($result['status']==0 || $result['status']==1 || $result['status']==3){
		borrowClass::stop_flow($data);
		 $msg = array("ֹͣ��ת�ɹ�","",$_A['query_url']."/first&is_flow=1");
	 }else{
	 
	 	$msg = array("����ֹͣ");
	 }
	
}
/**
 * �����б�
**/
// <!--��ת��2-->  
elseif ($_A['query_type'] == "open_flow"){
	check_rank("borrow_cancel");//���Ȩ��
	$_A['list_title'] = "������ת";
	
	$data['id'] = $_REQUEST['id'];
	$result =  borrowClass::GetOne($data);
	if ($result['status']==5){
		borrowClass::open_flow($data);
		 $msg = array("������ת�ɹ�","",$_A['query_url']."/first&is_flow=1");
	 }else{
	 
	 	$msg = array("�˱겻��ֹͣͶ�꣬���ܿ���");
	 }
	
}



elseif ($_A['query_type'] == "shenqing" ){
    if ($_REQUEST['shenqing_view']!=""){
		$data['s_id'] = $_REQUEST['shenqing_view'];
		$result = borrowClass::GetshenqingOne($data);
		if (!is_array($result)){
			$msg = array($MsgInfo[$result]);
		}else{
			$_A['borrow_result'] = $result;
		}
	}elseif($_REQUEST['s_id']!=""){
	        $var = array("verify_remark","s_id","status");
			$data = post_var($var);
			if($data['verify_remark']==""){
			$msg = array("����ע������д");
			}else{
					$result = borrowClass::update_shenqing($data);
					if ($result==true){
						$msg = array("����ɹ�","",$_A['query_url_all']);
					}else{
						$msg = array("����ʧ��");
					}
					
					//�������Ա������¼
					$admin_log["user_id"] = $_G['user_id'];
					$admin_log["code"] = "borrow";
					$admin_log["type"] = "borrow";
					$admin_log["operating"] = "shenqing";
					$admin_log["article_id"] = $result==true?$data['s_id']:0;
					$admin_log["result"] = $result==true?1:0;
					$admin_log["content"] =  $msg[0];
					$admin_log["data"] =  $data;
					usersClass::AddAdminLog($admin_log);
			}
	}
}
elseif ($_A['query_type'] == "list" ){
if ($_REQUEST['view']!=""){
		$data['borrow_nid'] = $_REQUEST['view'];
		$result = borrowClass::GetOne($data);
		if (!is_array($result)){
			$msg = array($MsgInfo[$result]);
		}else{
			$_A['borrow_result'] = $result;
		}
	}
}
elseif ($_A['query_type'] == "full" ){
	if ($_REQUEST['fullcheck']!=""){
	
		if (isset($_POST['borrow_nid']) && $_POST['borrow_nid']!=""){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("borrow_nid","status","reverify_remark");
				$data = post_var($var);
				$result = borrowClass::Reverify($data);
				//$result = borrowClass::Reverify_cuowu($data);
				if ($result>0){
				
					$msg = array($MsgInfo["borrow_reverify_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}

			
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "borrow";
				$admin_log["type"] = "borrow";
				$admin_log["operating"] = "verify";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
	
			$data['borrow_nid'] = $_REQUEST['fullcheck'];
			$result = borrowClass::GetOne($data);
			if (!is_array($result)){
				$msg = array($MsgInfo[$result]);
			}elseif ($result['status']!=1){
				$msg = array($MsgInfo["borrow_fullcheck_error"]);
			}else{
				$_A['borrow_result'] = $result;
			}
		}
	}elseif ($_REQUEST['view']!=""){
		$data['borrow_nid'] = $_REQUEST['view'];
		$result = borrowClass::GetOne($data);
		if (!is_array($result)){
			$msg = array($MsgInfo[$result]);
		}else{
			$_A['borrow_result'] = $result;
		}
	}
}

elseif($_A['query_type'] == "amount"){

}

elseif($_A['query_type'] == "amount_log"){

}	

elseif($_A['query_type'] == "joinbad"){
	if($_REQUEST['borrow_nid']!=""){
		$data['borrow_nid']=$_REQUEST['borrow_nid'];
		$data['bad_status']=1;
		$result=borrowClass::RepayJoinBad($data);
		if ($result>0){
			$msg = array("���뻵�˳سɹ���","",$_A['query_url']."/repay");
		}else{
			$msg = array("�û�����ڣ�","",$_A['query_url']."/repay");
		}
	}
}	
/**
 * ����ֹ���˹���
**/

elseif ($_A['query_type'] == "amount_apply" ){
	$_A['borrow_amount_type'] = $borrow_amount_type;
	if($_REQUEST['examine']!=""){
		if ($_POST['status']!=""){
			$msg = check_valicode();
			if ($msg==""){
				$var = array("verify_remark","status","account","user_id","id","nid");
				$data = post_var($var);
				$data['verify_userid'] = $_G['user_id'];
				
				$result = borrowClass::CheckAmountApply($data);
				
				if ($result>0){
					$msg = array("�����ɹ�","",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				//�������Ա������¼
				$admin_log["user_id"] = $_G['user_id'];
				$admin_log["code"] = "borrow";
				$admin_log["type"] = "amount_apply";
				$admin_log["operating"] = "check";
				$admin_log["article_id"] = $result>0?$result:0;
				$admin_log["result"] = $result>0?1:0;
				$admin_log["content"] =  $msg[0];
				$admin_log["data"] =  $data;
				usersClass::AddAdminLog($admin_log);
			}
		}else{
			$data["id"] = $_REQUEST['examine'];
			$result = borrowClass::GetAmountApplyOne($data);
			if (is_array($result)){
				$_A["amount_apply_result"] = $result;
			}else{
				$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
			}
		}
	}
	
	elseif ($_POST['type']=="user_id"){
		$var = array("username","user_id","email");
		$data = post_var($var);
		$data["limit"] = "all";
		$result = usersClass::GetUserid($data);
		if ($result>0){
			echo "<script>location.href='{$_A['query_url_all']}&user_id={$result}'</script>";
		}else{
			$msg = array($MsgInfo[$result],"",$_A['query_url_all']);
		}
	}
	
	
	elseif (isset($_POST['oprate'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("amount_type","oprate","amount_account","content");
			$data = post_var($var);
			$data['status'] = 0;
			$data['user_id'] = $_REQUEST['user_id'];
			$result = borrowClass::AddAmountApply($data);
			if ($result>0){
				$msg = array($MsgInfo["amount_apply_update_success"],"",$_A['query_url_all']);
			}else{
				$msg = array($MsgInfo[$result]);
			}
			$admin_log["operating"] = "add";
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "borrow";
			$admin_log["type"] = "amount_apply";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}
	
	
	elseif ($_REQUEST['user_id']!=""){
		$data["user_id"] = $_REQUEST['user_id'];
		$result = usersClass::GetUsers($data);
		if (is_array($result)){
			$_A["users_result"] = $result;
		}else{
			$msg = array("�û�������");
		}
		
	}
	
	
}

elseif ($_A['query_type'] == "amount_type" ){
	if (isset($_POST['name'])){
		$msg = check_valicode();
		if ($msg==""){
			$var = array("name","nid","default","credit_nid","amount_type","multiples","remark");
			$data = post_var($var);
			if ($_POST['id']!=""){
				$data['id'] = $_POST['id'];
				$result = borrowClass::UpdateAmountType($data);
				if ($result>0){
					$msg = array($MsgInfo["amount_type_update_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "update";
			}else{
				$result = borrowClass::AddAmountType($data);
				if ($result>0){
					$msg = array($MsgInfo["amount_type_add_success"],"",$_A['query_url_all']);
				}else{
					$msg = array($MsgInfo[$result]);
				}
				$admin_log["operating"] = "add";
			}
			
			//�������Ա������¼
			$admin_log["user_id"] = $_G['user_id'];
			$admin_log["code"] = "borrow";
			$admin_log["type"] = "amount_type";
			$admin_log["article_id"] = $result>0?$result:0;
			$admin_log["result"] = $result>0?1:0;
			$admin_log["content"] =  $msg[0];
			$admin_log["data"] =  $data;
			usersClass::AddAdminLog($admin_log);
		}
	}elseif ($_REQUEST['edit']!=""){
		$data['id'] = $_REQUEST['edit'];
		$result = borrowClass::GetAmountTypeOne($data);
		if (is_array($result)){
			$_A["amount_type_result"] = $result;
		}else{
			$msg = array($MsgInfo[$result]);
		}
	
	}elseif($_REQUEST['del']!=""){
		$data['id'] = $_REQUEST['del'];
		$result = borrowClass::DelAmountType($data);
		if ($result>0){
			$msg = array($MsgInfo["amount_type_del_success"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
		
		//�������Ա������¼
		$admin_log["user_id"] = $_G['user_id'];
		$admin_log["code"] = "borrow";
		$admin_log["type"] = "amount_type";
		$admin_log["operating"] = "del";
		$admin_log["article_id"] = $result>0?$result:0;
		$admin_log["result"] = $result>0?1:0;
		$admin_log["content"] =  $msg[0];
		$admin_log["data"] =  $data;
		usersClass::AddAdminLog($admin_log);
	}
}

elseif ($_A['query_type'] == "repay"){
	if ($_REQUEST['id']!=""){
		$data['id']=$_REQUEST['id'];
		$result = borrowClass::LateRepay($data);
		if ($result>0){
			$msg = array($MsgInfo["web_late_repay"],"",$_A['query_url_all']);
		}else{
			$msg = array($MsgInfo[$result]);
		}
	}
}

elseif ($_A['query_type'] == "tender" ){
	if ($_REQUEST['id']!=""){
		$_A['borrow_tender_result'] = borrowClass::GetTenderOne(array("id"=>$_REQUEST['id']));
	}

}



elseif ($_A['query_type'] == "tool" ){
	if ($_REQUEST['key']!=""){
		require_once("borrow.tool.php");
		$data['key'] = $_REQUEST['key'];
		$result = borrowtoolClass::Check($data);
		
		echo json_encode($result);
		
		exit;
	}
}



/**
 * ��վ����
**/
elseif ($_A['query_type'] == "fengxianchi"){
	require_once("borrow.excel.php");
	if (isset($_REQUEST['_type']) && $_REQUEST['_type']=="excel"){
		$data['type'] = 2;
		$data['style'] = 'fxc';
		$data['username'] = $_REQUEST['username'];
		$data['dotime1'] = $_REQUEST['dotime1'];
		$data['dotime2'] = $_REQUEST['dotime2'];
		borrowexcel::LogList($data);
		exit;
	}
}
?>