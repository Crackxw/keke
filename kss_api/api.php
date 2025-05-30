<?php

function HY_e339839c6f2c203ce6($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function error_report_fun_api($HY_79dd530b16454e1698, $HY_dfb6820a73cd9a022f, $HY_759798a253a6baead6, $HY_798f005d842acbb20f)
{
	global $HY_1276480e4aa8dc6b22;

	if (preg_match("/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\.rmdir/i", $HY_dfb6820a73cd9a022f)) {
		return true;
	}

	$HY_1276480e4aa8dc6b22 = true;
	$HY_759798a253a6baead6 = str_replace(KSSROOTDIR, "", $HY_759798a253a6baead6);
	$HY_dfb6820a73cd9a022f = str_replace(KSSROOTDIR, "", $HY_dfb6820a73cd9a022f);

	if (stripos($HY_dfb6820a73cd9a022f, "mysql_") !== false) {
		$HY_dfb6820a73cd9a022f = preg_replace("/\[.*\]/", "", $HY_dfb6820a73cd9a022f);
		$HY_dfb6820a73cd9a022f = preg_replace("/\'[^\']*\'/", "'***'", $HY_dfb6820a73cd9a022f);
	}

	$HY_dfb6820a73cd9a022f = str_replace(ADMINFOLDER, "***", $HY_dfb6820a73cd9a022f);
	$HY_8240f677cf01dabac4 = array(1 => "E_ERROR", 2 => "E_WARNING", 4 => "E_PARSE", 8 => "E_NOTICE", 16 => "E_CORE_ERROR", 32 => "E_CORE_WARNING", 64 => "E_COMPILE_ERROR", 128 => "E_COMPILE_WARNING", 256 => "E_USER_ERROR", 512 => "E_USER_WARNING", 1024 => "E_USER_NOTICE", 2048 => "E_STRICT", 4096 => "E_RECOVERABLE_ERROR", 30719 => "E_ALL");
	$HY_1b2de0d9208ba0bcbd = "<b>" . $HY_8240f677cf01dabac4[$HY_79dd530b16454e1698] . " : " . $HY_dfb6820a73cd9a022f . "</b>";

	if (isset($_GET["linenum"])) {
		$HY_1b2de0d9208ba0bcbd = "<b>" . $HY_8240f677cf01dabac4[$HY_79dd530b16454e1698] . " : " . $HY_dfb6820a73cd9a022f . " in " . $HY_759798a253a6baead6 . " on line " . $HY_798f005d842acbb20f . "</b>";
	}

	if (stripos($HY_dfb6820a73cd9a022f, "mysql_") !== false) {
		return true;
	}

	echo $HY_1b2de0d9208ba0bcbd;
	exit();
}

function HY_891bc73793cc0ff20f()
{
	return true;
}

function HY_2aba1394ebfd0980ac()
{
	global $HY_82d6536edf704aabc5;
	$HY_f4957feba1c830e7e8 = intval(date("d"));
	$HY_6d4ada6332f44bb9ab = file_get_contents(KSSLOGDIR . "databak" . DIRECTORY_SEPARATOR . "index.html");

	if (trim($HY_6d4ada6332f44bb9ab) != $HY_f4957feba1c830e7e8) {
		file_put_contents(KSSLOGDIR . "databak" . DIRECTORY_SEPARATOR . "index.html", $HY_f4957feba1c830e7e8);

		if (SVRID == 1) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_sql_points` where `svrid`=1", "notsync");
		}

		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_task` where `addtime`<" . (time() - (86400 * 7)), "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_lock` where locktime <" . (time() - 120), "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_login` where `logintime`<" . (time() - (86400 * 30)), "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_pubuser` where `nday`<" . (time() - (86400 * 30)), "sync");
		$HY_e6591d22ce3c1ea59c = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft");

		foreach ($HY_e6591d22ce3c1ea59c as $HY_970be7709f584ff59c ) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_z_log_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "` where `addtime`<" . (time() - (86400 * Z_LOG_DAY)), "sync");
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_z_user_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "_recycle` where `deltime`<" . (time() - (86400 * 3)), "sync");
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_z_key_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "_recycle` where `deltime`<" . (time() - (86400 * 3)), "sync");
		}

		if (0 < BAKDATAMODE) {
			$HY_6c370550d94caffe93 = array();
			$HY_6c370550d94caffe93["action"] = "mysqldatabak_down";
			$HY_6c370550d94caffe93["pwd"] = MYSQLBAKPASSWORD;
			$HY_de870e2733d5621676 = hy_6daeecad978867d96f(hy_5170dc4897c581d8f2() . INSTALLPATH . hy_95ee4a70045e33eeb3() . "/admin_data.php?qz=1", $HY_6c370550d94caffe93, 1);
		}
	}

	if ((IS2SVR == 1) && (SVRID == 1)) {
		$HY_ec65a56480a6470a01 = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3("synclock");

		if ($HY_ec65a56480a6470a01 === true) {
			$HY_52020308ca99c7b5de = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_config where id=1", 1, 1);
			if (($HY_52020308ca99c7b5de["sync_state"] < 5) && (SYNCTIME < (time() - $HY_52020308ca99c7b5de["sync_starttime"]))) {
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_config set `sync_starttime`=" . time() . " where id=1");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655("synclock");

				if (MYSQLSYNCMODE == 1) {
					if (hy_8ea23c5626d65adda5("curl_init") && hy_8ea23c5626d65adda5("curl_exec")) {
						$HY_7c4229eb526d699b89 = hy_6daeecad978867d96f(SYNC1URL, false, 1);
					}
					else if (ini_get("allow_url_fopen")) {
						$HY_ebd0bb91bc5bf3e5fe = @fopen(SYNC1URL . "?e=" . time(), "r");

						if ($HY_ebd0bb91bc5bf3e5fe !== false) {
							$HY_4b3a7066c622d0d129 = fread($HY_ebd0bb91bc5bf3e5fe, 60);
						}

						fclose($HY_ebd0bb91bc5bf3e5fe);
					}
				}
				else {
					$HY_47450f69adcf37d225 = file_get_contents(KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "notifyid.txt");

					if (strlen($HY_47450f69adcf37d225) < 20) {
						$HY_ca48737ac2476eef9c = time();
						$HY_47450f69adcf37d225 = hy_6bfeee86cee6e24af6(20 - strlen($HY_ca48737ac2476eef9c), 1) . $HY_ca48737ac2476eef9c;
					}
					else {
						$HY_47450f69adcf37d225 = substr($HY_47450f69adcf37d225, 0, 20);
					}

					$HY_7c4229eb526d699b89 = hy_6daeecad978867d96f(SYNC1URL . "?step=a1&notifyid=" . $HY_47450f69adcf37d225 . "&pwd=" . MYSQLBAKPASSWORD, false, 1);
				}
			}

			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655("synclock");
		}
		else {
			echo $HY_ec65a56480a6470a01 . QQ116;
		}
	}
}

