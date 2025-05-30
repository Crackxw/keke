<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
defined('YH2') or exit('Access denied to view this page!');


function HY_89b04e680908b02231($HY_d74cbaa6ba201b5462) { 
$HY_05b09f6c1538c3e32e = array();
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
if($HY_5380a89366e616d954 == "sign" || $HY_5380a89366e616d954 == "sign_type" || $HY_c19c0672cb1ac58a11 == "")continue;
else $HY_05b09f6c1538c3e32e[$HY_5380a89366e616d954] = $HY_d74cbaa6ba201b5462[$HY_5380a89366e616d954];
}
return $HY_05b09f6c1538c3e32e;
}


function HY_7b9cfa5afb3f7069af($HY_d74cbaa6ba201b5462,$HY_3960986de868576d48) {
$HY_270ef5e043898196e4='https://mapi.alipay.com/gateway.do?';
$HY_d74cbaa6ba201b5462['_input_charset']='utf-8';
$HY_d74cbaa6ba201b5462      = HY_89b04e680908b02231($HY_d74cbaa6ba201b5462);

ksort($HY_d74cbaa6ba201b5462);
reset($HY_d74cbaa6ba201b5462);
$HY_f368caaa7bed1c2edd = '';
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
$HY_f368caaa7bed1c2edd.=$HY_5380a89366e616d954.'='.$HY_c19c0672cb1ac58a11.'&';
}
$HY_da3916fae1447a8cf0 = substr($HY_f368caaa7bed1c2edd,0,count($HY_f368caaa7bed1c2edd)-2);

$HY_1017f7b13b2548acc9 = md5($HY_da3916fae1447a8cf0.$HY_3960986de868576d48);

$HY_f368caaa7bed1c2edd='';
reset($HY_d74cbaa6ba201b5462);
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
$HY_f368caaa7bed1c2edd.=$HY_5380a89366e616d954.'='.urlencode($HY_c19c0672cb1ac58a11).'&';
}		
$HY_270ef5e043898196e4.= $HY_f368caaa7bed1c2edd.'sign=' .$HY_1017f7b13b2548acc9 .'&sign_type=MD5';
return $HY_270ef5e043898196e4;
}


function HY_ab0cd64bd8ddd52a69($HY_c33038285257ff1271,$HY_3960986de868576d48,$HY_5dcb6391a8e2a5e072=0) {	
$HY_b145448aa76bc95b5e=false;
if($HY_5dcb6391a8e2a5e072==0){
$HY_f416cd3e2ebfaca4e6=$_POST['notify_id'];
$HY_9e5c0b95a797a6bf03=$_POST;
$HY_54f2f85daba623d79a=$_POST["sign"];
}else{
$HY_f416cd3e2ebfaca4e6=$_GET['notify_id'];
$HY_9e5c0b95a797a6bf03=$_GET;
$HY_54f2f85daba623d79a=$_GET["sign"];   
}
$HY_aff06a70cf00b89690 = 'https://mapi.alipay.com/gateway.do?service=notify_verify&partner='.$HY_c33038285257ff1271.'&notify_id='.$HY_f416cd3e2ebfaca4e6;
if(HY_abd80232273ff39ffb($HY_aff06a70cf00b89690)!='true'){
return $HY_b145448aa76bc95b5e;
}
$HY_d74cbaa6ba201b5462= HY_89b04e680908b02231($HY_9e5c0b95a797a6bf03);
ksort($HY_d74cbaa6ba201b5462);
reset($HY_d74cbaa6ba201b5462);
$HY_f368caaa7bed1c2edd='';
foreach($HY_d74cbaa6ba201b5462 as $HY_5380a89366e616d954 => $HY_c19c0672cb1ac58a11) {
$HY_f368caaa7bed1c2edd.=$HY_5380a89366e616d954.'='.$HY_c19c0672cb1ac58a11.'&';
}
$HY_da3916fae1447a8cf0 = substr($HY_f368caaa7bed1c2edd,0,count($HY_f368caaa7bed1c2edd)-2);
$HY_1017f7b13b2548acc9 = md5($HY_da3916fae1447a8cf0.$HY_3960986de868576d48);
if ($HY_1017f7b13b2548acc9 == $HY_54f2f85daba623d79a){
$HY_b145448aa76bc95b5e=true;
}
return $HY_b145448aa76bc95b5e;
}


function HY_abd80232273ff39ffb($HY_270ef5e043898196e4) {
$HY_7646674a09b3fa9abc='true';
if(HY_8ea23c5626d65adda5("curl_init") && HY_8ea23c5626d65adda5('curl_exec')){
$HY_d879b062ec4cf6d2d0     = parse_url($HY_270ef5e043898196e4);
$HY_8601a99bf99211019f = 60;
$HY_9a0a9285a6a51cef7b = curl_init();    
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_URL, $HY_270ef5e043898196e4);   
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_SSL_VERIFYHOST, FALSE); 
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);   
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_POST, 1);    
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_POSTFIELDS, $HY_d879b062ec4cf6d2d0["query"]);    
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_TIMEOUT, $HY_8601a99bf99211019f);    
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_HEADER, 0);    
curl_setopt($HY_9a0a9285a6a51cef7b, CURLOPT_RETURNTRANSFER, 1);    
$HY_7646674a09b3fa9abc = curl_exec($HY_9a0a9285a6a51cef7b);   
if (curl_errno($HY_9a0a9285a6a51cef7b)){   
$HY_7646674a09b3fa9abc='true';
@file_put_contents(KSSLOGDIR.'err_log.php','连接alipay服务器效验订单时出错:'.curl_error($HY_9a0a9285a6a51cef7b)."\r\n",FILE_APPEND);  
}   
curl_close($HY_9a0a9285a6a51cef7b);
} 
return $HY_7646674a09b3fa9abc; 
}


function HY_3532ee8e8afd8818d2($HY_7e3958ca51847ad2e2,$HY_363e86260f0dcd07f4,$HY_a182c94c4816ef4975,$HY_3960986de868576d48){

$HY_d74cbaa6ba201b5462 = array(
"service"			=> "send_goods_confirm_by_platform",
"partner"			=> $HY_a182c94c4816ef4975,
"trade_no"			=> $HY_363e86260f0dcd07f4,
"logistics_name"	=> 'KSPAY',
"invoice_no"		=> $HY_7e3958ca51847ad2e2,
"transport_type"	=> 'EXPRESS'
);
return HY_7b9cfa5afb3f7069af($HY_d74cbaa6ba201b5462,$HY_3960986de868576d48);
}


?>