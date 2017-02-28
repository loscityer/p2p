<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>系统消息 - <? if (!isset($this->magic_vars['sys_info']['webname'])) $this->magic_vars['sys_info']['webname'] = ''; echo $this->magic_vars['sys_info']['webname']; ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/main1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/rongzi')));?>
  <div class="con_box">
    <div style=" border:1px solid #CCCCCC;width:980px; margin:0px 10px; height:150px; margin:0 auto;background-color:#fff;">
    	<div style=" background-color:#E8E8E8; margin:1px; height:25px; line-height:25px; padding-left:10px; font-size:13px;"><strong>系统信息</strong></div>
        <div style="text-align:center;font-size:12px; background-color:#fff;">
        	<br />
        	&nbsp;&nbsp;<? if (!isset($this->magic_vars['_U']['showmsg']['msg'])) $this->magic_vars['_U']['showmsg']['msg'] = ''; echo $this->magic_vars['_U']['showmsg']['msg']; ?>
            <br />
            <br />
            <div id="msg_content"><a href="<? if (!isset($this->magic_vars['_U']['showmsg']['url'])) $this->magic_vars['_U']['showmsg']['url'] = ''; echo $this->magic_vars['_U']['showmsg']['url']; ?>"><? if (!isset($this->magic_vars['_U']['showmsg']['content'])) $this->magic_vars['_U']['showmsg']['content'] = ''; echo $this->magic_vars['_U']['showmsg']['content']; ?></a></div>
            <br />
        </div>
    </div>
	</div>
	<script> 
		var url = '<? if (!isset($this->magic_vars['_U']['showmsg']['url'])) $this->magic_vars['_U']['showmsg']['url'] = ''; echo $this->magic_vars['_U']['showmsg']['url']; ?>';
		var content = '<? if (!isset($this->magic_vars['_U']['showmsg']['content'])) $this->magic_vars['_U']['showmsg']['content'] = ''; echo $this->magic_vars['_U']['showmsg']['content']; ?>';
		
		if (url == ""){
			document.getElementById('msg_content').innerHTML = "<a href='javascript:history.go(-1)'>"+content+"</a>";
		}else{
			document.getElementById('msg_content').innerHTML = "<a href='"+url+"'>"+content+"</a>";
		}
		setInterval("testTime()",3000); 
		function testTime() { 
			if (url == ""){
				history.go(-1);
			}else{
				location.href = url; //#设定跳转的链接地址
			}
		}
    </script>
	
    
<? $this->magic_include(array('file' => "footer.html", 'vars' => array('template_dir' => 'themes/rongzi')));?>