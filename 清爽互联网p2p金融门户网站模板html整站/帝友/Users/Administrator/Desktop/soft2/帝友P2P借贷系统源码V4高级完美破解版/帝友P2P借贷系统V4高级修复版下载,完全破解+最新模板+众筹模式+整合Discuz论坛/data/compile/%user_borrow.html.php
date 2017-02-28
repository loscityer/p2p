<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<div class="clearfix con_box">

<div class="mi_content">
	<div class="mi_c_left">
	<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<div class="user_right">
			<div class="m_change">
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment" ||  $this->magic_vars['_U']['query_type']=="repaymentplan" ||  $this->magic_vars['_U']['query_type']=="loandetail" ||  $this->magic_vars['_U']['query_type']=="repaymentyes" ||  $this->magic_vars['_U']['query_type']=="repayment_view"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment"): ?>class="onn"<? endif; ?>>还款中的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentplan" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repaymentplan"): ?> class="onn"<? endif; ?>>还款明细账</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/loandetail" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="loandetail"): ?> class="onn"<? endif; ?>>借款明细账</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentyes" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repaymentyes"): ?> class="onn"<? endif; ?>>已还清的借款</a></li>
					<? if (!isset($_REQUEST['id'])) $_REQUEST['id']=''; ;if (  $_REQUEST['id']!=""): ?>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentyes" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment_view"): ?> class="onn"<? endif; ?>>标的还款信息</a></li>
					<? endif; ?>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="success" ||  $this->magic_vars['_U']['query_type']=="gathering" ||  $this->magic_vars['_U']['query_type']=="gettender" ||  $this->magic_vars['_U']['query_type']=="lenddetail" ||  $this->magic_vars['_U']['query_type']=="successyes" ||  $this->magic_vars['_U']['query_type']=="before"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gettender" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="gettender"): ?> class="onn"<? endif; ?>>投标中的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/success&type=wait" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $_REQUEST['type']=="wait"  &&   $this->magic_vars['_U']['query_type']=="success"): ?> class="onn"<? endif; ?>>回收中的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering&type=wait" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $this->magic_vars['_U']['query_type']=="gathering" &&  $_REQUEST['type']=="wait"): ?> class="onn"<? endif; ?>>未收款明细账</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering&type=yes" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $this->magic_vars['_U']['query_type']=="gathering" &&  $_REQUEST['type']=="yes"): ?> class="onn"<? endif; ?>>已收款明细账</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/before" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="before"): ?> class="onn"<? endif; ?>>转让前收款明细</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/lenddetail" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="lenddetail"): ?> class="onn"<? endif; ?>>借出明细账</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/success&type=yes" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $_REQUEST['type']=="yes" &&   $this->magic_vars['_U']['query_type']=="success"): ?> class="onn"<? endif; ?>>回收完的借款</a></li>
				</ul>


               <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="zhongchou"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/zhongchou" class="onn">我的众筹投资</a></li>
				</ul>
			
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="bid"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bid" class="onn">正在投标的借款</a></li>
				</ul>
			
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="full_check"): ?>
				<ul>

					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/full_check" class="onn">满标复审的借款</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="auto" ||  $this->magic_vars['_U']['query_type']=="auto_list" ||  $this->magic_vars['_U']['query_type']=="auto_new"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto"): ?> class="onn"<? endif; ?> >自动投标</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_new" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto_new"): ?> class="onn"<? endif; ?>>添加自动投标</a></li>
				</ul>
				
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="debt_move" ||  $this->magic_vars['_U']['query_type']=="move_success" ||  $this->magic_vars['_U']['query_type']=="wait" ||  $this->magic_vars['_U']['query_type']=="buy_success" ||  $this->magic_vars['_U']['query_type']=="debting"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/debting" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="debting"): ?> class="onn"<? endif; ?> >可以转让的债权</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/debt_move" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="debt_move"): ?> class="onn"<? endif; ?> >正在转让的债权</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/move_success" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="move_success"): ?> class="onn"<? endif; ?>>成功转让的债权</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/buy_success" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="buy_success"): ?> class="onn"<? endif; ?>>成功购买的债权</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/wait&type=change" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="wait"): ?> class="onn"<? endif; ?>>回收中的债权</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="otherloan" ||  $this->magic_vars['_U']['query_type']=="otherloan_new"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="otherloan"): ?> class="onn"<? endif; ?> >其他网站借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan_new" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="otherloan_new"): ?> class="onn"<? endif; ?>>添加其他借款</a></li>
				</ul>
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="black" ||  $this->magic_vars['_U']['query_type']=="yqblack"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/black" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="black"): ?> class="onn"<? endif; ?> >我的黑名单</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/yqblack" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="yqblack"): ?> class="onn"<? endif; ?> >我的逾期黑名单</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch" ||  $this->magic_vars['_U']['query_type']=="tender_vouch_finish"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="tender_vouch"): ?> class="onn"<? endif; ?> >我担保的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $this->magic_vars['_U']['query_type']=="tender_vouch_finish" &&   $_REQUEST['status']!="0" &&  $_REQUEST['status']!="1"): ?> class="onn"<? endif; ?>>投标/复审担保标</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish&status=0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> class="onn"<? endif; ?>>还款中的担保标</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish&status=1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="1"): ?> class="onn"<? endif; ?>>已还完的担保标</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser" ||  $this->magic_vars['_U']['query_type']=="myuserrepay" ||  $this->magic_vars['_U']['query_type']=="myuserborrow" ||  $this->magic_vars['_U']['query_type']=="myuser_account"): ?>
				<ul>
					<li><a href="index.php?user&q=code/user/myuser" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="onn"<? endif; ?>>我的客服</a></li>
					<li><a href="index.php?user&q=code/borrow/myuser" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuserrepay" ||  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="onn"<? endif; ?>>客户借款</a></li>
					<li><a href="index.php?user&q=code/borrow/myuserborrow" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuserborrow"): ?> class="onn"<? endif; ?>>客户投资</a></li>
					<li><a href="index.php?user&q=code/borrow/myuser_account" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser_account"): ?> class="onn"<? endif; ?>>统计信息</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_vouch" ||   $this->magic_vars['_U']['query_type']=="borrow_vouched"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouch" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="borrow_vouch"): ?> class="onn"<? endif; ?>>担保的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouched" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="borrow_vouched"): ?> class="onn"<? endif; ?>>已通过担保的借款</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="care" ||  $this->magic_vars['_U']['query_type']=="borrow_reply"): ?>
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/care" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="care"): ?> class="onn"<? endif; ?>>我关注的借款</a></li>
					<!--<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_reply" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="borrow_reply"): ?> class="onn"<? endif; ?>>贷款者回复</a></li>-->
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="amount" ||  $this->magic_vars['_U']['query_type']=="amount_list"  ||  $this->magic_vars['_U']['query_type']=="amount_log"): ?>	
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/amount" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount"): ?> class="onn"<? endif; ?>>额度申请</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/amount_list" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount_list"): ?>class="onn"<? endif; ?>>申请记录</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/amount_log" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount_log"): ?>class="onn"<? endif; ?>>额度记录</a></li>
				</ul>

				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaylog"): ?>	
				<ul>
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaylog" class="onn">借款统计</a></li>
				</ul>
				<? else: ?>
				<ul>
                  <!--<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/shenqing" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="shenqing"): ?> class="onn"<? endif; ?>>借款申请</a></li>-->
					<li><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish" <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="publish"): ?> class="onn"<? endif; ?>>正在招标的借款</a></li>
				</ul>
				<? endif; ?>
			</div>

		<div class="us_r_bor1">
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="amount" ||  $this->magic_vars['_U']['query_type']=="amount_list"  ||  $this->magic_vars['_U']['query_type']=="amount_log"): ?>
		
		<? $this->magic_include(array('file' => "user_borrow_amount.html", 'vars' => array()));?>
        <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="shenqing"): ?>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<form action="" method="post">
			<tr class="ytit">
				<td colspan="11">我的借款申请</td>
			</tr>
			<tr class="ytit1" >
				<td  >ID</td>
				<td   nowrap="nowrap">企业名称/真实姓名</td>
				<td   nowrap="nowrap">手机</td>
				<td   nowrap="nowrap">借款金额</td>
				<td   nowrap="nowrap">借款期限</td>
				<td   nowrap="nowrap">借款用途</td>
				<td   nowrap="nowrap">还款方式</td>
				<td   nowrap="nowrap">借款类型</td>
				<td   nowrap="nowrap">申请时间</td>
				<td   nowrap="nowrap">状态</td>
				<td   nowrap="nowrap">操作</td>
			</tr>
			<? $this->magic_vars['query_type']='GetshenqingList';$data = array('var'=>'loop','status'=>'0,1,2','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetshenqingList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >
			<td  width="40" ><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
				<td  width="100"><? if (!isset($this->magic_vars['item']['b_enterprise'])) $this->magic_vars['item']['b_enterprise'] = ''; echo $this->magic_vars['item']['b_enterprise']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['b_phone'])) $this->magic_vars['item']['b_phone'] = ''; echo $this->magic_vars['item']['b_phone']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']< 10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_use'])) $this->magic_vars['item']['borrow_use'] = '';$_tmp = $this->magic_vars['item']['borrow_use'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_type'])) $this->magic_vars['item']['borrow_type']=''; ;if (  $this->magic_vars['item']['borrow_type']==2): ?><font color="#FF0000">担保标借款</font><? if (!isset($this->magic_vars['item']['borrow_type'])) $this->magic_vars['item']['borrow_type']=''; ;elseif (  $this->magic_vars['item']['borrow_type']==3): ?><font color="#FF0000">抵押借款</font><? else: ?>普通标借款<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>

				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>正在处理<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>未批准<? else: ?>-<? endif; ?></td>
				<td   nowrap="nowrap"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><a href="/borrow_list/index.html">发布借款</a><? else: ?>-<? endif; ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</form>
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="zhongchou"): ?>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<form action="" method="post">
			<tr class="ytit">
				<td colspan="11">我支持的项目</td>
			</tr>
			<tr class="ytit1" >
				<td  >ID</td>
				<td   nowrap="nowrap">项目标题</td>
				<td   nowrap="nowrap">筹资金额</td>
				<td   nowrap="nowrap">已筹资</td>
				<td   nowrap="nowrap">筹资期限</td>
				<td   nowrap="nowrap">项目类别</td>
				<td   nowrap="nowrap">投资金额</td>
				<td   nowrap="nowrap">投资时间</td>
				<td   nowrap="nowrap">状态</td>
			</tr>
			<? $this->magic_vars['query_type']='GetRauseTenderList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRauseTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >
			<td  width="40" ><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
				<td  width="100"><a href="/zhongchou/a<? if (!isset($this->magic_vars['item']['raise_id'])) $this->magic_vars['item']['raise_id'] = ''; echo $this->magic_vars['item']['raise_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['raise_name'])) $this->magic_vars['item']['raise_name'] = ''; echo $this->magic_vars['item']['raise_name']; ?></a></td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_account'])) $this->magic_vars['item']['raise_account'] = ''; echo $this->magic_vars['item']['raise_account']; ?>元</td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_account_yes'])) $this->magic_vars['item']['raise_account_yes'] = ''; echo $this->magic_vars['item']['raise_account_yes']; ?>元</td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_period'])) $this->magic_vars['item']['raise_period'] = ''; echo $this->magic_vars['item']['raise_period']; ?>天</td>
				<td  ><? if (!isset($this->magic_vars['item']['raise_type'])) $this->magic_vars['item']['raise_type'] = '';$_tmp = $this->magic_vars['item']['raise_type'];$_tmp = $this->magic_modifier("linkages",$_tmp,"raise_type");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>

				<td  ><? if (!isset($this->magic_vars['item']['raise_status'])) $this->magic_vars['item']['raise_status']=''; ;if (  $this->magic_vars['item']['raise_status']==0): ?><? if (!isset($this->magic_vars['item']['end_day'])) $this->magic_vars['item']['end_day']=''; ;if (  $this->magic_vars['item']['end_day']>=0): ?>筹资中<? else: ?>已结束<? endif; ?><? if (!isset($this->magic_vars['item']['raise_status'])) $this->magic_vars['item']['raise_status']=''; ;elseif (  $this->magic_vars['item']['raise_status']==1): ?>筹资成功<? if (!isset($this->magic_vars['item']['raise_status'])) $this->magic_vars['item']['raise_status']=''; ;elseif (  $this->magic_vars['item']['raise_status']==2): ?>筹资失败<? else: ?>-<? endif; ?></td>
				
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</form>
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="publish"): ?>
		<!--正在招标 开始-->
		<div class="t20">
		<div>
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<form action="" method="post">
			<tr class="ytit">
				<td colspan="11">正在招标的借款</td>
			</tr>
			<tr class="ytit1" >
				<td  >标题</td>
				<td  >类型</td>
			
				<td  >还款方式</td>
				<td  >金额(元)</td>
				<td  >年利率</td>
				<td  >期限</td>
				<td  >发布时间</td>
				<td  >进度</td>
				<td  >状态</td>
				<td  >操作</td>
			</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','is_flow'=>'2','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'0,1,2,4,5,6','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >
				<td ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>
				<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>担保标<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>净值标<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>流转标<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>快借标<? else: ?>普通标<? endif; ?></td>
		
				<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>发布审批中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale']=''; ;if (  $this->magic_vars['item']['borrow_account_scale']==100): ?><? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;if (  $this->magic_vars['item']['is_flow']==1): ?>已购完<? else: ?>满标审核中<? endif; ?><? else: ?>正在募集<? endif; ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>已满标<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>满标审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>撤回<? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0 &&  $this->magic_vars['item']['status']!=3): ?><a href="#" onclick="javascript:if(confirm('确定要撤回此招标')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cancel&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">撤回</a><? else: ?>-<? endif; ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			</form>
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		


		<!--正在招标 结束-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaylog"): ?>

		<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'item');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['item'] = borrowClass::GetUserCount($data);if(!is_array($this->magic_vars['item'])){ $this->magic_vars['item']=array();}?>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="4">个人借款统计</td>
			</tr>
			<tr>
				<td width="25%">总借入金额</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = '';$_tmp = $this->magic_vars['item']['borrow_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>元</td>
				<td width="25%">发布借款笔数</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['borrow_times'])) $this->magic_vars['item']['borrow_times'] = '';$_tmp = $this->magic_vars['item']['borrow_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>笔</td>
			</tr>
			<tr>
				<td>已还本息</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_yes'])) $this->magic_vars['item']['borrow_repay_yes'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>元</td>
				<td>成功借款笔数</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_success_times'])) $this->magic_vars['item']['borrow_success_times'] = '';$_tmp = $this->magic_vars['item']['borrow_success_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>笔</td>
			</tr>
			<tr>
				<td>待还本息</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_wait'])) $this->magic_vars['item']['borrow_repay_wait'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>元</td>
				<td>正常还清期数</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_yes_times'])) $this->magic_vars['item']['borrow_repay_yes_times'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_yes_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>期</td>
			</tr>
			<tr>
				<td>待还期数</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_repay_wait_times'])) $this->magic_vars['item']['borrow_repay_wait_times'] = '';$_tmp = $this->magic_vars['item']['borrow_repay_wait_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>期</td>
				<td>加权平均利率</td>
				<td><? if (!isset($this->magic_vars['item']['borrow_interest_scale'])) $this->magic_vars['item']['borrow_interest_scale'] = '';$_tmp = $this->magic_vars['item']['borrow_interest_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</td>
			</tr>
			<tr>
				<td>借款奖励支出</td>
				<td><? if (!isset($this->magic_vars['item']['award_lower'])) $this->magic_vars['item']['award_lower'] = '';$_tmp = $this->magic_vars['item']['award_lower'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>元</td>
				<td></td>
				<td></td>
			</tr>
		</table>
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="4">借款逾期统计</td>
			</tr>
			<tr>
				<td width="25%">逾期次数</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['late_nums'])) $this->magic_vars['item']['late_nums'] = '';$_tmp = $this->magic_vars['item']['late_nums'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>次</td>
				<td width="25%">逾期罚息</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['latemoney'])) $this->magic_vars['item']['latemoney'] = '';$_tmp = $this->magic_vars['item']['latemoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>元</td>
			</tr>
		</table>
		</div>
		
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="4">提前还款统计</td>
			</tr>
			<tr>
				<td width="25%">提前还款期数</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['advance_repay_times'])) $this->magic_vars['item']['advance_repay_times'] = '';$_tmp = $this->magic_vars['item']['advance_repay_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>期</td>
				<td width="25%">提前还款违约金</td>
				<td width="25%"><? if (!isset($this->magic_vars['item']['borrow_weiyue'])) $this->magic_vars['item']['borrow_weiyue'] = '';$_tmp = $this->magic_vars['item']['borrow_weiyue'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>元</td>
			</tr>
		</table>
		</div>
		<? unset($_magic_vars);unset($data); ?>
		


		


		<!--尚未发布 开始-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="unpublish"): ?>
		<div class="t20">
		<div>
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/unpublish')" />
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
		  <form action="" method="post">
			<tr class="ytit">
				<td colspan="6">尚未发布的借款</td>
			</tr>

				<tr class="ytit1" >


					<td  >标题</td>


					<td  >金额(元)</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >发布时间</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'-1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/publish/index.html?article_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">编辑</a> <a href="#" onclick="javascript:if(confirm('确定要删除此招标')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	
		</table>
		</div>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		

		<? unset($_magic_vars); ?>
		<!--尚未发布 结束-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repayment" ||   $this->magic_vars['_U']['query_type']=="repaymentyes"): ?>


		<!--正在还款的借款 开始-->

		<div class="t20">
		<div> 


		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>')" />


		</div>
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">

			  <form action="" method="post">


				


				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment"): ?>
				
			<tr class="ytit">
				<td colspan="11">正在还款的借款</td>
			</tr>

				<tr class="ytit1" >


					<td  >标题</td>


					<td  >协议</td>


					<td  >借款类型</td>


					<td  >借款金额</td>


					<td  >年利率</td>


					<td  >还款期限</td>


					<td  >借款时间</td>


					<td  >偿还本息</td>


					<td  >已还本息</td>


					<td  >未还本息</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','is_flow'=>'2','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','query_type'=>'repay_no','status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><a href="/protocol/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank">查看协议</a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>担保标<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>净值标<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>流转标<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>快借标<? else: ?>普通标<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?> </td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account_all'])) $this->magic_vars['item']['repay_account_all'] = ''; echo $this->magic_vars['item']['repay_account_all']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account_yes'])) $this->magic_vars['item']['repay_account_yes'] = '';$_tmp = $this->magic_vars['item']['repay_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account_wait'])) $this->magic_vars['item']['repay_account_wait'] = ''; echo $this->magic_vars['item']['repay_account_wait']; ?></td>


					<td  ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment_view&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>">还款明细</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<? else: ?>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','query_type'=>'repay_yes','status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
					
				<tr class="ytit">
					<td colspan="11">已还完的借款</td>
				</tr>

				<tr class="ytit1" >


					<td  >标题</td>


					<td  >协议</td>


					<td  >借款类型</td>


					<td  >借款金额</td>


					<td  >年利率</td>


					<td  >还款期限</td>


					<td  >借款时间</td>


					<td  >偿还本息</td>


					<td  >已还本息</td>


					<td  >已还逾期罚息</td>


					<td  >操作</td>


				</tr>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><a href="/protocol/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank">查看协议</a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>担保标<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>净值标<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>流转标<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>快借标<? else: ?>普通标<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account_all'])) $this->magic_vars['item']['repay_account_all'] = ''; echo $this->magic_vars['item']['repay_account_all']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account_yes'])) $this->magic_vars['item']['repay_account_yes'] = '';$_tmp = $this->magic_vars['item']['repay_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment_view&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>" >还款明细</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<? endif; ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		


				<? unset($_magic_vars); ?>

		<!--正在还款的借款 结束-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaymentplan"): ?>


		<!--还款明细 开始-->

		
		<div class="t20">
		<div>


		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentplan')" />


		</div>

		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				<tr class="ytit">
					<td colspan="10">还款明细</td>
				</tr>

				<tr class="ytit1" >


					<td  >标题</td>


					<td  >第几期</td>


					<td  >应还款日期</td>


					<td  >本期应还本息</td>


					<td  >利息</td>


					<td  >逾期利息</td>


					<td  >逾期天数</td>


					<td  >还款状态</td>

					<td  >当期还款</td>

					<td  >提前全额还款</td>


				</tr>
				
				<? $data = array('var'=>'Vvar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Vvar'] = usersClass::GetUsersVip($data);if(!is_array($this->magic_vars['Vvar'])){ $this->magic_vars['Vvar']=array();}?>
				<? $this->magic_vars['query_type']='GetBorrowRepayList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','order'=>'repay_time','repay_status'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowRepayList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>

					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_period'])) $this->magic_vars['item']['repay_period'] = ''; echo $this->magic_vars['item']['repay_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_interest'])) $this->magic_vars['item']['repay_interest'] = ''; echo $this->magic_vars['item']['repay_interest']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>天</td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_web'])) $this->magic_vars['item']['repay_web']=''; ;if (  $this->magic_vars['item']['repay_web']==1): ?>网站垫付<? if (!isset($this->magic_vars['item']['repay_vouch'])) $this->magic_vars['item']['repay_vouch']=''; ;elseif (  $this->magic_vars['item']['repay_vouch']==1): ?>担保者垫付<? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']=''; ;elseif (  $this->magic_vars['item']['repay_status']==1): ?>已还款<? else: ?>未还款<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']=''; ;if (  $this->magic_vars['item']['repay_status']!=1): ?>
					
					
					
					<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;if (  $this->magic_vars['item']['is_flow']==1): ?>
					自动还款
					<? else: ?>
					<a href="#" onclick="javascript:if(confirm('你确定要偿还此借款吗？')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">还款</a>
					<? endif; ?>
					
					<? else: ?>-<? endif; ?></td>
					<td>
					<? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']='';if (!isset($this->magic_vars['item']['advance_status'])) $this->magic_vars['item']['advance_status']='';if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']='';if (!isset($this->magic_vars['Vvar']['vip_type'])) $this->magic_vars['Vvar']['vip_type']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['repay_status']!=1 and  $this->magic_vars['item']['advance_status']==1 and  $this->magic_vars['item']['late_days']==0 and  $this->magic_vars['Vvar']['vip_type']==2 and  $this->magic_vars['item']['borrow_period']>11): ?>
						<a href="#" onclick="javascript:if(confirm('提前还款将一次性偿还剩余本金，且按剩余本金*1%计算违约金')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">提前全额还款</a>
					<? else: ?>
						-
					<? endif; ?>
					</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		<? unset($_magic_vars);unset($data); ?>
		<!--还款明细 结束-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="loandetail"): ?>


		<!--借款明细 开始-->
		<div class="t20">
			<div> 
			投资者：<input type="text" name="username" id="username" size="15" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
			<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/loandetail')" />
			</div>
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				
			<tr class="ytit">
				<td colspan="7">借款明细账</td>
			</tr>

				<tr class="ytit1" >


					<td  >投资者 </td>


					<td  >借入总额</td>


					<td  >还款总额</td>


					<td  >已还利息</td>


					<td  >已还罚息</td>


					<td  >待还总额</td>


					<td  >待还利息</td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','borrow_status'=>'3','borrow_userid'=>$this->magic_vars['_G']['user_id'],'username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>

				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>

				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>

					<td  ><font color="#FF0000">￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></font></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = '';$_tmp = $this->magic_vars['item']['recover_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_interest_yes'])) $this->magic_vars['item']['recover_account_interest_yes'] = '';$_tmp = $this->magic_vars['item']['recover_account_interest_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait'] = '';$_tmp = $this->magic_vars['item']['recover_account_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = '';$_tmp = $this->magic_vars['item']['recover_account_interest_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	
		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
				<? unset($_magic_vars); ?>

		<!--借款明细 结束-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="full_check"): ?>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="9">满标审核</td>
			</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标题</td>


					<td  >类型</td>


					<td  >还款方式</td>


					<td  >金额(元)</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >发布时间</td>


					<td  >进度</td>


					<td  >状态</td>

				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('showpage'=>'3','user_id'=>$this->magic_vars['_G']['user_id'],'var'=>'loop','query_type'=>'full_status');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >


					<td ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>担保标<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>净值标<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>流转标<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>快借标<? else: ?>普通标<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>复审成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>复审失败<? else: ?>等待复审<? endif; ?></td>

				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


				<? unset($_magic_vars); ?>

		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_reply"): ?>


		<!--贷款者回复 开始-->
		<div class="t20">
		您现在查看的是:<select name="status" id="status"> <option value="" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==""): ?>selected<? endif; ?>>所有回复</option> <option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?>selected<? endif; ?>>等我回复</option> <option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="1"): ?>selected<? endif; ?>>已回复</option></select>
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_reply')"/>
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="4">贷款者回复</td>
			</tr>


				<tr class="ytit1" >


					<td  >我的留言</td>


					<td  >回复内容</td>


					<td  >回复时间</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetBorrowComment';$data = array('var'=>'loop','showpage'=>'3','code'=>'borrow','user_id'=>'0','status'=>isset($_REQUEST['status'])?$_REQUEST['status']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowComment($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['contents'])) $this->magic_vars['item']['contents'] = ''; echo $this->magic_vars['item']['contents']; ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['reply_remark'])) $this->magic_vars['item']['reply_remark'] = '';$_tmp = $this->magic_vars['item']['reply_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"未回复");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['article_id'])) $this->magic_vars['item']['article_id'] = ''; echo $this->magic_vars['item']['article_id']; ?>.html" target="_blank">查看留言的借款</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<? unset($_magic_vars); ?>
		<!--投资者留言 结束-->


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_comment"): ?>


		<? if (!isset($_REQUEST['id'])) $_REQUEST['id']=''; ;if (  $_REQUEST['id']!=""): ?>


		<div> 


		你可以在此回复投资者的提问，建议写得详细点。


		</div>


		<form action="" method="post">


		


		<div class="user_right_border">


			<div class="e"> 留言者：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['username'])) $this->magic_vars['_U']['comment_result']['username'] = ''; echo $this->magic_vars['_U']['comment_result']['username']; ?>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> 留言时间：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['addtime'])) $this->magic_vars['_U']['comment_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['comment_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> 留言内容：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['comment'])) $this->magic_vars['_U']['comment_result']['comment'] = ''; echo $this->magic_vars['_U']['comment_result']['comment']; ?><input type="hidden" name="article_userid" value="<? if (!isset($this->magic_vars['_U']['comment_result']['article_userid'])) $this->magic_vars['_U']['comment_result']['article_userid'] = ''; echo $this->magic_vars['_U']['comment_result']['article_userid']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> 状态：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['comment_result']['reply_status'])) $this->magic_vars['_U']['comment_result']['reply_status']=''; ;if (  $this->magic_vars['_U']['comment_result']['reply_status']==1): ?>已回复<? else: ?>未回复<? endif; ?>


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">回复：</div>


			<div class="c">


				<textarea rows="5" cols="40" name="reply_remark"><? if (!isset($this->magic_vars['_U']['comment_result']['reply_remark'])) $this->magic_vars['_U']['comment_result']['reply_remark'] = ''; echo $this->magic_vars['_U']['comment_result']['reply_remark']; ?></textarea>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"></div>


			<div class="c">


				<input type="submit" name="name"  value="确认提交"  class="xinbuton" 
 size="30" /> 


			</div>


		</div>


		</form>


		<? else: ?>


		<!--投资者留言 开始-->


		<div class="t20">


		您现在查看的是:<select name="reply_status"  id="reply_status"> <option value="">所有回复</option> <option value="0" <? if (!isset($_REQUEST['reply_status'])) $_REQUEST['reply_status']=''; ;if (  $_REQUEST['reply_status']==0): ?> selected="selected"<? endif; ?>>等我回复</option> <option value="1" <? if (!isset($_REQUEST['reply_status'])) $_REQUEST['reply_status']=''; ;if (  $_REQUEST['reply_status']==1): ?> selected="selected"<? endif; ?>>已回复</option></select>


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_comment')"/>


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >留言者</td>


					<td  >留言内容</td>


					<td  >留言时间</td>


					<td  >留言状态</td>


					<td  >留言回复</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetBorrowComment';$data = array('var'=>'loop','showpage'=>'3','type'=>'tender','user_id'=>'0','reply_status'=>isset($_REQUEST['reply_status'])?$_REQUEST['reply_status']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowComment($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['comment'])) $this->magic_vars['item']['comment'] = ''; echo $this->magic_vars['item']['comment']; ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['reply_status'])) $this->magic_vars['item']['reply_status']=''; ;if (  $this->magic_vars['item']['reply_status']==0): ?>未回复<? else: ?>已回复<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['reply_remark'])) $this->magic_vars['item']['reply_remark'] = '';$_tmp = $this->magic_vars['item']['reply_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><a href="/?user&q=code/borrow/tender_comment&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">回复留言</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<!--贷款者回复 结束-->


		<? endif; ?>


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="limitapp"): ?>


		<!--额度申请 开始-->


		<div class="t20"> 


		额度申请原则上每次最多申请1万


		</div>


		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>


			<div align="center"><font color="#FF0000"><br />


