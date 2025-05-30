<?php

function HY_3f68f793051251cf55($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_63a4f3e0b204294469($HY_0f1c049006be3df8a0, $HY_d74199a47051ed3461)
{
	$HY_d74199a47051ed3461 = md5($HY_d74199a47051ed3461);
	$HY_9d1a4f231de1ff87d3 = 0;
	$HY_173d86697f24ffa1ee = "";

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < strlen($HY_0f1c049006be3df8a0); $HY_fc12e3cf6043961fb3++) {
		$HY_9d1a4f231de1ff87d3 = ($HY_9d1a4f231de1ff87d3 == strlen($HY_d74199a47051ed3461) ? 0 : $HY_9d1a4f231de1ff87d3);
		$HY_173d86697f24ffa1ee .= $HY_0f1c049006be3df8a0[$HY_fc12e3cf6043961fb3] ^ $HY_d74199a47051ed3461[$HY_9d1a4f231de1ff87d3++];
	}

	return $HY_173d86697f24ffa1ee;
}

function HY_b6aad5d03a2fc38cf2($HY_ce56d75201b55235a4, $HY_4b05bcfa226e0b0513 = 32)
{
	if ($HY_ce56d75201b55235a4 == "") {
		return "";
	}

	$HY_0da153a6cb35672925 = md5(COOKKEY . "10000000000" . $HY_ce56d75201b55235a4);
	$HY_0da153a6cb35672925 = substr($HY_0da153a6cb35672925, 0, $HY_4b05bcfa226e0b0513);
	return $HY_0da153a6cb35672925;
}

function HY_ca61480003950c6b1a($HY_ce56d75201b55235a4, $HY_4b05bcfa226e0b0513 = 32)
{
	$HY_0da153a6cb35672925 = md5(MD5KEY . chr(102) . chr(104) . chr(117) . chr(111) . chr(121) . chr(117) . chr(110) . $HY_ce56d75201b55235a4);
	$HY_0da153a6cb35672925 = substr($HY_0da153a6cb35672925, 0, $HY_4b05bcfa226e0b0513);
	return $HY_0da153a6cb35672925;
}

function HY_27ba0db6dfba75a213($HY_ce56d75201b55235a4, $HY_4b05bcfa226e0b0513 = 32)
{
	$HY_0da153a6cb35672925 = md5(MD5KEY . "signdatasoftkey" . $HY_ce56d75201b55235a4);
	$HY_0da153a6cb35672925 = substr($HY_0da153a6cb35672925, 0, $HY_4b05bcfa226e0b0513);
	return $HY_0da153a6cb35672925;
}

function HY_70f26b1abb3d9d96bb($HY_6c370550d94caffe93)
{
	if ($HY_6c370550d94caffe93 == "") {
		return "";
	}

	$HY_6c370550d94caffe93 = base64_encode(gzcompress($HY_6c370550d94caffe93));
	$HY_6c370550d94caffe93 = strtr($HY_6c370550d94caffe93, "+/=", "|_!");
	return $HY_6c370550d94caffe93;
}

function crypt_chrencode($HY_2b487dc4fea8647f54, $HY_83e382baa52335f4dd = "GBK", $HY_c2c4ad52063115ca65 = "utf-8")
{
	$HY_c8b8e238ec7f203fd4 = "";

	if (function_exists("mb_convert_encoding")) {
		$HY_6611f0afbe845c0839 = mb_convert_encoding($HY_2b487dc4fea8647f54, $HY_c2c4ad52063115ca65, $HY_83e382baa52335f4dd);
	}
	else if (function_exists("iconv")) {
		$HY_6611f0afbe845c0839 = iconv($HY_83e382baa52335f4dd, $HY_c2c4ad52063115ca65, $HY_2b487dc4fea8647f54);
	}
	else {
		exit("sorry, you have no libs support for charset change.");
	}

	return $HY_6611f0afbe845c0839;
}

