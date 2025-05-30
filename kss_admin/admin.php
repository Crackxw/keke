<?php

function HY_050ca2f55c1171cbe9($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("../kss_inc/inc.php");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6, "index");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ADMINWEBNAME;?></title>	
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<meta name="Author" content="可可-- 邮箱：keke@hphu.com  网站：www.hphu.com" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel='stylesheet' type='text/css' href="<?php echo INSTALLPATH;?>kss_inc/style/manager_dir.css?s=20130605" />
<style>
.mbg_1{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px 0px;}
.mbg_2{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -30px;}
.mbg_3{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -60px;}
.mbg_4{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -90px;}
.mbg_5{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -120px;}
.mbg_6{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -150px;}
.mbg_7{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -180px;}
.mbg_8{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -210px;}
.mbg_9{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -240px;}
.mbg_10{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -270px;}
.mbg_11{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -300px;}
.mbg_12{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -330px;}
.mbg_13{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -360px;}
.mbg_14{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -390px;}
.mbg_15{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -420px;}
.mbg_16{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -450px;}
.mbg_17{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -480px;}
.mbg_18{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -510px;}
.mbg_19{background:url('../kss_inc/images/mbg__.gif') no-repeat 0px -540px;}

#oparea{background:#f6f6f6;position:absolute; top:48px; left:150px;border:3px solid #4FA1D0;display:none;width:166px;height:<?php
echo $HY_825ad51e000ddc6ca5['level']>7?'380':'300';
?>px}
</style>
<script type="text/javascript" src="<?php echo INSTALLPATH;?>kss_inc/js/jquery.1.3.2.pack.js"></script>
<script type="text/javascript">

var softlisturl='';
var softlistextname='';
var softlistextid='';
var onewin=0;
var softmode='';
var dsoftid=0;
var dsoftname='';
var insmenu=0;
var isleft=0;
var et=0;

var setTimeoutID=new Array();
var setTimeoutIndex=-1;



function cwin(winid,winname,winurl,winname2){
	var wintitle2=winname2||winname;
	document.getElementById("win_data").contentWindow.CreateDiv(winid,winurl,winname,wintitle2)
}
	
function mackcache(){
	$.ajax(
	{
		type:"GET",
		url:'admin_makecache.php',
		cache:false,
		success: function(msg){alert(msg);},
		error:function(ajaxobj){alert("error!");}
	});
}

function pwin(winid,winname,winurl,one_win){
	onewin=one_win||0;
	softlisturl=winurl;
	softlistextname=winname;
	softlistextid=winid;
<?php
if(SELSOFTMODE==1){
?>
$("#maskc").show();
$("#maskcbg").show();
$("#softlistbar").show();
return true;
<?php
}else{
?>
if(dsoftid==0 || winid=='soft_change'){
$("#maskc").show();
$("#maskcbg").show();
$("#softlistbar").show();
}else{
tid=dsoftid;
tname=dsoftname;
if(onewin==1){
cwin(softlistextid,tname+softlistextname,softlisturl+"&softid="+tid);
}else{
cwin(softlistextid+tid,tname+softlistextname,softlisturl+"&softid="+tid);
}
}
<?php
}
?>
}


function randstr() {
var x="123456789poiuytrewqasdfghjklmnbvcxzQWERTYUIPLKJHGFDSAZXCVBNM";
var tmp="";
var l=12;
for(var i=0;i< l;i++) {
tmp += x.charAt(Math.ceil(Math.random()*100000000)%x.length);
}
return tmp;
}

