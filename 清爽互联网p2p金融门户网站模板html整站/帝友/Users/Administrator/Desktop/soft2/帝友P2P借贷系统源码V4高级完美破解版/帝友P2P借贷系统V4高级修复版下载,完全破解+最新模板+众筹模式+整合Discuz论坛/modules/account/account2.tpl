

{if $_A.query_type=="list"}
<div class="module_add">
	<div class="module_title"><strong>�˺���Ϣ����</strong><div style="float:right"> <a href="{$_A.query_url_all}&type=excel&page={$magic.request.page|default:0}">������ǰ</a> <a href="{$_A.query_url_all}&type=excel">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">�û���</td>
			<td class="main_td">�ܽ�� </td>
			<td class="main_td">���ý�� </td>
			<td class="main_td">������ </td>
			<td class="main_td">���ս��</td>
			<td class="main_td">����</td>
		</tr>
		{ list module="account" function="GetList" var="loop" username=request }
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{$item.id}</td>
			<td>{$item.username}</td>
			<td >��{$item.total}</td>
			<td >��{$item.balance}</td>
			<td >��{$item.frost}</td>
			<td >��{$item.await}</td>
			<td ><a href="{$_A.query_url}/recharge&username={$item.username}">��ֵ��¼</a> <a href="{$_A.query_url}/cash&username={$item.username}">���ּ�¼</a> <a href="{$_A.query_url}/log&username={$item.username}">�ʽ��¼</a></td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="12" class="action">
			�ܼƣ�����+���ᣩ��{$loop.all_account|default:0.00}Ԫ
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="12" class="page">
			{$loop.pages|showpage} 
			</td>
		</tr>
		{/list}
	</form>	
</table>


<!--��ֵ��¼�б� ��ʼ-->
{elseif $_A.query_type=="recharge"}
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
			{ $_A.account_recharge_result.username}
		</div>
	</div>

	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_type}��</div>
		<div class="c">
			{$_A.account_recharge_result.type|linkages:"account_recharge_type"}
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
			{ $_A.account_recharge_result.payment_name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_recharge_money}��</div>
		<div class="c">
			��{ $_A.account_recharge_result.money }
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">	{if $_A.account_recharge_result.type==2}
		{$MsgInfo.account_name_recharge_jiangli}��
		{else}
		{$MsgInfo.account_name_recharge_fee}��
		{/if}</div>
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
		{$_A.account_recharge_result.status|linkages:"account_recharge_status"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_addtime}/{$MsgInfo.account_name_addip}:</div>
		<div class="c">
			{ $_A.account_recharge_result.addtime|date_format:'Y-m-d H:i:s'}/{ $_A.account_recharge_result.addip}</div>
	</div>
	
	{if $_A.account_recharge_result.status==0  }
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
	<div class="module_title"><strong><font color="#FF0000">{$magic.request.username} </font>��ֵ��¼</strong>{if $magic.request.status==1}<input type="button" onclick="javascript:location.href='{$_A.query_url_all}&excel=1'" value="�����б�" />{/if}</div>
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
			<td class="main_td">��ֵ������</td>
			<td class="main_td">ʵ�ʵ��˽��</td>
			<td class="main_td">״̬</td>
			<td class="main_td"><a href="{$_A.query_url_all}&username={$magic.request.username}&email={$magic.request.email}&status={$magic.request.status}&order={if $magic.request.order=="addtime_up"}addtime_down{else}addtime_up{/if}">����ʱ��</a></td>
			<td class="main_td">����IP</td>
			<td class="main_td">��˱�ע</td>
			<td class="main_td">����</td>
		</tr>
		{ list module="account" function="GetRechargeList" var="loop" username=request email=request status=request order=request dotime2=request dotime1=request excel="request"}
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td><a href="{$_A.query_url}/recharge&username={$item.username}">{$item.username}</a></td>
			<td >{ $item.nid}</td>
			<td >{$item.type|linkages:"account_recharge_type"}</td>
			<td >{ $item.payment_name|default:"�ֶ���ֵ"}</td>
			<td >��{ $item.money}</td>
			<td >��{ $item.fee}</td>
			<td ><font color="#FF0000">��{$item.balance}</font></td>
			<td >{$item.status|linkages:"account_recharge_status"}</td>
			<td >{ $item.addtime|date_format:"Y-m-d H:i"}</td>
			<td >{ $item.addip}</td>
			<td >{ $item.verify_remark|default:-}</td>
			<td >{if $item.status==0}<a href="{$_A.query_url}/recharge&view={$item.id}"><font color="#FF0000">���</font></a>{else}<a href="{$_A.query_url}/recharge&view={$item.id}">�鿴</a>{/if}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="13" class="action">
		<div class="floatl">
		��ֵ�ܽ�{$loop.all_balance|default:0.00}Ԫ ��ֵ�������ѣ�{$loop.all_fee|default:0.00}Ԫ 
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ɹ�</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>���</option><option value="2" {if $magic.request.status=="2"} selected="selected"{/if}>ʧ��</option></select> ����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
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

