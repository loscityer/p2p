<?
/******************************
 * $File: borrow.model.php
 * $Description: ��������ļ�
 * $Author: hummer 
 * $Time:2010-08-09
 * $Update:None 
 * $UpdateDate:None 
 * Copyright(c) 2013 by jichu.com. All rights reserved
******************************/

if (!defined('ROOT_PATH'))  die('���ܷ���');//��ֱֹ�ӷ���
//#borrow_url# ��ʾ����ĵ�ַ
//#borrow_name#  ��ʾ��������

$MsgInfo["error"] = "���Ĳ�������";
$MsgInfo["right"] = "�����ɹ�";
$MsgInfo["borrow_Second_er"] = "�˱����Ѿ�Ͷ�ʹ��ˣ����ܽ��ж���Ͷ�꣡";
$MsgInfo["borrow_Second_limit_money"] = "��Ͷ�ʽ������˴˱������";
$MsgInfo["user_no_login"] = "�㻹û��¼���¼�ѳ�ʱ";
$MsgInfo["valicode_error"] = "��֤�벻��ȷ";
$MsgInfo["borrow_name_empty"] = "������û����д";
$MsgInfo["borrow_account_empty"] = "������Ϊ��";
$MsgInfo["borrow_account_over_credituse"] = "�����ܴ��ڿ������ý����";
$MsgInfo["borrow_account_jin_credituse"] = "�����ܴ������ʲ���80%";
$MsgInfo["borrow_account_over_vouchuse"] = "�����ܴ��ڿ��õ��������";
$MsgInfo["borrow_account_over_min"] = "������С����վ���趨��ͽ��";
$MsgInfo["borrow_account_over_max"] = "�����ܴ�����վ���趨��߽��";
$MsgInfo["borrow_apr_empty"] = "������ʲ���Ϊ��";
$MsgInfo["borrow_Seconds_no"] = "�ʺ�����С�ڽ������������Ϣ";
$MsgInfo["borrow_Seconds_await_no"] = "ֻ���д��ս�������һ�����ն�Ȳ���Ͷ����";

$MsgInfo["borrow_flow_status"] = "�㻹δ������ת��֤�����ܷ�����ת��!";
$MsgInfo["borrow_apr_over_max"] = "�����ܴ�����վ���趨��߽��";
$MsgInfo["borrow_success_msg"] = "��Ľ������ѳɹ�����ȴ�����Ա�����";
$MsgInfo["borrow_is_exist"] = "���Ѿ���һ�������ȳ���ԭ���Ľ���ٽ��в���";
$MsgInfo["borrow_period_season_error"] = "��ѡ����ǰ�����������������д3�ı���";
$MsgInfo["borrow_cancel_success"] = "���곷�سɹ�";
$MsgInfo["borrow_cancel_yestender"] = "�Ѿ�����Ͷ�꣬���ܳ��ء�";
$MsgInfo["borrow_nid_empty"] = "���id����Ϊ��";
$MsgInfo["borrow_cancel_false"] = "��������ʧ�ܣ�����ͷ���ϵ";
$MsgInfo["borrow_cancel_success"] = "��������ɹ�����������·�������";
$MsgInfo["borrow_cancel_has"] = "�˱��Ѿ������������ظ�����";
$MsgInfo["account_tender_user_cancel"] = "�б�[#borrow_url#]ʧ�ܷ��ص�Ͷ���";
$MsgInfo["borrow_not_exiest"] = "���겻���ڣ��벻Ҫ�Ҳ���";
$MsgInfo["borrow_user_lock"] = "���˺��Ѿ������������ܽ���Ͷ�꣬�������Ա��ϵ";
$MsgInfo["borrow_fullcheck_error"] = "�˱��Ѿ����ͨ�����벻Ҫ�ظ����";
$MsgInfo["borrow_is_flow_error"] = "��ת�겻�ܽ����������";
$MsgInfo["borrow_verify_error"] = "�˱��Ѿ����ͨ�������ܼ������";
$MsgInfo["borrow_user_id_empty"] = "�û�������";
$MsgInfo["borrow_verify_success"] = "����ɹ�";
$MsgInfo["borrow_verify_user_msg"] = "������[#borrow_url#]���ꡣ";
$MsgInfo["borrow_not_reverify"] = "�˱껹ûͨ�����󣬲��ܸ���";
$MsgInfo["borrow_not_full"] = "�껹δ�������ܸ���";
$MsgInfo["borrow_tender_not_exiest"] = "Ͷ����Ϣ�����ڡ�";
$MsgInfo["borrow_tender_verify_yes"] = "��Ͷ���Ѿ�ͨ����ˣ����ܳ��ء�";
$MsgInfo["borrow_tender_cancel_success"] = "Ͷ�ʳ����ɹ���";
$MsgInfo["borrow_tender_user_id_re"] = "����Ͷ���Լ��ıꡣ";
$MsgInfo["borrow_vouch_not_self"] = "����Ϊ�Լ����е�����";

