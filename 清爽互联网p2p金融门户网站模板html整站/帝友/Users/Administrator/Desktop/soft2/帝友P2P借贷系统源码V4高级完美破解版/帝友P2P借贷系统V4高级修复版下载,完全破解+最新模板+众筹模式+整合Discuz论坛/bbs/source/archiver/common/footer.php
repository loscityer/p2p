<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
?>
<br />
<center>
	<?php echo adshow('footerbanner//1').adshow('footerbanner//2').adshow('footerbanner//3'); ?>
	<div id="footer">
		Powered by <strong><a target="_blank" href="http://www.hopecl.com">HOPECL <?php echo $_G['setting']['version']; ?> Archiver</a></strong> &nbsp; &copy 2011-2014 <a target="_blank" href="http://www.hopeclpay.com">Hope Inc.</a>
		<br />
		<br />
	</div>
</center>
</body>
</html>
<?php output(); ?>