<?php

function HY_b1a4cee4fe28998d3e($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_4006bfc5c07eccad24()
{
	global $HY_82d6536edf704aabc5;
	$HY_e6591d22ce3c1ea59c = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft");

	foreach ($HY_e6591d22ce3c1ea59c as $HY_970be7709f584ff59c ) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from `kss_z_log_" . $HY_970be7709f584ff59c["pid"] . "_" . $HY_970be7709f584ff59c["id"] . "` where `addtime`<" . (time() - (86400 * Z_LOG_DAY)), "sync");
	}
}

function HY_2740ede61bd7c4a963()
{
	global $HY_82d6536edf704aabc5;
	$HY_a17284792a7553554a = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_config where id=1");

	if ($HY_a17284792a7553554a["clear_z_log"] != date("d")) {
		$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_config set clear_z_log=" . date("d") . " where `id`=1", "notsync");
		$HY_b145448aa76bc95b5e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft ");
	}

	return $HY_cc8bffcf91a9c13c11;
}

function HY_89d1ca6f1a4378de3b($HY_16abe05a644f97a4ce, $HY_c5aaf359b892dfe165, $HY_245060fd5899ee99ea)
{
	global $HY_82d6536edf704aabc5;
	$HY_b145448aa76bc95b5e = "";
	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("DROP TABLE IF EXISTS `kss_z_cz_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "`", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "删除旧的kss_z_cz_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE `kss_z_cz_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "` (`id` int(11) unsigned NOT NULL auto_increment,`addtime` int(10) unsigned NOT NULL,`cztype` tinyint(2) unsigned NOT NULL,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`oldcday` decimal(9,2) unsigned NOT NULL,`newcday` decimal(9,2) unsigned NOT NULL,`oldtimes` int(10) unsigned NOT NULL,`newtimes` int(10) unsigned NOT NULL,`keys` varchar(170) character set utf8 collate utf8_bin NOT NULL default '',`tzxguser` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',  PRIMARY KEY  (`id`), KEY `addtime` (`addtime`), KEY `username` (`username`(10))) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='客户帐号时间变更日志' AUTO_INCREMENT=1 ", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "创建新的kss_z_cz_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("DROP TABLE IF EXISTS `kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "`", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "删除旧的kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE `kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "` (`id` int(10) unsigned NOT NULL auto_increment,`managerid` smallint(5) unsigned NOT NULL,`keyfix` char(4) character set utf8 collate utf8_bin NOT NULL,`keys` char(6) character set utf8 collate utf8_bin NOT NULL,`keyspassword` char(22) character set utf8 collate utf8_bin NOT NULL,`addtime` int(10) unsigned NOT NULL,`ordernum` char(24) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) unsigned NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`tag` varchar(50) character set utf8 collate utf8_bin NOT NULL default '',`islock` tinyint(1) unsigned NOT NULL default '0',`isback` tinyint(1) unsigned NOT NULL default '0',`cztime` int(10) unsigned NOT NULL default '0',`czusername` varchar(32) NOT NULL default '',PRIMARY KEY  (`id`),UNIQUE KEY `keys` (`keys`), KEY `ordernum` (`ordernum`(10)), KEY `keyextattr` (`keyextattr`(10)), KEY `tag` (`tag`(10)), KEY `czusername` (`czusername`(10)), KEY `islock` (`islock`), KEY `isback` (`isback`), KEY `keyfix_uid_cztime` (`keyfix`,`managerid`,`cztime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "创建新的kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("DROP TABLE IF EXISTS `kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle`", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "删除旧的kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE `kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle` (`id` int(10) unsigned NOT NULL auto_increment,`managerid` smallint(5) unsigned NOT NULL,`keyfix` char(4) character set utf8 collate utf8_bin NOT NULL,`keys` char(6) character set utf8 collate utf8_bin NOT NULL,`keyspassword` char(22) character set utf8 collate utf8_bin NOT NULL,`addtime` int(10) unsigned NOT NULL,`ordernum` char(24) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) unsigned NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`tag` varchar(50) NOT NULL default '',`islock` tinyint(1) unsigned NOT NULL default '0',`isback` tinyint(1) unsigned NOT NULL default '0',`cztime` int(10) unsigned NOT NULL default '0',`czusername` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',`deltime` int(10) unsigned NOT NULL,`delmid` smallint(5) unsigned NOT NULL,PRIMARY KEY  (`id`),UNIQUE KEY `keys` (`keys`), KEY `ordernum` (`ordernum`(10)), KEY `keyextattr` (`keyextattr`(10)), KEY `tag` (`tag`(10)), KEY `czusername` (`czusername`(10)), KEY `islock` (`islock`), KEY `isback` (`isback`), KEY `deltime` (`deltime`),KEY `keyfix_uid_cztime` (`keyfix`,`managerid`,`cztime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "创建新的kss_z_key_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("DROP TABLE IF EXISTS `kss_z_log_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "`", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "删除旧的kss_z_log_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE `kss_z_log_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "` (`id` int(10) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`optype` tinyint(2) unsigned NOT NULL,`clientid` smallint(5) unsigned NOT NULL,`addtime` int(10) unsigned NOT NULL,`ip` bigint(20) unsigned NOT NULL,`pccode` varchar(128) character set utf8 NOT NULL default '',`linecode` varchar(10) character set utf8 NOT NULL default '',`opccode` varchar(128) character set utf8 NOT NULL, `oip` bigint(20) unsigned NOT NULL default '0',PRIMARY KEY  (`id`),KEY `addtime` (`addtime`),KEY `keys` (`username`(10),`optype`,`clientid`)) ENGINE=MyISAM DEFAULT CHARSET=ascii AUTO_INCREMENT=1 ", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "创建新的kss_z_log_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("DROP TABLE IF EXISTS `kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "`", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "删除旧的kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE `kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "` (`id` int(10) unsigned NOT NULL auto_increment,`istempuser` tinyint(1) unsigned NOT NULL default '0',`managerid` smallint(5) unsigned NOT NULL default '0',`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password2` varchar(32) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`islock` int(1) unsigned NOT NULL default '0',`tag` varchar(100) character set utf8 collate utf8_bin NOT NULL default '-',`bdinfo` varchar(100) NOT NULL default '',`linecode` varchar(10) NOT NULL default '',`pccode` varchar(128) NOT NULL default '',`addtime` int(10) unsigned NOT NULL default '0',`starttime` int(10) unsigned NOT NULL default '0',`endtime` int(10) unsigned NOT NULL default '0',`lasttime` int(10) unsigned NOT NULL default '0',`isonline` tinyint(1) unsigned NOT NULL default '0',`lastip` bigint(20) unsigned NOT NULL default '0',`activetimes` int(10) unsigned NOT NULL default '0',`unlocktimes` int(10) unsigned NOT NULL default '0',`unlockday` tinyint(2) unsigned NOT NULL default '0',`cztimes` int(10) unsigned NOT NULL default '0',`isusetestkey` tinyint(1) unsigned NOT NULL default '0',`parentuser` varchar(100) NOT NULL default '',`intro` varchar(50) NOT NULL default '',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`(10)),KEY `managerid` (`managerid`),KEY `tag` (`tag`),KEY `keyextattr` (`keyextattr`),KEY `lasttime` (`lasttime`,`isonline`),KEY `islock` (`islock`),KEY `endtime` (`endtime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "创建新的kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("DROP TABLE IF EXISTS `kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle`", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "删除旧的kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("CREATE TABLE `kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle` (`id` int(10) unsigned NOT NULL auto_increment,`istempuser` tinyint(1) unsigned NOT NULL default '0',`managerid` smallint(5) unsigned NOT NULL default '0',`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password2` varchar(32) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`islock` int(1) unsigned NOT NULL default '0',`tag` varchar(100) character set utf8 collate utf8_bin NOT NULL default '-',`bdinfo` varchar(100) NOT NULL default '',`linecode` varchar(10) NOT NULL default '',`pccode` varchar(128) NOT NULL default '',`addtime` int(10) unsigned NOT NULL default '0',`starttime` int(10) unsigned NOT NULL default '0',`endtime` int(10) unsigned NOT NULL default '0',`lasttime` int(10) unsigned NOT NULL default '0',`isonline` tinyint(1) unsigned NOT NULL default '0',`lastip` bigint(20) unsigned NOT NULL default '0',`activetimes` int(10) unsigned NOT NULL default '0',`unlocktimes` int(10) unsigned NOT NULL default '0',`unlockday` tinyint(2) unsigned NOT NULL default '0',`cztimes` int(10) unsigned NOT NULL default '0',`isusetestkey` tinyint(1) unsigned NOT NULL default '0',`parentuser` varchar(100) NOT NULL default '',`intro` varchar(50) NOT NULL default '',`updata` varchar(128) NOT NULL default '',`delmid` smallint(5) unsigned NOT NULL default '0',`deltime` int(10) unsigned NOT NULL default '0',PRIMARY KEY  (`id`),KEY `username` (`username`(10)),KEY `managerid` (`managerid`),KEY `tag` (`tag`),KEY `keyextattr` (`keyextattr`),KEY `lasttime` (`lasttime`,`isonline`),KEY `islock` (`islock`),KEY `endtime` (`endtime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync");

	if ($HY_173d86697f24ffa1ee === false) {
		$HY_b145448aa76bc95b5e .= "创建新的kss_z_user_" . $HY_16abe05a644f97a4ce . "_" . $HY_c5aaf359b892dfe165 . "_recycle表出错" . $HY_82d6536edf704aabc5->HY_8def866213a3d931dd() . "<br>";
	}

	if ($HY_b145448aa76bc95b5e == "") {
		$HY_b145448aa76bc95b5e = true;
	}

	return $HY_b145448aa76bc95b5e;
}

function HY_c79cc84a5c5725e920($HY_c5aaf359b892dfe165, $HY_264cd53052932ac6ae = 0, $HY_40cf8ca85aaa788b74 = 0, $HY_a64f1553c1e5dc0807 = false)
{
	global $HY_82d6536edf704aabc5;
	global $HY_825ad51e000ddc6ca5;
	$HY_f5ebbb99a6c3ed003e = 0;

	if ($HY_40cf8ca85aaa788b74 == 2) {
		$HY_f5ebbb99a6c3ed003e = "";
	}

	if ($HY_c5aaf359b892dfe165 == 0) {
		return "<option value='" . $HY_f5ebbb99a6c3ed003e . "'>----暂无卡类----</option>";
	}

	$HY_bc854a58778efeb1d8 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from `kss_tb_keyset` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and `softid`=" . $HY_c5aaf359b892dfe165 . " and `islock`=0 order by `cday` asc");

	if (empty($HY_bc854a58778efeb1d8)) {
		return "<option value='" . $HY_f5ebbb99a6c3ed003e . "'>----暂无卡类----</option>";
	}

	$HY_31092c768b980c996c = "";

	if (!empty($HY_a64f1553c1e5dc0807)) {
		$HY_bbc589fb089edaeacf = array();

		foreach ($HY_a64f1553c1e5dc0807 as $HY_70fdd4c095ad9a39f4 ) {
			$HY_bbc589fb089edaeacf[$HY_70fdd4c095ad9a39f4["keygroupid"]] = $HY_70fdd4c095ad9a39f4["keyprice"];
		}

		foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
			if (array_key_exists($HY_970be7709f584ff59c["id"], $HY_bbc589fb089edaeacf)) {
				$HY_31092c768b980c996c .= "<option value=" . $HY_970be7709f584ff59c["id"];
				$HY_31092c768b980c996c .= ($HY_970be7709f584ff59c["id"] == $HY_264cd53052932ac6ae ? " selected" : "");
				$HY_31092c768b980c996c .= " cday='" . $HY_970be7709f584ff59c["cday"] . "'";
				$HY_31092c768b980c996c .= " points='" . $HY_970be7709f584ff59c["points"] . "'";
				$HY_31092c768b980c996c .= " linknum='" . $HY_970be7709f584ff59c["linknum"] . "'";
				$HY_31092c768b980c996c .= " price='" . $HY_bbc589fb089edaeacf[$HY_970be7709f584ff59c["id"]] . "'";
				$HY_31092c768b980c996c .= "  extattr1='" . $HY_970be7709f584ff59c["extattr1"] . "'>";
				$HY_31092c768b980c996c .= $HY_970be7709f584ff59c["keyname"] . "--" . $HY_bbc589fb089edaeacf[$HY_970be7709f584ff59c["id"]] . "元/张 [天" . round($HY_970be7709f584ff59c["cday"], 2) . " 点" . $HY_970be7709f584ff59c["points"] . " 通道" . $HY_970be7709f584ff59c["linknum"];

				if ($HY_970be7709f584ff59c["extattr1"] != "") {
					$HY_31092c768b980c996c .= " 附属性" . $HY_970be7709f584ff59c["extattr1"];
				}

				$HY_31092c768b980c996c .= "]</option>";
			}
		}
	}
	else {
		foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c ) {
			if ($HY_40cf8ca85aaa788b74 == 2) {
				$HY_31092c768b980c996c .= "<option value='" . $HY_970be7709f584ff59c["prefix"] . "'";
				$HY_31092c768b980c996c .= ($HY_970be7709f584ff59c["prefix"] == $HY_264cd53052932ac6ae ? " selected" : "");
			}
			else {
				$HY_31092c768b980c996c .= "<option value=" . $HY_970be7709f584ff59c["id"];
				$HY_31092c768b980c996c .= ($HY_970be7709f584ff59c["id"] == $HY_264cd53052932ac6ae ? " selected" : "");
			}

			$HY_31092c768b980c996c .= " cday='" . $HY_970be7709f584ff59c["cday"] . "'";
			$HY_31092c768b980c996c .= " points='" . $HY_970be7709f584ff59c["points"] . "'";
			$HY_31092c768b980c996c .= " linknum='" . $HY_970be7709f584ff59c["linknum"] . "'";
			$HY_31092c768b980c996c .= "  extattr1='" . $HY_970be7709f584ff59c["extattr1"] . "'>";
			$HY_31092c768b980c996c .= $HY_970be7709f584ff59c["keyname"] . "--[天" . round($HY_970be7709f584ff59c["cday"], 2) . " 点" . $HY_970be7709f584ff59c["points"] . " 通道" . $HY_970be7709f584ff59c["linknum"];

			if ($HY_970be7709f584ff59c["extattr1"] != "") {
				$HY_31092c768b980c996c .= " 附属性" . $HY_970be7709f584ff59c["extattr1"];
			}

			$HY_31092c768b980c996c .= "]</option>";
		}
	}

	return $HY_31092c768b980c996c;
}

function HY_cf18c94480f908cc46($HY_e05cba65e8fd099080, $HY_4961ae9147692e99ed)
{
	global $HY_82d6536edf704aabc5;
	global $HY_db2c979ce78a26ded8;
	$HY_db2c979ce78a26ded8 = array();

	if (!is_array($HY_4961ae9147692e99ed)) {
		if (hy_d6173c9bc272354dd2($HY_4961ae9147692e99ed) === true) {
			$HY_4961ae9147692e99ed = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where `id`=" . $HY_4961ae9147692e99ed);

			if (empty($HY_4961ae9147692e99ed)) {
				return "录入注册卡前检查：未找到卡属性ID";
			}
		}
		else {
			return "录入注册卡前检查：未传入卡属性数组或ID";
		}
	}

	$HY_a3750a2bb3aaf29202 = "insert into `kss_z_key_" . $HY_4961ae9147692e99ed["pid"] . "_" . $HY_4961ae9147692e99ed["softid"] . "` \r\n(`keyfix`,`keys`,`keyspassword`,`managerid`,`addtime`,`ordernum`,`cday`,`linknum`,`points`,`keyextattr`,`tag`) values ";
	$HY_0516aef60f1752e954 = "," . $HY_e05cba65e8fd099080["managerid"] . "," . time() . ",'" . $HY_e05cba65e8fd099080["ordernum"] . "'," . $HY_4961ae9147692e99ed["cday"] . "," . $HY_4961ae9147692e99ed["linknum"] . "," . $HY_4961ae9147692e99ed["points"] . ",'" . $HY_4961ae9147692e99ed["extattr1"] . "','" . $HY_e05cba65e8fd099080["tag"] . "'),";

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < $HY_e05cba65e8fd099080["k_num"]; $HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 100) {
		$HY_e630ebf70efb13683c = "";

		for ($HY_c5d03c965a457403be = 0; $HY_c5d03c965a457403be < 100; $HY_c5d03c965a457403be++) {
			if (($HY_fc12e3cf6043961fb3 + $HY_c5d03c965a457403be) == $HY_e05cba65e8fd099080["k_num"]) {
				break;
			}

			$HY_8492658a0aac8d7e20 = hy_010795c8508a6450e0($HY_e05cba65e8fd099080["beginid"] + $HY_fc12e3cf6043961fb3 + $HY_c5d03c965a457403be, SVRID);
			$HY_db2c979ce78a26ded8[] = $HY_4961ae9147692e99ed["prefix"] . $HY_8492658a0aac8d7e20[0] . $HY_8492658a0aac8d7e20[1];
			$HY_e630ebf70efb13683c .= "('" . $HY_4961ae9147692e99ed["prefix"] . "','" . $HY_8492658a0aac8d7e20[0] . "','" . $HY_8492658a0aac8d7e20[1] . "'" . $HY_0516aef60f1752e954;
		}

		$HY_e630ebf70efb13683c = substr($HY_e630ebf70efb13683c, 0, strlen($HY_e630ebf70efb13683c) - 1);
		$HY_d94a52c89b85667f41 = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_a3750a2bb3aaf29202 . $HY_e630ebf70efb13683c, "sync");
		$HY_3b22eac9ea6b5c92a5 = $HY_82d6536edf704aabc5->HY_8def866213a3d931dd();

		if ($HY_d94a52c89b85667f41 === false) {
			$HY_173d86697f24ffa1ee = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("delete from kss_z_key_" . $HY_4961ae9147692e99ed["pid"] . "_" . $HY_4961ae9147692e99ed["softid"] . " where `ordernum`='" . $HY_e05cba65e8fd099080["ordernum"] . "'", "sync");

			if ($HY_173d86697f24ffa1ee === false) {
				@file_put_contents(KSSLOGDIR . "addkeyerrorder.php", "," . $HY_e05cba65e8fd099080["ordernum"], FILE_APPEND);
			}

			return "录入注册卡时出错:" . $HY_3b22eac9ea6b5c92a5;
		}
	}

	return true;
}

function HY_8c3a93be5d853f54b7($HY_7a06fb8961d570517d, $HY_dffc1d6186e916a92f)
{
	$HY_7a06fb8961d570517d = str_replace(" ", "", $HY_7a06fb8961d570517d);
	$HY_b30d7e5a06c00b8bad = explode(",", $HY_7a06fb8961d570517d);

	if (in_array($HY_dffc1d6186e916a92f, $HY_b30d7e5a06c00b8bad)) {
		return true;
	}
	else {
		return false;
	}
}

function HY_569bf38a54717a736a($HY_ce9369286f5a198bc1, $HY_b82b14698094ce0f76, $HY_85eb92856f93b2f238)
{
	if (hy_8c3a93be5d853f54b7($HY_ce9369286f5a198bc1, $HY_85eb92856f93b2f238)) {
		if (hy_8c3a93be5d853f54b7($HY_b82b14698094ce0f76, $HY_85eb92856f93b2f238)) {
			return " checked";
		}
		else {
			return " ";
		}
	}
	else {
		return " disabled";
	}
}

function HY_242e1b6c92f22101bb($HY_7214e20c111e290880, $HY_5ffc622a7218b0f471 = 0)
{
	global $HY_3fb3415441688353e5;
	global $HY_82d6536edf704aabc5;
	global $HY_e83242934e1fdef61f;
	global $HY_c896b9940487a44396;
	global $HY_063c1f55878eb36837;
	$HY_e311f73a9f6a09b787 = (isset($_SESSION["kss_manager"]) ? $_SESSION["kss_manager"] : NULL);

	if (empty($HY_e311f73a9f6a09b787)) {
		hy_bd307d155f057feb55("未登陆，或长时间没有操作，<a href='index.php' target='_top'>请重新登陆</a>。");
	}

	$HY_956cad02040e8dbffa = (isset($_SESSION["kss_safe"]) ? $_SESSION["kss_safe"] : NULL);

	if (empty($HY_956cad02040e8dbffa)) {
		hy_bd307d155f057feb55("未登陆，或长时间没有操作，<a href='index.php' target='_top'>请重新登陆</a>。");
	}

	if (BINDIP == 1) {
		if (md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"].$_SESSION["kss_manager"] . hy_cb508d896b2e2fcfba()) != $HY_956cad02040e8dbffa) {
			hy_bd307d155f057feb55("非法操作，<a href='index.php' target='_top'>请重新登陆</a>。");
		}
	}
	else if (md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"].$_SESSION["kss_manager"]) != $HY_956cad02040e8dbffa) {
		hy_bd307d155f057feb55("非法操作，<a href='index.php' target='_top'>请重新登陆</a>。");
	}
	//此处高版本php 导致 数组转string错误 
	//$_SERVER["HTTP_USER_AGENT"].($HY_5301c7fff6947d8244 = explode(",", $HY_e311f73a9f6a09b787));
	$_SERVER["HTTP_USER_AGENT"].(count($HY_5301c7fff6947d8244 = explode(",", $HY_e311f73a9f6a09b787)));

	if (count($HY_5301c7fff6947d8244) != 4) {
		hy_bd307d155f057feb55("登陆状态异常，<a href='index.php' target='_top'>请重新登陆</a>。");
	}

	if (!hy_d6173c9bc272354dd2($HY_5301c7fff6947d8244[0])) {
		hy_bd307d155f057feb55("SESSION出错");
	}

	if (empty($HY_82d6536edf704aabc5->HY_635641851de68fd76e)) {
		$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
	}

	$HY_b8a0a3f417458f87e4 = array("crypt95.php");
	$HY_c653096fd27bd7274e = false;

	foreach ($HY_b8a0a3f417458f87e4 as $HY_4713a5727c89602935 ) {
		$HY_26a5886619eca759a5 = file_get_contents(KSSINCDIR . "signdata" . DIRECTORY_SEPARATOR . $HY_4713a5727c89602935);
		$HY_26a5886619eca759a5 = substr($HY_26a5886619eca759a5, 0, 500);

		if (stripos($HY_26a5886619eca759a5, "EncodeDate") == false) {
			$HY_c653096fd27bd7274e = false;
			break;
		}
	}

	if ($HY_c653096fd27bd7274e == true) {
		hy_bd307d155f057feb55("系统文件被破坏，请联系售后1！");
	}

	$HY_909f1f45599c1c3af7 = "52";

	if (substr(PHP_VERSION, 0, 3) == "5.3") {
		$HY_909f1f45599c1c3af7 = "53";
	}

	$HY_825ad51e000ddc6ca5 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`='" . $HY_5301c7fff6947d8244[0] . "'");

	if (empty($HY_825ad51e000ddc6ca5)) {
		hy_bd307d155f057feb55("用ID号未找到，<a href='index.php' target='_top'>请重新登陆</a>。");
	}

	if (($HY_825ad51e000ddc6ca5["username"] != $HY_5301c7fff6947d8244[1]) || ($HY_825ad51e000ddc6ca5["password"] != $HY_5301c7fff6947d8244[2])) {
		hy_bd307d155f057feb55("用户名或密码错误，<a href='index.php' target='_top'>请重新登陆</a>。");
	}

	if ($HY_825ad51e000ddc6ca5["endtime"] < hy_cf2f0673819dddd4a1()) {
		hy_bd307d155f057feb55("您的帐号已到期。" . $HY_825ad51e000ddc6ca5["endtime"]);
	}

	if ($HY_825ad51e000ddc6ca5["islock"] == 1) {
		hy_bd307d155f057feb55("您的帐号被锁定! [锁定原因：" . $HY_825ad51e000ddc6ca5["lockedinter"] . "]");
	}

	if ($HY_825ad51e000ddc6ca5["level"] < 8) {
		if ($HY_825ad51e000ddc6ca5["level"] == 6) {
			$HY_d83bf57cf9d2dbfac5 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=" . $HY_825ad51e000ddc6ca5["pmid"]);

			if ($HY_d83bf57cf9d2dbfac5["endtime"] < hy_cf2f0673819dddd4a1()) {
				hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[$HY_d83bf57cf9d2dbfac5["level"]] . "帐号已过期" . $HY_d83bf57cf9d2dbfac5["endtime"]);
			}

			if ($HY_d83bf57cf9d2dbfac5["islock"] == 1) {
				hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[$HY_d83bf57cf9d2dbfac5["level"]] . "帐号被锁定! [锁定原因：" . $HY_d83bf57cf9d2dbfac5["lockedinter"] . "]");
			}
		}

		$HY_d83bf57cf9d2dbfac5 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where pid=" . $HY_825ad51e000ddc6ca5["pid"] . " and level>7");

		if ($HY_d83bf57cf9d2dbfac5["endtime"] < hy_cf2f0673819dddd4a1()) {
			hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[8] . "帐号已过期" . $HY_d83bf57cf9d2dbfac5["endtime"]);
		}

		if ($HY_d83bf57cf9d2dbfac5["islock"] == 1) {
			hy_bd307d155f057feb55("上级" . $HY_3fb3415441688353e5[8] . "帐号被锁定! [锁定原因：" . $HY_d83bf57cf9d2dbfac5["lockedinter"] . "]");
		}
	}

	if (($HY_825ad51e000ddc6ca5["linecode"] != $HY_5301c7fff6947d8244[3]) && ("efefefef" != $HY_5301c7fff6947d8244[3]) && ($HY_825ad51e000ddc6ca5["username"] != "test01")) {
		hy_bd307d155f057feb55("您的帐号被挤下线，<a href=index.php target=_top>请重新登陆</a>");
	}

	$HY_15f6d53682daa660d6 = (isset($_SESSION["kss_mmlogin"]) ? $_SESSION["kss_mmlogin"] : NULL);

	if (!empty($HY_15f6d53682daa660d6)) {
		$HY_5e55881d2b2f0f9b7b = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where id=1");

		if ($HY_15f6d53682daa660d6 != md5($HY_5e55881d2b2f0f9b7b["username"] . $HY_5e55881d2b2f0f9b7b["password"])) {
			hy_bd307d155f057feb55("你的原始身份效验失败！");
		}

		$HY_825ad51e000ddc6ca5["level"] = 9;
		$HY_825ad51e000ddc6ca5["powerlist"] = "admin";
	}

	if ($HY_825ad51e000ddc6ca5["level"] < $HY_7214e20c111e290880) {
		hy_bd307d155f057feb55($HY_3fb3415441688353e5[$HY_825ad51e000ddc6ca5["level"]] . "帐号无权限访问此页面或执行此操作");
	}

	if (($HY_825ad51e000ddc6ca5["level"] == 9) && is_file(KSSINCDIR . "spip.txt")) {
		if ($_SERVER["REMOTE_ADDR"] != trim(file_get_contents(KSSINCDIR . "spip.txt"))) {
			hy_bd307d155f057feb55("非法登陆！");
		}
	}

	if (($HY_5ffc622a7218b0f471 != 0) && ($HY_825ad51e000ddc6ca5["powerlist"] != "admin")) {
		$HY_da46372874fb05b1ec = explode(",", $HY_825ad51e000ddc6ca5["powerlist"]);

		if (!in_array($HY_5ffc622a7218b0f471, $HY_da46372874fb05b1ec)) {
			hy_bd307d155f057feb55("您无权限访问此页面或执行此操作！");
		}
	}

	return $HY_825ad51e000ddc6ca5;
}

function HY_0894f1e5fc3fbb7c85($HY_16abe05a644f97a4ce, $HY_63c3300e5cbcff833e = 0)
{
	global $HY_82d6536edf704aabc5;
	$HY_d397f76919d16c7972 = " `level`>7 ";

	if ($HY_63c3300e5cbcff833e != 0) {
		$HY_d397f76919d16c7972 = " `level`=7 and id=" . $HY_63c3300e5cbcff833e;
	}

	return $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `pid`=" . $HY_16abe05a644f97a4ce . " and " . $HY_d397f76919d16c7972 . " limit 0,1");
}

function HY_4f6f2e143b93a52ec5($HY_365893812300a028d8)
{
	global $HY_82d6536edf704aabc5;
	return $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`=" . $HY_365893812300a028d8);
}

function HY_0191b1c860abe74c6c()
{
	global $HY_82d6536edf704aabc5;
	$HY_e6e8aeec74e7b16058 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select max(`pid`) from `kss_tb_manager`", 2);

	if ($HY_e6e8aeec74e7b16058[0] < 10000) {
		return "10000";
	}

	return $HY_e6e8aeec74e7b16058[0] + 1;
}

function HY_3df13eaab5a6295338()
{
	return true;
}


?>