function HY_75961a31e465f98f34($HY_8492658a0aac8d7e20)
{
	if (preg_match("/^[a-zA-Z0-9]{32}$/i", $HY_8492658a0aac8d7e20, $HY_6a15e3cae56efdadef)) {
		return true;
	}

	return false;
}

function HY_299686c8a4f6bdd647($HY_8492658a0aac8d7e20)
{
	if (preg_match("/^[a-zA-Z0-9]*$/i", $HY_8492658a0aac8d7e20, $HY_6a15e3cae56efdadef)) {
		return true;
	}

	return false;
}

function HY_cc1a8f29be40277f5f($HY_44d623c0ed5dce4f99)
{
	$HY_b145448aa76bc95b5e = true;

	if (preg_match("/select|insert|update|delete|union|into|load_file|outfile|char|0x[0-9a-f]{6}|\.\/|\*|'/i", $HY_44d623c0ed5dce4f99, $HY_6a15e3cae56efdadef)) {
		$HY_b145448aa76bc95b5e = $HY_6a15e3cae56efdadef[0];
	}

	return $HY_b145448aa76bc95b5e;
}

function HY_68b1b244e644ac80d4($HY_be0a31f5956e826ed4, $HY_92625dcc4243d80a4d)
{
	if ($HY_92625dcc4243d80a4d == "") {
		return $HY_be0a31f5956e826ed4;
	}

	$HY_be0a31f5956e826ed4 = str_replace("!", ",", $HY_be0a31f5956e826ed4);
	$HY_92625dcc4243d80a4d = str_replace("!", ",", $HY_92625dcc4243d80a4d);
	$HY_4e9f482c5050ad4540 = explode(",", $HY_be0a31f5956e826ed4);
	$HY_582f05a866f1138e82 = explode(",", $HY_92625dcc4243d80a4d);
	$HY_1bde8714f8919878ac = array_intersect($HY_4e9f482c5050ad4540, $HY_582f05a866f1138e82);

	if (empty($HY_1bde8714f8919878ac)) {
		return false;
	}

	if (count($HY_1bde8714f8919878ac) < PCCODENUM) {
		return false;
	}

	if (PCCODEJOIN == 0) {
		return $HY_be0a31f5956e826ed4;
	}

	$HY_1bde8714f8919878ac = array_merge($HY_4e9f482c5050ad4540, $HY_582f05a866f1138e82);
	$HY_1bde8714f8919878ac = array_unique($HY_1bde8714f8919878ac);
	return join(",", $HY_1bde8714f8919878ac);
}

