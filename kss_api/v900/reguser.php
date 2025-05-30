<?php

function HY_948df1d7562ac7c650($HY_86ee227a9ad909da10)
{
	global $HY_df1cef6425c0c5d60a;
	global $HY_82d6536edf704aabc5;
	$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_df1cef6425c0c5d60a);
	exit($HY_86ee227a9ad909da10);
}

defined("YH2") || exit("Access denied to view this page!");
hy_0f33c82b02582faef9(0, $HY_f47b2b08a81187ece1);

if ($HY_810d15d31408c982b2["softmode"] == "USOFT") {
	if (($HY_810d15d31408c982b2["softstatus"] == 2) || ($HY_810d15d31408c982b2["softstatus"] == 4)) {
		exit("kssdata" . QQ168);
	}

	if (SVRID == 2) {
		exit("kssdata" . QQ169);
	}

	$HY_173d86697f24ffa1ee = hy_cc1a8f29be40277f5f($HY_6993af4b451676aba9);

	if ($HY_173d86697f24ffa1ee !== true) {
		exit("kssdata" . QQ170 . $HY_173d86697f24ffa1ee);
	}
}
else {
	if ($HY_810d15d31408c982b2["softstatus"] == 2) {
		exit("crypteno114");
	}

	if (hy_cc1a8f29be40277f5f($HY_6993af4b451676aba9) !== true) {
		exit("crypteno123");
	}
}

if (0 < $HY_5581876e03ef6b60f7["maxusernum"]) {
	$HY_1e68cb27ce943e709e = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum,sum(`linknum`) from kss_z_user_" . $HY_12dbc503d0c6c33ec7);

	if ($HY_5581876e03ef6b60f7["maxusernum"] <= $HY_1e68cb27ce943e709e["tnum"] + (($HY_1e68cb27ce943e709e["tnum"] - $HY_1e68cb27ce943e709e["tnum"]) / 2)) {
		if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
			exit("crypteno109");
		}

		exit("kssdata" . QQ171);
	}
}

$HY_80e97cb00b2e1d991c = array();
$HY_de628584d0423ad44a = false;

if ($HY_810d15d31408c982b2["softmode"] == "USOFT") {
	if (strlen($HY_500e14df6c9dae523a["czkey"] == "")) {
		if ($HY_810d15d31408c982b2["nokeyreg"] == "0.00") {
			exit("kssdata" . QQ172);
		}
		else {
			if (SVRID == 2) {
				exit("kssdata" . QQ173);
			}

			$HY_7e52f3de9d4cbca590 = "('" . join("','", $HY_6c9563bc30cc4d3152) . "')";
			$HY_bf32204d93c73cf4e5 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_log_havereg where `pccode` in " . $HY_7e52f3de9d4cbca590 . " and `softid`=" . $HY_810d15d31408c982b2["id"]);

			if (!empty($HY_bf32204d93c73cf4e5)) {
				exit("kssdata" . QQ174);
			}

			foreach ($HY_6c9563bc30cc4d3152 as $HY_970be7709f584ff59c ) {
				$HY_80e97cb00b2e1d991c[] = "insert into kss_tb_log_havereg (`softid`,`addtime`,`pccode`) values (" . $HY_810d15d31408c982b2["id"] . "," . time() . ",'" . $HY_970be7709f584ff59c . "')";
			}

			$HY_de628584d0423ad44a = true;
		}
	}
	else if (((strlen($HY_500e14df6c9dae523a["czkey"]) + 1) % 33) != 0) {
		exit("kssdata" . QQ175);
	}
}

if (100 < hy_cfd7029aa774332944($HY_500e14df6c9dae523a["bdinfo"])) {
	exit("kssdata" . QQ176);
}

$HY_60545cb2450aa0ae46 = crc32($HY_810d15d31408c982b2["softcode"] . $HY_500e14df6c9dae523a["username"]);
$HY_df1cef6425c0c5d60a = "regu" . sprintf("%u", $HY_60545cb2450aa0ae46);
if (defined("OnlyOneBdinfo") && !empty($HY_500e14df6c9dae523a["bdinfo"])) {
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `bdinfo`='" . mysql_real_escape_string($HY_500e14df6c9dae523a["bdinfo"]) . "'");

	if (!empty($HY_173d86697f24ffa1ee)) {
		exit("kssdata该绑定信息已被其它帐号使用！");
	}
}

