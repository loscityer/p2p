
<div class="module_add">
	<div class="module_title"><strong><font color="#FF0000">{$_A.account_exit_username}</font>�����ʽ�</strong></div>
</div>
<form action="{$_A.query_url_all}" name="form1" method="post" onsubmit="return check_form();">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
	  <td>�û���</td>
	  <td>{$_A.account_exit_username}<input value="{$_A.account_exit_username}"  name="username" type="hidden"/></td>
	  </tr>
	  <tr>
	  <td>�䶯���</td>
	  <td><input name="money"  value="0" type="text"/>����Ǽ��������������-1000</td>
	  </tr>
	  
	  <td>�䶯ԭ��</td>
	  <td><input  name="log" value="" type="text" size="30"/></td>
	  </tr><input  name="user_id" value="{$_A.account_exit_result.user_id}" type="hidden"/>
	  <tr><td colspan="2" align="center"><div style="text-align:center; width:400px;"><input value=" �� �� " name="submit" type="submit" /></div></td></tr>
	</table>
</form>
{literal}
<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['log'].value;
	  var money = frm.elements['money'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '�䶯ԭ�������д' + '\n';
	  }
	  
	  if (money.length == 0 || money==0) {
		errorMsg += '�䶯��������д' + '\n';
	  }
	  
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>
{/literal}