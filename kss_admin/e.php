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
	hy_86f21d2568526ae0c1("���������");
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
$HY_2f4ee0c186950d48f3 = ($HY_c095a01888f0e967d2["softmode"] == "USOFT" ? "��ֵ" : "����");

switch ($HY_3229681c01598c2d9b) {
case "����ɾ��":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if ($HY_d660fba5acd1724ef1 == "ע�Ῠ") {
		$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
			$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
		}

		if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
			if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
				hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "���� ǰ�ߵı���С�ں�ߵģ�");
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
				hy_86f21d2568526ae0c1("������ں�ߵ�Ҫ��ǰ�ߵ�С");
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
		hy_86f21d2568526ae0c1("������Ҫѡ��һ��������");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("delete from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		hy_86f21d2568526ae0c1("����ɾ���ɹ�����Ӱ��" . $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e . "����<br>SQL��<input type=text style='width:400px' value=" . YH2 . "delete from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("����ɾ��ʧ�ܣ�" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL��<input type=text style='width:400px' value=" . YH2 . "delete from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "��������":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if ($HY_d660fba5acd1724ef1 == "ע�Ῠ") {
		$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
			$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
		}

		if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
			if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
				hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "���� ǰ�ߵı���С�ں�ߵģ�");
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
				hy_86f21d2568526ae0c1("������ں�ߵ�Ҫ��ǰ�ߵ�С");
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
		hy_86f21d2568526ae0c1("������Ҫѡ��һ��������");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		hy_86f21d2568526ae0c1("���������ɹ�����Ӱ��" . $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e . "����<br>SQL��<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("��������ʧ�ܣ�" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL��<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "��������":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	$HY_cbb7b324ddce597c02 = array();

	if ($HY_97202bae9a74876762 != 0) {
		$HY_cbb7b324ddce597c02["7"] = " managerid=" . $HY_97202bae9a74876762 . " ";
	}

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
	}

	if ($HY_d660fba5acd1724ef1 == "ע�Ῠ") {
		$HY_5c16d6032ca0e0840e = "kss_z_key_" . $HY_d340d8b5e00dfc2f9a["pid"] . "_" . $HY_2c12c231b3916a7313;

		if (strlen($HY_2e46d1f13439f9f8ac) == 4) {
			$HY_cbb7b324ddce597c02["6"] = " keyfix='" . $HY_2e46d1f13439f9f8ac . "' ";
		}

		if ($HY_40fba4863c12b9401c != "2000-01-01 00:00:00") {
			if ($HY_9adeca2c744e74603a < $HY_1b7000e868fa3031c7) {
				hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "���� ǰ�ߵı���С�ں�ߵģ�");
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
				hy_86f21d2568526ae0c1("������ں�ߵ�Ҫ��ǰ�ߵ�С");
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
		hy_86f21d2568526ae0c1("������Ҫѡ��һ��������");
	}

	ksort($HY_cbb7b324ddce597c02);
	$HY_e70bcd942d02608938 = " where" . implode(" and ", $HY_cbb7b324ddce597c02);
	$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("update " . $HY_5c16d6032ca0e0840e . " set islock=0 " . $HY_e70bcd942d02608938, "sync");

	if ($HY_9e756bc5b9284a0b7c != false) {
		hy_86f21d2568526ae0c1("���������ɹ�����Ӱ��" . $HY_0ef7d0adcc0e503dce->HY_1950d3602f2084328e . "����<br>SQL��<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("��������ʧ�ܣ�" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL��<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set islock=3 " . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "��������":
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
			hy_86f21d2568526ae0c1("������ں�ߵ�Ҫ��ǰ�ߵ�С");
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
			hy_86f21d2568526ae0c1($HY_2f4ee0c186950d48f3 . "���� ǰ�ߵı���С�ں�ߵģ�");
		}

		if ($HY_1b7000e868fa3031c7 < 946742400) {
			$HY_cbb7b324ddce597c02["8"] = " cztime < " . $HY_9adeca2c744e74603a . " ";
		}
		else {
			$HY_cbb7b324ddce597c02["8"] = " cztime between " . $HY_1b7000e868fa3031c7 . " and " . $HY_9adeca2c744e74603a;
		}
	}

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("������Ҫѡ��һ��������");
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

		hy_86f21d2568526ae0c1("��������ע�Ῠ�ɹ���<br><textarea class=dwidth style='width:400px;height:200px'>" . $HY_dc24e7b6ee157ac06e . "</textarea><br>SQL��<input type=text style='width:400px' value=" . YH2 . "select `keyfix`,`keys`,`keyspassword` from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("û���ҵ���Ҫ���������ݡ�<br>SQL��<input type=text style='width:400px' value=" . YH2 . "select `keyfix`,`keys`,`keyspassword` from " . $HY_5c16d6032ca0e0840e . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

case "������ʱ":
	ob_clean();
	hy_1fbc7a82365c59fb92();
	if (($HY_bfd419b1842ce1f1af == 0) && ($HY_6d347213055c417f8f == 0)) {
		hy_86f21d2568526ae0c1("��ʱ�ͼӵ㲻�ܶ�Ϊ0����ʱ������������������ʱ���������ø�����");
	}

	$HY_cbb7b324ddce597c02 = array();
	$HY_18684a62d5092445b1 = "��";

	if ($HY_e80a376aad98a2b2bc != "") {
		$HY_cbb7b324ddce597c02["1"] = " tag like '" . $HY_e80a376aad98a2b2bc . "%' ";
		$HY_18684a62d5092445b1 .= "��ǩΪ" . $HY_e80a376aad98a2b2bc;
	}

	if ($HY_6e9296a4212f6f78af != "2000-01-01 00:00:00") {
		$HY_cbb7b324ddce597c02["2"] = " endtime > " . strtotime($HY_6e9296a4212f6f78af) . " ";
		$HY_18684a62d5092445b1 .= "�������ڴ���" . $HY_6e9296a4212f6f78af;
	}

	$HY_18684a62d5092445b1 .= "���û�������ʱ";

	if (empty($HY_cbb7b324ddce597c02)) {
		hy_86f21d2568526ae0c1("������Ҫѡ��һ����������ǩ�������ڡ���");
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
				hy_86f21d2568526ae0c1("��ֹ��ʱ������");
			}
		}

		$HY_9e756bc5b9284a0b7c = $HY_0ef7d0adcc0e503dce->HY_9363bdefaac825d8b9("insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (" . $HY_d340d8b5e00dfc2f9a["pid"] . "," . $HY_d340d8b5e00dfc2f9a["id"] . "," . $HY_2c12c231b3916a7313 . "," . time() . "," . $HY_bfd419b1842ce1f1af . ",'','��������ǩ��" . $HY_e80a376aad98a2b2bc . "���������ڴ��ڡ�" . $HY_6e9296a4212f6f78af . "������ʱ" . $HY_bfd419b1842ce1f1af . "��')", "notsync");

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

		hy_86f21d2568526ae0c1("������ʱ�ɹ������ı�" . $HY_78e20e422544fd4b16 . "�û���ʱ�䣡<br>SQL��<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set " . $HY_e11e16fca8a19e9fe3 . " " . $HY_e70bcd942d02608938 . YH2 . ">");
	}

	hy_86f21d2568526ae0c1("������ʱʧ�ܣ�" . $HY_0ef7d0adcc0e503dce->HY_91544ed7b71c8f224e() . "<br>SQL��<input type=text style='width:400px' value=" . YH2 . "update " . $HY_5c16d6032ca0e0840e . " set " . $HY_e11e16fca8a19e9fe3 . " " . $HY_e70bcd942d02608938 . YH2 . ">");
	break;

default:
	break;
}

