<?php

function HY_b666bd20dc699534f4($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("inc.php");
if (isset($_POST["remark1"]) && ($_POST["remark1"] == 0)) {
	$HY_c7949038ea09b48e97 = 1;
	include ("payapi_notify2.php");
	exit();
}
function HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_b8daf488e31ad490f7, $HY_1d5e41aacc40ced80d = 1)
{
	if ((defined("SAE_MYSQL_USER") == true) || (DEBUGPAYWG == 0)) {
		return false;
	}

	$HY_44d9f262676630e68f = KSSLOGDIR . "agentczdebug1_log.php";

	if ($HY_1d5e41aacc40ced80d == 1) {
		@file_put_contents($HY_44d9f262676630e68f, $HY_b8daf488e31ad490f7 . "\r\n", FILE_APPEND);
	}
	else {
		if (!is_file($HY_44d9f262676630e68f) || ((1024 * 256) < filesize($HY_44d9f262676630e68f))) {
			$HY_e6b77c37c3104b66e7 = "?";
			$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
			@file_put_contents($HY_44d9f262676630e68f, $HY_975f0ca9eb0aaa39ee . "\r\n\r\n\r\n时间:" . date("Y-m-d H:i:s") . "\r\n订单号:" . $HY_7e3958ca51847ad2e2 . "\r\n状态:" . $HY_b8daf488e31ad490f7 . "\r\n");
		}
		else {
			@file_put_contents($HY_44d9f262676630e68f, "\r\n\r\n\r\n时间:" . date("Y-m-d H:i:s") . "\r\n订单号:" . $HY_7e3958ca51847ad2e2 . "\r\n状态:" . $HY_b8daf488e31ad490f7 . "\r\n", FILE_APPEND);
		}
	}
}
else {
	function HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_b8daf488e31ad490f7, $HY_1d5e41aacc40ced80d = 1)
	{
		if ((defined("SAE_MYSQL_USER") == true) || (DEBUGPAYWG == 0)) {
			return false;
		}

		$HY_44d9f262676630e68f = KSSLOGDIR . "agentczdebug1_log.php";

		if ($HY_1d5e41aacc40ced80d == 1) {
			@file_put_contents($HY_44d9f262676630e68f, $HY_b8daf488e31ad490f7 . "\r\n", FILE_APPEND);
		}
		else {
			if (!is_file($HY_44d9f262676630e68f) || ((1024 * 256) < filesize($HY_44d9f262676630e68f))) {
				$HY_e6b77c37c3104b66e7 = "?";
				$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
				@file_put_contents($HY_44d9f262676630e68f, $HY_975f0ca9eb0aaa39ee . "\r\n\r\n\r\n时间:" . date("Y-m-d H:i:s") . "\r\n订单号:" . $HY_7e3958ca51847ad2e2 . "\r\n状态:" . $HY_b8daf488e31ad490f7 . "\r\n");
			}
			else {
				@file_put_contents($HY_44d9f262676630e68f, "\r\n\r\n\r\n时间:" . date("Y-m-d H:i:s") . "\r\n订单号:" . $HY_7e3958ca51847ad2e2 . "\r\n状态:" . $HY_b8daf488e31ad490f7 . "\r\n", FILE_APPEND);
			}
		}
	}
}

$HY_fa653aeba99cbb6873 = array("ali" => "支付宝", "ten" => "财付通", "chinabank" => "网银在线", "e138" => "易付通", "jqr" => "支付宝机器人");
$HY_e063c928cc3706d2d2 = array("ali" => "success", "ten" => "success", "chinabank" => "ok", "e138" => "success", "jqr" => "success");
$HY_4ff84ec7e6fb4cb606 = array("ali" => "fail", "ten" => "fail", "chinabank" => "error", "e138" => "fail", "jqr" => "fail");
$HY_85e2d17c08df067076 = array("WAIT_BUYER_PAY", "WAIT_SELLER_SEND_GOODS", "WAIT_BUYER_CONFIRM_GOODS", "TRADE_FINISHED", "TRADE_SUCCESS");
$HY_a694047bf97acd7f10 = "ali";

if (isset($_GET["alipayjqr"])) {
	$HY_a694047bf97acd7f10 = "jqr";
}

if (isset($_GET["transaction_id"])) {
	$HY_a694047bf97acd7f10 = "ten";
}

if (isset($_POST["v_oid"])) {
	$HY_a694047bf97acd7f10 = "chinabank";
}

if (isset($_GET["AttachString"]) && ($_GET["AttachString"] == "e138")) {
	$HY_a694047bf97acd7f10 = "e138";
}

if (!isset($_GET["alipayjqr"])) {
	include ($HY_a694047bf97acd7f10 . "pay_function.php");
}