{elseif $_A.query_type=="log"}
<div class="module_add">
	<div class="module_title"><strong><font color="#FF0000">{$magic.request.username}</font>{$MsgInfo.account_name_log}</strong><div style="float:right"> <a href="{$_A.query_url_all}&type=excel&page={$magic.request.page|default:0}">������ǰ</a> <a href="{$_A.query_url_all}&type=excel">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">�û���</td>
			<td class="main_td">����</td>
			<td class="main_td">�������</td>
			<td class="main_td">�ʲ��ܶ�</td>
			<!--<td class="main_td">�ϴ��ʲ��ܶ�</td>-->
			<td class="main_td">�ۼƴ���</td>
			<td class="main_td">�ۼ�֧��</td>
			<td class="main_td">������</td>
			<td class="main_td">���ս��</td>
			<td class="main_td">���ý��</td>
			<!--<td class="main_td">�����ֽ��</td>
			<td class="main_td">�������ֽ��</td>-->
			<td class="main_td">����ʱ��</td>
		</tr>
		{ list module="account" function="GetLogList" var="loop" username=request email=request status=request order=request dotime1="request" dotime2="request"}
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td><a href="{$_A.query_url}/log&username={$item.username}">{$item.username}</a></td>
			<td>{$item.type|linkages:"account_type"}</td>
			<td >��{$item.money}</td>
			<td >��{$item.total}</td>
			<!--<td >��{$item.total_old}</td>-->
			<td >{if $item.income>0}��{$item.income}{else}-{/if}</td>
			<td >{if $item.expend>0}��{$item.expend}{else}-{/if}</td>
			<td >{if $item.frost>0}��{$item.frost}{else}-{/if}</td>
			<td >{if $item.await>0}��{$item.await}{else}-{/if}</td>
			<td >��{$item.balance}</td>
			<!--<td >��{$item.balance_cash}</td>
			<td >��{$item.balance_frost}</td>-->
			<td >��{$item.addtime|date_format:"Y-m-d"}</td>
		</tr>
		{ /foreach}
		<tr>
			<td colspan="14" class="action">
			<div class="floatl">
			
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/>
				����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
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



