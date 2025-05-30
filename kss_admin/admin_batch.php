<?php

function HY_97e31704fdf26069e3($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("../kss_inc/inc.php");
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "gp", "sql", "");
$HY_c5aaf359b892dfe165 = hy_ba8120f86a7df1aecc("softid", "gp", "int", 0);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);

if (!isset($openids)) {
	$openids = array(1);
}

if (!in_array($HY_825ad51e000ddc6ca5["id"], $openids)) {
	if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && ($HY_825ad51e000ddc6ca5["level"] != 9)) {
		hy_bd307d155f057feb55("权限未对你开放");
	}
}

$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where id=" . $HY_c5aaf359b892dfe165);

if (empty($HY_810d15d31408c982b2)) {
	hy_bd307d155f057feb55("软件不存在");
}

$HY_de13b17528948259e8 = hy_ba8120f86a7df1aecc("table", "gp", "sql", "");
$HY_a49db761d2702b25cf = hy_ba8120f86a7df1aecc("managerid", "gp", "int", 0);
$HY_4ceea309f0236d2496 = hy_ba8120f86a7df1aecc("keyfix", "gp", "sql", "");
$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("ordernum", "gp", "sql", "");
$HY_f8da8fd417da5ba763 = hy_ba8120f86a7df1aecc("addday", "gp", "num", "0");
$HY_fd266d63af4d47cce1 = hy_ba8120f86a7df1aecc("points", "gp", "int", "0");
$HY_22d275a1af69c39370 = hy_ba8120f86a7df1aecc("tags", "gp", "sql", "");
$HY_44e61ba4787ad5c74b = hy_ba8120f86a7df1aecc("cztime", "gp", "time", "2000-01-01 00:00:00");
$HY_c433e01e1e938d16b4 = hy_ba8120f86a7df1aecc("cztime0", "gp", "time", "2000-01-01 00:00:00");
$HY_77592321965a3ce182 = hy_ba8120f86a7df1aecc("endtime", "gp", "time", "2000-01-01 00:00:00");
$HY_322fc00c8c949fcde3 = hy_ba8120f86a7df1aecc("addtime1", "gp", "time", "2000-01-01 00:00:00");
$HY_9797fd09cb91dd097c = hy_ba8120f86a7df1aecc("addtime2", "gp", "time", "2000-01-01 00:00:00");
$HY_bcb154caa995902e10 = strtotime($HY_44e61ba4787ad5c74b);
$HY_473ccc6aa2af225ac7 = strtotime($HY_c433e01e1e938d16b4);
$HY_4299123f98ebf7cb4d = ($HY_810d15d31408c982b2["softmode"] == "USOFT" ? "充值" : "激活");