function backbind(){
	
$(".softboxa").bind("click",function(){
var tid=$(this).attr("softid");
var tname=$(this).text();
var tnametitle=$(this).attr("title");
dsoftid=tid;
dsoftname=tname;
$("#softchange").text(dsoftname);
if(softlistextid=='soft_change'){
$("#maskcbg").hide();
$("#softlistbar").hide();

$("#maskc").hide();
return true;
}
if(onewin==1){
cwin(softlistextid,tname+softlistextname,softlisturl+"&softid="+tid,tnametitle);
}else{
cwin(softlistextid+tid,tname+softlistextname,softlisturl+"&softid="+tid,tnametitle);
}
$("#maskcbg").hide();
$("#softlistbar").hide();
$("#maskc").hide();
});
}
$(document).ready(function(){
	
var wheight=0;
wheight=$(window).height();
$("#bodytable").height(wheight);
$("#win_data").height(wheight);
$("#maskc").height(wheight);
$("#maskc").height(wheight);
$(window).resize(function(){
wheight=$(window).height();
$("#bodytable").height(wheight);
$("#win_data").height(wheight);
$("#maskc").height(wheight);
});

$.ajax({type:"GET",url:"admin_soft.php?action=softlistbar&isajax=1&rndid="+randstr(),cache:false,
success: function(msg){
$("#ajaxsoftlist").html(msg);
},
error:function(ajaxobj){
$("#ajaxsoftlist").html("读取软件列表出错，请按右上角的刷新按钮刷新！");
}
});


$("#hvm").bind("click",function(){
if($(this).attr("dis")=="1"){
$(this).attr("dis","0");
$("#hvmdir").hide();
$("#hvmimg").attr("src","../kss_inc/images/lopen.gif")
}
else{
$(this).attr("dis","1");
$("#hvmdir").show();
$("#hvmimg").attr("src","../kss_inc/images/lclose.gif")
}
});

$(".hoverbtn").hover(
function () {
$(this).attr("src",$(this).attr("src").replace("1.gif","2.gif"));
},
function () {
$(this).attr("src",$(this).attr("src").replace("2.gif","1.gif"));
}
);

$("#softchange,#smenu").bind("click",function(){
pwin('soft_change','切换软件','___',0);
});
$("#gbsoftlist").bind("click",function(){
$("#maskcbg").hide();
$("#maskc").hide();
$("#softlistbar").hide();
});
$("#refeshsoftlist").bind("click",function(){
$.ajax({type:"GET",url:"admin_soft.php?action=softlistbar&isajax=1&rndid="+randstr(),cache:false,
success: function(msg){
$("#ajaxsoftlist").html(msg);
},
error:function(ajaxobj){
alert("刷新数据出错："+ajaxobj.status);
}
});
});
$(".softboxa").live("click",function(){
var tid=$(this).attr("softid");
var tname=$(this).text();
dsoftid=tid;
dsoftname=tname;
$("#softchange").text(dsoftname);
if(softlistextid=='soft_change'){
$("#maskcbg").hide();
$("#softlistbar").hide();
$("#maskc").hide();
return true;
}
if(onewin==1){
cwin(softlistextid,tname+softlistextname,softlisturl+"&softid="+tid);
}else{
cwin(softlistextid+tid,tname+softlistextname,softlisturl+"&softid="+tid);
}
$("#maskcbg").hide();
$("#softlistbar").hide();
$("#maskc").hide();
});
$("[malt]").hover(
function () {
setTimeoutIndex=setTimeoutIndex+1;
if(setTimeoutIndex>0)window.clearTimeout(setTimeoutID[setTimeoutIndex-1]);
if(setTimeoutIndex>100)setTimeoutIndex=-1;
document.frames[1].write_malt($(this).attr("malt"));
},
function () {
setTimeoutID[setTimeoutIndex]=window.setTimeout(clearmalt, 1000);
}
);
$("li[f=1]").live("mouseover",function(){$(this).removeClass("li1").addClass("li2");}).live("mouseout",function(){$(this).removeClass("li2").addClass("li1");});
$("li[class^='snav']").hover(function(){$(this).removeClass("snav1").addClass("snav2");},function(){$(this).removeClass("snav2").addClass("snav1");});
$("li[s]").hover(
function (){
$(this).children("ul").show();
var cc2=$(this).children().filter(":last-child").children().filter(":last-child").offset();
$("#fbg").css("left",(cc2.left)+"px");
$("#fbg").css("height",(cc2.top-6)+"px");
},
function (){
$("#fbg").css("left","-300px");
$(this).children("ul").hide();
}
);
$("li[f]").hover(
function (){
$(this).css({background:"url('../kss_inc/images/libg.gif') no-repeat 0 0;"});
},
function (){
$(this).css({background:"url('../kss_inc/images/oldbg.gif') no-repeat 0 0;"});
}
);
});

function closesmenu(){
}

