<?php

function HY_bd2a462c965f842841($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("../kss_inc/inc.php");
hy_af470935131a2269b8();
$HY_fd18d7f34c416ddc4c = hy_ba8120f86a7df1aecc("uid", "pg", "int", 1);
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "pg", "sql", "");
$HY_d2ba3120c7e6557655 = hy_ba8120f86a7df1aecc("keygroupid", "pg", "int", 0);
$HY_00643b95b3e3ef59b0 = hy_ba8120f86a7df1aecc("sordernum", "gp", "sql", "");
$HY_00643b95b3e3ef59b0 = trim($HY_00643b95b3e3ef59b0);
if (($HY_d2ba3120c7e6557655 == 0) && ($HY_d762a272713d62924f != "alino") && (strlen($HY_00643b95b3e3ef59b0) != 24)) {
	if (isset($_GET["sordernum"])) {
		hy_bd307d155f057feb55("订单号应该是一个24位的字符串。" . strlen($HY_00643b95b3e3ef59b0));
	}

	hy_bd307d155f057feb55("参数传递错误" . strlen($HY_00643b95b3e3ef59b0));
}

$HY_4d87364dc23d8cbbce = hy_ba8120f86a7df1aecc("pagecook", "pg", "sql", "");
$HY_8add9cf9d5e583d2af = (isset($_SESSION["pagecook"]) ? $_SESSION["pagecook"] : "");
if (($HY_8add9cf9d5e583d2af != $HY_4d87364dc23d8cbbce) && (SALECOOK == 1)) {
	exit("Access denied to view this page![2]");
}

$HY_3c91235e73527b5449 = hy_6bfeee86cee6e24af6(32);
$_SESSION["pagecook"] = $HY_3c91235e73527b5449;
$HY_f821425f4ed7b0a963 = "$('#pagecook').val('" . $HY_3c91235e73527b5449 . "');";
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);

if ($HY_d762a272713d62924f == "alino") {
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "pg", "sql", "");
	$HY_5cd380c79f7cf1ee30 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_order where ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

	if (empty($HY_5cd380c79f7cf1ee30)) {
		hy_bd307d155f057feb55("$('#pagecook').val('" . $HY_3c91235e73527b5449 . "');");
	}

	if ($HY_5cd380c79f7cf1ee30["aliorderno"] == "") {
		hy_bd307d155f057feb55("$('#pagecook').val('" . $HY_3c91235e73527b5449 . "');");
	}

	hy_bd307d155f057feb55("ok$('#pagecook').val('" . $HY_3c91235e73527b5449 . "');" . $HY_5cd380c79f7cf1ee30["aliorderno"]);
}

