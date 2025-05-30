<?php

function HY_a1a0302e910c8bd5a7($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
$HY_a3af5d94520f81d44f = hy_ba8120f86a7df1aecc("softcode", "gp", "int", 0);
$HY_734e18561c2534d6bf = hy_ba8120f86a7df1aecc("gdata", "gp", "int", 0);
if (($HY_a3af5d94520f81d44f == 0) || (strlen($HY_a3af5d94520f81d44f) != 7)) {
	if ($HY_734e18561c2534d6bf == 1) {
		exit("kssdata" . QQ102 . $HY_a3af5d94520f81d44f);
	}

	exit(QQ102);
}

$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
$HY_a3af5d94520f81d44f = (int) $HY_a3af5d94520f81d44f;
$HY_810d15d31408c982b2 = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_soft where `softcode`=" . $HY_a3af5d94520f81d44f);

if (empty($HY_810d15d31408c982b2)) {
	if ($HY_734e18561c2534d6bf == 1) {
		exit("kssdata" . QQ104);
	}

	exit(QQ104);
}

if ($HY_734e18561c2534d6bf == 1) {
	exit("kssdata" . $HY_810d15d31408c982b2["ismustupdate"] . ":|:" . $HY_810d15d31408c982b2["softversion"] . ":|:" . base64_decode($HY_810d15d31408c982b2["softdownurl"]) . ":|:" . base64_decode($HY_810d15d31408c982b2["softnotice"]) . ":|:" . base64_decode($HY_810d15d31408c982b2["updatelog"]) . ":|:");
}

echo "<html>\r\n<head>\r\n<title>软件更新日志</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n<style>\r\nbody{\r\nfont-family: Arial, Verdana, sans-serif;\r\nfont-size: 12px;\r\ncolor: #222;\r\nbackground-color: #fff;\r\n}\r\n</style>\r\n</head>\r\n<body>\r\n";
$HY_496ec1187cc0beff78 = base64_decode($HY_810d15d31408c982b2["softdownurl"]);

if (10 < strlen($HY_496ec1187cc0beff78)) {
	echo "<div><a href=" . $HY_496ec1187cc0beff78 . " target='_blank' style='color:#f00;font-weight:700'>如若自动更新失败，点击这里手动下载</a><br><br></div>";
}

echo "\r\n";
echo base64_decode($HY_810d15d31408c982b2["updatelog"]);
echo "</body>\r\n</html>";

?>
