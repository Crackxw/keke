<?php

function HY_e7601ba48e9d136007($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
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

function HY_068bd6861e1ac858ab($HY_433ab86ce93bd1aaff, $HY_7af74c01ce641a1254)
{
	$HY_e064e784da69fc4602 = "ab_" . $HY_7af74c01ce641a1254;
	if (($HY_433ab86ce93bd1aaff == "") && function_exists($HY_e064e784da69fc4602)) {
		return $HY_e064e784da69fc4602();
	}

	$HY_433ab86ce93bd1aaff = str_replace("#time#", date("Y-m-d H:i", time()), $HY_433ab86ce93bd1aaff);
	return $HY_433ab86ce93bd1aaff;
}

function HY_7d00d733394d840935($HY_752a83c2defbe9c605, $HY_995d95453acc459aeb = 0)
{
	global $HY_810d15d31408c982b2;
	global $HY_c27c05c8ec8b51c4d4;
	global $HY_654b13885513a4dd68;
	global $HY_500e14df6c9dae523a;
	global $HY_4433a8f60c3d29fc2c;
	global $HY_1d8ef96818dff1fb60;
	global $HY_8961af67c90bf2efc6;
	global $HY_12dbc503d0c6c33ec7;
	global $HY_82d6536edf704aabc5;

	if ($HY_500e14df6c9dae523a["chked"] == 0) {
		$HY_8625c33217ffbc5a26 = 0;
		$HY_d981c25b9e698343a8 = $HY_c27c05c8ec8b51c4d4["endtime"] - time();

		if ($HY_c27c05c8ec8b51c4d4["endtime"] == PETIME) {
			$HY_8625c33217ffbc5a26 = 1;
			$HY_d981c25b9e698343a8 = $HY_995d95453acc459aeb;
		}

		$HY_d94cc3ce566b024027 = hy_068bd6861e1ac858ab($HY_810d15d31408c982b2["returninfo1"], "a");
		$HY_ae0e00d59795e329e4 = hy_068bd6861e1ac858ab($HY_810d15d31408c982b2["returninfo2"], "b");
		$HY_6bdc45fa2c1660dfdf = "0";

		if (intval($HY_500e14df6c9dae523a["softver"]) < intval($HY_810d15d31408c982b2["softversion"])) {
			$HY_6bdc45fa2c1660dfdf = ($HY_810d15d31408c982b2["ismustupdate"] == "1" ? "eno143" : "eno144");
		}

		$HY_47d4c8ccf6a2ae9b42 = array($HY_752a83c2defbe9c605, $HY_6bdc45fa2c1660dfdf, $HY_d94cc3ce566b024027, $HY_ae0e00d59795e329e4, $HY_810d15d31408c982b2["softversion"], $HY_810d15d31408c982b2["connectpenli"], $HY_810d15d31408c982b2["dkbindpc"], base64_decode($HY_810d15d31408c982b2["softdownurl"]), $HY_8625c33217ffbc5a26, $HY_d981c25b9e698343a8, $HY_c27c05c8ec8b51c4d4["username"], $HY_c27c05c8ec8b51c4d4["linknum"], $HY_c27c05c8ec8b51c4d4["cday"], $HY_c27c05c8ec8b51c4d4["points"], $HY_c27c05c8ec8b51c4d4["bdinfo"], $HY_c27c05c8ec8b51c4d4["tag"], $HY_c27c05c8ec8b51c4d4["keyextattr"], $HY_c27c05c8ec8b51c4d4["cztimes"], time(), hy_5170dc4897c581d8f2(), $HY_810d15d31408c982b2["chkonline"], $HY_1d8ef96818dff1fb60, "-");
		$HY_752a83c2defbe9c605 = join(":|:", $HY_47d4c8ccf6a2ae9b42);
	}

	$HY_88e2fc109105270e14 = array("锁" => "islock", "锁定" => "islock", "标签" => "tag", "备注" => "intro", "天数" => "cday", "点数" => "points", "开始时间" => "starttime", "到期时间" => "endtime", "附属性" => "keyextattr", "付属性" => "keyextattr", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo");
	$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("UPDATE `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` set `" . $HY_88e2fc109105270e14["付属性"] . "`='0' where `username`='" . $HY_c27c05c8ec8b51c4d4["username"] . "' ", "sync");

	if ($HY_e61e7cf54e140aa6af != true) {
		$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
	}
	
	$HY_61e628002bea339b59 = hy_eeeb2ee0ea106ad167($HY_752a83c2defbe9c605, $HY_4433a8f60c3d29fc2c, Client_Language);

	if ($HY_500e14df6c9dae523a["chked"] == 0) {
		if (!defined("SOFTRSAMODE")) {
			$HY_16643681f9dfea8ddc = KSSINCDIR . "advapi" . DIRECTORY_SEPARATOR . "rsa" . $HY_810d15d31408c982b2["softcode"] . ".php";

			if (is_file($HY_16643681f9dfea8ddc)) {
				include ($HY_16643681f9dfea8ddc);
			}
			else {
				exit("crypteno171");
			}
		}

		if (SOFTRSAMODE == 0) {
			if (RSACRYPT == 1) {
				if ((strlen(RSA_PRVKEY) < 70) || (strlen(RSA_MODULES) < 70)) {
					exit("crypteno151");
				}

				$HY_b3cc76f9038ca26c06 = rsa_encrypt(substr($HY_61e628002bea339b59, 0, 20), RSA_PRVKEY, RSA_MODULES, 256);
				exit("cryptrsadata" . $HY_b3cc76f9038ca26c06 . "`" . substr($HY_61e628002bea339b59, 20));
			}
			else {
				exit("crypt" . $HY_61e628002bea339b59);
			}
		}
		else if (SOFTRSAMODE == 1) {
			if ((strlen(SOFTRSAEKEY) < 70) || (strlen(SOFTRSANKEY) < 70)) {
				exit("crypteno151");
			}

			$HY_b3cc76f9038ca26c06 = rsa_encrypt(substr($HY_61e628002bea339b59, 0, 20), SOFTRSAEKEY, SOFTRSANKEY, 256);
			exit("cryptrsadata" . $HY_b3cc76f9038ca26c06 . "`" . substr($HY_61e628002bea339b59, 20));
		}
		else {
			exit("crypt" . $HY_61e628002bea339b59);
		}
	}
	else {
		exit("crypt" . $HY_61e628002bea339b59);
	}
}

function hy_e04dfe04a243f84e77($HY_12dbc503d0c6c33ec7, $HY_a3af5d94520f81d44f, $HY_241412be0daddcee1f, $HY_b4cc55702bd8158c9b, $HY_6993af4b451676aba9)
{
	global $HY_82d6536edf704aabc5;
	global $HY_063c1f55878eb36837;
	$HY_a03e387550cb1a8952 = array("EEE9D3EE113E");

	if (in_array($HY_6993af4b451676aba9, $HY_a03e387550cb1a8952)) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " set islock=3,intro='该用户使用调试工具登陆' where username='" . $HY_241412be0daddcee1f . "' and password='" . $HY_b4cc55702bd8158c9b . "'", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_soft set `mac_blacklist`=`mac_blacklist`+'," . $HY_063c1f55878eb36837 . "' where softcode=" . $HY_a3af5d94520f81d44f, "sync");
		exit("crypteno129");
	}
}

defined("YH2") || exit("Access denied to view this page!");

if (hy_cc1a8f29be40277f5f($HY_6993af4b451676aba9) !== true) {
	exit("crypteno127");
}

if (hy_cc1a8f29be40277f5f($HY_500e14df6c9dae523a["username"]) !== true) {
	exit("crypteno128");
}

$HY_1d8ef96818dff1fb60 = 0;

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_500e14df6c9dae523a["czkey"] = $HY_500e14df6c9dae523a["username"];

	if (strlen($HY_500e14df6c9dae523a["czkey"]) != 32) {
		exit("crypteno108");
	}

	if (!hy_75961a31e465f98f34($HY_500e14df6c9dae523a["czkey"])) {
		exit("crypteno115");
	}

	$HY_500e14df6c9dae523a["username"] = substr($HY_500e14df6c9dae523a["czkey"], 0, 10);
	$HY_500e14df6c9dae523a["password"] = substr($HY_500e14df6c9dae523a["czkey"], 10, 10);
	$HY_500e14df6c9dae523a["password2"] = substr($HY_500e14df6c9dae523a["czkey"], 20);
	$HY_500e14df6c9dae523a["bdinfo"] = "";
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");

	if (empty($HY_c27c05c8ec8b51c4d4)) {
		$HY_f47b2b08a81187ece1 = 1;
		include ($HY_53f41d85d28b2dcdfe . "reguser.php");
	}

	if (empty($HY_c27c05c8ec8b51c4d4)) {
		exit("crypteno111");
	}

	if (($HY_c27c05c8ec8b51c4d4["password"] != $HY_500e14df6c9dae523a["password"]) || ($HY_c27c05c8ec8b51c4d4["password2"] != $HY_500e14df6c9dae523a["password2"])) {
		exit("crypteno111");
	}
}
else {
	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " where `username`='" . $HY_500e14df6c9dae523a["username"] . "'");

	if (empty($HY_c27c05c8ec8b51c4d4)) {
		exit("crypteno123");
	}

	if ($HY_c27c05c8ec8b51c4d4["password"] !== $HY_500e14df6c9dae523a["password"]) {
		exit("crypteno134");
	}
}

