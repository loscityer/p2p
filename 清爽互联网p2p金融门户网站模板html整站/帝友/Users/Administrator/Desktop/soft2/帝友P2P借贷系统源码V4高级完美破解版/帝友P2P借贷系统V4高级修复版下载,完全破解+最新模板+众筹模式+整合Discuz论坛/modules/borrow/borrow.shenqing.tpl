{if $magic.request.check==""}
<ul class="nav3">
<li><a href="{$_A.query_url_all}&status=0" id="c_so">δ��������</a></li> 
<li><a href="{$_A.query_url_all}&status=1">�Ѵ�������</a></li> 
</ul> 
{if $magic.request.shenqing_view!=''}
<div class="module_add">
	<div class="module_title"><strong>������Ϣ</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="r">
		<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/users/view&user_id={$_A.borrow_result.user_id}",500,230,"true","","true","text");'>	{$_A.borrow_result.username}</a>
		</div>
		<div class="s">״̬��</div>
		<div class="c">
            {if $_A.borrow_result.status==1}�Ѵ���{else}δ����{/if}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="r">
			{if $_A.borrow_result.borrow_style==2}������{elseif $_A.borrow_result.borrow_style==3}��Ѻ��{else}���ñ�{/if}
		</div>
		<div class="s">�����;��</div>
		<div class="c">
			{$_A.borrow_result.borrow_use|linkages:"borrow_use"}
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="r">
			��{$_A.borrow_result.account}<input type="hidden" name="account" value="{$_A.borrow_result.account}" /> 
		</div>
		<div class="s">���ʽ��</div>
		<div class="c">
			{$_A.borrow_result.borrow_style|linkages:"borrow_style"}
		</div>
	</div>
	<div class="module_border">
		<div class="l">������ޣ�</div>
		<div class="r">
			
		<FONT COLOR="#ec6c13">{if $_A.borrow_result.borrow_period == 0.03}1</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.06}2</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.10}3</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.13}4</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.16}5</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.20}6</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.23}7</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.26}8</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.30}9</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.33}10</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.36}11</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.40}12</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.43}13</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.46}14</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.50}15</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.53}16</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.56}17</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.60}18</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.63}19</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.66}20</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.70}21</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.73}22</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.76}23</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.80}24</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.83}25</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.86}26</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.90}27</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.93}28</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.96}29</font>��
                            	{elseif $_A.borrow_result.borrow_period == 0.10}30</font>��
                            	{elseif $_A.borrow_result.borrow_period >= 1 && $_A.borrow_result.borrow_period<10 }{$_A.borrow_result.borrow_period|truncate:1}</font>����
                            	{else}{$_A.borrow_result.borrow_period|truncate:2}</font>����
                            	{/if}
		</div>	
		<div class="s">��֤�ֻ���</div>
		<div class="c">
        {if $_A.borrow_result.phone_status==1}{$_A.borrow_result.phone}{else}δ��֤{/if}
		
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ҵ����/��ʵ������</div>
		<div class="r">
			{$_A.borrow_result.b_enterprise}
		</div>
		<div class="s">ע����룺</div>
		<div class="c">
			{$_A.borrow_result.b_regist}
		</div>
	</div>
	<div class="module_border">
		<div class="l">���˴���</div>
		<div class="r">
			{$_A.borrow_result.b_legal}
		</div>
		<div class="s">���֤���룺</div>
		<div class="c">
			{$_A.borrow_result.b_card}
		</div>
	</div>
	<div class="module_border">
		<div class="l">��ϵ�绰��</div>
		<div class="r">
			{$_A.borrow_result.b_tel}
		</div>
		<div class="s">�ֻ���</div>
		<div class="c">
			{$_A.borrow_result.b_phone}
		</div>
	</div>
	<div class="module_border" style="display:none">
		<div class="l">�����ˣ�</div>
		<div class="r">
			{$_A.borrow_result.b_agent}
		</div>
		<div class="s">��ַ��</div>
		<div class="c">
			{$_A.borrow_result.b_address}
		</div>
	</div>
	<form action="{$_A.query_url_all}" method="post"  name="form1" onsubmit="return check_form();">
	<div class="module_border">
	    <input type="hidden" name="s_id" value="{$_A.borrow_result.s_id}" />
		<div class="l">����ע��</div>
		<div class="r">
			<textarea name="verify_remark" rows="5" cols="40" {if $_A.borrow_result.status==1} readonly="readonly"{/if}>{$_A.borrow_result.verify_remark}</textarea>
		</div>
		<div class="s"></div>
		<div class="c">
		{if $_A.borrow_result.status==1}
		�Ѵ���
		{else}
		<input type="radio" name="status" value="1" />�����ɹ�&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="2"  checked="checked"/>����ʧ��<br />

		<input type="submit"  src="{$_A.tpldir}/images/button.gif" align="absmiddle" value="�ύ����" class="submit_button" />
		{/if}
		</div>
	</div>
	</form>
	{literal}
