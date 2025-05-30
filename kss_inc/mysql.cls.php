<?php

class mysql_cls
{
	public $HY_635641851de68fd76e;
	public $HY_4d9399bcf4aa0a4a50;

	public function HY_8adfa6fa6f18be3e6f($HY_72d228f16d0f3caec8, $HY_34cbb497603ce065f8 = 1)
	{
		global $HY_de7cf704210fc885cc;
		$this->HY_635641851de68fd76e = @mysql_connect($HY_72d228f16d0f3caec8["dbhost"], $HY_72d228f16d0f3caec8["dbuser"], $HY_72d228f16d0f3caec8["dbpass"], $HY_72d228f16d0f3caec8["newlink"]);

		if (!$this->HY_635641851de68fd76e) {
			$HY_82985b4d0af0649324 = mysql_error();
			$HY_82985b4d0af0649324 = preg_replace("/\[.*\]/", "", $HY_82985b4d0af0649324);
			$HY_82985b4d0af0649324 = preg_replace("/\'[^\']*\'/", "'***'", $HY_82985b4d0af0649324);

			if ($HY_34cbb497603ce065f8 == 1) {
				hy_bd307d155f057feb55($HY_82985b4d0af0649324);
			}
			else {
				return $HY_82985b4d0af0649324;
			}
		}

		if (!mysql_select_db($HY_72d228f16d0f3caec8["dbname"], $this->HY_635641851de68fd76e)) {
			$HY_82985b4d0af0649324 = mysql_error();
			$HY_82985b4d0af0649324 = preg_replace("/\[.*\]/", "", $HY_82985b4d0af0649324);
			$HY_82985b4d0af0649324 = preg_replace("/\'[^\']*\'/", "'***'", $HY_82985b4d0af0649324);

			if ($HY_34cbb497603ce065f8 == 1) {
				hy_bd307d155f057feb55($HY_82985b4d0af0649324);
			}
			else {
				return $HY_82985b4d0af0649324;
			}
		}

		if (!mysql_query("set names 'utf8'")) {
			$HY_82985b4d0af0649324 = mysql_error();
			$HY_82985b4d0af0649324 = preg_replace("/\[.*\]/", "", $HY_82985b4d0af0649324);
			$HY_82985b4d0af0649324 = preg_replace("/\'[^\']*\'/", "'***'", $HY_82985b4d0af0649324);

			if ($HY_34cbb497603ce065f8 == 1) {
				hy_bd307d155f057feb55($HY_82985b4d0af0649324);
			}
			else {
				return $HY_82985b4d0af0649324;
			}
		}

		return "success";
	}

