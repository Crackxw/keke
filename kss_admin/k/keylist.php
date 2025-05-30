<?php

function HY_0c5a115cacfcc83776($HY_fc12e3cf6043961fb3 = 1)
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
$HY_df6f4f7a39d3959aa9 = hy_ba8120f86a7df1aecc("isactive", "gp", "int", 0);
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
$HY_5c403b88957f0d8f8d = hy_ba8120f86a7df1aecc("prefix", "gp", "sql", "");
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_ab146a3ea1f0698fa4 = hy_ba8120f86a7df1aecc("cztime1", "gp", "time", "2012-01-01 00:00:00");
$HY_97c5fd32037fccef21 = hy_ba8120f86a7df1aecc("cztime2", "gp", "time", "2012-01-01 00:00:00");

if ($HY_df6f4f7a39d3959aa9 == 1) {
	$HY_dd43036ba01064c085["isactive"] = 1;
	$HY_dd43036ba01064c085["cztime1"] = $HY_ab146a3ea1f0698fa4;
	$HY_dd43036ba01064c085["cztime2"] = $HY_97c5fd32037fccef21;
	if (($HY_ab146a3ea1f0698fa4 == "2012-01-01 00:00:00") && ($HY_ab146a3ea1f0698fa4 == "2012-01-01 00:00:00")) {
		$HY_35732f851e97b0b746 = 0;
		$HY_da6527e6ec0209ca5b = 0;
	}
	else {
		$HY_35732f851e97b0b746 = strtotime($HY_ab146a3ea1f0698fa4);
		$HY_da6527e6ec0209ca5b = strtotime($HY_97c5fd32037fccef21);

		if ($HY_da6527e6ec0209ca5b < $HY_35732f851e97b0b746) {
			hy_bd307d155f057feb55("你选择的充值日期时间段错误，前边的应该要比后边的小");
		}
	}
}

$HY_dd43036ba01064c085["softid"] = $HY_c5aaf359b892dfe165;
$HY_dd43036ba01064c085["recycle"] = $HY_2ab9e26cf32802e7c1;
$HY_dd43036ba01064c085["prefix"] = $HY_5c403b88957f0d8f8d;

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_6a3062be969e92240f = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `softid`=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_6a3062be969e92240f)) {
		hy_bd307d155f057feb55("你没有该软件的授权", 1);
	}
}

$HY_f126b55e4d5a6b646f = array("锁定", "解锁", "删除", "还原", "清除", "savetags", "设置标签", "退卡");

if (in_array($HY_040af70e369786c2e4, $HY_f126b55e4d5a6b646f)) {
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "keylist_cmd.php");
}

$HY_2d1f18583c83019935 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_keyset where `softid`=" . $HY_c5aaf359b892dfe165);
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` ";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . $HY_2ab9e26cf32802e7c1 . "` ";
$HY_c3249a3797396973c0 = array();
$HY_ef9449a16c3276dfc8 = trim($HY_ef9449a16c3276dfc8);
$HY_20c769517e2587ccb1 = 32;
$HY_dd43036ba01064c085["selcmd"] = $HY_18716cd6a5c5bbb66c;
$HY_dd43036ba01064c085["keywords"] = $HY_ef9449a16c3276dfc8;

