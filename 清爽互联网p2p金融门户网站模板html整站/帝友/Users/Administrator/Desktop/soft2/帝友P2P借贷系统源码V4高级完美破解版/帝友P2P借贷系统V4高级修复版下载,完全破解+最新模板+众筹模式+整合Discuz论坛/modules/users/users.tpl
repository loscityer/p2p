<!--�û��б� ��ʼ-->
{if $_A.query_type == "list"}

<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">{$MsgInfo.users_name_order_default}</a></li> 
<li><a href="{$_A.query_url_all}&order=last_time">{$MsgInfo.users_name_order_last_time}</a></li> 
<li><a href="{$_A.query_url_all}&order=reg_time" >{$MsgInfo.users_name_order_reg_time}</a></li>
</ul> 
<div class="module_add">
	<div class="module_title"><strong>�û��б�</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">{$MsgInfo.users_name_id}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_username}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_email}</td>
		<td width="*" class="main_td" nowrap="nowrap">{$MsgInfo.users_name_logintime}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_reg_time}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_reg_ip}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_up_time}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_up_ip}</td>
		<th width="" class="main_td">{$MsgInfo.users_name_last_time}</th>
		<th width="" class="main_td">{$MsgInfo.users_name_last_ip}</th>
		<th width="" class="main_td" nowrap="nowrap">�޸�</th>
	</tr>
	{ list module="users" function="GetUsersList" var="loop" username=request email=request order="request"}
		{foreach from=$loop.list item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.user_id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.email}</td>
		<td class="main_td1" align="center">{$item.logintime|default:0}</td>
		<td class="main_td1" align="center" >{$item.reg_time|date_format:"Y-m-d H:i:s"}</td>
		<td class="main_td1" align="center" >{$item.reg_ip}</td>
		<td class="main_td1" align="center" >{$item.up_time|date_format:"Y-m-d H:i:s"}</td>
		<td class="main_td1" align="center" >{$item.up_ip}</td>
		<td class="main_td1" align="center" >{$item.last_time|date_format:"Y-m-d H:i:s"}</td>
		<td class="main_td1" align="center" >{$item.last_ip}</td>
		<td class="main_td1" align="center" ><a href="{$_A.query_url}/edit&user_id={$item.user_id}">�޸�</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  {$MsgInfo.users_name_email}��<input type="text" name="email" id="email" value="{$magic.request.email}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	
	{ /list}
</table>
<!--�û��б� ����-->

{elseif $_A.query_type == "info_edit" }
<div class="module_add">
	
	<form  name="form_user" method="post" action="" >
	<div class="module_title"><strong>�޸��û���Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			{$_A._user_result.username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ǳƣ�</div>
		<div class="c">
		<input name="niname" type="text"  class="input_border" value="{$_A._user_result.niname}" /> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		<select name="status">
			<option value="0" {if $_A._user_result.status=="0"} selected="selected"{/if}>����</option>
			<option value="1" {if $_A._user_result.status=="1"} selected="selected"{/if}>����</option>
			<option value="2" {if $_A._user_result.status=="2"} selected="selected"{/if}>�ر�</option>
		</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���գ�</div>
		<div class="c">
		<input name="birthday" type="text"  class="input_border" value="{$_A._user_result.birthday}" /> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">�Ա�</div>
		<div class="c">
		<input name="sex" type="radio"  class="input_border" value="��" {if $_A._user_result.sex=="��"} checked="checked"{/if} /> ��
		<input name="sex" type="radio"  class="input_border" value="Ů" {if $_A._user_result.sex=="Ů"} checked="checked"{/if} /> Ů
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ȫ���⣺</div>
		<div class="c">
		<input name="question" type="text"  class="input_border" value="{$_A._user_result.question}" /> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ȫ�𰸣�</div>
		<div class="c">
		<input name="answer" type="text"  class="input_border" value="{$_A._user_result.answer}" /> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ڵأ�</div>
		<div class="c">
		{areas type="p,c,a"  value='$_A._user_result.area'}
		</div>
	</div>
	
	
	<div class="module_submit border_b" >
	<input type="hidden" name="user_id" value="{ $_A._user_result.user_id }" />
	<input type="submit" name="submit" value="�ύ" />
	</div>
	</form>
</div>

<!--�û���Ϣ�б� ��ʼ-->
{elseif $_A.query_type == "info"}
<div class="module_add">
	<div class="module_title"><strong>�û���Ϣ</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">�û���</td>
		<td width="*" class="main_td">�û�����</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">ͷ��</td>
		<td width="*" class="main_td">�û�״̬</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">�鿴����</td>
	</tr>
	{ list module="users" function="GetUsersInfoList" var="loop" username=request email=request}
		{foreach from=$loop.list item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.user_id}</td>
		<td class="main_td1" align="center">{ $item.username}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{$item.admin_name}</td>
		<td class="main_td1" align="center" >{$item.avatar}</td>
		<td class="main_td1" align="center" >{if $item.status==1}����{elseif $item.status==0}����{elseif $item.status==2}����{/if}</td>
		<td class="main_td1" align="center" >{$item.invite_username|default:-}</td>
		<td class="main_td1" align="center" ><a href="{$_A.query_url}/viewinfo&user_id={$item.user_id}">�鿴</a> <a href="{$_A.query_url}/info_edit&user_id={$item.user_id}">�޸�</a></td>
		
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url}/info';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  {$MsgInfo.users_name_email}��<input type="text" name="email" id="email" value="{$magic.request.email}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	
	{ /list}
