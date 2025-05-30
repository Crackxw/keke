<?php

function HY_b378720c6b2f4e68f1($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");

if ($HY_810d15d31408c982b2["chkonline"] == 1) {
	exit("kssdata" . QQ199);
}

if (($HY_810d15d31408c982b2["unbindpc_set"] != 1) && ($HY_810d15d31408c982b2["unbindpc_set"] != 3)) {
	exit("kssdata" . QQ200);
}

if ($HY_500e14df6c9dae523a["isrun"] == "1") {
	exit("kssdata" . QQ201);
}

if (SVRID == 2) {
	exit("kssdata" . QQ202);
}

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_500e14df6c9dae523a["czkey"] = $HY_500e14df6c9dae523a["username"];

	if (strlen($HY_500e14df6c9dae523a["czkey"]) != 32) {
		exit("kssdata" . QQ203);
	}

	if (!hy_75961a31e465f98f34($HY_500e14df6c9dae523a["czkey"])) {
		exit("kssdata" . QQ204);
	}

	$HY_500e14df6c9dae523a["username"] = substr($HY_500e14df6c9dae523a["czkey"], 0, 10);
	$HY_500e14df6c9dae523a["password"] = substr($HY_500e14df6c9dae523a["czkey"], 10, 10);
	$HY_500e14df6c9dae523a["password2"] = substr($HY_500e14df6c9dae523a["czkey"], 20);
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `password`='" . $HY_500e14df6c9dae523a["password"] . "' and `password2`='" . $HY_500e14df6c9dae523a["password2"] . "'");
}
else {
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `password`='" . $HY_500e14df6c9dae523a["password"] . "'");
}

if (empty($HY_c27c05c8ec8b51c4d4)) {
	exit("kssdata" . QQ205);
}

if (PETIME <= $HY_c27c05c8ec8b51c4d4["endtime"]) {
	exit("kssdata" . QQ206);
}

if ((1 < $HY_c27c05c8ec8b51c4d4["linknum"]) && ($HY_810d15d31408c982b2["softmode2"] == 1)) {
	exit("kssdata" . QQ207);
}

if ($HY_810d15d31408c982b2["softmode2"] == "1") {
	exit("kssdata" . QQ208);
}