{elseif $_A.query_type=="web"}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">��վ����</a></li> 
<li><a href="{$_A.query_url}/web_account">��վ�渶</a></li> 
<li><a href="{$_A.query_url}/web_repay">��վӦ����ϸ��</a></li>
</ul> 
<div class="module_add">
	<div class="module_title"><strong>{$MsgInfo.account_name_balances}</strong><input type="button" onclick="javascript:location.href='{$_A.query_url_all}&excel=1'" value="�����б�" /></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">{$MsgInfo.account_name_id}</td>
			<td class="main_td">����</td>
			<td class="main_td">{$MsgInfo.account_name_money}</td>
			<td class="main_td">{$MsgInfo.account_name_income}</td>
			<td class="main_td">{$MsgInfo.account_name_expend}</td>
			<td class="main_td">{$MsgInfo.account_name_remark}</td>
			<td class="main_td">{$MsgInfo.account_name_addtime}</td>
			<td class="main_td">{$MsgInfo.account_name_addip}</td>
		</tr>
		{ list module="account" function="GetBalanceList" var="loop" username=request type="request" dotime1="request" dotime2="request"}
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td >{ $item.type|linkages:"account_web_fee"}</td>
			<td >��{$item.money}</td>
			{if $item.type=="recharge"}
			<td >��{$item.income}</td>
			<td >��{$item.expend}</td>
			{else}
			<td >��{$item.expend}</td>
			<td >��{$item.income}</td>
			{/if}
			<td >{$item.remark}{$item.username}</td>
			<td >{$item.addtime|date_format}</td>
			<td >{$item.addip}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="9" class="action">
		<div class="floatl">
			��������ܼƣ�{$loop.gongyijin}Ԫ
			�ܼƣ�{$loop.chengjiaofei|default:0}Ԫ
		</div>
		<div class="floatr">
			���ͣ�{linkages name="type" nid="account_web_fee" type="value" value="$magic.request.type" default="����"}
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/>
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			{$loop.pages|showpage} 
			</td>
		</tr>
		{/list}
	</form>	
</table>

