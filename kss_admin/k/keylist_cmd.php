<?php

function HY_de208a72c7b39fd82a($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function my_sort($HY_ac13d1f48fe4f34362, $HY_fed594610cbea8b3a0)
{
	if ($HY_ac13d1f48fe4f34362["username"] == $HY_fed594610cbea8b3a0["username"]) {
		if ($HY_fed594610cbea8b3a0["endtime"] < $HY_ac13d1f48fe4f34362["endtime"]) {
			return 0;
		}

		return $HY_fed594610cbea8b3a0["endtime"] < $HY_ac13d1f48fe4f34362["endtime"] ? -1 : 1;
	}

	return $HY_fed594610cbea8b3a0["username"] < $HY_ac13d1f48fe4f34362["username"] ? -1 : 1;
}

defined("YH2") || exit("Access denied to view this page!");

switch ($HY_040af70e369786c2e4) {
case "锁定":
case "解锁":
	if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
		hy_bd307d155f057feb55("你真聪明，绕到这来了");
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_281041c3238cce0fd0 = "";

	if ($HY_825ad51e000ddc6ca5["level"] == 6) {
		$HY_281041c3238cce0fd0 = " and `managerid`=" . $HY_825ad51e000ddc6ca5["id"];
	}

	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_c3a9c60b89d91b0fa5);
	$HY_284f8b7464fe1b9fb8 = "";

	if (count($HY_c3a9c60b89d91b0fa5) == 1) {
		$HY_6e90f7f84b05b2a86d = "='" . $HY_c3a9c60b89d91b0fa5[0] . "'";
	}
	else {
		$HY_6e90f7f84b05b2a86d = " in ('" . implode("','", $HY_c3a9c60b89d91b0fa5) . "')";
	}

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select A.`keys`,A.`islock`,A.`keyfix`,B.`pmid` from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " as A left join kss_tb_manager as B on A.`managerid`=B.`id` where A.`keys`" . $HY_6e90f7f84b05b2a86d . $HY_281041c3238cce0fd0 . " and A.`cztime`=0 and A.`islock`<" . ($HY_825ad51e000ddc6ca5["level"] - 4));

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("您没有权限对选择的注册卡执行锁定或解锁操作！<br>1、可能是你选择的注册卡已被高于你级别的用户锁定。<br>2、该注册卡已使用过，锁定或解锁没有任何意义。");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . $HY_040af70e369786c2e4 . count($HY_c3a9c60b89d91b0fa5) . "个注册卡号的操作请求，只有" . count($HY_8179ae24b4003846ce) . "条被处理";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		if (($HY_825ad51e000ddc6ca5["level"] == 7) && ($HY_970be7709f584ff59c["pmid"] != $HY_825ad51e000ddc6ca5["id"])) {
			hy_bd307d155f057feb55("你试图操作不属于你管理的卡号" . $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"]);
		}

		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["keys"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_c6b04ae31d3223f57b = $HY_825ad51e000ddc6ca5["level"] - 5;
	$HY_c6b04ae31d3223f57b = (3 < $HY_c6b04ae31d3223f57b ? 3 : $HY_c6b04ae31d3223f57b);

	if ($HY_040af70e369786c2e4 == "锁定") {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `islock`=" . $HY_c6b04ae31d3223f57b . " where `keys`" . $HY_6e90f7f84b05b2a86d, "sync");
		hy_bd307d155f057feb55("ok1," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
	}
	else {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `islock`=0 where `keys`" . $HY_6e90f7f84b05b2a86d, "sync");
		hy_bd307d155f057feb55("ok0," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
	}

	break;

case "删除":
	hy_af470935131a2269b8();

	if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
		hy_bd307d155f057feb55("你真聪明，绕到这来了");
	}

	if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["level"], "52")) {
		hy_bd307d155f057feb55("您无权限执行删除操作！", 1);
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_c3a9c60b89d91b0fa5);
	$HY_284f8b7464fe1b9fb8 = "";

	if (count($HY_c3a9c60b89d91b0fa5) == 1) {
		$HY_6e90f7f84b05b2a86d = "='" . $HY_c3a9c60b89d91b0fa5[0] . "'";
	}
	else {
		$HY_6e90f7f84b05b2a86d = " in ('" . implode("','", $HY_c3a9c60b89d91b0fa5) . "')";
	}

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `keys`,`islock` from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `keys`" . $HY_6e90f7f84b05b2a86d);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的卡好像都不存在！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . $HY_040af70e369786c2e4 . count($HY_c3a9c60b89d91b0fa5) . "个注册卡号的操作请求，只找到" . count($HY_8179ae24b4003846ce) . "张卡";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["keys"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("replace into kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle (`managerid`, `keyfix`,`keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`,`deltime`,`delmid`) select `managerid`,`keyfix`,`keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`," . time() . "," . $HY_825ad51e000ddc6ca5["id"] . " from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `keys`" . $HY_6e90f7f84b05b2a86d, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_173d86697f24ffa1ee == $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where  `keys`" . $HY_6e90f7f84b05b2a86d, "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			hy_bd307d155f057feb55("ok3," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
		}
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), 1);
	break;

