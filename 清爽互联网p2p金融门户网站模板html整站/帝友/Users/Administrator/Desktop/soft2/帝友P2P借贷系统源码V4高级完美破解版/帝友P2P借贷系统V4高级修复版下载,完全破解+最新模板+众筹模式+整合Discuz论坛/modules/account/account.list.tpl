
<div class="module_add">
	<div class="module_title"><strong>�˺���Ϣ����</strong><div style="float:right"> <a href="{$_A.query_url_all}&type=excel&page={$magic.request.page|default:1}&username={$magic.request.username}&epage=2">������ǰ</a> <a href="{$_A.query_url_all}&type=excel&username={$magic.request.username}">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
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
		{ list module="account" function="GetList"  var="loop" username=request }
		{foreach from=$loop.list item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td >{$item.id}</td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=code/users/view&user_id={$item.user_id}&type=scene",700,400,"true","","true","text");'>{$item.username}</a></td>
			<td >��{$item.total}</td>
			<td >��{$item.balance}</td>
			<td >��{$item.frost}</td>
			<td >��{$item.await}</td>
			<td ><a href="{$_A.query_url}/recharge&username={$item.username}">��ֵ��¼</a> <a href="{$_A.query_url}/cash&username={$item.username}">���ּ�¼</a> <a href="{$_A.query_url}/log&username={$item.username}">�ʽ��¼</a>  <a href="{$_A.query_url}/tender&username={$item.username}">Ͷ���¼</a> <a href="{$_A.query_url}/exit&username={$item.username}" style="color:#FF0000">�޸��ʽ�</a></td>
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

