<?php
/******************************
 * $File: users.model.php
 * $Description: �û�������Ϣ����
 * $Author: hummer 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/

//#borrow_url# ��ʾ����ĵ�ַ
//#borrow_name#  ��ʾ��������

$MsgInfo["users_empty"] = "�鲻�����û�";
$MsgInfo["users_username_empty"] = "�û�������Ϊ��";
$MsgInfo["users_username_long15"] = "�û������Ȳ��ܴ���15���ַ�";
$MsgInfo["users_username_long4"] = "�û������Ȳ���С��4���ַ�";
$MsgInfo["users_username_exist"] = "�û����Ѿ�����";
$MsgInfo["users_password_empty"] = "���벻��Ϊ��";
$MsgInfo["users_password_error"] = "���벻һ��";
$MsgInfo["users_password_error_shuz"] = "ֻ����Ӣ����ĸ���������";
$MsgInfo["users_password_long6"] = "���벻��С��6λ";
$MsgInfo["users_email_empty"] = "���䲻��Ϊ��";
$MsgInfo["users_email_long32"] = "���䳤�Ȳ��ܴ���32���ַ�";
$MsgInfo["users_email_exist"] = "�����Ѿ�����";
$MsgInfo["users_userid_empty"] = "�û���ID����Ϊ��";
$MsgInfo["users_valicode_empty"] = "��֤�벻��Ϊ��";
$MsgInfo["users_valicode_error"] = "��֤�벻��ȷ";
$MsgInfo["users_keywords_empty"] = "�˻�����Ϊ��";
$MsgInfo["users_reg_invite_username_not_exiest"] = "�����˵��û��������ڣ���ѡ���Ƿ���д��ȷ�����û����Ϊ��";

$MsgInfo["users_info_userid_empty"] = "�û�����id����Ϊ��";

$MsgInfo["users_admin_id_error"] = "�Ҳ�����Ӧ�ĺ�̨����Ȩ��";
$MsgInfo["users_admin_login_password_error"] = "�û������벻��ȷ��";
$MsgInfo["users_admin_login_password_error_msg"] = "�û�#username#�ڡ�".date("Y-m-d H:i:s")."����¼��̨#admin_url#�������";
$MsgInfo["users_admin_login_status_error"] = "�����˻��Ѿ������ᣬ�����վ����Ա��ϵ";
$MsgInfo["users_admin_login_status_error_msg"] = "�û�#username#�ڡ�".date("Y-m-d H:i:s")."����¼��̨#admin_url#��Ϊ�û�״̬�����������������¼��";
$MsgInfo["users_admin_login_admin_id_error"] = "�����ǹ���Ա�����ܹ����̨";
$MsgInfo["users_admin_login_admin_id_error_msg"] = "�û�#username#�ڡ�".date("Y-m-d H:i:s")."����¼��̨#admin_url#��Ϊ���ǹ���Ա�����ܵ�¼��̨��";
$MsgInfo["users_admin_login_success"] = "��¼�ɹ�";
$MsgInfo["users_admin_login_success_msg"] = "�û�#username#�ڡ�".date("Y-m-d H:i:s")."����¼��̨#admin_url#�ɹ���";


$MsgInfo["users_add_success"] = "ע��ɹ�";
$MsgInfo["users_add_success_msg"] = "�ڡ�".date("Y-m-d H:i:s")."����ӡ�#username#���û��ɹ���";
$MsgInfo["users_add_error"] = "�û�����Ӵ����������Ա��ϵ";
$MsgInfo["users_add_error_msg"] = "�ڡ�".date("Y-m-d H:i:s")."����ӡ�#username#���û�ʧ�ܡ�";
$MsgInfo["users_add_error"] = "�û�����Ӵ����������Ա��ϵ";
$MsgInfo["users_add_reg_email_title"] = "���û�������";
$MsgInfo["users_add_reg_email_msg"] =  '
	<div style="background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_bg.png) no-repeat left bottom; font-size:14px; width: 588px; ">
	<div style="padding: 10px 0px; background: url(http://'.$_SERVER['HTTP_HOST'].'/data/images/base/email_button.png)  no-repeat ">
		
		<div style="padding: 2px 20px 30px;">
			<p>�װ��� <span style="color: rgb(196, 0, 0);">#username#</span> , ���ã�</p>
			<p>��л��ע��#webname#������¼�������ʺ�Ϊ <strong style="font-size: 16px;">#email#</strong></p>
			<p>������������Ӽ�����ɼ��</p>
			<p style="overflow: hidden; width: 100%; word-wrap: break-word;"><a title="������ע��" href="http://'.$_SERVER['HTTP_HOST'].'#url#" target="_blank" swaped="true">http://'.$_SERVER['HTTP_HOST'].'#url#</a>
			<br><span style="color: rgb(153, 153, 153);">(��������޷�������뽫��������������ĵ�ַ����)</span></p>

			<p>��л������#webname#�û����ģ����ǵ���ּ��Ϊ���ṩ����Ĳ�Ʒ�����ʵķ��� <br>���ھ͵�¼��!
			<a title="�����¼#webname#�û�����" style="color: rgb(15, 136, 221);" href="http://'.$_SERVER['HTTP_HOST'].'/?user" target="_blank" swaped="true">http://'.$_SERVER['HTTP_HOST'].'/?user</a> 
			</p>
			<p style="text-align: right;"><br>#webname#�û����� ����</p>
			<p><br>��Ϊ�Զ������ʼ�������ֱ�ӻظ����������κ����ʣ�����<a title="�����ϵ����" style="color: rgb(15, 136, 221);" href="http://'.$_SERVER['HTTP_HOST'].'/help/index.html" target="_blank" >��ϵ����&gt;&gt;</a></p>
		</div>
	</div>
</div>
		';
$MsgInfo["users_update_password_success_msg"] = "�ڡ�".date("Y-m-d H:i:s")."���޸ġ�#username#���û�����ɹ���";
$MsgInfo["users_update_password_error_msg"] = "�ڡ�".date("Y-m-d H:i:s")."����ӡ�#username#���û�����ʧ�ܡ�";
$MsgInfo["users_update_email_success_msg"] = "�ڡ�".date("Y-m-d H:i:s")."���޸ġ�#username#���û�����ɹ���";
$MsgInfo["users_update_email_error_msg"] = "�ڡ�".date("Y-m-d H:i:s")."����ӡ�#username#���û�����ʧ�ܡ�";


$MsgInfo["users_login_success"] = "��¼�ɹ���";
$MsgInfo["users_login_success_msg"] = "��".date("Y-m-d H:i:s")."����¼�ɹ���";
$MsgInfo["users_login_error"] = "�û����������";
$MsgInfo["users_login_error_msg"] = "�û���#keywords#���ڡ�".date("Y-m-d H:i:s")."����¼ʧ�ܡ�";;


$MsgInfo["users_active_success"] = "���伤��ɹ�";
$MsgInfo["users_active_pass"] = "�����ַ�Ѿ����ڣ������¼���";
$MsgInfo["users_active_yes"] = "���������Ѿ��������Ҫ��һ�μ���";
$MsgInfo["users_active_error"] = "��������������Ա��ϵ";


//����Ϊģ����ļ���Ӣ������
$MsgInfo["users_name_id"] = "ID";
$MsgInfo["users_name_username"] = "�û���";
$MsgInfo["users_name_email"] = "����";
$MsgInfo["users_name_logintime"] = "��¼����";
$MsgInfo["users_name_password"] = "����";
$MsgInfo["users_name_password1"] = "ȷ������";
$MsgInfo["users_name_reg_time"] = "ע��ʱ��";
$MsgInfo["users_name_reg_ip"] = "ע��ip";
$MsgInfo["users_name_up_time"] = "�ϴε�¼ʱ��";
$MsgInfo["users_name_up_ip"] = "�ϴε�¼IP";
$MsgInfo["users_name_last_time"] = "����¼ʱ��";
$MsgInfo["users_name_last_ip"] = "����¼IP";


$MsgInfo["users_name_order_last_time"] = "����¼ʱ������";
$MsgInfo["users_name_order_default"] = "Ĭ������";
$MsgInfo["users_name_order_up_time"] = "���ϴε�¼ʱ������";
$MsgInfo["users_name_order_reg_time"] = "��ע��ʱ������";

$MsgInfo["users_name_operatinger"] = "������";
$MsgInfo["users_name_operating"] = "����";
$MsgInfo["users_name_operating_id"] = "����id";
$MsgInfo["users_name_type"] = "����";
$MsgInfo["users_name_result"] = "���";
$MsgInfo["users_name_content"] = "����";
$MsgInfo["users_name_add_time"] = "���ʱ��";
$MsgInfo["users_name_add_ip"] = "���ip";

$MsgInfo["users_name_code"] = "ģ��";
$MsgInfo["users_name_last_ip"] = "����¼IP";
$MsgInfo["users_name_sousuo"] = "����";

$MsgInfo["users_name_new"] = "����û�";
$MsgInfo["users_name_edit"] = "�༭�û�";
$MsgInfo["users_name_del"] = "ɾ���û�";
$MsgInfo["users_name_submit"] = "�ύ";
$MsgInfo["users_name_reset"] = "����";
$MsgInfo["users_name_success"] = "�ɹ�";
$MsgInfo["users_name_false"] = "ʧ��";
$MsgInfo["users_name_edit_not_empty"] = "���޸���Ϊ��";

$MsgInfo["users_type_name_empty"] = "�������Ʋ���Ϊ��";
$MsgInfo["users_type_nid_empty"] = "���ͱ�ʶ������Ϊ��";
$MsgInfo["users_type_nid_exiest"] = "���ͱ�ʶ���Ѿ�����";
$MsgInfo["users_type_add_success"] = "������ͳɹ�";
$MsgInfo["users_type_update_success"] = "�޸����ͳɹ�";
$MsgInfo["users_type_del_success"] = "ɾ�����ͳɹ�";
$MsgInfo["users_type_empty"] = "���Ͳ�����";
$MsgInfo["users_type_id_empty"] = "����ID������";
$MsgInfo["users_type_upfiles_exiest"] = "������ͼƬ���ڣ�����ɾ��";



$MsgInfo["users_admin_type_name_empty"] = "�����������Ʋ���Ϊ��";
$MsgInfo["users_admin_type_user_exiest"] = "���й���Ա���ڣ�����ɾ������";
$MsgInfo["users_admin_type_not_delete"] = "��������Ա����ɾ��";
$MsgInfo["users_admin_type_id_empty"] = "��������ID����Ϊ��";
$MsgInfo["users_admin_type_nid_empty"] = "�������ͱ�ʶ������Ϊ��";
$MsgInfo["users_admin_type_nid_exiest"] = "�������ͱ�ʶ���Ѿ�����";
$MsgInfo["users_admin_type_add_success"] = "��ӹ������ͳɹ�";
$MsgInfo["users_admin_type_update_success"] = "�޸Ĺ������ͳɹ�";
$MsgInfo["users_admin_type_del_success"] = "ɾ���������ͳɹ�";
$MsgInfo["users_admin_type_empty"] = "�������Ͳ�����";
$MsgInfo["users_admin_type_id_empty"] = "��������ID������";
$MsgInfo["users_admin_type_upfiles_exiest"] = "����������ͼƬ���ڣ�����ɾ��";


$MsgInfo["users_admin_name_empty"] = "����Ա��������Ϊ��";
$MsgInfo["users_admin_password_empty"] = "����Ա���벻��Ϊ��";
$MsgInfo["users_admin_user_id_empty"] = "�û�ID����Ϊ��";
$MsgInfo["users_admin_update_success"] = "����Ա�����ɹ�";
$MsgInfo["users_admin_del_success"] = "����Աɾ���ɹ�";


$MsgInfo["usres_vip_apply_success"] = "VIP����ɹ�����ȴ�����Ա���";
$MsgInfo["users_vip_status_yes"] = "vip�Ѿ����ͨ�����벻Ҫ�����";


$MsgInfo["users_login_lock"] = "�����˺��ѱ��������������Ա��ϵ";

?>
