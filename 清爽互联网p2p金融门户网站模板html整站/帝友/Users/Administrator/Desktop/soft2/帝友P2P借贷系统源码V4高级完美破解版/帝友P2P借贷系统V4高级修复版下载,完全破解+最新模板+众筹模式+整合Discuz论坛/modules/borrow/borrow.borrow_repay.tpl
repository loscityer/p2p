{if $_A.query_type == "borrow_repay"}
<div class="module_add">
	<div class="module_title"><strong>�����б�</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">Ͷ��ID</td>
			<td width="*" class="main_td">Ͷ����</td>
			<td width="*" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">�ѻ��Ϣ</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
			<td width="" class="main_td">Ͷ��״̬</td>

			<td width="*" class="main_td">����</td>
			<td width="" class="main_td">����ʶ��</td>
	
		</tr>
		{list module="borrow" function="GetTenderList" var="loop" borrow_nid="request"  username="request" borrow_name="request"}
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.id}<input type="hidden" name="id[]" value="{ $item.id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>	{$item.username}</a></td>
			<td>��{$item.account}</td>
				<td>��{$item.recover_account_yes }</td>
			<td>{$item.addtime|date_format}</td>
			<td>{$item.status|linkages:"borrow_tender_status"}</td>
			<td><a href="{$_A.admin_url}&q=code/borrow&view={$item.borrow_nid}">{$item.borrow_name}</a></td>
			<td>{$item.borrow_nid}</td>
			
		</tr>
		{ /foreach}
		<tr>
		<td colspan="15" class="action">
		<div class="floatl">
			
		</div>
		<div class="floatr">
			 ���⣺<input type="text" name="borrow_name" id="borrow_name" value="{$magic.request.borrow_name}" size="8"/> �û�����<input type="text" name="username" id="username" value="{$magic.request.username}" size="8"/>����ţ�<input type="text" name="borrow_nid" id="borrow_nid" value="{$magic.request.borrow_nid}" size="8"/>  <input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/first&status={$magic.request.status}')">
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
<script>

var urls = '{$_A.query_url}/borrow_repay';
{literal}
function sousuo(url){
	var sou = "";
	var username = $("#username").val();
	if (username!="" && username!=null){
		sou += "&username="+username;
	}

	var borrow_name = $("#borrow_name").val();
	if (borrow_name!="" && borrow_name!=null){
		sou += "&borrow_name="+borrow_name;
	}
	var borrow_nid = $("#borrow_nid").val();
	if (borrow_nid!="" && borrow_nid!=null){
		sou += "&borrow_nid="+borrow_nid;
	}

	
	
		location.href=urls+sou;
	
}
</script>
{/literal}