if ($HY_a694047bf97acd7f10 == "ali") {
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("out_trade_no", "pg", "sql", "");
	$HY_daec5176b1ae69ec18 = hy_ba8120f86a7df1aecc("trade_no", "pg", "sql", "");
	$HY_243589d656d86939a8 = hy_ba8120f86a7df1aecc("total_fee", "pg", "sql", "");
	$HY_4713a5727c89602935 = hy_ba8120f86a7df1aecc("trade_status", "pg", "sql", "");
	$HY_cfd569afb440ba8195 = hy_ba8120f86a7df1aecc("buyer_email", "pg", "sql", "");
}
else if ($HY_a694047bf97acd7f10 == "jqr") {
	$HY_daec5176b1ae69ec18 = "";
	$HY_7e3958ca51847ad2e2 = trim($_GET["ordernum"]);
	$HY_726fbd802b19ed8ca6 = trim($_GET["rmb"]);
	$HY_243589d656d86939a8 = $HY_726fbd802b19ed8ca6;
	$HY_5c99d07e28375aea77 = trim($_GET["sign"]);
	$HY_4713a5727c89602935 = "TRADE_SUCCESS";
}
else if ($HY_a694047bf97acd7f10 == "ten") {
	$HY_f8a6a5b66efa030cb5 = hy_ba8120f86a7df1aecc("trade_mode", "gp", "int", 0);
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("out_trade_no", "gp", "sql", "");
	$HY_daec5176b1ae69ec18 = hy_ba8120f86a7df1aecc("transaction_id", "gp", "sql", "");
	$HY_243589d656d86939a8 = hy_ba8120f86a7df1aecc("total_fee", "gp", "sql", "");
	$HY_243589d656d86939a8 = $HY_243589d656d86939a8 / 100;
	$HY_4713a5727c89602935 = hy_ba8120f86a7df1aecc("trade_state", "gp", "sql", "");

	if ($HY_4713a5727c89602935 == "0") {
		$HY_4713a5727c89602935 = "TRADE_FINISHED";
	}
	else {
		$HY_4713a5727c89602935 = "WAIT_BUYER_PAY";
	}
}
else if ($HY_a694047bf97acd7f10 == "chinabank") {
	$HY_daec5176b1ae69ec18 = "";
	$HY_508ab70aaba0b9276f = trim($_POST["v_oid"]);
	$HY_7e3958ca51847ad2e2 = $HY_508ab70aaba0b9276f;
	$HY_cb1678d41b96ade4dd = trim($_POST["v_pstatus"]);
	$HY_726fbd802b19ed8ca6 = trim($_POST["v_amount"]);
	$HY_243589d656d86939a8 = $HY_726fbd802b19ed8ca6;
	$HY_f6e5a5ddb19d332df8 = trim($_POST["v_moneytype"]);
	$HY_bc36132f387c3ca1a3 = trim($_POST["remark1"]);
	$HY_5c99d07e28375aea77 = trim($_POST["v_md5str"]);

	if ($HY_cb1678d41b96ade4dd == "20") {
		$HY_4713a5727c89602935 = "TRADE_FINISHED";
	}
	else {
		$HY_4713a5727c89602935 = "WAIT_BUYER_PAY";
	}
}
else if ($HY_a694047bf97acd7f10 == "e138") {
	$HY_daec5176b1ae69ec18 = "";
	$HY_508ab70aaba0b9276f = trim($_GET["SerialNo"]);
	$HY_7e3958ca51847ad2e2 = $HY_508ab70aaba0b9276f;
	$HY_cb1678d41b96ade4dd = trim($_GET["Status"]);
	$HY_726fbd802b19ed8ca6 = trim($_GET["Money"]);
	$HY_243589d656d86939a8 = $HY_726fbd802b19ed8ca6;
	$HY_5c99d07e28375aea77 = trim($_GET["VerifyString"]);

	if ($HY_cb1678d41b96ade4dd == "2") {
		$HY_4713a5727c89602935 = "TRADE_FINISHED";
	}
	else {
		$HY_4713a5727c89602935 = "WAIT_BUYER_PAY";
	}
}
else {
	exit("errwg");
}

hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_4713a5727c89602935, 0);
$HY_2430422a75ffb8ee5f = "POSTDATA:";

foreach ($_POST as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
	$HY_2430422a75ffb8ee5f .= $HY_5380a89366e616d954 . "=" . urlencode($HY_39f33d52374bdc42f7) . "&";
}

hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_2430422a75ffb8ee5f);
$HY_03b53d8823d8760de6 = "GETDATA:";

foreach ($_GET as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
	$HY_03b53d8823d8760de6 .= $HY_5380a89366e616d954 . "=" . urlencode($HY_39f33d52374bdc42f7) . "&";
}

hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_03b53d8823d8760de6);

if (!in_array($HY_4713a5727c89602935, $HY_85e2d17c08df067076)) {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器fail，状态码非法");
	exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
}

$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
$HY_5cd380c79f7cf1ee30 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_log_agentrmb where ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

if (empty($HY_5cd380c79f7cf1ee30)) {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，订单未找到");

	if ($HY_a694047bf97acd7f10 == "jqr") {
		exit("fail:Order_not_find");
	}

	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "订单找到");

if ($HY_5cd380c79f7cf1ee30["changermb"] != $HY_243589d656d86939a8) {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，订单金额不符，不再通知");

	if ($HY_a694047bf97acd7f10 == "jqr") {
		exit("fail:Order_rmb");
	}

	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

$HY_825ad51e000ddc6ca5 = hy_4f6f2e143b93a52ec5($HY_5cd380c79f7cf1ee30["managerid"]);
$HY_37d035a9af9bb3bd57 = 1;
$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_5cd380c79f7cf1ee30["pid"], $HY_825ad51e000ddc6ca5["pmid"]);

if (!empty($HY_af166dfaf16c25bc35)) {
	if ($HY_af166dfaf16c25bc35["islock"] == 0) {
		$HY_37d035a9af9bb3bd57 = 0;
	}
}

$HY_ce2cfbc888fb7c3595 = hy_0894f1e5fc3fbb7c85($HY_5cd380c79f7cf1ee30["pid"]);

if ($HY_37d035a9af9bb3bd57 == 1) {
	$HY_6c0a3bbd1a07dd755d = $HY_ce2cfbc888fb7c3595;
}
else if ($HY_825ad51e000ddc6ca5["level"] == 7) {
	$HY_6c0a3bbd1a07dd755d = $HY_ce2cfbc888fb7c3595;
}
else {
	$HY_6c0a3bbd1a07dd755d = $HY_af166dfaf16c25bc35;
}

$HY_81978d9ca836e244a7 = 0;
if (($HY_825ad51e000ddc6ca5["level"] == 8) && (1000 < LICTYPE)) {
	$HY_6c0a3bbd1a07dd755d = hy_4f6f2e143b93a52ec5(1);
	$HY_81978d9ca836e244a7 = 1;
}

$HY_8a3ea308dd96a60b8a = explode(",", $HY_6c0a3bbd1a07dd755d["alipayset"]);

if ($HY_a694047bf97acd7f10 == "ali") {
	$HY_7004f81a74ee7e5839 = hy_ab0cd64bd8ddd52a69($HY_8a3ea308dd96a60b8a[1], $HY_6c0a3bbd1a07dd755d["alikey"]);
}
else if ($HY_a694047bf97acd7f10 == "ten") {
	if ($HY_f8a6a5b66efa030cb5 != 1) {
		hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，非即时到帐交易");
		exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
	}

	$HY_7004f81a74ee7e5839 = hy_ffb7b2356219e92c64($HY_6c0a3bbd1a07dd755d["tenkey"]);
}
else if ($HY_a694047bf97acd7f10 == "jqr") {
	if (strtolower(md5("ordernum=" . $HY_7e3958ca51847ad2e2 . "&rmb=" . $HY_243589d656d86939a8 . "&key=" . $HY_6c0a3bbd1a07dd755d["alikey"])) != $HY_5c99d07e28375aea77) {
		exit("fail:URL_signerror");
	}

	$HY_7004f81a74ee7e5839 = true;
}
else if ($HY_a694047bf97acd7f10 == "chinabank") {
	$HY_7004f81a74ee7e5839 = true;

	if ($HY_5c99d07e28375aea77 != strtoupper(md5($HY_508ab70aaba0b9276f . $HY_cb1678d41b96ade4dd . $HY_726fbd802b19ed8ca6 . $HY_f6e5a5ddb19d332df8 . $HY_6c0a3bbd1a07dd755d["chinabankkey"]))) {
		$HY_7004f81a74ee7e5839 = false;
	}
}
else if ($HY_a694047bf97acd7f10 == "e138") {
	$HY_7004f81a74ee7e5839 = true;

	if ($HY_5c99d07e28375aea77 != strtolower(md5("SerialNo=" . $HY_508ab70aaba0b9276f . "&UserID=" . $HY_6c0a3bbd1a07dd755d["e138set"] . "&Money=" . $HY_726fbd802b19ed8ca6 . "&Status=" . $HY_cb1678d41b96ade4dd . "&AttachString=e138&MerchantKey=" . $HY_6c0a3bbd1a07dd755d["e138key"]))) {
		$HY_7004f81a74ee7e5839 = false;
	}
}

