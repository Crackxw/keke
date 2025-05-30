<?php

defined("YH2") || exit("Access denied to view this page!");
hy_0f33c82b02582faef9(0);
$HY_12c466e030148df799 = "";
$HY_df558afa7464d6f936 = array(16, 24, 28, 29);

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_500e14df6c9dae523a["czkey"] = $HY_500e14df6c9dae523a["username"];

	if (!hy_299686c8a4f6bdd647($HY_500e14df6c9dae523a["czkey"])) {
		exit("kssdata" . QQ215);
	}

	$HY_ccafdd826fb6e0dbf6 = strlen($HY_500e14df6c9dae523a["czkey"]);

	if (in_array($HY_ccafdd826fb6e0dbf6, $HY_df558afa7464d6f936)) {
		$HY_433ab86ce93bd1aaff = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_olddata where `oldkey`='" . $HY_500e14df6c9dae523a["czkey"] . "' and `softcode`=" . $HY_810d15d31408c982b2["softcode"]);

		if (empty($HY_433ab86ce93bd1aaff)) {
			exit("kssdata" . QQ216);
		}

		$HY_500e14df6c9dae523a["czkey"] = $HY_433ab86ce93bd1aaff["newkey"];
		$HY_12c466e030148df799 = "\r\n" . QQ217 . QQ218 . $HY_433ab86ce93bd1aaff["newkey"] . QQ219;
	}

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

	if (!empty($HY_c27c05c8ec8b51c4d4)) {
		if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
			exit("kssdata" . QQ220);
		}

		$HY_9db413d5cc1af11aad = "";
		$HY_9db413d5cc1af11aad .= QQ221 . hy_cf2f0673819dddd4a1($HY_c27c05c8ec8b51c4d4["starttime"]) . ",\r\n    ";
		$HY_9db413d5cc1af11aad .= QQ222 . hy_cf2f0673819dddd4a1($HY_c27c05c8ec8b51c4d4["endtime"]) . ",\r\n    ";
		$HY_9db413d5cc1af11aad .= $HY_c27c05c8ec8b51c4d4["cday"] . "天,\r\n  ";

		if (0 < $HY_c27c05c8ec8b51c4d4["points"]) {
			$HY_9db413d5cc1af11aad .= $HY_c27c05c8ec8b51c4d4["points"] . QQ142 . ",\r\n  ";
		}

		if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
			$HY_9db413d5cc1af11aad .= $HY_c27c05c8ec8b51c4d4["linknum"] . QQ223 . ",\r\n    ";
		}

		if ($HY_c27c05c8ec8b51c4d4["bdinfo"] != "") {
			$HY_9db413d5cc1af11aad .= QQ224 . $HY_c27c05c8ec8b51c4d4["bdinfo"] . ",\r\n   ";
		}

		if ($HY_c27c05c8ec8b51c4d4["keyextattr"] != "") {
			$HY_9db413d5cc1af11aad .= QQ224 . $HY_c27c05c8ec8b51c4d4["keyextattr"] . "\r\n";
		}
	}
	else {
		if ($HY_810d15d31408c982b2["viewkey"] != 1) {
			exit("kssdata" . QQ226);
		}

		$HY_80a58590ed884577aa = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_key_" . $HY_12dbc503d0c6c33ec7 . " where `keys`='" . substr($HY_500e14df6c9dae523a["czkey"], 4, 6) . "' and `keyfix`='" . substr($HY_500e14df6c9dae523a["czkey"], 0, 4) . "' and `keyspassword`='" . substr($HY_500e14df6c9dae523a["czkey"], 10) . "'");

		if (empty($HY_80a58590ed884577aa)) {
			hy_0f33c82b02582faef9(1);
			exit("kssdata" . QQ130);
		}

		if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
			exit("kssdata" . QQ220);
		}

		$HY_9db413d5cc1af11aad = "";

		if (0 < $HY_80a58590ed884577aa["cztime"]) {
			$HY_9db413d5cc1af11aad .= QQ227 . "\r\n  ";
		}
		else {
			$HY_9db413d5cc1af11aad .= QQ228 . "\r\n  ";
		}

		$HY_9db413d5cc1af11aad .= $HY_80a58590ed884577aa["cday"] . "天\r\n";

		if (0 < $HY_c27c05c8ec8b51c4d4["points"]) {
			$HY_9db413d5cc1af11aad .= $HY_80a58590ed884577aa["points"] . QQ142 . "\r\n   ";
		}

		if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
			$HY_9db413d5cc1af11aad .= $HY_80a58590ed884577aa["linknum"] . QQ223 . "\r\n   ";
		}

		if ($HY_c27c05c8ec8b51c4d4["keyextattr"] != "") {
			$HY_9db413d5cc1af11aad .= QQ225 . $HY_80a58590ed884577aa["keyextattr"] . "\r\n   ";
		}
	}

	exit("kssdata" . $HY_9db413d5cc1af11aad . $HY_12c466e030148df799);
}
else {
	$HY_ccafdd826fb6e0dbf6 = strlen($HY_500e14df6c9dae523a["username"]);

	if (in_array($HY_ccafdd826fb6e0dbf6, $HY_df558afa7464d6f936)) {
		if (hy_299686c8a4f6bdd647($HY_500e14df6c9dae523a["username"])) {
			$HY_433ab86ce93bd1aaff = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_olddata where `oldkey`='" . $HY_500e14df6c9dae523a["username"] . "'");

			if (empty($HY_433ab86ce93bd1aaff)) {
				exit("kssdata" . QQ216);
			}

			if ($HY_810d15d31408c982b2["softcode"] != $HY_433ab86ce93bd1aaff["softcode"]) {
				exit("kssdata" . QQ229);
			}

			$HY_500e14df6c9dae523a["username"] = $HY_433ab86ce93bd1aaff["newkey"];
			$HY_12c466e030148df799 = "\r\n" . QQ217 . QQ218 . $HY_433ab86ce93bd1aaff["newkey"] . QQ219;
		}
	}

	if (strlen($HY_500e14df6c9dae523a["username"]) == 32) {
		if ($HY_810d15d31408c982b2["viewkey"] != 1) {
			exit("kssdata" . QQ230);
		}

		if (!hy_75961a31e465f98f34($HY_500e14df6c9dae523a["username"])) {
			exit("kssdata" . QQ204);
		}

		$HY_80a58590ed884577aa = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_key_" . $HY_12dbc503d0c6c33ec7 . " where `keys`='" . substr($HY_500e14df6c9dae523a["username"], 4, 6) . "' and `keyfix`='" . substr($HY_500e14df6c9dae523a["username"], 0, 4) . "' and `keyspassword`='" . substr($HY_500e14df6c9dae523a["username"], 10) . "'");

		if (empty($HY_80a58590ed884577aa)) {
			hy_0f33c82b02582faef9(1);
			exit("kssdata" . QQ130);
		}

		if (0 < $HY_80a58590ed884577aa["islock"]) {
			exit("kssdata" . QQ150 . $HY_12c466e030148df799);
		}

		$HY_9db413d5cc1af11aad = "";

		if (0 < $HY_80a58590ed884577aa["cztime"]) {
			$HY_9db413d5cc1af11aad .= hy_cf2f0673819dddd4a1($HY_80a58590ed884577aa["cztime"]) . QQ231 . $HY_80a58590ed884577aa["czusername"] . "\r\n";
		}
		else {
			$HY_9db413d5cc1af11aad .= QQ228 . "\r\n   ";
		}

		$HY_9db413d5cc1af11aad .= $HY_80a58590ed884577aa["cday"] . "天\r\n   ";

		if (0 < $HY_80a58590ed884577aa["points"]) {
			$HY_9db413d5cc1af11aad .= $HY_80a58590ed884577aa["points"] . QQ142 . "\r\n   ";
		}

		if (1 < $HY_80a58590ed884577aa["linknum"]) {
			$HY_9db413d5cc1af11aad .= $HY_80a58590ed884577aa["linknum"] . QQ223 . "\r\n  ";
		}

		if ($HY_80a58590ed884577aa["keyextattr"] != "") {
			$HY_9db413d5cc1af11aad .= QQ225 . $HY_80a58590ed884577aa["keyextattr"] . "\r\n";
		}
	}
	else {
		$HY_d0620d2a7bcbacbe3f = hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["username"]);

		if ($HY_d0620d2a7bcbacbe3f !== true) {
			exit("kssdata" . QQ177 . $HY_d0620d2a7bcbacbe3f);
		}

		$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");

		if (empty($HY_c27c05c8ec8b51c4d4)) {
			exit("kssdata" . QQ154);
		}

		if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
			exit("kssdata" . QQ157);
		}

		$HY_9db413d5cc1af11aad = "";
		$HY_9db413d5cc1af11aad .= QQ221 . hy_cf2f0673819dddd4a1($HY_c27c05c8ec8b51c4d4["starttime"]) . ",\r\n   ";
		$HY_9db413d5cc1af11aad .= QQ222 . hy_cf2f0673819dddd4a1($HY_c27c05c8ec8b51c4d4["endtime"]) . ",\r\n   ";
		$HY_9db413d5cc1af11aad .= $HY_c27c05c8ec8b51c4d4["cday"] . "天\r\n";

		if (0 < $HY_c27c05c8ec8b51c4d4["points"]) {
			$HY_9db413d5cc1af11aad .= $HY_c27c05c8ec8b51c4d4["points"] . QQ142 . ",\r\n";
		}

		if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
			$HY_9db413d5cc1af11aad .= $HY_c27c05c8ec8b51c4d4["linknum"] . QQ223 . ",\r\n";
		}

		if ($HY_c27c05c8ec8b51c4d4["bdinfo"] != "") {
			$HY_9db413d5cc1af11aad .= QQ224 . $HY_c27c05c8ec8b51c4d4["bdinfo"] . "\r\n";
		}

		if ($HY_c27c05c8ec8b51c4d4["keyextattr"] != "") {
			$HY_9db413d5cc1af11aad .= QQ225 . $HY_c27c05c8ec8b51c4d4["keyextattr"] . "\r\n";
		}
	}

	exit("kssdata" . $HY_9db413d5cc1af11aad . $HY_12c466e030148df799);
}

?>
