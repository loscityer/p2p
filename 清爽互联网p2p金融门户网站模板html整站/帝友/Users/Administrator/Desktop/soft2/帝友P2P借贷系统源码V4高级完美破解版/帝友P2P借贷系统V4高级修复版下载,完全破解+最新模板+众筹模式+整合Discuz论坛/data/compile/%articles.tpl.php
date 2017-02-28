<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>

<form action="" method="post" id="frm" enctype="multipart/form-data" >
<div class="module_add">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id"  value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />修改文章<? else: ?>添加文章<? endif; ?></strong><input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['articles_result']['user_id'])) $this->magic_vars['_A']['articles_result']['user_id'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['user_id']; if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_G']['user_id']);echo $_tmp;unset($_tmp); ?>" /></div>
	<div style="margin-top:10px;">
	<div style="float:right; width:30%;">
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px ">
			<div class="module_title"><strong>撰写新文章</strong></div>
			<div class="module_border">
				<div class="c">
					状态：<select name='status' >
					<option value="1" <? if (!isset($this->magic_vars['_A']['articles_result']['status'])) $this->magic_vars['_A']['articles_result']['status']=''; ;if (  $this->magic_vars['_A']['articles_result']['status']==1): ?> selected="selected"<? endif; ?>>发布</option>
					<option value="2" <? if (!isset($this->magic_vars['_A']['articles_result']['status'])) $this->magic_vars['_A']['articles_result']['status']=''; ;if (  $this->magic_vars['_A']['articles_result']['status']==2): ?> selected="selected"<? endif; ?>>草稿</option>
					<option value="3" <? if (!isset($this->magic_vars['_A']['articles_result']['status'])) $this->magic_vars['_A']['articles_result']['status']=''; ;if (  $this->magic_vars['_A']['articles_result']['status']==3): ?> selected="selected"<? endif; ?>>等待审核</option>
					</select>
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					排序：<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['articles_result']['order'])) $this->magic_vars['_A']['articles_result']['order'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="5" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					分类：<input type="checkbox" name="flag[]" value="index" align="absmiddle" <? if (!isset($this->magic_vars['_A']['articles_result']['flag'])) $this->magic_vars['_A']['articles_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['flag'];$_tmp = $this->magic_modifier("checked",$_tmp,"index");echo $_tmp;unset($_tmp); ?>/>首页 <input type="checkbox" name="flag[]" value="tuijian"  align="absmiddle" <? if (!isset($this->magic_vars['_A']['articles_result']['flag'])) $this->magic_vars['_A']['articles_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['flag'];$_tmp = $this->magic_modifier("checked",$_tmp,"tuijian");echo $_tmp;unset($_tmp); ?>/>推荐 <input type="checkbox" name="flag[]" value="ding"  align="absmiddle" <? if (!isset($this->magic_vars['_A']['articles_result']['flag'])) $this->magic_vars['_A']['articles_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['flag'];$_tmp = $this->magic_modifier("checked",$_tmp,"ding");echo $_tmp;unset($_tmp); ?>/>置顶
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					公开度：<input type="radio" name="public" value="1" checked="checked" onclick="$('#password').hide()" <? if (!isset($this->magic_vars['_A']['articles_result']['public'])) $this->magic_vars['_A']['articles_result']['public']=''; ;if (  $this->magic_vars['_A']['articles_result']['public']==1): ?> checked="checked"<? endif; ?> />公开 <input type="radio" name="public" value="2" onclick="$('#password').hide()"/<? if (!isset($this->magic_vars['_A']['articles_result']['public'])) $this->magic_vars['_A']['articles_result']['public']=''; ;if (  $this->magic_vars['_A']['articles_result']['public']==2): ?> checked="checked"<? endif; ?> >私密 <input type="radio" name="public" value="3" onclick="$('#password').show()" <? if (!isset($this->magic_vars['_A']['articles_result']['public'])) $this->magic_vars['_A']['articles_result']['public']=''; ;if (  $this->magic_vars['_A']['articles_result']['public']==3): ?> checked="checked"<? endif; ?> />加密  <input type="text" id="password" name='password' size="3" <? if (!isset($this->magic_vars['_A']['articles_result']['public'])) $this->magic_vars['_A']['articles_result']['public']=''; ;if (  $this->magic_vars['_A']['articles_result']['public']!=3): ?>style="display:none"<? endif; ?> value="<? if (!isset($this->magic_vars['_A']['articles_result']['password'])) $this->magic_vars['_A']['articles_result']['password'] = ''; echo $this->magic_vars['_A']['articles_result']['password']; ?> " />
				</div>
			</div>
			
			
			<div class="module_border">
				<div class="c">
					发布时间：<input type="text" name="publish"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['articles_result']['publish'])) $this->magic_vars['_A']['articles_result']['publish'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['publish'];$_tmp = $this->magic_modifier("default",$_tmp,"nowdate");echo $_tmp;unset($_tmp); ?>" size="30" onclick="change_picktime('yyyy-MM-dd HH:mm:ss')" readonly=""/>
				</div>
			</div>
			<div class="module_submit"><input type="button" value="确认提交" class="submit_button" name="save" onclick="submitForm()"/>
</div>
			
		</div>
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px; ">
			<div class="module_title"><strong>文章标签</strong></div>
			<div class="module_border" style="padding:10px;">
					标签：<input type="text" name="tags"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['articles_result']['tags'])) $this->magic_vars['_A']['articles_result']['tags'] = ''; echo $this->magic_vars['_A']['articles_result']['tags']; ?>" size="30"/>
			</div>
		</div>
		
		<div style="border:1px solid #CCCCCC; ">
			<div class="module_title"><strong>分类栏目</strong></div>
			<div class="module_border" style="padding-left:10px;">
					<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" style="width:94%" >
	
	<? $this->magic_vars['query_type']='GetTypeMenu';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetTypeMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['var'])) $this->magic_vars['item']['var'] = ''; echo $this->magic_vars['item']['var']; ?><input type="checkbox" align="absmiddle" name="type_id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new"): ?><? if (!isset($this->magic_vars['_A']['articles_type_id'])) $this->magic_vars['_A']['articles_type_id'] = '';$_tmp = $this->magic_vars['_A']['articles_type_id']; if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = '';
