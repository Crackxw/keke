<?php

function HY_ce30bbfb727eb43b7c($HY_fc12e3cf6043961fb3 = 1)
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
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);

if ($HY_825ad51e000ddc6ca5["level"] == 9) {
	hy_3df13eaab5a6295338();
}

if ($HY_825ad51e000ddc6ca5["level"] == 7) {
	hy_bd307d155f057feb55($HY_3fb3415441688353e5[7] . "帐号不能添加任何注册卡。<br>如若" . $HY_3fb3415441688353e5[7] . "帐号需要销售注册卡，请添加一个自己用的" . $HY_3fb3415441688353e5[6] . "帐号。");
}

$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where id=" . $HY_c5aaf359b892dfe165);

if (empty($HY_810d15d31408c982b2)) {
	hy_bd307d155f057feb55("软件不存在");
}

if ($HY_810d15d31408c982b2["pid"] != $HY_825ad51e000ddc6ca5["pid"]) {
	hy_bd307d155f057feb55("您不能为该软件添加注册卡号");
}

$HY_37d035a9af9bb3bd57 = 1;
$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"], 1);

if (!empty($HY_af166dfaf16c25bc35)) {
	if ($HY_af166dfaf16c25bc35["islock"] == 0) {
		$HY_37d035a9af9bb3bd57 = 0;
	}
}

$HY_ce2cfbc888fb7c3595 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"]);
$HY_a64f1553c1e5dc0807 = false;

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	$HY_a64f1553c1e5dc0807 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_agentprice where `softid`=" . $HY_c5aaf359b892dfe165 . " and managerid=" . $HY_825ad51e000ddc6ca5["id"]);

	if (empty($HY_a64f1553c1e5dc0807)) {
		hy_bd307d155f057feb55("您没有该软件的管理授权");
	}
}

