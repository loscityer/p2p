{if $_A.query_type=="list"}
<ul class="nav3"> 
<li><a href="{$_A.query_url_all}" id="c_so">ͶƱ����</a></li>  
<li><a href="{$_A.query_url_all}&action=new">���ͶƱ</a></li> 
</ul> 
<div class="module_add">

{if $magic.request.action=="new" || $magic.request.edit!=""}

<div >
	<form action="{$_A.query_url_all}" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.vote_result.id}" />�޸�ͶƱ ��<a href="{$_A.query_url_all}&action=new">���</a>��{else}���ͶƱ{/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">ͶƱ���⣺</div>
		<div class="c">
			<input type="text" name="title" value="{$_A.vote_result.title}"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input value='1|��ʾ,0|�ر�' name="status" checked="$_A.vote_result.status"}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�����ͣ�</div>
		<div class="c">
			{input value='radio|��ѡ,checked|��ѡ' name="input" checked="$_A.vote_result.input"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ͣ�</div>
		<div class="c">
			<select name="type_id">
				{loop module="vote" function="GetVoteTypeList" limit="all"}
				<option value="{$var.id}">{$var.name}</option>
				{/loop}
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��飺</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.vote_result.remark}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="{$_A.vote_result.order|default:10}" size="8"/>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>

{elseif  $magic.request.vote!="" }<div class="module_add">
<div class="module_title"><strong>{$_A.vote_result.title}</strong>��</div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="{$_A.query_url_all}&vote={$magic.request.vote}" method="post">
	<tr >
		<td class="main_td">id</td>
		<td class="main_td">���</td>
		<td class="main_td">�𰸱���</td>
		<td class="main_td">״̬</td>
		<td class="main_td">����</td>
		<td class="main_td">��ȷ��</td>
		<td class="main_td">����</td>
	</tr>
	{ loop  module="vote" function="GetVoteAnswerList" limit="all" var=item vote_id='$_A.vote_result.id'}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.id}</td>
		<td class="main_td1" align="center"><input type="text" value="{$item.nid}" name="nid[{$item.id}]"  size="5" /></td>
		<td class="main_td1" align="center"><input type="text" value="{$item.title}" name="title[{$item.id}]" /></td>
		<td class="main_td1" align="center"><select name="status[{$item.id}]"><option value="1" {if $item.status==1} selected="selected"{/if}>����</option><option value="0" {if $item.status==0} selected="selected"{/if}>�ر�</option></select></td>
		<td class="main_td1" align="center" ><input type="text" value="{$item.order|default:10}" name="order[]" size="5" /><input type="hidden" name="id[{$item.id}]" value="{$item.id}" /></td>
		<td class="main_td1" align="center">
		<input name="answer_status[{$item.id}]" type="checkbox" value="1" {if $item.answer_status==1} checked="checked"{/if}/></td>
		<td class="main_td1" align="center" width="130"><!--<a href="{$_A.query_url}/subnew&id={$item.type_id}&pid={$item.id}">����</a> /--> <a href="#" onClick="javascript:if(confirm('ȷ��ɾ����ɾ���󽫲����޸�')) location.href='{$_A.query_url_all}&answer_del={$item.id}&vote_id={$item.vote_id}'">ɾ��</a></td>
	</tr>
	{ /loop}
<tr >
	<td colspan="7"  class="submit">
		<input type="submit" name="submit" value="{$MsgInfo.linkages_name_submit}" />
	</td>
</tr>
</form>	
</table>

<div class="module_add">
<form name="form1" method="post" action="" onsubmit="return check_form()" >
	<div class="module_title"><strong>{ if $_A.query_type == "edit" }�޸�{else}���{/if} ({$_A.vote_result.title}) ����Ϣ</strong></div>
	
	<div class="module_border">
		<div class="l">ͶƱ���⣺</div>
		<div class="c">
			{$_A.vote_result.title}
		</div>
	</div>

	<div class="module_border">
		<div class="l">��ţ�</div>
		<div class="c">
			<input type="text" name="nid"  value="{$_A.vote_answer_result.nid}"  size="5" />(�磬A,B,C,D)
		</div>
	</div>
	<div class="module_border">
		<div class="l">�𰸱��⣺</div>
		<div class="c">
			<input type="text" name="title"  value="{$_A.vote_answer_result.title}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input value='1|��ʾ,0|�ر�' name="status" checked="$_A.vote_answer_result.status"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order"  value="{$_A.vote_answer_result.order|default:10}" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">��ȷ�𰸣�</div>
		<div class="c">
			<input name="answer_status" type="checkbox" value="1" {if $_A.vote_answer_result.answer_status==1} checked="checked"{/if}  />
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="hidden" name="vote_id" value="{$magic.request.vote}" />
		<input type="submit"  name="submit" value="�ύ" />
		<input type="reset"  name="reset" value="����" />
	</div>
</form>
</div>
<div class="module_add">
<div class="module_title"><strong>��Ӷ�����</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="{$_A.query_url_all}&vote={$magic.request.vote}" method="post">
	
	<tr  class="tr2">
		<td class="main_td1" align="center">���</td>
		<td class="main_td1" align="center">�𰸱���</td>
		<td class="main_td1" align="center" >����</td>
		<td class="main_td1" align="center" >��ȷ��</td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
	<tr >
		<td class="main_td1" align="center"><input type="text"  name="nid[]" /></td>
		<td class="main_td1" align="center"><input type="text"  name="title[]" size="5" /></td>
		<td class="main_td1" align="center" ><input type="text" name="order[]" value="10" size="5" /></td>
		<td class="main_td1" align="center"><input name="answer_status[]" type="checkbox" value="1"  /></td>
	</tr>
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="�ύ" />
	</td>
</tr>
</form>	
</table>
{literal}
<script>
function check_form(){
	
	var frm = document.forms['form1'];
	var title = frm.elements['name'].value;
	
	 var errorMsg = '';
	  if (title == "") {
		errorMsg += '���������Ʊ�����д' + '\n';
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
<div class="module_title"><strong>ͶƱ����</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">��������</td>
		<td width="" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">������</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="vote" function="GetVoteList" var="loop" username=request status="request"}
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.title}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format:"Y-m-d"}</td>
		<td class="main_td1" align="center">{$item.order}</td>
		<td class="main_td1" align="center">{if $item.input=='radio'}��ѡ{else}��ѡ{/if}</td>
		<td class="main_td1" align="center">{if $item.status==1}��ʾ{else}�ر�{/if}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&vote={$item.id}">�����</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
{/if}

{elseif $_A.query_type == "type"}
<div class="module_add">
	<div class="module_title"><strong>ͶƱ����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.vote_type_result.id}" />�޸�ͶƱ���� ��<a href="{$_A.query_url_all}">���</a>��{else}���ͶƱ����{/if}</strong></div>
	
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name" value="{$_A.vote_type_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<input type="text" name="nid" value="{$_A.vote_type_result.nid}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			{input name="status" value="1|����,2|�ر�" checked="$_A.vote_type_result.status"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30">{$_A.vote_type_result.remark}</textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����</div>
		<div class="c">
			<input type="text" name="order" value="{$_A.vote_type_result.order|default:10}" size="8"/>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	
	
	
	<div class="module_title"><strong>ͶƱ�����б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="vote" function="GetVoteTypeList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{if $item.status==1}����{else}�ر�{/if}</td>
		<td class="main_td1" align="center">{$item.order}</td>
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
{/if}