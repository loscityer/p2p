<ul class="nav3"> 
<li><a href="{$_A.query_url}/set" {if $magic.request.nstatus==""} id="c_so"{/if}>��������</a></li> 
<li><a href="{$_A.query_url}/list&nstatus=1" {if $magic.request.nstatus=="1"}id="c_so"{/if}>���ͼ�¼</a></li> 
</ul> 

{if $_A.query_type != "type_edit"&& $magic.request.nstatus==""}
     <div class="module_add">
            <form name="form1" method="post" action="{$_A.query_url}/new" onsubmit="return check_form()" >
            	<div class="module_title"><strong> ��Ӷ�������ģ��</strong></div>
            	
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_type}��</div>
            		<div class="c">
            				<input type="text"  name="typename"  value=""/> *
            		</div>
            	</div>
            
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_content}��</div>
            		<div class="c">
            			<!--<input type="text" name="type_content"  value=""/> *-->
                        <textarea cols="50" rows="5" name="type_content"></textarea>*�������ܳ���62�֣��������š��ո����ڣ�������Ϊϵͳ�����ֶΣ������޸�
            		</div>
            	</div>
            	
            	<div class="module_border">
        		<div class="l">{$MsgInfo.sms_nid}��</div>
        		<div class="c">
        			<input type="text" name="nid"  value="" /> *
        		</div>
            	</div>
                
            <!--	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_pre}��</div>
            		<div class="c">
            			<input type="text" name="sms_pre"  value="" /> *
            		</div>
            	</div>
            	-->
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_advance}��</div>
            		<div class="c">
            			<input type="text" name="advance_time"  value="0" onkeyup="value=value.replace(/[^0-9]/g,'')"/>*��ע�⣺Ϊ0ʱ��ʾ�������ͣ�
            		</div>
            	</div>
            	
            	
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_status}��</div>
            		<div class="c">
            			<select name="status">
            				<option value="1">{$MsgInfo.sms_open}</option>
            				<option value="0">{$MsgInfo.sms_close}</option>
            			
            			</select>            		
            		</div>
            	</div>
            	<div class="module_border">
             <input type='checkbox'  value="pawn" name="dyb">��Ѻ��</input>&nbsp;|&nbsp;
             <input type='checkbox'  value="credit" name="xyb">���ñ�</input>&nbsp;|&nbsp;
             <input type='checkbox'  value="worth" name="jzb">��ֵ��</input>&nbsp;|&nbsp;
             <input type='checkbox'  value="day" name="tb">���</input>&nbsp;|&nbsp;
             <input type='checkbox'  value="vouch" name="dbb">������</input>&nbsp;|&nbsp;
             <input type='checkbox'  value="roam" name="lzb">��ת��</input>&nbsp;|&nbsp;
             <input type='checkbox'  value="second" name="mb">���</input>
             <font color="red">(ע�⣺�±����Ѳ���Ҫѡ�����)</font>
             </div>
            	<div class="module_submit" >            	
            		<input type="submit"  name="submit" value="{$MsgInfo.sms_submit}" />
            		<input type="reset"  name="reset" value="{$MsgInfo.sms_reset}" />
            	</div>
            </form>
            </div>

            <div class="module_add">
            	<div class="module_title"><strong>�����б�</strong></div>
            
            </div>
            <table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
            	<form action="{$_A.query_url}/type_action" method="post">
            	<tr >
            		<td class="main_td">{$MsgInfo.sms_id}</td>
            		<td class="main_td">{$MsgInfo.sms_type}</td>
            		<td class="main_td">{$MsgInfo.sms_nid}</td>
            		<td class="main_td">{$MsgInfo.sms_content}</td>
                    <td class="main_td">{$MsgInfo.sms_status}</td>
            		<td class="main_td">{$MsgInfo.sms_action}</td>
            	</tr>
            	{list module="sms" function="GetTypeList" var="loop"}
            	{ foreach  from=$loop.list key=key item=item}
            	<tr {if $key%2==1} class="tr2"{/if}>
            		<td  >{ $item.id}</td>
            		<td  >{$item.typename}</td>
            		<td  >{$item.nid}</td>
            		<td  >{$item.type_content|default:10}</td>
            		<td  >{if $item.status==0}�ر�{elseif $item.status==1}����{else}{/if}</td>
                    <td  width="130">{if $item.status==0}<a href="{$_A.query_url}/open&id={$item.id}">{$MsgInfo.sms_open}</a>{else}<a href="{$_A.query_url}/close&id={$item.id}">{$MsgInfo.sms_close}</a>{/if}/ <a href="{$_A.query_url}/type_edit&id={$item.id}">{$MsgInfo.sms_update}</a> </td>
            	</tr>
            	{ /foreach}
            	<tr >
            		<td colspan="8"  class="page">
            			{$loop.pages|showpage}
            		</td>
            	</tr>
            	{/list}
            	<tr >
            		<td colspan="8"  class="submit">
            			<input type="submit" name="submit" value="{$MsgInfo.sms_submit}" />
            		</td>
            	</tr>
            	</form>	
            </table>


           


