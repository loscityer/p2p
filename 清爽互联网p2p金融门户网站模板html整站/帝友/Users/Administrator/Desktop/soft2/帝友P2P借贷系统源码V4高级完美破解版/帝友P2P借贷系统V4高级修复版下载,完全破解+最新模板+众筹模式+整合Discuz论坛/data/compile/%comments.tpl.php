<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']==""): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list" id="c_so">���۹���</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/set">��������</a></li> 
</ul> 
<? endif; ?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="set"): ?>
<div class="module_add">
		<form action="" method="post"  enctype="multipart/form-data" >
		<div class="module_title"><strong>��������</strong></div>
		<div class="module_border">
			<div class="d">�Ƿ������ۣ�</div>
			<div class="c">
				<? 
		$_value = explode(",","1|��,0|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_comments_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_comments_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_comments_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_comments_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
			</div>
		</div>
		
		<div class="module_border">
			<div class="d">�����Ƿ���ˣ�</div>
			<div class="c">
				<? 
		$_value = explode(",","1|��,0|��");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_comments_check_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_comments_check_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_comments_check_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_comments_check_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">�������۵�ʱ�䣺</div>
			<div class="c">
				<input type="text" name="con_comments_time" value="<? if (!isset($this->magic_vars['_G']['system']['con_comments_time'])) $this->magic_vars['_G']['system']['con_comments_time'] = ''; echo $this->magic_vars['_G']['system']['con_comments_time']; ?>"/>�� ���û�ע��೤ʱ��ſ��Խ������ۣ�0Ϊ���ޣ�
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">�������ιؼ��֣�</div>
			<div class="c">
				<textarea name="con_comments_keywords" cols="40" rows="6"><? if (!isset($this->magic_vars['_G']['system']['con_comments_keywords'])) $this->magic_vars['_G']['system']['con_comments_keywords'] = ''; echo $this->magic_vars['_G']['system']['con_comments_keywords']; ?></textarea><br />����ؼ����� ��|�� ����
			</div>
		</div>
		
		
		<div class="module_border">
		<div class="d">���������û���</div>
			<div class="c">
				<textarea name="con_comments_users" cols="40" rows="6"><? if (!isset($this->magic_vars['_G']['system']['con_comments_users'])) $this->magic_vars['_G']['system']['con_comments_users'] = ''; echo $this->magic_vars['_G']['system']['con_comments_users']; ?></textarea><br />����û��� ��|�� ����
			</div>
		</div>
			
		
		<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button"  /></div>
			</form>
		</div>
	</div>

<? else: ?>
	<? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?>
<div class="module_add">
<div class="module_title"><strong>�����޸Ļظ�</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['comments_result']['id'])) $this->magic_vars['_A']['comments_result']['id'] = ''; echo $this->magic_vars['_A']['comments_result']['id']; ?>" /><input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['comments_result']['user_id'])) $this->magic_vars['_A']['comments_result']['user_id'] = ''; echo $this->magic_vars['_A']['comments_result']['user_id']; ?>" />�޸����� <? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="l">����ID��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['comments_result']['id'])) $this->magic_vars['_A']['comments_result']['id'] = ''; echo $this->magic_vars['_A']['comments_result']['id']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">״̬��</div>
		<div class="c">
			<? 
		$_value = explode(",","1|�����,2|��ֹ");
		$display = "";$_che = $this->magic_vars['_A']['comments_result']['status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['comments_result']['username'])) $this->magic_vars['_A']['comments_result']['username'] = ''; echo $this->magic_vars['_A']['comments_result']['username']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ݣ�</div>
		<div class="c">
			<textarea name="contents" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['comments_result']['contents'])) $this->magic_vars['_A']['comments_result']['contents'] = '';$_tmp = $this->magic_vars['_A']['comments_result']['contents'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ģ�飺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['comments_result']['code'])) $this->magic_vars['_A']['comments_result']['code'] = '';$_tmp = $this->magic_vars['_A']['comments_result']['code'];$_tmp = $this->magic_modifier("module",$_tmp,"");echo $_tmp;unset($_tmp); ?>  | 
			<? if (!isset($this->magic_vars['_A']['comments_result']['type'])) $this->magic_vars['_A']['comments_result']['type'] = ''; echo $this->magic_vars['_A']['comments_result']['type']; ?> |
			<? if (!isset($this->magic_vars['_A']['comments_result']['article_id'])) $this->magic_vars['_A']['comments_result']['article_id'] = ''; echo $this->magic_vars['_A']['comments_result']['article_id']; ?> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ʱ��IP��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['comments_result']['addtime'])) $this->magic_vars['_A']['comments_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['comments_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> | <? if (!isset($this->magic_vars['_A']['comments_result']['addip'])) $this->magic_vars['_A']['comments_result']['addip'] = ''; echo $this->magic_vars['_A']['comments_result']['addip']; ?>
		</div>
	</div>
	
	<div class="module_title"><strong>�ظ�</strong></div>
	<div class="module_border">
		<div class="l">�ظ����ݣ�</div>
		<div class="c">
			<textarea name="comments" rows="5" cols="30"></textarea><br />���ظ���Ϊ��
		</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">��֤�룺</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/plugins/index.php?q=imgcode&t=' + Math.random())"/>
		
			<img src="/plugins/index.php?q=imgcode" id="valicode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="ȷ���ύ" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
<? else: ?>
<div>
<? endif; ?>
	
	<div class="module_add">
	<div class="module_title"><strong>���۹����б�</strong></div>
	</div><form action="" method="post" id="form1">
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
		<td width="" class="main_td">������</td>
		<td width="" class="main_td">ģ��</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����</td>
		<td width="" class="main_td">����id</td>
		<td width="" class="main_td">������id</td>
		<td width="*" class="main_td">״̬</td>
		<td width="*" class="main_td">���ʱ��</td>
	</tr>
	<? $this->magic_vars['query_type']='GetCommentsList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/comments/comments.class.php');$this->magic_vars['magic_result'] = commentsClass::GetCommentsList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><input type="checkbox" name="id[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"/></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = ''; echo $this->magic_vars['item']['pid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['reply_id'])) $this->magic_vars['item']['reply_id'] = ''; echo $this->magic_vars['item']['reply_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>�����<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>��ͨ��<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>��ͨ��<? else: ?>����վ<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl"><select name="type"><option value="yes">���ͨ��</option><option value="no">��ͨ��</option><option value="delete">ɾ��</option>
			<option value="over">����վ</option>
			</select> <input type="submit"  value=" ���� " />
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			location.href=url+"&username="+username;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				�û�����<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>

	</form>
<!--�˵��б� ����-->
</div>
</div>
<? endif; ?>