<br />


<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>提醒你：</font>你还不是VIP会员，请先成为<a href="/vip/index.html"><strong>VIP会员</strong></a>。</div><br /><br /><br />





		<? else: ?>


		<? $data = array('user_id'=>'0','var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetAmountApplyOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>


		<form action="" method="post">


		<div class="user_right_border">


			<div class="e">申请者：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>


			</div>


		</div>


		<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==2): ?>


		<div class="user_right_border">


			<div class="e"> 状态：</div>


			<div class="c">


				正在审核中


			</div>


		</div>


		<div class="user_right_border">


			<div class="e"> 申请类型：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;if (  $this->magic_vars['var']['type']=="vouch"): ?>投资担保额度<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;elseif (  $this->magic_vars['var']['type']=="borrowvouch"): ?>借款担保额度<? else: ?>借款信用额度<? endif; ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="e"> 申请金额：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="e">详细说明：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">其它地方借款详细说明：</div>


			<div class="c">


			<? if (!isset($this->magic_vars['var']['remark'])) $this->magic_vars['var']['remark'] = ''; echo $this->magic_vars['var']['remark']; ?>


			</div>


		</div>


		


		<? else: ?>


		


		<div class="user_right_border">


			<div class="e"> 申请类型：</div>


			<div class="c">


				<select name="type"><option value="credit" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="credit"): ?> selected="selected"<? endif; ?>>借款信用额度</option><option value="tender_vouch" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="tender_vouch"): ?> selected="selected"<? endif; ?>>投资担保额度</option>


