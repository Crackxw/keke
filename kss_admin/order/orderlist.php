<?php

function HY_ee6ca42337965198fc($HY_fc12e3cf6043961fb3 = 1)
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
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "gp", "sql", "");
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_de10877a6b8b9f6fa6 = array("零售", "后台");
$HY_8f7d2c8718392fd9ed = array(0 => "未付款", 1 => "已付款", 2 => "已发货", 3 => "已收货", 6 => "提卡出错", 7 => "提卡出错", 8 => "手动完成", 9 => "自动完成");
$HY_b2a4e82597ebb0ab35 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select `pid` from kss_tb_soft where `id`=" . $HY_c5aaf359b892dfe165);

if (empty($HY_b2a4e82597ebb0ab35)) {
	hy_bd307d155f057feb55("软件未找到");
}

if ($HY_825ad51e000ddc6ca5["pid"] != $HY_b2a4e82597ebb0ab35["pid"]) {
	hy_bd307d155f057feb55("这个软件你似乎无权限管理！");
}

if ($HY_040af70e369786c2e4 == "sendkey") {
	hy_af470935131a2269b8();
	$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "g", "sql", "");
	$HY_eecc5ed9aa01891146 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from  `kss_tb_order` where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "'");

	if ($HY_825ad51e000ddc6ca5["id"] != $HY_eecc5ed9aa01891146["managerid"]) {
		hy_bd307d155f057feb55("该订单不属于您的，你不能执行发卡操作！");
	}

	$HY_0a1bb2905c28a942c8 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `id`=" . $HY_eecc5ed9aa01891146["keygroupid"]);

	if (empty($HY_0a1bb2905c28a942c8)) {
		hy_bd307d155f057feb55("注册卡类未找到");
	}

	if ($HY_0a1bb2905c28a942c8["islock"] == 1) {
		hy_bd307d155f057feb55("注册卡类被停用");
	}

	$HY_ec65a56480a6470a01 = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);

	if ($HY_ec65a56480a6470a01 !== true) {
		hy_bd307d155f057feb55("请稍后操作，锁定表失败：" . $HY_ec65a56480a6470a01);
	}

	if (($HY_eecc5ed9aa01891146["orderstatus"] < 7) && ($HY_825ad51e000ddc6ca5["level"] == 6)) {
		if (($HY_825ad51e000ddc6ca5["rmb"] + $HY_825ad51e000ddc6ca5["touzhirmb"]) < $HY_eecc5ed9aa01891146["agentamount"]) {
			hy_bd307d155f057feb55("不能发卡：你的余额不足以支付该订单！");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`managerid`,`opmanagerid`,`addtime`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . ",'" . hy_cf2f0673819dddd4a1() . "'," . (-$HY_eecc5ed9aa01891146["agentamount"]) . ",0,'" . $HY_7e3958ca51847ad2e2 . "','后台提卡')", "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("偿试记录金额变动日志失败，请重试。" . $HY_3b22eac9ea6b5c92a5);
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_eecc5ed9aa01891146["agentamount"] . ",`xfrmb`=`xfrmb`+" . $HY_eecc5ed9aa01891146["agentamount"] . " where `id`=" . $HY_825ad51e000ddc6ca5["id"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='扣款失败' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("您的帐号在扣款操作时发生意外，请重试" . $HY_3b22eac9ea6b5c92a5);
		}
	}

	if ($HY_eecc5ed9aa01891146["orderstatus"] < 8) {
		$HY_c53813dbc009179d29 = "";
		$HY_b0e6112fa56939e858 = $HY_82d6536edf704aabc5->HY_37e7d84d05816dfda2("kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
		$HY_d9b9d92031149b415a = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select count(*) as tnum from `kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "` where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' limit 0," . $HY_eecc5ed9aa01891146["keycount"]);
		$HY_bafc70104c017e229c = $HY_eecc5ed9aa01891146["keycount"] - $HY_d9b9d92031149b415a["tnum"];
		$HY_e05cba65e8fd099080 = array("beginid" => $HY_b0e6112fa56939e858, "addtime" => time(), "managerid" => $HY_825ad51e000ddc6ca5["id"], "ordernum" => $HY_7e3958ca51847ad2e2, "ispay" => 1, "tag" => $HY_eecc5ed9aa01891146["tags"], "keyattr" => $HY_eecc5ed9aa01891146["keygroupid"], "k_num" => $HY_bafc70104c017e229c);
		$HY_173d86697f24ffa1ee = hy_cf18c94480f908cc46($HY_e05cba65e8fd099080, $HY_0a1bb2905c28a942c8);
		$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);

		if ($HY_173d86697f24ffa1ee === true) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order set `orderstatus`=8 where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
			hy_bd307d155f057feb55("ok 请单击订单号查看注册卡号 -> <span class='vieworder'>" . $HY_7e3958ca51847ad2e2 . "</span>");
		}
		else {
			hy_bd307d155f057feb55("在生成卡号时出错" . $HY_173d86697f24ffa1ee);
		}
	}
}