</table>
<!--�û���Ϣ�б� ����-->

{elseif $_A.query_type == "rebut"}
<div class="module_add">
	<div class="module_title"><strong>�û���¼</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">�ٱ��û�</td>
		<td width="" class="main_td">���ٱ��û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">�ٱ�����</td>
		<td width="" class="main_td">�ٱ�ʱ��</td>
	</tr>
	{ list module="users" function="GetRebutList" var="loop" username=request email=request epage="12" epage="10"}
	{foreach from=$loop.list item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.id}</td>
		<td class="main_td1" align="center">{$item.username|default:-}</td>
		<td class="main_td1" align="center">{$item.rebut_username}</td>
		<td class="main_td1" align="center">{$item.type_id|linkages:"rebut_type"}</td>
		<td class="main_td1" align="center" width="200" >{$item.contents}</td>
		<td class="main_td1" align="center" >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
	</tr>
	{/foreach}
	
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  {$MsgInfo.users_name_email}��<input type="text" name="email" id="email" value="{$magic.request.email}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{ /list}
</table>
<!--�û���¼�б� ��ʼ-->
{elseif $_A.query_type == "log"}
<div class="module_add">
	<div class="module_title"><strong>�û���¼</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">{$MsgInfo.users_name_id}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_username}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_code}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_type}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_operating}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_operating_id}</td>
		<td width="*" class="main_td">{$MsgInfo.users_name_result}</td>
		<th width="" class="main_td">{$MsgInfo.users_name_content}</th>
		<th width="" class="main_td">{$MsgInfo.users_name_add_time}</th>
		<th width="" class="main_td">{$MsgInfo.users_name_add_ip}</th>
	</tr>
	{ list module="users" function="GetUserslogList" var="loop" username=request email=request epage="12" page="request"}
		{foreach from=$loop.list item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username|default:-}</td>
		<td class="main_td1" align="center">{$item.code}</td>
		<td class="main_td1" align="center" >{$item.type}</td>
		<td class="main_td1" align="center" >{$item.operating}</td>
		<td class="main_td1" align="center" >{$item.article_id}</td>
		<td class="main_td1" align="center" >{if $item.result==1}<font color="#006600">{$MsgInfo.users_name_success}</font>{else}<font color="#FF0000">{$MsgInfo.users_name_false}</font>{/if}</td>
		<td class="main_td1" align="center" width="200" >{$item.content}</td>
		<td class="main_td1" align="center" >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
		<td class="main_td1" align="center" >{$item.addip}</td>
	</tr>
	{/foreach}
	
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  {$MsgInfo.users_name_email}��<input type="text" name="email" id="email" value="{$magic.request.email}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{ /list}
</table>
<!--�û���¼�б� ����-->