<option value="borrow_vouch" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="borrow_vouch"): ?> selected="selected"<? endif; ?>>借款担保额度</option>				


				</select>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"> 申请金额：</div>


			<div class="c">


				<input type="text" name="account" value="" /> 


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">详细说明：</div>


			<div class="c">


				<textarea rows="5" cols="40" name="content"></textarea>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">其它地方借款详细说明：</div>


			<div class="c">


			<textarea rows="5" cols="40" name="remark"></textarea>


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e"></div>


			<div class="c">


				<input type="submit" name="name"  value="确认提交"  class="xinbuton" 
 size="30" /> 


			</div>


		</div>


		<? endif; ?>


		</form>


		


		<? unset($_magic_vars);unset($data); ?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >申请时间</td>


					<td  >申请类型</td>


					<td  >申请金额(元)</td>


					<td  >通过金额(元)</td>


					<td  >备注说明</td>


					<td  >状态</td>


					<td  >审核时间</td>


					<td  >审核备注</td>


				</tr>


				<? $this->magic_vars['query_type']='GetAmountApplyList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountApplyList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']=="tender_vouch"): ?>投资担保额度<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="borrow_vouch"): ?>借款担保额度<? else: ?>借款信用额度<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['newaccount'])) $this->magic_vars['item']['newaccount'] = ''; echo $this->magic_vars['item']['newaccount']; ?></td>


					<td  width="300"><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>审核不通过<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>审核通过<? else: ?>正在审核<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>


					<td  ><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = ''; echo $this->magic_vars['item']['verify_remark']; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<div style="font-size:12px;">


		* 温馨提示：额度申请后 无论申请是否批准 必须隔一个月后才能再次申请，每个月只能申请一次如有问题,请与我们联系


		</div>


		<!--额度申请 结束-->


		<? endif; ?>


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="success"): ?>


		<!--成功投资 开始-->
		<div class="t20">
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  标题：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/success')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="9"><? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="yes"): ?>回收完的借款<? else: ?>回收中的借款<? endif; ?></td>
			</tr>


				<tr class="ytit1" >


					<td  >借款者</td>


					<td  >标题</td>


					<td  >借款类型</td>


					<td  >借款者等级</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >投资金额</td>


					<td  >已收本息</td>


					<td  >协议书</td>


					<!--<td  >联系方式</td>-->


				</tr>


				<? $this->magic_vars['query_type']='GetTenderBorrowList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'tender_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderBorrowList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = '';$_tmp = $this->magic_vars['item']['recover_account_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/protocol/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank">查看协议书</a></td>


					<!--<td  ><a href=""><? if (!isset($this->magic_vars['item']['borrow_userqq'])) $this->magic_vars['item']['borrow_userqq']=''; ;if (  $this->magic_vars['item']['borrow_userqq']==""): ?>-<? else: ?><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['item']['borrow_userqq'])) $this->magic_vars['item']['borrow_userqq'] = ''; echo $this->magic_vars['item']['borrow_userqq']; ?>&amp;site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['item']['borrow_userqq'])) $this->magic_vars['item']['borrow_userqq'] = ''; echo $this->magic_vars['item']['borrow_userqq']; ?>:41" alt="" title=""></a><? endif; ?></a></td>-->


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


				<? unset($_magic_vars); ?>

		<!--成功投资 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="wait"): ?>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="9">回收中的债权</td>
			</tr>


				<tr class="ytit1" >


					<td  >借款者</td>


					<td  >标题</td>


					<td  >借款类型</td>


					<td  >借款者等级</td>


					<td  >年利率</td>


					<td  >待收期数</td>


					<td  >投资金额</td>


					<td  >已收金额</td>


					<td  >协议书</td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderBorrowList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'tender_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderBorrowList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>

					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>

					<td  ><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>

					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>

					<td  ><? if (!isset($this->magic_vars['item']['wait_times'])) $this->magic_vars['item']['wait_times'] = ''; echo $this->magic_vars['item']['wait_times']; ?>个月</td>
					
					<td  >￥<? if (!isset($this->magic_vars['item']['change_account'])) $this->magic_vars['item']['change_account'] = ''; echo $this->magic_vars['item']['change_account']; ?></td>

					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_yes_all'])) $this->magic_vars['item']['recover_account_yes_all'] = '';$_tmp = $this->magic_vars['item']['recover_account_yes_all'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>

					<td  ><a href="/debt_protocol/a<? if (!isset($this->magic_vars['item']['change_id'])) $this->magic_vars['item']['change_id'] = ''; echo $this->magic_vars['item']['change_id']; ?>.html" target="_blank">转让协议书</a></td>

				</tr>
				<? endforeach; endif; unset($_from); ?>
			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


				<? unset($_magic_vars); ?>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="debt_move"): ?>
		<div class="user_main_title1">
		<strong style="color:#ff0000">温馨提示：</strong><br>
		1、转让有效期均为7天。<br>
		2、债权转让给网站，网站购买债权标准为：（待还本金+待还利息）*70%。
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit1" >
				<td  >投标标题</td>
				<td  >利率</td>
				<td  >待收期数/总期数</td>
				<td  >待收本金</td>
				<td  >待收利息</td>
				<td  >转让价格</td>
				<td  >发布时间</td>
				<td  >操作</td>
			</tr>
			
			<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>'0,2,3,4','var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr>
				<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['wait_times'])) $this->magic_vars['item']['wait_times'] = ''; echo $this->magic_vars['item']['wait_times']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_capital_wait'])) $this->magic_vars['item']['recover_account_capital_wait'] = ''; echo $this->magic_vars['item']['recover_account_capital_wait']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>待审核<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>转让网站待审核<? else: ?><a href="javascript:void(0)" onclick="JqueryAjaxs('code/borrow/change','&cancel_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>');">撤销</a>/<a href="javascript:void(0)" onclick="JqueryAjaxs('code/borrow/change','&web_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&account=<? if (!isset($this->magic_vars['item']['web_account'])) $this->magic_vars['item']['web_account'] = ''; echo $this->magic_vars['item']['web_account']; ?>');">转让给网站</a></a><? endif; ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>
			<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="move_success"): ?>
		<div class="user_main_title1">
		<strong style="color:#ff0000">温馨提示：</strong><br>
		1、转让有效期均为7天。<br>
		2、债权转让给网站，网站购买债权标准为：（待还本金+待还利息）*70%。
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit1" >
				<td  >投标标题</td>
				<td  >债权转让协议书</td>
				<td  >利率</td>
				<td  >待还期数/总期数</td>
				<td  >待收本息</td>
				<td  >转让价格</td>
				<td  >转让时间</td>
				<td  >购买者</td>
			</tr>
			<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>'1','var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr>
				<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
				<td  ><a href="/debt_protocol/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html">协议书</a></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['count_all'])) $this->magic_vars['item']['count_all'] = ''; echo $this->magic_vars['item']['count_all']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['web_status'])) $this->magic_vars['item']['web_status']=''; ;if (  $this->magic_vars['item']['web_status']==2): ?><? if (!isset($this->magic_vars['item']['web_buy'])) $this->magic_vars['item']['web_buy'] = ''; echo $this->magic_vars['item']['web_buy']; ?><? else: ?><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?><? endif; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['buy_time'])) $this->magic_vars['item']['buy_time'] = '';$_tmp = $this->magic_vars['item']['buy_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
				<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['buy_userid'])) $this->magic_vars['item']['buy_userid'] = ''; echo $this->magic_vars['item']['buy_userid']; ?>"><? if (!isset($this->magic_vars['item']['buy_username'])) $this->magic_vars['item']['buy_username'] = '';$_tmp = $this->magic_vars['item']['buy_username'];$_tmp = $this->magic_modifier("default",$_tmp,"网站");echo $_tmp;unset($_tmp); ?></a></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>
			<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="buy_success"): ?>
		<div class="user_main_title1">
		<strong style="color:#ff0000">温馨提示：</strong><br>
		1、转让有效期均为7天。<br>
		2、债权转让给网站，网站购买债权标准为：（待还本金+待还利息）*70%。
		</div>
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit1" >
				<td  >投标标题</td>
				<td  >债权转让协议书</td>
				<td  >利率</td>
				<td  >转让人</td>
				<td  >待还期数/总期数</td>
				<td  >待收本息</td>
				<td  >转让价格</td>
				<td  >收购时间</td>
			</tr>
			<? $this->magic_vars['query_type']='GetChangeList';$data = array('status'=>'1','var'=>'loop','buy_userid'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetChangeList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr>
				<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
				<td  ><a href="/debt_protocol/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html">协议书</a></td>
				<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>
				<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['count_all'])) $this->magic_vars['item']['count_all'] = ''; echo $this->magic_vars['item']['count_all']; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
				<td  ><? if (!isset($this->magic_vars['item']['buy_time'])) $this->magic_vars['item']['buy_time'] = '';$_tmp = $this->magic_vars['item']['buy_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>
		
			<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
			<? unset($_magic_vars); ?>
		</div>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="gettender"): ?>
		<!--投标中的借款 开始-->
		<div class="t20">
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  标题：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gettender')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
			<tr class="ytit">
				<td colspan="9">投标中的借款</td>
			</tr>


				<tr class="ytit1" >


					<td  >借款者</td>


					<td  >标题</td>


					<td  >借款类型</td>


					<td  >借款者等级</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >投资金额</td>


					<td  >进度</td>


					<td  >状态</td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderBorrowList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'tender_status'=>'0','borrow_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderBorrowList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>

					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>担保标<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>净值标<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>流转标<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>快借标<? else: ?>普通标<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender']='';if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account']=''; ;if (  $this->magic_vars['item']['account_tender']== $this->magic_vars['item']['tender_account']): ?>全部通过<? else: ?>部分通过<? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch"): ?>


		<!--成功担保 开始-->
		<div class="t20"> 


		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch')" />


		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="8">我担保的借款</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标题</td>


					<td  >借款者</td>


					<td  >借款总额</td>


					<td  >借款期限</td>


					<td  >担保奖励</td>


					<td  >担保总额</td>


					<td  >担保时间</td>


					<td  >状态</td>


				</tr>


				<? $this->magic_vars['query_type']='GetVouchList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					


					<td  >￥<? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = ''; echo $this->magic_vars['item']['borrow_account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['award_account'])) $this->magic_vars['item']['award_account'] = ''; echo $this->magic_vars['item']['award_account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">失败</font><? else: ?>待审核<? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>
				


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>

		<!--担保明细 结束-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch_finish"): ?>


		


		<div class="t20">


		收款时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish')" />


		</div>
		<div class="t20">


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				
			<tr class="ytit">
				<td colspan="7">已担保的借款</td>
			</tr>

				<tr class="ytit1" >


					<td  >借款者</td>


					<td  >借款标题</td>


					<td  >应还日期</td>


					<td  >第几期/总期数</td>


					<td  >总额</td>


					<td  >担保总额</td>


					<td  >状态</td>


				</tr>


				<? $this->magic_vars['query_type']='GetVouchRepayList';$data = array('var'=>'loop','showpage'=>'3','vouch_userid'=>$this->magic_vars['_G']['user_id'],'keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','status'=>$_REQUEST['status'],'order'=>'repay_time');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchRepayList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><font color="#666666">已还</font><? else: ?><font color="#FF0000">未还</font><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>

		<!--担保明细 结束-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_vouch"): ?>

		<div class="t20"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouch')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="7">担保的借款</td>
			</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标题</td>


					<td  >借款类型</td>


					<td  >担保金额</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >发布时间</td>


					<td  >担保进度</td>				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'status'=>'1','vouch_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td  align="center" ><div style="margin-left:10px; float:left"><div class="rate_bg ">


							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%"></div>


						</div></div><div style="float:left"><? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%</div></td>


					


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>


		<!--成功投资 结束-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="borrow_vouched"): ?>


		<!--担保完成借款 开始-->


		


		<div class="t20"> 


		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/borrow_vouch')" />


		</div>

		<div class="t20"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="7">已通过担保的借款</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标题</td>


					<td  >借款类型</td>


					<td  >担保金额</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >发布时间</td>


					<td  >担保进度</td>				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'status'=>'3','vouch_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_style'])) $this->magic_vars['item']['borrow_style'] = '';$_tmp = $this->magic_vars['item']['borrow_style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td  align="center" ><div style="margin-left:10px; float:left"><div class="rate_bg ">


							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%"></div>


						</div></div><div style="float:left"><? if (!isset($this->magic_vars['item']['vouch_account_scale'])) $this->magic_vars['item']['vouch_account_scale'] = '';$_tmp = $this->magic_vars['item']['vouch_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%</div></td>


					


				</tr>


				<? endforeach; endif; unset($_from); ?>
			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>



		<!--担保完成借款 结束-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="gathering"): ?>

		<!--收款明细 开始-->

		<!--<div class="t20">
		<? $data = array('var'=>'Devar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['Devar'] = borrowClass::GetUserCount($data);if(!is_array($this->magic_vars['Devar'])){ $this->magic_vars['Devar']=array();}?>
		<table >
			<tr>
				<td>投资总额：￥<? if (!isset($this->magic_vars['Devar']['tender_account'])) $this->magic_vars['Devar']['tender_account'] = '';$_tmp = $this->magic_vars['Devar']['tender_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>已收总额：￥<? if (!isset($this->magic_vars['Devar']['tender_recover_yes'])) $this->magic_vars['Devar']['tender_recover_yes'] = '';$_tmp = $this->magic_vars['Devar']['tender_recover_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>已收利息：￥<? if (!isset($this->magic_vars['Devar']['tender_interest_yes'])) $this->magic_vars['Devar']['tender_interest_yes'] = '';$_tmp = $this->magic_vars['Devar']['tender_interest_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr>
				<td>待收总额：￥<? if (!isset($this->magic_vars['Devar']['tender_recover_wait'])) $this->magic_vars['Devar']['tender_recover_wait'] = '';$_tmp = $this->magic_vars['Devar']['tender_recover_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>待收利息：￥<? if (!isset($this->magic_vars['Devar']['tender_interest_wait'])) $this->magic_vars['Devar']['tender_interest_wait'] = '';$_tmp = $this->magic_vars['Devar']['tender_interest_wait'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
				<td>净赚利息：￥<? if (!isset($this->magic_vars['Devar']['tender_interest_account'])) $this->magic_vars['Devar']['tender_interest_account'] = '';$_tmp = $this->magic_vars['Devar']['tender_interest_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>
			</tr>
		</table>  
		<? unset($_magic_vars);unset($data); ?>
		</div>-->


		<div class="t20">
		应收日期：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="10"><? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="yes"): ?>已收款明细账<? else: ?>未收款明细账<? endif; ?></td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >借款标题</td>


					<td  >应收日期</td>


					<td  >借款者</td>


					<td  >第几期/总期数</td>


					<td  >应收总额</td>


					<td  >应收本金</td>


					<td  >应收利息</td>


					<td  >逾期罚息</td>


					<td  >逾期天数</td>


					<td  >状态</td>


				</tr>


				<? $this->magic_vars['query_type']='GetRecoverList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','type'=>$_REQUEST['type'],'order'=>'repay_time','epage'=>'10','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRecoverList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_time'])) $this->magic_vars['item']['recover_time'] = '';$_tmp = $this->magic_vars['item']['recover_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_period'])) $this->magic_vars['item']['recover_period'] = ''; echo $this->magic_vars['item']['recover_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['all_recover'])) $this->magic_vars['item']['all_recover'] = ''; echo $this->magic_vars['item']['all_recover']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_capital'])) $this->magic_vars['item']['recover_capital'] = ''; echo $this->magic_vars['item']['recover_capital']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_interest'])) $this->magic_vars['item']['recover_interest'] = ''; echo $this->magic_vars['item']['recover_interest']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = '';$_tmp = $this->magic_vars['item']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>天</td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_web'])) $this->magic_vars['item']['recover_web']=''; ;if (  $this->magic_vars['item']['recover_web']==1): ?>网站垫付<? if (!isset($this->magic_vars['item']['recover_status'])) $this->magic_vars['item']['recover_status']=''; ;elseif (  $this->magic_vars['item']['recover_status']==1): ?><font color="#666666">已还</font><? else: ?><font color="#FF0000">未还</font><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>

			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>
		


		<!--收款明细 结束-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="before"): ?>


		<div class="t20">
		应收日期：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/before')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="10">转让前收款明细</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >借款标题</td>


					<td  >应收日期</td>


					<td  >借款者</td>


					<td  >第几期/总期数</td>


					<td  >收款总额</td>


					<td  >应收本金</td>


					<td  >应收利息</td>


					<td  >逾期利息</td>


					<td  >逾期天数</td>


					<td  >状态</td>


				</tr>


				<? $this->magic_vars['query_type']='GetRecoverList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','type'=>$_REQUEST['type'],'order'=>'repay_time','change'=>'1','style'=>'change','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRecoverList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['change']) || $this->magic_vars['loop']['change']=='') $this->magic_vars['loop']['change'] = array();  $_from = $this->magic_vars['loop']['change']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_time'])) $this->magic_vars['item']['recover_time'] = '';$_tmp = $this->magic_vars['item']['recover_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_period'])) $this->magic_vars['item']['recover_period'] = ''; echo $this->magic_vars['item']['recover_period']+1; ?>/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account'])) $this->magic_vars['item']['recover_account'] = ''; echo $this->magic_vars['item']['recover_account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_capital'])) $this->magic_vars['item']['recover_capital'] = ''; echo $this->magic_vars['item']['recover_capital']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_interest'])) $this->magic_vars['item']['recover_interest'] = ''; echo $this->magic_vars['item']['recover_interest']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = '';$_tmp = $this->magic_vars['item']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>天</td>


					<td  ><? if (!isset($this->magic_vars['item']['recover_status'])) $this->magic_vars['item']['recover_status']=''; ;if (  $this->magic_vars['item']['recover_status']==1): ?><font color="#666666">已还</font><? else: ?><font color="#FF0000">未还</font><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>

			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="lenddetail"): ?>
		<div class="t20">
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/lenddetail')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
				<tr class="ytit">
					<td colspan="11">借出明细账</td>
				</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >借款者</td>


					<td  >借款标</td>


					<td  >借出总额</td>


					<td  >收益总额</td>


					<td  >已收总额</td>


					<td  >待收总额</td>


					<td  >已收利息</td>


					<td  >待收利息</td>


					<td  >已还期数/总期数</td>


					<td  >备注</td>


				</tr>


			<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>￥<? if (!isset($this->magic_vars['item']['recover_account_yes_all'])) $this->magic_vars['item']['recover_account_yes_all'] = ''; echo $this->magic_vars['item']['recover_account_yes_all']; ?><? else: ?>￥<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = ''; echo $this->magic_vars['item']['recover_account_yes']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>0<? else: ?>￥<? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait'] = ''; echo $this->magic_vars['item']['recover_account_wait']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>￥<? if (!isset($this->magic_vars['item']['recover_interest_yes_all'])) $this->magic_vars['item']['recover_interest_yes_all'] = ''; echo $this->magic_vars['item']['recover_interest_yes_all']; ?><? else: ?>￥<? if (!isset($this->magic_vars['item']['recover_account_interest_yes'])) $this->magic_vars['item']['recover_account_interest_yes'] = ''; echo $this->magic_vars['item']['recover_account_interest_yes']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>0<? else: ?>￥<? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?><? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?><? if (!isset($this->magic_vars['item']['count_all'])) $this->magic_vars['item']['count_all'] = '';$_tmp = $this->magic_vars['item']['count_all'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>期/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>期<? else: ?><? if (!isset($this->magic_vars['item']['repay_num'])) $this->magic_vars['item']['repay_num'] = '';$_tmp = $this->magic_vars['item']['repay_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>期/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>期<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==1): ?>已转让<? else: ?>-<? endif; ?></td>

				</tr>


				<? endforeach; endif; unset($_from); ?>



			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		<!--借出明细 结束-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="debting"): ?>
		<div class="t20">
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/debting')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
				<tr class="ytit">
					<td colspan="10">可以转让的债权</td>
				</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >借款者</td>


					<td  >借款标</td>


					<td  >借出总额</td>


					<td  >收益总额</td>


					<td  >已收总额</td>


					<td  >待收总额</td>


					<td  >已收利息</td>


					<td  >待收利息</td>


					<td  >未还期数/总期数</td>
					
					<td  >操作</td>


				</tr>


			<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'1','change_status'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_all'])) $this->magic_vars['item']['recover_account_all'] = ''; echo $this->magic_vars['item']['recover_account_all']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_yes'])) $this->magic_vars['item']['recover_account_yes'] = ''; echo $this->magic_vars['item']['recover_account_yes']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait'] = ''; echo $this->magic_vars['item']['recover_account_wait']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_interest_yes'])) $this->magic_vars['item']['recover_account_interest_yes'] = ''; echo $this->magic_vars['item']['recover_account_interest_yes']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['recover_account_interest_wait'])) $this->magic_vars['item']['recover_account_interest_wait'] = ''; echo $this->magic_vars['item']['recover_account_interest_wait']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['norepay_num'])) $this->magic_vars['item']['norepay_num'] = '';$_tmp = $this->magic_vars['item']['norepay_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>期/<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>期</td>
					
					<td  ><? if (!isset($this->magic_vars['item']['change_no'])) $this->magic_vars['item']['change_no']=''; ;if (  $this->magic_vars['item']['change_no']==1): ?>有逾期出现不能转让。<? else: ?><? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;if (  $this->magic_vars['item']['change_status']==2): ?>正在转让<? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;elseif (  $this->magic_vars['item']['change_status']==3): ?>转让申请<? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;elseif (  $this->magic_vars['item']['change_status']==4): ?>转让网站中<? if (!isset($this->magic_vars['item']['change_status'])) $this->magic_vars['item']['change_status']=''; ;elseif (  $this->magic_vars['item']['change_status']==1): ?>已转让<? else: ?><? if (!isset($this->magic_vars['item']['recover_account_wait'])) $this->magic_vars['item']['recover_account_wait']=''; ;if (  $this->magic_vars['item']['recover_account_wait']>0): ?><a href="javascript:void(0)" onclick="JqueryAjaxs('code/borrow/change','&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&account=<? if (!isset($this->magic_vars['item']['recover_account_capital_wait'])) $this->magic_vars['item']['recover_account_capital_wait'] = ''; echo $this->magic_vars['item']['recover_account_capital_wait']; ?>');">债权转让</a><? else: ?>-<? endif; ?><? endif; ?><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>



			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		<!--借出明细 结束-->
		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="bid"): ?>


		<!--正在投标的借款 开始-->


		<div class="t20">
			投标时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
			<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bid')" />
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">
			<tr class="ytit">
				<td colspan="7">正在投标的借款</td>
			</tr>


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标题</td>


					<td  >借款者</td>


					<td  >总借款额/借款利率</td>


					<td  >投标/有效金额</td>


					<td  >信用积分/投标时间 </td>


					<td  >进度</td>


					<td  >状态 </td>


				</tr>


				<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td style="line-height:21px;"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a> </td>


					<td  style="line-height:21px;"><a  href="/u/<? if (!isset($this->magic_vars['item']['borrow_userid'])) $this->magic_vars['item']['borrow_userid'] = ''; echo $this->magic_vars['item']['borrow_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>


					<td style="line-height:21px;">总借款额:￥<? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = ''; echo $this->magic_vars['item']['borrow_account']; ?><br />借款利率:<font color="#FF0000"><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?>%</font></td><td style="line-height:21px;">投标金额:￥<? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender'] = ''; echo $this->magic_vars['item']['account_tender']; ?><br />有效金额:<font color="#FF0000">￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></font></td>


					


					<td style="line-height:25px;"><span><? if (!isset($this->magic_vars['item']['credit']['approve_credit'])) $this->magic_vars['item']['credit']['approve_credit'] = '';$_tmp = $this->magic_vars['item']['credit']['approve_credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"credit");echo $_tmp;unset($_tmp); ?></span><br /><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>


					


					<td style="line-height:21px;"><div class="rate_bg floatl" align="left">


							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = '';$_tmp = $this->magic_vars['item']['borrow_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%"></div>


						</div><span class="floatl"><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = ''; echo $this->magic_vars['item']['borrow_account_scale']; ?>%</span></td>


					<td style="line-height:21px;"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?>投标失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>借款被撤回<? else: ?><? if (!isset($this->magic_vars['item']['account_tender'])) $this->magic_vars['item']['account_tender']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']=''; ;if (  $this->magic_vars['item']['account_tender']== $this->magic_vars['item']['account']): ?>全部通过<? else: ?>部分通过<? endif; ?><? endif; ?></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>
		<!--正在投标的借款 结束-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="appraisal"): ?>

		<div class="t20">
			发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
			<input value="搜索"  class="xinbuton" 
type="submit" />
		</div>
		
		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标题      </td>


					<td  >借款者</td>


					<td  >投标金额</td>


					<td  >完成时间</td>


					<td  >评价结果</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><strong>短期借款，提前还款</strong> </td>


					<td  >op6778</td>


					<td><img src="/pic/rank_4.gif" /></td>


					<td  >18%</td>


					<td  >1个月</td>


					<td  >50</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		</div>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>


		<!--我的评价 结束-->


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="attention"): ?>


		<!--我关注的借款 开始-->


		<div> 


		<select><option>进行中的借款</option><option>已结束的借款</option></select> 发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 


		<input value="搜索"  class="xinbuton" 
