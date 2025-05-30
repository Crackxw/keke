<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
/*
*	创建日期：12:00 2012-10-1
*	更新日期：
*	功能：网银在线接口函数
*/



function HY_3443176f91466b5132($HY_d74cbaa6ba201b5462,$HY_3960986de868576d48) {
$HY_9840221ea690e161c2 = strtoupper(md5($HY_d74cbaa6ba201b5462['rmb'].'CNY'.$HY_d74cbaa6ba201b5462['ordernum'].$HY_d74cbaa6ba201b5462['partner'].$HY_d74cbaa6ba201b5462['return_url'].$HY_3960986de868576d48));
$HY_270ef5e043898196e4='';
$HY_270ef5e043898196e4.='<form method=\'post\' name=\'E_FORM\' target=\'_blank\' action=\'https://Pay3.chinabank.com.cn/PayGate\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'v_mid\'         value=\''.$HY_d74cbaa6ba201b5462['partner'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'v_oid\'         value=\''.$HY_d74cbaa6ba201b5462['ordernum'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'v_amount\'      value=\''.$HY_d74cbaa6ba201b5462['rmb'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'v_moneytype\'   value=\'CNY\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'v_url\'         value=\''.$HY_d74cbaa6ba201b5462['return_url'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'v_md5info\'     value=\''.$HY_9840221ea690e161c2.'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'remark1\'       value=\''.$HY_d74cbaa6ba201b5462['cz'].'\'>';
$HY_270ef5e043898196e4.='<input type=\'hidden\' name=\'remark2\'       value=\'remark2\'>';
$HY_270ef5e043898196e4.='<input type=submit class=submitbtn value=\'点击支付\'>';
$HY_270ef5e043898196e4.='</form>';
return $HY_270ef5e043898196e4;
}



?>