if ($HY_7004f81a74ee7e5839 !== true) {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "curl:" . $HY_7004f81a74ee7e5839);
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器" . $HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10] . "，签名非法");
	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "签名效验通过");
$HY_9ad675bcffc64f9714 = 0;
$HY_3a20a28098fc7d868f = "";

if ($HY_5cd380c79f7cf1ee30["intro"] != $HY_daec5176b1ae69ec18) {
	$HY_3a20a28098fc7d868f = ",`intro`='" . $HY_daec5176b1ae69ec18 . "'";
}

if ($HY_4713a5727c89602935 == "WAIT_BUYER_PAY") {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success");

	if ($HY_5cd380c79f7cf1ee30["optype"] < 21) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb SET `optype`=21,`oldrmb`=" . $HY_825ad51e000ddc6ca5["rmb"] . $HY_3a20a28098fc7d868f . " where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
	}

	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}
else if ($HY_4713a5727c89602935 == "WAIT_SELLER_SEND_GOODS") {
	if ($HY_5cd380c79f7cf1ee30["optype"] < 22) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb SET `optype`=22,`oldrmb`=" . $HY_825ad51e000ddc6ca5["rmb"] . $HY_3a20a28098fc7d868f . "  where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
	}

	if ($HY_a694047bf97acd7f10 == "ali") {
		hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "alipay 自动发货");
		$HY_f9b3112c412538df60 = hy_3532ee8e8afd8818d2($HY_7e3958ca51847ad2e2, $HY_daec5176b1ae69ec18, $HY_8a3ea308dd96a60b8a[1], $HY_6c0a3bbd1a07dd755d["alikey"]);

		if (function_exists("curl_init")) {
			$HY_c694565beec0546893 = hy_abd80232273ff39ffb($HY_f9b3112c412538df60);
			$HY_4ab3689797d1ae24b1 = stripos($HY_c694565beec0546893, "<is_success>T</is_success>");
			if (($HY_4ab3689797d1ae24b1 !== false) && ($HY_4ab3689797d1ae24b1 < 70)) {
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "自动发货成功！");
			}
			else {
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "自动发货失败！");
			}
		}
		else {
			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "不支持curl，未能自动发货！");
		}
	}

	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success");
	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}
else if ($HY_4713a5727c89602935 == "WAIT_BUYER_CONFIRM_GOODS") {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success");

	if ($HY_5cd380c79f7cf1ee30["optype"] < 23) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb SET `optype`=23,`oldrmb`=" . $HY_825ad51e000ddc6ca5["rmb"] . $HY_3a20a28098fc7d868f . "  where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
	}

	if ($HY_a694047bf97acd7f10 == "ali") {
		$HY_cfc6fcafffdf22b8ef = explode(",", $HY_6c0a3bbd1a07dd755d["alipayset"]);
		if (($HY_cfc6fcafffdf22b8ef[0] == "create_partner_trade_by_buyer") && ($HY_cfc6fcafffdf22b8ef[2] == $HY_cfd569afb440ba8195)) {
			$HY_9ad675bcffc64f9714 = 1;
			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "使用特殊帐号的提卡交易，发货后就给代理充值！");
		}
		else {
			exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
		}
	}
	else {
		exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
	}
}

if (($HY_4713a5727c89602935 == "TRADE_FINISHED") || ($HY_4713a5727c89602935 == "TRADE_SUCCESS") || ($HY_9ad675bcffc64f9714 == 1)) {
	if ($HY_5cd380c79f7cf1ee30["optype"] != 24) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb SET `optype`=24,`oldrmb`=" . $HY_825ad51e000ddc6ca5["rmb"] . $HY_3a20a28098fc7d868f . " where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
		$HY_8802672553e7decdb3 = "";

		if ($HY_81978d9ca836e244a7 == 1) {
			if (100 <= $HY_243589d656d86939a8) {
				$HY_8802672553e7decdb3 = ",`endtime`='" . date("Y-m-d H:i:s", strtotime($HY_825ad51e000ddc6ca5["endtime"]) + (30 * 86400)) . "'";
			}

			if ($HY_243589d656d86939a8 == 50) {
				$HY_8802672553e7decdb3 = ",`endtime`='" . date("Y-m-d H:i:s", strtotime($HY_825ad51e000ddc6ca5["endtime"]) + (15 * 86400)) . "'";
			}
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`+" . $HY_243589d656d86939a8 . " " . $HY_8802672553e7decdb3 . " where `id`=" . $HY_825ad51e000ddc6ca5["id"], "sync");
		$HY_81978d9ca836e244a7 = 1;

		if ($HY_173d86697f24ffa1ee === false) {
			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "代理充值加款失败！" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
		else {
			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "代理充值加款成功！");
		}
	}
	else {
		hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "二次通知已成功处理！");
	}
}

exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);

?>
