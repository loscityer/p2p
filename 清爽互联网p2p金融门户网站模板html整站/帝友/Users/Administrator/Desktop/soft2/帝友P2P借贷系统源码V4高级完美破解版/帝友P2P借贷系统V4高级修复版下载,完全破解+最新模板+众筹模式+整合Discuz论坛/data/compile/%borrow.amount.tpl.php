<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']==""): ?>
<ul class="nav3"> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount" id="c_so">额度列表</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount_apply">额度审核</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount_log">额度记录</a></li> 
<li><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount_type">额度类型</a></li> 
</ul> 
<? endif; ?>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "amount"): ?>

<div class="module_add">
	
	
	<div class="module_title"><strong>用户额度列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td" colspan="3" align="center">借款额度</td>
		<td width="" class="main_td" colspan="3" align="center">担保借款额度</td>
		<td width="" class="main_td" colspan="3" align="center">担保投资额度</td>
	</tr>
	<tr >
		<td width="" class="main_td"></td>
		<td width="*" class="main_td">总额度 =</td>
		<td width="" class="main_td">可用额度 +</td>
		<td width="*" class="main_td">不可用额度</td>
		<td width="*" class="main_td">总额度 =</td>
		<td width="" class="main_td">可用额度 +</td>
		<td width="*" class="main_td">不可用额度</td>
		<td width="*" class="main_td">总额度 =</td>
		<td width="" class="main_td">可用额度 +</td>
		<td width="*" class="main_td">不可用额度</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAmountList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','epage'=>'20');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['borrow_amount'])) $this->magic_vars['item']['borrow_amount'] = ''; echo $this->magic_vars['item']['borrow_amount']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['borrow_amount_use'])) $this->magic_vars['item']['borrow_amount_use'] = ''; echo $this->magic_vars['item']['borrow_amount_use']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['borrow_amount_nouse'])) $this->magic_vars['item']['borrow_amount_nouse'] = ''; echo $this->magic_vars['item']['borrow_amount_nouse']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vouch_borrow'])) $this->magic_vars['item']['vouch_borrow'] = ''; echo $this->magic_vars['item']['vouch_borrow']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vouch_borrow_use'])) $this->magic_vars['item']['vouch_borrow_use'] = ''; echo $this->magic_vars['item']['vouch_borrow_use']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vouch_borrow_nouse'])) $this->magic_vars['item']['vouch_borrow_nouse'] = ''; echo $this->magic_vars['item']['vouch_borrow_nouse']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vouch_tender'])) $this->magic_vars['item']['vouch_tender'] = ''; echo $this->magic_vars['item']['vouch_tender']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vouch_tender_use'])) $this->magic_vars['item']['vouch_tender_use'] = ''; echo $this->magic_vars['item']['vouch_tender_use']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vouch_tender_nouse'])) $this->magic_vars['item']['vouch_tender_nouse'] = ''; echo $this->magic_vars['item']['vouch_tender_nouse']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "amount_type"): ?>

