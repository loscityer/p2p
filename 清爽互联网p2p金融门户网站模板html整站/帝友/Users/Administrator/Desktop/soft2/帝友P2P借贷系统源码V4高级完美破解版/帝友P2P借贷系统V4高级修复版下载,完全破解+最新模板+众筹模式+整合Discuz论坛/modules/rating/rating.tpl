
{if $_A.query_type == "educations" ||  $_A.query_type == "list"} 

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>ѧ������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸�ѧ�� ��<a href="{$_A.query_url_all}">���</a>��{else}���ѧ��{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�û�����{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	<div class="module_border">
		<div class="c">
			ѧ&nbsp;&nbsp;�� ��{linkages type="value" nid="rating_education" name="degree" value="$_A.rating_result.degree"}
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			��ѧ��ݣ�{digit name="in_year" start="2012" end="1970"  value="$_A.rating_result.in_year" }
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ѧ&nbsp;&nbsp;У ��<input type="text" name="name" value="{$_A.rating_result.name}"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			ר&nbsp;&nbsp;ҵ ��<input type="text" name="professional" value="{$_A.rating_result.professional}"/>
		</div>
	</div>

	<div class="module_border_ajax" >
		<div class="c">
			��֤�룺<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
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
	<div class="module_title"><strong>ѧ���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">ѧУ</td>
		<td width="*" class="main_td">ѧ��</td>
		<td width="*" class="main_td">רҵ</td>
		<td width="*" class="main_td">��ѧʱ��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetEducationsList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.degree|linkages:"rating_education"}</td>
		<td class="main_td1" align="center">{$item.professional}</td>
		<td class="main_td1" align="center">{$item.in_year}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("ѧ�����","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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


{elseif $_A.query_type == "job"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">�����������:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸Ĺ������� ��<a href="{$_A.query_url_all}">���</a>��{else}��ӹ�������{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			��ְ��ݣ�{digit name="in_year" start="2012" end="1970"  value="$_A.rating_result.in_year" }
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾���ƣ�<input type="text" name="name" value="{$_A.rating_result.name}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�� ��<input type="text" name="department" value="{$_A.rating_result.department}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ְ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;λ ��<input type="text" name="office" value="{$_A.rating_result.office}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			֤ �� �� ��<input type="text" name="prover" value="{$_A.rating_result.prover}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			֤���绰��<input type="text" name="prover_tel" value="{$_A.rating_result.prover_tel}"/>
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
	<div class="module_title"><strong>ѧ���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��˾</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">ְλ</td>
		<td width="*" class="main_td">��ְʱ��</td>
		<td width="*" class="main_td">֤����</td>
		<td width="*" class="main_td">֤���˵绰</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetJobList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.department}</td>
		<td class="main_td1" align="center">{$item.office}</td>
		<td class="main_td1" align="center">{$item.in_year}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center">{$item.prover}</td>
		<td class="main_td1" align="center">{$item.prover_tel}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�����������","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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



<!--��˼�¼�б� ��ʼ-->
{elseif $_A.query_type == "examine"}
<div class="module_add">
<div class="module_title"><strong>��˼�¼�б�</strong></div>
</div> 
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">id</td>
		<td width="*" class="main_td">�����</td>
		<td width="*" class="main_td">ģ��</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">����</td>
		<th width="" class="main_td">���</th>
		<td width="*" class="main_td">��˱�ע</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	{ list module="users" function="GetExamineList" var="loop" username=request  epage="12" page="request"}
		{foreach from=$loop.list item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username|default:-}</td>
		<td class="main_td1" align="center">{$item.code}</td>
		<td class="main_td1" align="center" >{$item.type}</td>
		<td class="main_td1" align="center" >{$item.article_id}</td>
		<td class="main_td1" align="center" >{if $item.result==1}<font color="#006600">{$MsgInfo.users_name_success}</font>{else}<font color="#FF0000">{$MsgInfo.users_name_false}</font>{/if}(result={$item.result})</td>
		<td class="main_td1" align="center" >{$item.remark}</td>
		<td class="main_td1" align="center" >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
	</tr>
	{ /list}
</table>
<!--��˼�¼�б� ����-->




{elseif $_A.query_type == "house"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">�����������:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸ķ������� ��<a href="{$_A.query_url_all}">���</a>��<input type="hidden" name="name" value="1" />{else}��ӷ�������<input type="hidden" name="name" value="1" />{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			������ַ��<input type="text" name="address" value="{$_A.rating_result.address}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			���������<input type="text" name="areas" value="{$_A.rating_result.areas}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ݣ�<input type="text" name="in_year" value="{$_A.rating_result.in_year}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����״����<input type="text" name="repay" value="{$_A.rating_result.repay}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����Ȩ��1��<input type="text" name="holder1" value="{$_A.rating_result.holder1}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��Ȩ�ݶ<input type="text" name="right1" value="{$_A.rating_result.right1}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����Ȩ�ˣ�<input type="text" name="holder2" value="{$_A.rating_result.holder2}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��Ȩ�ݶ<input type="text" name="right2" value="{$_A.rating_result.right2}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ޣ�<input type="text" name="load_year" value="{$_A.rating_result.load_year}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ÿ�¹��<input type="text" name="repay_month" value="{$_A.rating_result.repay_month}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��Ƿ������<input type="text" name="balance" value="{$_A.rating_result.balance}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������У�<input type="text" name="bank" value="{$_A.rating_result.bank}"/>
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
	<div class="module_title"><strong>���������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">������ַ</td>
		<td width="*" class="main_td">�������</td>
		<td width="*" class="main_td">�������</td>
		<td width="*" class="main_td">ÿ�¹���</td>
		<td width="*" class="main_td">����״��</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">��Ƿ���</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetHouseList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.address}</td>
		<td class="main_td1" align="center">{$item.areas}</td>
		<td class="main_td1" align="center">{$item.in_year}</td>
		<td class="main_td1" align="center">{$item.repay_month}</td>
		<td class="main_td1" align="center">{$item.repay}</td>
		<td class="main_td1" align="center">{$item.load_year}</td>
		<td class="main_td1" align="center">{$item.balance}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�����������","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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

{elseif $_A.query_type == "company"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">������λ���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>������λ����</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸Ĺ�����λ���� ��<a href="{$_A.query_url_all}">���</a>��{else}��ӹ�����λ����{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			��˾���ƣ�<input type="text" name="name" value="{$_A.rating_result.name}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾���ͣ�<input type="text" name="type" value="{$_A.rating_result.type}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ҵ��<input type="text" name="industry" value="{$_A.rating_result.industry}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����ְλ��<input type="text" name="office" value="{$_A.rating_result.office}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��������<input type="text" name="rank" value="{$_A.rating_result.rank}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����ʼʱ�䣺<input type="text" name="worktime1" value="{$_A.rating_result.worktime1}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ʱ�䣺<input type="text" name="worktime2" value="{$_A.rating_result.worktime2}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ޣ�{linkages name="workyear" nid="rating_workyear" type="value" value="$_A.rating_result.workyear"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾�绰��<input type="text" name="tel" value="{$_A.rating_result.tel}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾��ַ��<input type="text" name="address" value="{$_A.rating_result.address}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��˾��ַ��<input type="text" name="weburl" value="{$_A.rating_result.weburl}"/>
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
	<div class="module_title"><strong>������λ�����б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��˾����</td>
		<td width="*" class="main_td">��˾����</td>
		<td width="*" class="main_td">������ҵ</td>
		<td width="*" class="main_td">����ְλ</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetCompanyList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.type}</td>
		<td class="main_td1" align="center">{$item.industry}</td>
		<td class="main_td1" align="center">{$item.office}</td>
		<td class="main_td1" align="center">{$item.workyear|linkages:"rating_workyear"}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("������λ���","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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

{elseif $_A.query_type == "contact"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">��ϵ��ʽ���:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>��ϵ��ʽ</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸���ϵ��ʽ��<a href="{$_A.query_url_all}">���</a>��{else}�����ϵ��ʽ{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			�ڶ���ϵ��������<input type="text" name="linkman2" value="{$_A.rating_result.linkman2}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�ڶ���ϵ�˹�ϵ��{linkages name="relation2" nid="rating_relation" type="value" value="$_A.rating_result.relation2"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�ڶ���ϵ���ֻ���<input type="text" name="phone2" value="{$_A.rating_result.phone2}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ��������<input type="text" name="linkman3" value="{$_A.rating_result.linkman3}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ�˹�ϵ��{linkages name="relation3" nid="rating_relation" type="value" value="$_A.rating_result.relation3"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ���ֻ���<input type="text" name="phone3" value="{$_A.rating_result.phone3}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			QQ��<input type="text" name="qq" value="{$_A.rating_result.qq}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����������<input type="text" name="wangwang" value="{$_A.rating_result.wangwang}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			MSN��<input type="text" name="msn" value="{$_A.rating_result.msn}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			������ϵ��ʽ��<input type="text" name="other" value="{$_A.rating_result.other}"/>
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
	<div class="module_title"><strong>��ϵ��ʽ�б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">�ڶ���ϵ��</td>
		<td width="*" class="main_td">�ڶ���ϵ���ֻ�</td>
		<td width="*" class="main_td">������ϵ��</td>
		<td width="*" class="main_td">������ϵ���ֻ�</td>
		<td width="*" class="main_td">QQ</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">MSN</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetContactList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.linkman2}</td>
		<td class="main_td1" align="center">{$item.phone2}</td>
		<td class="main_td1" align="center">{$item.linkman3}</td>
		<td class="main_td1" align="center">{$item.phone3}</td>
		<td class="main_td1" align="center">{$item.qq}</td>
		<td class="main_td1" align="center">{$item.wangwang}</td>
		<td class="main_td1" align="center">{$item.msn}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("��ϵ��ʽ���","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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

{elseif $_A.query_type == "info"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">�����������:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>��������</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸ĸ������ϣ�<a href="{$_A.query_url_all}">���</a>��{else}��Ӹ�������{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			�Ա�{linkages name="sex" nid="rating_sex" type="value" value="$_A.rating_result.sex"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����״����{linkages name="marry" nid="rating_marry" type="value" value="$_A.rating_result.marry"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��û�к��ӣ�{linkages name="children" nid="rating_children" type="value" value="$_A.rating_result.children"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			ÿ�����룺{linkages name="income" nid="rating_income" type="value" value="$_A.rating_result.income"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			Ŀǰ��ݣ�{linkages name="dignity" nid="rating_dignity" type="value" value="$_A.rating_result.dignity"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�������ڵأ�<input type="text" name="qq" value="{$_A.rating_result.qq}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�Ƿ񹺳���{linkages name="is_car" nid="rating_car" type="value" value="$_A.rating_result.is_car"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�־�ס��ַ��<input type="text" name="address" value="{$_A.rating_result.address}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			�ֻ����룺<input type="text" name="phone" value="{$_A.rating_result.phone}"/>
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����������<textarea cols="30" rows="5" name="remark"></textarea>
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
	<div class="module_title"><strong>���������б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">�Ա�</td>
		<td width="*" class="main_td">����</td>
		<td width="*" class="main_td">�Ƿ���С��</td>
		<td width="*" class="main_td">�ֻ�����</td>
		<td width="*" class="main_td">��ס��ַ</td>
		<td width="*" class="main_td">�Ƿ񹺳�</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetInfoList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.sex|linkages:"rating_sex"}</td>
		<td class="main_td1" align="center">{$item.marry|linkages:"rating_marry"}</td>
		<td class="main_td1" align="center">{$item.children|linkages:"rating_children"}</td>
		<td class="main_td1" align="center">{$item.phone|linkages:"rating_phone"}</td>
		<td class="main_td1" align="center">{$item.address|linkages:"rating_address"}</td>
		<td class="main_td1" align="center">{$item.is_car|linkages:"rating_car"}</td>
		<td class="main_td1" align="center">{$item.dignity|linkages:"rating_dignity"}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�����������","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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

{elseif $_A.query_type == "assets"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">�ʲ�״�����:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>�ʲ�״��</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸��ʲ�״����<a href="{$_A.query_url_all}">���</a>��{else}����ʲ�״��{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			��ծ���ͣ�{linkages name="assetstype" nid="rating_assetstype" type="value" value="$_A.rating_result.assetstype"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��ծ���ƣ�<input type="text" name="name" value="{$_A.rating_result.name}">
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��<input type="text" name="account" value="{$_A.rating_result.account}">
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			����˵����<textarea colspan="20" rowspan="5" name="other"></textarea>
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
	<div class="module_title"><strong>�ʲ�״���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��ծ����</td>
		<td width="*" class="main_td">��ծ����</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">����˵��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetAssetsList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.assetstype|linkages:"rating_assetstype"}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.account}</td>
		<td class="main_td1" align="center">{$item.other}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�ʲ�״�����","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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

{elseif $_A.query_type == "finance"}

{if $magic.request.examine!=""}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&examine={$magic.request.examine}" >
	<div class="module_border_ajax">
		<div class="l">����״�����:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>����ͨ�� </div>
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

{else}
<div class="module_add">
	<div class="module_title"><strong>����״��</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="{$_A.query_url_all}" method="post">
	<div class="module_title"><strong>{if $magic.request.edit!=""}<input type="hidden" name="id" value="{$_A.rating_result.id}" />�޸Ĳ���״����<a href="{$_A.query_url_all}">���</a>��{else}��Ӳ���״��{/if}</strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��{if $magic.request.edit!=""}<input type="hidden" name="username" value="{$_A.rating_result.username}" />{$_A.rating_result.username}{else}<input type="text" name="username" />{/if}
		</div>
	</div>
	
	
	{if $magic.request.edit!=""}
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��{$_A.rating_result.status|linkages:"rating_approve_status"}
		</div>
	</div>
	{/if}
	
	
	<div class="module_border">
		<div class="c">
			�������ͣ�{linkages name="type" nid="rating_finance" type="value" value="$_A.rating_result.type"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			�������ƣ�<input type="text" name="name" value="{$_A.rating_result.name}">
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			�ʽ�����{linkages name="use_type" nid="rating_use_type" type="value" value="$_A.rating_result.use_type"}
		</div>
	</div>
	<div class="module_border">
		<div class="c">
			��<input type="text" name="account" value="{$_A.rating_result.account}">
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			����˵����<textarea colspan="20" rowspan="5" name="other"></textarea>
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
	<div class="module_title"><strong>����״���б�</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">�û�</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">��������</td>
		<td width="*" class="main_td">�ʽ�����</td>
		<td width="*" class="main_td">���</td>
		<td width="*" class="main_td">����˵��</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">����</td>
	</tr>
	{ list module="rating" function="GetFinanceList" var="loop" username=request }
	{foreach from="$loop.list" item="item"}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{$item.id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.type|linkages:"rating_finance"}</td>
		<td class="main_td1" align="center">{$item.name}</td>
		<td class="main_td1" align="center">{$item.use_type|linkages:"rating_use_type"}</td>
		<td class="main_td1" align="center">{$item.account}</td>
		<td class="main_td1" align="center">{$item.other}</td>
		<td class="main_td1" align="center">{$item.status|linkages:"rating_approve_status"}</td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�ʲ�״�����","url:get?{$_A.query_url_all}&examine={$item.id}",500,230,"true","","false","text");'/>���</a>/<a href="{$_A.query_url_all}&edit={$item.id}">�޸�</a>/<a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='{$_A.query_url_all}&del={$item.id}'">ɾ��</a></td>
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
			var email = $("#email").val();
			location.href=url+"&username="+username+"&email="+email;
		}
	  
	  </script>
	  {/literal}
			</div>
			<div class="floatr">
				{$MsgInfo.users_name_username}��<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>    <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()">
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