{elseif $_A.query_type == "new" || $_A.query_type == "edit"}
<div class="module_add">
	
	<form  name="form_user" method="post" action="" { if $_A.query_type == "new" }onsubmit="return check_user();"{/if} >
	<div class="module_title"><strong>{ if $_A.query_type == "edit" }{$MsgInfo.users_name_edit}{else}{$MsgInfo.users_name_new}{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.users_name_username}��</div>
		<div class="c">
			{ if $_A.query_type != "edit" }<input name="username" type="text"  class="input_border" />{else}{ $_A.users_result.username}<input name="username" type="hidden"  class="input_border" value="{$_A.users_result.username}" />{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			{ if $_A.query_type != "edit" }<input name="email" type="text"  class="input_border" />{else}{ $_A.users_result.email}<input name="email" type="hidden"  class="input_border" value="{$_A.users_result.email}" />{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">{$MsgInfo.users_name_password}��</div>
		<div class="c">
			<input name="password" type="password" class="input_border" />{ if $_A.query_type == "edit" } {$MsgInfo.users_name_edit_not_empty}{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.users_name_password1}��</div>
		<div class="c">
			<input name="password1" type="password" class="input_border" />{ if $_A.query_type == "edit" } {$MsgInfo.users_name_edit_not_empty}{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">֧�����룺</div>
		<div class="c">
			<input name="paypassword" type="password" class="input_border" />{ if $_A.query_type == "edit" } {$MsgInfo.users_name_edit_not_empty}{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ȷ��֧�����룺</div>
		<div class="c">
			<input name="paypassword1" type="password" class="input_border" />{ if $_A.query_type == "edit" } {$MsgInfo.users_name_edit_not_empty}{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	
	
	<div class="module_submit border_b" >
	{ if $_A.query_type == "edit" }<input type="hidden" name="user_id" value="{ $_A.users_result.user_id }" />{/if}
	<input type="submit" value="{$MsgInfo.users_name_submit}" /><input type="hidden" name="status" value="1" />
	<input type="reset" name="reset" value="{$MsgInfo.users_name_reset}" />
	</div>
	</form>
</div>
{literal}
<script>
function check_user(){
	 var frm = document.forms['form_user'];
	 var username = frm.elements['username'].value;
	 var password = frm.elements['password'].value;
	  var password1 = frm.elements['password1'].value;
	   var email = frm.elements['email'].value;
	 var errorMsg = '';
	  if (username.length == 0 ) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_username_empty']; ?> \n';
	  }
	   if (username.length<4) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_username_long4']; ?> \n';
	  }
	  if (password.length==0) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_password_empty']; ?> \n';
	  }
	  if (password.length<6) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_password_long6']; ?> \n';
	  }
	   if (password.length!=password1.length) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_password_error']; ?> \n';
	  }
	   if (email.length==0) {
		errorMsg += '<? echo $this->magic_vars['MsgInfo']['users_email_empty']; ?> \n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>
{/literal}




<!--��˼�¼�б� ��ʼ-->
{elseif $_A.query_type == "examine"}
<div class="module_add">
<div class="module_title"><strong>��˼�¼�б�</strong></div>
</div> 
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">id</td>
		<td width="*" class="main_td">�����</td>
		<td width="*" class="main_td">ģ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<th width="" class="main_td">���</th>
		<td width="*" class="main_td">��˱�ע</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	{ list module="users" function="GetExamineList" var="loop" username=request  epage="12" page="request"}
		{foreach from=$loop.list item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username|default:-}</td>
		<td class="main_td1" align="center">{$item.code}</td>
		<td class="main_td1" align="center" >{$item.type}</td>
		<td class="main_td1" align="center" >{$item.article_id}</td>
		<td class="main_td1" align="center" >{if $item.result==1}<font color="#006600">{$MsgInfo.users_name_success}</font>{else}<font color="#FF0000">{$MsgInfo.users_name_false}</font>{/if}(result={$item.result})</td>
		<td class="main_td1" align="center" >{$item.remark}</td>
		<td class="main_td1" align="center" >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
	</tr>
	{/foreach}
	
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{ /list}
</table>
<!--��˼�¼�б� ����-->



{elseif $_A.query_type=="type"}

<div class="module_add">
	<div class="module_title"><strong>�û�����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.users_type_result.id}" />�޸��û����� ��<a href="{$_A.query_url_all}">���</a>��{else}����û�����{/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.users_type_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="{$_A.users_type_result.nid}" onkeyup="value=value.replace(/[^a-z0-9_]/g,'')"/>
		</div>
	</div>
	<div class="module_border">
		<div class="l">Ĭ&nbsp;&nbsp;�ϣ�</div>
		<div class="c">
			{input type="radio" name="checked" value="0|��,1|��" checked="$_A.users_type_result.checked"}��ע���ʱ���û�Ĭ�ϵ����ͣ�
		</div>
	</div>
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.users_type_result.remark}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="{$_A.users_type_result.order|default:10}" size="8"/>
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��֤�룺</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>�û������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">�Ƿ�Ĭ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="users" function="GetUsersTypeList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center">{if $item.checked==1}��{else}<a href="{$_A.query_url_all}&checked={$item.id}" title="��ΪĬ��">��</a>{/if}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>