$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`='" . $HY_fd18d7f34c416ddc4c . "'");

if (empty($HY_c27c05c8ec8b51c4d4)) {
	hy_bd307d155f057feb55("销售商ID未找到！");
}

if ($HY_c27c05c8ec8b51c4d4["level"] == 7) {
	hy_bd307d155f057feb55("销售商未授权！");
}

if (($HY_c27c05c8ec8b51c4d4["level"] == 6) && !hy_8c3a93be5d853f54b7($HY_c27c05c8ec8b51c4d4["powerlist"], 11)) {
	hy_bd307d155f057feb55("销售商未授权！");
}

$HY_cfc6fcafffdf22b8ef = explode(",", $HY_c27c05c8ec8b51c4d4["alipayset"]);
if ((strlen($HY_c27c05c8ec8b51c4d4["tenpayset"]) < 10) && (strlen($HY_c27c05c8ec8b51c4d4["chinabankset"]) < 4) && (strlen($HY_cfc6fcafffdf22b8ef[1]) < 8) && (strlen($HY_c27c05c8ec8b51c4d4["e138set"]) < 4)) {
	hy_bd307d155f057feb55("销售商支付接口未设置！");
}

if (strlen($HY_00643b95b3e3ef59b0) == 24) {
	$HY_56c2f292e80a44a121 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_order where `ordernum`='" . $HY_00643b95b3e3ef59b0 . "' and ordertype=0");

	if (empty($HY_56c2f292e80a44a121)) {
		hy_bd307d155f057feb55("订单未找到!<script>" . $HY_f821425f4ed7b0a963 . "</script>");
	}

	$HY_8f7d2c8718392fd9ed = array(0 => "未付款", 1 => "已付款", 2 => "您使用的是担保交易，则需要在支付宝中选择 确认收货 后系统才会自动发卡！谢谢！", 3 => "已收货", 6 => "提卡出错", 7 => "提卡出错", 8 => "手动完成", 9 => "自动完成");
	$HY_f569c2880da1e9326f = $HY_8f7d2c8718392fd9ed[$HY_56c2f292e80a44a121["orderstatus"]];
	$HY_2b051c35c3cffb9826 = "select * from kss_tb_keyset where id='" . $HY_56c2f292e80a44a121["keygroupid"] . "' and `pid`='" . $HY_c27c05c8ec8b51c4d4["pid"] . "'";
	$HY_000ebeb223e399510a = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b($HY_2b051c35c3cffb9826);
	$HY_828cd4e64b30ec9e91 = $HY_000ebeb223e399510a["keyname"] . " 天数" . ($HY_000ebeb223e399510a["cday"] * 1) . " 点数" . $HY_000ebeb223e399510a["points"] . " 通道" . $HY_000ebeb223e399510a["linknum"] . " 附属性：" . $HY_000ebeb223e399510a["extattr1"];

	if (7 < $HY_56c2f292e80a44a121["orderstatus"]) {
		$HY_d9b9d92031149b415a = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `keyfix`,`keys`,`keyspassword` from `kss_z_key_" . $HY_c27c05c8ec8b51c4d4["pid"] . "_" . $HY_56c2f292e80a44a121["softid"] . "` where `ordernum`='" . $HY_00643b95b3e3ef59b0 . "' limit 0," . $HY_56c2f292e80a44a121["keycount"]);

		if (empty($HY_d9b9d92031149b415a)) {
			$HY_f569c2880da1e9326f = "卡号未找到";
		}
		else {
			$HY_f569c2880da1e9326f = "";

			foreach ($HY_d9b9d92031149b415a as $HY_61aabb2bb736560d68 ) {
				$HY_f569c2880da1e9326f .= $HY_61aabb2bb736560d68["keyfix"] . $HY_61aabb2bb736560d68["keys"] . $HY_61aabb2bb736560d68["keyspassword"] . "\r\n";
			}
		}
	}

	echo "<table border=0  cellpadding=\"5\" cellspacing=\"5\" class=\"orderkey\">\r\n<tr>\r\n<td align=right>订单号</td>\r\n<td align=left>";
	echo $HY_00643b95b3e3ef59b0;
	echo "</td>\r\n<td align=right>下单时间</td>\r\n<td align=left>";
	echo hy_cf2f0673819dddd4a1($HY_56c2f292e80a44a121["addtime"]);
	echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡类</td>\r\n<td align=left colspan=3>";
	echo $HY_828cd4e64b30ec9e91;
	echo "</td>\r\n\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡号</td>\r\n<td align=left colspan=3><textarea style=\"width:450px;height:150px;font-family:Fixedsys,Verdana;color:#666;\">";
	echo $HY_f569c2880da1e9326f;
	echo "</textarea></td>\r\n</tr>\r\n</table><script>";
	echo $HY_f821425f4ed7b0a963;
	echo "</script>\r\n";
	exit();
}

$HY_2b051c35c3cffb9826 = "select * from kss_tb_keyset where id=" . $HY_d2ba3120c7e6557655 . " and `pid`=" . $HY_c27c05c8ec8b51c4d4["pid"];

if ($HY_c27c05c8ec8b51c4d4["level"] == 6) {
	$HY_2b051c35c3cffb9826 = "select kss_tb_keyset.*,kss_tb_agentprice.keyprice from kss_tb_keyset inner join kss_tb_agentprice on kss_tb_keyset.`id`=kss_tb_agentprice.`keygroupid` where kss_tb_keyset.`id`=" . $HY_d2ba3120c7e6557655 . " and kss_tb_keyset.`pid`=" . $HY_c27c05c8ec8b51c4d4["pid"] . " and kss_tb_agentprice.`managerid`=" . $HY_c27c05c8ec8b51c4d4["id"] . " and kss_tb_agentprice.`tmpkey`='no'";
}

$HY_0a1bb2905c28a942c8 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b($HY_2b051c35c3cffb9826);

if (empty($HY_0a1bb2905c28a942c8)) {
	hy_bd307d155f057feb55("你要购买的注册卡未找到。");
}

if ($HY_0a1bb2905c28a942c8["retailprice"] <= 0) {
	hy_bd307d155f057feb55("你要购买的注册卡没有定价。");
}

if (!isset($HY_0a1bb2905c28a942c8["keyprice"])) {
	$HY_0a1bb2905c28a942c8["keyprice"] = 0;
}

if ($HY_d762a272713d62924f == "save") {
	$HY_bafc70104c017e229c = hy_ba8120f86a7df1aecc("keynum", "pg", "int", 0);
	$HY_45f093855d5e57cb72 = hy_ba8120f86a7df1aecc("qq", "pg", "num", 10000);
	$HY_f912ae7349f896556c = hy_ba8120f86a7df1aecc("orderimg", "pg", "sql", 4);
	$HY_243589d656d86939a8 = $HY_0a1bb2905c28a942c8["retailprice"] * $HY_bafc70104c017e229c;
	$HY_29ea4b1ab76ca8865f = $_SESSION["orderimg"];

	if ($HY_29ea4b1ab76ca8865f != strtoupper($HY_f912ae7349f896556c)) {
		hy_bd307d155f057feb55("验证码错误<script>$('#chkimg_1').click();" . $HY_f821425f4ed7b0a963 . "</script>");
	}

	$_SESSION["orderimg"] = "";

	if ($HY_c27c05c8ec8b51c4d4["level"] == 6) {
		if (($HY_c27c05c8ec8b51c4d4["rmb"] + $HY_c27c05c8ec8b51c4d4["touzhirmb"]) < ($HY_0a1bb2905c28a942c8["keyprice"] * $HY_bafc70104c017e229c)) {
			hy_bd307d155f057feb55("代理余额不足，不能售卡。<script>" . $HY_f821425f4ed7b0a963 . "</script>");
		}

		$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_c27c05c8ec8b51c4d4["pid"], $HY_c27c05c8ec8b51c4d4["pmid"]);

		if (!empty($HY_af166dfaf16c25bc35)) {
			$HY_be28a25baa4e1c9def = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `softid`=" . $HY_0a1bb2905c28a942c8["softid"] . " and `keygroupid`=" . $HY_0a1bb2905c28a942c8["id"] . " and `managerid`=" . $HY_af166dfaf16c25bc35["id"] . " and `tmpkey`='no'");

			if (empty($HY_be28a25baa4e1c9def)) {
				hy_bd307d155f057feb55("上级总代无该卡类销售权！");
			}

			if (($HY_af166dfaf16c25bc35["touzhirmb"] + $HY_af166dfaf16c25bc35["rmb"]) < ($HY_be28a25baa4e1c9def["keyprice"] * $HY_bafc70104c017e229c)) {
				hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[7] . "帐号余额不足，暂时不能销售！");
			}
		}

		$HY_2641c8e172cd41d4f3 = hy_0894f1e5fc3fbb7c85($HY_c27c05c8ec8b51c4d4["pid"]);

		if (empty($HY_2641c8e172cd41d4f3)) {
			hy_bd307d155f057feb55("作者帐号未找到，暂时不能销售！");
		}

		if ($HY_2641c8e172cd41d4f3["level"] == 8) {
			$HY_8f106f35821ce8717f = hy_f9887838d65dea7c65($HY_0a1bb2905c28a942c8["cday"], $HY_0a1bb2905c28a942c8["linknum"]);
			$HY_c2350f4f279c26e265 = $HY_8f106f35821ce8717f * $HY_bafc70104c017e229c;

			if (($HY_2641c8e172cd41d4f3["touzhirmb"] + $HY_2641c8e172cd41d4f3["rmb"]) < ($HY_8f106f35821ce8717f * $HY_bafc70104c017e229c)) {
				hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[8] . "帐号余额不足，暂时不能销售！");
			}
		}
	}

	if ($HY_c27c05c8ec8b51c4d4["level"] == 8) {
		$HY_8f106f35821ce8717f = hy_f9887838d65dea7c65($HY_0a1bb2905c28a942c8["cday"], $HY_0a1bb2905c28a942c8["linknum"]);
		$HY_c2350f4f279c26e265 = $HY_8f106f35821ce8717f * $HY_bafc70104c017e229c;

		if (($HY_c27c05c8ec8b51c4d4["touzhirmb"] + $HY_c27c05c8ec8b51c4d4["rmb"]) < ($HY_8f106f35821ce8717f * $HY_bafc70104c017e229c)) {
			hy_bd307d155f057feb55($HY_3fb3415441688353e5[8] . "帐号余额不足，暂时不能销售！");
		}
	}

	$HY_7e3958ca51847ad2e2 = hy_f4532ccbb19d466e95("S");
	$HY_cb8e0468674164c397 = hy_ba8120f86a7df1aecc("submit_1", "pg", "sql", "");

	if ($HY_cb8e0468674164c397 == "支付宝机器人") {
		if (strlen($HY_cfc6fcafffdf22b8ef[1]) < 8) {
			hy_bd307d155f057feb55("无法用支付宝机器人来完成支付！<script>" . $HY_f821425f4ed7b0a963 . "</script>");
		}

		$HY_476a869b1de05220c0 = "<table border=0><tr><td><form method=post action='kss_inc/jqrjamp.php' target=_blank><input type=hidden name=aliusername value='" . $HY_cfc6fcafffdf22b8ef[1] . "'>";
		$HY_476a869b1de05220c0 .= "<input type=hidden name=rmb value='" . $HY_243589d656d86939a8 . "'>";
		$HY_476a869b1de05220c0 .= "<input type=hidden name=ordernum value=KKAPP-1-" . $HY_7e3958ca51847ad2e2 . ">";
		$HY_476a869b1de05220c0 .= "<input type=submit class=submitbtn   value='点击支付'></form></td>";
		$HY_476a869b1de05220c0 .= "<td><span style='color:#0000ff'>收款人请填写</span><input type=text style='width:100px;color:#0000ff' value=" . $HY_cfc6fcafffdf22b8ef[1] . ">&nbsp;";
		$HY_476a869b1de05220c0 .= "<span style='color:#0000ff'>付款金额请填写</span><input type=text style='width:50px;color:#0000ff' value=" . $HY_243589d656d86939a8 . "></span>&nbsp;";
		$HY_476a869b1de05220c0 .= "<span style='color:#0000ff'>付款说明请填写</span><input type=text style='width:150px;color:#0000ff' value=KKAPP-1-" . $HY_7e3958ca51847ad2e2 . "></span></td></tr></table><br>";
		$HY_476a869b1de05220c0 .= "<script>alert('当前使用的支付宝第三方特殊接口\\r\\n\\r\\n在支付宝转帐页面需要您手动输入【收款人】【付款金额】【付款说明】\\r\\n\\r\\n本页面的【点击支付】按钮右边可以找到\\r\\n三项信息请正确填写，不然会造成购卡失败！');</script>";
	}

	if ($HY_cb8e0468674164c397 == "支付宝") {
		if (strlen($HY_cfc6fcafffdf22b8ef[1]) < 8) {
			hy_bd307d155f057feb55("无法用支付宝来完成支付！<script>" . $HY_f821425f4ed7b0a963 . "</script>");
		}

		include (KSSINCDIR . "alipay_function.php");
		$HY_243589d656d86939a8 = round($HY_243589d656d86939a8, 2);
		$HY_d74cbaa6ba201b5462 = array("service" => $HY_cfc6fcafffdf22b8ef[0], "partner" => $HY_cfc6fcafffdf22b8ef[1], "seller_id" => $HY_cfc6fcafffdf22b8ef[1], "notify_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify2.php", "subject" => $HY_7e3958ca51847ad2e2, "body" => $HY_0a1bb2905c28a942c8["keyname"], "out_trade_no" => $HY_7e3958ca51847ad2e2, "price" => $HY_243589d656d86939a8, "payment_type" => "1", "quantity" => "1", "logistics_fee" => "0.00", "logistics_payment" => "SELLER_PAY", "logistics_type" => "EXPRESS", "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return2.php", "show_url" => hy_5170dc4897c581d8f2() . "/sale.php?uid=" . $HY_fd18d7f34c416ddc4c);

		if ($HY_cfc6fcafffdf22b8ef[0] != "create_direct_pay_by_user") {
			$HY_d74cbaa6ba201b5462["receive_name"] = $HY_45f093855d5e57cb72;
			$HY_d74cbaa6ba201b5462["receive_address"] = "虚拟物品无需收货地址";
			$HY_d74cbaa6ba201b5462["receive_zip"] = "100000";
			$HY_d74cbaa6ba201b5462["receive_phone"] = "010-12345678";
		}

		$HY_476a869b1de05220c0 = hy_7b9cfa5afb3f7069af($HY_d74cbaa6ba201b5462, $HY_c27c05c8ec8b51c4d4["alikey"]);
	}

	if ($HY_cb8e0468674164c397 == "财付通") {
		if (strlen($HY_c27c05c8ec8b51c4d4["tenpayset"]) != 10) {
			hy_bd307d155f057feb55("无法用财付通来完成支付！<script>" . $HY_f821425f4ed7b0a963 . "</script>");
		}

		include (KSSINCDIR . "tenpay_function.php");
		$HY_d74cbaa6ba201b5462 = array("partner" => $HY_c27c05c8ec8b51c4d4["tenpayset"], "out_trade_no" => $HY_7e3958ca51847ad2e2, "total_fee" => $HY_243589d656d86939a8 * 100, "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return2.php", "notify_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify2.php", "body" => "注册卡费用", "bank_type" => "DEFAULT", "spbill_create_ip" => $_SERVER["REMOTE_ADDR"], "fee_type" => "1", "subject" => $HY_7e3958ca51847ad2e2, "sign_type" => "MD5", "service_version" => "1.0", "input_charset" => "UTF-8", "sign_key_index" => "1", "transport_fee" => "0", "trade_mode" => "1", "trans_type" => "1");
		$HY_476a869b1de05220c0 = hy_1743b30eeec93f23ba($HY_d74cbaa6ba201b5462, $HY_c27c05c8ec8b51c4d4["tenkey"]);
	}

	if ($HY_cb8e0468674164c397 == "网银在线") {
		if (strlen($HY_c27c05c8ec8b51c4d4["chinabankset"]) < 4) {
			hy_bd307d155f057feb55("无法用网银在线来完成支付！<script>" . $HY_f821425f4ed7b0a963 . "</script>");
		}

		include (KSSINCDIR . "chinabankpay_function.php");
		$HY_d74cbaa6ba201b5462 = array("partner" => $HY_c27c05c8ec8b51c4d4["chinabankset"], "ordernum" => $HY_7e3958ca51847ad2e2, "rmb" => $HY_243589d656d86939a8, "cz" => 0, "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return2.php");
		$HY_476a869b1de05220c0 = hy_3443176f91466b5132($HY_d74cbaa6ba201b5462, $HY_c27c05c8ec8b51c4d4["chinabankkey"]);
	}

	if ($HY_cb8e0468674164c397 == "易付通") {
		if (strlen($HY_c27c05c8ec8b51c4d4["e138set"]) < 4) {
			hy_bd307d155f057feb55("无法用易付通来完成支付！<script>" . $HY_f821425f4ed7b0a963 . "</script>");
		}

		include (KSSINCDIR . "e138pay_function.php");
		$HY_d74cbaa6ba201b5462 = array("partner" => $HY_c27c05c8ec8b51c4d4["e138set"], "ordernum" => $HY_7e3958ca51847ad2e2, "rmb" => $HY_243589d656d86939a8, "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return2.php", "notify_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify2.php", "bkid" => $_POST["bkid"]);
		$HY_476a869b1de05220c0 = hy_0a0a655358e9799b01($HY_d74cbaa6ba201b5462, $HY_c27c05c8ec8b51c4d4["e138key"]);
	}

	$HY_8b956a33d5e6993e74 = array("pid" => $HY_c27c05c8ec8b51c4d4["pid"], "managerid" => $HY_c27c05c8ec8b51c4d4["id"], "softid" => $HY_0a1bb2905c28a942c8["softid"], "keygroupid" => $HY_d2ba3120c7e6557655, "keycount" => $HY_bafc70104c017e229c, "tags" => $HY_45f093855d5e57cb72, "payqq" => $HY_45f093855d5e57cb72, "ordernum" => $HY_7e3958ca51847ad2e2, "orderamount" => $HY_0a1bb2905c28a942c8["retailprice"] * $HY_bafc70104c017e229c, "agentamount" => $HY_0a1bb2905c28a942c8["keyprice"] * $HY_bafc70104c017e229c, "ordertype" => 0, "orderstatus" => 0, "beginid" => 0, "addtime" => time());
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_tb_order", $HY_8b956a33d5e6993e74, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
		hy_bd307d155f057feb55("订单添加失败<script>" . $HY_f821425f4ed7b0a963 . "</script>" . $HY_3b22eac9ea6b5c92a5);
	}

	echo "ok<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\t\r\n";
	echo $HY_f821425f4ed7b0a963;
	echo "$(\"#sordernum\").val(\"";
	echo $HY_7e3958ca51847ad2e2;
	echo "\");\r\n$(\"#cofok\").bind(\"click\",function(){\r\nvar ourl=\"";
	echo INSTALLPATH;
	echo "kss_inc/sale_cmd.php?action=alino&uid=";
	echo $HY_fd18d7f34c416ddc4c;
	echo "&isajax=1&ordernum=";
	echo $HY_7e3958ca51847ad2e2;
	echo "&pagecook=\"+$(\"#pagecook\").val();\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\n";
	echo $HY_f821425f4ed7b0a963;
	echo "if(html.substr(0,2)=='ok'){\r\neval(html.substr(2,55));\r\nwindow.open('https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo='+html.substr(57));\r\n}else{\r\neval(html);\r\nmalert('未能取到支付宝订单号，请<a href=http://www.alipay.com target=_blank>登陆支付宝确认收货</a>');\r\n};\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n\r\n\r\n});\r\n});\r\n</script><table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>订单号</td>\r\n<td align=left ><span style=\"font-size:14px;font-weight:700;color:#f00\">";
	echo $HY_7e3958ca51847ad2e2;
	echo "</span>  &nbsp;&nbsp;&nbsp;订单号已复制到父窗口的订单搜索输入框</td>\r\n</tr>\r\n<tr>\r\n<td align=right>注册卡类</td>\r\n<td align=left> ";
	echo $HY_0a1bb2905c28a942c8["keyname"];
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:#aaa'>[";
	echo $HY_0a1bb2905c28a942c8["cday"];
	echo "天";

	if ($HY_0a1bb2905c28a942c8["points"] != 0) {
		echo "，&nbsp;&nbsp;" . $HY_0a1bb2905c28a942c8["points"];
		echo "点";
	}

	if ($HY_0a1bb2905c28a942c8["linknum"] != 1) {
		echo "，&nbsp;&nbsp;" . $HY_0a1bb2905c28a942c8["linknum"];
		echo "通道";
	}

	if ($HY_0a1bb2905c28a942c8["extattr1"] != "") {
		echo "，&nbsp;&nbsp;附加属性：" . $HY_0a1bb2905c28a942c8["extattr1"];
	}

	echo "]</span></td>\r\n</tr>\r\n<tr>\r\n<td align=right>订单金额</td>\r\n<td align=left><input type=hidden id='tprice_2' value=\"";
	echo $HY_0a1bb2905c28a942c8["retailprice"] * $HY_bafc70104c017e229c;
	echo "\">";
	echo "单价";
	echo $HY_0a1bb2905c28a942c8["retailprice"] . " * 张数" . $HY_bafc70104c017e229c . " = " . ($HY_0a1bb2905c28a942c8["retailprice"] * $HY_bafc70104c017e229c);
	echo "*元</td>\r\n</tr>\r\n<tr>\r\n<td align=right>您的QQ号</td>\r\n<td align=left>";
	echo $HY_45f093855d5e57cb72;
	echo "</td>\r\n</tr>\r\n";

	if ($HY_cb8e0468674164c397 == "易付通") {
		echo "<tr><td align=left colspan=2>" . $HY_476a869b1de05220c0 . "</td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "支付宝机器人") {
		echo "<tr><td align=left colspan=2>" . $HY_476a869b1de05220c0;
		echo "<font color=red>付款成功后，发卡程序（值班机器人）会在2分钟内发卡，请稍等一会然后点击下边的查询订单卡号按钮。</font></td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "财付通") {
		echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=window.open('" . $HY_476a869b1de05220c0 . "') value='点击支付' ></td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "网银在线") {
		echo "<tr><td align=left colspan=2>" . $HY_476a869b1de05220c0 . "</td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "支付宝") {
		echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=window.open('" . $HY_476a869b1de05220c0 . "') value='点击支付' ><br>";

		if ($HY_cfc6fcafffdf22b8ef[0] == "create_partner_trade_by_buyer") {
			if ($HY_cfc6fcafffdf22b8ef[2] == "") {
				echo "<font color=red>如果你没有支付宝帐号，为免不必要的麻烦请不要使用支付宝购卡</font><br><br>";
			}
			else {
				echo "<font color=red>如果你没有支付宝帐号，在点击支付后，请选非支付宝会员支付方式，并且在Email地址或手机号码栏填写</font><font color=blue>" . $HY_cfc6fcafffdf22b8ef[2] . "</font><br>";
				echo "<font color=red>支付成功后，系统会自动将卡号发送到你的QQ邮箱，或者你可以通过订单查询来取得卡号</font><br><br>";
			}

			echo "如果你有支付帐帐号，支付成功后，系统会自动发货，请到支付宝网站的交易管理里<input type=button class=submitbtn value='确认收货' id='cofok'><br>";
			echo "确认收货后，系统会自动将卡号发送到你的QQ邮箱，或者你可以通过订单查询来取得卡号";
		}
		else if ($HY_cfc6fcafffdf22b8ef[0] == "trade_create_by_buyer") {
			echo "<font color=red>请使用即时到帐方式支付，不要用担宝交易</font>";
		}

		echo "</td></tr>";
	}

	echo "<tr>\r\n<td align=right>&nbsp</td>\r\n<td align=left><span style=\"color:#f00;font-weight:700;font-size:14px\">在取得卡号之前，请不要关闭本窗口。<br>\r\n如若付款完成后，仍未弹出注册卡号：<input type=button class=submitbtnn value=\"请单击这里，查询订单卡号\" onclick=malert('";
	echo INSTALLPATH;
	echo "kss_inc/sale_cmd.php?isajax=1&sordernum='+encodeURIComponent($(\"#sordernum\").val())+'&uid=";
	echo $HY_fd18d7f34c416ddc4c;
	echo "&pagecook='+$(\"#pagecook\").val(),'查询到的订单信息',700,260);></td>\r\n</tr>\r\n</table>\r\n";
	exit();
}

if (($HY_c27c05c8ec8b51c4d4["level"] == 6) && (($HY_c27c05c8ec8b51c4d4["rmb"] + $HY_c27c05c8ec8b51c4d4["touzhirmb"]) < 1)) {
	hy_bd307d155f057feb55("代理余额不足，不能售卡。<script>" . $HY_f821425f4ed7b0a963 . "</script>");
}

echo "<script>\r\n$(document).ready(function () {\r\n";
echo $HY_f821425f4ed7b0a963;
echo "$(\"#chkimg_1\").bind(\"click\",function(){\r\n$(\"#chkimg_1\").attr(\"src\",\"";
echo INSTALLPATH;
echo "kss_inc/orderimg.php?rndid=\"+sTime());\r\n});\r\n$(\"input[name='submit_1']\").bind(\"click\",function(){\r\n$('#inorder').attr(\"action\",'";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?action=save&uid=";
echo $HY_fd18d7f34c416ddc4c;
echo "&pagecook='+$(\"#pagecook\").val());\r\n});\r\n$('#inorder').ajaxForm({\r\n//url:'";
echo INSTALLPATH;
echo "kss_inc/sale_cmd.php?action=save&uid=";
echo $HY_fd18d7f34c416ddc4c;
echo "&pagecook='+$(\"#pagecook\").val(),\r\nbeforeSubmit:function (arr, \$form, options) {\r\nvar qqstr=$(\"#qq_1\").val();\r\nvar vcode=$(\"#orderimg_1\").val();\r\nif(qqstr.length<5){\r\nmalert('QQ号码填写错误');\r\nreturn false;\r\n}\r\nif(vcode.length<4){\r\nmalert('验证码填写错误');\r\nreturn false;\r\n}\r\nreturn true;\r\n},\r\nsuccess:function (sdata, statusText, xhr, \$form) {\r\nif(sdata.substr(0,2)=='ok'){\r\n$(\"#inorder\").parents().find(\".malertboxclosebtn\").click();\r\nmalert(sdata.substr(2),'0订单已提交，完成支付前请不要关闭本窗口',800,300); \r\n}else{\t\t\t\t\r\nmalert(sdata); \t\t\t\r\n}\r\n},\r\nerror:function(){alert(\"error!\");}\r\n});\r\n\r\n});\r\n</script>\r\n<form id=\"inorder\" method=\"post\"> \r\n<input name=\"isajax\" value=1 type=\"hidden\" />\r\n<input type=\"hidden\" name=\"keygroupid\" id=\"keygroupid\" value='";
echo $HY_d2ba3120c7e6557655;
echo "' />\r\n<table border=0  cellpadding=\"5\" cellspacing=\"10\" >\r\n<tr>\r\n<td align=right>注册卡类</td>\r\n<td align=left> ";
echo $HY_0a1bb2905c28a942c8["keyname"];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:#aaa'>[";
echo $HY_0a1bb2905c28a942c8["cday"];
echo "天";

if ($HY_0a1bb2905c28a942c8["points"] != 0) {
	echo "，&nbsp;&nbsp;" . $HY_0a1bb2905c28a942c8["points"];
	echo "点";
}

if ($HY_0a1bb2905c28a942c8["linknum"] != 1) {
	echo "，&nbsp;&nbsp;" . $HY_0a1bb2905c28a942c8["linknum"];
	echo "通道";
}

if ($HY_0a1bb2905c28a942c8["extattr1"] != "") {
	echo "，&nbsp;&nbsp;附加属性：" . $HY_0a1bb2905c28a942c8["extattr1"];
}

echo "]</span></td>\r\n</tr>\r\n<tr>\r\n<td align=right>单价</td>\r\n<td align=left>";
echo $HY_0a1bb2905c28a942c8["retailprice"];
echo "元</td>\r\n</tr>\r\n<tr>\r\n<td align=right>购买张数</td>\r\n<td align=left><input type=\"text\" maxlength=\"2\" name=\"keynum\" id=\"keynum_1\" value='1' style=\"vertical-align:middle;width:100px\" AUTOCOMPLETE=\"off\" />张</td>\r\n</tr>\r\n<tr>\r\n<td align=right>您的QQ号</td>\r\n<td align=left><input type=\"text\" maxlength=\"11\" name=\"qq\" id=\"qq_1\" AUTOCOMPLETE=\"off\" value='' style=\"vertical-align:middle;width:100px\" onkeyup=\"this.value=this.value.replace(/\D/g, '')\" /> *必填";

if (0 < SENDMAILMODE) {
	echo "，购卡成功后系统会向您的QQ邮箱发送你购得的注册卡号。";
}

echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right>请输入验证码</td>\r\n<td align=left valign=middle><input type=\"text\" maxlength=\"4\" name=\"orderimg\" id=\"orderimg_1\" AUTOCOMPLETE=\"off\" value='' style=\"vertical-align:middle;width:45px\"/>&nbsp;<img style=\"vertical-align:middle;\" id=\"chkimg_1\" src=\"";
echo INSTALLPATH;
echo "kss_inc/orderimg.php?rndid=";
echo time();
echo "\"> *看不清？请点击图片刷新验证码</td>\r\n</tr>\r\n<tr>\r\n<td align=right>支付方式</td>\r\n<td align=left>";
if (isset($HY_c27c05c8ec8b51c4d4["e138set"]) && (10 < strlen($HY_c27c05c8ec8b51c4d4["e138set"]))) {
	$HY_a6aceb89c62d3382f3 = "<br>易付通支付请先选择支付银行<select name=bkid>";
	$HY_a6aceb89c62d3382f3 .= "<option value=BOCB2C>中国银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=CMB>招商银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=ICBCB2C>中国工商银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=CCB>中国银设银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=ABC>中国农业银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=SPDB>上海浦东发展银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=CIB>兴业银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=GDB>广东发展银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=SDB>深圳发展银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=CMBC>中国民行银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=COMM>交通银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=CITIC>中信银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=CEBBANK>中国光大银行</option>";
	$HY_a6aceb89c62d3382f3 .= "<option value=PSBC-DEBIT>中国邮政储蓄银行</option>";
	$HY_a6aceb89c62d3382f3 .= "</select>";
	echo $HY_a6aceb89c62d3382f3;
	echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='易付通'>";
}

if (8 < strlen($HY_cfc6fcafffdf22b8ef[1])) {
	if ($HY_cfc6fcafffdf22b8ef[0] == "alipay_jqr") {
		echo "<input type=submit name=submit_1 class=submitbtn value='支付宝机器人'>";
	}
	else {
		echo "<input type=submit name=submit_1 class=submitbtn value='支付宝'>";
	}
}

if (strlen($HY_c27c05c8ec8b51c4d4["tenpayset"]) == 10) {
	echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='财付通'>";
}

if (6 < strlen($HY_c27c05c8ec8b51c4d4["chinabankset"])) {
	echo "&nbsp;<input type=submit name=submit_1 class=submitbtn value='网银在线'>";
}

echo "</td>\r\n</tr>\r\n</table>\r\n</form>\r\n\r\n";

?>