$_tmp = $this->magic_modifier("checked",$_tmp,$this->magic_vars['item']['id']);echo $_tmp;unset($_tmp); ?><? else: ?><? if (!isset($this->magic_vars['_A']['articles_result']['type_id'])) $this->magic_vars['_A']['articles_result']['type_id'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['type_id']; if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = '';
$_tmp = $this->magic_modifier("checked",$_tmp,$this->magic_vars['item']['id']);echo $_tmp;unset($_tmp); ?><? endif; ?> /> <? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	
</table>
			</div>
		</div>
		
		
		<div style="border:1px solid #CCCCCC; margin-top:10px; ">
			<div class="module_title"><strong>缩略图</strong></div>
			<div class="module_border" style="padding:10px;">
				<? if (!isset($this->magic_vars['_A']['articles_result']['litpic'])) $this->magic_vars['_A']['articles_result']['litpic']=''; ;if (  $this->magic_vars['_A']['articles_result']['litpic']!=""): ?><img src="<? if (!isset($this->magic_vars['_A']['articles_result']['fileurl'])) $this->magic_vars['_A']['articles_result']['fileurl'] = ''; echo $this->magic_vars['_A']['articles_result']['fileurl']; ?>" width="50" height="50" align="absmiddle" /><input type="checkbox" name="clearlitpic" value="1" title="选中则会删除掉缩略图" /><input type="hidden" name="oldlitpic" value="<? if (!isset($this->magic_vars['_A']['articles_result']['litpic'])) $this->magic_vars['_A']['articles_result']['litpic'] = ''; echo $this->magic_vars['_A']['articles_result']['litpic']; ?>" />取消 <? endif; ?><input type="file" name="litpic" style="width:150px" />
			</div>
		</div>
		
		
		<div style="border:1px solid #CCCCCC; margin-top:10px; ">
			<div class="module_title"><strong>副标题</strong></div>
			<div class="module_border" style="padding:10px;">
					<input type="text" name="title"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['articles_result']['title'])) $this->magic_vars['_A']['articles_result']['title'] = ''; echo $this->magic_vars['_A']['articles_result']['title']; ?>" size="30"/>
			</div>
		</div>
		
	</div>
		</div>
	<div style="float:left; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>撰写新文章</strong></div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			标&nbsp;&nbsp;题：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['articles_result']['name'])) $this->magic_vars['_A']['articles_result']['name'] = ''; echo $this->magic_vars['_A']['articles_result']['name']; ?>" style="height:25px; width:400px"/>
		</div>
	</div>
	
	<div class="module_border" style=" padding-top:10px;">
			<textarea id="bcontents" name="contents" rows="28"  style="width: 100%"><? if (!isset($this->magic_vars['_A']['articles_result']['contents'])) $this->magic_vars['_A']['articles_result']['contents'] = ''; echo $this->magic_vars['_A']['articles_result']['contents']; ?></textarea>		
	
		<script>
		var admin_url = "/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>";
		
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();
		return false;}
		</script>
		
		
	</div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			积分：<? $this->magic_vars['query_type']='GetTypeList';$data = array('code'=>'articles','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/credit/credit.class.php');$this->magic_vars['magic_result'] = creditClass::GetTypeList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<input type="checkbox" value="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" name="credits[]" <? if (!isset($this->magic_vars['_A']['articles_result']['credits'])) $this->magic_vars['_A']['articles_result']['credits'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['credits']; if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = '';
$_tmp = $this->magic_modifier("checked",$_tmp,$this->magic_vars['var']['nid']);echo $_tmp;unset($_tmp); ?> /><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>[<? if (!isset($this->magic_vars['var']['class_id'])) $this->magic_vars['var']['class_id'] = '';$_tmp = $this->magic_vars['var']['class_id'];$_tmp = $this->magic_modifier("credit_class",$_tmp,"");echo $_tmp;unset($_tmp); ?>](<? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value'] = ''; echo $this->magic_vars['var']['value']; ?>)
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</div>
	</div>
		</form>
	</div>
<!--菜单列表 结束-->
</div>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<? if (!isset($_REQUEST['view'])) $_REQUEST['view']=''; ;if (  $_REQUEST['view']!=""): ?>
<div class="module_add">
	
	<div class="module_title"><strong>内容查看</strong></div>

	<div class="module_border">
		<div class="l">标题：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['name'])) $this->magic_vars['_A']['articles_result']['name'] = ''; echo $this->magic_vars['_A']['articles_result']['name']; ?>
		</div>
	</div>
