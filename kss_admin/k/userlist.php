<?php

function HY_9bb51843a22c61c714($HY_fc12e3cf6043961fb3 = 1)
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

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	hy_3df13eaab5a6295338();
}

$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_18716cd6a5c5bbb66c = hy_ba8120f86a7df1aecc("selcmd", "gp", "sql", "no");
$HY_ef9449a16c3276dfc8 = hy_ba8120f86a7df1aecc("keywords", "gp", "sql", "");
$HY_2ab9e26cf32802e7c1 = hy_ba8120f86a7df1aecc("recycle", "gp", "sql", "");
if (($HY_2ab9e26cf32802e7c1 != "") && ($HY_2ab9e26cf32802e7c1 != "_recycle")) {
	hy_bd307d155f057feb55("您传入的参数错误严重！");
}

if (($HY_2ab9e26cf32802e7c1 == "_recycle") && ($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "14")) {
	hy_bd307d155f057feb55("你无权查看回收站！");
}

$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", 0);
$HY_efb701011f960a1d08 = hy_ba8120f86a7df1aecc("morekeys", "gp", "sql", "");
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_dd43036ba01064c085["softid"] = $HY_c5aaf359b892dfe165;
$HY_dd43036ba01064c085["recycle"] = $HY_2ab9e26cf32802e7c1;

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_6a3062be969e92240f = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `softid`=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_6a3062be969e92240f)) {
		hy_bd307d155f057feb55("你没有该软件的授权", 1);
	}
}

$HY_f126b55e4d5a6b646f = array("锁定", "解锁", "删除", "还原", "解绑", "下线", "清除", "savetags", "设置标签", "unline");

if (in_array($HY_040af70e369786c2e4, $HY_f126b55e4d5a6b646f)) {
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "userlist_cmd.php");
}

$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165);
$HY_989616e369abf49925 = $HY_810d15d31408c982b2["softmode"];
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` ";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . $HY_2ab9e26cf32802e7c1 . "` ";
$HY_c3249a3797396973c0 = array();
$HY_ef9449a16c3276dfc8 = trim($HY_ef9449a16c3276dfc8);
$HY_dd43036ba01064c085["selcmd"] = $HY_18716cd6a5c5bbb66c;
$HY_dd43036ba01064c085["keywords"] = $HY_ef9449a16c3276dfc8;

