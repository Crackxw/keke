<?php

function HY_8f24e2cb12e1d288b5($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);

if (8 < $HY_825ad51e000ddc6ca5["level"]) {
	ob_clean();
	header("location:admin_manager.php?action=addmanager&id=" . $HY_825ad51e000ddc6ca5["id"]);
	exit();
}

if ($HY_d762a272713d62924f == "viewmanager_save") {
	hy_af470935131a2269b8();
	$HY_365893812300a028d8 = $HY_825ad51e000ddc6ca5["id"];
	$HY_729b908f51ba85e460 = hy_ba8120f86a7df1aecc("password", "p", "sqljs", "");
	$HY_c7be737ddc83635691 = hy_ba8120f86a7df1aecc("password2", "p", "sqljs", "");
	if ((substr($HY_825ad51e000ddc6ca5["username"], 0, 4) == "test") && ($HY_729b908f51ba85e460 != "")) {
		hy_bd307d155f057feb55("禁止修改体验帐号密码！");
	}

	if ($HY_729b908f51ba85e460 != $HY_c7be737ddc83635691) {
		hy_bd307d155f057feb55("您两次输入的新密码不一样");
	}

	$HY_45f093855d5e57cb72 = hy_ba8120f86a7df1aecc("qq", "p", "int", 10000);
	$HY_815f74216e6e583e89 = hy_ba8120f86a7df1aecc("tel", "p", "sqljs", "");
	$HY_578ed075101fc2373a = hy_ba8120f86a7df1aecc("email", "p", "sqljs", "10000@qq.com");
	$HY_7ee7714eb61b998ce0 = hy_ba8120f86a7df1aecc("alipayset", "p", "sqljs", "");
	$HY_9f491578edc3a47e7d = hy_ba8120f86a7df1aecc("tenpayset", "p", "sqljs", "");
	$HY_a8170c30c7f80d180d = hy_ba8120f86a7df1aecc("ext1_payset", "p", "sqljs", "");
	$HY_1c20bf9356c5679c20 = hy_ba8120f86a7df1aecc("ext2_payset", "p", "sqljs", "");
	$HY_a567495e14ebd56b11 = hy_ba8120f86a7df1aecc("alikey", "p", "sqljs", "");
	$HY_d87ca73a222f23b8bc = hy_ba8120f86a7df1aecc("tenkey", "p", "sqljs", "");
	$HY_5a161654ecff7e8d59 = hy_ba8120f86a7df1aecc("chinabankset", "p", "sqljs", "");
	$HY_56d47668ebe9561b6a = hy_ba8120f86a7df1aecc("chinabankkey", "p", "sqljs", "");
	$HY_23c80c67d83e9ae4a7 = hy_ba8120f86a7df1aecc("e138key", "p", "sqljs", "");
	$HY_5176aa3ffbb83764eb = hy_ba8120f86a7df1aecc("e138set", "p", "sqljs", "");

	if (!empty($HY_729b908f51ba85e460)) {
		if ((CHINESEPASSWORD == 1) && (strlen($HY_729b908f51ba85e460) != hy_cfd7029aa774332944($HY_729b908f51ba85e460) * 3)) {
			hy_bd307d155f057feb55("密码只能用中文字符！");
		}

		if ((15 < hy_cfd7029aa774332944($HY_729b908f51ba85e460)) || (hy_cfd7029aa774332944($HY_729b908f51ba85e460) < 6)) {
			hy_bd307d155f057feb55("密码长度必须是6-15个字符，不修改密码请留空！" . hy_cfd7029aa774332944($HY_729b908f51ba85e460));
		}
	}

	$HY_0ccc0f3f98ce3ff46a = array("tel" => $HY_815f74216e6e583e89, "email" => $HY_578ed075101fc2373a, "alipayset" => $HY_7ee7714eb61b998ce0, "tenpayset" => $HY_9f491578edc3a47e7d, "chinabankset" => $HY_5a161654ecff7e8d59, "e138set" => $HY_5176aa3ffbb83764eb);
	if (($HY_825ad51e000ddc6ca5["level"] == 9) || (LICTYPE < 1000)) {
		$HY_0ccc0f3f98ce3ff46a["qq"] = $HY_45f093855d5e57cb72;
	}

	$HY_5a478ee9515f7b4915 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`=" . $HY_825ad51e000ddc6ca5["id"]);

	if (empty($HY_5a478ee9515f7b4915)) {
		hy_bd307d155f057feb55("你要编辑的帐号不存在");
	}

	if (!empty($HY_729b908f51ba85e460)) {
		$HY_0ccc0f3f98ce3ff46a["password"] = md5($HY_729b908f51ba85e460);
	}

	if (!empty($HY_a567495e14ebd56b11)) {
		$HY_0ccc0f3f98ce3ff46a["alikey"] = $HY_a567495e14ebd56b11;
	}

	if (!empty($HY_d87ca73a222f23b8bc)) {
		$HY_0ccc0f3f98ce3ff46a["tenkey"] = $HY_d87ca73a222f23b8bc;
	}

	if (!empty($HY_23c80c67d83e9ae4a7)) {
		$HY_0ccc0f3f98ce3ff46a["e138key"] = $HY_23c80c67d83e9ae4a7;
	}

	if (!empty($HY_56d47668ebe9561b6a)) {
		$HY_0ccc0f3f98ce3ff46a["chinabankkey"] = $HY_56d47668ebe9561b6a;
	}

	$HY_0ccc0f3f98ce3ff46a = array_diff_assoc($HY_0ccc0f3f98ce3ff46a, $HY_5a478ee9515f7b4915);

	if (empty($HY_0ccc0f3f98ce3ff46a)) {
		hy_bd307d155f057feb55("帐号设置未做任何修改");
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_tb_manager", $HY_0ccc0f3f98ce3ff46a, "id=" . $HY_825ad51e000ddc6ca5["id"], "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("保置设置出错[执行update语句时出错]" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	hy_bd307d155f057feb55("已保存设置！");
}
else {
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "g", "int", 0);
	$HY_970be7709f584ff59c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from `kss_tb_manager` where id=" . $HY_825ad51e000ddc6ca5["id"]);

	if (empty($HY_970be7709f584ff59c)) {
		hy_bd307d155f057feb55("这几乎是不可能发生的错误，未找到您的资料");
	}

	$HY_ab20c9e23086ff8b04 = "保存设置";
	$HY_083a5d2f1d16a04b82 = str_replace(" ", "", $HY_970be7709f584ff59c["alipayset"]);
	$HY_1e077692fec44fd2d9 = explode(",", $HY_083a5d2f1d16a04b82);

	if (count($HY_1e077692fec44fd2d9) == 3) {
		$HY_ce6a1c83950b5b427b = $HY_1e077692fec44fd2d9[0];
		$HY_3d0ed96e24fb291337 = $HY_1e077692fec44fd2d9[1];
		$HY_16526d6c2fc888fb3f = $HY_1e077692fec44fd2d9[2];
	}
	else {
		$HY_ce6a1c83950b5b427b = "create_direct_pay_by_user";
		$HY_3d0ed96e24fb291337 = "";
		$HY_16526d6c2fc888fb3f = "";
	}
}

foreach ($HY_970be7709f584ff59c as $HY_721c412233add2f618 => $HY_cd38a277923cc87c58 ) {
	$HY_970be7709f584ff59c[$HY_721c412233add2f618] = hy_c447d0a25ad6071dc7($HY_cd38a277923cc87c58);
}

echo "\r\n<script type=\"text/javascript\">\t\r\nvar level=";
echo $HY_825ad51e000ddc6ca5["level"];
echo ";\r\nvar spmailtext='';\r\nspmailtext=\t'当用支付宝纯担宝接口时，客户用自己的支付宝帐号付款，必须确认收货后才可以取卡。<br><br>'+\r\n'为了让只有网银但无支付宝帐号的客户购卡支付后可实时取卡，你需要设置特殊邮箱。<br>'+\r\n'特殊邮箱只能填写<font color=#ff0000>你可以控制</font>并且<font color=#ff0000>没有申请过支付宝</font>的邮箱帐号，或者填一个根本不可能存在，但格式合法的邮箱地址。例如：card@card.php<br><br>'+\r\n'客户在支付宝网站支付页面的邮箱或手机号那一栏填写特殊邮箱地址，继续完成支付，回到售卡站界面点击<font color=#ff0000>自助发货</font>后，就可以实时取卡（因为特殊邮箱的规则，客户不可能确认收货）。<br><br>'+\r\n'用特殊邮箱购卡的订单支付宝交易管理里边是已发货状态，因为特殊邮箱没有支付宝帐号所以不能执行确认收货操作，支付宝会在15天后认为该订单已完成，并将该订单的款项打入到你的支付宝帐号。'\r\n\r\n$(document).ready(function() { \t\t\r\n$('#admin_editinfo').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) { \r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nmalert(responseText); \r\n}\r\n});\t\t\r\n});\r\n</script>\r\n\r\n<form id=\"admin_editinfo\" action=\"?action=viewmanager_save\" method=\"post\"> \r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_970be7709f584ff59c["username"];
echo " 修改资料</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" >\r\n<tr><td valign=top>\t\t\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"这是您要添加的用户帐号类型 分作者帐号 员工帐号 代理帐号\">\r\n<td align=right>　帐号类型</td>\r\n<td align=left>";
echo $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]];
echo "   　 　<span style=\"color:#f00;font-weight:700\">ID:&nbsp;&nbsp;";
echo $HY_970be7709f584ff59c["id"];
echo "-";
echo $HY_970be7709f584ff59c["pmid"];
echo "-";
echo $HY_970be7709f584ff59c["pid"];
echo "</span></td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的用户帐号\">\r\n<td align=right>帐号名</td>\r\n<td align=left>";
echo $HY_970be7709f584ff59c["username"];
echo "  </td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的帐号密码，安全起见密码只能用中文，不修改密码请留空\">\r\n<td align=right>新的密码</td>\r\n<td align=left><input class=\"longinputpwd\" cnpassword=1 id=\"cnpwda\" type=\"text\" maxlength=\"15\" name=\"password\" value=\"\"  AUTOCOMPLETE=\"off\"/></td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的帐号密码，安全起见密码只能用中文，不修改密码请留空\">\r\n<td align=right>确认新的密码</td>\r\n<td align=left><input class=\"longinputpwd\" cnpassword=1 id=\"cnpwdb\" type=\"text\" maxlength=\"15\" name=\"password2\" value=\"\"  AUTOCOMPLETE=\"off\"/></td>\r\n</tr>\r\n<tr malt=\"帐号有效期，超出此日期将无法登录后台，如果是作者帐号过期，该作者的软件将不能正常使用\">\r\n<td align=right>帐号有效期</td>\r\n<td align=left>";
echo $HY_970be7709f584ff59c["endtime"];
echo "</td>\r\n</tr>\r\n";

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<tr id='isauthor' malt=\"可管理会员数量指的是所有软件的会员总数，0是指不限制数量\">\r\n<td align=right>可管理会员数量</td>\r\n<td align=left>";
	echo $HY_970be7709f584ff59c["maxusernum"] == 0 ? "不限" : $HY_970be7709f584ff59c["maxusernum"];
	echo "</td>\r\n</tr>\r\n";
}

if (($HY_825ad51e000ddc6ca5["level"] < 8) || (($HY_825ad51e000ddc6ca5["level"] == 8) && (1000 < LICTYPE))) {
	echo "<tr malt=\"帐号内的还有多少人民币，提卡必须用余额支付\">\r\n<td align=right>帐户余额</td>\r\n<td align=left>";
	echo $HY_970be7709f584ff59c["rmb"];
	echo "元</td>\r\n</tr>\r\n<tr malt=\"下单提卡时，余额不足时可以透支的金额\">\r\n<td align=right>可透支金额</td>\r\n<td align=left>";
	echo $HY_970be7709f584ff59c["touzhirmb"];
	echo "元</td>\r\n</tr>\r\n<tr malt=\"历史消费总金额\">\r\n<td align=right>历史消费金额</td>\r\n<td align=left>";
	echo $HY_970be7709f584ff59c["xfrmb"];
	echo "元</td>\r\n</tr>\r\n";
}

echo "<tr malt=\"腾讯QQ号\">\r\n<td align=right>用户QQ号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"12\" name=\"qq\" value=\"";
echo $HY_970be7709f584ff59c["qq"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>电话号码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"tel\" value=\"";
echo $HY_970be7709f584ff59c["tel"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>用户邮箱</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"email\" value=\"";
echo $HY_970be7709f584ff59c["email"];
echo "\" /></td>\r\n</tr>\r\n</table></td>\r\n";
if ((7 < $HY_825ad51e000ddc6ca5["level"]) || hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "11")) {
	$HY_c77d1347592fc0a489 = hy_5170dc4897c581d8f2() . INSTALLPATH . "sale.php" . ($HY_825ad51e000ddc6ca5["id"] == 1 ? "" : "?uid=" . $HY_825ad51e000ddc6ca5["id"]);
	echo "<td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right bgcolor=\"#2B7F0D\">注册卡零售地址</td>\r\n<td align=left>";

	if ($HY_825ad51e000ddc6ca5["level"] == 7) {
		echo "<span style='color:#f00;font-weight:700'>总代理帐号无零售地址，下边的接口是用来下级代理在线充值用</span>";
	}
	else {
		echo "<a href=";
		echo $HY_c77d1347592fc0a489;
		echo " target=_blank>";
		echo $HY_c77d1347592fc0a489;
		echo "</a>";
	}

	echo "</td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 需先到支付宝网站上申请接口\">\r\n<td align=right bgcolor=\"#F7DB84\">支付宝接口</td>\r\n<td align=left>\t\t\t\t\t\r\n<input type=radio value=\"create_direct_pay_by_user\" id=\"alipayset_1\" name=\"alipayset[]\" ";
	echo $HY_ce6a1c83950b5b427b == "create_direct_pay_by_user" ? " checked" : "";
	echo "><label for=\"alipayset_1\">即时到帐</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value=\"create_partner_trade_by_buyer\" id=\"alipayset_2\" name=\"alipayset[]\" ";
	echo $HY_ce6a1c83950b5b427b == "create_partner_trade_by_buyer" ? " checked" : "";
	echo "><label for=\"alipayset_2\">纯担宝交易</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value=\"trade_create_by_buyer\" id=\"alipayset_3\" name=\"alipayset[]\" ";
	echo $HY_ce6a1c83950b5b427b == "trade_create_by_buyer" ? " checked" : "";
	echo "><label for=\"alipayset_3\">双功能</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value=\"alipay_jqr\" id=\"alipayset_4\" name=\"alipayset[]\" ";
	echo $HY_ce6a1c83950b5b427b == "alipay_jqr" ? " checked" : "";
	echo "><label for=\"alipayset_4\">机器人</label>\r\n</td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户ID号，可到商家服务里获取\">\r\n<td align=right bgcolor=\"#F7DB84\">支付宝PartnerID</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
	echo $HY_3d0ed96e24fb291337;
	echo "\" /></td>\r\n</tr>\r\n<tr malt=\"该参数只在使用纯担宝交易接口时有效，具体作用请点击详细说明来查看\">\r\n<td align=right bgcolor=\"#F7DB84\">特殊邮箱[<a style=\"cursor:pointer;color:#f00\" onclick=malert(spmailtext,'特殊邮箱详细说明',700,300)>查看说明</a>]</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
	echo $HY_16526d6c2fc888fb3f;
	echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户Key，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#F7DB84\">支付宝Key</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"alikey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户号，需先上财付通申请即时收款服务，然后可到商家服务里获取\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通Partner</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"tenpayset\"  value=\"";
	echo $HY_970be7709f584ff59c["tenpayset"];
	echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户Key，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通Key</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"tenkey\"  value=\"\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n<td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"\">\r\n<td align=right bgcolor=\"#81F9BF\">易付通帐号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"e138set\"  value=\"";
	echo $HY_970be7709f584ff59c["e138set"];
	echo "\" /></td>\r\n</tr>\r\n<tr malt=\"\">\r\n<td align=right bgcolor=\"#81F9BF\">易付通密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"e138key\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 网银在线商户号，注册网银在线企业帐号后可获取\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"chinabankset\"  value=\"";
	echo $HY_970be7709f584ff59c["chinabankset"];
	echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 登陆网银在线商户后台，在上面的导航栏里可能找到“B2C”，在二级导航栏里有“MD5密钥设置”<br>建议您设置一个16位以上的密钥或更高，密钥最多32位<br>编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"32\" name=\"chinabankkey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 必须告诉网银在线工作人员此自动对帐地址，并开通自动对帐功能，否则将会不能正常使用本系统的网银在线功能\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线自动对帐地址</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" style=\"color:#aaa\" readOnly value=\"";
	echo hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify.php";
	echo "\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n\r\n";
}

echo "</tr></table>\t\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input type=submit class=\"submitbtn\" value=\"确认修改\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
