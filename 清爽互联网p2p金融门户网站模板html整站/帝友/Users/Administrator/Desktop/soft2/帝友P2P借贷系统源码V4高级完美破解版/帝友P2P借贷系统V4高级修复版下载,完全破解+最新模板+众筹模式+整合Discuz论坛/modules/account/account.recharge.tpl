
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">{$MsgInfo.account_name_recharge}</a></li> 
<li><a href="{$_A.query_url_all}&status=0">{$MsgInfo.account_name_recharge_verify}</a></li> 
<li><a href="{$_A.query_url_all}&status=1">{$MsgInfo.account_name_recharge_success}</a></li> 
<li><a href="{$_A.query_url_all}&status=2" >{$MsgInfo.account_name_recharge_false}</a></li>
</ul> 

{if $magic.request.view!=""}

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��ֵ�鿴</strong></div>

	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_username}��</div>
		<div class="c">
		
			
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$_A.account_recharge_result.user_id}&type=scene",700,400,"true","","true","text");'>{ $_A.account_recharge_result.username}</a>
			
		</div>
	</div>

	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_type}��</div>
		<div class="c">
			{if $_A.account_recharge_result.type==1}���ϳ�ֵ{elseif $_A.account_recharge_result.type==0}�ֶ���ֵ{else}���³�ֵ{/if}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_nid}��</div>
		<div class="c">
			{ $_A.account_recharge_result.nid }
		</div>
	</div>
	

	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_payment}��</div>
		<div class="c">
			{ $_A.account_recharge_result.payment_name|default:"-"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_money}��</div>
		<div class="c">
			��{ $_A.account_recharge_result.money }
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">
		{if $_A.account_recharge_result.type==2}
		{$MsgInfo.account_name_recharge_jiangli}��
		{else}
		{$MsgInfo.account_name_recharge_fee}��
		{/if}
		
		</div>
		<div class="c">
			��{ $_A.account_recharge_result.fee }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_balance}��</div>
		<div class="c">
			��{ $_A.account_recharge_result.balance }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_remark}��</div>
		<div class="c">
		{ $_A.account_recharge_result.remark }
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_status}��</div>
		<div class="c">
		{if $_A.account_recharge_result.status==0}�����{elseif $_A.account_recharge_result.status==1}ͨ��{else}ʧ��{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_addtime}/{$MsgInfo.account_name_addip}:</div>
		<div class="c">
			{ $_A.account_recharge_result.addtime|date_format:'Y-m-d H:i:s'}/{ $_A.account_recharge_result.addip}</div>
	</div>
	
	{if $_A.account_recharge_result.status==0 || ($_A.account_recharge_result.status==2 && $_A.account_recharge_result.type!=2)}
	<div class="module_title"><strong>��˴˳�ֵ��Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
	<input type="radio" name="status" value="1"/>��ֵ�ɹ�   <input type="radio" name="status" value="2"  checked="checked"/>��ֵʧ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<input type="text" name="balance" value="{ $_A.account_recharge_result.balance }" size="15" readonly="">��һ�����ͨ���������ٽ����޸ģ�
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5">{ $_A.account_recharge_result.verify_remark}</textarea>
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="nid" value="{ $_A.account_recharge_result.nid }" />
		
		<input type="submit"  name="reset" value="��˴˳�ֵ��Ϣ" />
	</div>
	{else}
		{if $_A.account_recharge_result.type==2 }
	<div class="module_border">
		<div class="l">����ˣ�</div>
		<div class="c">
			{ $_A.account_recharge_result.verify_username }
		</div>
	</div>
	<div class="module_border" >
		<div class="l">���ʱ��:</div>
		<div class="c">
			{ $_A.account_recharge_result.verify_time|date_format:"Y-m-d H:i" }
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			{ $_A.account_recharge_result.verify_remark}
		</div>
	</div>
	{else}
	
	<div class="module_border" >
		<div class="l">������Ϣ:</div>
		<div class="c">
			{ $_A.account_recharge_result.return}
		</div>
	</div>
	{/if}
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

{else}
<div class="module_add">
	<div class="module_title"><strong><font color="#FF0000">{$magic.request.username} </font>��ֵ��¼</strong><div style="float:right"> <a href="{$_A.query_url_all}&type_e=excel&page={$magic.request.page|default:1}&username={$magic.request.username}&status={$magic.request.status}&type={$magic.request.type}">������ǰ</a> <a href="{$_A.query_url_all}&type_e=excel&username={$magic.request.username}&status={$magic.request.status}&type={$magic.request.type}">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">�û���</td>
			<td class="main_td">���׺�</td>
			<td class="main_td">����</td>
			<td class="main_td">��ֵ����</td>
			<td class="main_td">��ֵ���</td>
			<td class="main_td">��ֵ������<br />
/��ֵ����</td>
			<td class="main_td">ʵ�ʵ��˽��</td>
			<td class="main_td">״̬</td>
			<td class="main_td"><a href="{$_A.query_url_all}&username={$magic.request.username}&email={$magic.request.email}&status={$magic.request.status}&order={if $magic.request.order=="addtime_up"}addtime_down{else}addtime_up{/if}">����ʱ��</a></td>
			<td class="main_td">����IP</td>
			<td class="main_td">����</td>
		</tr>
		{ list module="account" function="GetRechargeList" var="loop" username=request type=request email=request status=request order=request dotime2=request dotime1=request excel="request"}
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>{$item.username}</a></td>
			<td >{ $item.nid}</td>
			<td  nowrap="nowrap">{$item.type|linkages:"account_recharge_type"}</td>
			<td >{ $item.payment_name|default:"�ֶ���ֵ"}</td>
			<td >��{ $item.money}</td>
			<td  nowrap="nowrap">{if $item.type==2}<font color="#FF0000">�� </font>{/if}��{ $item.fee}</td>
			<td ><font color="#FF0000">��{$item.balance}</font></td>
			<td  nowrap="nowrap">{$item.status|linkages:"account_recharge_status"}</td>
			<td  nowrap="nowrap">{ $item.addtime|date_format:"Y-m-d H:i"}</td>
			<td  nowrap="nowrap">{ $item.addip}</td>
			<td  nowrap="nowrap">{if $item.status==0}<a href="{$_A.query_url}/recharge&view={$item.id}"><font color="#FF0000">���</font></a>{else}<a href="{$_A.query_url}/recharge&view={$item.id}">�鿴</a>{/if}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="13" class="action">
		<div class="floatl">
		��ֵ�ܽ�{$loop.all_balance|default:0.00}Ԫ ��ֵ�������ѣ�{$loop.all_fee|default:0.00}Ԫ
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ����{linkages name="type" nid="account_recharge_type" type="value" value="$magic.request.type" default="����"} ״̬<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ɹ�</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>���</option><option value="2" {if $magic.request.status=="2"} selected="selected"{/if}>ʧ��</option></select> ����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr align="center">
		<td colspan="13" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	
	{ /list}
	</form>	
</table>
{/if}