case "savetags":
	hy_af470935131a2269b8();
	$HY_281041c3238cce0fd0 = "";
	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_22d275a1af69c39370 = hy_ba8120f86a7df1aecc("tags", "gp", "sqljs", "");

	if ($HY_825ad51e000ddc6ca5["level"] == 6) {
		$HY_281041c3238cce0fd0 = " and `managerid`=" . $HY_825ad51e000ddc6ca5["id"];
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . $HY_2ab9e26cf32802e7c1 . " set `tag`='" . $HY_22d275a1af69c39370 . "' where `keys`='" . $HY_c3a9c60b89d91b0fa5 . "'" . $HY_281041c3238cce0fd0, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("ok");
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
case "设置标签":
	hy_af470935131a2269b8();

	if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
		hy_bd307d155f057feb55("你真聪明，绕到这来了");
	}

	$HY_49b352a729a557bd96 = hy_ba8120f86a7df1aecc("newtag", "gp", "sqljs", "");

	if (50 < hy_cfd7029aa774332944($HY_49b352a729a557bd96)) {
		hy_bd307d155f057feb55("标签最大长度50个字符！", 1);
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_281041c3238cce0fd0 = "";

	if ($HY_825ad51e000ddc6ca5["level"] == 6) {
		$HY_281041c3238cce0fd0 = " and `managerid`=" . $HY_825ad51e000ddc6ca5["id"];
	}

	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_c3a9c60b89d91b0fa5);
	$HY_284f8b7464fe1b9fb8 = "";

	if (count($HY_c3a9c60b89d91b0fa5) == 1) {
		$HY_6e90f7f84b05b2a86d = "='" . $HY_c3a9c60b89d91b0fa5[0] . "'";
	}
	else {
		$HY_6e90f7f84b05b2a86d = " in ('" . implode("','", $HY_c3a9c60b89d91b0fa5) . "')";
	}

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `keys`,`islock` from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `keys`" . $HY_6e90f7f84b05b2a86d . $HY_281041c3238cce0fd0);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的卡好像都不存在或是您没有权限对选择的注册卡执行操作！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . count($HY_c3a9c60b89d91b0fa5) . "个注册卡号的设置标签操作的请求，只有" . count($HY_8179ae24b4003846ce) . "条被处理";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["keys"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `tag`='" . $HY_49b352a729a557bd96 . "' where `keys`" . $HY_6e90f7f84b05b2a86d, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("ok4," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), 1);
	break;

case "还原":
	hy_af470935131a2269b8();

	if ($HY_825ad51e000ddc6ca5["level"] < 8) {
		hy_bd307d155f057feb55("只有作者级别的才可以还原数据");
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_c3a9c60b89d91b0fa5);
	$HY_284f8b7464fe1b9fb8 = "";

	if (count($HY_c3a9c60b89d91b0fa5) == 1) {
		$HY_6e90f7f84b05b2a86d = "='" . $HY_c3a9c60b89d91b0fa5[0] . "'";
	}
	else {
		$HY_6e90f7f84b05b2a86d = " in ('" . implode("','", $HY_c3a9c60b89d91b0fa5) . "')";
	}

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `keys`,`islock` from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle where `keys`" . $HY_6e90f7f84b05b2a86d);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的卡好像都不存在！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . $HY_040af70e369786c2e4 . count($HY_c3a9c60b89d91b0fa5) . "个注册卡号的操作请求，只找到" . count($HY_8179ae24b4003846ce) . "张卡";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["keys"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("replace into kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " (`managerid`, `keyfix`, `keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername`) select `managerid`, `keyfix`, `keys`, `keyspassword`, `addtime`, `ordernum`, `cday`, `linknum`, `points`, `keyextattr`, `tag`, `islock`, `isback`, `cztime`, `czusername` from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle where `keys`" . $HY_6e90f7f84b05b2a86d, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_173d86697f24ffa1ee == $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle where  `keys`" . $HY_6e90f7f84b05b2a86d, "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			hy_bd307d155f057feb55("ok5," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
		}
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), 1);
	break;

