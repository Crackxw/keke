<?php

function HY_fb4105e8e687cd11cf($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_7f5d2955db384641c8($HY_4607a9126ace7ec399, $HY_99083a46b5939ebd3c, $HY_55fc1083ccd70490c6)
{
	return preg_replace("/define\('" . $HY_99083a46b5939ebd3c . "','[^']*'\)/i", "define('" . $HY_99083a46b5939ebd3c . "','" . $HY_55fc1083ccd70490c6 . "')", $HY_4607a9126ace7ec399);
}

function HY_ba785b277c443b706c($HY_4607a9126ace7ec399, $HY_99083a46b5939ebd3c, $HY_55fc1083ccd70490c6)
{
	return preg_replace("/define\('" . $HY_99083a46b5939ebd3c . "',[^\)]*\)/i", "define('" . $HY_99083a46b5939ebd3c . "'," . $HY_55fc1083ccd70490c6 . ")", $HY_4607a9126ace7ec399);
}

require ("../kss_inc/inc.php");
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "gp", "sql", "");
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_795ed1aa368985c3aa = 0;
if (isset($_GET["t"]) && isset($_GET["t"])) {
	if (md5($_GET["t"] . "urlkeyIjjeruik987") != $_GET["m"]) {
		exit("<script>alert('err:url md5');</script>");
	}

	if ((time() < $_GET["t"]) || (20 < (time() - $_GET["t"]))) {
		exit("<script>alert('err:url time');</script>");
	}

	$HY_795ed1aa368985c3aa = 1;
	$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
}

if ($HY_795ed1aa368985c3aa == 0) {
	$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(9);
}

$HY_313e62709616f896c9 = file_get_contents("../kss_inc/_config.php");
$HY_05df9a1321d8c00baa = $HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b("select * from kss_tb_config where id=1");
$HY_313e62709616f896c9 = hy_ba785b277c443b706c($HY_313e62709616f896c9, "RSACRYPT", $HY_05df9a1321d8c00baa["s_rsamode"]);
$HY_313e62709616f896c9 = hy_7f5d2955db384641c8($HY_313e62709616f896c9, "RSA_PRVKEY", $HY_05df9a1321d8c00baa["s_rsaekey"]);
$HY_313e62709616f896c9 = hy_7f5d2955db384641c8($HY_313e62709616f896c9, "RSA_MODULES", $HY_05df9a1321d8c00baa["s_rsankey"]);
$HY_313e62709616f896c9 = file_put_contents("../kss_inc/_config.php", $HY_313e62709616f896c9);
$HY_f4d4f1cd859fe3ac56 = "?";
$HY_0b40aef78f71f71b23 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from kss_tb_soft");

if (!empty($HY_0b40aef78f71f71b23)) {
	foreach ($HY_0b40aef78f71f71b23 as $HY_970be7709f584ff59c ) {
		$HY_efb9cd0bb5a8a8a6bd = "<";
		$HY_efb9cd0bb5a8a8a6bd .= "?";
		$HY_efb9cd0bb5a8a8a6bd .= "php define('SOFTRSAMODE'," . $HY_970be7709f584ff59c["rsaenable"] . "); define('SOFTRSAEKEY','" . $HY_970be7709f584ff59c["rsaekey"] . "');  define('SOFTRSANKEY','" . $HY_970be7709f584ff59c["rsankey"] . "'); ?";
		$HY_efb9cd0bb5a8a8a6bd .= ">";
		file_put_contents("../kss_inc/advapi/rsa" . $HY_970be7709f584ff59c["softcode"] . ".php", $HY_efb9cd0bb5a8a8a6bd);
		$HY_3beba46bde354e6996 = "<" . $HY_f4d4f1cd859fe3ac56 . "php defined('YH2') or exit('Access denied to view this page!');\r\n" . base64_decode($HY_970be7709f584ff59c["advapi"]) . "\r\n" . $HY_f4d4f1cd859fe3ac56 . ">";
		file_put_contents("../kss_inc/advapi/" . $HY_970be7709f584ff59c["pid"] . $HY_970be7709f584ff59c["id"] . ".php", $HY_3beba46bde354e6996);
	}
}

if ($HY_795ed1aa368985c3aa == 0) {
	exit("全局RSA、软件私有RSA、软件ADVAPI缓存更新完毕！");
}

exit("<script>alert('重建缓存OK');</script>");

?>
