<?php

function make_key($HY_4b05bcfa226e0b0513 = 20)
{
	$HY_6611f0afbe845c0839 = "";

	for ($HY_1a28aad2b3d8de49b6 = 0; $HY_1a28aad2b3d8de49b6 < $HY_4b05bcfa226e0b0513; $HY_1a28aad2b3d8de49b6++) {
		$HY_57673ceb9319d4ac72 = mt_rand(0, 2);

		if ($HY_57673ceb9319d4ac72 == 0) {
			$HY_6611f0afbe845c0839 .= mt_rand(0, 9);
		}
		else if ($HY_57673ceb9319d4ac72 == 1) {
			$HY_6611f0afbe845c0839 .= chr(mt_rand(65, 90));
		}
		else {
			$HY_6611f0afbe845c0839 .= chr(mt_rand(97, 122));
		}
	}

	return $HY_6611f0afbe845c0839;
}

function encode_rsa($HY_2b09a946b046127c26, $HY_0822b23ffc3496b72c, $HY_57a28a7e1e55c4a3ee)
{
	return rsa_encrypt($HY_2b09a946b046127c26, $HY_0822b23ffc3496b72c, $HY_57a28a7e1e55c4a3ee, 256);
}

function decode_rsa($HY_2b09a946b046127c26, $HY_0822b23ffc3496b72c, $HY_57a28a7e1e55c4a3ee)
{
	return rsa_decrypt($HY_2b09a946b046127c26, $HY_0822b23ffc3496b72c, $HY_57a28a7e1e55c4a3ee, 256);
}

