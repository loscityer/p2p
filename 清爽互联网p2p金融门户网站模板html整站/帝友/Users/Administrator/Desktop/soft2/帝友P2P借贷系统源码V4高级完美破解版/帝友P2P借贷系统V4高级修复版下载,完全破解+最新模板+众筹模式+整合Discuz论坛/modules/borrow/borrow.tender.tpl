
{if $magic.request.cancel!=""}
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&cancel={$magic.request.cancel}" >
	
	
	<div class="module_border_ajax" >
		<div class="l">��������:</div>
		<div class="c">
			<textarea name="remark" cols="45" rows="7">{ $_A.borrow_result.reverify_remark}</textarea><br />�뽫���ص�����д���
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="tender_nid" value="{ $magic.request.cancel}" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>
{elseif $magic.request.id!=""}

<div class="module_add" >
	
	<div class="module_title"><strong>Ͷ����ϸ��Ϣ</strong></div>


	<div class="module_border">
		<div class="l">Ͷ���ˣ�</div>
		<div class="r">
		<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$_A.borrow_tender_result.user_id}&type=scene",700,400,"true","","true","text");'>	{$_A.borrow_tender_result.username}</a>
		</div>
		<div class="s"></div>
		<div class="c">
			
		</div>
	</div>
	

	<div class="module_border">
		<div class="l">Ͷ��״̬��</div>
		<div class="r">
			{$_A.borrow_tender_result.status|linkages:"borrow_tender_status"}<!--{if $_A.borrow_tender_result.status==1 && $_A.borrow_tender_result.tender_status==0} <input type="button"  src="{$_A.tpldir}/images/button.gif" align="absmiddle" value="Ͷ�ʳ���" class="submit_button" onclick='tipsWindown("Ͷ�ʳ���","url:get?{$_A.query_url_all}&cancel={$_A.borrow_tender_result.id}",500,230,"true","","false","text");'/>{/if}-->
		</div>
		<div class="s">���״̬��</div>
		<div class="c">
			{$_A.borrow_tender_result.tender_status|linkages:"borrow_tender_verify_status"} 
		</div>
	</div>
	{if $_A.borrow_tender_result.tender_status==1} 
	<div class="module_title"><strong>Ͷ�ʳɹ���Ϣ</strong></div>
	<div class="module_border">
		<div class="l">Ͷ�ʽ�</div>
		<div class="r">
		��{$_A.borrow_tender_result.account_tender}
		</div>
		<div class="s">�տ��ܶ</div>
		<div class="c">
			<strong>��{$_A.borrow_tender_result.account}</strong>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����ܶ</div>
		<div class="r">
		��{$_A.borrow_tender_result.account_tender}
		</div>
		<div class="s">δ���ܶ</div>
		<div class="c">
			<strong>��{$_A.borrow_tender_result.account}</strong>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ձ���</div>
		<div class="r">
		��{$_A.borrow_tender_result.account_tender}
		</div>
		<div class="s">δ�ձ���</div>
		<div class="c">
			<strong>��{$_A.borrow_tender_result.account}</strong>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������Ϣ��</div>
		<div class="r">
		��{$_A.borrow_tender_result.account_tender}
		</div>
		<div class="s">δ����Ϣ��</div>
		<div class="c">
			<strong>��{$_A.borrow_tender_result.account}</strong>
		</div>
	</div>
	{/if}
	<div class="module_border">
		<div class="l">Ͷ�ʽ�</div>
		<div class="r">
		��{$_A.borrow_tender_result.account_tender}
		</div>
		<div class="s">ʵͶ��</div>
		<div class="c">
			<font color="#FF0000"><strong>��{$_A.borrow_tender_result.account}</strong></font>
		</div>
	</div>
	
	

	<div class="module_border">
		<div class="l">�Ƿ��Զ�Ͷ�꣺</div>
		<div class="r">
		{$_A.borrow_tender_result.auto_status|linkages:"borrow_tender_auto_status"}
		</div>
		<div class="s">Ͷ�����ɣ�</div>
		<div class="c">
			{$_A.borrow_tender_result.contents}
		</div>
	</div>
	
	

	<div class="module_border">
		<div class="l">Ͷ��ʱ�䣺</div>
		<div class="r">
		{$_A.borrow_tender_result.addtime|date_format}
		</div>
		<div class="s">Ͷ��IP��</div>
		<div class="c">
			{$_A.borrow_tender_result.addip}
		</div>
	</div>
	
	
	<div class="module_title"><strong>�����ϸ��Ϣ</strong></div>
	<div class="module_border">
		
		<div class="l">���⣺</div>
		<div class="r">
			<strong><a href="{$_A.query_url}&view={$_A.borrow_tender_result.borrow_nid}">{$_A.borrow_tender_result.borrow_name}</a></strong>
		</div>
		
		<div class="s">����ţ�</div>
		<div class="c">
			{$_A.borrow_tender_result.borrow_nid}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="r">
			��{$_A.borrow_tender_result.borrow_account}
		</div>
		<div class="s">�����;��</div>
		<div class="c">
			{$_A.borrow_tender_result.borrow_use|linkages:"borrow_use"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="r">
			{$_A.borrow_tender_result.borrow_flag|linkages:"borrow_flag"|default:"-"}
		</div>
		
		<div class="s">���ʽ��</div>
		<div class="c">
			{$_A.borrow_tender_result.borrow_style|linkages:"borrow_style"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="r">
				{$_A.borrow_tender_result.borrow_period}����
		</div>
		
		<div class="s">�����ʣ�</div>
		<div class="c">
			{$_A.borrow_tender_result.borrow_apr} %
		</div>

	</div>
</div>

<div class="module_add">
	<div class="module_title"><strong>{$_A.borrow_tender_result.borrow_name}</strong> Ͷ���б�</div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="*" class="main_td">Ͷ����</td>
			<td width="*" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
			<td width="" class="main_td">���״̬</td>
			<td width="" class="main_td">Ͷ��״̬</td>
			<td width="" class="main_td">Ͷ������</td>
			<td width="" class="main_td">�Զ�Ͷ��</td>
			<td width="" class="main_td">�鿴</td>
		</tr>
		{ loop  module="borrow" function="GetTenderList" var="item" borrow_name="request"  username="request"  limit="all" borrow_nid=$_A.borrow_tender_result.borrow_nid}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>��{$item.account}</td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.status|linkages:"borrow_tender_status"}</td>
			<td>{$item.tender_status|linkages:"borrow_tender_verify_status"}</td>
			<td>{$item.contents|default:"-"}</td>
			<td>{$item.auto_status|linkages:"borrow_tender_auto_status"}</td>
			<td title="{$item.name}"><a href="{$_A.query_url_all}&id={$item.id}">�鿴</a></td>
			
		</tr>
		{ /loop}
	</form>	
</table>

{else}
<div class="module_add">
	<div class="module_title"><strong>Ͷ�ʹ���</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">Ͷ��ID</td>
			<td width="*" class="main_td">Ͷ����</td>
			<td width="*" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
			<td width="" class="main_td">Ͷ��״̬</td>
			<td width="" class="main_td">���״̬</td>
			<td width="" class="main_td">Ͷ������</td>
			<td width="*" class="main_td">����</td>
			<td width="" class="main_td">����ʶ��</td>
			<td width="" class="main_td">����ܶ�</td>
			<td width="" class="main_td">�Զ�Ͷ��</td>
			<td width="" class="main_td">�鿴</td>
		</tr>
		{ list  module="borrow" function="GetTenderList" var="loop" borrow_name="request"  borrow_nid="request" username="request" query_type=$_A.query_type }
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>��{$item.account}</td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.status|linkages:"borrow_tender_status"}</td>
			<td>{$item.tender_status|linkages:"borrow_tender_verify_status"}</td>
			<td>{$item.contents|default:"-"}</td>
			<td><a href="{$_A.admin_url}&q=code/borrow&view={$item.borrow_nid}">{$item.borrow_name}</a></td>
			<td>{$item.borrow_nid}</td>
			<td>��{$item.borrow_account}</td>
			<td>{$item.auto_status|linkages:"borrow_tender_auto_status"}</td>
			<td title="{$item.name}"><a href="{$_A.query_url_all}&id={$item.id}">�鿴</a></td>
			
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