<div class="module_add" >
	
	<div class="module_title"><strong>���������Ϣ</strong></div>
	<div class="module_border">
		<div class="l">�û�����</div>
		<div class="r">
		<a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/users/view&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?></a>
		</div>
		<div class="s">״̬��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_account_yes'])) $this->magic_vars['_A']['borrow_result']['borrow_account_yes']='';if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['borrow_account_yes']== $this->magic_vars['_A']['borrow_result']['account'] &&  $this->magic_vars['_A']['borrow_result']['status']==1): ?>�������<input type="button"  src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/button.gif" align="absmiddle" value="�������" class="submit_button" onclick='tipsWindown("�������","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full&fullcheck=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>",500,300,"true","","false","text");'/><? else: ?><? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_status");echo $_tmp;unset($_tmp); ?><? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?> <input type="button"  src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/button.gif" align="absmiddle" value="������" class="submit_button" onclick='tipsWindown("������","url:get?<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/first&check=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>",500,300,"true","","false","text");'/><? endif; ?>&nbsp;&nbsp;<input type="button"  src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/button.gif" align="absmiddle" value="���Ͷ���" class="submit_button" onclick="window.location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/first&s_nid=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>';" /><? endif; ?>
		</div>
	</div>
	<div class="module_border">
		
		<div class="l">���⣺</div>
		<div class="r">
			<strong><? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?></strong>
		</div>
		
		<div class="s">����ţ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">������</div>
		<div class="r" style="color:#FF0000">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_object'])) $this->magic_vars['_A']['borrow_result']['borrow_object'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_object'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_object");echo $_tmp;unset($_tmp); ?> (<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&&q=code/users/viewinfo<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_object'])) $this->magic_vars['_A']['borrow_result']['borrow_object']=''; ;if (  $this->magic_vars['_A']['borrow_result']['borrow_object']==1): ?>&type=2<? endif; ?>&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>">�鿴�û�����</a>)
		</div>
		<div class="s">�����;��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_use'])) $this->magic_vars['_A']['borrow_result']['borrow_use'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_use'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ͣ�</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouchstatus'])) $this->magic_vars['_A']['borrow_result']['vouchstatus']=''; ;if (  $this->magic_vars['_A']['borrow_result']['vouchstatus']==1): ?>������<? if (!isset($this->magic_vars['_A']['borrow_result']['fast_status'])) $this->magic_vars['_A']['borrow_result']['fast_status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['fast_status']==1): ?>���ٱ�<? else: ?>���ñ�<? endif; ?>
		</div>
		
		<div class="s">���ʽ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_style'])) $this->magic_vars['_A']['borrow_result']['borrow_style'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ܽ�</div>
		<div class="r">
				��<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?><input type="hidden" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>" /> 
		</div>
		
		<div class="s">�����ʣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_apr'])) $this->magic_vars['_A']['borrow_result']['borrow_apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_apr']; ?> %
		</div>

	</div>
	
	
	<div class="module_border">
		<div class="l">���ɹ��󶳽��</div>
		<div class="r">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['frost_account'])) $this->magic_vars['_A']['borrow_result']['frost_account'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['frost_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
		</div>	
		<div class="s">������ޣ�</div>
		<div class="c">

		
		<FONT COLOR="#ec6c13"><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;if (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.03): ?>1</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.06): ?>2</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.10): ?>3</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.13): ?>4</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.16): ?>5</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.20): ?>6</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.23): ?>7</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.26): ?>8</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.30): ?>9</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.33): ?>10</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.36): ?>11</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.40): ?>12</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.43): ?>13</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.46): ?>14</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.50): ?>15</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.53): ?>16</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.56): ?>17</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.60): ?>18</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.63): ?>19</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.66): ?>20</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.70): ?>21</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.73): ?>22</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.76): ?>23</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.80): ?>24</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.83): ?>25</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.86): ?>26</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.90): ?>27</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.93): ?>28</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.96): ?>29</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] == 0.10): ?>30</font>��
                            	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']='';if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['borrow_period'] >= 1 &&  $this->magic_vars['_A']['borrow_result']['borrow_period']<10): ?><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?></font>����
                            	<? else: ?><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_period'])) $this->magic_vars['_A']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?></font>����
                            	<? endif; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���Ͷ���</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['tender_account_min'])) $this->magic_vars['_A']['borrow_result']['tender_account_min'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['tender_account_min'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_tender_account_min");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">���Ͷ���ܶ</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['tender_account_max'])) $this->magic_vars['_A']['borrow_result']['tender_account_max'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['tender_account_max'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_tender_account_max");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">&nbsp;</div>
		<div class="r">&nbsp;
		</div>
		<div class="s">��Чʱ�䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_valid_time'])) $this->magic_vars['_A']['borrow_result']['borrow_valid_time'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_valid_time']; ?>��
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">�Ƿ񲿷ֽ�</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_part_status'])) $this->magic_vars['_A']['borrow_result']['borrow_part_status'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['borrow_part_status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_part_status");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">��ʾ���ͣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['view_type'])) $this->magic_vars['_A']['borrow_result']['view_type'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['view_type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_view_type");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">���������</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['hits'])) $this->magic_vars['_A']['borrow_result']['hits'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['hits'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��
		</div>
		<div class="s">���۴�����</div>
		<div class="c">
			<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=code/comment/list&code=borrow&article_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>"><? if (!isset($this->magic_vars['_A']['borrow_result']['comment_count'])) $this->magic_vars['_A']['borrow_result']['comment_count'] = ''; echo $this->magic_vars['_A']['borrow_result']['comment_count']; ?>��</a>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">���ʱ�䣺</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['addtime'])) $this->magic_vars['_A']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">���IP��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['addip'])) $this->magic_vars['_A']['borrow_result']['addip'] = ''; echo $this->magic_vars['_A']['borrow_result']['addip']; ?>
		</div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']>0): ?>
	<div class="module_title"><strong>���״̬</strong> (<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/tender&borrow_nid=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>">�鿴Ͷ����Ϣ</a>)</div>
	
	
	<div class="module_border">
		<div class="l">�ѽ赽�Ľ�</div>
		<div class="r">
			<font color="#009900">��<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_account_yes'])) $this->magic_vars['_A']['borrow_result']['borrow_account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_account_yes']; ?></font>
		</div>
		<div class="s">δ�赽�Ľ�</div>
		<div class="c">
			<font color="#FF0000">��<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_account_wait'])) $this->magic_vars['_A']['borrow_result']['borrow_account_wait'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_account_wait']; ?></font>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">Ͷ��Ĵ�����</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['tender_times'])) $this->magic_vars['_A']['borrow_result']['tender_times'] = ''; echo $this->magic_vars['_A']['borrow_result']['tender_times']; ?>��
		</div>
		<div class="s">���Ͷ��ʱ�䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['tender_last_time'])) $this->magic_vars['_A']['borrow_result']['tender_last_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['tender_last_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">����ע��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_remark'])) $this->magic_vars['_A']['borrow_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_remark']; ?>
		</div>
	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']>=1): ?>
	
	<div class="module_title"><strong>Ͷ���б�</strong></div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">Ͷ����</td>
			<td width="*" class="main_td">Ͷ�ʽ��</td>
			<td width="" class="main_td">��Ч���</td>
			<td width="" class="main_td">Ͷ��ʱ��</td>
			<td width="" class="main_td">Ͷ������</td>
		</tr>
		<? $this->magic_vars['query_type']='GetTenderList';$data = array('limit'=>'all','borrow_nid'=>$this->magic_vars['_A']['borrow_result']['borrow_nid'],'var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender'] = ''; echo $this->magic_vars['item']['account_tender']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?></td>
		</tr>
		<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
</table>
	
	<? endif; ?>
	
	<? endif; ?>
	
	
	<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_full_status'])) $this->magic_vars['_A']['borrow_result']['borrow_full_status']='';if (!isset($this->magic_vars['_A']['borrow_result']['is_flow'])) $this->magic_vars['_A']['borrow_result']['is_flow']=''; ;if (  $this->magic_vars['_A']['borrow_result']['borrow_full_status']==1  ||  $this->magic_vars['_A']['borrow_result']['is_flow']==1): ?>
	<div class="module_title"><strong>������Ϣ</strong>(<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/borrow_repay&borrow_nid=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>">�鿴������Ϣ</a>)</div>
	
	
	<div class="module_border">
		<div class="l">����ܶ</div>
		<div class="r">
			<font color="#009900">��<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_account_yes'])) $this->magic_vars['_A']['borrow_result']['borrow_account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_account_yes']; ?></font>
		</div>
		<div class="s">Ӧ���ܶ</div>
		<div class="c">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_all'])) $this->magic_vars['_A']['borrow_result']['repay_account_all'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_all']; ?>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">�ѻ��ܶ</div>
		<div class="r">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_yes'])) $this->magic_vars['_A']['borrow_result']['repay_account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_yes']; ?>
		</div>
		<div class="s">δ���ܶ</div>
		<div class="c">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_wait'])) $this->magic_vars['_A']['borrow_result']['repay_account_wait'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_wait']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ѻ�����</div>
		<div class="r">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_capital_yes'])) $this->magic_vars['_A']['borrow_result']['repay_account_capital_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_capital_yes']; ?>
		</div>
		<div class="s">δ������</div>
		<div class="c">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_capital_wait'])) $this->magic_vars['_A']['borrow_result']['repay_account_capital_wait'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_capital_wait']; ?>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">�ѻ���Ϣ��</div>
		<div class="r">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_interest_yes'])) $this->magic_vars['_A']['borrow_result']['repay_account_interest_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_interest_yes']; ?>
		</div>
		<div class="s">δ����Ϣ��</div>
		<div class="c">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['repay_account_interest_wait'])) $this->magic_vars['_A']['borrow_result']['repay_account_interest_wait'] = ''; echo $this->magic_vars['_A']['borrow_result']['repay_account_interest_wait']; ?>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['reverify_time'])) $this->magic_vars['_A']['borrow_result']['reverify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['reverify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">����ע��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['reverify_remark'])) $this->magic_vars['_A']['borrow_result']['reverify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['reverify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	
	
	<div class="module_title"><strong>���ý���</strong></div>
	<div class="module_border">
		<div class="l">�������ͣ�</div>
		<div class="r">
			 <? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['award_status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_award_status");echo $_tmp;unset($_tmp); ?><? if (!isset($this->magic_vars['_A']['borrow_result']['award_false'])) $this->magic_vars['_A']['borrow_result']['award_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_false']==1): ?>(���ʧ��Ҳ����)<? endif; ?>
		</div>
		 <? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_status']>0): ?>
		<div class="s">������ʽ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['award_status'])) $this->magic_vars['_A']['borrow_result']['award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award_status']==1): ?>
			 ��<? if (!isset($this->magic_vars['_A']['borrow_result']['award_account'])) $this->magic_vars['_A']['borrow_result']['award_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['award_account']; ?>
			 <? else: ?>
			 <? if (!isset($this->magic_vars['_A']['borrow_result']['award_scale'])) $this->magic_vars['_A']['borrow_result']['award_scale'] = ''; echo $this->magic_vars['_A']['borrow_result']['award_scale']; ?>%
			 <? endif; ?>
		</div>
		<? endif; ?>
	</div>
	
	
	<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_status'])) $this->magic_vars['_A']['borrow_result']['vouch_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['vouch_status']==1): ?>
	<div class="module_title"><strong>��������</strong></div>
	<div class="module_border">
		<div class="l">�Ƿ���н�����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award_status'])) $this->magic_vars['_A']['borrow_result']['vouch_award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['vouch_award_status']==1): ?>��<? else: ?>��<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�Ƿ�̶���Ҫ�����ˣ�</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_user_status'])) $this->magic_vars['_A']['borrow_result']['vouch_user_status'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['vouch_user_status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_vouch_user_status");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">�̶������ˣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_user_status'])) $this->magic_vars['_A']['borrow_result']['vouch_user_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['vouch_user_status']==0): ?>-<? else: ?><? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_users'])) $this->magic_vars['_A']['borrow_result']['vouch_users'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['vouch_users'];$_tmp = $this->magic_modifier("deault",$_tmp,"-");echo $_tmp;unset($_tmp); ?><? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�ܵ�����</div>
		<div class="r">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_account'])) $this->magic_vars['_A']['borrow_result']['vouch_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_account']; ?>
		</div>
		<div class="s">�ѵ���������</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_account_scale'])) $this->magic_vars['_A']['borrow_result']['vouch_account_scale'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_account_scale']; ?>%
		</div>
	</div>
	<div class="module_border">
		
		<div class="l">�ѵ�����</div>
		<div class="r">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_account_yes'])) $this->magic_vars['_A']['borrow_result']['vouch_account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_account_yes']; ?>
		</div>
		<div class="s">δ������</div>
		<div class="c">
			��<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_account_wait'])) $this->magic_vars['_A']['borrow_result']['vouch_account_wait'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_account_wait']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">�Ƿ񵣱�������</div>
		<div class="r">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award_status'])) $this->magic_vars['_A']['borrow_result']['vouch_award_status'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['vouch_award_status'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_vouch_award_status");echo $_tmp;unset($_tmp); ?>
		</div>
		<div class="s">����������ʽ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award_status'])) $this->magic_vars['_A']['borrow_result']['vouch_award_status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['vouch_award_status']==2): ?>
			 ��<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award_account'])) $this->magic_vars['_A']['borrow_result']['vouch_award_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_award_account']; ?>
			 <? else: ?>
			 <? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award_scale'])) $this->magic_vars['_A']['borrow_result']['vouch_award_scale'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_award_scale']; ?>%
			 <? endif; ?>
		</div>
	</div>
	
	<div class="module_title"><strong>�����б�</strong></div>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">������</td>
			<td width="*" class="main_td">�������</td>
			<td width="" class="main_td">��Ч���</td>
			<td width="" class="main_td">����ʱ��</td>
			<td width="" class="main_td">��������</td>
		</tr>
		<? $this->magic_vars['query_type']='GetVouchList';$data = array('limit'=>'all','borrow_nid'=>$this->magic_vars['_A']['borrow_result']['borrow_nid'],'var'=>'item');$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" align="center"><a href="javascript:void(0)" onclick='tipsWindown("�û���ϸ��Ϣ�鿴","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/users/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['account_vouch'])) $this->magic_vars['item']['account_vouch'] = ''; echo $this->magic_vars['item']['account_vouch']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>Ԫ</td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?></td>
		</tr>
		<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
