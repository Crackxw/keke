<?php

defined("YH2") || exit("Access denied to view this page!");

if (SVRID == 2) {
	exit("kssdata" . QQ120);
}

hy_0f33c82b02582faef9(0);

if ($HY_810d15d31408c982b2["softmode"] != "USOFT") {
	exit("kssdata" . QQ121);
}

if (2 < $HY_810d15d31408c982b2["softstatus"]) {
	exit("kssdata" . QQ122);
}

if (((strlen($HY_500e14df6c9dae523a["czkey"]) + 1) % 33) != 0) {
	exit("kssdata" . QQ123);
}

$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["username"]);

if ($HY_d0620d2a7bcbacbe3f !== true) {
	exit("kssdata" . QQ124 . $HY_d0620d2a7bcbacbe3f);
}

$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["czkey"]);

if ($HY_d0620d2a7bcbacbe3f !== true) {
	exit("kssdata" . QQ125 . $HY_d0620d2a7bcbacbe3f);
}

$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");

if (empty($HY_c27c05c8ec8b51c4d4)) {
	exit("kssdata" . QQ126);
}

if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
	exit("kssdata" . QQ127);
}

if (PETIME <= $HY_c27c05c8ec8b51c4d4["endtime"]) {
	exit("kssdata" . QQ128);
}

$HY_0ccc0f3f98ce3ff46a = array("username" => $HY_c27c05c8ec8b51c4d4["username"], "starttime" => $HY_c27c05c8ec8b51c4d4["starttime"], "endtime" => $HY_c27c05c8ec8b51c4d4["endtime"], "cztimes" => $HY_c27c05c8ec8b51c4d4["cztimes"], "cday" => $HY_c27c05c8ec8b51c4d4["cday"], "points" => $HY_c27c05c8ec8b51c4d4["points"], "managerid" => $HY_c27c05c8ec8b51c4d4["managerid"]);
$HY_9bdabb84853caee08d = 0;

if ($HY_c27c05c8ec8b51c4d4["endtime"] < $HY_cfaf262aef3e4af400) {
	$HY_0ccc0f3f98ce3ff46a["starttime"] = $HY_cfaf262aef3e4af400;
	$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_cfaf262aef3e4af400;
	$HY_0ccc0f3f98ce3ff46a["cday"] = 0;
	$HY_9bdabb84853caee08d = 8;
}

$HY_45b07acb8d8e2edd20 = $HY_0ccc0f3f98ce3ff46a["cday"];
$HY_e873617018c41f6447 = $HY_0ccc0f3f98ce3ff46a["points"];
$HY_7ac34ab054ad66090a = explode("|", $HY_500e14df6c9dae523a["czkey"]);

if (5 < count($HY_7ac34ab054ad66090a)) {
	exit("kssdata" . QQ128);
}

$HY_d38b551a7b082d6e3c = array_unique($HY_7ac34ab054ad66090a);

if (count($HY_7ac34ab054ad66090a) != count($HY_d38b551a7b082d6e3c)) {
	exit("kssdata" . QQ129);
}

$HY_d35b2d01cf74a2d1d5 = array();
$HY_8a84090e20ddb74cff = array();
$HY_ce5542b2938336d2ba = array();

foreach ($HY_7ac34ab054ad66090a as $HY_9964e5451aae19688f ) {
	$HY_127ff210e2c6a31011 = substr($HY_9964e5451aae19688f, 4, 6);
	$HY_8a84090e20ddb74cff[$HY_127ff210e2c6a31011] = substr($HY_9964e5451aae19688f, 4, 6);
	$HY_d35b2d01cf74a2d1d5[$HY_127ff210e2c6a31011] = substr($HY_9964e5451aae19688f, 0, 4);
	$HY_ce5542b2938336d2ba[$HY_127ff210e2c6a31011] = substr($HY_9964e5451aae19688f, 10);
}

$HY_80a58590ed884577aa = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_z_key_" . $HY_12dbc503d0c6c33ec7 . " where `keys` in ('" . join("','", $HY_8a84090e20ddb74cff) . "') and isback=0");

if (empty($HY_80a58590ed884577aa)) {
	hy_0f33c82b02582faef9(1);
	exit("kssdata" . QQ130);
}

if (count($HY_80a58590ed884577aa) != count($HY_7ac34ab054ad66090a)) {
	$HY_dfb6820a73cd9a022f = "";
	hy_0f33c82b02582faef9(1);

	foreach ($HY_80a58590ed884577aa as $HY_9964e5451aae19688f ) {
		if (!in_array($HY_9964e5451aae19688f["keys"], $HY_8a84090e20ddb74cff)) {
			$HY_dfb6820a73cd9a022f .= QQ131 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ132 . "\r\n";
		}
	}

	exit("kssdata" . $HY_dfb6820a73cd9a022f);
}

