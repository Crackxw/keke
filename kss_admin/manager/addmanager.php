<?php

function HY_a7f6cd7d4faa267599($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_ea06959c8f6f5d1434($HY_0bde1bcc2f9b3a3361, $HY_7d7a58fe70f22b5227)
{
	$HY_8571c7f925b752f1c6 = explode(",", str_replace(" ", "", $HY_0bde1bcc2f9b3a3361["powerlist"]));
	$HY_50d1a4d23b1b7cb4b4 = explode(",", str_replace(" ", "", $HY_7d7a58fe70f22b5227));
	$HY_edcf37406efffb55a8 = array_intersect($HY_8571c7f925b752f1c6, $HY_50d1a4d23b1b7cb4b4);

	if (!empty($HY_edcf37406efffb55a8)) {
		return implode(",", $HY_edcf37406efffb55a8);
	}

	return "";
}

defined("YH2") || exit("Access denied to view this page!");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(7);
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "pg", "sql", "");

if ($HY_d762a272713d62924f == "addmanager_save") {
	hy_af470935131a2269b8();
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "p", "int", 0);
	$HY_e38feb24e073afc890 = hy_ba8120f86a7df1aecc("level", "p", "int", 0);
	if (($HY_e38feb24e073afc890 == 0) || ($HY_e38feb24e073afc890 < 6)) {
		hy_bd307d155f057feb55("后台帐号类型错误！");
	}

	if (($HY_825ad51e000ddc6ca5["level"] != 9) && ($HY_825ad51e000ddc6ca5["level"] <= $HY_e38feb24e073afc890)) {
		hy_bd307d155f057feb55("你无权限对该级别帐号进行任何操作！");
	}

	$HY_763e48afb2ac2ce438 = hy_ba8120f86a7df1aecc("maxusernum", "p", "int", 0);
	$HY_241412be0daddcee1f = hy_ba8120f86a7df1aecc("username", "p", "sqljs", "");
	if ((20 < strlen($HY_241412be0daddcee1f)) || (strlen($HY_241412be0daddcee1f) < 5)) {
		hy_bd307d155f057feb55("帐号名长度必须是5-20个字符之间！");
	}

	if ((substr($HY_825ad51e000ddc6ca5["username"], 0, 4) == "test") && ($HY_825ad51e000ddc6ca5["username"] != $HY_241412be0daddcee1f) && ($HY_825ad51e000ddc6ca5["id"] == $HY_365893812300a028d8)) {
		hy_bd307d155f057feb55("禁止修改体验帐号名！");
	}

	$HY_729b908f51ba85e460 = hy_ba8120f86a7df1aecc("password", "p", "sqljs", "");
	if ((substr($HY_825ad51e000ddc6ca5["username"], 0, 4) == "test") && ($HY_729b908f51ba85e460 != "") && ($HY_825ad51e000ddc6ca5["id"] == $HY_365893812300a028d8)) {
		hy_bd307d155f057feb55("禁止修改体验帐号密码！");
	}

	$HY_d15ae57c9c3f548bf3 = hy_ba8120f86a7df1aecc("islock", "p", "int", 0);
	$HY_095afadccdfcd9cc58 = hy_ba8120f86a7df1aecc("lockedinter", "p", "sqljs", "");
	$HY_958d1aa0352dc4fe37 = hy_cf2f0673819dddd4a1();
	$HY_77592321965a3ce182 = hy_ba8120f86a7df1aecc("endtime", "p", "time", hy_cf2f0673819dddd4a1());
	$HY_45f093855d5e57cb72 = hy_ba8120f86a7df1aecc("qq", "p", "int", 10000);
	$HY_815f74216e6e583e89 = hy_ba8120f86a7df1aecc("tel", "p", "sqljs", "");
	$HY_578ed075101fc2373a = hy_ba8120f86a7df1aecc("email", "p", "sqljs", "10000@qq.com");
	$HY_bad03268554e4c4301 = hy_ba8120f86a7df1aecc("jscript", "p", "", "");
	$HY_7a06fb8961d570517d = hy_ba8120f86a7df1aecc("powerlist", "p", "sqljs", "");
	$HY_7ee7714eb61b998ce0 = hy_ba8120f86a7df1aecc("alipayset", "p", "sqljs", "");
	$HY_9f491578edc3a47e7d = hy_ba8120f86a7df1aecc("tenpayset", "p", "sqljs", "");
	$HY_5a161654ecff7e8d59 = hy_ba8120f86a7df1aecc("chinabankset", "p", "sqljs", "");
	$HY_a567495e14ebd56b11 = hy_ba8120f86a7df1aecc("alikey", "p", "sqljs", "");
	$HY_d87ca73a222f23b8bc = hy_ba8120f86a7df1aecc("tenkey", "p", "sqljs", "");
	$HY_23c80c67d83e9ae4a7 = hy_ba8120f86a7df1aecc("e138key", "p", "sqljs", "");
	$HY_5176aa3ffbb83764eb = hy_ba8120f86a7df1aecc("e138set", "p", "sqljs", "");
	$HY_56d47668ebe9561b6a = hy_ba8120f86a7df1aecc("chinabankkey", "p", "sqljs", "");
	$HY_6b8a52792195d5e310 = hy_ba8120f86a7df1aecc("payweb_title", "p", "sqljs", "");
	$HY_c622f5fdde97f3e469 = hy_ba8120f86a7df1aecc("payweb_loginimg", "p", "sqljs", "");
	$HY_243589d656d86939a8 = hy_ba8120f86a7df1aecc("rmb", "p", "num", 0);
	$HY_38fcd4f66c4bf990d7 = hy_ba8120f86a7df1aecc("xfrmb", "p", "num", 0);
	$HY_2df25534435796bd31 = hy_ba8120f86a7df1aecc("touzhirmb", "p", "num", 0);
	$HY_3505c2799d1cf63241 = hy_ba8120f86a7df1aecc("pmid", "p", "int", 0);
	$HY_bad03268554e4c4301 = base64_encode($HY_bad03268554e4c4301);

	if ($HY_365893812300a028d8 == 0) {
		$HY_c91ddb045233b53332 = $HY_82d6536edf704aabc5->HY_37e7d84d05816dfda2("kss_tb_manager");
		if ((CHINESEPASSWORD == 1) && (strlen($HY_729b908f51ba85e460) != hy_cfd7029aa774332944($HY_729b908f51ba85e460) * 3)) {
			hy_bd307d155f057feb55("密码只能用中文字符！");
		}

		if ((15 < hy_cfd7029aa774332944($HY_729b908f51ba85e460)) || (hy_cfd7029aa774332944($HY_729b908f51ba85e460) < 6)) {
			hy_bd307d155f057feb55("密码长度必须是6-15个字符！");
		}

		if ($HY_825ad51e000ddc6ca5["level"] == 7) {
			$HY_3505c2799d1cf63241 = $HY_825ad51e000ddc6ca5["id"];
		}
		else if ($HY_e38feb24e073afc890 == 8) {
			$HY_3505c2799d1cf63241 = 0;
		}
		else if ($HY_e38feb24e073afc890 == 7) {
			$HY_3505c2799d1cf63241 = $HY_825ad51e000ddc6ca5["id"];
		}
		else if ($HY_3505c2799d1cf63241 == 0) {
			$HY_3505c2799d1cf63241 = $HY_825ad51e000ddc6ca5["id"];
		}
		else {
			$HY_e9aa64f6ca2f858d66 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_3505c2799d1cf63241);

			if (empty($HY_e9aa64f6ca2f858d66)) {
				hy_bd307d155f057feb55("上级帐号未找到！");
			}

			if ($HY_e9aa64f6ca2f858d66["islock"] == 1) {
				hy_bd307d155f057feb55("上级帐号被锁定！");
			}

			if ($HY_e9aa64f6ca2f858d66["level"] < 7) {
				hy_bd307d155f057feb55("上级帐号不是作者或总代！");
			}

			if ($HY_825ad51e000ddc6ca5["pid"] != $HY_e9aa64f6ca2f858d66["pid"]) {
				hy_bd307d155f057feb55("上级帐号是其他作者的帐号！");
			}

			if ($HY_e9aa64f6ca2f858d66["level"] == 7) {
				$HY_7a06fb8961d570517d = hy_ea06959c8f6f5d1434($HY_e9aa64f6ca2f858d66, $HY_7a06fb8961d570517d);
			}
		}
	}
	else {
		$HY_c91ddb045233b53332 = $HY_365893812300a028d8;

		if (!empty($HY_729b908f51ba85e460)) {
			if ((CHINESEPASSWORD == 1) && (strlen($HY_729b908f51ba85e460) != hy_cfd7029aa774332944($HY_729b908f51ba85e460) * 3)) {
				hy_bd307d155f057feb55("密码只能用中文字符！");
			}

			if ((15 < hy_cfd7029aa774332944($HY_729b908f51ba85e460)) || (hy_cfd7029aa774332944($HY_729b908f51ba85e460) < 6)) {
				hy_bd307d155f057feb55("密码长度必须是6-15个字符，不修改密码请留空！" . hy_cfd7029aa774332944($HY_729b908f51ba85e460));
			}
		}
	}

	$HY_0ccc0f3f98ce3ff46a = array("username" => $HY_241412be0daddcee1f, "isdel" => 0, "islock" => $HY_d15ae57c9c3f548bf3, "lockedinter" => $HY_095afadccdfcd9cc58, "endtime" => $HY_77592321965a3ce182, "powerlist" => $HY_7a06fb8961d570517d, "qq" => $HY_45f093855d5e57cb72, "tel" => $HY_815f74216e6e583e89, "email" => $HY_578ed075101fc2373a, "jscript" => $HY_bad03268554e4c4301, "alipayset" => $HY_7ee7714eb61b998ce0, "tenpayset" => $HY_9f491578edc3a47e7d, "e138set" => $HY_5176aa3ffbb83764eb, "chinabankset" => $HY_5a161654ecff7e8d59, "payweb_title" => $HY_6b8a52792195d5e310, "payweb_loginimg" => $HY_c622f5fdde97f3e469, "rmb" => $HY_243589d656d86939a8, "xfrmb" => $HY_38fcd4f66c4bf990d7, "touzhirmb" => $HY_2df25534435796bd31);

	if ($HY_365893812300a028d8 == 0) {
		if (8 <= $HY_e38feb24e073afc890) {
			if ((LICTYPE == 1) || ($HY_825ad51e000ddc6ca5["level"] != 9)) {
				hy_bd307d155f057feb55("您使用的服务端没有被授权添加作者帐号！");
			}

			$HY_16abe05a644f97a4ce = hy_0191b1c860abe74c6c();
			$HY_b2a4e82597ebb0ab35 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select `id` from kss_tb_manager where `pid`='" . $HY_16abe05a644f97a4ce . "' and `level`>7");

			if (!empty($HY_b2a4e82597ebb0ab35)) {
				hy_bd307d155f057feb55("同一PID下只允许有一个作者级ID。");
			}
		}
		else {
			$HY_16abe05a644f97a4ce = $HY_825ad51e000ddc6ca5["pid"];
		}

		$HY_d32d9cb7eb5d0e4da7 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select `id` from kss_tb_manager where `username`='" . $HY_241412be0daddcee1f . "'");

		if (!empty($HY_d32d9cb7eb5d0e4da7)) {
			hy_bd307d155f057feb55("帐号名已存在，请重新输入帐号名。");
		}

		$HY_0ccc0f3f98ce3ff46a["pid"] = $HY_16abe05a644f97a4ce;
		$HY_0ccc0f3f98ce3ff46a["pmid"] = $HY_3505c2799d1cf63241;
		$HY_0ccc0f3f98ce3ff46a["level"] = $HY_e38feb24e073afc890;
		$HY_0ccc0f3f98ce3ff46a["username"] = $HY_241412be0daddcee1f;
		$HY_0ccc0f3f98ce3ff46a["password"] = md5($HY_729b908f51ba85e460);
		$HY_0ccc0f3f98ce3ff46a["addtime"] = $HY_958d1aa0352dc4fe37;
		$HY_0ccc0f3f98ce3ff46a["maxusernum"] = $HY_763e48afb2ac2ce438;
		$HY_0ccc0f3f98ce3ff46a["alikey"] = $HY_a567495e14ebd56b11;
		$HY_0ccc0f3f98ce3ff46a["tenkey"] = $HY_d87ca73a222f23b8bc;
		$HY_0ccc0f3f98ce3ff46a["e138key"] = $HY_23c80c67d83e9ae4a7;
		$HY_0ccc0f3f98ce3ff46a["chinabankkey"] = $HY_56d47668ebe9561b6a;
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d("kss_tb_manager", $HY_0ccc0f3f98ce3ff46a, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("添加代理失败[执行insert语句时出错]" . $HY_173d86697f24ffa1ee . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}
		else {
			if (($HY_e38feb24e073afc890 == 6) && ($HY_243589d656d86939a8 != 0)) {
				$HY_57f22b6f7e57fc995c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select `id` from kss_tb_manager where `username`='" . $HY_241412be0daddcee1f . "'");
				$HY_2640c906ff1d4afb66 = 0;

				do {
					$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_16abe05a644f97a4ce . ",0," . $HY_57f22b6f7e57fc995c["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . ",0," . $HY_243589d656d86939a8 . ",5,'','帐号开户金额')", "sync");

					if ($HY_173d86697f24ffa1ee === false) {
						$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
						$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
						$HY_2640c906ff1d4afb66 = $HY_2640c906ff1d4afb66 + 1;
					}

				} while (($HY_173d86697f24ffa1ee === false) && ($HY_2640c906ff1d4afb66 < 3));

				if ($HY_2640c906ff1d4afb66 == 3) {
					$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `rmb`=0 where `username`='" . $HY_241412be0daddcee1f . "'", "sync");

					if ($HY_173d86697f24ffa1ee === false) {
						hy_bd307d155f057feb55("创建代理帐号成功，写入代理金额变动日志失败，偿试初始化代理余额为0失败。" . $HY_3b22eac9ea6b5c92a5);
					}
					else {
						hy_bd307d155f057feb55("创建代理帐号成功，但由于写入代理金额日志失败，已初始化代理余额为0。" . $HY_3b22eac9ea6b5c92a5);
					}
				}
			}

			$HY_281041c3238cce0fd0 = $HY_82d6536edf704aabc5->HY_98bea57b3c5997f560("kss_tb_manager");

			if ($HY_e38feb24e073afc890 == 6) {
				$HY_a92a204dd0a3358915 = hy_ba8120f86a7df1aecc("w_tmpkey", "pg", "sqljs", "");

				if (strlen($HY_a92a204dd0a3358915) != 20) {
					hy_bd307d155f057feb55("添加" . $HY_3fb3415441688353e5[$HY_e38feb24e073afc890] . "成功，但是提卡授权数据正式化时失败（tmpkey长度不等20）!");
				}

				if ($HY_365893812300a028d8 == 0) {
					$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update `kss_tb_agentprice` set `tmpkey`='no',`managerid`=" . $HY_281041c3238cce0fd0 . " where `tmpkey`='" . $HY_a92a204dd0a3358915 . "'", "sync");

					if ($HY_173d86697f24ffa1ee == false) {
						hy_bd307d155f057feb55("添加" . $HY_3fb3415441688353e5[$HY_e38feb24e073afc890] . "成功，但是提卡授权数据正式化时失败：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
					}
				}
			}

			hy_bd307d155f057feb55("添加" . $HY_3fb3415441688353e5[$HY_e38feb24e073afc890] . "成功!");
		}
	}
	else {
		$HY_d32d9cb7eb5d0e4da7 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select `id` from kss_tb_manager where `username`='" . $HY_241412be0daddcee1f . "' and id<>" . $HY_365893812300a028d8);

		if (!empty($HY_d32d9cb7eb5d0e4da7)) {
			hy_bd307d155f057feb55("帐号名已存在，请重新输入帐号名。");
		}

		if (($HY_365893812300a028d8 == $HY_825ad51e000ddc6ca5["id"]) && ($HY_0ccc0f3f98ce3ff46a["islock"] == "1")) {
			hy_bd307d155f057feb55("锁定自己?  您脑子没进水吧！");
		}

		$HY_84364ef49c9ae2ede9 = "";

		if ($HY_825ad51e000ddc6ca5["level"] != 9) {
			$HY_84364ef49c9ae2ede9 = " and `pid`=" . $HY_825ad51e000ddc6ca5["pid"];
		}

		$HY_5a478ee9515f7b4915 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`=" . $HY_365893812300a028d8 . $HY_84364ef49c9ae2ede9);

		if (empty($HY_5a478ee9515f7b4915)) {
			hy_bd307d155f057feb55("你要编辑的帐号不存在");
		}

		if ($HY_5a478ee9515f7b4915["level"] != $HY_e38feb24e073afc890) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set `islock`=1,`lockedinter`='hooklevel' where `id`=" . $HY_825ad51e000ddc6ca5["id"]);
		}

		if (($HY_825ad51e000ddc6ca5["level"] != 9) && ($HY_825ad51e000ddc6ca5["level"] <= $HY_5a478ee9515f7b4915["level"])) {
			hy_bd307d155f057feb55("你无权限对该级别帐号进行任何操作！");
		}

		$HY_0ccc0f3f98ce3ff46a["pmid"] = $HY_5a478ee9515f7b4915["pmid"];
		if ((7 < $HY_825ad51e000ddc6ca5["level"]) && ($HY_5a478ee9515f7b4915["level"] == 6)) {
			if ($HY_3505c2799d1cf63241 == 0) {
				$HY_3505c2799d1cf63241 = $HY_825ad51e000ddc6ca5["id"];
			}

			$HY_e9aa64f6ca2f858d66 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_3505c2799d1cf63241);

			if (empty($HY_e9aa64f6ca2f858d66)) {
				hy_bd307d155f057feb55("上级帐号未找到！");
			}

			if ($HY_e9aa64f6ca2f858d66["islock"] == 1) {
				hy_bd307d155f057feb55("上级帐号被锁定！");
			}

			if ($HY_e9aa64f6ca2f858d66["level"] < 7) {
				hy_bd307d155f057feb55("上级帐号不是作者或总代！");
			}

			if ($HY_825ad51e000ddc6ca5["pid"] != $HY_e9aa64f6ca2f858d66["pid"]) {
				hy_bd307d155f057feb55("上级帐号是其他作者的帐号！");
			}

			$HY_0ccc0f3f98ce3ff46a["pmid"] = $HY_3505c2799d1cf63241;
		}

		if ($HY_5a478ee9515f7b4915["level"] == 6) {
			$HY_0ccc0f3f98ce3ff46a["pmid"];

			if (empty($HY_e9aa64f6ca2f858d66)) {
				$HY_e9aa64f6ca2f858d66 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_0ccc0f3f98ce3ff46a["pmid"]);
			}

			if ($HY_e9aa64f6ca2f858d66["level"] == 7) {
				$HY_7a06fb8961d570517d = hy_ea06959c8f6f5d1434($HY_e9aa64f6ca2f858d66, $HY_7a06fb8961d570517d);
				$HY_0ccc0f3f98ce3ff46a["powerlist"] = $HY_7a06fb8961d570517d;
			}
		}

		if (!empty($HY_729b908f51ba85e460)) {
			$HY_0ccc0f3f98ce3ff46a["password"] = md5($HY_729b908f51ba85e460);
		}

		if (!empty($HY_a567495e14ebd56b11)) {
			$HY_0ccc0f3f98ce3ff46a["alikey"] = $HY_a567495e14ebd56b11;
		}

		if (!empty($HY_d87ca73a222f23b8bc)) {
			$HY_0ccc0f3f98ce3ff46a["tenkey"] = $HY_d87ca73a222f23b8bc;
		}

		if (!empty($HY_23c80c67d83e9ae4a7)) {
			$HY_0ccc0f3f98ce3ff46a["e138key"] = $HY_23c80c67d83e9ae4a7;
		}

		if (!empty($HY_56d47668ebe9561b6a)) {
			$HY_0ccc0f3f98ce3ff46a["chinabankkey"] = $HY_56d47668ebe9561b6a;
		}

		if ($HY_825ad51e000ddc6ca5["level"] == 9) {
			$HY_0ccc0f3f98ce3ff46a["maxusernum"] = $HY_763e48afb2ac2ce438;
		}

		$HY_0ccc0f3f98ce3ff46a = array_diff_assoc($HY_0ccc0f3f98ce3ff46a, $HY_5a478ee9515f7b4915);
		$HY_d5652472e5604c0116 = "";
		if (($HY_5a478ee9515f7b4915["level"] < 9) && isset($HY_0ccc0f3f98ce3ff46a["rmb"])) {
			$HY_2640c906ff1d4afb66 = 0;

			do {
				$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_log_agentrmb` (`pid`,`softid`,`managerid`,`opmanagerid`,`addtime`,`oldrmb`,`changermb`,`optype`,`ordernum`,`intro`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . ",0," . $HY_5a478ee9515f7b4915["id"] . "," . $HY_825ad51e000ddc6ca5["id"] . "," . time() . "," . $HY_5a478ee9515f7b4915["rmb"] . "," . ($HY_0ccc0f3f98ce3ff46a["rmb"] - $HY_5a478ee9515f7b4915["rmb"]) . ",5,'','" . $HY_3fb3415441688353e5[$HY_825ad51e000ddc6ca5["level"]] . "后台操作')", "sync");

				if ($HY_173d86697f24ffa1ee === false) {
					$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
					$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("REPAIR TABLE `kss_tb_log_agentrmb`", "notsync");
					$HY_2640c906ff1d4afb66 = $HY_2640c906ff1d4afb66 + 1;
				}

			} while (($HY_173d86697f24ffa1ee === false) && ($HY_2640c906ff1d4afb66 < 3));

			if ($HY_2640c906ff1d4afb66 == 3) {
				$HY_0ccc0f3f98ce3ff46a["rmb"] = $HY_5a478ee9515f7b4915["rmb"];
				$HY_d5652472e5604c0116 = "由于写入金额变动日志失败，对金额的变动未修改[" . $HY_3b22eac9ea6b5c92a5 . "]。<br>";
			}
			else {
				$HY_d5652472e5604c0116 = "写入金额变动日志成功。<br>";
			}
		}

		if (empty($HY_0ccc0f3f98ce3ff46a)) {
			if ($HY_e38feb24e073afc890 != 6) {
				hy_bd307d155f057feb55("帐号设置未做任何修改");
			}

			hy_bd307d155f057feb55("已保存设置！");
		}

		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_980f5cc48e1cbb7e79("kss_tb_manager", $HY_0ccc0f3f98ce3ff46a, "id=" . $HY_365893812300a028d8, "sync");

		if ($HY_173d86697f24ffa1ee === false) {
			hy_bd307d155f057feb55("保存设置出错[执行update语句时出错]" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
		}

		hy_bd307d155f057feb55($HY_d5652472e5604c0116 . "已保存设置！");
	}
}
else if ($HY_d762a272713d62924f == "addmanager_addprice") {
	hy_af470935131a2269b8();
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "pg", "int", 0);
	$HY_3a87b62fc5a1fbe305 = hy_ba8120f86a7df1aecc("w_softid", "pg", "int", 0);
	$HY_28e5d445fa52fc492d = hy_ba8120f86a7df1aecc("w_kgid", "pg", "int", 0);
	$HY_3617e2c1cdcd0c5f19 = hy_ba8120f86a7df1aecc("w_keyprice", "pg", "num", 0);
	$HY_a92a204dd0a3358915 = "no";

	if ($HY_365893812300a028d8 == 0) {
		$HY_a92a204dd0a3358915 = hy_ba8120f86a7df1aecc("w_tmpkey", "pg", "sql", "");
	}

	if ($HY_3a87b62fc5a1fbe305 == 0) {
		hy_bd307d155f057feb55("你还未选择软件！");
	}

	if ($HY_28e5d445fa52fc492d == 0) {
		hy_bd307d155f057feb55("你还未选择卡类！");
	}

	if ($HY_3617e2c1cdcd0c5f19 <= 0) {
		hy_bd307d155f057feb55("代理价必须大于零！");
	}

	$HY_2cc319c235c6973648 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where managerid=" . $HY_365893812300a028d8 . " and softid=" . $HY_3a87b62fc5a1fbe305 . " and pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and  keygroupid=" . $HY_28e5d445fa52fc492d);

	if (!empty($HY_2cc319c235c6973648)) {
		hy_bd307d155f057feb55("你选择添加的软件和卡类的提卡授权已存在，无需再添加，直接修改即可！");
	}

	if ($HY_825ad51e000ddc6ca5["level"] == 7) {
		$HY_69ea73de7029621e73 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where managerid=" . $HY_825ad51e000ddc6ca5["id"] . " and softid=" . $HY_3a87b62fc5a1fbe305 . " and keygroupid=" . $HY_28e5d445fa52fc492d);

		if (empty($HY_69ea73de7029621e73)) {
			hy_bd307d155f057feb55("作者没有给你该软件该卡类的销售权，你无权为下级代理设置销售价！");
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("insert into `kss_tb_agentprice` (`pid`,`managerid`,`softid`,`keygroupid`,`keyprice`,`tmpkey`) VALUES (" . $HY_825ad51e000ddc6ca5["pid"] . "," . $HY_365893812300a028d8 . "," . $HY_3a87b62fc5a1fbe305 . "," . $HY_28e5d445fa52fc492d . "," . $HY_3617e2c1cdcd0c5f19 . ",'" . $HY_a92a204dd0a3358915 . "')", "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		$HY_21267cb0aadb9fc5fb = $HY_82d6536edf704aabc5->HY_98bea57b3c5997f560("kss_tb_agentprice");
		hy_bd307d155f057feb55("addok" . $HY_21267cb0aadb9fc5fb);
	}

	hy_bd307d155f057feb55("添加提卡授权时出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
}
else if ($HY_d762a272713d62924f == "addmanager_saveprice") {
	hy_af470935131a2269b8();
	$HY_42bbdade97031342fa = hy_ba8120f86a7df1aecc("did", "pg", "int", 0);
	$HY_3617e2c1cdcd0c5f19 = hy_ba8120f86a7df1aecc("w_keyprice", "pg", "num", 0);

	if ($HY_3617e2c1cdcd0c5f19 <= 0) {
		hy_bd307d155f057feb55("代理价必须大于零！");
	}

	if ($HY_42bbdade97031342fa == 0) {
		hy_bd307d155f057feb55("提卡授权未找到或出错");
	}

	$HY_8c1521e6f6f83e20db = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where id=" . $HY_42bbdade97031342fa);

	if (empty($HY_8c1521e6f6f83e20db)) {
		hy_bd307d155f057feb55("你要编辑的软件卡类价格不存在！");
	}

	if ($HY_825ad51e000ddc6ca5["level"] == 7) {
		$HY_69ea73de7029621e73 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where managerid=" . $HY_825ad51e000ddc6ca5["id"] . " and softid=" . $HY_8c1521e6f6f83e20db["softid"] . " and keygroupid=" . $HY_8c1521e6f6f83e20db["keygroupid"]);

		if (empty($HY_69ea73de7029621e73)) {
			$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where `id`=" . $HY_42bbdade97031342fa . " and pid=" . $HY_825ad51e000ddc6ca5["pid"], "sync");
			hy_bd307d155f057feb55("作者没有给你该软件卡类的销售权，你无权保存，该条记录已被删除！");
		}
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_agentprice set keyprice=" . $HY_3617e2c1cdcd0c5f19 . " where `id`=" . $HY_42bbdade97031342fa . " and pid=" . $HY_825ad51e000ddc6ca5["pid"], "sync");

	if ($HY_173d86697f24ffa1ee !== false) {
		hy_bd307d155f057feb55("saveok");
	}

	hy_bd307d155f057feb55("保存提卡授权价格时出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
}
else if ($HY_d762a272713d62924f == "addmanager_delprice") {
	hy_af470935131a2269b8();
	$HY_42bbdade97031342fa = hy_ba8120f86a7df1aecc("did", "pg", "int", 0);
	$HY_8c1521e6f6f83e20db = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_agentprice where id=" . $HY_42bbdade97031342fa);

	if (empty($HY_8c1521e6f6f83e20db)) {
		hy_bd307d155f057feb55("你要删除的软件卡类价格不存在！");
	}

	$HY_254ee566ed16e4de71 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_8c1521e6f6f83e20db["managerid"]);

	if (empty($HY_254ee566ed16e4de71)) {
		hy_bd307d155f057feb55("该帐号已被删除！");
	}

	if ($HY_825ad51e000ddc6ca5["level"] == 7) {
		if ($HY_254ee566ed16e4de71["pmid"] != $HY_825ad51e000ddc6ca5["id"]) {
			hy_bd307d155f057feb55("你无权删除不属于你管理范围内的软件卡类价格!");
		}
	}

	if ((7 < $HY_825ad51e000ddc6ca5["level"]) && ($HY_254ee566ed16e4de71["level"] == 7)) {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where softid=" . $HY_8c1521e6f6f83e20db["softid"] . " and keygroupid=" . $HY_8c1521e6f6f83e20db["keygroupid"] . " and `managerid` in (select `id` from kss_tb_manager where pmid=" . $HY_8c1521e6f6f83e20db["managerid"] . ")", "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where id=" . $HY_42bbdade97031342fa, "sync");

			if ($HY_173d86697f24ffa1ee !== false) {
				hy_bd307d155f057feb55("delok" . $HY_42bbdade97031342fa);
			}
		}

		hy_bd307d155f057feb55("删除提卡授权时出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}
	else {
		$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_tb_agentprice where `id`=" . $HY_42bbdade97031342fa . " and pid=" . $HY_825ad51e000ddc6ca5["pid"], "sync");

		if ($HY_173d86697f24ffa1ee !== false) {
			hy_bd307d155f057feb55("delok" . $HY_42bbdade97031342fa);
		}

		hy_bd307d155f057feb55("删除提卡授权时出错：" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd());
	}
}
else {
	$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "g", "int", 0);
	$HY_970be7709f584ff59c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from `kss_tb_manager` where id=" . $HY_365893812300a028d8);

	if (empty($HY_970be7709f584ff59c)) {
		hy_af470935131a2269b8();
		$HY_ab20c9e23086ff8b04 = "添加帐号";
		$HY_970be7709f584ff59c = array("id" => $HY_365893812300a028d8, "pmid" => 0, "level" => "6", "maxusernum" => "0", "username" => "", "password" => "", "islock" => "0", "lockedinter" => "", "endtime" => "2088-12-31 23:00:00", "qq" => "", "tel" => "", "email" => "", "jscript" => "", "powerlist" => "", "alipayset" => "", "tenpayset" => "", "e138set" => "", "e138key" => "", "chinabankset" => "", "alikey" => "", "tenkey" => "", "chinabankkey" => "", "payweb_title" => "", "payweb_loginimg" => "", "rmb" => "0", "xfrmb" => "0", "touzhirmb" => "0");
	}
	else {
		if (($HY_825ad51e000ddc6ca5["level"] != 9) && ($HY_825ad51e000ddc6ca5["level"] <= $HY_970be7709f584ff59c["level"])) {
			hy_bd307d155f057feb55("你无权限对该级别帐号进行任何操作！");
		}

		if (($HY_825ad51e000ddc6ca5["level"] == 7) && ($HY_825ad51e000ddc6ca5["id"] != $HY_970be7709f584ff59c["pmid"])) {
			hy_bd307d155f057feb55("该代理帐号不是你的，无权修改！");
		}

		$HY_ab20c9e23086ff8b04 = "保存设置";
	}

	$HY_083a5d2f1d16a04b82 = str_replace(" ", "", $HY_970be7709f584ff59c["alipayset"]);
	$HY_1e077692fec44fd2d9 = explode(",", $HY_083a5d2f1d16a04b82);

	if (count($HY_1e077692fec44fd2d9) == 3) {
		$HY_ce6a1c83950b5b427b = $HY_1e077692fec44fd2d9[0];
		$HY_3d0ed96e24fb291337 = $HY_1e077692fec44fd2d9[1];
		$HY_16526d6c2fc888fb3f = $HY_1e077692fec44fd2d9[2];
	}
	else {
		$HY_ce6a1c83950b5b427b = "create_direct_pay_by_user";
		$HY_3d0ed96e24fb291337 = "";
		$HY_16526d6c2fc888fb3f = "card@card.php";
	}
}

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	$HY_12e1086435528f92c1 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_keyset where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `islock`=0");
}
else {
	$HY_12e1086435528f92c1 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_keyset where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `islock`=0 and `id` in (select distinct `keygroupid` from `kss_tb_agentprice` where managerid=" . $HY_825ad51e000ddc6ca5["id"] . ") ");
}

$HY_8af0e09a4aba6c23d9 = "";

if (!empty($HY_12e1086435528f92c1)) {
	$HY_8af0e09a4aba6c23d9 = array();

	foreach ($HY_12e1086435528f92c1 as $HY_a1e3f7957087c929e0 ) {
		$HY_a1e3f7957087c929e0["keyname"] = hy_c447d0a25ad6071dc7($HY_a1e3f7957087c929e0["keyname"]);
		$HY_a1e3f7957087c929e0["keyname"] = hy_c447d0a25ad6071dc7($HY_a1e3f7957087c929e0["keyname"]);
		$HY_a1e3f7957087c929e0["extattr1"] = hy_c447d0a25ad6071dc7($HY_a1e3f7957087c929e0["extattr1"]);
		$HY_a1e3f7957087c929e0["extattr1"] = hy_c447d0a25ad6071dc7($HY_a1e3f7957087c929e0["extattr1"]);
		$HY_8af0e09a4aba6c23d9[] = "['" . $HY_a1e3f7957087c929e0["softid"] . "','" . $HY_a1e3f7957087c929e0["keyname"] . "','" . $HY_a1e3f7957087c929e0["cday"] . "','" . $HY_a1e3f7957087c929e0["points"] . "','" . $HY_a1e3f7957087c929e0["linknum"] . "','" . $HY_a1e3f7957087c929e0["retailprice"] . "','" . $HY_a1e3f7957087c929e0["id"] . "']";
	}

	$HY_8af0e09a4aba6c23d9 = implode(",", $HY_8af0e09a4aba6c23d9);
}

foreach ($HY_970be7709f584ff59c as $HY_721c412233add2f618 => $HY_cd38a277923cc87c58 ) {
	$HY_970be7709f584ff59c[$HY_721c412233add2f618] = hy_c447d0a25ad6071dc7($HY_cd38a277923cc87c58);
}

/*
echo "\r\n<script type=\"text/javascript\">\t\r\n";
echo "var kgroup=[" . $HY_8af0e09a4aba6c23d9 . "];";
echo "\r\nvar spmailtext='';\r\nspmailtext=\t'当用支付宝纯担宝接口时，客户用自己的支付宝帐号付款，必须确认收货后才可以取卡。<br><br>'+\r\n'为了让只有网银但无支付宝帐号的客户购卡支付后可实时取卡，你需要设置特殊邮箱。<br>'+\r\n'特殊邮箱只能填写<font color=#ff0000>你可以控制</font>并且<font color=#ff0000>没有申请过支付宝</font>的邮箱帐号，或者填一个根本不可能存在，但格式合法的邮箱地址。例如：card@card.php建议用该值<br><br>'+\r\n'客户在支付宝网站支付页面的邮箱或手机号那一栏填写特殊邮箱地址，继续完成支付，回到售卡站界面点击<font color=#ff0000>自助发货</font>后，就可以实时取卡（因为特殊邮箱的规则，客户不可能确认收货）。<br><br>'+\r\n'用特殊邮箱购卡的订单支付宝交易管理里边是已发货状态，因为特殊邮箱没有支付宝帐号所以不能执行确认收货操作，支付宝会在15天后认为该订单已完成，并将该订单的款项打入到你的支付宝帐号。'\r\n\r\nvar level=";
echo $HY_970be7709f584ff59c["level"];
echo ";\r\n$(document).ready(function() { \r\n$(\"#w_softid\").bind('change',function(){\r\nvar tval=$(this).val();\r\nvar optdata='';\r\nvar piss=0;\r\nif(tval!=0){\r\nfor(var i = 0; i < kgroup.length; i++)  {        \r\nif(kgroup[i][0]==tval){\r\nif(piss==0){\r\n$(\"#w_rprice\").text(kgroup[i][5]);\r\npiss=1;\r\n}\r\noptdata +='<option rprice='+kgroup[i][5]+' value=\"'+kgroup[i][6]+'\">'+kgroup[i][1]+'--'+kgroup[i][2]+'天--'+kgroup[i][3]+'点--'+kgroup[i][4]+'通道</option>';\r\n}\r\n}\r\n$(\"#w_kgid\").html(optdata);\r\n}\r\n\r\n});\r\n$(\"#w_kgid\").bind('change',function(){\r\nvar rpei=$(\"#w_kgid option:selected\").attr(\"rprice\");\r\n$(\"#w_rprice\").text(rpei);\t\t\t\r\n});\r\n\r\n\r\n$(\"[saveprice=1]\").css('cursor','pointer').live('click',function(e){\r\nvar tid=$(this).attr(\"priceid\");\r\nvar action=$(this).attr('action');\r\nvar thref='admin_manager.php?action='+action+'&isajax=1&did='+tid+'&w_keyprice='+$(\"#w_keyprice\"+tid).val();\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html=='saveok'){\r\nmview('保存提卡授权设置成功！',0,-200);\t\t\r\n}else if(html.substr(0,5)=='delok'){\r\nvar tid=html.substr(5);\t\r\n$(\"#trkeypriceid\"+tid).remove();\r\nmview('删除提卡授权成功！',0,-200)\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n\r\n\r\n$('#w_addkeyprice').bind(\"click\",function(e){\r\nif($(\"#w_softid\").val()==0){\r\nmalert('请选择一个软件');\r\nreturn false;\r\n}\r\nif($(\"#w_keyprice\").val()<=0){\r\nmalert('请输入一个代理价');\r\nreturn false;\r\n}\r\nvar thref='admin_manager.php?action=addmanager_addprice&isajax=1&id=";
echo $HY_365893812300a028d8;
echo "';\t\r\nthref=thref+'&w_tmpkey='+$(\"#w_tmpkey\").val();\t\r\nthref=thref+'&w_softid='+$(\"#w_softid\").val();\t\r\nthref=thref+'&w_kgid='+$(\"#w_kgid\").val();\t\r\nthref=thref+'&w_keyprice='+$(\"#w_keyprice\").val();\r\nMouse(e);\r\n$.ajax({\r\nurl: thref,\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,5)=='addok'){\r\nvar tid=html.substr(5);\r\ninsertdata='<tr class=\"trd\" id=trkeypriceid'+tid+'>';\t\t\t\t\t\t\r\ninsertdata=insertdata+'<td>'+$(\"#w_softid option:selected\").text()+'</td>';\r\ninsertdata=insertdata+'<td>'+$(\"#w_kgid option:selected\").text()+'</td>';\r\ninsertdata=insertdata+'<td>'+$(\"#w_rprice\").text()+'</td>';\r\ninsertdata=insertdata+'<td><input maxlength=\"8\" type=text id=w_keyprice'+tid+' class=smlinput value='+$(\"#w_keyprice\").val()+'></td>';\r\ninsertdata=insertdata+'<td align=center><img src='+INSTALLPATH+'kss_inc/images/b_save.png action=\"addmanager_saveprice\" malt=\"保存价格修改\" priceid=\"'+tid+'\" saveprice=1 >&nbsp;<img src='+INSTALLPATH+'kss_inc/images/b_drop.png action=\"addmanager_delprice\" malt=\"删除该提卡授权\" priceid=\"'+tid+'\" saveprice=1 ></td>';\r\ninsertdata=insertdata+'</tr>';\r\n$(\"#trkeyprice\").before(insertdata);\r\n$(\"#w_keyprice\").val(0);\r\nmview('提卡授权添加成功！',-20,-200);\t\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n\r\n});\t\r\n\r\n$('#admin_addmanager').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) { \r\nreturn true;\r\nvar usernameValue = $('input[name=username]').fieldValue();\r\nvar passwordValue = $('input[name=password]').fieldValue();\r\nif (!usernameValue[0] || !passwordValue[0]) { \r\nmalert('请填写完整用户名或密码','出错'); \r\nreturn false; \r\n} \r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nmalert(responseText); \r\n}\r\n});\r\n$(\"input[name='password']\").bind(\"click\",function(){$(this).val(\"\");});\r\n$(\"#endtime\").date_input({addhss: \"00:00:00\"});\r\n$(\"#tabs01\").ksstabs();\r\n$('#isauthor').hide();\r\nif(level==6 || level==7){\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\nif(level==6){\r\n$('[tbtid=3]').html(\"代理参数\");\r\n$(\"#whprice\").html(\"代理价\");\r\n$(\"#agentpuser\").show();\r\n}else{\r\n$('[tbtid=3]').html(\"总代参数\");\r\n$(\"#whprice\").html(\"总代理价\");\t\r\n$(\"#agentpuser\").hide();\t\t\t\r\n}\r\n$('#keypriceset').css(\"visibility\",\"visible\");\r\n$('[tbtid=4]').show();\r\n$('#isauthor').hide();\r\n$('#dlpower').show();\r\n}else{\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\n$('[tbtid=3]').html(\"作者参数\");\r\n$(\"#agentpuser\").hide();\r\n$('#keypriceset').css(\"visibility\",\"hidden\");\r\n$('[tbtid=4]').hide();\r\nif(level==9)$('#isauthor').show();\t\t\t\r\n}\r\n$('input[name=\"level\"]').click(function(){\r\nvar level2=$(this).val();\r\nif(level2==6 || level2==7){\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\nif(level2==6){\r\n$('[tbtid=3]').html(\"代理参数\");\r\n$(\"#whprice\").html(\"代理价\");\r\n$(\"#agentpuser\").show();\t\r\n}else{\r\n$('[tbtid=3]').html(\"总代参数\");\r\n$(\"#whprice\").html(\"总代理价\");\t\r\n$(\"#agentpuser\").hide();\t\t\t\t\t\r\n}\r\n$('#keypriceset').css(\"visibility\",\"visible\");\r\n$('[tbtid=4]').show();\r\n$('#isauthor').hide();\r\n$('#dlpower').show();\r\n}else{\r\n$('[tbtid=2]').show();\r\n$('[tbtid=3]').show();\r\n$('[tbtid=3]').html(\"作者参数\");\r\n$('#keypriceset').css(\"visibility\",\"hidden\");\r\n$('[tbtid=4]').hide();\r\nif(level==9)$('#isauthor').show();\t\r\n$(\"#agentpuser\").hide();\t\t\r\n}\r\n});\r\n$(\"input[name^='soft_']\").bind('click',function(){$(this).select();});\r\n$(\"input[name='islock']:checked\").val()==0?$(\"#locktr\").hide():$(\"#locktr\").show();\r\n$(\"input[name='islock']\").bind(\"click\",function(){\r\n$(this).val()==0?$(\"#locktr\").hide():$(\"#locktr\").show();\r\n});\r\n$(\"input[ali='1']\").bind('click',function(){\r\nif($(this).val()=='alipay_jqr'){    \r\n$(\"#lab001\").text(\"支付宝帐号（邮箱或手机号）\");\r\n$(\"#lab002\").text(\"接口效验密钥\");\r\n}else{  \r\n$(\"#lab001\").text(\"支付宝PID（合作者身份）\");\r\n$(\"#lab002\").text(\"支付宝Key（安全效验码）\");\r\n}\t\t\r\n});\r\n\r\n});\r\n</script>";
*/
//下边单独处理 script
?>
<script type="text/javascript">
<?php
echo 'var kgroup=['.$HY_8af0e09a4aba6c23d9.'];';
?>
var spmailtext='';
spmailtext=	'当用支付宝纯担宝接口时，客户用自己的支付宝帐号付款，必须确认收货后才可以取卡。<br><br>'+
'为了让只有网银但无支付宝帐号的客户购卡支付后可实时取卡，你需要设置特殊邮箱。<br>'+
'特殊邮箱只能填写<font color=#ff0000>你可以控制</font>并且<font color=#ff0000>没有申请过支付宝</font>的邮箱帐号，或者填一个根本不可能存在，但格式合法的邮箱地址。例如：card@card.php建议用该值<br><br>'+
'客户在支付宝网站支付页面的邮箱或手机号那一栏填写特殊邮箱地址，继续完成支付，回到售卡站界面点击<font color=#ff0000>自助发货</font>后，就可以实时取卡（因为特殊邮箱的规则，客户不可能确认收货）。<br><br>'+
'用特殊邮箱购卡的订单支付宝交易管理里边是已发货状态，因为特殊邮箱没有支付宝帐号所以不能执行确认收货操作，支付宝会在15天后认为该订单已完成，并将该订单的款项打入到你的支付宝帐号。'

var level=<?php echo $HY_970be7709f584ff59c["level"];?>;
$(document).ready(function() {
$("#w_softid").bind('change',function(){
var tval=$(this).val();
var optdata='';
var piss=0;
if(tval!=0){
for(var i = 0; i < kgroup.length; i++)  {
if(kgroup[i][0]==tval){
if(piss==0){
$("#w_rprice").text(kgroup[i][5]);
piss=1;
}
optdata +='<option rprice='+kgroup[i][5]+' value="'+kgroup[i][6]+'">'+kgroup[i][1]+'--'+kgroup[i][2]+'天--'+kgroup[i][3]+'点--'+kgroup[i][4]+'通道</option>';
}
}
$("#w_kgid").html(optdata);
}
});
$("#w_kgid").bind('change',function(){
var rpei=$("#w_kgid option:selected").attr("rprice");
$("#w_rprice").text(rpei);
});
$("[saveprice=1]").css('cursor','pointer').live('click',function(e){
var tid=$(this).attr("priceid");
var action=$(this).attr('action');
var thref='admin_manager.php?action='+action+'&isajax=1&did='+tid+'&w_keyprice='+$("#w_keyprice"+tid).val();
Mouse(e);
$.ajax({
url: thref,
cache: false,
success: function(html){
if(html=='saveok'){
mview('保存提卡授权设置成功！',0,-200);
}else if(html.substr(0,5)=='delok'){
var tid=html.substr(5);
$("#trkeypriceid"+tid).remove();
mview('删除提卡授权成功！',0,-200)
}else{
malert(html);
}
},
error:function(XMLHttpRequest, textStatus, errorThrown) {
alert(ourl)
}
});
});
$('#w_addkeyprice').bind("click",function(e){
if($("#w_softid").val()==0){
malert('请选择一个软件');
return false;
}
if($("#w_keyprice").val()<=0){
malert('请输入一个代理价');
return false;
}
var thref='admin_manager.php?action=addmanager_addprice&isajax=1&id=<?php echo $HY_365893812300a028d8;?>';
thref=thref+'&w_tmpkey='+$("#w_tmpkey").val();
thref=thref+'&w_softid='+$("#w_softid").val();
thref=thref+'&w_kgid='+$("#w_kgid").val();
thref=thref+'&w_keyprice='+$("#w_keyprice").val();
Mouse(e);
$.ajax({
url: thref,
cache: false,
success: function(html){
if(html.substr(0,5)=='addok'){
var tid=html.substr(5);
insertdata='<tr class="trd" id=trkeypriceid'+tid+'>';
insertdata=insertdata+'<td>'+$("#w_softid option:selected").text()+'</td>';
insertdata=insertdata+'<td>'+$("#w_kgid option:selected").text()+'</td>';
insertdata=insertdata+'<td>'+$("#w_rprice").text()+'</td>';
insertdata=insertdata+'<td><input maxlength="8" type=text id=w_keyprice'+tid+' class=smlinput value='+$("#w_keyprice").val()+'></td>';
insertdata=insertdata+'<td align=center><img src='+INSTALLPATH+'kss_inc/images/b_save.png action="addmanager_saveprice" malt="保存价格修改" priceid="'+tid+'" saveprice=1 >&nbsp;<img src='+INSTALLPATH+'kss_inc/images/b_drop.png action="addmanager_delprice" malt="删除该提卡授权" priceid="'+tid+'" saveprice=1 ></td>';
insertdata=insertdata+'</tr>';
$("#trkeyprice").before(insertdata);
$("#w_keyprice").val(0);
mview('提卡授权添加成功！',-20,-200);
}else{
malert(html);
}
},
error:function(XMLHttpRequest, textStatus, errorThrown) {
alert(ourl)
} 
});
});
$('#admin_addmanager').ajaxForm({
beforeSubmit:function (arr, $form, options) { 
return true;
var usernameValue = $('input[name=username]').fieldValue();
var passwordValue = $('input[name=password]').fieldValue();
if (!usernameValue[0] || !passwordValue[0]) { 
malert('请填写完整用户名或密码','出错'); 
return false; 
} 
return true;
},
success:function (responseText, statusText, xhr, $form) {
malert(responseText); 
}
});
$("input[name='password']").bind("click",function(){$(this).val("");});
$("#endtime").date_input({addhss: "00:00:00"});
$("#tabs01").ksstabs();
$('#isauthor').hide();
if(level==6 || level==7){
$('[tbtid=2]').show();
$('[tbtid=3]').show();
if(level==6){
$('[tbtid=3]').html("代理参数");
$("#whprice").html("代理价");
$("#agentpuser").show();
}else{
$('[tbtid=3]').html("总代参数");
$("#whprice").html("总代理价");
$("#agentpuser").hide();
}
$('#keypriceset').css("visibility","visible");
$('[tbtid=4]').show();
$('#isauthor').hide();
$('#dlpower').show();
}else{
$('[tbtid=2]').show();
$('[tbtid=3]').show();
$('[tbtid=3]').html("作者参数");
$("#agentpuser").hide();
$('#keypriceset').css("visibility","hidden");
$('[tbtid=4]').hide();
if(level==9)$('#isauthor').show();
}
$('input[name="level"]').click(function(){
var level2=$(this).val();
if(level2==6 || level2==7){
$('[tbtid=2]').show();
$('[tbtid=3]').show();
if(level2==6){
$('[tbtid=3]').html("代理参数");
$("#whprice").html("代理价");
$("#agentpuser").show();
}else{
$('[tbtid=3]').html("总代参数");
$("#whprice").html("总代理价");
$("#agentpuser").hide();
}
$('#keypriceset').css("visibility","visible");
$('[tbtid=4]').show();
$('#isauthor').hide();
$('#dlpower').show();
}else{
$('[tbtid=2]').show();
$('[tbtid=3]').show();
$('[tbtid=3]').html("作者参数");
$('#keypriceset').css("visibility","hidden");
$('[tbtid=4]').hide();
if(level==9)$('#isauthor').show();
$("#agentpuser").hide();
}
});
$("input[name^='soft_']").bind('click',function(){$(this).select();});
$("input[name='islock']:checked").val()==0?$("#locktr").hide():$("#locktr").show();
$("input[name='islock']").bind("click",function(){
$(this).val()==0?$("#locktr").hide():$("#locktr").show();
});
$("input[ali='1']").bind('click',function(){
if($(this).val()=='alipay_jqr'){
$("#lab001").text("支付宝帐号（邮箱或手机号）");
$("#lab002").text("接口效验密钥");
}else{
$("#lab001").text("支付宝PID（合作者身份）");
$("#lab002").text("支付宝Key（安全效验码）");
}
});
});
</script>

<?php
//接上边的php 把script 单独放出来 这货容易出错
echo "\r\n<form id=\"admin_addmanager\" action=\"?action=addmanager_save\" method=\"post\"> \r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\r\n<input type=\"hidden\" name=\"id\" value=\"";
echo $HY_970be7709f584ff59c["id"];
echo "\" />\r\n<div id=\"tabs01\">\r\n<div>\r\n<div tbtid=\"1\">基本</div>\r\n<div tbtid=\"2\">销售相关</div>\r\n<div tbtid=\"3\">";
echo $HY_970be7709f584ff59c["level"] == 7 ? "总代理参数" : "代理参数";
echo "</div>\r\n<div tbtid=\"4\">权限设置</div>\r\n</div>\r\n<div>\r\n<div tbdid=\"1\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"这是您要添加的用户帐号类型 分作者帐号 总代理帐号 代理帐号\">\r\n<td align=right>　后台帐号类型</td>\r\n<td align=left>";

if ($HY_365893812300a028d8 != 0) {
	echo $HY_3fb3415441688353e5[$HY_970be7709f584ff59c["level"]] . "帐号<input type=hidden value=" . $HY_970be7709f584ff59c["level"] . " name='level' />";
}
else {
	echo "\t\t\t\t\t\r\n<input type=radio value=6 id=\"level_6\" name=\"level\" ";
	echo $HY_970be7709f584ff59c["level"] == "6" ? " checked" : "";
	echo "><label for=\"level_6\">";
	echo $HY_3fb3415441688353e5[6];
	echo "帐号</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n";

	if (7 < $HY_825ad51e000ddc6ca5["level"]) {
		echo "<input type=radio value=7 id=\"level_7\" name=\"level\" ";
		echo $HY_970be7709f584ff59c["level"] == "7" ? " checked" : "";
		echo "><label for=\"level_7\">";
		echo $HY_3fb3415441688353e5[7];
		echo "帐号</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n";
	}

	if (($HY_825ad51e000ddc6ca5["level"] == 9) && (1 < LICTYPE)) {
		$HY_31b48eca8ba74086cf = ("8" <= $HY_970be7709f584ff59c["level"] ? " checked" : "");
		echo "<input type=radio value=8 id='level_8' name='level' " . $HY_31b48eca8ba74086cf . "><label for='level_8'>" . $HY_3fb3415441688353e5[8] . "帐号</label>";
	}
}

echo "</td>\r\n</tr>\r\n";
if ((7 < $HY_825ad51e000ddc6ca5["level"]) && ($HY_970be7709f584ff59c["level"] == 6)) {
	echo "<tr malt=\"代理帐号所属上级\" id=agentpuser>\r\n<td align=right>所属上级</td>\r\n<td align=left>";
	echo "<select name=pmid style='width:300px'>";
	echo "<option value=0>直属作者</option>";
	$HY_1cfa88725acee2f327 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_manager where pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and level=7 and isdel=0");

	if (!empty($HY_1cfa88725acee2f327)) {
		foreach ($HY_1cfa88725acee2f327 as $HY_9f29fcab24056e81dc ) {
			$HY_9f29fcab24056e81dc["username"] = hy_c447d0a25ad6071dc7($HY_9f29fcab24056e81dc["username"]);
			echo "<option value=";
			echo $HY_9f29fcab24056e81dc["id"];
			echo $HY_970be7709f584ff59c["pmid"] == $HY_9f29fcab24056e81dc["id"] ? " selected" : "";
			echo ">总代：";
			echo $HY_9f29fcab24056e81dc["username"];
			echo $HY_9f29fcab24056e81dc["islock"] == 1 ? " 【锁定】" : "";
			echo "</option>";
		}
	}

	echo "</select>";
	echo "</td>\r\n</tr>\r\n";
}

echo "<tr malt=\"用于登陆管理端的用户帐号\">\r\n<td align=right>帐号名</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"username\" value=\"";
echo $HY_970be7709f584ff59c["username"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"用于登陆管理端的帐号密码，安全起见密码只能用中文，编辑用户时不修改密码请留空\">\r\n<td align=right>帐号密码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"password\" value=\"\"  AUTOCOMPLETE=\"off\" /></td>\r\n</tr>\r\n<tr malt=\"锁定的帐号不能登录管理后台，不能使用售卡系统，但不影响客户端软件的使用\">\r\n<td align=right>帐号状态</td>\r\n<td align=left>\r\n<input type=radio value=0 name=\"islock\" id=\"islock_1\"";
echo $HY_970be7709f584ff59c["islock"] == 0 ? " checked" : "";
echo "><label for=\"islock_1\">正常</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio value=1 name=\"islock\" id=\"islock_2\"";
echo $HY_970be7709f584ff59c["islock"] == 1 ? " checked" : "";
echo "><label for=\"islock_2\">锁定</label></td>\r\n</tr>\r\n<tr malt=\"该帐号被锁定时，用户登录时会给出这个提示，好让用户知道帐号为什么被锁定\" id=\"locktr\">\r\n<td align=right>锁定备注</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" name=\"lockedinter\" value=\"";
echo $HY_970be7709f584ff59c["lockedinter"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"帐号有效期，超出此日期将无法登录后台，如果是作者帐号过期，该作者的软件将不能正常使用\">\r\n<td align=right>帐号有效期</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"19\" name=\"endtime\" id=\"endtime\" value=\"";
echo $HY_970be7709f584ff59c["endtime"];
echo "\" /></td>\r\n</tr>\r\n<tr id='isauthor' malt=\"可管理会员数量指的是所有软件的会员总数，设为0时是指不限制数量\">\r\n<td align=right>可管理会员数量</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"6\" name=\"maxusernum\"  value=\"";
echo $HY_970be7709f584ff59c["maxusernum"];
echo "\" /></td>\r\n</tr>\r\n</table>\t\t\t\t\r\n</div>\r\n<div tbdid=\"2\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"KSS在线售卡系统的销售站的网页标题，代理和作者的都可自定义\">\r\n<td align=right>销售站名称</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"payweb_title\"  value=\"";
echo $HY_970be7709f584ff59c["payweb_title"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"销售站的网页LOGO图片，请填写类似的图片地址 http://www.hphu.com/****.jpg\">\r\n<td align=right>销售站LoGo</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"200\" name=\"payweb_loginimg\"  value=\"";
echo $HY_970be7709f584ff59c["payweb_loginimg"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"腾讯QQ号\">\r\n<td align=right>用户QQ号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"12\" name=\"qq\" value=\"";
echo $HY_970be7709f584ff59c["qq"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>电话号码</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"tel\" value=\"";
echo $HY_970be7709f584ff59c["tel"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"以备方便的联系用户\">\r\n<td align=right>用户邮箱</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"30\" name=\"email\" value=\"";
echo $HY_970be7709f584ff59c["email"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 网银在线商户号，注册网银在线企业帐号后可获取\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"chinabankset\"  value=\"";
echo $HY_970be7709f584ff59c["chinabankset"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 登陆网银在线商户后台，在上面的导航栏里可能找到“B2C”，在二级导航栏里有“MD5密钥设置”<br>建议您设置一个16位以上的密钥或更高，密钥最多32位<br>编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"32\" name=\"chinabankkey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.chinabank.com.cn 必须告诉网银在线工作人员此自动对帐地址，并开通自动对帐功能，否则将会不能正常使用本系统的网银在线功能\">\r\n<td align=right bgcolor=\"#5C9DDF\">网银在线自动对帐地址</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"50\" style=\"color:#aaa\" readOnly value=\"";
echo hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/payapi_notify.php";
echo "\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n<td valign=\"top\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr malt=\"www.alipay.com 支付宝接口类型\">\r\n<td align=right bgcolor=\"#F7DB84\">支付宝接口</td>\r\n<td align=left>\t\t\t\t\t\r\n<input type=radio ali=\"1\" value=\"create_direct_pay_by_user\" id=\"alipayset_1\" name=\"alipayset[]\" ";
echo $HY_ce6a1c83950b5b427b == "create_direct_pay_by_user" ? " checked" : "";
echo "><label for=\"alipayset_1\">即时到帐</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"create_partner_trade_by_buyer\" id=\"alipayset_2\" name=\"alipayset[]\" ";
echo $HY_ce6a1c83950b5b427b == "create_partner_trade_by_buyer" ? " checked" : "";
echo "><label for=\"alipayset_2\">纯担宝交易</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"trade_create_by_buyer\" id=\"alipayset_3\" name=\"alipayset[]\" ";
echo $HY_ce6a1c83950b5b427b == "trade_create_by_buyer" ? " checked" : "";
echo "><label for=\"alipayset_3\">双功能</label>&nbsp;&nbsp;&nbsp;&nbsp;\r\n<input type=radio ali=\"1\" value=\"alipay_jqr\" id=\"alipayset_4\" name=\"alipayset[]\" ";
echo $HY_ce6a1c83950b5b427b == "alipay_jqr" ? " checked" : "";
echo "><label for=\"alipayset_4\">免签约</label>\r\n</td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户合作者身份PID，可到商家服务里获取\">\r\n<td align=right bgcolor=\"#F7DB84\" id=\"lab001\">支付宝PID（合作者身份）</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
echo $HY_3d0ed96e24fb291337;
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"该参数只在使用纯担宝交易接口时有效，具体作用请点击详细说明来查看\">\r\n<td align=right bgcolor=\"#F7DB84\">特殊邮箱[<a style=\"cursor:pointer;color:#f00\" onclick=malert(spmailtext,'特殊邮箱详细说明',700,300)>查看说明</a>]</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"20\" name=\"alipayset[]\"  value=\"";
echo $HY_16526d6c2fc888fb3f;
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.alipay.com 支付宝商户Key安全效验码，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#F7DB84\" id=\"lab002\">支付宝Key（安全效验码）</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"alikey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户号，可到商家服务里获取\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通商户号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"tenpayset\"  value=\"";
echo $HY_970be7709f584ff59c["tenpayset"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"www.tenpay.com 腾讯财付通商户Key，可到商家服务里获取，编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#81F9BF\">财付通Key</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"tenkey\"  value=\"\" /></td>\r\n</tr>\r\n<tr malt=\"就是易付通商户帐号\">\r\n<td align=right bgcolor=\"#FC80E6\">易付通帐号</td>\r\n<td align=left><input class=\"longinput\" type=\"text\" maxlength=\"15\" name=\"e138set\"  value=\"";
echo $HY_970be7709f584ff59c["e138set"];
echo "\" /></td>\r\n</tr>\r\n<tr malt=\"编辑时安全起见不显示，不修改请留空\">\r\n<td align=right bgcolor=\"#FC80E6\">易付通密钥</td>\r\n<td align=left><input class=\"longinput\" type=\"password\" maxlength=\"50\" name=\"e138key\"  value=\"\" /></td>\r\n</tr>\r\n\r\n</table></td>\r\n</tr>\r\n<tr><td valign=top colspan=2>售卡页面附加脚本<br>\r\n<textarea name=\"jscript\" id=\"jscript\" style=\"width:680px;height:120px\">";
echo htmlspecialchars(base64_decode($HY_970be7709f584ff59c["jscript"]));
echo "</textarea>\r\n</td></tr>\r\n</table>\r\n</div>\r\n<div tbdid=\"3\">\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr><td valign=top>\r\n<table border=0  cellpadding=\"5\" cellspacing=\"5\" >\r\n<tr>\r\n<td align=right malt=\"代理帐号内的还有多少人民币，代理提卡必须用余额支付\">帐户余额</td>\r\n<td align=left malt=\"代理帐号内的还有多少人民币，代理提卡必须用余额支付\"><input class=\"smlinput\" type=\"text\" maxlength=\"9\" name=\"rmb\" id=\"rmb\" value=\"";
echo $HY_970be7709f584ff59c["rmb"];
echo "\" />元 </td>\r\n</tr>\r\n<tr>\t\r\n<td align=right malt=\"代理下单提卡时，余额不足时可以透支的金额\">可透支金额</td>\r\n<td align=left malt=\"代理下单提卡时，余额不足时可以透支的金额\"><input class=\"smlinput\" type=\"text\" maxlength=\"9\" name=\"touzhirmb\"  value=\"";
echo $HY_970be7709f584ff59c["touzhirmb"];
echo "\" />元</td>\r\n</tr>\r\n<tr>\t\t\t\t\t\r\n<td align=right malt=\"代理已经消费的金额，这是历史统计\">总消费金额</td>\r\n<td align=left malt=\"代理已经消费的金额，这是历史统计\"><input class=\"smlinput\" type=\"text\" maxlength=\"9\" name=\"xfrmb\"  value=\"";
echo $HY_970be7709f584ff59c["xfrmb"];
echo "\" />元</td>\r\n</tr>\r\n</table></td>\r\n<td valign=top>\r\n<table class=\"listtable\" id=\"keypriceset\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"100%\">\r\n<tr class=\"trhead\">\r\n<td>软件名</td>\r\n<td>卡类</td>\r\n<td>零售价</td>\r\n<td id=\"whprice\">";
echo $HY_970be7709f584ff59c["level"] == 7 ? "总代理价" : "代理价";
echo "</td>\r\n<td>操作</td>\r\n</tr>\r\n";
$HY_f178bff7533e9a4da4 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select kss_tb_agentprice.*, kss_tb_keyset.`keyname`, kss_tb_keyset.`retailprice`, kss_tb_keyset.cday, kss_tb_keyset.points, kss_tb_keyset.linknum ,kss_tb_soft.`softname` from kss_tb_agentprice left join kss_tb_keyset on kss_tb_agentprice.`keygroupid`=kss_tb_keyset.`id` left join kss_tb_soft on kss_tb_agentprice.softid=kss_tb_soft.`id` where kss_tb_agentprice.managerid=" . $HY_365893812300a028d8 . " and kss_tb_agentprice.`tmpkey`='no' order by softid");

if (7 < $HY_825ad51e000ddc6ca5["level"]) {
	$HY_59c074624ea3c13880 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`softname` from kss_tb_soft where `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);
}
else {
	$HY_59c074624ea3c13880 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`softname` from kss_tb_soft where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and id in (select distinct `softid` from `kss_tb_agentprice` where managerid=" . $HY_825ad51e000ddc6ca5["id"] . ")");
}

if (!empty($HY_f178bff7533e9a4da4)) {
	foreach ($HY_f178bff7533e9a4da4 as $HY_a1e3f7957087c929e0 ) {
		$HY_a1e3f7957087c929e0["keyname"] = hy_c447d0a25ad6071dc7($HY_a1e3f7957087c929e0["keyname"]);
		$HY_a1e3f7957087c929e0["softname"] = hy_c447d0a25ad6071dc7($HY_a1e3f7957087c929e0["softname"]);
		echo "<tr class=\"trd\" id=\"trkeypriceid";
		echo $HY_a1e3f7957087c929e0["id"];
		echo "\">\r\n<td>";
		echo $HY_a1e3f7957087c929e0["softname"];
		echo "</td>\r\n<td>";
		echo $HY_a1e3f7957087c929e0["keyname"] . "--" . $HY_a1e3f7957087c929e0["cday"] . "天--" . $HY_a1e3f7957087c929e0["points"] . "点--" . $HY_a1e3f7957087c929e0["linknum"] . "通道";
		echo "</td>\r\n<td>";
		echo $HY_a1e3f7957087c929e0["retailprice"];
		echo "</td>\r\n<td><input maxlength=\"8\" type=text id='w_keyprice";
		echo $HY_a1e3f7957087c929e0["id"];
		echo "' class=smlinput value=";
		echo $HY_a1e3f7957087c929e0["keyprice"];
		echo "></td>\r\n<td align=center><img src='";
		echo INSTALLPATH;
		echo "kss_inc/images/b_save.png' action='addmanager_saveprice' malt=\"保存价格修改\" priceid=\"";
		echo $HY_a1e3f7957087c929e0["id"];
		echo "\" saveprice=1>&nbsp;&nbsp;&nbsp;&nbsp;<img src='";
		echo INSTALLPATH;
		echo "kss_inc/images/b_drop.png' action='addmanager_delprice' malt=\"删除该提卡授权\" priceid=\"";
		echo $HY_a1e3f7957087c929e0["id"];
		echo "\" saveprice=1></td>\r\n</tr>\t\t\t\t\r\n";
	}
}

echo "<tr class=\"trd\" id=\"trkeyprice\">\r\n<td><input type=hidden name='w_tmpkey' value='";
echo hy_6bfeee86cee6e24af6(20);
echo "' id='w_tmpkey'><input type=hidden value='";
echo $HY_365893812300a028d8;
echo "' id='w_mid'><select name='w_softid' id=\"w_softid\"><option value='0'>选择软件</option>\r\n";

foreach ($HY_59c074624ea3c13880 as $HY_61aabb2bb736560d68 ) {
	$HY_61aabb2bb736560d68["softname"] = hy_c447d0a25ad6071dc7($HY_61aabb2bb736560d68["softname"]);
	echo "<option value=" . $HY_61aabb2bb736560d68["id"] . ">" . $HY_61aabb2bb736560d68["softname"] . "</option>";
}

echo "\t\t\t\t\t\t\t\r\n</select></td>\r\n<td><select name='w_kgid' id=\"w_kgid\"><option value='0'>请先选择软件</option></select></td>\r\n<td id=\"w_rprice\">&nbsp;</td>\r\n<td><input maxlength=\"8\" type=text id='w_keyprice' class=smlinput value='0'></td>\r\n<td><input type=button class=submitbtn value=\"提卡授权\" id=\"w_addkeyprice\"></td>\r\n\r\n</tr>\r\n</table></td></tr>\r\n</table>\r\n</div>\r\n<div tbdid=\"4\">\r\n<div id=\"dlpower\" class=\"licsoft1\"  malt=\"勾选相应的代理权限\">\r\n";
$HY_37d035a9af9bb3bd57 = 1;
$HY_af166dfaf16c25bc35 = hy_0894f1e5fc3fbb7c85($HY_825ad51e000ddc6ca5["pid"], $HY_970be7709f584ff59c["pmid"]);

if (!empty($HY_af166dfaf16c25bc35)) {
	$HY_37d035a9af9bb3bd57 = 0;
}

if (($HY_970be7709f584ff59c["level"] == 6) && ($HY_37d035a9af9bb3bd57 == 0)) {
	echo "<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"11\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "11");
	echo " id='plist1' /><label for='plist1'>允许使用售卡系统</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"12\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "12");
	echo " id='plist2' /><label for='plist2'>允许修改用户时间、点数、通道</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"15\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "15");
	echo " id='plist3' /><label for='plist3'>允许修改用户绑定信息</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"16\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "16");
	echo " id='plist4' /><label for='plist4'>允许修改用户附属性</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"13\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "13");
	echo " id='plist5' /><label for='plist5'>允许查看和修改客户安全密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"18\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "18");
	echo " id='plist8' /><label for='plist8'>允许查看和修改客户登陆密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"14\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "14");
	echo " id='plist6' /><label for='plist6'>允许查看回收站</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"17\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "17");
	echo " id='plist7' /><label for='plist7'>允许解绑操作</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"52\"";
	echo hy_569bf38a54717a736a($HY_af166dfaf16c25bc35["powerlist"], $HY_970be7709f584ff59c["powerlist"], "52");
	echo " id='plista2' /><label for='plista2'>可将卡和用户放入回收站</label></div>\r\n";
}
else {
	echo "<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"11\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "11") ? " checked" : "";
	echo " id='plist1' /><label for='plist1'>允许使用售卡系统</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"12\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "12") ? " checked" : "";
	echo " id='plist2' /><label for='plist2'>允许修改用户时间、点数、通道</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"15\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "15") ? " checked" : "";
	echo " id='plist3' /><label for='plist3'>允许修改用户绑定信息</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"16\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "16") ? " checked" : "";
	echo " id='plist4' /><label for='plist4'>允许修改用户附属性</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"13\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "13") ? " checked" : "";
	echo " id='plist5' /><label for='plist5'>允许查看和修改客户安全密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"18\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "18") ? " checked" : "";
	echo " id='plist8' /><label for='plist8'>允许查看和修改客户登陆密码</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"14\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "14") ? " checked" : "";
	echo " id='plist6' /><label for='plist6'>允许查看回收站</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"17\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "17") ? " checked" : "";
	echo " id='plist7' /><label for='plist7'>允许解绑操作</label></div>\r\n<div class=\"licsoft3\"><input name=\"powerlist[]\" type=\"checkbox\" value=\"52\"";
	echo hy_8c3a93be5d853f54b7($HY_970be7709f584ff59c["powerlist"], "52") ? " checked" : "";
	echo " id='plista2' /><label for='plista2'>可将卡和用户放入回收站</label></div>\r\n";
}

echo "\r\n<div style=\"clear:both\"></div>\r\n</div>\r\n\r\n</div>\r\n</div>\r\n<div style=\"padding:10px 0 10px 50px\"><input type=submit class=\"submitbtn\" value=\"";
echo $HY_ab20c9e23086ff8b04;
echo "\"></div>\r\n</div>\t\r\n</form>\r\n</body>\r\n</html>";

?>