<? if (!isset($this->magic_vars['_A']['articles_result']['jumpurl'])) $this->magic_vars['_A']['articles_result']['jumpurl']=''; ;if (  $this->magic_vars['_A']['articles_result']['jumpurl']!=""): ?>
	<div class="module_border">
		<div class="l">跳转网址：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['jumpurl'])) $this->magic_vars['_A']['articles_result']['jumpurl'] = ''; echo $this->magic_vars['_A']['articles_result']['jumpurl']; ?></div>
	</div>
<? endif; ?>
	<div class="module_border">
		<div class="l">所属栏目：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['type_id'])) $this->magic_vars['_A']['articles_result']['type_id'] = ''; echo $this->magic_vars['_A']['articles_result']['type_id']; ?></select>
		</div>
	</div>

<? if (!isset($this->magic_vars['_A']['articles_result']['flag'])) $this->magic_vars['_A']['articles_result']['flag']=''; ;if (  $this->magic_vars['_A']['articles_result']['flag']!=""): ?>
	<div class="module_border">
		<div class="l">属性：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['flag'])) $this->magic_vars['_A']['articles_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['flag'];$_tmp = $this->magic_modifier("flag",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
	</div>
<? endif; ?>
	<? if (!isset($this->magic_vars['_A']['articles_result']['is_jump'])) $this->magic_vars['_A']['articles_result']['is_jump']=''; ;if (  $this->magic_vars['_A']['articles_result']['is_jump']!=1): ?>
	<? if (!isset($this->magic_vars['_A']['articles_result']['litpic'])) $this->magic_vars['_A']['articles_result']['litpic']=''; ;if (  $this->magic_vars['_A']['articles_result']['litpic']!=""): ?>
	<div class="module_border">
		<div class="l">缩略图：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['litpic'])) $this->magic_vars['_A']['articles_result']['litpic']=''; ;if (  $this->magic_vars['_A']['articles_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['articles_result']['fileurl'])) $this->magic_vars['_A']['articles_result']['fileurl'] = ''; echo $this->magic_vars['_A']['articles_result']['fileurl']; ?>" target="_blank" title="点击查看大图" ><img src="<? if (!isset($this->magic_vars['_A']['articles_result']['fileurl'])) $this->magic_vars['_A']['articles_result']['fileurl'] = ''; echo $this->magic_vars['_A']['articles_result']['fileurl']; ?>" border="0" width="100" alt="点击查看大图" title="点击查看大图" /></a><? endif; ?></div>
	</div>

	<? endif; ?>
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['status'])) $this->magic_vars['_A']['articles_result']['status']=''; ;if (  $this->magic_vars['_A']['articles_result']['status'] == 0): ?>隐藏<? else: ?>显示<? endif; ?>
		 </div>
	</div>

	<div class="module_border">
		<div class="l">排序:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['order'])) $this->magic_vars['_A']['articles_result']['order'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
<? if (!isset($this->magic_vars['_A']['articles_result']['source'])) $this->magic_vars['_A']['articles_result']['source']=''; ;if (  $this->magic_vars['_A']['articles_result']['source']!=""): ?>
	<div class="module_border">
		<div class="l">文章来源:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['source'])) $this->magic_vars['_A']['articles_result']['source'] = ''; echo $this->magic_vars['_A']['articles_result']['source']; ?></div>
	</div>
	<? endif; ?>