switch ($HY_18716cd6a5c5bbb66c) {
case "morekeys":
	$HY_efb701011f960a1d08 = preg_replace("/([^a-zA-Z0-9\\n])/", "", $HY_efb701011f960a1d08);
	$HY_efb701011f960a1d08 = str_replace("\n\n", "\n", $HY_efb701011f960a1d08);
	$HY_efb701011f960a1d08 = str_replace("\n\n", "\n", $HY_efb701011f960a1d08);

	if (strlen($HY_efb701011f960a1d08) < 32) {
		hy_bd307d155f057feb55("你没输入任何卡号或输入的卡号格式非法", 1);
	}

	$HY_ffbab5c1bdd7585777 = explode("\n", $HY_efb701011f960a1d08);
	$HY_b4b62d2be760af10d4 = "";
	$HY_fc12e3cf6043961fb3 = 0;
	$HY_7ac34ab054ad66090a = array();

	foreach ($HY_ffbab5c1bdd7585777 as $HY_7e5ca80d6dacf7139a ) {
		if (strlen($HY_7e5ca80d6dacf7139a) != 32) {
			hy_bd307d155f057feb55("注册卡号必须是32位", 1);
		}

		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;

		if (ZPAGESIZE < $HY_fc12e3cf6043961fb3) {
			hy_bd307d155f057feb55("每次最多只能查询" . ZPAGESIZE . "条", 1);
		}

		$HY_b4b62d2be760af10d4 .= "'" . substr($HY_7e5ca80d6dacf7139a, 4, 6) . "',";
		$HY_7ac34ab054ad66090a[substr($HY_7e5ca80d6dacf7139a, 4, 6)] = substr($HY_7e5ca80d6dacf7139a, 10);
	}

	if ($HY_b4b62d2be760af10d4 == "") {
		hy_bd307d155f057feb55("你没输入任何卡号或输入的卡号格式非法", 1);
	}

	$HY_b4b62d2be760af10d4 = substr($HY_b4b62d2be760af10d4, 0, strlen($HY_b4b62d2be760af10d4) - 1);
	$HY_c3249a3797396973c0["a"] = " `keys` in (" . $HY_b4b62d2be760af10d4 . ") ";
	break;

case "keys":
	if ((strlen($HY_ef9449a16c3276dfc8) != 32) && (strlen($HY_ef9449a16c3276dfc8) != 10)) {
		hy_bd307d155f057feb55("输入的注册卡号必须是32位或前10位", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `keys`='" . substr($HY_ef9449a16c3276dfc8, 4, 6) . "' and `keyfix`='" . substr($HY_ef9449a16c3276dfc8, 0, 4) . "' ";

	if (strlen($HY_ef9449a16c3276dfc8) == 32) {
		$HY_c3249a3797396973c0["a"] .= " and `keyspassword`='" . substr($HY_ef9449a16c3276dfc8, 10) . "' ";
	}

	break;

case "czusername":
	if (strlen($HY_ef9449a16c3276dfc8) < 3) {
		hy_bd307d155f057feb55("用户名长度小于3", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `czusername`='" . $HY_ef9449a16c3276dfc8 . "' ";
	break;

case "islock":
	$HY_c3249a3797396973c0["a"] = " `islock`>0 ";
	break;

case "isback":
	$HY_c3249a3797396973c0["a"] = " `isback`=1 ";
	break;

case "ordernum":
	if (strlen($HY_ef9449a16c3276dfc8) != 24) {
		hy_bd307d155f057feb55("输入的订单号必须是24位", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `ordernum`='" . $HY_ef9449a16c3276dfc8 . "' ";
	break;

case "tags":
	if (strlen($HY_ef9449a16c3276dfc8) < 2) {
		hy_bd307d155f057feb55("标签最少两位", 1);
	}

	$HY_c3249a3797396973c0["a"] = " `tag` like '" . $HY_ef9449a16c3276dfc8 . "%' ";
	break;

case "keyextattr":
	$HY_c3249a3797396973c0["a"] = " `keyextattr`='" . $HY_ef9449a16c3276dfc8 . "%' ";
	break;

case "keytype_all":
	if (strlen($HY_5c403b88957f0d8f8d) == 4) {
		$HY_c3249a3797396973c0["keys"] = " `keyfix` = '" . $HY_5c403b88957f0d8f8d . "' ";
	}

	break;

default:
}

$HY_a4e785fb83af20723e = array();
$HY_ea21f12961e8d6f2f1 = 0;
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

if ($HY_18716cd6a5c5bbb66c == "keytype_all") {
	if ($HY_df6f4f7a39d3959aa9 == 1) {
		if (($HY_35732f851e97b0b746 == 0) && ($HY_da6527e6ec0209ca5b == 0)) {
			$HY_c3249a3797396973c0["cztime"] = " `cztime` =0 ";
		}
		else {
			$HY_c3249a3797396973c0["cztime"] = " `cztime` between " . $HY_35732f851e97b0b746 . " and " . $HY_da6527e6ec0209ca5b;
		}
	}
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

	if ($HY_18716cd6a5c5bbb66c == "morekeys") {
		$HY_e00d31c93f5b28e283 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("SELECT `id`,`keys`,`keyspassword` " . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
		echo htmlspecialchars("SELECT `id`,`keys`,`keyspassword` " . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
		echo "\r\n";
		$HY_dbaa2d79a00983d5e1 = "";

		foreach ($HY_e00d31c93f5b28e283 as $HY_2f9b5e0f6fa7275165 ) {
			if ($HY_7ac34ab054ad66090a[$HY_2f9b5e0f6fa7275165["keys"]] != $HY_2f9b5e0f6fa7275165["keyspassword"]) {
				$HY_011b935e6e65579d5c .= $HY_2f9b5e0f6fa7275165["keys"] . $HY_7ac34ab054ad66090a[$HY_2f9b5e0f6fa7275165["keys"]] . "\r\n";
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
echo ";\r\n\r\nvar softid=";
echo $HY_c5aaf359b892dfe165;
echo ";\r\n\r\n\r\n</script>\r\n<p style=\"padding:5px;background:#FFFF99;border:1px solid #999;color:#f00;font-weight:700\">注意：注册卡登陆模式的软件，注册卡激活后会被自动转为用户，要对注册卡进行管理操作（如加时、解绑、锁定、解锁、删除等等）请到用户管理->用户列表操作相应的用户即可</p>\r\n<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/k/keylist.js?20120920\" charset=\"utf-8\"></script>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<form id=\"find_key\" action=\"?action=keylist&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n";
if ((7 < $HY_825ad51e000ddc6ca5["level"]) || hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "14")) {
	echo "<input type='checkbox' name='recycle' value='_recycle' id='recycle' " . ($HY_2ab9e26cf32802e7c1 == "_recycle" ? " checked" : "") . " /><label for='recycle'>回收站</label> &nbsp;&nbsp;";
}

echo "<select id=\"selcmd\" name=\"selcmd\">\r\n<option value='keytype_all' ";
echo $HY_18716cd6a5c5bbb66c == "keytype_all" ? " selected" : "";
echo ">卡类、充值状态</option>\r\n<option value='islock' style=\"background:#F6D892\"";
echo $HY_18716cd6a5c5bbb66c == "islock" ? " selected" : "";
echo ">被锁定的卡</option>\r\n<option value='isback' style='background:#FAD4CB' ";
echo $HY_18716cd6a5c5bbb66c == "isback" ? " selected" : "";
echo ">退款的卡</option>\r\n<option value='czusername' ";
echo $HY_18716cd6a5c5bbb66c == "czusername" ? " selected" : "";
echo ">充值用户</option>\r\n<option value='keys' ";
echo $HY_18716cd6a5c5bbb66c == "keys" ? " selected" : "";
echo ">注册卡号</option>\r\n<option value='tags' ";
echo $HY_18716cd6a5c5bbb66c == "tags" ? " selected" : "";
echo ">标签</option>\r\n<option value='ordernum' ";
echo $HY_18716cd6a5c5bbb66c == "ordernum" ? " selected" : "";
echo ">订单号</option>\r\n<option value='keyextattr' ";
echo $HY_18716cd6a5c5bbb66c == "keyextattr" ? " selected" : "";
echo ">注册卡附属性</option>\r\n<option value='morekeys' ";
echo $HY_18716cd6a5c5bbb66c == "morekeys" ? " selected" : "";
echo ">批量查询注册卡号</option>\r\n</select>\r\n<input style=\"display:none\" type=text id=\"keywords\" name=\"keywords\" value=\"";
echo $HY_ef9449a16c3276dfc8;
echo "\">\r\n<select id=\"prefix\" name=\"prefix\" style=\"display:none\">\r\n<option value='no' ";
echo $HY_5c403b88957f0d8f8d == "no" ? " selected" : "";
echo ">所有卡类</option>\r\n";

foreach ($HY_2d1f18583c83019935 as $HY_970be7709f584ff59c ) {
	echo "\t\t\t<option value='" . $HY_970be7709f584ff59c["prefix"] . "' ";
	echo $HY_5c403b88957f0d8f8d == $HY_970be7709f584ff59c["prefix"] ? " selected" : "";
	echo ">" . $HY_970be7709f584ff59c["keyname"] . "</option>\r\n";
}

echo "</select>\r\n";

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

echo "<span id=\"czarea\" style=\"display:none\"><input  type=\"checkbox\" name=\"isactive\" value=\"1\" id=\"isactive\" ";
echo $HY_df6f4f7a39d3959aa9 == "1" ? " checked" : "";
echo "  malt=\"如果后边的两个日期都是 2012-01-01 00:00:00或0<br>就是查未充值的卡\"/><label for=\"isactive\" malt=\"如果后边的两个日期都是 2012-01-01 00:00:00或0<br>就是查未充值的卡\">充值状态</label> &nbsp;&nbsp;\r\n<span id=\"cztime\" style=\"display:none\"><input name=\"cztime1\" id=\"cztime1\" class=\"my_date_input\" type=\"text\" value=\"";
echo $HY_ab146a3ea1f0698fa4;
echo "\" /><span style=\"font-family: 宋体\">＜充值日期≤</span><input name=\"cztime2\" id=\"cztime2\" class=\"my_date_input\" type=\"text\" value=\"";
echo $HY_97c5fd32037fccef21;
echo "\" /></span></span>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"搜索\" />\r\n<div id=\"morekeys\">每行一张卡号，每次最多只允许查询";
echo ZPAGESIZE;
echo "张卡<br><textarea id=\"morekeystextarea\" style=\"display:block;width:500px;height:100px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333\" name=\"morekeys\">";
echo htmlspecialchars($HY_efb701011f960a1d08);
echo "</textarea>";

if ($HY_011b935e6e65579d5c != "") {
	echo "未找到的注册卡<br><textarea  style='display:block;width:500px;height:50px;margin:5px 0 0 0;font-family:Fixedsys,Arial,Verdana;color:#333'>" . $HY_011b935e6e65579d5c . "</textarea>";
}

echo "</div>\r\n</td>\r\n</tr>\r\n</form>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
if (($HY_2ab9e26cf32802e7c1 != "_recycle") || (7 < $HY_825ad51e000ddc6ca5["level"])) {
	echo "<form id=\"keylist\" action=\"?action=keylist&softid=";
	echo $HY_c5aaf359b892dfe165;
	echo "&isajax=1\" method=\"post\">\r\n";
}

echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"ID号\">ID</td>\r\n<td nowrap=\"nowrap\" malt=\"";
echo $HY_2ab9e26cf32802e7c1 == "_recycle" ? "执行删除操作的管理用户" : "可以锁定与解锁、作者还可删除注册卡";
echo "\">操作</td>\r\n";

if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
	echo "<td malt='该注册卡号被删除的日期'>删除日期</td>";
}
else {
	echo "<td malt='该注册卡号生成的日期'>生成日期</td>";
}

echo "\t\t\r\n<td nowrap=\"nowrap\" malt=\"注册卡号由32位a-zA-Z0-9的字符组成，为节省显示空间，只显示前10位和后四位，鼠标单击注册卡号可复制完整的32位注册卡号到剪贴板\">卡号</td>\r\n<td nowrap=\"nowrap\" malt=\"可修改，主要是方便用户管理注册卡，给注册卡备注一些信息\">标签</td>\t\t\r\n<td nowrap=\"nowrap\" malt=\"注册卡自激活日期算起的可使用天数\">天数</td>\r\n<td nowrap=\"nowrap\" malt=\"在某些软件里，你可能要按点计费，该点数是按点扣费的基础功能\">点数</td>\r\n<td nowrap=\"nowrap\" malt=\"通道数大于1的，客户可用同一注册卡号和不同的通道号，同时在不同的电脑上登陆\">通道</td>\r\n<td nowrap=\"nowrap\" malt=\"附属性不可以修改，注册卡登陆后可以取得该属性，你可以利用该属性来实现不同属性可使用不同的客户端软件功能<br>为防止附属性太长破坏界面，附属性放在文本框中显示\">附属性</td>\r\n<td nowrap=\"nowrap\" malt=\"该注册卡是属于哪一个后台帐号的\">所属</td>\r\n<td nowrap=\"nowrap\" malt=\"该注册卡充值用户的日期和用户名\">充值日期用户</td>\r\n<td nowrap=\"nowrap\" malt=\"添加该注册卡的订单号，为节省显示空间，只显示前10位和后四位，鼠标单击订单号可复制完整的24位订单号到剪贴板\">订单号</td>\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr nodata=1 class=trd><td colspan=12>没找到注册卡</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class='" . ($HY_970be7709f584ff59c["isback"] == 1 ? "trdisback" : (0 < $HY_970be7709f584ff59c["islock"] ? "trdislock" : "trd")) . "' id='trd";
		echo $HY_970be7709f584ff59c["keys"];
		echo "'>";
		echo "<td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
		echo $HY_970be7709f584ff59c["keys"];
		echo "' id='check";
		echo $HY_970be7709f584ff59c["keys"];
		echo "'>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";

		if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
			echo isset($HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["delmid"]]) ? $HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["delmid"]] : "";
		}
		else {
			echo "<img class='hand' malt='锁级别：" . $HY_970be7709f584ff59c["islock"] . ",  点击此按钮锁定或解锁注册卡'  op='" . ($HY_970be7709f584ff59c["islock"] == 0 ? "锁定" : "解锁") . "' lock='" . $HY_970be7709f584ff59c["islock"] . "' src='" . INSTALLPATH . "kss_inc/images/" . ($HY_970be7709f584ff59c["islock"] == 0 ? "b_usrcheck.png" : "b_uncheck.png") . "'>";

			if (7 < $HY_825ad51e000ddc6ca5["level"]) {
				echo "&nbsp;<img class='hand' malt='点击将该注册卡放入回收站'  op='删除' src='" . INSTALLPATH . "kss_inc/images/b_empty.png'>";
			}
		}

		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo hy_cf2f0673819dddd4a1($HY_2ab9e26cf32802e7c1 == "_recycle" ? $HY_970be7709f584ff59c["deltime"] : $HY_970be7709f584ff59c["addtime"], "m-d H:i:s");
		echo "</td>";
		echo "<td nowrap='nowrap' id='copy_" . hy_6bfeee86cee6e24af6(16) . "' class='keynum' copyt='";
		echo $HY_970be7709f584ff59c["keyfix"];
		echo $HY_970be7709f584ff59c["keys"];
		echo $HY_970be7709f584ff59c["keyspassword"];
		echo "'>";
		echo $HY_970be7709f584ff59c["keyfix"];
		echo $HY_970be7709f584ff59c["keys"];
		echo "*";
		echo substr($HY_970be7709f584ff59c["keyspassword"], 18);
		echo "</td>";
		echo "<td nowrap='nowrap'><input type=text class=viewinput  maxlength='50' oldval='";
		echo $HY_970be7709f584ff59c["tag"];
		echo "'";
		echo $HY_2ab9e26cf32802e7c1 == "_recycle" ? " Readonly" : "";
		echo " value='";
		echo hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["tag"]);
		echo "'>";
		echo $HY_2ab9e26cf32802e7c1 != "_recycle" ? "<input type='button' class='savetag' value=''>" : "";
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["cday"] * 1;
		echo "</td>";
		echo "<td>";
		echo $HY_970be7709f584ff59c["points"];
		echo "</td>";
		echo "<td>";
		echo $HY_970be7709f584ff59c["linknum"];
		echo "</td>";
		echo "<td><input type=text class=viewinput Readonly value='";
		echo hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["keyextattr"]);
		echo "'></td><td nowrap='nowrap'>";
		echo $HY_a4e785fb83af20723e[$HY_970be7709f584ff59c["managerid"]];
		echo "</td>";
		echo "<td nowrap='nowrap' ";
		echo $HY_970be7709f584ff59c["cztime"] == 0 ? "" : "title='" . hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["cztime"]) . "'";
		echo ">";
		echo $HY_970be7709f584ff59c["cztime"] == 0 ? "-" : hy_cf2f0673819dddd4a1($HY_970be7709f584ff59c["cztime"], "m-d H:i") . "<input type=text class=viewinput Readonly value='" . hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["czusername"]) . "'>";
		echo "</td>";
		echo "<td nowrap='nowrap' id='copy_" . hy_6bfeee86cee6e24af6(15) . "' class='keynum' copyt='";
		echo $HY_970be7709f584ff59c["ordernum"];
		echo "'>";
		echo substr($HY_970be7709f584ff59c["ordernum"], 0, 10);
		echo "*";
		echo substr($HY_970be7709f584ff59c["ordernum"], 20);
		echo "</td>";
		echo "</tr>\r\n";
	}
}

echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<img  src=\"";
echo INSTALLPATH;
echo "kss_inc/images/arrow_ltr.png\" style=\"vertical-align:middle\"><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"> ━▶\r\n&nbsp;&nbsp;<input type='button' id='copyselkey' malt='将选中的卡号全部复制到剪贴板' value='复制卡号' class='submitbtn'>\r\n";

if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
	if (7 < $HY_825ad51e000ddc6ca5["level"]) {
		echo "&nbsp;&nbsp;<input type='submit' name='op' id='recoverykey' malt='将选中的卡号从回收站表还原到注册卡表中去' value='还原' class='submitbtn'>";
	}
}
else {
	echo "&nbsp;&nbsp;<input type='submit' name='op' id='lockkey' malt='将选中的卡号锁定' value='锁定' class='submitbtn'>";
	echo "&nbsp;&nbsp;<input type='submit' name='op' id='unlockkey' malt='将选中的卡号解锁' value='解锁' class='submitbtn'>";
	if ((7 < $HY_825ad51e000ddc6ca5["level"]) || hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], 52)) {
		echo "&nbsp;&nbsp;<input type='submit' name='op' id='delkey' malt='将选中的卡号移动到回收站中去' value='删除' class='submitbtn'>";
		echo "&nbsp;&nbsp;<input type='submit' name='op' id='backkey' malt='将选中的某一代理的卡号退回，系统会返还部份金额到代理的帐号' value='退卡' class='submitbtn'>";
	}

	echo "&nbsp;&nbsp;<input type='submit' name='op' id='setalltag' malt='将选中的卡号标签都设置为指定值' value='设置标签' class='submitbtn'>━▶<input maxlength='50' type=text id='newtag' name='newtag' class=viewinput value=''>";
}

echo "\t\t\r\n</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
/*
echo "<div id=\"altmsg001\" style=\"position:absolute;top:75px;left:80px;\"><img src=\"../kss_inc/images/altmsg001.gif\"></div>\r\n<script>\r\n$(document).ready(function(){ \r\n$('#altmsg001').bind(\"mouseover\",function(){$(this).hide();})\r\n});\r\n</script>\r\n</body>\r\n</html>";
*/
?>
<div id="altmsg001" style="position:absolute;top:75px;left:80px;"><img src="../kss_inc/images/altmsg001.gif"></div>
<script>
$(document).ready(function(){ 
	$('#altmsg001').bind("mouseover",function(){$(this).hide();})
});
</script>
</body>
</html>
