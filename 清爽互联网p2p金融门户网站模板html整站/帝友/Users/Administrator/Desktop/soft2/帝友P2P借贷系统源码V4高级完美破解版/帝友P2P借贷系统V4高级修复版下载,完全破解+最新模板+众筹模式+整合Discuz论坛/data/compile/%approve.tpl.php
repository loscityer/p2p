
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "list"): ?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "realname" ||  $this->magic_vars['_A']['query_type']=="realname_id5list" ||  $this->magic_vars['_A']['query_type']=="realname_id5set"): ?>

	<? $this->magic_include(array('file' => "approve.realname.tpl", 'vars' => array('template_dir' => 'modules/approve')));?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "edu" ||  $this->magic_vars['_A']['query_type']=="edu_id5" ||  $this->magic_vars['_A']['query_type']=="edu_set"): ?>

	<? $this->magic_include(array('file' => "approve.edu.tpl", 'vars' => array('template_dir' => 'modules/approve')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "video"): ?>

	<? $this->magic_include(array('file' => "approve.video.tpl", 'vars' => array('template_dir' => 'modules/approve')));?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "flow"): ?>

	<? $this->magic_include(array('file' => "approve.flow.tpl", 'vars' => array('template_dir' => 'modules/approve')));?>
    
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "sms" ||  $this->magic_vars['_A']['query_type'] == "sms_log" ||  $this->magic_vars['_A']['query_type'] == "sms_set"): ?>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>
<!--��ת�� 2-->
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" >
	<div class="module_border_ajax">
		<div class="l">���:</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['approve_result']['status'])) $this->magic_vars['_A']['approve_result']['status']=''; ;if (  $this->magic_vars['_A']['approve_result']['status']==1): ?>
		���ͨ��<input type="hidden" name="status" value="1" />
		<? else: ?>
		<input type="radio" name="status" value="1"/>���ͨ�� <input type="radio" name="status" value="2"  checked="checked"/>��˲�ͨ��<? endif; ?> </div>
	</div>
	
	
	<div class="module_border_ajax" >
		<div class="l">��˱�ע:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['approve_result']['verify_remark'])) $this->magic_vars['_A']['approve_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['approve_result']['verify_remark']; ?></textarea>
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
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="��˴˱�" />
	</div>
	
</form>
</div>


<? if (!isset($_REQUEST['view'])) $_REQUEST['view']=''; ;elseif (  $_REQUEST['view']!=""): ?>

<div  style="height:205px; overflow:scroll">
	<div class="module_border_ajax">
		<div class="l">�û���:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['username'])) $this->magic_vars['_A']['approve_result']['username'] = ''; echo $this->magic_vars['_A']['approve_result']['username']; ?>
		</div>
		<div class="l">�ֻ�:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['phone'])) $this->magic_vars['_A']['approve_result']['phone'] = ''; echo $this->magic_vars['_A']['approve_result']['phone']; ?>
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">����:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['type'])) $this->magic_vars['_A']['approve_result']['type'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_sms_type");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">״̬:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['status'])) $this->magic_vars['_A']['approve_result']['status'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_sms_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border_ajax">
		<div class="l">����:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['contents'])) $this->magic_vars['_A']['approve_result']['contents'] = ''; echo $this->magic_vars['_A']['approve_result']['contents']; ?>
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">������Ϣ:</div>
		<div class="c">���룺<? if (!isset($this->magic_vars['_A']['approve_result']['send_code'])) $this->magic_vars['_A']['approve_result']['send_code'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['send_code'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?> | ���أ�<? if (!isset($this->magic_vars['_A']['approve_result']['send_return'])) $this->magic_vars['_A']['approve_result']['send_return'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['send_return'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?> | ״̬��<? if (!isset($this->magic_vars['_A']['approve_result']['send_status'])) $this->magic_vars['_A']['approve_result']['send_status'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['send_status'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">��֤��:</div>
		<div class="c">��֤�룺<? if (!isset($this->magic_vars['_A']['approve_result']['code'])) $this->magic_vars['_A']['approve_result']['code'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['code'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?> | ״̬��<? if (!isset($this->magic_vars['_A']['approve_result']['code_status'])) $this->magic_vars['_A']['approve_result']['code_status'] = ''; echo $this->magic_vars['_A']['approve_result']['code_status']; ?> | ʱ�䣺<? if (!isset($this->magic_vars['_A']['approve_result']['check_time'])) $this->magic_vars['_A']['approve_result']['check_time'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['check_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border_ajax">
		<div class="l">���ʱ��:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['addtime'])) $this->magic_vars['_A']['approve_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="l">���ip:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['approve_result']['addip'])) $this->magic_vars['_A']['approve_result']['addip'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['addip'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
</div>

<? else: ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/sms" id="c_so">�ֻ���֤</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/sms_log">���ͼ�¼</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/sms_set">�ֻ�����</a></li> 
</ul> 
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="sms_log"): ?>

<div class="module_add">
	<div class="module_title"><strong>�ֻ����ŷ��ͼ�¼</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
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
	<? $this->magic_vars['query_type']='GetSmslogList';$data = array('var'=>'loop','epage'=>'10','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','phone'=>isset($_REQUEST['phone'])?$_REQUEST['phone']:'','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/approve/approve.class.php');$this->magic_vars['magic_result'] = approveClass::GetSmslogList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = '';$_tmp = $this->magic_vars['item']['username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_sms_type");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_sms_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['send_time'])) $this->magic_vars['item']['send_time'] = '';$_tmp = $this->magic_vars['item']['send_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("���ż�¼�鿴","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&view=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>�鿴</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var phone = $("#phone").val();
			var status = $("#status").val();
			location.href=url+"&username="+username+"&phone="+phone+"&status="+status;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  �ֻ��ţ�<input type="text" name="phone" id="phone" value="<? if (!isset($_REQUEST['phone'])) $_REQUEST['phone'] = ''; echo $_REQUEST['phone']; ?>"/> ״̬��<? $result = $this->magic_vars['_G']['_linkages']['approve_sms_status']; echo "<select name='status' id=status  style=''>"; echo "<option value=''>�鿴ȫ��</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['status']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="sms_set"): ?>
	
<div class="module_add">
<form action="" method="post"  enctype="multipart/form-data" >
	<div class="module_title"><strong>�ֻ���������</strong></div>
	
	
	<div class="module_border">
	<div class="d">�Ƿ����ֻ����͹��ܣ�</div>
		<div class="c">
			<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_sms_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_sms_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_sms_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_sms_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	
	
	
	<div class="module_border">
		<div class="d">�ֻ�����β�����֣�</div>
		<div class="c">
			<input type="text" name="con_sms_text" value="<? if (!isset($this->magic_vars['_G']['system']['con_sms_text'])) $this->magic_vars['_G']['system']['con_sms_text'] = ''; echo $this->magic_vars['_G']['system']['con_sms_text']; ?>" size="20"/>
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="d">�Ƿ�UTF-8ת����</div>
		<div class="c">
			<? 
		$_value = explode(",","0|��,1|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_sms_utf_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_sms_utf_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_sms_utf_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_sms_utf_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['admin_name_submit'])) $this->magic_vars['MsgInfo']['admin_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_submit']; ?>"  class="submit_button" /></div>
		</form>
	</div>
</div>

	<? else: ?>
<div class="module_add">
	<div class="module_title"><strong>�ֻ�������֤</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['approve_result']['id'])) $this->magic_vars['_A']['approve_result']['id'] = ''; echo $this->magic_vars['_A']['approve_result']['id']; ?>" />�޸��ֻ�������֤ ��<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">���</a>��<? else: ?>����ֻ�������֤<? endif; ?></strong></div>
	
	<div class="module_border">
		<div class="c">
			�� �� �� ��<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="username" value="<? if (!isset($this->magic_vars['_A']['approve_result']['username'])) $this->magic_vars['_A']['approve_result']['username'] = ''; echo $this->magic_vars['_A']['approve_result']['username']; ?>" /><? if (!isset($this->magic_vars['_A']['approve_result']['username'])) $this->magic_vars['_A']['approve_result']['username'] = ''; echo $this->magic_vars['_A']['approve_result']['username']; ?><? else: ?><input type="text" name="username" /><? endif; ?>
		</div>
	</div>
	
	
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
	<div class="module_border">
		<div class="c">
			״&nbsp;&nbsp;̬��<? if (!isset($this->magic_vars['_A']['approve_result']['status'])) $this->magic_vars['_A']['approve_result']['status'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<? endif; ?>
	
	<div class="module_border">
		<div class="c">
			�ֻ����룺<input type="text" name="phone" value="<? if (!isset($this->magic_vars['_A']['approve_result']['phone'])) $this->magic_vars['_A']['approve_result']['phone'] = ''; echo $this->magic_vars['_A']['approve_result']['phone']; ?>"/>
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
	<? $this->magic_vars['query_type']='GetSmsList';$data = array('var'=>'loop','epage'=>'10','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','phone'=>isset($_REQUEST['phone'])?$_REQUEST['phone']:'','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/approve/approve.class.php');$this->magic_vars['magic_result'] = approveClass::GetSmsList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0 ||   $this->magic_vars['item']['status']==1): ?><a href="javascript:void(0)" onclick='tipsWindown("�ֻ�������֤���","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'/>���</a> <? endif; ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a><? endif; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var phone = $("#phone").val();
			var status = $("#status").val();
			location.href=url+"&username="+username+"&phone="+phone+"&status="+status;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  �ֻ��ţ�<input type="text" name="phone" id="phone" value="<? if (!isset($_REQUEST['phone'])) $_REQUEST['phone'] = ''; echo $_REQUEST['phone']; ?>"/> ״̬��<? $result = $this->magic_vars['_G']['_linkages']['approve_status']; echo "<select name='status' id=status  style=''>"; echo "<option value=''>���ȫ��</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['status']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--�˵��б� ����-->
</div>
</div>
		
	<? endif; ?>
<? endif; ?>
<? endif; ?>