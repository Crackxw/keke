<?php

function HY_fa43163ee0bca70e49($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
hy_af470935131a2269b8();
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("opsubmit", "gp", "sql", "");
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165);

if (empty($HY_810d15d31408c982b2)) {
	hy_bd307d155f057feb55("软件未找到");
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_6a3062be969e92240f = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `softid`=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_6a3062be969e92240f)) {
		hy_bd307d155f057feb55("你没有该软件的授权", 1);
	}
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`='" . $HY_c3a9c60b89d91b0fa5 . "' and managerid=" . $HY_825ad51e000ddc6ca5["id"]);
}
else {
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`='" . $HY_c3a9c60b89d91b0fa5 . "'");
}

if (empty($HY_c27c05c8ec8b51c4d4)) {
	hy_bd307d155f057feb55("用户未找到");
}

if ($HY_040af70e369786c2e4 == "保存") {
	$HY_729b908f51ba85e460 = hy_ba8120f86a7df1aecc("password", "gp", "sqljs", "");
	$HY_c7be737ddc83635691 = hy_ba8120f86a7df1aecc("password2", "gp", "sqljs", "");
	$HY_32876775e494d9107a = hy_ba8120f86a7df1aecc("bdinfo", "gp", "sqljs", "");
	$HY_06bf586e2108bd445b = hy_ba8120f86a7df1aecc("keyextattr", "gp", "sqljs", "");
	$HY_95519072c712a1f22d = hy_ba8120f86a7df1aecc("cday", "gp", "num", 0);
	$HY_ae5e85877b157b2724 = hy_ba8120f86a7df1aecc("cday_add", "gp", "num", 0);
	$HY_fd266d63af4d47cce1 = hy_ba8120f86a7df1aecc("points", "gp", "int", 0);
	$HY_adfed9c2e13a3b63f8 = hy_ba8120f86a7df1aecc("linknum", "gp", "int", 1);
	$HY_2b45320da136061ada = array();
	$HY_95519072c712a1f22d = $HY_95519072c712a1f22d + $HY_ae5e85877b157b2724;
	$HY_95519072c712a1f22d = number_format($HY_95519072c712a1f22d, 2, ".", "");

	if ($HY_810d15d31408c982b2["softmode"] == "USOFT") {
		if (!($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "18")) {
			if (strlen($HY_729b908f51ba85e460) < 5) {
				hy_bd307d155f057feb55("用户密码最少5位");
			}

			$HY_0ccc0f3f98ce3ff46a["password"] = $HY_729b908f51ba85e460;
		}
	}

	$HY_0e18e05f35e171d3ae = "<script>";
	if (!($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "13")) {
		if (strlen($HY_c7be737ddc83635691) < 5) {
			hy_bd307d155f057feb55("安全密码最少5位");
		}

		$HY_0ccc0f3f98ce3ff46a["password2"] = $HY_c7be737ddc83635691;
	}

	if (!($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "15")) {
		$HY_0ccc0f3f98ce3ff46a["bdinfo"] = $HY_32876775e494d9107a;
		$HY_0e18e05f35e171d3ae .= "$(" . YH2 . "[aj='bdinfo" . $HY_c3a9c60b89d91b0fa5 . "']" . YH2 . ").val('" . htmlentities($HY_32876775e494d9107a) . "');";
	}

	if (!($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "16")) {
		$HY_0ccc0f3f98ce3ff46a["keyextattr"] = $HY_06bf586e2108bd445b;
		$HY_0e18e05f35e171d3ae .= "$(" . YH2 . "[aj='keyextattr" . $HY_c3a9c60b89d91b0fa5 . "']" . YH2 . ").val('" . $HY_06bf586e2108bd445b . "');";
	}

	if ($HY_95519072c712a1f22d < 0) {
		hy_bd307d155f057feb55("天数不能小于0");
	}

	if (PETIME <= $HY_c27c05c8ec8b51c4d4["starttime"] + ($HY_95519072c712a1f22d * 86400)) {
		hy_bd307d155f057feb55("该用户最大天数可设置为" . round((PETIME - $HY_c27c05c8ec8b51c4d4["starttime"] - 86400) / 86400, 2));
	}

	if ($HY_fd266d63af4d47cce1 < 0) {
		hy_bd307d155f057feb55("点数不能小于0");
	}

	if ($HY_adfed9c2e13a3b63f8 < 1) {
		hy_bd307d155f057feb55("通道数不能小于1");
	}

	if (!($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "12")) {
		if ($HY_c27c05c8ec8b51c4d4["endtime"] != PETIME) {
			$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_95519072c712a1f22d;
			$HY_0e18e05f35e171d3ae .= "$(" . YH2 . "[aj='cday" . $HY_c3a9c60b89d91b0fa5 . "']" . YH2 . ").text('" . $HY_95519072c712a1f22d . "');";
			$HY_77592321965a3ce182 = $HY_c27c05c8ec8b51c4d4["starttime"] + ($HY_95519072c712a1f22d * 86400);
			$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_77592321965a3ce182;
			$HY_8be0265d757dba67a7 = hy_cf2f0673819dddd4a1($HY_77592321965a3ce182, "y-m-d H:i");
			$HY_0e18e05f35e171d3ae .= "$(" . YH2 . "[aj='endtime" . $HY_c3a9c60b89d91b0fa5 . "']" . YH2 . ").text('" . $HY_8be0265d757dba67a7 . "');";
			$HY_0ccc0f3f98ce3ff46a["points"] = $HY_fd266d63af4d47cce1;
			$HY_0e18e05f35e171d3ae .= "$(" . YH2 . "[aj='points" . $HY_c3a9c60b89d91b0fa5 . "']" . YH2 . ").text('" . $HY_fd266d63af4d47cce1 . "');";
			$HY_0ccc0f3f98ce3ff46a["linknum"] = $HY_adfed9c2e13a3b63f8;
			$HY_0e18e05f35e171d3ae .= "$(" . YH2 . "[aj='linknum" . $HY_c3a9c60b89d91b0fa5 . "']" . YH2 . ").text('" . $HY_adfed9c2e13a3b63f8 . "');";
		}
	}

	$HY_0ccc0f3f98ce3ff46a = array_diff_assoc($HY_0ccc0f3f98ce3ff46a, $HY_c27c05c8ec8b51c4d4);

	if (empty($HY_0ccc0f3f98ce3ff46a)) {
		hy_bd307d155f057feb55("你未做任何修改！");
	}

	if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && isset($HY_0ccc0f3f98ce3ff46a["linknum"])) {
		hy_bd307d155f057feb55("禁止修改通道数！");
	}

	if (isset($HY_0ccc0f3f98ce3ff46a["cday"])) {
		if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && ($HY_825ad51e000ddc6ca5["level"] != 9)) {
			hy_bd307d155f057feb55("禁止修改天数！");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . $HY_c5aaf359b892dfe165 . "," . time() . "," . ($HY_0ccc0f3f98ce3ff46a["cday"] - $HY_c27c05c8ec8b51c4d4["cday"]) . ",'" . $HY_c3a9c60b89d91b0fa5 . "','" . $HY_c27c05c8ec8b51c4d4["username"] . "加时前天数：" . $HY_c27c05c8ec8b51c4d4["cday"] . "')", "notsync");

		if ($HY_173d86697f24ffa1ee !== true) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_addcday`", "notsync");
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165, $HY_0ccc0f3f98ce3ff46a, "`username`='" . $HY_c3a9c60b89d91b0fa5 . "'", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("保存时出错[执行update语句]" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	$HY_0e18e05f35e171d3ae .= "</script>";
	hy_bd307d155f057feb55("ok" . $HY_0e18e05f35e171d3ae);
}
else if ($HY_040af70e369786c2e4 == "setpub") {
	if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && ($HY_825ad51e000ddc6ca5["level"] != 9)) {
		hy_bd307d155f057feb55("服务器禁止使用公用帐号功能！");
	}

	$HY_6b0f4f461bb07afe2b = round(((PETIME - time()) / 86400) + 0.5);
	$HY_5f11076a5e5a174fa5 = PETIME - ($HY_6b0f4f461bb07afe2b * 86400);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set starttime=" . $HY_5f11076a5e5a174fa5 . ",cday=" . $HY_6b0f4f461bb07afe2b . ",endtime=" . PETIME . ",linknum=1,points=0,keyextattr='' where `username`='" . $HY_c3a9c60b89d91b0fa5 . "'", "sync");

	if ($HY_173d86697f24ffa1ee !== true) {
		hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	hy_bd307d155f057feb55("ok");
}

echo "<script>\r\nfunction closeat(){\r\n$(\".malertboxclosebtn\").click();\r\n}\r\n$(document).ready(function() {\t\r\n\r\n$('#setpubuser').bind(\"click\",function(){\r\nif(!confirm(\"注意：此操作不可逆！\\r\\n是否真的要将此帐号设为公用帐号?\"))return false; \r\nvar cdurl='./admin_key.php?action=edituser&opsubmit=setpub&isajax=1&softid=";
echo $HY_c5aaf359b892dfe165;
echo "&keys='+encodeURIComponent('";
echo $HY_c3a9c60b89d91b0fa5;
echo "');\r\n$.ajax({\r\nurl: cdurl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='ok'){\r\nwindow.setTimeout(\"closeat()\", 1);\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\t\r\n});\r\n\r\n$('#saveuser').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)!='ok'){\r\nmalert(responseText);\r\n}else{\r\n$(\"#load__script\").append(responseText.substr(2)); \r\nwindow.setTimeout(\"closeat()\", 1);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n<div id='load__script'></div>\r\n<form id=\"saveuser\" action=\"?action=edituser&isajax=1&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>用户名</td>\r\n<td align=left><input class=\"longinput\" type=\"hidden\" name=\"keys\" value=\"";
echo hy_c447d0a25ad6071dc7($HY_c27c05c8ec8b51c4d4["username"]);
echo "\" />";
echo hy_c447d0a25ad6071dc7($HY_c27c05c8ec8b51c4d4["username"]);
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>用户密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\"  name=\"password\" value=";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "18")) {
	echo YH2 . "无权查看和修改" . YH2 . " readOnly";
}
else {
	echo YH2 . htmlentities($HY_c27c05c8ec8b51c4d4["password"]) . YH2;

	if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
		echo " readOnly";
	}
}

echo " /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>安全密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"password2\" value=";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "13")) {
	echo YH2 . "无权查看和修改" . YH2 . " readOnly";
}
else {
	echo YH2 . htmlentities($HY_c27c05c8ec8b51c4d4["password2"]) . YH2;

	if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
		echo " readOnly";
	}
}

echo " ></td>\r\n</tr>\r\n<tr>\r\n<td align=right>绑定信息</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"bdinfo\"";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "15")) {
	echo " disabled";
}

echo " value=\"";
echo htmlentities($HY_c27c05c8ec8b51c4d4["bdinfo"]);
echo "\" /></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>天数</td>\r\n<td align=left><input class=\"midinput\" type=\"text\" maxlength=\"6\" name=\"cday\"";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "12")) {
	echo " disabled";
}

echo " value=\"";
echo $HY_c27c05c8ec8b51c4d4["cday"];
echo "\" />\r\n+\r\n<input style=\"width:76px\" type=\"text\" maxlength=\"6\" name=\"cday_add\"";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "12")) {
	echo " disabled";
}

echo " value=\"0\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>点数</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"points\"";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "12")) {
	echo " disabled";
}

echo " value=\"";
echo $HY_c27c05c8ec8b51c4d4["points"];
echo "\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>通道</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"4\" name=\"linknum\"";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "12")) {
	echo " disabled";
}

echo " value=\"";
echo $HY_c27c05c8ec8b51c4d4["linknum"];
echo "\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>附属性</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"keyextattr\"";
if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "16")) {
	echo " disabled";
}

echo " value=\"";
echo htmlentities($HY_c27c05c8ec8b51c4d4["keyextattr"]);
echo "\" /></td>\r\n</tr>\r\n</table></td></tr>\r\n<tr><td colspan=2 align=center>";

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<input type=button id=setpubuser class=submitbtn value=设为公用 title='点此按钮会将此帐号设为公用帐号'>&nbsp;&nbsp;";
}

echo "<input type=submit name=opsubmit class=submitbtn value=保存>&nbsp;&nbsp;<span style=\"color:#0000ff\">操作成功无提示，窗口会自动关闭</span></td></tr>\r\n</table>\r\n</form>";

?>
