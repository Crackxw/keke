<?php

function HY_fb4105e8e687cd11cf($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_b862aa060ee8a3fd14($HY_4607a9126ace7ec399, $HY_99083a46b5939ebd3c, $HY_55fc1083ccd70490c6)
{
	return preg_replace("/define\('" . $HY_99083a46b5939ebd3c . "','[^']*'\)/i", "define('" . $HY_99083a46b5939ebd3c . "','" . $HY_55fc1083ccd70490c6 . "')", $HY_4607a9126ace7ec399);
}

function HY_8f13044a7f351d9cf5($HY_4607a9126ace7ec399, $HY_99083a46b5939ebd3c, $HY_55fc1083ccd70490c6)
{
	return preg_replace("/define\('" . $HY_99083a46b5939ebd3c . "',[^\)]*\)/i", "define('" . $HY_99083a46b5939ebd3c . "'," . $HY_55fc1083ccd70490c6 . ")", $HY_4607a9126ace7ec399);
}

require ("../kss_inc/inc.php");
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "gp", "sql", "");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(9);

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	hy_3df13eaab5a6295338();
}

if ($HY_d762a272713d62924f == "save") {
	$HY_b3eab9ab97f5bf9032 = array("MYSQLBAKPASSWORD0", "BAKDATAMODE", "MYSQLBAKPASSWORD", "ADMINWEBNAME", "RSACRYPT", "RSA_PRVKEY", "RSA_MODULES", "WEBID", "ZPAGESIZE", "ICPNUM", "HOMEPAGEGOTO", "PRV_SVRLIC", "SENDMAILMODE", "QQMAIL", "QQMAIL2", "QQMAILPASSWORD");

	foreach ($_POST as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
		if (in_array($HY_5380a89366e616d954, $HY_b3eab9ab97f5bf9032)) {
			if (strpos($HY_39f33d52374bdc42f7, "'") !== false) {
				hy_bd307d155f057feb55("保存失败，" . $HY_5380a89366e616d954 . "里有特殊字符'");
			}
		}

		$_POST[$HY_5380a89366e616d954] = $HY_39f33d52374bdc42f7;
	}

	$HY_d191fc94b27ca54706 = 1;

	if (isset($_POST["BAKDATAMODE"])) {
		$HY_d191fc94b27ca54706 = $_POST["BAKDATAMODE"];
	}

	$HY_0ccc0f3f98ce3ff46a["s_bakmode"] = $HY_d191fc94b27ca54706;
	$HY_cb3e308afc289b0a04 = $_POST["MYSQLBAKPASSWORD"];
	$HY_ee67ca310edf378f0f = $_POST["MYSQLBAKPASSWORD0"];
	$HY_3b55fcaf7fe851dace = $_POST["ADMINWEBNAME"];
	$HY_0ccc0f3f98ce3ff46a["s_webtitle"] = $HY_3b55fcaf7fe851dace;
	$HY_193e367f20951dc03a = $_POST["RSACRYPT"];
	$HY_0ccc0f3f98ce3ff46a["s_rsamode"] = $HY_193e367f20951dc03a;
	$HY_1c5757434271a6705b = $_POST["RSA_PRVKEY"];
	$HY_0ccc0f3f98ce3ff46a["s_rsaekey"] = $HY_1c5757434271a6705b;
	$HY_cb885a32a76fabcdd8 = $_POST["RSA_MODULES"];
	$HY_0ccc0f3f98ce3ff46a["s_rsankey"] = $HY_cb885a32a76fabcdd8;
	$HY_4fee8720a8d58a7444 = $_POST["WEBID"];
	$HY_0ccc0f3f98ce3ff46a["s_webid"] = $HY_4fee8720a8d58a7444;
	$HY_1d492816382b00c5bf = $_POST["ZPAGESIZE"];
	$HY_022fd80dddfe8b2674 = $_POST["ICPNUM"];
	$HY_0ccc0f3f98ce3ff46a["s_icp"] = $HY_022fd80dddfe8b2674;
	$HY_0cea4699ba4df4dbd4 = $_POST["BINDIP"];
	$HY_fe968a7ef1d6a72e48 = $_POST["HOMEPAGEGOTO"];
	$HY_bd1dc3d092038b920d = $_POST["PRV_SVRLIC"];

	if (SVRID == 1) {
		$HY_9c886e6ce9b855911a = 0;

		if (isset($_POST["SENDMAILMODE"])) {
			$HY_9c886e6ce9b855911a = $_POST["SENDMAILMODE"];
		}

		$HY_0ccc0f3f98ce3ff46a["s_sendmailmode"] = $HY_9c886e6ce9b855911a;
		$HY_9f5ca17f37f88cc881 = $_POST["QQMAIL"];
		$HY_0ccc0f3f98ce3ff46a["s_sendmail"] = $HY_9f5ca17f37f88cc881;
		$HY_eba4bcba1a32261e83 = $_POST["QQMAIL2"];
		$HY_0ccc0f3f98ce3ff46a["s_recvmail"] = $HY_eba4bcba1a32261e83;
		$HY_39cebec707a2ad5f13 = $_POST["QQMAILPASSWORD"];
		$HY_0ccc0f3f98ce3ff46a["s_sendmailpassword"] = $HY_39cebec707a2ad5f13;
		$HY_77fa6ea386719e3cb2 = $HY_d191fc94b27ca54706;
	}

	$HY_313e62709616f896c9 = file_get_contents(KSSINCDIR . "_config.php");

	if ($HY_cb3e308afc289b0a04 != "") {
		if (md5($HY_ee67ca310edf378f0f) != MYSQLBAKPASSWORD) {
			hy_bd307d155f057feb55("旧的安全接口密码错误");
		}

		$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "MYSQLBAKPASSWORD", md5($HY_cb3e308afc289b0a04));
	}

	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "ADMINWEBNAME", $HY_3b55fcaf7fe851dace);
	$HY_313e62709616f896c9 = hy_8f13044a7f351d9cf5($HY_313e62709616f896c9, "RSACRYPT", $HY_193e367f20951dc03a);
	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "RSA_PRVKEY", $HY_1c5757434271a6705b);
	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "RSA_MODULES", $HY_cb885a32a76fabcdd8);
	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "WEBID", $HY_4fee8720a8d58a7444);
	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "PRV_SVRLIC", $HY_bd1dc3d092038b920d);
	$HY_313e62709616f896c9 = hy_8f13044a7f351d9cf5($HY_313e62709616f896c9, "ZPAGESIZE", $HY_1d492816382b00c5bf);
	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "ICPNUM", $HY_022fd80dddfe8b2674);
	$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "HOMEPAGEGOTO", $HY_fe968a7ef1d6a72e48);
	$HY_313e62709616f896c9 = hy_8f13044a7f351d9cf5($HY_313e62709616f896c9, "BINDIP", $HY_0cea4699ba4df4dbd4);

	if (SVRID == 1) {
		if ($HY_39cebec707a2ad5f13 != "") {
			$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "QQMAILPASSWORD", $HY_39cebec707a2ad5f13);
		}

		$HY_313e62709616f896c9 = hy_8f13044a7f351d9cf5($HY_313e62709616f896c9, "SENDMAILMODE", $HY_9c886e6ce9b855911a);
		$HY_313e62709616f896c9 = hy_8f13044a7f351d9cf5($HY_313e62709616f896c9, "BAKDATAMODE", $HY_77fa6ea386719e3cb2);
		$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "QQMAIL", $HY_9f5ca17f37f88cc881);

		if ($HY_eba4bcba1a32261e83 == "") {
			$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "QQMAIL2", $HY_9f5ca17f37f88cc881);
		}
		else {
			$HY_313e62709616f896c9 = hy_b862aa060ee8a3fd14($HY_313e62709616f896c9, "QQMAIL2", $HY_eba4bcba1a32261e83);
		}
	}

	$HY_f496b740b2cd030e7e = "";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_tb_config", $HY_0ccc0f3f98ce3ff46a, "id=1", "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		if (file_put_contents(KSSINCDIR . "_config.php", $HY_313e62709616f896c9)) {
			hy_bd307d155f057feb55("参数设置已保存");
		}

		hy_bd307d155f057feb55("更新配置文件kss_inc/_config.php失败（参数设置已保存到数据库）");
	}
	else {
		hy_bd307d155f057feb55("参数设置保存失败" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}
}
else if ($HY_d762a272713d62924f == "testmail") {
	if (SENDMAILMODE == 0) {
		hy_bd307d155f057feb55("你还没有开启邮件功能！");
	}

	include (KSSINCDIR . "sendmail.php");
	$HY_057527a20069957dae = "测试邮件";
	$HY_7124ab1200376460c9 = "<html><head><title>测试邮件</title><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'></head><body><p>如果你收到这封邮件表示邮件功能正常</p></body></html>";
	$HY_fadcad242886cbf284 = QQMAIL2;
	$HY_173d86697f24ffa1ee = kk_sendmail($HY_057527a20069957dae, $HY_7124ab1200376460c9, $HY_fadcad242886cbf284, QQMAIL, QQMAILPASSWORD, "");

	if ($HY_173d86697f24ffa1ee === true) {
		hy_bd307d155f057feb55("ok");
	}

	hy_bd307d155f057feb55($HY_173d86697f24ffa1ee);
}