if (($HY_c27c05c8ec8b51c4d4["endtime"] != PETIME) && function_exists("hy_e04dfe04a243f84e77")) {
	hy_e04dfe04a243f84e77($HY_12dbc503d0c6c33ec7, $HY_a3af5d94520f81d44f, $HY_500e14df6c9dae523a["username"], $HY_500e14df6c9dae523a["password"], $HY_6993af4b451676aba9);
}

if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
	exit("crypteno124");
}

if (($HY_c27c05c8ec8b51c4d4["starttime"] + ($HY_c27c05c8ec8b51c4d4["cday"] * 86400)) < time()) {
	exit("crypteno125");
}

if ($HY_c27c05c8ec8b51c4d4["linknum"] < $HY_500e14df6c9dae523a["clientid"]) {
	exit("crypteno126");
}

if ($HY_500e14df6c9dae523a["chked"] == 0) {
	$HY_ecd7f4e49ac44d2a69 = KSSINCDIR . "advapi" . DIRECTORY_SEPARATOR . $HY_810d15d31408c982b2["pid"] . $HY_810d15d31408c982b2["id"] . ".php";

	if (is_file($HY_ecd7f4e49ac44d2a69)) {
		include ($HY_ecd7f4e49ac44d2a69);
	}
}

if ("0" == $HY_500e14df6c9dae523a["chked"]) {
	if ("131" == substr($HY_500e14df6c9dae523a["valhost"], 2, 3)) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert delayed into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (" . time() . "," . $HY_a3af5d94520f81d44f . "," . mt_rand(51, 99) . ",'" . $HY_500e14df6c9dae523a["username"] . "')", "notsync");
	}
	else {
		$HY_63926814b7b52ecdec = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert delayed into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (" . time() . "," . $HY_a3af5d94520f81d44f . "," . mt_rand(10, 50) . ",'" . $HY_500e14df6c9dae523a["username"] . "')", "notsync");

		if ($HY_63926814b7b52ecdec !== true) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE kss_tb_log_ws", "notsync");
			$HY_63926814b7b52ecdec = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert delayed into kss_tb_log_ws (`addtime`,`softcode`,`ivalue`,`username`) values (" . time() . "," . $HY_a3af5d94520f81d44f . "," . mt_rand(10, 50) . ",'" . $HY_500e14df6c9dae523a["username"] . "')", "notsync");

			if ($HY_63926814b7b52ecdec !== true) {
				exit("crypteno162");
			}
		}

		$HY_e677c007953bcbb522 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=" . $HY_a3af5d94520f81d44f . "");
		$HY_2393dffe832ce6a5b4 = $HY_e677c007953bcbb522["tnum"];
		$HY_e677c007953bcbb522 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=" . $HY_a3af5d94520f81d44f . " and `ivalue`>50");
		$HY_08453f96622f96cdd1 = $HY_e677c007953bcbb522["tnum"];
		$HY_e677c007953bcbb522 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT COUNT( * ) AS tnum FROM  `kss_tb_log_ws` where `softcode`=" . $HY_a3af5d94520f81d44f . " and username='" . $HY_500e14df6c9dae523a["username"] . "' and `ivalue`<50 ");
		$HY_6ca18c6470f3f907c2 = $HY_e677c007953bcbb522["tnum"];
		$HY_5733c9e8dfca4f0ece = $HY_2393dffe832ce6a5b4 - $HY_08453f96622f96cdd1;

		if (200 < $HY_2393dffe832ce6a5b4) {
			if (($HY_08453f96622f96cdd1 / $HY_2393dffe832ce6a5b4) < 0.1) {
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_soft where softcode='" . $HY_a3af5d94520f81d44f . "'", "sync");
				exit();
			}

			if (($HY_08453f96622f96cdd1 / $HY_2393dffe832ce6a5b4) < 0.5) {
				if (0.2 < ($HY_6ca18c6470f3f907c2 / $HY_5733c9e8dfca4f0ece)) {
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " set islock=3,intro='频繁HOOK登陆试图攻击系统，锁定帐号" . date("Y-m-d H:i:s") . "' where username='" . $HY_500e14df6c9dae523a["username"] . "'", "sync");
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_log_ws where `softcode`=" . $HY_a3af5d94520f81d44f . " and username='" . $HY_500e14df6c9dae523a["username"] . "'", "notsync");
					exit("crypteno129");
				}
			}
		}
	}
}