<? if (!isset($this->magic_vars['_A']['articles_result']['author'])) $this->magic_vars['_A']['articles_result']['author']=''; ;if (  $this->magic_vars['_A']['articles_result']['author']!=""): ?>
	<div class="module_border">
		<div class="l">作者:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['author'])) $this->magic_vars['_A']['articles_result']['author'] = ''; echo $this->magic_vars['_A']['articles_result']['author']; ?></div>
	</div>
<? endif; ?>
<? if (!isset($this->magic_vars['_A']['articles_result']['summary'])) $this->magic_vars['_A']['articles_result']['summary']=''; ;if (  $this->magic_vars['_A']['articles_result']['summary']!=""): ?>
	<div class="module_border">
		<div class="l">内容简介:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['summary'])) $this->magic_vars['_A']['articles_result']['summary'] = ''; echo $this->magic_vars['_A']['articles_result']['summary']; ?></div>
	</div>
<? endif; ?>
	<div class="module_border">
		<div class="l">内容:</div>
		<div class="c">
			<table><tr><td align="left"><? if (!isset($this->magic_vars['_A']['articles_result']['contents'])) $this->magic_vars['_A']['articles_result']['contents'] = ''; echo $this->magic_vars['_A']['articles_result']['contents']; ?></td></tr></table></div>
	</div>


	<div class="module_border">
		<div class="l">点击次数/评论:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['hits'])) $this->magic_vars['_A']['articles_result']['hits'] = ''; echo $this->magic_vars['_A']['articles_result']['hits']; ?>/<? if (!isset($this->magic_vars['_A']['articles_result']['comment_times'])) $this->magic_vars['_A']['articles_result']['comment_times'] = ''; echo $this->magic_vars['_A']['articles_result']['comment_times']; ?></div>
	</div>

	<? endif; ?>
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['addtime'])) $this->magic_vars['_A']['articles_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['articles_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['articles_result']['addip'])) $this->magic_vars['_A']['articles_result']['addip'] = ''; echo $this->magic_vars['_A']['articles_result']['addip']; ?></div>
	</div>

	<div class="module_border">
		<div class="l">添加人:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['articles_result']['username'])) $this->magic_vars['_A']['articles_result']['username'] = ''; echo $this->magic_vars['_A']['articles_result']['username']; ?></div>
	</div>

	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['articles_result']['id'])) $this->magic_vars['_A']['articles_result']['id'] = ''; echo $this->magic_vars['_A']['articles_result']['id']; ?>" /><? endif; ?>
		<input type="button"  name="submit" value="返回上一页" onclick="javascript:history.go(-1)" />
		<input type="button"  name="reset" value="修改内容" onclick="javascript:location.href('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['_A']['articles_result']['id'])) $this->magic_vars['_A']['articles_result']['id'] = ''; echo $this->magic_vars['_A']['articles_result']['id']; ?>')"/>
	</div>
	</form>
</div>
<? if (!isset($_REQUEST['check'])) $_REQUEST['check']=''; ;elseif (  $_REQUEST['check']!=""): ?>