type="submit" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >图片                  </td>


					<td  >标题</td>


					<td  >金额(元)</td>


					<td  >进度</td>


					<td  >期限</td>


					<td  >信用等级</td>


					<td  >操作</td>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><strong>短期借款，提前还款</strong> </td>


					<td  >op6778</td>


					<td><img src="/pic/rank_4.gif" /></td>


					<td  >18%</td>


					<td  >1个月</td>


					<td  >50</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<!--我关注的借款 结束-->


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_reply"): ?>


		<!--投资者留言 开始-->


		<div> 


		您现在查看的是:<select name="status"> <option value="">所有回复</option> <option value="0">等我回复</option> <option value="1">已回复</option></select>


		<input value="搜索"  class="xinbuton" 
type="submit" />


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >标的标题</td>


					<td  >留言者</td>


					<td  >留言内容</td>


					<td  >留言时间</td>


					<td  >留言状态</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><strong>短期借款，提前还款</strong> </td>


					<td  >op6778</td>


					<td><img src="/pic/rank_4.gif" /></td>


					<td  >18%</td>


					<td  >1个月</td>


					<td  >50</td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="8" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>


		<!--投资者留言 结束-->


		


		


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>


		<!--我的客户 结束-->


		<div class="user_main_title1" > 


		<? $this->magic_vars['query_type']='GetMyuserList';$data = array('var'=>'loop','user_id'=>'0','showpage'=>'3','epage'=>'20','suser_id'=>$_REQUEST['user_id'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetMyuserList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


			


		<strong>总借款数：</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> 个


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >用户名</td>


					<td  >真实姓名</td>


					<td  >标题</td>


					<td  >借款金额</td>


					<td  >借款时间</td>


					<td  >成功借款时间</td>


					<td  >状态</td>


				</tr>


					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr >


					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>


					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></a> </td>


					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td>￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>


					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['item']['success_time'])) $this->magic_vars['item']['success_time'] = '';$_tmp = $this->magic_vars['item']['success_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==5): ?>取消<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>借款成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>满标审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>正在招标中<? endif; ?></td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


				<tr >


					<td colspan="8" class="page">


						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


					</td>


				</tr>


			</form>	


		</table>


		<? unset($_magic_vars); ?>


		<!--我的客户 结束-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuserborrow"): ?>


		<!--我的客户 结束-->


		<div class="user_main_title1" > 


		<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id'],'showpage'=>'3','epage'=>'20');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


			


		<strong>总投资数：</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> 个


		</div>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >用户名</td>


					<td  >标题</td>


					<td  >投资金额</td>


					<td  >有效金额</td>


					<td  >投资时间</td>


					<td  >状态</td>


				</tr>


					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr >


					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>


					<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>


					<td>￥<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>


					<td>￥<? if (!isset($this->magic_vars['item']['tender_money'])) $this->magic_vars['item']['tender_money'] = ''; echo $this->magic_vars['item']['tender_money']; ?></td>


					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>待审核<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>取消<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>成功<? endif; ?></td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


				<tr >


					<td colspan="8" class="page">


						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


					</td>


				</tr>


			</form>	


		</table>


		<? unset($_magic_vars); ?>


		<!--我的客户 结束-->


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser_account"): ?>


		<!--我的客户统计 结束-->


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >时间</td>


					<td  >成功借款</td>


					<td  >成功投资</td>


					<td  >VIP数</td>


				</tr>


					<? $this->magic_vars['query_type']='GetMyuserAcount';$data = array('var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetMyuserAcount($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>


				<tr >


					<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = '';$_tmp = $this->magic_vars['key'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m");echo $_tmp;unset($_tmp); ?></td>


					<td>￥<? if (!isset($this->magic_vars['var']['borrow'])) $this->magic_vars['var']['borrow'] = '';$_tmp = $this->magic_vars['var']['borrow'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td>￥<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['var']['vip'])) $this->magic_vars['var']['vip'] = '';$_tmp = $this->magic_vars['var']['vip'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>个</td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


			</form>	


		</table>


		<? unset($_magic_vars); ?>


		<!--我的客户统计 结束-->


		


		


		


		<!--还款明细 开始-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repayment_view"): ?>


		<div class="user_right_border">


			<div class="l">标题：</div>


			<div class="c">


				<? if (!isset($this->magic_vars['_U']['borrow_result']['name'])) $this->magic_vars['_U']['borrow_result']['name'] = ''; echo $this->magic_vars['_U']['borrow_result']['name']; ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="l"> 借款金额：</div>


			<div class="rb">


				<font color="#FF0000"><strong>￥<? if (!isset($this->magic_vars['_U']['borrow_result']['account'])) $this->magic_vars['_U']['borrow_result']['account'] = ''; echo $this->magic_vars['_U']['borrow_result']['account']; ?></strong></font>


			</div>


			<div class="l"> 借款利率：</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_apr'])) $this->magic_vars['_U']['borrow_result']['borrow_apr'] = ''; echo $this->magic_vars['_U']['borrow_result']['borrow_apr']; ?>%


			</div>


		</div>


		<div class="user_right_border">


			<div class="l"> 借款期限：</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;if (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']='';if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] >= 1 &&  $this->magic_vars['_U']['borrow_result']['borrow_period']<10): ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?>


			</div>


			<div class="l"> 还款方式：</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_style'])) $this->magic_vars['_U']['borrow_result']['borrow_style'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_style'];$_tmp = $this->magic_modifier("linkages",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>


			</div>


		</div>


		<div class="user_right_border">


			<div class="l"> 发布时间：</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['addtime'])) $this->magic_vars['_U']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>


			</div>


			<div class="l"> 借款时间：</div>


			<div class="rb">

                             <? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;if (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']='';if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period']=''; ;elseif (  $this->magic_vars['_U']['borrow_result']['borrow_period'] >= 1 &&  $this->magic_vars['_U']['borrow_result']['borrow_period']< 10): ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['_U']['borrow_result']['borrow_period'])) $this->magic_vars['_U']['borrow_result']['borrow_period'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?>
				 


			</div>


		</div>


		<!--


		<div class="user_right_border">


			<div class="l"> 下次还款时间：</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['borrow_result']['username'])) $this->magic_vars['_U']['borrow_result']['username'] = ''; echo $this->magic_vars['_U']['borrow_result']['username']; ?>


			</div>


			<div class="l"> 下次还款金额：</div>


			<div class="rb">


				 <? if (!isset($this->magic_vars['_U']['user_result']['username'])) $this->magic_vars['_U']['user_result']['username'] = ''; echo $this->magic_vars['_U']['user_result']['username']; ?>


			</div>


		</div>


		-->


		<!--还款明细 结束-->


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >序号</td>


					<td  >计划还款日</td>


					<td  >计划还款本息</td>


					<td  >实还日期</td>


					<td  >逾期天数</td>


					<td  >实还本息</td>


					<td  >逾期罚息</td>


					<!--<td  >催缴费</td>-->


					<td  >总还款金额</td>


					<td  >状态</td>


					<td  >当期还款</td>


					<td  >提前全额还款</td>


				</tr>


				<? $this->magic_vars['query_type']='GetBorrowRepayList';$data = array('borrow_status'=>'3','borrow_nid'=>isset($_REQUEST['borrow_nid'])?$_REQUEST['borrow_nid']:'','limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowRepayList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>


			


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><? if (!isset($this->magic_vars['var']['repay_period'])) $this->magic_vars['var']['repay_period'] = ''; echo $this->magic_vars['var']['repay_period']+1; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_time'])) $this->magic_vars['var']['repay_time'] = '';$_tmp = $this->magic_vars['var']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>


					<td>￥<? if (!isset($this->magic_vars['var']['repay_account'])) $this->magic_vars['var']['repay_account'] = ''; echo $this->magic_vars['var']['repay_account']; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_yestime'])) $this->magic_vars['var']['repay_yestime'] = '';$_tmp = $this->magic_vars['var']['repay_yestime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>


					<td><? if (!isset($this->magic_vars['var']['late_days'])) $this->magic_vars['var']['late_days'] = '';$_tmp = $this->magic_vars['var']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>天</td>


					<td>￥<? if (!isset($this->magic_vars['var']['repay_account_yes'])) $this->magic_vars['var']['repay_account_yes'] = ''; echo $this->magic_vars['var']['repay_account_yes']; ?></td>


					<td>￥<? if (!isset($this->magic_vars['var']['late_interest'])) $this->magic_vars['var']['late_interest'] = '';$_tmp = $this->magic_vars['var']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>


					<!--<td>￥<? if (!isset($this->magic_vars['var']['late_reminder'])) $this->magic_vars['var']['late_reminder'] = '';$_tmp = $this->magic_vars['var']['late_reminder'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?></td>-->


					<td>￥<? if (!isset($this->magic_vars['var']['late_interest'])) $this->magic_vars['var']['late_interest'] = '';if (!isset($this->magic_vars['var']['repay_account'])) $this->magic_vars['var']['repay_account'] = ''; echo $this->magic_vars['var']['late_interest']+$this->magic_vars['var']['repay_account']; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_web'])) $this->magic_vars['var']['repay_web']=''; ;if (  $this->magic_vars['var']['repay_web']==1): ?>网站垫付<? if (!isset($this->magic_vars['var']['repay_vouch'])) $this->magic_vars['var']['repay_vouch']=''; ;elseif (  $this->magic_vars['var']['repay_vouch']==1): ?>担保者垫付<? if (!isset($this->magic_vars['var']['repay_status'])) $this->magic_vars['var']['repay_status']=''; ;elseif (  $this->magic_vars['var']['repay_status']==1): ?>已还款<? else: ?>未还款<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['repay_status'])) $this->magic_vars['var']['repay_status']=''; ;if (  $this->magic_vars['var']['repay_status']==1): ?>-<? else: ?>
					
					<? if (!isset($this->magic_vars['_U']['borrow_result']['is_flow'])) $this->magic_vars['_U']['borrow_result']['is_flow']=''; ;if (  $this->magic_vars['_U']['borrow_result']['is_flow']==1): ?>
					自动还款
					<? else: ?>
					<a href="#" onclick="javascript:if(confirm('你确定要偿还此借款吗？')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>&borrow_nid=<? if (!isset($this->magic_vars['var']['borrow_nid'])) $this->magic_vars['var']['borrow_nid'] = ''; echo $this->magic_vars['var']['borrow_nid']; ?>'">还款</a>
					<? endif; ?>
					
					<? endif; ?></td>
					
					<td>
					<? if (!isset($this->magic_vars['item']['repay_status'])) $this->magic_vars['item']['repay_status']='';if (!isset($this->magic_vars['item']['advance_status'])) $this->magic_vars['item']['advance_status']='';if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']='';if (!isset($this->magic_vars['Vvar']['vip_type'])) $this->magic_vars['Vvar']['vip_type']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['_U']['borrow_result']['is_flow'])) $this->magic_vars['_U']['borrow_result']['is_flow']=''; ;if (  $this->magic_vars['item']['repay_status']!=1 and  $this->magic_vars['item']['advance_status']==1 and  $this->magic_vars['item']['late_days']==0 and  $this->magic_vars['Vvar']['vip_type']==2 and  $this->magic_vars['item']['borrow_period']>11 and  $this->magic_vars['_U']['borrow_result']['is_flow']!=1): ?>
						<a href="#" onclick="javascript:if(confirm('提前还款将一次性偿还剩余本金，且按剩余本金*1%计算违约金')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&borrow_nid=<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>'">提前全额还款</a>
					<? else: ?>
						-
					<? endif; ?>
					</td>

				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


			</form>	


		</table>


		<br>


		<!--自动投标 开始-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="auto"): ?>
		<div class="t20">
			1、自动投标最多允许添加3个规则，系统会根据排序从大到小，并跳过未启用的<br />
			2、我们允许您添加3个自动投标规则，但系统会根据序号从小到大进行判断，并跳过状态为停用的规则。 <br />
			3、当判断到有符合条件的规则时即为您自动投标，而后续的规则则不予采用。 
		</div>

		<div class="t20">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">

			<tr class="ytit">
				<td colspan="13">自动投标</td>
			</tr>

			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >排序</td>


					<td  >是否启用</td>


					<td  >投标类型</td>


					<td  >投标金额</td>


					<td  >投标比例</td>


					<td  >利率范围</td>


					<td  >借款期限</td>


					<td  >信用积分</td>


					<td  >逾期</td>


					<td  >垫付</td>


					<td  >快速标</td>


					<td  >担保标</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetAutoList';$data = array('limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAutoList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?>>


					<td ><? if (!isset($this->magic_vars['var']['key'])) $this->magic_vars['var']['key'] = ''; echo $this->magic_vars['var']['key']+1; ?></td>


					<td ><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>启用<? else: ?>未启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['tender_type'])) $this->magic_vars['var']['tender_type']=''; ;if (  $this->magic_vars['var']['tender_type']==1): ?>按金额投标<? else: ?>按比例投标<? endif; ?></td>


					<td>￥<? if (!isset($this->magic_vars['var']['tender_account'])) $this->magic_vars['var']['tender_account'] = ''; echo $this->magic_vars['var']['tender_account']; ?></td>


					<td><? if (!isset($this->magic_vars['var']['tender_scale'])) $this->magic_vars['var']['tender_scale'] = '';$_tmp = $this->magic_vars['var']['tender_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?>%</td>


					<td><? if (!isset($this->magic_vars['var']['apr_status'])) $this->magic_vars['var']['apr_status']=''; ;if (  $this->magic_vars['var']['apr_status']==1): ?><? if (!isset($this->magic_vars['var']['apr_first'])) $this->magic_vars['var']['apr_first'] = ''; echo $this->magic_vars['var']['apr_first']; ?>%~<? if (!isset($this->magic_vars['var']['apr_last'])) $this->magic_vars['var']['apr_last'] = ''; echo $this->magic_vars['var']['apr_last']; ?>%<? else: ?>未启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['timelimit_status'])) $this->magic_vars['var']['timelimit_status']=''; ;if (  $this->magic_vars['var']['timelimit_status']==1): ?><? if (!isset($this->magic_vars['var']['timelimit_month_first'])) $this->magic_vars['var']['timelimit_month_first'] = ''; echo $this->magic_vars['var']['timelimit_month_first']; ?>~<? if (!isset($this->magic_vars['var']['timelimit_month_last'])) $this->magic_vars['var']['timelimit_month_last'] = ''; echo $this->magic_vars['var']['timelimit_month_last']; ?><? else: ?>不启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['borrow_credit_status'])) $this->magic_vars['var']['borrow_credit_status']=''; ;if (  $this->magic_vars['var']['borrow_credit_status']==1): ?><? if (!isset($this->magic_vars['var']['borrow_credit_first'])) $this->magic_vars['var']['borrow_credit_first'] = ''; echo $this->magic_vars['var']['borrow_credit_first']; ?>~<? if (!isset($this->magic_vars['var']['borrow_credit_last'])) $this->magic_vars['var']['borrow_credit_last'] = ''; echo $this->magic_vars['var']['borrow_credit_last']; ?><? else: ?>不启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['late_status'])) $this->magic_vars['var']['late_status']=''; ;if (  $this->magic_vars['var']['late_status']==1): ?><? if (!isset($this->magic_vars['var']['late_times'])) $this->magic_vars['var']['late_times'] = ''; echo $this->magic_vars['var']['late_times']; ?><? else: ?>不启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['dianfu_status'])) $this->magic_vars['var']['dianfu_status']=''; ;if (  $this->magic_vars['var']['dianfu_status']==1): ?><? if (!isset($this->magic_vars['var']['dianfu_times'])) $this->magic_vars['var']['dianfu_times'] = ''; echo $this->magic_vars['var']['dianfu_times']; ?><? else: ?>不启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['tuijian_status'])) $this->magic_vars['var']['tuijian_status']=''; ;if (  $this->magic_vars['var']['tuijian_status']==1): ?>是<? else: ?>不启用<? endif; ?></td>


					<td><? if (!isset($this->magic_vars['var']['vouch_status'])) $this->magic_vars['var']['vouch_status']=''; ;if (  $this->magic_vars['var']['vouch_status']==1): ?>是<? else: ?>不启用<? endif; ?></td>


					<td><a href="/index.php?user&q=code/borrow/auto_new&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>">修改</a> <a href="#" onclick="javascript:if(confirm('你确定要删除此自动投标吗？')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_del&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>'">删除</a></td>


				</tr>


				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>


			</form>	


		</table>
		</div>


		


		


		<!--自动投标 结束-->


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="auto_new"): ?>
		<form  method="post" name="form1"  action="/index.php?user&q=code/borrow/auto_add" >
		
		<div class="user_main_title1">自动投标时，只有满足下面您选择的条件时系统才会为您自动投标。</div>
		<div> 
        <div class="sideT" style=" line-height:30px; height:550px; padding-top:10px;"> 
            <div class="user_right_title"><span class=""><strong><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/arrow111.gif" /> 借款人信息限制</strong></span></div> 

			<div class="set_table"> 


			


            <table border="0" style="text-align:left;font-size:12px;"> 


                    <tr> 


                        <th> 


                            状态：


                        </th> 


                        <td> 


                           <input id="status" type="checkbox" name="status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['status'])) $this->magic_vars['_U']['auto_result']['status']=''; ;if (  $this->magic_vars['_U']['auto_result']['status']==1): ?> checked="checked" <? endif; ?>/><label for="">是否启用</label><span>(如果不选中则当前规则不会生效)</span> 


                        </td> 


                    </tr> 


                    <tr> 


                        <th> 


                            每次投标金额：


                        </th> 


                        <td> 


                            <span style="color:Blue;font-weight:bold;"><input  type="radio" name="tender_type" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']='';if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==1 ||  $this->magic_vars['_U']['auto_result']['tender_type']==""): ?> checked="checked"<? endif; ?>  /><label for="">按金额投标</label></span> 


                            <input name="tender_account" type="text" maxlength="5" id="tender_account"  style="width:80px;" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_account'])) $this->magic_vars['_U']['auto_result']['tender_account'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_account']; ?>" />元<span>(最少100元,100的倍数)</span> 


                         <!--   <span style="color:Blue;font-weight:bold;"><input  type="radio" name="tender_type" value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==2): ?> checked="checked"<? endif; ?>  /><label for="">按比例投标</label></span> 


                            <input name="tender_scale" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_scale'])) $this->magic_vars['_U']['auto_result']['tender_scale'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_scale']; ?>" maxlength="2"  style="width:80px;" />%<span>(只能在1%~<span id="">20</span>%)</span> -->


                        </td> 
                    </tr> 


                    <tr> 


                        <th> 


                        </th> 


                        <td> 


                        <span>(当前规则满足时系统将为您自动投标的额度，投标金额和比例都只能为大于0的为整数。)</span><br /> 


                        <span style="color:Red;">1、如果超过标的的最大投标额度则以标的的最大额度为准，如果小于标的的最小投标额度则不投。


                        <br />2、当按比列投标时，根据所设定的比例算得金额少于100元时，以100元进行投标。


                        <br />3、当按比列投标时，根据所设定的比例算得金额大于标的最大投标金额时，以最大投标金额进行投标。


                        <br />4、当投标金额大于标的金额的<span id="">20</span>%时，则按此比例进行投标。


                        </span></td> 


                        </tr> 


                    </table> 


            </div> 


            <div class="set_table"> 


                <table border="0" style="text-align:left;font-size:12px;"> 


                    <tr> 


                        <th> 


                            关系选项：


                        </th> 


                        <td> 


                            <input id="my_friend" type="checkbox" name="my_friend" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['my_friend'])) $this->magic_vars['_U']['auto_result']['my_friend']=''; ;if (  $this->magic_vars['_U']['auto_result']['my_friend']==1): ?> checked="checked"<? endif; ?>/><label for="my_friend">必须是我的好友</label> 


                        </td> 


                        <td> 


                           <span>(不选中则没有此项限制)</span> 


                        </td> 


                    </tr> 


                    <tr> 


                        <th> 


                            还款信用：


                        </th> 


                        <td> 


                            <input id="late_status" type="checkbox" name="late_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_status'])) $this->magic_vars['_U']['auto_result']['late_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_status']==1): ?> checked="checked"<? endif; ?> /><label for="late_status">逾期次数必须小于等于(≤)</label> 


                            <select name="late_times" id="late_times"> 


	<option <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']='';if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==0 ||  $this->magic_vars['_U']['auto_result']['late_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 


	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==1): ?> selected="selected"<? endif; ?> >1</option> 


	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==2): ?> selected="selected"<? endif; ?> >2</option> 


	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==3): ?> selected="selected"<? endif; ?> >3</option> 


	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==4): ?> selected="selected"<? endif; ?> >4</option> 


	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==5): ?> selected="selected"<? endif; ?> >5</option> 


	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==6): ?> selected="selected"<? endif; ?> >6</option> 


	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==7): ?> selected="selected"<? endif; ?> >7</option> 


	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==8): ?> selected="selected"<? endif; ?> >8</option> 


	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==9): ?> selected="selected"<? endif; ?> >9</option> 


	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==10): ?> selected="selected"<? endif; ?> >10</option> 


 