switch ($HY_040af70e369786c2e4) {
case "批量删除":
	ob_clean();
	hy_af470935131a2269b8();
	$HY_8a882d03fcf75bdbc6 = array();

	if ($HY_a49db761d2702b25cf != 0) {
		$HY_8a882d03fcf75bdbc6["7"] = " managerid=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_22d275a1af69c39370 != "") {
		$HY_8a882d03fcf75bdbc6["1"] = " tag like '" . $HY_22d275a1af69c39370 . "%' ";
	}

	if ($HY_de13b17528948259e8 == "注册卡") {
		$HY_72d6f9a98c0d61f535 = "kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;

		if (strlen($HY_4ceea309f0236d2496) == 4) {
			$HY_8a882d03fcf75bdbc6["6"] = " keyfix='" . $HY_4ceea309f0236d2496 . "' ";
		}

		if ($HY_44e61ba4787ad5c74b != "2000-01-01 00:00:00") {
			if ($HY_bcb154caa995902e10 < $HY_473ccc6aa2af225ac7) {
				hy_bd307d155f057feb55($HY_4299123f98ebf7cb4d . "日期 前边的必须小于后边的！");
			}

			if ($HY_473ccc6aa2af225ac7 < 946742400) {
				$HY_8a882d03fcf75bdbc6["8"] = " cztime < " . $HY_bcb154caa995902e10 . " ";
			}
			else {
				$HY_8a882d03fcf75bdbc6["8"] = " cztime between " . $HY_473ccc6aa2af225ac7 . " and " . $HY_bcb154caa995902e10;
			}
		}

		if (strlen($HY_7e3958ca51847ad2e2) == 24) {
			$HY_8a882d03fcf75bdbc6["2"] = " ordernum='" . $HY_7e3958ca51847ad2e2 . "' ";
		}

		if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") || ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00")) {
			if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c < $HY_322fc00c8c949fcde3)) {
				hy_bd307d155f057feb55("添加日期后边的要比前边的小");
			}

			if ($HY_322fc00c8c949fcde3 == "2000-01-01 00:00:00") {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime <" . strtotime($HY_9797fd09cb91dd097c) . " ";
			}
			else if ($HY_9797fd09cb91dd097c == "2000-01-01 00:00:00") {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime >" . strtotime($HY_322fc00c8c949fcde3) . " ";
			}
			else {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime between " . strtotime($HY_322fc00c8c949fcde3) . " and " . strtotime($HY_9797fd09cb91dd097c) . " ";
			}
		}
	}
	else {
		$HY_72d6f9a98c0d61f535 = "kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;

		if ($HY_77592321965a3ce182 != "2000-01-01 00:00:00") {
			$HY_8a882d03fcf75bdbc6["2"] = " endtime < " . strtotime($HY_77592321965a3ce182) . " ";
		}
	}

	if (empty($HY_8a882d03fcf75bdbc6)) {
		hy_bd307d155f057feb55("你最少要选择一个条件！");
	}

	ksort($HY_8a882d03fcf75bdbc6);
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_8a882d03fcf75bdbc6);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from " . $HY_72d6f9a98c0d61f535 . $HY_672d06c58fe042d1f1, "sync");

	if ($HY_173d86697f24ffa1ee != false) {
		hy_bd307d155f057feb55("批量删除成功，共影响" . $HY_82d6536edf704aabc5->HY_4d9399bcf4aa0a4a50 . "条！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "delete from " . $HY_72d6f9a98c0d61f535 . $HY_672d06c58fe042d1f1 . YH2 . ">");
	}

	hy_bd307d155f057feb55("批量删除失败：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "delete from " . $HY_72d6f9a98c0d61f535 . $HY_672d06c58fe042d1f1 . YH2 . ">");
	break;

case "批量锁定":
	ob_clean();
	hy_af470935131a2269b8();
	$HY_8a882d03fcf75bdbc6 = array();

	if ($HY_a49db761d2702b25cf != 0) {
		$HY_8a882d03fcf75bdbc6["7"] = " managerid=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_22d275a1af69c39370 != "") {
		$HY_8a882d03fcf75bdbc6["1"] = " tag like '" . $HY_22d275a1af69c39370 . "%' ";
	}

	if ($HY_de13b17528948259e8 == "注册卡") {
		$HY_72d6f9a98c0d61f535 = "kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;

		if (strlen($HY_4ceea309f0236d2496) == 4) {
			$HY_8a882d03fcf75bdbc6["6"] = " keyfix='" . $HY_4ceea309f0236d2496 . "' ";
		}

		if ($HY_44e61ba4787ad5c74b != "2000-01-01 00:00:00") {
			if ($HY_bcb154caa995902e10 < $HY_473ccc6aa2af225ac7) {
				hy_bd307d155f057feb55($HY_4299123f98ebf7cb4d . "日期 前边的必须小于后边的！");
			}

			if ($HY_473ccc6aa2af225ac7 < 946742400) {
				$HY_8a882d03fcf75bdbc6["8"] = " cztime < " . $HY_bcb154caa995902e10 . " ";
			}
			else {
				$HY_8a882d03fcf75bdbc6["8"] = " cztime between " . $HY_473ccc6aa2af225ac7 . " and " . $HY_bcb154caa995902e10;
			}
		}

		if (strlen($HY_7e3958ca51847ad2e2) == 24) {
			$HY_8a882d03fcf75bdbc6["2"] = " ordernum='" . $HY_7e3958ca51847ad2e2 . "' ";
		}

		if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") || ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00")) {
			if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c < $HY_322fc00c8c949fcde3)) {
				hy_bd307d155f057feb55("添加日期后边的要比前边的小");
			}

			if ($HY_322fc00c8c949fcde3 == "2000-01-01 00:00:00") {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime <" . strtotime($HY_9797fd09cb91dd097c) . " ";
			}
			else if ($HY_9797fd09cb91dd097c == "2000-01-01 00:00:00") {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime >" . strtotime($HY_322fc00c8c949fcde3) . " ";
			}
			else {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime between " . strtotime($HY_322fc00c8c949fcde3) . " and " . strtotime($HY_9797fd09cb91dd097c) . " ";
			}
		}
	}
	else {
		$HY_72d6f9a98c0d61f535 = "kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;

		if ($HY_77592321965a3ce182 != "2000-01-01 00:00:00") {
			$HY_8a882d03fcf75bdbc6["2"] = " endtime < " . strtotime($HY_77592321965a3ce182) . " ";
		}
	}

	if (empty($HY_8a882d03fcf75bdbc6)) {
		hy_bd307d155f057feb55("你最少要选择一个条件！");
	}

	ksort($HY_8a882d03fcf75bdbc6);
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_8a882d03fcf75bdbc6);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update " . $HY_72d6f9a98c0d61f535 . " set islock=3 " . $HY_672d06c58fe042d1f1, "sync");

	if ($HY_173d86697f24ffa1ee != false) {
		hy_bd307d155f057feb55("批量锁定成功，共影响" . $HY_82d6536edf704aabc5->HY_4d9399bcf4aa0a4a50 . "条！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_72d6f9a98c0d61f535 . " set islock=3 " . $HY_672d06c58fe042d1f1 . YH2 . ">");
	}

	hy_bd307d155f057feb55("批量锁定失败：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_72d6f9a98c0d61f535 . " set islock=3 " . $HY_672d06c58fe042d1f1 . YH2 . ">");
	break;

case "批量解锁":
	ob_clean();
	hy_af470935131a2269b8();
	$HY_8a882d03fcf75bdbc6 = array();

	if ($HY_a49db761d2702b25cf != 0) {
		$HY_8a882d03fcf75bdbc6["7"] = " managerid=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_22d275a1af69c39370 != "") {
		$HY_8a882d03fcf75bdbc6["1"] = " tag like '" . $HY_22d275a1af69c39370 . "%' ";
	}

	if ($HY_de13b17528948259e8 == "注册卡") {
		$HY_72d6f9a98c0d61f535 = "kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;

		if (strlen($HY_4ceea309f0236d2496) == 4) {
			$HY_8a882d03fcf75bdbc6["6"] = " keyfix='" . $HY_4ceea309f0236d2496 . "' ";
		}

		if ($HY_44e61ba4787ad5c74b != "2000-01-01 00:00:00") {
			if ($HY_bcb154caa995902e10 < $HY_473ccc6aa2af225ac7) {
				hy_bd307d155f057feb55($HY_4299123f98ebf7cb4d . "日期 前边的必须小于后边的！");
			}

			if ($HY_473ccc6aa2af225ac7 < 946742400) {
				$HY_8a882d03fcf75bdbc6["8"] = " cztime < " . $HY_bcb154caa995902e10 . " ";
			}
			else {
				$HY_8a882d03fcf75bdbc6["8"] = " cztime between " . $HY_473ccc6aa2af225ac7 . " and " . $HY_bcb154caa995902e10;
			}
		}

		if (strlen($HY_7e3958ca51847ad2e2) == 24) {
			$HY_8a882d03fcf75bdbc6["2"] = " ordernum='" . $HY_7e3958ca51847ad2e2 . "' ";
		}

		if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") || ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00")) {
			if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c < $HY_322fc00c8c949fcde3)) {
				hy_bd307d155f057feb55("添加日期后边的要比前边的小");
			}

			if ($HY_322fc00c8c949fcde3 == "2000-01-01 00:00:00") {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime <" . strtotime($HY_9797fd09cb91dd097c) . " ";
			}
			else if ($HY_9797fd09cb91dd097c == "2000-01-01 00:00:00") {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime >" . strtotime($HY_322fc00c8c949fcde3) . " ";
			}
			else {
				$HY_8a882d03fcf75bdbc6["11"] = " addtime between " . strtotime($HY_322fc00c8c949fcde3) . " and " . strtotime($HY_9797fd09cb91dd097c) . " ";
			}
		}
	}
	else {
		$HY_72d6f9a98c0d61f535 = "kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;

		if ($HY_77592321965a3ce182 != "2000-01-01 00:00:00") {
			$HY_8a882d03fcf75bdbc6["2"] = " endtime < " . strtotime($HY_77592321965a3ce182) . " ";
		}
	}

	if (empty($HY_8a882d03fcf75bdbc6)) {
		hy_bd307d155f057feb55("你最少要选择一个条件！");
	}

	ksort($HY_8a882d03fcf75bdbc6);
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_8a882d03fcf75bdbc6);
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update " . $HY_72d6f9a98c0d61f535 . " set islock=0 " . $HY_672d06c58fe042d1f1, "sync");

	if ($HY_173d86697f24ffa1ee != false) {
		hy_bd307d155f057feb55("批量解锁成功，共影响" . $HY_82d6536edf704aabc5->HY_4d9399bcf4aa0a4a50 . "条！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_72d6f9a98c0d61f535 . " set islock=3 " . $HY_672d06c58fe042d1f1 . YH2 . ">");
	}

	hy_bd307d155f057feb55("批量解锁失败：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_72d6f9a98c0d61f535 . " set islock=3 " . $HY_672d06c58fe042d1f1 . YH2 . ">");
	break;

case "批量导出":
	ob_clean();
	$HY_8a882d03fcf75bdbc6 = array();

	if ($HY_a49db761d2702b25cf != 0) {
		$HY_8a882d03fcf75bdbc6["7"] = " managerid=" . $HY_a49db761d2702b25cf . " ";
	}

	if ($HY_22d275a1af69c39370 != "") {
		$HY_8a882d03fcf75bdbc6["1"] = " tag like '" . $HY_22d275a1af69c39370 . "%' ";
	}

	if (strlen($HY_7e3958ca51847ad2e2) == 24) {
		$HY_8a882d03fcf75bdbc6["2"] = " ordernum='" . $HY_7e3958ca51847ad2e2 . "' ";
	}

	if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") || ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00")) {
		if (($HY_322fc00c8c949fcde3 != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c != "2000-01-01 00:00:00") && ($HY_9797fd09cb91dd097c < $HY_322fc00c8c949fcde3)) {
			hy_bd307d155f057feb55("添加日期后边的要比前边的小");
		}

		if ($HY_322fc00c8c949fcde3 == "2000-01-01 00:00:00") {
			$HY_8a882d03fcf75bdbc6["11"] = " addtime <" . strtotime($HY_9797fd09cb91dd097c) . " ";
		}
		else if ($HY_9797fd09cb91dd097c == "2000-01-01 00:00:00") {
			$HY_8a882d03fcf75bdbc6["11"] = " addtime >" . strtotime($HY_322fc00c8c949fcde3) . " ";
		}
		else {
			$HY_8a882d03fcf75bdbc6["11"] = " addtime between " . strtotime($HY_322fc00c8c949fcde3) . " and " . strtotime($HY_9797fd09cb91dd097c) . " ";
		}
	}

	if (strlen($HY_4ceea309f0236d2496) == 4) {
		$HY_8a882d03fcf75bdbc6["6"] = " keyfix='" . $HY_4ceea309f0236d2496 . "' ";
	}

	if ($HY_44e61ba4787ad5c74b != "2000-01-01 00:00:00") {
		if ($HY_bcb154caa995902e10 < $HY_473ccc6aa2af225ac7) {
			hy_bd307d155f057feb55($HY_4299123f98ebf7cb4d . "日期 前边的必须小于后边的！");
		}

		if ($HY_473ccc6aa2af225ac7 < 946742400) {
			$HY_8a882d03fcf75bdbc6["8"] = " cztime < " . $HY_bcb154caa995902e10 . " ";
		}
		else {
			$HY_8a882d03fcf75bdbc6["8"] = " cztime between " . $HY_473ccc6aa2af225ac7 . " and " . $HY_bcb154caa995902e10;
		}
	}

	if (empty($HY_8a882d03fcf75bdbc6)) {
		hy_bd307d155f057feb55("你最少要选择一个条件！");
	}

	ksort($HY_8a882d03fcf75bdbc6);
	$HY_72d6f9a98c0d61f535 = "kss_z_key_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_8a882d03fcf75bdbc6);
	$HY_c029cfe4c3e1320d3e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `keyfix`,`keys`,`keyspassword` from " . $HY_72d6f9a98c0d61f535 . $HY_672d06c58fe042d1f1);

	if (!empty($HY_c029cfe4c3e1320d3e)) {
		$HY_7be07c6f0e278743ff = "";

		foreach ($HY_c029cfe4c3e1320d3e as $HY_970be7709f584ff59c ) {
			$HY_7be07c6f0e278743ff .= $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"] . $HY_970be7709f584ff59c["keyspassword"] . "\r\n";
		}

		hy_bd307d155f057feb55("批量导出注册卡成功！<br><textarea class=dwidth style='width:400px;height:200px'>" . $HY_7be07c6f0e278743ff . "</textarea><br>SQL：<input type=text style='width:400px' value=" . YH2 . "select `keyfix`,`keys`,`keyspassword` from " . $HY_72d6f9a98c0d61f535 . $HY_672d06c58fe042d1f1 . YH2 . ">");
	}

	hy_bd307d155f057feb55("没有找到需要导出的数据。<br>SQL：<input type=text style='width:400px' value=" . YH2 . "select `keyfix`,`keys`,`keyspassword` from " . $HY_72d6f9a98c0d61f535 . $HY_672d06c58fe042d1f1 . YH2 . ">");
	break;

