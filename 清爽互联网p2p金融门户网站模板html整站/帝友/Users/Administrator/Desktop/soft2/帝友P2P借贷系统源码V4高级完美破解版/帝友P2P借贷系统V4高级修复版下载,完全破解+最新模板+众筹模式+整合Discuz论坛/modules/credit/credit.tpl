{if $_A.query_type == "class"}

<div class="module_add">
	<div class="module_title"><strong>���ַ���</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.credit_result.id}" />�޸Ļ��ַ��� ��<a href="{$_A.query_url_all}">���</a>��{else}��ӻ��ַ���{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			<font color="#FF0000">��ʶ�� ��<input type="text" name="nid"  value="{$_A.credit_result.nid}" onkeyup="value=value.replace(/[^a-zA-Z_]/g,'')" /></font>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;&nbsp;�� ��<input type="text" name="name"  value="{$_A.credit_result.name}"/>
		</div>
	</div>
	
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>���ַ����б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ loop module="credit" function="GetClassList"  limit="all" var="item" }
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a> <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/loop}
	
	
</table>
<!--�˵��б� ����-->
</div>
</div>


{elseif $_A.query_type=="list"}

<div class="module_add">
	<div class="module_title"><strong>�û�����</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td class="main_td">�û���</td>
		<td class="main_td">���û���</td>
		<td class="main_td">���</td>
		<td class="main_td">�������</td>
		<td class="main_td">����</td>
	</tr>
	{ list module="credit" function="GetList" var="loop" username=request }
	{foreach from=$loop.list item="item"}
	<tr {if $key%2==1}class="tr2"{/if}>
		<td>{ $item.username}</td>
		<td>{ $item.user_credit.approve_credit|default:0}</td>
		<td>{ $item.user_gold.total}</td>
		<td>{ $item.user_credit.borrow_credit|default:0}</td>
		<td><a href="{$_A.query_url}/log&username={$item.username}" >��¼</a> 
	</tr>
	{/foreach}
	<tr>
		<td colspan="7" class="action">
		<div class="floatr">
			�û�����<input type="text" name="username" id="username" value="{$magic.request.username}"/> <input type="button" value="����" / onclick="sousuo()">
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="7"  class="page">
		{$loop.pages|showpage} 
		</td>
	</tr>
	{/list}
</table>
<script>
var url = '{$_A.query_url}';
{literal}
function sousuo(){
	var username = $("#username").val();
	location.href=url+"&username="+username;
}

</script>
{/literal}




{elseif $_A.query_type == "type"}
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.credit_type_result.id}" />�޸Ļ������ͣ�<a href="{$_A.query_url_all}">���</a>��{else}��ӻ�������{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">�������ƣ�</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="{ $_A.credit_type_result.name}" size="20" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���ִ��룺</div>
		<div class="c">
			<input type="text" name="nid"  class="input_border" value="{ $_A.credit_type_result.nid}" size="20" onkeyup="value=value.replace(/[^a-zA-Z_]/g,'')" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�飺</div>
		<div class="c">
			{select result="$_G.module" name="name" value="nid" select_name="code" selected="$_A.credit_type_result.code" }
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">���ַ��ࣺ</div>
		<div class="c">
			{select result="$_G.credit.class" name="name" value="id" select_name="class_id" selected="$_A.credit_type_result.class_id" }
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">����״̬��</div>
		<div class="c">
		{input type="radio" name="status" value="1|����,0|�ر�" checked="$result.cycle"}
		</div>
	</div>
	

	<div class="module_border">
		<div class="l">����ֵ��</div>
		<div class="c">
			<input type="text" name="value"  class="input_border" value="{ $_A.credit_type_result.value|default:5}" size="10" onkeyup="value=value.replace(/[^0-9-]/g,'')"/> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">���ڣ�</div>
		<div class="c">
			{input type="radio" name="cycle" value="1|һ��,2|ÿ��,3|ʱ����,4|����" checked="$_A.credit_type_result.cycle"}
		</div>
	</div>

	<div class="module_border">
		<div class="l">����������</div>
		<div class="c">
			<input type="text" name="award_times"  class="input_border" value="{ $_A.credit_type_result.award_times|default:1}" size="8"  onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>

	<div class="module_border">
		<div class="l">ʱ������</div>
		<div class="c">
			<input type="text" name="interval"  class="input_border" value="{ $_A.credit_type_result.interval|default:60}" size="8"  onkeyup="value=value.replace(/[^0-9]/g,'')"/> ����
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>���������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����ģ��</td>
		<td width="*" class="main_td">���ַ���</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="credit" function="GetTypeList" var="loop" epage=10 name=request nid=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{$item.value}</td>
		<td class="main_td1" align="center">{$item.code|module}</td>
		<td class="main_td1" align="center">{$item.class_id|credit_class}</td>
		<td class="main_td1" align="center">{if $item.cycle==1}1��{elseif $item.cycle==2}ÿ��{elseif $item.cycle==3}���{elseif $item.cycle==4}����{/if}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a> <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/foreach}
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '{$_A.query_url_all}';
	    {literal}
	  	function sousuo(){
			var name = $("#name").val();
			var nid = $("#nid").val();
			location.href=url+"&name="+name+"&nid="+nid;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				���ƣ�<input type="text" name="name" id="name" value="{$magic.request.name|urldecode}"/>  ��ʶ����<input type="text" name="nid" id="nid" value="{$magic.request.nid}" onkeyup="value=value.replace(/[^a-zA-Z_]/g,'')"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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
{elseif $_A.query_type == "rank"}
<div class="module_add">
	<div class="module_title"><strong>���ֵȼ�</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.credit_rank_result.id}" />�޸Ļ��ֵȼ� ��<a href="{$_A.query_url_all}">���</a>��{else}��ӻ��ֵȼ�{/if}</strong></div>
	
	<div class="module_border">
		<div class="l">���ƣ�</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="{ $_A.credit_rank_result.name}" size="12"  />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�ȼ���</div>
		<div class="c">
			<input type="text" name="rank"  class="input_border" value="{ $_A.credit_rank_result.rank}" size="12"  />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ࣺ</div>
		<div class="c">
			{select result="$_G.credit.class" name="name" value="id" select_name="class_id" selected="$_A.credit_rank_result.class_id" }
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><a title="��ֵ�ĵ�ʽΪ ��ֵ1 <= ��ֵ <= ��ֵ2" href="#"><strong>��</strong></a>��ֵ��</div>
		<div class="c">
			<input type="text" name="point1"  class="input_border" value="{ $_A.credit_rank_result.point1}" size="8"  /> �� <input type="text" name="point2"  class="input_border" value="{ $_A.credit_rank_result.point2}" size="8"  /> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="l"><a title="ͼƬ�ĵ�ַ��data/images/credit/���档ע���׺Ҳͬ��Ҫ��д����credit.gif" href="#"><strong>��</strong></a>ͼƬ��</div>
		<div class="c">
			<input type="text" name="pic"  class="input_border" value="{ $_A.credit_rank_result.pic}" size="18"  />
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">������</div>
		<div class="c">
			<font color="#FF0000"><input type="text" name="nid"  value="{$_A.credit_rank_result.nid}" size="12"  /></font>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ע��</div>
		<div class="c">
			<textarea name="remark" cols="30" rows="3">{ $_A.credit_rank_result.remark}</textarea>
		</div>
	</div>
	
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>���ֵȼ��б�</strong>��<select onchange="changese(this)" name="class_id">
	<option>ȫ��</option>
	{ foreach  from="$_G.credit.class" item="item" }
	<option value="{$item.id}" {if $item.id==$magic.request.class_id} selected="selected"{/if}>{$item.name}</option>
	{/loop}
	</select>
	<script language="javascript">