<div class="module_add">
	<div class="module_title"><strong>额度类型</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['amount_type_result']['id'])) $this->magic_vars['_A']['amount_type_result']['id'] = ''; echo $this->magic_vars['_A']['amount_type_result']['id']; ?>" />修改类型 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加类型<? endif; ?></strong></div>
	
	
	<div class="module_border">
		<div class="l">类型名称：</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['amount_type_result']['name'])) $this->magic_vars['_A']['amount_type_result']['name'] = ''; echo $this->magic_vars['_A']['amount_type_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">额度类型：</div>
		<div class="c">
			<? $display ="<select name='amount_type'  id='amount_type'>";if (count($this->magic_vars['_A']['borrow_amount_type'])>0):foreach ($this->magic_vars['_A']['borrow_amount_type'] as  $k => $v) {if ($k==$this->magic_vars['_A']['amount_type_result']['amount_type']){$display .="<option value='$k' selected >$v</option>";
				}else{
					$display .="<option value='$k' >$v</option>";
				}
			};endif; $display .="</select>";echo $display; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">类型标识名：</div>
		<div class="c">
			<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['amount_type_result']['nid'])) $this->magic_vars['_A']['amount_type_result']['nid'] = ''; echo $this->magic_vars['_A']['amount_type_result']['nid']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">额度计算：</div>
		<div class="c">
			初始<input type="text" name="default" value="<? if (!isset($this->magic_vars['_A']['amount_type_result']['default'])) $this->magic_vars['_A']['amount_type_result']['default'] = ''; echo $this->magic_vars['_A']['amount_type_result']['default']; ?>" style="width:35px; overflow:hidden"/> + <select name="credit_nid"><option value="">无</option><? $this->magic_vars['query_type']='GetClassList';$data = array('limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/credit/credit.class.php');$this->magic_vars['magic_result'] = creditClass::GetClassList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?><option value="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" <? if (!isset($this->magic_vars['_A']['amount_type_result']['credit_nid'])) $this->magic_vars['_A']['amount_type_result']['credit_nid']='';if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['_A']['amount_type_result']['credit_nid']== $this->magic_vars['var']['nid']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
		
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>*<input type="text" name="multiples" value="<? if (!isset($this->magic_vars['_A']['amount_type_result']['multiples'])) $this->magic_vars['_A']['amount_type_result']['multiples'] = ''; echo $this->magic_vars['_A']['amount_type_result']['multiples']; ?>" style="width:25px; overflow:hidden"/>倍数+申请
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">描述：</div>
		<div class="c">
			<textarea name="remark" rows="5" cols="30"><? if (!isset($this->magic_vars['_A']['amount_type_result']['remark'])) $this->magic_vars['_A']['amount_type_result']['remark'] = ''; echo $this->magic_vars['_A']['amount_type_result']['remark']; ?></textarea>
		</div>
	</div>
	

	<div class="module_border_ajax" >
		<div class="l">验证码：</div>
		<div class="c">
		 <input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	
	
	<div class="module_submit"><input type="submit" value="确认提交" class="submit_button" /></div>
		</form>
	</div>
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	
	<div class="module_add">
	
	
	<div class="module_title"><strong>额度类型列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">名称</td>
		<td width="" class="main_td">类型</td>
		<td width="" class="main_td">标识名</td>
		<td width="*" class="main_td">初始额度</td>
		<td width="*" class="main_td">积分类型</td>
		<td width="*" class="main_td">积分倍数</td>
		<td width="*" class="main_td">简介</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAmountTypeList';$data = array('var'=>'loop','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountTypeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['amount_type'])) $this->magic_vars['item']['amount_type'] = '';$_tmp = $this->magic_vars['item']['amount_type']; if (!isset($this->magic_vars['_A']['borrow_amount_type'])) $this->magic_vars['_A']['borrow_amount_type'] = '';
$_tmp = $this->magic_modifier("in_array",$_tmp,$this->magic_vars['_A']['borrow_amount_type']);echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['default'])) $this->magic_vars['item']['default'] = ''; echo $this->magic_vars['item']['default']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['credit_name'])) $this->magic_vars['item']['credit_name'] = '';$_tmp = $this->magic_vars['item']['credit_name'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['multiples'])) $this->magic_vars['item']['multiples'] = ''; echo $this->magic_vars['item']['multiples']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	
	<tr align="center">
		<td colspan="10" align="center"><div align="center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div></td>
	</tr>
	<? unset($_magic_vars); ?>
	
</table>

<!--菜单列表 结束-->
</div>
</div>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "amount_apply"): ?>

<script>
function CheckExamine(){
	if ($("#verify_remark").val()==""){
		alert("备注不能为空");
		return false;
	}
}
</script>

