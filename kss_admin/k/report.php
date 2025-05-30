<?php

function HY_a21a11dfeb1e1886aa($HY_fc12e3cf6043961fb3 = 1)
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
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", 0);

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_a49db761d2702b25cf = $HY_825ad51e000ddc6ca5["id"];
}

$HY_ab146a3ea1f0698fa4 = hy_ba8120f86a7df1aecc("cztime1", "gp", "time", "2012-01-01 00:00:00");
$HY_97c5fd32037fccef21 = hy_ba8120f86a7df1aecc("cztime2", "gp", "time", hy_cf2f0673819dddd4a1());
$HY_35732f851e97b0b746 = strtotime($HY_ab146a3ea1f0698fa4);
$HY_da6527e6ec0209ca5b = strtotime($HY_97c5fd32037fccef21);

if ($HY_da6527e6ec0209ca5b < $HY_35732f851e97b0b746) {
	hy_bd307d155f057feb55("你选择的充值日期时间段错误，前边的应该要比后边的小");
}

$HY_e45f28bd1d737f95ee = "";

if ($HY_a49db761d2702b25cf != 0) {
	$HY_e45f28bd1d737f95ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `id`=" . $HY_a49db761d2702b25cf);

	if (empty($HY_e45f28bd1d737f95ee)) {
		hy_bd307d155f057feb55("你要统计的用户未找到");
	}
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_a49db761d2702b25cf = $HY_825ad51e000ddc6ca5["id"];
	$HY_6a3062be969e92240f = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `softid`=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_6a3062be969e92240f)) {
		hy_bd307d155f057feb55("你没有该软件的授权", 1);
	}
}
else {
	$HY_a4e785fb83af20723e = array();
	$HY_b6332be20f8441b897 = array();
	$HY_d87caa1d9d90751b8f = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`username`,`level`,`pmid` from `kss_tb_manager` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and isdel=0 order by id asc");

	foreach ($HY_d87caa1d9d90751b8f as $HY_970be7709f584ff59c ) {
		$HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["username"];
		if (($HY_825ad51e000ddc6ca5["level"] == 7) && ($HY_825ad51e000ddc6ca5["id"] == $HY_970be7709f584ff59c["pmid"])) {
			$HY_b6332be20f8441b897[] = $HY_970be7709f584ff59c["id"];
		}

		if ($HY_825ad51e000ddc6ca5["id"] == $HY_970be7709f584ff59c["id"]) {
			$HY_b6332be20f8441b897[] = $HY_970be7709f584ff59c["id"];
		}
	}
}

$HY_7b7f7648d9f86d8a17 = "";

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_7b7f7648d9f86d8a17 = " and `id` in (select distinct `keygroupid` from kss_tb_agentprice where managerid=" . $HY_a49db761d2702b25cf . " and `softid`=" . $HY_c5aaf359b892dfe165 . ") ";
}

$HY_2d1f18583c83019935 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_keyset where `softid`=" . $HY_c5aaf359b892dfe165 . " and islock=0" . $HY_7b7f7648d9f86d8a17);
echo "<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\r\n$(\"#cztime1,#cztime2\").date_input({addhss: \"00:00:00\"});\r\n});\r\n\r\n\r\n</script>\r\n\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=report&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";

if (6 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "\t\t<select id='managerid' name='managerid'>";
	echo "\t\t\t<option value=0>所有后台用户</option>\r\n";

	foreach ($HY_d87caa1d9d90751b8f as $HY_970be7709f584ff59c ) {
		if ($HY_825ad51e000ddc6ca5["level"] == 7) {
			if (in_array($HY_970be7709f584ff59c["id"], $HY_b6332be20f8441b897)) {
				echo "<option value=" . $HY_970be7709f584ff59c["id"];

				if ($HY_a49db761d2702b25cf == $HY_970be7709f584ff59c["id"]) {
					echo " selected";
				}

				echo ">" . $HY_970be7709f584ff59c["username"] . "[" . $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]] . "]</option>";
			}
		}
		else {
			echo "<option value=" . $HY_970be7709f584ff59c["id"];

			if ($HY_a49db761d2702b25cf == $HY_970be7709f584ff59c["id"]) {
				echo " selected";
			}

			echo ">" . $HY_970be7709f584ff59c["username"] . "[" . $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]] . "]</option>";
		}
	}

	echo "\t\t</select>";
}

