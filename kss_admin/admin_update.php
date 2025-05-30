<?php

function HY_66fe289f36cbeb2ebe($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_41736153877e4f0abe($HY_270ef5e043898196e4, $HY_e66357655126bb6964 = 30)
{
	$HY_7ecb634edd356ee247 = curl_init();
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_URL, $HY_270ef5e043898196e4);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_TIMEOUT, $HY_e66357655126bb6964);
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_HEADERFUNCTION, "read_header");
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_WRITEFUNCTION, "read_body");
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
	curl_setopt($HY_7ecb634edd356ee247, CURLOPT_HTTPHEADER, array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache"));
	$HY_73d03700723b9213e5 = curl_exec($HY_7ecb634edd356ee247);

	if (curl_errno($HY_7ecb634edd356ee247)) {
		$HY_b421d06d20579ca435 = curl_error($HY_7ecb634edd356ee247);
		curl_close($HY_7ecb634edd356ee247);
		if (($HY_e66357655126bb6964 == 1) && (stripos($HY_b421d06d20579ca435, "peration timed out after") != false)) {
			return "sendok";
		}

		$HY_73d03700723b9213e5 = "curlerr:" . $HY_b421d06d20579ca435;
	}
	else {
		curl_close($HY_7ecb634edd356ee247);
	}

	return $HY_73d03700723b9213e5;
}

function read_header($HY_7ecb634edd356ee247, $HY_aeaab34660b268d946)
{
	if (preg_match("/Content-Length: ([0-9]+)/i", $HY_aeaab34660b268d946, $HY_6a15e3cae56efdadef)) {
		echo "<script>$('#paksize').html('" . intval($HY_6a15e3cae56efdadef[1]) . "');</script>";
		echo "<!--  " . str_repeat(" ", 2000) . " -->\r\n";
		ob_flush();
		flush();
	}

	return strlen($HY_aeaab34660b268d946);
}

function read_body($HY_7ecb634edd356ee247, $HY_aeaab34660b268d946)
{
	global $HY_2af200abcad1860e61;
	global $HY_5934af669ff9940fe7;
	global $HY_36e6782fcc6c703207;

	if ($HY_2af200abcad1860e61 == 0) {
		if (substr($HY_aeaab34660b268d946, 0, 2) == "<!") {
			$HY_5934af669ff9940fe7 = 0;
		}
	}

	$HY_2af200abcad1860e61 = $HY_2af200abcad1860e61 + strlen($HY_aeaab34660b268d946);
	file_put_contents(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php", $HY_aeaab34660b268d946, FILE_APPEND);
	echo "<script>$('#downsize').html('" . $HY_2af200abcad1860e61 . "');</script>";
	echo "<!--  " . str_repeat(" ", 2000) . " -->\r\n";
	ob_flush();
	flush();
	return strlen($HY_aeaab34660b268d946);
}

exit();
require ("../kss_inc/inc.php");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(9);
$HY_b0a23355aa9ae9f34d = "服务端更新";
include ("c_head.php");
$HY_36e6782fcc6c703207 = "serverupdate";

if (isset($_GET["pakname"])) {
	$HY_36e6782fcc6c703207 = $_GET["pakname"];
}

if (isset($_GET["cver"])) {
	$HY_36e6782fcc6c703207 = $_GET["cryptver"];
}

if (!hy_8ea23c5626d65adda5("curl_init") || !hy_8ea23c5626d65adda5("curl_exec")) {
	$HY_fded1c74b28e876e6a = "<pre>";
	$HY_fded1c74b28e876e6a .= "当前服务器不支持curl，无法在线升级，请登陆登陆 http://user.hphu.com 手动升级：<br><br>没有user.hphu.com帐号的用户，请联系售后 QQ8511175</pre>";
	hy_bd307d155f057feb55($HY_fded1c74b28e876e6a);
}

if (is_file(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php")) {
	unlink(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php");

	for ($HY_fc12e3cf6043961fb3 = 0; $HY_fc12e3cf6043961fb3 < 100; $HY_fc12e3cf6043961fb3++) {
		if (is_file(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php")) {
			unlink(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php");
		}
	}

	if (is_file(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php")) {
		hy_bd307d155f057feb55("系统无法自动清理文件，请手动删除文件【" . KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php】再升级！");
	}
}

echo "<div style=\"width:850px;background:f6f6f6\">\r\n";
$HY_fded1c74b28e876e6a = "<pre>";
$HY_fded1c74b28e876e6a .= "如若远程自动下载升级包失败，请登陆登陆 http://user.hphu.com 手动升级：<br><br>没有user.hphu.com帐号的用户，请联系售后 QQ8511175</pre>";
echo $HY_fded1c74b28e876e6a;
echo "<div>升级包大小：<span id=paksize>未知</span> Byte</div>\r\n<div>已下载大小：<span id=downsize>0</span> Byte</div>\r\n";
$HY_2af200abcad1860e61 = 0;
$HY_5934af669ff9940fe7 = 1;
file_put_contents(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php", "");
$HY_4607a9126ace7ec399 = hy_41736153877e4f0abe("http://api.hphu.com/import/" . $HY_36e6782fcc6c703207 . ".php?phpver=" . PHP_VERSION . "&webid=" . WEBID . "&rid=" . time(), 300);

if ($HY_5934af669ff9940fe7 == 0) {
	@unlink(KSSROOTDIR . "kss_tool" . DIRECTORY_SEPARATOR . "_webup.php");
	exit("<p>升级包数据异常，请偿试手动更新。</p>");
}

echo "升级包下载完成，正在执行升级包升级服务端！<br>";
echo "</div>\r\n<iframe frameborder=0 framespacing=0 scrolling=\"no\" src=\"../kss_tool/_webup.php\" style=\"width:850px;height:400px;\"></iframe>\r\n</body></html>\r\n";
exit();

?>