if ($HY_f47b2b08a81187ece1 == 0) {
	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["username"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ177 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["czkey"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ178 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["password"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ179 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["password2"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ180 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["bdinfo"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ181 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_91c1bd98942e91bf39 = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3($HY_df1cef6425c0c5d60a);

	if ($HY_91c1bd98942e91bf39 !== true) {
		exit("kssdata" . QQ234);
	}

	$HY_7485c060cdc2c20b2d = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "'", 1, 1);

	if (!empty($HY_7485c060cdc2c20b2d)) {
		hy_948df1d7562ac7c650("kssdata" . QQ182);
	}
	else {
		$HY_dd112030b0c4ed22d1 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "_recycle` where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");

		if (!empty($HY_dd112030b0c4ed22d1)) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "_recycle` set `username`=concat('delete_',`username`) where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");
		}
	}

	if ($HY_de628584d0423ad44a === true) {
		$HY_0ccc0f3f98ce3ff46a = array("managerid" => $HY_5581876e03ef6b60f7["id"], "username" => $HY_500e14df6c9dae523a["username"], "password" => $HY_500e14df6c9dae523a["password"], "password2" => $HY_500e14df6c9dae523a["password2"], "cday" => $HY_810d15d31408c982b2["nokeyreg"], "points" => $HY_810d15d31408c982b2["nokeyreg_points"], "tag" => "FreeUser", "bdinfo" => $HY_500e14df6c9dae523a["bdinfo"], "addtime" => $HY_cfaf262aef3e4af400, "starttime" => $HY_cfaf262aef3e4af400, "endtime" => $HY_cfaf262aef3e4af400 + ($HY_810d15d31408c982b2["nokeyreg"] * 86400), "isusetestkey" => 1, "intro" => "无卡注册");
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_0ccc0f3f98ce3ff46a, "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			if (!empty($HY_80e97cb00b2e1d991c)) {
				foreach ($HY_80e97cb00b2e1d991c as $HY_970be7709f584ff59c ) {
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c, "sync");
				}
			}

			hy_948df1d7562ac7c650("kssdata" . QQ183 . $HY_810d15d31408c982b2["nokeyreg"] . "天" . ($HY_810d15d31408c982b2["nokeyreg_points"] != 0 ? $HY_810d15d31408c982b2["nokeyreg_points"] . QQ142 : "") . "。");
		}
		else {
			hy_948df1d7562ac7c650("kssdata" . QQ184 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
	}
}
else {
	$HY_91c1bd98942e91bf39 = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3($HY_df1cef6425c0c5d60a);

	if ($HY_91c1bd98942e91bf39 !== true) {
		exit("crypteno116");
	}

	$HY_98b6bd16d0cbc1192e = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "'", 1, 1);

	if (!empty($HY_98b6bd16d0cbc1192e)) {
		hy_948df1d7562ac7c650("crypteno117");
	}
}

$HY_0ccc0f3f98ce3ff46a = array("username" => $HY_500e14df6c9dae523a["username"], "password" => $HY_500e14df6c9dae523a["password"], "password2" => $HY_500e14df6c9dae523a["password2"], "bdinfo" => $HY_500e14df6c9dae523a["bdinfo"], "addtime" => $HY_cfaf262aef3e4af400, "starttime" => $HY_cfaf262aef3e4af400);

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_0ccc0f3f98ce3ff46a["pccode"] = $HY_6993af4b451676aba9;
}

if ((SVRID == 2) && ($HY_810d15d31408c982b2["softmode"] == "USOFT")) {
	$HY_0ccc0f3f98ce3ff46a["istempuser"] = 1;
}