$HY_dfb6820a73cd9a022f = "";
$HY_b5f35b12087d671753 = 0;
$HY_186cc8042fb6833fa8 = 0;
$HY_fa5ff756a77c8f1309 = 0;

foreach ($HY_80a58590ed884577aa as $HY_9964e5451aae19688f ) {
	if (($HY_9964e5451aae19688f["keyfix"] != $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]]) || ($HY_9964e5451aae19688f["keyspassword"] != $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]])) {
		$HY_dfb6820a73cd9a022f = QQ131 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ133 . "，\r\n";
	}
	else if ($HY_9964e5451aae19688f["islock"] != 0) {
		$HY_dfb6820a73cd9a022f = QQ131 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ134 . "\r\n";
	}
	else if (0 < $HY_9964e5451aae19688f["cztime"]) {
		$HY_dfb6820a73cd9a022f = QQ131 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ135 . "\r\n";
	}
	else {
		if ($HY_9964e5451aae19688f["keyfix"] == $HY_810d15d31408c982b2["czzs_keytypeid"]) {
			$HY_b5f35b12087d671753 = $HY_b5f35b12087d671753 + 1;
		}

		$HY_186cc8042fb6833fa8 = $HY_186cc8042fb6833fa8 + $HY_9964e5451aae19688f["cday"];
		$HY_fa5ff756a77c8f1309 = $HY_fa5ff756a77c8f1309 + $HY_9964e5451aae19688f["points"];
		$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_0ccc0f3f98ce3ff46a["cday"] + $HY_9964e5451aae19688f["cday"];
		$HY_0ccc0f3f98ce3ff46a["points"] = $HY_0ccc0f3f98ce3ff46a["points"] + $HY_9964e5451aae19688f["points"];
		$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_0ccc0f3f98ce3ff46a["endtime"] + ($HY_9964e5451aae19688f["cday"] * 86400);
		$HY_0ccc0f3f98ce3ff46a["cztimes"] = $HY_0ccc0f3f98ce3ff46a["cztimes"] + 1;
		$HY_0ccc0f3f98ce3ff46a["managerid"] = $HY_9964e5451aae19688f["managerid"];

		if (!isset($HY_0ccc0f3f98ce3ff46a["keyextattr"])) {
			$HY_0ccc0f3f98ce3ff46a["keyextattr"] = $HY_9964e5451aae19688f["keyextattr"];
			$HY_0ccc0f3f98ce3ff46a["linknum"] = $HY_9964e5451aae19688f["linknum"];
		}
		else {
			if ($HY_0ccc0f3f98ce3ff46a["keyextattr"] != $HY_9964e5451aae19688f["keyextattr"]) {
				exit("kssdata" . QQ136);
			}

			if ($HY_0ccc0f3f98ce3ff46a["linknum"] != $HY_9964e5451aae19688f["linknum"]) {
				exit("kssdata" . QQ137);
			}
		}

		if ($HY_810d15d31408c982b2["onetimeskeyattrid"] == $HY_9964e5451aae19688f["keyfix"]) {
			$HY_c27c05c8ec8b51c4d4["isusetestkey"] = $HY_c27c05c8ec8b51c4d4["isusetestkey"] + 1;
			$HY_0ccc0f3f98ce3ff46a["isusetestkey"] = $HY_c27c05c8ec8b51c4d4["isusetestkey"];

			if (1 < $HY_c27c05c8ec8b51c4d4["isusetestkey"]) {
				exit("kssdata" . $HY_9964e5451aae19688f["keyfix"] . QQ138);
			}
		}
	}
}

if ($HY_dfb6820a73cd9a022f != "") {
	exit("kssdata" . $HY_dfb6820a73cd9a022f);
}

$HY_461e600f70c429982d = array();

if (0 < $HY_c27c05c8ec8b51c4d4["cztimes"]) {
	if ($HY_c27c05c8ec8b51c4d4["keyextattr"] != $HY_0ccc0f3f98ce3ff46a["keyextattr"]) {
		exit("kssdata" . QQ139);
	}

	if ($HY_c27c05c8ec8b51c4d4["linknum"] != $HY_0ccc0f3f98ce3ff46a["linknum"]) {
		exit("kssdata" . QQ140);
	}
}