var url = "{$_A.query_url_all}";
{literal}
 function changese(obj){
  window.location.href=url+"&class_id="+obj.value
 }
</script>
{/literal}</div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">����</td>
		<td width="*" class="main_td">�ȼ�</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">���ֿ�ʼ</td>
		<td width="*" class="main_td">���ֽ���</td>
		<td width="*" class="main_td">ͼƬ</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ loop module="credit" function="GetRankList"  limit="all" var="item" class_id=request }
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.rank}</td>
		<td class="main_td1" align="center">{$item.class_id|credit_class}</td>
		<td class="main_td1" align="center"> {$item.point1}</td>
		<td class="main_td1" align="center"> {$item.point2}</td>
		<td class="main_td1" align="center"><img src="/data/images/credit/{$item.pic}"></td>
		<td class="main_td1" align="center"> {$item.nid}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a> <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
	</tr>
	{/loop}
	
	
</table>
<!--�˵��б� ����-->
</div>
</div>


{elseif $_A.query_type == "log"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">�û�:</div>
		<div class="c">{$_A.credit_result.username}
		</div>
	</div>
	<div class="module_border_ajax">
		<div class="l">����:</div>
		<div class="c">{$_A.credit_result.type_name}({$_A.credit_result.nid})
		</div>
	</div>
	<div class="module_border_ajax">
		<div class="l">������Ϣ:</div>
		<div class="c">{$_A.credit_result.class_id|credit_class} {$_A.credit_result.code|module} {$_A.credit_result.type} {$_A.credit_result.id}
		</div>
	</div>
	<div class="module_border_ajax">
		<div class="l">Ĭ��ֵ:</div>
		<div class="c">{$_A.credit_result.value} ����ʾ�ڻ����������趨�Ļ���ֵ��
		</div>
	</div>
	<div class="module_border_ajax">
		<div class="l">����ֵ:</div>
		<div class="c"><input type="text" name="credit" value="{$_A.credit_result.credit}" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="user_id" value="{$_A.credit_result.user_id}" />
		<input type="submit"  name="reset" class="submit_button" value="ȷ���ύ" />
	</div>
	
</form>
</div>

{else}
<div class="module_add">

	<div class="module_title"><strong>���ּ�¼</strong></div>
	
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">��ʶ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">ģ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����id</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="credit" function="GetLogList" var="loop" epage=10 username=request nid=request class_id=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.type_name}</td>
		<td class="main_td1" align="center">{$item.nid}</td>
		<td class="main_td1" align="center">{$item.class_id|credit_class}</td>
		<td class="main_td1" align="center"> {$item.code|module}</td>
		<td class="main_td1" align="center"> {$item.type}</td>
		<td class="main_td1" align="center"> {$item.article_id}</td>
		<td class="main_td1" align="center"><font color="#FF0000" style="font-weight:bold">{if $item.credit==""}{$item.value}{else}{$item.credit}{/if}</font></td>
		<td class="main_td1" align="center"> {$item.addtime|date_format}</td>
		<td class="main_td1" align="center"> <a href="javascript:void(0)" onclick='tipsWindown("�޸Ļ���","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>�޸Ļ���</a></td>
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
			var nid = $("#nid").val();
			location.href=url+"&username="+username+"&nid="+nid;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="name" id="username" value="{$magic.request.username|urldecode}"/>  ��ʶ����<input type="text" name="nid" id="nid" value="{$magic.request.nid}" onkeyup="value=value.replace(/[^a-zA-Z_]/g,'')"/>   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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

{/if}


{/if}