if ((0 < $HY_810d15d31408c982b2["tg_addtimetype"]) && ($HY_f47b2b08a81187ece1 == 0)) {
	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["puser"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		hy_948df1d7562ac7c650("kssdata" . QQ185 . $HY_d0620d2a7bcbacbe3f);
	}

	if ((hy_cfd7029aa774332944($HY_500e14df6c9dae523a["puser"]) != 0) && (hy_cfd7029aa774332944($HY_500e14df6c9dae523a["puser"]) < 3)) {
		hy_948df1d7562ac7c650("kssdata" . QQ186);
	}

	if ($HY_500e14df6c9dae523a["puser"] != "") {
		$HY_2d296db84ebd30eda4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["puser"] . "'");

		if (empty($HY_2d296db84ebd30eda4)) {
			hy_948df1d7562ac7c650("kssdata" . QQ187);
		}

		if (PETIME <= $HY_2d296db84ebd30eda4["endtime"]) {
			hy_948df1d7562ac7c650("kssdata" . QQ188);
		}

		if (intval($HY_2d296db84ebd30eda4["islock"]) != 0) {
			hy_948df1d7562ac7c650("kssdata" . QQ189);
		}

		if (intval($HY_2d296db84ebd30eda4["endtime"]) < time()) {
			hy_948df1d7562ac7c650("kssdata" . QQ190);
		}

		$HY_0ccc0f3f98ce3ff46a["parentuser"] = $HY_500e14df6c9dae523a["puser"];
	}
}
else {
	$HY_500e14df6c9dae523a["puser"] = "";
}

if ($HY_f47b2b08a81187ece1 == 0) {
	$HY_7ac34ab054ad66090a = explode("|", $HY_500e14df6c9dae523a["czkey"]);

	if (5 < count($HY_7ac34ab054ad66090a)) {
		hy_948df1d7562ac7c650("kssdata" . QQ128);
	}

	$HY_d38b551a7b082d6e3c = array_unique($HY_7ac34ab054ad66090a);

	if (count($HY_7ac34ab054ad66090a) != count($HY_d38b551a7b082d6e3c)) {
		hy_948df1d7562ac7c650("kssdata" . QQ129);
	}
}