if ($HY_c27c05c8ec8b51c4d4["endtime"] == PETIME) {
	if (($HY_810d15d31408c982b2["dkbindpc"] == "0") && ($HY_500e14df6c9dae523a["isrun"] == 1)) {
		exit("crypteno147");
	}

	$HY_feab235443d2318f54 = date("H");
	$HY_c17de594451ded979b = explode(",", $HY_810d15d31408c982b2["test_timearea"]);
	if (($HY_feab235443d2318f54 < $HY_c17de594451ded979b[0]) || ($HY_c17de594451ded979b[1] < $HY_feab235443d2318f54)) {
		exit("crypteno130");
	}

	$HY_995d95453acc459aeb = 8640000;

	if (0 < $HY_810d15d31408c982b2["test_times"]) {
		$HY_995d95453acc459aeb = $HY_810d15d31408c982b2["test_time"] * 60;
		$HY_70fdd4c095ad9a39f4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_log_pubuser where `pccode`='" . $HY_6993af4b451676aba9 . "' and `softid`=" . $HY_810d15d31408c982b2["id"]);

		if (empty($HY_70fdd4c095ad9a39f4)) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into kss_tb_log_pubuser (`softid`,`pccode`,`nday`,`ntimes`,`lasttime`) values (" . $HY_810d15d31408c982b2["id"] . ",'" . $HY_6993af4b451676aba9 . "'," . $HY_cfaf262aef3e4af400 . ",1," . $HY_cfaf262aef3e4af400 . ")", "notsync");
		}
		else if (($HY_810d15d31408c982b2["test_time"] * 60) < ($HY_cfaf262aef3e4af400 - $HY_70fdd4c095ad9a39f4["lasttime"])) {
			if ($HY_500e14df6c9dae523a["chked"] != 0) {
				exit("crypteno132");
			}

			if ((($HY_cfaf262aef3e4af400 - $HY_70fdd4c095ad9a39f4["nday"]) / 86400) < $HY_810d15d31408c982b2["test_day"]) {
				if ($HY_810d15d31408c982b2["test_times"] <= $HY_70fdd4c095ad9a39f4["ntimes"]) {
					exit("crypteno131");
				}

				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_pubuser set `ntimes`=" . ($HY_70fdd4c095ad9a39f4["ntimes"] + 1) . ",`lasttime`=" . $HY_cfaf262aef3e4af400 . " where `pccode`='" . $HY_6993af4b451676aba9 . "' and `softid`=" . $HY_810d15d31408c982b2["id"], "notsync");
			}
			else {
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_pubuser set nday=" . $HY_cfaf262aef3e4af400 . ",`ntimes`=1,`lasttime`=" . $HY_cfaf262aef3e4af400 . " where `pccode`='" . $HY_6993af4b451676aba9 . "' and `softid`=" . $HY_810d15d31408c982b2["id"], "notsync");
			}
		}
		else {
			$HY_995d95453acc459aeb = (($HY_810d15d31408c982b2["test_time"] * 60) - $HY_cfaf262aef3e4af400) + $HY_70fdd4c095ad9a39f4["lasttime"];
		}
	}

	hy_7d00d733394d840935(hy_27ba0db6dfba75a213($HY_500e14df6c9dae523a["chked"] . $HY_500e14df6c9dae523a["linecode"] . $HY_810d15d31408c982b2["softkey"], 16), $HY_995d95453acc459aeb);
}