	public function api__query($HY_2b051c35c3cffb9826, $HY_06710c6fef65bb8384 = "not_sync", $HY_a298449a7c8d5e427c = 0)
	{
		return $this->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, $HY_06710c6fef65bb8384, $HY_a298449a7c8d5e427c);
	}

	public function HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, $HY_06710c6fef65bb8384 = "not_sync", $HY_a298449a7c8d5e427c = 0)
	{
		if ($HY_a298449a7c8d5e427c == 0) {
			$HY_e6e8aeec74e7b16058 = mysql_query($HY_2b051c35c3cffb9826, $this->HY_635641851de68fd76e);
		}
		else {
			$HY_e6e8aeec74e7b16058 = mysql_unbuffered_query($HY_2b051c35c3cffb9826, $this->HY_635641851de68fd76e);
		}

		if ($HY_e6e8aeec74e7b16058 === false) {
			$this->HY_2c717da4f817ef6def($HY_2b051c35c3cffb9826);
		}
		else {
			if ((substr(strtolower(trim($HY_2b051c35c3cffb9826)), 0, 24) != "insert into `kss_tb_sql`") && in_array(substr(strtolower(trim($HY_2b051c35c3cffb9826)), 0, 6), array("update", "delete", "insert", "replac"))) {
				$this->HY_4d9399bcf4aa0a4a50 = mysql_affected_rows();
			}

			if ((IS2SVR == 1) && ($HY_06710c6fef65bb8384 == "sync") && (substr(strtolower(trim($HY_2b051c35c3cffb9826)), 0, 6) !== "select")) {
				$HY_e0dbb640be69018402 = $this->HY_e6e8aeec74e7b16058("insert into `kss_tb_sql` (`addtime`,`sqltext`) VALUES (" . time() . ",'" . mysql_real_escape_string($HY_2b051c35c3cffb9826) . "')", "notsync");
			}
		}

		return $HY_e6e8aeec74e7b16058;
	}

	public function HY_e9890ac0540efd6af3($HY_a17d92127942ccaec3 = "defult", $HY_b0d6f2255e8c7ffaa7 = 0, $HY_b494cc9dc15d323f8c = 0)
	{
		$HY_b145448aa76bc95b5e = true;

		if ($HY_b494cc9dc15d323f8c == 0) {
			$HY_b494cc9dc15d323f8c = hy_c28ffe58a6314b1fd4();
		}

		$HY_d15ae57c9c3f548bf3 = $this->HY_e6e8aeec74e7b16058("insert into `kss_tb_lock` (`lockname`,`locktime`) values ('" . $HY_a17d92127942ccaec3 . "'," . time() . ")", "notsync");

		if ($HY_d15ae57c9c3f548bf3 === false) {
			$HY_e61e3b55e1fd7b3e4e = $this->HY_409ede9e08e04ca87b("select locktime from kss_tb_lock where `lockname`='" . $HY_a17d92127942ccaec3 . "'");

			if (AUTODELLOCK < abs(time() - $HY_e61e3b55e1fd7b3e4e["locktime"])) {
				$this->HY_e6e8aeec74e7b16058("delete from kss_tb_lock where `lockname`='" . $HY_a17d92127942ccaec3 . "'", "notsync");
				return $this->HY_e9890ac0540efd6af3($HY_a17d92127942ccaec3, $HY_b0d6f2255e8c7ffaa7, $HY_b494cc9dc15d323f8c);
			}

			$HY_64a91b9d083315012e = $this->HY_8def866213a3d931dd();

			if (substr($HY_64a91b9d083315012e, 0, 15) == "Duplicate entry") {
				$HY_b145448aa76bc95b5e = $HY_a17d92127942ccaec3 . "锁被占用中";
			}
			else {
				$HY_b145448aa76bc95b5e = $HY_a17d92127942ccaec3 . "[" . $HY_64a91b9d083315012e . "]";
			}
		}

		if ($HY_b145448aa76bc95b5e === true) {
			return $HY_b145448aa76bc95b5e;
		}
		else {
			if (($HY_b0d6f2255e8c7ffaa7 == 1) && ((hy_c28ffe58a6314b1fd4() - $HY_b494cc9dc15d323f8c) < 2)) {
				hy_5275a6b68cd141a74b(1000);
				return $this->HY_e9890ac0540efd6af3($HY_a17d92127942ccaec3, $HY_b0d6f2255e8c7ffaa7, $HY_b494cc9dc15d323f8c);
			}
			else {
				return $HY_b145448aa76bc95b5e;
			}
		}
	}

	public function HY_a060a3d43d6a913655($HY_a17d92127942ccaec3 = "defult")
	{
		$this->HY_e6e8aeec74e7b16058("delete from `kss_tb_lock` where `lockname`='" . $HY_a17d92127942ccaec3 . "'", "notsync");
	}

	public function api__getrow($HY_2b051c35c3cffb9826, $HY_796c27f722eefb29fa = 1, $HY_a298449a7c8d5e427c = 0)
	{
		return $this->HY_409ede9e08e04ca87b($HY_2b051c35c3cffb9826, $HY_796c27f722eefb29fa, $HY_a298449a7c8d5e427c);
	}

	public function HY_409ede9e08e04ca87b($HY_2b051c35c3cffb9826, $HY_796c27f722eefb29fa = 1, $HY_a298449a7c8d5e427c = 0)
	{
		$HY_970be7709f584ff59c = $this->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "notsync", $HY_a298449a7c8d5e427c);

		if ($HY_970be7709f584ff59c !== false) {
			return $this->HY_5851b177146d21e3f7($HY_970be7709f584ff59c, $HY_796c27f722eefb29fa);
		}
		else {
			return false;
		}
	}

	public function api__getrows($HY_2b051c35c3cffb9826, $HY_796c27f722eefb29fa = 1)
	{
		return $this->HY_7cbdce9f890757a7f0($HY_2b051c35c3cffb9826, $HY_796c27f722eefb29fa);
	}

	public function HY_7cbdce9f890757a7f0($HY_2b051c35c3cffb9826, $HY_796c27f722eefb29fa = 1, $HY_a298449a7c8d5e427c = 0)
	{
		$HY_970be7709f584ff59c = $this->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826, "not_sync", $HY_a298449a7c8d5e427c);

		if ($HY_970be7709f584ff59c !== false) {
			$HY_cad394884b1d015892 = array();

			while ($HY_bc854a58778efeb1d8 = $this->HY_5851b177146d21e3f7($HY_970be7709f584ff59c, $HY_796c27f722eefb29fa)) {
				$HY_cad394884b1d015892[] = $HY_bc854a58778efeb1d8;
			}

			$this->HY_f3a3906e794027e690($HY_970be7709f584ff59c);
			return $HY_cad394884b1d015892;
		}
		else {
			return false;
		}
	}

	public function HY_0ce06f9bfa146cc96d($HY_de13b17528948259e8, $HY_27493fef32365cbc3d, $HY_06710c6fef65bb8384 = "not_sync", $HY_726832cb9bd197da90 = 0)
	{
		$HY_88a75506934a0967f5 = $this->HY_c35f2459d9a3a91111("DESC " . $HY_de13b17528948259e8);
		$HY_cd078dbc01a7942553 = array();
		$HY_f3770cffac7bc9b255 = array();

		if ($HY_88a75506934a0967f5 === false) {
			if ($HY_726832cb9bd197da90 == 1) {
				hy_bd307d155f057feb55($HY_de13b17528948259e8 . "表异常，需要深度修复！");
				return false;
			}

			$HY_726832cb9bd197da90 = 1;
			return $this->HY_0ce06f9bfa146cc96d($HY_de13b17528948259e8, $HY_27493fef32365cbc3d, $HY_06710c6fef65bb8384, $HY_726832cb9bd197da90);
		}

		foreach ($HY_88a75506934a0967f5 as $HY_39f33d52374bdc42f7 ) {
			if (array_key_exists($HY_39f33d52374bdc42f7, $HY_27493fef32365cbc3d) == true) {
				$HY_cd078dbc01a7942553[] = "`" . $HY_39f33d52374bdc42f7 . "`";
				$HY_f3770cffac7bc9b255[] = "'" . mysql_real_escape_string($HY_27493fef32365cbc3d[$HY_39f33d52374bdc42f7]) . "'";
			}
		}

		if (!empty($HY_cd078dbc01a7942553)) {
			if ($HY_06710c6fef65bb8384 == "sql") {
				return "insert into `" . $HY_de13b17528948259e8 . "` (" . implode(",", $HY_cd078dbc01a7942553) . ") VALUES (" . implode(",", $HY_f3770cffac7bc9b255) . ")";
			}

			return $this->HY_e6e8aeec74e7b16058("insert into `" . $HY_de13b17528948259e8 . "` (" . implode(",", $HY_cd078dbc01a7942553) . ") VALUES (" . implode(",", $HY_f3770cffac7bc9b255) . ")", $HY_06710c6fef65bb8384);
		}
		else {
			return false;
		}
	}

	public function HY_980f5cc48e1cbb7e79($HY_de13b17528948259e8, $HY_27493fef32365cbc3d, $HY_bf27108d76f7d1041e = "", $HY_06710c6fef65bb8384 = "not_sync", $HY_726832cb9bd197da90 = 0)
	{
		$HY_88a75506934a0967f5 = $this->HY_c35f2459d9a3a91111("DESC " . $HY_de13b17528948259e8);
		$HY_b94dbc7c33574f5cfd = array();

		if ($HY_88a75506934a0967f5 === false) {
			if ($HY_726832cb9bd197da90 == 1) {
				hy_bd307d155f057feb55($HY_de13b17528948259e8 . "表异常，需要深度修复！");
				return false;
			}

			$HY_726832cb9bd197da90 = 1;
			return $this->HY_0ce06f9bfa146cc96d($HY_de13b17528948259e8, $HY_27493fef32365cbc3d, $HY_bf27108d76f7d1041e, $HY_06710c6fef65bb8384, $HY_726832cb9bd197da90);
		}

		foreach ($HY_88a75506934a0967f5 as $HY_39f33d52374bdc42f7 ) {
			if (array_key_exists($HY_39f33d52374bdc42f7, $HY_27493fef32365cbc3d) == true) {
				$HY_b94dbc7c33574f5cfd[] = "`" . $HY_39f33d52374bdc42f7 . "`='" . mysql_real_escape_string($HY_27493fef32365cbc3d[$HY_39f33d52374bdc42f7]) . "'";
			}
		}

		if (!empty($HY_b94dbc7c33574f5cfd)) {
			if ($HY_06710c6fef65bb8384 == "sql") {
				return "update " . $HY_de13b17528948259e8 . " set " . implode(", ", $HY_b94dbc7c33574f5cfd) . " where " . $HY_bf27108d76f7d1041e;
			}

			return $this->HY_e6e8aeec74e7b16058("update " . $HY_de13b17528948259e8 . " set " . implode(", ", $HY_b94dbc7c33574f5cfd) . " where " . $HY_bf27108d76f7d1041e, $HY_06710c6fef65bb8384);
		}
		else {
			return false;
		}
	}

	public function HY_98bea57b3c5997f560($HY_de13b17528948259e8)
	{
		$HY_e6e8aeec74e7b16058 = $this->HY_409ede9e08e04ca87b("select max(`id`) from `" . $HY_de13b17528948259e8 . "`", 2);

		if (empty($HY_e6e8aeec74e7b16058[0])) {
			return 0;
		}
		else {
			return $HY_e6e8aeec74e7b16058[0];
		}
	}

	public function HY_37e7d84d05816dfda2($HY_de13b17528948259e8)
	{
		$HY_e6e8aeec74e7b16058 = mysql_query("show table status where Name ='" . $HY_de13b17528948259e8 . "'", $this->HY_635641851de68fd76e);

		if ($HY_e6e8aeec74e7b16058 === false) {
			$HY_dd4ab7441ca4a8bd58 = $this->HY_98bea57b3c5997f560($HY_de13b17528948259e8) + 1;
			mysql_query("ALTER TABLE `" . $HY_de13b17528948259e8 . "` AUTO_INCREMENT =" . $HY_dd4ab7441ca4a8bd58, $this->HY_635641851de68fd76e);
			return $HY_dd4ab7441ca4a8bd58;
		}
		else {
			$HY_bc854a58778efeb1d8 = mysql_fetch_array($HY_e6e8aeec74e7b16058);
			return $HY_bc854a58778efeb1d8["Auto_increment"];
		}
	}

	public function HY_54263f37c9e6868087($HY_350170bdac79f17e87 = 0, $HY_e05480f1d8d006378c = -1)
	{
		return " limit " . $HY_350170bdac79f17e87 . "," . $HY_e05480f1d8d006378c;
	}

	public function HY_2cccfa34f04efef216($HY_2b051c35c3cffb9826)
	{
		$HY_e6e8aeec74e7b16058 = $this->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826);

		if (empty($HY_e6e8aeec74e7b16058)) {
			return false;
		}
		else {
			return mysql_num_rows($HY_e6e8aeec74e7b16058);
		}
	}

	public function HY_57d828656e47d31c35($HY_979cf0d2e48507837f, $HY_8d612d3bdb75bd67f9, $HY_39cb94ec211b699c7d)
	{
		$HY_526724e9ef2ff3facf = "<img src=" . INSTALLPATH . "kss_inc/images/b_firstpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
		$HY_3e606ca684a525d70f = "<img src=" . INSTALLPATH . "kss_inc/images/b_prevpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
		$HY_5d57fefa7ab8bb2e40 = "<img src=" . INSTALLPATH . "kss_inc/images/b_nextpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
		$HY_7f767dc49ca83bbdb3 = "<img src=" . INSTALLPATH . "kss_inc/images/b_lastpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
		$HY_270ef5e043898196e4 = $this->HY_bcab6fd2b677a53645($HY_39cb94ec211b699c7d);
		$HY_9db413d5cc1af11aad = "";

		if ($HY_979cf0d2e48507837f <= 1) {
			$HY_9db413d5cc1af11aad .= "<a href='javascript:void(0);'>" . $HY_526724e9ef2ff3facf . "</a>&nbsp;&nbsp;";
			$HY_9db413d5cc1af11aad .= "<a href='javascript:void(0);'>" . $HY_3e606ca684a525d70f . "</a>&nbsp;";
		}
		else {
			$HY_9db413d5cc1af11aad .= "<a href='?page=1" . $HY_270ef5e043898196e4 . "'>" . $HY_526724e9ef2ff3facf . "</a>&nbsp;";
			$HY_9db413d5cc1af11aad .= "<a href='?page=" . ($HY_979cf0d2e48507837f - 1) . $HY_270ef5e043898196e4 . "'>" . $HY_3e606ca684a525d70f . "</a>&nbsp;";
		}

		for ($HY_fc12e3cf6043961fb3 = -3; $HY_fc12e3cf6043961fb3 <= 3; $HY_fc12e3cf6043961fb3++) {
			$HY_7bfd57604c24aad497 = $HY_fc12e3cf6043961fb3 + $HY_979cf0d2e48507837f;

			if ($HY_fc12e3cf6043961fb3 == 0) {
				$HY_9db413d5cc1af11aad .= "&nbsp;<a class=nowpage href='javascript:void(0);'>" . $HY_979cf0d2e48507837f . "</a>&nbsp;";
			}
			else if ($HY_fc12e3cf6043961fb3 < 0) {
				if (1 <= $HY_7bfd57604c24aad497) {
					$HY_9db413d5cc1af11aad .= "&nbsp;<a class='page_nav_a' href='?page=" . $HY_7bfd57604c24aad497 . $HY_270ef5e043898196e4 . "'>" . $HY_7bfd57604c24aad497 . "</a>&nbsp;";
				}
			}
			else if (0 < $HY_fc12e3cf6043961fb3) {
				if ($HY_7bfd57604c24aad497 <= $HY_8d612d3bdb75bd67f9) {
					$HY_9db413d5cc1af11aad .= "&nbsp;<a class='page_nav_a' href='?page=" . $HY_7bfd57604c24aad497 . $HY_270ef5e043898196e4 . "'>" . $HY_7bfd57604c24aad497 . "</a>&nbsp;";
				}
			}
		}

		if ($HY_8d612d3bdb75bd67f9 <= $HY_979cf0d2e48507837f) {
			$HY_9db413d5cc1af11aad .= "&nbsp;<a href='javascript:void(0);'>" . $HY_5d57fefa7ab8bb2e40 . "</a>&nbsp;";
			$HY_9db413d5cc1af11aad .= "&nbsp;<a href='javascript:void(0);'>" . $HY_7f767dc49ca83bbdb3 . "</a>&nbsp;";
		}
		else {
			$HY_9db413d5cc1af11aad .= "&nbsp;<a href='?page=" . ($HY_979cf0d2e48507837f + 1) . $HY_270ef5e043898196e4 . "'>" . $HY_5d57fefa7ab8bb2e40 . "</a>";
			$HY_9db413d5cc1af11aad .= "&nbsp;&nbsp;<a href='?page=" . $HY_8d612d3bdb75bd67f9 . $HY_270ef5e043898196e4 . "'>" . $HY_7f767dc49ca83bbdb3 . "</a>";
		}

		$HY_d86802ad9013c78edc = $HY_8d612d3bdb75bd67f9;

		if ($HY_8d612d3bdb75bd67f9 == 250000) {
			$HY_d86802ad9013c78edc = "?";
		}

		$HY_9db413d5cc1af11aad .= "&nbsp;共" . $HY_d86802ad9013c78edc . "页";
		return "<span id='page___nav'>" . $HY_9db413d5cc1af11aad . "</span>";
	}

	public function HY_bcab6fd2b677a53645($HY_39cb94ec211b699c7d)
	{
		$HY_f987a4b545af1c502b = "";

		if (is_array($HY_39cb94ec211b699c7d)) {
			foreach ($HY_39cb94ec211b699c7d as $HY_87390afa0185fdf28c => $HY_55fc1083ccd70490c6 ) {
				$HY_f987a4b545af1c502b .= "&amp;" . $HY_87390afa0185fdf28c . "=" . urlencode($HY_55fc1083ccd70490c6);
			}
		}

		return $HY_f987a4b545af1c502b;
	}

	public function HY_c35f2459d9a3a91111($HY_2b051c35c3cffb9826)
	{
		$HY_0b585285247831cc95 = mysql_query($HY_2b051c35c3cffb9826);

		if ($HY_0b585285247831cc95 !== false) {
			$HY_cad394884b1d015892 = array();

			while ($HY_bc854a58778efeb1d8 = mysql_fetch_row($HY_0b585285247831cc95)) {
				$HY_cad394884b1d015892[] = $HY_bc854a58778efeb1d8[0];
			}

			return $HY_cad394884b1d015892;
		}
		else {
			return false;
		}
	}

	public function HY_5851b177146d21e3f7($HY_e6e8aeec74e7b16058, $HY_796c27f722eefb29fa = 1)
	{
		return mysql_fetch_array($HY_e6e8aeec74e7b16058, $HY_796c27f722eefb29fa);
	}

	public function HY_8def866213a3d931dd()
	{
		return $this->HY_635641851de68fd76e ? mysql_error($this->HY_635641851de68fd76e) : mysql_error();
	}

	public function HY_79dd530b16454e1698()
	{
		return intval($this->HY_635641851de68fd76e ? mysql_errno($this->HY_635641851de68fd76e) : mysql_errno());
	}

	public function HY_b145448aa76bc95b5e($HY_e6e8aeec74e7b16058, $HY_bc854a58778efeb1d8)
	{
		$HY_e6e8aeec74e7b16058 = @mysql_result($HY_e6e8aeec74e7b16058, $HY_bc854a58778efeb1d8);
		return $HY_e6e8aeec74e7b16058;
	}

	public function HY_682f0885b2c0f545d3($HY_e6e8aeec74e7b16058)
	{
		$HY_e6e8aeec74e7b16058 = mysql_num_rows($HY_e6e8aeec74e7b16058);
		return $HY_e6e8aeec74e7b16058;
	}

	public function HY_65dc091d1c667828e9($HY_e6e8aeec74e7b16058)
	{
		return mysql_num_fields($HY_e6e8aeec74e7b16058);
	}

	public function HY_f3a3906e794027e690($HY_e6e8aeec74e7b16058)
	{
		return mysql_free_result($HY_e6e8aeec74e7b16058);
	}

	public function HY_e40b0b63957de4bc3b($HY_e6e8aeec74e7b16058)
	{
		$HY_e6e8aeec74e7b16058 = mysql_fetch_row($HY_e6e8aeec74e7b16058);
		return $HY_e6e8aeec74e7b16058;
	}

	public function HY_2097048eb5d590daef()
	{
		$HY_e6e8aeec74e7b16058 = $this->HY_4d9399bcf4aa0a4a50;
		return $HY_e6e8aeec74e7b16058;
	}

	public function HY_9ccb323bf85339eaed($HY_e6e8aeec74e7b16058)
	{
		return mysql_fetch_field($HY_e6e8aeec74e7b16058);
	}

	public function HY_9d8c1d95d42fe09592()
	{
		return mysql_get_server_info($this->HY_635641851de68fd76e);
	}

	public function HY_d3ead542a9f1e5cece()
	{
		return mysql_close($this->HY_635641851de68fd76e);
	}

	public function HY_2c717da4f817ef6def($HY_64a91b9d083315012e = "")
	{
	}
}

function HY_584c66aa6da51b7d8b($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}


?>