{elseif $_A.query_type=="web_repay"}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/web" id="c_so">��վ����</a></li> 
<li><a href="{$_A.query_url}/web_account">��վ�渶</a></li>
<li><a href="{$_A.query_url_all}">��վӦ����ϸ��</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>��վӦ����ϸ��</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr class="ytit1" >
			<td  >������</td>
			<td  >Ӧ������</td>
			<td  >�����</td>
			<td  >�ڼ���/������</td>
			<td  >�渶���</td>
			<td  >Ӧ�ձ���</td>
			<td  >Ӧ����Ϣ</td>
			<td  >���ڷ�Ϣ</td>
			<td  >��������</td>
			<td  >״̬</td>
		</tr>
		{list module="borrow" var="loop" function ="GetRecoverList" showpage="3" keywords="request" dotime1="request" dotime2="request" borrow_status=3 type="web" order="recover_status" recover_status=request epage="15" showtype="web"}
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td  ><a href="/invest/a{$item.borrow_nid}.html" target="_blank" title="{$item.borrow_name}">{$item.borrow_name|truncate:8}</a></td>
			<td  >{$item.recover_time|date_format:"Y-m-d"}</td>
			<td  ><a href="/u/{$item.borrow_userid}" target="_blank">{$item.borrow_username}</a></td>
			<td  >{$item.recover_period+1}/{$item.borrow_period}</td>
			<td  >��{$item.recover_recover_account_yes}</td>
			<td  >��{$item.recover_capital  }</td>
			<td  >��{$item.recover_interest  }</td>
			<td  >��{$item.late_interest|default:0  }</td>
			<td  >{$item.late_days|default:0  }��</td>
			<td  >{if $item.recover_status==1}<font color="#666666">�ѻ�</font>{else}<font color="#FF0000">δ��</font>{/if}</td>
		</tr>
		{/foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			Ӧ���ܶ{$loop.all_capital|default:0.00}Ԫ
		</div>
		<div class="floatr">
			Ӧ��ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> ״̬��<select name="recover_status" id="recover_status"><option value="" {if $magic.request.recover_status==""}selected="selected"{/if}>����</option><option value="1" {if $magic.request.recover_status==1}selected="selected"{/if}>�ѻ�</option><option value="2" {if $magic.request.recover_status==2}selected="selected"{/if}>δ��</option></select> <input type="button" value="����" / onclick="sousuo()">
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

{elseif $_A.query_type=="web_account"}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/web" id="c_so">��վ����</a></li> 
<li><a href="{$_A.query_url_all}">��վ�渶</a></li>
<li><a href="{$_A.query_url}/web_repay">��վӦ����ϸ��</a></li> 
</ul> 
<div class="module_add">
	<div class="module_title"><strong>��վ�渶����</strong><input type="button" onclick="javascript:location.href='{$_A.query_url_all}&excel=1'" value="�����б�" /></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">�û���</td>
			<td class="main_td">����</td>
			<td class="main_td">��վ�渶���</td>
			<td class="main_td">��ע</td>
			<td class="main_td">���ʱ��</td>
			<td class="main_td">���IP</td>
		</tr>
		{list module="account" function="GetWebList" var="loop" type="request" dotime1="request" dotime2="request"}
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{$item.id}</td>
			<td >{$item.username|default:"��վ"}</td>
			<td >{$item.type|linkages:"account_web_type"}</td>
			<td >��{$item.money|round:"2,3"}</td>
			<td >{$item.remark}</td>
			<td >{$item.addtime|date_format}</td>
			<td >{$item.addip}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="7" class="action">
		<div class="floatl">
			�渶�ܼƣ�{$loop.all_money}Ԫ
		</div>
		<div class="floatr">
			���ͣ�{linkages name="type" nid="account_web_type" type="value" value="$magic.request.type" default="����"}
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>
			<input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="7" class="page">
			{$loop.pages|showpage} 
			</td>
		</tr>
		{/list}
	</form>	
</table>


{elseif $_A.query_type=="users"}
<div class="module_add">
	<div class="module_title"><strong>{$MsgInfo.account_name_users}</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">{$MsgInfo.account_name_id}</td>
			<td class="main_td">{$MsgInfo.account_name_username}</td>
			<td class="main_td">{$MsgInfo.account_name_type}</td>
			<!--<td class="main_td">{$MsgInfo.account_name_total}</td>-->
			<td class="main_td">{$MsgInfo.account_name_money}</td>
			<td class="main_td">{$MsgInfo.account_name_balance}</td>
			<td class="main_td">{$MsgInfo.account_name_income}</td>
			<td class="main_td">{$MsgInfo.account_name_expend}</td>
			<td class="main_td">����</td>
			<td class="main_td">����</td>
			<td class="main_td">��ע</td>
			<td class="main_td">{$MsgInfo.account_name_addtime}</td>
			<td class="main_td">{$MsgInfo.account_name_addip}</td>
		</tr>
		{ list module="account" function="GetUsersList" var="loop" username=request email=request status=request order=request type=request}
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td>{$item.username}</td>
			<td >{$item.type|linkages:"account_type"}</td>
			<!--<td >��{$item.total}</td>-->
			<td >��{$item.money}</td>
			<td >��{$item.balance}</td>
			<td >��{$item.income}</td>
			<td >��{$item.expend}</td>
			<td >��{$item.await}</td>
			<td >��{$item.frost}</td>
			<td >{$item.remark}</td>
			<td >{$item.addtime|date_format}</td>
			<td >{$item.addip}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="12" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			���ͣ�{linkages name="type" nid="account_type" value="$magic.request.type" type=value default="����"} �û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="12" class="page">
			{$loop.pages|showpage} 
			</td>
		</tr>
		{/list}
	</form>	
</table>

{elseif $_A.query_type=="bank"}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/bank">�û��˻���Ϣ</a></li> 
<li><a href="{$_A.query_url}/bank&action=bank">�����˻��б�</a></li> 
<li><a href="{$_A.query_url}/bank&action=new">��������˻�</a></li> 
</ul> 


{if $magic.request.action==""}

<div class="module_add">
	<div class="module_title"><strong>�û��˻���Ϣ</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	{if $magic.request.user_id==""}
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>�����û�</strong>(����˳���������)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username"  value="{$_A.user_result.username}"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���䣺</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	{else}
	
	<form action="{$_A.query_url_all}&user_id={$maigc.request.user_id}" method="post">
	<div class="module_title"><strong>�޸��û������˻�</strong></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			{$_A.account_bank_result.username}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʵ������</div>
		<div class="c">
			<a href="{$_A.admin_url}&q=code/approve/realname&user_id={$_A.account_bank_result.user_id}">{$_A.account_bank_result.realname|default:"δ��"}</a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ڵأ�</div>
		<div class="c">
			{areas type="p,c" value="$_A.account_bank_result.city"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������У�</div>
		<div class="c">
		{select table="account_bank" name="name" value="id" select_name="bank" selected="$_A.account_bank_result.bank"}
			
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">֧�У�</div>
		<div class="c">
			<input type="text" name="branch" value="{$_A.account_bank_result.branch}" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����˻���</div>
		<div class="c">
			<input type="text" name="account"   value="{$_A.account_bank_result.account}"/>
		</div>
	</div>
	
	<div class="module_submit"><input type="hidden" name="type" value="update" /><input type="hidden" name="user_id" value="{$magic.request.user_id}" /><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	
	{/if}
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	
	<div class="module_add">
		<div class="module_title"><strong>�û������˻��б�</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		  <form action="" method="post">
			<tr >
				<td class="main_td">ID</td>
				<td class="main_td">�û���</td>
				<td class="main_td">��ʵ����</td>
				<td class="main_td">��������</td>
				<td class="main_td">���ڵ�</td>
				<td class="main_td">֧��</td>
				<td class="main_td">�����˻�</td>
				<td class="main_td">����</td>
			</tr>
			{ list module="account" function="GetUsersBankList" var="loop" keywords="request"}
			{foreach from=$loop.list item="item"}
			<tr  {if $key%2==1} class="tr2"{/if}>
				<td >{ $item.id}</td>
				<td >{$item.username}</td>
				<td >{$item.realname}</td>
				<td >{$item.bank_name}</td>
				<td >{$item.province|areas} {$item.city|areas}</td>
				<td >{$item.branch}</td>
				<td >{$item.account}</td>
				<td ><a href="{$_A.query_url}/bank&user_id={$item.user_id}">�޸�</a> </td>
			</tr>
			{ /foreach}
			<tr>
			<td colspan="12" class="action">
			<div class="floatl">
			
			</div>
			<div class="floatr">
				���ƣ�<input type="text" name="keywords" id="keywords" value="{$magic.request.keywords}"/> <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
			<tr>
				<td colspan="9" class="page">
				{$loop.pages|showpage} 
				</td>
			</tr>
			{/list}
		</form>	
	</table>
</div>
{elseif $magic.request.action=="bank"}
	<div class="module_add">
		<div class="module_title"><strong>{$MsgInfo.account_name_bank_list}</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		  <form action="" method="post">
			<tr >
				<td class="main_td">ID</td>
				<td class="main_td">{$MsgInfo.account_name_bank_name}</td>
				<td class="main_td">{$MsgInfo.account_name_bank_status}</td>
				<td class="main_td">{$MsgInfo.account_name_bank_nid}</td>
				<td class="main_td">{$MsgInfo.account_name_bank_litpic}</td>
				<td class="main_td">{$MsgInfo.account_name_bank_cash_money}</td>
				<td class="main_td">{$MsgInfo.account_name_bank_reach_day}</td>
				<td class="main_td">{$MsgInfo.account_name_bank_manage}</td>
			</tr>
			{ list module="account" function="GetBankList" var="loop" keywords="request"}
			{foreach from=$loop.list item="item"}
			<tr  {if $key%2==1} class="tr2"{/if}>
				<td >{ $item.id}</td>
				<td >{$item.name}</td>
				<td >{$item.status|linkages:"account_bank_status"}</td>
				<td >{$item.nid}</td>
				<td >{$item.litpic}</td>
				<td >{$item.cash_money}</td>
				<td >{$item.reach_day}</td>
				<td ><a href="{$_A.query_url}/bank&action=edit&id={$item.id}">{$MsgInfo.linkages_name_edit}</a>  <a href="#" onClick="javascript:if(confirm('{$MsgInfo.account_name_bank_del_msg}')) location.href='{$_A.query_url}/bank&action=del&id={$item.id}'">{$MsgInfo.linkages_name_del}</a></td>
			</tr>
			{ /foreach}
			<tr>
			<td colspan="12" class="action">
			<div class="floatl">
			
			</div>
			<div class="floatr">
				���ƣ�<input type="text" name="keywords" id="keywords" value="{$magic.request.keywords}"/> <input type="button" value="����" / onclick="sousuo()">
			</div>
			</td>
		</tr>
			<tr>
				<td colspan="9" class="page">
				{$loop.pages|showpage} 
				</td>
			</tr>
			{/list}
		</form>	
	</table>

<!--��ӳ�ֵ��¼ ��ʼ-->
{elseif $magic.request.action == "new" || $magic.request.action == "edit"}

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>{$MsgInfo.account_name_bank_new}</strong></div>

	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_bank_name}��</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.account_bank_result.name}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_bank_status}��</div>
		<div class="c">
			{input name="status" type="radio" value="1|����,0|�ر�" checked="$_A.account_bank_result.status"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_bank_nid}��</div>
		<div class="c">
			<input type="text" name="nid"  value="{$_A.account_bank_result.nid}"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_bank_litpic}��</div>
		<div class="c">
			<input type="text" name="litpic"  value="{$_A.account_bank_result.litpic}"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_bank_cash_money}��</div>
		<div class="c">
			<input type="text" name="cash_money"  value="{$_A.account_bank_result.cash_money}"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">{$MsgInfo.account_name_bank_reach_day}��</div>
		<div class="c">
			<input type="text" name="reach_day"  value="{$_A.account_bank_result.reach_day}"/>
		</div>
	</div>
	
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="{$MsgInfo.account_name_submit}" />
	</div>