if ((1 < $HY_c27c05c8ec8b51c4d4["linknum"]) && ($HY_810d15d31408c982b2["softmode2"] == 1)) {
	exit("crypteno145");
}

if (($HY_810d15d31408c982b2["dkbindpc"] == "0") && ($HY_500e14df6c9dae523a["isrun"] == 1)) {
	exit("crypteno147");
}

if (($HY_500e14df6c9dae523a["bdinfo"] != "") && ($HY_c27c05c8ec8b51c4d4["bdinfo"] != $HY_500e14df6c9dae523a["bdinfo"])) {
	exit("crypteno148");
}

$HY_0b96f5915d2f7b0458 = array();
$HY_461e600f70c429982d = array();

if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_client_" . $HY_12dbc503d0c6c33ec7 . " set id=1 where id=0", "notsync");

	if ($HY_82d6536edf704aabc5->HY_79dd530b16454e1698() == 1146) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE IF NOT EXISTS `kss_z_client_" . $HY_12dbc503d0c6c33ec7 . "` (`id` int(11) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`clientid` int(4) unsigned NOT NULL,`linecode` varchar(10) NOT NULL,`pccode` varchar(128) NOT NULL default '', `unlockday` tinyint(3) unsigned NOT NULL default '0',  `unlocktimes` int(10) unsigned NOT NULL default '0',`isonline` int(2) unsigned NOT NULL,`lasttime` int(10) unsigned NOT NULL,`lastip` bigint(20) unsigned NOT NULL default '0',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			exit("crypteno146");
		}
	}

	if ($HY_500e14df6c9dae523a["chked"] == 0) {
		$HY_16df8d06409b63236e = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_client_" . $HY_12dbc503d0c6c33ec7 . " where username='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"]);

		if (empty($HY_16df8d06409b63236e)) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into kss_z_client_" . $HY_12dbc503d0c6c33ec7 . " (`username`,`clientid`,`linecode`,`unlockday`,`unlocktimes`,`pccode`,`isonline`,`lasttime`,`lastip`) values ('" . $HY_500e14df6c9dae523a["username"] . "'," . $HY_500e14df6c9dae523a["clientid"] . ",'',0,0,'',0,0,0)", "notsync");

			if ($HY_173d86697f24ffa1ee === false) {
				exit("crypteno146");
			}

			$HY_16df8d06409b63236e = array("username" => $HY_500e14df6c9dae523a["username"], "clientid" => $HY_500e14df6c9dae523a["clientid"], "linecode" => "", "unlockday" => 0, "unlocktimes" => 0, "pccode" => "", "isonline" => 0, "lasttime" => 0, "lastip" => 0);
		}
	}
	else {
		$HY_16df8d06409b63236e = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_client_" . $HY_12dbc503d0c6c33ec7 . " where username='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"]);

		if (empty($HY_16df8d06409b63236e)) {
			exit("crypteno135");
		}
	}
}

