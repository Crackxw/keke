<?php

function HY_e3fbd6dea1317f64ae($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(7);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "gp", "int", 0);

if ($HY_040af70e369786c2e4 == "del") {
	hy_af470935131a2269b8();

	if ($HY_825ad51e000ddc6ca5["level"] < 8) {
		hy_bd307d155f057feb55("非作者，禁止删除帐号。");
	}

	if ($HY_365893812300a028d8 == $HY_825ad51e000ddc6ca5["id"]) {
		hy_bd307d155f057feb55("你不能自己删除自己。");
	}

	$HY_970be7709f584ff59c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_365893812300a028d8);

	if (empty($HY_970be7709f584ff59c)) {
		hy_bd307d155f057feb55("你要删除的帐号未找到。");
	}

	if ($HY_970be7709f584ff59c["level"] == 7) {
		if ($HY_825ad51e000ddc6ca5["level"] < 7) {
			hy_bd307d155f057feb55("只有作者级以上的帐号才有权限执行此操作！");
		}

		if ($HY_825ad51e000ddc6ca5["pid"] != $HY_970be7709f584ff59c["pid"]) {
			hy_bd307d155f057feb55("该总代理帐号不是您的(pid)，你无权操作");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where pmid=" . $HY_365893812300a028d8 . " limit 0,1");

		if (!empty($HY_173d86697f24ffa1ee)) {
			hy_bd307d155f057feb55("该总代理名下还有代理帐号，请先将名下的代理帐号转出或删除。");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where managerid=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除总代理帐号时清理kss_tb_agentprice表出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_log_agentrmb where managerid=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除总代理帐号时清理kss_tb_log_agentrmb表出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_manager where `id`=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除总代理帐号时操作kss_tb_manager表出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		hy_bd307d155f057feb55("delok删除总代理帐号成功");
	}

	if ($HY_970be7709f584ff59c["level"] == 6) {
		if ($HY_825ad51e000ddc6ca5["pid"] != $HY_970be7709f584ff59c["pid"]) {
			hy_bd307d155f057feb55("该代理帐号不是您的(pid)，你无权操作");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where managerid=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除代理帐号时清理kss_tb_agentprice表出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_log_agentrmb where managerid=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除代理帐号时清理kss_tb_log_agentrmb表出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_860fba5a6400831f32 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and level>7 limit 0,1");

		if (empty($HY_860fba5a6400831f32)) {
			hy_bd307d155f057feb55("未找到该代理的作者级帐号ID");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set pmid=" . $HY_860fba5a6400831f32["id"] . ",`isdel`=1,`username`=concat('del_',`username`) where `id`=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除代理帐号时出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		hy_bd307d155f057feb55("delok删除代理帐号成功");
	}

	if ($HY_970be7709f584ff59c["level"] == 8) {
		if ($HY_825ad51e000ddc6ca5["level"] != 9) {
			hy_bd307d155f057feb55("只有管理员才有权限删除作者帐号");
		}

		$HY_5eee171f8e165c5311 = "delok已清理的表";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where `pid`=" . $HY_970be7709f584ff59c["pid"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("清理折扣表kss_tb_agentprice出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_5eee171f8e165c5311 = "折扣表kss_tb_agentprice, ";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_log_agentrmb where `pid`=" . $HY_970be7709f584ff59c["pid"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("清理代理财务日志表kss_tb_log_agentrmb出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_5eee171f8e165c5311 .= "代理财务日志表kss_tb_log_agentrmb, ";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_keyset where `pid`=" . $HY_970be7709f584ff59c["pid"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("清理卡类表kss_tb_keyset出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_5eee171f8e165c5311 .= "卡类表kss_tb_keyset, ";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_log_login where `pid`=" . $HY_970be7709f584ff59c["pid"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("清理登陆日志表kss_tb_log_login出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_5eee171f8e165c5311 .= "卡类表`kss_tb_log_login, ";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_order where `pid`=" . $HY_970be7709f584ff59c["pid"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除作者帐号时清理订单表kss_tb_order出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		$HY_5eee171f8e165c5311 .= "订单表kss_tb_order, ";
		$HY_cc69eba064c5392994 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft where `pid`=" . $HY_970be7709f584ff59c["pid"]);

		if (!empty($HY_cc69eba064c5392994)) {
			$HY_376d53f8e96f680392 = array();

			foreach ($HY_cc69eba064c5392994 as $HY_2823261ee6c1283e3f ) {
				$HY_376d53f8e96f680392[] = "`kss_z_user_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
				$HY_376d53f8e96f680392[] = "`kss_z_key_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
				$HY_376d53f8e96f680392[] = "`kss_z_log_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
				$HY_376d53f8e96f680392[] = "`kss_z_client_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
				$HY_376d53f8e96f680392[] = "`kss_z_cz_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "`";
				$HY_376d53f8e96f680392[] = "`kss_z_user_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "_recycle`";
				$HY_376d53f8e96f680392[] = "`kss_z_key_" . $HY_2823261ee6c1283e3f["pid"] . "_" . $HY_2823261ee6c1283e3f["id"] . "_recycle`";
			}

			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("drop table if exists " . implode(",", $HY_376d53f8e96f680392), "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				hy_bd307d155f057feb55("删除作者帐号时清理会员数据表kss_z_*出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
			}

			$HY_5eee171f8e165c5311 .= "数据表kss_z_系列, ";
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_soft where `pid`=" . $HY_970be7709f584ff59c["pid"], "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				hy_bd307d155f057feb55("删除作者帐号时清理软件表kss_tb_soft出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
			}

			$HY_5eee171f8e165c5311 .= "软件表kss_tb_soft, ";
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_manager where pid=" . $HY_970be7709f584ff59c["pid"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("删除作者帐号时清理kss_tb_manager出错:" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
	}

	hy_bd307d155f057feb55("delok删除作者帐号成功");
}

if ($HY_040af70e369786c2e4 == "lock") {
	hy_af470935131a2269b8();
	$HY_e9890ac0540efd6af3 = hy_ba8120f86a7df1aecc("lock", "gp", "int", 0);

	if ($HY_365893812300a028d8 == 0) {
		hy_bd307d155f057feb55("传入的帐号ID错误！");
	}

	if ($HY_365893812300a028d8 == $HY_825ad51e000ddc6ca5["id"]) {
		hy_bd307d155f057feb55("你不能自己锁定自己。");
	}

	$HY_c27c05c8ec8b51c4d4 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`=" . $HY_365893812300a028d8);

	if (empty($HY_c27c05c8ec8b51c4d4)) {
		hy_bd307d155f057feb55("用户帐号没找到");
	}

	if (($HY_825ad51e000ddc6ca5["level"] != 9) && ($HY_c27c05c8ec8b51c4d4["pid"] != $HY_825ad51e000ddc6ca5["pid"])) {
		hy_bd307d155f057feb55("该帐号不属于您的(pid)，您无权操作该帐号");
	}

	if (($HY_825ad51e000ddc6ca5["level"] == 7) && ($HY_825ad51e000ddc6ca5["id"] != $HY_c27c05c8ec8b51c4d4["pmid"])) {
		hy_bd307d155f057feb55("该代理帐号不是您的(pmid)，你无权操作");
	}

	if ($HY_825ad51e000ddc6ca5["level"] <= $HY_c27c05c8ec8b51c4d4["level"]) {
		hy_bd307d155f057feb55("你只能锁定比你级别低的帐号");
	}

	if ($HY_e9890ac0540efd6af3 == 1) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `islock`=0 where `id`=" . $HY_365893812300a028d8, "sync");
		hy_bd307d155f057feb55("unlock");
	}
	else {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `islock`=1 where `id`=" . $HY_365893812300a028d8, "sync");
		hy_bd307d155f057feb55("lock");
	}
}

$HY_9909dd2e2a768236f5 = array();
$HY_9909dd2e2a768236f5[0] = "无";
$HY_230c58c887d923d39b = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select id,username from kss_tb_manager");

foreach ($HY_230c58c887d923d39b as $HY_c1df05938323a7c131 ) {
	$HY_9909dd2e2a768236f5[$HY_c1df05938323a7c131["id"]] = $HY_c1df05938323a7c131["username"];
}

unset($HY_230c58c887d923d39b);
$HY_dd43036ba01064c085 = array("action" => $HY_d762a272713d62924f);
$HY_bb9a6b473cb68af21d = hy_ba8120f86a7df1aecc("page", "gp", "int", 1);
$HY_3111689aaf6bdf9340 = "SELECT `id` ";
$HY_c8c68e89d51fe69c0c = "SELECT * ";
$HY_b52b0b91dfe2f1d7ab = " where `id` in";
$HY_feebf8e7531b580b46 = "SELECT count(*) as tnum ";
$HY_505e9274f10eba7fe5 = "from `kss_tb_manager`  ";
$HY_c3249a3797396973c0 = array();
$HY_28bcbef2a8b75676c9 = "username";

if (stripos($_SERVER["HTTP_HOST"], ".hphu.com")) {
	$HY_28bcbef2a8b75676c9 = "qq";
}

$HY_b680f82755b73d556f = hy_ba8120f86a7df1aecc("keyword", "pg", "sql", "");
$HY_f33c0a7fc9acfba88f = hy_ba8120f86a7df1aecc("filed", "pg", "sql", $HY_28bcbef2a8b75676c9);
$HY_dd43036ba01064c085["keyword"] = $HY_b680f82755b73d556f;
$HY_dd43036ba01064c085["filed"] = $HY_f33c0a7fc9acfba88f;
if (($HY_825ad51e000ddc6ca5["level"] == "9") && (1 < LICTYPE)) {
	$HY_c3249a3797396973c0[] = " `isdel`=0 ";

	if ($HY_b680f82755b73d556f != "") {
		switch ($HY_f33c0a7fc9acfba88f) {
		case "username":
			$HY_c3249a3797396973c0[] = " `username` like '" . $HY_b680f82755b73d556f . "%'";
			break;

		case "pid":
			$HY_c3249a3797396973c0[] = " `pid`=" . $HY_b680f82755b73d556f;
			break;

		case "qq":
			$HY_c3249a3797396973c0[] = " `qq`='" . $HY_b680f82755b73d556f . "'";
			break;

		default:
		}
	}

	$HY_e38feb24e073afc890 = hy_ba8120f86a7df1aecc("level", "pg", "int", 0);
	$HY_dd43036ba01064c085["level"] = $HY_e38feb24e073afc890;

	switch ($HY_e38feb24e073afc890) {
	case "1":
		$HY_c3249a3797396973c0[] = " `level`>'7'";
		break;

	case "2":
		$HY_c3249a3797396973c0[] = " `level`='7'";
		break;

	case "3":
		$HY_c3249a3797396973c0[] = " `level`='6'";
		break;

	default:
	}
}
else {
	$HY_c3249a3797396973c0[] = " `pid`=" . $HY_825ad51e000ddc6ca5["pid"];
	$HY_c3249a3797396973c0[] = " `isdel`=0 ";

	if ($HY_825ad51e000ddc6ca5["level"] == 7) {
		$HY_c3249a3797396973c0[] = " `level`=6 ";
		$HY_c3249a3797396973c0[] = " `pmid`=" . $HY_825ad51e000ddc6ca5["id"] . " ";
	}

	if ($HY_b680f82755b73d556f != "") {
		switch ($HY_f33c0a7fc9acfba88f) {
		case "username":
			$HY_c3249a3797396973c0[] = " `username` like '" . $HY_b680f82755b73d556f . "%'";
			break;

		case "qq":
			$HY_c3249a3797396973c0[] = " `qq`='" . $HY_b680f82755b73d556f . "'";
			break;

		default:
		}
	}

	if (7 < $HY_825ad51e000ddc6ca5["level"]) {
		$HY_e38feb24e073afc890 = hy_ba8120f86a7df1aecc("level", "pg", "int", 0);
		$HY_dd43036ba01064c085["level"] = $HY_e38feb24e073afc890;

		switch ($HY_e38feb24e073afc890) {
		case "1":
			$HY_c3249a3797396973c0[] = " `level`>'7'";
			break;

		case "2":
			$HY_c3249a3797396973c0[] = " `level`='7'";
			break;

		case "3":
			$HY_c3249a3797396973c0[] = " `level`='6'";
			break;

		default:
		}
	}
}

$HY_672d06c58fe042d1f1 = "";

if (!empty($HY_c3249a3797396973c0)) {
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_c3249a3797396973c0);
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
echo "<textarea id=viewsql>";
echo htmlspecialchars($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
echo "\r\n";
$HY_c75bbf18eded470be7 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_3111689aaf6bdf9340 . $HY_505e9274f10eba7fe5 . $HY_672d06c58fe042d1f1 . " LIMIT " . (($HY_bb9a6b473cb68af21d - 1) * ZPAGESIZE) . "," . ZPAGESIZE);
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
	$HY_b52b0b91dfe2f1d7ab .= "(" . $HY_dbaa2d79a00983d5e1 . ") order by id asc";
	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0($HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab);
	echo $HY_c8c68e89d51fe69c0c . $HY_505e9274f10eba7fe5 . $HY_b52b0b91dfe2f1d7ab;
	echo "\r\n";
}

$HY_2aebb904fc93ff3ba7[] = hy_c28ffe58a6314b1fd4();
$HY_67bd9f7d4122865252 = $HY_82d6536edf704aabc5->HY_57d828656e47d31c35($HY_bb9a6b473cb68af21d, $HY_55b549aae5bc4d7185, $HY_dd43036ba01064c085) . "<span class=page_nav_a>" . $HY_e42b2c2aebb697a9ac . "行  耗时" . hy_9887b284c1cb9655e9($HY_2aebb904fc93ff3ba7) . "毫秒</span>";
echo "</textarea>";
echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"[delid]\").css('cursor','pointer').bind('click',function(){\r\nvar tid=$(this).attr(\"delid\");\r\nvar thref='admin_manager.php?action=managerlist&isajax=1&op=del&id='+tid;\t\r\nvar tlevel=\t$(this).attr(\"level\");\t\r\nvar talert='';\r\nif(tlevel==6){\r\ntalert='删除代理帐号会连代理的所有日志信息一起删除，并且不可恢复!<br>该代理的注册卡号不会被删除。<br>请确认是否删除该代理帐号？';\r\n}else if(tlevel==7){\r\ntalert='总代理帐号下没有代理帐号才可以删除，且删除后不可以恢复。<br>请确认是否删除该总代理帐号？';\t\r\n}else if(tlevel==8){\r\ntalert='删除作者帐号会连作者的所有软件一起删除，并且不可恢复!<br>是否删除该作者帐号吗？';\t\t\t\r\n}else{\r\nmalert('这是管理员帐号禁止删除!');\r\nreturn false;\r\n}\r\nmalert(talert,'警告',500,60,function(){\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='delok'){\r\n$(\"#trmanagerid\"+tid).remove();\t\r\nmalert(html.substr(5));\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n\r\n\r\n$(\"[lockid]\").bind('click',function(){\r\nvar othis=$(this);\r\nislock=othis.attr(\"lock\");\r\nvar ourl=\"admin_manager.php?action=managerlist&op=lock&isajax=1&id=\"+$(this).attr(\"lockid\")+\"&lock=\"+islock;\r\n$.ajax({\r\nurl: ourl,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='lock'){\r\nothis.attr(\"lock\",1);\r\nothis.attr(\"src\",othis.attr(\"src\").replace(\"b_usrcheck.png\",\"b_uncheck.png\"));\t\t\t\t\r\n}else if(html=='unlock'){\r\nothis.attr(\"lock\",0);\r\nothis.attr(\"src\",othis.attr(\"src\").replace(\"b_uncheck.png\",\"b_usrcheck.png\"));\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\t\r\n});\r\n\r\n\r\n});\r\n</script>\r\n";
if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1 < LICTYPE)) {
	echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"find_manager\" action=\"?action=managerlist\" method=\"post\"> \r\n<select name=\"level\" style=\"width:200px;height:22px\">\r\n<option value=0";
	echo $HY_e38feb24e073afc890 == 0 ? " selected" : "";
	echo ">显示所有类型帐号</option>\r\n<option value=1";
	echo $HY_e38feb24e073afc890 == 1 ? " selected" : "";
	echo ">只显示作者帐号</option>\r\n<option value=2";
	echo $HY_e38feb24e073afc890 == 2 ? " selected" : "";
	echo ">只显示总代理帐号</option>\r\n<option value=3";
	echo $HY_e38feb24e073afc890 == 3 ? " selected" : "";
	echo ">只显示代理帐号</option>\r\n</select>\r\n<select name=\"filed\" style=\"width:200px;height:22px\">\r\n<option value='qq' ";
	echo $HY_f33c0a7fc9acfba88f == "qq" ? " selected" : "";
	echo ">QQ</option>\r\n<option value='username' ";
	echo $HY_f33c0a7fc9acfba88f == "username" ? " selected" : "";
	echo ">用户名</option>\r\n";
	if ((1000 < LICTYPE) && ($HY_825ad51e000ddc6ca5["level"] == 9)) {
		echo "<option value='pid' ";
		echo $HY_f33c0a7fc9acfba88f == "pid" ? " selected" : "";
		echo ">PID</option>\r\n";
	}

	echo "</select>=><input type=\"text\" class=\"smlinput\" name=\"keyword\" value=\"";
	echo $HY_b680f82755b73d556f;
	echo "\" onclick=\"this.select()\"/>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"查找帐号\" />\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}
else {
	echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\"><form id=\"find_manager\" action=\"?action=managerlist\" method=\"post\">\r\n";

	if (7 < $HY_825ad51e000ddc6ca5["level"]) {
		echo "<select name=\"level\" style=\"width:200px;height:22px\">\r\n<option value=0";
		echo $HY_e38feb24e073afc890 == 0 ? " selected" : "";
		echo ">所有帐号</option>\r\n<option value=2";
		echo $HY_e38feb24e073afc890 == 2 ? " selected" : "";
		echo ">所有总代理帐号</option>\r\n<option value=3";
		echo $HY_e38feb24e073afc890 == 3 ? " selected" : "";
		echo ">所有代理帐号</option>\r\n</select>\r\n";
	}
	else {
		echo "<input type='hidden' name='level' value=0 />";
	}

	echo "<select name=\"filed\" style=\"width:200px;height:22px\">\r\n<option value='username' ";
	echo $HY_f33c0a7fc9acfba88f == "username" ? " selected" : "";
	echo ">用户名</option>\r\n<option value='qq' ";
	echo $HY_f33c0a7fc9acfba88f == "qq" ? " selected" : "";
	echo ">QQ</option>\r\n</select>=><input type=\"text\" class=\"smlinput\" name=\"keyword\" value=\"";
	echo $HY_b680f82755b73d556f;
	echo "\" onclick=\"this.select()\"/>\r\n<input type=\"submit\" name=\"submit\" class=\"submitbtn\" value=\"查找帐号\" />\r\n</form></td>\r\n</tr>\r\n</table>\r\n";
}

echo "<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr class=\"trhead\">\r\n<td malt=\"后台帐号ID\">ID</td>\r\n";
if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1 < LICTYPE)) {
	echo "<td>PID</td>";
}

echo "<td>帐号</td>\r\n<td>上级</td>\r\n<td>QQ</td>\r\n<td>类型</td>\r\n<td>添加日期</td>\r\n<td>到期日期</td>\r\n<td>最后登录日期</td>\r\n<td>最后登录IP</td>\r\n<td colspan=4>操作</td>\r\n</tr>\r\n";

if (empty($HY_bc854a58778efeb1d8)) {
	if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1 < LICTYPE)) {
		echo "<tr class=trd><td colspan=14>无任何数据</td></tr>";
	}
	else {
		echo "<tr class=trd><td colspan=13>无任何数据</td></tr>";
	}
}
else {
	foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
		echo "<tr class=\"trd\" id=\"trmanagerid";
		echo $HY_970be7709f584ff59c["id"];
		echo "\">\r\n<td>";
		echo $HY_970be7709f584ff59c["id"];
		echo "</td>\t\t\r\n";
		if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1 < LICTYPE)) {
			echo "<td>" . $HY_970be7709f584ff59c["pid"] . "</td>";
		}

		if ((8 < $HY_825ad51e000ddc6ca5["level"]) && (7 < $HY_970be7709f584ff59c["level"])) {
			echo "<td><a href=admin_manager.php?action=mmlogin&id=" . $HY_970be7709f584ff59c["id"] . ">" . hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["username"]) . "</a></td>";
		}
		else {
			echo "<td>" . $HY_970be7709f584ff59c["username"] . "</td>";
		}

		echo "<td>" . $HY_9909dd2e2a768236f5[$HY_970be7709f584ff59c["pmid"]] . "</td>";
		echo "\r\n<td>";
		echo hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["qq"]);
		echo "</td>\r\n<td>";
		echo $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["addtime"];
		echo "</td>\r\n<td ";

		if ($HY_970be7709f584ff59c["endtime"] < date("Y-m-d H:i:s")) {
			echo "style='color:red'";
		}

		echo ">";
		echo $HY_970be7709f584ff59c["endtime"];
		echo "</td>\r\n<td>";
		echo $HY_970be7709f584ff59c["lastlogintime"];
		echo "</td>\r\n<td class=isip>";
		echo long2ip($HY_970be7709f584ff59c["lastloginip"]);
		echo "</td>\r\n<td width=\"20\"><img lockid=\"";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" lock=\"";
		echo $HY_970be7709f584ff59c["islock"];
		echo "\" malt=\"点击此按钮锁定或解锁，绿色小对号表示正常状态点击即可锁定，灰色小锁表示是锁定状态点击可解锁\" src=\"";
		echo INSTALLPATH;
		echo "kss_inc/images/";
		echo $HY_970be7709f584ff59c["islock"] == 1 ? "b_uncheck.png" : "b_usrcheck.png";
		echo "\"></td>\r\n<td width=\"20\"><a href=\"javascript:void(0)\"  onclick=\"dwin('sup_addmanageruser','编辑后台帐号','admin_manager.php?action=addmanager&id=";
		echo $HY_970be7709f584ff59c["id"];
		echo "')\"><img malt=\"编辑该帐号\" src=\"";
		echo INSTALLPATH;
		echo "kss_inc/images/b_edit.png\" ></a></td>\r\n<td width=\"20\"><a href=\"javascript:void(0)\"  onclick=\"dwin('info_myoplog','后台帐号登陆日志','admin_logs.php?action=managerlogin&managerid=";
		echo $HY_970be7709f584ff59c["id"];
		echo "')\"><img malt=\"该帐号登陆后台的日志记录\" src=\"";
		echo INSTALLPATH;
		echo "kss_inc/images/b_calendar.png\"></a></td>\r\n<td width=\"20\"><img level=";
		echo $HY_970be7709f584ff59c["level"];
		echo " delid=\"";
		echo $HY_970be7709f584ff59c["id"];
		echo "\" malt=\"删除该用户\" src=\"";
		echo INSTALLPATH;
		echo "kss_inc/images/bd_drop.png\"></td>\r\n</tr>\r\n";
	}
}

echo "</table>\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"97%\">\r\n<tr>\r\n<td class=\"findorpage\">";
echo $HY_67bd9f7d4122865252;
echo "</td>\r\n</tr>\r\n</table>\r\n";
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
echo "<div id=pageruntime>页面运行时间" . hy_9887b284c1cb9655e9($HY_80d2c8c607b8113d16) . "毫秒</div>";
echo "</body>\r\n</html>";

?>
