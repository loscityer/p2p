
<script>
function CheckExamine(){
	if ($("#verify_remark").val()==""){
		alert("备注不能为空");
		return false;
	}
}
</script>

<? if (!isset($_REQUEST['id5'])) $_REQUEST['id5']=''; ;if (  $_REQUEST['id5']!=""): ?>
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&id5=<? if (!isset($_REQUEST['id5'])) $_REQUEST['id5'] = ''; echo $_REQUEST['id5']; ?>" onsubmit="return CheckExamine()" >
	<div class="module_border_ajax">
		<div class="c">
		<strong>说明：</strong>如果要进行ID5认证，请先确保你的ID5已经签订好协议，同时后台这边的id5认证将不扣除用户的任何费用。</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5" id="verify_remark"></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="submit" class="submit_button" value="确认审核"  />
	</div>
	
</form>
</div>
<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;elseif (  $_REQUEST['examine']!=""): ?>
<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" onsubmit="return CheckExamine()">
	<div class="module_border_ajax">
		<div class="l">审核:</div>
		<div class="c">
		<? $result = $this->magic_vars['_G']['_linkages']['approve_status']; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['_A']['approve_result']['status']==$val['value']) { echo "<label><input  type='radio' name=status value='{$val['value']}' checked>{$val['name']}</label>"; }else{echo "<label><input  type='radio' name=status value='{$val['value']}' >{$val['name']}</label>";} endforeach;endif; ?>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"><? if (!isset($this->magic_vars['_A']['approve_result']['verify_remark'])) $this->magic_vars['_A']['approve_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['approve_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode1').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode1" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="确认审核" />
	</div>
	
</form>
</div>
<? else: ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/realname" id="c_so">实名认证</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/realname&action=id5list">ID5认证</a></li> 
</ul> 