function HY_60b16fe77d53b1950e($HY_2b487dc4fea8647f54, $HY_83e382baa52335f4dd = "GBK", $HY_c2c4ad52063115ca65 = "utf-8")
{
	$HY_c8b8e238ec7f203fd4 = "";

	if (function_exists("mb_convert_encoding")) {
		$HY_6611f0afbe845c0839 = mb_convert_encoding($HY_2b487dc4fea8647f54, $HY_c2c4ad52063115ca65, $HY_83e382baa52335f4dd);
	}
	else if (function_exists("iconv")) {
		$HY_6611f0afbe845c0839 = iconv($HY_83e382baa52335f4dd, $HY_c2c4ad52063115ca65, $HY_2b487dc4fea8647f54);
	}
	else {
		exit("sorry, you have no libs support for charset change.");
	}

	return $HY_6611f0afbe845c0839;
}

function HY_5170dc4897c581d8f2()
{
	$HY_9987a3c39cd97f32f8 = "http://" . $_SERVER["HTTP_HOST"];
	return $HY_9987a3c39cd97f32f8;
}

function HY_d7b991279933c7b3e3()
{
	$HY_1836e111f5dbaa9a1b = (!function_exists("memory_get_usage") ? "0" : round(memory_get_usage() / 1024 / 1024, 2) . "MB");
	return $HY_1836e111f5dbaa9a1b;
}

function HY_02069a70b9c1c2f826()
{
	return intval((time() / 86400) - 15000);
}

function HY_af470935131a2269b8()
{
	if (SVRID != 1) {
		hy_bd307d155f057feb55("备服禁止此操作！");
	}
}

function HY_5275a6b68cd141a74b($HY_96ada6469bcba8499a)
{
	if (hy_8ea23c5626d65adda5("usleep") == true) {
		usleep($HY_96ada6469bcba8499a * 1000);
	}
	else {
		$HY_5758960ce351e5e7a6 = hy_c28ffe58a6314b1fd4();

		while (((hy_c28ffe58a6314b1fd4() - $HY_5758960ce351e5e7a6) * 1000) < $HY_96ada6469bcba8499a) {
			hy_6bfeee86cee6e24af6(100);
		}
	}
}

function HY_8ea23c5626d65adda5($HY_e064e784da69fc4602)
{
	if (!function_exists($HY_e064e784da69fc4602)) {
		return false;
	}

	$HY_8f6b7993c110d16a65 = ini_get("safe_mode");
	$HY_4b5c8de5d968905d13 = array("set_time_limit");
	$HY_0c378421b147093dc2 = ini_get("disable_functions");
	$HY_0c378421b147093dc2 = str_replace(" ", "", $HY_0c378421b147093dc2);

	if (!empty($HY_0c378421b147093dc2)) {
		$HY_d6bdd01c69c3af1dde = explode(",", $HY_0c378421b147093dc2);

		if (in_array($HY_e064e784da69fc4602, $HY_d6bdd01c69c3af1dde)) {
			return false;
		}
	}

	if (!empty($HY_8f6b7993c110d16a65)) {
		if (in_array($HY_e064e784da69fc4602, $HY_4b5c8de5d968905d13)) {
			return false;
		}
	}

	return true;
}

function HY_c28ffe58a6314b1fd4()
{
	list($HY_759c801d88e31a7f30, $HY_438e4a1ad85663ad55) = explode(" ", microtime());
	return (double) $HY_759c801d88e31a7f30 + (double) $HY_438e4a1ad85663ad55;
}

function HY_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7)
{
	$HY_1d3672568a4dddc55d = count($HY_2aebb904fc93ff3ba7);
	$HY_d64afea8b2ce9166c8 = 0;

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < $HY_1d3672568a4dddc55d; $HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2) {
		$HY_d64afea8b2ce9166c8 = ($HY_d64afea8b2ce9166c8 + $HY_2aebb904fc93ff3ba7[$HY_fc12e3cf6043961fb3 + 1]) - $HY_2aebb904fc93ff3ba7[$HY_fc12e3cf6043961fb3];
	}

	return round($HY_d64afea8b2ce9166c8 * 1000, 3);
}

