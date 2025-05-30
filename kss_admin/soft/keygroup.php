<?php

function HY_8252b76704f5298efc($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();

if (!defined("KSSROOTDIR")) {
	exit("Access denied to view this page!");
}

$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165 . " and `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

if (empty($HY_810d15d31408c982b2)) {
	hy_bd307d155f057feb55("未找到该软件");
}

if ($HY_040af70e369786c2e4 == "del") {
	hy_af470935131a2269b8();
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "gp", "int", 0);
	$HY_5a478ee9515f7b4915 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `id`=" . $HY_365893812300a028d8 . " and `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

	if (empty($HY_5a478ee9515f7b4915)) {
		hy_bd307d155f057feb55("你要删除的卡类似乎不存在或不是你能够管理的。");
	}

	$HY_5a478ee9515f7b4915 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `keyfix`='" . $HY_5a478ee9515f7b4915["prefix"] . "' limit 0,1");

	if (!empty($HY_5a478ee9515f7b4915)) {
		hy_bd307d155f057feb55("为保证注册卡的正常统计，必须先删除该卡类的注册卡才可以删除该卡类<br>（批量删除注册卡可以到：【用户管理】->【批量加时.删除.导出.锁定】里操作）。");
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_keyset where  `id`=" . $HY_365893812300a028d8 . " and `pid`=" . $HY_825ad51e000ddc6ca5["pid"], "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("删除卡类时异常[执行delete语句时出错]" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	hy_bd307d155f057feb55("delok");
}

if ($HY_040af70e369786c2e4 == "save") {
	hy_af470935131a2269b8();
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "gp", "int", 0);
	$HY_bff8f7817f7decc6f1 = hy_ba8120f86a7df1aecc("keyname", "gp", "sqljs", "未命名");

	if (trim($HY_bff8f7817f7decc6f1) == "") {
		hy_bd307d155f057feb55("卡类名不能为空");
	}

	$HY_95519072c712a1f22d = hy_ba8120f86a7df1aecc("cday", "gp", "num", "0.00");
	if (($HY_95519072c712a1f22d <= 0) || (6000 < $HY_95519072c712a1f22d)) {
		hy_bd307d155f057feb55("天数要大于0小于6000，你填写的是" . $HY_95519072c712a1f22d);
	}

	$HY_95519072c712a1f22d = sprintf("%01.2f", $HY_95519072c712a1f22d);
	$HY_adfed9c2e13a3b63f8 = hy_ba8120f86a7df1aecc("linknum", "gp", "int", 1);
	if (($HY_adfed9c2e13a3b63f8 < 1) || (1000 < $HY_adfed9c2e13a3b63f8)) {
		hy_bd307d155f057feb55("通道数要大于0小于1000");
	}

	if (($HY_810d15d31408c982b2["softmode2"] == 1) && (1 < $HY_adfed9c2e13a3b63f8)) {
		hy_bd307d155f057feb55("软件参数-&gt;解绑换机设置-&gt;任意登陆 是开启状态<br>在此状态时，为避免不必要的数据产生，通道数只能填写1");
	}

	$HY_fd266d63af4d47cce1 = hy_ba8120f86a7df1aecc("points", "gp", "int", 0);

	if ($HY_fd266d63af4d47cce1 < 0) {
		hy_bd307d155f057feb55("次数要大于或等于0");
	}

	$HY_0224bfb15f0beaf803 = hy_ba8120f86a7df1aecc("extattr1", "gp", "sqljs", "");

	if (100 < hy_cfd7029aa774332944($HY_0224bfb15f0beaf803)) {
		hy_bd307d155f057feb55("附属性长度必须小于100个字符");
	}

	$HY_88f125c53e37bb7cef = hy_ba8120f86a7df1aecc("retailprice", "gp", "num", "0.00");

	if ($HY_88f125c53e37bb7cef < 0) {
		hy_bd307d155f057feb55("零售价不能小于0");
	}

	$HY_88f125c53e37bb7cef = sprintf("%01.2f", $HY_88f125c53e37bb7cef);
	$HY_d15ae57c9c3f548bf3 = hy_ba8120f86a7df1aecc("islock", "gp", "int", 0);
	$HY_0ccc0f3f98ce3ff46a = array("islock" => $HY_d15ae57c9c3f548bf3, "keyname" => $HY_bff8f7817f7decc6f1, "cday" => $HY_95519072c712a1f22d, "linknum" => $HY_adfed9c2e13a3b63f8, "points" => $HY_fd266d63af4d47cce1, "extattr1" => $HY_0224bfb15f0beaf803, "retailprice" => $HY_88f125c53e37bb7cef);

	if ($HY_365893812300a028d8 == 0) {
		$HY_5c403b88957f0d8f8d = hy_ba8120f86a7df1aecc("prefix", "gp", "sql", "ABCD");

		if (!preg_match("/^[a-z0-9A-Z]{4,4}$/", $HY_5c403b88957f0d8f8d)) {
			hy_bd307d155f057feb55("卡类前缀四位，只能有由大小写英文字母和数字组成");
		}

		if (preg_match("/e|o|0|char/i", $HY_5c403b88957f0d8f8d, $HY_6a15e3cae56efdadef)) {
			hy_bd307d155f057feb55("卡类前缀不能有字符(e,E,o,O,0,char)：" . $HY_6a15e3cae56efdadef[0]);
		}

		$HY_212d5b7eb55ce89fc3 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `softid`=" . $HY_c5aaf359b892dfe165 . " and `prefix`='" . $HY_5c403b88957f0d8f8d . "'");

		if (!empty($HY_212d5b7eb55ce89fc3)) {
			hy_bd307d155f057feb55("卡类前缀已存在，请更换一个");
		}

		$HY_0ccc0f3f98ce3ff46a["pid"] = $HY_825ad51e000ddc6ca5["pid"];
		$HY_0ccc0f3f98ce3ff46a["softid"] = $HY_c5aaf359b892dfe165;
		$HY_0ccc0f3f98ce3ff46a["prefix"] = $HY_5c403b88957f0d8f8d;
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_tb_keyset", $HY_0ccc0f3f98ce3ff46a, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("添加卡类失败[执行insert语句时出错]" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_21267cb0aadb9fc5fb = $HY_82d6536edf704aabc5->HY_98bea57b3c5997f560("kss_tb_keyset");
		hy_bd307d155f057feb55("addok" . $HY_21267cb0aadb9fc5fb);
	}
	else {
		$HY_5a478ee9515f7b4915 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `id`=" . $HY_365893812300a028d8 . " and `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

		if (empty($HY_5a478ee9515f7b4915)) {
			hy_bd307d155f057feb55("你要编辑的卡类似乎不存在或不是你能够管理的。");
		}

		$HY_0ccc0f3f98ce3ff46a = array_diff_assoc($HY_0ccc0f3f98ce3ff46a, $HY_5a478ee9515f7b4915);

		if (empty($HY_0ccc0f3f98ce3ff46a)) {
			hy_bd307d155f057feb55("没改参数别乱点保存 -_-!");
		}

		$HY_44952e33c0b2643f85 = array("keyname" => 1, "cday" => 1, "linknum" => 1, "extattr1" => 1, "points" => 1);
		$HY_e1caa02b5e1887b1c2 = array_intersect_key($HY_0ccc0f3f98ce3ff46a, $HY_44952e33c0b2643f85);

		if (!empty($HY_e1caa02b5e1887b1c2)) {
			$HY_eecc5ed9aa01891146 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select id from kss_tb_order where `orderstatus`<8 and keygroupid=" . $HY_365893812300a028d8 . " limit 0,1");

			if (!empty($HY_eecc5ed9aa01891146)) {
				hy_bd307d155f057feb55("操作中断：卡类名、天数、通道数、次数、附属性暂时不可更改。<br>原因：有未完成的订单使用的是该卡类，该操作会使数据紊乱。<br>解决方法：请先删除属于该卡类的未完成订单。");
			}
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_tb_keyset", $HY_0ccc0f3f98ce3ff46a, "id=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("保置设置出错[执行update语句时出错]" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		hy_bd307d155f057feb55("saveok");
	}
}

$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_keyset where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `softid`=" . $HY_c5aaf359b892dfe165);
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"[savegroup=1]\").css('cursor','pointer').live('click',function(e){\r\nvar tid=$(this).attr(\"groupid\");\r\nvar thref='admin_soft.php?action=keygroup&isajax=1&op=save&softid=";
echo $HY_c5aaf359b892dfe165;
echo "&id='+tid;\t\r\nthref=thref+'&keyname='+encodeURIComponent($(\"#keyname\"+tid).val());\t\r\nthref=thref+'&prefix='+$(\"#prefix\"+tid).val();\t\r\nthref=thref+'&cday='+$(\"#cday\"+tid).val();\t\r\nthref=thref+'&linknum='+$(\"#linknum\"+tid).val();\t\r\nthref=thref+'&points='+$(\"#points\"+tid).val();\t\r\nthref=thref+'&extattr1='+encodeURIComponent($(\"#extattra\"+tid).val());\t\r\nthref=thref+'&retailprice='+$(\"#retailprice\"+tid).val();\t\r\nthref=thref+'&islock='+$(\"#islock\"+tid+\":checked\").length;\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='saveok'){\r\nmview('卡类设置保存成功！',-10,200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n$(\"[delgroup=1]\").css('cursor','pointer').live('click',function(e){\r\nvar tid=$(this).attr(\"groupid\");\r\nvar thref='admin_soft.php?action=keygroup&isajax=1&op=del&softid=";
echo $HY_c5aaf359b892dfe165;
echo "&id='+tid;\t\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='delok'){\r\nmview('卡类删除成功！',-10,200);\r\n$(\"#trkeygroupid\"+tid).remove();\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n$(\"#addgroup\").bind(\"click\",function(e){\r\nMouse(e);\r\n});\r\n$('#admin_addkeygroup').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) { \r\nreturn true;\r\nvar usernameValue = $('input[name=username]').fieldValue();\r\nvar passwordValue = $('input[name=password]').fieldValue();\r\nif (!usernameValue[0] || !passwordValue[0]) { \r\nmalert('请填写完整用户名或密码','出错'); \r\nreturn false; \r\n} \r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,5)!='addok'){\r\nmalert(responseText); \r\n}else{\r\n$(\"[nodata=1]\").remove();\r\nvar nkeyname=$(\"#keyname\").attr(\"value\");\r\nvar tid=responseText.substr(5);\r\ninsertdata='<tr class=\"trd\" id=\"trkeygroupid\"'+tid+'>';\r\ninsertdata=insertdata+'<td align=center><img src='+INSTALLPATH+'kss_inc/images/bd_drop.png malt=\"删除该卡类\" groupid=\"'+tid+'\" delgroup=1 >&nbsp;&nbsp;&nbsp;&nbsp;<img src='+INSTALLPATH+'kss_inc/images/b_save.png malt=\"保存该卡类的修改\" groupid=\"'+tid+'\" savegroup=1 ></td>';\r\ninsertdata=insertdata+'<td><input type=checkbox id=\"islock'+tid+'\" value=\"1\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=smlinput maxlength=\"20\" id=\"keyname'+tid+'\" value=\"'+nkeyname+'\"></td>';\r\ninsertdata=insertdata+'<td class=dwidth>'+$(\"#prefix\").val()+'</td>';\r\ninsertdata=insertdata+'<td><input type=text class=smlinput maxlength=\"6\" id=\"cday'+tid+'\" value=\"'+$(\"#cday\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=sml3input  maxlength=\"4\" id=\"linknum'+tid+'\" value=\"'+$(\"#linknum\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=sml3input maxlength=\"5\" id=\"points'+tid+'\" value=\"'+$(\"#points\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=midinput maxlength=\"100\" id=\"extattra'+tid+'\" value=\"'+$(\"#extattra\").val()+'\"></td>';\r\ninsertdata=insertdata+'<td><input type=text class=sml3input maxlength=\"7\" id=\"retailprice'+tid+'\" value=\"'+$(\"#retailprice\").val()+'\"></td>';\r\n\r\ninsertdata=insertdata+'</tr>';\r\n$(\"#admin_addkeygroup\").before(insertdata);\r\n$(\"#reset__\").click();\r\nmview('添加卡类成功，新的卡类已经加入到列表！',-10,-400); \r\n}\r\n}\r\n});\r\n\r\n\r\n});\r\n</script>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td width=60>操作</td>\r\n<td malt=\"为防止统计数据出错，注册卡类添加后不可以删除，只能停用，停用后的注册卡类将不可用，但之前生成的该类的卡不受影响\">停用</td>\r\n<td malt=\"注册卡的名字，例如周卡、月卡、年卡之类的\">注册卡名</td>\r\n<td malt=\"注册卡号的前四位字符，只能用英文字母和数字，英文字母区分大小写的，该项录入后不可修改\">前缀</td>\r\n<td malt=\"注册卡的有效天数或可充值天数\">天数</td>\r\n<td malt=\"注册卡的通道数，指用户能在多少电脑上同时登陆使用软件。<br>只有在软件参数-&gt;解绑换机设置-&gt;任意登陆未勾选状态，且你需要用户能同时在多台电脑上登陆的时候，通道数才需要填大于1的数字<br>\">通道数</td>\r\n<td malt=\"注册卡的可使用点数，以满足有些需要按次计费的软件\">点数</td>\r\n<td malt=\"注册卡的扩展属性，注册卡添加后就会拥有此属性，可以来实现一些特殊的功能\">附属性</td>\r\n<td malt=\"注册卡在销售站上显示的零售价\">零售价</td>\r\n\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	echo "<tr nodata=1 class=trd><td colspan=9>没有任何卡类，请先添加</td></tr>";
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		$HY_970be7709f584ff59c["keyname"] = str_replace("<", "《", htmlspecialchars_decode($HY_970be7709f584ff59c["keyname"]));
		$HY_970be7709f584ff59c["keyname"] = str_replace(">", "》", htmlspecialchars_decode($HY_970be7709f584ff59c["keyname"]));
		$HY_970be7709f584ff59c["extattr1"] = str_replace("<", "《", htmlspecialchars_decode($HY_970be7709f584ff59c["extattr1"]));
		$HY_970be7709f584ff59c["extattr1"] = str_replace(">", "》", htmlspecialchars_decode($HY_970be7709f584ff59c["extattr1"]));
		echo "\r\n<tr class=\"trd\" id=\"trkeygroupid";
		echo $HY_970be7709f584ff59c["id"];
		echo "\">\r\n<td align=center><img src='";
		echo INSTALLPATH;
		echo "kss_inc/images/bd_drop.png' malt=\"删除该卡类。注意：只有该卡类没有注册卡的情况下才可以删除，如果有该卡类的注册卡，必须先删除该类注册卡然后才可以删除该卡类。\" groupid=\"";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" delgroup=1>&nbsp;&nbsp;&nbsp;&nbsp;<img src='";
		echo INSTALLPATH;
		echo "kss_inc/images/b_save.png' malt=\"保存该卡类的修改\" groupid=\"";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" savegroup=1></td>\r\n<td><input type=checkbox id=\"islock";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"1\" ";
		echo $HY_970be7709f584ff59c["islock"] == 1 ? " checked" : "";
		echo "></td>\r\n<td><input type=text class=smlinput maxlength=\"20\" id=\"keyname";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"";
		echo hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["keyname"]);
		echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td class=dwidth>";
		echo $HY_970be7709f584ff59c["prefix"];
		echo "</td>\r\n<td><input type=text class=smlinput maxlength=\"6\" id=\"cday";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"";
		echo $HY_970be7709f584ff59c["cday"];
		echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input type=text class=sml3input  maxlength=\"4\" id=\"linknum";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"";
		echo $HY_970be7709f584ff59c["linknum"];
		echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input type=text class=sml3input maxlength=\"8\" id=\"points";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"";
		echo $HY_970be7709f584ff59c["points"];
		echo "\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input type=text class=midinput maxlength=\"100\" id=\"extattra";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"";
		echo hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["extattr1"]);
		echo "\" malt=\"";
		echo $HY_970be7709f584ff59c["extattr1"];
		echo "\"></td>\r\n<td><input type=text class=sml3input maxlength=\"7\" id=\"retailprice";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" value=\"";
		echo $HY_970be7709f584ff59c["retailprice"];
		echo "\" AUTOCOMPLETE=\"off\"></td>\r\n\r\n</tr>\r\n";
	}
}