case "批量加时":
	ob_clean();
	hy_af470935131a2269b8();
	if (($HY_f8da8fd417da5ba763 == 0) && ($HY_fd266d63af4d47cce1 == 0)) {
		hy_bd307d155f057feb55("加时和加点不能都为0，加时间或点数请用正数，减时间或点数请用负数！");
	}

	$HY_8a882d03fcf75bdbc6 = array();
	$HY_29c10e9327a6fca506 = "给";

	if ($HY_22d275a1af69c39370 != "") {
		$HY_8a882d03fcf75bdbc6["1"] = " tag like '" . $HY_22d275a1af69c39370 . "%' ";
		$HY_29c10e9327a6fca506 .= "标签为" . $HY_22d275a1af69c39370;
	}

	if ($HY_77592321965a3ce182 != "2000-01-01 00:00:00") {
		$HY_8a882d03fcf75bdbc6["2"] = " endtime > " . strtotime($HY_77592321965a3ce182) . " ";
		$HY_29c10e9327a6fca506 .= "到期日期大于" . $HY_77592321965a3ce182;
	}

	$HY_29c10e9327a6fca506 .= "的用户批量加时";

	if (empty($HY_8a882d03fcf75bdbc6)) {
		hy_bd307d155f057feb55("你最少要选择一个条件【标签或到期日期】！");
	}

	$HY_8a882d03fcf75bdbc6["3"] = " endtime <> " . PETIME . " ";
	ksort($HY_8a882d03fcf75bdbc6);
	$HY_72d6f9a98c0d61f535 = "kss_z_user_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165;
	$HY_672d06c58fe042d1f1 = " where" . implode(" and ", $HY_8a882d03fcf75bdbc6);

	if ($HY_f8da8fd417da5ba763 == 0) {
		$HY_5cf3f6d03b487703cc = "`points`=`points`+" . $HY_fd266d63af4d47cce1;
	}
	else if ($HY_fd266d63af4d47cce1 == 0) {
		$HY_5cf3f6d03b487703cc = "`cday`=`cday`+" . $HY_f8da8fd417da5ba763 . ",`endtime`=`endtime`+" . ($HY_f8da8fd417da5ba763 * 86400);
	}
	else {
		$HY_5cf3f6d03b487703cc = "`cday`=`cday`+" . $HY_f8da8fd417da5ba763 . ",`endtime`=`endtime`+" . ($HY_f8da8fd417da5ba763 * 86400) . ", `points`=`points`+" . $HY_fd266d63af4d47cce1;
	}

	if (0 < $HY_f8da8fd417da5ba763) {
		if (!in_array($HY_825ad51e000ddc6ca5["id"], $openids)) {
			if ((stripos($_SERVER["SERVER_NAME"], "v9.hphu.com") !== false) && ($HY_825ad51e000ddc6ca5["level"] != 9)) {
				hy_bd307d155f057feb55("禁止加时操作！");
			}
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_addcday` (`pid`,`managerid`,`softid`,`addtime`,`cday`,`username`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . $HY_c5aaf359b892dfe165 . "," . time() . "," . $HY_f8da8fd417da5ba763 . ",'','批量，标签【" . $HY_22d275a1af69c39370 . "】到期日期大于【" . $HY_77592321965a3ce182 . "】，加时" . $HY_f8da8fd417da5ba763 . "天')", "notsync");

		if ($HY_173d86697f24ffa1ee !== true) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_addcday`", "notsync");
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update " . $HY_72d6f9a98c0d61f535 . " set " . $HY_5cf3f6d03b487703cc . " " . $HY_672d06c58fe042d1f1, "sync");

	if ($HY_173d86697f24ffa1ee != false) {
		$HY_01b5710b73c8130cb1 = $HY_82d6536edf704aabc5->HY_4d9399bcf4aa0a4a50;
		$HY_2b051c35c3cffb9826 = "insert into kss_z_cz_" . $HY_825ad51e000ddc6ca5["pid"] . "_" . $HY_c5aaf359b892dfe165 . " (`addtime`,`cztype`,`username`,`oldcday`,`newcday`,`oldtimes`,`newtimes`,`keys`,`tzxguser`) values\t(" . time() . ",10,'admin_addtime',0," . $HY_f8da8fd417da5ba763 . ",0," . $HY_fd266d63af4d47cce1 . ",'" . $HY_29c10e9327a6fca506 . "','')";
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826);

		if ($HY_173d86697f24ffa1ee !== true) {
			hy_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826, $HY_82d6536edf704aabc5->HY_8def866213a3d931dd(), __FILE__, 289);
		}

		hy_bd307d155f057feb55("批量加时成功，共改变" . $HY_01b5710b73c8130cb1 . "用户的时间！<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_72d6f9a98c0d61f535 . " set " . $HY_5cf3f6d03b487703cc . " " . $HY_672d06c58fe042d1f1 . YH2 . ">");
	}

	hy_bd307d155f057feb55("批量加时失败：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>SQL：<input type=text style='width:400px' value=" . YH2 . "update " . $HY_72d6f9a98c0d61f535 . " set " . $HY_5cf3f6d03b487703cc . " " . $HY_672d06c58fe042d1f1 . YH2 . ">");
	break;

default:
	break;
}

