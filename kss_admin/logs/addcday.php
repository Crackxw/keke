<?php

function HY_85cd1ffeb01b34b905($HY_fc12e3cf6043961fb3 = 1)
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
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_16abe05a644f97a4ce = hy_ba8120f86a7df1aecc("pid", "gp", "int", 0);
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_dd43036ba01064c085["pid"] = $HY_16abe05a644f97a4ce;

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	$HY_9d637fd3761db8b7f5 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where `level`>7");
}

$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` ";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_tb_log_addcday` ";
$HY_c3249a3797396973c0 = array();

if (8 < $HY_825ad51e000ddc6ca5["level"]) {
	$HY_c3249a3797396973c0["a"] = " `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " ";
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
	$HY_b52b0b91dfe2f1d7ab .= (1 < count($HY_c75bbf18eded470be7) ? " in (" . $HY_dbaa2d79a00983d5e1 . ") order by id asc" : $HY_c72876ff38da83bee9);
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
	echo htmlspecialchars($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "</textarea>";
if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1000 < LICTYPE)) {
	echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_addcday\" action=\"?action=addcday\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">帐号PID：<input type=text name=pid value=";
	echo $HY_16abe05a644f97a4ce;
	echo "> <input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n";
}

echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n<td nowrap=\"nowrap\">日期</td>\r\n<td nowrap=\"nowrap\" >PID</td>\t\r\n<td nowrap=\"nowrap\" >操作员ID</td>\t\t\r\n<td nowrap=\"nowrap\">软件ID</td>\r\n<td nowrap=\"nowrap\" >加时天数</td>\r\n<td nowrap=\"nowrap\" >备注</td>\r\n</tr>\r\n";

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
		echo hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["addtime"], "m-d H:i:s");
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["pid"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["managerid"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["softid"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["cday"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["intro"];
		echo "&nbsp;</td>";
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