$HY_b0a23355aa9ae9f34d = "系统设置";
include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
$HY_081138c9846bc53e71 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_config where `id`=1");

if (empty($HY_081138c9846bc53e71)) {
	hy_bd307d155f057feb55("读取数据库中的系统配置出错，请进高级管理，清理优化修复数据库中修复kss_tb_config表");
}
?>
<!--
WebId:<?php echo WEBID?>
WebLic:<?php echo WEBLIC?>
HOSTA:<?php echo HOST1_DOMAIN?>
HOSTB:<?php echo HOST2_DOMAIN?>
MD5KEY:<?php echo MD5KEY?>
HTTPKEY:<?php echo HTTPKEY?>
LICTYPE:<?php echo LICTYPE?>
-->



<script type="text/javascript">
function loadsyssetui(idiv){
if(idiv=='0'){
$("#mailtr1").hide();
$("#mailtr2").hide();
$("#mailtr3").hide();
}else if(idiv=='1'){
$("#mailtr1").hide();
$("#mailtr2").show();
$("#mailtr3").show();
}else{
$("#mailtr1").show();
$("#mailtr2").show();
$("#mailtr3").show();
}
}
$(document).ready(function() {
loadsyssetui($("input[name='SENDMAILMODE']:checked").val());
$("input[name='SENDMAILMODE']").bind("click",function(){
loadsyssetui($(this).val());
});
$("#submitsysset").bind("click",function(e){
Mouse(e);
});
$("#sendmailtest").bind("click",function(e){
Mouse(e);
var ourl="admin_sysset.php?action=testmail&isajax=1";
$.ajax({
url: ourl,
cache: false,
success: function(html){
if(html=='ok'){
mview("邮件发送成功，请查收。");
}else{
malert(html);
}
},
error:function(XMLHttpRequest, textStatus, errorThrown) {
alert(ourl)
} 
});

});
$("#MYSQLBAKPASSWORD").bind("click",function(){$("#oldpassword").show();});
$('#admin_sysset').ajaxForm({
beforeSubmit:function (arr, $form, options) {
return true;
},
success:function (responseText, statusText, xhr, $form) {
if(responseText=='设置已保存'){
mview("设置已保存。",-30,-80);
}else{
malert(responseText);
}
},
error:function(){isclickadd=0;alert("error!");}
});
});
</script>

