<?php

function HY_26f880a496e6eacd0f($HY_fc12e3cf6043961fb3 = 1)
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
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_ef9449a16c3276dfc8 = hy_ba8120f86a7df1aecc("keywords", "gp", "sql", "");
$HY_ef9449a16c3276dfc8 = trim($HY_ef9449a16c3276dfc8);
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_dd43036ba01064c085["softid"] = $HY_c5aaf359b892dfe165;
$HY_dd43036ba01064c085["keywords"] = $HY_ef9449a16c3276dfc8;

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
$HY_505e9274f10eba7fe5 = "from `kss_olddata` ";
$HY_c3249a3797396973c0 = array();

if (15 < strlen($HY_ef9449a16c3276dfc8)) {
	$HY_efb701011f960a1d08 = preg_replace("/([^a-zA-Z0-9\\n])/", "", $HY_ef9449a16c3276dfc8);
	$HY_efb701011f960a1d08 = str_replace("\n\n", "\n", $HY_efb701011f960a1d08);
	$HY_efb701011f960a1d08 = str_replace("\n\n", "\n", $HY_efb701011f960a1d08);
	$HY_efb701011f960a1d08 = str_replace("\n\n", "\n", $HY_efb701011f960a1d08);

	if (strlen($HY_efb701011f960a1d08) < 16) {
		hy_bd307d155f057feb55("你没输入任何卡号或输入的卡号格式非法", 1);
	}

	$HY_ffbab5c1bdd7585777 = explode("\n", $HY_efb701011f960a1d08);
	$HY_b4b62d2be760af10d4 = "";
	$HY_fc12e3cf6043961fb3 = 0;
	$HY_7ac34ab054ad66090a = array();

	foreach ($HY_ffbab5c1bdd7585777 as $HY_7e5ca80d6dacf7139a ) {
		if ((strlen($HY_7e5ca80d6dacf7139a) != 16) && (strlen($HY_7e5ca80d6dacf7139a) != 24)) {
			hy_bd307d155f057feb55("注册卡号必须是16或24位", 1);
		}

		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;

		if (ZPAGESIZE < $HY_fc12e3cf6043961fb3) {
			hy_bd307d155f057feb55("每次最多只能查询" . ZPAGESIZE . "条", 1);
		}

		$HY_b4b62d2be760af10d4 .= "'" . $HY_7e5ca80d6dacf7139a . "',";
	}

	if ($HY_b4b62d2be760af10d4 == "") {
		hy_bd307d155f057feb55("你没输入任何卡号或输入的卡号格式非法", 1);
	}

	$HY_b4b62d2be760af10d4 = substr($HY_b4b62d2be760af10d4, 0, strlen($HY_b4b62d2be760af10d4) - 1);
	$HY_c3249a3797396973c0["a"] = " `oldkey` in (" . $HY_b4b62d2be760af10d4 . ") ";
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_c3249a3797396973c0["b"] = " `agentid`=" . $HY_825ad51e000ddc6ca5["id"];
}

$HY_c3249a3797396973c0["c"] = " `softcode`=" . $HY_810d15d31408c982b2["softcode"];
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
$HY_c75bbf18eded470be7 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " order by id asc LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
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
echo "<script>\r\n$(document).ready(function() { \r\n$(\"[cls='newkey']\").bind(\"click\",function(e){\r\nMouse(e);//计算显示层的位置\r\nif(tcopy(this.innerText)){\r\nmview(\"已复制到剪贴板\");\r\n}\r\n});\r\n});\r\n</script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=v8data&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n搜索旧的注册卡号，每行一张，每次最多可查询";
echo ZPAGESIZE;
echo "张卡号<br><textarea style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"keywords\" >";
echo $HY_ef9449a16c3276dfc8;
echo "</textarea>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\">ID</td>\r\n<td nowrap=\"nowrap\">所属</td>\t\r\n<td nowrap=\"nowrap\">旧卡号</td>\t\r\n<td nowrap=\"nowrap\">新卡号</td>\t\r\n<td nowrap=\"nowrap\">状态</td>\t\t\r\n<td nowrap=\"nowrap\">属性</td>\t\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr nodata=1 class=trd><td colspan=6>没找到任何数据</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class='trd' id='trd'>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["agentid"];
		echo "</td>";
		echo "<td nowrap='nowrap' class=dwidth>";
		echo $HY_970be7709f584ff59c["oldkey"];
		echo "</td>";
		echo "<td nowrap='nowrap' class='dwidth' id='copy_" . hy_6bfeee86cee6e24af6(16) . "' class='keynum' copyt='";
		echo $HY_970be7709f584ff59c["newkey"];
		echo "'>";
		echo $HY_970be7709f584ff59c["newkey"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["ext1"] == "0" ? "未使用" : "<font color=red>已使用</font>";
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["ext2"];
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