$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . "," . (1 + $HY_9bdabb84853caee08d) . ",'" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_45b07acb8d8e2edd20 . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . $HY_e873617018c41f6447 . "," . $HY_0ccc0f3f98ce3ff46a["points"] . ",'" . $HY_500e14df6c9dae523a["czkey"] . "','')";
$HY_6043eeb7bc209108cd = 0;
$HY_e0557e9f50a0fc5c72 = 0;
if (($HY_810d15d31408c982b2["czzs_keytypeid"] != "") && ($HY_810d15d31408c982b2["czzs_number"] != 0) && ($HY_810d15d31408c982b2["czzs_cday"] != 0)) {
	if ($HY_810d15d31408c982b2["czzs_number"] <= $HY_b5f35b12087d671753) {
		$HY_6043eeb7bc209108cd = floor($HY_b5f35b12087d671753 / $HY_810d15d31408c982b2["czzs_number"]) * $HY_810d15d31408c982b2["czzs_cday"];
		$HY_e0557e9f50a0fc5c72 = floor($HY_b5f35b12087d671753 / $HY_810d15d31408c982b2["czzs_number"]) * $HY_810d15d31408c982b2["czzs_points"];

		if ($HY_6043eeb7bc209108cd != 0) {
			$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_0ccc0f3f98ce3ff46a["cday"] + $HY_6043eeb7bc209108cd;
			$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_0ccc0f3f98ce3ff46a["endtime"] + ($HY_6043eeb7bc209108cd * 86400);
		}

		if ($HY_e0557e9f50a0fc5c72 != 0) {
			$HY_0ccc0f3f98ce3ff46a["points"] = $HY_0ccc0f3f98ce3ff46a["points"] + $HY_e0557e9f50a0fc5c72;
		}

		$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(" . $HY_cfaf262aef3e4af400 . ",7,'" . $HY_500e14df6c9dae523a["username"] . "'," . ($HY_45b07acb8d8e2edd20 + $HY_186cc8042fb6833fa8) . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . ($HY_e873617018c41f6447 + $HY_fa5ff756a77c8f1309) . "," . $HY_0ccc0f3f98ce3ff46a["points"] . ",'" . $HY_500e14df6c9dae523a["czkey"] . "','')";
	}
}

$HY_a44ca42f294df426f3 = "";
$HY_75146321b224b142d1 = 0;
$HY_22488e33100fa92fd8 = 0;
if (($HY_810d15d31408c982b2["tg_addtimetype"] == 2) && ($HY_c27c05c8ec8b51c4d4["parentuser"] != "")) {
	$HY_9e5f0abf225a6ffcc8 = 1;
	$HY_2d296db84ebd30eda4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_c27c05c8ec8b51c4d4["parentuser"] . "'");

	if (empty($HY_2d296db84ebd30eda4)) {
		$HY_9e5f0abf225a6ffcc8 = 0;
	}
	else {
		if (PETIME <= $HY_2d296db84ebd30eda4["endtime"]) {
			$HY_9e5f0abf225a6ffcc8 = 0;
		}

		if ((intval($HY_2d296db84ebd30eda4["islock"]) != 0) || (intval($HY_2d296db84ebd30eda4["endtime"]) < $HY_cfaf262aef3e4af400)) {
			$HY_9e5f0abf225a6ffcc8 = 0;
		}
	}

	if ($HY_9e5f0abf225a6ffcc8 == 0) {
		$HY_0ccc0f3f98ce3ff46a["parentuser"] = "";
	}
	else {
		$HY_4b1298843ea0658df9 = $HY_0ccc0f3f98ce3ff46a["cday"];
		$HY_68f1d4172361573155 = $HY_0ccc0f3f98ce3ff46a["points"];
		if ((0 < $HY_810d15d31408c982b2["tg_newuseraddtime"]) || (0 < $HY_810d15d31408c982b2["tg_points1"])) {
			if (0 < $HY_810d15d31408c982b2["tg_newuseraddtime"]) {
				$HY_75146321b224b142d1 = round(($HY_186cc8042fb6833fa8 * $HY_810d15d31408c982b2["tg_newuseraddtime"]) / 100, 2);
				$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_0ccc0f3f98ce3ff46a["cday"] + $HY_75146321b224b142d1;
				$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_0ccc0f3f98ce3ff46a["endtime"] + ($HY_75146321b224b142d1 * 86400);
			}

			if (0 < $HY_810d15d31408c982b2["tg_points1"]) {
				$HY_22488e33100fa92fd8 = floor(($HY_fa5ff756a77c8f1309 * $HY_810d15d31408c982b2["tg_points1"]) / 100);
				$HY_0ccc0f3f98ce3ff46a["points"] = $HY_0ccc0f3f98ce3ff46a["points"] + $HY_22488e33100fa92fd8;
			}

			$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",4,'" . $HY_500e14df6c9dae523a["username"] . "'," . ($HY_45b07acb8d8e2edd20 + $HY_186cc8042fb6833fa8 + $HY_6043eeb7bc209108cd) . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . ($HY_e873617018c41f6447 + $HY_fa5ff756a77c8f1309 + $HY_e0557e9f50a0fc5c72) . "," . $HY_0ccc0f3f98ce3ff46a["points"] . ",'','" . $HY_2d296db84ebd30eda4["username"] . "')";
		}

		$HY_32989549cea757aed4 = array();
		if ((0 < $HY_810d15d31408c982b2["tg_parentuseraddtime"]) || (0 < $HY_810d15d31408c982b2["tg_points2"])) {
			$HY_f8c329d143b4e23d2a = $HY_2d296db84ebd30eda4["cday"];
			$HY_ef82cc6059125bbbd2 = $HY_2d296db84ebd30eda4["points"];
			$HY_32989549cea757aed4["cday"] = $HY_2d296db84ebd30eda4["cday"];
			$HY_32989549cea757aed4["points"] = $HY_2d296db84ebd30eda4["points"];
			if ((0 < $HY_810d15d31408c982b2["tg_parentuseraddtime"]) && (0 < $HY_186cc8042fb6833fa8)) {
				$HY_28aed9af72c73eb7ab = round(($HY_186cc8042fb6833fa8 * $HY_810d15d31408c982b2["tg_parentuseraddtime"]) / 100, 2);
				$HY_32989549cea757aed4["cday"] = $HY_2d296db84ebd30eda4["cday"] + $HY_28aed9af72c73eb7ab;
				$HY_32989549cea757aed4["endtime"] = $HY_2d296db84ebd30eda4["endtime"] + ($HY_28aed9af72c73eb7ab * 86400);
				$HY_a44ca42f294df426f3 = QQ141 . $HY_28aed9af72c73eb7ab . "天";
			}

			if ((0 < $HY_810d15d31408c982b2["tg_points2"]) && (0 < $HY_fa5ff756a77c8f1309)) {
				$HY_c7fafc728a2210723d = floor(($HY_fa5ff756a77c8f1309 * $HY_810d15d31408c982b2["tg_points2"]) / 100);
				$HY_32989549cea757aed4["points"] = $HY_2d296db84ebd30eda4["points"] + $HY_c7fafc728a2210723d;
				$HY_a44ca42f294df426f3 .= $HY_c7fafc728a2210723d . QQ142;
			}

			if ($HY_a44ca42f294df426f3 != "") {
				$HY_a44ca42f294df426f3 .= "，";
				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_32989549cea757aed4, "username='" . $HY_c27c05c8ec8b51c4d4["parentuser"] . "'", "sql");

				if ($HY_173d86697f24ffa1ee !== false) {
					$HY_461e600f70c429982d[] = $HY_173d86697f24ffa1ee;
				}

				$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",3,'" . $HY_2d296db84ebd30eda4["username"] . "'," . $HY_2d296db84ebd30eda4["cday"] . "," . $HY_32989549cea757aed4["cday"] . "," . $HY_2d296db84ebd30eda4["points"] . "," . $HY_32989549cea757aed4["points"] . ",'','" . $HY_500e14df6c9dae523a["username"] . "')";
			}
		}
	}
}