<? if (!isset($_REQUEST['action'])) $_REQUEST['action']=''; ;if (  $_REQUEST['action']=="id5list"): ?>
<div class="module_add">
	<div class="module_title"><strong>ID5认证列表</strong></div>
	</div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="*" class="main_td">真实姓名</td>
		<td width="*" class="main_td">身份证号码</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">结果</td>
		<td width="*" class="main_td">头像</td>
		<td width="*" class="main_td">时间</td>
	</tr>
	
	<? $this->magic_vars['query_type']='GetId5List';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','realname'=>isset($_REQUEST['realname'])?$_REQUEST['realname']:'','card_id'=>isset($_REQUEST['card_id'])?$_REQUEST['card_id']:'','epage'=>'8');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/approve/approve.class.php');$this->magic_vars['magic_result'] = approveClass::GetId5List($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_cardid_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = ''; echo $this->magic_vars['item']['value']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?><a href="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = '';$_tmp = $this->magic_vars['item']['user_id'];$_tmp = $this->magic_modifier("idcard",$_tmp,"");echo $_tmp;unset($_tmp); ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = '';$_tmp = $this->magic_vars['item']['user_id'];$_tmp = $this->magic_modifier("idcard",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="40" /></a><? else: ?>-<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			<script>
			  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&action=id5list';
				
				function sousuo(){
					var username = $("#username").val();
					var realname = $("#realname").val();
					var card_id = $("#card_id").val();
					location.href=url+"&username="+username+"&realname="+realname+"&card_id="+card_id;
				}
			  </script>
			  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> 真实姓名：<input type="text" name="realname" id="realname" value="<? if (!isset($_REQUEST['realname'])) $_REQUEST['realname'] = '';$_tmp = $_REQUEST['realname'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  身份证号：<input type="text" name="card_id" id="card_id" value="<? if (!isset($_REQUEST['card_id'])) $_REQUEST['card_id'] = ''; echo $_REQUEST['card_id']; ?>"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
		
	<tr align="center">
		<td colspan="14" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
</table>


<? else: ?>

<div class="module_add">
	<div class="module_title"><strong>身份认证</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']==""): ?>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong>查找用户</strong>(将按顺序进行搜索)<input type="hidden" name="type" value="user_id" /></div>
	
	
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">用户ID：</div>
		<div class="c">
			<input type="text" name="user_id" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">邮箱：</div>
		<div class="c">
			<input type="text" name="email" />
		</div>
	</div>
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	<? else: ?>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="module_title"><strong>修改身份认证信息</strong><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /></div>
	
	<div class="module_border">
	<div class="l">用 户 名 ：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['approve_result']['username'])) $this->magic_vars['_A']['approve_result']['username'] = ''; echo $this->magic_vars['_A']['approve_result']['username']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="l">状&nbsp;&nbsp;态：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['approve_result']['status'])) $this->magic_vars['_A']['approve_result']['status'] = '';$_tmp = $this->magic_vars['_A']['approve_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_status");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['approve_result']['verify_remark'])) $this->magic_vars['_A']['approve_result']['verify_remark']=''; ;if (  $this->magic_vars['_A']['approve_result']['verify_remark']!=""): ?>
	<div class="module_border">
	<div class="l"><font color="#FF0000">审核备注：</font></div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['approve_result']['verify_remark'])) $this->magic_vars['_A']['approve_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['approve_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	
	<div class="module_border">
	<div class="l">真实姓名：</div>
		<div class="c">
			<input type="text" name="realname" value="<? if (!isset($this->magic_vars['_A']['approve_result']['realname'])) $this->magic_vars['_A']['approve_result']['realname'] = ''; echo $this->magic_vars['_A']['approve_result']['realname']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">性别：</div>
		<div class="c">
			<? 
		$_value = explode(",","男|男,女|女");
		$display = "";$_che = $this->magic_vars['_A']['approve_result']['sex'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="sex" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="sex" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="sex" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">身份证号：</div>
		<div class="c">
			<input type="text" name="card_id" value="<? if (!isset($this->magic_vars['_A']['approve_result']['card_id'])) $this->magic_vars['_A']['approve_result']['card_id'] = ''; echo $this->magic_vars['_A']['approve_result']['card_id']; ?>"/>
		</div>
	</div>
	
	
	
	<div class="module_border">
	<div class="l">身份证正面：</div>
		<div class="c">
			<input type="file" name="card_pic1" style=" width:200px"/><? if (!isset($this->magic_vars['_A']['approve_result']['card_pic1'])) $this->magic_vars['_A']['approve_result']['card_pic1']=''; ;if (  $this->magic_vars['_A']['approve_result']['card_pic1']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['approve_result']['card_pic1_url'])) $this->magic_vars['_A']['approve_result']['card_pic1_url'] = ''; echo $this->magic_vars['_A']['approve_result']['card_pic1_url']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>
		</div>
	</div>
	
	
	
	<div class="module_border">
	<div class="l">身份证背面：</div>
		<div class="c">
			<input type="file" name="card_pic2" size="6"  style=" width:200px"/><? if (!isset($this->magic_vars['_A']['approve_result']['card_pic2'])) $this->magic_vars['_A']['approve_result']['card_pic2']=''; ;if (  $this->magic_vars['_A']['approve_result']['card_pic2']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['approve_result']['card_pic2_url'])) $this->magic_vars['_A']['approve_result']['card_pic2_url'] = ''; echo $this->magic_vars['_A']['approve_result']['card_pic2_url']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>
		</div>
	</div>
	
	<div class="module_border" >
	<div class="l">验 证 码 ：</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	<? endif; ?>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>实名认证列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="" class="main_td">真实姓名</td>
		<td width="" class="main_td">身份证号</td>
		<td width="*" class="main_td">性别</td>
		<td width="*" class="main_td">正面</td>
		<td width="*" class="main_td">反面</td>
		<td width="*" class="main_td">ID5认证</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">时间</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetRealnameList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','realname'=>isset($_REQUEST['realname'])?$_REQUEST['realname']:'','card_id'=>isset($_REQUEST['card_id'])?$_REQUEST['card_id']:'','epage'=>'8');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/approve/approve.class.php');$this->magic_vars['magic_result'] = approveClass::GetRealnameList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex'] = ''; echo $this->magic_vars['item']['sex']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['card_pic1'])) $this->magic_vars['item']['card_pic1']=''; ;if (  $this->magic_vars['item']['card_pic1']==""): ?>-<? else: ?><a href="./<? if (!isset($this->magic_vars['item']['card_pic1_url'])) $this->magic_vars['item']['card_pic1_url'] = ''; echo $this->magic_vars['item']['card_pic1_url']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['card_pic2'])) $this->magic_vars['item']['card_pic2']=''; ;if (  $this->magic_vars['item']['card_pic2']==""): ?>-<? else: ?><a href="./<? if (!isset($this->magic_vars['item']['card_pic2_url'])) $this->magic_vars['item']['card_pic2_url'] = ''; echo $this->magic_vars['item']['card_pic2_url']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("ID5认证审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&id5=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>",500,230,"true","","false","text");'><? if (!isset($this->magic_vars['item']['id5_status'])) $this->magic_vars['item']['id5_status'] = '';$_tmp = $this->magic_vars['item']['id5_status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_cardid_status");echo $_tmp;unset($_tmp); ?></a></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status'] = '';$_tmp = $this->magic_vars['item']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"approve_status");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("人工审核","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>",500,230,"true","","false","text");'/>审核</a>/<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&page=<? if (!isset($_REQUEST['page'])) $_REQUEST['page'] = ''; echo $_REQUEST['page']; ?>">修改</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			<script>
			  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
				
				function sousuo(){
					var username = $("#username").val();
					var realname = $("#realname").val();
					var card_id = $("#card_id").val();
					location.href=url+"&username="+username+"&realname="+realname+"&card_id="+card_id;
				}
			  </script>
			  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="7"/> 真实姓名：<input type="text" size="7" name="realname" id="realname" value="<? if (!isset($_REQUEST['realname'])) $_REQUEST['realname'] = '';$_tmp = $_REQUEST['realname'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  身份证号：<input type="text" name="card_id" id="card_id" value="<? if (!isset($_REQUEST['card_id'])) $_REQUEST['card_id'] = ''; echo $_REQUEST['card_id']; ?>" size="7"/>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
			</td>
		</tr>
		
	<tr align="center">
		<td colspan="14" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>

	<? endif; ?>
<? endif; ?>
