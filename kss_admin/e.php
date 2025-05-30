<?php

function HY_e6ab743ea9200d857d($HY_2faaaec40bcd45653e = 1)
{
	$HY_b0c2a6aabbb5f99279 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_04808996c3743c2fbc = ($HY_2d69e2359309faae2c[$HY_2faaaec40bcd45653e] << 4) + ($HY_2d69e2359309faae2c[$HY_2faaaec40bcd45653e + 1] >> 4);
		$HY_2faaaec40bcd45653e = $HY_2faaaec40bcd45653e + 2;
	} while ($HY_2faaaec40bcd45653e < 28);
}

require ("../kss_inc/inc.php");
$HY_042c8865a4e6e55df1 = hy_8aef01ab222024a8e7("action", "gp", "sql", "");
$HY_2c12c231b3916a7313 = hy_8aef01ab222024a8e7("softid", "gp", "int", 0);
$HY_3229681c01598c2d9b = hy_8aef01ab222024a8e7("op", "gp", "sql", "");
$HY_0ef7d0adcc0e503dce = new mysql_cls();
$HY_d340d8b5e00dfc2f9a = hy_ea0310b8a5bc1046c4(8);
$openids = array(1765, 4090);
$HY_c095a01888f0e967d2 = $HY_0ef7d0adcc0e503dce->HY_4a755baa3970a7e93f("select * from kss_tb_soft where id=" . $HY_2c12c231b3916a7313);

if (empty($HY_c095a01888f0e967d2)) {
	hy_86f21d2568526ae0c1("软件不存在");
}

$HY_d660fba5acd1724ef1 = hy_8aef01ab222024a8e7("table", "gp", "sql", "");
$HY_97202bae9a74876762 = hy_8aef01ab222024a8e7("managerid", "gp", "int", 0);
$HY_2e46d1f13439f9f8ac = hy_8aef01ab222024a8e7("keyfix", "gp", "sql", "");
$HY_bc94e15b9915ba8408 = hy_8aef01ab222024a8e7("ordernum", "gp", "sql", "");
$HY_bfd419b1842ce1f1af = hy_8aef01ab222024a8e7("addday", "gp", "num", "0");
$HY_6d347213055c417f8f = hy_8aef01ab222024a8e7("points", "gp", "int", "0");
$HY_e80a376aad98a2b2bc = hy_8aef01ab222024a8e7("tags", "gp", "sql", "");
$HY_40fba4863c12b9401c = hy_8aef01ab222024a8e7("cztime", "gp", "time", "2000-01-01 00:00:00");
$HY_a169b3af0de739b08a = hy_8aef01ab222024a8e7("cztime0", "gp", "time", "2000-01-01 00:00:00");
$HY_6e9296a4212f6f78af = hy_8aef01ab222024a8e7("endtime", "gp", "time", "2000-01-01 00:00:00");
$HY_02b2f9569102374cff = hy_8aef01ab222024a8e7("addtime1", "gp", "time", "2000-01-01 00:00:00");
$HY_f3cc5e5a505be5bd57 = hy_8aef01ab222024a8e7("addtime2", "gp", "time", "2000-01-01 00:00:00");
$HY_9adeca2c744e74603a = strtotime($HY_40fba4863c12b9401c);
$HY_1b7000e868fa3031c7 = strtotime($HY_a169b3af0de739b08a);
$HY_2f4ee0c186950d48f3 = ($HY_c095a01888f0e967d2["softmode"] == "USOFT" ? "充值" : "激活");