<form id="admin_sysset" action="?action=save" method="post"> 
<div class="edittable">
<table class="edittable_th4" width="97%" height="35" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width=8 class="edittable_th1">&nbsp;</td>
<td width=150  class="edittable_th2">系统参数设置</td>
<td width=8 class="edittable_th3">&nbsp;</td>
<td>&nbsp;</td>
<td width=6 class="edittable_th5">&nbsp;</td>
</tr>
</table><br><br>

<div>
<input type="hidden" name="isajax" value="1" />
<table border=0  cellpadding="10" cellspacing="10" >
<tr >
<td align=right>&nbsp;</td>
<td align=left><span style="color:#0000ff;font-weight:700">如若有备服，主服和备服的系统参数设置需要手动设置成一样的</span>
</td>
</tr>
<tr id="oldpassword" malt="要修改安全接口密码必须输入旧的">
<td align=right>旧的安全接口密码</td>
<td align=left colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*要修改安全接口密码必须效验旧的安全接口密码，请输入旧的安全接口密码，不修改请留空<br>
<input class="longinput" type="password" maxlength="18" name="MYSQLBAKPASSWORD0" id="MYSQLBAKPASSWORD0" value='' /> 忘记旧的安全接口密码，请手工修改kss_inc/_config.php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;里常量MYSQLBAKPASSWORD的值改成9a361ed860ec2617da5af72079594a21，此时安全接口密码为abc12345678
</td>
</tr>
<tr malt="自动备份接口、同步数据所需要的密码，主服和备服的必须相同">
<td align=right>新的安全接口密码</td>
<td align=left><input class="longinput" type="password" maxlength="18" name="MYSQLBAKPASSWORD" id="MYSQLBAKPASSWORD" value='' /> *该密码主服和备服必须相同，不修改请留空
</td></tr>
<tr>
<td align=right malt='防止xss攻击盗用cookies或sessionID'>登入安全绑定正在使用的IP</td> 
<td align=left>
<input type=radio value='1' name="BINDIP" id="BINDIP_1"<?php echo BINDIP == 1 ? " checked" : "";?>><label for="BINDIP_1" >是</label>&nbsp;&nbsp;<input type=radio value='0' name="BINDIP" id="BINDIP_0"<?php echo BINDIP == 0 ? " checked" : "";?>><label for="BINDIP_0">否</label>
</td>
</tr>
<tr malt="网站后台登陆页面标题">
<td align=right>网站标题</td>
<td align=left><input class="longinput" type="text" maxlength="18" name="ADMINWEBNAME" id="ADMINWEBNAME" value='<?php echo $HY_081138c9846bc53e71["s_webtitle"];?>' />
</td></tr>
<?php if(SVRID==1){ ?>
<tr>
<td align=right malt='数据库自动备份'>自动备份数据库</td> 
<td align=left>
<input type=radio value='0' name="BAKDATAMODE" id="BAKDATAMODE_0"<?php echo $HY_081138c9846bc53e71["s_bakmode"] == 0 ? " checked" : "";?>><label for="BAKDATAMODE_0" >不</label>
&nbsp;&nbsp;<input type=radio value='1' name="BAKDATAMODE" id="BAKDATAMODE_1"<?php echo $HY_081138c9846bc53e71["s_bakmode"] == 1 ? " checked" : "";?>><label for="BAKDATAMODE_1" malt='本地备份指将数据库备服到你网站目录kss_logs/databak里'>只本地备份</label>
&nbsp;&nbsp;<input type=radio value='2' name="BAKDATAMODE" id="BAKDATAMODE_2"<?php	echo !hy_8ea23c5626d65adda5("curl_init") || !hy_8ea23c5626d65adda5("curl_exec") || !hy_8ea23c5626d65adda5("fsockopen") ? " disabled" : ($HY_081138c9846bc53e71["s_bakmode"] == 2 ? " checked" : "");?>><label for="BAKDATAMODE_2" >本地备份，并发送到QQ邮箱</label>
</td></tr>
<tr>
<td align=right malt='客户通过售卡系统购卡成功后，发送卡号给客户QQ邮箱'>订单发送邮件方式</td>
<td align=left>
<input type="button" class="submitbtnn" id="sendmailtest" value="发送邮件测试（请先保存设置）"><br>
<input type=radio value='0' name="SENDMAILMODE" id="SENDMAILMODE_0\"<?php echo $HY_081138c9846bc53e71["s_sendmailmode"] == 0 ? " checked" : "";?>><label for="SENDMAILMODE_0" malt='如果服务器PHP不支持fsockopen和curl_init，就只能选择此项关闭邮件发送功能'>不发送邮件</label>
&nbsp;&nbsp;<input type=radio value='1' name="SENDMAILMODE" id="SENDMAILMODE_1"<?php echo !hy_8ea23c5626d65adda5("fsockopen") ? " disabled" : ($HY_081138c9846bc53e71["s_sendmailmode"] == 1 ? " checked" : "");?>><label for="SENDMAILMODE_1" malt='如果服务器PHP支持fsockopen，选此项会用phpmailer的smtp发送邮件'>fsockopen发送</label>
</td></tr>
<tr id='mailtr2' malt="用于发送系统邮件的邮箱帐号。">
<td align=right>发送邮箱</td>
<td align=left><input class="longinput" type="text" maxlength="28" name="QQMAIL" id="QQMAIL" value='<?php echo $HY_081138c9846bc53e71["s_sendmail"];?>' /> 
</td></tr>
<tr id='mailtr3' malt="用于发送系统邮件的QQ邮箱密码">
<td align=right>发送邮件帐号的密码</td>
<td align=left><input class="longinput" type="password" maxlength="18" name="QQMAILPASSWORD" id="QQMAILPASSWORD" value='<?php 
if ($HY_081138c9846bc53e71["s_sendmailpassword"] != QQMAILPASSWORD) {
	echo $HY_081138c9846bc53e71["s_sendmailpassword"];
}?>' /> *不修改请留空，如打开页面发现有数据表示缓存和数据库里的密码不一样需要重新保存密码
</td></tr>
<tr id='mailtr2' malt="用于发送系统邮件的邮箱帐号。">
<td align=right>数据库备份邮箱</td>
<td align=left><input class="longinput" type="text" maxlength="28" name="QQMAIL2" id="QQMAIL2" value='<?php echo $HY_081138c9846bc53e71["s_recvmail"];?>' />  *如果是Linux系统的话不要和发送邮箱相同
</td></tr>
<?php } ?>
<tr malt="显示于网站底部的ICP备案号，无备案号请留空">
<td align=right>网站ICP备案号</td>
<td align=left><input class="longinput" type="text" maxlength="18" name="ICPNUM" id="ICPNUM" value='<?php echo $HY_081138c9846bc53e71["s_icp"];?>' /> *如 鄂ICP备12009758号，无备案号请留空
</td></tr>
<tr malt="各种数据分页显示，每一页最多显示的行数">
<td align=right>每一页显示数据行</td>
<td align=left><input class="longinput" type="text" maxlength="2" name="ZPAGESIZE" id="ZPAGESIZE" value='<?php echo ZPAGESIZE;?>' />
</td></tr>
<tr malt="访问http://你的域名/ 时跳转到的页面URL">
<td align=right>首页跳转到的页面URL</td>
<td align=left><input class="longinput" type="text" maxlength="256" name="HOMEPAGEGOTO" id="HOMEPAGEGOTO" value='<?php echo HOMEPAGEGOTO;?>' />
</td></tr>
<tr malt="服务端身份ID，未经授权而去修改将不能升级服务端">
<td align=right>WEBID</td>
<td align=left><input class="longinput" onClick=this.select() type="text" maxlength="256" name="WEBID" id="WEBID" value='<?php echo $HY_081138c9846bc53e71["s_webid"];?>' /> <span style="font-weight:700;color:#f00">* 服务端身份ID，不要修改，不要告诉任何人</span></td></tr>
<tr malt="服务端授权码可在面板首页申请临时授权码，也可联系售后申请正式授权码">
<td align=right>服务端授权码</td>
<td align=left><input class="longinput" onClick=this.select() type="text" maxlength="1000" name="PRV_SVRLIC" id="PRV_SVRLIC" value='<?php echo PRV_SVRLIC;?>' /> <span style="font-weight:700;color:#f00">* 安装成功后，申请的授权码填入到此处</span>
</td></tr>
<tr malt="">
<td align=right malt="服务端数据公钥加密，客户端私钥解密，有效的防止IP劫持">启用RSA不对称算法</td>
<td align=left><input type=radio value='1' name="RSACRYPT" id="RSACRYPT_1"<?php echo $HY_081138c9846bc53e71["s_rsamode"] == 1 ? " checked" : "";?>><label for="RSACRYPT_1" >是</label>
&nbsp;&nbsp;<input type=radio value='0' name="RSACRYPT" id="RSACRYPT_0"<?php echo $HY_081138c9846bc53e71["s_rsamode"] == 0 ? " checked" : "";?>><label for="RSACRYPT_0" >否</label>  *如果你服务器运行RSA功能没有任何问题的话建议选是
</td></tr>
<tr malt="">
<td align=right>RSA私钥 Private Exp.(D)</td>
<td align=left><input class="longinput" onClick=this.select() type="text" maxlength="256" name="RSA_PRVKEY" id="RSA_PRVKEY" value='<?php echo $HY_081138c9846bc53e71["s_rsaekey"];?>'  /> * <a href="http://www.hphu.com/_soft/pan.php?id=rsatool" target=_blank>请使用RSATool工具计算获取 (256位)</a>
</td></tr>
<tr malt="请使用RSATool工具计算 Modulus(N)">
<td align=right>RSA模数 Modulus(N)</td>
<td align=left><input class="longinput" onClick=this.select() type="text" maxlength="256" name="RSA_MODULES" id="RSA_MODULES" value='<?php echo $HY_081138c9846bc53e71["s_rsankey"];?>'  /> * <a href="http://www.hphu.com/_soft/pan.php?id=rsatool" target=_blank>请使用RSATool工具计算获取 (256位)</a>
</td></tr>
</table>

</div>
<div style="padding:10px 0 10px 150px"><input type=submit id="submitsysset" class="submitbtn"  value="保存设置"></div>
</div>
</form>
</body>
</html>