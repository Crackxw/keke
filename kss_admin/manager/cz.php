<?php

function HY_0a477b4836a265d71b($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
hy_af470935131a2269b8();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	hy_bd307d155f057feb55("管理员帐号无需充值。");
}

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	if (LICTYPE < 1000) {
		hy_bd307d155f057feb55("只有" . $HY_3fb3415441688353e5[7] . "或" . $HY_3fb3415441688353e5[6] . "帐号才需要充值。");
	}
}

if ($HY_825ad51e000ddc6ca5["level"] == 8) {
	$HY_6c0a3bbd1a07dd755d = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`=1 and level=9 limit 0,1");

	if (empty($HY_6c0a3bbd1a07dd755d)) {
		hy_bd307d155f057feb55("未能取得管理员帐号信息，不能在线充值，请联系管理员！");
	}
}
else {
	$HY_37d035a9af9bb3bd57 = 1;
	$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"], $HY_825ad51e000ddc6ca5["pmid"]);

	if (!empty($HY_af166dfaf16c25bc35)) {
		$HY_37d035a9af9bb3bd57 = 0;
	}

	$HY_ce2cfbc888fb7c3595 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"]);
	$HY_dfb6820a73cd9a022f = "";

	if ($HY_37d035a9af9bb3bd57 == 1) {
		$HY_6c0a3bbd1a07dd755d = $HY_ce2cfbc888fb7c3595;
		if ((strlen($HY_6c0a3bbd1a07dd755d["alipayset"]) < 20) && (strlen($HY_6c0a3bbd1a07dd755d["tenpayset"]) < 10)) {
			$HY_dfb6820a73cd9a022f = $HY_3fb3415441688353e5[8] . "未设置收款接口，无法在线充值，请联系" . $HY_3fb3415441688353e5[8] . "线下代充！";
			hy_bd307d155f057feb55($HY_dfb6820a73cd9a022f);
		}
	}
	else if ($HY_825ad51e000ddc6ca5["level"] == 7) {
		$HY_6c0a3bbd1a07dd755d = $HY_ce2cfbc888fb7c3595;
		if ((strlen($HY_6c0a3bbd1a07dd755d["alipayset"]) < 20) && (strlen($HY_6c0a3bbd1a07dd755d["tenpayset"]) < 10)) {
			$HY_dfb6820a73cd9a022f = $HY_3fb3415441688353e5[8] . "未设置收款接口，无法在线充值，请联系" . $HY_3fb3415441688353e5[8] . "线下代充！";
			hy_bd307d155f057feb55($HY_dfb6820a73cd9a022f);
		}
	}
	else {
		$HY_6c0a3bbd1a07dd755d = $HY_af166dfaf16c25bc35;
		if ((strlen($HY_6c0a3bbd1a07dd755d["alipayset"]) < 20) && (strlen($HY_6c0a3bbd1a07dd755d["tenpayset"]) < 10)) {
			$HY_dfb6820a73cd9a022f = $HY_3fb3415441688353e5[7] . "未设置收款接口，无法在线充值，请联系" . $HY_3fb3415441688353e5[7] . "线下代充！";
			hy_bd307d155f057feb55($HY_dfb6820a73cd9a022f);
		}
	}
}

$HY_cfc6fcafffdf22b8ef = explode(",", $HY_6c0a3bbd1a07dd755d["alipayset"]);

if ($HY_d762a272713d62924f == "cz_alino") {
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "pg", "sql", "");
	$HY_5cd380c79f7cf1ee30 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_log_agentrmb where ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

	if (empty($HY_5cd380c79f7cf1ee30)) {
		hy_bd307d155f057feb55("订单未找到");
	}

	if ($HY_5cd380c79f7cf1ee30["intro"] == "") {
		hy_bd307d155f057feb55("网关订单号为空。");
	}

	hy_bd307d155f057feb55("ok" . $HY_5cd380c79f7cf1ee30["intro"]);
}
else if ($HY_d762a272713d62924f == "cz_begin") {
	$HY_cb8e0468674164c397 = hy_ba8120f86a7df1aecc("submit", "pg", "sqljs", "");
	$HY_243589d656d86939a8 = hy_ba8120f86a7df1aecc("rmb", "pg", "num", "0");
	$HY_7e3958ca51847ad2e2 = hy_f4532ccbb19d466e95("C");

	if ($HY_cb8e0468674164c397 == "支付宝") {
		include (KSSINCDIR . "alipay_function.php");
		$HY_243589d656d86939a8 = round($HY_243589d656d86939a8, 2);
		$HY_cfc6fcafffdf22b8ef = explode(",", $HY_6c0a3bbd1a07dd755d["alipayset"]);
		$HY_d74cbaa6ba201b5462 = array("service" => $HY_cfc6fcafffdf22b8ef[0], "partner" => $HY_cfc6fcafffdf22b8ef[1], "seller_id" => $HY_cfc6fcafffdf22b8ef[1], "notify_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify.php", "subject" => $HY_825ad51e000ddc6ca5["username"] . "充值", "body" => "代理服务费", "out_trade_no" => $HY_7e3958ca51847ad2e2, "price" => $HY_243589d656d86939a8, "payment_type" => "1", "quantity" => "1", "logistics_fee" => "0.00", "logistics_payment" => "SELLER_PAY", "logistics_type" => "EXPRESS");

		if ($HY_cfc6fcafffdf22b8ef[0] != "create_direct_pay_by_user") {
			$HY_d74cbaa6ba201b5462["receive_name"] = $HY_825ad51e000ddc6ca5["username"];
			$HY_d74cbaa6ba201b5462["receive_address"] = "虚拟物品无需收货地址";
			$HY_d74cbaa6ba201b5462["receive_zip"] = "100000";
			$HY_d74cbaa6ba201b5462["receive_phone"] = "010-12345678";
		}
		else {
			$HY_d74cbaa6ba201b5462["return_url"] = hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return.php";
		}

		$HY_476a869b1de05220c0 = hy_7b9cfa5afb3f7069af($HY_d74cbaa6ba201b5462, $HY_6c0a3bbd1a07dd755d["alikey"]);
	}
	else if ($HY_cb8e0468674164c397 == "支付宝机器人") {
		if (strlen($HY_cfc6fcafffdf22b8ef[1]) < 8) {
			hy_bd307d155f057feb55("无法用支付宝机器人来完成支付！收款帐号少于8位字符");
		}

		$HY_476a869b1de05220c0 = "<form name='' method='post' target='_blank' action='../kss_inc/jqrjamp.php'>";
		$HY_476a869b1de05220c0 .= "<input type='hidden' name='aliusername' value='" . $HY_cfc6fcafffdf22b8ef[1] . "' />";
		$HY_476a869b1de05220c0 .= "<input type='hidden' name='rmb' value='" . $HY_243589d656d86939a8 . "'/>";
		$HY_476a869b1de05220c0 .= "<input type='hidden' name='ordernum' value='KKAPP-2-" . $HY_7e3958ca51847ad2e2 . "' />";
		$HY_476a869b1de05220c0 .= "<input type=submit class=submitbtn name=submit value='点击支付'>";
		$HY_476a869b1de05220c0 .= "</form><br>";
		$HY_476a869b1de05220c0 .= "登陆并进入支付宝转帐页面后，<span style='color:#0000ff'>收款人</span>请填写<input type=text style='width:100px;color:#0000ff' value=" . $HY_cfc6fcafffdf22b8ef[1] . ">&nbsp;";
		$HY_476a869b1de05220c0 .= "<span style='color:#0000ff'>付款金额</span>请填写<input type=text style='width:50px;color:#0000ff' value=" . $HY_243589d656d86939a8 . "></span>&nbsp;";
		$HY_476a869b1de05220c0 .= "<span style='color:#0000ff'>付款说明</span>请填写<input type=text style='width:150px;color:#0000ff' value=KKAPP-2-" . $HY_7e3958ca51847ad2e2 . "></span><br>";
	}
	else if ($HY_cb8e0468674164c397 == "财付通") {
		include (KSSINCDIR . "tenpay_function.php");
		$HY_d74cbaa6ba201b5462 = array("partner" => $HY_6c0a3bbd1a07dd755d["tenpayset"], "out_trade_no" => $HY_7e3958ca51847ad2e2, "total_fee" => $HY_243589d656d86939a8 * 100, "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return.php", "notify_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify.php", "body" => "代理服务费", "bank_type" => "DEFAULT", "spbill_create_ip" => $_SERVER["REMOTE_ADDR"], "fee_type" => "1", "subject" => $HY_825ad51e000ddc6ca5["username"] . "充值", "sign_type" => "MD5", "service_version" => "1.0", "input_charset" => "UTF-8", "sign_key_index" => "1", "transport_fee" => "0", "trade_mode" => "1", "trans_type" => "1");
		$HY_476a869b1de05220c0 = hy_1743b30eeec93f23ba($HY_d74cbaa6ba201b5462, $HY_6c0a3bbd1a07dd755d["tenkey"]);
	}
	else if ($HY_cb8e0468674164c397 == "网银在线") {
		include (KSSINCDIR . "chinabankpay_function.php");
		$HY_d74cbaa6ba201b5462 = array("partner" => $HY_6c0a3bbd1a07dd755d["chinabankset"], "ordernum" => $HY_7e3958ca51847ad2e2, "rmb" => $HY_243589d656d86939a8, "cz" => 1, "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return.php");
		$HY_476a869b1de05220c0 = hy_3443176f91466b5132($HY_d74cbaa6ba201b5462, $HY_6c0a3bbd1a07dd755d["chinabankkey"]);
	}
	else if ($HY_cb8e0468674164c397 == "易付通") {
		include (KSSINCDIR . "e138pay_function.php");
		$HY_d74cbaa6ba201b5462 = array("partner" => $HY_6c0a3bbd1a07dd755d["e138set"], "ordernum" => $HY_7e3958ca51847ad2e2, "rmb" => $HY_243589d656d86939a8, "return_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_return.php", "notify_url" => hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify.php", "bkid" => $_GET["bkid"]);
		$HY_476a869b1de05220c0 = hy_0a0a655358e9799b01($HY_d74cbaa6ba201b5462, $HY_6c0a3bbd1a07dd755d["e138key"]);
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . ",0," . $HY_825ad51e000ddc6ca5["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_825ad51e000ddc6ca5["rmb"] . "," . $HY_243589d656d86939a8 . ",20,'" . $HY_7e3958ca51847ad2e2 . "','')", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
		hy_bd307d155f057feb55("记录订单失败，操作中断。" . $HY_3b22eac9ea6b5c92a5);
	}

	echo "<script type=\"text/javascript\">\t\r\n$(document).ready(function() {\t\r\n$(\"#cofok\").bind(\"click\",function(){\r\nvar ourl=\"admin_manager.php?action=cz_alino&isajax=1&ordernum=";
	echo $HY_7e3958ca51847ad2e2;
	echo "\";\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,2)=='ok'){\r\nwindow.open('https://lab.alipay.com/consume/queryTradeDetail.htm?tradeNo='+html.substr(2));\r\n}else{\r\nmalert('未能取到支付宝订单号，请<a href=http://www.alipay.com target=_blank>登陆支付宝确认收货</a>');\r\n};\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n\r\n\r\n});\r\n$(\"#senditem\").bind(\"click\",function(e){\r\nvar ourl=\"admin_manager.php?action=cz_senditem&isajax=1&ordernum=";
	echo $HY_7e3958ca51847ad2e2;
	echo "\";\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nmalert(html);\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n\r\n});\r\n});\r\n</script>\r\n\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n<tr malt='订单号可到财务日志里查询'>\r\n<td align=right>订单号</td>\r\n<td align=left>";
	echo $HY_7e3958ca51847ad2e2;
	echo "  &nbsp;&nbsp;<font color=red>该订单号请到财务日志里查询</font></td>\r\n</tr>\t\t\t\r\n<tr>\r\n<td align=right>充值金额</td>\r\n<td align=left>";
	echo $HY_243589d656d86939a8;
	echo "元</td>\r\n</tr>\t\t\t\r\n<tr>\r\n<td align=right>&nbsp;</td>\r\n<td align=left>付款成功后，如果没有返回充值成功信息，请查询余额。<br>支付宝机器人方式，付款完成后会没有充值成功的返回信息，充值的金额会在2分钟内到帐，超出2分钟未到帐请联系管理员</td>\r\n</tr>\r\n";

	if ($HY_cb8e0468674164c397 == "易付通") {
		echo "<tr><td align=left colspan=2>" . $HY_476a869b1de05220c0 . "</td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "财付通") {
		echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=window.open('" . $HY_476a869b1de05220c0 . "') value='点击支付' ></td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "支付宝机器人") {
		echo "<tr><td align=left colspan=2>" . $HY_476a869b1de05220c0 . "</td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "网银在线") {
		echo "<tr><td align=left colspan=2>" . $HY_476a869b1de05220c0 . "</td></tr>";
	}
	else if ($HY_cb8e0468674164c397 == "支付宝") {
		echo "<tr><td align=left colspan=2><input type=button class=submitbtn onclick=" . YH2 . "window.open('" . $HY_476a869b1de05220c0 . "')" . YH2 . " value='点击支付' >";

		if ($HY_cfc6fcafffdf22b8ef[0] == "create_partner_trade_by_buyer") {
			if ($HY_cfc6fcafffdf22b8ef[2] == "") {
				echo "<font color=red>如果你没有支付宝帐号，为免不必要的麻烦请不要使用支付宝充值</font><br><br>";
			}
			else {
				echo "<font color=red>如果你没有支付宝帐号，在点击支付后，请选非支付宝会员支付方式，并且在Email地址或手机号码栏填写</font><font color=blue>" . $HY_cfc6fcafffdf22b8ef[2] . "</font><br>";
				echo "<font color=red>支付成功后，系统一分钟内会自动给你帐号充值</font><br><br>";
			}

			echo "如果你有支付帐帐号，支付成功后，系统会自动发货，请到支付宝网站的交易管理里<input type=button class=submitbtn value='确认收货' id='cofok'><br>";
			echo "确认收货后，系统一分钟内会自动给你帐号充值";
		}
		else if ($HY_cfc6fcafffdf22b8ef[0] == "trade_create_by_buyer") {
			echo "<font color=red>请使用即时到帐方式支付，不要用担宝交易</font>";
		}

		echo "</td></tr>";
	}

	echo "</table>";
	exit();
}
else if ($HY_d762a272713d62924f == "cz_senditem") {
	include (KSSINCDIR . "alipay_function.php");
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "pg", "sql", "");
	$HY_5cd380c79f7cf1ee30 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_log_agentrmb where ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

	if (empty($HY_5cd380c79f7cf1ee30)) {
		hy_bd307d155f057feb55("订单未找到");
	}

	if ($HY_5cd380c79f7cf1ee30["intro"] == "") {
		hy_bd307d155f057feb55("网关订单号为空，无法通知发货");
	}

	$HY_cfc6fcafffdf22b8ef = explode(",", $HY_6c0a3bbd1a07dd755d["alipayset"]);

	if ($HY_cfc6fcafffdf22b8ef[0] != "create_partner_trade_by_buyer") {
		hy_bd307d155f057feb55("这个订单无需你来发货！");
	}

	$HY_f9b3112c412538df60 = hy_3532ee8e8afd8818d2($HY_7e3958ca51847ad2e2, $HY_5cd380c79f7cf1ee30["intro"], $HY_cfc6fcafffdf22b8ef[1], $HY_6c0a3bbd1a07dd755d["alikey"]);

	if (function_exists("curl_init")) {
		$HY_c694565beec0546893 = hy_abd80232273ff39ffb($HY_f9b3112c412538df60);
		$HY_4ab3689797d1ae24b1 = stripos($HY_c694565beec0546893, "<is_success>T</is_success>");
		if (($HY_4ab3689797d1ae24b1 !== false) && ($HY_4ab3689797d1ae24b1 < 70)) {
			hy_bd307d155f057feb55("发货成功");
		}

		hy_bd307d155f057feb55("发货失败" . htmlspecialchars($HY_c694565beec0546893));
	}
	else {
		hy_bd307d155f057feb55("服务器不支持curl");
	}
}

echo "\r\n<script type=\"text/javascript\">\t\r\n\r\n$(document).ready(function() {\t\r\n$(\"input[name='submit']\").bind(\"click\",function(){\r\nvar ourl=\"./admin_manager.php?action=cz_begin&isajax=1&rmb=\"+$(\"#rmb\").val()+\"&submit=\"+encodeURIComponent($(this).val());\r\nif($(this).val()=='易付通')ourl=ourl+\"&bkid=\"+$(\"#bkid\").val();\r\nmalert(ourl,'完成充值前请不要关闭本窗口',750,301);\t\t\r\n});\r\n});\r\n</script>\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_825ad51e000ddc6ca5["username"];
echo "-帐号充值</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\t\t\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n<tr>\r\n<td align=right>充值金额</td>\r\n<td align=left>";

if ($HY_825ad51e000ddc6ca5["level"] == 8) {
	echo "<select name=\"rmb\" id=\"rmb\">\r\n<option value=30.00>30元</option>\r\n<option value=50.00>50元</option>\r\n<option value=100.00>100元</option>\r\n<option value=150.00>150元</option>\r\n<option value=200.00>200元</option>\r\n<option value=500.00>500元</option>\r\n<option value=1000.00>1000元</option>\r\n</select>\r\n";
}
else {
	echo "<input class=\"smlinput\" type=\"text\" maxlength=\"5\" name=\"rmb\" id=\"rmb\" value='100' />元\r\n";
}

if ($HY_825ad51e000ddc6ca5["level"] == 8) {
	echo "<br>单次充值50（包括50），免费自动延期15天的帐号有效期<br>单次充值100以上（包括100），免费自动延期1个月的帐号有效期";
}

echo "</td>\r\n</tr>\t\t\t\r\n<tr>\r\n<td align=right>支付方式</td>\r\n<td align=left>";

if (20 < strlen($HY_6c0a3bbd1a07dd755d["alipayset"])) {
	if ($HY_cfc6fcafffdf22b8ef[0] == "alipay_jqr") {
		echo "<input type=button class='submitbtn' name='submit' value='支付宝机器人'>&nbsp;&nbsp;";
	}
	else {
		echo "<input type=button class='submitbtn' name='submit' value='支付宝'>&nbsp;&nbsp;";
	}
}

if (9 < strlen($HY_6c0a3bbd1a07dd755d["tenpayset"])) {
	echo "<input type=button class='submitbtn' name='submit' value='财付通'>&nbsp;&nbsp;";
}

if (3 < strlen($HY_6c0a3bbd1a07dd755d["chinabankset"])) {
	echo "<input type=button class='submitbtn' name='submit' value='网银在线'>";
}

if (isset($HY_6c0a3bbd1a07dd755d["e138set"]) && (10 < strlen($HY_6c0a3bbd1a07dd755d["e138set"]))) {
	$HY_a6aceb89c62d3382f3 = "<br>易付通支付请先选择支付银行<select id=bkid name=bkid>";
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
	echo "&nbsp;<input type=button name=submit class=submitbtn value='易付通'>";
}

echo "</td>\r\n</tr>\t\t\t\r\n</table>\r\n\r\n</div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
