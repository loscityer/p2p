
{if $_A.query_type == "list" }


{elseif $_A.query_type == "realname" || $_A.query_type=="realname_id5list" || $_A.query_type=="realname_id5set"}

	{include file="approve.realname.tpl" template_dir = "modules/approve"}

{elseif $_A.query_type == "edu" || $_A.query_type=="edu_id5" || $_A.query_type=="edu_set"}

	{include file="approve.edu.tpl" template_dir = "modules/approve"}
{elseif $_A.query_type == "video" }

	{include file="approve.video.tpl" template_dir = "modules/approve"}
{elseif $_A.query_type == "flow" }

	{include file="approve.flow.tpl" template_dir = "modules/approve"}
    
{elseif $_A.query_type == "sms" || $_A.query_type == "sms_log" || $_A.query_type == "sms_set" }

{if $magic.request.examine!=""}
<!--��ת�� 2-->
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		{if $_A.approve_result.status==1}
		���ͨ��<input type="hidden" name="status" value="1" />
		{else}
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ��{/if} </div>
	</div>
	
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5">{$_A.approve_result.verify_remark}</textarea>
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
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>


{elseif $magic.request.view!=""}

<div  style="height:205px; overflow:scroll">
	<div class="module_border_ajax">
		<div class="l">�û���:</div>
		<div class="c">{$_A.approve_result.username}
		</div>
		<div class="l">�ֻ�:</div>
		<div class="c">{$_A.approve_result.phone}
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">����:</div>
		<div class="c">{$_A.approve_result.type|linkages:"approve_sms_type"}
		</div>
		<div class="l">״̬:</div>
		<div class="c">{$_A.approve_result.status|linkages:"approve_sms_status"}
		</div>
	</div>
	<div class="module_border_ajax">
		<div class="l">����:</div>
		<div class="c">{$_A.approve_result.contents}
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">������Ϣ:</div>
		<div class="c">���룺{$_A.approve_result.send_code|default:"-"} | ���أ�{$_A.approve_result.send_return|default:"-"} | ״̬��{$_A.approve_result.send_status|default:"-"}
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">��֤��:</div>
		<div class="c">��֤�룺{$_A.approve_result.code|default:"-"} | ״̬��{$_A.approve_result.code_status} | ʱ�䣺{$_A.approve_result.check_time|date_format|default:"-"}
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">���ʱ��:</div>
		<div class="c">{$_A.approve_result.addtime|date_format|default:"-"}
		</div>
		<div class="l">���ip:</div>
		<div class="c">{$_A.approve_result.addip|default:"-"}
		</div>
	</div>
</div>

{else}
<ul class="nav3"> 
<li><a href="{$_A.query_url}/sms" id="c_so">�ֻ���֤</a></li> 
<li><a href="{$_A.query_url}/sms_log">���ͼ�¼</a></li> 
<li><a href="{$_A.query_url}/sms_set">�ֻ�����</a></li> 
</ul> 
	{if $_A.query_type=="sms_log"}

<div class="module_add">
	<div class="module_title"><strong>�ֻ����ŷ��ͼ�¼</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>�ֻ�����Ⱥ��</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<input type="text" name="username" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<input type="text" name="phone" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			�� �� id ��<input type="text" name="user_id1" size="5" /> �� <input type="text" name="user_id2"  size="5"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			����״̬ ��<select name="status"><option value="0">������</option><option value="1">��������</option></select>
		</div>
	</div>
	
	
	<div class="module_border_ajax" >
		<div class="c">�������ݣ�<textarea name="contents" cols="30" rows="5"></textarea>
		</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
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
	<div class="module_title"><strong>�ֻ����ŷ��ͼ�¼�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">�ֻ�����</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����״̬</td>
		<td width="*" class="main_td">���ʱ��</td>	
		<td width="*" class="main_td">����ʱ��</td>		
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="approve" function="GetSmslogList" var="loop" epage=10 page=request username=request phone=request status=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username|default:"-"}</td>
		<td class="main_td1" align="center">{$item.phone}</td>
		<td class="main_td1" align="center">{$item.type|linkages:"approve_sms_type"}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"approve_sms_status"}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
		<td class="main_td1" align="center">{$item.send_time|date_format}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("���ż�¼�鿴","url:get?{$_A.query_url_all}&view={$item.id}",500,230,"true","","false","text");'/>�鿴</a></td>
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
			var phone = $("#phone").val();
			var status = $("#status").val();
			location.href=url+"&username="+username+"&phone="+phone+"&status="+status;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  �ֻ��ţ�<input type="text" name="phone" id="phone" value="{$magic.request.phone}"/> ״̬��{linkages nid="approve_sms_status" name="status" value="$magic.request.status" default="�鿴ȫ��" type="value"}   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{/list}
	
</table>
<!--�˵��б� ����-->
	{elseif $_A.query_type=="sms_set"}
	
<div class="module_add">
<form action="" method="post"  enctype="multipart/form-data" >
	<div class="module_title"><strong>�ֻ���������</strong></div>
	
	
	<div class="module_border">
	<div class="d">�Ƿ����ֻ����͹��ܣ�</div>
		<div class="c">
			{input type="radio" name="con_sms_status" value="0|��,1|��"  checked="$_G.system.con_sms_status}
		</div>
	</div>
	
	
	
	
	<div class="module_border">
		<div class="d">�ֻ�����β�����֣�</div>
		<div class="c">
			<input type="text" name="con_sms_text" value="{$_G.system.con_sms_text}" size="20"/>
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="d">�Ƿ�UTF-8ת����</div>
		<div class="c">
			{input type="radio" name="con_sms_utf_status" value="0|��,1|��"  checked="$_G.system.con_sms_utf_status}
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="{$MsgInfo.admin_name_submit}"  class="submit_button" /></div>
		</form>
	</div>
</div>

	{else}
<div class="module_add">
	<div class="module_title"><strong>�ֻ�������֤</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.approve_result.id}" />�޸��ֻ�������֤ ��<a href="{$_A.query_url_all}">���</a>��{else}����ֻ�������֤{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.approve_result.username}" />{$_A.approve_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.approve_result.status|linkages:"approve_status"}
		</div>
	</div>
	{/if}
	
	<div class="module_border">
		<div class="c">
			�ֻ����룺<input type="text" name="phone" value="{$_A.approve_result.phone}"/>
		</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="c">
			�� ֤ �� ��<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
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
	<div class="module_title"><strong>�ֻ�������֤�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">�ֻ�����</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
		<td width="*" class="main_td">ͨ��ʱ��</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="approve" function="GetSmsList" var="loop" epage=10 page=request username=request phone=request status=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.phone}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"approve_status"}</td>
		<td class="main_td1" align="center">{$item.addtime|date_format:"Y-m-d"}</td>
		<td class="main_td1" align="center">{$item.verify_time|date_format:"Y-m-d"|default:-}</td>
		<td class="main_td1" align="center">{if $item.status==0 ||  $item.status==1}<a href="javascript:void(0)" onclick='tipsWindown("�ֻ�������֤���","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a> {/if}{if $item.status==0}<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>{/if}</td>
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
			var phone = $("#phone").val();
			var status = $("#status").val();
			location.href=url+"&username="+username+"&phone="+phone+"&status="+status;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  �ֻ��ţ�<input type="text" name="phone" id="phone" value="{$magic.request.phone}"/> ״̬��{linkages nid="approve_status" name="status" value="$magic.request.status" default="���ȫ��" type="value"}   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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
{/if}
{/if}