<?
/******************************
 * $File: module.php
 * $Description: ģ���ദ���ļ�
******************************/
if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>";//��ֱֹ�ӷ���

require_once(ROOT_PATH."modules/borrow/borrow.count.php");
$result = borrowCountClass::BorrowRemindCount();

echo "[<a href='{$_A['admin_url']}&q=module/borrow/full&status=1&a=site' target='_blank'>�������ˣ�{$result['borrow_full_check']}</a>] [<a href='{$_A['admin_url']}&q=module/borrow&status=0&a=site' target='_blank'>�������ˣ�{$result['borrow_publish_wait']}</a>]<br>";
echo "[<a href='{$_A['admin_url']}&q=module/account/recharge&a=site' target='_blank'>��ֵδ��ˣ�{$result['recharge']}</a>][<a href='{$_A['admin_url']}&q=module/account/cash&a=site' target='_blank'>����δ��ˣ�{$result['cash']}</a>]<br>";
echo "[<a href='{$_A['admin_url']}&q=module/attestation/realname&a=site' target='_blank'>ʵ��δ��֤��{$result['real_status']}</a>][<a href='{$_A['admin_url']}&q=module/attestation/all&type=video&a=site' target='_blank'>��Ƶδ��֤��{$result['video_status']}</a>]<br>";
echo "[<a href='{$_A['admin_url']}&q=module/attestation/vip&a=site' target='_blank'>VIPδ��֤��{$result['vip_status']}</a>][<a href='{$_A['admin_url']}&q=module/attestation/all&type=scene&a=site' target='_blank'>�ֳ�δ��֤��{$result['scene_status']}</a>]<br>";
echo "[<a href='{$_A['admin_url']}&q=module/liuyan&a=site' target='_blank'>����δ�ظ���{$result['liuyan_status']}</a>]";
echo "";
?>