$HY_8dc7346fa0c91f0d82 = $HY_186cc8042fb6833fa8 + $HY_6043eeb7bc209108cd + $HY_75146321b224b142d1;
$HY_86b44d7444dbc363b3 = $HY_fa5ff756a77c8f1309 + $HY_e0557e9f50a0fc5c72 + $HY_22488e33100fa92fd8;
$HY_9db413d5cc1af11aad = $HY_a44ca42f294df426f3;
$HY_2b051c35c3cffb9826 = "update kss_z_key_" . $HY_12dbc503d0c6c33ec7 . " set `cztime`=" . $HY_cfaf262aef3e4af400 . ",`czusername`='" . $HY_500e14df6c9dae523a["username"] . "' where `keys` in ('" . join("','", $HY_8a84090e20ddb74cff) . "')";
$HY_a7e2ecaf0ec8e8367d = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

if ($HY_a7e2ecaf0ec8e8367d !== true) {
	hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 239);
	exit("kssdata" . QQ143 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
}

$HY_2b051c35c3cffb9826 = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_0ccc0f3f98ce3ff46a, "username='" . $HY_500e14df6c9dae523a["username"] . "'", "sql");
$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

if ($HY_173d86697f24ffa1ee !== true) {
	hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 245);
	exit("kssdata" . QQ144 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
}

if (!empty($HY_461e600f70c429982d)) {
	foreach ($HY_461e600f70c429982d as $HY_970be7709f584ff59c ) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c, "sync");

		if ($HY_173d86697f24ffa1ee !== true) {
			hy_fb45b18d1c30ed39eb($HY_970be7709f584ff59c, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 253);
		}
	}
}

exit("kssdata" . $HY_9db413d5cc1af11aad . QQ145 . $HY_8dc7346fa0c91f0d82 . "天" . $HY_86b44d7444dbc363b3 . QQ142);

?>