function api_set($HY_0b144b8841cdf93234, $HY_8d0a6e6f261fc3617d)
{
	global $HY_82d6536edf704aabc5;
	global $HY_810d15d31408c982b2;
	global $HY_c27c05c8ec8b51c4d4;
	global $HY_4b76617571169dc2ee;
	global $HY_f4052ab907e2369d21;
	global $HY_12dbc503d0c6c33ec7;
	$HY_88e2fc109105270e14 = array("锁" => "islock", "锁定" => "islock", "标签" => "tag", "备注" => "intro", "天数" => "cday", "点数" => "points", "附属性" => "keyextattr", "付属性" => "keyextattr", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo");
	$HY_b145448aa76bc95b5e = false;

	if (!array_key_exists($HY_0b144b8841cdf93234, $HY_88e2fc109105270e14)) {
		return "par1err";
	}

	$HY_2ca5260427d35b2874 = mysql_real_escape_string($HY_8d0a6e6f261fc3617d);

	switch ($HY_0b144b8841cdf93234) {
	case "锁":
	case "锁定":
	case "标签":
	case "备注":
	case "天数":
	case "点数":
	case "附属性":
	case "付属性":
		$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("UPDATE `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` set `" . $HY_88e2fc109105270e14[$HY_0b144b8841cdf93234] . "`='" . $HY_2ca5260427d35b2874 . "' where `username`='" . $HY_c27c05c8ec8b51c4d4["username"] . "' ", "sync");

		if ($HY_e61e7cf54e140aa6af !== true) {
			$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
		}

		$HY_b145448aa76bc95b5e = $HY_e61e7cf54e140aa6af;
		break;

	case "机器码":
	case "私有数据":
	case "绑定信息":
		if ($HY_c27c05c8ec8b51c4d4["linknum"] == 1) {
			$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("UPDATE `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` set `" . $HY_88e2fc109105270e14[$HY_0b144b8841cdf93234] . "`='" . $HY_2ca5260427d35b2874 . "' where `username`='" . $HY_c27c05c8ec8b51c4d4["username"] . "'", "sync");
		}
		else {
			$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("UPDATE `kss_z_client_" . $HY_12dbc503d0c6c33ec7 . "` set `" . $HY_88e2fc109105270e14[$HY_0b144b8841cdf93234] . "`='" . $HY_2ca5260427d35b2874 . "' where `username`='" . $HY_c27c05c8ec8b51c4d4["username"] . "' and `clientid`=" . $HY_4b76617571169dc2ee["clientid"], "sync");
		}

		if ($HY_e61e7cf54e140aa6af !== true) {
			$HY_e61e7cf54e140aa6af = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
		}

		$HY_b145448aa76bc95b5e = $HY_e61e7cf54e140aa6af;
		break;

	default:
		$HY_b145448aa76bc95b5e = false;
	}

	return $HY_b145448aa76bc95b5e;
}

function api_get($HY_0b144b8841cdf93234)
{
	global $HY_82d6536edf704aabc5;
	global $HY_810d15d31408c982b2;
	global $HY_c27c05c8ec8b51c4d4;
	global $HY_4b76617571169dc2ee;
	global $HY_063c1f55878eb36837;
	$HY_0f7ec380d97aea1d44 = array("当前IP" => $HY_063c1f55878eb36837, "用户名" => "username", "锁" => "islock", "锁定" => "islock", "登陆密码" => "password", "用户密码" => "password", "安全密码" => "password2", "标签" => "tag", "登陆次数" => "activetimes", "备注" => "intro", "天数" => "cday", "点数" => "points", "附属性" => "keyextattr", "付属性" => "keyextattr", "开始时间戮" => "starttime", "开始时间" => "starttime", "机器码" => "pccode", "私有数据" => "updata", "绑定信息" => "bdinfo", "上一次IP" => "lastip");

	if (!array_key_exists($HY_0b144b8841cdf93234, $HY_0f7ec380d97aea1d44)) {
		return "par1err";
	}

	$HY_b145448aa76bc95b5e = "";

	switch ($HY_0b144b8841cdf93234) {
	case "当前IP":
		$HY_b145448aa76bc95b5e = $HY_0f7ec380d97aea1d44[$HY_0b144b8841cdf93234];
		break;

	case "用户名":
	case "锁":
	case "锁定":
	case "登陆密码":
	case "用户密码":
	case "安全密码":
	case "标签":
	case "登陆次数":
	case "备注":
	case "天数":
	case "点数":
	case "附属性":
	case "付属性":
	case "开始时间戮":
	case "开始时间":
		$HY_b145448aa76bc95b5e = $HY_c27c05c8ec8b51c4d4[$HY_0f7ec380d97aea1d44[$HY_0b144b8841cdf93234]];
		break;

	case "机器码":
	case "私有数据":
	case "绑定信息":
	case "上一次IP":
		if (1 < $HY_c27c05c8ec8b51c4d4["linknum"]) {
			$HY_b145448aa76bc95b5e = $HY_4b76617571169dc2ee[$HY_0f7ec380d97aea1d44[$HY_0b144b8841cdf93234]];
		}
		else {
			$HY_b145448aa76bc95b5e = $HY_c27c05c8ec8b51c4d4[$HY_0f7ec380d97aea1d44[$HY_0b144b8841cdf93234]];
		}

		break;

	default:
		$HY_b145448aa76bc95b5e = "par1err";
	}

	return $HY_b145448aa76bc95b5e;
}

function api_points(&$HY_1b2de0d9208ba0bcbd, $HY_fd266d63af4d47cce1, $HY_4bdd71a5f67e5bcf0a)
{
	global $HY_82d6536edf704aabc5;
	global $HY_810d15d31408c982b2;
	global $HY_c27c05c8ec8b51c4d4;
	$HY_cfaf262aef3e4af400 = time();

	if ($HY_fd266d63af4d47cce1 < 0) {
		$HY_1b2de0d9208ba0bcbd = "要扣的点数小于0";
		return false;
	}

	if ($HY_c27c05c8ec8b51c4d4["points"] < $HY_fd266d63af4d47cce1) {
		$HY_1b2de0d9208ba0bcbd = "用户点数不够扣";
		return false;
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_sql_points where guid='" . $HY_4bdd71a5f67e5bcf0a . "' and `username`='" . $HY_c27c05c8ec8b51c4d4["username"] . "' and tbname='" . $HY_810d15d31408c982b2["pid"] . "_" . $HY_810d15d31408c982b2["id"] . "' and svrid=1 and addtime>" . ($HY_cfaf262aef3e4af400 - 180) . " limit 0,1");

	if (!empty($HY_173d86697f24ffa1ee)) {
		$HY_1b2de0d9208ba0bcbd = "本次未扣点，可能是重复扣点操作";
		return $HY_c27c05c8ec8b51c4d4["points"];
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_810d15d31408c982b2["pid"] . "_" . $HY_810d15d31408c982b2["id"] . " set `points`=`points`-" . $HY_fd266d63af4d47cce1 . " where `username`='" . $HY_c27c05c8ec8b51c4d4["username"] . "'", "sync");

	if ($HY_173d86697f24ffa1ee === true) {
		if (SVRID == 2) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values (" . $HY_cfaf262aef3e4af400 . ",'" . $HY_810d15d31408c982b2["pid"] . "_" . $HY_810d15d31408c982b2["id"] . "','" . $HY_c27c05c8ec8b51c4d4["username"] . "'," . $HY_fd266d63af4d47cce1 . ",'" . $HY_4bdd71a5f67e5bcf0a . "'," . SVRID . ")", "notsync");
		}

		$HY_b145448aa76bc95b5e = "扣点成功";
		return $HY_c27c05c8ec8b51c4d4["points"] - $HY_fd266d63af4d47cce1;
	}
	else {
		$HY_1b2de0d9208ba0bcbd = "执行扣点SQL失败";
		return false;
	}
}

defined("YH2") || exit("Access denied to view this page!");

if ($HY_810d15d31408c982b2["softmode"] == "KSOFT") {
	$HY_500e14df6c9dae523a["czkey"] = $HY_500e14df6c9dae523a["username"];
	$HY_500e14df6c9dae523a["password"] = substr($HY_500e14df6c9dae523a["czkey"], 10, 10);
	$HY_500e14df6c9dae523a["username"] = substr($HY_500e14df6c9dae523a["czkey"], 0, 10);
}

$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT * from `kss_z_user_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `password`='" . $HY_500e14df6c9dae523a["password"] . "' ");

if (empty($HY_c27c05c8ec8b51c4d4)) {
	exit("crypteno300");
}

if (0 < $HY_c27c05c8ec8b51c4d4["islock"]) {
	exit("crypteno301");
}

if ($HY_c27c05c8ec8b51c4d4["endtime"] < $HY_cfaf262aef3e4af400) {
	exit("crypteno302");
}

$HY_4b76617571169dc2ee = array();
if (($HY_810d15d31408c982b2["softmode2"] != "1") && ($HY_500e14df6c9dae523a["ischangesvr"] != 1) && ($HY_c27c05c8ec8b51c4d4["endtime"] != PETIME)) {
	if ($HY_c27c05c8ec8b51c4d4["linknum"] == 1) {
		if ($HY_810d15d31408c982b2["dkbindpc"] != "1") {
			if ($HY_c27c05c8ec8b51c4d4["linecode"] != $HY_500e14df6c9dae523a["linecode"]) {
				exit("crypteno305");
			}
		}
	}
	else {
		$HY_4b76617571169dc2ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from `kss_z_client_" . $HY_12dbc503d0c6c33ec7 . "` where `username`='" . $HY_500e14df6c9dae523a["username"] . "' and `clientid`=" . $HY_500e14df6c9dae523a["clientid"]);

		if (empty($HY_4b76617571169dc2ee)) {
			exit("crypteno304");
		}

		if ($HY_810d15d31408c982b2["dkbindpc"] != "1") {
			if ($HY_4b76617571169dc2ee["linecode"] != $HY_500e14df6c9dae523a["linecode"]) {
				exit("crypteno305");
			}
		}
	}
}

$resultrrr = api_get("附属性");
$resultrrr += 1;
api_set("附属性", $resultrrr);
$HY_ecd7f4e49ac44d2a69 = KSSINCDIR . "advapi" . DIRECTORY_SEPARATOR . $HY_810d15d31408c982b2["pid"] . $HY_810d15d31408c982b2["id"] . ".php";

if (is_file($HY_ecd7f4e49ac44d2a69)) {
	include ($HY_ecd7f4e49ac44d2a69);
}
else {
	exit("crypteno306");
}

$HY_e8d596053312406637 = explode(",", $HY_500e14df6c9dae523a["cmd"]);
$HY_badf348a0e8b3dd9bb = $HY_e8d596053312406637[0];

if (substr($HY_badf348a0e8b3dd9bb, 0, 2) != "v_") {
	exit("crypteno307");
}

if (!function_exists($HY_badf348a0e8b3dd9bb)) {
	exit("crypteno308");
}

$HY_810d15d31408c982b2["advapi"] = "";
$HY_810d15d31408c982b2["softintro"] = "";
$HY_810d15d31408c982b2["softnotice"] = "";
$HY_810d15d31408c982b2["updatelog"] = "";
$HY_f5d414dc862bc033dd = array("soft" => $HY_810d15d31408c982b2, "member" => $HY_c27c05c8ec8b51c4d4, "client" => $HY_4b76617571169dc2ee, "ip" => long2ip($HY_063c1f55878eb36837), "intip" => $HY_063c1f55878eb36837, "pccode" => $HY_d74cbaa6ba201b5462[4], "username" => $HY_500e14df6c9dae523a["username"], "password" => $HY_500e14df6c9dae523a["password"], "clientid" => $HY_500e14df6c9dae523a["clientid"], "linecode" => $HY_d74cbaa6ba201b5462[8], "ischangesvr" => $HY_d74cbaa6ba201b5462[9], "cmd" => $HY_d74cbaa6ba201b5462[10]);
$adv_db = $HY_82d6536edf704aabc5;
$adv_table = $HY_12dbc503d0c6c33ec7;
$adb_pdata = $HY_f5d414dc862bc033dd;
$adv_user = $HY_c27c05c8ec8b51c4d4;
$adv_user2 = $HY_4b76617571169dc2ee;

switch (count($HY_e8d596053312406637)) {
case 1:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 2:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 3:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 4:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 5:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_e8d596053312406637[4], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 6:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_e8d596053312406637[4], $HY_e8d596053312406637[5], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 7:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_e8d596053312406637[4], $HY_e8d596053312406637[5], $HY_e8d596053312406637[6], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 8:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_e8d596053312406637[4], $HY_e8d596053312406637[5], $HY_e8d596053312406637[6], $HY_e8d596053312406637[7], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 9:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_e8d596053312406637[4], $HY_e8d596053312406637[5], $HY_e8d596053312406637[6], $HY_e8d596053312406637[7], $HY_e8d596053312406637[8], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

case 10:
	$HY_96ddb53e0dbd083b75 = $HY_badf348a0e8b3dd9bb($HY_e8d596053312406637[1], $HY_e8d596053312406637[2], $HY_e8d596053312406637[3], $HY_e8d596053312406637[4], $HY_e8d596053312406637[5], $HY_e8d596053312406637[6], $HY_e8d596053312406637[7], $HY_e8d596053312406637[8], $HY_e8d596053312406637[9], $HY_f5d414dc862bc033dd, $HY_82d6536edf704aabc5);
	break;

default:
	exit("crypteno309");
}

$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_12dbc503d0c6c33ec7 . " set lasttime=" . $HY_cfaf262aef3e4af400 . " where `username`='" . $HY_f5d414dc862bc033dd["username"] . "'", "notsync");
$HY_61e628002bea339b59 = hy_eeeb2ee0ea106ad167($HY_96ddb53e0dbd083b75, $HY_4433a8f60c3d29fc2c, YYPAGECODE);
if ((RSACRYPT == 1) && (900 < CLIENTVER) && ($HY_badf348a0e8b3dd9bb != "v_points")) {
	$HY_b3cc76f9038ca26c06 = rsa_encrypt(substr($HY_61e628002bea339b59, 0, 20), RSA_PRVKEY, RSA_MODULES, 256);
	exit("cryptrsadata" . $HY_b3cc76f9038ca26c06 . "`" . substr($HY_61e628002bea339b59, 20));
}
else {
	exit("crypt" . $HY_61e628002bea339b59);
}

?>
