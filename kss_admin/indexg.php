<?php

function HY_f903ab8f642fefdbe2($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_647f70962176e88d39($HY_419aaffd4c02f01e5a, $HY_62955624f4040fed30 = 0)
{
	global $HY_82d6536edf704aabc5;
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_tb_log_login", $HY_419aaffd4c02f01e5a, "notsync");

	if ($HY_173d86697f24ffa1ee !== false) {
		return true;
	}
	else {
		if ($HY_62955624f4040fed30 == 1) {
			return false;
		}

		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("repair table kss_tb_log_login", "notsync");
		return wmlog($HY_419aaffd4c02f01e5a, 1);
	}
}

function HY_8a3137ffd272b6cdc0()
{
	$HY_53db4b003f20bc1e67 = array("这", "是", "一", "个", "密", "码", "字", "符", "集", "那", "基", "础", "训", "练", "的", "项", "目", "着", "实", "给", "了", "广", "大", "宇", "战", "爱", "好", "者", "一", "个", "全", "新", "的", "观", "点", "九", "级", "和", "十", "级", "跟", "一", "般", "等", "级", "不", "同", "学", "在", "做", "这", "个", "测", "试", "的", "时", "候", "由", "于", "难", "度", "过", "高", "所", "以", "观", "看", "者", "可", "以", "清", "楚", "地", "观", "看", "到", "其", "中", "的", "难", "度");
	$HY_69ec308529dc42d4be = "";

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < 8; $HY_fc12e3cf6043961fb3++) {
		$HY_69ec308529dc42d4be .= $HY_53db4b003f20bc1e67[mt_rand(0, 80)];
	}

	return $HY_69ec308529dc42d4be;
}

function Notice($tmp, $tmp2 = 1)
{
	$_SESSION["wrong"] = $tmp;
	exit("<script>location.href='index.php?nc=" . time() . "';</script>");
}

function HY_88368e68f11f76796d($HY_dce8088aa7714dd0e0)
{
	$HY_4b3a7066c622d0d129 = file_get_contents($HY_dce8088aa7714dd0e0);
	$HY_d530ee44053e535c35[1] = ord(substr($HY_4b3a7066c622d0d129, 0, 1));
	$HY_d530ee44053e535c35[2] = ord(substr($HY_4b3a7066c622d0d129, 1, 1));
	$HY_d530ee44053e535c35[3] = ord(substr($HY_4b3a7066c622d0d129, 2, 1));
	if (($HY_d530ee44053e535c35[1] == 239) && ($HY_d530ee44053e535c35[2] == 187) && ($HY_d530ee44053e535c35[3] == 191)) {
		$HY_100427698ff0b7620d = substr($HY_4b3a7066c622d0d129, 3);
		file_put_contents($HY_dce8088aa7714dd0e0, $HY_100427698ff0b7620d);
	}
}

require ("../kss_inc/inc.php");

if (is_file("../install/index.php")) {
	header("location:../install/index.php");
	exit();
}

$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "g", "sql", "main");

if ($HY_d762a272713d62924f == "exit") {
	$HY_82d6536edf704aabc5 = new mysql_cls();
	$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "g", "int", 0);
	$HY_a2c2d4a90a9d6060a3 = hy_ba8120f86a7df1aecc("linecode", "g", "sql", 0);
	$_SESSION["kss_manager"] = NULL;
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `linecode`='" . hy_6bfeee86cee6e24af6(48) . "' where `id`=" . $HY_365893812300a028d8 . " and  `linecode`='" . $HY_a2c2d4a90a9d6060a3 . "'", "notsyne");
}