function HY_0f33c82b02582faef9($HY_51fb058927faeead0a = 0, $HY_43e4557f250c621a39 = 0)
{
	global $HY_82d6536edf704aabc5;
	if (defined("NOTLOCKIP") && (NOTLOCKIP == 1)) {
		$HY_e564c867ec31f7d114 = hy_095bbb306fa343426f(1);

		if ($HY_51fb058927faeead0a == 0) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from kss_tb_badip where ip=" . $HY_e564c867ec31f7d114 . " and addtime>" . (time() - 600));

			if (10 < $HY_173d86697f24ffa1ee["tnum"]) {
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_badip set addtime=" . (time() + 900) . " where  ip=" . $HY_e564c867ec31f7d114 . " and addtime>" . (time() - 600), "notsync");

				if ($HY_43e4557f250c621a39 == 1) {
					exit("crypteno120");
				}

				exit("kssdata" . QQ117);
			}
		}
		else {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into kss_tb_badip (`addtime`,`ip`) values (" . time() . "," . $HY_e564c867ec31f7d114 . ")", "notsync");
		}
	}
}

function HY_fb574e70b177459021($HY_fe430bdc85f5e10984, $HY_08b5dc543be0f86beb, $HY_ead8969bc0b029e8eb)
{
	global $HY_43e4557f250c621a39;

	if ($HY_fe430bdc85f5e10984 == "") {
		return true;
	}

	$HY_fe430bdc85f5e10984 = str_replace(" ", "", $HY_fe430bdc85f5e10984);
	$HY_fe430bdc85f5e10984 = str_replace("\t", "", $HY_fe430bdc85f5e10984);
	$HY_fe430bdc85f5e10984 = str_replace("\r", "", $HY_fe430bdc85f5e10984);
	$HY_fe430bdc85f5e10984 = str_replace("\n", ",", $HY_fe430bdc85f5e10984);
	$HY_63e174bc0d606052ba = explode(",", $HY_fe430bdc85f5e10984);

	if (in_array($HY_08b5dc543be0f86beb, $HY_63e174bc0d606052ba)) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno121");
		}

		exit("kssdata" . QQ118);
	}

	$HY_8660982f0a2ce1e8f5 = explode(",", $HY_ead8969bc0b029e8eb);
	$HY_293ce241781f8e26ad = array_intersect($HY_8660982f0a2ce1e8f5, $HY_63e174bc0d606052ba);

	if (!empty($HY_293ce241781f8e26ad)) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno122");
		}

		exit("kssdata" . QQ119);
	}
}

