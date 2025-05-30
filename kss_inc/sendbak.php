<?php

require ("./inc.php");
require ("./sendmail.php");

if (BAKDATAMODE != 2) {
	exit("stopbak");
}

$HY_139909e3be34d35f14 = BINSIZE;

if (hy_8ea23c5626d65adda5("set_time_limit")) {
	set_time_limit(90);
	$HY_139909e3be34d35f14 = 500;
}

$HY_dce8088aa7714dd0e0 = hy_ba8120f86a7df1aecc("filename", "gp", "sql", "");
$HY_a6b6c691fc6e44bcbd = hy_ba8120f86a7df1aecc("begin", "gp", "sql", "");
$HY_729b908f51ba85e460 = hy_ba8120f86a7df1aecc("password", "gp", "sql", "");

if ($HY_729b908f51ba85e460 != MYSQLBAKPASSWORD) {
	exit("无权限访问备份接口");
}

$HY_73a7f26169a38e4795 = KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "databak" . DIRECTORY_SEPARATOR;
$HY_959d32d3b8a2f7d03a = filesize($HY_73a7f26169a38e4795 . $HY_dce8088aa7714dd0e0);
$HY_c5231369cc955d6ea4 = KSSLOGDIR . "mailbak_log.php";
if (!is_file($HY_c5231369cc955d6ea4) || (1048576 < filesize($HY_c5231369cc955d6ea4))) {
	$HY_e6b77c37c3104b66e7 = "?";
	$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
	file_put_contents($HY_c5231369cc955d6ea4, $HY_975f0ca9eb0aaa39ee . "\r\n");
}

if ($HY_a6b6c691fc6e44bcbd == 0) {
	file_put_contents($HY_c5231369cc955d6ea4, "\r\n\r\n" . date("Y-m-d H:i:s") . "\t\t邮件备份开始\r\n", FILE_APPEND);
}

if ($HY_959d32d3b8a2f7d03a <= $HY_a6b6c691fc6e44bcbd) {
	$HY_330a3af410f062112f = glob($HY_73a7f26169a38e4795 . "*.bin");

	foreach ($HY_330a3af410f062112f as $HY_ff78aa8a3e91f69b9f ) {
		@unlink($HY_ff78aa8a3e91f69b9f);
	}

	file_put_contents($HY_c5231369cc955d6ea4, date("Y-m-d H:i:s") . "\t\t发送备份的数据库到邮箱完成2\r\n", FILE_APPEND);
	exit();
}

$HY_67c423a6c617f13b9e = fopen($HY_73a7f26169a38e4795 . $HY_dce8088aa7714dd0e0, "r");
fseek($HY_67c423a6c617f13b9e, $HY_a6b6c691fc6e44bcbd);
$HY_26a5886619eca759a5 = fread($HY_67c423a6c617f13b9e, 1024 * $HY_139909e3be34d35f14);
fclose($HY_67c423a6c617f13b9e);
$HY_0435617f1dfb91d741 = $HY_73a7f26169a38e4795 . "tmpzip" . ($HY_a6b6c691fc6e44bcbd / (1024 * $HY_139909e3be34d35f14)) . ".bin";
file_put_contents($HY_0435617f1dfb91d741, $HY_26a5886619eca759a5);
$HY_ebf7d3f405d12ab375 = filesize($HY_0435617f1dfb91d741);
$HY_a1d8ed1c9d6a200420 = "";

