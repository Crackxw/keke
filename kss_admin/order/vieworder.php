<?php

function HY_d6eecccbf0a2265fce($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

if (!defined("KSSROOTDIR")) {
	exit("Access denied to view this page!");
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "gp", "sql", "");
$HY_8ee37c20dcfadeef4a = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select A.*, B.`level`, B.`pmid` from kss_tb_order as A left join kss_tb_manager as B on A.`managerid`=B.`id` where A.`ordernum`='" . $HY_7e3958ca51847ad2e2 . "'");

if ($HY_825ad51e000ddc6ca5["pid"] != $HY_8ee37c20dcfadeef4a["pid"]) {
	hy_bd307d155f057feb55("未找到订单号，订单可能已被清理掉了，或者该订单是代理自助充值订单");
}

if (($HY_825ad51e000ddc6ca5["level"] == 6) && ($HY_825ad51e000ddc6ca5["id"] != $HY_8ee37c20dcfadeef4a["managerid"])) {
	hy_bd307d155f057feb55("该订单不是你的，你无权查看");
}

if ($HY_825ad51e000ddc6ca5["level"] == 7) {
	if ($HY_8ee37c20dcfadeef4a["pmid"] != $HY_825ad51e000ddc6ca5["id"]) {
		hy_bd307d155f057feb55("该订单你无权查看");
	}
}

$HY_d9b9d92031149b415a = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `keyfix`,`keys`,`keyspassword` from `kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_8ee37c20dcfadeef4a["softid"] . "` where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' limit 0," . $HY_8ee37c20dcfadeef4a["keycount"]);

if (empty($HY_d9b9d92031149b415a)) {
	$HY_f569c2880da1e9326f = "卡号还未生成";
}
else {
	$HY_f569c2880da1e9326f = "";

	foreach ($HY_d9b9d92031149b415a as $HY_970be7709f584ff59c ) {
		$HY_f569c2880da1e9326f .= $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"] . $HY_970be7709f584ff59c["keyspassword"] . "\r\n";
	}
}

$HY_000ebeb223e399510a = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `id`=" . $HY_8ee37c20dcfadeef4a["keygroupid"]);

if (empty($HY_000ebeb223e399510a)) {
	$HY_828cd4e64b30ec9e91 = "卡类未找到";
}
else {
	$HY_828cd4e64b30ec9e91 = $HY_000ebeb223e399510a["keyname"] . " 天数" . ($HY_000ebeb223e399510a["cday"] * 1) . " 点数" . $HY_000ebeb223e399510a["points"] . " 通道" . $HY_000ebeb223e399510a["linknum"] . "<br>附属性：" . $HY_000ebeb223e399510a["extattr1"];
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<table border=0  cellpadding=\"5\" cellspacing=\"5\" class=\"orderkey\">\r\n<tr>\r\n<td align=right>订单号</td>\r\n<td align=left>";
echo $HY_7e3958ca51847ad2e2;
echo "</td>\r\n<td align=right>下单时间</td>\r\n<td align=left>";
echo hy_cf2f0673819dddd4a1($HY_8ee37c20dcfadeef4a["addtime"]);
echo "</td>\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡类</td>\r\n<td align=left>";
echo $HY_828cd4e64b30ec9e91;
echo "</td>\r\n<td colspan=2><input type='button' class=submitbtn value='复制' id='copykey'><span id=copyed></span></td>\r\n\r\n</tr>\r\n<tr>\r\n<td align=right valign=top>注册卡号</td>\r\n<td align=left colspan=3><textarea id=\"orderkeynum\" style=\"width:450px;height:150px;font-family:Fixedsys,Verdana;color:#666;\">";
echo $HY_f569c2880da1e9326f;
echo "</textarea></td>\r\n</tr>\r\n</table>\r\n";
echo "<div class=pageruntime>查询用时" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";

?>
