<?php
include("phpmailer/class.phpmailer.php");
class Mail {
public static $msg = '';
public static function Send ($subject,$body,$to) {
global $mysql,$_G;
$mail = new PHPMailer();
$mail->CharSet = 'gbk';
$mail->IsSMTP();

# ���SMTP�������Ƿ���Ҫ��֤��trueΪ��Ҫ��falseΪ����Ҫ
$mail->SMTPAuth   = $_G['system']['con_email_auth']?true:false;
# �������SMTP������
$mail->Host       = $_G['system']['con_email_host'];
# �����ͨSMTP��������䣻����һ��163�������
$mail->Username   = $_G['system']['con_email_url'];
# ��� ���������Ӧ������
$mail->Password   = $_G['system']['con_email_password'];
# ���������Email
$mail->From       = $_G['system']['con_email_from'];
# ���port
$mail->Port       = $_G['system']['con_email_port'];
# ����������ǳƻ�����
$mail->FromName   = $_G['system']['con_email_from_name'];
# ����ʼ����⣨���⣩
$mail->Subject    = $subject;
# ��ѡ�����ı��������û�����������
$mail->AltBody    = "";
# �Զ����е�����
$mail->WordWrap   = 50;
$mail->MsgHTML($body);
# �ظ������ַ
$mail->AddReplyTo($mail->From,$mail->FromName);
# ��Ӹ���,ע��·��
# $mail->AddAttachment("/path/to/file.zip");
# $mail->AddAttachment("/path/to/image.jpg","new.jpg");
# �ռ��˵�ַ������һ�������˵������ַ������Ӷ�������������ռ��˳ƺ�
$mail->AddAddress(join(",",$to));
# �Ƿ���HTML��ʽ���ͣ�������ǣ���ɾ������
$mail->IsHTML(true);

if(!$mail->Send()) {
self::$msg = $mail->ErrorInfo;
return false;
}
return true;
}
}
?>