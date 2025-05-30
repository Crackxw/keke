<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
/*
*	创建日期：12:00 2012-9-1
*	更新日期：22:00 2012-9-27
*	功能：财付通即时到帐接口函数
*/


function HY_770f431d00414be124($HY_d74cbaa6ba201b5462) { 
$HY_05b09f6c1538c3e32e = array();
while (list ($HY_5380a89366e616d954, $HY_c19c0672cb1ac58a11) = each ($HY_d74cbaa6ba201b5462)) {
if($HY_5380a89366e616d954 == "sign" || $HY_c19c0672cb1ac58a11 == "")continue;
else $HY_05b09f6c1538c3e32e[$HY_5380a89366e616d954] = $HY_d74cbaa6ba201b5462[$HY_5380a89366e616d954];
}
return $HY_05b09f6c1538c3e32e;
}


function HY_1743b30eeec93f23ba($HY_d74cbaa6ba201b5462,$HY_3960986de868576d48){
$HY_270ef5e043898196e4='https://gw.tenpay.com/gateway/pay.htm?';
$HY_d74cbaa6ba201b5462['input_charset']='UTF-8';
$HY_d74cbaa6ba201b5462      = HY_770f431d00414be124($HY_d74cbaa6ba201b5462);
ksort($HY_d74cbaa6ba201b5462);
reset($HY_d74cbaa6ba201b5462);
$HY_da3916fae1447a8cf0 = '';
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
$HY_da3916fae1447a8cf0.=$HY_5380a89366e616d954.'='.$HY_c19c0672cb1ac58a11.'&';
}
$HY_1017f7b13b2548acc9 = strtolower(md5($HY_da3916fae1447a8cf0.'key='.$HY_3960986de868576d48));

$HY_f368caaa7bed1c2edd='';
reset($HY_d74cbaa6ba201b5462);
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
$HY_f368caaa7bed1c2edd.=$HY_5380a89366e616d954.'='.urlencode($HY_c19c0672cb1ac58a11).'&';
}		
$HY_270ef5e043898196e4.= $HY_f368caaa7bed1c2edd.'sign=' .$HY_1017f7b13b2548acc9;
return $HY_270ef5e043898196e4;
}


function HY_ffb7b2356219e92c64($HY_3960986de868576d48) {	
$HY_b145448aa76bc95b5e=false;
$HY_d74cbaa6ba201b5462=array();
foreach($_GET as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) { $HY_d74cbaa6ba201b5462[$HY_5380a89366e616d954]=$HY_c19c0672cb1ac58a11; }
foreach($_POST as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) { $HY_d74cbaa6ba201b5462[$HY_5380a89366e616d954]=$HY_c19c0672cb1ac58a11; }

$HY_9e981f7f4c1f614f68=$HY_d74cbaa6ba201b5462["sign"];
$HY_d74cbaa6ba201b5462= HY_770f431d00414be124($HY_d74cbaa6ba201b5462);
ksort($HY_d74cbaa6ba201b5462);
reset($HY_d74cbaa6ba201b5462);
$HY_da3916fae1447a8cf0='';
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
$HY_da3916fae1447a8cf0.=$HY_5380a89366e616d954.'='.$HY_c19c0672cb1ac58a11.'&';
}
$HY_1017f7b13b2548acc9 = md5($HY_da3916fae1447a8cf0.'key='.$HY_3960986de868576d48);
return strtoupper($HY_1017f7b13b2548acc9)==strtoupper($HY_9e981f7f4c1f614f68);
}

?>