<div  style="height:205px; overflow:hidden">
	<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&check=<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" >
	<div class="module_border_ajax">
		<div class="l">审核状态:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>审核通过 <input type="radio" name="status" value="4"  checked="checked"/>审核不通过 </div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="7"><? if (!isset($this->magic_vars['_A']['articles_result']['verify_remark'])) $this->magic_vars['_A']['articles_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['articles_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border_ajax" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		</div>
		<div class="c">
			<img src="/?plugins&q=imgcode" id="valicode" alt="点击刷新" onClick="this.src='/?plugins&q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>

	<div class="module_submit_ajax" >
		<input type="hidden" name="borrow_nid" value="<? if (!isset($_REQUEST['check'])) $_REQUEST['check'] = ''; echo $_REQUEST['check']; ?>" />
		<input type="submit"  name="reset" class="submit_button" value="审核此标" />
	</div>
	
</form>
</div>

<? else: ?>
<div class="module_add">
	<div class="module_title" style="overflow:hidden">
	<div style="float:left"><strong>文章列表</strong> (<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new">添加文章</a>)</div>
	<div style="float:right">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>  标题：<input type="text" name="name" id="name" value="<? if (!isset($_REQUEST['name'])) $_REQUEST['name'] = '';$_tmp = $_REQUEST['name'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> 类型：<? $display ="<select name='type_id'  id='type_id'>"; $display .= "<option value=''>显示全部</option>";if (count($this->magic_vars['_A']['articles_type_result'])>0):foreach ($this->magic_vars['_A']['articles_type_result'] as  $k => $v) {if ($k==$_REQUEST['type_id']){$display .="<option value='$k' selected >$v</option>";
				}else{
					$display .="<option value='$k' >$v</option>";
				}
			};endif; $display .="</select>";echo $display; ?>   <input type="button" value="<? if (!isset($this->magic_vars['MsgInfo']['users_name_sousuo'])) $this->magic_vars['MsgInfo']['users_name_sousuo'] = ''; echo $this->magic_vars['MsgInfo']['users_name_sousuo']; ?>" / onclick="sousuo()">
			</div>
	</div>
	
</div>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
		<tr >
			<td width="" class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
			<td width="" class="main_td"><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=="id_desc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=id_asc">ID↓</a><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=="id_asc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=id_desc">ID↑</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=id_desc">ID</a><? endif; ?></td>
			<td width="*" class="main_td">标题</td>
			<td width="*" class="main_td">作者</td>
			<td width="" class="main_td">分类栏目</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td"><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=="order_desc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=order_asc">排序↓</a><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=="order_asc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=order_desc">排序↑</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=order_desc">排序</a><? endif; ?></td>
			<td width="" class="main_td">属性</td>
			<td width="" class="main_td">评论</td>
			<td width="" class="main_td">添加时间</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'20','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','name'=>isset($_REQUEST['name'])?$_REQUEST['name']:'','type_id'=>isset($_REQUEST['type_id'])?$_REQUEST['type_id']:'','order'=>'id_desc');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center" ><input type="checkbox" name="aid[]" id="aid[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"/></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&view=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"34");echo $_tmp;unset($_tmp); ?></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = '';$_tmp = $this->magic_vars['item']['type_id']; if (!isset($this->magic_vars['_A']['articles_type_result'])) $this->magic_vars['_A']['articles_type_result'] = '';
$_tmp = $this->magic_modifier("in_array",$_tmp,$this->magic_vars['_A']['articles_type_result']);echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>已发布<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==3): ?><a href="javascript:void(0)" onclick='tipsWindown("审核文章","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&check=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>",500,230,"true","","false","text");'>待审核</a><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==2): ?>草稿<? else: ?>审核失败<? endif; ?></td>
			<td class="main_td1" align="center" ><input type="text" name="order[]" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>" size="2" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['flag'])) $this->magic_vars['item']['flag'] = '';$_tmp = $this->magic_vars['item']['flag']; if (!isset($this->magic_vars['_A']['articles_flag'])) $this->magic_vars['_A']['articles_flag'] = '';
$_tmp = $this->magic_modifier("in_array",$_tmp,$this->magic_vars['_A']['articles_flag']);echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['comment_times'])) $this->magic_vars['item']['comment_times'] = ''; echo $this->magic_vars['item']['comment_times']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"y/m/d");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&view=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">查看</a> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="11" class="action">
				<div class="floatl"><select name="type">
			<option value="order">排序</option>
			<option value="del">删除</option>
			</select>&nbsp;&nbsp;&nbsp; <input type="submit" value="确认操作" /> 排序不用全选
			</div>
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var name = $("#name").val();
			var type_id = $("#type_id").val();
			location.href=url+"&username="+username+"&name="+name+"&type_id="+type_id;
		}
	  
	  </script>
	  
			
			</td>
		</tr>
		<tr>
			<td colspan="8" class="page">
			<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?> 
			</td>
		</tr>
	</form>	
	<? unset($_magic_vars); ?>
