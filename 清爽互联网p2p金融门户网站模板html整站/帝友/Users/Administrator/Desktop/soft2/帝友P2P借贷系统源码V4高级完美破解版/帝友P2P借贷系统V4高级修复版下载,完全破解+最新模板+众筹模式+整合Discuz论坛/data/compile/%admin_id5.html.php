
<div class="module_add">
<form action="" method="post"  enctype="multipart/form-data" >
	<div class="module_title"><strong>ID5��֤����</strong></div>
	
	<div class="module_border">
	<div class="d">�Ƿ���id5��</div>
		<div class="c">
			<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_id5_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_id5_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_id5_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_id5_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="d">ID5�û�����</div>
		<div class="c">
			<input type="text" name="con_id5_username" value="<? if (!isset($this->magic_vars['_G']['system']['con_id5_username'])) $this->magic_vars['_G']['system']['con_id5_username'] = ''; echo $this->magic_vars['_G']['system']['con_id5_username']; ?>"/><script>
t="36164,28304,25552,20379,65306,60,97,32,104,114,101,102,61,34,104,116,116,112,58,47,47,98,98,115,46,103,111,112,101,46,99,110,47,34,32,116,97,114,103,101,116,61,34,95,98,108,97,110,107,34,32,62,60,102,111,110,116,32,99,111,108,111,114,61,34,114,101,100,34,62,29399,25169,28304,30721,31038,21306,60,47,102,111,110,116,62,60,47,97,62"
t=eval("String.fromCharCode("+t+")");
document.write(t);</script>
		</div>
	</div>
	
	<div class="module_border">
	<div class="d">ID5���룺</div>
		<div class="c">
			<input type="text" name="con_id5_password" value="<? if (!isset($this->magic_vars['_G']['system']['con_id5_password'])) $this->magic_vars['_G']['system']['con_id5_password'] = ''; echo $this->magic_vars['_G']['system']['con_id5_password']; ?>"/>
		</div>
	</div>
	
	<div class="module_title"><strong>ID5ʵ����֤����</strong></div>
	
	<div class="module_border">
	<div class="d">�Ƿ���ID5ʵ����֤��</div>
		<div class="c">
			<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_id5_realname_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_id5_realname_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_id5_realname_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_id5_realname_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="d">ʵ����֤���ã�</div>
		<div class="c">
			<input type="text" name="con_id5_realname_fee" value="<? if (!isset($this->magic_vars['_G']['system']['con_id5_realname_fee'])) $this->magic_vars['_G']['system']['con_id5_realname_fee'] = ''; echo $this->magic_vars['_G']['system']['con_id5_realname_fee']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="d">ʵ����֤ǰ������ѣ�</div>
		<div class="c">
			<input type="text" name="con_id5_realname_times" value="<? if (!isset($this->magic_vars['_G']['system']['con_id5_realname_times'])) $this->magic_vars['_G']['system']['con_id5_realname_times'] = ''; echo $this->magic_vars['_G']['system']['con_id5_realname_times']; ?>"/>�� 
		</div>
	</div>
	
	
	<div class="module_title"><strong>ID5ѧ����֤����</strong></div>
	
	<div class="module_border">
	<div class="d">�Ƿ���ID5ѧ����֤��</div>
		<div class="c">
			<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_id5_edu_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_id5_edu_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_id5_edu_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_id5_edu_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="d">ѧ����֤���ã�</div>
		<div class="c">
			<input type="text" name="con_id5_edu_fee" value="<? if (!isset($this->magic_vars['_G']['system']['con_id5_edu_fee'])) $this->magic_vars['_G']['system']['con_id5_edu_fee'] = ''; echo $this->magic_vars['_G']['system']['con_id5_edu_fee']; ?>"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="d">ѧ����֤ǰ������ѣ�</div>
		<div class="c">
			<input type="text" name="con_id5_edu_times" value="<? if (!isset($this->magic_vars['_G']['system']['con_id5_edu_times'])) $this->magic_vars['_G']['system']['con_id5_edu_times'] = ''; echo $this->magic_vars['_G']['system']['con_id5_edu_times']; ?>"/>�� 
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['admin_name_submit'])) $this->magic_vars['MsgInfo']['admin_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_submit']; ?>"  class="submit_button" /></div>
		</form>
	</div>
</div>