if ($HY_040af70e369786c2e4 == "delorder") {
	hy_af470935131a2269b8();
	$HY_8da9227be01bf3d942 = hy_ba8120f86a7df1aecc("deltype", "gp", "int", 1);
	$HY_6c004dc0fe4e9dad84 = array(1 => "7天前未付款的零售单", 2 => "90天前所有的订单", 3 => "所有未付款的零售单");

	if ($HY_825ad51e000ddc6ca5["level"] < 8) {
		hy_bd307d155f057feb55("你无权限删除任何订单");
	}

	if ($HY_8da9227be01bf3d942 == 1) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_order` where `softid`=" . $HY_c5aaf359b892dfe165 . " and `managerid`>0 and `orderstatus`=0 and `addtime`<" . (time() - (86400 * 7)), "sync");
	}
	else if ($HY_8da9227be01bf3d942 == 2) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_order` where `softid`=" . $HY_c5aaf359b892dfe165 . " and `addtime`<" . (time() - (86400 * 90)), "sync");
	}
	else {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_order` where `softid`=" . $HY_c5aaf359b892dfe165 . " and `managerid`>0 and `orderstatus`=0 ", "sync");
	}

	if ($HY_173d86697f24ffa1ee === false) {
		hy_bd307d155f057feb55("删除订单时出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}

	hy_bd307d155f057feb55("成功删除" . $HY_6c004dc0fe4e9dad84[$HY_8da9227be01bf3d942] . ",你可能需要刷新页面.");
}

$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_3111689aaf6bdf9340 = "select `id` ";
$HY_c8c68e89d51fe69c0c = "select * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` in";
$HY_feebf8e7531b580b46 = "select count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_tb_order` ";
$HY_d0b9bf10498fa2c92f = array();
$HY_61b51b62e48edded46 = hy_ba8120f86a7df1aecc("selop", "gp", "sql", "none");
$HY_17d6489b51ea6f23a0 = hy_ba8120f86a7df1aecc("orderstatus", "gp", "int", 99);
$HY_ef9449a16c3276dfc8 = hy_ba8120f86a7df1aecc("keywords", "gp", "sql", "");
$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", $HY_825ad51e000ddc6ca5["id"]);
$HY_dd43036ba01064c085["managerid"] = $HY_a49db761d2702b25cf;
$HY_dd43036ba01064c085["orderstatus"] = $HY_17d6489b51ea6f23a0;
$HY_dd43036ba01064c085["selop"] = $HY_61b51b62e48edded46;

if ($HY_61b51b62e48edded46 == "ordernum") {
	if ($HY_ef9449a16c3276dfc8 != "") {
		if (strlen($HY_ef9449a16c3276dfc8) < 6) {
			hy_bd307d155f057feb55("要搜索的订单号最少要前六位");
		}

		$HY_c3249a3797396973c0[] = " `ordernum` like '" . $HY_ef9449a16c3276dfc8 . "%'";
		$HY_dd43036ba01064c085["keywords"] = $HY_ef9449a16c3276dfc8;
	}
}

if ($HY_61b51b62e48edded46 == "qq") {
	if ($HY_ef9449a16c3276dfc8 != "") {
		if (strlen($HY_ef9449a16c3276dfc8) < 5) {
			hy_bd307d155f057feb55("QQ号最少五位");
		}

		$HY_c3249a3797396973c0[] = " `payqq`='" . $HY_ef9449a16c3276dfc8 . "'";
		$HY_dd43036ba01064c085["keywords"] = $HY_ef9449a16c3276dfc8;
	}
}

$HY_c3249a3797396973c0[] = " `softid`=" . $HY_c5aaf359b892dfe165;
$HY_dd43036ba01064c085["softid"] = $HY_c5aaf359b892dfe165;

if (6 < $HY_825ad51e000ddc6ca5["level"]) {
	$HY_fd18d7f34c416ddc4c = array();
	$HY_2b687e379113b1e29f = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and isdel=0");

	foreach ($HY_2b687e379113b1e29f as $HY_a1e3f7957087c929e0 ) {
		if ($HY_825ad51e000ddc6ca5["level"] == 7) {
			if (($HY_a1e3f7957087c929e0["id"] == $HY_825ad51e000ddc6ca5["id"]) && ($HY_a1e3f7957087c929e0["level"] == 6)) {
				$HY_fd18d7f34c416ddc4c[] = $HY_a1e3f7957087c929e0["id"];
			}
		}
		else {
			$HY_fd18d7f34c416ddc4c[] = $HY_a1e3f7957087c929e0["id"];
		}
	}

	$HY_3c4e769f64205e99d0 = array();
	$HY_3c4e769f64205e99d0 = implode(",", $HY_fd18d7f34c416ddc4c);

	if ($HY_a49db761d2702b25cf == 0) {
		$HY_c3249a3797396973c0[] = " `managerid` in(" . $HY_3c4e769f64205e99d0 . ")";
	}
	else {
		if (!in_array($HY_a49db761d2702b25cf, $HY_fd18d7f34c416ddc4c)) {
			hy_bd307d155f057feb55("无权列出该帐号的订单");
		}

		$HY_c3249a3797396973c0[] = " `managerid`=" . $HY_a49db761d2702b25cf;
	}
}
else {
	$HY_c3249a3797396973c0[] = " `managerid`=" . $HY_825ad51e000ddc6ca5["id"];
}

if ($HY_61b51b62e48edded46 == "selstatus") {
	$HY_c3249a3797396973c0[] = " `orderstatus`='" . $HY_17d6489b51ea6f23a0 . "'";
	$HY_dd43036ba01064c085["orderstatus"] = $HY_17d6489b51ea6f23a0;
}

$HY_672d06c58fe042d1f1 = "";

if (!empty($HY_c3249a3797396973c0)) {
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_c3249a3797396973c0) . " order by id desc";
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_e42b2c2aebb697a9ac = hy_ba8120f86a7df1aecc("recordnum", "gp", "int", 0);

if ($HY_bb9a6b473cb68af21d == 1) {
	$HY_e677c007953bcbb522 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b($HY_feebf8e7531b580b46 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1);
	$HY_e42b2c2aebb697a9ac = $HY_e677c007953bcbb522["tnum"];
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_dd43036ba01064c085["recordnum"] = $HY_e42b2c2aebb697a9ac;
$HY_55b549aae5bc4d7185 = abs(floor(($HY_e42b2c2aebb697a9ac / ZPAGESIZE) * -1));
$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_c75bbf18eded470be7 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
echo "<!-- ";
echo $HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE;
echo " -->";
$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_dbaa2d79a00983d5e1 = "";

if (!empty($HY_c75bbf18eded470be7)) {
	foreach ($HY_c75bbf18eded470be7 as $HY_061be3c622b71eaf55 ) {
		$HY_dbaa2d79a00983d5e1 .= $HY_061be3c622b71eaf55["id"] . ",";
	}

	$HY_dbaa2d79a00983d5e1 = substr($HY_dbaa2d79a00983d5e1, 0, strlen($HY_dbaa2d79a00983d5e1) - 1);
}

$HY_bc854a58778efeb1d8 = false;
$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();

if ($HY_dbaa2d79a00983d5e1 != "") {
	$HY_b52b0b91dfe2f1d7ab .= "(" . $HY_dbaa2d79a00983d5e1 . ") order by id desc";
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "<script type=\"text/javascript\">\r\nvar submitid;\r\nvar softid=";
echo $HY_c5aaf359b892dfe165;
echo ";\r\n$(document).ready(function() { \r\n$(\"#copykey\").live('mouseover',function(){\r\nvar ee=$('#orderkeynum').html();\r\nee=ee.replace(/ /g,'');\r\ntoClipboard(\"copykey\",ee);\r\n});\r\n\r\n$(\".vieworder\").live(\"click\",function(){\r\n$(\".malertboxclosebtn\").click();\r\nmalert('./admin_order.php?action=vieworder&isajax=1&ordernum='+$(this).text(),'订单'+$(this).text()+'的注册卡号',600,300);\t\r\n});\r\n\r\n$(\"#delorder\").bind(\"click\",function(){\r\nmalert(\"./admin_order.php?action=orderlist&isajax=1&op=delorder&softid=\"+$(this).attr(\"softid\")+\"&deltype=\"+$(\"#deltype\").val(),'删除订单提示');\r\n});\r\n\r\n$(\":submit\").click(function(e){if(this.id) submitid=this.id;})\r\n\r\n$(\".sendkey\").bind(\"click\",function(){\r\nvar ourl='./admin_order.php?action=orderlist&op=sendkey&isajax=1&softid='+softid+'&ordernum='+$(this).attr('oid');\r\nvar \$this=$(this);\r\n$.ajax({type:\"GET\",url:ourl,cache:false,\r\nsuccess: function(msg){\r\nif(msg.substr(0,2)=='ok'){\r\n\$this.parent().html('手动完成'); \r\nmalert(msg.substr(2),'发卡成功',520,100);\r\n}else{\r\nmalert(msg,'发卡失败');\r\n}\r\n},\r\nerror:function(ajaxobj){\r\nmalert(\"发卡程序页面出错：\"+ajaxobj.status);\r\n}\r\n});\r\n\r\n});\r\n\r\n$(\"#gz\").bind(\"click\",function(){\r\nif($(this).html()==\"查看规则\"){\r\n$(this).html(\"隐藏规则\");\r\n$(\".trd1\").show();\r\n}else{\r\n$(this).html(\"查看规则\");\r\n$(\".trd1\").hide();\r\n\r\n}\r\n});\r\n\r\n$(\"#selop\").bind(\"change\",function(){ \r\norderui($(this).val());\r\n});\r\norderui(\"ordernum\");\r\n$(\".trd1\").hide();\r\n});\r\n\r\nfunction orderui(sstatus){\r\nif($(\"#selop\").val()==\"none\"){\r\n$(\"#orderstatus\").hide();\r\n$(\"#keywords\").hide();\r\n}else if($(\"#selop\").val()==\"selstatus\"){\r\n$(\"#orderstatus\").show();\r\n$(\"#keywords\").hide();\r\n}else{\t\r\n$(\"#orderstatus\").hide();\r\n$(\"#keywords\").show();\r\n}\r\n}\r\n</script>\r\n<form action=\"?action=orderlist&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\" id=\"sorder\" name=\"sorder\">\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=trd>\r\n<td valign=middle>搜索 =>  ";

if (6 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<select id='managerid' name='managerid'>";
	echo "<option value=0>--下列所有帐号--</option>";

	foreach ($HY_2b687e379113b1e29f as $HY_fbf95ae64ebaaaa6fc ) {
		if ($HY_825ad51e000ddc6ca5["level"] == 7) {
			if (($HY_fbf95ae64ebaaaa6fc["id"] == $HY_825ad51e000ddc6ca5["id"]) && ($HY_fbf95ae64ebaaaa6fc["level"] == 6)) {
				echo "<option value=" . $HY_fbf95ae64ebaaaa6fc["id"];

				if ($HY_a49db761d2702b25cf == $HY_fbf95ae64ebaaaa6fc["id"]) {
					echo " selected";
				}

				echo ">" . $HY_fbf95ae64ebaaaa6fc["username"] . "[" . $HY_3fb3415441688353e5[$HY_fbf95ae64ebaaaa6fc["level"]] . "]</option>";
			}
		}
		else {
			echo "<option value=" . $HY_fbf95ae64ebaaaa6fc["id"];

			if ($HY_a49db761d2702b25cf == $HY_fbf95ae64ebaaaa6fc["id"]) {
				echo " selected";
			}

			echo ">" . $HY_fbf95ae64ebaaaa6fc["username"] . "[" . $HY_3fb3415441688353e5[$HY_fbf95ae64ebaaaa6fc["level"]] . "]</option>";
		}
	}

	echo "</select>";
}

echo "\t\t\r\n<select id=\"selop\" name=\"selop\">\r\n<option value='none' ";
echo $HY_61b51b62e48edded46 == "none" ? " selected" : "";
echo ">不选择此条件</option>\r\n<option value='ordernum' ";
echo $HY_61b51b62e48edded46 == "ordernum" ? " selected" : "";
echo ">订单号</option>\r\n<option value='qq' ";
echo $HY_61b51b62e48edded46 == "qq" ? " selected" : "";
echo ">QQ号</option>\r\n<option value='selstatus' ";
echo $HY_61b51b62e48edded46 == "selstatus" ? " selected" : "";
echo ">订单状态</option>\r\n</select>\r\n<select name=\"orderstatus\" id=\"orderstatus\">";

foreach ($HY_8f7d2c8718392fd9ed as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
	echo "<option value='" . $HY_5380a89366e616d954 . "'";

	if ($HY_17d6489b51ea6f23a0 == $HY_5380a89366e616d954) {
		echo " selected";
	}

	echo ">" . $HY_39f33d52374bdc42f7 . "</option>";
}

echo "</select>\r\n<input type=text id=\"keywords\" name=\"keywords\" class=longinput value=\"";
echo $HY_ef9449a16c3276dfc8;
echo "\"><input type=submit class=submitbtn value=\"查询\">  <span id=\"gz\" style=\"cursor:pointer\">查看规则</span></td>\r\n<td align=right style=\"display:inline-block; *display:inline; *zoom:1; vertical-align:middle\">";

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<select name='deltype' id=\"deltype\">\r\n<option value=1>7天前未付款的零售单</option>\r\n<option value=2>90天前所有的订单</option>\r\n<option value=3>所有未付款的零售单</option>\r\n</select><input type=button id='delorder' class='submitbtn' softid=\"";
	echo $HY_c5aaf359b892dfe165;
	echo "\" value='删除订单'>\r\n";
}

echo "&nbsp;</td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>作者：可查看所有订单，可删除未付款的零售订单和90天前所有订单，只可给自己的所有未发卡订单发卡 </td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>员工：可查看自己和代理的所有订单，禁止删除任何订单，只可给自己的所有未发卡订单发卡 </td>\r\n</tr>\r\n<tr class=trd1>\r\n<td colspan=2>代理：可查看自己的订单，禁止删除任何订单，有足够余额的前提下可给自己的所有未发卡订单发卡</td>\r\n</tr>\r\n</table>\r\n</form>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"订单ID\">ID</td>\r\n<td malt=\"订单号的前1-13位表示【年年月月日日时时分分秒秒】，也就是订单的添加日期\">订单号</td>\r\n<td malt=\"订单当前状态\">状态</td>\r\n<td malt=\"零售或后台取卡，后台:代理取卡、员工取卡、作者取卡、管理取卡\">类型</td>\r\n<td malt=\"该订单所属于后台哪一个帐号的\">所属</td>\r\n<td malt=\"该订单提卡的软件卡类名[天数* 点数* 通道数*]\">卡类</td>\r\n<td malt=\"该订单提取的注册卡数量\">数量</td>\r\n<td malt=\"只有前台零售和后台代理取卡才有总金额\">金额</td>\r\n<td malt=\"代理应该款项\">代理费用</td>\r\n<td malt=\"前台零售客户购卡时填写的QQ号\">购卡人</td>\r\n</tr>\r\n";

if (!empty($HY_bc854a58778efeb1d8)) {
	$HY_9d637fd3761db8b7f5 = array();
	$HY_50ec1bb27c9d822aa8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

	foreach ($HY_50ec1bb27c9d822aa8 as $HY_970be7709f584ff59c ) {
		$HY_9d637fd3761db8b7f5[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["username"];
	}

	$HY_201772bc33e8500bce = array();
	$HY_50ec1bb27c9d822aa8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_keyset where `softid`=" . $HY_c5aaf359b892dfe165);

	foreach ($HY_50ec1bb27c9d822aa8 as $HY_970be7709f584ff59c ) {
		$HY_201772bc33e8500bce[$HY_970be7709f584ff59c["id"]] = $HY_970be7709f584ff59c["keyname"];
	}

	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class=\"trd\" id=\"trmanagerid";
		echo $HY_970be7709f584ff59c["id"];
		echo "\">\r\n<td><input type=\"checkbox\" name=\"id[]\" value=\"";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" />";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>\r\n<td><span class=vieworder>";
		echo $HY_970be7709f584ff59c["ordernum"];
		echo "</span></td>\r\n<td nowrap=\"nowrap\">";
		if (($HY_970be7709f584ff59c["orderstatus"] < 8) && ($HY_970be7709f584ff59c["managerid"] == $HY_825ad51e000ddc6ca5["id"])) {
			echo "<span class='sendkey' oid='" . $HY_970be7709f584ff59c["ordernum"] . "'>发卡</span>";
		}

		echo $HY_8f7d2c8718392fd9ed[$HY_970be7709f584ff59c["orderstatus"]];
		echo "</td>\r\n<td>";
		echo $HY_de10877a6b8b9f6fa6[$HY_970be7709f584ff59c["ordertype"]];
		echo "</td>\r\n<td>";
		echo $HY_9d637fd3761db8b7f5[$HY_970be7709f584ff59c["managerid"]];
		echo "</td>\r\n<td>";
		echo isset($HY_201772bc33e8500bce[$HY_970be7709f584ff59c["keygroupid"]]) ? $HY_201772bc33e8500bce[$HY_970be7709f584ff59c["keygroupid"]] : "被删";
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["keycount"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["orderamount"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["agentamount"];

		if (6 < $HY_825ad51e000ddc6ca5["level"]) {
			echo "[" . $HY_970be7709f584ff59c["agentamount7"] . "]";
		}

		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["payqq"];
		echo "</td>\r\n</tr>\r\n";
	}
}
else {
	echo "<tr class=trd><td colspan=10>暂无订单</td></tr>";
}

echo "</table>\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
