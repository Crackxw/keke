<?php

function HY_79c1ef1518df40b817($HY_fc12e3cf6043961fb3 = 1)
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
$HY_65b200380dde97af08 = array(0 => "后台提卡", 1 => "零售提卡", 2 => "手动发卡", 5 => "上级代充", 6 => "退卡返款", 20 => "自助充值初始", 21 => "自助充值未付款", 22 => "自助充值已付款", 23 => "自助充值已发货", 24 => "自助充值完成");
$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", 0);
$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "gp", "sql", "");
$HY_9a00058d39fe9685ab = hy_ba8120f86a7df1aecc("optype", "gp", "int", 99);
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` in";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_tb_log_agentrmb` ";
$HY_a17b577142792dc87b = array();
$HY_e6202387a3a05125ed = array();
$HY_4e4d052f21ae70d485 = 0;

if ($HY_040af70e369786c2e4 == "delrmblog") {
	hy_af470935131a2269b8();

	if ($HY_825ad51e000ddc6ca5["level"] != 9) {
		hy_bd307d155f057feb55("只有管理员才可以执行此操作！");
	}

	$HY_8da9227be01bf3d942 = hy_ba8120f86a7df1aecc("deltype", "gp", "int", 30);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_agentrmb` where `addtime`<" . (time() - (86400 * $HY_8da9227be01bf3d942)), "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("删除" . $HY_8da9227be01bf3d942 . "天前的财务日志出错。" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	hy_bd307d155f057feb55("删除" . $HY_8da9227be01bf3d942 . "天前的财务日志成功,你可能需要刷新页面.");
}

$HY_b6332be20f8441b897 = array();
$HY_bc27b6e5d0bd4ac026 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`username`,`level`,`pmid` from `kss_tb_manager` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and isdel=0 order by level Desc");

foreach ($HY_bc27b6e5d0bd4ac026 as $HY_970be7709f584ff59c ) {
	if ($HY_970be7709f584ff59c["level"] < 8) {
		$HY_4e4d052f21ae70d485 = 1;
	}

	$HY_a17b577142792dc87b[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["username"];
	if (($HY_825ad51e000ddc6ca5["level"] == 7) && ($HY_825ad51e000ddc6ca5["id"] == $HY_970be7709f584ff59c["pmid"])) {
		$HY_b6332be20f8441b897[] = $HY_970be7709f584ff59c["id"];
	}

	if ($HY_825ad51e000ddc6ca5["id"] == $HY_970be7709f584ff59c["id"]) {
		$HY_b6332be20f8441b897[] = $HY_970be7709f584ff59c["id"];
	}
}

$HY_392b874fcf56aac11c = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`softname` from `kss_tb_soft` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

foreach ($HY_392b874fcf56aac11c as $HY_970be7709f584ff59c ) {
	$HY_e6202387a3a05125ed[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["softname"];
}

$HY_c3249a3797396973c0 = array();

if ($HY_7e3958ca51847ad2e2 != "") {
	$HY_c3249a3797396973c0[] = " `ordernum`='" . $HY_7e3958ca51847ad2e2 . "'";
	$HY_dd43036ba01064c085["ordernum"] = $HY_7e3958ca51847ad2e2;
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_c3249a3797396973c0[] = " `managerid`=" . $HY_825ad51e000ddc6ca5["id"];
}
else if ($HY_825ad51e000ddc6ca5["level"] == 7) {
	if ($HY_a49db761d2702b25cf == 0) {
		$HY_a49db761d2702b25cf = -1;
	}

	if (0 < $HY_a49db761d2702b25cf) {
		if (!in_array($HY_a49db761d2702b25cf, $HY_b6332be20f8441b897)) {
			hy_bd307d155f057feb55("你无权查看该帐号日志1", 1);
		}

		$HY_c3249a3797396973c0["managerid"] = " `managerid`=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_a49db761d2702b25cf == -1) {
		$HY_28e887b91338c2052b = implode(",", $HY_b6332be20f8441b897);
		$HY_c3249a3797396973c0["managerid"] = " `managerid` in(" . $HY_28e887b91338c2052b . ") ";
	}
}
else {
	$HY_b6332be20f8441b897 = array();

	foreach ($HY_bc27b6e5d0bd4ac026 as $HY_970be7709f584ff59c ) {
		$HY_b6332be20f8441b897[] = $HY_970be7709f584ff59c["id"];
	}

	$HY_cb346a82a59c9c10d5 = implode(",", $HY_b6332be20f8441b897);

	if ($HY_a49db761d2702b25cf == 0) {
		$HY_a49db761d2702b25cf = -1;
	}

	if (0 < $HY_a49db761d2702b25cf) {
		if (!in_array($HY_a49db761d2702b25cf, $HY_b6332be20f8441b897)) {
			hy_bd307d155f057feb55("你无权查看该帐号日志2", 1);
		}

		$HY_c3249a3797396973c0["managerid"] = " `managerid`=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_a49db761d2702b25cf == -1) {
		$HY_28e887b91338c2052b = implode(",", $HY_b6332be20f8441b897);
		$HY_c3249a3797396973c0["managerid"] = " `managerid` in(" . $HY_cb346a82a59c9c10d5 . ") ";
	}
}

$HY_dd43036ba01064c085["managerid"] = $HY_a49db761d2702b25cf;

if ($HY_9a00058d39fe9685ab != 99) {
	$HY_dd43036ba01064c085["optype"] = $HY_9a00058d39fe9685ab;
	$HY_c3249a3797396973c0[] = " `optype`=" . $HY_9a00058d39fe9685ab;
}

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

$HY_dd43036ba01064c085["recordnum"] = $HY_e42b2c2aebb697a9ac;
$HY_55b549aae5bc4d7185 = abs(floor(($HY_e42b2c2aebb697a9ac / ZPAGESIZE) * -1));
$HY_c75bbf18eded470be7 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
echo "<!-- ";
echo $HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE;
echo " -->";
$HY_dbaa2d79a00983d5e1 = "";

if (!empty($HY_c75bbf18eded470be7)) {
	foreach ($HY_c75bbf18eded470be7 as $HY_061be3c622b71eaf55 ) {
		$HY_dbaa2d79a00983d5e1 .= $HY_061be3c622b71eaf55["id"] . ",";
	}

	$HY_dbaa2d79a00983d5e1 = substr($HY_dbaa2d79a00983d5e1, 0, strlen($HY_dbaa2d79a00983d5e1) - 1);
}

$HY_bc854a58778efeb1d8 = false;

if ($HY_dbaa2d79a00983d5e1 != "") {
	$HY_b52b0b91dfe2f1d7ab .= "(" . $HY_dbaa2d79a00983d5e1 . ")";
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab . " order by id asc");
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\".vieworder\").bind(\"click\",function(e){\r\nMouse(e);\n$(\".malertboxclosebtn\").click();\r\nif($(this).text()=='')return false;\r\nif('自助充值'==$(this).prev().prev().text().substr(0,4)){\r\nmview('这是一个充值订单号!');\r\n}else{\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'订单'+$(this).text()+'的注册卡号',600,300);\t\r\n}\r\n});\r\n\r\n$(\"#delrmblog\").bind(\"click\",function(){\r\nmalert(\"./admin_logs.php?action=agentrmb&isajax=1&op=delrmblog&deltype=\"+$(\"#deltype\").val(),'清理财务日志提示');\r\n});\r\n\r\n$(\"span[ekey]\").bind(\"click\",function(){\r\nvar keyinfo=$(this).attr(\"ekey\");\r\nmalert(\"<textarea style='font-family:Courier New;width:370px;height:200px;\'>\"+keyinfo.replace(/,/g,\"\\r\\n\")+\"</textarea>\",'退卡的卡号前十位',400,230);\t\r\n});\r\n});\r\n</script>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle><form action=\"?action=agentrmb\" method=\"post\" id=\"agentrmbf\" name=\"agentrmbf\">\r\n";

if (6 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<select id='managerid' name='managerid'>";
	echo "<option value=-1>下列所有帐号</option>";

	foreach ($HY_bc27b6e5d0bd4ac026 as $HY_fbf95ae64ebaaaa6fc ) {
		if ($HY_fbf95ae64ebaaaa6fc["level"] < 8) {
			if (in_array($HY_fbf95ae64ebaaaa6fc["id"], $HY_b6332be20f8441b897)) {
				echo "<option value=" . $HY_fbf95ae64ebaaaa6fc["id"];

				if ($HY_a49db761d2702b25cf == $HY_fbf95ae64ebaaaa6fc["id"]) {
					echo " selected";
				}

				echo ">" . $HY_fbf95ae64ebaaaa6fc["username"] . "[" . $HY_3fb3415441688353e5[$HY_fbf95ae64ebaaaa6fc["level"]] . "]</option>";
			}
		}
		else if ($HY_fbf95ae64ebaaaa6fc["level"] <= $HY_825ad51e000ddc6ca5["level"]) {
			echo "<option value=" . $HY_fbf95ae64ebaaaa6fc["id"];

			if ($HY_a49db761d2702b25cf == $HY_fbf95ae64ebaaaa6fc["id"]) {
				echo " selected";
			}

			echo ">" . $HY_fbf95ae64ebaaaa6fc["username"] . "[" . $HY_3fb3415441688353e5[$HY_fbf95ae64ebaaaa6fc["level"]] . "]</option>";
		}
	}

	echo "</select>";
}

echo "类型：<select name=\"optype\"><option value=99>----不限----</option>\r\n";

foreach ($HY_65b200380dde97af08 as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
	echo "<option value=" . $HY_5380a89366e616d954;

	if ($HY_9a00058d39fe9685ab == $HY_5380a89366e616d954) {
		echo " selected";
	}

	echo ">" . $HY_39f33d52374bdc42f7 . "</option>";
}

echo "<select>\r\n订单号：<input type=text id=\"ordernum\" name=\"ordernum\" class=longinput value=\"";
echo $HY_7e3958ca51847ad2e2;
echo "\"><input type=submit class=submitbtn value=\"查询\">\r\n";

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	echo "　　　　　　　　　　　<select name='deltype' id=\"deltype\">\r\n<option value=1>1天前的财务日志</option>\r\n<option value=7>7天前的财务日志</option>\r\n<option value=30>30天前的财务日志</option>\r\n<option value=60>60天前的财务日志</option>\r\n<option value=90>90天前的财务日志</option>\r\n<option value=0>所有财务日志</option>\r\n</select><input type=button id='delrmblog' class='submitbtn' value='清理日志'>\r\n\r\n\r\n";
}

echo "</form></td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"财务日志ID号\">ID</td>\r\n<td malt=\"记录产生的日期\">日期</td>\r\n<td malt=\"后台提卡：代理直接在后台提卡成功的扣款操作<br>零售提卡：代理通过售卡站售卡成功扣款的操作<br>手动发卡：在订单列表，代理对零售未扣余额的订单执行手动发卡时产生的余额变动操作<br>自助充值：代理通过在线充值功能对余额进行充值的操作<br>作者直充：作者通过后台帐号管理对代理余额进行修改的操作\">类型</td>\r\n<td malt=\"当有订单号时，该栏表示的是订单相对应的软件名，如果软件名为0可能是该软件已经被删除了。\">软件</td>\r\n<td malt=\"所有提卡操作都会产生一个订单号，可到订单列表查询该订单详情\">订单号</td>\r\n<td malt=\"执行此操作的后台人员，零售提卡时操作员为0\">操作员</td>\r\n<td malt=\"余额被变动的帐号\">帐号</td>\r\n<td malt=\"代理余额在本次变动前的值\">变动前金额</td>\r\n<td malt=\"代理余额变动的值，正数为加款，负数为扣款\">变动金额</td>\r\n<td malt=\"有红色文本的表示实际上未扣款，因为都是先记录日志后扣款，在发现扣款失败后，会在本日志里加一红色批注\">备注</td>\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr class=trd><td colspan=10>没有财务记录</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class=\"trd\">\r\n<td>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>\r\n<td>";
		echo hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["addtime"]);
		echo "</td>\r\n<td>";
		echo $HY_65b200380dde97af08[$HY_970be7709f584ff59c["optype"]];
		echo "</td>\r\n<td>";
		echo isset($HY_e6202387a3a05125ed[$HY_970be7709f584ff59c["softid"]]) ? $HY_e6202387a3a05125ed[$HY_970be7709f584ff59c["softid"]] : $HY_970be7709f584ff59c["softid"];
		echo "</td>\r\n<td class=\"vieworder\">";
		echo $HY_970be7709f584ff59c["ordernum"];
		echo "</td>\r\n<td>";
		echo isset($HY_a17b577142792dc87b[$HY_970be7709f584ff59c["opmanagerid"]]) ? $HY_a17b577142792dc87b[$HY_970be7709f584ff59c["opmanagerid"]] : $HY_970be7709f584ff59c["opmanagerid"];
		echo "</td>\r\n<td>";
		echo isset($HY_a17b577142792dc87b[$HY_970be7709f584ff59c["managerid"]]) ? $HY_a17b577142792dc87b[$HY_970be7709f584ff59c["managerid"]] : $HY_970be7709f584ff59c["managerid"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["oldrmb"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["changermb"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["intro"];
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