$HY_88cb8af770766e2af3 = "����������";
include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
$HY_41c3fcdee18a9c007f = $HY_0ef7d0adcc0e503dce->HY_8d7faa725adf1955c7("select `id`,`username`,`level` from `kss_tb_manager` where `pid`=" . $HY_d340d8b5e00dfc2f9a["pid"] . " order by id asc");
echo "\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() {\r\n$('#admin_batch').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"#op_1\").attr(\"checked\")==true){\r\nif(confirm(\"����ɾ���ǽ����ݴ����ݿ��г���ɾ�����������ɻ�ԭ��\\r\\n\\r\\n��������ɾ��ǰ�������ݿⱸ�ݣ��Է����ݶ�ʧ��\\r\\n\\r\\n�Ƿ����ִ������ɾ��������\")){\r\nreturn true; \r\n}else{\r\nreturn false;\r\n}\r\n}else{\r\nreturn true;\r\n}\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif($(\"#op_2\").attr(\"checked\")==true){\r\nmalert(responseText,'��������',420,300);\r\n}else{\r\nmalert(responseText); \r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n$(\"#cztime,#cztime0,#endtime,#addtime1,#addtime2\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$(\"input[id^='table_']\").bind(\"click\",function(){\r\nif($(this).attr(\"id\")==\"table_1\"){\r\n$(\"#b_table_1\").show();\r\n$(\"#b_table_2\").hide();\r\n$(\"#b_keyg\").show();\r\n$(\"#ordernumtr,#addtimetr\").show();\t\r\n}else{\r\n$(\"#b_table_2\").show();\r\n$(\"#b_table_1\").hide();\t\r\n$(\"#b_keyg\").hide();\t\r\n$(\"#ordernumtr,#addtimetr\").hide();\t\r\n}\t\r\n});\r\n$(\"input[name='op']\").bind(\"click\",function(){\r\nif($(this).val()=='������ʱ'){\r\n$(\"#b_js\").show();\t\r\n$(\"#b_notaddtime\").hide();\r\n$(\"#b_jds\").show();\t\r\n$(\"#table_1\").attr('disabled','disabled');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#table_2\").click();\t\r\n$(\"#b_etime\").text(\"�������ڴ���\");\r\n}else if($(this).val()=='��������'){\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\r\n$(\"#table_1\").attr('disabled','');\r\n$(\"#table_2\").attr('disabled','disabled');\t\r\n$(\"#table_1\").click();\t\r\n$(\"#b_etime\").text(\"��������С��\");\r\n}else{\t\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\t\r\n$(\"#table_1\").attr('disabled','');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#b_etime\").text(\"��������С��\");\r\n}\r\n\r\n});\r\n\r\n\r\n});\r\n\r\n</script>\r\n<form id=\"admin_batch\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax�ύ������Ӵ���\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" id=\"softid\" value=\"";
echo $HY_2c12c231b3916a7313;
echo "\" />\r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_c095a01888f0e967d2["softname"];
echo "������������</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>ִ�в���</td>\r\n<td align=left>\r\n<input type=radio value='����ɾ��' name=\"op\" id=\"op_1\" checked><label for=\"op_1\">����ɾ��</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='��������' name=\"op\" id=\"op_3\"><label for=\"op_3\">��������</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='��������' name=\"op\" id=\"op_4\"><label for=\"op_4\">��������</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='��������' name=\"op\" id=\"op_2\"><label for=\"op_2\">��������</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='������ʱ' name=\"op\" id=\"op_5\"><label for=\"op_5\">������ʱ�ӵ�</label>\r\n</td>\r\n</tr>\r\n<tr>  \r\n<td align=right>��������</td>\r\n<td align=left>\r\n<input type=radio value='ע�Ῠ' name=\"table\" id=\"table_1\" checked><label for=\"table_1\">ע�Ῠ</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='�û�' name=\"table\" id=\"table_2\"><label for=\"table_2\">�û�������ģʽ���Ѽ���ע�Ῠ���û�����10λ�û���+22λ�������ʽ��ʾ��</label>\r\n</td>\r\n</tr>\r\n<tr id=\"b_notaddtime\">\r\n<td align=right>�����û�</td>\r\n<td align=left>\t\t\t\t\t\r\n<select name='managerid'>\r\n<option value=0>���к�̨�û�</option>\r\n";

