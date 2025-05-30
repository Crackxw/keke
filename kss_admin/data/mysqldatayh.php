<?php

function HY_06ddef1f2e1497e74d($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_b65ad5e9bbdede50c3()
{
	global $HY_82d6536edf704aabc5;
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `" . TNREG . "_lockip`", "notsync");
	halt(TNREG . "_lockip已清空，所有因为多次查询错误的卡被封的IP和机器均已解封");
}

function HY_f811998a3418902c6f($HY_fc12e3cf6043961fb3)
{
	if (1048576 <= $HY_fc12e3cf6043961fb3) {
		return round($HY_fc12e3cf6043961fb3 / 1048576, 2) . "M";
	}

	return round($HY_fc12e3cf6043961fb3 / 1024, 2) . "K";
}

defined("YH2") || exit("Access denied to view this page!");
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(9);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");

switch ($HY_040af70e369786c2e4) {
case "修复表":
	$HY_745fd652d1bdb69a45 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_745fd652d1bdb69a45);
	$HY_fe9bce55cf6982da59 = "`" . implode("`,`", $HY_c3a9c60b89d91b0fa5) . "`";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE " . $HY_fe9bce55cf6982da59, "notsync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("ok1");
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	break;

case "优化表":
	$HY_745fd652d1bdb69a45 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_745fd652d1bdb69a45);
	$HY_fe9bce55cf6982da59 = "`" . implode("`,`", $HY_c3a9c60b89d91b0fa5) . "`";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("OPTIMIZE TABLE " . $HY_fe9bce55cf6982da59, "notsync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("ok2");
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	break;

case "清空会员验证日志":
	hy_af470935131a2269b8();
	$HY_b145448aa76bc95b5e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft ");

	foreach ($HY_b145448aa76bc95b5e as $HY_970be7709f584ff59c ) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_log_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "`", "sync");
	}

	hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	break;

case "手动同步前清理数据":
	hy_af470935131a2269b8();
	$HY_b145448aa76bc95b5e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft ");

	foreach ($HY_b145448aa76bc95b5e as $HY_970be7709f584ff59c ) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_z_log_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "`", "sync");
	}

	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_tb_sql`", "notsync");
	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_config set `sync_starttime`=123,sync_state=1 where id=1", "notsync");
	hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	break;

case "删除免费注册过的机器码":
	$HY_5d858a385bf351fff0 = hy_ba8120f86a7df1aecc("v", "gp", "sql", "全部");

	if ($HY_5d858a385bf351fff0 == "全部") {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_tb_log_havereg`", "sync");
	}
	else {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_havereg` where pccode='" . $HY_5d858a385bf351fff0 . "'", "sync");
	}

	hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	break;

case "解锁IP":
	$HY_5d858a385bf351fff0 = hy_ba8120f86a7df1aecc("v", "gp", "sql", "全部");
	$HY_86477706b4b9010532 = bindec(decbin(ip2long(trim($HY_5d858a385bf351fff0))));

	if ($HY_5d858a385bf351fff0 == "全部") {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("TRUNCATE TABLE `kss_tb_badip`", "sync");
	}
	else {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_badip` where ip=" . $HY_86477706b4b9010532, "sync");
	}

	hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	break;

case "删除90天前的订单":
case "删除180天前的订单":
case "删除360天前的订单":
	hy_af470935131a2269b8();

	if ($HY_040af70e369786c2e4 == "删除90天前的订单") {
		$HY_cbdf9c42145a7cbc88 = 90;
	}
	else if ($HY_040af70e369786c2e4 == "删除180天前的订单") {
		$HY_cbdf9c42145a7cbc88 = 180;
	}
	else {
		$HY_cbdf9c42145a7cbc88 = 360;
	}

	$HY_cbdf9c42145a7cbc88 = time() - ($HY_cbdf9c42145a7cbc88 * 86400);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_order` where `addtime`<" . $HY_cbdf9c42145a7cbc88, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	}

	hy_bd307d155f057feb55("操作出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	break;

case "删除90天前的会员充值日志":
case "删除180天前的会员充值日志":
case "删除360天前的会员充值日志":
	hy_af470935131a2269b8();

	if ($HY_040af70e369786c2e4 == "删除90天前的会员充值日志") {
		$HY_cbdf9c42145a7cbc88 = 90;
	}
	else if ($HY_040af70e369786c2e4 == "删除180天前的会员充值日志") {
		$HY_cbdf9c42145a7cbc88 = 180;
	}
	else {
		$HY_cbdf9c42145a7cbc88 = 360;
	}

	$HY_cbdf9c42145a7cbc88 = time() - ($HY_cbdf9c42145a7cbc88 * 86400);
	$HY_2f3dc0fd4aaec9d792 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from `kss_tb_soft` ");
	$HY_af844a04d5793a0108 = "";

	foreach ($HY_2f3dc0fd4aaec9d792 as $HY_970be7709f584ff59c ) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_z_cz_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "` where `addtime`<" . $HY_cbdf9c42145a7cbc88, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_af844a04d5793a0108 .= "清理kss_z_cz_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "表出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
		}
	}

	if ($HY_af844a04d5793a0108 == "") {
		hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	}

	hy_bd307d155f057feb55($HY_af844a04d5793a0108);
	break;

