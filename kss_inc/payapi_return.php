<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
/*
*	创建日期：21:10 2012-9-2
*	更新日期：22:00 2012-9-27
*	功能：网关同步通知
*/
require('inc.php');
$HY_fa653aeba99cbb6873=array('ali'=>'支付宝','ten'=>'财付通','chinabank'=>'网银在线','e138'=>'易付通');
$HY_e063c928cc3706d2d2=array('ali'=>'success','ten'=>'success','chinabank'=>'ok','e138'=>'2');
$HY_85e2d17c08df067076=array('WAIT_BUYER_PAY','WAIT_SELLER_SEND_GOODS','WAIT_BUYER_CONFIRM_GOODS','TRADE_FINISHED','TRADE_SUCCESS');

$HY_a694047bf97acd7f10='ali';
if(isset($_GET['transaction_id']))$HY_a694047bf97acd7f10='ten';   
if(isset($_POST['v_oid']))$HY_a694047bf97acd7f10='chinabank';	
if(isset($_POST['AttachString']) && $_POST['AttachString']=='e138')$HY_a694047bf97acd7f10='e138';	
include($HY_a694047bf97acd7f10.'pay_function.php');

if($HY_a694047bf97acd7f10=='ali'){
$HY_7e3958ca51847ad2e2=HY_ba8120f86a7df1aecc('out_trade_no','pg','sql','');
$HY_daec5176b1ae69ec18=HY_ba8120f86a7df1aecc('trade_no','pg','sql','');
$HY_243589d656d86939a8=HY_ba8120f86a7df1aecc('total_fee','pg','sql','');
$HY_4713a5727c89602935	=HY_ba8120f86a7df1aecc('trade_status','pg','sql','');
$HY_cfd569afb440ba8195=HY_ba8120f86a7df1aecc('buyer_email','pg','sql','');
}elseif($HY_a694047bf97acd7f10=='ten'){
$HY_f8a6a5b66efa030cb5=HY_ba8120f86a7df1aecc('trade_mode','gp','int',0);
$HY_7e3958ca51847ad2e2=HY_ba8120f86a7df1aecc('out_trade_no','gp','sql',"");
$HY_daec5176b1ae69ec18=HY_ba8120f86a7df1aecc('transaction_id','gp','sql',"");
$HY_243589d656d86939a8=HY_ba8120f86a7df1aecc('total_fee','gp','sql',"");
$HY_243589d656d86939a8=$HY_243589d656d86939a8/100;
$HY_4713a5727c89602935	=HY_ba8120f86a7df1aecc('trade_state','gp','sql',"");
if($HY_4713a5727c89602935=='0'){
$HY_4713a5727c89602935='TRADE_FINISHED';
}else{
$HY_4713a5727c89602935='WAIT_BUYER_PAY';
}
}elseif($HY_a694047bf97acd7f10=='chinabank'){
$HY_daec5176b1ae69ec18='';
$HY_508ab70aaba0b9276f     =trim($_POST['v_oid']);  
$HY_7e3958ca51847ad2e2 = $HY_508ab70aaba0b9276f;    
$HY_cb1678d41b96ade4dd =trim($_POST['v_pstatus']);      
$HY_726fbd802b19ed8ca6  =trim($_POST['v_amount']); 
$HY_243589d656d86939a8=$HY_726fbd802b19ed8ca6;    
$HY_f6e5a5ddb19d332df8  =trim($_POST['v_moneytype']);     
$HY_bc36132f387c3ca1a3   =trim($_POST['remark1' ]);     
$HY_5c99d07e28375aea77  =trim($_POST['v_md5str' ]);
if($HY_cb1678d41b96ade4dd=='20'){
$HY_4713a5727c89602935='TRADE_FINISHED';
}else{
$HY_4713a5727c89602935='WAIT_BUYER_PAY';
}
}elseif($HY_a694047bf97acd7f10=='e138'){
$HY_daec5176b1ae69ec18='';
$HY_508ab70aaba0b9276f     =trim($_POST['SerialNo']);  
$HY_7e3958ca51847ad2e2 = $HY_508ab70aaba0b9276f;         
$HY_cb1678d41b96ade4dd =trim($_POST['Status']);      
$HY_726fbd802b19ed8ca6  =trim($_POST['Money']);   
$HY_5c99d07e28375aea77  =trim($_POST['VerifyString' ]);
$HY_243589d656d86939a8=$HY_726fbd802b19ed8ca6;
if($HY_cb1678d41b96ade4dd=='2'){
$HY_4713a5727c89602935='TRADE_FINISHED';
}else{
$HY_4713a5727c89602935='WAIT_BUYER_PAY';
}
}else{
exit('errwg');
}
HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2,$HY_4713a5727c89602935,0);