if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
	$HY_012c69034840f869cf = $HY_16df8d06409b63236e["lastip"];
	$HY_8e5fe08a04624d61e6 = $HY_16df8d06409b63236e["pccode"];
	$HY_51d651aca342a8ad1e = $HY_16df8d06409b63236e["unlockday"];
	$HY_02652ac5d34353b965 = $HY_16df8d06409b63236e["unlocktimes"];
	$HY_318088666030db394a = $HY_16df8d06409b63236e["lasttime"];
	$HY_6f59281014a3648efa = hy_68b1b244e644ac80d4($HY_6993af4b451676aba9, $HY_8e5fe08a04624d61e6);
	$HY_fe8d9666f8d4c1d3d1 = $HY_16df8d06409b63236e["isonline"];
	$HY_c777bdc4b9aff6a65d = $HY_16df8d06409b63236e["linecode"];
}
else {
	$HY_012c69034840f869cf = $HY_c27c05c8ec8b51c4d4["lastip"];
	$HY_8e5fe08a04624d61e6 = $HY_c27c05c8ec8b51c4d4["pccode"];
	$HY_6f59281014a3648efa = hy_68b1b244e644ac80d4($HY_6993af4b451676aba9, $HY_8e5fe08a04624d61e6);
	$HY_c777bdc4b9aff6a65d = $HY_c27c05c8ec8b51c4d4["linecode"];
	$HY_318088666030db394a = $HY_c27c05c8ec8b51c4d4["lasttime"];
	$HY_fe8d9666f8d4c1d3d1 = $HY_c27c05c8ec8b51c4d4["isonline"];
	$HY_51d651aca342a8ad1e = $HY_c27c05c8ec8b51c4d4["unlockday"];
	$HY_02652ac5d34353b965 = $HY_c27c05c8ec8b51c4d4["unlocktimes"];
}