switch ($HY_3229681c01598c2d9b) {
case "批量删除":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if ($HY_d660fba5acd1724ef1 == "注册卡") {
		$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
			$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
		}

		if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
			if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
				hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "日期 前边的必须小于后边的！");
			}

			if ($HY_1b7000e868fa3031c7 < 946742400) {
				$HY_cbb7b324ddce597c02["8"] = " cztime < " . $HY_9adeca2c744e74603a . " ";
			}
			else {
				$HY_cbb7b324ddce597c02["8"] = " cztime between " . $HY_1b7000e868fa3031c7 . " and " . $HY_9adeca2c744e74603a;
			}
		}

		if (strlen($HY_bc94e15b9915ba8408) == 24) {
			$HY_cbb7b324ddce597c02["2"] = " ordernum='" . $HY_bc94e15b9915ba8408 . "' ";
		}

		if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") || ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00")) {
			if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 < $HY_02b2f9569102374cff)) {
				hy_86f21d2568526ae0c1("添加日期后边的要比前边的小");
			}

			if ($HY_02b2f9569102374cff == "2000-01-01 00:00:00") {
				$HY_cbb7b324ddce597c02["11"] = " addtime <" . strtotime($HY_f3cc5e5a505be5bd57) . " ";
			}
			else if ($HY_f3cc5e5a505be5bd57 == "2000-01-01 00:00:00") {
				$HY_cbb7b324ddce597c02["11"] = " addtime >" . strtotime($HY_02b2f9569102374cff) . " ";
			}
			else {
				$HY_cbb7b324ddce597c02["11"] = " addtime between " . strtotime($HY_02b2f9569102374cff) . " and " . strtotime($HY_f3cc5e5a505be5bd57) . " ";
			}
		}
	}
	else {
		$HY_5c16d6032ca0e0840e = "kss_z_user_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if ($HY_6e9296a4212f6f78af != "2000-01-01 00:00:00") {
			$HY_cbb7b324ddce597c02["2"] = " endtime < " . strtotime($HY_6e9296a4212f6f78af) . " ";
		}
	}

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("你最少要选择一个条件！");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("delete from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		hy_86f21d2568526ae0c1("批量删除成功，共影响" . $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e . "条！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "delete from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("批量删除失败：" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "delete from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "批量锁定":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if ($HY_d660fba5acd1724ef1 == "注册卡") {
		$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
			$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
		}

		if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
			if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
				hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "日期 前边的必须小于后边的！");
			}

			if ($HY_1b7000e868fa3031c7 < 946742400) {
				$HY_cbb7b324ddce597c02["8"] = " cztime < " . $HY_9adeca2c744e74603a . " ";
			}
			else {
				$HY_cbb7b324ddce597c02["8"] = " cztime between " . $HY_1b7000e868fa3031c7 . " and " . $HY_9adeca2c744e74603a;
			}
		}

		if (strlen($HY_bc94e15b9915ba8408) == 24) {
			$HY_cbb7b324ddce597c02["2"] = " ordernum='" . $HY_bc94e15b9915ba8408 . "' ";
		}

		if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") || ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00")) {
			if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 < $HY_02b2f9569102374cff)) {
				hy_86f21d2568526ae0c1("添加日期后边的要比前边的小");
			}

			if ($HY_02b2f9569102374cff == "2000-01-01 00:00:00") {
				$HY_cbb7b324ddce597c02["11"] = " addtime <" . strtotime($HY_f3cc5e5a505be5bd57) . " ";
			}
			else if ($HY_f3cc5e5a505be5bd57 == "2000-01-01 00:00:00") {
				$HY_cbb7b324ddce597c02["11"] = " addtime >" . strtotime($HY_02b2f9569102374cff) . " ";
			}
			else {
				$HY_cbb7b324ddce597c02["11"] = " addtime between " . strtotime($HY_02b2f9569102374cff) . " and " . strtotime($HY_f3cc5e5a505be5bd57) . " ";
			}
		}
	}
	else {
		$HY_5c16d6032ca0e0840e = "kss_z_user_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if ($HY_6e9296a4212f6f78af != "2000-01-01 00:00:00") {
			$HY_cbb7b324ddce597c02["2"] = " endtime < " . strtotime($HY_6e9296a4212f6f78af) . " ";
		}
	}

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("你最少要选择一个条件！");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		hy_86f21d2568526ae0c1("批量锁定成功，共影响" . $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e . "条！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("批量锁定失败：" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "批量解锁":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if ($HY_d660fba5acd1724ef1 == "注册卡") {
		$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
			$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
		}

		if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
			if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
				hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "日期 前边的必须小于后边的！");
			}

			if ($HY_1b7000e868fa3031c7 < 946742400) {
				$HY_cbb7b324ddce597c02["8"] = " cztime < " . $HY_9adeca2c744e74603a . " ";
			}
			else {
				$HY_cbb7b324ddce597c02["8"] = " cztime between " . $HY_1b7000e868fa3031c7 . " and " . $HY_9adeca2c744e74603a;
			}
		}

		if (strlen($HY_bc94e15b9915ba8408) == 24) {
			$HY_cbb7b324ddce597c02["2"] = " ordernum='" . $HY_bc94e15b9915ba8408 . "' ";
		}

		if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") || ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00")) {
			if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 < $HY_02b2f9569102374cff)) {
				hy_86f21d2568526ae0c1("添加日期后边的要比前边的小");
			}

			if ($HY_02b2f9569102374cff == "2000-01-01 00:00:00") {
				$HY_cbb7b324ddce597c02["11"] = " addtime <" . strtotime($HY_f3cc5e5a505be5bd57) . " ";
			}
			else if ($HY_f3cc5e5a505be5bd57 == "2000-01-01 00:00:00") {
				$HY_cbb7b324ddce597c02["11"] = " addtime >" . strtotime($HY_02b2f9569102374cff) . " ";
			}
			else {
				$HY_cbb7b324ddce597c02["11"] = " addtime between " . strtotime($HY_02b2f9569102374cff) . " and " . strtotime($HY_f3cc5e5a505be5bd57) . " ";
			}
		}
	}
	else {
		$HY_5c16d6032ca0e0840e = "kss_z_user_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if ($HY_6e9296a4212f6f78af != "2000-01-01 00:00:00") {
			$HY_cbb7b324ddce597c02["2"] = " endtime < " . strtotime($HY_6e9296a4212f6f78af) . " ";
		}
	}

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("你最少要选择一个条件！");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("update " . $HY_5c16d6032ca0e0840e . " set islock=0 " . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		hy_86f21d2568526ae0c1("批量解锁成功，共影响" . $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e . "条！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("批量解锁失败：" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "批量导出":
	ob_clean();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if (strlen($HY_bc94e15b9915ba8408) == 24) {
		$HY_cbb7b324ddce597c02["2"] = " ordernum='" . $HY_bc94e15b9915ba8408 . "' ";
	}

	if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") || ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00")) {
		if (($HY_02b2f9569102374cff != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 != "2000-01-01 00:00:00") && ($HY_f3cc5e5a505be5bd57 < $HY_02b2f9569102374cff)) {
			hy_86f21d2568526ae0c1("添加日期后边的要比前边的小");
		}

		if ($HY_02b2f9569102374cff == "2000-01-01 00:00:00") {
			$HY_cbb7b324ddce597c02["11"] = " addtime <" . strtotime($HY_f3cc5e5a505be5bd57) . " ";
		}
		else if ($HY_f3cc5e5a505be5bd57 == "2000-01-01 00:00:00") {
			$HY_cbb7b324ddce597c02["11"] = " addtime >" . strtotime($HY_02b2f9569102374cff) . " ";
		}
		else {
			$HY_cbb7b324ddce597c02["11"] = " addtime between " . strtotime($HY_02b2f9569102374cff) . " and " . strtotime($HY_f3cc5e5a505be5bd57) . " ";
		}
	}

	if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
		$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
	}

	if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
		if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
			hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "日期 前边的必须小于后边的！");
		}

		if ($HY_1b7000e868fa3031c7 < 946742400) {
			$HY_cbb7b324ddce597c02["8"] = " cztime < " . $HY_9adeca2c744e74603a . " ";
		}
		else {
			$HY_cbb7b324ddce597c02["8"] = " cztime between " . $HY_1b7000e868fa3031c7 . " and " . $HY_9adeca2c744e74603a;
		}
	}

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("你最少要选择一个条件！");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_4b7c10700cc2390d81 = $HY_0ef7d0adcc0e503dce->HY_8d7faa725adf1955c7("select `keyfix`,`keys`,`keyspassword` from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938);

	if (!empty($HY_4b7c10700cc2390d81)) {
		$HY_dc24e7b6ee157ac06e = "";

		foreach ($HY_4b7c10700cc2390d81 as $HY_6e51c8085c275d3130 ) {
			$HY_dc24e7b6ee157ac06e .= $HY_6e51c8085c275d3130["keyfix"] . $HY_6e51c8085c275d3130["keys"] . $HY_6e51c8085c275d3130["keyspassword"] . "\r\n";
		}

		hy_86f21d2568526ae0c1("批量导出注册卡成功！<br><textarea class=dwidth style='width:400px;height:200px'>" . $HY_dc24e7b6ee157ac06e . "</textarea><br>SQL：<input type=text style='width:400px' value=" . YH2 . "select `keyfix`,`keys`,`keyspassword` from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("没有找到需要导出的数据。<br>SQL：<input type=text style='width:400px' value=" . YH2 . "select `keyfix`,`keys`,`keyspassword` from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "批量加时":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	if (($HY_bfd419b1842ce1f1af == 0) && ($HY_6d347213055c417f8f == 0)) {
		hy_86f21d2568526ae0c1("加时和加点不能都为0，加时间或点数请用正数，减时间或点数请用负数！");
	}

	$HY_cbb7b324ddce597c02 = array();
	$HY_18684a62d5092445b1 = "给";

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
		$HY_18684a62d5092445b1 .= "标签为" . $HY_e80a376aad98a2b2bc;
	}

	if ($HY_6e9296a4212f6f78af != "2000-01-01 00:00:00") {
		$HY_cbb7b324ddce597c02["2"] = " endtime > " . strtotime($HY_6e9296a4212f6f78af) . " ";
		$HY_18684a62d5092445b1 .= "到期日期大于" . $HY_6e9296a4212f6f78af;
	}

	$HY_18684a62d5092445b1 .= "的用户批量加时";

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("你最少要选择一个条件【标签或到期日期】！");
	}

	$HY_cbb7b324ddce597c02["3"] = " endtime <> " . PETIME . " ";
	ksort($HY_cbb7b324ddce597c02);
	$HY_5c16d6032ca0e0840e = "kss_z_user_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);

	if ($HY_bfd419b1842ce1f1af == 0) {
		$HY_e11e16fca8a19e9fe3 = "`points`=`points`+" . $HY_6d347213055c417f8f;
	}
	else if ($HY_6d347213055c417f8f == 0) {
		$HY_e11e16fca8a19e9fe3 = "`cday`=`cday`+" . $HY_bfd419b1842ce1f1af . ",`endtime`=`endtime`+" . ($HY_bfd419b1842ce1f1af * 86400);
	}
	else {
		$HY_e11e16fca8a19e9fe3 = "`cday`=`cday`+" . $HY_bfd419b1842ce1f1af . ",`endtime`=`endtime`+" . ($HY_bfd419b1842ce1f1af * 86400) . ", `points`=`points`+" . $HY_6d347213055c417f8f;
	}

	if (0 < $HY_bfd419b1842ce1f1af) {
		if (!in_array($HY_d340d8b5e00dfc2f9a["id"], $openids)) {
			if (($_SERVER["SERVER_NAME"] == "v9.hphu.com") && ($HY_d340d8b5e00dfc2f9a["level"] != 9)) {
				hy_86f21d2568526ae0c1("禁止加时操作！");
			}
		}

		$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (" . $HY_d340d8b5e00dfc2f9a["pid"] . "," . $HY_d340d8b5e00dfc2f9a["id"] . "," . $HY_2c12c231b3916a7313 . "," . time() . "," . $HY_bfd419b1842ce1f1af . ",'','批量，标签【" . $HY_e80a376aad98a2b2bc . "】到期日期大于【" . $HY_6e9296a4212f6f78af . "】，加时" . $HY_bfd419b1842ce1f1af . "天')", "notsync");

		if ($HY_9e756bc5b9284a0b7c !== true) {
			$HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("REPAIR TABLE `kss_tb_log_addcday`", "notsync");
		}
	}

	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("update " . $HY_5c16d6032ca0e0840e . " set " . $HY_e11e16fca8a19e9fe3 . " " . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		$HY_78e20e422544fd4b16 = $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e;
		$HY_70cdb485605cefd092 = "insert into kss_z_cz_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(" . time() . ",10,'admin_addtime',0," . $HY_bfd419b1842ce1f1af . ",0," . $HY_6d347213055c417f8f . ",'" . $HY_18684a62d5092445b1 . "','')";
		$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9($HY_70cdb485605cefd092);

		if ($HY_9e756bc5b9284a0b7c !== true) {
			hy_060e66e70c19d511b0($HY_70cdb485605cefd092, $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e(), __FILE__, 289);
		}

		hy_86f21d2568526ae0c1("批量加时成功，共改变" . $HY_78e20e422544fd4b16 . "用户的时间！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set " . $HY_e11e16fca8a19e9fe3 . " " . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("批量加时失败：" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set " . $HY_e11e16fca8a19e9fe3 . " " . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

default:
	break;
}

$HY_88cb8af770766e2af3 = "批处理数据";
include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
$HY_41c3fcdee18a9c007f = $HY_0ef7d0adcc0e503dce->HY_8d7faa725adf1955c7("select `id`,`username`,`level` from `kss_tb_manager` where `pid`=" . $HY_d340d8b5e00dfc2f9a["pid"] . " order by id asc");
echo "\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() {\r\n$('#admin_batch').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"#op_1\").attr(\"checked\")==true){\r\nif(confirm(\"批量删除是将数据从数据库中彻底删除，操作不可还原！\\r\\n\\r\\n请在批量删除前做好数据库备份，以防数据丢失。\\r\\n\\r\\n是否继续执行批量删除操作？\")){\r\nreturn true; \r\n}else{\r\nreturn false;\r\n}\r\n}else{\r\nreturn true;\r\n}\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif($(\"#op_2\").attr(\"checked\")==true){\r\nmalert(responseText,'导出数据',420,300);\r\n}else{\r\nmalert(responseText); \r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n$(\"#cztime,#cztime0,#endtime,#addtime1,#addtime2\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$(\"input[id^='table_']\").bind(\"click\",function(){\r\nif($(this).attr(\"id\")==\"table_1\"){\r\n$(\"#b_table_1\").show();\r\n$(\"#b_table_2\").hide();\r\n$(\"#b_keyg\").show();\r\n$(\"#ordernumtr,#addtimetr\").show();\t\r\n}else{\r\n$(\"#b_table_2\").show();\r\n$(\"#b_table_1\").hide();\t\r\n$(\"#b_keyg\").hide();\t\r\n$(\"#ordernumtr,#addtimetr\").hide();\t\r\n}\t\r\n});\r\n$(\"input[name='op']\").bind(\"click\",function(){\r\nif($(this).val()=='批量加时'){\r\n$(\"#b_js\").show();\t\r\n$(\"#b_notaddtime\").hide();\r\n$(\"#b_jds\").show();\t\r\n$(\"#table_1\").attr('disabled','disabled');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#table_2\").click();\t\r\n$(\"#b_etime\").text(\"到期日期大于\");\r\n}else if($(this).val()=='批量导出'){\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\r\n$(\"#table_1\").attr('disabled','');\r\n$(\"#table_2\").attr('disabled','disabled');\t\r\n$(\"#table_1\").click();\t\r\n$(\"#b_etime\").text(\"到期日期小于\");\r\n}else{\t\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\t\r\n$(\"#table_1\").attr('disabled','');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#b_etime\").text(\"到期日期小于\");\r\n}\r\n\r\n});\r\n\r\n\r\n});\r\n\r\n</script>\r\n<form id=\"admin_batch\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" id=\"softid\" value=\"";
echo $HY_2c12c231b3916a7313;
echo "\" />\r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_c095a01888f0e967d2["softname"];
echo "批量处理数据</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>执行操作</td>\r\n<td align=left>\r\n<input type=radio value='批量删除' name=\"op\" id=\"op_1\" checked><label for=\"op_1\">批量删除</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量锁定' name=\"op\" id=\"op_3\"><label for=\"op_3\">批量锁定</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量解锁' name=\"op\" id=\"op_4\"><label for=\"op_4\">批量解锁</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量导出' name=\"op\" id=\"op_2\"><label for=\"op_2\">批量导出</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量加时' name=\"op\" id=\"op_5\"><label for=\"op_5\">批量加时加点</label>\r\n</td>\r\n</tr>\r\n<tr>  \r\n<td align=right>操作对像</td>\r\n<td align=left>\r\n<input type=radio value='注册卡' name=\"table\" id=\"table_1\" checked><label for=\"table_1\">注册卡</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='用户' name=\"table\" id=\"table_2\"><label for=\"table_2\">用户（卡号模式的已激活注册卡在用户表以10位用户名+22位密码的形式表示）</label>\r\n</td>\r\n</tr>\r\n<tr id=\"b_notaddtime\">\r\n<td align=right>所属用户</td>\r\n<td align=left>\t\t\t\t\t\r\n<select name='managerid'>\r\n<option value=0>所有后台用户</option>\r\n";

foreach ($HY_41c3fcdee18a9c007f as $HY_6e51c8085c275d3130 ) {
	echo "\t\t\t<option value='" . $HY_6e51c8085c275d3130["id"] . "'>" . $HY_6e51c8085c275d3130["username"] . "[" . $HY_edb32e882300d2b7f7[$HY_6e51c8085c275d3130["level"]] . "]</option>";
}

echo "\t\r\n</select>\r\n</td>\r\n</tr>\r\n<tr id=\"b_keyg\"><td align=right>注册卡类</td><td align=left><select name=\"keyfix\" id=\"keygroupid\">\r\n<option value='0'>不限</option>\r\n";
echo hy_376e7117ed44419c03($HY_2c12c231b3916a7313, 0, 2);
echo "</select></td></tr>\r\n<tr id=\"b_js\" style=\"display:none\">\r\n<td align=right>加时</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"addday\" id=\"addday\" value=\"\" />天，0.04天约等于1小时</td>\r\n</tr>\r\n<tr id=\"b_jds\" style=\"display:none\">\r\n<td align=right>加点</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"points\" id=\"points\" value=\"\" />点</td>\r\n</tr>\r\n<tr>\r\n<td align=right>标签等于</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"tags\" id=\"tags\" value=\"\" /></td>\r\n</tr>\r\n<tr id='ordernumtr'>\r\n<td align=right>订单号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"ordernum\" id=\"ordernum\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"addtimetr\" malt=\"如果不用该条件，请删除输入框里的内容\">\r\n<td align=right>添加日期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime1\" id=\"addtime1\" value=\"\" />&lt; 日期 &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime2\" id=\"addtime2\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_1\" malt=\"用户模式已使用的充值卡、注册卡号模式已激活的注册卡，充值或激活日期在某天之前的<br>如果想选未充值或未激活的注册卡，这里选一个很早的时间即可，比如2010年的某一天<br>如果不用该条件，请删除输入框里的内容\">\r\n<td align=right>";
echo $HY_c095a01888f0e967d2["softmode"] == "USOFT" ? "充值" : "激活";
echo "日期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime0\" id=\"cztime0\" value=\"\" />&lt; 日期 &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime\" id=\"cztime\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_2\" style=\"display:none\" malt=\"如果不用该条件，请删除输入框里的内容\">\r\n<td align=right id=\"b_etime\">到期日期小于</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"\" /></td>\r\n</tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit class=\"submitbtn\" id=\"submit1\" value=\"执行操作\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
