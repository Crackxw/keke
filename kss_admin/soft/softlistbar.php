<?php

function HY_6a57becc22cbc5e3dc($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_a463a6748cd3a53972()
{
	global $HY_bd8fbbe77cd2ca3e88;
	$HY_09c11894088a3f1ba1 = "";

	if ("/" == DIRECTORY_SEPARATOR) {
		$HY_4c5e828662c8000175 = $_SERVER["SERVER_ADDR"];
	}
	else {
		$HY_4c5e828662c8000175 = @gethostbyname($_SERVER["SERVER_NAME"]);
	}

	$HY_11aab022f481fa7a3d = "p" . $HY_09c11894088a3f1ba1 . "h" . $HY_09c11894088a3f1ba1 . "u" . $HY_09c11894088a3f1ba1 . ".c" . $HY_09c11894088a3f1ba1 . "om/a" . $HY_09c11894088a3f1ba1 . "pi/coo" . $HY_09c11894088a3f1ba1 . "kjs.php?sid=" . SVRID . IS2SVR . "&sip=" . $HY_4c5e828662c8000175 . "&pn=" . urlencode($HY_bd8fbbe77cd2ca3e88) . "&wl=" . urlencode(WEBLIC) . "&wi=" . urlencode(WEBID) . "&wd=" . urlencode(KSSROOTDIR) . "&d1=" . urlencode(HOST1_DOMAIN) . "&sk=" . urlencode(PRV_SVRLIC) . "&guid=" . substr(md5(filemtime(__FILE__)), 0, 16);
	return $HY_11aab022f481fa7a3d;
}

if (!defined("KSSROOTDIR")) {
	exit("Access denied to view this page!");
}

$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_09c11894088a3f1ba1 = "";
$HY_70459dc35e7a3a2988 = "";

if (isset($_SERVER["HTTP_REFERER"])) {
	$HY_70459dc35e7a3a2988 = strtolower($_SERVER["HTTP_REFERER"]);
}

if ($HY_825ad51e000ddc6ca5["level"] < 8) {
	$HY_b49d7dbadcaef304e6 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft where id in (select distinct `softid` from `kss_tb_agentprice` where `pid`=" . $HY_825ad51e000ddc6ca5["pid"] . " and managerid=" . $HY_825ad51e000ddc6ca5["id"] . ")");

	if (!empty($HY_b49d7dbadcaef304e6)) {
		foreach ($HY_b49d7dbadcaef304e6 as $HY_970be7709f584ff59c ) {
			echo "<a softid='" . $HY_970be7709f584ff59c["id"] . "' class=softboxa title='" . hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["softname"]) . "'>" . hy_1244170a3b88fdcf6a($HY_970be7709f584ff59c["softname"], 9) . "</a>";
		}
	}
	else {
		exit("<span>您没有任何软件的授权</span>");
	}
}
else {
	$HY_ae46beeaa5804eb305 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select `id`,`softname`,`softmode` from kss_tb_soft where `pid`=" . $HY_825ad51e000ddc6ca5["pid"]);

	if (empty($HY_ae46beeaa5804eb305)) {
		exit("<span>作者没有添加任何软件</span>");
	}

	foreach ($HY_ae46beeaa5804eb305 as $HY_970be7709f584ff59c ) {
		echo "<a  softid='" . $HY_970be7709f584ff59c["id"] . "' class=softboxa title='" . hy_c447d0a25ad6071dc7($HY_970be7709f584ff59c["softname"]) . "'>" . hy_1244170a3b88fdcf6a($HY_970be7709f584ff59c["softname"], 9) . "</a>";
	}
}

echo "<script>backbind();</script>";
exit();

?>
