
<div class="module_add">
	<div class="module_title"><strong><font color="#FF0000">{$magic.request.username}</font>{$MsgInfo.account_name_log}</strong><div style="float:right"> <a href="{$_A.query_url_all}&type=excel&page={$magic.request.page|default:1}&username={$magic.request.username}&dotime1={$magic.request.dotime1}&dotime2={$magic.request.dotime2}">������ǰ</a> <a href="{$_A.query_url_all}&type=excel&username={$magic.request.username}&dotime1={$magic.request.dotime1}&dotime2={$magic.request.dotime2}">����ȫ��</a>&nbsp;&nbsp;&nbsp;</div></div>
</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td class="main_td">ID</td>
			<td class="main_td">�û���</td>
			<td class="main_td">����</td>
			<td class="main_td">�������</td>
			<td class="main_td">���ý��</td>
			<td class="main_td">������</td>
			<td class="main_td">���ս��</td>
			<td class="main_td">�ʲ��ܶ�</td>
			<!--<td class="main_td">�ϴ��ʲ��ܶ�</td>-->
			<td class="main_td">�ۼƴ���</td>
			<td class="main_td">�ۼ�֧��</td>



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
			<td >��{$item.balance}</td>	
			<td >{if $item.frost>0}��{$item.frost}{else}-{/if}</td>	
			<td >{if $item.await>0}��{$item.await}{else}-{/if}</td>							
			<td >��{$item.total}</td>
			<!--<td >��{$item.total_old}</td>-->
			<td >{if $item.income>0}��{$item.income}{else}-{/if}</td>
			<td >{if $item.expend>0}��{$item.expend}{else}-{/if}</td>



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