switch ($HY_18716cd6a5c5bbb66c) {
case "morekeys":
	$HY_efb701011f960a1d08 = preg_replace("/(\\r)/", "", $HY_efb701011f960a1d08);
	$HY_efb701011f960a1d08 = str_replace("\n\n", "\n", $HY_efb701011f960a1d08);

	if ($HY_989616e369abf49925 == "USOFT") {
		if (strlen($HY_efb701011f960a1d08) < 3) {
			hy_bd307d155f057feb55("你没输入任何用户名", 1);
		}
	}
	else if (strlen($HY_efb701011f960a1d08) < 32) {
		hy_bd307d155f057feb55("你没输入任何卡号", 1);
	}

	$HY_ffbab5c1bdd7585777 = explode("\n", $HY_efb701011f960a1d08);
	$HY_b4b62d2be760af10d4 = "";
	$HY_fc12e3cf6043961fb3 = 0;
	$HY_7ac34ab054ad66090a = array();

	foreach ($HY_ffbab5c1bdd7585777 as $HY_7e5ca80d6dacf7139a ) {
		if (($HY_989616e369abf49925 == "KSOFT") && (strlen($HY_7e5ca80d6dacf7139a) == 32)) {
			$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;

			if (ZPAGESIZE < $HY_fc12e3cf6043961fb3) {
				hy_bd307d155f057feb55("每次最多只能查询" . ZPAGESIZE . "条", 1);
			}

			$HY_b4b62d2be760af10d4 .= "'" . substr($HY_7e5ca80d6dacf7139a, 0, 10) . "',";
			$HY_7ac34ab054ad66090a[substr($HY_7e5ca80d6dacf7139a, 0, 10)] = substr($HY_7e5ca80d6dacf7139a, 10, 10);
		}
		else {
			if (($HY_989616e369abf49925 == "USOFT") && (2 < hy_cfd7029aa774332944($HY_7e5ca80d6dacf7139a))) {
				$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;

				if (ZPAGESIZE < $HY_fc12e3cf6043961fb3) {
					hy_bd307d155f057feb55("每次最多只能查询" . ZPAGESIZE . "条", 1);
				}

				$HY_b4b62d2be760af10d4 .= "'" . $HY_7e5ca80d6dacf7139a . "',";
				$HY_7ac34ab054ad66090a[$HY_7e5ca80d6dacf7139a] = "";
			}
		}
	}

	if ($HY_b4b62d2be760af10d4 == "") {
		hy_bd307d155f057feb55("你没输入任何要查询的资料", 1);
	}

	$HY_b4b62d2be760af10d4 = substr($HY_b4b62d2be760af10d4, 0, strlen($HY_b4b62d2be760af10d4) - 1);
	$HY_c3249a3797396973c0["a"] = " `username` in (" . $HY_b4b62d2be760af10d4 . ") ";
	break;

case "keys":
	if ($HY_989616e369abf49925 == "KSOFT") {
		if ((strlen($HY_ef9449a16c3276dfc8) != 32) && (strlen($HY_ef9449a16c3276dfc8) != 10)) {
			hy_bd307d155f057feb55("输入的注册卡号必须是32位 或 卡号前10位", 1);
		}

		if (strlen($HY_ef9449a16c3276dfc8) == 32) {
			$HY_c3249a3797396973c0["a"] = " `username`='" . substr($HY_ef9449a16c3276dfc8, 0, 10) . "' and `password`='" . substr($HY_ef9449a16c3276dfc8, 10, 10) . "' ";
		}
		else {
			$HY_c3249a3797396973c0["a"] = " `username`='" . substr($HY_ef9449a16c3276dfc8, 0, 10) . "' ";
		}
	}
	else {
		if (hy_cfd7029aa774332944($HY_ef9449a16c3276dfc8) < 2) {
			hy_bd307d155f057feb55("输入的会员名少于2个字符", 1);
		}

		$HY_c3249a3797396973c0["a"] = " `username` like '" . $HY_ef9449a16c3276dfc8 . "%' ";
	}

	break;

case "islock":
	$HY_c3249a3797396973c0["a"] = " `islock`>0 ";
	break;

case "isonline":
	if ($HY_810d15d31408c982b2["chkonline"] != 1) {
		$HY_c3249a3797396973c0["a"] = " `lasttime`>" . (time() - (60 * $HY_810d15d31408c982b2["connectpenli"]) - 300) . "";
	}
	else {
		$HY_c3249a3797396973c0["a"] = " `isonline`=1 ";
	}

	break;

case "isend":
	$HY_c3249a3797396973c0["a"] = " `endtime`<" . time() . " ";
	break;

case "tags":
	if (strlen($HY_ef9449a16c3276dfc8) < 1) {
		hy_bd307d155f057feb55("标签最少两位", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `tag` like '" . $HY_ef9449a16c3276dfc8 . "%' ";
	break;

case "bdinfo":
	if (strlen($HY_ef9449a16c3276dfc8) < 1) {
		hy_bd307d155f057feb55("绑定信息最少两位", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `bdinfo` like '" . $HY_ef9449a16c3276dfc8 . "%' ";
	break;

case "pccode":
	if (strlen($HY_ef9449a16c3276dfc8) < 1) {
		hy_bd307d155f057feb55("机器码最少两位", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `pccode` like '" . $HY_ef9449a16c3276dfc8 . "%' ";
	break;

case "keyextattr":
	$HY_c3249a3797396973c0["a"] = " `keyextattr`='" . $HY_ef9449a16c3276dfc8 . "' ";
	break;

default:
}

$HY_a4e785fb83af20723e = array();
$HY_d87caa1d9d90751b8f = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`username`,`level`,`isdel`,`pmid` from `kss_tb_manager` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " order by id asc");
$HY_b6332be20f8441b897 = array();

foreach ($HY_d87caa1d9d90751b8f as $HY_970be7709f584ff59c ) {
	$HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["username"];

	if (7 < $HY_970be7709f584ff59c["level"]) {
		$HY_ea21f12961e8d6f2f1 = $HY_970be7709f584ff59c["id"];
	}

	if (($HY_825ad51e000ddc6ca5["level"] == 7) && ($HY_825ad51e000ddc6ca5["id"] == $HY_970be7709f584ff59c["pmid"])) {
		$HY_b6332be20f8441b897[] = $HY_970be7709f584ff59c["id"];
	}
}

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_c3249a3797396973c0["managerid"] = " `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " ";
}
else if ($HY_825ad51e000ddc6ca5["level"] == 7) {
	if ($HY_a49db761d2702b25cf == 0) {
		$HY_a49db761d2702b25cf = -1;
	}

	if (0 < $HY_a49db761d2702b25cf) {
		if (!in_array($HY_a49db761d2702b25cf, $HY_b6332be20f8441b897)) {
			hy_bd307d155f057feb55("你似乎越界了", 1);
		}

		$HY_c3249a3797396973c0["managerid"] = " `managerid`=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_a49db761d2702b25cf == -1) {
		$HY_28e887b91338c2052b = implode(",", $HY_b6332be20f8441b897);
		$HY_c3249a3797396973c0["managerid"] = " `managerid` in(" . $HY_28e887b91338c2052b . ") ";
	}
}
else {
	if ($HY_a49db761d2702b25cf == -1) {
		$HY_c3249a3797396973c0["managerid"] = " `managerid` <> " . $HY_ea21f12961e8d6f2f1 . " ";
	}

	if (0 < $HY_a49db761d2702b25cf) {
		$HY_c3249a3797396973c0["managerid"] = " `managerid`=" . $HY_a49db761d2702b25cf . " ";
	}
}

$HY_dd43036ba01064c085["managerid"] = $HY_a49db761d2702b25cf;
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
	if (($HY_18716cd6a5c5bbb66c == "morekeys") && ($HY_989616e369abf49925 == "KSOFT")) {
		$HY_e00d31c93f5b28e283 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("SELECT `id`,`username`,`password` " . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
		echo htmlspecialchars("SELECT `id`,`username`,`password` " . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
		echo "\r\n";
		$HY_dbaa2d79a00983d5e1 = "";

		foreach ($HY_e00d31c93f5b28e283 as $HY_2f9b5e0f6fa7275165 ) {
			if ($HY_7ac34ab054ad66090a[$HY_2f9b5e0f6fa7275165["username"]] != $HY_2f9b5e0f6fa7275165["password"]) {
				$HY_011b935e6e65579d5c .= $HY_2f9b5e0f6fa7275165["username"] . $HY_7ac34ab054ad66090a[$HY_2f9b5e0f6fa7275165["username"]] . "\r\n";
				$HY_e42b2c2aebb697a9ac = $HY_e42b2c2aebb697a9ac - 1;
			}
			else {
				$HY_dbaa2d79a00983d5e1 .= $HY_2f9b5e0f6fa7275165["id"] . ",";
				$HY_c72876ff38da83bee9 = "=" . $HY_2f9b5e0f6fa7275165["id"];
			}
		}

		$HY_dbaa2d79a00983d5e1 = substr($HY_dbaa2d79a00983d5e1, 0, strlen($HY_dbaa2d79a00983d5e1) - 1);
		$HY_b52b0b91dfe2f1d7ab = " where `id` " . (1 < $HY_e42b2c2aebb697a9ac ? " in (" . $HY_dbaa2d79a00983d5e1 . ")" : $HY_c72876ff38da83bee9);
	}

	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
	echo htmlspecialchars($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "</textarea>";
echo "<script type=\"text/javascript\">\r\nvar mylevel=";
echo $HY_825ad51e000ddc6ca5["level"];
echo ";\r\nvar smode='";
echo $HY_989616e369abf49925;
echo "';\r\nvar softid=";
echo $HY_c5aaf359b892dfe165;
echo ";\r\n\r\n\r\n</script>\r\n\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/k/userlist.js?20141111\" charset=\"utf-8\"></script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=userlist&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";
if ((7 < $HY_825ad51e000ddc6ca5["level"]) || hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "14")) {
	echo "<input type='checkbox' name='recycle' value='_recycle' id='recycle' " . ($HY_2ab9e26cf32802e7c1 == "_recycle" ? " checked" : "") . " /><label for='recycle'>回收站</label> &nbsp;&nbsp;";
}

echo "<select id=\"selcmd\" name=\"selcmd\">\r\n";

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	echo "<option value='no'>所有</option>";
}
else {
	echo "<option value='no'>所属</option>";
}

echo "<option value='keys' ";
echo $HY_18716cd6a5c5bbb66c == "keys" ? " selected" : "";
echo ">";
echo $HY_989616e369abf49925 == "KSOFT" ? "注册卡号" : "用户名";
echo "</option>";
echo "\t\t\t\r\n<option value='tags' ";
echo $HY_18716cd6a5c5bbb66c == "tags" ? " selected" : "";
echo ">标签</option>\r\n<option value='bdinfo' ";
echo $HY_18716cd6a5c5bbb66c == "bdinfo" ? " selected" : "";
echo ">绑定信息</option>\r\n<option value='keyextattr' ";
echo $HY_18716cd6a5c5bbb66c == "keyextattr" ? " selected" : "";
echo ">用户附属性</option>\r\n<option value='pccode' ";
echo $HY_18716cd6a5c5bbb66c == "pccode" ? " selected" : "";
echo ">机器码</option>\r\n<option value='isonline' ";
echo $HY_18716cd6a5c5bbb66c == "isonline" ? " selected" : "";
echo ">在线的用户</option>\r\n<option value='islock' style=\"background:#F6D892\"";
echo $HY_18716cd6a5c5bbb66c == "islock" ? " selected" : "";
echo ">被锁定的用户</option>\r\n<option value='isend' style='background:#FAD4CB' ";
echo $HY_18716cd6a5c5bbb66c == "isend" ? " selected" : "";
echo ">过期的用户</option>\r\n<option value='morekeys' ";
echo $HY_18716cd6a5c5bbb66c == "morekeys" ? " selected" : "";
echo ">";
echo $HY_989616e369abf49925 == "USOFT" ? "批量查询用户" : "批量查询注册卡";
echo "</option>\r\n</select>\r\n<input style=\"display:none\" type=text id=\"keywords\" name=\"keywords\" value=\"";
echo $HY_ef9449a16c3276dfc8;
echo "\">\r\n";

if (6 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "\t\t<select id='managerid' name='managerid'>";

	if (7 < $HY_825ad51e000ddc6ca5["level"]) {
		echo "\t\t\t<option value=0>所有后台用户</option>\r\n";
	}

	echo "\t\t\t<option value=-1 ";
	echo $HY_a49db761d2702b25cf == -1 ? " selected" : "";
	echo ">所有代理</option>\r\n";

	foreach ($HY_d87caa1d9d90751b8f as $HY_970be7709f584ff59c ) {
		if ($HY_970be7709f584ff59c["isdel"] != 1) {
			if ($HY_825ad51e000ddc6ca5["level"] == 7) {
				if ($HY_825ad51e000ddc6ca5["id"] == $HY_970be7709f584ff59c["pmid"]) {
					echo "\t\t\t<option value='" . $HY_970be7709f584ff59c["id"] . "' ";
					echo $HY_a49db761d2702b25cf == $HY_970be7709f584ff59c["id"] ? " selected" : "";
					echo ">" . $HY_970be7709f584ff59c["username"] . "[" . $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]] . "]</option>";
				}
			}
			else {
				echo "\t\t\t<option value='" . $HY_970be7709f584ff59c["id"] . "' ";
				echo $HY_a49db761d2702b25cf == $HY_970be7709f584ff59c["id"] ? " selected" : "";
				echo ">" . $HY_970be7709f584ff59c["username"] . "[" . $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]] . "]</option>";
			}
		}
	}

	echo "\t\t</select>";
}

if ($HY_989616e369abf49925 == "USOFT") {
	$HY_33bf0db1324b6b16dc = "用户名";
}
else {
	$HY_33bf0db1324b6b16dc = "注册卡号";
}

echo "<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n<div id=\"morekeys\">每行一个";
echo $HY_33bf0db1324b6b16dc;
echo "，每次最多只允许查询";
echo ZPAGESIZE;
echo "行<br><textarea id=\"morekeystextarea\" style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"morekeys\">";
echo htmlspecialchars($HY_efb701011f960a1d08);
echo "</textarea>";

if ($HY_011b935e6e65579d5c != "") {
	echo "未找到的注册卡<br><textarea  style='display:block;width:500px;height:50px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333'>" . $HY_011b935e6e65579d5c . "</textarea>";
}

echo "</div>\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n";
if (($HY_2ab9e26cf32802e7c1 != "_recycle") || (7 < $HY_825ad51e000ddc6ca5["level"])) {
	echo "<form id=\"userlist\" action=\"?action=userlist&softid=";
	echo $HY_c5aaf359b892dfe165;
	echo "&isajax=1\" method=\"post\">\r\n";
}

echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"ID号\">ID</td>\r\n<td nowrap=\"nowrap\" malt=\"";
echo $HY_2ab9e26cf32802e7c1 == "_recycle" ? "执行删除操作的管理用户" : "可以查看修改用户信息、查看用户使用日志、锁定与解锁用户、作者还可删除用户";
echo "\">操作</td>\r\n<td nowrap=\"nowrap\" malt=\"红色表示在线，如果软件参数设置勾选了登陆标识，用户被卡在线上可以点击红色小方块强制在线为离线状态\">状</td>\r\n";

if ($HY_989616e369abf49925 == "USOFT") {
	echo "<td nowrap='nowrap' malt='用户名'>用户名</td>";
	echo "<td nowrap='nowrap' malt='用户充值的卡号数量'>卡数</td>";
}
else {
	echo "<td nowrap='nowrap' malt='注册卡号'>注册卡号</td>";
}

echo "<td nowrap='nowrap' malt='用户连接服务器验证的次数'>验证</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"可修改，主要是方便用户管理注册卡，给用户备注一些信息\">标签</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"用户自激活日期算起的可使用天数\">天数</td>\r\n<td nowrap=\"nowrap\" malt=\"在某些软件里，你可能要按点计费，该点数是按点扣费的基础功能\">点数</td>\r\n<td nowrap=\"nowrap\" malt=\"通道数大于1的，客户可用同一注册卡/帐号和不同的通道号，同时在不同的电脑上登陆\">通道</td>\r\n<td nowrap=\"nowrap\" malt=\"绑定信息可修改，你可以通过软件参数来控制客户能否在客户端通过API来修改该信息\">绑定信息</td>\r\n<td nowrap=\"nowrap\" malt=\"附属性不可以修改，客户登陆后可以取得该属性，你可以利用该属性来实现不同属性可使用不同的客户端软件功能<br>为防止附属性太长破坏界面，附属性放在文本框中显示\">附属性</td>\r\n<td nowrap=\"nowrap\" malt=\"该注册卡是属于哪一个后台帐号的\">所属</td>\r\n<td nowrap=\"nowrap\" malt=\"用户到期日期\">到期日期</td>\r\n";

if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
	echo "<td malt='该用户被删除的日期'>删除日期</td>";
}
else {
	echo "<td malt='该用户激活的日期'>激活日期</td>";
}

