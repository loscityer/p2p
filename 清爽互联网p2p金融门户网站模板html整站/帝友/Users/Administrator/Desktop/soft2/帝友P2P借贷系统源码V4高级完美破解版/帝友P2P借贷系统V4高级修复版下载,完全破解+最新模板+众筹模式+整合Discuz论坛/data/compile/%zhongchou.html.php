<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

     
      <link rel="stylesheet" type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/zhongchou/0d449e0e38e4f9a69794ff0a81b6f530.css"> 
      <link rel="stylesheet" type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/zhongchou/7c285136c361014baa8c1a1878bdff0e.css">


<div class="wrap">
	<div class="main">
		<div class="bro_ztai">��</div>
		<div class="br_list">
			<ul>
				<li <? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type']=''; ;if (  $_REQUEST['raise_type']==''): ?>class="on"<? endif; ?>><a title="ȫ������" href="/zhongchou/index.html&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>&flag=<? if (!isset($_REQUEST['flag'])) $_REQUEST['flag'] = ''; echo $_REQUEST['flag']; ?>">ȫ��</a></li>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'item','limit'=>'all','type_id'=>'58');$default = '';  require_once(ROOT_PATH.'modules/linkages/linkages.class.php');$this->magic_vars['magic_result'] = linkagesClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
								<li <? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type']='';if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $_REQUEST['raise_type']== $this->magic_vars['item']['value']): ?>class="on"<? endif; ?>><a href="/zhongchou/index.html&raise_type=<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = ''; echo $this->magic_vars['item']['value']; ?>&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>&flag=<? if (!isset($_REQUEST['flag'])) $_REQUEST['flag'] = ''; echo $_REQUEST['flag']; ?>" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></a></li>
                <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
							</ul>
			<ul class="mar-l100">
				<li class="tit">���</li>
				<li <? if (!isset($_REQUEST['flag'])) $_REQUEST['flag']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['flag']=='' &&  $_REQUEST['status']==''): ?>class="on"<? endif; ?>><a href="/zhongchou/index.html&raise_type=<? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type'] = ''; echo $_REQUEST['raise_type']; ?>">ȫ��</a></li>
				<li <? if (!isset($_REQUEST['flag'])) $_REQUEST['flag']=''; ;if (  $_REQUEST['flag']=='tuijian'): ?>class="on"<? endif; ?>>
				<? if (!isset($_REQUEST['flag'])) $_REQUEST['flag']=''; ;if (  $_REQUEST['flag']=='tuijian'): ?>
				<a href="/zhongchou/index.html&raise_type=<? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type'] = ''; echo $_REQUEST['raise_type']; ?>&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>">�Ƽ���Ŀ </a>
				<? else: ?>
				<a href="/zhongchou/index.html&flag=tuijian&raise_type=<? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type'] = ''; echo $_REQUEST['raise_type']; ?>&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>">�Ƽ���Ŀ </a>
				<? endif; ?>
				</li>
				<li <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=='0'): ?>class="on"<? endif; ?>><a href="/zhongchou/index.html&status=0&flag=<? if (!isset($_REQUEST['flag'])) $_REQUEST['flag'] = ''; echo $_REQUEST['flag']; ?>&raise_type=<? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type'] = ''; echo $_REQUEST['raise_type']; ?>">������ </a></li>
				<li <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=='1'): ?>class="on"<? endif; ?>><a href="/zhongchou/index.html&status=1&flag=<? if (!isset($_REQUEST['flag'])) $_REQUEST['flag'] = ''; echo $_REQUEST['flag']; ?>&raise_type=<? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type'] = ''; echo $_REQUEST['raise_type']; ?>">���ʳɹ� </a></li>
				<li <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=='2'): ?>class="on"<? endif; ?>><a href="/zhongchou/index.html&status=2&flag=<? if (!isset($_REQUEST['flag'])) $_REQUEST['flag'] = ''; echo $_REQUEST['flag']; ?>&raise_type=<? if (!isset($_REQUEST['raise_type'])) $_REQUEST['raise_type'] = ''; echo $_REQUEST['raise_type']; ?>">����ʧ�� </a></li>
				
			</ul>
		</div>
		 <? $this->magic_vars['query_type']='GetRaiseList';$data = array('var'=>'loop','epage'=>'10','flag'=>isset($_REQUEST['flag'])?$_REQUEST['flag']:'','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'','raise_type'=>isset($_REQUEST['raise_type'])?$_REQUEST['raise_type']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRaiseList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
        <? if (!isset($this->magic_vars['loop']['list'])) $this->magic_vars['loop']['list']=''; ;if (  $this->magic_vars['loop']['list']): ?>
		<!-- ѭ�� -->	
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<div class="pcart <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%3==1): ?>mar-r0<? endif; ?>"> 
			<a title="<? if (!isset($this->magic_vars['var']['raise_name'])) $this->magic_vars['var']['raise_name'] = ''; echo $this->magic_vars['var']['raise_name']; ?>" href="/zhongchou/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="bline" target="_blank">
			<img src="<? if (!isset($this->magic_vars['var']['fileurl'])) $this->magic_vars['var']['fileurl'] = ''; echo $this->magic_vars['var']['fileurl']; ?>" alt="<? if (!isset($this->magic_vars['var']['raise_name'])) $this->magic_vars['var']['raise_name'] = ''; echo $this->magic_vars['var']['raise_name']; ?>"></a>
			<a class="gzbtn" style="font-size:12px;font-weight:normal;" href="javascript:void(0);" rel="0" >
				<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==0): ?><? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day']=''; ;if (  $this->magic_vars['var']['end_day']>=0): ?>������<? else: ?>�ѵ���<? endif; ?><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==1): ?>���ʳɹ�<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>����ʧ��<? else: ?>�ݸ�<? endif; ?>			</a>
						<div class="desc">
				 <a title="<? if (!isset($this->magic_vars['var']['raise_name'])) $this->magic_vars['var']['raise_name'] = ''; echo $this->magic_vars['var']['raise_name']; ?>" target="_blank" href="/zhongchou/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">
				<span class="tit"> <? if (!isset($this->magic_vars['var']['raise_name'])) $this->magic_vars['var']['raise_name'] = ''; echo $this->magic_vars['var']['raise_name']; ?> </span>
				<span class="dction" style="height:46px;"><? if (!isset($this->magic_vars['var']['raise_intro'])) $this->magic_vars['var']['raise_intro'] = '';$_tmp = $this->magic_vars['var']['raise_intro'];$_tmp = $this->magic_modifier("truncate",$_tmp,"40");echo $_tmp;unset($_tmp); ?>��</span>
				</a>
				<div class="fot">
			
					<span class="mz">Ŀ�꣺<? if (!isset($this->magic_vars['var']['raise_period'])) $this->magic_vars['var']['raise_period'] = ''; echo $this->magic_vars['var']['raise_period']; ?>�� &nbsp;&nbsp;��<? if (!isset($this->magic_vars['var']['raise_account'])) $this->magic_vars['var']['raise_account'] = ''; echo $this->magic_vars['var']['raise_account']; ?></span>
																	<span class="tx"><a target="_blank" href="/zhongchou/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html">֧��</a></span>
															</div>
			</div>
			<div class="bra">
				<span class="bsp">
										   <span class="csp" style="width:<? if (!isset($this->magic_vars['var']['raise_account_scale'])) $this->magic_vars['var']['raise_account_scale'] = ''; echo $this->magic_vars['var']['raise_account_scale']; ?>%"></span>
									</span> 
			</div>
			<div class="rate">
				<span class="m01">
				<span class="cu" name="focus_2237" rel="<? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>"><? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>��</span>
				<br>
				֧��</span>
				<span class="m02">
				<span class="cu red">��<? if (!isset($this->magic_vars['var']['raise_account_yes'])) $this->magic_vars['var']['raise_account_yes'] = ''; echo $this->magic_vars['var']['raise_account_yes']; ?></span>
				<br>
				�ѳ���</span>
				<span class="m03"><span class="cu">
								<? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day']=''; ;if (  $this->magic_vars['var']['end_day']>= 0): ?><? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day'] = ''; echo $this->magic_vars['var']['end_day']; ?>��<? else: ?>�ѽ���<? endif; ?>	</span>				<br>
					
					 <? if (!isset($this->magic_vars['var']['end_day'])) $this->magic_vars['var']['end_day']=''; ;if (  $this->magic_vars['var']['end_day']>= 0): ?>ʣ��<? else: ?><? endif; ?>		</span>
			</div>
		</div> 
			<? endforeach; endif; unset($_from); ?>
	
				<!-- ѭ�� -->
	
		<span class="blank20"></span>
		<!--��ҳ-->
		<div class="pages">   <? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
			<? else: ?>
			<span class="blank20" style="font-size:20px; height:40px; width:100%; text-align:center; margin:auto; margin-top:50px;">�������������Ŀ</span>
			<? endif; ?>
		<!--//��ҳ-->
		 <? unset($_magic_vars); ?>
		<span class="blank20"></span>
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>