<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>杭州兰丹网络科技有限公司</title> 
<meta http-equiv="Content-Type" content="text/html; charset=gbk"> 
<meta http-equiv="expires" content="0"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<link rel="stylesheet" type="text/css" href="/themes/youyidai_admin/admin.css" /> 
<script language="JavaScript" src="/themes/youyidai_admin/images/jquery.js"></script> 
<script language="JavaScript" src="/themes/youyidai_admin/images/common.js"></script> 
<script language="JavaScript" src="/themes/youyidai_admin/js/base.js"></script> 
<link href="/themes/youyidai_admin/css/tipswindown.css" rel="stylesheet" type="text/css" /> 
<script src="/themes/youyidai_admin/js/tipswindown.js" type="text/javascript"></script> 
<script src="/plugins/timepicker/WdatePicker.js" type="text/javascript"></script>
<script src="/plugins/editor/xheditor/xheditor-1.1.12-zh-cn.min.js" type="text/javascript"></script>
</head> 
<body> 
<div class="tt">

<? if (!isset($this->magic_vars['_A']['module_other_status'])) $this->magic_vars['_A']['module_other_status']=''; ;if (  $this->magic_vars['_A']['module_other_status']=="1"): ?>
<div style="background-color:#ffffff; line-height:30px; border-bottom:1px solid #2364a4; border-top:1px solid #2364a4; margin-bottom:10px;">
<?  if(!isset($this->magic_vars['_A']['module_other_result']) || $this->magic_vars['_A']['module_other_result']=='') $this->magic_vars['_A']['module_other_result'] = array();  $_from = $this->magic_vars['_A']['module_other_result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
<span style="margin:5px"><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></a></span>
<? endforeach; endif; unset($_from); ?>
</div>
<? endif; ?>
<div class="admin_module">
<? if (!isset($this->magic_vars['module_tpl'])) $this->magic_vars['module_tpl']='';if (!isset($this->magic_vars['template_dir'])) $this->magic_vars['template_dir']=''; ; $_from = $this->magic_vars['module_tpl'];  $this->magic_include(array('file' => $_from, 'vars' => array('template_dir' => $this->magic_vars['template_dir']))); unset($_from);?>


</div></div>
</body>
</html>