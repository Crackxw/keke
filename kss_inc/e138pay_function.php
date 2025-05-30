<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
/*
*	创建日期：12:00 2014-3-11
*	更新日期：
*	功能：易付通在线接口函数
*/



function HY_0a0a655358e9799b01($HY_d74cbaa6ba201b5462,$HY_3960986de868576d48) {
$HY_7cf4dd585eee5c7337='SerialNo='.$HY_d74cbaa6ba201b5462['ordernum'].'&UserID='.$HY_d74cbaa6ba201b5462['partner'].'&ChannelID='.$HY_d74cbaa6ba201b5462['bkid'].'&Money='.$HY_d74cbaa6ba201b5462['rmb'].'&AttachString=e138&ReturnUrl='.$HY_d74cbaa6ba201b5462['return_url'].'&NotifyUrl='.$HY_d74cbaa6ba201b5462['notify_url'].'&MerchantKey='.$HY_3960986de868576d48;
$HY_9840221ea690e161c2 = strtolower(md5($HY_7cf4dd585eee5c7337));
$HY_270ef5e043898196e4='';
$HY_270ef5e043898196e4.='<form method=\'post\' name=\'E138_FORM\' target=\'_blank\' action=\'http://pay.e138.com/GateWay/Bank/Default.aspx\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'UserID\'         value=\''.$HY_d74cbaa6ba201b5462['partner'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'SerialNo\'         value=\''.$HY_d74cbaa6ba201b5462['ordernum'].'\'>';	
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'Money\'      value=\''.$HY_d74cbaa6ba201b5462['rmb'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'ReturnUrl\'         value=\''.$HY_d74cbaa6ba201b5462['return_url'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'NotifyUrl\'     value=\''.$HY_d74cbaa6ba201b5462['notify_url'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'VerifyString\'       value=\''.$HY_9840221ea690e161c2.'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'AttachString\'       value=\'e138\'>';   // 没啥大用处 
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=ChannelID value=\''.$HY_d74cbaa6ba201b5462['bkid'].'\'>';
$HY_270ef5e043898196e4.='<input type=submit class=submitbtn value=\'点击支付\'>';
$HY_270ef5e043898196e4.='</form>';
return $HY_270ef5e043898196e4;
}



?>