<div class="module_add" >
	
	<div class="module_title"><strong>��⹤��</strong></div>
	
	
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">����</td>
			<td width="" class="main_td">��ʶ��</td>
			<td width="*" class="main_td">����</td>
			<td width="*" class="main_td">�ʽ�</td>
			<td width="*" class="main_td"></td>
			<td width="*" class="main_td">����</td>
			<td width="*" class="main_td">�ʽ�</td>
			<td width="*" class="main_td">�Ƿ�һ��</td>
		</tr>
		{loop module="borrow" plugins="tool" function="TypeCount" var="item"}
		<tr  {if $key%2==1} class="tr2"{/if}>
			
			<td>{$item.type|linkages:"account_type"|default:$item.type}</td>
			<td>{$item.type}</td>
			<td>{$item.num}</td>
			<td>{$item.count}</td>
			<td></td>
			<td id="{$item.type}_num">���ڼ��</td>
			<td id="{$item.type}_count">���ڼ��</td>
			<td id="{$item.type}_status">���ڼ��</td>
		</tr>
		{/loop}
</table>
<script>
var admin_url = '{$_A.query_url}/tool';
Get(0);
{literal}
function Get(key){
	$.ajax({
	   type: "GET",
	   url: admin_url,
	   data: "key="+key,
	   success: function(msg){
	   		text = eval("("+msg+")");
			type = text.type;
			status = text.status;
			if (status==-1){
				$("#"+type+"_num").html('δ��⵽');
				$("#"+type+"_count").html('δ��⵽');
				$("#"+type+"_status").html('δ��⵽');
			
			}else{
				
				$("#"+type+"_num").html(text.num);
				$("#"+type+"_count").html(text.count);
				if (text.status==1){
					$("#"+type+"_status").html("��");
				}else{
					$("#"+type+"_status").html("��");
				}
	
			}
			key = key+1;
				 Get(key);
	   }
	});
}
</script>
{/literal}
	
</div>