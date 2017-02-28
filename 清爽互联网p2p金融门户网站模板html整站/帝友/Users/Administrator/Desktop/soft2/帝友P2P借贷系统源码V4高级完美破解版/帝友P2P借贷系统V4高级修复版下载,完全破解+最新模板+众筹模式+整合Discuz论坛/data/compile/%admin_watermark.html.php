<div class="module_add">
			<form action="" method="post"  enctype="multipart/form-data" >
			<div class="module_title"><strong><? if (!isset($this->magic_vars['MsgInfo']['admin_watermark_name'])) $this->magic_vars['MsgInfo']['admin_watermark_name'] = ''; echo $this->magic_vars['MsgInfo']['admin_watermark_name']; ?></strong></div>
			<div class="module_border">
				<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_status'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_status'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_status']; ?>£º</div>
				<div class="c">
					<? 
		$_value = explode(",","1|ÊÇ,0|·ñ");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_watermark_status'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_watermark_status" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_watermark_status" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_watermark_status" /> '.$k0[1].$display;
		}
		echo $display;
		?>
					
				</div>
			</div>
			
			
		<div class="module_border">
			<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_type'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_type'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_type']; ?>£º</div>
			<div class="c">
				<input type="radio" value="1"  name="con_watermark_type" <? if (!isset($this->magic_vars['_G']['system']['con_watermark_type'])) $this->magic_vars['_G']['system']['con_watermark_type']=''; ;if (  $this->magic_vars['_G']['system']['con_watermark_type']==1): ?> checked="checked"<? endif; ?> onclick="$('#word').show();$('#pic').hide();"/> ÎÄ×Ö
				<input type="radio" value="0"   name="con_watermark_type" <? if (!isset($this->magic_vars['_G']['system']['con_watermark_type'])) $this->magic_vars['_G']['system']['con_watermark_type']=''; ;if (  $this->magic_vars['_G']['system']['con_watermark_type']==0): ?> checked="checked"<? endif; ?> onclick="$('#word').hide();$('#pic').show();"/> Í¼Æ¬
				
					
			</div>
		</div>
		<div id="word" <? if (!isset($this->magic_vars['_G']['system']['con_watermark_type'])) $this->magic_vars['_G']['system']['con_watermark_type']='';if (!isset($this->magic_vars['_G']['system']['con_watermark_type'])) $this->magic_vars['_G']['system']['con_watermark_type']=''; ;if (  $this->magic_vars['_G']['system']['con_watermark_type']!=1 ||  $this->magic_vars['_G']['system']['con_watermark_type']==""): ?>style="display:none"<? endif; ?>>
			<div class="module_border" >
				<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_word'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_word'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_word']; ?>£º</div>
				<div class="c">
					<input type="text" name="con_watermark_word" value="<? if (!isset($this->magic_vars['_G']['system']['con_watermark_word'])) $this->magic_vars['_G']['system']['con_watermark_word'] = ''; echo $this->magic_vars['_G']['system']['con_watermark_word']; ?>"/>
				</div>
			</div>
			
			<div class="module_border">
				<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_font'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_font'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_font']; ?>£º</div>
				<div class="c">
					<input type="text" name="con_watermark_font" value="<? if (!isset($this->magic_vars['_G']['system']['con_watermark_font'])) $this->magic_vars['_G']['system']['con_watermark_font'] = '';$_tmp = $this->magic_vars['_G']['system']['con_watermark_font'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>"/>
				</div>
			</div>
		
			<div class="module_border">
			<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_color'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_color'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_color']; ?>£º</div>
				<div class="c">
					<input type="text" value="<? if (!isset($this->magic_vars['_G']['system']['con_watermark_color'])) $this->magic_vars['_G']['system']['con_watermark_color'] = '';$_tmp = $this->magic_vars['_G']['system']['con_watermark_color'];$_tmp = $this->magic_modifier("default",$_tmp,"#FF0000");echo $_tmp;unset($_tmp); ?>" name="con_watermark_color"/>
				</div>
			</div>
			
			<div class="module_border">
			<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_txtpct'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_txtpct'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_txtpct']; ?>£º</div>
				<div class="c">
					<input type="text"  name="con_watermark_txtpct" value="<? if (!isset($this->magic_vars['_G']['system']['con_watermark_txtpct'])) $this->magic_vars['_G']['system']['con_watermark_txtpct'] = '';$_tmp = $this->magic_vars['_G']['system']['con_watermark_txtpct'];$_tmp = $this->magic_modifier("default",$_tmp,"50");echo $_tmp;unset($_tmp); ?>"/>
				</div>
			</div>
		</div>
		
		<div id="pic" <? if (!isset($this->magic_vars['_G']['system']['con_watermark_type'])) $this->magic_vars['_G']['system']['con_watermark_type']=''; ;if (  $this->magic_vars['_G']['system']['con_watermark_type']!=0): ?>style=" display:none"<? endif; ?>>
			
			<div class="module_border" >
				<div class="d">Ä¬ÈÏÍ¼Æ¬£º</div>
				<div class="c">
				    <? if (!isset($this->magic_vars['_G']['system']['con_watermark_file'])) $this->magic_vars['_G']['system']['con_watermark_file']=''; ;if (  $this->magic_vars['_G']['system']['con_watermark_file']!=""): ?><a href="<? if (!isset($this->magic_vars['_A']['con_watermark_file'])) $this->magic_vars['_A']['con_watermark_file'] = ''; echo $this->magic_vars['_A']['con_watermark_file']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['_A']['con_watermark_file'])) $this->magic_vars['_A']['con_watermark_file'] = ''; echo $this->magic_vars['_A']['con_watermark_file']; ?>"  /></a><? else: ?>-<? endif; ?>
				</div>
			</div>
			<div class="module_border" >
				<div class="d">Ë®Ó¡Í¼Æ¬(Ö»ÄÜÊÇpng,gif,jpg)£º</div>
				<div class="c">
				 <input type="file" name="con_watermark_file" /> 
				</div>
			</div>
			<div class="module_border">
			<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_imgpct'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_imgpct'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_imgpct']; ?>£º</div>
				<div class="c">
					<input type="text" value="<? if (!isset($this->magic_vars['_G']['system']['con_watermark_imgpct'])) $this->magic_vars['_G']['system']['con_watermark_imgpct'] = '';$_tmp = $this->magic_vars['_G']['system']['con_watermark_imgpct'];$_tmp = $this->magic_modifier("default",$_tmp,"50");echo $_tmp;unset($_tmp); ?>" name="con_watermark_imgpct"/>
				</div>
			</div>
		</div>
		
		
		
		<div class="module_border">
		<div class="d"><? if (!isset($this->magic_vars['MsgInfo']['admin_system_con_watermark_position'])) $this->magic_vars['MsgInfo']['admin_system_con_watermark_position'] = ''; echo $this->magic_vars['MsgInfo']['admin_system_con_watermark_position']; ?>£º</div>
			<div class="c">
				<? 
		$_value = explode(",","1|¶¥²¿¾Ó×ó,2|µ×²¿¾Ó×ó,3|¶¥²¿¾ÓÓÒ,4|µ×²¿¾ÓÓÒ");
		$display = "";$_che = $this->magic_vars['_G']['system']['con_watermark_position'];
		
		foreach ($_value as $k => $v){
			$_check = "";
			$_v = explode("|",$v);
			if (!IsExiest($_v[1])) $_v[1] = $_v[0];
			if ($_che==$_v[0]){
				$_check = " checked='checked'";
			}
			if ($k>0){
				$display .= '<input type="radio" value="'.$_v[0].'"  name="con_watermark_position" '.$_check.'/> '.$_v[1];
			}else{
				$k0 = array($_v[0],$_v[1]);
			}
		}
		if ($_che=="" || in_array($_che,$k0)){
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_watermark_position" checked="checked"/> '.$k0[1].$display;
		}else{
			$display = '<input type="radio" value="'.$k0[0].'"  name="con_watermark_position" /> '.$k0[1].$display;
		}
		echo $display;
		?>
 
			</div>
		</div>
		
		<div class="module_submit"><input type="submit" value="<? if (!isset($this->magic_vars['MsgInfo']['admin_name_submit'])) $this->magic_vars['MsgInfo']['admin_name_submit'] = ''; echo $this->magic_vars['MsgInfo']['admin_name_submit']; ?>"  /></div>
			</form>
		</div>