</table>
	<? endif; ?>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url_all'])) $this->magic_vars['_A']['query_url_all'] = ''; echo $this->magic_vars['_A']['query_url_all']; ?>/wind&view=<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_nid'])) $this->magic_vars['_A']['borrow_result']['borrow_nid'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_nid']; ?>" enctype="multipart/form-data"  method="post">
	<div class="module_title"><strong>��ؽ���</strong>    <input  type="submit"  src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/button.gif" align="absmiddle" value="������" class="submit_button"  />	</div>
	<div class="module_border" >
		<textarea id="wind_control" name="wind_control" rows="22" cols="680" style="width: 80%">
		<? if (!isset($this->magic_vars['_A']['borrow_result']['wind_control'])) $this->magic_vars['_A']['borrow_result']['wind_control']=''; ;if (  $this->magic_vars['_A']['borrow_result']['wind_control']==""): ?>
		
		<style>
.main_box{ border:#e5e5e5 solid 1px}
.main_box .con{ padding:20px 10px; line-height:20px;}
.title_bor a{ float:left; line-height:38px; background: url(/themes/rongzi/huaxin/images/title_bor_a.gif) no-repeat; width:104px; display:inline-block; text-align:center; color:#6d6d6d; font-size:16px; text-decoration:none;font-family:Microsoft YaHei}
.title_bor a.on{ background:url(/themes/rongzi/huaxin/images/title_bor_a_on.gif) no-repeat}
.title_bor span{ float:right; padding-right:10px}
.title_bor span a{ line-height:38px; font-family:"����"; font-size:12px; background:none; padding-right:10px;width:auto}
.title_bor{ background:url(/themes/rongzi/huaxin/images/title_bor_bg.gif) repeat-x; border-bottom:#cacaca solid 1px; height:38px; line-height:38px;}
</style>

		<div class="main_box t20">            
	<div class="title_bor">
		<a class="on">��ؽ���</a>
	</div>            
	<div>                
		<div class="con">
			����
		</div>            
	</div>        
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">��ҵ����</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">�ʲ����</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">�ʽ���;</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
<div class="main_box t20">
	<div class="title_bor">
		<a class="on">���տ��ƴ�ʩ</a>
	</div>
	<div>
		<div class="con">
			����
		</div>
	</div>
</div>
		<? else: ?>
		<? if (!isset($this->magic_vars['_A']['borrow_result']['wind_control'])) $this->magic_vars['_A']['borrow_result']['wind_control'] = ''; echo $this->magic_vars['_A']['borrow_result']['wind_control']; ?>
		<? endif; ?></textarea>	
		
	<script>var admin_url = "/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>";$('#wind_control').xheditor({skin:'o2007blue',upImgUrl:admin_url+"&q=plugins&p=xheditor&immediate=1",upImgExt:"jpg,jpeg,gif,png"});</script>
	</div>
	</form>
	<div class="module_title"><strong>�������</strong></div>
	<div class="module_border" >
		<textarea id="borrow_contents" name="borrow_contents" rows="22" cols="680" style="width: 80%"><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_contents'])) $this->magic_vars['_A']['borrow_result']['borrow_contents'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_contents']; ?></textarea>		
	<script>$('#borrow_contents').xheditor({tools:'Source'});</script>
	</div>
	
	
</div>