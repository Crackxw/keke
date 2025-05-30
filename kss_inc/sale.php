<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
/*
*	创建日期：12:00 2012-10-1
*	更新日期：
*	功能：售卡系统
*/
defined('YH2') or exit('Access denied to view this page!');
HY_af470935131a2269b8();  
$HY_67a0c16af0ae09f260=HY_6bfeee86cee6e24af6(32);
$_SESSION['pagecook']=$HY_67a0c16af0ae09f260;
if($HY_ef5f84ba59380de510==0){
$HY_fd18d7f34c416ddc4c=HY_ba8120f86a7df1aecc('uid','pg','int',1);
}else{
$HY_fd18d7f34c416ddc4c=(int)$HY_ef5f84ba59380de510;
}

$HY_82d6536edf704aabc5=New mysql_cls;
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
$HY_c27c05c8ec8b51c4d4=$HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b('select * from kss_tb_manager where `id`=\''.$HY_fd18d7f34c416ddc4c.'\'');
if(empty($HY_c27c05c8ec8b51c4d4))HY_bd307d155f057feb55('销售商ID未找到！');

if($HY_c27c05c8ec8b51c4d4['pid']!=10000 && LICTYPE>1000)HY_bd307d155f057feb55('在线零售功能被禁用');

if($HY_c27c05c8ec8b51c4d4['level']==7)
HY_bd307d155f057feb55('销售商未授权！');
if($HY_c27c05c8ec8b51c4d4['level']==6 && !HY_8c3a93be5d853f54b7($HY_c27c05c8ec8b51c4d4['powerlist'],11))
HY_bd307d155f057feb55('销售商未授权！');
$HY_083a5d2f1d16a04b82=explode(',', $HY_c27c05c8ec8b51c4d4['alipayset']);
if(strlen($HY_c27c05c8ec8b51c4d4['tenpayset'])<10 && strlen($HY_c27c05c8ec8b51c4d4['chinabankset'])<4 && strlen($HY_083a5d2f1d16a04b82[1])<8 && strlen($HY_c27c05c8ec8b51c4d4['e138set'])<10)
HY_bd307d155f057feb55('销售商支付接口未设置！');


$HY_2b051c35c3cffb9826='select * from kss_tb_keyset where `pid`=\''.$HY_c27c05c8ec8b51c4d4['pid'].'\' and retailprice>0 and islock=0';
if($HY_c27c05c8ec8b51c4d4['level']==6)
$HY_2b051c35c3cffb9826='select * from kss_tb_keyset where `pid`=\''.$HY_c27c05c8ec8b51c4d4['pid'].'\' and retailprice>0 and `id` in (select distinct keygroupid from kss_tb_agentprice where managerid='.$HY_fd18d7f34c416ddc4c.') and islock=0';
$HY_4252b389c6f5955c44=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_2b051c35c3cffb9826);
if(empty($HY_4252b389c6f5955c44))
HY_bd307d155f057feb55('没有找到可零售的注册卡！');
$HY_17887cb93c2eda0900=array();
$HY_fd5e067fd5131a517c=array();
foreach($HY_4252b389c6f5955c44 as $HY_970be7709f584ff59c){
if(!isset($HY_17887cb93c2eda0900[$HY_970be7709f584ff59c['softid']])){
$HY_17887cb93c2eda0900[$HY_970be7709f584ff59c['softid']]=$HY_970be7709f584ff59c['softid'];
$HY_fd5e067fd5131a517c[$HY_970be7709f584ff59c['softid']]=array();
}
$HY_fd5e067fd5131a517c[$HY_970be7709f584ff59c['softid']][]=$HY_970be7709f584ff59c;
}

$HY_810d15d31408c982b2=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from kss_tb_soft where `id` in ('.join(',',$HY_17887cb93c2eda0900).')');


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo empty($HY_c27c05c8ec8b51c4d4['payweb_title'])?'在线售卡':$HY_c27c05c8ec8b51c4d4['payweb_title']?></title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
<meta name="Version" content="<?php echo KSSVERSION?>" />
<meta name="Author" content="火云网络工作室  http://www.hphu.com" />
<link type="text/css" rel="stylesheet" href="<?php echo INSTALLPATH?>kss_inc/style/sale_style.css?version=<?php echo KSSVERSION?>" />
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/jquery.1.3.2.pack.js?version=<?php echo KSSVERSION?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/jquery.form.js?version=<?php echo KSSVERSION?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/jquery.pngFix.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo INSTALLPATH?>kss_inc/js/admin_pub.js?version=<?php echo KSSVERSION?>" charset="utf-8"></script>
<script type="text/javascript">
var INSTALLPATH="<?php echo INSTALLPATH?>";
var fackie=0;
var jsuid=<?php echo $HY_fd18d7f34c416ddc4c;?>;
$(document).ready(function () {
if ($.browser.msie && $.browser.version<"8.0"){fackie=1;$(window).scroll(function(){$(".malertbox").css("top",$(document).scrollTop()*1+100);});}
$(document).pngFix();    
$(".buy").bind('mouseover', function (){
$(this).attr('src','<?php echo INSTALLPATH?>kss_inc/images/sale_btn2.gif');   
}).bind("mouseout",function (){
$(this).attr('src','<?php echo INSTALLPATH?>kss_inc/images/sale_btn1.gif'); 
}).bind("click",function(){
var kgroupid=$(this).attr("kgid");
malert('<?php echo INSTALLPATH?>kss_inc/sale_cmd.php?uid=<?php echo $HY_fd18d7f34c416ddc4c?>&keygroupid='+kgroupid+'&pagecook='+$("#pagecook").val(),'请输入购卡信息，和选择支付方式',800,300);
});
$("#search").bind('click',function(){
malert('<?php echo INSTALLPATH?>kss_inc/sale_cmd.php?isajax=1&sordernum='+encodeURIComponent($("#sordernum").val())+'&uid=<?php echo $HY_fd18d7f34c416ddc4c?>&pagecook='+$("#pagecook").val(),'查询到的订单信息',800,300);
});
});



