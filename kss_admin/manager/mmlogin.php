<?php

function HY_9770d0b860f9ad8172($HY_fc12e3cf6043961fb3 = 1)
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
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);

if ($HY_825ad51e000ddc6ca5["level"] != 9) {
	hy_bd307d155f057feb55("只有管理员可以无密登入其它帐号");
}

ob_clean();
$HY_365893812300a028d8 = hy_ba8120f86a7df1aecc("id", "gp", "int", 0);
$HY_970be7709f584ff59c = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_manager where `id`=" . $HY_365893812300a028d8);

if (empty($HY_970be7709f584ff59c)) {
	hy_bd307d155f057feb55("没找到该用户");
}

if ($HY_970be7709f584ff59c["level"] < 8) {
	hy_bd307d155f057feb55("目标帐号不是作者帐号，不能登入查看！");
}

$HY_a2c2d4a90a9d6060a3 = $HY_970be7709f584ff59c["linecode"];
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("update kss_tb_manager set linecode='" . $HY_a2c2d4a90a9d6060a3 . "' where id=" . $HY_365893812300a028d8, "notsync");
$_SESSION["kss_manager"] = $HY_970be7709f584ff59c["id"] . "," . $HY_970be7709f584ff59c["username"] . "," . $HY_970be7709f584ff59c["password"] . "," . $HY_a2c2d4a90a9d6060a3;

if (BINDIP == 1) {
	$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"] . hy_cb508d896b2e2fcfba());
}
else {
	$_SESSION["kss_safe"] = md5(COOKKEY . $_SERVER["HTTP_USER_AGENT"] . $_SESSION["kss_manager"]);
}

$HY_4607a9126ace7ec399 = (isset($_SESSION["kss_mmlogin"]) ? $_SESSION["kss_mmlogin"] : NULL);

if (empty($HY_4607a9126ace7ec399)) {
	$_SESSION["kss_mmlogin"] = md5($HY_825ad51e000ddc6ca5["username"] . $HY_825ad51e000ddc6ca5["password"]);
}

echo "<script>alert('login ok!');window.top.location=window.top.location+'1';</script>";
exit();

?>