$MsgInfo["borrow_reverify_success"] = "���긴��ɹ�";

$MsgInfo["borrow_repay_id_empty"] = "�����ID����Ϊ��";
$MsgInfo["borrow_repay_yes"] = "�ѻ���벻Ҫ�ظ�����";
$MsgInfo["borrow_repay_id_empty"] = "�����ID����Ϊ��";
$MsgInfo["borrow_repay_error"] = "�˻��������벻Ҫ�Ҳ���";
$MsgInfo["borrow_repay_up_notrepay"] = "��һ�ڻ�δ������Ȼ���һ��";
$MsgInfo["borrow_repay_account_use_none"] = "������㣬���ȳ�ֵ";
$MsgInfo["borrow_account_over_vouchuse"] = "���Ķ�ȳ��������Ķ��";
$MsgInfo["borrow_apr_over_max"] = "�������ʸ������ֵ";
$MsgInfo["borrow_tiyan_not_public"] = "�Ѿ��з��������Ľ��꣬�����ٽ��з��������";
$MsgInfo["borrow_fullcheck_yes"] = "�����Ѿ����ͨ���������ٽ������";



$MsgInfo["borrow_tiyan_is_exist"] = "������Ѿ�����";

$MsgInfo["vip_apply_success"] = "vip��Ա����ɹ�����ȴ�����Ա�����";
$MsgInfo["vip_status_yes"] = "���Ѿ���vip��Ա���벻Ҫ�ظ����";

$MsgInfo["equal_account_empty"] = "����Ϊ��";
$MsgInfo["equal_period_empty"] = "������޲���Ϊ��";
$MsgInfo["equal_apr_empty"] = "���ʲ���Ϊ��";
$re_time = (strtotime("2011-05-20")-strtotime(date("Y-m-d",time())))/(60*60*24);

$MsgInfo["remind_tender_user_cancel_title"] = "Ͷ�ʵı�#borrow_name#ʧ��";
$MsgInfo["remind_tender_user_cancel_contents"] = "����Ͷ�ʵı�#borrow_url#�û��Ѿ��������";
$MsgInfo["amount_tender_user_cancel"] = "�������ı꡾#borrow_url#���û��ѳ���������Ͷ�ʶ�ȷ���";


$MsgInfo["remind_vouch_user_cancel_title"] = "������#borrow_name#����ʧ��";
$MsgInfo["remind_vouch_user_cancel_contents"] = "���������ı꡾#borrow_url#���û��Ѿ��������";
$MsgInfo["vouch_late_days_30no"] = "�˵�����δ���ڳ���30�죬��Ȼ���е渶��";
$MsgInfo["vouch_late_repay"] = "�����渶�ɹ���";
$MsgInfo["web_late_repay"] = "��վ�渶�ɹ���";