<!--�˵��б� ����-->
</div>
</div>
{elseif $_A.query_type=="spread"}
<div class="module_add">
	<div class="module_title"><strong>��˲���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">���</td>
		<td width="" class="main_td">�·�</td>
		<td width="" class="main_td">�������������ܶ��</td>
		<td width="*" class="main_td">����ʵ����˵��ܶ��</td>
		<td width="*" class="main_td">���µ���ɱ���</td>
		<td width="*" class="main_td">����ͨ����˵��ܶ��</td>
		<td width="*" class="main_td">���µ�ͨ������</td>
		<td width="*" class="main_td">���µ�������</td>
		<th width="" class="main_td">�����</th>
		<th width="" class="main_td">�������</th>
	</tr>
	{list module="borrow" function="GetSpreadVerifyCount" var="loop" month="request"}
		{foreach from="$loop.list" item="item"}
		<tr {if $key%2==1} class="tr2"{/if}>
			<td class="main_td1" align="center">{$item.Year}��</td>
			<td class="main_td1" align="center">{$key}�·�</td>
			<td class="main_td1" align="center">��{$item.ApplyTotal}</td>
			<td class="main_td1" align="center">��{$item.Apply}</td>
			<td class="main_td1" align="center">{$item.VerifyScale}%</td>
			<td class="main_td1" align="center">��{$item.VerifyYes}</td>
			<td class="main_td1" align="center">{$item.VerifyYesScale}%</td>
			<td class="main_td1" align="center">��{$item.VerifyTask}</td>
			<td class="main_td1" align="center">{$item.VerifyTaskScale}%</td>
			<td class="main_td1" align="center">��{$item.VerifyIncome}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="10" class="action">
			<div class="floatl">
			</div>
			<div class="floatr">
			<script>
			var url = '{$_A.query_url_all}';
			{literal}
			function sousuo(){
				var month = $("#month").val();
				location.href=url+"&month="+month;
			}

			</script>
			{/literal}
				�·�:<select name="month" id="month">
					{literal}
					<?
					for($i=1;$i<=12;$i++){
						echo "<option value='".$i."'>".$i."�·�</option>";
					}
					?>
					{/literal}
					 </select>
			<input type="submit" value="����" onClick="sousuo()">
			</div>
			</td>
		</tr>
	{/list}
</table>

{elseif $_A.query_type == "vip" ||  $_A.query_type == "vipview" }

	{include file="users.vip.tpl" template_dir = "modules/users"}
{elseif $_A.query_type == "view" }

	{include file="users.view.tpl" template_dir = "modules/users"}	
{elseif $_A.query_type == "viewinfo" ||  $_A.query_type == "viewinfo" }

	{include file="users.viewinfo.tpl" template_dir = "modules/users"}


{elseif $_A.query_type == "admin" ||  $_A.query_type == "admin_log"  ||  $_A.query_type == "admin_type" }

	{include file="users.admin.tpl" template_dir = "modules/users"}

{/if}