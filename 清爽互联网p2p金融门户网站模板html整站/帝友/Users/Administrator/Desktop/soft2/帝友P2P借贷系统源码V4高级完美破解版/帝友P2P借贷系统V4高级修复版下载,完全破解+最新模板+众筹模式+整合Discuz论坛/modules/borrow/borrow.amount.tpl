{if $magic.request.examine==""}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/amount" id="c_so">����б�</a></li> 
<li><a href="{$_A.query_url}/amount_apply">������</a></li> 
<li><a href="{$_A.query_url}/amount_log">��ȼ�¼</a></li> 
<li><a href="{$_A.query_url}/amount_type">�������</a></li> 
</ul> 
{/if}

{if $_A.query_type == "amount"}

<div class="module_add">
	
	
	<div class="module_title"><strong>�û�����б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">�û���</td>
		<td width="" class="main_td" colspan="3" align="center">�����</td>
		<td width="" class="main_td" colspan="3" align="center">���������</td>
		<td width="" class="main_td" colspan="3" align="center">����Ͷ�ʶ��</td>
	</tr>
	<tr >
		<td width="" class="main_td"></td>
		<td width="*" class="main_td">�ܶ�� =</td>
		<td width="" class="main_td">���ö�� +</td>
		<td width="*" class="main_td">�����ö��</td>
		<td width="*" class="main_td">�ܶ�� =</td>
		<td width="" class="main_td">���ö�� +</td>
		<td width="*" class="main_td">�����ö��</td>
		<td width="*" class="main_td">�ܶ�� =</td>
		<td width="" class="main_td">���ö�� +</td>
		<td width="*" class="main_td">�����ö��</td>
	</tr>
	{list module="borrow" function="GetAmountList" var="loop" username=request epage=20}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.borrow_amount}</td>
		<td class="main_td1" align="center">{$item.borrow_amount_use}</td>
		<td class="main_td1" align="center">{$item.borrow_amount_nouse}</td>
		<td class="main_td1" align="center">{$item.vouch_borrow}</td>
		<td class="main_td1" align="center">{$item.vouch_borrow_use}</td>
		<td class="main_td1" align="center">{$item.vouch_borrow_nouse}</td>
		<td class="main_td1" align="center">{$item.vouch_tender}</td>
		<td class="main_td1" align="center">{$item.vouch_tender_use}</td>
		<td class="main_td1" align="center">{$item.vouch_tender_nouse}</td>
	</tr>
	{/foreach}
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>

{elseif $_A.query_type == "amount_type"}

<div class="module_add">
	<div class="module_title"><strong>�������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.amount_type_result.id}" />�޸����� ��<a href="{$_A.query_url_all}">���</a>��{else}�������{/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.amount_type_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">������ͣ�</div>
		<div class="c">
			{input type='select' value='$_A.borrow_amount_type' name='amount_type' checked='$_A.amount_type_result.amount_type'}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ͱ�ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="{$_A.amount_type_result.nid}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ȼ��㣺</div>
		<div class="c">
			��ʼ<input type="text" name="default" value="{$_A.amount_type_result.default}" style="width:35px; overflow:hidden"/> + <select name="credit_nid"><option value="">��</option>{loop module="credit" function="GetClassList" limit="all"}<option value="{$var.nid}" {if $_A.amount_type_result.credit_nid==$var.nid} selected="selected"{/if}>{$var.name}</option>
		
			{/loop}
			</select>*<input type="text" name="multiples" value="{$_A.amount_type_result.multiples}" style="width:25px; overflow:hidden"/>����+����
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.amount_type_result.remark}</textarea>
		</div>
	</div>
	

	<div class="module_border_ajax" >
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
	
	
	<div class="module_title"><strong>��������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">��ʼ���</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">���ֱ���</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="borrow" function="GetAmountTypeList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.amount_type|in_array:"$_A.borrow_amount_type"}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{$item.default}</td>
		<td class="main_td1" align="center">{$item.credit_name|default:-}</td>
		<td class="main_td1" align="center">{$item.multiples}</td>
		<td class="main_td1" align="center">{$item.remark}</td>
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