function HY_9138d0c8c0390b8ad8($HY_6c370550d94caffe93)
{
	if ($HY_6c370550d94caffe93 == "") {
		return "";
	}

	$HY_6c370550d94caffe93 = strtr($HY_6c370550d94caffe93, "|_!", "+/=");
	$HY_6c370550d94caffe93 = gzuncompress(base64_decode($HY_6c370550d94caffe93));
	return $HY_6c370550d94caffe93;
}

function HY_3c956344ed050d8c7e($HY_b90e1263e2d6722d93, $HY_11ceb9e9201c60024a)
{
	if (ini_get("safe_mode")) {
		$HY_89acbc3d1587895075 = dir($HY_b90e1263e2d6722d93);
		$HY_1bde8714f8919878ac = array();

		while ($HY_67c423a6c617f13b9e = $HY_89acbc3d1587895075->read()) {
			if (is_file($HY_b90e1263e2d6722d93 . $HY_67c423a6c617f13b9e) && (pathinfo($HY_67c423a6c617f13b9e, PATHINFO_EXTENSION) == $HY_11ceb9e9201c60024a)) {
				$HY_1bde8714f8919878ac[] = $HY_b90e1263e2d6722d93 . $HY_67c423a6c617f13b9e;
			}
		}

		$HY_89acbc3d1587895075->close();
		return $HY_1bde8714f8919878ac;
	}
	else {
		return glob($HY_b90e1263e2d6722d93 . "*." . $HY_11ceb9e9201c60024a);
	}
}

function HY_95ee4a70045e33eeb3()
{
	$HY_b145448aa76bc95b5e = ADMINFOLDER;

	if (!is_file(KSSROOTDIR . $HY_b145448aa76bc95b5e . DIRECTORY_SEPARATOR . "z_datawin.php")) {
		$HY_18cc8ea357b1297e9f = substr(KSSROOTDIR, 0, strlen(KSSROOTDIR) - 1);
		$HY_ebd0bb91bc5bf3e5fe = @opendir($HY_18cc8ea357b1297e9f);

		if ($HY_ebd0bb91bc5bf3e5fe !== false) {
			while ($HY_67c423a6c617f13b9e = readdir($HY_ebd0bb91bc5bf3e5fe)) {
				if (($HY_67c423a6c617f13b9e == ".") || ($HY_67c423a6c617f13b9e == "..")) {
					continue;
				}

				if (is_dir($HY_18cc8ea357b1297e9f . DIRECTORY_SEPARATOR . $HY_67c423a6c617f13b9e) && is_file($HY_18cc8ea357b1297e9f . DIRECTORY_SEPARATOR . $HY_67c423a6c617f13b9e . DIRECTORY_SEPARATOR . "z_datawin.php")) {
					$HY_b145448aa76bc95b5e = $HY_67c423a6c617f13b9e;
					$HY_313e62709616f896c9 = @file_get_contents(KSSINCDIR . "_config.php");
					$HY_313e62709616f896c9 = preg_replace("/define\('ADMINFOLDER','[^']*'\)/i", "define('ADMINFOLDER','" . $HY_b145448aa76bc95b5e . "')", $HY_313e62709616f896c9);
					@file_put_contents(KSSINCDIR . "_config.php", $HY_313e62709616f896c9);
					break;
				}
			}

			closedir($HY_ebd0bb91bc5bf3e5fe);
		}
	}

	return $HY_b145448aa76bc95b5e;
}

function HY_f4532ccbb19d466e95($HY_a8286aa615ce3ceebc = "K")
{
	list($HY_b9a22d78a78a9a92d4, $HY_bafc129a6c77bfe7d8) = explode(" ", microtime());
	return $HY_a8286aa615ce3ceebc . substr(date("ymdHis"), 1) . substr($HY_b9a22d78a78a9a92d4, 2, 6) . hy_6bfeee86cee6e24af6(6);
}

