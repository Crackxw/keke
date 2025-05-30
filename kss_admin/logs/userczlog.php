<?php

function HY_251073869e9e12d8d8($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_9c13745205014b0b06 = array("用户注册", "用户充值", "手工操作", "推广赠送P", "推广赠送S", "修改绑定信息", "解绑机器", "充值套餐", "免费注册", "充值（充值前过期）", "批量加时");
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_ef9449a16c3276dfc8 = hy_ba8120f86a7df1aecc("keywords", "gp", "sql", "");
$HY_ef9449a16c3276dfc8 = trim($HY_ef9449a16c3276dfc8);
$HY_dd43036ba01064c085["keywords"] = $HY_ef9449a16c3276dfc8;
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_dd43036ba01064c085["softid"] = $HY_c5aaf359b892dfe165;

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_6a3062be969e92240f = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `softid`=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_6a3062be969e92240f)) {
		hy_bd307d155f057feb55("你没有该软件的授权", 1);
	}
}

$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165);
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` ";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_z_cz_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "` ";
$HY_c3249a3797396973c0 = array();

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_ef9449a16c3276dfc8 = substr($HY_ef9449a16c3276dfc8, 0, 10);
}

if (1 < strlen($HY_ef9449a16c3276dfc8)) {
	$HY_c3249a3797396973c0["a"] = " `username`='" . $HY_ef9449a16c3276dfc8 . "' ";
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_c3249a3797396973c0["a"] = " `username`=(select `czusername` from `kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "` where `czusername`='" . $HY_ef9449a16c3276dfc8 . "' and `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " limit 0,1)";
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
echo "<textarea id=viewsql>";
echo htmlspecialchars($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
echo "\r\n";
$HY_dbaa2d79a00983d5e1 = "";
$HY_c72876ff38da83bee9 = "";

if (!empty($HY_c75bbf18eded470be7)) {
	foreach ($HY_c75bbf18eded470be7 as $HY_061be3c622b71eaf55 ) {
		$HY_dbaa2d79a00983d5e1 .= $HY_061be3c622b71eaf55["id"] . ",";
		$HY_c72876ff38da83bee9 = "=" . $HY_061be3c622b71eaf55["id"];
	}

	$HY_dbaa2d79a00983d5e1 = substr($HY_dbaa2d79a00983d5e1, 0, strlen($HY_dbaa2d79a00983d5e1) - 1);
}

$HY_bc854a58778efeb1d8 = false;
$HY_011b935e6e65579d5c = "";

if ($HY_dbaa2d79a00983d5e1 != "") {
	$HY_b52b0b91dfe2f1d7ab .= (1 < count($HY_c75bbf18eded470be7) ? " in (" . $HY_dbaa2d79a00983d5e1 . ")" : $HY_c72876ff38da83bee9);
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
	echo htmlspecialchars($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "</textarea>";
echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=userczlog&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n用户名：<input class=\"longinput\" type=text name=\"keywords\" value=\"";
echo $HY_ef9449a16c3276dfc8;
echo "\">\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n";

if ($HY_810d15d31408c982b2["softmode"] == "USOFT") {
	echo "<td nowrap='nowrap' malt='用户名'>用户名</td>";
}
else {
	echo "<td nowrap='nowrap' malt='注册卡号前十位'>用户名</td>";
}

echo "<td nowrap=\"nowrap\">日期</td>\r\n<td nowrap=\"nowrap\" >变更前天数</td>\t\t\r\n<td nowrap=\"nowrap\">变更后天数</td>\r\n<td nowrap=\"nowrap\" >变更前点数</td>\r\n<td nowrap=\"nowrap\" >变更后点数</td>\r\n<td nowrap=\"nowrap\" >类型</td>\r\n<td nowrap=\"nowrap\" >备注</td>\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr nodata=1 class=trd><td colspan=9>没找到任何充值日志</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class='trd' id='trd'>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["username"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["addtime"], "m-d H:i:s");
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["oldcday"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["newcday"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["oldtimes"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["newtimes"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_9c13745205014b0b06[$HY_970be7709f584ff59c["cztype"]];
		echo "</td>";
		echo "<td nowrap='nowrap'>";

		switch ($HY_970be7709f584ff59c["cztype"]) {
		case 0:
		case 1:
		case 7:
			echo "卡号：" . $HY_970be7709f584ff59c["keys"];
			break;

		case 2:
			echo "管理手工操作";
			break;

		case 3:
			echo "子帐号：" . $HY_970be7709f584ff59c["tzxguser"];
			break;

		case 4:
			echo "父帐号：" . $HY_970be7709f584ff59c["tzxguser"];
			break;

		case 5:
			echo "旧->新：" . $HY_970be7709f584ff59c["keys"];
			break;

		case 10:
			echo $HY_970be7709f584ff59c["keys"];
			break;

		default:
			echo "&nbsp;";
			break;
		}

		echo "</td>";
		echo "</tr>\r\n";
	}
}

echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