echo "\r\n<input name=\"cztime1\" id=\"cztime1\" class=\"my_date_input\" type=\"text\" value=\"";
echo $HY_ab146a3ea1f0698fa4;
echo "\" /><span style=\"font-family: 宋体\">＜充值日期≤</span><input name=\"cztime2\" id=\"cztime2\" class=\"my_date_input\" type=\"text\" value=\"";
echo $HY_97c5fd32037fccef21;
echo "\" />\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"统计\" />\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n";
$HY_97062b4a112a9f6a27 = "";

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_97062b4a112a9f6a27 = " `managerid`=" . $HY_a49db761d2702b25cf . " and ";
}

if ($HY_825ad51e000ddc6ca5["level"] == 7) {
	if ($HY_a49db761d2702b25cf == 0) {
		$HY_585b7f3c500e71a35f = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where pmid=" . $HY_825ad51e000ddc6ca5["id"]);
		$HY_d41d09317cffe0e8f4 = $HY_825ad51e000ddc6ca5["id"];

		if (!empty($HY_585b7f3c500e71a35f)) {
			foreach ($HY_585b7f3c500e71a35f as $HY_264f2410400cc7a86b ) {
				$HY_d41d09317cffe0e8f4 .= "," . $HY_264f2410400cc7a86b["id"];
			}
		}

		$HY_97062b4a112a9f6a27 = " `managerid` in (" . $HY_d41d09317cffe0e8f4 . ") and ";
	}
	else {
		$HY_97062b4a112a9f6a27 = " `managerid`=" . $HY_a49db761d2702b25cf . " and ";
	}
}

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	if ($HY_a49db761d2702b25cf == 0) {
		$HY_97062b4a112a9f6a27 = " `managerid`>0 and ";
	}
	else if ($HY_e45f28bd1d737f95ee["level"] == 7) {
		$HY_585b7f3c500e71a35f = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where pmid=" . $HY_e45f28bd1d737f95ee["id"]);
		$HY_d41d09317cffe0e8f4 = $HY_e45f28bd1d737f95ee["id"];

		if (!empty($HY_585b7f3c500e71a35f)) {
			foreach ($HY_585b7f3c500e71a35f as $HY_264f2410400cc7a86b ) {
				$HY_d41d09317cffe0e8f4 .= "," . $HY_264f2410400cc7a86b["id"];
			}
		}

		$HY_97062b4a112a9f6a27 = " `managerid` in (" . $HY_d41d09317cffe0e8f4 . ") and ";
	}
	else {
		$HY_97062b4a112a9f6a27 = " `managerid`=" . $HY_a49db761d2702b25cf . " and ";
	}
}

echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td>注册卡类</td>\r\n<td>已充值注册卡数量</td>\r\n<td>未充值注册卡数量</td>\r\n<td>退卡数量</td>\r\n</tr>\r\n";
$HY_4427ce9b157e7d0c19 = 0;

foreach ($HY_2d1f18583c83019935 as $HY_970be7709f584ff59c ) {
	$HY_d96e55194b8b4b757d = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT count(*) as tnum from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where " . $HY_97062b4a112a9f6a27 . " `keyfix`='" . $HY_970be7709f584ff59c["prefix"] . "' and cztime between " . $HY_35732f851e97b0b746 . " and " . $HY_da6527e6ec0209ca5b . " and isback=0");
	$HY_66cbe3b0feb18c4172 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT count(*) as tnum from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where " . $HY_97062b4a112a9f6a27 . " `keyfix`='" . $HY_970be7709f584ff59c["prefix"] . "' and cztime=0 and isback=0");
	$HY_8a8097ab5180434b89 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT count(*) as tnum from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where  isback=1 and " . $HY_97062b4a112a9f6a27 . "  `keyfix`='" . $HY_970be7709f584ff59c["prefix"] . "'");
	$HY_4427ce9b157e7d0c19 = $HY_4427ce9b157e7d0c19 + $HY_d96e55194b8b4b757d["tnum"] + $HY_66cbe3b0feb18c4172["tnum"] + $HY_8a8097ab5180434b89["tnum"];
	echo "<tr class=trd><td>" . hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["keyname"]) . "</td><td>" . $HY_d96e55194b8b4b757d["tnum"] . "</td><td>" . $HY_66cbe3b0feb18c4172["tnum"] . "</td><td>" . $HY_8a8097ab5180434b89["tnum"] . "</td></tr>";
}

echo "<tr class=trd><td>注册卡总数</td><td colspan=3 align=center>" . $HY_4427ce9b157e7d0c19 . "</td></tr>";
echo "</table>";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