<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine']=''; ;if (  $_REQUEST['examine']!=""): ?>
<div  style="height:305px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" onsubmit="return CheckExamine()">
	<div class="module_border_ajax">
		<div class="l">审核:</div>
		<div class="c">
		<? 
		$_value = explode(",","1|审核通过,2|审核不通过");
		$display = "";$_che = "";
		
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
	
	<div class="module_border_ajax">
		<div class="l">操作:</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['amount_apply_result']['oprate'])) $this->magic_vars['_A']['amount_apply_result']['oprate']=''; ;if (  $this->magic_vars['_A']['amount_apply_result']['oprate']=="add"): ?>增加<? else: ?>减少<? endif; ?>
	</div>
	<div class="module_border_ajax">
		<div class="l">申请额度:</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['amount_apply_result']['amount_account'])) $this->magic_vars['_A']['amount_apply_result']['amount_account'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['amount_account']; ?>
	</div>
	<div class="module_border_ajax">
		<div class="l">通过额度:</div>
		<div class="c">
		<input type="text" value="<? if (!isset($this->magic_vars['_A']['amount_apply_result']['amount_account'])) $this->magic_vars['_A']['amount_apply_result']['amount_account'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['amount_account']; ?>" name="account" />
	</div>
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark"  id="verify_remark" cols="45" rows="7"><? if (!isset($this->magic_vars['_A']['amount_apply_result']['verify_remark'])) $this->magic_vars['_A']['amount_apply_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['verify_remark']; ?></textarea>
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
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['amount_apply_result']['user_id'])) $this->magic_vars['_A']['amount_apply_result']['user_id'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['user_id']; ?>" />
		<input type="hidden" name="nid" value="<? if (!isset($this->magic_vars['_A']['amount_apply_result']['nid'])) $this->magic_vars['_A']['amount_apply_result']['nid'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['nid']; ?>" />
		<input type="hidden" name="id" value="<? if (!isset($_REQUEST['examine'])) $_REQUEST['examine'] = ''; echo $_REQUEST['examine']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="确认审核" />
	</div>
	
</form>
</div>
<? else: ?>


<div class="module_add">
	<div class="module_title"><strong>添加用户额度</strong></div>
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
	<div class="module_title"><strong>添加用户额度</strong><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /></div>
	
	<div class="module_border">
	<div class="l">用 户 名 ：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['users_result']['username'])) $this->magic_vars['_A']['users_result']['username'] = ''; echo $this->magic_vars['_A']['users_result']['username']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
	<div class="l">额度类型：</div>
		<div class="c">
			<? $display ="<select name='amount_type'  id='amount_type'>";if (count($this->magic_vars['_A']['borrow_amount_type'])>0):foreach ($this->magic_vars['_A']['borrow_amount_type'] as  $k => $v) {if ($k=='1'){$display .="<option value='$k' selected >$v</option>";
				}else{
					$display .="<option value='$k' >$v</option>";
				}
			};endif; $display .="</select>";echo $display; ?>
		</div>
	</div>
	
	<div class="module_border">
	<div class="l">操作：</div>
		<div class="c">
			<? 
		$_value = explode(",","add|增加,reduce|减少");
		$display = "";$_che = $this->magic_vars['_A']['amount_apply_result']['oprate'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="oprate" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="oprate" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="oprate" /> '.$k0[1].$display;
		}
		echo $display;
		?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">金额额度：</div>
		<div class="c">
			<input type="text" name="amount_account" value="<? if (!isset($this->magic_vars['_A']['amount_apply_result']['amount_account'])) $this->magic_vars['_A']['amount_apply_result']['amount_account'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['amount_account']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">申请信息：</div>
		<div class="c">
			<textarea name="content" cols="30" rows="4"><? if (!isset($this->magic_vars['_A']['amount_apply_result']['content'])) $this->magic_vars['_A']['amount_apply_result']['content'] = ''; echo $this->magic_vars['_A']['amount_apply_result']['content']; ?></textarea>
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
	<div class="module_title"><strong>用户额度申请列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="" class="main_td">类型</td>
		<td width="*" class="main_td">操作</td>
		<td width="*" class="main_td">申请金额</td>
		<td width="*" class="main_td">通过额度</td>
		<td width="*" class="main_td">备注</td>
		<td width="*" class="main_td">状态</td>
		<td width="*" class="main_td">时间</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAmountApplyList';$data = array('var'=>'loop','user_id'=>isset($_REQUEST['user_id'])?$_REQUEST['user_id']:'','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','epage'=>'8');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountApplyList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['amount_type'])) $this->magic_vars['item']['amount_type'] = '';$_tmp = $this->magic_vars['item']['amount_type']; if (!isset($this->magic_vars['_A']['borrow_amount_type'])) $this->magic_vars['_A']['borrow_amount_type'] = '';