if ($HY_d762a272713d62924f == "addkey_save") {
	hy_af470935131a2269b8();
	$HY_d2ba3120c7e6557655 = hy_ba8120f86a7df1aecc("keygroupid", "p", "int", 0);
	$HY_bafc70104c017e229c = hy_ba8120f86a7df1aecc("keynum", "p", "int", 0);
	$HY_22d275a1af69c39370 = hy_ba8120f86a7df1aecc("tags", "p", "sqljs", "");

	if (50 < hy_cfd7029aa774332944($HY_22d275a1af69c39370)) {
		hy_bd307d155f057feb55("标签长度超出50个字符");
	}

	if ($HY_d2ba3120c7e6557655 == 0) {
		hy_bd307d155f057feb55("请选择卡类");
	}

	if ((500 < $HY_bafc70104c017e229c) || ($HY_bafc70104c017e229c < 1)) {
		hy_bd307d155f057feb55("每次添加最少1张卡，最多500张卡！");
	}

	$HY_0a1bb2905c28a942c8 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `id`=" . $HY_d2ba3120c7e6557655 . " and `softid`=" . $HY_c5aaf359b892dfe165 . " and `islock`=0");

	if (empty($HY_0a1bb2905c28a942c8)) {
		hy_bd307d155f057feb55("卡类未找到");
	}

	$HY_9efafb139eba823143 = hy_ba8120f86a7df1aecc("kmid", "gp", "int", 0);
	$HY_d60982377ba7d1a39e = $HY_825ad51e000ddc6ca5["id"];
	if ((7 < $HY_825ad51e000ddc6ca5["level"]) && (0 < $HY_9efafb139eba823143)) {
		$HY_efb68cc1cdc7aecac7 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_9efafb139eba823143 . " and pid=" . $HY_825ad51e000ddc6ca5["pid"]);

		if (empty($HY_efb68cc1cdc7aecac7)) {
			hy_bd307d155f057feb55("指定的代理帐号未找到");
		}

		$HY_d60982377ba7d1a39e = $HY_9efafb139eba823143;
	}

	$HY_ec65a56480a6470a01 = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);

	if ($HY_ec65a56480a6470a01 !== true) {
		hy_bd307d155f057feb55("添加注册卡时未能成功独占操作：" . $HY_ec65a56480a6470a01);
	}

	$HY_7e3958ca51847ad2e2 = hy_f4532ccbb19d466e95("K");
	$HY_cfe25843ccb5587e44 = 0;
	$HY_78d7134cc50b32b975 = 0;
	$HY_de10877a6b8b9f6fa6 = 1;
	$HY_cd66f6ea0a1cf971b4 = "";
	$HY_9cefac5a7db902da90 = "";
	$HY_5147e2d0e6f7faff65 = "";

	if ($HY_825ad51e000ddc6ca5["level"] == 6) {
		$HY_2d506b1ce033e5190d = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `softid`=" . $HY_c5aaf359b892dfe165 . " and `keygroupid`=" . $HY_d2ba3120c7e6557655 . " and `managerid`=" . $HY_825ad51e000ddc6ca5["id"] . " and `tmpkey`='no'");

		if (empty($HY_2d506b1ce033e5190d)) {
			hy_bd307d155f057feb55("你的帐号没有该卡的提卡授权！");
		}

		if ($HY_2d506b1ce033e5190d["keyprice"] == 0) {
			hy_bd307d155f057feb55("你的帐号该卡类授权价格为0不允许提卡！");
		}

		$HY_03598870f303d6a107 = $HY_2d506b1ce033e5190d["keyprice"];
		$HY_cfe25843ccb5587e44 = $HY_03598870f303d6a107 * $HY_bafc70104c017e229c;
		$HY_de10877a6b8b9f6fa6 = 1;

		if (($HY_825ad51e000ddc6ca5["touzhirmb"] + $HY_825ad51e000ddc6ca5["rmb"]) < $HY_cfe25843ccb5587e44) {
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("余额不足，请先充值后再提卡！");
		}

		$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"], $HY_825ad51e000ddc6ca5["pmid"]);

		if (!empty($HY_af166dfaf16c25bc35)) {
			$HY_be28a25baa4e1c9def = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where `softid`=" . $HY_c5aaf359b892dfe165 . " and `keygroupid`=" . $HY_d2ba3120c7e6557655 . " and `managerid`=" . $HY_af166dfaf16c25bc35["id"] . " and `tmpkey`='no'");

			if (empty($HY_be28a25baa4e1c9def)) {
				hy_bd307d155f057feb55("上级总代没有该卡的提卡授权！");
			}

			if ($HY_be28a25baa4e1c9def["keyprice"] == 0) {
				hy_bd307d155f057feb55("上级总代该卡类授权价格为0不允许提卡！");
			}

			$HY_d36db7feb9e338723c = $HY_be28a25baa4e1c9def["keyprice"];
			$HY_78d7134cc50b32b975 = $HY_d36db7feb9e338723c * $HY_bafc70104c017e229c;

			if (($HY_af166dfaf16c25bc35["touzhirmb"] + $HY_af166dfaf16c25bc35["rmb"]) < $HY_78d7134cc50b32b975) {
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
				hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[7] . "帐号余额不足，导致你无法添加注册卡！");
			}
		}

		$HY_2641c8e172cd41d4f3 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"]);

		if (empty($HY_2641c8e172cd41d4f3)) {
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("作者帐号未找到");
		}

		if ($HY_2641c8e172cd41d4f3["level"] == 8) {
			$HY_8f106f35821ce8717f = hy_f9887838d65dea7c65($HY_0a1bb2905c28a942c8["cday"], $HY_0a1bb2905c28a942c8["linknum"]);
			$HY_c2350f4f279c26e265 = $HY_8f106f35821ce8717f * $HY_bafc70104c017e229c;

			if (($HY_2641c8e172cd41d4f3["touzhirmb"] + $HY_2641c8e172cd41d4f3["rmb"]) < $HY_c2350f4f279c26e265) {
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
				hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[8] . "帐号余额不足，导致你无法添加注册卡！");
			}
		}
	}
	else if ($HY_825ad51e000ddc6ca5["level"] == 8) {
		$HY_de10877a6b8b9f6fa6 = 1;
		$HY_2641c8e172cd41d4f3 = $HY_825ad51e000ddc6ca5;
		$HY_8f106f35821ce8717f = hy_f9887838d65dea7c65($HY_0a1bb2905c28a942c8["cday"], $HY_0a1bb2905c28a942c8["linknum"]);
		$HY_c2350f4f279c26e265 = $HY_8f106f35821ce8717f * $HY_bafc70104c017e229c;

		if (($HY_2641c8e172cd41d4f3["touzhirmb"] + $HY_2641c8e172cd41d4f3["rmb"]) < $HY_c2350f4f279c26e265) {
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("您帐号余额不足，导致你无法添加注册卡！");
		}
	}

	if ($HY_825ad51e000ddc6ca5["level"] == 6) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_c5aaf359b892dfe165 . "," . $HY_825ad51e000ddc6ca5["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_825ad51e000ddc6ca5["rmb"] . "," . (-$HY_cfe25843ccb5587e44) . ",0,'" . $HY_7e3958ca51847ad2e2 . "','后台提卡')", "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("记录日志失败，操作中断[未扣款]。" . $HY_3b22eac9ea6b5c92a5);
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_cfe25843ccb5587e44 . ",`xfrmb`=`xfrmb`+" . $HY_cfe25843ccb5587e44 . " where `id`=" . $HY_825ad51e000ddc6ca5["id"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("代理扣款操作失败" . $HY_3b22eac9ea6b5c92a5);
		}

		$HY_cd66f6ea0a1cf971b4 = "代理款项已扣，";

		if (!empty($HY_af166dfaf16c25bc35)) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_c5aaf359b892dfe165 . "," . $HY_af166dfaf16c25bc35["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_af166dfaf16c25bc35["rmb"] . "," . (-$HY_78d7134cc50b32b975) . ",0,'" . $HY_7e3958ca51847ad2e2 . "','后台提卡')", "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
				hy_bd307d155f057feb55($HY_cd66f6ea0a1cf971b4 . "记录总代扣款日志失败，操作中断[总代未扣款]。" . $HY_3b22eac9ea6b5c92a5);
			}

			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_78d7134cc50b32b975 . ",`xfrmb`=`xfrmb`+" . $HY_78d7134cc50b32b975 . " where `id`=" . $HY_af166dfaf16c25bc35["id"], "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
				hy_bd307d155f057feb55($HY_cd66f6ea0a1cf971b4 . "总代理扣款操作失败" . $HY_3b22eac9ea6b5c92a5);
			}

			$HY_9cefac5a7db902da90 = "总代理款项已扣，";
		}

		if ($HY_2641c8e172cd41d4f3["level"] == 8) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_c5aaf359b892dfe165 . "," . $HY_2641c8e172cd41d4f3["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_2641c8e172cd41d4f3["rmb"] . "," . (-$HY_c2350f4f279c26e265) . ",0,'" . $HY_7e3958ca51847ad2e2 . "','后台提卡')", "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
				hy_bd307d155f057feb55($HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . "记录作者扣款日志失败，操作中断[作者未扣款]。" . $HY_3b22eac9ea6b5c92a5);
			}

			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_c2350f4f279c26e265 . ",`xfrmb`=`xfrmb`+" . $HY_c2350f4f279c26e265 . " where `id`=" . $HY_2641c8e172cd41d4f3["id"], "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
				$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
				hy_bd307d155f057feb55($HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . "作者扣款操作失败" . $HY_3b22eac9ea6b5c92a5);
			}

			$HY_5147e2d0e6f7faff65 = "作者款项已扣，";
		}
	}
	else if ($HY_825ad51e000ddc6ca5["level"] == 8) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_c5aaf359b892dfe165 . "," . $HY_2641c8e172cd41d4f3["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_2641c8e172cd41d4f3["rmb"] . "," . (-$HY_c2350f4f279c26e265) . ",0,'" . $HY_7e3958ca51847ad2e2 . "','后台提卡')", "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("记录日志失败，操作中断[未扣款]。" . $HY_3b22eac9ea6b5c92a5);
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=`rmb`-" . $HY_c2350f4f279c26e265 . ",`xfrmb`=`xfrmb`+" . $HY_c2350f4f279c26e265 . " where `id`=" . $HY_2641c8e172cd41d4f3["id"], "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_log_agentrmb set `intro`='<font color=red>扣款失败</font>' where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "' order by `id` Desc limit 0,1", "sync");
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_manager`", "notsync");
			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
			hy_bd307d155f057feb55("作者扣款操作失败" . $HY_3b22eac9ea6b5c92a5);
		}

		$HY_5147e2d0e6f7faff65 = "作者款项已扣，";
	}

	$HY_b0e6112fa56939e858 = $HY_82d6536edf704aabc5->HY_37e7d84d05816dfda2("kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
	$HY_8b956a33d5e6993e74 = array("pid" => $HY_825ad51e000ddc6ca5["pid"], "managerid" => $HY_825ad51e000ddc6ca5["id"], "softid" => $HY_c5aaf359b892dfe165, "keygroupid" => $HY_d2ba3120c7e6557655, "keycount" => $HY_bafc70104c017e229c, "tags" => $HY_22d275a1af69c39370, "ordernum" => $HY_7e3958ca51847ad2e2, "orderamount" => "0.00", "agentamount" => $HY_cfe25843ccb5587e44, "agentamount7" => $HY_78d7134cc50b32b975, "ordertype" => 1, "orderstatus" => 9, "beginid" => $HY_b0e6112fa56939e858, "addtime" => time());
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_tb_order", $HY_8b956a33d5e6993e74, "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
		$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);
		hy_bd307d155f057feb55($HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . $HY_5147e2d0e6f7faff65 . "订单添加失败" . $HY_3b22eac9ea6b5c92a5);
	}

	$HY_cd66f6ea0a1cf971b4 .= "订单已添加，";
	$HY_e05cba65e8fd099080 = array("beginid" => $HY_b0e6112fa56939e858, "addtime" => time(), "managerid" => $HY_d60982377ba7d1a39e, "ordernum" => $HY_7e3958ca51847ad2e2, "ispay" => 1, "tag" => $HY_22d275a1af69c39370, "keyattr" => $HY_d2ba3120c7e6557655, "k_num" => $HY_bafc70104c017e229c);
	$HY_173d86697f24ffa1ee = hy_cf18c94480f908cc46($HY_e05cba65e8fd099080, $HY_0a1bb2905c28a942c8);
	$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655($HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165);

	if ($HY_173d86697f24ffa1ee === true) {
		$HY_73d03700723b9213e5 = "addok";
		$HY_73d03700723b9213e5 .= "<input type='button' class=submitbtn onclick=window.open('admin_key.php?action=downkey&orderid=" . $HY_7e3958ca51847ad2e2 . "','downwin')  value='另存为'>  <input type='button' class=submitbtn value='复制' id='copykey'><span id=copyed></span>";

		if ($HY_825ad51e000ddc6ca5["level"] == 8) {
			$HY_73d03700723b9213e5 .= "  扣除" . $HY_c2350f4f279c26e265 . "元";
		}

		$HY_73d03700723b9213e5 .= "<br>";
		$HY_73d03700723b9213e5 .= "<iframe name=downwin id=downwin style='display:none' src='blank.htm'></iframe>";
		$HY_73d03700723b9213e5 .= "<textarea id=keydata class=keynum style='width:420px;height:120px;word-wrap:normal'>卡名:" . $HY_0a1bb2905c28a942c8["keyname"] . "　　\r\n 天数:" . $HY_0a1bb2905c28a942c8["cday"] . "　　  点数:" . $HY_0a1bb2905c28a942c8["points"] . "　　  通道:" . $HY_0a1bb2905c28a942c8["linknum"] . "　　　　　　　　　　　　　　　　　　　　　　　　　　　　　\r\n" . implode("　　　　　　　　　　　　　　　　　　　　　　　　　　　　　\r\n", $HY_db2c979ce78a26ded8) . "</textarea>";
		hy_bd307d155f057feb55($HY_73d03700723b9213e5);
	}
	else {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_order set `orderstatus`=7 where `ordernum`='" . $HY_7e3958ca51847ad2e2 . "'", "sync");
		hy_bd307d155f057feb55($HY_cd66f6ea0a1cf971b4 . $HY_9cefac5a7db902da90 . $HY_5147e2d0e6f7faff65 . $HY_173d86697f24ffa1ee);
	}

	exit();
}
/*
echo "<!-- 添加注册卡表单开始 -->\r\n<script type=\"text/javascript\">\t\r\nvar canaddkey=1;\r\nvar isclickadd=0;\r\nvar u = navigator.userAgent, app = navigator.appVersion;\r\nvar isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器\r\nvar isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端\r\n\r\nfunction downkey(fname){\r\nvar e=$(\"#keydata\").html();\r\nkdwin=window.open(\"blank.htm\",\"downwin\",\"\");\r\nkdwin.document.innerHTML='';\r\nkdwin.document.write($(\"#keydata\").text());\r\ntry {\r\nkdwin.document.charset = \"utf-8\";\r\n} catch (err) { }\r\n\r\n\r\nkdwin.document.execCommand(\"saveAs\",true,fname);\r\n}\r\n\r\n$(document).ready(function() { \r\nif( isiOS!=true){$(\"#iosview\").hide()}\r\n$(\"#copykey\").live('mouseover',function(){\r\nvar ee=$('#keydata').html();\r\nee=ee.replace(/　/g,'');\r\ntoClipboard(\"copykey\",ee);\r\n});\r\n\r\n$('#admin_addkey').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\n$(\"#addsubmit\").hide();\r\n$(\"#addnow\").show();\r\nif(canaddkey==0){\r\nmalert('你的余额不足以支付本次取卡的费用，请充值！','请充值'); \r\nisclickadd=0;\r\n$(\"#addsubmit\").show();\r\n$(\"#addnow\").hide();\r\nreturn false; \t\t\t\r\n}\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nisclickadd=0;\r\n$(\"#addsubmit\").show();\r\n$(\"#addnow\").hide();\t\t\t\r\nif(responseText.substr(0,5)!='addok'){\r\nmalert(responseText); \r\n}else{\r\n$(\"#yk\").text($(\"#yk\").text()*1-$(\"#jg\").text()*1);\r\nif(isiOS==true){\r\n$(\"#iosview\").html(responseText.substr(5));\r\n}else{\r\nmalert(responseText.substr(5),'添加注册卡成功',460,120);\r\n}\r\n}\r\n},\r\nerror:function(){\r\nisclickadd=0;\r\nalert(\"error!\");\t\t\t\r\n}\r\n});\r\n";
*/
//中断php 直接写html 后边再开一个php
?>
<!-- 添加注册卡表单开始 -->
<script type="text/javascript">
var canaddkey=1;
var isclickadd=0;
var u = navigator.userAgent, app = navigator.appVersion;
var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
function downkey(fname){
var e=$("#keydata").html();
kdwin=window.open("blank.htm","downwin","");
kdwin.document.innerHTML='';
kdwin.document.write($("#keydata").text());
try {
kdwin.document.charset = "utf-8";
} catch (err) { }
kdwin.document.execCommand("saveAs",true,fname);
}
$(document).ready(function() {
if( isiOS!=true){$("#iosview").hide()}
$("#copykey").live('mouseover',function(){
var ee=$('#keydata').html();
ee=ee.replace(/　/g,'');
toClipboard("copykey",ee);
});
$('#admin_addkey').ajaxForm({
beforeSubmit:function (arr, $form, options) {
$("#addsubmit").hide();
$("#addnow").show();
if(canaddkey==0){
malert('你的余额不足以支付本次取卡的费用，请充值！','请充值'); 
isclickadd=0;
$("#addsubmit").show();
$("#addnow").hide();
return false;
}
return true;
},
success:function (responseText, statusText, xhr, $form) {
isclickadd=0;
$("#addsubmit").show();
$("#addnow").hide();
if(responseText.substr(0,5)!='addok'){
malert(responseText);
}else{
$("#yk").text($("#yk").text()*1-$("#jg").text()*1);
if(isiOS==true){$("#iosview").html(responseText.substr(5));
}else{
malert(responseText.substr(5),'添加注册卡成功',460,120);
}
}
},
error:function(){isclickadd=0;alert("error!");}
});

<?php if ($HY_825ad51e000ddc6ca5["level"] == 6) {?>
jsrmb();
$("#keygroupid").bind("change",function(){
jsrmb();
});
$("#keynum").bind("keyup",function(){
jsrmb();
});
<?php }else{ ?>
$("#keynum").bind("keyup",function(){
if($(this).val()>500)$(this).val(500);
});
<?php }	?>
});
function jsrmb(){
var price=$("#keygroupid option:selected").attr("price");
var knum=$("#keynum").val();
if(!isNaN(price) && !isNaN(knum)){
if(knum>0){
if(knum>500){
$knum=500;
$("#keynum").val(500);
}
var jgs=price*knum;
jgs=jgs.toFixed(2);
$("#jg").text(jgs);
if($("#yk").text()*1+$("#tz").text()*1<jgs){
canaddkey=0;
$("#canadd").html("<font color=#ff0000><img src="+INSTALLPATH+"kss_inc/images/s_error.png></font>");
}else{
canaddkey=1;
$("#canadd").html("<font color=#0000ff><img src="+INSTALLPATH+"kss_inc/images/s_okay.png></font>");
}
}
}
}
</script>
<?php
//接上边的php
echo "\r\n<form id=\"admin_addkey\" action=\"?action=addkey_save&softid=";
echo $HY_c5aaf359b892dfe165;
echo "\" method=\"post\"> \r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_810d15d31408c982b2["softname"];
echo "添加注册卡</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" value=\"";
echo $HY_c5aaf359b892dfe165;
echo "\" />\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n";

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	echo "<tr malt=\"作者级帐号添加注册卡时可指定该注册卡归谁管理，默认是自己\"><td align=right>注册卡所属用户</td><td align=left>\r\n<select name=\"kmid\"><option value=0>自己(作者帐号)</option>\r\n";
	$HY_1bdbcb767ebe099123 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and level=6 and isdel=0");

	if (!empty($HY_1bdbcb767ebe099123)) {
		foreach ($HY_1bdbcb767ebe099123 as $HY_f351506de87828d955 ) {
			echo "<option value=" . $HY_f351506de87828d955["id"] . ">" . $HY_f351506de87828d955["username"] . "</option>";
		}
	}

	echo "</select><span style='color:red'>&nbsp;&nbsp;&nbsp;注意：作者给代理加卡是不会扣除代理余额的。</span>\r\n</td></tr>\r\n\r\n";
}

echo "<tr malt=\"如果这其中找不到你需要的注册卡类，请用系统管理员或作者身份登陆：软件管理->卡类和零售价设置 即可以添加新的卡类\"><td align=right>请选择注册卡类</td><td align=left><select name=\"keygroupid\" id=\"keygroupid\">\r\n";
$HY_f45abdb055068fdfd6 = hy_c79cc84a5c5725e920($HY_c5aaf359b892dfe165, 0, 1, $HY_a64f1553c1e5dc0807);
echo $HY_f45abdb055068fdfd6;
echo "</select>";

if (stripos($HY_f45abdb055068fdfd6, "暂无卡类")) {
	echo "<script>malert('请先为该软件<input type=button class=submitbtn value=\"添加卡类\" onclick=dwin(\"soft_keyset\",\"";
	echo $HY_810d15d31408c982b2["softname"];
	echo "卡类与价格\",\"admin_soft.php?action=keygroup&softid=";
	echo $HY_c5aaf359b892dfe165;
	echo "\")>(注册卡管理 ->  卡类和零售价设置)<br><br>卡类添加好后<input type=button class=submitbtn onclick=\"history.go(0)\" value=\"刷新本页面\">才可以添加相应的注册卡 ','0友情提示'); </script>\r\n";
}

echo "</td></tr>\r\n<tr malt=\"每次最多只能添加500张卡\"><td align=right>添加注册卡的数量</td><td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"3\" name=\"keynum\" id=\"keynum\" value=1  AUTOCOMPLETE=\"off\" onkeyup=\"this.value=this.value.replace(/\D/g, '')\" /> ";

if ($HY_825ad51e000ddc6ca5["level"] == 6) {
	echo "&nbsp;<span id=canadd></span>&nbsp;帐号余款<span id=yk>" . $HY_825ad51e000ddc6ca5["rmb"] . "</span>元 可透支<span id=tz>" . $HY_825ad51e000ddc6ca5["touzhirmb"] . "</span>元，制卡需<span id=jg>0.00</span>元。";
}

echo "</td></tr>\r\n<tr malt=\"使用标签是一个好的习惯，在日后您整理和查找卡时可以起到很大的作用，请尽量用有实际意义方便你记忆的字符串做为标签\"><td align=right>请输入标签</td><td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"tags\" value='";
echo date("m-d");
echo "' /></td></tr>\r\n<tr><td align=right>&nbsp</td><td align=left>友情提示：请按需取卡（要出售多少取多少），尽量不要只为了库存卡而取卡。";

if ($HY_825ad51e000ddc6ca5["level"] == 8) {
	echo "<br>作者提卡扣费算法（简单点就是 周卡0.4元，月卡1元），<input type=button value=\"点击查看完整算法\" onclick=\"$('#kabi').show();\">\r\n<pre id=\"kabi\" style=\"display:none\">\t\t\t\t\t\r\n天数=四舍五入取整\r\n\r\n<font color=#0000ff>如果</font> (天数=0 ) <font color=#0000ff>那么</font> 天数=1;\r\n\r\n<font color=#0000ff>如果</font> (天数  ＜ 7) <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 天数 × 0.05\r\n\r\n<font color=#0000ff>如果</font> (7  ＜= 天数 ＜ 10)  <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 0.4\r\n\r\n<font color=#0000ff>如果</font> (10 ＜= 天数 ＜ 20) <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 0.6\r\n\r\n<font color=#0000ff>如果</font> (20 ＜= 天数 ＜ 30)  <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 0.8\r\n\r\n<font color=#0000ff>如果</font> (30 ＜= 天数)  <font color=#0000ff>那么</font> <font color=#ff0000>扣费</font> = 1 × 取整数(天数 ÷ 30)  + 0.03 × 取余数(天数 ÷ 30 )\r\n\r\n最终：  <font color=#ff0000>扣费</font>=<font color=#ff0000>扣费</font> × 通道数量\r\n</pre>\r\n";
}

echo "</td></tr>\r\n\r\n</table>\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\"><input id=\"addsubmit\" type=submit class=\"submitbtn\" onclick=\"if(isclickadd==1){return false;}else{isclickadd=1;return true}\" value=\"确认添加\"><img id=\"addnow\" style=\"display:none\" src=";
echo INSTALLPATH;
echo "kss_inc/images/load1.gif></div>\r\n\r\n<div id=\"iosview\" style=\"background:#eeeeee;width:460px;height:160px\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