echo "\t\t\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr nodata=1 class=trd><td colspan=15>无任何信息</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		$HY_970be7709f584ff59c["bdinfo"] = hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["bdinfo"]);
		$HY_970be7709f584ff59c["pccode"] = hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["pccode"]);
		$HY_970be7709f584ff59c["username"] = hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["username"]);
		$HY_970be7709f584ff59c["keyextattr"] = hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["keyextattr"]);
		echo "<tr class='" . ($HY_970be7709f584ff59c["endtime"] < time() ? "trdisend" : (0 < $HY_970be7709f584ff59c["islock"] ? "trdislock" : ($HY_970be7709f584ff59c["endtime"] == PETIME ? "trdpubuser" : "trd"))) . "' id='trd";
		echo $HY_970be7709f584ff59c["username"];
		echo "' malt='[table][tr][td class=vth]会员名[/td][td class=vtd]" . $HY_970be7709f584ff59c["username"] . "[/td][td class=vth]密码[/td][td class=vtd]";
		if (($HY_825ad51e000ddc6ca5["level"] == 6) && (hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "18") == false)) {
			echo "******";
		}
		else {
			echo $HY_970be7709f584ff59c["password"];
		}

		echo "[/td][td class=vth]安全密码[/td][td class=vtd]";
		if (($HY_825ad51e000ddc6ca5["level"] == 6) && (hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "13") == false)) {
			echo "******";
		}
		else {
			echo $HY_970be7709f584ff59c["password2"];
		}

		echo "[/td][td class=vth]使用过体验卡[/td][td class=vtd]" . (0 < $HY_970be7709f584ff59c["isusetestkey"] ? "是" : "否") . "[/td][td class=vth]备注[/td][td class=vtd]" . $HY_970be7709f584ff59c["intro"] . "[/td][td class=vth]私有数据[/td][td class=vtd]" . $HY_970be7709f584ff59c["updata"] . "[/td][/tr][tr][td class=vth]机器码[/td][td class=vtd]" . $HY_970be7709f584ff59c["pccode"] . "[/td][td class=vth]绑定信息[/td][td class=vtd]" . $HY_970be7709f584ff59c["bdinfo"] . "[/td][td class=vth]上次验证日期[/td][td class=vtd]" . $HY_970be7709f584ff59c["lasttime"] . "," . hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["lasttime"]) . "[/td][td class=vth]上次验证IP[/td][td class=vtd]" . long2ip($HY_970be7709f584ff59c["lastip"]) . "[/td][td class=vth]推广帐号[/td][td class=vtd]" . $HY_970be7709f584ff59c["parentuser"] . "[/td][td class=vth]解绑次数[/td][td class=vtd]";
		echo $HY_970be7709f584ff59c["unlockday"] == date("d") ? $HY_970be7709f584ff59c["unlocktimes"] : 0;
		echo "[/td][/tr][/table]'>";
		echo "<td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
		echo $HY_970be7709f584ff59c["username"];
		echo "' id='check";
		echo $HY_970be7709f584ff59c["username"];
		echo "'>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo "<img class=edituser malt='编辑用户信息' src=";
		echo INSTALLPATH;
		echo "kss_inc/images/b_edit.png>";
		echo "&nbsp;&nbsp;<img class=viewlog malt='查看用户使用日志' src=";
		echo INSTALLPATH;
		echo "kss_inc/images/b_calendar.png>";

		if ($HY_989616e369abf49925 == "USOFT") {
			echo "&nbsp;&nbsp;<img class=viewczlog malt='查看用户充值日志' src=";
			echo INSTALLPATH;
			echo "kss_inc/images/b_rmb.png>";
		}

		if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
			echo isset($HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["delmid"]]) ? $HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["delmid"]] : "";
		}
		else {
			echo "&nbsp;&nbsp;<img class='hand' malt='锁级别：" . $HY_970be7709f584ff59c["islock"] . ",  点击此按钮锁定或解锁注册卡'  op='" . ($HY_970be7709f584ff59c["islock"] == 0 ? "锁定" : "解锁") . "' lock='" . $HY_970be7709f584ff59c["islock"] . "' src='" . INSTALLPATH . "kss_inc/images/" . ($HY_970be7709f584ff59c["islock"] == 0 ? "b_usrcheck.png" : "b_uncheck.png") . "'>";

			if (7 < $HY_825ad51e000ddc6ca5["level"]) {
				echo "&nbsp;&nbsp;<img class='hand' malt='点击将该注册卡放入回收站'  op='删除' src='" . INSTALLPATH . "kss_inc/images/b_empty.png'>";
			}
		}

		echo "</td>";

		if ($HY_810d15d31408c982b2["chkonline"] == 0) {
			$HY_dc0e26b0b95526d27c = (time() < ($HY_970be7709f584ff59c["lasttime"] + (60 * ($HY_810d15d31408c982b2["connectpenli"] + 5))) ? "'online1' title='在线'" : "'online0' title='不在线'");
		}
		else if ($HY_970be7709f584ff59c["isonline"] == 1) {
			if (time() < ($HY_970be7709f584ff59c["lasttime"] + (60 * $HY_810d15d31408c982b2["outlinetime"]))) {
				$HY_dc0e26b0b95526d27c = "'online2' title='在线，单击可强制设置为离线'";
			}
			else {
				$HY_dc0e26b0b95526d27c = "'online3' title='在线，已经" . $HY_810d15d31408c982b2["outlinetime"] . "分钟没有连接服务器验证，单击可强制设置为离线'";
			}
		}
		else {
			$HY_dc0e26b0b95526d27c = "'online0' title='不在线'";
		}

		echo "<td><span class=" . $HY_dc0e26b0b95526d27c . ">◆</span></td>";

		if ($HY_989616e369abf49925 == "USOFT") {
			echo "<td nowrap='nowrap' id='copy_" . hy_6bfeee86cee6e24af6(16) . "' class='keynum' copyt='";
			echo $HY_970be7709f584ff59c["username"];
			echo "'>";
			echo $HY_970be7709f584ff59c["username"];
			echo "</td>";
			echo "<td nowrap='nowrap'><a href='javascript:void(0)'  onclick=";
			echo YH2;
			echo "dwin('user_key1_";
			echo $HY_c5aaf359b892dfe165;
			echo "','";
			echo $HY_810d15d31408c982b2["softname"];
			echo "注册卡列表','admin_key.php?action=keylist&softid=";
			echo $HY_c5aaf359b892dfe165;
			echo "&selcmd=czusername&keywords='+encodeURIComponent('" . $HY_970be7709f584ff59c["username"] . "'))";
			echo YH2;
			echo ">";
			echo $HY_970be7709f584ff59c["cztimes"];
			echo "</td>";
		}
		else {
			echo "<td nowrap='nowrap' id='copy_" . hy_6bfeee86cee6e24af6(16) . "' class='keynum' copyt='";
			echo $HY_970be7709f584ff59c["username"] . $HY_970be7709f584ff59c["password"] . $HY_970be7709f584ff59c["password2"];
			echo "'>";
			echo $HY_970be7709f584ff59c["username"] . substr($HY_970be7709f584ff59c["password"], 18);
			echo "</td>";
		}

		echo "<td>";
		echo $HY_970be7709f584ff59c["activetimes"];
		echo "</td>";
		echo "<td nowrap='nowrap'><input type=text class=viewinput  maxlength='50' oldval='";
		echo $HY_970be7709f584ff59c["tag"];
		echo "'";
		echo $HY_2ab9e26cf32802e7c1 == "_recycle" ? " Readonly" : "";
		echo " value='";
		echo $HY_970be7709f584ff59c["tag"];
		echo "'>";
		echo $HY_2ab9e26cf32802e7c1 != "_recycle" ? "<input type='button' class='savetag' value=''>" : "";
		echo "</td>";
		echo "<td nowrap='nowrap' aj='cday";
		echo $HY_970be7709f584ff59c["username"];
		echo "'>";
		echo $HY_970be7709f584ff59c["cday"] * 1;
		echo "</td>";
		echo "<td aj='points";
		echo $HY_970be7709f584ff59c["username"];
		echo "'>";
		echo $HY_970be7709f584ff59c["points"];
		echo "</td>";
		echo "<td>";
		echo "<img aj='imglinknum";
		echo $HY_970be7709f584ff59c["username"];
		echo "' ";
		echo 1 < $HY_970be7709f584ff59c["linknum"] ? "class=viewipc malt='查看各通道信息' " : "malt='单通道' ";
		echo "src=";
		echo INSTALLPATH;
		echo "kss_inc/images/b_view2.png><span aj='linknum";
		echo $HY_970be7709f584ff59c["username"];
		echo "'>";
		echo $HY_970be7709f584ff59c["linknum"];
		echo "</span></td>";
		echo "<td><input type=text class=viewinput Readonly aj='bdinfo";
		echo $HY_970be7709f584ff59c["username"];
		echo "'  value='";
		echo $HY_970be7709f584ff59c["bdinfo"];
		echo "'></td>";
		echo "<td><input type=text class=viewinput Readonly aj='keyextattr";
		echo $HY_970be7709f584ff59c["username"];
		echo "' value='";
		echo $HY_970be7709f584ff59c["keyextattr"];
		echo "'></td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["managerid"]];
		echo "</td>";
		echo "<td aj='endtime";
		echo $HY_970be7709f584ff59c["username"];
		echo "'>";
		echo $HY_970be7709f584ff59c["endtime"] == PETIME ? "无限期" : hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["endtime"], "y-m-d H:i");
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo hy_cf2f0673819dddd4a1($HY_2ab9e26cf32802e7c1 == "_recycle" ? $HY_970be7709f584ff59c["deltime"] : $HY_970be7709f584ff59c["starttime"], "y-m-d H:i");
		echo "</td>";
		echo "</tr>\r\n";
	}
}

echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<img  src=\"";
echo INSTALLPATH;
echo "kss_inc/images/arrow_ltr.png\" style=\"vertical-align:middle\"><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"> ━▶\r\n";

if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
	if (7 < $HY_825ad51e000ddc6ca5["level"]) {
		echo "&nbsp;&nbsp;<input type='submit' name='op' id='recoverykey' malt='将选中的卡号从回收站表还原到注册卡表中去' value='还原' class='submitbtn'>";
	}
}
else {
	echo "&nbsp;&nbsp;<input type='submit' name='op' id='lockkey' malt='将选中的用户锁定' value='锁定' class='submitbtn'>";
	echo "&nbsp;&nbsp;<input type='submit' name='op' id='unlockkey' malt='将选中的用户解锁' value='解锁' class='submitbtn'>";
	echo "&nbsp;&nbsp;<input type='submit' name='op' id='unbindkey' malt='将选中的用户解绑' value='解绑' class='submitbtn'>";
	if ((7 < $HY_825ad51e000ddc6ca5["level"]) || hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], 52)) {
		echo "&nbsp;&nbsp;<input type='submit' name='op' id='delkey' malt='将选中的卡号移动到回收站中去' value='删除' class='submitbtn'>";
	}

	echo "&nbsp;&nbsp;<input type='submit' name='op' id='setalltag' malt='将选中的卡号标签都设置为指定值' value='设置标签' class='submitbtn'>━▶<input maxlength='50' type=text id='newtag' name='newtag' class=viewinput value=''>";
}

echo "\t\t\r\n</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "<div id=\"altmsg001\" style=\"position:absolute;top:30px;left:80px;\"><img src=\"../kss_inc/images/altmsg001.gif\"></div>";
/*
echo "\r\n<script type=\"text/javascript\">";
echo "\r\n$(document).ready(function(){ \r\n$('#altmsg001').bind(\"mouseover\",function(){$(this).hide();})\r\n});";
echo "\r\n</script>";
echo "\r\n</body>\r\n</html>";
*/
?>
<script>
$(document).ready(function(){ 
	$('#altmsg001').bind("mouseover",function(){$(this).hide();})
});
</script>
</body>
</html>