{elseif $_A.query_type == "type_edit"}

         <form name="form1" method="post" action="{$_A.query_url}/type_edit" onsubmit="return check_form()" >
            	<div class="module_title"><strong> �޸Ķ�������ģ��</strong></div>
            	
                <div class="module_border">
            		<div class="l">{$MsgInfo.sms_id}��</div>
            		<div class="c">
            				<input type="text" name="id" readonly="true"  value="{$_A.sms_type_result.id}"/> *
            		</div>
            	</div>
                
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_type}��</div>
            		<div class="c">
            				<input type="text" name="typename"  value="{$_A.sms_type_result.typename}"/> *
            		</div>
            	</div>
            
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_content}��</div>
            		<div class="c">
            			<!--<input type="text" name="type_content"  value="{$_A.sms_type_result.type_content}"/> *
                       --> <textarea cols="50" rows="5" name="type_content">{$_A.sms_type_result.type_content}</textarea>*�������ܳ���62�֣��������š��ո����ڣ�������Ϊϵͳ�����ֶΣ������޸�
            	
            		</div>
            	</div>
            	
            	<div class="module_border">
        		<div class="l">{$MsgInfo.sms_nid}��</div>
        		<div class="c">
        			<input type="text" name="nid"  value="{$_A.sms_type_result.nid}" /> *
        		</div>
            	</div>
                
            	<!--<div class="module_border">
            		<div class="l">{$MsgInfo.sms_pre}��</div>
            		<div class="c">
            			<input type="text" name="sms_pre"  value="{$_A.sms_type_result.sms_pre}" /> *
            		</div>
            	</div>
            	-->
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_advance}��</div>
            		<div class="c">
            			<input type="text" name="advance_time"  value="{$_A.sms_type_result.advance_time}" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
            		</div>
            	</div>
            	
            	
            	<div class="module_border">
            		<div class="l">{$MsgInfo.sms_status}��</div>
            		<div class="c">
            			<select name="status">
            				<option value="1" {if $_A.sms_type_result.status==1}selected="true"{/if}>{$MsgInfo.sms_open}</option>
            				<option value="0" {if $_A.sms_type_result.status==0}selected="true"{/if}>{$MsgInfo.sms_close}</option>
            			
            			</select>            		
            		</div>
            	</div>
                <div class="module_border">
                 <input type='checkbox'  name="dyb" value="pawn"  {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.pawn!=''}checked='true'{/if}>��Ѻ��</input>&nbsp;|&nbsp;
                 <input type='checkbox'  name="xyb" value="credit" {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.credit!=''}checked='true'{/if}>���ñ�</input>&nbsp;|&nbsp;
                 <input type='checkbox'  name="jzb" value="worth" {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.worth!=''}checked='true'{/if}>��ֵ��</input>&nbsp;|&nbsp;
                 <input type='checkbox'  name="tb" value="day" {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.day!=''}checked='true'{/if}>���</input>&nbsp;|&nbsp;
                 <input type='checkbox'  name="dbb" value="vouch" {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.vouch!=''}checked='true'{/if}>������</input>&nbsp;|&nbsp;
                 <input type='checkbox'  name="lzb" value="roam" {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.roam!=''}checked='true'{/if}>��ת��</input>&nbsp;|&nbsp;
                 <input type='checkbox'  name="mb" value="second" {if $_A.sms_type_result.nid!="new_notice"}disabled="disabled"{/if} {if $_A.sms_type_result.second!=''}checked='true'{/if}>���</input>
                </div>
            	<div class="module_submit" >            	
            		<input type="submit"  name="submit" value="{$MsgInfo.sms_submit}" />
            		<input type="reset"  name="reset" value="{$MsgInfo.sms_reset}" />
            	</div>
            </form>



            {literal}
            <script>
            function check_form(){
            	
            	var frm = document.forms['form1'];
            	var title = frm.elements['typename'].value;
            	
            	 var errorMsg = '';
            	  if (title == "") {
            		errorMsg += '���ѵ�{$MsgInfo.sms_name}������д' + '\n';
            	  }
            	 
            	  
            	  if (errorMsg.length > 0){
            		alert(errorMsg); return false;
            	  } else{  
            		return true;
            	  }
            }
            
            </script>
            {/literal}
            
