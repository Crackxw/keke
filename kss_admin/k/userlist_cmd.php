<?php

function HY_9c183fc2ea95beee65($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");

switch ($HY_040af70e369786c2e4) {
case "unline":
	if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
		hy_bd307d155f057feb55("你真聪明，绕到这来了");
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_3f5f91c41b6190af29 = hy_ba8120f86a7df1aecc("clientid", "gp", "int", 0);
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

	$HY_33742d51eb28d8a5da = "user";

	if ($HY_3f5f91c41b6190af29 != 0) {
		$HY_33742d51eb28d8a5da = "client";
		$HY_6e90f7f84b05b2a86d .= " and clientid=" . $HY_3f5f91c41b6190af29;
	}

	$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_" . $HY_33742d51eb28d8a5da . "_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `isonline`=0 where `username`" . $HY_6e90f7f84b05b2a86d . $HY_281041c3238cce0fd0, "sync");
	hy_bd307d155f057feb55("ok");
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

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `username`,`islock` from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`" . $HY_6e90f7f84b05b2a86d . $HY_281041c3238cce0fd0 . " and `islock`<" . ($HY_825ad51e000ddc6ca5["level"] - 4));

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("您没有权限对选择的用户执行锁定或解锁操作！<br>可能是你选择的会员已被高于你级别的管理锁定。");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . $HY_040af70e369786c2e4 . count($HY_c3a9c60b89d91b0fa5) . "个用户的操作请求，只有" . count($HY_8179ae24b4003846ce) . "条被处理";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["username"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_c6b04ae31d3223f57b = $HY_825ad51e000ddc6ca5["level"] - 5;
	$HY_c6b04ae31d3223f57b = (3 < $HY_c6b04ae31d3223f57b ? 3 : $HY_c6b04ae31d3223f57b);

	if ($HY_040af70e369786c2e4 == "锁定") {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `islock`=" . $HY_c6b04ae31d3223f57b . " where `username`" . $HY_6e90f7f84b05b2a86d, "sync");
		hy_bd307d155f057feb55("ok1," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
	}
	else {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `islock`=0 where `username`" . $HY_6e90f7f84b05b2a86d, "sync");
		hy_bd307d155f057feb55("ok0," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
	}

	break;

case "解绑":
	if ($HY_2ab9e26cf32802e7c1 == "_recycle") {
		hy_bd307d155f057feb55("你真聪明，绕到这来了");
	}

	$HY_c3a9c60b89d91b0fa5 = hy_ba8120f86a7df1aecc("keys", "gp", "sql", "");
	$HY_281041c3238cce0fd0 = "";
	if (($HY_825ad51e000ddc6ca5["level"] < 8) && !hy_8c3a93be5d853f54b7($HY_825ad51e000ddc6ca5["powerlist"], "17")) {
		hy_bd307d155f057feb55("你没有解绑权限");
	}

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

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `username`,`islock` from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`" . $HY_6e90f7f84b05b2a86d . $HY_281041c3238cce0fd0);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的用户好像都不存在或是您没有权限对选择的用户执行操作！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . count($HY_c3a9c60b89d91b0fa5) . "个会员的设置标签操作的请求，只有" . count($HY_8179ae24b4003846ce) . "个被处理";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["username"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `pccode`='' where `username`" . $HY_6e90f7f84b05b2a86d, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_client_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set id=1 where id=0", "notsync");

		if ($HY_82d6536edf704aabc5->HY_79dd530b16454e1698() == 1146) {
			hy_bd307d155f057feb55("ok9," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
		}
		else {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_client_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `pccode`='' where `username`" . $HY_6e90f7f84b05b2a86d, "sync");

			if ($HY_173d86697f24ffa1ee !== false) {
				hy_bd307d155f057feb55("ok9," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
			}
		}
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), 1);
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

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `username`,`islock`,`endtime` from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`" . $HY_6e90f7f84b05b2a86d);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的用户好像都不存在！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . $HY_040af70e369786c2e4 . count($HY_c3a9c60b89d91b0fa5) . "个用户的操作请求，只找到" . count($HY_8179ae24b4003846ce) . "个用户";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["username"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("replace into kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle (`istempuser`,`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`,`deltime`,`delmid`) select `istempuser`,`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`," . time() . "," . $HY_825ad51e000ddc6ca5["id"] . " from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`" . $HY_6e90f7f84b05b2a86d, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_173d86697f24ffa1ee == $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where  `username`" . $HY_6e90f7f84b05b2a86d, "sync");

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

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . $HY_2ab9e26cf32802e7c1 . " set `tag`='" . $HY_22d275a1af69c39370 . "' where `username`='" . $HY_c3a9c60b89d91b0fa5 . "'" . $HY_281041c3238cce0fd0, "sync");

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

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `username`,`islock` from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " where `username`" . $HY_6e90f7f84b05b2a86d . $HY_281041c3238cce0fd0);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的卡好像都不存在或是您没有权限对选择的注册卡执行操作！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . count($HY_c3a9c60b89d91b0fa5) . "个会员的设置标签操作的请求，只有" . count($HY_8179ae24b4003846ce) . "个被处理";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["username"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " set `tag`='" . $HY_49b352a729a557bd96 . "' where `username`" . $HY_6e90f7f84b05b2a86d, "sync");

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

	$HY_8179ae24b4003846ce = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `username`,`islock` from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle where `username`" . $HY_6e90f7f84b05b2a86d);

	if (empty($HY_8179ae24b4003846ce)) {
		hy_bd307d155f057feb55("你选择的会员好像都不存在！");
	}

	if (count($HY_8179ae24b4003846ce) != count($HY_c3a9c60b89d91b0fa5)) {
		$HY_284f8b7464fe1b9fb8 = "你提交" . $HY_040af70e369786c2e4 . count($HY_c3a9c60b89d91b0fa5) . "个会员的操作请求，只找到" . count($HY_8179ae24b4003846ce) . "个会员";
	}

	$HY_a157ddd7c28b8100aa = "";

	foreach ($HY_8179ae24b4003846ce as $HY_970be7709f584ff59c ) {
		$HY_a157ddd7c28b8100aa .= "'" . $HY_970be7709f584ff59c["username"] . "',";
	}

	$HY_a157ddd7c28b8100aa = substr($HY_a157ddd7c28b8100aa, 0, strlen($HY_a157ddd7c28b8100aa) - 1);
	$HY_6e90f7f84b05b2a86d = " in (" . $HY_a157ddd7c28b8100aa . ")";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("replace into kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " (`managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata`) select `managerid`,`username`,`password`,`password2`,`cday`,`linknum`,`points`,`keyextattr`,`islock`,`tag`,`bdinfo`,`linecode`,`pccode`,`addtime`,`starttime`,`endtime`,`lasttime`,`isonline`,`lastip`,`activetimes`,`unlocktimes`,`unlockday`,`cztimes`,`isusetestkey`,`parentuser`,`intro`,`updata` from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle where `username`" . $HY_6e90f7f84b05b2a86d, "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_173d86697f24ffa1ee == $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . "_recycle where  `username`" . $HY_6e90f7f84b05b2a86d, "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			hy_bd307d155f057feb55("ok5," . $HY_284f8b7464fe1b9fb8 . "," . str_replace("'", "", $HY_a157ddd7c28b8100aa));
		}
	}

	hy_bd307d155f057feb55($HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), 1);
	break;

default:
	break;
}

?>
