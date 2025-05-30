<?php  /*# Copyright(C) 2008-2013 www.hphu.com, All rights Reserved.  version:130608 */ ?><?php
/*
*	创建日期：12:00 2012-10-1
*	更新日期：
*	功能：后台数据窗，页头部份
*/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $HY_b0a23355aa9ae9f34d?>--KSS</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link type="text/css" rel="stylesheet" href="<?php echo INSTALLPATH?>kss_inc/style/admin_style.css?version=20130601" />
<link type="text/css" rel="stylesheet" href="<?php echo INSTALLPATH?>kss_inc/style/contextMenu.css?version=20130601" />
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/jquery.1.3.2.pack.js?version=20130601" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/jquery.form.js?version=20130601" charset="utf-8"></script>	
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/admin_pub.js?version=20130601" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/contextMenu.js?version=20130601" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/ZeroClipboard/ZeroClipboard.js?version=20130601" charset="utf-8"></script>
</head>
<body>
<ul id="contextMenu">
<li><a href="javascript:history.go(0)">刷新本页</a></li>
</ul>
<script type="text/javascript">
initContextMenu();
var INSTALLPATH="<?php echo INSTALLPATH?>";var fackie=0;$(document).ready(function(){if ($.browser.msie && $.browser.version<"8.0"){fackie=1;$(window).scroll(function(){$(".malertbox").css("top",$(document).scrollTop()*1+100);});}});
ZeroClipboard.setMoviePath('<?php echo INSTALLPATH?>kss_inc/ZeroClipboard/ZeroClipboard.swf'); 
</script>
