<?php

function HY_da5301a1279dd7d1a1($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();

if (!defined("KSSROOTDIR")) {
	exit("Access denied to view this page!");
}

$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_304caf462284d3e426 = hy_ba8120f86a7df1aecc("sver", "gp", "int", 9);

if ($HY_040af70e369786c2e4 == "signdata") {
	ob_clean();
	$HY_c526045769477fea4c = file(KSSINCDIR . "signdata" . DIRECTORY_SEPARATOR . "_" . $HY_304caf462284d3e426 . ".php");
	$HY_2ff9a360a3216622ba = trim($HY_c526045769477fea4c[rand(1, 100)]);
	$HY_60bd60135c0169b887 = "\tsignData= “" . $HY_2ff9a360a3216622ba . "”\r\n";
	$HY_6d723edf57eb4d661a = "\tsignData := '';\r\n";
	$HY_27906bb77caf101ce7 = "\tsignData = " . YH2 . YH2 . "\r\n";
	$HY_a763d886962e3da3b4 = "\tsignData = __TEXT(" . YH2 . YH2 . ");\r\n";
	$HY_fc12e3cf6043961fb3 = 0;

	do {
		$HY_b421d06d20579ca435 = substr($HY_2ff9a360a3216622ba, $HY_fc12e3cf6043961fb3, 100);
		$HY_6d723edf57eb4d661a .= "\tsignData := signData + '" . $HY_b421d06d20579ca435 . "';\r\n";
		$HY_27906bb77caf101ce7 .= "\tsignData = signData & " . YH2 . $HY_b421d06d20579ca435 . YH2 . "\r\n";
		$HY_a763d886962e3da3b4 .= "\tsignData += __TEXT(" . YH2 . $HY_b421d06d20579ca435 . YH2 . ");\r\n";
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 100;
	} while ($HY_fc12e3cf6043961fb3 < strlen($HY_2ff9a360a3216622ba));

	echo "signData签名数据每次取得的可能会不同，不影响使用！<br>\r\n<input type=button class=submitbtn  id='copy_";
	echo hy_6bfeee86cee6e24af6(16);
	echo "' value=\"标准格式\"  onmouseover=\"toClipboard(this.id,$('#basel').html());\">\r\n<input type=button class=submitbtn  id='copy_";
	echo hy_6bfeee86cee6e24af6(16);
	echo "' value=\"易格式\"  onmouseover=\"toClipboard(this.id,$('#esdata').html());\">\r\n<input type=button class=submitbtn  id='copy_";
	echo hy_6bfeee86cee6e24af6(16);
	echo "' value=\"按键格式\"  onmouseover=\"toClipboard(this.id,$('#vbsdata').text().toString().replace(/\tsignData = signData/g,'\\r\\n\tsignData = signData'));\">\r\n<input type=button class=submitbtn  id='copy_";
	echo hy_6bfeee86cee6e24af6(16);
	echo "' value=\"VB格式\"  onmouseover=\"toClipboard(this.id,$('#vbsdata').text().toString().replace(/\tsignData = signData/g,'\\r\\n\tsignData = signData'));\">\r\n<input type=button class=submitbtn  id='copy_";
	echo hy_6bfeee86cee6e24af6(16);
	echo "' value=\"VC格式\"  onmouseover=\"toClipboard(this.id,$('#vcsdata').html());\">\r\n<input type=button class=submitbtn  id='copy_";
	echo hy_6bfeee86cee6e24af6(16);
	echo "' value=\"Delphi格式\"  onmouseover=\"toClipboard(this.id,$('#delphisdata').html());\"></span><br>\r\n<textarea style=\"width:570px;height:80px\" id=\"viewtbase\">signData=\"";
	echo $HY_2ff9a360a3216622ba;
	echo "\"</textarea>\r\n<textarea style=\"display:none\" id=basel>";
	echo $HY_6d723edf57eb4d661a;
	echo "</textarea>\r\n<textarea style=\"display:none\" id=delphisdata>";
	echo $HY_6d723edf57eb4d661a;
	echo "</textarea>\r\n<textarea style=\"display:none\" id=vbsdata>";
	echo $HY_27906bb77caf101ce7;
	echo "</textarea>\r\n<textarea style=\"display:none\" id=vcsdata>";
	echo $HY_a763d886962e3da3b4;
	echo "</textarea>\r\n<textarea style=\"display:none\" id=esdata>";
	echo $HY_60bd60135c0169b887;
	echo "</textarea>\r\n";
	exit();
}

if ($HY_040af70e369786c2e4 == "del") {
	hy_af470935131a2269b8();

	if ($HY_825ad51e000ddc6ca5["level"] != 9) {
		hy_bd307d155f057feb55("只有管理员才可以删除软件");
	}

	$HY_2823261ee6c1283e3f = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_2823261ee6c1283e3f)) {
		hy_bd307d155f057feb55("你要删除的软件好像不正在");
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where `softid`=" . $HY_c5aaf359b892dfe165, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("清理折扣表kss_tb_agentprice出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_order where `softid`=" . $HY_c5aaf359b892dfe165, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("清理订单表kss_tb_order出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_keyset where `softid`=" . $HY_c5aaf359b892dfe165, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("清理卡类表kss_tb_keyset出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	$HY_376d53f8e96f680392 = array();
	$HY_376d53f8e96f680392[] = "`kss_z_user_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
	$HY_376d53f8e96f680392[] = "`kss_z_key_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
	$HY_376d53f8e96f680392[] = "`kss_z_user_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "_recycle`";
	$HY_376d53f8e96f680392[] = "`kss_z_key_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "_recycle`";
	$HY_376d53f8e96f680392[] = "`kss_z_log_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
	$HY_376d53f8e96f680392[] = "`kss_z_client_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
	$HY_376d53f8e96f680392[] = "`kss_z_cz_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("drop table if exists " . implode(",", $HY_376d53f8e96f680392), "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("删除会员数据表kss_z_*出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("清理软件表kss_tb_soft出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	hy_bd307d155f057feb55("delok");
}

$HY_430b6b705d3c655fe1 = array(
	"USOFT" => array("正常", "停止使用", "禁止注册帐号", "禁止用户充值", "禁止注册帐号和充值"),
	"KSOFT" => array("正常", "停止使用", "禁止新卡号激活")
	);
$HY_04de02af3fd6e88033 = array("USOFT" => "用户名+密码登陆", "KSOFT" => "注册卡号登陆");
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` in";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_tb_soft`  ";
$HY_d0b9bf10498fa2c92f = array();
$HY_c3249a3797396973c0[] = " `pid`=" . $HY_825ad51e000ddc6ca5["pid"];
$HY_672d06c58fe042d1f1 = "";

if (!empty($HY_c3249a3797396973c0)) {
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_c3249a3797396973c0);
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_e42b2c2aebb697a9ac = hy_ba8120f86a7df1aecc("recordnum", "gp", "int", 0);

if ($HY_bb9a6b473cb68af21d == 1) {
	$HY_e677c007953bcbb522 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b($HY_feebf8e7531b580b46 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1);
	$HY_e42b2c2aebb697a9ac = $HY_e677c007953bcbb522["tnum"];
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_dd43036ba01064c085["recordnum"] = $HY_e42b2c2aebb697a9ac;
$HY_55b549aae5bc4d7185 = abs(floor(($HY_e42b2c2aebb697a9ac / ZPAGESIZE) * -1));
$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_c75bbf18eded470be7 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_dbaa2d79a00983d5e1 = "";

if (!empty($HY_c75bbf18eded470be7)) {
	foreach ($HY_c75bbf18eded470be7 as $HY_061be3c622b71eaf55 ) {
		$HY_dbaa2d79a00983d5e1 .= $HY_061be3c622b71eaf55["id"] . ",";
	}

	$HY_dbaa2d79a00983d5e1 = substr($HY_dbaa2d79a00983d5e1, 0, strlen($HY_dbaa2d79a00983d5e1) - 1);
}

$HY_bc854a58778efeb1d8 = false;
$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();

if ($HY_dbaa2d79a00983d5e1 != "") {
	$HY_b52b0b91dfe2f1d7ab .= "(" . $HY_dbaa2d79a00983d5e1 . ")";
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n\r\n$(\"[delid]\").css('cursor','pointer').bind('click',function(){\r\nvar tid=$(this).attr(\"delid\");\r\nvar thref='admin_soft.php?action=softlist&isajax=1&op=del&softid='+tid;\t\r\nvar tlevel=\t";
echo $HY_825ad51e000ddc6ca5["level"];
echo ";\t\r\n\r\nif(tlevel<8){\r\nmalert('无权限删除软件!');\r\nreturn false;\r\n}\r\nmalert('删除软件操作不可恢复，为防意外请做好数据库备份工作!<br>是否真的要删除该软件？','警告',500,60,function(){\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='delok'){\r\n$(\"#trsoftid\"+tid).remove();\t\r\nmalert('软件删除成功！');\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n$(\"#getsign\").bind(\"click\",function(){\r\n$.ajax({\r\nurl: './admin_soft.php?action=softlist&op=signdata&isajax=1&sver=1&ver=2',\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,8)=='signData'){\r\nmalert(html,'9.4和之前旧版本签名数据，请单击不同按钮可获取相应语言格式化后的签名数据',620,180);\r\n}else{\r\nmalert('取签名数据出错<br>'+html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nmalert('err');\r\n} \r\n});\t\r\n});\r\n$(\"#getsign2\").bind(\"click\",function(){\r\n$.ajax({\r\nurl: './admin_soft.php?action=softlist&op=signdata&isajax=1&sver=9&ver=2',\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,8)=='signData'){\r\nmalert(html,'9.5和新版本签名数据，请单击不同按钮可获取相应语言格式化后的签名数据',620,180);\r\n}else{\r\nmalert('取签名数据出错<br>'+html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nmalert('err');\r\n} \r\n});\t\r\n});\r\n\r\n});\r\n</script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td><td style=\"background:#f6f6f6;padding:5px 0\" align=center width=220><input malt=\"9.5之前版本的客户端签名数据\" title=\"9.5之前版本的客户端签名数据\" type=button class=submitbtn id=\"getsign\" value=\"旧签名数据\" /> <input malt=\"9.5和9.5+版本的客户端签名数据\" title=\"9.5和9.5+版本的客户端签名数据\" type=button class=submitbtn id=\"getsign2\" value=\"新签名数据\" /></td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"软件ID\" width=50>软件ID</td>\r\n<td>软件名</td>\r\n<td>模式</td>\r\n<td>软件编号</td>\r\n<td>软件密钥</td>\r\n<td>软件状态</td>\r\n<td width=\"80\">操作</td>\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr class=trd><td colspan=9>没有软件，请先添加软件</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		$HY_970be7709f584ff59c["softname"] = hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["softname"]);
		$HY_970be7709f584ff59c["softkey"] = hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["softkey"]);
		echo "<tr class=\"trd\" id=\"trsoftid";
		echo $HY_970be7709f584ff59c["id"];
		echo "\">\r\n<td style=\"font-size:16px;color:#00f;font-weight:700\">";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["softname"];
		echo "</td>\r\n<td>";
		echo $HY_04de02af3fd6e88033[$HY_970be7709f584ff59c["softmode"]];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["softcode"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["softkey"];
		echo "</td>\r\n<td>";
		echo $HY_430b6b705d3c655fe1[$HY_970be7709f584ff59c["softmode"]][$HY_970be7709f584ff59c["softstatus"]];
		echo "</td>\r\n<td>\r\n<a href=\"javascript:void(0)\"  onclick=\"dwin('soft_set_";
		echo $HY_970be7709f584ff59c["id"];
		echo "','";
		echo $HY_970be7709f584ff59c["softname"];
		echo "参数设置','admin_soft.php?action=addsoft&softid=";
		echo $HY_970be7709f584ff59c["id"];
		echo "')\"><img malt=\"软件参数设置\" src=\"";
		echo INSTALLPATH;
		echo "kss_inc/images/b_edit.png\" ></a>";

		if ($HY_825ad51e000ddc6ca5["level"] == 9) {
			echo "&nbsp;&nbsp;<a href=\"javascript:void(0)\"  onclick=\"dwin('user_report_";
			echo $HY_970be7709f584ff59c["id"];
			echo "','";
			echo $HY_970be7709f584ff59c["softname"];
			echo "注册卡报表','admin_key.php?action=report&softid=";
			echo $HY_970be7709f584ff59c["id"];
			echo "')\"><img malt=\"查看该软件注册卡的使用报表\" src=\"";
			echo INSTALLPATH;
			echo "kss_inc/images/b_calendar.png\"></a>\r\n&nbsp;&nbsp;<img  delid=\"";
			echo $HY_970be7709f584ff59c["id"];
			echo "\" malt=\"删除该软件\" src=\"";
			echo INSTALLPATH;
			echo "kss_inc/images/bd_drop.png\">";
		}

		echo "</td>\r\n</tr>\r\n";
	}
}

echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
