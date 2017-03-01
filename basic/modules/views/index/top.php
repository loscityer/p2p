<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="houtai/css/pintuer.css">
    <link rel="stylesheet" href="houtai/css/admin.css">
    <script src="houtai/js/jquery.js"></script>   
</head>
<body>
	<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="houtai/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l">
  <a class="button button-little bg-green" href="" ><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
  <a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;
  <a class="button button-little bg-red" href="javascript:;" onclick="logout()"><span class="icon-power-off"></span  onclick="logout()"> 退出登录</a> </div>


</div>
<script type="text/javascript">
             function logout(){
                // alert(12);
                 top.location="login.html"
             }
    </script>
</body>
</html>