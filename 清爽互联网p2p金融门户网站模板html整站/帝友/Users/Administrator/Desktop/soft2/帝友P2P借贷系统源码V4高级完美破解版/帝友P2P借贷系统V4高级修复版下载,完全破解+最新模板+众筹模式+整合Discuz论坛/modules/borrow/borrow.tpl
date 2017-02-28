
{if $magic.request.view !="" }
{include file="borrow.view.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "shenqing" }
	{include file="borrow.shenqing.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "raise" || $_A.query_type == "raise_add"  || $_A.query_type == "raise_edit" || $_A.query_type == "raise_tender"}
	{include file="borrow.raise.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "first" }
	{include file="borrow.first.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "repay" || $_A.query_type == "bad_account"}
	{include file="borrow.repay.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "borrow_repay" }
	{include file="borrow.borrow_repay.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "full" }
	{include file="borrow.full.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "tender" }
	{include file="borrow.tender.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "fengxianchi" }
	{include file="borrow.fengxianchi.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "change" || $_A.query_type == "web_repay_no"}
	{include file="borrow.change.tpl" template_dir = "modules/borrow"}

{elseif $_A.query_type == "tool"}
	{include file="borrow.tool.tpl" template_dir = "modules/borrow"}
{elseif $_A.query_type == "new" || $_A.query_type == "edit"}
<div class="module_add">
	{if $magic.request.user_id==""}
	<form name="form1" method="post" action="" enctype="multipart/form-data" >
	<div class="module_title"><strong>���������Ϣ���û�����ID</strong></div>
	

	<div class="module_border">
		<div class="l">�û�ID��</div>
		<div class="c">
			<input type="text" name="user_id"  class="input_border"  size="20" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username"  class="input_border"  size="20" />
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
	</div>
	</form>
	{else}
	<div class="module_title"><strong>����û���Ϣ</strong></div>
	
	<form name="form1" method="post" action=""  enctype="multipart/form-data" onsubmit="return check_form();" >
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			{$_A.borrow_result.username}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����;��</div>
		<div class="c">
		{linkages nid="borrow_use" value="$_A.borrow_result.borrow_use" name="borrow_use"  }
			 <span >˵�����ɹ���ľ�����;��</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="c">
			{linkages nid="borrow_time_limit" value="$_A.borrow_result.borrow_period" name="borrow_period" type="value" }<span >���ɹ���,�����Լ����µ�ʱ���������� </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʽ��</div>
		<div class="c">
			{linkages nid="borrow_style" value="$_A.borrow_result.borrow_style" name="borrow_style" type="value" }
		<span >�����ȷ��ڻ�����ָ�����߽��ɹ���,ÿ�»�Ϣ������������</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="c"><input type="text" name="account" value="{$_A.borrow_result.account}"  size="10"/>
<span >�����Ӧ��500Ԫ��50,000Ԫ֮�䡣���ױ��־�Ϊ����ҡ�</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����ʣ�</div>
		<div class="c">
			<input type="text" name="borrow_apr" value="{$_A.borrow_result.borrow_apr}" /> % <span >�����ȷ��ڻ�����ָ�����߽��ɹ���,ÿ�»�Ϣ������������</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ͷ���</div>
		<div class="c">
			{linkages nid="borrow_lowest_account" value="$_A.borrow_result.tender_account_min" name="tender_account_min" type="value" }
		<span >����Ͷ���߶�һ�������Ͷ���ܶ�����ơ�</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���Ͷ���ܶ</div>
		<div class="c">
			{linkages nid="borrow_most_account" value="$_A.borrow_result.tender_account_max" name="tender_account_max" type="value" }
			<span >���ô˴ν�����ʵ����������ʽ��ȴﵽ100%��ֱ�ӽ�����վ�ĸ���</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��Чʱ�䣺</div>
		<div class="c">
			{linkages nid="borrow_valid_time" value="$_A.borrow_result.borrow_valid_time" name="borrow_valid_time" type="value" }
			 <span>���ô˴ν�����ʵ����������ʽ��ȴﵽ100%��ֱ�ӽ�����վ�ĸ��� </span>
		</div>
	</div>
	<div class="module_title"><strong>���ý���</strong></div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="0" {if $_A.borrow_result.award_status==0 || $_A.borrow_result.award_status==""} checked="checked"{/if}>�����ý���</div>
		<div class="c">
			 <span>����������˽��������ᶳ�����ʻ�����Ӧ���˻������Ҫ���ý�������ȷ�������ʻ����㹻 ���˻��� </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w"><input type="radio" name="award_status" value="1" {if $_A.borrow_result.award_status==1 } checked="checked"{/if}/>���̶�����̯������</div>
		<div class="c">
			<input type="text" name="award_account" value="{$_A.borrow_result.award_account}" size="5" />Ԫ <span>���ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%�����뱣������Ԫ��Ϊ��λ���������ñ��α��Ҫ����������Ͷ���û����ܽ�  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w"><input type="radio" name="award_status" value="2" {if $_A.borrow_result.award_status==2 } checked="checked"{/if}/>��Ͷ�������������</div>
		<div class="c">
			<input type="text" name="award_scale" value="{$_A.borrow_result.award_scale}" size="5" />%  <span>��Χ��0.1%~2% ���������ñ��α��Ҫ����������Ͷ���û��Ľ���������  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w"><input type="checkbox" name="award_false" value="1" {if $_A.borrow_result.award_false==1 } checked="checked"{/if}/>���ʧ��ʱҲͬ��������</div>
		<div class="c">
			  <span>�������ѡ�˴�ѡ�����δ�������ʧ��ʱͬ���ά����Ͷ���û������û�й�ѡ�����ʧ��ʱ��ѽ������ⶳ���˻���   </span>
		</div>
	</div>
	
	<div class="module_title"><strong>�ʻ���Ϣ����</strong></div>
	<div class="module_border">
		<div class="w">�����ҵ��ʻ��ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_account" value="1" {if $_A.borrow_result.open_account==1 } checked="checked"{/if}/> <span> ��������ϴ�ѡ�����ʵʱ�������ʻ��ģ��˻��ܶ�����������ܶ  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">�����ҵĽ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_borrow" value="1" {if $_A.borrow_result.open_borrow==1 } checked="checked"{/if}/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�����ܶ�ѻ����ܶδ�����ܶ�ٻ��ܶ�����ܶ </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">�����ҵ�Ͷ���ʽ������</div>
		<div class="c">
			<input type="checkbox" name="open_tender" value="1" {if $_A.borrow_result.open_tender==1 } checked="checked"{/if}/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�Ͷ���ܶ���ջ��ܶ���ջ��ܶ  </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="w">�����ҵ����ö�������</div>
		<div class="c">
			<input type="checkbox" name="open_credit" value="1" {if $_A.borrow_result.open_credit==1 } checked="checked"{/if}/> <span>��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�������ö�ȡ�������ö�ȡ�  </span>
		</div>
	</div>
	
	<div class="module_title"><strong>��ϸ��Ϣ</strong></div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.borrow_result.name}" size="50" /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��Ϣ��</div>
		<div class="c">
			
		</div>
	</div>
	<!--�������� ����-->
		
	<div class="module_submit" >
		{if $_A.query_type == "edit"}<input type="hidden"  name="borrow_nid" value="{$_A.borrow_result.borrow_nid}" />{/if}
		<input type="hidden" name="status" value="{ $_A.borrow_result.status }" />
		<input type="hidden"  name="user_id" value="{$magic.request.user_id}" />
		<input type="hidden"  name="vouch_status" value="{$_A.borrow_result.vouch_status}" />
		<input type="hidden"  name="vouch_award_scale" value="{$_A.borrow_result.vouch_award_scale}" />
		<input type="hidden"  name="vouch_users" value="{$_A.borrow_result.vouch_users}" />
		<input type="submit"  name="submit" value="ȷ���ύ" />
		<input type="reset"  name="reset" value="���ñ�" />
	</div>
	</form>
	
	
	{/if}
</div>
{literal}
<script>


function check_form(){
	 var frm = document.forms['form1'];
	 var name = frm.elements['name'].value;
	 var award = frm.elements['award'].value;
	 var part_account = frm.elements['part_account'].value;
	 var errorMsg = '';
	  if (name.length == 0 ) {
		errorMsg += '���������д' + '\n';
	  }
	   if (award ==1 && part_account<5) {
		errorMsg += '��������С��5Ԫ' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>
{/literal}
{elseif $_A.query_type == "view"}

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
{elseif $_A.query_type=="list" ||  $_A.query_type=="wait"||  $_A.query_type=="success"||  $_A.query_type=="false"||  $_A.query_type=="full_check" ||  $_A.query_type=="full_success" ||  $_A.query_type=="full_false" ||  $_A.query_type=="cancel"}

{if $magic.request.check!=""}
{elseif $magic.request.full!=""}
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&full={$magic.request.full}" >
	<div class="module_border_ajax">
		<div class="l">���״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="3"/>����ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="reverify_remark" cols="45" rows="7">{ $_A.borrow_result.reverify_remark}</textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" alt="���ˢ��" id="valicode" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>
{elseif $magic.request.view!=""}

{else}
<div class="module_add">
	<div class="module_title"><strong>{$_A.query_type|linkages:"borrow_query_type"}</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td"><input type="checkbox" name="check_all"  /></td>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�������</td>
			{if $_A.query_type=="success"}
			<td width="" class="main_td">��Ͷ���</td>
			<td width="" class="main_td">Ͷ�ʴ���</td>
			{/if}
			<td width="" class="main_td">���ʽ</td>
			<td width="" class="main_td">�������</td>
			<!--<td width="" class="main_td">����</td>-->
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">�鿴</td>
			
		</tr>
		{ list  module="borrow" function="GetList" var="loop" borrow_name="request"  borrow_nid="request" username="request" query_type=$_A.query_type }
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td><input type="checkbox" name="check_all[]" value="{$item.id}"  /></td>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",600,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.borrow_nid}</td>
			<td title="{$item.name}"><a href="{$_A.query_url}&view={$item.borrow_nid}">{$item.name|truncate:10}</a></td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.borrow_apr}%</td>
			<td>{$item.borrow_period}����</td>
			{if $_A.query_type=="success"}
			<td width="" class="main_td">��{$item.borrow_account_yes}</td>
			<td width="" class="main_td">{$item.tender_times}��</td>
			{/if}
			<td>{$item.borrow_style|linkages:"borrow_style"}</td>
			<td>{if $item.vouchstatus==1}<font color="#FF0000">��������</font>{elseif $item.is_flow==1}<font color="#FF0000">��ת���</font>{elseif $item.is_jin==1}<font color="#FF0000">��ֵ���</font>{elseif $item.fast_status==1}<font color="#FF0000">��Ѻ���</font>{else}��ͨ����{/if}</td>
			<!--<td>{$item.borrow_flag|linkages:"borrow_flag"}</td>-->
			<td>{$item.status|linkages:"borrow_status"}</td>
			<td title="{$item.name}"><a href="{$_A.query_url_all}&view={$item.borrow_nid}">�鿴</a></td>
			
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			<input type="submit" value="ȷ���ύ" class="submit"/>
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="borrow_name" id="borrow_name" value="{$magic.request.borrow_name}" size="8"/> �û�����<input type="text" name="username" id="username" value="{$magic.request.username}" size="8"/>����ţ�<input type="text" name="borrow_nid" id="borrow_nid" value="{$magic.request.borrow_nid}" size="8"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δͨ��</option></select> <select id="is_vouch" ><option value="">ȫ��</option><option value="1" {if $magic.request.is_vouch==1} selected="selected"{/if}>������</option><option value="0" {if $magic.request.is_vouch=="0"} selected="selected"{/if}>��ͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}{$_A.site_url}')">
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
{/if}

{elseif $_A.query_type=="tender1"}


{elseif $_A.query_type=="cancel_list"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">���û���</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">����״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		{ foreach  from=$_A.borrow_list key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",600,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.credit.approve_credit}��</td>
			<td title="{$item.name}">{$item.name|truncate:10}</td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.borrow_apr}%</td>
			<td>{$item.borrow_period}����</td>
			<td>{if $item.vouchstatus==1}<font color="#FF0000">��������</font>{elseif $item.is_flow==1}<font color="#FF0000">��ת���</font>{elseif $item.is_jin==1}<font color="#FF0000">��ֵ���</font>{elseif $item.fast_status==1}<font color="#FF0000">��Ѻ���</font>{else}��ͨ����{/if}</td>
			
			<td>{$item.cancel_time|date_format}</td>
			<td>{if $item.cancel_status ==2}<font color="#FF0000">������</font>{else}�ѳ���{/if}</td>
			
			<td>{ if $item.cancel_status ==2 }<a href="{$_A.query_url}/cancel_edit{$_A.site_url}&user_id={$item.user_id}&id={$item.id}">���</a>{else}-{/if}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			<input type="submit" value="ȷ���ύ" class="submit"/>
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δͨ��</option></select> <select id="is_vouch" ><option value="">ȫ��</option><option value="1" {if $magic.request.is_vouch==1} selected="selected"{/if}>������</option><option value="0" {if $magic.request.is_vouch=="0"} selected="selected"{/if}>��ͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}{$_A.site_url}')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>

{elseif $_A.query_type=="full"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">���û���</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">Ͷ�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����</td>
		</tr>
		{ foreach  from=$_A.borrow_list key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",600,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.credit_jifen}</td>
			<td title="{$item.name}">{$item.name|truncate:10}</td>
			<td>{$item.account}Ԫ</td>
			<td>{$item.borrow_apr}%</td>
			<td>{$item.tender_times|default:0}</td>
			<td>{$item.borrow_period}����</td>
			<td>{if $item.status==3}������ɹ�{elseif $item.status==4}�����ʧ��{else}���������{/if}</td>
			<td><a href="{$_A.query_url}/full_view{$_A.site_url}&user_id={$item.user_id}&borrow_nid={$item.borrow_nid}">���</a></td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/><input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/full&status=1{$_A.site_url}')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>
{elseif $_A.query_type == "full_view" }
<div class="module_add">
	<div class="module_title"><strong>������������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$_A.borrow_result.user_id}&type=scene",600,400,"true","","true","text");'>	{$_A.borrow_result.username}</a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʵ������</div>
		<div class="c">
			{$_A.borrow_result.realname}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���⣺</div>
		<div class="c">
			{$_A.borrow_result.name}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="h">
			��{$_A.borrow_result.account}
		</div>
		<div class="l">�����ʣ�</div>
		<div class="h">
			{$_A.borrow_result.borrow_apr} %
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="h">
			{$_A.borrow_result.borrow_period}����
		</div>
		<div class="l">�����;��</div>
		<div class="h">
			{$_A.borrow_result.borrow_use|linkage:}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="h">
			{$_A.borrow_result.borrow_style|linkage:"borrow_style"}
		</div>
	</div>
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">

		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="*" class="main_td">���û���</td>
			<td width="" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">��Ч���</td>
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">Ͷ������</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
		</tr>
		{ foreach  from=$_A.borrow_tender_list key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",600,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>{$item.credit_jifen}��</td>
			<td>{$item.account_tender}Ԫ</td>
			<td><font color="#FF0000">{$item.account}Ԫ</font></td>
			<td>{if $item.account == $item.account_tender}ȫ��ͨ��{else}����ͨ��{/if}</td>
			<td>{$item.contents}</td>
			<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
		</tr>
		{ /foreach}
		<tr>
			<td colspan="9" class="page">
			{$key+1}��Ͷ�� 
			</td>
		</tr>
</table>

	</div>
	{if $_A.borrow_result.vouch_status==1}
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">

		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">������</td>
			<td width="*" class="main_td">������Ч���</td>
			<td width="" class="main_td">Ͷ�ʵ������</td>
			<td width="" class="main_td">������������</td>
			<td width="" class="main_td">�����������</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">����ʱ��</td>
		</tr>
		{ foreach  from=$_A.borrow_vouch_result key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",600,400,"true","","true","text");'>	{ $item.username}</a></td>
			<td>��{ $item.account}</td>
			<td>��{ $item.account_vouch}</td>
			<td>{ $item.award_scale}%</td>
			<td>��{ $item.award_account}</td>
			<td>{ $item.contents}</td>
			<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
		</tr>
		{ /foreach}
		<tr>
			<td colspan="9" class="page">
			{$key+1}������ 
			</td>
		</tr>
</table>

	</div>
	{/if}
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�ƻ�������</td>
			<td width="*" class="main_td">ÿ�ڻ��Ϣ</td>
			<td width="" class="main_td">ÿ�ڻ����</td>
			<td width="" class="main_td">ÿ�ڻ�����Ϣ</td>
		</tr>
		{ foreach  from=$_A.borrow_repayment key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $key+1}</td>
			<td >{$item.repay_time|date_format:"Y-m-d"}</td>
			<td>��{$item.account_all}</td>
			<td>��{$item.account_capital}</td>
			<td>��{$item.account_interest}</td>
		</tr>
		{ /foreach}
</table>

	</div>
	{ if $_A.borrow_result.status==1}
	<div class="module_title"><strong>��˴˽��</strong></div>
	<form name="form1" method="post" action="" >
	<div class="module_border">
		<div class="l">״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="3"/>����ͨ�� <input type="radio" name="status" value="4"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="reverify_remark" cols="45" rows="5">{ $_A.borrow_result.reverify_remark}</textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>&nbsp;<img id="valicode" src="/?plugins&q=imgcode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="{ $_A.borrow_result.id }" />
		<input type="hidden" name="borrow_nid" value="{ $_A.borrow_result.borrow_nid}" />
		
		<input type="submit"  name="reset" value="��˴˽���" class="submit" />
	</div>
	
</form>
	{/if}
	<div class="module_title"><strong>������ϸ����</strong></div>
	<div class="module_border">
		<div class="l">Ͷ�꽱����</div>
		<div class="h">
			{if $_A.borrow_result.award_status==0}�޽���{elseif $_A.borrow_result.award_status==1}��{$_A.borrow_result.award_account}Ԫ{else}����{$_A.borrow_result.award_scale}%{/if}
		</div>
		<div class="l">Ͷ��ʧ���Ƿ�����</div>
		<div class="h">
			{if $_A.borrow_result.award_false==1}��{else}��{/if}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.addtime|date_format:"Y-m-d H:i:s"}
		</div>
		<div class="l">�б�ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.verify_time|date_format:"Y-m-d H:i:s"}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���ݣ�</div>
		<div class="hb" >
			<table><tr><td align="left">{$_A.borrow_result.borrow_contents}</td></tr></table>
		</div>
	</div>
	
</div>
<!---�ѻ���--->
{elseif $_A.query_type=="repayment"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
		</tr>
		{ foreach  from=$_A.borrow_list key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td class="main_td1" align="center">{$item.borrow_username}</td>
			<td title="{$item.borrow_name}"><a href="/invest/a{$item.borrow_nid}.html" target="_blank">{$item.borrow_name|truncate:10}</a></td>
			<td>{$item.repay_period+1 }/{$item.borrow_period }</td>
			<td>{$item.repay_time|date_format:"Y-m-d"}</td>
			<td>{$item.repay_account  }Ԫ</td>
			<td>{$item.repay_yestime|date_format:"Y-m-d"|default:-}</td>
			<td>{if $item.repay_status==1}<font color="#006600">�ѻ�</font>{else}<font color="#FF0000">δ��</font>{/if}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			����ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2}" id="dotime2" size="15" onclick="change_picktime()"/>  �û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/>�ؼ��֣�
			<input type="text" name="keywords" id="keywords" value="{$magic.request.keywords}"/><select id="status" name="status" >
			<option value="">����</option>
			<option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ѻ�</option>
			<option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δ��</option>
			</select><input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/repayment{$_A.site_url}')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>


<!---����--->
{elseif $_A.query_type=="liubiao"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">������</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">�����</td>
			<td width="" class="main_td">��Ͷ���</td>
			<td width="" class="main_td">��ʼʱ��</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">״̬</td>
		</tr>
		{ foreach  from=$_A.borrow_list key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}</td>
			<td class="main_td1" align="center">{$item.username}</td>
			<td title="{$item.borrow_name}"><a href="/invest/a{$item.borrow_nid}.html" target="_blank">{$item.name|truncate:10}</a></td>
			<td>{$item.borrow_period }����</td>
			<td>{$item.account }Ԫ</td>
			<td>{$item.borrow_account_yes }Ԫ</td>
			<td>{$item.verify_time|date_format:"Y-m-d"}</td>
			<td>{$item.verify_time+$item.borrow_valid_time*24*60*60|date_format:"Y-m-d"}</td>
			<td><a href="{$_A.query_url}/liubiao_edit&borrow_nid={$item.borrow_nid}{$_A.site_url}">�޸�</a></td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/>�ؼ��֣�<input type="text" name="keywords" id="keywords" value="{$magic.request.keywords}"/><select id="status" >
			<option value="">����</option>
			<option value="1" {if $magic.request.status==1} selected="selected"{/if}>�ѻ�</option>
			<option value="0" {if $magic.request.status==0} selected="selected"{/if}>δ��</option>
			</select><input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/repayment{$_A.site_url}')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>


<!--������ ��ʼ-->
{elseif $_A.query_type=="liubiao_edit"}
<div class="module_title"><strong>�������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			{$_A.borrow_result.username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div >
			<a href="/invest/a{$_A.borrow_result.id}.html" target="_blank">{$_A.borrow_result.name}</a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="h">
			{$_A.borrow_result.account}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ѽ��ȣ�</div>
		<div class="h">
			{$_A.borrow_result.borrow_account_yes}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.verify_time|date_format}
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.verify_time+$_A.borrow_result.borrow_valid_time*24*60*60|date_format}
		</div>
	</div>
	<div class="module_title"><strong>���</strong></div>
	<form method="post" action="">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div >
			<input type="radio" name="status" value="1" />���귵�ؽ��<input type="radio" name="status" value="2" checked="checked" />�ӳ��������
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ӳ�������</div>
		<div >
			<input type="text" name="days" value="" size="5" value="0" />��
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="submit" value="ȷ�����" class="submit"/>
		</div>
	</div>
	</form>



<!--������ ��ʼ-->
{elseif $_A.query_type=="cancel_edit"}
<div class="module_title"><strong>�������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			{$_A.borrow_result.username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���⣺</div>
		<div >
			<a href="/invest/a{$_A.borrow_result.id}.html" target="_blank">{$_A.borrow_result.name}</a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="h">
			{$_A.borrow_result.account}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�ѽ��ȣ�</div>
		<div class="h">
			{$_A.borrow_result.borrow_account_yes}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ɣ�</div>
		<div class="h">
			{$_A.borrow_result.cancel_remark}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_result.cancel_time|date_format}
		</div>
	</div>
	
	<div class="module_title"><strong>���</strong></div>
	<form method="post" action="{$_A.query_url}/cancel_edit{$_A.site_url}&user_id={$_A.borrow_result.user_id}&borrow_nid={$_A.borrow_result.borrow_nid}">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div >
			<input type="radio" name="cancel_status" value="3" />��ͬ��<input type="radio" name="cancel_status" value="1" checked="checked" />ͬ�⳷��
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ԭ��</div>
		<div >
			<input type="text" name="cancel_verify_remark" value="" size="20" value="0" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="submit" value="ȷ�����" class="submit"/>
		</div>
	</div>
	</form>


<!--���� ��ʼ-->
{elseif $_A.query_type=="late"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<td width="*" class="main_td">������</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">Ӧ��ʱ��</td>
			<td width="" class="main_td">��������</td>
			<td width="" class="main_td">Ӧ�����</td>
			<td width="" class="main_td">���ڷ���</td>
			<td width="" class="main_td">�߽ɷ�</td>
			<td width="" class="main_td">�ܻ���</td>
			<td width="" class="main_td">��վ�������</td>
			<td width="" class="main_td">��վ�Ƿ����</td>
			<td width="" class="main_td">����</td>
		</tr>
		{ foreach  from=$_A.borrow_repayment_list key=key item=item}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td >{ $item.borrow_username}</td>
			<td><a href="/invest/a{$item.borrow_nid}.html" target="_blank">{$item.borrow_name}</a></td>
			<td>{$item.repay_period+1}/{$item.borrow_period}</td>
			<td>{if $item.vouchstatus==1}<font color="#FF0000">��������</font>{elseif $item.is_flow==1}<font color="#FF0000">��ת���</font>{elseif $item.is_jin==1}<font color="#FF0000">��ֵ���</font>{elseif $item.fast_status==1}<font color="#FF0000">��Ѻ���</font>{else}��ͨ����{/if}</td>
			<td >{$item.repay_time|date_format:"Y-m-d"}</td>
			<td >{$item.late_days}��</td>
			<td >��{$item.repay_account }</td>
			<td >��{$item.late_interest}</td>
			<td >��{$item.late_reminder}</td>
			<td >��{$item.late_reminder+$item.late_interest+$item.repay_account}</td>
			<td >��{$item.repay_capital }</td>
			<td >{if $item.repay_web==1}�Ѵ���{else}δ����{/if}</td>
			<td >{if $item.status==2}<font color="#FF0000">�Ѵ���</font>{else}{if $item.late_days>0}<a href="{$_A.query_url}/late_repay{$_A.site_url}&id={$item.id}">����</a>{else}-{/if}{/if}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> ״̬<select id="status" ><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δͨ��</option></select> <input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/late')">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			{$_A.showpage} 
			</td>
		</tr>
	</form>	
</table>
<!--���� ����-->


<!--������ ��ʼ-->
{elseif $_A.query_type=="amount_view"}
<div class="module_title"><strong>������</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="h">
			{$_A.borrow_amount_result.username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="h">
			{if $_A.borrow_amount_result.type=="tender_vouch"}<font color="#FF0000">Ͷ�ʵ������</font>{elseif $_A.borrow_amount_result.type=="borrow_vouch"}<font color="#FF0000">�������</font>{else}���ö��{/if}
		</div>
	</div>
	<div class="module_border">
		<div class="l">ԭ����</div>
		<div class="h">
			{$_A.borrow_amount_result.account_old|default:0}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����ȣ�</div>
		<div class="h">
			{$_A.borrow_amount_result.account}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ݣ�</div>
		<div class="h">
			{$_A.borrow_amount_result.content}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="h">
			{$_A.borrow_amount_result.remark}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="h">
			{$_A.borrow_amount_result.addtime|date_format}
		</div>
	</div>
	<div class="module_title"><strong>���</strong></div>
	<form method="post" action="">
	<div class="module_border">
		<div class="l">���״̬��</div>
		<div class="h">
			<input type="radio" name="status" value="1" />ͨ��  <input type="radio" name="status" value="0" checked="checked" />��ͨ��
		</div>
	</div>
	<div class="module_border">
		<div class="l">ͨ����ȣ�</div>
		<div class="h">
			<input type="text" name="account" value="{$_A.borrow_amount_result.account}" />
			<input type="hidden" name="type" value="{ $_A.borrow_amount_result.type}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��˱�ע��</div>
		<div >
			<textarea name="verify_remark" rows="5" cols="40" ></textarea>
		</div>
	</div>
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="submit" value="ȷ�����" class="submit"/>
		</div>
	</div>
	</form>


<!--ͳ�� ��ʼ-->
{elseif $_A.query_type=="amount" || $_A.query_type=="amount_type" || $_A.query_type=="amount_apply" || $_A.query_type=="amount_log"}
	{include file="borrow.amount.tpl" template_dir="modules/borrow"}


<!--ͳ�� ��ʼ-->
{elseif $_A.query_type=="tongji"}

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
	  {foreach from="$_A.account_tongji" key=key  item="item"}
		<tr >
			<td width="*" class="main_td">��������</td>
			<td width="*" class="main_td">{$key}</td>
			<td width="" class="main_td">���</td>
		</tr>
		{foreach from="$item" key="_key" item="_item"}
		<tr  class="tr2">
			<td >{$_item.type_name}</td>
			<td >{$_item.type}</td>
			<td >��{$_item.num}</td>
		</tr>
		{/foreach}
	{/foreach}
	</form>	
</table>
<!--ͳ�� ����-->
{/if}
