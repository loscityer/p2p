<?php
/******************************
 * $File: function.inc.php
 * $Description: ���������ļ�
 * $Author: hummer 
 * $Time:2011-04-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���


function GetPaypwdMsg($data = array()){
	global $mysql;
	$user_id = $data['user_id'];
	$username = $data['username'];
	$webname = $data['webname'];
	$email = $data['email'];
	$active_id = urlencode(authcode($user_id.",".time(),"TTWCGY"));
	$_url = "http://{$_SERVER['HTTP_HOST']}/index.php?user&q=code/users/getpaypwd&id={$active_id}";
	$user_url = "http://{$_SERVER['HTTP_HOST']}/index.php?user";
	$send_email_msg = '
	<div style="background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">
	<div style="padding: 10px 0px; background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_button.png)  no-repeat ">
		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 60px;">
			<a title="'.$webname.'�û�����" href="http://'.$_SERVER['HTTP_HOST'].'/index.php?user" target="_blank" swaped="true">
			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="'.$webname.'�û�����" src="http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_logo.png" >		</a>
		</h1>
		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>
		<div style="padding: 2px 20px 30px;">
			<p>�װ��� <span style="color: rgb(196, 0, 0);">'.$username.'</span> , ���ã�</p>
			<p>������������������޸Ľ������롣</p>
			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="������ע��" href="'.$_url.'" target="_blank" swaped="true">'.$_url.'</a>
			<br><span style="color: rgb(153, 153, 153);">(��������޷�������뽫��������������ĵ�ַ����)</span></p>
			
			<p style="text-align: right;"><br>'.$webname.'�û����� ����</p>
			<p><br>��Ϊ�Զ������ʼ�������ֱ�ӻظ����������κ����ʣ�����<a title="�����ϵ����" style="color: rgb(15, 136, 221);" href="http://'.$_SERVER['HTTP_HOST'].'/help/index.html" target="_blank" >��ϵ����&gt;&gt;</a></p>
		</div>
	</div>
</div>
		';
	return $send_email_msg;

}

function RegEmailMsg($data = array()){
	global $mysql;
	$user_id = $data['user_id'];
	$username = $data['username'];
	$webname = $data['webname'];
	$email = $data['email'];
	$query_url = isset($data['query_url'])?$data['query_url']:"active";
	$active_id = urlencode(authcode($user_id.",".time(),"TTWCGY"));
	$_url = "http://{$_SERVER['HTTP_HOST']}/index.php?user&q={$query_url}&id={$active_id}";
	$user_url = "http://{$_SERVER['HTTP_HOST']}/index.php?user";
	$send_email_msg = '
	<div style="background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">
	<div style="padding: 10px 0px; background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_button.png)  no-repeat ">
		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 60px;">
			<a title="'.$webname.'�û�����" href="http://'.$_SERVER['HTTP_HOST'].'/index.php?user" target="_blank" swaped="true">
			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="'.$webname.'�û�����" src="http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_logo.png" >		</a>
		</h1>
		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>
		<div style="padding: 2px 20px 30px;">
			<p>�װ��� <span style="color: rgb(196, 0, 0);">'.$username.'</span> , ���ã�</p>
			<p>��л��ע��'.$webname.'������¼�������ʺ�Ϊ <strong style="font-size: 16px;">'.$email.'</strong></p>
			<p>������������Ӽ�����ɼ��</p>
			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="������ע��" href="'.$_url.'" target="_blank" swaped="true">'.$_url.'</a>
			<br><span style="color: rgb(153, 153, 153);">(��������޷�������뽫��������������ĵ�ַ����)</span></p>

			<p>��л������'.$webname.'�û����ģ����ǵ���ּ��Ϊ���ṩ����Ĳ�Ʒ�����ʵķ��� <br>���ھ͵�¼��!
			<a title="�����¼'.$webname.'�û�����" style="color: rgb(15, 136, 221);" href="http://'.$_SERVER['HTTP_HOST'].'/index.php?user" target="_blank" swaped="true">http://'.$_SERVER['HTTP_HOST'].'/index.php?user</a> 
			</p>
			<p style="text-align: right;"><br>'.$webname.'�û����� ����</p>
			<p><br>��Ϊ�Զ������ʼ�������ֱ�ӻظ����������κ����ʣ�����<a title="�����ϵ����" style="color: rgb(15, 136, 221);" href="http://'.$_SERVER['HTTP_HOST'].'/help/index.html" target="_blank" >��ϵ����&gt;&gt;</a></p>
		</div>
	</div>
</div>
		';
	return $send_email_msg;

}

function GetpwdMsg($data = array()){
	global $mysql;
	$user_id = $data['user_id'];
	$username = $data['username'];
	$webname = $data['webname'];
	$email = $data['email'];
	$active_id = urlencode(authcode($user_id.",".time(),"TTWCGY"));
	$_url = "http://{$_SERVER['HTTP_HOST']}/index.php?user&q=action/updatepwd&id={$active_id}";
	$user_url = "http://{$_SERVER['HTTP_HOST']}/index.php?user";
	$send_email_msg = '
	<div style="background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">
	<div style="padding: 10px 0px; background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_button.png)  no-repeat ">
		<h1 style="padding: 0px 15px; margin: 0px; overflow: hidden; height: 60px;">
			<a title="'.$webname.'�û�����" href="http://'.$_SERVER['HTTP_HOST'].'/index.php?user" target="_blank" swaped="true">
			<img style="border-width: 0px; padding: 0px; margin: 0px;" alt="'.$webname.'�û�����" src="http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_logo.png" >		</a>
		</h1>
		<div style="padding: 0px 20px; overflow: hidden; line-height: 40px; height: 50px; text-align: right;"> </div>
		<div style="padding: 2px 20px 30px;">
			<p>�װ��� <span style="color: rgb(196, 0, 0);">'.$username.'</span> , ���ã�</p>
			<p>������������������޸����롣</p>
			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="��������޸�����" href="'.$_url.'" target="_blank" swaped="true">'.$_url.'</a>
			<br><span style="color: rgb(153, 153, 153);">(��������޷�������뽫��������������ĵ�ַ����)</span></p>
			
			<p style="text-align: right;"><br>'.$webname.'�û����� ����</p>
			<p><br>��Ϊ�Զ������ʼ�������ֱ�ӻظ����������κ����ʣ�����<a title="�����ϵ����" style="color: rgb(15, 136, 221);" href="http://'.$_SERVER['HTTP_HOST'].'/contact/index.html" target="_blank" >��ϵ����&gt;&gt;</a></p>
		</div>
	</div>
</div>
		';
	return $send_email_msg;

}



?>