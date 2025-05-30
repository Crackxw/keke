<?php

function HY_44f7d5441a44b6663e($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_04036268eb6d9be416($HY_241412be0daddcee1f, $HY_810d15d31408c982b2)
{
	global $HY_82d6536edf704aabc5;
	$HY_544be2baf148b891eb = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from kss_z_log_" . $HY_810d15d31408c982b2["pid"] . "_" . $HY_810d15d31408c982b2["id"] . " where `username`='" . $HY_241412be0daddcee1f . "' and `optype` in (5,7)");

	if ($HY_810d15d31408c982b2["outlinelock"] <= $HY_544be2baf148b891eb["tnum"]) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_z_user_" . $HY_810d15d31408c982b2["pid"] . "_" . $HY_810d15d31408c982b2["id"] . "` set `islock`=3,`intro`='非法下线次数超限' where `username`='" . $HY_241412be0daddcee1f . "' ", "sync");
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(3);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
	}
}

function HY_dd5aff5ff388ed9de4($HY_857705c8ebfa57b870)
{
	global $HY_12dbc503d0c6c33ec7;
	global $HY_500e14df6c9dae523a;
	global $HY_063c1f55878eb36837;
	global $HY_6993af4b451676aba9;
	global $HY_8e5fe08a04624d61e6;
	global $HY_012c69034840f869cf;
	$HY_edab31693265d5c9ab = "insert into kss_z_log_" . $HY_12dbc503d0c6c33ec7 . " (`username`,`optype`,`clientid`,`addtime`,`ip`,`pccode`,`linecode`,`opccode`,`oip`) values ";
	$HY_edab31693265d5c9ab .= "('" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_857705c8ebfa57b870 . "," . $HY_500e14df6c9dae523a["clientid"] . "," . time() . "," . $HY_063c1f55878eb36837 . ",'" . $HY_6993af4b451676aba9 . "','" . $HY_500e14df6c9dae523a["linecode"] . "','" . $HY_8e5fe08a04624d61e6 . "'," . $HY_012c69034840f869cf . ")";
	return $HY_edab31693265d5c9ab;
}

defined("YH2") || exit("Access denied to view this page!");

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_500e14df6c9dae523a["username"] = substr($HY_500e14df6c9dae523a["username"], 0, 10);
}

if ($HY_810d15d31408c982b2["chkonline"] != "1") {
	exit("crypteno198");
}

$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "' ");

if (empty($HY_c27c05c8ec8b51c4d4)) {
	exit("crypteno193");
}

if ($HY_c27c05c8ec8b51c4d4["endtime"] == PETIME) {
	exit("crypteno199");
}

$HY_4b76617571169dc2ee = array();

if ($HY_c27c05c8ec8b51c4d4["linknum"] == 1) {
	$HY_8e5fe08a04624d61e6 = $HY_c27c05c8ec8b51c4d4["pccode"];
	$HY_012c69034840f869cf = $HY_c27c05c8ec8b51c4d4["lastip"];

	if ($HY_500e14df6c9dae523a["isrun"] == "1") {
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(8);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
		exit("crypteno192");
	}

	if ((SVRID == 1) && (hy_68b1b244e644ac80d4($HY_6993af4b451676aba9, $HY_c27c05c8ec8b51c4d4["pccode"]) === false)) {
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(5);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");

		if (0 < $HY_810d15d31408c982b2["outlinelock"]) {
			hy_04036268eb6d9be416($HY_500e14df6c9dae523a["username"], $HY_810d15d31408c982b2);
		}

		exit("crypteno197");
	}

	if ((SVRID == 1) && ($HY_810d15d31408c982b2["dkbindpc"] != "1")) {
		if ($HY_c27c05c8ec8b51c4d4["linecode"] != $HY_500e14df6c9dae523a["linecode"]) {
			$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(7);
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");

			if (0 < $HY_810d15d31408c982b2["outlinelock"]) {
				hy_04036268eb6d9be416($HY_500e14df6c9dae523a["username"], $HY_810d15d31408c982b2);
			}

			exit("crypteno196");
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` set `isonline`=0,`lasttime`=" . time() . " where  `username`='" . $HY_500e14df6c9dae523a["username"] . "'", "notsync");
}
else {
	$HY_4b76617571169dc2ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from `kss_z_client_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"]);

	if (empty($HY_4b76617571169dc2ee)) {
		exit("crypteno194");
	}

	$HY_8e5fe08a04624d61e6 = $HY_4b76617571169dc2ee["pccode"];
	$HY_012c69034840f869cf = $HY_4b76617571169dc2ee["lastip"];

	if ($HY_500e14df6c9dae523a["isrun"] == "1") {
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(8);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
		exit("crypteno192");
	}

	if ((SVRID == 1) && (hy_68b1b244e644ac80d4($HY_6993af4b451676aba9, $HY_4b76617571169dc2ee["pccode"]) === false)) {
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(5);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");

		if (0 < $HY_810d15d31408c982b2["outlinelock"]) {
			hy_04036268eb6d9be416($HY_500e14df6c9dae523a["username"], $HY_810d15d31408c982b2);
		}

		exit("crypteno197");
	}

	if ($HY_810d15d31408c982b2["dkbindpc"] != "1") {
		if ($HY_4b76617571169dc2ee["linecode"] != $HY_500e14df6c9dae523a["linecode"]) {
			$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(7);
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");

			if (0 < $HY_810d15d31408c982b2["outlinelock"]) {
				hy_04036268eb6d9be416($HY_500e14df6c9dae523a["username"], $HY_810d15d31408c982b2);
			}

			exit("crypteno196");
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_z_client_" . $HY_12dbc503d0c6c33ec7 . "` set `isonline`=0,`lasttime`=" . time() . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"], "notsync");
}

$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(4);
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
exit("crypteno199");

?>