{elseif $_A.query_type == "list"&& $magic.request.nstatus!=""}

        <div style="width:100%; text-align:left">
        	<div class="module_add">
        	<div class="module_title"><strong>�ֻ����ŷ��ͼ�¼�б�</strong><span style="float:right">
        		�û�����<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>  �ֻ��ţ�<input type="text" name="phone" id="phone" value="{$magic.request.phone}"/> ���ͣ�<input type="text" name="sms_type" id="sms_type" value="{$magic.request.sms_type}"/>״̬��{linkages nid="approve_sms_status" name="status" value="$magic.request.status" default="�鿴ȫ��" type="value"}   <input type="button" value="{$MsgInfo.users_name_sousuo}" / onclick="sousuo()"></span></div>
        	</div>
            <form action="" method="post" id="form1">
        <table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
        	<tr >
            	<td width="" class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
        		
        		<td width="" class="main_td">ID</td>
        		<td width="" class="main_td">�û�</td>
        		<td width="*" class="main_td">�ֻ�����</td>
                <td width="*" class="main_td">��������</td>
        		<!--<td width="*" class="main_td">����</td>-->
        		<td width="*" class="main_td">��������</td>
        		<td width="*" class="main_td">����ʱ��</td>	
        		<!--<td width="*" class="main_td">����ʱ��</td>-->		
        		<td width="*" class="main_td">����</td>
        	</tr>
        	{ list module="sms" function="getSmslogList" var="loop" epage=20 page=request username=request phone=request nstatus=request status=request sms_sendcode='sms' sms_type=request}
        	{foreach from="$loop.list" item="item"}
        	<tr {if $key%2==1} class="tr2"{/if}>
            	<td class="main_td1" align="center"><input type="checkbox" name="id[{$key}]" value="{$item.id}"/></td>
        		
        		<td class="main_td1" align="center">{ $item.id}</td>
        		<td class="main_td1" align="center">{$item.username|default:"-"}</td>
        		<td class="main_td1" align="center">{$item.phone}</td>
                <td class="main_td1" align="center">{$item.type}</td>
        		<!--<td class="main_td1" align="center">{$item.type|linkages:"approve_sms_type"}</td>-->
        		<td class="main_td1" align="center">{$item.contents}</td>
        		<td class="main_td1" align="center">{$item.addtime|date_format}</td>
        		<!--<td class="main_td1" align="center">{$item.send_time|date_format}</td>-->
        		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("���ż�¼�鿴","url:get??dyjsd&q=code/approve/sms_log&view={$item.id}",500,230,"true","","false","text");'/>�鿴</a></td>
        	</tr>
        	{/foreach}
        	<tr>
        			<td colspan="11" class="action">
        			<div class="floatl">
                    <select name="type"><option value="delete">ɾ��</option>
		          	</select> 
                    <input type="submit"  value=" ���� " />
        			<script>
        	  var url = '{$_A.query_url_all}';
        	    {literal}
        	  	function sousuo(){
        			var username = $("#username").val();
        			var phone = $("#phone").val();
        			var status = $("#status").val();
                    var nstatus=1;
                    var sms_type = $("#sms_type").val();
        			location.href=url+"&username="+username+"&phone="+phone+"&status="+status+"&sms_type="+sms_type+"&nstatus="+nstatus;
        		}
        	  
        	  </script>
        	  {/literal}
        			</div>
        			<div class="floatr">
        			</div>
        			</td>
        		</tr>
        	<tr align="center">
        		<td colspan="10" align="center"><div align="center">{$loop.pages|showpage}</div></td>
        	</tr>
        	{/list}
        	
        </table>
        </form>
</div>
{/if}