<?php

function HY_58bee8d829307f3edc($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
defined("YH2") || exit("Access denied to view this page!");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_922e02ed6d3bde2c2b = array(1 => "正常登陆", 2 => "帐号过期", 3 => "帐号被锁定", 4 => "密码错误");
$HY_a05c4f0ef07e96e9bc = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_log_login where `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " order by logintime desc limit 0,5");
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from kss_tb_soft ");
require ("../kss_inc/ip_function.php");
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "g", "sql", "");

if ($HY_040af70e369786c2e4 == "datastatus") {
	ob_clean();
	$HY_6c370550d94caffe93 = array();
	$HY_6c370550d94caffe93["action"] = "mysqldatabak_down";
	$HY_6c370550d94caffe93["pwd"] = MYSQLBAKPASSWORD;
	$HY_18b7e2531219caea74 = hy_5170dc4897c581d8f2() . INSTALLPATH . hy_95ee4a70045e33eeb3() . "/admin_data.php";
	$HY_afae8eba6fbda52268 = hy_6daeecad978867d96f($HY_18b7e2531219caea74, $HY_6c370550d94caffe93, 5) . "<br>";

	if (substr($HY_afae8eba6fbda52268, 0, 8) == "curlerr:") {
		$HY_afae8eba6fbda52268 = substr($HY_afae8eba6fbda52268, 8);
	}

	hy_bd307d155f057feb55($HY_afae8eba6fbda52268);
}

$HY_afae8eba6fbda52268 = "";
$HY_73a7f26169a38e4795 = KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "databak" . DIRECTORY_SEPARATOR;
$HY_51dfbf89c1a4942f8e = glob($HY_73a7f26169a38e4795 . "*.zip");

if (!empty($HY_51dfbf89c1a4942f8e)) {
	foreach ($HY_51dfbf89c1a4942f8e as $HY_ff78aa8a3e91f69b9f ) {
		$HY_afae8eba6fbda52268 .= substr(basename($HY_ff78aa8a3e91f69b9f), 0, 16) . "备份文件大小" . round(filesize($HY_ff78aa8a3e91f69b9f) / 1024, 2) . "KB<br>";
	}
}

echo "\r\n<script>\r\nvar svrtime=";
echo time() . "001";
echo ";\r\nvar viewtimetd;\r\nfunction vtime(){\r\nvar d=new Date();\r\nsvrtime=svrtime+1000;\r\nd.setTime(svrtime);\r\nviewtimetd.text(d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds());\r\n}\r\n$(document).ready(function() {\r\nviewtimetd=$(\"#svtime\");\r\nsetInterval(\"vtime()\", 1000);\r\n\r\n\r\n$.ajax({\r\nurl: \"admin_homepage.php?action=main&isajax=1&op=datastatus\",\r\ncache: false,\r\nsuccess: function(html){\r\n$(\"#dstatus\").prepend(html); \r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n";
$HY_2097f78d3bcc852c05 = hy_eb430b8c32f4118ef7("index.php");

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	if (stripos($_SERVER["PHP_SELF"], "/" . ADMINFOLDER . "/admin_homepage") === false) {
		echo "alert(\"你修改了管理文件夹名\\r\\n\\r\\n但是kss_inc/_config.php里的相应的管理文件夹常量ADMINFOLDER未被系统自动修正\\r\\n\\r\\n请手动修正后退出系统，再重新登陆，否则自动升级时原管理目录程序不能被备份！\")\r\n";
	}

	$HY_beb32878b0a8cb7633 = 0;
	$HY_ca97f5785e19b4d36b = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from kss_tb_soft");

	if (!empty($HY_ca97f5785e19b4d36b)) {
		$HY_beb32878b0a8cb7633 = $HY_ca97f5785e19b4d36b["tnum"];
	}

	$HY_91ef38ecb1f09b1088 = 0;
	$HY_ca97f5785e19b4d36b = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from kss_tb_manager where level=6");

	if (!empty($HY_ca97f5785e19b4d36b)) {
		$HY_91ef38ecb1f09b1088 = $HY_ca97f5785e19b4d36b["tnum"];
	}

	echo "$.getScript(\"http://www.dsret.com/import/kssnotice.php?sanum=";
	echo $HY_beb32878b0a8cb7633 . "_" . $HY_91ef38ecb1f09b1088;
	echo "&version=";
	echo KSSVERSION . "&guid=" . WEBID;
	echo "\");\r\n";
}

echo "});\r\n\r\n</script>\r\n<div style=\"background-color:#f6f6f6;\">\r\n<table  border=\"0\" cellspacing=\"5\" cellpadding=\"5\" align=\"center\" width=\"100%\">\r\n<tr><td>\r\n<table  border=\"0\" cellspacing=\"5\" cellpadding=\"5\" align=\"center\" width=\"100%\">\r\n";

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	echo "<tr>\r\n<td align=right nowrap=\"nowrap\">程序开发：</td>\r\n<td align=left nowrap=\"nowrap\">布丁网络科技有限公司研下产品</td>\r\n</tr>\r\n";
}

echo "<tr>\r\n<td align=right nowrap=\"nowrap\">服务端版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo KSSVERSION;
echo "&nbsp;&nbsp;<span id=\"onlineupdate\" style=\"display:none\"></span>&nbsp;&nbsp; \r\n";
$HY_4c1a8cf463625865a9 = $_SERVER["HTTP_HOST"];
$HY_cb896d9be5d2d056d4 = strpos($HY_4c1a8cf463625865a9, ":");

if ($HY_cb896d9be5d2d056d4 !== false) {
	$HY_4c1a8cf463625865a9 = substr($HY_4c1a8cf463625865a9, 0, $HY_cb896d9be5d2d056d4);
}

if (stristr(WEBLIC . ",", "," . $HY_4c1a8cf463625865a9 . ",") === false) {
	echo "<span style='color:red;'>登记状态未能获取</span>";
}
else {
	echo "<span style='color:red;'>" . $HY_3d596d6ba84db4acb1 . "</span>";
}

if (($HY_825ad51e000ddc6ca5["level"] == 9) && ($HY_2097f78d3bcc852c05 !== true)) {
	echo "<br><span style='color:red'>" . $HY_2097f78d3bcc852c05 . "</span>";
}

echo "<br><a href='javascript:void(0)' style='color:blue' onClick=djalert() >什么是服务端登记，服务端登记常见问题请点击这里</a><script>function djalert(){malert('1、未登记的服务端在2014-11-30日前任可正常使用。<br>2、2014-11-30日后，登记过的服务端登才可以正常使用。<br>3、服务端登记不收费。<br>4、需要登记服务端的，请将你的授权域名告诉售后，由售后来操作即可。<br>5、未能即时联系到售后，你可以先自行申请临时登记 高级管理->服务端登记。<br>6、登记状态未能获取，通常是因为你使用了非授权的域名访问后台。请用授权的域名";

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	echo substr(WEBLIC, 33);
}

echo "和端口访问后台查看登记状态，切不可盲目的再登记。','服务端登记说明',650,180);}</script>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">服务器操作系统：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo PHP_OS;
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">PHP版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
//去掉版本限制
//echo 5.3 < substr(PHP_VERSION, 0, 3) ? "<font color=red>×" . PHP_VERSION . "</font>" : "<font color=green>√" . PHP_VERSION . "</font>";
echo 5.3 < substr(PHP_VERSION, 0, 3) ? "<font color=green>√" . PHP_VERSION . "</font>" : "<font color=green>√" . PHP_VERSION . "</font>";
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">IP库版本：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo hy_ddf6692b9232aa2368("255.255.255.255");
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>服务器时间：</td>\r\n<td align=left id='svtime'></td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">Curl支持：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo hy_8ea23c5626d65adda5("curl_init") && hy_8ea23c5626d65adda5("curl_exec") ? "<font color=green>√</font>" : "<font color=red>×</font>同步、支付宝担宝接口不能使用<br>如果你是VPS或自己的服务器，修改php.ini文件的设置<br>找到php_curl.dll去掉前面的【;】号，保存。<br>开始菜单->运行  输入iisreset /restart 回车重启IIS";
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right nowrap=\"nowrap\">fsockopen支持：</td>\r\n<td align=left nowrap=\"nowrap\">";
echo hy_8ea23c5626d65adda5("fsockopen") ? "<font color=green>√</font>" : "<font color=red>×</font>将不能本地发送邮件";
echo "</td>\r\n</tr>\r\n";

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	echo "<tr>\r\n<td align=right  nowrap=\"nowrap\" valign=top>数据库备份目录kss_logs/databak，状态：</td>\r\n<td align=left nowrap=\"nowrap\" id=\"dstatus\">";
	echo $HY_afae8eba6fbda52268;
	echo "</td>\r\n</tr>\r\n";
}

echo "</table>\r\n</td>\r\n\r\n<td valign=top align=left>最近登录信息<br>\r\n<table  border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"98%\">\r\n<tr><td valign=top align=left>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" width=\"400\">\r\n<tr class=\"trhead\">\r\n<td malt=\"登录日期\">日期</td>\r\n<td malt=\"登录时的用户IP\">IP</td>\r\n<td>备注</td>\r\n</tr>\r\n";

foreach ($HY_a05c4f0ef07e96e9bc as $HY_970be7709f584ff59c ) {
	echo "<tr class=\"trd\">\r\n<td>";
	echo hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["logintime"]);
	echo "</td>\r\n<td class=\"isip\">";
	echo long2ip($HY_970be7709f584ff59c["loginip"]);
	echo "</td>\r\n<td>";
	echo $HY_922e02ed6d3bde2c2b[$HY_970be7709f584ff59c["logintype"]];
	echo "</td>\r\n</tr>\r\n";
}

echo "</table>\r\n</td></tr>\r\n</table>\r\n<table   border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"98%\" style=\"margin-top:20px\">\r\n<tr><td>\r\n<ul id=kssnotice>\r\n</ul></td></tr></table>\t\r\n</td>\r\n</tr>\r\n</table>\r\n</div>\r\n</body>\r\n</html>";

?>
