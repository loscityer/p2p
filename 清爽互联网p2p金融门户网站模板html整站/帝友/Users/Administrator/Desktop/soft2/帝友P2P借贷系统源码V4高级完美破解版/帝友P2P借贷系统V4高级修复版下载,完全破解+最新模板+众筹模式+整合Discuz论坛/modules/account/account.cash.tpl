
	{if $magic.request.action==""}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">ȫ������</a></li> 
<li><a href="{$_A.query_url_all}&status=0">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=3">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=1">���ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=2" >���δͨ��</a></li>
</ul> 
<div class="module_add">
	<div class="module_title"><strong>���ֹ���</strong><div style="float:right"> <a href="{$_A.query_url_all}&type=excel&page={$magic.request.page|default:1}&username={$magic.request.username}&status={$magic.request.status}">������ǰ</a> <a href="{$_A.query_url_all}&type=excel&username={$magic.request.username}&status={$magic.request.status}">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
<form action="" method="post" >
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">�û�����</td>
			<td class="main_td">��ʵ����</td>
			<td class="main_td">��������</td>
			<td class="main_td">�����˺�</td>
			<td class="main_td">�����ܶ�</td>
			<td class="main_td">���˽��</td>
			<td class="main_td">������</td>
			<td class="main_td">����ʱ��</td>
			<td class="main_td">״̬</td>
			<td class="main_td">����</td>
		</tr>
		{ list module="account" function="GetCashList" var="loop" username="request" status="request" dotime1=request dotime2=request}
			{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>{$item.username}</a></td>
			<td >{ $item.realname}</td>
			<td >{ $item.bank}</td>
			<td >{ $item.bank_id}</td>
			<td >{ $item.total}</td>
			<td >{ $item.credited}</td>
			<td >{ $item.fee}</td>	
			<td >{ $item.addtime|date_format:"Y-m-d H:i"}</td>
			<td >{if $item.status==1}�ɹ�{elseif $item.status==2}ʧ��{elseif $item.status==3}�����{else}�����{/if}</td>
			<td ><a href="{$_A.query_url}/cash&action=view&id={$item.id}">���/�鿴</a></td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
		�����ֽ�{$loop.all_total|default:0.00}Ԫ �������ѣ�{$loop.all_fee|default:0.00}Ԫ
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="0" {if $magic.request.status==0 && $magic.request.status!=''} selected="selected"{/if}>�����</option><option value="3" {if $magic.request.status==3} selected="selected"{/if}>�����</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="2" {if $magic.request.status=="2"} selected="selected"{/if}>δͨ��</option></select> ����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			{$loop.pages|showpage} 
			</td>
		</tr>
		{/list}
	</form>	
</table>
<!--���ּ�¼�б� ����-->
	{else}
	

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>�������/�鿴</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$_A.account_cash_result.user_id}&type=scene",700,400,"true","","true","text");'>{ $_A.account_cash_result.username}</a>
		</div>
	</div>

	<div class="module_border">
		<div class="l">�������У�</div>
		<div class="c">
			{ $_A.account_cash_result.bank }
		</div>
	</div>

	<div class="module_border">
		<div class="l">�����˺ţ�</div>
		<div class="c">
			{ $_A.account_cash_result.bank_id }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����ܶ</div>
		<div class="c">
			{ $_A.account_cash_result.total }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���˽�</div>
		<div class="c">
			{ $_A.account_cash_result.credited }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʣ�</div>
		<div class="c">
			{ $_A.account_cash_result.fee }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		{if $_A.account_cash_result.status==0}�������{elseif $_A.account_cash_result.status==1} ������ͨ�� {elseif $_A.account_cash_result.status==2}��˲�ͨ��{elseif $_A.account_cash_result.status==3}���ͨ��_������{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			{ $_A.account_cash_result.addtime|date_format:'Y-m-d H:i:s'}/{ $_A.account_cash_result.addip}</div>
	</div>
	
	{if $_A.account_cash_result.status==0 ||  $_A.account_cash_result.status==3}
	<div class="module_title"><strong>��˴�������Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
	   <input type="radio" name="status" value="0" checked="checked"/>�����
		 <input type="radio" name="status" value="3" {if $_A.account_cash_result.status==3}checked="checked"{/if}/>���ͨ��_������  
		
		 <input type="radio" name="status" value="1"/>������ <input type="radio" name="status" value="2" />��˲�ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<input type="text" name="credited" value="{ $_A.account_cash_result.credited}" size="10">��һ�����ͨ���������ٽ����޸ģ�
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">����:</div>
		<div class="c">
			<input type="text" name="fee" value="{ $_A.account_cash_result.fee}" size="5">
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5">{ $_A.account_result.verify_remark}</textarea>
		</div>
	</div>
<div class="module_border" >
		<div class="l">��֤�룺</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="submit"  name="reset" value="��˴�������Ϣ" />
	</div>
	{else}
	<div class="module_border">
		<div class="l">�����Ϣ��</div>
		<div class="c">
			����ˣ�{ $_A.account_cash_result.verify_username },���ʱ�䣺{ $_A.account_cash_result.verify_time|date_format:"Y-m-d H:i" },��˱�ע��{ $_A.account_cash_result.verify_remark}
		</div>
	</div>
	{/if}
	</form>
</div>
{literal}
<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['verify_remark'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '��ע������д' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>
{/literal}
	
	{/if}