</table>
<? endif; ?>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type"): ?>
<div class="module_add">
	<div class="module_title"><strong>分类栏目</strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
	<div style="border:1px solid #CCCCCC; ">
	
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>" method="post">
	<div class="module_title"><strong><? if (!isset($_REQUEST['edit'])) $_REQUEST['edit']=''; ;if (  $_REQUEST['edit']!=""): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['article_type_result']['id'])) $this->magic_vars['_A']['article_type_result']['id'] = ''; echo $this->magic_vars['_A']['article_type_result']['id']; ?>" />修改分类栏目 （<a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>">添加</a>）<? else: ?>添加分类栏目<? endif; ?></strong></div>
	<div class="module_border">
		<div class="c">
			名&nbsp;&nbsp;称：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['article_type_result']['name'])) $this->magic_vars['_A']['article_type_result']['name'] = ''; echo $this->magic_vars['_A']['article_type_result']['name']; ?>"/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			别&nbsp;&nbsp;名：<input type="text" name="nid" value="<? if (!isset($this->magic_vars['_A']['article_type_result']['nid'])) $this->magic_vars['_A']['article_type_result']['nid'] = ''; echo $this->magic_vars['_A']['article_type_result']['nid']; ?>" onkeyup="value=value.replace(/[^a-z0-9]/g,'')"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			父&nbsp;&nbsp;级：<select name="pid">
			<option>根目录</option>
			<? $this->magic_vars['query_type']='GetTypeMenu';$data = array('var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetTypeMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
			<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid']='';if (!isset($this->magic_vars['_A']['article_type_result']['pid'])) $this->magic_vars['_A']['article_type_result']['pid']=''; ;if (  $this->magic_vars['item']['pid']!= $this->magic_vars['_A']['article_type_result']['pid']): ?>
			<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['article_type_result']['pid'])) $this->magic_vars['_A']['article_type_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['article_type_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
			<? endif; ?>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="c">
			排&nbsp;&nbsp;序 ：<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['article_type_result']['order'])) $this->magic_vars['_A']['article_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['article_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="6" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="c">
			内&nbsp;&nbsp;容：<textarea cols="30" rows="5" name="contents"><? if (!isset($this->magic_vars['_A']['article_type_result']['contents'])) $this->magic_vars['_A']['article_type_result']['contents'] = '';$_tmp = $this->magic_vars['_A']['article_type_result']['contents'];$_tmp = $this->magic_modifier("html_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	<div class="module_border_ajax" >
		<div class="c">
			验证码：<input name="valicode" type="text" size="11" maxlength="4"  onClick="$('#valicode').attr('src','/?plugins&q=imgcode&t=' + Math.random())"/>
		
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
	<div class="module_title"><strong>分类栏目</strong></div>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">名称</td>
		<td width="*" class="main_td">别名</td>
		<td width="*" class="main_td">排序</td>
		<td width="*" class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='GetTypeMenu';$data = array('var'=>'item','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetTypeMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = ''; echo $this->magic_vars['item']['type_name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type&edit=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a>/<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	
</table>
<!--菜单列表 结束-->
</div>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="page_list"): ?>

<div class="module_add">
	<div class="module_title"><strong>页面列表</strong></div>
</div>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>" method="post">
		<tr >
			<td width="" class="main_td"><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=="id_desc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=id_asc">ID↓</a><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=="id_asc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=id_desc">ID↑</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=id_desc">ID</a><? endif; ?></td>
			<td width="*" class="main_td">作者</td>
			<td width="*" class="main_td">标题</td>
			<td width="" class="main_td">标识名</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td"><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=="order_desc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=order_asc">排序↓</a><? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=="order_asc"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=order_desc">排序↑</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&order=order_desc">排序</a><? endif; ?></td>
			<td width="" class="main_td">评论</td>
			<td width="" class="main_td">发布时间</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<? $this->magic_vars['query_type']='GetPageMenu';$data = array('var'=>'item','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','order'=>isset($_REQUEST['order'])?$_REQUEST['order']:'','limit'=>'all');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetPageMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>&view=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"><? if (!isset($this->magic_vars['item']['type_name'])) $this->magic_vars['item']['type_name'] = '';$_tmp = $this->magic_vars['item']['type_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"34");echo $_tmp;unset($_tmp); ?></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>发布<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==2): ?>草稿<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==3): ?>等待发布<? endif; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['comment_times'])) $this->magic_vars['item']['comment_times'] = ''; echo $this->magic_vars['item']['comment_times']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['publish'])) $this->magic_vars['item']['publish'] = ''; echo $this->magic_vars['item']['publish']; ?></td>
			<td class="main_td1" align="center" > <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/page_edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/page_list&del=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
		</tr>
		<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		
		
	</form>	
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "page_new" ||  $this->magic_vars['_A']['query_type'] == "page_edit"): ?>

<form action="" method="post" id="frm" >
<div class="module_add">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "page_edit"): ?><input type="hidden" name="id"  value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />修改页面<? else: ?>添加页面<? endif; ?></strong></div>
	<div style="margin-top:10px;">
	<div style="float:left; width:30%;">
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px ">
			<div class="module_title"><strong>页面基本信息</strong></div>
			<div class="module_border">
				<div class="c">
					<font color="#FF0000">标识名：</font><input type="text" name="nid"  size="12" value="<? if (!isset($this->magic_vars['_A']['page_result']['nid'])) $this->magic_vars['_A']['page_result']['nid'] = ''; echo $this->magic_vars['_A']['page_result']['nid']; ?>"/><font color="#FF0000">*</font>
				</div>
			</div>
			
			
			<div class="module_border">
				<div class="c">
					父&nbsp;&nbsp;级 ：<select name="pid">
					<option>根目录</option>
					<? $this->magic_vars['query_type']='GetPageMenu';$data = array('var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/articles/articles.class.php');$this->magic_vars['magic_result'] = articlesClass::GetPageMenu($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
					<option value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['_A']['page_result']['pid'])) $this->magic_vars['_A']['page_result']['pid']='';if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']=''; ;if (  $this->magic_vars['_A']['page_result']['pid']== $this->magic_vars['item']['id']): ?>  selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['item']['_name'])) $this->magic_vars['item']['_name'] = ''; echo $this->magic_vars['item']['_name']; ?></option>
					
					<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</select>
				</div>
			</div>
		
			<div class="module_border">
				<div class="c">
					状&nbsp;&nbsp;态 ：<select name='status' >
					<option value="1" <? if (!isset($this->magic_vars['_A']['page_result']['status'])) $this->magic_vars['_A']['page_result']['status']=''; ;if (  $this->magic_vars['_A']['page_result']['status']==1): ?> selected="selected"<? endif; ?>>发布</option>
					<option value="2" <? if (!isset($this->magic_vars['_A']['page_result']['status'])) $this->magic_vars['_A']['page_result']['status']=''; ;if (  $this->magic_vars['_A']['page_result']['status']==2): ?> selected="selected"<? endif; ?>>草稿</option>
					<option value="3" <? if (!isset($this->magic_vars['_A']['page_result']['status'])) $this->magic_vars['_A']['page_result']['status']=''; ;if (  $this->magic_vars['_A']['page_result']['status']==3): ?> selected="selected"<? endif; ?>>等待审核</option>
					</select>
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					排&nbsp;&nbsp;序 ：<input type="text" name="order" value="<? if (!isset($this->magic_vars['_A']['page_result']['order'])) $this->magic_vars['_A']['page_result']['order'] = '';$_tmp = $this->magic_vars['_A']['page_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>"size="5"/>
				</div>
			</div>
				
			<div class="module_border">
				<div class="c">
					分&nbsp;&nbsp;类 ：<input type="checkbox" name="flag[]" value="index" align="absmiddle" <? if (!isset($this->magic_vars['_A']['page_result']['flag'])) $this->magic_vars['_A']['page_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['page_result']['flag'];$_tmp = $this->magic_modifier("checked",$_tmp,"index");echo $_tmp;unset($_tmp); ?>/>首页 <input type="checkbox" name="flag[]" value="tuijian"  align="absmiddle" <? if (!isset($this->magic_vars['_A']['page_result']['flag'])) $this->magic_vars['_A']['page_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['page_result']['flag'];$_tmp = $this->magic_modifier("checked",$_tmp,"tuijian");echo $_tmp;unset($_tmp); ?>/>推荐 <input type="checkbox" name="flag[]" value="ding"  align="absmiddle" <? if (!isset($this->magic_vars['_A']['page_result']['flag'])) $this->magic_vars['_A']['page_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['page_result']['flag'];$_tmp = $this->magic_modifier("checked",$_tmp,"ding");echo $_tmp;unset($_tmp); ?>/>置顶
				</div>
			</div>
			<div class="module_border">
				<div class="c">
					公开度：<input type="radio" name="public" value="1" checked="checked" onclick="$('#password').hide()" <? if (!isset($this->magic_vars['_A']['page_result']['public'])) $this->magic_vars['_A']['page_result']['public']=''; ;if (  $this->magic_vars['_A']['page_result']['public']==1): ?> checked="checked"<? endif; ?> />公开 <input type="radio" name="public" value="2" onclick="$('#password').hide()"/<? if (!isset($this->magic_vars['_A']['page_result']['public'])) $this->magic_vars['_A']['page_result']['public']=''; ;if (  $this->magic_vars['_A']['page_result']['public']==2): ?> checked="checked"<? endif; ?> >私密 <input type="radio" name="public" value="3" onclick="$('#password').show()" <? if (!isset($this->magic_vars['_A']['page_result']['public'])) $this->magic_vars['_A']['page_result']['public']=''; ;if (  $this->magic_vars['_A']['page_result']['public']==3): ?> checked="checked"<? endif; ?> />加密  <input type="text" id="password" name='password' size="3" <? if (!isset($this->magic_vars['_A']['page_result']['public'])) $this->magic_vars['_A']['page_result']['public']=''; ;if (  $this->magic_vars['_A']['page_result']['public']!=3): ?>style="display:none"<? endif; ?> value="<? if (!isset($this->magic_vars['_A']['page_result']['password'])) $this->magic_vars['_A']['page_result']['password'] = ''; echo $this->magic_vars['_A']['page_result']['password']; ?> " />
				</div>
			</div>
			
			
			<div class="module_border">
				<div class="c">
					发布时间：<input type="text" name="publish"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['page_result']['publish'])) $this->magic_vars['_A']['page_result']['publish'] = '';$_tmp = $this->magic_vars['_A']['page_result']['publish'];$_tmp = $this->magic_modifier("default",$_tmp,"nowdate");echo $_tmp;unset($_tmp); ?>" size="30" onclick="change_picktime('yyyy-MM-dd HH:mm:ss')" readonly=""/>
				</div>
			</div>
			<div class="module_submit"><input type="button" value="确认提交" class="submit_button" name="save" onclick="submitForm()"/>