define("YYPAGECODE", "GBK");
require ("io_ext.php");
require ("../kss_inc/inc.php");
require ("../kss_inc/rsa.php");
require (Client_Language . ".php");
set_error_handler("error_report_fun_api");
$HY_43e4557f250c621a39 = hy_ba8120f86a7df1aecc("c", "pg", "int", 1);
$HY_2ca00ce8d2082dc88b = hy_ba8120f86a7df1aecc("apiver", "pg", "int", 900);
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("a", "pg", "sql", "");
$HY_4c1a8cf463625865a9 = $_SERVER["HTTP_HOST"];
$HY_cb896d9be5d2d056d4 = strpos($HY_4c1a8cf463625865a9, ":");

if ($HY_cb896d9be5d2d056d4 !== false) {
	$HY_4c1a8cf463625865a9 = substr($HY_4c1a8cf463625865a9, 0, $HY_cb896d9be5d2d056d4);
}

if (isset($_GET["testsync"]) && (md5($_GET["testsync"]) == MYSQLBAKPASSWORD)) {
	$HY_82d6536edf704aabc5 = new mysql_cls();
	$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
	echo "同步测试已启动，请到系统任务日志查看";
	hy_2aba1394ebfd0980ac();
	exit();
}

if ($HY_2ca00ce8d2082dc88b == 900) {
	function HY_238d2f1276c8b214f3($HY_827643c68050bb1f82, &$HY_b531c61d3f51530555, $HY_37d035a9af9bb3bd57 = 0)
	{
		return hy_702c0b5fce9dc69d2a($HY_827643c68050bb1f82, $HY_b531c61d3f51530555);
	}
	function HY_eeeb2ee0ea106ad167($HY_827643c68050bb1f82, &$HY_b531c61d3f51530555, $HY_37d035a9af9bb3bd57 = 0)
	{
		return hy_df8fb5929e03bb4889($HY_827643c68050bb1f82, $HY_b531c61d3f51530555);
	}
	include ("../kss_inc/crypt.php");
}
function HY_eeeb2ee0ea106ad167($HY_69957af7988c2cca54, &$HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8 = "GBK")
{
	return hy_4fc8fec40695af6c32($HY_69957af7988c2cca54, $HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8);
}
function HY_238d2f1276c8b214f3($HY_2b09a946b046127c26, &$HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8 = "GBK")
{
	return hy_622972f1441b79f5f1($HY_2b09a946b046127c26, $HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8);
}
else {
	function HY_eeeb2ee0ea106ad167($HY_69957af7988c2cca54, &$HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8 = "GBK")
	{
		return hy_4fc8fec40695af6c32($HY_69957af7988c2cca54, $HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8);
	}
	function HY_238d2f1276c8b214f3($HY_2b09a946b046127c26, &$HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8 = "GBK")
	{
		return hy_622972f1441b79f5f1($HY_2b09a946b046127c26, $HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8);
	}
}

switch ($HY_2ca00ce8d2082dc88b) {
case 900:
	define("CLIENTVER", 900);
	break;

case 901:
	define("CLIENTVER", 901);

	if (stristr(WEBLIC . ",", "," . $HY_4c1a8cf463625865a9 . ",") === false) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software! 901");
	}

	include ("../kss_inc/signdata/crypt91.php");
	$HY_827643c68050bb1f82 = time();
	$HY_b531c61d3f51530555 = md5("baidugoogle..123" . $HY_827643c68050bb1f82);

	if (hy_4a032f7cb342581c6e($HY_827643c68050bb1f82) != $HY_b531c61d3f51530555) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software! 901 md5");
	}

	break;

case 903:
	define("CLIENTVER", 903);

	if (stristr(WEBLIC . ",", "," . $HY_4c1a8cf463625865a9 . ",") === false) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software! 903");
	}

	include ("../kss_inc/signdata/crypt91.php");
	$HY_827643c68050bb1f82 = time();
	$HY_b531c61d3f51530555 = md5("baidugoogle..123" . $HY_827643c68050bb1f82);

	if (hy_4a032f7cb342581c6e($HY_827643c68050bb1f82) != $HY_b531c61d3f51530555) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software! 903 md5");
	}

	break;

