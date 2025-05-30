<?php

function HY_ef90aa0654efcfd337($HY_fc12e3cf6043961fb3 = 1)
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
$HY_922e02ed6d3bde2c2b = array(1 => "正常登陆", 2 => "帐号过期", 3 => "帐号被锁定", 4 => "密码错误");
$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", 0);
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);

if ($HY_825ad51e000ddc6ca5["level"] < 8) {
	$HY_a49db761d2702b25cf = $HY_825ad51e000ddc6ca5["id"];
}
else {
	if ($HY_a49db761d2702b25cf == 0) {
		$HY_a49db761d2702b25cf = $HY_825ad51e000ddc6ca5["id"];
	}

	$HY_ba30f568508bf12f22 = 0;
	$HY_a17b577142792dc87b = array();
	$HY_bc27b6e5d0bd4ac026 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`username`,`pid`,`isdel` from `kss_tb_manager` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

	foreach ($HY_bc27b6e5d0bd4ac026 as $HY_970be7709f584ff59c ) {
		if ($HY_970be7709f584ff59c["id"] == $HY_a49db761d2702b25cf) {
			$HY_ba30f568508bf12f22 = 1;
			$HY_a17b577142792dc87b[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["username"];
		}
	}

	if ($HY_ba30f568508bf12f22 == 0) {
		hy_bd307d155f057feb55("你所查询的用户没找到，或你无权查询该用户的登陆日志！");
	}
}

$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` in";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_tb_log_login` ";
$HY_c3249a3797396973c0 = array();
$HY_c3249a3797396973c0[] = " `managerid`='" . $HY_a49db761d2702b25cf . "'";
$HY_dd43036ba01064c085["managerid"] = $HY_a49db761d2702b25cf;
$HY_672d06c58fe042d1f1 = "";

if (!empty($HY_c3249a3797396973c0)) {
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_c3249a3797396973c0) . " order by logintime desc";
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
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab . " order by id desc");
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\".vieworder\").live(\"click\",function(){\r\n$(\".malertboxclosebtn\").click();\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'订单'+$(this).text()+'的注册卡号',600,300);\t\r\n});\r\n});\r\n</script>\r\n";

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle><form action=\"?action=managerlogin\" method=\"post\" id=\"agentrmbf\" name=\"agentrmbf\">\r\n用户";
	echo "<select id='managerid' name='managerid'>";

	foreach ($HY_bc27b6e5d0bd4ac026 as $HY_fbf95ae64ebaaaa6fc ) {
		if ($HY_fbf95ae64ebaaaa6fc["isdel"] == 0) {
			echo "<option value=" . $HY_fbf95ae64ebaaaa6fc["id"];

			if ($HY_a49db761d2702b25cf == $HY_fbf95ae64ebaaaa6fc["id"]) {
				echo " selected";
			}

			echo ">" . $HY_fbf95ae64ebaaaa6fc["username"] . "</option>";
		}
	}

	echo "</select>";
	echo "<input type=submit class=submitbtn value=\"查询\">\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}

echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td >ID</td>\r\n<td >日期</td>\r\n<td >IP</td>\r\n<td >用户名</td>\r\n<td >备注</td>\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr class=trd><td colspan=5>没有登陆记录</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class=\"trd\">\r\n<td>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>\r\n<td>";
		echo hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["logintime"]);
		echo "</td>\r\n<td class=isip>";
		echo long2ip($HY_970be7709f584ff59c["loginip"]);
		echo "</td>\r\n<td>";
		echo isset($HY_a17b577142792dc87b[$HY_970be7709f584ff59c["managerid"]]) ? $HY_a17b577142792dc87b[$HY_970be7709f584ff59c["managerid"]] : "&nbsp;";
		echo "</td>\r\n<td>";
		echo $HY_922e02ed6d3bde2c2b[$HY_970be7709f584ff59c["logintype"]];
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