if (($HY_810d15d31408c982b2["autolock_time"] != 0) && ($HY_810d15d31408c982b2["autolock_times"] != 0)) {
	$HY_3bc93ad37cacb84e23 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from kss_z_log_" . $HY_12dbc503d0c6c33ec7 . " where username='" . $HY_500e14df6c9dae523a["username"] . "' and optype=1 and addtime>" . ($HY_cfaf262aef3e4af400 - ($HY_810d15d31408c982b2["autolock_time"] * 60)));

	if ($HY_810d15d31408c982b2["autolock_times"] < $HY_3bc93ad37cacb84e23["tnum"]) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " set islock=3,intro='登陆太频繁，锁定帐号' where username='" . $HY_500e14df6c9dae523a["username"] . "'", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058(hy_dd5aff5ff388ed9de4(22), "notsync");
		exit("crypteno129");
	}
}

if (($HY_810d15d31408c982b2["autolock_time_ip"] != 0) && ($HY_810d15d31408c982b2["autolock_ipnum"] != 0)) {
	$HY_3bc93ad37cacb84e23 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(distinct ip) as tnum from kss_z_log_" . $HY_12dbc503d0c6c33ec7 . " where username='" . $HY_500e14df6c9dae523a["username"] . "' and optype=1 and addtime>" . ($HY_cfaf262aef3e4af400 - ($HY_810d15d31408c982b2["autolock_time_ip"] * 60)));

	if ($HY_810d15d31408c982b2["autolock_ipnum"] < $HY_3bc93ad37cacb84e23["tnum"]) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " set islock=3,intro='IP变动太频繁，锁定帐号' where username='" . $HY_500e14df6c9dae523a["username"] . "'", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058(hy_dd5aff5ff388ed9de4(22), "notsync");
		exit("crypteno129");
	}
}

if (($HY_810d15d31408c982b2["softmode2"] != "1") && ($HY_810d15d31408c982b2["dkbindpc"] != "1")) {
	if ($HY_500e14df6c9dae523a["chked"] == 0) {
		$HY_0b96f5915d2f7b0458["linecode"] = $HY_500e14df6c9dae523a["linecode"];
	}
	else if ($HY_c777bdc4b9aff6a65d == "") {
		$HY_0b96f5915d2f7b0458["linecode"] = $HY_500e14df6c9dae523a["linecode"];
	}
	else if ($HY_c777bdc4b9aff6a65d != $HY_500e14df6c9dae523a["linecode"]) {
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(25);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
		exit("crypteno136");
	}
}

$HY_c580545c3be978b26a = "";