<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['verify_remark'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '����ע������д' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
</script>
{/literal}
</div>
{else}
<div class="module_add">
	<div class="module_title"><strong>�����б�</strong></div>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�û�����</td>
			<td width="" class="main_td">�ֻ�����</td>
			<td width="*" class="main_td">�����</td>
			<td width="" class="main_td">�������</td>
			<td width="" class="main_td">�����;</td>
			<td width="" class="main_td">���ʽ</td>
			<td width="" class="main_td">�������</td>
            {if $magic.request.status=="1"}
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="120" class="main_td">����ע</td>
			{else}
			<td width="" class="main_td">״̬</td>
			<td width="" class="main_td">���ʱ��</td>
			{/if}
			<td width="" class="main_td">�鿴</td>
		</tr>
		{ list  module="borrow" function="GetshenqingList" var="loop"  username="request"  status="request" dotime1="request" dotime2="request"}
		{foreach from="$loop.list" item="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			<td>{ $item.s_id}<input type="hidden" name="id[]" value="{$item.s_id}" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?{$_A.admin_url}&q=module/users/view&user_id={$item.user_id}",500,230,"true","","true","text");'>	{$item.username}</a></td>
			<td>{if $item.phone_status==1}{$item.phone}{else}δ��֤{/if}</td>
			<td>{$item.account}Ԫ</td>
			<td>{if $item.borrow_period == 0.03}1��
                            	{elseif $item.borrow_period == 0.06}2��
                            	{elseif $item.borrow_period == 0.10}3��
                            	{elseif $item.borrow_period == 0.13}4��
                            	{elseif $item.borrow_period == 0.16}5��
                            	{elseif $item.borrow_period == 0.20}6��
                            	{elseif $item.borrow_period == 0.23}7��
                            	{elseif $item.borrow_period == 0.26}8��
                            	{elseif $item.borrow_period == 0.30}9��
                            	{elseif $item.borrow_period == 0.33}10��
                            	{elseif $item.borrow_period == 0.36}11��
                            	{elseif $item.borrow_period == 0.40}12��
                            	{elseif $item.borrow_period == 0.43}13��
                            	{elseif $item.borrow_period == 0.46}14��
                            	{elseif $item.borrow_period == 0.50}15��
                            	{elseif $item.borrow_period == 0.53}16��
                            	{elseif $item.borrow_period == 0.56}17��
                            	{elseif $item.borrow_period == 0.60}18��
                            	{elseif $item.borrow_period == 0.63}19��
                            	{elseif $item.borrow_period == 0.66}20��
                            	{elseif $item.borrow_period == 0.70}21��
                            	{elseif $item.borrow_period == 0.73}22��
                            	{elseif $item.borrow_period == 0.76}23��
                            	{elseif $item.borrow_period == 0.80}24��
                            	{elseif $item.borrow_period == 0.83}25��
                            	{elseif $item.borrow_period == 0.86}26��
                            	{elseif $item.borrow_period == 0.90}27��
                            	{elseif $item.borrow_period == 0.93}28��
                            	{elseif $item.borrow_period == 0.96}29��
                            	{elseif $item.borrow_period == 0.10}30��
                            	{elseif $item.borrow_period >= 1 && $item.borrow_period< 10 }{$item.borrow_period|truncate:1}����
                            	{else}{$item.borrow_period|truncate:2}����
                            	{/if}</td>
			<td>{$item.borrow_use|linkages:"borrow_use"}</td>					
			<td>{$item.borrow_style|linkages:"borrow_style"}</td>
			<td>{if $item.vouchstatus==1}<font color="#FF0000">��������</font>{elseif $item.is_flow==1}<font color="#FF0000">��ת���</font>{elseif $item.is_jin==1}<font color="#FF0000">��ֵ���</font>{elseif $item.fast_status==1}<font color="#FF0000">��Ѻ���</font>{else}��ͨ����{/if}</td>
			

			{if $magic.request.status=="1"}
			<td>����</td>
			<td>{$item.verify_time|date_format:"Y-m-d"}</td>
			<td>{$item.verify_remark}</td>
			{else}
			<td>δ����</td>
			<td>{$item.addtime|date_format}</td>
			{/if}
			<td title="{$item.name}"><a href="{$_A.query_url_all}&shenqing_view={$item.s_id}">�鿴</a></td>
			
		</tr>
		{/foreach}
		
		<tr>
		<td colspan="14" class="action">
		<div class="floatl">
			
		</div>
		<div class="floatr">
			  �û�����<input type="text" name="username" id="username" value="{$magic.request.username}" size="8"/>
			 ���ʱ�䣺<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> �� <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>
			 <input type="button" value="����" class="submit" onclick="sousuo('{$_A.query_url}/shenqing&status={$magic.request.status}')">
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

var urls = '{$_A.query_url}/first';
{literal}
function sousuo(url){
	var sou = "";
	var username = $("#username").val();
	if (username!="" && username!=null){
		sou += "&username="+username;
	}
	var dotime1 = $("#dotime1").val();
	if (dotime1!="" && dotime1!=null){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!="" && dotime2!=null){
		sou += "&dotime2="+dotime2;
	}
	
		location.href=url+sou;
	
}
</script>
{/literal}
{else}

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="{$_A.query_url_all}&check={$magic.request.check}" >
	<div class="module_border_ajax">
		<div class="l">���״̬:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>����ͨ�� <input type="radio" name="status" value="0"  checked="checked"/>����ͨ�� </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7">{ $_A.borrow_result.verify_remark}</textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">��֤��:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="{ $magic.request.check}" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>

{/if}