</select> 


                            


                        </td> 


                        <td> 


                           <input id="dianfu_status" type="checkbox" name="dianfu_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_status'])) $this->magic_vars['_U']['auto_result']['dianfu_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_status']==1): ?> checked="checked"<? endif; ?>  /><label for="dianfu_status">被垫付次数必须小于等于(≤)</label> 


                            <select name="dianfu_times" id="dianfu_times"> 


	<option <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']='';if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==0 ||  $this->magic_vars['_U']['auto_result']['dianfu_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 


	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==1): ?> selected="selected"<? endif; ?> >1</option> 


	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==2): ?> selected="selected"<? endif; ?> >2</option> 


	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==3): ?> selected="selected"<? endif; ?> >3</option> 


	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==4): ?> selected="selected"<? endif; ?> >4</option> 


	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==5): ?> selected="selected"<? endif; ?> >5</option> 


	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==6): ?> selected="selected"<? endif; ?> >6</option> 


	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==7): ?> selected="selected"<? endif; ?> >7</option> 


	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==8): ?> selected="selected"<? endif; ?> >8</option> 


	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==9): ?> selected="selected"<? endif; ?> >9</option> 


	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==10): ?> selected="selected"<? endif; ?> >10</option> 


 


</select> 


                        </td> 


                    </tr> 

                    <tr> 


                        <th> 


                            信用积分：


                        </th> 


                        <td> 


                           <input id="borrow_credit_status" type="checkbox" name="borrow_credit_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_status'])) $this->magic_vars['_U']['auto_result']['borrow_credit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_credit_status']==1): ?> checked="checked"<? endif; ?>/><label for="borrow_credit_status">积分必须为</label> 


                           <input name="borrow_credit_first" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_first'])) $this->magic_vars['_U']['auto_result']['borrow_credit_first'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_first']; ?>" maxlength="6" id="borrow_credit_first" style="width:50px;" />~<input name="borrow_credit_last" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_last'])) $this->magic_vars['_U']['auto_result']['borrow_credit_last'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_last']; ?>" maxlength="6" id="borrow_credit_last"  style="width:50px;" /> 


                        </td> 


                       


                    </tr> 


                    


                </table> 


            </div> 


            <div class="user_right_title"> 


                <span class=""><strong><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/arrow111.gif" /> 标的信息限制</strong></span></div> 


            <div class="set_table" style=" clear:both;"> 


                <table border="0" style="text-align:left; float:left;font-size:12px;" > 


                <tr> 


                        <th> 


                            还款方式：


                        </th> 


                        <td> 


                            <input id="borrow_style_status" type="checkbox" name="borrow_style_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style_status'])) $this->magic_vars['_U']['auto_result']['borrow_style_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style_status']==1): ?> checked="checked"<? endif; ?>/><label for="">还款方式必须为</label> 


                            <select name="borrow_style" id="borrow_style" > 


	<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==0): ?> selected="selected"<? endif; ?>>按月分期还款</option> 


	<option value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==1): ?> selected="selected"<? endif; ?>>按季分期还款</option> 


	<option value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==2): ?> selected="selected"<? endif; ?>>到期还本</option> 


 