if ($HY_d762a272713d62924f == "chklogin") {
	$HY_20c31334382a191162 = "";
	$HY_7b8e57bcbe09809a9d = hy_ba8120f86a7df1aecc("loginimg", "p", "sql", "");
	$HY_241412be0daddcee1f = hy_ba8120f86a7df1aecc("username", "p", "sql", "");
	$HY_729b908f51ba85e460 = hy_ba8120f86a7df1aecc("password", "p", "sql", "");
	$HY_b6925775f05fcc5edf = array();
	$HY_b6925775f05fcc5edf["pid"] = 0;
	$HY_b6925775f05fcc5edf["managerid"] = 0;
	$HY_b6925775f05fcc5edf["logintime"] = time();
	$HY_b6925775f05fcc5edf["loginip"] = $HY_063c1f55878eb36837;
	if ((strlen($HY_241412be0daddcee1f) < 5) || (strlen($HY_729b908f51ba85e460) < 5)) {
		notice("用户名或密码长度小于5个字符", 1);
	}

	$HY_82d6536edf704aabc5 = new mysql_cls();
	$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
	$HY_970be7709f584ff59c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `username`='" . $HY_241412be0daddcee1f . "' and isdel=0");

	if (empty($HY_970be7709f584ff59c)) {
		notice("用户名或密码错误！");
	}

	$HY_4331e4458cfbbf8a57 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_log_login where `managerid`=" . $HY_970be7709f584ff59c["id"] . " order by id desc limit 0,5");

	if (!empty($HY_4331e4458cfbbf8a57)) {
		$HY_e063c928cc3706d2d2 = false;
		$HY_5708dcfb72e8924044 = array();

		foreach ($HY_4331e4458cfbbf8a57 as $HY_a1e3f7957087c929e0 ) {
			if ($HY_a1e3f7957087c929e0["logintype"] == 1) {
				$HY_e063c928cc3706d2d2 = true;
				break;
			}
			else {
				$HY_5708dcfb72e8924044[] = $HY_a1e3f7957087c929e0["loginip"];
			}
		}

		if (($HY_e063c928cc3706d2d2 == false) && (count($HY_4331e4458cfbbf8a57) == 5) && in_array($HY_063c1f55878eb36837, $HY_5708dcfb72e8924044)) {
			notice("该帐号连续五次登陆失败，您的IP已被锁定，如果你是合法用户请更换IP重试！");
		}
	}

	$HY_b6925775f05fcc5edf["pid"] = $HY_970be7709f584ff59c["pid"];
	$HY_b6925775f05fcc5edf["managerid"] = $HY_970be7709f584ff59c["id"];

	if (md5($HY_729b908f51ba85e460) != $HY_970be7709f584ff59c["password"]) {
		$HY_b6925775f05fcc5edf["logintype"] = 4;
		hy_647f70962176e88d39($HY_b6925775f05fcc5edf);
		notice("用户名或密码错误！", 1);
	}

	if ($HY_970be7709f584ff59c["level"] < 8) {
		if ($HY_970be7709f584ff59c["level"] == 6) {
			$HY_d83bf57cf9d2dbfac5 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_970be7709f584ff59c["pmid"]);

			if ($HY_d83bf57cf9d2dbfac5["endtime"] < hy_cf2f0673819dddd4a1()) {
				notice("上级" . $HY_3fb3415441688353e5[$HY_d83bf57cf9d2dbfac5["level"]] . "帐号已过期" . $HY_d83bf57cf9d2dbfac5["endtime"]);
			}

			if ($HY_d83bf57cf9d2dbfac5["islock"] == 1) {
				notice("上级" . $HY_3fb3415441688353e5[$HY_d83bf57cf9d2dbfac5["level"]] . "帐号被锁定! [锁定原因：" . $HY_d83bf57cf9d2dbfac5["lockedinter"] . "]");
			}
		}

		$HY_d83bf57cf9d2dbfac5 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where pid=" . $HY_970be7709f584ff59c["pid"] . " and level>7");

		if ($HY_d83bf57cf9d2dbfac5["endtime"] < hy_cf2f0673819dddd4a1()) {
			notice("上级" . $HY_3fb3415441688353e5[8] . "帐号已过期" . $HY_d83bf57cf9d2dbfac5["endtime"]);
		}

		if ($HY_d83bf57cf9d2dbfac5["islock"] == 1) {
			notice("上级" . $HY_3fb3415441688353e5[8] . "帐号被锁定! [锁定原因：" . $HY_d83bf57cf9d2dbfac5["lockedinter"] . "]");
		}
	}

	if ($HY_970be7709f584ff59c["islock"] == "1") {
		$HY_b6925775f05fcc5edf["logintype"] = 3;
		hy_647f70962176e88d39($HY_b6925775f05fcc5edf);
		notice("您的帐号被锁定，" . (empty($HY_970be7709f584ff59c["lockedinter"]) ? "锁定原因不明" : $HY_970be7709f584ff59c["lockedinter"]) . "！", 1);
	}

	if ($HY_970be7709f584ff59c["endtime"] < hy_cf2f0673819dddd4a1()) {
		$HY_b6925775f05fcc5edf["logintype"] = 2;
		hy_647f70962176e88d39($HY_b6925775f05fcc5edf);
		$HY_24d8b9ac6b4d4723f2 = "";
		if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && ($HY_970be7709f584ff59c["level"] == 8)) {
			$HY_24d8b9ac6b4d4723f2 = "，现在就去<a href=http://www.Dsret.com/free.html>延长帐号有效期</a>";
		}

		notice("您的帐号已过期，过期日期" . $HY_970be7709f584ff59c["endtime"] . $HY_24d8b9ac6b4d4723f2, 1);
	}

	$HY_a2c2d4a90a9d6060a3 = hy_6bfeee86cee6e24af6(48);
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `linecode`='" . $HY_a2c2d4a90a9d6060a3 . "',`lastlogintime`='" . hy_cf2f0673819dddd4a1() . "',`lastloginip`=" . $HY_063c1f55878eb36837 . " where `id`=" . $HY_970be7709f584ff59c["id"], "notsync");
	$HY_b6925775f05fcc5edf["logintype"] = 1;
	hy_647f70962176e88d39($HY_b6925775f05fcc5edf);
	$_SESSION["kss_manager"] = $HY_970be7709f584ff59c["id"] . "," . $HY_241412be0daddcee1f . "," . md5($HY_729b908f51ba85e460) . "," . $HY_a2c2d4a90a9d6060a3;

	if (BINDIP == 1) {
		$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"] . hy_cb508d896b2e2fcfba());
	}
	else {
		$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"]);
	}

	$_SESSION["wrong"] = "";
	if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && ($HY_970be7709f584ff59c["level"] == 8) && (substr($HY_970be7709f584ff59c["endtime"], 0, 4) < 2038) && ((strtotime($HY_970be7709f584ff59c["endtime"]) - time()) < (7 * 86400))) {
		echo "<html><head><meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>";
		echo "<title>登陆成功--友情提示</title><style>*{font-size:12px}</style></head><body>";
		echo "你帐号可用时间不足一星期(" . $HY_970be7709f584ff59c["endtime"] . ")，";
		echo "请及时<a href=http://www.Dsret.com/free.html target=_blank style='color:red'>延期</a>以免影响正常使用。<br><br>";
		echo "<a href='admin.php?nc=" . time() . "' style='color:red'>进入后台</a>";
		echo "<body></html>";
		exit();
	}

	echo "<html><head><meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>";
	echo "<meta http-equiv='refresh' content='0.1;url=admin.php?nc=" . time() . "'>";
	echo "<title>登陆成功--跳转中</title><style>*{font-size:12px}</style></head><body><script>location.href='admin.php?nc=" . time() . "';</script>";
	echo "<a href='admin.php?nc=" . time() . "'>正在转向中，如果长时间没跳转请单击这里</a>";
	echo "<body></html>";
	exit();
}