case "删除7天前未付款的零售订单":
	hy_af470935131a2269b8();
	$HY_cbdf9c42145a7cbc88 = 7;
	$HY_cbdf9c42145a7cbc88 = time() - ($HY_cbdf9c42145a7cbc88 * 86400);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_order` where `addtime`<" . $HY_cbdf9c42145a7cbc88 . " and ordertype=0 and orderstatus=0", "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	}

	hy_bd307d155f057feb55("操作出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	break;

case "删除3天前的后台登陆日志":
	hy_af470935131a2269b8();
	$HY_cbdf9c42145a7cbc88 = 3;
	$HY_cbdf9c42145a7cbc88 = time() - ($HY_cbdf9c42145a7cbc88 * 86400);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_login` where `logintime`<" . $HY_cbdf9c42145a7cbc88, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	}

	hy_bd307d155f057feb55("操作出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	break;

case "删除3天前代理的无效财务日志":
	hy_af470935131a2269b8();
	$HY_cbdf9c42145a7cbc88 = 3;
	$HY_cbdf9c42145a7cbc88 = time() - ($HY_cbdf9c42145a7cbc88 * 86400);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_tb_log_agentrmb` where `optype`=20 and `addtime`<" . $HY_cbdf9c42145a7cbc88, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("clearok已完成操作：" . $HY_040af70e369786c2e4);
	}

	hy_bd307d155f057feb55("操作出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	break;

default:
}

echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"#chkall\").click(function(){ \r\n$(\"input[name='keys[]']\").checkCbx(); \r\n});\r\n$(\"#repair,#optimize\").bind(\"click\",function(e){\r\nMouse(e);\n});\r\n$(\"input[clear=1]\").bind(\"click\",function(e){\r\nMouse(e);\nvar op=$(this).val();\r\nvar vastr='';\r\nif($(this).attr(\"va\")){\r\nvastr=encodeURIComponent($(\"#\"+$(this).attr(\"va\")).val());\r\n}\r\n$.ajax({\r\nurl: 'admin_data.php?action=mysqldatayh&isajax=1&op='+encodeURIComponent(op)+'&v='+vastr,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,7)=='clearok'){\r\nmview(html.substr(7));\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n$('#mysqldatayh').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"input[name='keys[]']:checked\").length==0){\r\nmalert('请还未选择任何表！');\r\nreturn false;\r\n}\r\n\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText=='ok1'){\r\nmview(\"修复表操作完成。\");\r\n}else if(responseText=='ok2'){\r\nmview(\"优化表操作完成。\");\r\n}else{\r\nmalert(responseText);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\t\r\n});\r\n\r\n</script>\t\r\n";

if (SVRID == 1) {
	echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<div>对数据库的部份表执行相应清理数据操作</div>\r\n<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除90天前的订单' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除180天前的订单' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除360天前的订单' class='submitbtnn'></td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='kss_z_cz_*_*' value='删除90天前的会员充值日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_z_cz_*_*' value='删除180天前的会员充值日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_z_cz_*_*' value='删除360天前的会员充值日志' class='submitbtnn'></td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='kss_tb_order' value='删除7天前未付款的零售订单' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='kss_tb_log_login' value='删除3天前的后台登陆日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='删除3天前的代理自助充值初始订单kss_tb_log_agentrmb' value='删除3天前代理的无效财务日志' class='submitbtnn'></td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' clear='1' malt='清空所有kss_z_log_*_*表的所有数据' value='清空会员验证日志' class='submitbtnn'></td>\r\n<td><input type='button' clear='1' malt='清空所有kss_z_log_*_*表的所有数据' value='手动同步前清理数据' class='submitbtnn'></td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</table>\r\n<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td><input type='button' va=\"unlockpccode\" clear='1' malt='免费注册过的机器码被删除后，该电脑就可以重新免费注册帐号<br>默认是全部将会删除所有免费注册过的机器码' value='删除免费注册过的机器码' class='submitbtnn'> -> <input type=text value=\"全部\" id=\"unlockpccode\"  class=\"longinput\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td><input type='button' va=\"unlockip\" clear='1' malt='解锁指定的IP，默认是全部所有的IP都会被解锁' value='解锁IP' class='submitbtnn'> -> <input type=text value=\"全部\" id=\"unlockip\"  class=\"longinput\">&nbsp;</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table>\r\n";
}

echo "<form id=\"mysqldatayh\" action=\"?action=mysqldatayh&isajax=1\" method=\"post\">\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=\"trhead\">\r\n<td nowrap=\"nowrap\" malt=\"\">数据库表名</td>\r\n<td nowrap=\"nowrap\" malt=\"\">表类型</td>\r\n<td nowrap=\"nowrap\" malt=\"\">数据大小</td>\r\n<td nowrap=\"nowrap\" malt=\"\">索引大小</td>\r\n<td nowrap=\"nowrap\" malt=\"\">多余</td>\r\n<td nowrap=\"nowrap\" malt=\"\">记录数</td>\r\n<td nowrap=\"nowrap\" malt=\"\">AuTo Id</td>\r\n<td nowrap=\"nowrap\" malt=\"\">更新时间</td>\r\n</tr>\r\n";
$HY_85df8abf85c46b5a59 = false;
$HY_cc69eba064c5392994 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("SELECT count(*) as tnum from kss_tb_soft");

if (99 < $HY_cc69eba064c5392994["tnum"]) {
	$HY_85df8abf85c46b5a59 = true;
}

$HY_b145448aa76bc95b5e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("SHOW TABLE STATUS ");
$HY_02e0e8afb8004dd0de = 0;
$HY_74dcdca9e500890c06 = 0;
$HY_bafc70104c017e229c = 0;
$HY_faeeb62f727d78cbe6 = 0;
$HY_1e68cb27ce943e709e = 0;
$HY_dad51ff44f54145130 = 0;

foreach ($HY_b145448aa76bc95b5e as $HY_970be7709f584ff59c ) {
	if (substr($HY_970be7709f584ff59c["Name"], 0, 4) != "kss_") {
		continue;
	}

	$HY_02e0e8afb8004dd0de = $HY_02e0e8afb8004dd0de + $HY_970be7709f584ff59c["Data_length"];
	$HY_74dcdca9e500890c06 = $HY_74dcdca9e500890c06 + $HY_970be7709f584ff59c["Index_length"];
	if (stripos($HY_970be7709f584ff59c["Name"], "z_key_") && !stripos($HY_970be7709f584ff59c["Name"], "recycle")) {
		$HY_bafc70104c017e229c = $HY_bafc70104c017e229c + $HY_970be7709f584ff59c["Rows"];
	}

	if (stripos($HY_970be7709f584ff59c["Name"], "z_user_") && !stripos($HY_970be7709f584ff59c["Name"], "recycle")) {
		$HY_1e68cb27ce943e709e = $HY_1e68cb27ce943e709e + $HY_970be7709f584ff59c["Rows"];
	}

	if (stripos($HY_970be7709f584ff59c["Name"], "z_log_")) {
		$HY_faeeb62f727d78cbe6 = $HY_faeeb62f727d78cbe6 + $HY_970be7709f584ff59c["Rows"];
	}

	if ($HY_970be7709f584ff59c["Rows"] == "") {
		$HY_dad51ff44f54145130 = 1;
	}

	if (stripos($_SERVER["HTTP_HOST"], ".hphu.com") && stripos($HY_970be7709f584ff59c["Name"], "ss_z_")) {
		if ($HY_970be7709f584ff59c["Engine"] == "") {
			echo "<tr class='trd" . ($HY_970be7709f584ff59c["Engine"] != "" ? "" : "isend") . "'>";
			echo "<td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
			echo $HY_970be7709f584ff59c["Name"];
			echo "' id='check";
			echo $HY_970be7709f584ff59c["Name"];
			echo "' ";
			echo $HY_970be7709f584ff59c["Engine"] != "" ? "" : "checked";
			echo "><label for='check";
			echo $HY_970be7709f584ff59c["Name"];
			echo "'>";
			echo $HY_970be7709f584ff59c["Name"];
			echo "</label></td>";
			echo "<td nowrap='nowrap'>";
			echo $HY_970be7709f584ff59c["Engine"] != "" ? $HY_970be7709f584ff59c["Engine"] : "<font color=red>表出错，请修复</font>";
			echo "</td>";
			echo "<td nowrap='nowrap'>";
			echo hy_f811998a3418902c6f($HY_970be7709f584ff59c["Data_length"]);
			echo "</td>";
			echo "<td nowrap='nowrap'>";
			echo hy_f811998a3418902c6f($HY_970be7709f584ff59c["Index_length"]);
			echo "</td>";
			echo "<td nowrap='nowrap'>";
			echo hy_f811998a3418902c6f($HY_970be7709f584ff59c["Data_free"]);
			echo "</td>";
			echo "<td nowrap='nowrap'>";
			echo $HY_970be7709f584ff59c["Rows"];
			echo "</td>";
			echo "<td nowrap='nowrap'>";
			echo $HY_970be7709f584ff59c["Auto_increment"];
			echo "</td>";
			echo "<td nowrap='nowrap'>";
			echo $HY_970be7709f584ff59c["Update_time"];
			echo "</td>";
			echo "</tr>\r\n";
		}
	}
	else {
		echo "<tr class='trd" . ($HY_970be7709f584ff59c["Engine"] != "" ? "" : "isend") . "'>";
		echo "<td nowrap='nowrap' style='cursor:pointer'><input type='checkbox' name='keys[]' value='";
		echo $HY_970be7709f584ff59c["Name"];
		echo "' id='check";
		echo $HY_970be7709f584ff59c["Name"];
		echo "' ";
		echo $HY_970be7709f584ff59c["Engine"] != "" ? "" : "checked";
		echo "><label for='check";
		echo $HY_970be7709f584ff59c["Name"];
		echo "'>";
		echo $HY_970be7709f584ff59c["Name"];
		echo "</label></td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["Engine"] != "" ? $HY_970be7709f584ff59c["Engine"] : "<font color=red>表出错，请修复</font>";
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo hy_f811998a3418902c6f($HY_970be7709f584ff59c["Data_length"]);
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo hy_f811998a3418902c6f($HY_970be7709f584ff59c["Index_length"]);
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo hy_f811998a3418902c6f($HY_970be7709f584ff59c["Data_free"]);
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["Rows"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["Auto_increment"];
		echo "</td>";
		echo "<td nowrap='nowrap'>";
		echo $HY_970be7709f584ff59c["Update_time"];
		echo "</td>";
		echo "</tr>\r\n";
	}
}

echo "</table>";

if ($HY_dad51ff44f54145130 == 1) {
	echo "<script>malert('发现有错误表【淡红色背景的表出错了】，请执行修复操作！');</script>";
}

echo "\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr>\r\n<td class=\"findorpage\">\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<img  src=\"";
echo INSTALLPATH;
echo "kss_inc/images/arrow_ltr.png\" style=\"vertical-align:middle\"><input type=\"button\" name=\"chkall\" id=\"chkall\" value=\"全选/反选\" class=\"submitbtn\"> ━▶\r\n&nbsp;&nbsp;<input type='submit' name='op' id='repair' malt='将选中的卡号锁定' value='修复表' class='submitbtn'>\r\n&nbsp;&nbsp;<input type='submit' name='op' id='optimize' malt='将选中的卡号锁定' value='优化表' class='submitbtn'>\t\t\r\n&nbsp;&nbsp;索引：";
echo hy_f811998a3418902c6f($HY_74dcdca9e500890c06);
echo "，数据：";
echo hy_f811998a3418902c6f($HY_02e0e8afb8004dd0de);
echo "，共计：";
echo hy_f811998a3418902c6f($HY_74dcdca9e500890c06 + $HY_02e0e8afb8004dd0de);
echo "\t\r\n</td>\r\n</tr>\r\n</table>\r\n</form>\r\n";

?>