</form>
</div>
{/if}
<!--��ӳ�ֵ��¼ ����-->

<!--���ּ�¼�б� ��ʼ-->
{elseif $_A.query_type=="cash"}
	{if $magic.request.action==""}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">ȫ������</a></li> 
<li><a href="{$_A.query_url_all}&status=0">�����</a></li> 
<li><a href="{$_A.query_url_all}&status=1">���ͨ��</a></li> 
<li><a href="{$_A.query_url_all}&status=2" >���δͨ��</a></li>
</ul> 
<div class="module_add">
	<div class="module_title"><strong>���ֹ���</strong>{if $magic.request.status!="" && $magic.request.status==1 || $magic.request.status==0}<input type="button" onclick="javascript:location.href='{$_A.query_url_all}&excel=1'" value="�����б�" />{/if}</div>
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
			<td><a href="{$_A.query_url}/cash&username={$item.username}">{$item.username}</a></td>
			<td >{ $item.realname}</td>
			<td >{ $item.bank}</td>
			<td >{ $item.bank_id}</td>
			<td >{ $item.total}</td>
			<td >{ $item.credited}</td>
			<td >{ $item.fee}</td>	
			<td >{ $item.addtime|date_format:"Y-m-d H:i"}</td>
			<td >{if $item.status==0}�����{elseif  $item.status==1} ��ͨ�� {elseif $item.status==2}���ܾ�{/if}</td>
			<td ><a href="{$_A.query_url}/cash&action=view&id={$item.id}">���/�鿴</a></td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
		�����ֽ�{$loop.all_total|default:0.00}Ԫ �������ѣ�{$loop.all_fee|default:0.00}Ԫ
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δͨ��</option></select> ����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/> <input type="button" value="����" / onclick="sousuo()">
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
			{ $_A.account_cash_result.username}
		</div>
	</div>

	<div class="module_border">
		<div class="l">�������У�</div>
		<div class="c">
			{ $_A.account_cash_result.bank}
		</div>
	</div>

	<!--<div class="module_border">
		<div class="l">����֧�У�</div>
		<div class="c">
			{ $_A.account_cash_result.branch }
		</div>
	</div>-->

	<div class="module_border">
		<div class="l">�����˺ţ�</div>
		<div class="c">
			{ $_A.account_cash_result.bank_id }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����ܶ</div>
		<div class="c">
			{ $_A.account_cash_result.total }Ԫ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���˽�</div>
		<div class="c">
			{ $_A.account_cash_result.credited }Ԫ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ã�</div>
		<div class="c">
			{ $_A.account_cash_result.fee}Ԫ
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
		{if $_A.account_cash_result.status==0}���������{elseif $_A.account_cash_result.status==1} ������ͨ�� {elseif $_A.account_cash_result.status==2}���ֱ��ܾ�{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ��/IP:</div>
		<div class="c">
			{ $_A.account_cash_result.addtime|date_format:'Y-m-d H:i:s'}/{ $_A.account_cash_result.addip}</div>
	</div>
	
	{if $_A.account_cash_result.status==0}
	<div class="module_title"><strong>��˴�������Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		 <input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">���˽��:</div>
		<div class="c">
			<input type="text" name="credited" value="{ $_A.account_cash_result.credited}" size="10">Ԫ��һ�����ͨ���������ٽ����޸ģ�
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">����:</div>
		<div class="c">
			<input type="text" name="fee" value="{ $_A.account_cash_result.fee}" size="5">Ԫ
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
<!--��ֵ��¼�б� ����-->
<!--������� ��ʼ-->
{elseif $_A.query_type == "recharge_view"}


<!--��ӳ�ֵ��¼ ��ʼ-->
{elseif $_A.query_type == "recharge_new"}

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>��ӳ�ֵ</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			���³�ֵ<input type="hidden" name="type" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />
		</div>
	</div>
	
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="ȷ�ϳ�ֵ" />
	</div>
</form>
</div>

<!--��ӳ�ֵ��¼ ����-->




<!--��ӳ�ֵ��¼ ��ʼ-->
{elseif $_A.query_type == "deduct"}

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>���ÿ۳�</strong></div>

	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<select name="type">
				<option value="scene_account">�ֳ���֤����</option>
				<option value="vouch_advanced">�����渶�۷�</option>
				<option value="borrow_kouhui">����˷���ۻ�</option>
				<option value="account_other">����</option>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<input type="text" name="remark" />���磬�ֳ����ÿ۳�200Ԫ
		</div>
	</div>
	<div class="module_border">
		<div class="l">��֤�룺</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="ȷ���۳�" />
	</div>
</form>
</div>

<!--��ӳ�ֵ��¼ ����-->


{/if}
<script>
var url = '{$_A.query_url}/{$_A.query_type}';
{literal}
function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var email = $("#email").val();
	if (email!=""){
		sou += "&email="+email;
	}
	var status = $("#status").val();
	if (status!="" && status!=null){
		sou += "&status="+status;
	}
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var dotime2 = $("#dotime2").val();
	var type = $("#type").val();
	if (username!=null){
		 sou += "&username="+username;
	}
	if (keywords!=null){
		 sou += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 sou += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 sou += "&dotime2="+dotime2;
	}
	if (type!=null){
		 sou += "&type="+type;
	}
	var recover_status = $("#recover_status").val();
	if (recover_status!="" && recover_status!=null){
		sou += "&recover_status="+recover_status;
	}
	if (sou!=""){
	location.href=url+sou;
	}
}

</script>
{/literal}