function clearmalt(){
if(document.frames[1].get_mouse()==0) document.frames[1].clear_malt();
}
</script>
</head>
<body scroll="no">
<iframe style="position:absolute;left:-203px;top:35px;width:203px;height:0;background:#ccc" src="blank.htm" frameborder='0' id='fbg' name='fbg' ></iframe>
<table id="bodytable" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" height="600">
<tr>
<td id="hvmdir" style="background:url(../kss_inc/images/93tbg.png)" width=100% height=47 valign="top">
<div id='nave'>
<ul id='navmenu'>
<li class='snav1'><a href="index.php?action=exit&id=<?php echo $HY_825ad51e000ddc6ca5["id"]?>&linecode=<?php echo $HY_825ad51e000ddc6ca5["linecode"]?>" style="color:#D9E5E9" target="_top">退出管理</a></li>
<?php
if(SELSOFTMODE==2){
?>
<li class='snav1' id="smenu"><span style="color:#D9E5E9">切换软件</span></li>
<?php } ?>
<li class='snav1' s="1"><span style="color:#D9E5E9">软件管理</span>
<ul>
<li f="1"><a onclick="cwin('soft_softlist','软件列表','admin_soft.php?action=softlist')"><span class="mbg_3">　　软件列表</span></a></li>
<?php
if($HY_825ad51e000ddc6ca5['level']==9 && SVRID==1){
?>
<li f="1"><a onclick="cwin('soft_add','添加软件','admin_soft.php?action=addsoft&softid=0')"><span class="mbg_2">　　添加软件</span></a></li>
<?php 
}
if($HY_825ad51e000ddc6ca5['level']>7){
?>
<li f="1"><a onclick="pwin('soft_set','参数设置','admin_soft.php?action=addsoft')"><span class="mbg_1">　　软件参数设置</span></a></li>
<?php 
} ?>
<li f="1"><a onclick="pwin('info_myorder','的订单','admin_order.php?action=orderlist')"><span class="mbg_4">　　订单管理</a></span></li>
</ul>
</li>
<li class='snav1' s="1"><span style="color:#D9E5E9">用户管理</span>
<ul>
<li f="1"><a onclick="pwin('user_userlist','用户列表','admin_key.php?action=userlist',0)"><span class="mbg_15">　　用户列表</span></a></li>
<?php 
if($HY_825ad51e000ddc6ca5['level']>7){
?>
<li f="1"><a onclick="pwin('user_adduser','添加用户','admin_key.php?action=adduser',0)"><span class="mbg_16">　　添加用户</span></a></li>
<li f="1"><a onclick="pwin('adv_derived','批处理数据','admin_batch.php?')"><span class="mbg_11">　　批量加时.删除.导出.锁定</span></a></li>
<li f="1"><a onclick="cwin('log_addcday','加时日志','admin_logs.php?action=addcday')">　　加时日志</a></li>
<?php 
} ?>
<li f="1"><a onclick="pwin('key_czlog','用户充值日志','admin_logs.php?action=userczlog',0)">　　用户充值日志</a></li>
<li f="1"><a onclick="pwin('key_userlog','客户验证日志','admin_logs.php?action=user_log',0)">　　用户登陆日志</a></li>
<li f="1"><a onclick="pwin('user_dklist','用户多开日志','admin_key.php?action=dklist',0)">　　用户多开日志</a></li>
<li f="1"><a onclick="pwin('key_testlog','公用帐号记录','admin_logs.php?action=pubuser_log',0)">　　公用帐号日志</a></li>
</ul>
</li>
<li class='snav1' s="1"><span style="color:#D9E5E9">注册卡管理</span>
<ul>
<li f="1"><a onclick="pwin('user_key1_','注册卡列表','admin_key.php?action=keylist',0)"><span class="mbg_8">　　注册卡列表</span></a></li>
<li f="1"><a onclick="pwin('key_addkey','添加注册卡','admin_key.php?action=addkey',1)"><span class="mbg_7">　　添加注册卡</span></a></li>
<li f="1"><a onclick="pwin('soft_keyset','卡类价格','admin_soft.php?action=keygroup')"><span class="mbg_6">　　卡类和零售价设置</span></a></li>
<li f="1"><a onclick="pwin('user_report_','注册卡统计表','admin_key.php?action=report',0)">　　注册卡统计表</a></li>
<li f="1"><a onclick="pwin('adv_derived','批处理数据','admin_batch.php?')"><span class="mbg_11">　　批量加时.删除.导出.锁定</span></a></li>
<?php
$HY_55d1f767a4f853ca9e=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_olddata` where id>0 limit 0,1');
if(!empty($HY_55d1f767a4f853ca9e)){
?>
<li f="1"><a onclick="pwin('key_oldkey','旧卡查询','admin_logs.php?action=v8data')">　　旧卡查询</a></li>					
<?php
}
?>
</ul>
</li>
<li class='snav1' s="1"><span style="color:#D9E5E9">我的信息</span>
<ul>
<li f="1"><a onclick="cwin('info_myinfo','我的资料','admin_manager.php?action=viewmanager')"><span class="mbg_5">　　我的资料</span></a></li>
<li f="1"><a onclick="cwin('logs_agentrmb','财务日志','admin_logs.php?action=agentrmb')"><span class="mbg_13">　　财务日志</span></a></li>
<?php 
if($HY_825ad51e000ddc6ca5['level']==6){
?>
<li f="1"><a onclick="cwin('info_cz','充值','admin_manager.php?action=cz')">　　我要充值</a></li>
<?php }				
if($HY_825ad51e000ddc6ca5['level']==7 || ($HY_825ad51e000ddc6ca5['level']==8 && LICTYPE>1000)){
?>
<li f="1"><a onclick="cwin('info_cz','充值','admin_manager.php?action=cz')">　　我要充值</a></li>
<?php }?>
<li f="1"><a onclick="cwin('info_myoplog','管理登陆日志','admin_logs.php?action=managerlogin')"><span class="mbg_12">　　登陆日志</span></a></li>
</ul>
</li>
<?php
if($HY_825ad51e000ddc6ca5['level']>6){ 
?>
<li class='snav1' s="1"><span style="color:#D9E5E9">后台帐号</span>
<ul>
<li f="1"><a onclick="cwin('sup_manageruser','帐号列表','admin_manager.php?action=managerlist')"><span class="mbg_17">　　帐号列表(代理<?php echo $HY_825ad51e000ddc6ca5['level']==7?'':'、总代、作者';?>)</span></a></li>
<li f="1"><a onclick="cwin('sup_addmanageruser','添加后台帐号','admin_manager.php?action=addmanager&id=0')"><span class="mbg_18">　　添加帐号(代理<?php echo $HY_825ad51e000ddc6ca5['level']==7?'':'、总代、作者';?>)</span></a></li>
</ul>
</li>
<?php
}
if($HY_825ad51e000ddc6ca5['level']==9){ ?>
<li class='snav1' s="1"><span style="color:#D9E5E9">高级管理</span>
<ul>
<li f="1"><a onclick="cwin('sup_svrlic','服务端登记','admin_lic.php')"><span class="mbg_12">　　服务端登记</span></a></li>
<li f="1"><a onclick="cwin('sup_sysset','系统设置','admin_sysset.php')"><span class="mbg_19">　　系统设置</span></a></li>
<?php if(SVRID==1){ ?>
<li f="1"><a onclick="cwin('data_sqlquery','执行SQL语句','admin_data.php?action=mysqlquery')">　　执行SQL语句</a></li>
<?php } ?>
<li f="1"><a onclick="cwin('data_databak','数据库备份','admin_data.php?action=mysqldatabak')"><span class="mbg_9">　　备份数据库</span></a></li>
<li f="1"><a onclick="cwin('data_datayh','清理、优化、修复数据库','admin_data.php?action=mysqldatayh')"><span class="mbg_10">　　清理优化修复数据库</span></a></li>
<?php if(IS2SVR==1 && SVRID==1){ 
$HY_cb097d7fc72cfbb73c=$HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b('select count(*) as tnum from kss_tb_sql');
?>
<li f="1"><a onclick="cwin('data_syncdata','待同步数据','admin_logs.php?action=witesyncdata')">　　待同步数据(<span id="synddatanum"><?php echo $HY_cb097d7fc72cfbb73c['tnum']?></span>)</a></li>
<li f="1"><a onclick="cwin('data_synclog','数据同步日志','admin_logs.php?action=synclogs')">　　数据同步日志</a></li>
<li f="1"><a onclick="mackcache();">　　更新缓存</a></li>
<?php } ?>
</ul>
</li>
<?php } ?>
</ul>
</div>
<div id="admname" style="float:left;line-height:35px;color:#fff"><?php echo "【",$HY_3fb3415441688353e5[$HY_825ad51e000ddc6ca5["level"]]," : ",$HY_825ad51e000ddc6ca5["username"],"】"?></div>
</td></tr>
<tr>
<td valign=top><iframe allowTransparency="true" frameborder=0 framespacing=0 scrolling="no" width="100%" height="300" name="win_data" id="win_data" src='z_datawin.php'></iframe></td>
</tr>
</table>
<iframe id="maskcbg2" src="blank.htm" scrolling="no" frameborder="0" style="position:absolute; top:48px; left:150px; display:none;width:166px;height:<?php
echo $HY_825ad51e000ddc6ca5['level']>7?'380':'300';
?>px"></iframe>
<iframe id="maskcbg" src="blank.htm" scrolling="no" frameborder="0" style="position:absolute; top:60px; left:180px; display:none;width:850px;*width:870px;height:330px"></iframe>

<div id="maskc"></div>

<table id="softlistbar" border="0" cellspacing="0" cellpadding="0" align=center height=330>
<tr bgcolor="#cacaca">
<td>&nbsp;&nbsp;&nbsp;<b>请选择软件</b></td>
<td align=right height=30><img class="hoverbtn" id="refeshsoftlist" src="../kss_inc/images/sx1.gif">&nbsp;<img id="gbsoftlist" class="hoverbtn" src="../kss_inc/images/gb1.gif">&nbsp;</td></tr>
<tr>
<td colspan="2" height=300 valign=top><div id="ajaxsoftlist">&nbsp;</div></td></tr>
</table>
</body>
</html>