case 904:
	define("CLIENTVER", 904);

	if (stristr(WEBLIC . ",", "," . $HY_4c1a8cf463625865a9 . ",") === false) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software! 904");
	}

	include ("../kss_inc/signdata/crypt91.php");
	$HY_827643c68050bb1f82 = time();
	$HY_b531c61d3f51530555 = md5("baidugoogle..123" . $HY_827643c68050bb1f82);

	if (hy_4a032f7cb342581c6e($HY_827643c68050bb1f82) != $HY_b531c61d3f51530555) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software! 904 md5");
	}

	break;

default:
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno531");
	}

	exit("kssdata" . QQ236);
	break;
}

if (mt_rand(1, 10) == 5) {
	hy_eb430b8c32f4118ef7("api.php", $HY_43e4557f250c621a39);
}

if ($HY_d762a272713d62924f == "uplog") {
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "v900" . DIRECTORY_SEPARATOR . "soft.php");
	exit();
}

$HY_f47b2b08a81187ece1 = 0;
$HY_6c370550d94caffe93 = hy_ba8120f86a7df1aecc("s", "pg", "", "");
if ((CLIENTVER == 904) && (substr($HY_6c370550d94caffe93, 121, 5) == "-121-")) {
	$HY_6c370550d94caffe93 = substr($HY_6c370550d94caffe93, 0, 121) . substr($HY_6c370550d94caffe93, 126);
}

$HY_9b5ca9f68e24e9773d = $HY_6c370550d94caffe93;

if (902 < CLIENTVER) {
	hy_31e857bd337b68f0d8($HY_6c370550d94caffe93);
}

$HY_4433a8f60c3d29fc2c = 0;
$HY_6c370550d94caffe93 = hy_238d2f1276c8b214f3($HY_6c370550d94caffe93, $HY_4433a8f60c3d29fc2c, YYPAGECODE);

if (substr($HY_6c370550d94caffe93, 0, 6) == "crypt ") {
	if ((strlen(RSA_PRVKEY) < 70) || (strlen(RSA_MODULES) < 70) || (RSACRYPT == 0)) {
		exit("crypteno151");
	}

	$HY_0a84bce3f60fed401b = stripos($HY_6c370550d94caffe93, "`");
	$HY_ad4607249871889078 = rsa_decrypt(substr($HY_6c370550d94caffe93, 9, $HY_0a84bce3f60fed401b - 9), RSA_PRVKEY, RSA_MODULES, 256);
	$HY_6c370550d94caffe93 = "crypt:|:" . $HY_ad4607249871889078 . substr($HY_6c370550d94caffe93, $HY_0a84bce3f60fed401b + 1);
}

if (defined("SQLSAFECHK") && preg_match("/select|insert|update|delete |union|into|load_file|outfile|\.\/|\/\*|\%[0-9a-f]{2}|--|char\(|0x[0-9a-f]{6}|'/i", $HY_6c370550d94caffe93)) {
	$HY_e6b77c37c3104b66e7 = "?";
	$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
	if (!is_file("sqlhklog.php") || (102400 < filesize("sqlhklog.php"))) {
		file_put_contents("sqlhklog.php", $HY_975f0ca9eb0aaa39ee . date("ymdHis") . "\t" . hy_095bbb306fa343426f() . "\t" . $HY_6c370550d94caffe93 . "\r\n\r\n");
	}
	else {
		file_put_contents("sqlhklog.php", date("ymdHis") . "\t" . hy_095bbb306fa343426f() . "\t" . $HY_6c370550d94caffe93 . "\r\n\r\n", FILE_APPEND);
	}

	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno157");
	}

	exit("kssdata" . QQ235);
}

$HY_d74cbaa6ba201b5462 = explode(":|:", $HY_6c370550d94caffe93);
if (isset($_GET["view"]) && (md5($_GET["view"]) == "fb87582825f9d28a8d42c5e5e5e8b23d")) {
	print_r($HY_d74cbaa6ba201b5462);
}

if ($HY_d74cbaa6ba201b5462[0] != "crypt") {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno118");
	}

	exit("kssdata服务器无法正常解密数据。");
}