</div>
			
		</div>
		
		<div style="border:1px solid #CCCCCC; margin-bottom:10px; ">
			<div class="module_title"><strong>页面标签</strong></div>
			<div class="module_border" style="padding:10px;">
					标签：<input type="text" name="tags"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['page_result']['tags'])) $this->magic_vars['_A']['page_result']['tags'] = ''; echo $this->magic_vars['_A']['page_result']['tags']; ?>" size="30"/>
			</div>
		</div>
		
	</div>
		</div>
	<div style="float:right; width:67%; text-align:left">
	<div class="module_add">
	<div class="module_title"><strong>页面标题内容</strong></div>
	
	<div class="module_border">
		<div class="c" style="padding:10px 0">
			标&nbsp;&nbsp;题：<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['page_result']['name'])) $this->magic_vars['_A']['page_result']['name'] = ''; echo $this->magic_vars['_A']['page_result']['name']; ?>" style="height:25px; width:400px"/><font color="#FF0000">*</font>
		</div>
	</div>
	
	<div class="module_border" style=" padding-top:10px;">
			<textarea id="bcontents" name="contents" rows="28"  style="width: 100%"><? if (!isset($this->magic_vars['_A']['page_result']['contents'])) $this->magic_vars['_A']['page_result']['contents'] = ''; echo $this->magic_vars['_A']['page_result']['contents']; ?></textarea>		
	
		<script>
		var user_id='<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>';
		var admin_url = "/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>";
		
		$('#bcontents').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1&user_id="+user_id,upImgExt:"jpg,jpeg,gif,png"});
		function submitForm(){
		$("#bcontents").val();
		$('#frm').submit();}
		</script>
		
		
	</div>
		</form>
	</div>
<!--菜单列表 结束-->
</div>
</div>
<? endif; ?>