$HY_b0a23355aa9ae9f34d = "批处理数据";
include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
$HY_d87caa1d9d90751b8f = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`username`,`level` from `kss_tb_manager` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and isdel=0 order by id asc");
echo "\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() {\r\n$('#admin_batch').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nif($(\"#op_1\").attr(\"checked\")==true){\r\nif(confirm(\"批量删除是将数据从数据库中彻底删除，操作不可还原！\\r\\n\\r\\n请在批量删除前做好数据库备份，以防数据丢失。\\r\\n\\r\\n是否继续执行批量删除操作？\")){\r\nreturn true; \r\n}else{\r\nreturn false;\r\n}\r\n}else{\r\nreturn true;\r\n}\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif($(\"#op_2\").attr(\"checked\")==true){\r\nmalert(responseText,'导出数据',420,300);\r\n}else{\r\nmalert(responseText); \r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\r\n$(\"#cztime,#cztime0,#endtime,#addtime1,#addtime2\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$(\"input[id^='table_']\").bind(\"click\",function(){\r\nif($(this).attr(\"id\")==\"table_1\"){\r\n$(\"#b_table_1\").show();\r\n$(\"#b_table_2\").hide();\r\n$(\"#b_keyg\").show();\r\n$(\"#ordernumtr,#addtimetr\").show();\t\r\n}else{\r\n$(\"#b_table_2\").show();\r\n$(\"#b_table_1\").hide();\t\r\n$(\"#b_keyg\").hide();\t\r\n$(\"#ordernumtr,#addtimetr\").hide();\t\r\n}\t\r\n});\r\n$(\"input[name='op']\").bind(\"click\",function(){\r\nif($(this).val()=='批量加时'){\r\n$(\"#b_js\").show();\t\r\n$(\"#b_notaddtime\").hide();\r\n$(\"#b_jds\").show();\t\r\n$(\"#table_1\").attr('disabled','disabled');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#table_2\").click();\t\r\n$(\"#b_etime\").text(\"到期日期大于\");\r\n}else if($(this).val()=='批量导出'){\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\r\n$(\"#table_1\").attr('disabled','');\r\n$(\"#table_2\").attr('disabled','disabled');\t\r\n$(\"#table_1\").click();\t\r\n$(\"#b_etime\").text(\"到期日期小于\");\r\n}else{\t\t\r\n$(\"#b_notaddtime\").show();\r\n$(\"#b_js\").hide();\t\r\n$(\"#b_jds\").hide();\t\t\r\n$(\"#table_1\").attr('disabled','');\t\r\n$(\"#table_2\").attr('disabled','');\r\n$(\"#b_etime\").text(\"到期日期小于\");\r\n}\r\n\r\n});\r\n\r\n\r\n});\r\n\r\n</script>\r\n<form id=\"admin_batch\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"softid\" id=\"softid\" value=\"";
echo $HY_c5aaf359b892dfe165;
echo "\" />\r\n\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">";
echo $HY_810d15d31408c982b2["softname"];
echo "批量处理数据</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right>执行操作</td>\r\n<td align=left>\r\n<input type=radio value='批量删除' name=\"op\" id=\"op_1\" checked><label for=\"op_1\">批量删除</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量锁定' name=\"op\" id=\"op_3\"><label for=\"op_3\">批量锁定</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量解锁' name=\"op\" id=\"op_4\"><label for=\"op_4\">批量解锁</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量导出' name=\"op\" id=\"op_2\"><label for=\"op_2\">批量导出</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='批量加时' name=\"op\" id=\"op_5\"><label for=\"op_5\">批量加时加点</label>\r\n</td>\r\n</tr>\r\n<tr>  \r\n<td align=right>操作对像</td>\r\n<td align=left>\r\n<input type=radio value='注册卡' name=\"table\" id=\"table_1\" checked><label for=\"table_1\">注册卡</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value='用户' name=\"table\" id=\"table_2\"><label for=\"table_2\">用户（卡号模式的已激活注册卡在用户表以10位用户名+22位密码的形式表示）</label>\r\n</td>\r\n</tr>\r\n<tr id=\"b_notaddtime\">\r\n<td align=right>所属用户</td>\r\n<td align=left>\t\t\t\t\t\r\n<select name='managerid'>\r\n<option value=0>所有后台用户</option>\r\n";

