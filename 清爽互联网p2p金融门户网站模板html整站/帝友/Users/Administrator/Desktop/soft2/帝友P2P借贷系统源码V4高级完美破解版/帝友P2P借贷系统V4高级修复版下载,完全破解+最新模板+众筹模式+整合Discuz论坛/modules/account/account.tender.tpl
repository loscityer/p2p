
{if $magic.request.action==""}
<div class="module_add">
	<div class="module_title"><strong><font color="#FF0000">{$magic.request.username}</font>Ͷ�ʼ�¼</strong><div style="float:right"> <a href="{$_A.query_url_all}&type=excel&page={$magic.request.page|default:1}&username={$magic.request.username}&borrow_name={$magic.request.borrow_name}&borrow_nid={$magic.request.borrow_nid}&status={$magic.request.status}">������ǰ</a> <a href="{$_A.query_url_all}&type=excel&username={$magic.request.username}&borrow_name={$magic.request.borrow_name}&borrow_nid={$magic.request.borrow_nid}&status={$magic.request.status}">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">Ͷ����</td>
			<td class="main_td">Ͷ�ʽ��</td>
			<td class="main_td">Ͷ��ʱ��</td>
			<td class="main_td">Ͷ��״̬</td>
			<td width="" class="main_td">���״̬</td>
			<td class="main_td">����</td>
			<td class="main_td">����ʶ��</td>
			<td width="" class="main_td">����ܶ�</td>
			<td class="main_td">�Զ�Ͷ��</td>
		</tr>
		{ list  module="borrow" function="GetTenderList" var="loop"  borrow_name="request" status="request"  borrow_nid="request"  username="request" query_type=$_A.query_type }
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{ $item.id}</td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>��{$item.account}</td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.status|linkages:"borrow_tender_status"}</td>
			<td>{$item.tender_status|linkages:"borrow_tender_verify_status"}</td>
			<td><a href="{$_A.admin_url}&q=code/borrow&view={$item.borrow_nid}">{$item.borrow_name}</a></td>
			<td>{$item.borrow_nid}</td>
			<td>��{$item.borrow_account}</td>
			<td>{$item.auto_status|linkages:"borrow_tender_auto_status"}</td>
		</tr>
		{ /foreach}
		<tr>
		<td colspan="9" class="action">
		<div class="floatl">
			Ͷ���ܶ{$loop.account_tender}Ԫ 	Ԥ�ƻ�����棺{$loop.recover_account_interest}Ԫ
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="borrow_name" id="borrow_name" value="{$magic.request.borrow_name}" size="8"/> �û�����<input type="text" name="username" id="username" value="{$magic.request.username}" size="8"/>����ţ�<input type="text" name="borrow_nid" id="borrow_nid" value="{$magic.request.borrow_nid}" size="8"/> ״̬<select id="status"  name="status"><option value="">ȫ��</option><option value="1" {if $magic.request.status==1} selected="selected"{/if}>��ͨ��</option><option value="0" {if $magic.request.status=="0"} selected="selected"{/if}>δͨ��</option></select>  <input type="submit" value="����" class="submit" >
			 
			
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

{/if}