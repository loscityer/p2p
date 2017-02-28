<? $this->magic_include(array('file' => "admin_head.html", 'vars' => array()));?>
<? if (!isset($this->magic_vars['html_template'])) $this->magic_vars['html_template']='';; $_from = $this->magic_vars['html_template'];  $this->magic_include(array('file' => $_from, 'vars' => array())); unset($_from);?>



