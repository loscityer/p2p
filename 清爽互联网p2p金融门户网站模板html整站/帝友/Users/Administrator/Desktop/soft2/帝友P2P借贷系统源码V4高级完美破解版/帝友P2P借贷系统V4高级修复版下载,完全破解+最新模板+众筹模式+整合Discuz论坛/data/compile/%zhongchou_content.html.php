<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


    
      <link rel="stylesheet" type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/zhongchou/0d449e0e38e4f9a69794ff0a81b6f530.css"> 
      <link rel="stylesheet" type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/zhongchou/b583e0815af8988ed8bef1ad1d0b9a9e.css">
 <? $data = array('var'=>'var','id'=>$_REQUEST['article_id'],'hits_status'=>'1');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetraiseOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
      <div class="wrap"> 
	                       
    <script>

    function borrowRaise(type){
	var api=$.dialog({
		id: 'LHG1976D',
		lock:true
	});

	/* jQuery ajax */
	$.ajax({
		url:'/?user&q=code/borrow/raise&'+type,
		success:function(data){
			api.content(data);
		},
		cache:false
	});
}
  
  </script>
  
  
	<!-- Main -->
	<div class="main">
		<div class="mainbody">


<div class="ntit">
	<h1> 
	<? if (!isset($this->magic_vars['var']['raise_name'])) $this->magic_vars['var']['raise_name'] = ''; echo $this->magic_vars['var']['raise_name']; ?> <span class="czz"><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==0): ?>筹资中<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==1): ?>筹资成功<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>筹资失败<? else: ?>审核中<? endif; ?></span>  
	</h1>
</div>



			<div class="newcont">
			<? if (!isset($this->magic_vars['var']['raise_contents'])) $this->magic_vars['var']['raise_contents'] = ''; echo $this->magic_vars['var']['raise_contents']; ?>
			</div>
			<span class="blank20"></span>
			<div class="comment">
				<div class="flbq">
					<div class="flei">分类：
						<? if (!isset($this->magic_vars['var']['raise_type'])) $this->magic_vars['var']['raise_type'] = '';$_tmp = $this->magic_vars['var']['raise_type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"raise_type");echo $_tmp;unset($_tmp); ?>
					</div>
					<div class="bqian"> 标签：
												<? if (!isset($this->magic_vars['var']['tags'])) $this->magic_vars['var']['tags'] = ''; echo $this->magic_vars['var']['tags']; ?>
											</div>
					<div class="fr">
						<span class="fl"> 分享到：</span>
						<!-- JiaThis Button BEGIN -->
						<div class="jiathis_style"> <a class="jiathis_button_qzone"></a> <a class="jiathis_button_tsina"></a> <a class="jiathis_button_tqq"></a> <a class="jiathis_button_renren"></a> <a class="jiathis_button_kaixin001"></a>  </div>
						<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1374471022460738" charset="utf-8"></script> 
						<!-- JiaThis Button END --> 
					</div>
					
				</div>
	
			</div>
		</div>
	    <div class="sidebar">
	<div class="zcart">
		<div class="gzhu">
			<li>
									<a href="javascript:void(0);" rel="34" class="btn-gz" onclick="borrowRaise('buy_id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>','');">  <span>马上支持</span> </a>
							</li>
		</div>
		<div class="fot"> 目标
			<span><? if (!isset($this->magic_vars['var']['raise_period'])) $this->magic_vars['var']['raise_period'] = ''; echo $this->magic_vars['var']['raise_period']; ?>天 &nbsp;&nbsp;￥<? if (!isset($this->magic_vars['var']['raise_account'])) $this->magic_vars['var']['raise_account'] = ''; echo $this->magic_vars['var']['raise_account']; ?></span>
		</div>
		<div class="bra">
			<span class="bsp">
			<? if (!isset($this->magic_vars['var']['raise_account_scale'])) $this->magic_vars['var']['raise_account_scale']=''; ;if (  $this->magic_vars['var']['raise_account_scale']==100): ?>
			<!--当进度是100%时-->
			<span style="width:100%;display:none" class="csp csp100"></span>
			<!--//当进度是100%时--> 
			<? else: ?>
			<span class="csp" style="width:<? if (!isset($this->magic_vars['var']['raise_account_scale'])) $this->magic_vars['var']['raise_account_scale'] = ''; echo $this->magic_vars['var']['raise_account_scale']; ?>%"></span>
			<? endif; ?>
			
			
			</span>
		</div>
		<div class="rate">
			<span class="m01">
			<!--<span class="cu"><span>0</span>人</span>-->
			<span class="cu" id="right_focus_num"><? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>人</span>
			<br>
			支持</span>
			<span class="m02">
			<span class="red">￥<span><? if (!isset($this->magic_vars['var']['raise_account_yes'])) $this->magic_vars['var']['raise_account_yes'] = ''; echo $this->magic_vars['var']['raise_account_yes']; ?></span></span>
			<br>
			已筹资</span>
			<span class="m03">
			<span class="cu">
								<? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day']=''; ;if (  $this->magic_vars['var']['end_day']>= 0): ?><? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day'] = ''; echo $this->magic_vars['var']['end_day']; ?>天<? else: ?>已结束<? endif; ?>	</span>				<br>
					
					 <? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day']=''; ;if (  $this->magic_vars['var']['end_day']>= 0): ?>剩余<? else: ?><? endif; ?>		</span>
		</div>
	</div>
	<span class="blank10"></span>
	<!--循环-->
	 <? $this->magic_vars['query_type']='GetRauseTenderList';$data = array('var'=>'loop','epage'=>'10','rause_id'=>$this->magic_vars['var']['id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRauseTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>

		<!-- 循环 -->	
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['rvar']):
?>


			<div class="zchi <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']='';if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total']=''; ;if (  $this->magic_vars['key']+1==  $this->magic_vars['loop']['total']): ?>bnone<? endif; ?>">
			<div class="je">
				<? if (!isset($this->magic_vars['rvar']['username'])) $this->magic_vars['rvar']['username'] = ''; echo $this->magic_vars['rvar']['username']; ?> 支持<span>￥<? if (!isset($this->magic_vars['rvar']['tender_account'])) $this->magic_vars['rvar']['tender_account'] = ''; echo $this->magic_vars['rvar']['tender_account']; ?></span>
				
			</div>
						<div class="jj"><? if (!isset($this->magic_vars['rvar']['message'])) $this->magic_vars['rvar']['message'] = '';$_tmp = $this->magic_vars['rvar']['message'];$_tmp = $this->magic_modifier("truncate",$_tmp,"50");echo $_tmp;unset($_tmp); ?></div>
			<div class="hbpic">
							</div>
			<div class="btn-zc">
									<a href="javascript:void(0);" onclick="borrowRaise('buy_id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>','');" class="bred" target="_blank">
						<span>我也支持</span>
					</a>
									
			</div>
		</div>
		<? endforeach; endif; unset($_from); ?> 
		
		<? unset($_magic_vars); ?> 	
		</div>
		<span class="blank20"></span>
	</div>
	<!-- End of Main --> 
</div>
<? unset($_magic_vars);unset($data); ?>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>