</select> 


                        </td> 


                        <td><span>(不选中则没有此项限制)</span></td> 


                    </tr> 


                    <tr> 


                        <th> 


                            借款期限：


                        </th> 


                        <td> 


                           <input id="timelimit_status"  name="timelimit_status" type="radio" value="0" checked="checked" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==0): ?> checked="checked"<? endif; ?>/><label for="">不限定借款期限范围</label> 


                        </td> 


                        <td> 


                            <span></span> 


                        </td> 


                    </tr> 


                <tr> 


                        <th> 


                        </th> 


                        <td> 


                           <span title="此选项只对按月还款、按季还款有效"><input id="timelimit_status" type="radio" name="timelimit_status" value="1"   name="timelimit_status" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==1): ?> checked="checked"<? endif; ?>/><label for="">借款期限按月范围必须在</label></span> 


                           <select name="timelimit_month_first" id="timelimit_month_first"> 


						   <? for( $this->magic_vars['i']=1;$this->magic_vars['i']<=18;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>个月</option> 


							<? };unset($_magic_vars); ?>


							</select> 


                            ~


                            <select name="timelimit_month_last" id="timelimit_month_last"> 


						   <? for( $this->magic_vars['i']=1;$this->magic_vars['i']<=18;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>个月</option> 


							<? };unset($_magic_vars); ?>


							</select> 


                        </td> 


                        <td> 


                            <span>(此选项只对按月还款、按季还款有效)</span> 


                        </td> 


                    </tr> 


                    


                 <tr> 


                        <th> 


                            利率选项：


                        </th> 


                        <td> 


                           <input id="apr_status" type="checkbox" name="apr_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['apr_status'])) $this->magic_vars['_U']['auto_result']['apr_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_status']==1): ?> checked="checked"<? endif; ?>/><label for="">利率范围必须在</label> 


                           


						    <select name="apr_first" > 


						   <? for( $this->magic_vars['i']=1;$this->magic_vars['i']<=25;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>%</option> 


							<? };unset($_magic_vars); ?>


							</select> 


	





                            ~


                            <select name="apr_last" > 


						   <? for( $this->magic_vars['i']=5;$this->magic_vars['i']<=25;$this->magic_vars['i']++){?>


							<option value="<? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>" <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']='';if (!isset($this->magic_vars['i'])) $this->magic_vars['i']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']== $this->magic_vars['i']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?>%</option> 


							<? };unset($_magic_vars); ?>


							</select> 


                        </td> 


                        <td> 


                            <span>(不选中则没有此项限制)</span> 


                        </td> 


                    </tr>
				<? $data = array('var'=>'Vvar','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['Vvar'] = usersClass::GetUsersVip($data);if(!is_array($this->magic_vars['Vvar'])){ $this->magic_vars['Vvar']=array();}?>
				<? if (!isset($this->magic_vars['Vvar']['status'])) $this->magic_vars['Vvar']['status']=''; ;if (  $this->magic_vars['Vvar']['status']==1): ?>
				<tr>
					<th>其他要求：</th> 
					<td>
						<input id="vouch_status" type="checkbox" name="vouch_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['vouch_status'])) $this->magic_vars['_U']['auto_result']['vouch_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['vouch_status']==1): ?> checked="checked"<? endif; ?> /><label for="vouch_status">必须为担保标</label> 
						<input id="tuijian_status" type="checkbox" name="tuijian_status"  value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tuijian_status'])) $this->magic_vars['_U']['auto_result']['tuijian_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['tuijian_status']==1): ?> checked="checked"<? endif; ?>/><label for="tuijian_status">必须为快速标</label> 
					</td> 
					<td><span>(选项为“且”关系)</span></td> 
				</tr> 
				<? endif; ?>
				<? unset($_magic_vars);unset($data); ?>
			</table> 
			</div> 
			</div> 


        <div style="text-align:center;"> 

		<input type="hidden" name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
        <input type="submit" name="" value="保存" id="" style="width:100px;" /> 


        <input type="reset" name="" value="取消" id="" style="width:100px;" /> 


        </div> 


    </div> 
	
	


		</form>


		


		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="care"): ?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">
				<tr class="ytit">
					<td colspan="6">我关注的借款</td>
				</tr>


				<tr class="ytit1" >


					<td  >标题</td>


					<td  >类型</td>


					<td  >金额(元)</td>


					<td  >年利率</td>


					<td  >期限</td>


					<td  >进度</td>


				</tr>


				<? $this->magic_vars['query_type']='GetCareList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetCareList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >


					<td ><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_nid'])) $this->magic_vars['item']['borrow_nid'] = ''; echo $this->magic_vars['item']['borrow_nid']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"8");echo $_tmp;unset($_tmp); ?></a></td>


					<td  ><? if (!isset($this->magic_vars['item']['vouch_status'])) $this->magic_vars['item']['vouch_status']=''; ;if (  $this->magic_vars['item']['vouch_status']==1): ?>担保标<? if (!isset($this->magic_vars['item']['is_jin'])) $this->magic_vars['item']['is_jin']=''; ;elseif (  $this->magic_vars['item']['is_jin']==1): ?>净值标<? if (!isset($this->magic_vars['item']['is_flow'])) $this->magic_vars['item']['is_flow']=''; ;elseif (  $this->magic_vars['item']['is_flow']==1): ?>流转标<? if (!isset($this->magic_vars['item']['fast_status'])) $this->magic_vars['item']['fast_status']=''; ;elseif (  $this->magic_vars['item']['fast_status']==1): ?>快借标<? else: ?>普通标<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_apr'])) $this->magic_vars['item']['borrow_apr'] = ''; echo $this->magic_vars['item']['borrow_apr']; ?> %</td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;if (  $this->magic_vars['item']['borrow_period'] == 0.03): ?>1天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.06): ?>2天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>3天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.13): ?>4天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.16): ?>5天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.20): ?>6天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.23): ?>7天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.26): ?>8天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.30): ?>9天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.33): ?>10天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.36): ?>11天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.40): ?>12天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.43): ?>13天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.46): ?>14天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.50): ?>15天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.53): ?>16天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.56): ?>17天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.60): ?>18天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.63): ?>19天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.66): ?>20天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.70): ?>21天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.73): ?>22天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.76): ?>23天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.80): ?>24天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.83): ?>25天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.86): ?>26天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.90): ?>27天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.93): ?>28天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.96): ?>29天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] == 0.10): ?>30天
                            	<? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']='';if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period']=''; ;elseif (  $this->magic_vars['item']['borrow_period'] >= 1 &&  $this->magic_vars['item']['borrow_period']<10): ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"1");echo $_tmp;unset($_tmp); ?>个月
                            	<? else: ?><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = '';$_tmp = $this->magic_vars['item']['borrow_period'];$_tmp = $this->magic_modifier("truncate",$_tmp,"2");echo $_tmp;unset($_tmp); ?>个月
                            	<? endif; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['borrow_account_scale'])) $this->magic_vars['item']['borrow_account_scale'] = '';$_tmp = $this->magic_vars['item']['borrow_account_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0.00");echo $_tmp;unset($_tmp); ?>%</td>
				</tr>


				<? endforeach; endif; unset($_from); ?>




			</form>	


		</table>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>

		<? unset($_magic_vars); ?>

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="otherloan"): ?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >序号</td>


					<td  >借款机构</td>


					<td  >注册用户名</td>


					<td  >链接地址</td>


					<td  >信用额度/担保额度</td>


					<td  >还款明细</td>


					<td  >备注</td>


					<td  >操作</td>


				</tr>


				<? $this->magic_vars['query_type']='GetOtherloanList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetOtherloanList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >


					<td  ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['agency'])) $this->magic_vars['item']['agency'] = ''; echo $this->magic_vars['item']['agency']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?></td>


					<td  >￥<? if (!isset($this->magic_vars['item']['amount_credit'])) $this->magic_vars['item']['amount_credit'] = ''; echo $this->magic_vars['item']['amount_credit']; ?>/￥<? if (!isset($this->magic_vars['item']['amount_vouch'])) $this->magic_vars['item']['amount_vouch'] = ''; echo $this->magic_vars['item']['amount_vouch']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['repay_month'])) $this->magic_vars['item']['repay_month'] = ''; echo $this->magic_vars['item']['repay_month']; ?></td>


					<td  ><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = '';$_tmp = $this->magic_vars['item']['remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>


					<td  ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan_new&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" target="_blank">修改</a> <a href="#" onclick="javascript:if(confirm('你确定要删除此信息')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/otherloan_del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>


				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>
		<? unset($_magic_vars); ?>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="yqblack"): ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >头像</td>

					<td  >资料</td>

					<td  >联系方式</td>

					<td  >公开财务</td>

				</tr>


				<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_days'=>'31');$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >

					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank" ><img src="<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = '';$_tmp = $this->magic_vars['item']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></a></td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu" style="height:30px; overflow:hidden"><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" title="<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></li>
							<li>性别：<? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>男<? else: ?>女<? endif; ?></li>
							<li>身份证号：<? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></li>
							<li>所 在 地：<? if (!isset($this->magic_vars['item']['city'])) $this->magic_vars['item']['city'] = '';$_tmp = $this->magic_vars['item']['city'];$_tmp = $this->magic_modifier("areas",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu"><font color="#FF0000">欠款总额：￥<? if (!isset($this->magic_vars['item']['late_account'])) $this->magic_vars['item']['late_account'] = ''; echo $this->magic_vars['item']['late_account']; ?></font></li>
							<li >Email：<? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></li>
							<li>电话：<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></li>
							<li>QQ：<? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
						<li class="cu"><font color="#FF0000">逾期笔数：<? if (!isset($this->magic_vars['item']['late_num'])) $this->magic_vars['item']['late_num'] = ''; echo $this->magic_vars['item']['late_num']; ?>笔</font></li>
						<li>网站代还笔数：<? if (!isset($this->magic_vars['item']['late_webnum'])) $this->magic_vars['item']['late_webnum'] = '';$_tmp = $this->magic_vars['item']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>最长逾期天数：<? if (!isset($this->magic_vars['item']['late_numdays'])) $this->magic_vars['item']['late_numdays'] = ''; echo $this->magic_vars['item']['late_numdays']; ?>天</li>
						<li >更新时间：<? if (!isset($this->magic_vars['_G']['nowtime'])) $this->magic_vars['_G']['nowtime'] = '';$_tmp = $this->magic_vars['_G']['nowtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>
				</tr>


				<? endforeach; endif; unset($_from); ?>


				<tr >


					<td colspan="10" class="page">


						<? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?>


					</td>


				</tr>


				<? unset($_magic_vars); ?>


			</form>	


		</table>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="black"): ?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabyel">


			  <form action="" method="post">


				<tr class="ytit1" >


					<td  >头像</td>

					<td  >资料</td>

					<td  >联系方式</td>

					<td  >公开财务</td>

				</tr>


				<? $this->magic_vars['query_type']='GetBlackList';$data = array('var'=>'loop','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = intval(isset($_REQUEST['page'])?$_REQUEST['page']:'');  require_once(ROOT_PATH.'modules/users/users.class.php');$this->magic_vars['magic_result'] = usersClass::GetBlackList($data); $this->magic_vars['loop']=  $this->magic_vars['magic_result']; $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  intval($this->magic_vars['magic_result']['page']); $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['pages'] =  array('total'=>$this->magic_vars['magic_result']['total'],'page'=>$this->magic_vars['magic_result']['page'],'epage'=>$this->magic_vars['magic_result']['epage']);?>


				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>


				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="ynow"<? endif; ?> >

					<td  ><a href="/u/<? if (!isset($this->magic_vars['item']['blackuser_id'])) $this->magic_vars['item']['blackuser_id'] = ''; echo $this->magic_vars['item']['blackuser_id']; ?>"><img src="<? if (!isset($this->magic_vars['item']['blackuser_id'])) $this->magic_vars['item']['blackuser_id'] = '';$_tmp = $this->magic_vars['item']['blackuser_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></a></td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu"><a href="/u/<? if (!isset($this->magic_vars['item']['blackuser_id'])) $this->magic_vars['item']['blackuser_id'] = ''; echo $this->magic_vars['item']['blackuser_id']; ?>"><b><? if (!isset($this->magic_vars['item']['blackuser'])) $this->magic_vars['item']['blackuser'] = ''; echo $this->magic_vars['item']['blackuser']; ?></b></a></li>
							<li>性别：<? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>男<? else: ?>女<? endif; ?></li>
							<li>身份证号：<? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></li>
							<li>所 在 地：<? if (!isset($this->magic_vars['item']['city'])) $this->magic_vars['item']['city'] = '';$_tmp = $this->magic_vars['item']['city'];$_tmp = $this->magic_modifier("areas",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
							<li class="cu"><font color="#FF0000">欠款总额：￥<? if (!isset($this->magic_vars['item']['late_account'])) $this->magic_vars['item']['late_account'] = ''; echo $this->magic_vars['item']['late_account']; ?></font></li>
							<li >Email：<? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></li>
							<li>电话：<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></li>
							<li>QQ：<? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></li>
						</ul>
					</td>

					<td  >
						<ul class="li" style="text-align:left;">
						<li class="cu"><font color="#FF0000">逾期笔数：<? if (!isset($this->magic_vars['item']['late_num'])) $this->magic_vars['item']['late_num'] = ''; echo $this->magic_vars['item']['late_num']; ?>笔</font></li>
						<li>网站代还笔数：<? if (!isset($this->magic_vars['item']['late_webnum'])) $this->magic_vars['item']['late_webnum'] = '';$_tmp = $this->magic_vars['item']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>最长逾期天数：<? if (!isset($this->magic_vars['item']['late_numdays'])) $this->magic_vars['item']['late_numdays'] = ''; echo $this->magic_vars['item']['late_numdays']; ?>天</li>
						<li >更新时间：<? if (!isset($this->magic_vars['_G']['nowtime'])) $this->magic_vars['_G']['nowtime'] = '';$_tmp = $this->magic_vars['_G']['nowtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</td>
				</tr>


				<? endforeach; endif; unset($_from); ?>


			</form>	


		</table>
		<div style="padding:10px 0; text-align:center"><? if (!isset($this->magic_vars['loop']['pages'])) $this->magic_vars['loop']['pages'] = '';$_tmp = $this->magic_vars['loop']['pages'];$_tmp = $this->magic_modifier("showpage",$_tmp,"");echo $_tmp;unset($_tmp); ?></div>


		<? unset($_magic_vars); ?>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="otherloan_new"): ?>


		<div class="t20"> 


		请填写其他网站的借款信息


		</div>


		<form action="" method="post">


		


		


		<div class="user_right_border">


			<div class="e">机构名称：</div>


			<div class="c">


				<input type="text" name="agency" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['agency'])) $this->magic_vars['_U']['otherloan_result']['agency'] = ''; echo $this->magic_vars['_U']['otherloan_result']['agency']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">网站用户名：</div>


			<div class="c">


				<input type="text" name="username" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['username'])) $this->magic_vars['_U']['otherloan_result']['username'] = ''; echo $this->magic_vars['_U']['otherloan_result']['username']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">网站链接：</div>


			<div class="c">


				<input type="text" name="url" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['url'])) $this->magic_vars['_U']['otherloan_result']['url'] = ''; echo $this->magic_vars['_U']['otherloan_result']['url']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">信用额度：</div>


			<div class="c">


				<input type="text" name="amount_credit" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['amount_credit'])) $this->magic_vars['_U']['otherloan_result']['amount_credit'] = ''; echo $this->magic_vars['_U']['otherloan_result']['amount_credit']; ?>" />


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e">担保额度：</div>


			<div class="c">


				<input type="text" name="amount_vouch" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['amount_vouch'])) $this->magic_vars['_U']['otherloan_result']['amount_vouch'] = ''; echo $this->magic_vars['_U']['otherloan_result']['amount_vouch']; ?>" />


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">未还总额：</div>


			<div class="c">


				<input type="text" name="repay_nouse" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['repay_nouse'])) $this->magic_vars['_U']['otherloan_result']['repay_nouse'] = ''; echo $this->magic_vars['_U']['otherloan_result']['repay_nouse']; ?>" />


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">每月还款总额：</div>


			<div class="c">


				<input type="text" name="repay_month" value="<? if (!isset($this->magic_vars['_U']['otherloan_result']['repay_month'])) $this->magic_vars['_U']['otherloan_result']['repay_month'] = ''; echo $this->magic_vars['_U']['otherloan_result']['repay_month']; ?>" />


			</div>


		</div>


		


		


		<div class="user_right_border">


			<div class="e">备注：</div>


			<div class="c">


				<textarea rows="5" cols="40" name="remark"><? if (!isset($this->magic_vars['_U']['otherloan_result']['remark'])) $this->magic_vars['_U']['otherloan_result']['remark'] = ''; echo $this->magic_vars['_U']['otherloan_result']['remark']; ?></textarea>


			</div>


		</div>


		


		<div class="user_right_border">


			<div class="e"></div>


			<div class="c">


				<input type="submit" name="name"  value="确认提交"  class="xinbuton" 
 size="30" /> 


			</div>


		</div>


		</form>


		<? endif; ?>


		<script>


var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";





function sousuo(urla){


	if (urla!="") url = urla;


	var _url = "";


	var dotime1 = $("#dotime1").val();


	var keywords = $("#keywords").val();


	var username = $("#username").val();


	var status = $("#status").val();


	var reply_status = $("#reply_status").val();


	var tender_username = $("#tender_username").val();


	var dotime2 = $("#dotime2").val();


	if (username!=null){


		 _url += "&username="+username;


	}


	if (tender_username!=null){


		 _url += "&tender_username="+tender_username;


	}


	if (status!=null){


		 _url += "&status="+status;


	}


	if (reply_status!=null){


		 _url += "&reply_status="+reply_status;


	}


	if (keywords!=null){


		 _url += "&keywords="+keywords;


	}


	if (dotime1!=null){


		 _url += "&dotime1="+dotime1;


	}


	if (dotime2!=null){


		 _url += "&dotime2="+dotime2;


	}


	location.href=url+_url;


}





</script>





</div>

</div>
</div>
</div>
<div style="clear:both;"></div>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>