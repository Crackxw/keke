<?php

function HY_c6285d43ec803f58ae($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_b8daf488e31ad490f7, $HY_1d5e41aacc40ced80d = 1)
{
	if ((defined("SAE_MYSQL_USER") == true) || (DEBUGPAYWG == 0)) {
		return false;
	}

	$HY_44d9f262676630e68f = KSSLOGDIR . "saledebug1_log.php";

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

if (!isset($HY_c7949038ea09b48e97)) {
	include ("inc.php");
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
	$HY_243589d656d86939a8 = trim($_GET["rmb"]);
	$HY_5c99d07e28375aea77 = trim($_GET["sign"]);
	$HY_4713a5727c89602935 = "TRADE_SUCCESS";
}
else if ($HY_a694047bf97acd7f10 == "ten") {
	$HY_f8a6a5b66efa030cb5 = hy_ba8120f86a7df1aecc("trade_mode", "gp", "int", 0);
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("out_trade_no", "gp", "sql", "");
	$HY_daec5176b1ae69ec18 = "";
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
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，状态码非法，不再通知");
	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
$HY_5cd380c79f7cf1ee30 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select A.*,B.softname,B.mailtext from kss_tb_order as A left join kss_tb_soft as B on A.softid=B.id where A.ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

if (empty($HY_5cd380c79f7cf1ee30)) {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，订单未找到，不再通知");

	if ($HY_a694047bf97acd7f10 == "jqr") {
		exit("fail:Order_not_find");
	}

	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "订单找到");

if ($HY_5cd380c79f7cf1ee30["orderamount"] != $HY_243589d656d86939a8) {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，订单金额不符，不再通知");

	if ($HY_a694047bf97acd7f10 == "jqr") {
		exit("fail:Order_rmb");
	}

	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

$HY_825ad51e000ddc6ca5 = hy_4f6f2e143b93a52ec5($HY_5cd380c79f7cf1ee30["managerid"]);
$HY_8a3ea308dd96a60b8a = explode(",", $HY_825ad51e000ddc6ca5["alipayset"]);

if ($HY_a694047bf97acd7f10 == "ali") {
	$HY_7004f81a74ee7e5839 = hy_ab0cd64bd8ddd52a69($HY_8a3ea308dd96a60b8a[1], $HY_825ad51e000ddc6ca5["alikey"]);
}
else if ($HY_a694047bf97acd7f10 == "ten") {
	if ($HY_f8a6a5b66efa030cb5 != 1) {
		hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success，非即时到帐交易");
		exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
	}

	$HY_7004f81a74ee7e5839 = hy_ffb7b2356219e92c64($HY_825ad51e000ddc6ca5["tenkey"]);
}
else if ($HY_a694047bf97acd7f10 == "jqr") {
	if (strtolower(md5("ordernum=" . $HY_7e3958ca51847ad2e2 . "&rmb=" . $HY_243589d656d86939a8 . "&key=" . $HY_825ad51e000ddc6ca5["alikey"])) != $HY_5c99d07e28375aea77) {
		exit("fail:URL_signerror");
	}

	$HY_7004f81a74ee7e5839 = true;
}
else if ($HY_a694047bf97acd7f10 == "chinabank") {
	$HY_7004f81a74ee7e5839 = true;

	if ($HY_5c99d07e28375aea77 != strtoupper(md5($HY_508ab70aaba0b9276f . $HY_cb1678d41b96ade4dd . $HY_726fbd802b19ed8ca6 . $HY_f6e5a5ddb19d332df8 . $HY_825ad51e000ddc6ca5["chinabankkey"]))) {
		$HY_7004f81a74ee7e5839 = false;
	}
}
else if ($HY_a694047bf97acd7f10 == "e138") {
	$HY_7004f81a74ee7e5839 = true;

	if ($HY_5c99d07e28375aea77 != strtolower(md5("SerialNo=" . $HY_508ab70aaba0b9276f . "&UserID=" . $HY_825ad51e000ddc6ca5["e138set"] . "&Money=" . $HY_726fbd802b19ed8ca6 . "&Status=" . $HY_cb1678d41b96ade4dd . "&AttachString=e138&MerchantKey=" . $HY_825ad51e000ddc6ca5["e138key"]))) {
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

if ($HY_5cd380c79f7cf1ee30["aliorderno"] != $HY_daec5176b1ae69ec18) {
	$HY_3a20a28098fc7d868f = ",`aliorderno`='" . $HY_daec5176b1ae69ec18 . "'";
}

if ($HY_4713a5727c89602935 == "WAIT_BUYER_PAY") {
	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success");

	if ($HY_3a20a28098fc7d868f != "") {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order SET `aliorderno`='" . $HY_daec5176b1ae69ec18 . "' where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
	}

	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}
else if ($HY_4713a5727c89602935 == "WAIT_SELLER_SEND_GOODS") {
	if ($HY_5cd380c79f7cf1ee30["orderstatus"] < 1) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order SET `orderstatus`=1" . $HY_3a20a28098fc7d868f . "  where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
	}

	if ($HY_a694047bf97acd7f10 == "ali") {
		hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "alipay 自动发货");
		$HY_f9b3112c412538df60 = hy_3532ee8e8afd8818d2($HY_7e3958ca51847ad2e2, $HY_daec5176b1ae69ec18, $HY_8a3ea308dd96a60b8a[1], $HY_825ad51e000ddc6ca5["alikey"]);

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

	if ($HY_5cd380c79f7cf1ee30["orderstatus"] < 2) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order SET `orderstatus`=2" . $HY_3a20a28098fc7d868f . "  where ordernum='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
	}

	if ($HY_a694047bf97acd7f10 == "ali") {
		$HY_cfc6fcafffdf22b8ef = explode(",", $HY_825ad51e000ddc6ca5["alipayset"]);
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
	if ($HY_5cd380c79f7cf1ee30["orderstatus"] < 8) {
		$HY_78d7134cc50b32b975 = 0;
		$HY_c2350f4f279c26e265 = 0;
		$HY_cd66f6ea0a1cf971b4 = "";
		$HY_9cefac5a7db902da90 = "";
		$HY_5147e2d0e6f7faff65 = "";
		$HY_0a1bb2905c28a942c8 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where id=" . $HY_5cd380c79f7cf1ee30["keygroupid"]);

		if ($HY_825ad51e000ddc6ca5["level"] == 6) {
			$HY_2d506b1ce033e5190d = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `softid`=" . $HY_5cd380c79f7cf1ee30["softid"] . " and `keygroupid`=" . $HY_5cd380c79f7cf1ee30["keygroupid"] . " and `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `tmpkey`='no'");
			$HY_03598870f303d6a107 = $HY_2d506b1ce033e5190d["keyprice"];
			$HY_cfe25843ccb5587e44 = $HY_03598870f303d6a107 * $HY_5cd380c79f7cf1ee30["keycount"];

			if (($HY_825ad51e000ddc6ca5["touzhirmb"] + $HY_825ad51e000ddc6ca5["rmb"]) < $HY_cfe25843ccb5587e44) {
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "代理余额不足，不能扣款！");

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:level6_rmb_Not_enough");
				}

				exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
			}

			$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"], $HY_825ad51e000ddc6ca5["pmid"]);

			if (!empty($HY_af166dfaf16c25bc35)) {
				$HY_be28a25baa4e1c9def = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `softid`=" . $HY_5cd380c79f7cf1ee30["softid"] . " and `keygroupid`=" . $HY_5cd380c79f7cf1ee30["keygroupid"] . " and `managerid`=" . $HY_af166dfaf16c25bc35["id"] . " and `tmpkey`='no'");

				if (empty($HY_be28a25baa4e1c9def)) {
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "上级总代理没有该注册卡销售权！");

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level7_key_Not_permission");
					}

					exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
				}

				$HY_d36db7feb9e338723c = $HY_be28a25baa4e1c9def["keyprice"];
				$HY_78d7134cc50b32b975 = $HY_d36db7feb9e338723c * $HY_5cd380c79f7cf1ee30["keycount"];

				if (($HY_af166dfaf16c25bc35["touzhirmb"] + $HY_af166dfaf16c25bc35["rmb"]) < $HY_78d7134cc50b32b975) {
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "上级总代理帐号余额不足，不能扣款！");

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level7_rmb_Not_enough");
					}

					exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
				}
			}

			$HY_2641c8e172cd41d4f3 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"]);

			if (empty($HY_2641c8e172cd41d4f3)) {
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "上级作者帐号未找到！");

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:Not_find_level8");
				}

				exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
			}

			if ($HY_2641c8e172cd41d4f3["level"] == 8) {
				$HY_8f106f35821ce8717f = hy_f9887838d65dea7c65($HY_0a1bb2905c28a942c8["cday"], $HY_0a1bb2905c28a942c8["linknum"]);
				$HY_c2350f4f279c26e265 = $HY_8f106f35821ce8717f * $HY_5cd380c79f7cf1ee30["keycount"];

				if (($HY_2641c8e172cd41d4f3["touzhirmb"] + $HY_2641c8e172cd41d4f3["rmb"]) < $HY_c2350f4f279c26e265) {
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "上级作者帐号余额不足，不能扣款！");

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level8_rmb_Not_enough");
					}

					exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
				}
			}
		}
		else if ($HY_825ad51e000ddc6ca5["level"] == 8) {
			$HY_2641c8e172cd41d4f3 = $HY_825ad51e000ddc6ca5;
			$HY_8f106f35821ce8717f = hy_f9887838d65dea7c65($HY_0a1bb2905c28a942c8["cday"], $HY_0a1bb2905c28a942c8["linknum"]);
			$HY_c2350f4f279c26e265 = $HY_8f106f35821ce8717f * $HY_bafc70104c017e229c;

			if (($HY_2641c8e172cd41d4f3["touzhirmb"] + $HY_2641c8e172cd41d4f3["rmb"]) < $HY_c2350f4f279c26e265) {
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "上级作者帐号余额不足，不能扣款！");

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:level8_rmb_Not_enough");
				}

				exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
			}
		}

		$HY_ec65a56480a6470a01 = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);

		if ($HY_ec65a56480a6470a01 !== true) {
			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "未能成功独占操作：" . $HY_ec65a56480a6470a01);

			if ($HY_a694047bf97acd7f10 == "jqr") {
				exit("retry:locktable error");
			}

			exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
		}

		if ($HY_825ad51e000ddc6ca5["level"] == 6) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_5cd380c79f7cf1ee30["softid"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_825ad51e000ddc6ca5["rmb"] . "," . (-$HY_5cd380c79f7cf1ee30["agentamount"]) . ",1,'" . $HY_7e3958ca51847ad2e2 . "','零售提卡')", "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "操作代理金额变动日志时出错[未扣款]！" . $HY_3b22eac9ea6b5c92a5);

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:level6_editrmb_err");
				}

				exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
			}

			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_5cd380c79f7cf1ee30["agentamount"] . ",`xfrmb`=`xfrmb`+" . $HY_5cd380c79f7cf1ee30["agentamount"] . " where `id`=" . $HY_825ad51e000ddc6ca5["id"], "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "代理扣款操作失败！" . $HY_3b22eac9ea6b5c92a5);

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:level6_editrmb_err");
				}

				exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
			}

			$HY_cd66f6ea0a1cf971b4 = "代理款项已扣，";

			if (!empty($HY_af166dfaf16c25bc35)) {
				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES\r\n(" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_5cd380c79f7cf1ee30["softid"] . "," . $HY_af166dfaf16c25bc35["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_af166dfaf16c25bc35["rmb"] . "," . (-$HY_78d7134cc50b32b975) . ",1,'" . $HY_7e3958ca51847ad2e2 . "','零售提卡')", "sync");

				if ($HY_173d86697f24ffa1ee === false) {
					$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
					$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_cd66f6ea0a1cf971b4 . "记录上级总代扣款日志失败，操作中断[总代未扣款]！" . $HY_3b22eac9ea6b5c92a5);

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level7_writelog_editrmb_err");
					}

					exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
				}

				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_78d7134cc50b32b975 . ",`xfrmb`=`xfrmb`+" . $HY_78d7134cc50b32b975 . " where `id`=" . $HY_af166dfaf16c25bc35["id"], "sync");

				if ($HY_173d86697f24ffa1ee === false) {
					$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
					$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_cd66f6ea0a1cf971b4 . "上级总代理扣款操作失败，操作中断！" . $HY_3b22eac9ea6b5c92a5);

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level7_editrmb_err");
					}

					exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
				}

				$HY_9cefac5a7db902da90 = "总代理款项已扣，";
			}

			if ($HY_2641c8e172cd41d4f3["level"] == 8) {
				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_5cd380c79f7cf1ee30["softid"] . "," . $HY_2641c8e172cd41d4f3["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_2641c8e172cd41d4f3["rmb"] . "," . (-$HY_c2350f4f279c26e265) . ",1,'" . $HY_7e3958ca51847ad2e2 . "','零售提卡')", "sync");

				if ($HY_173d86697f24ffa1ee === false) {
					$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
					$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . "记录上级作者扣款日志失败，操作中断[作者未扣款]！" . $HY_3b22eac9ea6b5c92a5);

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level8_writelog_editrmb_err");
					}

					exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
				}

				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_c2350f4f279c26e265 . ",`xfrmb`=`xfrmb`+" . $HY_c2350f4f279c26e265 . " where `id`=" . $HY_2641c8e172cd41d4f3["id"], "sync");

				if ($HY_173d86697f24ffa1ee === false) {
					$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
					$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . "作者扣款操作失败，操作中断！" . $HY_3b22eac9ea6b5c92a5);

					if ($HY_a694047bf97acd7f10 == "jqr") {
						exit("fail:level8_editrmb_err");
					}

					exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
				}

				$HY_5147e2d0e6f7faff65 = "作者款项已扣，";
			}
		}
		else if ($HY_825ad51e000ddc6ca5["level"] == 8) {
			$HY_2641c8e172cd41d4f3 = $HY_825ad51e000ddc6ca5;
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_5cd380c79f7cf1ee30["softid"] . "," . $HY_2641c8e172cd41d4f3["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_2641c8e172cd41d4f3["rmb"] . "," . (-$HY_c2350f4f279c26e265) . ",1,'" . $HY_7e3958ca51847ad2e2 . "','零售提卡')", "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . "记录作者扣款日志失败，操作中断[作者未扣款]！" . $HY_3b22eac9ea6b5c92a5);

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:level8_writelog_editrmb_err");
				}

				exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
			}

			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_c2350f4f279c26e265 . ",`xfrmb`=`xfrmb`+" . $HY_c2350f4f279c26e265 . " where `id`=" . $HY_2641c8e172cd41d4f3["id"], "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
				hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, $HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . "作者扣款操作失败，操作中断！" . $HY_3b22eac9ea6b5c92a5);

				if ($HY_a694047bf97acd7f10 == "jqr") {
					exit("fail:level8_editrmb_err");
				}

				exit($HY_4ff84ec7e6fb4cb606[$HY_a694047bf97acd7f10]);
			}

			$HY_5147e2d0e6f7faff65 = "作者款项已扣，";
		}

		$HY_b0e6112fa56939e858 = $HY_82d6536edf704aabc5->HY_37e7d84d05816dfda2("kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);
		$HY_e05cba65e8fd099080 = array("beginid" => $HY_b0e6112fa56939e858, "addtime" => time(), "managerid" => $HY_825ad51e000ddc6ca5["id"], "ordernum" => $HY_7e3958ca51847ad2e2, "ispay" => 1, "tag" => $HY_5cd380c79f7cf1ee30["tags"], "keyattr" => $HY_5cd380c79f7cf1ee30["keygroupid"], "k_num" => $HY_5cd380c79f7cf1ee30["keycount"]);
		$HY_173d86697f24ffa1ee = hy_cf18c94480f908cc46($HY_e05cba65e8fd099080, $HY_5cd380c79f7cf1ee30["keygroupid"]);
		$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_5cd380c79f7cf1ee30["softid"]);

		if ($HY_173d86697f24ffa1ee === true) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order SET `orderstatus`=9 where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "'", "sync");

			if (0 < SENDMAILMODE) {
				include (KSSINCDIR . "sendmail.php");
				$HY_7124ab1200376460c9 = "<html>";
				$HY_7124ab1200376460c9 .= "<head>";
				$HY_7124ab1200376460c9 .= "<title>确认</title>";
				$HY_7124ab1200376460c9 .= "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				$HY_7124ab1200376460c9 .= "</head>";
				$HY_7124ab1200376460c9 .= "<body>";
				$HY_7124ab1200376460c9 .= "这是系统自动发送的邮件，请不要回复<br><br>软件名：" . $HY_5cd380c79f7cf1ee30["softname"] . "<br><br>单号：" . $HY_7e3958ca51847ad2e2 . "<br>\r\n<br>卡号:<br>\r\n" . join("<br>", $HY_db2c979ce78a26ded8);
				$HY_7124ab1200376460c9 .= "<br><br>" . base64_decode($HY_5cd380c79f7cf1ee30["mailtext"]);
				$HY_7124ab1200376460c9 .= "</body>";
				$HY_7124ab1200376460c9 .= "</html>";
				$HY_a60353d10600e6632e = kk_sendmail("订单完成", $HY_7124ab1200376460c9, $HY_5cd380c79f7cf1ee30["payqq"] . "@qq.com", QQMAIL, QQMAILPASSWORD, REMOTESENDMAILAPI);

				if ($HY_a60353d10600e6632e == true) {
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "邮件发送成功！");
				}
				else {
					hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "邮件发送失败！" . $HY_a60353d10600e6632e);
				}
			}

			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "生成卡号成功！");
		}
		else {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order set `orderstatus`=7 where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
			hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "生成卡号失败！" . $HY_173d86697f24ffa1ee);

			if ($HY_a694047bf97acd7f10 == "jqr") {
				exit("fail:make_key_err");
			}

			exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
		}

		hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "完成，返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success");
		exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
	}

	hy_83dd32c76f6fc18549($HY_7e3958ca51847ad2e2, "完成，返回给" . $HY_fa653aeba99cbb6873[$HY_a694047bf97acd7f10] . "服务器success");
	exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);
}

exit($HY_e063c928cc3706d2d2[$HY_a694047bf97acd7f10]);

?>
