<?php

function HY_cd4cde23518727dee8($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
hy_af470935131a2269b8();
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);
if ((1000 < LICTYPE) && ($HY_825ad51e000ddc6ca5["level"] != 9)) {
	hy_bd307d155f057feb55("特殊服务器，禁止后台添加用户！");
}

$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sqljs", "");
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165 . " and pid=" . $HY_825ad51e000ddc6ca5["pid"]);

if (empty($HY_810d15d31408c982b2)) {
	hy_bd307d155f057feb55("软件未找到");
}

if ($HY_810d15d31408c982b2["softmode"] != "USOFT") {
	hy_bd307d155f057feb55("只有用户名+密码模式登陆的软件才可以用本页面添加用户。");
}

if ($HY_040af70e369786c2e4 == "ok") {
	$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", 0);
	$HY_adfed9c2e13a3b63f8 = hy_ba8120f86a7df1aecc("linknum", "gp", "int", 1);
	$HY_fd266d63af4d47cce1 = hy_ba8120f86a7df1aecc("points", "gp", "int", 0);
	$HY_04e3f3816daa4e5cbf = hy_ba8120f86a7df1aecc("tag", "gp", "sqljs", "");
	$HY_32876775e494d9107a = hy_ba8120f86a7df1aecc("bdinfo", "gp", "sqljs", "");
	$HY_0cb2933296ab6b35ef = hy_ba8120f86a7df1aecc("intro", "gp", "sqljs", "");
	$HY_06bf586e2108bd445b = hy_ba8120f86a7df1aecc("keyextattr", "gp", "sqljs", "");

	if ($HY_fd266d63af4d47cce1 < 0) {
		hy_bd307d155f057feb55("点数不能小于0");
	}

	if ($HY_adfed9c2e13a3b63f8 < 1) {
		hy_bd307d155f057feb55("通道数不能小于1");
	}

	if (isset($_POST["moreadd"]) && ($_POST["moreadd"] == 1)) {
		$HY_a0b5f63634a117d857 = hy_ba8120f86a7df1aecc("moreuserdata", "gp", "sqljs", "");
		$HY_a0b5f63634a117d857 = trim($HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\r", "", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_a0b5f63634a117d857 = str_replace("\n\n", "\n", $HY_a0b5f63634a117d857);
		$HY_9ce04dbe16eedaabcc = explode("\n", $HY_a0b5f63634a117d857);

		if (count($HY_9ce04dbe16eedaabcc) < 1) {
			hy_bd307d155f057feb55("多用户数据为空");
		}

		foreach ($HY_9ce04dbe16eedaabcc as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
			$HY_8f3908c623538f3480 = explode(",", $HY_39f33d52374bdc42f7);

			if (count($HY_8f3908c623538f3480) != 4) {
				hy_bd307d155f057feb55("数据格式错误，【帐号,密码,安全密码,天数】。" . $HY_39f33d52374bdc42f7);
			}

			if (!is_numeric($HY_8f3908c623538f3480[3])) {
				hy_bd307d155f057feb55("数据格式错误,天数应为数字。" . $HY_39f33d52374bdc42f7);
			}

			if (strlen($HY_8f3908c623538f3480[0]) < 3) {
				hy_bd307d155f057feb55("数据格式错误,用户名长度小于5位。" . $HY_39f33d52374bdc42f7);
			}

			if (strlen($HY_8f3908c623538f3480[1]) < 5) {
				hy_bd307d155f057feb55("数据格式错误,用户密码长度小于5位。" . $HY_39f33d52374bdc42f7);
			}

			if (strlen($HY_8f3908c623538f3480[2]) < 8) {
				hy_bd307d155f057feb55("数据格式错误,安全密码长度小于8位。" . $HY_39f33d52374bdc42f7);
			}

			if (!is_numeric($HY_8f3908c623538f3480[3])) {
				hy_bd307d155f057feb55("数据格式错误,天数应为数字。" . $HY_39f33d52374bdc42f7);
			}

			if (1000 < $HY_8f3908c623538f3480[3]) {
				hy_bd307d155f057feb55("数据格式错误,天数应小于1000。" . $HY_39f33d52374bdc42f7);
			}
		}

		$HY_5eee171f8e165c5311 = "本次操作成功的帐号：<br>";

		foreach ($HY_9ce04dbe16eedaabcc as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
			$HY_8f3908c623538f3480 = explode(",", $HY_39f33d52374bdc42f7);
			$HY_241412be0daddcee1f = $HY_8f3908c623538f3480[0];
			$HY_729b908f51ba85e460 = $HY_8f3908c623538f3480[1];
			$HY_c7be737ddc83635691 = $HY_8f3908c623538f3480[2];
			$HY_95519072c712a1f22d = $HY_8f3908c623538f3480[3];
			$HY_95519072c712a1f22d = number_format($HY_95519072c712a1f22d, 2, ".", "");
			$HY_6fa4d98147b8283fa9 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where username='" . $HY_241412be0daddcee1f . "'");

			if (!empty($HY_6fa4d98147b8283fa9)) {
				hy_bd307d155f057feb55("已存在同名帐号，请修改帐号名！" . $HY_39f33d52374bdc42f7 . "<br><br>" . $HY_5eee171f8e165c5311);
			}

			if ($HY_95519072c712a1f22d < 0) {
				hy_bd307d155f057feb55("天数不能小于0<br><br>" . $HY_5eee171f8e165c5311);
			}

			if (PETIME <= time() + ($HY_95519072c712a1f22d * 86400)) {
				hy_bd307d155f057feb55("当前用户最大天数可设置为" . round((PETIME - time() - 86400) / 86400, 2) . "<br><br>" . $HY_5eee171f8e165c5311);
			}

			$HY_e88cda0e119587f48e = 0;
			$HY_958d1aa0352dc4fe37 = time();
			$HY_b75f56eede4e205431 = $HY_958d1aa0352dc4fe37;
			$HY_77592321965a3ce182 = $HY_958d1aa0352dc4fe37 + (86400 * $HY_95519072c712a1f22d);
			$HY_3b0b021af5afdd284c = 0;
			$HY_2b45320da136061ada = array();
			$HY_2b45320da136061ada["managerid"] = $HY_a49db761d2702b25cf;
			$HY_2b45320da136061ada["username"] = $HY_241412be0daddcee1f;
			$HY_2b45320da136061ada["password"] = $HY_729b908f51ba85e460;
			$HY_2b45320da136061ada["password2"] = $HY_c7be737ddc83635691;
			$HY_2b45320da136061ada["cday"] = $HY_95519072c712a1f22d;
			$HY_2b45320da136061ada["linknum"] = $HY_adfed9c2e13a3b63f8;
			$HY_2b45320da136061ada["points"] = $HY_fd266d63af4d47cce1;
			$HY_2b45320da136061ada["tag"] = $HY_04e3f3816daa4e5cbf;
			$HY_2b45320da136061ada["bdinfo"] = $HY_32876775e494d9107a;
			$HY_2b45320da136061ada["intro"] = $HY_0cb2933296ab6b35ef;
			$HY_2b45320da136061ada["keyextattr"] = $HY_06bf586e2108bd445b;
			$HY_2b45320da136061ada["cztimes"] = $HY_e88cda0e119587f48e;
			$HY_2b45320da136061ada["addtime"] = $HY_958d1aa0352dc4fe37;
			$HY_2b45320da136061ada["starttime"] = $HY_b75f56eede4e205431;
			$HY_2b45320da136061ada["endtime"] = $HY_77592321965a3ce182;
			$HY_2b45320da136061ada["lasttime"] = $HY_3b0b021af5afdd284c;
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165, $HY_2b45320da136061ada, "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				hy_bd307d155f057feb55($HY_39f33d52374bdc42f7 . "    添加用户时出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br><br>" . $HY_5eee171f8e165c5311);
			}

			$HY_5eee171f8e165c5311 .= "," . $HY_241412be0daddcee1f;
		}

		hy_bd307d155f057feb55("批量添加用户成功");
	}
	else {
		$HY_241412be0daddcee1f = hy_ba8120f86a7df1aecc("username", "gp", "sqljs", "");
		$HY_729b908f51ba85e460 = hy_ba8120f86a7df1aecc("password", "gp", "sqljs", "");
		$HY_c7be737ddc83635691 = hy_ba8120f86a7df1aecc("password2", "gp", "sqljs", "");
		$HY_95519072c712a1f22d = hy_ba8120f86a7df1aecc("cday", "gp", "num", 0);
		$HY_95519072c712a1f22d = number_format($HY_95519072c712a1f22d, 2, ".", "");
		$HY_6fa4d98147b8283fa9 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where username='" . $HY_241412be0daddcee1f . "'");

		if (!empty($HY_6fa4d98147b8283fa9)) {
			hy_bd307d155f057feb55("已存在同名帐号，请修改帐号名！");
		}

		if ($HY_95519072c712a1f22d < 0) {
			hy_bd307d155f057feb55("天数不能小于0");
		}

		if (PETIME <= time() + ($HY_95519072c712a1f22d * 86400)) {
			hy_bd307d155f057feb55("当前用户最大天数可设置为" . round((PETIME - time() - 86400) / 86400, 2));
		}

		if (strlen($HY_241412be0daddcee1f) < 3) {
			hy_bd307d155f057feb55("用户名最少3位");
		}

		if (strlen($HY_729b908f51ba85e460) < 5) {
			hy_bd307d155f057feb55("用户密码最少5位");
		}

		if (strlen($HY_c7be737ddc83635691) < 8) {
			hy_bd307d155f057feb55("安全密码最少8位");
		}

		$HY_0ccc0f3f98ce3ff46a["password"] = $HY_729b908f51ba85e460;
		$HY_e88cda0e119587f48e = 0;
		$HY_958d1aa0352dc4fe37 = time();
		$HY_b75f56eede4e205431 = $HY_958d1aa0352dc4fe37;
		$HY_77592321965a3ce182 = $HY_958d1aa0352dc4fe37 + (86400 * $HY_95519072c712a1f22d);
		$HY_3b0b021af5afdd284c = 0;
		$HY_2b45320da136061ada = array();
		$HY_2b45320da136061ada["managerid"] = $HY_a49db761d2702b25cf;
		$HY_2b45320da136061ada["username"] = $HY_241412be0daddcee1f;
		$HY_2b45320da136061ada["password"] = $HY_729b908f51ba85e460;
		$HY_2b45320da136061ada["password2"] = $HY_c7be737ddc83635691;
		$HY_2b45320da136061ada["cday"] = $HY_95519072c712a1f22d;
		$HY_2b45320da136061ada["linknum"] = $HY_adfed9c2e13a3b63f8;
		$HY_2b45320da136061ada["points"] = $HY_fd266d63af4d47cce1;
		$HY_2b45320da136061ada["tag"] = $HY_04e3f3816daa4e5cbf;
		$HY_2b45320da136061ada["bdinfo"] = $HY_32876775e494d9107a;
		$HY_2b45320da136061ada["intro"] = $HY_0cb2933296ab6b35ef;
		$HY_2b45320da136061ada["keyextattr"] = $HY_06bf586e2108bd445b;
		$HY_2b45320da136061ada["cztimes"] = $HY_e88cda0e119587f48e;
		$HY_2b45320da136061ada["addtime"] = $HY_958d1aa0352dc4fe37;
		$HY_2b45320da136061ada["starttime"] = $HY_b75f56eede4e205431;
		$HY_2b45320da136061ada["endtime"] = $HY_77592321965a3ce182;
		$HY_2b45320da136061ada["lasttime"] = $HY_3b0b021af5afdd284c;
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165, $HY_2b45320da136061ada, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("添加用户时出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		hy_bd307d155f057feb55("添加用户" . $HY_241412be0daddcee1f . "成功");
	}
}

echo "<script>\r\nfunction closeat(){\r\n$(\".malertboxclosebtn\").click();\r\n}\r\n$(document).ready(function() {\t\r\n\r\n$(\"#chkmoreadd\").bind(\"click\",function(){\r\nif($(this).attr(\"checked\")==1){\r\n$(\".tr6\").hide();\r\n$(\".tr7\").show();\r\n}else{\r\n$(\".tr7\").hide();\r\n$(\".tr6\").show();\r\n}\r\n});\r\n\r\n$('#adduser').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)!='ok'){\r\nmalert(responseText);\r\n}else{\r\n$(\"#load__script\").append(responseText.substr(2)); \r\nwindow.setTimeout(\"closeat()\", 1);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n});\r\n</script>\r\n\r\n\r\n\r\n<div id='load__script'></div>\r\n<form id=\"adduser\" action=\"?action=adduser&op=ok&isajax=1&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\">\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_810d15d31408c982b2["softname"];
echo "添加新用户</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n\r\n\r\n<table border=0  cellpadding=\"0\" cellspacing=\"0\" width='100%'>\r\n<tr><td valitn=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\t\r\n<tr>\r\n<td align=right>批量添加用户</td>\r\n<td align=left><input type='checkbox' name='moreadd' value='1' id=\"chkmoreadd\"></td>\r\n</tr>\r\n<tr>\r\n<td align=right>所属</td>\r\n<td align=left><select name=managerid style=\"width:200px\">";
$HY_101c18af2e625cc35a = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and level<>7 order by level desc");

foreach ($HY_101c18af2e625cc35a as $HY_27029a3bdd154b6880 ) {
	echo "<option value=" . $HY_27029a3bdd154b6880["id"] . ">" . $HY_27029a3bdd154b6880["username"] . "</option>";
}

echo "</select></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>用户名</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"username\" value=\"\" /></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>用户密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\"  name=\"password\" value=\"\"/></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>安全密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"32\" name=\"password2\" value=\"\" ></td>\r\n</tr>\r\n<tr class=\"tr6\">\r\n<td align=right>天数</td>\r\n<td align=left><input class=\"midinput\" type=\"text\" maxlength=\"6\" name=\"cday\" value=\"0.04\" /> </td>\r\n</tr>\r\n<tr class=\"tr7\" style=\"display:none;\">\r\n<td align=right>批量添加用户数据</td>\r\n<td align=left>每行一条用户信息  用户信息格式 用户名,密码,安全密码,天数<br><textarea name=\"moreuserdata\"  rows=\"12\" cols=\"60\" />用户名,密码,安全密码,天数</textarea></td>\r\n</tr>\r\n</table></td><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>标签</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"tag\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>绑定信息</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"bdinfo\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>点数</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"points\" value=\"0\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>通道</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"4\" name=\"linknum\" value=\"1\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>附属性</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"keyextattr\" value=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=right>备注</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"100\" name=\"intro\" value=\"\" /></td>\r\n</tr>\r\n</table></td></tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input id=\"addsubmit\" type=submit class=\"submitbtn\" onclick=\"if(isclickadd==1){return false;}else{isclickadd=1;return true}\" value=\"确认添加\"><img id=\"addnow\" style=\"display:none\" src=";
echo INSTALLPATH;
echo "kss_inc/images/load1.gif></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