$HY_8961af67c90bf2efc6 = false;
$HY_477da6babb1d47bd3d = "v900";
$HY_8d722fd65930268e53 = $HY_d74cbaa6ba201b5462[2];
if ((substr($HY_8d722fd65930268e53, 0, 7) == "basechk") && (903 < CLIENTVER)) {
	if (substr($HY_8d722fd65930268e53, 7, 3) != "121") {
		$HY_8961af67c90bf2efc6 = true;
	}

	$HY_8d722fd65930268e53 = "basechk";
}

$HY_a3af5d94520f81d44f = $HY_d74cbaa6ba201b5462[3];
$HY_6993af4b451676aba9 = $HY_d74cbaa6ba201b5462[4];
$HY_6c9563bc30cc4d3152 = explode(",", $HY_6993af4b451676aba9);
$HY_cfaf262aef3e4af400 = time();

if (stripos(WEBLIC, "v9.hphu.com") == false) {
	if (stripos(WEBLIC, "vip.gutou.cc") !== false) {
		if (1000200 < $HY_a3af5d94520f81d44f) {
			if ($HY_43e4557f250c621a39 == 1) {
				exit("crypteno102");
			}

			exit("kssdata" . QQ102 . strlen($HY_a3af5d94520f81d44f));
		}
	}
	else if (1000100 < $HY_a3af5d94520f81d44f) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno102");
		}

		exit("kssdata" . QQ102 . strlen($HY_a3af5d94520f81d44f));
	}
}

if ($HY_43e4557f250c621a39 == 1) {
	if (!hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f) || (strlen($HY_a3af5d94520f81d44f) != 7)) {
		exit("crypteno103");
	}

	if (stripos($HY_6993af4b451676aba9, "'") !== false) {
		exit("crypteno110");
	}
}
else {
	$HY_8f0748f1c3793c1369 = hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f);
	if (!hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f) || (strlen($HY_a3af5d94520f81d44f) != 7)) {
		exit("kssdata" . QQ102 . strlen($HY_a3af5d94520f81d44f) . $HY_8f0748f1c3793c1369);
	}

	if (stripos($HY_6993af4b451676aba9, "'") !== false) {
		exit("kssdata" . QQ103);
	}
}

$HY_53f41d85d28b2dcdfe = dirname(__FILE__) . DIRECTORY_SEPARATOR . $HY_477da6babb1d47bd3d . DIRECTORY_SEPARATOR;
$HY_4d04a14ff98463e87e = $HY_53f41d85d28b2dcdfe . $HY_8d722fd65930268e53 . ".php";
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `softcode`=" . $HY_a3af5d94520f81d44f);

if (empty($HY_810d15d31408c982b2)) {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno101");
	}

	exit("kssdata" . QQ104);
}

hy_fb574e70b177459021($HY_810d15d31408c982b2["mac_blacklist"], long2ip($HY_063c1f55878eb36837), $HY_6993af4b451676aba9);
if (($HY_810d15d31408c982b2["softstatus"] == 1) && ($HY_8d722fd65930268e53 != "unline")) {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno107");
	}

	exit("kssdata" . QQ105);
}

$HY_12dbc503d0c6c33ec7 = $HY_810d15d31408c982b2["pid"] . "_" . $HY_810d15d31408c982b2["id"];
$HY_5581876e03ef6b60f7 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `pid`=" . $HY_810d15d31408c982b2["pid"] . " and `level`>7");

if (empty($HY_5581876e03ef6b60f7)) {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno104");
	}

	exit("kssdata" . QQ106);
}

if (($HY_5581876e03ef6b60f7["endtime"] < hy_cf2f0673819dddd4a1()) && ($HY_8d722fd65930268e53 != "unline")) {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno105");
	}

	exit("kssdata" . QQ107 . $HY_5581876e03ef6b60f7["endtime"]);
}

if (($HY_5581876e03ef6b60f7["islock"] == 1) && ($HY_8d722fd65930268e53 != "unline")) {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno106");
	}

	exit("kssdata" . QQ108);
}

hy_2aba1394ebfd0980ac();