if ($HY_ebf7d3f405d12ab375 < (1024 * $HY_139909e3be34d35f14)) {
	$HY_a1d8ed1c9d6a200420 = "请下载当日的所有备份邮件附件的bin文件<br>";
	$HY_a1d8ed1c9d6a200420 = "按下边方法可将bin文件合并<br>";
	$HY_a1d8ed1c9d6a200420 .= "将下边文本框内容复制到记事本另存为bat文件放到你下载的bin文件目录<br>";
	$HY_a1d8ed1c9d6a200420 .= "双击运行bat文件即可将所有bin文件合并成数据库zip包文件<br>\r\n";
	$HY_a1d8ed1c9d6a200420 .= "<textarea style='width:500px;height:100px'>\r\n";
	$HY_a1d8ed1c9d6a200420 .= "@echo off\r\n";
	$HY_36569a2df035fe5d84 = array();
	$HY_fc12e3cf6043961fb3 = 0;

	while (($HY_fc12e3cf6043961fb3 * 1024 * $HY_139909e3be34d35f14) < $HY_959d32d3b8a2f7d03a) {
		$HY_36569a2df035fe5d84[] = "tmpzip" . $HY_fc12e3cf6043961fb3 . ".bin";
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;
	}

	$HY_a1d8ed1c9d6a200420 .= "copy /b " . implode("+", $HY_36569a2df035fe5d84) . " " . $HY_dce8088aa7714dd0e0;
	$HY_a1d8ed1c9d6a200420 .= "</textarea>";
}

if (0 < $HY_ebf7d3f405d12ab375) {
	$HY_b145448aa76bc95b5e = bak_sendmail("主机" . $_SERVER["SERVER_NAME"] . "数据库" . $HY_e83242934e1fdef61f["dbname"] . "备份", "这是系统自动备份数据库的邮件<br>" . $HY_a1d8ed1c9d6a200420, QQMAIL2, QQMAIL, QQMAILPASSWORD, "", $HY_0435617f1dfb91d741);

	if ($HY_b145448aa76bc95b5e == true) {
		file_put_contents($HY_c5231369cc955d6ea4, date("Y-m-d H:i:s") . "\t\t发送bin数据包成功，开始位置：" . $HY_a6b6c691fc6e44bcbd . "，数据包大小：" . $HY_ebf7d3f405d12ab375 . " \r\n", FILE_APPEND);

		if ($HY_ebf7d3f405d12ab375 < (1024 * $HY_139909e3be34d35f14)) {
			$HY_330a3af410f062112f = glob($HY_73a7f26169a38e4795 . "*.bin");

			foreach ($HY_330a3af410f062112f as $HY_ff78aa8a3e91f69b9f ) {
				@unlink($HY_ff78aa8a3e91f69b9f);
			}

			file_put_contents($HY_c5231369cc955d6ea4, date("Y-m-d H:i:s") . "\t\t发送备份的数据库到邮箱完成1\r\n", FILE_APPEND);
			exit("ok" . $HY_139909e3be34d35f14);
		}

		$HY_6c370550d94caffe93 = array();
		$HY_6c370550d94caffe93["filename"] = $HY_dce8088aa7714dd0e0;
		$HY_6c370550d94caffe93["begin"] = $HY_a6b6c691fc6e44bcbd + (1024 * $HY_139909e3be34d35f14);
		$HY_6c370550d94caffe93["password"] = MYSQLBAKPASSWORD;
		$HY_b421d06d20579ca435 = hy_6daeecad978867d96f(hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/sendbak.php", $HY_6c370550d94caffe93, 1);
		exit("working" . $HY_139909e3be34d35f14);
	}
	else {
		file_put_contents($HY_c5231369cc955d6ea4, date("Y-m-d H:i:s") . "\t\t发送bin数据包失败，开始位置：" . $HY_a6b6c691fc6e44bcbd . "，数据包大小：" . $HY_ebf7d3f405d12ab375 . " \r\n", FILE_APPEND);
	}
}
else {
	$HY_330a3af410f062112f = glob($HY_73a7f26169a38e4795 . "*.bin");

	foreach ($HY_330a3af410f062112f as $HY_ff78aa8a3e91f69b9f ) {
		@unlink($HY_ff78aa8a3e91f69b9f);
	}

	file_put_contents($HY_c5231369cc955d6ea4, date("Y-m-d H:i:s") . "\t\t发送备份的数据库到邮箱完成3\r\n", FILE_APPEND);
}

?>