$MsgInfo["tender_full_yes"] = "�˱�������������Ͷ��";
$MsgInfo["tender_verify_no"] = "�˱���δͨ����ˡ�";
$MsgInfo["tender_late_yes"] = "�˱��ѹ��ڡ�";
$MsgInfo["tender_money_error"] = "��������ȷ�Ľ�";
$MsgInfo["tender_money_min_error"] = "��С��Ͷ�ʽ���С�ڡ�";
$MsgInfo["tender_money_no"] = "���㣬���ȳ�ֵ��";
$MsgInfo["tender_money_no_h"] = "Ͷ�ʵĽ������˴�����";
$MsgInfo["tender_vouch_full_no"] = "�˱��ǵ����꣬���ҵ����Ķ�Ȼ�δ��������Ͷ�ꡣ";
$MsgInfo["tender_50_no"] = "Ͷ����������Ϊ50�ı�����";


$MsgInfo["tender_friends_error"] = "�˱���������㲻����������Ľ���ˡ�����Ͷ��";
$MsgInfo["cancel_remark_empty"] = "�������뱸ע����Ϊ��";
$MsgInfo["cancel_remark_success"] = "��������ɹ�����ȴ�����Ա��ˡ�";
$MsgInfo["borrow_cancel_verify_false"] = "������˳ɹ���";

$MsgInfo["borrow_cancel_error"] = "�˱겻�������б�Ľ����ܳ��ء�";

$MsgInfo["amount_type_name_empty"] = "����������Ʋ���Ϊ��";
$MsgInfo["amount_type_nid_empty"] = "������ͱ�ʶ������Ϊ��";
$MsgInfo["amount_type_nid_exiest"] = "������ͱ�ʶ���Ѿ�����";
$MsgInfo["amount_type_add_success"] = "��Ӷ�����ͳɹ�";
$MsgInfo["amount_type_update_success"] = "�޸Ķ�����ͳɹ�";
$MsgInfo["amount_type_del_success"] = "ɾ��������ͳɹ�";
$MsgInfo["amount_type_empty"] = "������Ͳ�����";
$MsgInfo["amount_type_id_empty"] = "�������ID������";


$MsgInfo["amount_apply_id_empty"] = "�������ID������";
$MsgInfo["amount_apply_check_yes"] = "�������Ѿ�ͨ�����";


$MsgInfo["amount_apply_update_success"] = "���³ɹ�";

$MsgInfo["borrow_scale70_not_cancel"] = "�����Ȼ�δ�ﵽ70%�����ܳ���";
$MsgInfo["borrow_scale100_not_cancel"] = "�˱��Ѿ����꣬���ܳ��꣬��ȴ�����";
$MsgInfo["borrow_no_more"] = "����Ͷ�ʽ�������δ������һ��";
$MsgInfo["borrow_no_repay"] = "���н��δ�������ܽ���Ͷ�ꡣ";

$MsgInfo["borrow_s_id_empty"] = "id����Ϊ��";


$MsgInfo["articles_img_error"] = "�ϴ�����ͼ��ʽ����";
$MsgInfo["articles_name_empty"] = "��Ŀ���ⲻ��Ϊ��";
$MsgInfo["raise_period_empty"] = "��Ŀ���޲���Ϊ��";
$MsgInfo["raise_period_no"] = "��Ŀ���ޱ������0";
$MsgInfo["raise_account_no"] = "��Ŀ���ʽ��������0";
$MsgInfo["articles_id_empty"] = "��Ŀid����Ϊ��";
$MsgInfo["articles_not_exiest"] = "��Ŀ������";


$MsgInfo["borrow_raise_buy_error"] = "��Ŀ֧��ʧ��";
$MsgInfo["borrow_raise_paypassword_error"] = "֧���������";
$MsgInfo["borrow_raise_account_error"] = "���㣬���ֵ��";
$MsgInfo["borrow_raise_buy_success"] = "֧�ֳɹ�,��л���Ը���Ŀ��֧�֣�";
$MsgInfo["borrow_raise_end_time_error"] = "����Ŀ�ѽ�������!";
$MsgInfo["borrow_raise_account_j_error"] = "����֧�ֵĽ�������ʣ����ʽ�";
?>