$HY_2430422a75ffb8ee5f='POSTDATA:';
foreach($_POST as $HY_5380a89366e616d954=>$HY_39f33d52374bdc42f7){
$HY_2430422a75ffb8ee5f.=$HY_5380a89366e616d954.'='.urlencode($HY_39f33d52374bdc42f7).'&';
}
HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2,$HY_2430422a75ffb8ee5f);
$HY_03b53d8823d8760de6='GETDATA:';
foreach($_GET as $HY_5380a89366e616d954=>$HY_39f33d52374bdc42f7){
$HY_03b53d8823d8760de6.=$HY_5380a89366e616d954.'='.urlencode($HY_39f33d52374bdc42f7).'&';
}
HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2,$HY_03b53d8823d8760de6);

if(!in_array($HY_4713a5727c89602935,$HY_85e2d17c08df067076)){
HY_bd307d155f057feb55($HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10].'返回的状态码异常！');
}
$HY_82d6536edf704aabc5=New mysql_cls;
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);

$HY_5cd380c79f7cf1ee30=$HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b('select * from kss_tb_log_agentrmb where ordernum=\''.$HY_7e3958ca51847ad2e2.'\'' );
if(empty($HY_5cd380c79f7cf1ee30)){
HY_bd307d155f057feb55('管理订单未找到！');
}


$HY_825ad51e000ddc6ca5=HY_4f6f2e143b93a52ec5($HY_5cd380c79f7cf1ee30['managerid']);   


$HY_37d035a9af9bb3bd57=1;
$HY_af166dfaf16c25bc35=HY_0894f1e5fc3fbb7c85($HY_5cd380c79f7cf1ee30['pid'],$HY_825ad51e000ddc6ca5['pmid']);
if(!empty($HY_af166dfaf16c25bc35)){
if($HY_af166dfaf16c25bc35['islock']==0){
$HY_37d035a9af9bb3bd57=0;
}
}
$HY_ce2cfbc888fb7c3595=HY_0894f1e5fc3fbb7c85($HY_5cd380c79f7cf1ee30['pid']);
if($HY_37d035a9af9bb3bd57==1){  
$HY_6c0a3bbd1a07dd755d=$HY_ce2cfbc888fb7c3595;
}else{  
if($HY_825ad51e000ddc6ca5['level']==7){  
$HY_6c0a3bbd1a07dd755d=$HY_ce2cfbc888fb7c3595;
}else{	
$HY_6c0a3bbd1a07dd755d=$HY_af166dfaf16c25bc35;
}
}

if($HY_825ad51e000ddc6ca5['level']==8 && LICTYPE>1000)$HY_6c0a3bbd1a07dd755d=HY_4f6f2e143b93a52ec5(1);

$HY_8a3ea308dd96a60b8a=explode(',', $HY_6c0a3bbd1a07dd755d['alipayset']);
if($HY_a694047bf97acd7f10=='ali'){
$HY_7004f81a74ee7e5839 = HY_ab0cd64bd8ddd52a69($HY_8a3ea308dd96a60b8a[1],$HY_6c0a3bbd1a07dd755d['alikey'],1);
}elseif($HY_a694047bf97acd7f10=='ten'){
if($HY_f8a6a5b66efa030cb5 != 1){ 
HY_bd307d155f057feb55('不支持即时到帐以外的'.$HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10].'接口！');
} 
$HY_7004f81a74ee7e5839 = HY_ffb7b2356219e92c64($HY_6c0a3bbd1a07dd755d['tenkey']);
}elseif($HY_a694047bf97acd7f10=='chinabank'){
$HY_7004f81a74ee7e5839=true;
if($HY_5c99d07e28375aea77!=strtoupper(md5($HY_508ab70aaba0b9276f.$HY_cb1678d41b96ade4dd.$HY_726fbd802b19ed8ca6.$HY_f6e5a5ddb19d332df8.$HY_6c0a3bbd1a07dd755d['chinabankkey']))){ 
$HY_7004f81a74ee7e5839=false;	
}
}elseif($HY_a694047bf97acd7f10=='e138'){

$HY_7004f81a74ee7e5839=true;
if($HY_5c99d07e28375aea77!=strtolower(md5('SerialNo='.$HY_508ab70aaba0b9276f.'&UserID='.$HY_6c0a3bbd1a07dd755d['e138set'].'&Money='.$HY_726fbd802b19ed8ca6.'&Status='.$HY_cb1678d41b96ade4dd.'&AttachString=e138&MerchantKey='.$HY_6c0a3bbd1a07dd755d['e138key']))){ 
$HY_7004f81a74ee7e5839=false;	
}
}