$_tmp = $this->magic_modifier("in_array",$_tmp,$this->magic_vars['_A']['borrow_amount_type']);echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['oprate'])) $this->magic_vars['item']['oprate']=''; ;if (  $this->magic_vars['item']['oprate']=="add"): ?>增加<? else: ?>减少<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['amount_account'])) $this->magic_vars['item']['amount_account'] = ''; echo $this->magic_vars['item']['amount_account']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>待审核<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>审核通过<? else: ?>审核不通过<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="javascript:void(0)" onclick='tipsWindown("审核用户申请额度","url:get?<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&examine=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,330,"true","","false","text");'/>审核</a><? else: ?>-<? endif; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			<script>
			  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
				
				function amount_sou(){
					var username = $("#username").val();
					location.href=url+"&username="+username;
				}
			  </script>
			  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="7"/>  <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="amount_sou()">
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

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "amount_log"): ?>
	<div class="module_add">
	<div class="module_title"><strong>额度记录列表</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户</td>
		<td width="" class="main_td">类型</td>
		<td width="*" class="main_td">操作类型</td>
		<td width="*" class="main_td">操作</td>
		<td width="*" class="main_td">金额</td>
		<td width="*" class="main_td">备注</td>
		<td width="*" class="main_td">时间</td>
	</tr>
	<? $this->magic_vars['query_type']='GetAmountLogList';$data = array('var'=>'loop','user_id'=>isset($_REQUEST['user_id'])?$_REQUEST['user_id']:'','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','amount_type'=>isset($_REQUEST['amount_type'])?$_REQUEST['amount_type']:'','epage'=>'20');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountLogList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
	<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['amount_type'])) $this->magic_vars['item']['amount_type'] = '';$_tmp = $this->magic_vars['item']['amount_type']; if (!isset($this->magic_vars['_A']['borrow_amount_type'])) $this->magic_vars['_A']['borrow_amount_type'] = '';
$_tmp = $this->magic_modifier("in_array",$_tmp,$this->magic_vars['_A']['borrow_amount_type']);echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['oprate'])) $this->magic_vars['item']['oprate']=''; ;if (  $this->magic_vars['item']['oprate']=="add"): ?>增加<? else: ?>减少<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="15" class="action">
			<div class="floatl">
			增加的额度：<? if (!isset($this->magic_vars['loop']['oprate_add'])) $this->magic_vars['loop']['oprate_add'] = '';$_tmp = $this->magic_vars['loop']['oprate_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 减少的额度：<? if (!isset($this->magic_vars['loop']['oprate_reduce'])) $this->magic_vars['loop']['oprate_reduce'] = '';$_tmp = $this->magic_vars['loop']['oprate_reduce'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
			<script>
			  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
				
				function amount_sou(){
					var username = $("#username").val();
					var amount_type = $("#amount_type").val();
					location.href=url+"&username="+username+"&amount_type="+amount_type;
				}
			  </script>
			  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="7"/>  额度类型：<? $display ="<select name='amount_type'  id='amount_type'>"; $display .= "<option value=''>全部</option>";if (count($this->magic_vars['_A']['borrow_amount_type'])>0):foreach ($this->magic_vars['_A']['borrow_amount_type'] as  $k => $v) {if ($k==$_REQUEST['amount_type']){$display .="<option value='$k' selected >$v</option>";
				}else{
					$display .="<option value='$k' >$v</option>";
				}
			};endif; $display .="</select>";echo $display; ?> <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="amount_sou()">
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
<? endif; ?>