function HY_010795c8508a6450e0($HY_2fe547984310a7ab1f, $HY_85a2825ba908095c90 = 1)
{
	$HY_ee876c6117ad18ab05 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$HY_09024c5411fc1a6337 = "";

	do {
		$HY_09024c5411fc1a6337 = $HY_ee876c6117ad18ab05[$HY_2fe547984310a7ab1f % 52] . $HY_09024c5411fc1a6337;
		$HY_2fe547984310a7ab1f = intval($HY_2fe547984310a7ab1f / 52);
	} while ($HY_2fe547984310a7ab1f != 0);

	$HY_09024c5411fc1a6337 = hy_6bfeee86cee6e24af6(5 - strlen($HY_09024c5411fc1a6337), 1) . $HY_09024c5411fc1a6337;

	if ($HY_85a2825ba908095c90 == 1) {
		$HY_18773fa6b2745a1aa3 = chr(mt_rand(65, 90));
	}
	else {
		$HY_18773fa6b2745a1aa3 = chr(mt_rand(97, 122));
	}

	$HY_3713ee3eb3bc5e7774 = array();
	$HY_3713ee3eb3bc5e7774[] = $HY_18773fa6b2745a1aa3 . $HY_09024c5411fc1a6337;
	$HY_3713ee3eb3bc5e7774[] = hy_6bfeee86cee6e24af6(22);
	return $HY_3713ee3eb3bc5e7774;
}