if ($HY_810d15d31408c982b2["softmode2"] != "1") {
	if ($HY_500e14df6c9dae523a["chked"] == 0) {
		if ($HY_6f59281014a3648efa === false) {
			if ($HY_810d15d31408c982b2["chkonline"] == 1) {
				if ($HY_fe8d9666f8d4c1d3d1 == 1) {
					if ($HY_810d15d31408c982b2["outlinetimes"] == 0) {
						exit("crypteno133");
					}

					if (($HY_cfaf262aef3e4af400 - $HY_318088666030db394a) < ($HY_810d15d31408c982b2["outlinetime"] * 60)) {
						$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(24);
						$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
						exit("crypteno133");
					}

					if ($HY_51d651aca342a8ad1e != date("d")) {
						$HY_0b96f5915d2f7b0458["unlockday"] = date("d");
						$HY_0b96f5915d2f7b0458["unlocktimes"] = 1;
					}
					else {
						if ($HY_810d15d31408c982b2["outlinetimes"] < ($HY_02652ac5d34353b965 + 1)) {
							$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(26);
							$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
							exit("crypteno138");
						}

						$HY_0b96f5915d2f7b0458["unlocktimes"] = $HY_02652ac5d34353b965 + 1;
					}

					$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(23);
				}
				else {
					$HY_0b96f5915d2f7b0458["isonline"] = 1;
					$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(2);
				}

				$HY_0b96f5915d2f7b0458["pccode"] = $HY_6993af4b451676aba9;
			}
			else if ($HY_810d15d31408c982b2["unbindpc_set"] == 2) {
				if (($HY_cfaf262aef3e4af400 - $HY_318088666030db394a) < ($HY_810d15d31408c982b2["unbindpc_autotime"] * 60)) {
					$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(27);
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
					exit("crypteno139");
				}

				$HY_d1fd038ca34dba0681 = 0;

				if ($HY_51d651aca342a8ad1e != date("d")) {
					$HY_0b96f5915d2f7b0458["unlockday"] = date("d");
					$HY_0b96f5915d2f7b0458["unlocktimes"] = 1;

					if ($HY_810d15d31408c982b2["unbindpc_ctset"] == 1) {
						$HY_d1fd038ca34dba0681 = 1;
						$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(15);
					}
					else {
						$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(16);
					}
				}
				else {
					if ($HY_810d15d31408c982b2["unbindpc_ctset"] == 1) {
						$HY_d1fd038ca34dba0681 = 1;

						if ($HY_810d15d31408c982b2["unbindpc_times"] < ($HY_02652ac5d34353b965 + 1)) {
							$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(28);
							$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
							exit("crypteno140");
						}

						$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(15);
					}
					else if ($HY_810d15d31408c982b2["unbindpc_ctset"] == 2) {
						if ($HY_810d15d31408c982b2["unbindpc_times"] < ($HY_02652ac5d34353b965 + 1)) {
							$HY_d1fd038ca34dba0681 = 1;
							$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(17);
						}
						else {
							$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(18);
						}
					}
					else {
						$HY_d1fd038ca34dba0681 = 0;

						if ($HY_810d15d31408c982b2["unbindpc_times"] < ($HY_02652ac5d34353b965 + 1)) {
							$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(28);
							$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
							exit("crypteno140");
						}

						$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(16);
					}

					$HY_0b96f5915d2f7b0458["unlocktimes"] = $HY_02652ac5d34353b965 + 1;
				}

				if ($HY_d1fd038ca34dba0681 == 1) {
					$HY_d0da47321f6b24f84e = $HY_c27c05c8ec8b51c4d4["cday"];
					$HY_1d8ef96818dff1fb60 = $HY_810d15d31408c982b2["unbindpc_changetime"];
					$HY_c27c05c8ec8b51c4d4["cday"] = $HY_c27c05c8ec8b51c4d4["cday"] - $HY_810d15d31408c982b2["unbindpc_changetime"];
					$HY_0b96f5915d2f7b0458["cday"] = $HY_c27c05c8ec8b51c4d4["cday"];
					$HY_0b96f5915d2f7b0458["endtime"] = ($HY_c27c05c8ec8b51c4d4["cday"] * 86400) + $HY_c27c05c8ec8b51c4d4["starttime"];
					if (($HY_0b96f5915d2f7b0458["endtime"] < $HY_cfaf262aef3e4af400) || ($HY_0b96f5915d2f7b0458["cday"] < 0)) {
						$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(29);
						$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
						exit("crypteno141");
					}

					$HY_c580545c3be978b26a = "insert into kss_z_cz_" . $HY_12dbc503d0c6c33ec7 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values (" . $HY_cfaf262aef3e4af400 . ",6,'" . $HY_c27c05c8ec8b51c4d4["username"] . "'," . $HY_d0da47321f6b24f84e . "," . $HY_0b96f5915d2f7b0458["cday"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . "," . $HY_c27c05c8ec8b51c4d4["points"] . ",'','')";
				}

				$HY_0b96f5915d2f7b0458["pccode"] = $HY_6993af4b451676aba9;
			}
			else {
				$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(10);
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
				exit("crypteno137");
			}
		}
		else {
			if ($HY_810d15d31408c982b2["chkonline"] == 1) {
				$HY_0b96f5915d2f7b0458["isonline"] = 1;
			}

			if ($HY_8e5fe08a04624d61e6 != $HY_6f59281014a3648efa) {
				$HY_0b96f5915d2f7b0458["pccode"] = $HY_6f59281014a3648efa;
			}

			$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(1);
		}

		$HY_0b96f5915d2f7b0458["activetimes"] = $HY_c27c05c8ec8b51c4d4["activetimes"] + 1;
	}
	else if ($HY_6f59281014a3648efa === false) {
		$HY_2b051c35c3cffb9826 = hy_dd5aff5ff388ed9de4(11);
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync");
		exit("crypteno142");
	}
}
else if ($HY_500e14df6c9dae523a["chked"] == 0) {
	$HY_461e600f70c429982d["notsync_01"] = hy_dd5aff5ff388ed9de4(9);
}