echo "<form id=\"admin_addkeygroup\" action=\"?action=keygroup&op=save&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\"> \r\n<tr class=\"trd\" id=\"trkeygroupid\">\r\n<td><input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" /><input type=submit class=submitbtn value=\"添加卡类\" id=\"addgroup\"><input type=reset id=\"reset__\" style=\"display:none\"></td>\r\n<td><input malt=\"为防止统计数据出错，注册卡类添加后不可以删除，只能锁定，锁定后的注册卡类将不可用，但之前生成的该类的卡不受影响\" type=checkbox id=\"islock\" name=\"islock\" value=\"1\"></td>\r\n<td><input malt=\"注册卡的名字，便如周卡、月卡、年卡之类的\" type=text class=smlinput maxlength=\"20\" id=\"keyname\" name=\"keyname\" value=\"\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input malt=\"注册卡号的前四位字符，只能用英文字母和数字，英文字母区分大小写的，该项录入后不可修改\" type=text class=sml3input maxlength=\"4\" id=\"prefix\" name=\"prefix\" value=\"\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input malt=\"注册卡的有效天数或可充值天数\" type=text class=smlinput maxlength=\"6\" id=\"cday\" name=\"cday\" value=\"\" AUTOCOMPLETE=\"off\"></td>\r\n<td><input malt=\"注册卡的通道数，指用户能在多少电脑上同时登陆使用软件。<br>只有在软件参数-&gt;解绑换机设置-&gt;任意登陆未勾选状态，且你需要用户能同时在多台电脑上登陆的时候，通道数才需要填大于1的数字<br>\" type=text class=sml3input  maxlength=\"4\" id=\"linknum\" name=\"linknum\" value=\"1\"></td>\r\n<td><input malt=\"注册卡的可用点数，以满足有些需要按次计费的软件\" type=text class=sml3input maxlength=\"8\" id=\"points\" name=\"points\" value=\"0\"></td>\r\n<td><input malt=\"注册卡的扩展属性，注册卡添加后就会拥有此属性，可以来实现一些特殊的功能\" type=text class=midinput maxlength=\"20\" id=\"extattra\" name=\"extattr1\" value=\"\"></td>\r\n<td><input malt=\"注册卡在销售站上显示的零售价\" type=text class=sml3input maxlength=\"7\" id=\"retailprice\" name=\"retailprice\" value=\"0.00\" AUTOCOMPLETE=\"off\"></td>\r\n\r\n</tr>\r\n</form>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
