<?php

defined("YH2") || exit("Access denied to view this page!");

if (SVRID == 2) {
	exit("kssdata" . QQ146);
}

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_500e14df6c9dae523a["czkey"] = $HY_500e14df6c9dae523a["username"];

	if (strlen($HY_500e14df6c9dae523a["czkey"]) != 32) {
		exit("kssdata" . QQ123);
	}

	if (!hy_75961a31e465f98f34($HY_500e14df6c9dae523a["czkey"])) {
		exit("kssdata" . QQ147);
	}

	$HY_500e14df6c9dae523a["username"] = substr($HY_500e14df6c9dae523a["czkey"], 0, 10);
	$HY_500e14df6c9dae523a["password"] = substr($HY_500e14df6c9dae523a["czkey"], 10, 10);
	$HY_500e14df6c9dae523a["password2"] = substr($HY_500e14df6c9dae523a["czkey"], 20);
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `password`='" . $HY_500e14df6c9dae523a["password"] . "' and `password2`='" . $HY_500e14df6c9dae523a["password2"] . "'");

	if (empty($HY_c27c05c8ec8b51c4d4)) {
		exit("kssdata" . QQ148);
	}

	if (PETIME <= $HY_c27c05c8ec8b51c4d4["endtime"]) {
		exit("kssdata" . QQ149);
	}

	if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
		exit("kssdata" . QQ150);
	}
}
else {
	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["username"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ151 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["password"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ152 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["password2"]);

	if ($HY_d0620d2a7bcbacbe3f !== true) {
		exit("kssdata" . QQ153 . $HY_d0620d2a7bcbacbe3f);
	}

	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");

	if (empty($HY_c27c05c8ec8b51c4d4)) {
		exit("kssdata" . QQ154);
	}

	if (PETIME <= $HY_c27c05c8ec8b51c4d4["endtime"]) {
		exit("kssdata" . QQ155);
	}

	if ($HY_c27c05c8ec8b51c4d4["password2"] != $HY_500e14df6c9dae523a["password2"]) {
		exit("kssdata" . QQ156);
	}

	if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
		exit("kssdata" . QQ157);
	}
}

$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["bdinfo"]);

if ($HY_d0620d2a7bcbacbe3f !== true) {
	exit("kssdata" . QQ158 . $HY_d0620d2a7bcbacbe3f);
}

$HY_e95ace6ce2a716d11e = array();
$HY_461e600f70c429982d = "";

if ($HY_500e14df6c9dae523a["bdinfo"] != "") {
	if (strlen($HY_500e14df6c9dae523a["bdinfo"]) < 3) {
		exit("kssdata" . QQ159);
	}

	if ($HY_500e14df6c9dae523a["bdinfo"] == $HY_c27c05c8ec8b51c4d4["bdinfo"]) {
		exit("kssdata" . QQ160);
	}

	$HY_e95ace6ce2a716d11e["bdinfo"] = $HY_500e14df6c9dae523a["bdinfo"];
	if (defined("OnlyOneBdinfo") && !empty($HY_500e14df6c9dae523a["bdinfo"])) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `bdinfo`='" . mysql_real_escape_string($HY_500e14df6c9dae523a["bdinfo"]) . "'");

		if (!empty($HY_173d86697f24ffa1ee)) {
			exit("kssdata该绑定信息已被其它帐号使用！");
		}
	}

	if (0 < $HY_810d15d31408c982b2["editbdinfo_changetime"]) {
		if (($HY_c27c05c8ec8b51c4d4["endtime"] - $HY_cfaf262aef3e4af400) < ($HY_810d15d31408c982b2["editbdinfo_changetime"] * 86400)) {
			exit("kssdata" . QQ161 . $HY_810d15d31408c982b2["editbdinfo_changetime"] . "天！");
		}

		$HY_e95ace6ce2a716d11e["cday"] = $HY_c27c05c8ec8b51c4d4["cday"] - $HY_810d15d31408c982b2["editbdinfo_changetime"];
		$HY_e95ace6ce2a716d11e["endtime"] = $HY_c27c05c8ec8b51c4d4["starttime"] + ($HY_e95ace6ce2a716d11e["cday"] * 86400);
		$HY_461e600f70c429982d = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",5,'" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_c27c05c8ec8b51c4d4["cday"] . "," . $HY_e95ace6ce2a716d11e["cday"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . ",'" . $HY_c27c05c8ec8b51c4d4["bdinfo"] . " - " . $HY_500e14df6c9dae523a["bdinfo"] . "','')";
	}
	else if ($HY_c27c05c8ec8b51c4d4["bdinfo"] != "") {
		exit("kssdata" . QQ162);
	}
}
else if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	exit("kssdata" . QQ163);
}

if ($HY_810d15d31408c982b2["softmode"] == "USOFT") {
	if ($HY_500e14df6c9dae523a["password"] != $HY_c27c05c8ec8b51c4d4["password"]) {
		if (strlen($HY_500e14df6c9dae523a["password"]) < 5) {
			exit("kssdata" . QQ164);
		}

		$HY_e95ace6ce2a716d11e["password"] = $HY_500e14df6c9dae523a["password"];
	}
}

if (empty($HY_e95ace6ce2a716d11e)) {
	exit("kssdata" . QQ165);
}

$HY_2b051c35c3cffb9826 = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_e95ace6ce2a716d11e, "username='" . $HY_500e14df6c9dae523a["username"] . "'", "sql");
$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "sync");

if ($HY_173d86697f24ffa1ee !== true) {
	exit("kssdata" . QQ166 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
}

if ($HY_461e600f70c429982d != "") {
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_461e600f70c429982d, "sync");

	if ($HY_173d86697f24ffa1ee !== true) {
		hy_fb45b18d1c30ed39eb($HY_461e600f70c429982d, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 111);
	}
}

exit("kssdata" . QQ167);

?>