{elseif $_A.query_type == "amount_apply"}
{literal}
<script>
function CheckExamine(){
	if ($("#verify_remark").val()==""){
		alert("��ע����Ϊ��");
		return false;
	}
}
</script>
{/literal}
{if $magic.request.examine!=""}
<div  style="height:305px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" onsubmit="return CheckExamine()">
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		{input type="radio" name="status" value='1|���ͨ��,2|��˲�ͨ��' }
	</div>
	
	<div class="module_border_ajax">
		<div class="l">����:</div>
		<div class="c">
		{if $_A.amount_apply_result.oprate=="add"}����{else}����{/if}
	</div>
	<div class="module_border_ajax">
		<div class="l">������:</div>
		<div class="c">
		{$_A.amount_apply_result.amount_account}
	</div>
	<div class="module_border_ajax">
		<div class="l">ͨ�����:</div>
		<div class="c">
		<input type="text" value="{$_A.amount_apply_result.amount_account}" name="account" />
	</div>
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark"  id="verify_remark" cols="45" rows="7">{$_A.amount_apply_result.verify_remark}</textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="user_id" value="{$_A.amount_apply_result.user_id}" />
		<input type="hidden" name="nid" value="{$_A.amount_apply_result.nid}" />
		<input type="hidden" name="id" value="{$magic.request.examine}" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ�����" />
	</div>
	
</form>
</div>
{else}


<div class="module_add">
	<div class="module_title"><strong>����û����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	{if $magic.request.user_id==""}
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>�����û�</strong>(����˳���������)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<input type="text" name="username" />
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
	<form action="" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>����û����</strong><input type="hidden" name="user_id" value="{$magic.request.user_id}" /></div>
	
	<div class="module_border">
	<div class="l">�� �� �� ��</div>
		<div class="c">
			{$_A.users_result.username}
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="l">������ͣ�</div>
		<div class="c">
			{input type='select' value='$_A.borrow_amount_type' name='amount_type' checked='1'}
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">������</div>
		<div class="c">
			{input type="radio" value="add|����,reduce|����" name="oprate" checked="$_A.amount_apply_result.oprate"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ȣ�</div>
		<div class="c">
			<input type="text" name="amount_account" value="{$_A.amount_apply_result.amount_account}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������Ϣ��</div>
		<div class="c">
			<textarea name="content" cols="30" rows="4">{$_A.amount_apply_result.content}</textarea>
		</div>
	</div>
	
	<div class="module_border" >
	<div class="l">�� ֤ �� ��</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	{/if}
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>�û���������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">ͨ�����</td>
		<td width="*" class="main_td">��ע</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="borrow" function="GetAmountApplyList" var="loop" user_id=request  username=request  epage=8 }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.amount_type|in_array:"$_A.borrow_amount_type"}</td>
		<td class="main_td1" align="center">{if $item.oprate=="add"}����{else}����{/if}</td>
		<td class="main_td1" align="center">{$item.amount_account}</td>
		<td class="main_td1" align="center">{$item.account}</td>
		<td class="main_td1" align="center">{$item.content}</td>
		<td class="main_td1" align="center">{if $item.status==0}�����{elseif $item.status==1}���ͨ��{else}��˲�ͨ��{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center">{if $item.status==0}<a href="javascript:void(0)" onclick='tipsWindown("����û�������","url:get?{$_A.query_url_all}&examine={$item.id}",500,330,"true","","false","text");'/>���</a>{else}-{/if}</td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			<script>
			  var url = '{$_A.query_url_all}';
				{literal}
				function amount_sou(){
					var username = $("#username").val();
					location.href=url+"&username="+username;
				}
			  </script>
			  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}" size="7"/>  <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="amount_sou()">
			</div>
			</td>
		</tr>
		
	<tr align="center">
		<td colspan="14" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
<!--�˵��б� ����-->
</div>
</div>

{/if}

{elseif $_A.query_type == "amount_log"}
	<div class="module_add">
	<div class="module_title"><strong>��ȼ�¼�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">��ע</td>
		<td width="*" class="main_td">ʱ��</td>
	</tr>
	{ list module="borrow" function="GetAmountLogList" var="loop" user_id=request  username=request  amount_type=request epage=20}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.amount_type|in_array:"$_A.borrow_amount_type"}</td>
		<td class="main_td1" align="center">{$item.type}</td>
		<td class="main_td1" align="center">{if $item.oprate=="add"}����{else}����{/if}</td>
		<td class="main_td1" align="center">{$item.account}</td>
		<td class="main_td1" align="center">{$item.remark}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			���ӵĶ�ȣ�{$loop.oprate_add|default:0} ���ٵĶ�ȣ�{$loop.oprate_reduce|default:0}
			<script>
			  var url = '{$_A.query_url_all}';
				{literal}
				function amount_sou(){
					var username = $("#username").val();
					var amount_type = $("#amount_type").val();
					location.href=url+"&username="+username+"&amount_type="+amount_type;
				}
			  </script>
			  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}" size="7"/>  ������ͣ�{input type='select' value='$_A.borrow_amount_type' name='amount_type' checked='$magic.request.amount_type' default="ȫ��"} <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="amount_sou()">
			</div>
			</td>
		</tr>
		
	<tr align="center">
		<td colspan="14" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
<!--�˵��б� ����-->
</div>
{/if}