foreach ($HY_41c3fcdee18a9c007f as $HY_6e51c8085c275d3130 ) {
	echo "\t\t\t<option value='" . $HY_6e51c8085c275d3130["id"] . "'>" . $HY_6e51c8085c275d3130["username"] . "[" . $HY_edb32e882300d2b7f7[$HY_6e51c8085c275d3130["level"]] . "]</option>";
}

echo "\t\r\n</select>\r\n</td>\r\n</tr>\r\n<tr id=\"b_keyg\"><td align=right>ע�Ῠ��</td><td align=left><select name=\"keyfix\" id=\"keygroupid\">\r\n<option value='0'>����</option>\r\n";
echo hy_376e7117ed44419c03($HY_2c12c231b3916a7313, 0, 2);
echo "</select></td></tr>\r\n<tr id=\"b_js\" style=\"display:none\">\r\n<td align=right>��ʱ</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"addday\" id=\"addday\" value=\"\" />�죬0.04��Լ����1Сʱ</td>\r\n</tr>\r\n<tr id=\"b_jds\" style=\"display:none\">\r\n<td align=right>�ӵ�</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"points\" id=\"points\" value=\"\" />��</td>\r\n</tr>\r\n<tr>\r\n<td align=right>��ǩ����</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"tags\" id=\"tags\" value=\"\" /></td>\r\n</tr>\r\n<tr id='ordernumtr'>\r\n<td align=right>������</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"ordernum\" id=\"ordernum\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"addtimetr\" malt=\"������ø���������ɾ��������������\">\r\n<td align=right>�������</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime1\" id=\"addtime1\" value=\"\" />&lt; ���� &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime2\" id=\"addtime2\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_1\" malt=\"�û�ģʽ��ʹ�õĳ�ֵ����ע�Ῠ��ģʽ�Ѽ����ע�Ῠ����ֵ�򼤻�������ĳ��֮ǰ��<br>�����ѡδ��ֵ��δ�����ע�Ῠ������ѡһ�������ʱ�伴�ɣ�����2010���ĳһ��<br>������ø���������ɾ��������������\">\r\n<td align=right>";
echo $HY_c095a01888f0e967d2["softmode"] == "USOFT" ? "��ֵ" : "����";
echo "����</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime0\" id=\"cztime0\" value=\"\" />&lt; ���� &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime\" id=\"cztime\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_2\" style=\"display:none\" malt=\"������ø���������ɾ��������������\">\r\n<td align=right id=\"b_etime\">��������С��</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"\" /></td>\r\n</tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit class=\"submitbtn\" id=\"submit1\" value=\"ִ�в���\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