</script>
</head>
<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><a name="top"></a>
<table width="1000"  border="0" cellpadding="0" cellspacing="0" align=center>
<tr>
<td ><img src="<?php 
if($HY_c27c05c8ec8b51c4d4['payweb_loginimg']==''){
echo INSTALLPATH.'kss_inc/images/salelogo.png';
}else{
echo $HY_c27c05c8ec8b51c4d4['payweb_loginimg'];
}
?>"></td>
<td ><input type=hidden name="pagecook" id="pagecook" value="<?php echo $HY_67a0c16af0ae09f260?>"><input type=text value="请输入订单号" id="sordernum" style="border:0;width:200px;height:24px;margin:0;line-height:24px;padding:0"></td>
<td ><img src="<?php echo INSTALLPATH?>kss_inc/images/sale_search.gif" id="search"></td>
</tr>
</table>
<table width="1000"  border="0" id="tablenav" cellpadding="0" cellspacing="0" align=center>
<tr>
<td ><div id="softlistnav">
<?php 
foreach($HY_810d15d31408c982b2 as $HY_70fdd4c095ad9a39f4){
echo '<span><a href=\'#tag'.$HY_70fdd4c095ad9a39f4['id'].'\' title=\''.$HY_70fdd4c095ad9a39f4['softname'].'\'>'.HY_1244170a3b88fdcf6a($HY_70fdd4c095ad9a39f4['softname'],9).'</a></span>';
}
?>
</div></td>
</tr>
</table>
<?php
foreach($HY_810d15d31408c982b2 as $HY_70fdd4c095ad9a39f4){
?>
<a name="tag<?php echo $HY_70fdd4c095ad9a39f4['id']?>"></a>
<table class="softbox" width="1000"  border="0" cellpadding="0" cellspacing="0" align=center>
<tr>
<td class=td1>&nbsp;&nbsp;&nbsp;&nbsp;软件名称：<?php echo $HY_70fdd4c095ad9a39f4['softname']?></td><td class=td2 align=right><?php
$HY_b0a7fe95591b3b454f=base64_decode($HY_70fdd4c095ad9a39f4['softdownurl']);
if(strlen($HY_b0a7fe95591b3b454f)>10 && stripos($HY_b0a7fe95591b3b454f,'salenotview')==false)
echo '<a href='.$HY_b0a7fe95591b3b454f.' target=_blank>下载软件</a>';
?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#top">回到顶部</a>&nbsp;</td>
</tr>
<tr>
<td class=td3><div class="pad">
<?php echo base64_decode($HY_70fdd4c095ad9a39f4['softintro'])?>
</div></td>
<td class=td4 valign=top><?php
foreach($HY_fd5e067fd5131a517c[$HY_70fdd4c095ad9a39f4['id']] as $HY_a1e3f7957087c929e0){
echo '<table border=0 class=\'stable\' cellpadding=0 cellspacing=0 width=\'100%\'>';
echo '<tr><td colspan=2>'.$HY_a1e3f7957087c929e0['keyname'].'</td></tr>';
echo '<tr><td width=50%>价格：'.$HY_a1e3f7957087c929e0['retailprice'].'元</td><td width=50%><img class=buy kgid='.$HY_a1e3f7957087c929e0['id'].' src='.INSTALLPATH.'kss_inc/images/sale_btn1.gif></td></tr>'."\r\n";
echo "</table>\r\n";
}		
?></td>
</tr>
</table>
<?php
}
?>
<div align=center style="margin:auto">
<table  width="1000"  border="0" cellpadding="0" cellspacing="0" align=center style="background:#f6f6f6;margin:10px 0 0 0;border-top:2px solid #DF8711">
<tr>
<td  align=center style="padding:10px 0"><?php
if($HY_c27c05c8ec8b51c4d4['payweb_title']!=''){
echo $HY_c27c05c8ec8b51c4d4['payweb_title'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
}
if($HY_c27c05c8ec8b51c4d4['email']!='' && $HY_c27c05c8ec8b51c4d4['email']!='10000@qq.com'){
echo '&nbsp;&nbsp;邮箱:'.$HY_c27c05c8ec8b51c4d4['email'];
}
if($HY_c27c05c8ec8b51c4d4['qq']!='' && $HY_c27c05c8ec8b51c4d4['qq']!='10000'){
echo '&nbsp;&nbsp;QQ:'.$HY_c27c05c8ec8b51c4d4['qq'];
}
if($HY_c27c05c8ec8b51c4d4['tel']!=''){
echo '&nbsp;&nbsp;电话:'.$HY_c27c05c8ec8b51c4d4['tel'];
}
if(ICPNUM!=''){
echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href=http://www.miibeian.gov.cn/ target=_blank >'.ICPNUM.'</a>';
}
?>&nbsp;</td>
</tr>
</table></div><?php echo base64_decode($HY_c27c05c8ec8b51c4d4['jscript']); ?>
</body>
</html>