$HY_160dfd176db2190ed2 = "";
$HY_6d2647162c793d2b54 = "";
hy_88368e68f11f76796d(KSSINCDIR . "_config.php");
hy_88368e68f11f76796d(KSSINCDIR . "inc.php");
hy_88368e68f11f76796d(KSSROOTDIR . "kss_api" . DIRECTORY_SEPARATOR . "BIG5.php");
hy_88368e68f11f76796d(KSSROOTDIR . "kss_api" . DIRECTORY_SEPARATOR . "GBK.php");
hy_88368e68f11f76796d(KSSROOTDIR . "kss_api" . DIRECTORY_SEPARATOR . "io_ext.php");
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>";
echo ADMINWEBNAME;
echo "  </title>\r\n<meta HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=utf-8\" />\r\n<meta name=\"服务端版本\" content=\"Version ";
echo KSSVERSION;
echo "\" />\r\n<meta name=\"开发商\" content=\"可可网络验证系统\" />\r\n";
echo "\t\t<head><link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> \t</head>\t<body>\t<div class=\"message warning\">\t<div class=\"inset\">\t\t<div class=\"login-head\"><h1> Login  -  ";
echo ADMINWEBNAME;
echo " </h1><br>";

if (empty($_SESSION["wrong"])) {
	$_SESSION["wrong"] = "";
}
else {
	echo $_SESSION["wrong"];
}

echo "<div class=\"alert-close\"> </div> \t\t\t\t\t</div>\t\t\t<form id=\"find_manager\" action=\"index.php?action=chklogin\" method=\"post\">\t\t\t\t<li>\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Username\" name=\"username\" id=\"username\" maxlength=\"15\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Username';}\">\t\t\t\t</li>\t\t\t\t\t<div class=\"clear\"> </div>\t\t\t\t<li>\t\t\t\t\t<input type=\"password\" value=\"Password\"id=\"password\" name=\"password\"  maxlength=\"15\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\"> \t\t\t\t</li>\t\t\t\t<div class=\"clear\"> </div>\t\t\t\t\t<input type=\"submit\"   value=\"Sign in\" >\t\t\t\t\t \t\t\t\t\t\t\t  <div class=\"clear\">  </div>\t\t\t\t\t</div>\t\t\t\t\t\t\t\t</form>\t\t\t</div>\t\t\t\t\t\t\t</div>\t\t</div>\t\t<div class=\"clear\"> </div>\t<!--- footer --->\t<div class=\"footer\"><br><p>";

if (ICPNUM != "") {
	echo "<a href=http://www.miibeian.gov.cn/ target=_blank>" . ICPNUM . "</a> ";
}

echo "\t<br> Copyright &copy; 2016.</p>\t</div>\t</body>\t</html>";

?>