function HY_6bfeee86cee6e24af6($HY_4b05bcfa226e0b0513, $HY_d0186a4693b1f48126 = 0)
{
	$HY_6611f0afbe845c0839 = "";

	for ($HY_1a28aad2b3d8de49b6 = 0; $HY_1a28aad2b3d8de49b6 < $HY_4b05bcfa226e0b0513; $HY_1a28aad2b3d8de49b6++) {
		if (defined("KEYAZ")) {
			$HY_57673ceb9319d4ac72 = mt_rand(0, 1);

			if ($HY_57673ceb9319d4ac72 == 1) {
				$HY_6611f0afbe845c0839 .= chr(mt_rand(65, 90));
			}
			else {
				$HY_6611f0afbe845c0839 .= chr(mt_rand(97, 122));
			}
		}
		else if ($HY_d0186a4693b1f48126 == 1) {
			$HY_6611f0afbe845c0839 .= mt_rand(0, 9);
		}
		else {
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
	}

	$HY_6611f0afbe845c0839 = strtr($HY_6611f0afbe845c0839, "eEoO0", "iIpP8");
	$HY_6611f0afbe845c0839 = str_ireplace("char", "Dhar", $HY_6611f0afbe845c0839);
	return $HY_6611f0afbe845c0839;
}

function HY_02d4d776bf76a6ada3($HY_44d623c0ed5dce4f99)
{
	if (preg_match("/^(\d{4,4})-(\d{2,2})-(\d{2,2}) (\d{2,2}):(\d{2,2}):(\d{2,2})$/", $HY_44d623c0ed5dce4f99) && (strlen($HY_44d623c0ed5dce4f99) == 19)) {
		return true;
	}
	else {
		return false;
	}
}

function HY_cf2f0673819dddd4a1($HY_c28ffe58a6314b1fd4 = 0, $HY_49d715f8dfedabeb7e = "Y-m-d H:i:s")
{
	if ($HY_c28ffe58a6314b1fd4 == 0) {
		return date($HY_49d715f8dfedabeb7e);
	}
	else {
		return date($HY_49d715f8dfedabeb7e, $HY_c28ffe58a6314b1fd4);
	}
}

function HY_d6173c9bc272354dd2($HY_44d623c0ed5dce4f99)
{
	$HY_85f3c2ea6f5d89e3de = unpack("C*", $HY_44d623c0ed5dce4f99);

	foreach ($HY_85f3c2ea6f5d89e3de as $HY_64e959cf57826e64eb ) {
		if (($HY_64e959cf57826e64eb < 48) || (57 < $HY_64e959cf57826e64eb)) {
			if ($HY_64e959cf57826e64eb != 45) {
				return false;
			}
		}
	}

	return true;
}

function HY_c447d0a25ad6071dc7($HY_44d623c0ed5dce4f99)
{
	$HY_44d623c0ed5dce4f99 = htmlspecialchars_decode($HY_44d623c0ed5dce4f99);
	$HY_44d623c0ed5dce4f99 = str_replace("<", "&lt;", $HY_44d623c0ed5dce4f99);
	$HY_44d623c0ed5dce4f99 = str_replace(">", "&gt;", $HY_44d623c0ed5dce4f99);
	$HY_44d623c0ed5dce4f99 = str_replace(YH2, "&#34;", $HY_44d623c0ed5dce4f99);
	$HY_44d623c0ed5dce4f99 = str_replace("'", "&#39;", $HY_44d623c0ed5dce4f99);
	return $HY_44d623c0ed5dce4f99;
}

function HY_ba8120f86a7df1aecc($HY_07363b80b4a6e24308, $HY_d0186a4693b1f48126, $HY_6320de4bfa54acac69 = "sql", $HY_eba80a5916ccc51365 = "0")
{
	$HY_44d623c0ed5dce4f99 = "";

	switch (strtoupper($HY_d0186a4693b1f48126)) {
	case "GP":
		if (isset($_GET[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_GET[$HY_07363b80b4a6e24308];
		}
		else if (isset($_POST[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_POST[$HY_07363b80b4a6e24308];
		}
		else {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	case "PG":
		if (isset($_POST[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_POST[$HY_07363b80b4a6e24308];
		}
		else if (isset($_GET[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_GET[$HY_07363b80b4a6e24308];
		}
		else {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	case "G":
		if (isset($_GET[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_GET[$HY_07363b80b4a6e24308];
		}
		else {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	case "P":
		if (isset($_POST[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_POST[$HY_07363b80b4a6e24308];
		}
		else {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	case "C":
		if (isset($_COOKIE[$HY_07363b80b4a6e24308])) {
			$HY_44d623c0ed5dce4f99 = $_COOKIE[$HY_07363b80b4a6e24308];
		}
		else {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	default:
		return "0";
	}

	if (is_array($HY_44d623c0ed5dce4f99)) {
		$HY_44d623c0ed5dce4f99 = implode(",", $HY_44d623c0ed5dce4f99);
	}

	if (get_magic_quotes_gpc()) {
		$HY_44d623c0ed5dce4f99 = stripslashes($HY_44d623c0ed5dce4f99);
	}

	switch (strtolower($HY_6320de4bfa54acac69)) {
	case "sqljs":
		if (preg_match("/s\s*c\s*r\s*i\s*p\s*t|<.*?>|select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\.\/|\/\*|'/i", $HY_44d623c0ed5dce4f99)) {
			ob_clean();
			$HY_44d623c0ed5dce4f99 = preg_replace("/(s\s*c\s*r\s*i\s*p\s*t|<.*?>|select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\.\/|\*|')/i", "<font color=red>\$1</font>", $HY_44d623c0ed5dce4f99);
			hy_bd307d155f057feb55("信息部份有禁止使用的字符串" . $HY_07363b80b4a6e24308 . "," . $HY_44d623c0ed5dce4f99);
		}

		break;

	case "sql":
		if (preg_match("/select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\.\/|\/\*|'/i", $HY_44d623c0ed5dce4f99)) {
			ob_clean();
			$HY_44d623c0ed5dce4f99 = preg_replace("/(select|insert|update|delete |union|into|load_file|outfile|char|0x[0-9a-f]{6}|\.\/|\*|')/i", "<font color=red>\$1</font>", $HY_44d623c0ed5dce4f99);
			exit("<p>MySQL injection:" . $HY_d0186a4693b1f48126 . "," . $HY_07363b80b4a6e24308 . "," . $HY_44d623c0ed5dce4f99 . "</p>");
		}

		break;

	case "int":
		if (!hy_d6173c9bc272354dd2($HY_44d623c0ed5dce4f99)) {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	case "num":
		if (!is_numeric($HY_44d623c0ed5dce4f99)) {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		break;

	case "time":
		if (!hy_02d4d776bf76a6ada3($HY_44d623c0ed5dce4f99)) {
			$HY_44d623c0ed5dce4f99 = $HY_eba80a5916ccc51365;
		}

		if ($HY_44d623c0ed5dce4f99 == "0") {
			$HY_44d623c0ed5dce4f99 = "2000-01-01 00:00:00";
		}

		break;

	default:
	}

	return $HY_44d623c0ed5dce4f99;
}

function HY_cb508d896b2e2fcfba()
{
	$HY_68a27bca4c11498222 = "";

	if (filter_var($_SERVER["REMOTE_ADDR"], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
		$HY_68a27bca4c11498222 = $_SERVER["REMOTE_ADDR"];
	}
	else {
		if (isset($_SERVER["HTTP_CLIENT_IP"]) && ($_SERVER["HTTP_CLIENT_IP"] != "")) {
			$HY_68a27bca4c11498222 = $_SERVER["HTTP_CLIENT_IP"];
		}
		else {
			$HY_68a27bca4c11498222 = $_SERVER["HTTP_X_FORWARDED_FOR"];

			if (strpos($HY_68a27bca4c11498222, ",") !== false) {
				$HY_a3ee26eab4fd3035d5 = explode(",", $HY_68a27bca4c11498222);
				$HY_68a27bca4c11498222 = end($HY_a3ee26eab4fd3035d5);
			}
		}
	}

	if ($HY_68a27bca4c11498222 != "") {
		return $HY_68a27bca4c11498222;
	}
}

function HY_095bbb306fa343426f($HY_375d8fed6794557e0b = 0)
{
	static $HY_e0ff5a80f313a73360;
	static $HY_c184360cfb137f233b;

	if (!empty($HY_e0ff5a80f313a73360)) {
		if ($HY_375d8fed6794557e0b == 0) {
			return $HY_e0ff5a80f313a73360;
		}

		return $HY_c184360cfb137f233b;
	}

	$HY_e0ff5a80f313a73360 = user_ext_getip();

	if (7 < strlen($HY_e0ff5a80f313a73360)) {
		if ($HY_375d8fed6794557e0b == 1) {
			$HY_c184360cfb137f233b = bindec(decbin(ip2long($HY_e0ff5a80f313a73360)));
			return $HY_c184360cfb137f233b;
		}

		return $HY_e0ff5a80f313a73360;
	}

	$HY_7d2c1109976fbc3350 = (isset($_SERVER["HTTP_CLIENT_IP"]) && ($_SERVER["HTTP_CLIENT_IP"] != "") ? $_SERVER["HTTP_CLIENT_IP"] : false);
	$HY_4e48e6981c97e55b92 = (isset($_SERVER["REMOTE_ADDR"]) && ($_SERVER["REMOTE_ADDR"] != "") ? $_SERVER["REMOTE_ADDR"] : false);
	$HY_2797bfb48fb0a55a87 = (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && ($_SERVER["HTTP_X_FORWARDED_FOR"] != "") ? $_SERVER["HTTP_X_FORWARDED_FOR"] : false);
	$HY_68a27bca4c11498222 = false;

	if ($HY_7d2c1109976fbc3350) {
		$HY_68a27bca4c11498222 = $HY_7d2c1109976fbc3350;
	}

	if ($HY_2797bfb48fb0a55a87) {
		$HY_68a27bca4c11498222 = $HY_2797bfb48fb0a55a87;
	}

	if (strpos($HY_68a27bca4c11498222, ",") !== false) {
		$HY_a3ee26eab4fd3035d5 = explode(",", $HY_68a27bca4c11498222);
		$HY_68a27bca4c11498222 = end($HY_a3ee26eab4fd3035d5);
	}

	$HY_e0ff5a80f313a73360 = ($HY_68a27bca4c11498222 ? $HY_68a27bca4c11498222 : $_SERVER["REMOTE_ADDR"]);

	if (!preg_match("/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/", $HY_e0ff5a80f313a73360)) {
		$HY_e0ff5a80f313a73360 = "0.0.0.0";
	}

	if ($HY_375d8fed6794557e0b == 1) {
		$HY_c184360cfb137f233b = bindec(decbin(ip2long($HY_e0ff5a80f313a73360)));
		return $HY_c184360cfb137f233b;
	}

	return $HY_e0ff5a80f313a73360;
}

function HY_1244170a3b88fdcf6a($HY_aeaab34660b268d946, $HY_fc12e3cf6043961fb3)
{
	preg_match_all("/./us", $HY_aeaab34660b268d946, $HY_c472804a8c480994ff);
	$HY_b145448aa76bc95b5e = "";

	foreach ($HY_c472804a8c480994ff[0] as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
		if ($HY_5380a89366e616d954 < $HY_fc12e3cf6043961fb3) {
			$HY_b145448aa76bc95b5e .= $HY_39f33d52374bdc42f7;
		}
		else {
			break;
		}
	}

	if ($HY_fc12e3cf6043961fb3 < count($HY_c472804a8c480994ff[0])) {
		$HY_b145448aa76bc95b5e .= "…";
	}

	return $HY_b145448aa76bc95b5e;
}

function HY_cfd7029aa774332944($HY_aeaab34660b268d946 = NULL)
{
	preg_match_all("/./us", $HY_aeaab34660b268d946, $HY_c472804a8c480994ff);
	return count($HY_c472804a8c480994ff[0]);
}

function HY_7c52668390800e672a($HY_2b487dc4fea8647f54, $HY_83e382baa52335f4dd = "GBK", $HY_c2c4ad52063115ca65 = "utf-8")
{
	$HY_c8b8e238ec7f203fd4 = "";

	if (function_exists("mb_convert_encoding")) {
		$HY_6611f0afbe845c0839 = mb_convert_encoding($HY_2b487dc4fea8647f54, $HY_c2c4ad52063115ca65, $HY_83e382baa52335f4dd);
	}
	else if (function_exists("iconv")) {
		$HY_6611f0afbe845c0839 = iconv($HY_83e382baa52335f4dd, $HY_c2c4ad52063115ca65, $HY_2b487dc4fea8647f54);
	}
	else {
		exit("sorry, you have no libs support for charset change.");
	}

	return $HY_6611f0afbe845c0839;
}

function HY_bd307d155f057feb55($HY_16cf3deb26b9fa0ba0, $HY_1c945b97f4ccb313c5 = 0, $HY_8f917d0d7353bbd382 = "")
{
	global $HY_a9bd054236ed9e584c;

	if (empty($HY_a9bd054236ed9e584c)) {
		ob_clean();
	}

	$HY_9cb535737e826bc034 = hy_ba8120f86a7df1aecc("isajax", "pg", "int", 0);

	if ($HY_9cb535737e826bc034 == 0) {
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html>\r\n<head>\r\n<title>MsgBox</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"";
		echo INSTALLPATH;
		echo "kss_inc/style/admin_style.css\">\r\n</head>\r\n<body>\r\n<div id=\"errbox\">&nbsp;";
		echo $HY_16cf3deb26b9fa0ba0 . "<br><br>";

		if ($HY_1c945b97f4ccb313c5 == 1) {
			echo "<p align=center><input type='button' class='submitbtn' value='返回' onclick='history.go(-1)'></p>";
		}

		echo "</div>\r\n</body>\r\n</html>";
		exit();
	}
	else {
		exit($HY_16cf3deb26b9fa0ba0);
	}
}

function HY_6daeecad978867d96f($HY_270ef5e043898196e4, $HY_25ddfb4025ba75169c, $HY_e66357655126bb6964 = 25)
{
	if (!hy_8ea23c5626d65adda5("curl_init") || !hy_8ea23c5626d65adda5("curl_exec")) {
		return "curlerr:php not curl";
	}

	if (!hy_8ea23c5626d65adda5("curl_exec")) {
		return "curlerr:curl_exec disable";
	}

	$HY_7ecb634edd356ee247 = curl_init();
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_URL, $HY_270ef5e043898196e4);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_RETURNTRANSFER, 1);

	if (!empty($HY_25ddfb4025ba75169c)) {
		$HY_6c370550d94caffe93 = "";

		foreach ($HY_25ddfb4025ba75169c as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
			$HY_6c370550d94caffe93 .= $HY_5380a89366e616d954 . "=" . $HY_39f33d52374bdc42f7 . "&";
		}

		$HY_6c370550d94caffe93 .= "nowtime=" . time();
		curl_setopt($HY_7ecb634edd356ee247, CURLOPT_POST, 1);
		curl_setopt($HY_7ecb634edd356ee247, CURLOPT_POSTFIELDS, $HY_6c370550d94caffe93);
	}

	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_TIMEOUT, $HY_e66357655126bb6964);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_HTTPHEADER, array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache"));
	$HY_73d03700723b9213e5 = curl_exec($HY_7ecb634edd356ee247);

	if (curl_errno($HY_7ecb634edd356ee247)) {
		$HY_b421d06d20579ca435 = curl_error($HY_7ecb634edd356ee247);
		curl_close($HY_7ecb634edd356ee247);
		if (($HY_e66357655126bb6964 == 1) && (stripos($HY_b421d06d20579ca435, "peration timed out after") != false)) {
			return "sendok";
		}

		$HY_73d03700723b9213e5 = "curlerr:" . $HY_b421d06d20579ca435;
	}
	else {
		curl_close($HY_7ecb634edd356ee247);
	}

	return $HY_73d03700723b9213e5;
}

function HY_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_dfb6820a73cd9a022f, $HY_2f8bed6ff1de4c24da, $HY_af5309e3f1927d0ca7)
{
	$HY_44d9f262676630e68f = KSSLOGDIR . "query_errlog.php";
	if (!is_file($HY_44d9f262676630e68f) || ((1024 * 256) < filesize($HY_44d9f262676630e68f))) {
		$HY_e6b77c37c3104b66e7 = "?";
		$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
		@file_put_contents($HY_44d9f262676630e68f, $HY_975f0ca9eb0aaa39ee . $HY_2b051c35c3cffb9826 . "\r\n file:" . basename($HY_2f8bed6ff1de4c24da) . "\tline:" . $HY_af5309e3f1927d0ca7 . "\terr:" . $HY_dfb6820a73cd9a022f . "\r\n\r\n");
	}
	else {
		@file_put_contents($HY_44d9f262676630e68f, $HY_2b051c35c3cffb9826 . "\r\n file:" . basename($HY_2f8bed6ff1de4c24da) . "\tline:" . $HY_af5309e3f1927d0ca7 . "\terr:" . $HY_dfb6820a73cd9a022f . "\r\n\r\n", FILE_APPEND);
	}
}

function HY_5f97ccf32abb39ba36($HY_0ca0d65da3ffb1057a)
{
	return false;
}

function HY_e1afa18ccf2dcabac5($HY_0ca0d65da3ffb1057a)
{
	return false;
}

function HY_d41a9604784030b5c9($HY_0ca0d65da3ffb1057a)
{
	return false;
}

function HY_3ee61845fb7fab0ab6($HY_0ca0d65da3ffb1057a, $HY_24368066e408a0bb04)
{
	return false;
}

function HY_5543837bb2ef34cadf($HY_0ca0d65da3ffb1057a = 0, $HY_24368066e408a0bb04 = 0)
{
	return false;
}

function HY_32c71b9c25e960e3d1($HY_0ca0d65da3ffb1057a, $HY_24368066e408a0bb04, $HY_25a510c52d1f513228)
{
	return false;
}

require (KSSINCDIR . "ext_ip.php");

?>