case "退卡":
	hy_af470935131a2269b8();

	if ($HY_825ad51e000ddc6ca5["level"] < 8) {
		hy_bd307d155f057feb55("只有作者级才可能需要退卡操作！");
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_c3a9c60b89d91b0fa5 = explode(",", $HY_c3a9c60b89d91b0fa5);
	$HY_284f8b7464fe1b9fb8 = "";

	if (count($HY_c3a9c60b89d91b0fa5) == 1) {
		$HY_6e90f7f84b05b2a86d = "='" . $HY_c3a9c60b89d91b0fa5[0] . "' and A.`isback`=0 ";
	}
	else {
		$HY_6e90f7f84b05b2a86d = " in ('" . implode("','", $HY_c3a9c60b89d91b0fa5) . "') and A.`isback`=0 ";
	}

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select A.`ordernum`, A.`managerid`,A.`keyfix`,A.`keys`,A.`keyspassword`,A.`cday` as cdaya, A.`cztime`,A.`czusername`, A.`ordernum`,B.`username`,B.`cday` as cdayb, B.`starttime`,B.`endtime`,B.`activetimes`,C.`level`,C.`rmb` from (kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " as A left join kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " as B on A.`czusername`=B.`username`) left join kss_tb_manager as C on A.`managerid`=C.`id`  where A.`keys`" . $HY_6e90f7f84b05b2a86d);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的卡好像都不符合退卡规则或不存在！");
	}

	if (20 < count($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("每次最多退20张卡号！");
	}

	$HY_412c31bdb5138a69f8 = 0;
	$HY_1b2de0d9208ba0bcbd = "";
	$HY_1c32882f78a07892a9 = array();
	$HY_0acbd9aa3f55bd6a5e = 0;
	$HY_f93ec5870ca7ebb2d7 = 0;
	$HY_38239eb298f02bd58e = array();
	$HY_3e36b9ec7a7a5c1416 = 0;
	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["keys"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_7d3a648a9ef2a9bd29 = array();
	$HY_60964db0f7b1f0029e = array();
	$HY_da7caefd463a4bbebe = array();
	$HY_0c3360f16d9c13d646 = array();
	$HY_6aa639fbc54e5bd134 = array();
	$HY_27a19a65472ce8dc50 = 0;
	$HY_cb3fdc78114f909132 = 0;
	ob_clean();
	$HY_6b0856216de69fec68 = 0;

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		if (($HY_412c31bdb5138a69f8 != 0) && ($HY_412c31bdb5138a69f8 != $HY_970be7709f584ff59c["managerid"])) {
			hy_bd307d155f057feb55("退卡操作无效<br>选择注册卡时请注意，只能同时对某一个代理的卡执行退款操作。<br>你选择了超出一个代理的卡号");
		}

		$HY_412c31bdb5138a69f8 = $HY_970be7709f584ff59c["managerid"];
		$HY_6b0856216de69fec68 = $HY_970be7709f584ff59c["rmb"];

		if ($HY_970be7709f584ff59c["level"] != 6) {
			hy_bd307d155f057feb55("只能给代理的卡执行退卡操作");
		}

		$HY_69c738ac2c1b2e8925 = $HY_970be7709f584ff59c["keys"] . $HY_970be7709f584ff59c["keyspassword"];

		if (!isset($HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]])) {
			$HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]] = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select `keycount`,`agentamount7`, `agentamount`,`orderstatus` from kss_tb_order where ordernum='" . $HY_970be7709f584ff59c["ordernum"] . "'");
		}

		if (empty($HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]])) {
			$HY_7d3a648a9ef2a9bd29[] = array("username" => $HY_970be7709f584ff59c["czusername"], "ok" => 0, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => "？", "price2" => 0, "price7" => 0, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => 0 < $HY_970be7709f584ff59c["cztime"] ? "是" : "否", "endtime" => empty($HY_970be7709f584ff59c["endtime"]) ? "" : ($HY_970be7709f584ff59c["endtime"] == 0 ? $HY_970be7709f584ff59c["cdayb"] : round((time() - $HY_970be7709f584ff59c["endtime"]) / 86400, 2)), "intro" => "订单未找到，不能退卡");
			continue;
		}

		$HY_fa828e36ebe3db0edd = $HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]]["agentamount"] / $HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]]["keycount"];
		$HY_92688d8f85a8d43d6d = $HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]]["agentamount7"] / $HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]]["keycount"];

		if ($HY_1c32882f78a07892a9[$HY_970be7709f584ff59c["ordernum"]]["orderstatus"] < 8) {
			$HY_7d3a648a9ef2a9bd29[] = array("username" => $HY_970be7709f584ff59c["czusername"], "ok" => 0, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => $HY_fa828e36ebe3db0edd, "price2" => 0, "price7" => 0, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => 0 < $HY_970be7709f584ff59c["cztime"] ? "是" : "否", "endtime" => empty($HY_970be7709f584ff59c["endtime"]) ? "" : ($HY_970be7709f584ff59c["endtime"] == 0 ? $HY_970be7709f584ff59c["cdayb"] : round((time() - $HY_970be7709f584ff59c["endtime"]) / 86400, 2)), "intro" => "订单未完成状态，不能退卡");
			continue;
		}

		if ($HY_970be7709f584ff59c["cztime"] != 0) {
			if (!isset($HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]])) {
				$HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]] = $HY_970be7709f584ff59c["cdayb"];
				$HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] = $HY_970be7709f584ff59c["endtime"];
			}

			if (is_null($HY_970be7709f584ff59c["activetimes"])) {
			}

			if ($HY_970be7709f584ff59c["activetimes"] == 0) {
				$HY_826e6b687a8760ed5c = $HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]];
				$HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]] = $HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]] - $HY_970be7709f584ff59c["cdaya"];
				$HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] = $HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - ($HY_970be7709f584ff59c["cdaya"] * 86400);
				$HY_0acbd9aa3f55bd6a5e = $HY_0acbd9aa3f55bd6a5e + $HY_fa828e36ebe3db0edd;
				$HY_f93ec5870ca7ebb2d7 = $HY_f93ec5870ca7ebb2d7 + $HY_92688d8f85a8d43d6d;
				$HY_0c3360f16d9c13d646[] = $HY_970be7709f584ff59c["keys"];
				$HY_6aa639fbc54e5bd134[] = $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"];
				$HY_3e36b9ec7a7a5c1416 = $HY_3e36b9ec7a7a5c1416 + 1;
				$HY_7d3a648a9ef2a9bd29[] = array("username" => $HY_970be7709f584ff59c["czusername"], "ok" => 1, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => $HY_fa828e36ebe3db0edd, "price2" => $HY_fa828e36ebe3db0edd, "price7" => $HY_92688d8f85a8d43d6d, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => "是", "endtime" => $HY_826e6b687a8760ed5c, "intro" => "帐号从未登录，金额全退");
				continue;
			}

			if ($HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] <= time()) {
				$HY_7d3a648a9ef2a9bd29[] = array("username" => $HY_970be7709f584ff59c["czusername"], "ok" => 0, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => $HY_fa828e36ebe3db0edd, "price2" => 0, "price7" => 0, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => "是", "endtime" => 0, "intro" => "用户已过期，不退款");
				continue;
			}

			if (($HY_970be7709f584ff59c["cdaya"] * 86400) < ($HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - time())) {
				$HY_826e6b687a8760ed5c = round(($HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - time()) / 86400, 2);
				$HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]] = $HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]] - $HY_970be7709f584ff59c["cdaya"];
				$HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] = $HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - ($HY_970be7709f584ff59c["cdaya"] * 86400);
				$HY_0acbd9aa3f55bd6a5e = $HY_0acbd9aa3f55bd6a5e + $HY_fa828e36ebe3db0edd;
				$HY_f93ec5870ca7ebb2d7 = $HY_f93ec5870ca7ebb2d7 + $HY_92688d8f85a8d43d6d;
				$HY_0c3360f16d9c13d646[] = $HY_970be7709f584ff59c["keys"];
				$HY_6aa639fbc54e5bd134[] = $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"];
				$HY_3e36b9ec7a7a5c1416 = $HY_3e36b9ec7a7a5c1416 + 1;
				$HY_7d3a648a9ef2a9bd29[] = array("username" => $HY_970be7709f584ff59c["czusername"], "ok" => 1, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => $HY_fa828e36ebe3db0edd, "price2" => $HY_fa828e36ebe3db0edd, "price7" => $HY_92688d8f85a8d43d6d, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => "是", "endtime" => $HY_826e6b687a8760ed5c, "intro" => "有效天数足够，全额退款");
				continue;
			}
			else {
				$HY_3a55ee887d71d0ac05 = round(($HY_fa828e36ebe3db0edd * ($HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - time())) / ($HY_970be7709f584ff59c["cdaya"] * 86400), 2);
				$HY_81daf6929b74d6b412 = round(($HY_92688d8f85a8d43d6d * ($HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - time())) / ($HY_970be7709f584ff59c["cdaya"] * 86400), 2);
				$HY_2dd91bdbde610014ea = round(($HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] - time()) / 86400, 2);
				$HY_60964db0f7b1f0029e[$HY_970be7709f584ff59c["username"]] = 0;
				$HY_da7caefd463a4bbebe[$HY_970be7709f584ff59c["username"]] = $HY_970be7709f584ff59c["starttime"];
				$HY_0acbd9aa3f55bd6a5e = $HY_0acbd9aa3f55bd6a5e + $HY_3a55ee887d71d0ac05;
				$HY_f93ec5870ca7ebb2d7 = $HY_f93ec5870ca7ebb2d7 + $HY_81daf6929b74d6b412;
				$HY_27a19a65472ce8dc50 = ($HY_27a19a65472ce8dc50 + $HY_fa828e36ebe3db0edd) - $HY_3a55ee887d71d0ac05;
				$HY_ada185305dfdb73887 = ($HY_27a19a65472ce8dc50 + $HY_92688d8f85a8d43d6d) - $HY_81daf6929b74d6b412;
				$HY_0c3360f16d9c13d646[] = $HY_970be7709f584ff59c["keys"];
				$HY_6aa639fbc54e5bd134[] = $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"];
				$HY_3e36b9ec7a7a5c1416 = $HY_3e36b9ec7a7a5c1416 + 1;
				$HY_7d3a648a9ef2a9bd29[] = array("username" => $HY_970be7709f584ff59c["czusername"], "ok" => 1, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => $HY_fa828e36ebe3db0edd, "price2" => $HY_3a55ee887d71d0ac05, "price7" => $HY_92688d8f85a8d43d6d, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => "是", "endtime" => $HY_2dd91bdbde610014ea, "intro" => "有效天数不足，部份退款");
				continue;
			}
		}
		else {
			$HY_0acbd9aa3f55bd6a5e = $HY_0acbd9aa3f55bd6a5e + $HY_fa828e36ebe3db0edd;
			$HY_f93ec5870ca7ebb2d7 = $HY_f93ec5870ca7ebb2d7 + $HY_92688d8f85a8d43d6d;
			$HY_0c3360f16d9c13d646[] = $HY_970be7709f584ff59c["keys"];
			$HY_6aa639fbc54e5bd134[] = $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"];
			$HY_3e36b9ec7a7a5c1416 = $HY_3e36b9ec7a7a5c1416 + 1;
			$HY_7d3a648a9ef2a9bd29[] = array("username" => "", "ok" => 1, "keys" => $HY_69c738ac2c1b2e8925, "cday" => $HY_970be7709f584ff59c["cdaya"] * 1, "price" => $HY_fa828e36ebe3db0edd, "price2" => $HY_fa828e36ebe3db0edd, "price7" => $HY_92688d8f85a8d43d6d, "ordernum" => $HY_970be7709f584ff59c["ordernum"], "isused" => "否", "endtime" => "", "intro" => "未充值的卡，全额退款");
		}
	}

	uasort($HY_7d3a648a9ef2a9bd29, "my_sort");
	echo "ok6,<div style='width:100%; height:360px; overflow:auto; border:0;'>";
	echo "<table class='listtable' border='0' cellspacing='1' cellpadding='0' align='center' width='100%'>";
	echo "<tr class='trhead'><td>共计" . $HY_3e36b9ec7a7a5c1416 . "张卡</td><td>天数</td><td>已充值</td><td>单价</td><td>退款</td><td>用户名</td><td>剩余天</td><td>备注</td></tr>";

	foreach ($HY_7d3a648a9ef2a9bd29 as $HY_bce7387a12b6f0fa6a ) {
		echo "<tr class=trd><td class=keynum>" . $HY_bce7387a12b6f0fa6a["keys"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["cday"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["isused"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["price"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["price2"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["username"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["endtime"] . "</td><td>" . $HY_bce7387a12b6f0fa6a["intro"] . "</td></tr>";
	}

	echo "</table></div>";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `isback`=1,`islock`=3 where `keys` in ('" . implode("','", $HY_0c3360f16d9c13d646) . "')", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		echo "<p color=red>将注册卡设置为已退状态时出错，还未退款" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "</p>";
		exit();
	}

	$HY_45d8ea1fd79b833248 = "";

	foreach ($HY_60964db0f7b1f0029e as $HY_5380a89366e616d954 => $HY_39f33d52374bdc42f7 ) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `cday`=" . $HY_39f33d52374bdc42f7 . ",`endtime`=" . $HY_da7caefd463a4bbebe[$HY_5380a89366e616d954] . " where `username`='" . $HY_5380a89366e616d954 . "'", "sync");

		if ($HY_173d86697f24ffa1ee == false) {
			$HY_45d8ea1fd79b833248 .= "扣除用户" . $HY_5380a89366e616d954 . "的时间时出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "\r\n";
		}
	}

	if ($HY_45d8ea1fd79b833248 != "") {
		echo "<textarea style='width:600px;height:20px;color:#f00'>" . $HY_45d8ea1fd79b833248 . "</textarea>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_c5aaf359b892dfe165 . "," . $HY_412c31bdb5138a69f8 . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_6b0856216de69fec68 . "," . $HY_0acbd9aa3f55bd6a5e . ",6,'','<span class=ek ekey=" . YH2 . implode(",", $HY_6aa639fbc54e5bd134) . YH2 . ">退卡</span>')", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
		$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
		hy_bd307d155f057feb55("记录日志失败，操作中断[未加款]。" . $HY_3b22eac9ea6b5c92a5);
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set rmb=rmb+" . $HY_0acbd9aa3f55bd6a5e . ",`xfrmb`=`xfrmb`-" . $HY_0acbd9aa3f55bd6a5e . " where `id`=" . $HY_412c31bdb5138a69f8, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		echo "<p color=red>注册卡已退，但退还款项" . $HY_0acbd9aa3f55bd6a5e . "到代理帐号时操作出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "</p>";
		exit();
	}

	$HY_37d035a9af9bb3bd57 = 1;
	$HY_a66d0e420d4d2a8734 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and id=" . $HY_412c31bdb5138a69f8);
	$HY_9f29fcab24056e81dc = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"], $HY_a66d0e420d4d2a8734["pmid"]);

	if (!empty($HY_9f29fcab24056e81dc)) {
		$HY_37d035a9af9bb3bd57 = 0;
	}

	$HY_d397f76919d16c7972 = "";

	if ($HY_37d035a9af9bb3bd57 == 0) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_c5aaf359b892dfe165 . "," . $HY_9f29fcab24056e81dc["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_9f29fcab24056e81dc["rmb"] . "," . $HY_f93ec5870ca7ebb2d7 . ",6,'','<span class=ek ekey=" . YH2 . implode(",", $HY_6aa639fbc54e5bd134) . YH2 . ">退卡</span>')", "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("记录日志失败，操作中断[未加款]。" . $HY_3b22eac9ea6b5c92a5);
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set rmb=rmb+" . $HY_f93ec5870ca7ebb2d7 . ",`xfrmb`=`xfrmb`-" . $HY_f93ec5870ca7ebb2d7 . " where `id`=" . $HY_9f29fcab24056e81dc["id"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			echo "<p color=red>注册卡已退，但退还款项" . $HY_0acbd9aa3f55bd6a5e . "到总代理帐号时操作出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "</p>";
			exit();
		}

		$HY_d397f76919d16c7972 = "，退款" . $HY_f93ec5870ca7ebb2d7 . "元给总代，总代损耗" . $HY_cb3fdc78114f909132 . "元";
	}

	echo "<p>退卡成功，共退款" . $HY_0acbd9aa3f55bd6a5e . "元给代理，代理损耗" . $HY_27a19a65472ce8dc50 . "元" . $HY_d397f76919d16c7972 . "</p>";
	exit();
	break;

default:
	break;
}

?>