$HY_461e600f70c429982d = array();

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_80a58590ed884577aa = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_key_" . $HY_12dbc503d0c6c33ec7 . " where `keys`='" . substr($HY_500e14df6c9dae523a["czkey"], 4, 6) . "' and `keyfix`='" . substr($HY_500e14df6c9dae523a["czkey"], 0, 4) . "' and `keyspassword`='" . substr($HY_500e14df6c9dae523a["czkey"], 10) . "' and cztime=0 ");

	if (empty($HY_80a58590ed884577aa)) {
		hy_0f33c82b02582faef9(1);
		hy_948df1d7562ac7c650("crypteno111");
	}

	if ($HY_80a58590ed884577aa["islock"] != 0) {
		hy_948df1d7562ac7c650("crypteno112");
	}

	if ($HY_80a58590ed884577aa["isback"] != 0) {
		hy_948df1d7562ac7c650("crypteno113");
	}

	$HY_0ccc0f3f98ce3ff46a["managerid"] = $HY_80a58590ed884577aa["managerid"];
	$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_80a58590ed884577aa["cday"];
	$HY_0ccc0f3f98ce3ff46a["points"] = $HY_80a58590ed884577aa["points"];
	$HY_0ccc0f3f98ce3ff46a["tag"] = $HY_80a58590ed884577aa["tag"];
	$HY_0ccc0f3f98ce3ff46a["linknum"] = $HY_80a58590ed884577aa["linknum"];
	$HY_0ccc0f3f98ce3ff46a["keyextattr"] = $HY_80a58590ed884577aa["keyextattr"];
	$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_cfaf262aef3e4af400 + ($HY_80a58590ed884577aa["cday"] * 86400);
	$HY_0ccc0f3f98ce3ff46a["cztimes"] = 1;
	$HY_2b051c35c3cffb9826 = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_0ccc0f3f98ce3ff46a, "sql");
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

	if ($HY_173d86697f24ffa1ee !== true) {
		hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 224);
		hy_948df1d7562ac7c650("crypteno116");
	}

	$HY_2b051c35c3cffb9826 = "update `kss_z_key_" . $HY_12dbc503d0c6c33ec7 . "` set cztime=" . $HY_cfaf262aef3e4af400 . ",czusername='" . $HY_500e14df6c9dae523a["username"] . "' where `keys`='" . $HY_80a58590ed884577aa["keys"] . "'";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

	if ($HY_173d86697f24ffa1ee !== true) {
		hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 231);
	}

	if (SVRID == 2) {
		$HY_2b051c35c3cffb9826 = "insert into kss_tb_sql_active (`tbname`,`username`,`starttime`,`pccode`) values ('" . $HY_12dbc503d0c6c33ec7 . "','" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_cfaf262aef3e4af400 . ",'" . $HY_6993af4b451676aba9 . "')";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");

		if ($HY_173d86697f24ffa1ee !== true) {
			hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 237);
		}
	}

	$HY_f47b2b08a81187ece1 = 2;
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");
}
else {
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
		hy_948df1d7562ac7c650("kssdata" . QQ130);
	}

	if (count($HY_80a58590ed884577aa) != count($HY_7ac34ab054ad66090a)) {
		hy_0f33c82b02582faef9(1);
		$HY_dfb6820a73cd9a022f = "";

		foreach ($HY_80a58590ed884577aa as $HY_9964e5451aae19688f ) {
			if (!in_array($HY_9964e5451aae19688f["keys"], $HY_8a84090e20ddb74cff)) {
				$HY_dfb6820a73cd9a022f .= QQ131 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ132 . "\r\n";
			}
		}

		hy_948df1d7562ac7c650("kssdata" . $HY_dfb6820a73cd9a022f);
	}

	$HY_dfb6820a73cd9a022f = "";
	$HY_b5f35b12087d671753 = 0;

	foreach ($HY_80a58590ed884577aa as $HY_9964e5451aae19688f ) {
		if (($HY_9964e5451aae19688f["keyfix"] != $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]]) || ($HY_9964e5451aae19688f["keyspassword"] != $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]])) {
			$HY_dfb6820a73cd9a022f = QQ132 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ133 . "\r\n";
		}
		else if ($HY_9964e5451aae19688f["islock"] != 0) {
			$HY_dfb6820a73cd9a022f = QQ132 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ134 . "\r\n";
		}
		else if (0 < $HY_9964e5451aae19688f["cztime"]) {
			$HY_dfb6820a73cd9a022f = QQ132 . $HY_d35b2d01cf74a2d1d5[$HY_9964e5451aae19688f["keys"]] . $HY_8a84090e20ddb74cff[$HY_9964e5451aae19688f["keys"]] . $HY_ce5542b2938336d2ba[$HY_9964e5451aae19688f["keys"]] . QQ191 . "\r\n";
		}
		else {
			if ($HY_9964e5451aae19688f["keyfix"] == $HY_810d15d31408c982b2["czzs_keytypeid"]) {
				$HY_b5f35b12087d671753 = $HY_b5f35b12087d671753 + 1;
			}

			if (isset($HY_0ccc0f3f98ce3ff46a["cday"])) {
				$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_0ccc0f3f98ce3ff46a["cday"] + $HY_9964e5451aae19688f["cday"];
				$HY_0ccc0f3f98ce3ff46a["points"] = $HY_0ccc0f3f98ce3ff46a["points"] + $HY_9964e5451aae19688f["points"];
				$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_cfaf262aef3e4af400 + ($HY_0ccc0f3f98ce3ff46a["cday"] * 86400);
				$HY_0ccc0f3f98ce3ff46a["cztimes"] = $HY_0ccc0f3f98ce3ff46a["cztimes"] + 1;

				if ($HY_0ccc0f3f98ce3ff46a["keyextattr"] != $HY_9964e5451aae19688f["keyextattr"]) {
					hy_948df1d7562ac7c650("kssdata" . QQ136);
				}

				if ($HY_0ccc0f3f98ce3ff46a["linknum"] != $HY_9964e5451aae19688f["linknum"]) {
					hy_948df1d7562ac7c650("kssdata" . QQ137);
				}

				if ($HY_810d15d31408c982b2["onetimeskeyattrid"] == $HY_9964e5451aae19688f["keyfix"]) {
					$HY_0ccc0f3f98ce3ff46a["isusetestkey"] = $HY_0ccc0f3f98ce3ff46a["isusetestkey"] + 1;

					if (1 < $HY_0ccc0f3f98ce3ff46a["isusetestkey"]) {
						hy_948df1d7562ac7c650("kssdata" . $HY_9964e5451aae19688f["keyfix"] . QQ138);
					}
				}
			}
			else {
				$HY_0ccc0f3f98ce3ff46a["managerid"] = $HY_9964e5451aae19688f["managerid"];
				$HY_0ccc0f3f98ce3ff46a["tag"] = $HY_9964e5451aae19688f["tag"];
				$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_9964e5451aae19688f["cday"];
				$HY_0ccc0f3f98ce3ff46a["points"] = $HY_9964e5451aae19688f["points"];
				$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_cfaf262aef3e4af400 + ($HY_0ccc0f3f98ce3ff46a["cday"] * 86400);
				$HY_0ccc0f3f98ce3ff46a["cztimes"] = 1;
				$HY_0ccc0f3f98ce3ff46a["keyextattr"] = $HY_9964e5451aae19688f["keyextattr"];
				$HY_0ccc0f3f98ce3ff46a["linknum"] = $HY_9964e5451aae19688f["linknum"];

				if ($HY_810d15d31408c982b2["onetimeskeyattrid"] == $HY_9964e5451aae19688f["keyfix"]) {
					$HY_0ccc0f3f98ce3ff46a["isusetestkey"] = 1;
				}
				else {
					$HY_0ccc0f3f98ce3ff46a["isusetestkey"] = 0;
				}
			}
		}
	}

	if ($HY_dfb6820a73cd9a022f != "") {
		hy_948df1d7562ac7c650("kssdata" . $HY_dfb6820a73cd9a022f);
	}

	$HY_87dcbc979e6b02f1c5 = $HY_0ccc0f3f98ce3ff46a["cday"];
	$HY_1888f4e0623a9b1876 = $HY_0ccc0f3f98ce3ff46a["points"];
	$HY_9db413d5cc1af11aad = "";
	$HY_a44ca42f294df426f3 = "";
	$HY_2a4159511fdbf28764 = 0;
	$HY_16973cf3147010ab22 = 0;
	if (($HY_810d15d31408c982b2["czzs_keytypeid"] != "") && ($HY_810d15d31408c982b2["czzs_number"] != 0) && ($HY_810d15d31408c982b2["czzs_cday"] != 0)) {
		if ($HY_810d15d31408c982b2["czzs_number"] <= $HY_b5f35b12087d671753) {
			$HY_f8c329d143b4e23d2a = $HY_0ccc0f3f98ce3ff46a["cday"];
			$HY_ef82cc6059125bbbd2 = $HY_0ccc0f3f98ce3ff46a["points"];
			$HY_2a4159511fdbf28764 = floor($HY_b5f35b12087d671753 / $HY_810d15d31408c982b2["czzs_number"]) * $HY_810d15d31408c982b2["czzs_cday"];
			$HY_16973cf3147010ab22 = floor($HY_b5f35b12087d671753 / $HY_810d15d31408c982b2["czzs_number"]) * $HY_810d15d31408c982b2["czzs_points"];

			if ($HY_2a4159511fdbf28764 != 0) {
				$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_0ccc0f3f98ce3ff46a["cday"] + $HY_2a4159511fdbf28764;
				$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_cfaf262aef3e4af400 + ($HY_0ccc0f3f98ce3ff46a["cday"] * 86400);
			}

			if ($HY_16973cf3147010ab22 != 0) {
				$HY_0ccc0f3f98ce3ff46a["points"] = $HY_0ccc0f3f98ce3ff46a["points"] + $HY_16973cf3147010ab22;
			}

			$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(" . $HY_cfaf262aef3e4af400 . ",7,'" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_f8c329d143b4e23d2a . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . $HY_ef82cc6059125bbbd2 . "," . $HY_0ccc0f3f98ce3ff46a["points"] . ",'" . $HY_500e14df6c9dae523a["czkey"] . "','')";
		}
	}

	if ((0 < $HY_810d15d31408c982b2["tg_addtimetype"]) && ($HY_500e14df6c9dae523a["puser"] != "")) {
		$HY_4b1298843ea0658df9 = $HY_0ccc0f3f98ce3ff46a["cday"];
		$HY_68f1d4172361573155 = $HY_0ccc0f3f98ce3ff46a["points"];
		if ((0 < $HY_810d15d31408c982b2["tg_newuseraddtime"]) || (0 < $HY_810d15d31408c982b2["tg_points1"])) {
			$HY_f8c329d143b4e23d2a = $HY_0ccc0f3f98ce3ff46a["cday"];
			$HY_ef82cc6059125bbbd2 = $HY_0ccc0f3f98ce3ff46a["points"];

			if (0 < $HY_810d15d31408c982b2["tg_newuseraddtime"]) {
				$HY_2a4159511fdbf28764 = $HY_2a4159511fdbf28764 + round(($HY_0ccc0f3f98ce3ff46a["cday"] * $HY_810d15d31408c982b2["tg_newuseraddtime"]) / 100, 2);
				$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_0ccc0f3f98ce3ff46a["cday"] + round(($HY_0ccc0f3f98ce3ff46a["cday"] * $HY_810d15d31408c982b2["tg_newuseraddtime"]) / 100, 2);
				$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_cfaf262aef3e4af400 + ($HY_0ccc0f3f98ce3ff46a["cday"] * 86400);
			}

			if (0 < $HY_810d15d31408c982b2["tg_points1"]) {
				$HY_16973cf3147010ab22 = $HY_16973cf3147010ab22 + floor(($HY_0ccc0f3f98ce3ff46a["points"] * $HY_810d15d31408c982b2["tg_points1"]) / 100);
				$HY_0ccc0f3f98ce3ff46a["points"] = $HY_0ccc0f3f98ce3ff46a["points"] + floor(($HY_0ccc0f3f98ce3ff46a["points"] * $HY_810d15d31408c982b2["tg_points1"]) / 100);
			}

			$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",4,'" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_f8c329d143b4e23d2a . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . $HY_ef82cc6059125bbbd2 . "," . $HY_0ccc0f3f98ce3ff46a["points"] . ",'','" . $HY_2d296db84ebd30eda4["username"] . "')";
		}

		$HY_32989549cea757aed4 = array();
		if ((0 < $HY_810d15d31408c982b2["tg_parentuseraddtime"]) || (0 < $HY_810d15d31408c982b2["tg_points2"])) {
			$HY_f8c329d143b4e23d2a = $HY_2d296db84ebd30eda4["cday"];
			$HY_6b0f4f461bb07afe2b = $HY_2d296db84ebd30eda4["cday"];
			$HY_ef82cc6059125bbbd2 = $HY_2d296db84ebd30eda4["points"];
			$HY_d365dc5eb91e390fea = $HY_2d296db84ebd30eda4["points"];

			if (0 < $HY_810d15d31408c982b2["tg_parentuseraddtime"]) {
				$HY_28aed9af72c73eb7ab = round(($HY_4b1298843ea0658df9 * $HY_810d15d31408c982b2["tg_parentuseraddtime"]) / 100, 2);
				$HY_32989549cea757aed4["cday"] = $HY_2d296db84ebd30eda4["cday"] + $HY_28aed9af72c73eb7ab;
				$HY_6b0f4f461bb07afe2b = $HY_32989549cea757aed4["cday"];
				$HY_32989549cea757aed4["endtime"] = $HY_2d296db84ebd30eda4["endtime"] + ($HY_28aed9af72c73eb7ab * 86400);
				$HY_a44ca42f294df426f3 = QQ192 . $HY_28aed9af72c73eb7ab . "天";
				$HY_6b0f4f461bb07afe2b = $HY_32989549cea757aed4["cday"];
			}

			if ((0 < $HY_810d15d31408c982b2["tg_points2"]) && (0 < $HY_16973cf3147010ab22)) {
				$HY_c7fafc728a2210723d = floor(($HY_68f1d4172361573155 * $HY_810d15d31408c982b2["tg_points2"]) / 100);
				$HY_32989549cea757aed4["points"] = $HY_2d296db84ebd30eda4["points"] + $HY_c7fafc728a2210723d;
				$HY_d365dc5eb91e390fea = $HY_32989549cea757aed4["points"];
				$HY_a44ca42f294df426f3 .= $HY_c7fafc728a2210723d . QQ142;
			}

			if ($HY_a44ca42f294df426f3 != "") {
				$HY_a44ca42f294df426f3 .= "，";
				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_32989549cea757aed4, "username='" . $HY_500e14df6c9dae523a["puser"] . "'", "sql");

				if ($HY_173d86697f24ffa1ee !== false) {
					$HY_461e600f70c429982d[] = $HY_173d86697f24ffa1ee;
				}

				$HY_461e600f70c429982d[] = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",3,'" . $HY_2d296db84ebd30eda4["username"] . "'," . $HY_f8c329d143b4e23d2a . "," . $HY_6b0f4f461bb07afe2b . "," . $HY_ef82cc6059125bbbd2 . "," . $HY_d365dc5eb91e390fea . ",'','" . $HY_500e14df6c9dae523a["username"] . "')";
			}
		}
	}

	$HY_9db413d5cc1af11aad = $HY_a44ca42f294df426f3;

	if (0 < $HY_2a4159511fdbf28764) {
		$HY_9db413d5cc1af11aad .= QQ193 . $HY_2a4159511fdbf28764 . "天";
	}

	if (0 < $HY_16973cf3147010ab22) {
		$HY_9db413d5cc1af11aad .= $HY_16973cf3147010ab22 . QQ142;
	}

	if ($HY_9db413d5cc1af11aad != "") {
		$HY_9db413d5cc1af11aad .= "，";
	}

	$HY_2b051c35c3cffb9826 = "update kss_z_key_" . $HY_12dbc503d0c6c33ec7 . " set `cztime`=" . $HY_cfaf262aef3e4af400 . ",`czusername`='" . $HY_500e14df6c9dae523a["username"] . "' where `keys` in ('" . join("','", $HY_8a84090e20ddb74cff) . "')";
	$HY_a7e2ecaf0ec8e8367d = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

	if ($HY_a7e2ecaf0ec8e8367d !== true) {
		hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 408);
		hy_948df1d7562ac7c650("kssdata" . QQ194 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_0ccc0f3f98ce3ff46a, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_2b051c35c3cffb9826 = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",0,'" . $HY_500e14df6c9dae523a["username"] . "',0," . $HY_87dcbc979e6b02f1c5 . ",0," . $HY_1888f4e0623a9b1876 . ",'" . $HY_500e14df6c9dae523a["czkey"] . "','')";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

		if ($HY_173d86697f24ffa1ee !== true) {
			hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 416);
		}

		if (!empty($HY_461e600f70c429982d)) {
			foreach ($HY_461e600f70c429982d as $HY_970be7709f584ff59c ) {
				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c, "sync");

				if ($HY_173d86697f24ffa1ee !== true) {
					hy_fb45b18d1c30ed39eb($HY_970be7709f584ff59c, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 422);
				}
			}
		}

		hy_948df1d7562ac7c650("kssdata" . QQ195 . $HY_9db413d5cc1af11aad . QQ197 . $HY_0ccc0f3f98ce3ff46a["cday"] . "天" . ($HY_0ccc0f3f98ce3ff46a["points"] != 0 ? $HY_0ccc0f3f98ce3ff46a["points"] . QQ142 : "") . "。");
	}
	else {
		hy_948df1d7562ac7c650("kssdata" . QQ196 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "，\r\n" . QQ198);
	}
}

?>