if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
	$HY_16df8d06409b63236e = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_client_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`='" . $HY_500e14df6c9dae523a["clientid"] . "'");

	if (empty($HY_16df8d06409b63236e)) {
		exit("kssdata" . QQ209);
	}

	$HY_51d651aca342a8ad1e = $HY_16df8d06409b63236e["unlockday"];
	$HY_02652ac5d34353b965 = $HY_16df8d06409b63236e["unlocktimes"];
	$HY_8e5fe08a04624d61e6 = $HY_16df8d06409b63236e["pccode"];
	$HY_318088666030db394a = $HY_16df8d06409b63236e["lasttime"];
}
else {
	$HY_51d651aca342a8ad1e = $HY_c27c05c8ec8b51c4d4["unlockday"];
	$HY_02652ac5d34353b965 = $HY_c27c05c8ec8b51c4d4["unlocktimes"];
	$HY_8e5fe08a04624d61e6 = $HY_c27c05c8ec8b51c4d4["pccode"];
	$HY_318088666030db394a = $HY_c27c05c8ec8b51c4d4["lasttime"];
}

if ($HY_8e5fe08a04624d61e6 == "") {
	exit("kssdata" . QQ210);
}

if ($HY_810d15d31408c982b2["unbindpc_set"] == 3) {
	if (hy_68b1b244e644ac80d4($HY_6993af4b451676aba9, $HY_8e5fe08a04624d61e6) !== false) {
		exit("kssdata" . QQ232);
	}

	if (($HY_cfaf262aef3e4af400 - $HY_318088666030db394a) < ($HY_810d15d31408c982b2["unbindpc_autotime"] * 60)) {
		exit("kssdata" . QQ233);
	}
}

if (($HY_810d15d31408c982b2["unbindpc_set"] == 1) && (hy_68b1b244e644ac80d4($HY_6993af4b451676aba9, $HY_8e5fe08a04624d61e6) === false)) {
	exit("kssdata" . QQ211);
}

$HY_0ccc0f3f98ce3ff46a = array();
$HY_0ccc0f3f98ce3ff46a["unlockday"] = $HY_51d651aca342a8ad1e;
$HY_0ccc0f3f98ce3ff46a["unlocktimes"] = $HY_02652ac5d34353b965;

if ($HY_51d651aca342a8ad1e == date("d")) {
	if (($HY_810d15d31408c982b2["unbindpc_times"] <= $HY_02652ac5d34353b965) && ($HY_810d15d31408c982b2["unbindpc_ctset"] < 2)) {
		exit("kssdata" . QQ212);
	}

	$HY_0ccc0f3f98ce3ff46a["unlocktimes"] = $HY_02652ac5d34353b965 + 1;
}
else {
	$HY_0ccc0f3f98ce3ff46a["unlockday"] = date("d");
	$HY_0ccc0f3f98ce3ff46a["unlocktimes"] = 1;
}

$HY_c580545c3be978b26a = "";
if ((0 < $HY_810d15d31408c982b2["unbindpc_ctset"]) && (0 < $HY_810d15d31408c982b2["unbindpc_changetime"])) {
	if ($HY_810d15d31408c982b2["unbindpc_ctset"] == 1) {
		$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_c27c05c8ec8b51c4d4["cday"] - $HY_810d15d31408c982b2["unbindpc_changetime"];
		$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_c27c05c8ec8b51c4d4["starttime"] + ($HY_0ccc0f3f98ce3ff46a["cday"] * 86400);
		if (($HY_0ccc0f3f98ce3ff46a["endtime"] < $HY_cfaf262aef3e4af400) || ($HY_0ccc0f3f98ce3ff46a["cday"] < 0)) {
			exit("kssdata" . QQ237);
		}

		$HY_c580545c3be978b26a = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",6,'" . $HY_c27c05c8ec8b51c4d4["username"] . "'," . $HY_c27c05c8ec8b51c4d4["cday"] . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . ",'','')";
	}
	else if ($HY_810d15d31408c982b2["unbindpc_times"] < $HY_0ccc0f3f98ce3ff46a["unlocktimes"]) {
		$HY_0ccc0f3f98ce3ff46a["cday"] = $HY_c27c05c8ec8b51c4d4["cday"] - $HY_810d15d31408c982b2["unbindpc_changetime"];
		$HY_0ccc0f3f98ce3ff46a["endtime"] = $HY_c27c05c8ec8b51c4d4["starttime"] + ($HY_0ccc0f3f98ce3ff46a["cday"] * 86400);
		if (($HY_0ccc0f3f98ce3ff46a["endtime"] < $HY_cfaf262aef3e4af400) || ($HY_0ccc0f3f98ce3ff46a["cday"] < 0)) {
			exit("kssdata" . QQ237);
		}

		$HY_c580545c3be978b26a = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",6,'" . $HY_c27c05c8ec8b51c4d4["username"] . "'," . $HY_c27c05c8ec8b51c4d4["cday"] . "," . $HY_0ccc0f3f98ce3ff46a["cday"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . ",'','')";
	}
}

$HY_0ccc0f3f98ce3ff46a["pccode"] = "";

if ($HY_c27c05c8ec8b51c4d4["linknum"] == 1) {
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_0ccc0f3f98ce3ff46a, "username='" . $HY_500e14df6c9dae523a["username"] . "'", "sync");

	if ($HY_173d86697f24ffa1ee !== true) {
		exit("kssdata" . QQ213 . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}
}
else {
	$HY_84d398e901879b3c09 = array("unlockday" => $HY_0ccc0f3f98ce3ff46a["unlockday"], "unlocktimes" => $HY_0ccc0f3f98ce3ff46a["unlocktimes"], "pccode" => "");
	unset($HY_0ccc0f3f98ce3ff46a["unlockday"]);
	unset($HY_0ccc0f3f98ce3ff46a["unlocktimes"]);

	if (!empty($HY_0ccc0f3f98ce3ff46a)) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_0ccc0f3f98ce3ff46a, "username='" . $HY_500e14df6c9dae523a["username"] . "'", "sync");

		if ($HY_173d86697f24ffa1ee !== true) {
			exit("kssdata" . QQ213 . "1!" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_client_" . $HY_12dbc503d0c6c33ec7, $HY_84d398e901879b3c09, "username='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"], "sync");

	if ($HY_173d86697f24ffa1ee !== true) {
		exit("kssdata" . QQ213 . "2!" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}
}

if ($HY_c580545c3be978b26a != "") {
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_c580545c3be978b26a, "sync");
}

exit("kssdata" . QQ214);

?>
