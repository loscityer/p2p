<?php 

if (!defined('ROOT_PATH'))  /*die('���ܷ���')*/echo "<script>window.location.href='/404.htm';</script>"; 
class showpageClass { 
var $page_name = "page"; 
var $next_page = '>'; 
var $pre_page  = '<'; 
var $first_page = 'First'; 
var $last_page  = 'Last'; 
var $pre_bar    = '<<'; 
var $next_bar   = '>>'; 
var $format_left  = '';//[ 
var $format_right = '';//]//�޸ĳ������20130925 
var $is_ajax    = false; 
var $is_rewrite = true; 
var $totalcount  = 0; 
var $nowpage ; 
var $perpage = 0; 
var $pagebarnum = 10; 
var $totalpage  = 0; 
var $ajax_action_name = ''; 
var $nowindex = 1; 
var $url    = ""; 
var $offset = 0; 
function showpageClass($array) { 
if(is_array($array)) { 
if(!array_key_exists('total',$array)) 
$this->error(__FUNCTION__,'need a param of total'); 
$this->totalcount = $total = intval($array['total']); 
$perpage  = (array_key_exists('perpage',$array))  ?intval($array['perpage']):10;
 $this->nowpage = $nowindex = (array_key_exists('nowindex',$array)) ?intval($array['nowindex']):'';
 $url      = (array_key_exists('url',$array)) ?$array['url'] : ''; 
}else { 
$total    = 0; 
$perpage  = 10; 
$nowindex = ''; 
$url      = ''; 
} 
if( (!is_int($total)) ||($total <0) ) 
$this->error(__FUNCTION__,$total.' is not a positive integer!'); 
if( (!is_int($perpage)) ||($perpage <= 0) ) 
$this->error(__FUNCTION__,$perpage.' is not a positive integer!'); 
if(!empty($array['page_name'])) 
$this->set('page_name',$array['page_name']); 
$this->_set_nowindex($nowindex); 
if(!empty($array['ajax'])){ 
$this->open_ajax($array['ajax']); 
} 
$this->_set_url($url); 
$this->perpage = $perpage; 
$cont  = $total / $perpage; 
$cont2 = $total %$perpage; 
if( $cont >1 &&$cont2 == 0 ) { 
$this->totalpage = floor($cont); 
} 
elseif( $cont2 >0) { 
$this->totalpage = floor($cont)+1; 
} 
$this->offset    = ($this->nowindex-1) * $this->perpage; 
} 
function set($var,$value) { 
if(in_array($var,get_object_vars($this))) 
$this->$var=$value; 
else 
$this->error(__FUNCTION__,$var." does not belong to PB_Page!"); 
} 
function open_ajax($action) { 
$this->is_ajax = true; 
$this->ajax_action_name = $action; 
} 
function next_page($style='') { 
if($this->nowindex<$this->totalpage) { 
return $this->_get_link($this->_get_url($this->nowindex+1),$this->next_page,$style);
 } 
return '<span class="'.$style.'">'.$this->next_page.'</span>'; 
} 
function pre_page($style='') { 
if($this->nowindex >1) { 
return $this->_get_link($this->_get_url($this->nowindex-1),$this->pre_page,$style);
 } 
return '<span class="'.$style.'">'.$this->pre_page.'</span>'; 
} 
function first_page($style='') { 
if($this->nowindex==1) { 
return '<span class="'.$style.'">'.$this->first_page.'</span>'; 
} 
return $this->_get_link($this->_get_url(1),$this->first_page,$style); 
} 
function last_page($style=''){ 
if( $this->nowindex == $this->totalpage ) { 
return '<span class="'.$style.'">'.$this->last_page.'</span>'; 
} 
return $this->_get_link($this->_get_url($this->totalpage),$this->last_page,$style);
 } 
function nowbar($style='',$nowindex_style='curr') { 
$plus = ceil( $this->pagebarnum / 2 ); 
if($this->pagebarnum -$plus +$this->nowindex >$this->totalpage ) { 
$plus = ($this->pagebarnum -$this->totalpage +$this->nowindex); 
} 
$begin = $this->nowindex -$plus +1; 
$begin = ( $begin >= 1) ?$begin : 1; 
$return = ''; 
for($i = $begin;$i <$begin +$this->pagebarnum ;$i++) { 
if( $i <= $this->totalpage ) { 
if( $i != $this->nowindex ) { 
$return .= $this->_get_text($this->_get_link($this->_get_url($i),$i,$style)); 
}else { 
$return .= $this->_get_text('<span class="'.$nowindex_style.'">'.$i.'</span>'); 
} 
}else { 
break; 
} 
$return .= "\n"; 
} 
unset($begin); 
return $return; 
} 
function select() { 
if ($this->ajax_action_name=="dy"){ 
$return = '<select id="PB_Page_Select" onChange="window.location.href = \''.$this->url.'\'+this.value+\'.html\';"  >';
 }else{ 
$return = '<select id="PB_Page_Select" onChange="window.location.href = \''.$this->url.'\'+this.value;"  >';
 } 
for( $i=1 ;$i <= $this->totalpage ;$i++){ 
if( $i == $this->nowindex ) { 
$return .= '<option value="'.$i.'" selected>'.$i.'</option>'; 
}else { 
$return .= '<option value="'.$i.'">'.$i.'</option>'; 
} 
} 
unset($i); 
$return .= '</select>'; 
return $return; 
} 
function offset() { 
return $this->offset; 
} 
function show($mode=1) { 
$str = "�� {$this->totalcount} ����¼  "; 
if($this->nowpage >0) 
$str .= " ��{$this->nowpage}/{$this->totalpage}ҳ "; 
switch ($mode){ 
case '1': 
$this->next_page = '��һҳ'; 
$this->pre_page  = '��һҳ'; 
return $str .$this->pre_page().'  '.$this->nowbar().' '.$this->next_page().'  '.'��'.$this->select().'ҳ';
 break; 
case '2': 
$this->next_page  = '��һҳ'; 
$this->pre_page   = '��һҳ'; 
$this->first_page = '��ҳ'; 
$this->last_page  = 'βҳ'; 
return $str .$this->first_page().$this->pre_page().'[��'.$this->nowindex.'ҳ]'.$this->next_page().$this->last_page().'��'.$this->select().'ҳ';
 break; 
case '3': 
$this->next_page  = '��һҳ'; 
$this->pre_page   = '��һҳ'; 
$this->first_page = '��ҳ'; 
$this->last_page  = 'βҳ'; 
return $str .$this->first_page().' '.$this->pre_page().' '.$this->next_page().' '.$this->last_page();
 break; 
case '4': 
$this->next_page = '��һҳ'; 
$this->pre_page  = '��һҳ'; 
return $str .$this->pre_page().$this->nowbar().$this->next_page(); 
break; 
case '5': 
return $str .$this->pre_bar.$this->pre_page().$this->nowbar().$this->next_page().$this->next_bar;
 break; 
} 
} 
function _set_url($url="") { 
if(!empty($url)) { 
$this->url = $url.((stristr($url,'?'))?'&':'?').$this->page_name."="; 
}elseif ($this->ajax_action_name=="dy"){ 
$_scr = explode("/",$_SERVER['SCRIPT_URL']); 
$this->url = "/".$_scr[1]."/index"; 
}else { 
if(empty($_SERVER['QUERY_STRING'])) { 
#���������url��д 
if($this->is_rewrite) { 
$str = ereg_replace('(p)\/([0-9]{1,})$','',$_SERVER['REQUEST_URI']); 
$this->url = $str .'p/'; 
}else { 
$this->url = $_SERVER['REQUEST_URI']."?".$this->page_name."="; 
} 
}else { 
if(stristr($_SERVER['QUERY_STRING'],$this->page_name.'=')) { 
$this->url = str_replace($this->page_name.'='.$this->nowindex,'',$_SERVER['REQUEST_URI']);
 $last = $this->url[strlen($this->url)-1]; 
if($last=='?'||$last=='&') { 
$this->url .= $this->page_name."="; 
}else { 
$this->url .= '&'.$this->page_name."="; 
} 
}else { 
$this->url = $_SERVER['REQUEST_URI'].'&'.$this->page_name.'='; 
} 
} 
} 
} 
function _set_nowindex($nowindex) { 
if(empty($nowindex)) { 
if(isset($_GET[$this->page_name])) { 
$this->nowindex = intval($_GET[$this->page_name]); 
} 
}else { 
$this->nowindex = intval($nowindex); 
} 
} 
function _get_url($pageno=1) { 
return $this->url.$pageno; 
} 
function _get_text($str) { 
return $this->format_left.$str.$this->format_right; 
} 
function _get_link($url,$text,$style='') { 
$style = (empty($style))?'':'class="'.$style.'"'; 
if($this->is_ajax) { 
if ($this->ajax_action_name=="dy"){ 
return '<a '.$style.' href="'.$url.'.html">'.$text.'</a>'; 
}else{ 
return '<a '.$style.' href="javascript:'.$this->ajax_action_name.'(\''.$url.'\')">'.$text.'</a>';
 } 
}else { 
return '<a '.$style.' href="'.$url.'">'.$text.'</a>'; 
} 
} 
function error($function,$errormsg) { 
die('Error in file <b>'.__FILE__.'</b> ,Function <b>'.$function.'()</b> :'.$errormsg);
 } 
} 

?>