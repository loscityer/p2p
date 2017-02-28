
<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


 <div style="height:25px;"></div>
    <div style=" border:1px solid #CCCCCC;width:970px; height:150px; margin:0 auto;">
    	<div style=" background-color:#E8E8E8; margin:1px; height:25px; line-height:25px; padding-left:10px; font-size:13px;">	<div class="bbs_position"><span>当前位置:</span> <a href="/bbs/index.html"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?></a> -> <span>操作提示</span></div></div>
        <div style="text-align:center;font-size:12px;">
        	<br />
        	&nbsp;&nbsp;<? if (!isset($this->magic_vars['_G']['msg']['0'])) $this->magic_vars['_G']['msg']['0'] = ''; echo $this->magic_vars['_G']['msg']['0']; ?>
            <br />
            <br />
            <div id="msg_content"><? if (!isset($this->magic_vars['_G']['msg']['0'])) $this->magic_vars['_G']['msg']['0'] = ''; echo $this->magic_vars['_G']['msg']['0']; ?></div>
            <br />
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
	
     <div style="height:20px;"></div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>