foreach ($HY_d87caa1d9d90751b8f as $HY_970be7709f584ff59c ) {
	echo "\t\t\t<option value='" . $HY_970be7709f584ff59c["id"] . "'>" . $HY_970be7709f584ff59c["username"] . "[" . $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]] . "]</option>";
}

echo "\t\r\n</select>\r\n</td>\r\n</tr>\r\n<tr id=\"b_keyg\"><td align=right>注册卡类</td><td align=left><select name=\"keyfix\" id=\"keygroupid\">\r\n<option value='0'>不限</option>\r\n";
echo hy_c79cc84a5c5725e920($HY_c5aaf359b892dfe165, 0, 2);
echo "</select></td></tr>\r\n<tr id=\"b_js\" style=\"display:none\">\r\n<td align=right>加时</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"addday\" id=\"addday\" value=\"\" />天，0.04天约等于1小时</td>\r\n</tr>\r\n<tr id=\"b_jds\" style=\"display:none\">\r\n<td align=right>加点</td>\r\n<td align=left><input class=\"smlinput\" type=\"text\" maxlength=\"4\" name=\"points\" id=\"points\" value=\"\" />点</td>\r\n</tr>\r\n<tr>\r\n<td align=right>标签等于</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"tags\" id=\"tags\" value=\"\" /></td>\r\n</tr>\r\n<tr id='ordernumtr'>\r\n<td align=right>订单号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"24\" name=\"ordernum\" id=\"ordernum\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"addtimetr\" malt=\"如果不用该条件，请删除输入框里的内容\">\r\n<td align=right>添加日期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime1\" id=\"addtime1\" value=\"\" />&lt; 日期 &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"addtime2\" id=\"addtime2\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_1\" malt=\"用户模式已使用的充值卡、注册卡号模式已激活的注册卡，充值或激活日期在某天之前的<br>如果想选未充值或未激活的注册卡，这里选一个很早的时间即可，比如2010年的某一天<br>如果不用该条件，请删除输入框里的内容\">\r\n<td align=right>";
echo $HY_810d15d31408c982b2["softmode"] == "USOFT" ? "充值" : "激活";
echo "日期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime0\" id=\"cztime0\" value=\"\" />&lt; 日期 &lt;<input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"cztime\" id=\"cztime\" value=\"\" /></td>\r\n</tr>\r\n<tr id=\"b_table_2\" style=\"display:none\" malt=\"如果不用该条件，请删除输入框里的内容\">\r\n<td align=right id=\"b_etime\">到期日期小于</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"\" /></td>\r\n</tr>\r\n</table>\r\n\r\n</div>\r\n<div style=\"padding:10px 0 10px 150px\">&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit name=submit class=\"submitbtn\" id=\"submit1\" value=\"执行操作\"></div>\r\n</div>\r\n\r\n</form>\r\n</body>\r\n</html>";

?>
