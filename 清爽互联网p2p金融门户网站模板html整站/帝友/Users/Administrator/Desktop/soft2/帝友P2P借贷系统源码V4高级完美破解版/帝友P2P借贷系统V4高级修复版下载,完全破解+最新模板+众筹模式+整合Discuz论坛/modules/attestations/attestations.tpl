
{if $_A.query_type == "list"}

<div class="module_add">
	<div class="module_title"><strong>֤����������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.attestations_type_result.id}" />�޸�֤���������� ��<a href="{$_A.query_url_all}">���</a>��{else}���֤����������{/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.attestations_type_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="{$_A.attestations_type_result.nid}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.attestations_type_result.remark}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�����֣�</div>
		<div class="c">
			<input type="text" name="credit"  value="{$_A.attestations_type_result.credit}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="l">��Ч�ڣ�</div>
		<div class="c">
			<input type="text" name="validity"  value="{$_A.attestations_type_result.validity}" size="5"/>�£�0��ʾ���ڣ�
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="{$_A.attestations_type_result.order|default:10}" size="8"/>
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>֤�������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">��Ч��</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="attestations" function="GetAttestationsTypeList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{$item.credit}</td>
		<td class="main_td1" align="center">{if $item.validity==0}����{else}{$item.validity}����{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>

<!--�˵��б� ����-->
</div>
</div>

<!--�ϴ���Ƭ ����-->
{elseif $_A.query_type == "upload"}


{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src',/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="���ˢ��" onClick="this.src=/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ�����" />
	</div>
	
</form>
</div>

{elseif $magic.request.check!=""}

	<form action="" method="post">
<div class="module_add">
	<div class="module_title"><strong>�û�����ͼƬ���</strong>(�ܻ��֣�{$_A.attestations_credit_all})�ܼ������֣�{$_A.attestations_type_result.credit}</div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����ͼ</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">��˱�ע</td>
		<td width="*" class="main_td">���״̬</td>
		<td width="*" class="main_td">��Ч��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	{ loop module="attestations" function="GetAttestationsList" var="item" user_id="$magic.request.user_id"  type_id="$magic.request.check" limit="all"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}<input type="hidden" name="id[]" value="{$item.id}" /></td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{if $item.fileurl==""}-{else}<a href="{$item.fileurl}" target="_blank"><img src="{$item.fileurl|litpic:40,40}" height="40" width="40"/></a>{/if}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center"><input type="text" size="6"  value="{$item.credit}" name="credit[]" /></td>
		<td class="main_td1" align="center"><select name="status[]"><option value="1" {if $item.status==1} selected="selected"{/if}>���ͨ��</option><option value="2" {if $item.status==2} selected="selected"{/if}>��˲�ͨ��</option></select></td>
		
		<td class="main_td1" align="center"><input type="text" size="6"  value="{$item.verify_remark|default:'�����'}" name="verify_remark[]" /></td>
		<td class="main_td1" align="center">{if $item.validity_time==0}����{elseif $item.validity_time==-1}�ѹ���{else}{$item.validity_time|date_format:"Y-m-d"}{/if}</td>
		<td class="main_td1" align="center">{if $item.status==0}δ���{elseif $item.status==1}���ͨ��{else}��˲�ͨ��{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
	</tr>
	{/loop}
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><select name="type_status"><option value="1">��ͨ��</option><option value="2">��ͨ��</option></select><input type="hidden" name="user_id" value="{$item.user_id}" /><input type="submit"  name="reset" class="submit_button" value="�ύ���" /></div></td>
	</tr>
	</form>
</table>
{else}
<div class="module_add">
	<div class="module_title"><strong>�ϴ�����ͼƬ</strong></div>
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
	{if $magic.request.edit==""}
	<form action="{$_A.query_url_all}" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>�ϴ�ͼƬ</strong><input type="hidden" name="user_id" value="{$magic.request.user_id}" /></div>
	
	<div class="module_border">
		<div class="l">������᣺</div>
		<div class="c">
			<select name="type_id">
			{loop module="attestations" function="GetAttestationsTypeList" limit="all" }
			<option value="{$var.id}">{$var.name}</option>
			{/loop}
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���1��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���2��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���3��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���4��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���5��</div>
		<div class="c" style=" width:100px">
			<input name="pic[]" type="file" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	{else}
	<form action="" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>�޸����</strong><input type="hidden" name="user_id" value="{$magic.request.user_id}" /><input type="hidden" name="id" value="{$_A.attestations_result.id}" /><input type="hidden" name="upfiles_id" value="{$_A.attestations_result.upfiles_id}" /></div>
	
	<div class="module_border">
		<div class="l">��ƬID��</div>
		<div class="c" style=" width:100px">
			{$_A.attestations_result.id}
		</div>
	</div>
	<div class="module_border">
		<div class="l">�����û���</div>
		<div class="c" style=" width:100px">
			{$_A.attestations_result.username}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ƣ�</div>
		<div class="c" style=" width:100px">
			<input name="name" type="text" value="{$_A.attestations_result.name}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ͣ�</div>
		<div class="c">
			<select name="type_id">
			{loop module="attestations" function="GetAttestationsTypeList" limit="all"}
			<option value="{$var.id}" {if $_A.attestations_result.type_id==$var.id} selected="selected"{/if}>{$var.name}</option>
			{/loop}
			</select>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">��Ƭ��</div>
		<div class="c" style=" width:100px">
			<a href="{$_A.attestations_result.fileurl}" target="_blank"><img src="{$_A.attestations_result.fileurl}" height="50" /></a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c" style=" width:100px">
			<input name="order" type="text" value="{$_A.attestations_result.order}" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c" style=" width:100px">
			<input name="contents" type="text" value="{$_A.attestations_result.contents}" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	{/if}
	{/if}
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>ͼƬ�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����ͼ</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="attestations" function="GetAttestationsList" var="loop" username=request user_id="$magic.request.user_id" epage=8 }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{if $item.fileurl==""}-{else}<a href="{$item.fileurl}" target="_blank"><img src="{$item.fileurl|litpic:40,40}" height="40" width="40"/></a>{/if}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center">{if $item.status==0}δ���{elseif $item.status==1}���ͨ��{else}��˲�ͨ��{/if}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&user_id={$item.user_id}&check={$item.type_id}">���</a>/<a href="{$_A.query_url_all}&user_id={$item.user_id}&edit={$item.id}&page={$magic.request.page}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&user_id={$item.user_id}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
<!--�˵��б� ����-->
</div>
</div>
{/if}


{elseif $_A.query_type=="uploads"}

<div class="module_add">
	<div class="module_title"><strong>��ͼƬ�ϴ�</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
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
	
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>�ϴ�ͼƬ</strong></div>
	</div>
	
	{if $magic.request.user_id!=""}
	<div>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="700" height="500">
  <param name="movie" value="/plugins/swfupload/swfupload.swf?config=/{$_A.admin_url|urlencode}%26q=plugins%26ac=swfupload%26code=attestations%26user_id={$magic.request.user_id}" />
  <param name="quality" value="high" />
  <embed src="/plugins/swfupload/swfupload.swf?config=/{$_A.admin_url|urlencode}%26q=plugins%26ac=swfupload%26code=attestations%26user_id={$magic.request.user_id}" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="700" height="500"></embed>
</object>
	
	</div>
	{else}
	<div class="help">���ȴ����ѡ���û�</div>
	{/if}
<!--�˵��б� ����-->
</div>
</div>
{/if}
