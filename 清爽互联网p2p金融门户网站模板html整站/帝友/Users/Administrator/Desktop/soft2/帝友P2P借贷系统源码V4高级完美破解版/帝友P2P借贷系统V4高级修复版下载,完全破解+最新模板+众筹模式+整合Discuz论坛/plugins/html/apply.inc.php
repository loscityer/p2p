<?php 

include_once (ROOT_PATH."/core/config.inc.php"); 
$_user_id = explode(",",authcode(isset($_COOKIE[Key2Url("user_id","DWCMS")])?$_COOKIE[Key2Url("user_id","DWCMS")]:"","DECODE"));
 $_G['user_id'] = $_user_id[0]; 
;echo ' 

<div><strong>������</strong>';$_G['user_result']['realname'];echo '</div> 
<div><strong>�ֻ���</strong>';$_G['user_result']['phone'];echo '</div> 
<div><strong>���䣺</strong>';$_G['user_result']['email'];echo '</div> 
<div><strong>QQ��</strong>';$_G['user_result']['qq'];echo '</div> 
';if (!empty($id)){;echo '$("#';echo $name;;echo '").change(function(){ 
    var val = $(this).val(); 
    $("#';echo $id;;echo '").val(val); 

}) 
';} 
?> 