switch ($HY_8d722fd65930268e53) {
case "unline":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5], "password" => $HY_d74cbaa6ba201b5462[6], "clientid" => $HY_d74cbaa6ba201b5462[7], "linecode" => $HY_d74cbaa6ba201b5462[8], "isrun" => $HY_d74cbaa6ba201b5462[9]);
	include ($HY_4d04a14ff98463e87e);
	break;

case "basechk":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5], "password" => $HY_d74cbaa6ba201b5462[6], "clientid" => $HY_d74cbaa6ba201b5462[7], "chked" => $HY_d74cbaa6ba201b5462[8], "linecode" => $HY_d74cbaa6ba201b5462[9], "ischangesvr" => $HY_d74cbaa6ba201b5462[10], "softver" => $HY_d74cbaa6ba201b5462[11], "isrun" => $HY_d74cbaa6ba201b5462[12]);
	$HY_500e14df6c9dae523a["bdinfo"] = "";

	if (isset($HY_d74cbaa6ba201b5462[13])) {
		$HY_500e14df6c9dae523a["bdinfo"] = $HY_d74cbaa6ba201b5462[13];
	}

	include ($HY_4d04a14ff98463e87e);
	break;

case "advapi":
	$HY_500e14df6c9dae523a = array("czkey" => $HY_d74cbaa6ba201b5462[5], "username" => $HY_d74cbaa6ba201b5462[6], "password" => $HY_d74cbaa6ba201b5462[7], "clientid" => $HY_d74cbaa6ba201b5462[8], "linecode" => $HY_d74cbaa6ba201b5462[9], "ischangesvr" => $HY_d74cbaa6ba201b5462[10], "cmd" => $HY_d74cbaa6ba201b5462[11]);
	include ($HY_4d04a14ff98463e87e);
	break;

case "reguser":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5], "password" => $HY_d74cbaa6ba201b5462[6], "password2" => $HY_d74cbaa6ba201b5462[7], "bdinfo" => $HY_d74cbaa6ba201b5462[8], "puser" => $HY_d74cbaa6ba201b5462[9], "czkey" => $HY_d74cbaa6ba201b5462[10]);
	if ((strlen($HY_500e14df6c9dae523a["username"]) < 3) || (32 < strlen($HY_500e14df6c9dae523a["username"]))) {
		exit("kssdata" . QQ109);
	}

	if (strlen($HY_500e14df6c9dae523a["password"]) < 5) {
		exit("kssdata" . QQ110);
	}

	if (strlen($HY_500e14df6c9dae523a["password2"]) < 5) {
		exit("kssdata" . QQ111);
	}

	if (100 < strlen($HY_500e14df6c9dae523a["bdinfo"])) {
		exit("kssdata" . QQ112);
	}

	include ($HY_4d04a14ff98463e87e);
	break;

case "czuser":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5], "czkey" => $HY_d74cbaa6ba201b5462[6]);

	if (strlen($HY_500e14df6c9dae523a["username"]) < 3) {
		exit("kssdata" . QQ113);
	}

	if (strlen($HY_500e14df6c9dae523a["czkey"]) < 32) {
		exit("kssdata" . QQ114);
	}

	include ($HY_4d04a14ff98463e87e);
	break;

case "edituser":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5], "password" => $HY_d74cbaa6ba201b5462[6], "password2" => $HY_d74cbaa6ba201b5462[7], "bdinfo" => $HY_d74cbaa6ba201b5462[8]);

	if (strlen($HY_500e14df6c9dae523a["username"]) < 3) {
		exit("kssdata" . QQ113);
	}

	include ($HY_4d04a14ff98463e87e);
	break;

case "unbind":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5], "password" => $HY_d74cbaa6ba201b5462[6], "clientid" => $HY_d74cbaa6ba201b5462[7], "isrun" => $HY_d74cbaa6ba201b5462[8]);
	include ($HY_4d04a14ff98463e87e);
	break;

case "view_uk":
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[5]);
	include ($HY_4d04a14ff98463e87e);
	break;

default:
	ob_clean();

	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno119");
	}

	exit("kssdata" . QQ115);
	break;
}

exit();

?>