$HY_0b96f5915d2f7b0458["lasttime"] = $HY_cfaf262aef3e4af400;

if ($HY_012c69034840f869cf != $HY_063c1f55878eb36837) {
	$HY_0b96f5915d2f7b0458["lastip"] = $HY_063c1f55878eb36837;
}

if (isset($HY_0b96f5915d2f7b0458["isonline"]) && ($HY_0b96f5915d2f7b0458["isonline"] == 1) && ($HY_fe8d9666f8d4c1d3d1 == 1)) {
	unset($HY_0b96f5915d2f7b0458["isonline"]);
}

if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
	if ($HY_810d15d31408c982b2["dkbindpc"] == 1) {
		$HY_6c65dbab243d70dbc7 = array("cday" => 0, "endtime" => 0, "activetimes" => 0);
		$HY_a2f78ad2961d09fd68 = array("lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0);
	}
	else {
		$HY_6c65dbab243d70dbc7 = array("cday" => 0, "endtime" => 0, "activetimes" => 0);
		$HY_a2f78ad2961d09fd68 = array("lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "linecode" => 0);
	}
}
else if ($HY_810d15d31408c982b2["dkbindpc"] == 1) {
	$HY_6c65dbab243d70dbc7 = array("cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0);
	$HY_a2f78ad2961d09fd68 = array("no_key" => 0);
}
else {
	$HY_6c65dbab243d70dbc7 = array("cday" => 0, "endtime" => 0, "lastip" => 0, "pccode" => 0, "unlockday" => 0, "unlocktimes" => 0, "lasttime" => 0, "isonline" => 0, "activetimes" => 0, "linecode" => 0);
	$HY_a2f78ad2961d09fd68 = array("no_key" => 0);
}

$HY_961a5bc1af30e9eb64 = array_intersect_key($HY_0b96f5915d2f7b0458, $HY_6c65dbab243d70dbc7);
$HY_4e744d9f5ffc0b53dd = array_intersect_key($HY_0b96f5915d2f7b0458, $HY_a2f78ad2961d09fd68);

if (!empty($HY_461e600f70c429982d)) {
	foreach ($HY_461e600f70c429982d as $HY_09adfa6b15bfd2fa07 ) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_09adfa6b15bfd2fa07, "notsync");
	}
}

$HY_ee1a55a0fef5930346 = array("linecode" => 0, "lasttime" => 0, "lastip" => 0, "activetimes" => 0, "unlockday" => 0, "unlocktimes" => 0, "isonline" => 0, "pccode" => 0);

if (!empty($HY_961a5bc1af30e9eb64)) {
	$HY_15610ab55ead36eab2 = "sync";
	$HY_1bde8714f8919878ac = array_diff_key($HY_961a5bc1af30e9eb64, $HY_ee1a55a0fef5930346);

	if (empty($HY_1bde8714f8919878ac)) {
		$HY_15610ab55ead36eab2 = "notsync";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_user_" . $HY_12dbc503d0c6c33ec7, $HY_961a5bc1af30e9eb64, "username='" . $HY_500e14df6c9dae523a["username"] . "'", $HY_15610ab55ead36eab2);
}

if (!empty($HY_4e744d9f5ffc0b53dd)) {
	$HY_15610ab55ead36eab2 = "sync";
	$HY_1bde8714f8919878ac = array_diff_key($HY_4e744d9f5ffc0b53dd, $HY_ee1a55a0fef5930346);

	if (empty($HY_1bde8714f8919878ac)) {
		$HY_15610ab55ead36eab2 = "notsync";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_z_client_" . $HY_12dbc503d0c6c33ec7, $HY_4e744d9f5ffc0b53dd, "username='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"], $HY_15610ab55ead36eab2);
}

if ($HY_c580545c3be978b26a != "") {
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_c580545c3be978b26a, "sync");
}

hy_7d00d733394d840935(hy_27ba0db6dfba75a213($HY_500e14df6c9dae523a["chked"] . $HY_500e14df6c9dae523a["linecode"] . $HY_810d15d31408c982b2["softkey"], 16));

?>
