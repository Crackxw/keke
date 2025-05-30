<?php

function HY_a76aa46968aafa9dd5($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_ad4d0afd9bb130b64f($HY_fd18d7f34c416ddc4c, $HY_c5aaf359b892dfe165, $HY_d9a4fbe9ced85f4f93, $HY_e402d0004f1fa99810, $HY_4533115e083a84647b)
{
	$HY_25ddfb4025ba75169c = array("advapicode" => $HY_d9a4fbe9ced85f4f93, "scode" => $HY_e402d0004f1fa99810, "rsacode" => $HY_4533115e083a84647b);
	return hy_6daeecad978867d96f(SYNC2URL . "?step=bsaveapicode&fname=" . $HY_fd18d7f34c416ddc4c . $HY_c5aaf359b892dfe165 . "&pwd=" . MYSQLBAKPASSWORD, $HY_25ddfb4025ba75169c, 20);
}

if (!defined("KSSROOTDIR")) {
	exit("Access denied to view this page!");
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	hy_3df13eaab5a6295338();
}

$HY_f4d4f1cd859fe3ac56 = "?";

if ($HY_d762a272713d62924f == "addsoft_save") {
	hy_af470935131a2269b8();
	$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "p", "int", 0);
	$HY_16abe05a644f97a4ce = hy_ba8120f86a7df1aecc("pid", "p", "int", 10000);

	if ($HY_16abe05a644f97a4ce < 10000) {
		hy_bd307d155f057feb55("你填写的PID非法。PID:" . $HY_16abe05a644f97a4ce);
	}

	if (LICTYPE < ($HY_16abe05a644f97a4ce - 9999)) {
		hy_bd307d155f057feb55("你使用的服务端授权不能给该作者添加软件。PID:" . $HY_16abe05a644f97a4ce);
	}

	if (LICTYPE == 1) {
		$HY_16abe05a644f97a4ce = 10000;
	}

	$HY_245060fd5899ee99ea = hy_ba8120f86a7df1aecc("softmode", "p", "sqljs", "USOFT");
	$HY_af2b6391c425da2bd7 = hy_ba8120f86a7df1aecc("softmode2", "p", "int", 0);
	$HY_55884feaa9c0e8c5ca = hy_ba8120f86a7df1aecc("viewkey", "p", "int", 1);
	$HY_74af9a8ef5ffa178a7 = hy_ba8120f86a7df1aecc("softkey", "p", "sqljs", "notkey");
	$HY_f656287ff227bc33d5 = hy_ba8120f86a7df1aecc("softname", "p", "sqljs", "未命名软件");
	$HY_667249e319bb21cd1c = hy_ba8120f86a7df1aecc("dkbindpc", "p", "int", 0);
	$HY_c7654e9777bf2f7e07 = hy_ba8120f86a7df1aecc("pccodestep", "p", "int", 0);
	$HY_5ae89bfe97a5b39f8d = hy_ba8120f86a7df1aecc("rsaenable", "p", "int", 0);
	$HY_85101639d4836e92b7 = hy_ba8120f86a7df1aecc("rsaekey", "p", "num", "");
	$HY_d94c596ee4c0e89028 = hy_ba8120f86a7df1aecc("rsankey", "p", "num", "");
	$HY_587b8746c9f0937f34 = hy_ba8120f86a7df1aecc("freeregs", "p", "int", 0);
	$HY_ad033e49279e371960 = hy_ba8120f86a7df1aecc("fregmanagerid", "p", "int", 0);
	$HY_623244c31c38fae68b = hy_ba8120f86a7df1aecc("fregtag", "p", "sqljs", "");
	$HY_2f4efb2d2eb735d08e = hy_ba8120f86a7df1aecc("fregattr", "p", "sqljs", "");
	$HY_ed29be37cd38b08f96 = hy_ba8120f86a7df1aecc("onlyonebdinfo", "p", "int", 0);
	$HY_1eef70a7817e8dd499 = hy_ba8120f86a7df1aecc("softstatus", "p", "int", 0);
	$HY_95a2fedb70fe6f451b = hy_ba8120f86a7df1aecc("onetimeskeyattrid", "p", "sqljs", "");
	$HY_af779a899028bcbc5b = hy_ba8120f86a7df1aecc("returninfo1", "p", "sql", "");
	$HY_4971ade807348d3a61 = hy_ba8120f86a7df1aecc("returninfo2", "p", "sql", "");
	$HY_aacda7308e9861290e = hy_ba8120f86a7df1aecc("softversion", "p", "int", 1);
	$HY_19089dfbaa528257af = hy_ba8120f86a7df1aecc("softdownurl", "p", "sql", "http://");
	$HY_19089dfbaa528257af = base64_encode($HY_19089dfbaa528257af);
	$HY_1375c3846d29ee969e = hy_ba8120f86a7df1aecc("ismustupdate", "p", "int", 0);
	$HY_4d6aa19edef71c3f50 = hy_ba8120f86a7df1aecc("connectpenli", "p", "int", 15);

	if ($HY_4d6aa19edef71c3f50 < 15) {
		hy_bd307d155f057feb55("验证频率最小只能填15！");
	}

	$HY_5b7f4d6309db4ae589 = hy_ba8120f86a7df1aecc("points_set", "p", "int", 0);
	$HY_37891bfdcdc6504def = hy_ba8120f86a7df1aecc("test_timearea", "p", "sqljs", "");
	$HY_37891bfdcdc6504def = str_replace(" ", "", $HY_37891bfdcdc6504def);
	$HY_e901ec363a53413a1f = explode(",", $HY_37891bfdcdc6504def);
	if (($HY_e901ec363a53413a1f[1] < $HY_e901ec363a53413a1f[0]) || ($HY_e901ec363a53413a1f[0] < 0) || (23 < $HY_e901ec363a53413a1f[0]) || ($HY_e901ec363a53413a1f[1] < 0) || (23 < $HY_e901ec363a53413a1f[1])) {
		hy_bd307d155f057feb55("试用设置里的可用时间段填写错误");
	}

	$HY_6f65684e8243338b3e = hy_ba8120f86a7df1aecc("autolock_times", "p", "int", 0);
	$HY_8c18dcdeebd4c17700 = hy_ba8120f86a7df1aecc("autolock_time", "p", "int", 0);
	$HY_c43f8f414954b466a1 = hy_ba8120f86a7df1aecc("autolock_ipnum", "p", "int", 0);
	$HY_3915e8be7637b53129 = hy_ba8120f86a7df1aecc("autolock_time_ip", "p", "int", 0);
	$HY_c5bdef44101ebfedd0 = hy_ba8120f86a7df1aecc("mac_blacklist", "p", "sqljs", "");
	$HY_53751e94d9466db82d = hy_ba8120f86a7df1aecc("test_times", "p", "int", 1);
	$HY_03f1fb4a4714158c32 = hy_ba8120f86a7df1aecc("test_day", "p", "int", 1);
	$HY_00f8849a8d80e7a0fc = hy_ba8120f86a7df1aecc("test_time", "p", "int", 15);
	$HY_70df19b5e99d7add31 = hy_ba8120f86a7df1aecc("chkonline", "p", "int", 0);
	$HY_98d2560b0b9bbe2704 = hy_ba8120f86a7df1aecc("outlinetime", "p", "int", 360);
	$HY_49bd7e8d3f346801be = hy_ba8120f86a7df1aecc("outlinetimes", "p", "int", 1);
	$HY_2d64caefb9c3f306bd = hy_ba8120f86a7df1aecc("outlinelock", "p", "int", 2);
	$HY_4be40ee12ff7403860 = hy_ba8120f86a7df1aecc("outline_addtime", "p", "num", 0);
	$HY_12f480b3f7d1c7c7e6 = hy_ba8120f86a7df1aecc("unbindpc_set", "p", "int", 0);
	$HY_882be897502930f7b7 = hy_ba8120f86a7df1aecc("unbindpc_autotime", "p", "int", 0);
	$HY_0a7068c1acc6b74142 = hy_ba8120f86a7df1aecc("unbindpc_times", "p", "int", 1);
	$HY_12b7b5f227e89eb32c = hy_ba8120f86a7df1aecc("unbindpc_ctset", "p", "int", 0);
	$HY_1e105433be9ce1959d = hy_ba8120f86a7df1aecc("unbindpc_changetime", "p", "num", "0.00");
	$HY_53172fd3ea7fa779c3 = hy_ba8120f86a7df1aecc("editbdinfo_changetime", "p", "num", "0.00");
	$HY_c7dd8f37d839cc043a = hy_ba8120f86a7df1aecc("czzs_keytypeid", "p", "sqljs", "");
	$HY_e5096c0e99acc5ddba = hy_ba8120f86a7df1aecc("czzs_number", "p", "int", 3);
	$HY_2dfc34c3d31b34f7c6 = hy_ba8120f86a7df1aecc("czzs_cday", "p", "num", "1.00");
	$HY_ee9a4f698dc5cbf1ca = hy_ba8120f86a7df1aecc("czzs_points", "p", "int", 0);
	$HY_f8c66afe76e455ad02 = hy_ba8120f86a7df1aecc("nokeyreg", "p", "num", "0.00");
	$HY_546048bdc43b353ebd = hy_ba8120f86a7df1aecc("nokeyreg_points", "p", "int", 0);
	$HY_4733aa3ef6e2523619 = hy_ba8120f86a7df1aecc("tg_addtimetype", "p", "int", 0);
	$HY_805b611840028abe6e = hy_ba8120f86a7df1aecc("tg_parentuseraddtime", "p", "int", 0);
	$HY_7be136230908406eb9 = hy_ba8120f86a7df1aecc("tg_newuseraddtime", "p", "int", 0);
	$HY_527f4e7cfaabb3c853 = hy_ba8120f86a7df1aecc("tg_points1", "p", "int", 0);
	$HY_421c6330debf9c42e3 = hy_ba8120f86a7df1aecc("tg_points2", "p", "int", 0);
	$HY_3beba46bde354e6996 = hy_ba8120f86a7df1aecc("advapi", "p", "", "");
	$HY_3beba46bde354e6996 = str_replace("<" . $HY_f4d4f1cd859fe3ac56 . "php", "", $HY_3beba46bde354e6996);
	$HY_3beba46bde354e6996 = str_replace($HY_f4d4f1cd859fe3ac56 . ">", "", $HY_3beba46bde354e6996);
	$HY_b1e8a2a269cf8ee5b6 = base64_encode($HY_3beba46bde354e6996);
	$HY_0331a2f02284bbf8f9 = hy_ba8120f86a7df1aecc("softintro", "p", "", "");
	$HY_2a2a51e83f7841b767 = hy_ba8120f86a7df1aecc("softnotice", "p", "", "");
	$HY_c88ba9a5b830a3b104 = hy_ba8120f86a7df1aecc("updatelog", "p", "", "");
	$HY_944872905b20a6acbf = hy_ba8120f86a7df1aecc("mailtext", "p", "", "");
	$HY_0331a2f02284bbf8f9 = base64_encode($HY_0331a2f02284bbf8f9);
	$HY_2a2a51e83f7841b767 = base64_encode($HY_2a2a51e83f7841b767);
	$HY_c88ba9a5b830a3b104 = base64_encode($HY_c88ba9a5b830a3b104);
	$HY_944872905b20a6acbf = base64_encode($HY_944872905b20a6acbf);

	if ($HY_af2b6391c425da2bd7 == 1) {
		if (($HY_825ad51e000ddc6ca5["level"] != 9) && (1000 < LICTYPE)) {
			hy_bd307d155f057feb55("任意登陆功能禁止使用！");
		}

		$HY_70df19b5e99d7add31 = 0;
	}

	if (1 < $HY_f8c66afe76e455ad02) {
		if (($HY_825ad51e000ddc6ca5["level"] != 9) && (1000 < LICTYPE)) {
			hy_bd307d155f057feb55("月租官网无卡注册赠送天数不能大于1！");
		}
	}

	if (10 < $HY_2dfc34c3d31b34f7c6) {
		if (($HY_825ad51e000ddc6ca5["level"] != 9) && (1000 < LICTYPE)) {
			hy_bd307d155f057feb55("月租官网赠送天数大于10需要管理员验证！");
		}
	}

	$HY_0ccc0f3f98ce3ff46a = array("softmode2" => $HY_af2b6391c425da2bd7, "viewkey" => $HY_55884feaa9c0e8c5ca, "softkey" => $HY_74af9a8ef5ffa178a7, "softname" => $HY_f656287ff227bc33d5, "softstatus" => $HY_1eef70a7817e8dd499, "dkbindpc" => $HY_667249e319bb21cd1c, "pccodestep" => $HY_c7654e9777bf2f7e07, "rsaenable" => $HY_5ae89bfe97a5b39f8d, "rsaekey" => $HY_85101639d4836e92b7, "rsankey" => $HY_d94c596ee4c0e89028, "onlyonebdinfo" => $HY_ed29be37cd38b08f96, "freeregs" => $HY_587b8746c9f0937f34, "fregmanagerid" => $HY_ad033e49279e371960, "fregtag" => $HY_623244c31c38fae68b, "fregattr" => $HY_2f4efb2d2eb735d08e, "onetimeskeyattrid" => $HY_95a2fedb70fe6f451b, "returninfo1" => $HY_af779a899028bcbc5b, "returninfo2" => $HY_4971ade807348d3a61, "softversion" => $HY_aacda7308e9861290e, "softdownurl" => $HY_19089dfbaa528257af, "ismustupdate" => $HY_1375c3846d29ee969e, "connectpenli" => $HY_4d6aa19edef71c3f50, "points_set" => $HY_5b7f4d6309db4ae589, "test_timearea" => $HY_37891bfdcdc6504def, "test_day" => $HY_03f1fb4a4714158c32, "test_times" => $HY_53751e94d9466db82d, "test_time" => $HY_00f8849a8d80e7a0fc, "chkonline" => $HY_70df19b5e99d7add31, "outlinetime" => $HY_98d2560b0b9bbe2704, "outlinetimes" => $HY_49bd7e8d3f346801be, "outlinelock" => $HY_2d64caefb9c3f306bd, "outline_addtime" => $HY_4be40ee12ff7403860, "unbindpc_set" => $HY_12f480b3f7d1c7c7e6, "unbindpc_autotime" => $HY_882be897502930f7b7, "unbindpc_times" => $HY_0a7068c1acc6b74142, "unbindpc_ctset" => $HY_12b7b5f227e89eb32c, "unbindpc_changetime" => $HY_1e105433be9ce1959d, "editbdinfo_changetime" => $HY_53172fd3ea7fa779c3, "czzs_keytypeid" => $HY_c7dd8f37d839cc043a, "czzs_number" => $HY_e5096c0e99acc5ddba, "czzs_cday" => $HY_2dfc34c3d31b34f7c6, "czzs_points" => $HY_ee9a4f698dc5cbf1ca, "nokeyreg" => $HY_f8c66afe76e455ad02, "nokeyreg_points" => $HY_546048bdc43b353ebd, "tg_addtimetype" => $HY_4733aa3ef6e2523619, "tg_parentuseraddtime" => $HY_805b611840028abe6e, "tg_newuseraddtime" => $HY_7be136230908406eb9, "tg_points1" => $HY_527f4e7cfaabb3c853, "tg_points2" => $HY_421c6330debf9c42e3, "advapi" => $HY_b1e8a2a269cf8ee5b6, "softintro" => $HY_0331a2f02284bbf8f9, "softnotice" => $HY_2a2a51e83f7841b767, "updatelog" => $HY_c88ba9a5b830a3b104, "mailtext" => $HY_944872905b20a6acbf, "autolock_time" => $HY_8c18dcdeebd4c17700, "autolock_times" => $HY_6f65684e8243338b3e, "autolock_time_ip" => $HY_3915e8be7637b53129, "autolock_ipnum" => $HY_c43f8f414954b466a1, "mac_blacklist" => $HY_c5bdef44101ebfedd0);
	$HY_5e4200374a6c706c4e = "";

	if ($HY_c5aaf359b892dfe165 == 0) {
		if ($HY_825ad51e000ddc6ca5["level"] != 9) {
			hy_bd307d155f057feb55("您没有权限添加软件，请与管理员联系");
		}

		if (md5($_POST["syspassword"]) != MYSQLBAKPASSWORD) {
			hy_bd307d155f057feb55("安全接口密码错误!");
		}

		$HY_0ccc0f3f98ce3ff46a["pid"] = $HY_16abe05a644f97a4ce;
		$HY_0ccc0f3f98ce3ff46a["softmode"] = $HY_245060fd5899ee99ea;
		$HY_0ccc0f3f98ce3ff46a["softid"] = $HY_82d6536edf704aabc5->HY_37e7d84d05816dfda2("kss_tb_soft");
		$HY_4d8aa3d28d921fb465 = hy_89d1ca6f1a4378de3b($HY_0ccc0f3f98ce3ff46a["pid"], $HY_0ccc0f3f98ce3ff46a["softid"], $HY_0ccc0f3f98ce3ff46a["softmode"]);

		if ($HY_4d8aa3d28d921fb465 !== true) {
			hy_bd307d155f057feb55($HY_4d8aa3d28d921fb465);
		}

		$HY_f361c61dcd2df71ead = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft where pid=" . $HY_16abe05a644f97a4ce . " order by `softcode` asc");

		if (empty($HY_f361c61dcd2df71ead)) {
			$HY_a3af5d94520f81d44f = $HY_16abe05a644f97a4ce . "01";
		}
		else {
			$HY_fc12e3cf6043961fb3 = intval($HY_16abe05a644f97a4ce . "00");

			foreach ($HY_f361c61dcd2df71ead as $HY_970be7709f584ff59c ) {
				$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;

				if ($HY_970be7709f584ff59c["softcode"] != $HY_fc12e3cf6043961fb3) {
					$HY_a3af5d94520f81d44f = $HY_fc12e3cf6043961fb3;
					break;
				}
				else {
					$HY_a3af5d94520f81d44f = $HY_fc12e3cf6043961fb3 + 1;
				}
			}
		}

		$HY_0ccc0f3f98ce3ff46a["softcode"] = $HY_a3af5d94520f81d44f;
		$HY_efb9cd0bb5a8a8a6bd = "<";
		$HY_efb9cd0bb5a8a8a6bd .= "?";
		$HY_efb9cd0bb5a8a8a6bd .= "php define('SOFTRSAMODE'," . $HY_5ae89bfe97a5b39f8d . "); define('SOFTRSAEKEY','" . $HY_85101639d4836e92b7 . "');  define('SOFTRSANKEY','" . $HY_d94c596ee4c0e89028 . "'); ?";
		$HY_efb9cd0bb5a8a8a6bd .= ">";
		$HY_3beba46bde354e6996 = "<" . $HY_f4d4f1cd859fe3ac56 . "php /* 编码 */ defined('YH2') or exit('Access denied to view this page!');\r\n" . $HY_3beba46bde354e6996 . "\r\n" . $HY_f4d4f1cd859fe3ac56 . ">";
		file_put_contents("../kss_inc/advapi/" . $HY_16abe05a644f97a4ce . $HY_0ccc0f3f98ce3ff46a["softid"] . ".php", $HY_3beba46bde354e6996);
		file_put_contents("../kss_inc/advapi/rsa" . $HY_a3af5d94520f81d44f . ".php", $HY_efb9cd0bb5a8a8a6bd);
		if ((IS2SVR == 1) && (SVRID == 1)) {
			$HY_5e4200374a6c706c4e = hy_ad4d0afd9bb130b64f($HY_16abe05a644f97a4ce, $HY_0ccc0f3f98ce3ff46a["softid"], hy_70f26b1abb3d9d96bb($HY_3beba46bde354e6996), $HY_a3af5d94520f81d44f, hy_70f26b1abb3d9d96bb($HY_efb9cd0bb5a8a8a6bd));
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_tb_soft", $HY_0ccc0f3f98ce3ff46a, "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			$HY_2b2da15ce8ed34227e = "<script>$(window.top.document).find('#refeshsoftlist').click();</script>";
			hy_bd307d155f057feb55("添加软件成功" . $HY_2b2da15ce8ed34227e . $HY_5e4200374a6c706c4e);
		}
		else {
			hy_bd307d155f057feb55("添加软件失败" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
	}
	else {
		$HY_ad17fd9e01cbe0d698 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `id`=" . $HY_c5aaf359b892dfe165);

		if (empty($HY_ad17fd9e01cbe0d698)) {
			hy_bd307d155f057feb55("你要编辑的软件不存在");
		}

		$HY_efb9cd0bb5a8a8a6bd = "<";
		$HY_efb9cd0bb5a8a8a6bd .= "?";
		$HY_efb9cd0bb5a8a8a6bd .= "php  /* 编码 */ define('SOFTRSAMODE'," . $HY_5ae89bfe97a5b39f8d . "); define('SOFTRSAEKEY','" . $HY_85101639d4836e92b7 . "');  define('SOFTRSANKEY','" . $HY_d94c596ee4c0e89028 . "'); ?";
		$HY_efb9cd0bb5a8a8a6bd .= ">";
		$HY_3beba46bde354e6996 = "<" . $HY_f4d4f1cd859fe3ac56 . "php defined('YH2') or exit('Access denied to view this page!');\r\n" . $HY_3beba46bde354e6996 . "\r\n" . $HY_f4d4f1cd859fe3ac56 . ">";
		$HY_0ccc0f3f98ce3ff46a = array_diff_assoc($HY_0ccc0f3f98ce3ff46a, $HY_ad17fd9e01cbe0d698);

		if (empty($HY_0ccc0f3f98ce3ff46a)) {
			hy_bd307d155f057feb55("软件设置未做任何修改");
		}

		if (isset($HY_0ccc0f3f98ce3ff46a["rsaenable"]) || isset($HY_0ccc0f3f98ce3ff46a["rsankey"]) || isset($HY_0ccc0f3f98ce3ff46a["rsaekey"]) || isset($HY_0ccc0f3f98ce3ff46a["advapi"])) {
			if (isset($HY_0ccc0f3f98ce3ff46a["advapi"])) {
				if ($HY_825ad51e000ddc6ca5["level"] != 9) {
					hy_bd307d155f057feb55("你无权修改软件设置的advapi区，为安全起见advapi代码需提交给管理员认证，由管理员代为编辑！");
				}

				if (md5($_POST["syspassword"]) != MYSQLBAKPASSWORD) {
					hy_bd307d155f057feb55("安全接口密码错误!");
				}

				file_put_contents("../kss_inc/advapi/" . $HY_16abe05a644f97a4ce . $HY_c5aaf359b892dfe165 . ".php", $HY_3beba46bde354e6996);
			}

			if (isset($HY_0ccc0f3f98ce3ff46a["rsaenable"]) || isset($HY_0ccc0f3f98ce3ff46a["rsankey"]) || isset($HY_0ccc0f3f98ce3ff46a["rsaekey"])) {
				file_put_contents("../kss_inc/advapi/rsa" . $HY_ad17fd9e01cbe0d698["softcode"] . ".php", $HY_efb9cd0bb5a8a8a6bd);
			}

			if ((IS2SVR == 1) && (SVRID == 1)) {
				$HY_5e4200374a6c706c4e = hy_ad4d0afd9bb130b64f($HY_16abe05a644f97a4ce, $HY_c5aaf359b892dfe165, hy_70f26b1abb3d9d96bb($HY_3beba46bde354e6996), $HY_ad17fd9e01cbe0d698["softcode"], hy_70f26b1abb3d9d96bb($HY_efb9cd0bb5a8a8a6bd));
			}
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_tb_soft", $HY_0ccc0f3f98ce3ff46a, "id=" . $HY_c5aaf359b892dfe165, "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			hy_bd307d155f057feb55("软件设置保存成功" . $HY_5e4200374a6c706c4e);
		}
		else {
			hy_bd307d155f057feb55("编辑软件失败" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
	}
}
else {
	$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "g", "int", 0);
	$HY_970be7709f584ff59c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from `kss_tb_soft` where id=" . $HY_c5aaf359b892dfe165);

	if (empty($HY_970be7709f584ff59c)) {
		hy_af470935131a2269b8();
		if (($HY_825ad51e000ddc6ca5["id"] != 1) && ($HY_825ad51e000ddc6ca5["id"] != 2)) {
			hy_bd307d155f057feb55("您没有权限添加软件！");
		}

		$HY_16abe05a644f97a4ce = hy_ba8120f86a7df1aecc("pid", "g", "int", 10000);
		$HY_ab20c9e23086ff8b04 = "添加软件";
		$HY_970be7709f584ff59c = array("id" => 0, "pid" => $HY_16abe05a644f97a4ce, "softmode" => "USOFT", "softmode2" => 0, "viewkey" => 1, "softkey" => hy_6bfeee86cee6e24af6(24), "softname" => "未命名软件" . hy_6bfeee86cee6e24af6(5), "softstatus" => 0, "dkbindpc" => 0, "pccodestep" => 1, "rsaenable" => 0, "rsaekey" => "", "rsankey" => "", "onlyonebdinfo" => 0, "freeregs" => 0, "fregmanagerid" => 0, "fregtag" => "", "fregattr" => "", "onetimeskeyattrid" => "", "returninfo1" => "", "returninfo2" => "", "softversion" => 1, "softdownurl" => "aHR0cDovLw==", "ismustupdate" => 0, "connectpenli" => 15, "points_set" => 0, "test_timearea" => "0,23", "test_day" => 1, "test_times" => 1, "test_time" => 15, "chkonline" => 0, "outlinetime" => 120, "outlinetimes" => 1, "outlinelock" => 2, "outline_addtime" => 0, "unbindpc_set" => 1, "unbindpc_autotime" => 15, "unbindpc_times" => 1, "unbindpc_ctset" => 0, "unbindpc_changetime" => "0.00", "editbdinfo_changetime" => "0.00", "czzs_keytypeid" => 0, "czzs_number" => 3, "czzs_cday" => "1.00", "czzs_points" => 0, "nokeyreg" => "0.00", "nokeyreg_points" => 0, "tg_addtimetype" => 0, "tg_parentuseraddtime" => 0, "tg_newuseraddtime" => 0, "tg_points1" => 0, "tg_points2" => 0, "advapi" => "Ly/kuLrkuobmlrnkvr/mn6XnnIvvvIzor7flpI3liLbliLDorrDkuovmnKzkuK3mn6XnnIvmiJbkv67mlLkKCi8v5aaC5p6c6L2v5Lu25Z+65pys6K6+572u6YeM55qE6L+U5Zue5L+h5oGv5Li6QeS4uuepuu+8jOW5tuS4lOacrOWHveaVsOWtmOWcqO+8jOWuouaIt+err+WPluW+l+eahOi/lOWbnuS/oeaBr0HlsIbmmK/mraTlh73mlbDov5Tlm57nmoTlgLwKLy/imIXimIXimIXimIXimIXor6XmjqXlj6PkuLrns7vnu5/mjqXlj6PvvIzor7fkuI3opoHliKDpmaQKZnVuY3Rpb24gYWJfYSgpewoJcmV0dXJuICfov5Tlm57kv6Hmga/kuLpBJzsKfQoKLy/lpoLmnpzova/ku7bln7rmnKzorr7nva7ph4znmoTov5Tlm57kv6Hmga/kuLpC5Li656m677yM5bm25LiU5pys5Ye95pWw5a2Y5Zyo77yM5a6i5oi356uv5Y+W5b6X55qE6L+U5Zue5L+h5oGvQuWwhuaYr+atpOWHveaVsOi/lOWbnueahOWAvAovL+KYheKYheKYheKYheKYheivpeaOpeWPo+S4uuezu+e7n+aOpeWPo++8jOivt+S4jeimgeWIoOmZpApmdW5jdGlvbiBhYl9iKCl7CglyZXR1cm4gJ+i/lOWbnuS/oeaBr+S4ukInOwp9CgovL+aJo+eCueaOpeWPo2FkdmFwaSgidl9wb2ludHMs6KaB5omj55qE54K55pWwIikKLy/imIXimIXimIXimIXimIXor6XmjqXlj6PkuLrns7vnu5/mjqXlj6PvvIzor7fkuI3opoHliKDpmaQKZnVuY3Rpb24gdl9wb2ludHMoJHBvaW50cywkc3lzZ3VpZCl7CSAvL+esrOS4gOS4quWPguaVsOaYr+imgeaJo+eahOeCueaVsO+8jOesrOS6jOS4quWPguaVsOaYr+ezu+e7n+iHquWKqOmZhOWKoOeahOWPguaVsCAgCQoJJGVycmluZm89Jyc7CgkkcnQ9YXBpX3BvaW50cygkZXJyaW5mbywkcG9pbnRzLCRzeXNndWlkKTsKCWlmKCRydCE9PWZhbHNlKXsKCQkvL+aJo+eCueaIkOWKnwoJCXJldHVybiAkcnQ7Cgl9ZWxzZXsKCQkvL+aJo+eCueWksei0pe+8jOi/lOWbnuWksei0peS/oeaBrwoJCXJldHVybiAkZXJyaW5mbzsKCX0KfQoKLy/ov5nkuKrmmK/mnIDnroDljZXnmoRhZHZhcGnmjqXlj6PvvIzlj6rmnInmjqXlj6PlkI3ml6Dlj4LmlbAg44CQYWR2YXBpKCJ2X2dldGEiKeOAkQpmdW5jdGlvbiB2X2dldGEoKXsKCXJldHVybiAndl9nZXRh55qE6L+U5Zue5pWw5o2uJzsKfQoKLy/ov5nkuKrmmK/luKblj4LmlbDnmoTmjqXlj6PvvIwg5o6l5Y+j5ZCN5ZCO5pyJMuS4quWPguaVsCDjgJBhZHZhcGkoInZfZ2V0YiwxMDAsMjAwIikg56ys5LiA5Liq5piv5Ye95pWw5ZCN77yM5ZCO6L6555qE5Lik5Liq5omN5piv5Y+C5pWw44CRCmZ1bmN0aW9uIHZfZ2V0YigkdmFsMSwkdmFsMil7CglyZXR1cm4gJHZhbDErJHZhbDI7ICAgLy/lr7nkvKDpgJLov4fmnaXnmoTlj4LmlbDov5vooYznroDljZXnmoTliqDms5Xov5DnrpcKfQoKLy/kuIvovrnkvaDlj6/ku6Xoh6rnlLHmt7vliqDoh6rlt7HnmoTmjqXlj6PlrprkuYkKCgo=", "softintro" => "", "softnotice" => "", "updatelog" => "", "mailtext" => "", "autolock_time" => 0, "autolock_times" => 0, "autolock_time_ip" => 0, "autolock_ipnum" => 0, "mac_blacklist" => "");
	}
	else {
		$HY_ab20c9e23086ff8b04 = "保存设置";
	}

	$HY_37891bfdcdc6504def = str_replace(" ", "", $HY_970be7709f584ff59c["test_timearea"]);
	$HY_e901ec363a53413a1f = explode(",", $HY_37891bfdcdc6504def);
}

$HY_da0432556541c6e4ee = array("advapi", "softintro", "softdownurl", "updatelog", "softnotice", "mailtext");

foreach ($HY_970be7709f584ff59c as $HY_721c412233add2f618 => $HY_cd38a277923cc87c58 ) {
	if (!in_array($HY_721c412233add2f618, $HY_da0432556541c6e4ee)) {
		$HY_970be7709f584ff59c[$HY_721c412233add2f618] = hy_c447d0a25ad6071dc7($HY_cd38a277923cc87c58);
	}
}

echo "<script type=\"text/javascript\">\r\nvar softmode=\"";
echo $HY_970be7709f584ff59c["softmode"];
echo "\";\r\nvar softmode2=\"";
echo $HY_970be7709f584ff59c["softmode2"];
echo "\";\r\nvar unbindpc_set=";
echo $HY_970be7709f584ff59c["unbindpc_set"];
echo ";\r\nvar line_set=";
echo $HY_970be7709f584ff59c["chkonline"];
echo ";\r\n</script>\r\n";
echo "<script type='text/javascript' src='" . INSTALLPATH . "kss_inc/js/bin_addsoft.js'></script>\r\n";

if (is_file("../kss_editor/ckeditor.js")) {
	echo "<script type='text/javascript' src='" . INSTALLPATH . "kss_editor/ckeditor.js'></script>\r\n";
}

echo "<form id=\"admin_addsoft\" action=\"?action=addsoft_save\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" id=\"softid\" value=\"";
echo $HY_970be7709f584ff59c["id"];
echo "\" />\r\n<input type=\"hidden\" name=\"points_set\" value=\"0\" />\r\n<div id=\"tabs01\">\r\n<div>\r\n<div tbtid=\"11\">基本</div>\r\n<div tbtid=\"12\">试用设置</div>\r\n<div tbtid=\"13\">解绑换机设置</div>\r\n<div tbtid=\"18\">赠送策略</div>\r\n<div tbtid=\"19\">安全策略</div>\r\n<div tbtid=\"14\">高级API</div>\r\n<div tbtid=\"15\">软件简介</div>\r\n<div tbtid=\"16\">自动更新</div>\r\n<div tbtid=\"17\">软件公告</div>\r\n<div tbtid=\"20\">附加邮件正文</div>\r\n</div>\r\n<div>\r\n<div tbdid=\"11\">\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"软件名称\">\r\n<td align=right>软件名称</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" id=softname name=\"softname\" value=\"";
echo $HY_970be7709f584ff59c["softname"];
echo "\" /></td>\r\n</tr>\r\n";

if ($HY_970be7709f584ff59c["id"] != 0) {
	echo "<tr><td align=right malt=该编号需要填入客户端接口>软件编号</td><td><input type=text name=pid class=smlinput readOnly value=" . $HY_970be7709f584ff59c["softcode"] . "><input type=hidden name=pid value=" . $HY_970be7709f584ff59c["pid"] . "></td></tr>";
}

echo "<tr malt=\"用于和客户端通讯交互加解密数据用\">\r\n<td align=right>软件密钥</td>\r\n<td align=left><input class=\"longinput\" ";

if ($HY_825ad51e000ddc6ca5["level"] != 9) {
	echo "readOnly";
}

echo "  type=\"text\" maxlength=\"24\" id=softkey name=\"softkey\" value=\"";
echo $HY_970be7709f584ff59c["softkey"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"返回信息A，在客户端登陆成功后可以通过API ks_GetData(1)获取\">\r\n<td align=right>返回信息A</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"250\" name=\"returninfo1\" value=\"";
echo $HY_970be7709f584ff59c["returninfo1"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"返回信息B，在客户端登陆成功后可以通过API ks_GetData(2)获取\">\r\n<td align=right>返回信息B</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"250\" name=\"returninfo2\" value=\"";
echo $HY_970be7709f584ff59c["returninfo2"];
echo "\" /></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"软件模式一经确定不可修改\">\r\n<td align=right>软件模式</td>\r\n<td align=left malt=\"1、用户名+密码登陆：客户端以用户名+密码的形式登陆，可以使用注册卡号对用户充值；<br>2、注册卡号登陆：客户端用一张注册卡号即可登陆，不可以对注册卡号充值<br>注册卡激活后在注册卡列表表里显示为已充值，并自动在用户表新增一个用户，用户名为注册卡前10位，密码和安全密码为后22位。<br>在注册卡列表中删除已充值的注册卡不影响注册卡的登陆，因为登陆是判断用户表\">";

if ($HY_970be7709f584ff59c["id"] != 0) {
	echo $HY_970be7709f584ff59c["softmode"] == "USOFT" ? "用户名+密码登陆" : "注册卡号登陆";
}
else {
	echo "<input type=radio value='USOFT' name=\"softmode\" id=\"softmode_1\"";
	echo $HY_970be7709f584ff59c["softmode"] == "USOFT" ? " checked" : "";
	echo "><label for=\"softmode_1\" >用户名+密码登陆</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='KSOFT' name=\"softmode\" id=\"softmode_2\"";
	echo $HY_970be7709f584ff59c["softmode"] == "KSOFT" ? " checked" : "";
	echo "><label for=\"softmode_2\" >注册卡号登陆</label>\r\n";
}

echo "</td>\r\n</tr>\r\n<tr malt=\"在同一电脑上同一帐号可以登陆多次\">\r\n<td align=right>单机可重复登陆</td>\r\n<td align=left><input type='checkbox' ";

if ($HY_970be7709f584ff59c["dkbindpc"] == 1) {
	echo "checked";
}

echo " name='dkbindpc' value='1' id='dkbindpc'></td>\r\n</tr>\r\n<tr malt=\"绑定信息唯一指的是：绑定信息被一个帐号使用了，就不能再被另一帐号在客户端注册或修改时使用。<br>如果勾选就表示启用了本功能。<br>本参数对后台修改绑定信息不影响\">\r\n<td align=right>绑定信息唯一</td>\r\n<td align=left><input type='checkbox' ";

if ($HY_970be7709f584ff59c["onlyonebdinfo"] == 1) {
	echo "checked";
}

echo " name='onlyonebdinfo' value='1' id='onlyonebdinfo'> </td>\r\n</tr>\r\n<tr>\r\n<td align=right malt='如果你担心用户通过查询注册卡功能来猜卡，可以关闭查询注册卡功能'>查询注册卡功能</td>\r\n<td align=left>\r\n<input type=radio value='0' name=\"viewkey\" id=\"viewkey_1\"";
echo $HY_970be7709f584ff59c["viewkey"] == "0" ? " checked" : "";
echo "><label for=\"viewkey_1\">禁止</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='1' name=\"viewkey\" id=\"viewkey_2\"";
echo $HY_970be7709f584ff59c["viewkey"] == "1" ? " checked" : "";
echo "><label for=\"viewkey_2\">允许</label>\r\n</td>\r\n</tr>\r\n<tr malt=\"可控制该软件是否允许使用、允许注册新帐号、允许给帐号充值等等\">\r\n<td align=right>软件状态</td>\r\n<td align=left id=\"softstatus\"></td>\r\n</tr>\r\n<tr malt=\"指的是你客户端经常调用验证接口ks_CheckKeyE时每隔多长时间才会连接服务器验证，最小值只能填15\">\r\n<td align=right>验证频率</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"3\" name=\"connectpenli\" value=\"";
echo $HY_970be7709f584ff59c["connectpenli"];
echo "\" />分钟</td>\r\n</tr>\r\n";

if ($HY_970be7709f584ff59c["id"] == 0) {
	if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1 < LICTYPE)) {
		echo "<tr malt=\"默认给自己添加软件，如果你想给其它作者添加软件，请输入其它作者的PID号\">\r\n<td align=right>作者PID</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\"  maxlength=\"5\" name=\"pid\" value=\"";
		echo $HY_970be7709f584ff59c["pid"];
		echo "\" /></td>\r\n</tr>\r\n";
	}
	else {
		echo "<tr style='display:none'><td>PID</td><td><input type=text name=pid value=" . $HY_970be7709f584ff59c["pid"] . "></td></tr>";
	}
}

echo "</table>\t\t\t\r\n</td></tr>\r\n</table>\t\t\t\r\n</div>\r\n<div tbdid=\"12\">\r\n<table border=0  cellpadding=\"10\" cellspacing=\"5\" >\r\n<tr>\r\n<td colspan=2><p style=\"padding:5px;background:#FFFF99;border:1px solid #999;color:#f00;\">试用设置是针对公用帐号的<br>设置公用帐号的方法：到 用户管理-> 用户列表，找一个你想设置为公用帐号的帐号或注册卡号，点击前面的<img src=\"../kss_inc/images/b_edit.png\">图标<br>在弹出的窗口中单击设为公用，该帐号或注册卡号就变成了公用帐号。</p></td>\r\n</tr>\r\n<tr malt=\"可使用时段的设置只对试用帐号、试用注册卡、用户模式的未充值帐号起作用\">\r\n<td align=right>每天可使用的时段</td>\r\n<td align=left>　<input maxlength=\"2\" type=\"text\" name=\"test_timearea[]\" class=\"sml2input\" value=\"";
echo $HY_e901ec363a53413a1f[0];
echo "\" >点 至<input maxlength=\"2\" type=\"text\" name=\"test_timearea[]\" class=\"sml2input\" value=\"";
echo $HY_e901ec363a53413a1f[1];
echo "\" >点</td>\r\n</tr>\r\n<tr malt=\"试用注册卡、试用帐号每台电脑可使用的次数。如果次数设为0表示不限制，那么每次可试用时间也不限制\">\r\n<td align=right>可试用次数</td>\r\n<td align=left>每<input maxlength=\"3\" type=\"text\" name=\"test_day\" class=\"sml2input\" value=\"";
echo $HY_970be7709f584ff59c["test_day"];
echo "\" >天可试用<input maxlength=\"4\" type=\"text\" name=\"test_times\" class=\"sml2input\" value=\"";
echo $HY_970be7709f584ff59c["test_times"];
echo "\" >次 <span style=\"padding-left:30px;color:#f00\">如果1次可使用10小时，那么10小时内无论用户登陆多少次软件都只算一次。</span></td>\r\n</tr>\r\n<tr malt=\"试用注册卡、试用帐号每次试用可使用的时间\">\r\n<td align=right>每次可试用时间</td>\r\n<td align=left>　<input maxlength=\"4\" type=\"text\" name=\"test_time\" class=\"smlinput\" value=\"";
echo $HY_970be7709f584ff59c["test_time"];
echo "\" >分钟</td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"13\">\r\n<table border=0  cellpadding=\"10\" cellspacing=\"5\" >\r\n<tr malt=\"绑定的文本信息不是机器码，可以用绑定的文本信息来实现绑定游戏帐号或其它功能\">\r\n<td align=right>修改绑定文本信息</td>\r\n<td align=left>扣除<input type=\"text\" maxlength=\"5\" name=\"editbdinfo_changetime\" class=\"smlinput\" value=\"";
echo $HY_970be7709f584ff59c["editbdinfo_changetime"];
echo "\" >天 * <span style=\"color:#f00;font-weight:700\">0.00为不允许用户修改绑定的文本信息</span></td>\r\n</tr>\r\n<tr malt=\"勾选时，帐号可以同时在任意电脑上登陆<br>最好与扣点配合使用，即客户每次登陆软件或执行软件某功能时扣除一定的点数<br>或者与绑定信息配合使用，即把注册系统帐号绑定一些游戏帐号，只有绑定的游戏帐号才可以登陆\">\r\n<td align=right>任意登陆</td>\r\n<td align=left><input type='checkbox' ";

if ($HY_970be7709f584ff59c["softmode2"] == 1) {
	echo "checked";
}

echo " name='softmode2' value='1' id='softmode2'> *除非你是了解该功能的意义，否则请不要勾选。\r\n</td>\r\n</tr>\r\n<tr class=\"chionlineset_\" malt=\"用户在线的情况下禁止再登陆\">\r\n<td align=right valign=top>判断在线标识</td>\r\n<td align=left><input type='checkbox' ";

if ($HY_970be7709f584ff59c["chkonline"] == 1) {
	echo "checked";
}

echo " name='chkonline' value='1' id=\"chkonline\">&nbsp;&nbsp;&nbsp;&nbsp;<span stylc=\"color:#f00\">勾选时，客户端在退出时必须调用ks_exit()来退出登陆状态</span></td>\r\n</tr>\r\n<tr style=\"display:none\" class=\"chkonlineset\" >\r\n<td align=right valign=top>强制登陆</td>\r\n<td align=left>用户上次连接服务器在<input type='text' maxlength=\"3\"  name='outlinetime' value='";
echo $HY_970be7709f584ff59c["outlinetime"];
echo "' class=\"smlinput\">分钟前并且卡在线上，可在其它电脑上强制登陆<input malt=\"每天可强制登陆的次数\" type='text' maxlength=\"3\"  name='outlinetimes' value='";
echo $HY_970be7709f584ff59c["outlinetimes"];
echo "' class=\"sml2input\">次。<span style=\"display:none\">每次强登扣时<input type='text' maxlength=\"5\"  name='outline_addtime' value='";
echo $HY_970be7709f584ff59c["outline_addtime"];
echo "' class=\"smlinput\">天</span></td>\r\n</tr>\r\n<tr style=\"display:none\" class=\"chkonlineset\">\r\n<td align=right valign=top>锁定帐号</td>\r\n<td align=left>当日非法自动下线<input type='text' maxlength=\"4\"  name='outlinelock' value='";
echo $HY_970be7709f584ff59c["outlinelock"];
echo "' class=\"sml2input\">次，锁定帐号。【非法自动下线：原程序还未关闭，到了可自动下线时间又到新电脑上登陆。】</td>\r\n</tr>\r\n<tr malt=\"自定义机器码格式= 硬件1信息,硬件2信息,...,硬件n信息 硬件信息以逗号分隔<br>自定义机器码中有<font color=blue>机器码判断阈值</font>个硬件信息相符就认为机器码未变动<br>例如数据库中用户的机器码是abc,def,ghi，用户验证或解绑时发送来的自定义机器码是abc,ccc,bbb<br>机器码判断阈值设为1时会认为机器码没变，因为它们中有1个硬件信息abc是相同的<br>如果机器码判断阈值是2那么就会被判断为机器码变动，因为它们中没有2个硬件信息是相同的\">\r\n<td align=right>机器码判断阈值</td>\r\n<td align=left><input class=\"smlinput\"  type=\"text\" maxlength=\"1\" name=\"pccodestep\" id=\"pccodestep\" value='";
echo $HY_970be7709f584ff59c["pccodestep"];
echo "' /> <span style=\"color:#ff0000\">* 如果没有自定义机器码该值请填写1</span>\r\n</td></tr>\t\t\t\t\r\n<tr class=\"unbindpc_\" malt=\"机器码指用户电脑的特征码，解绑机器码就可以让用户在新的电脑上登陆\">\r\n<td align=right valign=top>解绑机器码策略</td>\r\n<td align=left><select name=\"unbindpc_set\" id=\"unbindpc_set\">\r\n<option value=0 ";
echo $HY_970be7709f584ff59c["unbindpc_set"] == 0 ? "selected" : "";
echo ">不允许解绑机器码</option>\r\n<option value=1 ";
echo $HY_970be7709f584ff59c["unbindpc_set"] == 1 ? "selected" : "";
echo ">只能在原电脑上解绑机器码</option>\r\n<option value=3 ";
echo $HY_970be7709f584ff59c["unbindpc_set"] == 3 ? "selected" : "";
echo ">可在任意电脑上解绑机器码</option>\r\n<option value=2 ";
echo $HY_970be7709f584ff59c["unbindpc_set"] == 2 ? "selected" : "";
echo ">自动解绑</option>\r\n</select><span id='canautounbind'>&nbsp;&nbsp;用户最后一次验证在<input type=text value=";
echo $HY_970be7709f584ff59c["unbindpc_autotime"];
echo " name=\"unbindpc_autotime\" class=sml3input />分钟之前才可解绑</span><br>\r\n<span id=\"unbindtext\"></span></td>\r\n</tr>\r\n<tr malt=\"每天修改解绑机器码绑定，也就是换电脑的次数\" class=\"unbindpc_set\">\r\n<td align=right>可解绑机器码</td>\r\n<td align=left><input type=\"text\" name=\"unbindpc_times\" class=\"smlinput\" value=\"";
echo $HY_970be7709f584ff59c["unbindpc_times"];
echo "\" >次</td>\r\n</tr>\r\n<tr malt=\"解绑扣时策略\" class=\"unbindpc_set\">\r\n<td align=right>解绑扣时策略</td>\r\n<td align=left>\r\n<input type=radio value='0' name=\"unbindpc_ctset\" id=\"unbindpc_ctset_0\"";
echo $HY_970be7709f584ff59c["unbindpc_ctset"] == "0" ? " checked" : "";
echo "><label for=\"unbindpc_ctset_0\">不扣时</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='1' name=\"unbindpc_ctset\" id=\"unbindpc_ctset_1\"";
echo $HY_970be7709f584ff59c["unbindpc_ctset"] == "1" ? " checked" : "";
echo "><label for=\"unbindpc_ctset_1\">只要解绑就扣时</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='2' name=\"unbindpc_ctset\" id=\"unbindpc_ctset_2\"";
echo $HY_970be7709f584ff59c["unbindpc_ctset"] == "2" ? " checked" : "";
echo "><label for=\"unbindpc_ctset_2\">超出解绑次数限制才扣时</label></td>\r\n</tr>\r\n<tr malt=\"每次修改解绑机器码绑定，也就是每次换电脑扣除的天数\" class=\"unbindpc_set\">\r\n<td align=right>解绑扣时</td>\r\n<td align=left><input maxlength=\"5\" type=\"text\" name=\"unbindpc_changetime\" class=\"smlinput\" value=\"";
echo $HY_970be7709f584ff59c["unbindpc_changetime"];
echo "\" >天</td>\r\n</tr>\r\n</table>\t\t\r\n</div>\r\n<div tbdid=\"18\">\r\n<table border=0  cellpadding=\"10\" cellspacing=\"5\" >\r\n<tr malt=\"这里可以设置某一种卡，一个帐号只能使用一次，比如你免费发布了一批天卡，只想一个用户最多使用一次的话就可以这样\">\r\n<td align=right>安全策略</td>\r\n<td align=left>帐号如果是无卡注册的，或使用过<select name=\"onetimeskeyattrid\">\r\n<option value=''>------不判断-------</option>\r\n";
echo hy_c79cc84a5c5725e920($HY_970be7709f584ff59c["id"], $HY_970be7709f584ff59c["onetimeskeyattrid"], 2);
echo "</select>， 就不能再使用该类卡充值。";

if ($HY_970be7709f584ff59c["id"] == 0) {
	echo "<span style='color:#f00'>注：该参数只能在添加软件并设置好软件卡类才可以设定</span>";
}

echo "</td>\r\n</tr>\r\n<tr malt=\"客户注册帐号时是否必须使用注册卡，如果你想让客户不使用注册卡就可以注册帐号，请在该项填写一个有效的时间，1小时约等于0.04天\">\r\n<td align=right>无卡注册帐号</td>\r\n<td align=left>赠送<input type=\"text\" maxlength=\"5\" name=\"nokeyreg\" value=\"";
echo $HY_970be7709f584ff59c["nokeyreg"];
echo "\" class=\"smlinput\">天，<input type=\"text\" maxlength=\"5\" name=\"nokeyreg_points\" value=\"";
echo $HY_970be7709f584ff59c["nokeyreg_points"];
echo "\" class=\"smlinput\">点   * <span style=\"color:#f00;\">0.00天为必须使用注册卡才可以注册帐号</span></td>\r\n</tr>\r\n<tr>\r\n<td align=right>无卡注册帐号设置</td>\r\n<td align=left ><span malt=\"未勾选表示同一电脑只能无卡注册该软件的帐号一次<br>勾选表示同一电脑不限制无卡注册该软件帐号的次数\">可多次注册帐号</span>=<input type='checkbox' ";

if ($HY_970be7709f584ff59c["freeregs"] == 1) {
	echo "checked";
}

echo " name='freeregs' value='1' id='freeregs'>，  \r\n&nbsp;&nbsp;帐号标签=<input type=\"text\" maxlength=\"100\" name=\"fregtag\" value=\"";
echo $HY_970be7709f584ff59c["fregtag"];
echo "\" class=\"smlinput\">，\r\n&nbsp;&nbsp;帐号附属性=<input type=\"text\" maxlength=\"100\" name=\"fregattr\" value=\"";
echo $HY_970be7709f584ff59c["fregattr"];
echo "\" class=\"smlinput\">，\r\n&nbsp;&nbsp;帐号所属后台用户=<select name=\"fregmanagerid\">\r\n<option value=0>作者自己</option>\r\n";
$HY_e65c82453cfd0d428e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and level=6 and isdel=0");

if (!empty($HY_e65c82453cfd0d428e)) {
	foreach ($HY_e65c82453cfd0d428e as $HY_906f36b82c40e2240c ) {
		echo "<option value=" . $HY_906f36b82c40e2240c["id"];

		if ($HY_906f36b82c40e2240c["id"] == $HY_970be7709f584ff59c["fregmanagerid"]) {
			echo " selected";
		}

		echo ">代理：" . $HY_906f36b82c40e2240c["username"] . "</option>";
	}
}

echo "</select></td>\r\n</tr>\r\n<tr malt=\"例如你想实现三张周卡包月的功能，此项就可以设置成一次性充值3张周卡，赠送9天\">\r\n<td align=right>充值套餐</td>\r\n<td align=left>在充值的时候一次性充值<input type=\"text\" name=\"czzs_number\" value=\"";
echo $HY_970be7709f584ff59c["czzs_number"];
echo "\" class=\"sml2input\">张\r\n<select name=\"czzs_keytypeid\">\r\n<option value=''>------不使用充值套餐-------</option>\r\n";
echo hy_c79cc84a5c5725e920($HY_970be7709f584ff59c["id"], $HY_970be7709f584ff59c["czzs_keytypeid"], 2);
echo "</select>，赠送<input type=\"text\" maxlength=\"5\" name=\"czzs_cday\" value=\"";
echo $HY_970be7709f584ff59c["czzs_cday"];
echo "\" class=\"smlinput\">天，<input type=\"text\" maxlength=\"5\" name=\"czzs_points\" value=\"";
echo $HY_970be7709f584ff59c["czzs_points"];
echo "\" class=\"smlinput\">点</td>\r\n</tr>\r\n<tr malt=\"子帐号，指客户注册或充值时在用户名那填写的帐号<br>父帐号，指客户注册帐号时在推广那里填写的帐号\">\r\n<td align=right valign=top>推广赠送</td>\r\n<td align=left style=\"line-height:200%\">\r\n<select name=\"tg_addtimetype\">\r\n<option value=0 ";
echo $HY_970be7709f584ff59c["tg_addtimetype"] == 0 ? " selected" : "";
echo ">不开启推广增送</option>\r\n<option value=1 ";
echo $HY_970be7709f584ff59c["tg_addtimetype"] == 1 ? " selected" : "";
echo ">只在注册操作加时</option>\r\n<option value=2 ";
echo $HY_970be7709f584ff59c["tg_addtimetype"] == 2 ? " selected" : "";
echo ">注册和充值操作都加时</option>\r\n</select><br>\r\n<p>子帐号赠时 = 子帐号使用的注册卡天数 <span style=\"color:#f00\">╳</span> <input type='text' maxlength=\"2\" class=\"sml2input\" name=tg_newuseraddtime value=\"";
echo $HY_970be7709f584ff59c["tg_newuseraddtime"];
echo "\">%，点数 <span style=\"color:#f00\">╳</span> <input type='text' maxlength=\"2\" class=\"sml2input\" name=tg_points1 value=\"";
echo $HY_970be7709f584ff59c["tg_points1"];
echo "\">%  【注：0为不给子帐号加时】</p>\r\n<p>父帐号赠时 = 子帐号使用的注册卡天数 <span style=\"color:#f00\">╳</span> <input type='text' maxlength=\"2\" class=\"sml2input\" name=tg_parentuseraddtime value=\"";
echo $HY_970be7709f584ff59c["tg_parentuseraddtime"];
echo "\">%，点数 <span style=\"color:#f00\">╳</span> <input type='text' maxlength=\"2\" class=\"sml2input\" name=tg_points2 value=\"";
echo $HY_970be7709f584ff59c["tg_points2"];
echo "\">% 【注：0为不给父帐号加时】</p>\r\n<p>比如你月卡送5天：5 除以 30(月卡)  再乘以 100  四舍五入取整 得到的值(5 / 30)*100 ≈ 17  将17填到相应框 <br>\r\n比如你周卡送1天：1 除以 7(周卡)  再乘以 100  四舍五入取整 得到的值(1 / 7)*100 ≈ 14 将14填到相应框 </p>\r\n\r\n</td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"19\">\r\n<table border=0  cellpadding=\"10\" cellspacing=\"5\" >\r\n<tr malt=\"该机制可以自动锁定异常登陆的帐号，并将该用户的机器码列入黑名单。两个参数任何一个参数为0将不自动锁定\">\r\n<td align=right>自动锁定</td>\r\n<td align=left>单用户<input type=\"text\" name=\"autolock_time\" value=\"";
echo $HY_970be7709f584ff59c["autolock_time"];
echo "\" class=\"sml2input\">分钟内登陆超过<input type=\"text\" name=\"autolock_times\" value=\"";
echo $HY_970be7709f584ff59c["autolock_times"];
echo "\" class=\"sml2input\">次，自动锁定该用户</td>\r\n</tr>\r\n<tr malt=\"该机制可以自动锁定异常登陆的帐号，并将该用户的机器码列入黑名单。两个参数任何一个参数为0将不自动锁定\">\r\n<td align=right>自动锁定</td>\r\n<td align=left>单用户<input type=\"text\" name=\"autolock_time_ip\" value=\"";
echo $HY_970be7709f584ff59c["autolock_time_ip"];
echo "\" class=\"sml2input\">分钟内登陆过的IP数量超出<input type=\"text\" name=\"autolock_ipnum\" value=\"";
echo $HY_970be7709f584ff59c["autolock_ipnum"];
echo "\" class=\"sml2input\">个，自动锁定该用户</td>\r\n</tr>\t\t\t\r\n<tr malt=\"\">\r\n<td align=right malt=\"服务端数据公钥加密，客户端私钥解密，有效的防止IP劫持\">RSA不对称算法</td>\r\n<td align=left>\r\n<input type=radio value='1' name=\"rsaenable\" id=\"rsaenable_1\"";
echo $HY_970be7709f584ff59c["rsaenable"] == 1 ? " checked" : "";
echo "><label for=\"rsaenable_1\" >启用</label>，\r\n&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value='2' name=\"rsaenable\" id=\"rsaenable_2\"";
echo $HY_970be7709f584ff59c["rsaenable"] == 2 ? " checked" : "";
echo "><label for=\"rsaenable_2\" >不启用</label>，\r\n&nbsp;&nbsp;&nbsp;&nbsp;<input type=radio value='0' name=\"rsaenable\" id=\"rsaenable_0\"";
echo $HY_970be7709f584ff59c["rsaenable"] == 0 ? " checked" : "";
echo "><label for=\"rsaenable_0\" >使用全局设置</label>\r\n<span style=\"color:#ff0000\">*全局设置指的是使用高级管理，系统参数设置里的RSA设置项</span>\r\n</td></tr>\r\n<tr malt=\"\">\r\n<td align=right>RSA私钥 Private Exp.(D)</td>\r\n<td align=left><input class=\"longinput\" onClick=this.select() type=\"text\" maxlength=\"256\" name=\"rsaekey\" id=\"rsaekey\" value='";
echo $HY_970be7709f584ff59c["rsaekey"];
echo "' /> * <a href=\"http://www.hphu.com/_soft/pan.php?id=rsatool\" target=_blank>请使用RSATool工具计算获取 (256位)</a>\r\n</td></tr>\r\n<tr malt=\"请使用RSATool工具计算 Modulus(N)\">\r\n<td align=right>RSA模数 Modulus(N)</td>\r\n<td align=left><input class=\"longinput\" onClick=this.select() type=\"text\" maxlength=\"256\" name=\"rsankey\" id=\"rsankey\" value='";
echo $HY_970be7709f584ff59c["rsankey"];
echo "' /> * <a href=\"http://www.hphu.com/_soft/pan.php?id=rsatool\" target=_blank>请使用RSATool工具计算获取 (256位)</a>\r\n</td></tr>\r\n\r\n<tr malt=\"机器码黑名单\">\r\n<td valign=top>机器码和IP黑名单<br>每个IP或机器码一行</td>\r\n<td align=left><textarea name=\"mac_blacklist\" class=\"softtextarea\">";
echo htmlspecialchars($HY_970be7709f584ff59c["mac_blacklist"] == "" ? "" : $HY_970be7709f584ff59c["mac_blacklist"]);
echo "</textarea></td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"14\" malt=\"与客户端通讯的自定义高级接口，按php语法填写\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\">\r\n<tr>\r\n<td align=right>ADVAPI</td>\r\n<td align=left><span style=\"font-size:14px;font-weight:700\">advapi接口返回值不能是三位整数，会被当成错误号来处理<br></span>\t\r\n效验全安接口密码：<input type=password name='syspassword' value=''>\t修改或添加软件必须输入正确的安全接口密码<br>\t\t\r\n<textarea name=\"advapi\" class=\"softtextarea\">";
echo htmlspecialchars(base64_decode($HY_970be7709f584ff59c["advapi"]));
echo "</textarea><br>\t\t\t\t\t\r\nPHP参考手册:<a href=\"http://www.php100.com/manual/w3school/php/index.asp.html\" target=\"_blank\">http://www.php100.com/manual/w3school/php/index.asp.html</a>\t</td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"15\" malt=\"这里填软件简介，会显示在销售系统里，支持html语法\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\">\r\n<tr>\r\n<td align=right valign=top>软件简介</td>\r\n<td align=left><textarea name=\"softintro\" class=\"softtextarea ckeditor\">";
echo htmlspecialchars($HY_970be7709f584ff59c["softintro"] == "" ? "" : base64_decode($HY_970be7709f584ff59c["softintro"]));
echo "</textarea></td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"16\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\">\r\n<tr malt=\"如果选是的话，有新版本无论客户有没有勾选检查更新都会强制让用户更新软件<br>选否的话，有新版本的话只有当客户勾选了检查更新才会更新客户端\">\r\n<td align=right>强制更新</td>\r\n<td align=left>\r\n<input type=radio value=1 name=\"ismustupdate\" id=\"ismustupdate_2\"";
echo $HY_970be7709f584ff59c["ismustupdate"] == "1" ? " checked" : "";
echo "><label for=\"ismustupdate_2\">是</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value=0 name=\"ismustupdate\" id=\"ismustupdate_1\"";
echo $HY_970be7709f584ff59c["ismustupdate"] == "0" ? " checked" : "";
echo "><label for=\"ismustupdate_1\">否</label></td>\r\n</tr>\r\n<tr malt=\"你发布的软件最新版本号，只能是一个整数\">\r\n<td align=right>最新软件版本</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"6\" name=\"softversion\" value=\"";
echo $HY_970be7709f584ff59c["softversion"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"自动更新时，软件最新版本的下载地址，只能是exe文件地址，如果有多个文件请用winrar制作exe的自解压包\">\r\n<td align=right>升级包下载地址</td>\r\n<td align=left><input class=\"biginput\" type=\"text\" maxlength=\"256\" name=\"softdownurl\" value=\"";
echo hy_c447d0a25ad6071dc7(base64_decode($HY_970be7709f584ff59c["softdownurl"]));
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"这里填更新日志，客户端自动更新调用自动更新程序update.exe时会显示该段文本，支持html语法\">\r\n<td align=right valign=top>更新日志</td>\r\n<td align=left><textarea name=\"updatelog\" class=\"softtextarea ckeditor\">";
echo htmlspecialchars($HY_970be7709f584ff59c["updatelog"] == "" ? "" : base64_decode($HY_970be7709f584ff59c["updatelog"]));
echo "</textarea></td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"17\" malt=\"这里填公告，可通过客户端API获取，不支持html语法\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\">\r\n<tr>\r\n<td align=right valign=top>软件公告</td>\r\n<td align=left><textarea name=\"softnotice\" class=\"softtextarea\">";
echo htmlspecialchars($HY_970be7709f584ff59c["softnotice"] == "" ? "" : base64_decode($HY_970be7709f584ff59c["softnotice"]));
echo "</textarea></td>\r\n</tr>\r\n</table></div>\r\n<div tbdid=\"20\" malt=\"售卡系统自动发送邮件时，附件里附加的文本\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\">\r\n<tr>\r\n<td align=right valign=top>售卡系统自动发送邮件时<br>附加的邮件正文内容</td>\r\n<td align=left><textarea name=\"mailtext\" class=\"softtextarea ckeditor\">";
echo htmlspecialchars($HY_970be7709f584ff59c["mailtext"] == "" ? "" : base64_decode($HY_970be7709f584ff59c["mailtext"]));
echo "</textarea></td>\r\n</tr>\r\n</table></div>\r\n</div>\r\n<div>&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit class=\"submitbtn\" id=\"softsubmit\" value=\"";
echo $HY_ab20c9e23086ff8b04;
echo "\"></div>\r\n</div>\t\t\r\n</form>\r\n<div style=\"display:none\">\r\n<div id=\"ustatus\"><select name=\"softstatus\">\r\n<option value=0 ";
echo $HY_970be7709f584ff59c["softstatus"] == 0 ? " selected" : "";
echo ">正常───USOFT───</option>\r\n<option value=1 ";
echo $HY_970be7709f584ff59c["softstatus"] == 1 ? " selected" : "";
echo ">停止使用</option>\r\n<option value=2 ";
echo $HY_970be7709f584ff59c["softstatus"] == 2 ? " selected" : "";
echo ">禁止注册新帐号</option>\r\n<option value=3 ";
echo $HY_970be7709f584ff59c["softstatus"] == 3 ? " selected" : "";
echo ">禁止用户充值</option>\r\n<option value=4 ";
echo $HY_970be7709f584ff59c["softstatus"] == 4 ? " selected" : "";
echo ">禁止注册新帐号和充值</option>\r\n</select></div>\r\n<div id=\"kstatus\"><select name=\"softstatus\">\r\n<option value=0 ";
echo $HY_970be7709f584ff59c["softstatus"] == 0 ? " selected" : "";
echo ">正常───KSOFT───</option>\r\n<option value=1 ";
echo $HY_970be7709f584ff59c["softstatus"] == 1 ? " selected" : "";
echo ">停止使用</option>\r\n<option value=2 ";
echo $HY_970be7709f584ff59c["softstatus"] == 2 ? " selected" : "";
echo ">禁止新卡号激活</option>\r\n</select>\r\n</div>\r\n</div>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