if($HY_7004f81a74ee7e5839!==true) {
HY_bd307d155f057feb55($HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10].'URL签名不正确！curl:'.$HY_7004f81a74ee7e5839);
}

$HY_9ad675bcffc64f9714=0;
$HY_3a20a28098fc7d868f='';
if($HY_5cd380c79f7cf1ee30['intro']!=$HY_daec5176b1ae69ec18)
$HY_3a20a28098fc7d868f=',`intro`=\''.$HY_daec5176b1ae69ec18.'\'';
if($HY_4713a5727c89602935 == 'WAIT_BUYER_PAY') {  
HY_bd307d155f057feb55('订单已确定但还未付款！');
}else if($HY_4713a5727c89602935 == 'WAIT_SELLER_SEND_GOODS') {  
HY_bd307d155f057feb55('订单已付款！');	
}else if($HY_4713a5727c89602935 == 'WAIT_BUYER_CONFIRM_GOODS') {  
if($HY_a694047bf97acd7f10=='ali'){
$HY_cfc6fcafffdf22b8ef=explode(',', $HY_6c0a3bbd1a07dd755d['alipayset']);
if($HY_cfc6fcafffdf22b8ef[0]=='create_partner_trade_by_buyer' && $HY_cfc6fcafffdf22b8ef[2]==$HY_cfd569afb440ba8195){   
$HY_9ad675bcffc64f9714=1;   
}else{
HY_bd307d155f057feb55('订单已发货！');
}			
}else{	
HY_bd307d155f057feb55('订单已发货！');
}
}

if($HY_4713a5727c89602935 == 'TRADE_FINISHED' || $HY_4713a5727c89602935 == 'TRADE_SUCCESS' || $HY_9ad675bcffc64f9714==1) {
if($HY_4713a5727c89602935 == 'TRADE_FINISHED' || $HY_4713a5727c89602935 == 'TRADE_SUCCESS'){	
HY_bd307d155f057feb55('充值'.$HY_243589d656d86939a8.'元订单已完成，请查看余额变动！');
}
if($HY_9ad675bcffc64f9714==1){
HY_bd307d155f057feb55('充值'.$HY_243589d656d86939a8.'元订单已发货，请查看余额变动！');
}
}
HY_bd307d155f057feb55('未知的订单状态码：'.$HY_4713a5727c89602935);


function HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2,$HY_b8daf488e31ad490f7,$HY_1d5e41aacc40ced80d=1) {
if(defined('SAE_MYSQL_USER')==true || DEBUGPAYWG==0)return false;
$HY_44d9f262676630e68f=KSSLOGDIR.'agentczdebug2_log.php';
if($HY_1d5e41aacc40ced80d==1){
@file_put_contents($HY_44d9f262676630e68f,$HY_b8daf488e31ad490f7."\r\n",FILE_APPEND);  
}else{
if(!is_file($HY_44d9f262676630e68f) || filesize($HY_44d9f262676630e68f)>1024*256){
$HY_e6b77c37c3104b66e7='?';
$HY_975f0ca9eb0aaa39ee='<'.$HY_e6b77c37c3104b66e7.'php exit(\'Access denied to view this page!\');'.$HY_e6b77c37c3104b66e7.">\r\n";
@file_put_contents($HY_44d9f262676630e68f,$HY_975f0ca9eb0aaa39ee."\r\n\r\n\r\n时间:".date('Y-m-d H:i:s')."\r\n订单号:".$HY_7e3958ca51847ad2e2."\r\n状态:".$HY_b8daf488e31ad490f7."\r\n");  
}else{
@file_put_contents($HY_44d9f262676630e68f,"\r\n\r\n\r\n时间:".date('Y-m-d H:i:s')."\r\n订单号:".$HY_7e3958ca51847ad2e2."\r\n状态:".$HY_b8daf488e31ad490f7."\r\n",FILE_APPEND);  		
}
}
}

?>