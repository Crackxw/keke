<?php

function HY_724a7a98a408d58163($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(6);
$HY_7e3958ca51847ad2e2 = hy_ba8120f86a7df1aecc("orderid", "gp", "sql", 0);
$HY_a8a615f5542bb84e7b = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_order where ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

if (empty($HY_a8a615f5542bb84e7b)) {
	exit("err ordernum.");
}

if ($HY_a8a615f5542bb84e7b["managerid"] != $HY_825ad51e000ddc6ca5["id"]) {
	exit("err userid.");
}

$HY_201600258c70617431 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_keyset where id=" . $HY_a8a615f5542bb84e7b["keygroupid"]);

if (empty($HY_201600258c70617431)) {
	exit("err keygroupid.");
}

$HY_5ece58199252929265 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_z_key_" . $HY_a8a615f5542bb84e7b["pid"] . "_" . $HY_a8a615f5542bb84e7b["softid"] . " where ordernum='" . $HY_7e3958ca51847ad2e2 . "'");

if (empty($HY_5ece58199252929265)) {
	exit("err notkey");
}

$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where id=" . $HY_a8a615f5542bb84e7b["softid"]);
$HY_dce8088aa7714dd0e0 = "key_" . hy_6bfeee86cee6e24af6(15) . ".txt";
$HY_8788074e991b880003 = "../kss_logs/" . $HY_dce8088aa7714dd0e0;
file_put_contents($HY_8788074e991b880003, "卡名：" . $HY_201600258c70617431["keyname"] . "\r\n");
file_put_contents($HY_8788074e991b880003, "天数：" . $HY_201600258c70617431["cday"] . "\r\n", FILE_APPEND);

if ($HY_201600258c70617431["points"] != 0) {
	file_put_contents($HY_8788074e991b880003, "点数：" . $HY_201600258c70617431["points"] . "\r\n", FILE_APPEND);
}

if ($HY_201600258c70617431["linknum"] != 1) {
	file_put_contents($HY_8788074e991b880003, "通道数：" . $HY_201600258c70617431["linknum"] . "\r\n", FILE_APPEND);
}

if ($HY_201600258c70617431["extattr1"] != "") {
	file_put_contents($HY_8788074e991b880003, "附属性：" . $HY_201600258c70617431["extattr1"] . "\r\n", FILE_APPEND);
}

$HY_833ad506b8e560f238 = "\r\n\r\n\r\n";

foreach ($HY_5ece58199252929265 as $HY_970be7709f584ff59c ) {
	$HY_833ad506b8e560f238 .= $HY_970be7709f584ff59c["keyfix"] . $HY_970be7709f584ff59c["keys"] . $HY_970be7709f584ff59c["keyspassword"] . "\r\n";
}

file_put_contents($HY_8788074e991b880003, $HY_833ad506b8e560f238, FILE_APPEND);
ob_clean();
$HY_f8208e22e80f04f795 = file_get_contents($HY_8788074e991b880003);
$HY_5629b8d2bef3328791 = filesize($HY_8788074e991b880003);
header("Content-Type: text/plain");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Disposition: attachment; filename=" . YH2 . $HY_810d15d31408c982b2["softname"] . "_" . $HY_201600258c70617431["keyname"] . "_" . $HY_a8a615f5542bb84e7b["keycount"] . "张_" . $HY_7e3958ca51847ad2e2 . ".txt" . YH2);
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Length: " . $HY_5629b8d2bef3328791);
echo $HY_f8208e22e80f04f795;
unlink($HY_8788074e991b880003);
exit();

?>
