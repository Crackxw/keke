<?php

function HY_e95b54f6100f877b13($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_f9887838d65dea7c65($HY_5c8e8ebdbf276bb863, $HY_adfed9c2e13a3b63f8)
{
	global $HY_2bd07a2196204f3cad;
	$HY_5c8e8ebdbf276bb863 = (int) round($HY_5c8e8ebdbf276bb863, 0);

	if ($HY_5c8e8ebdbf276bb863 == 0) {
		$HY_5c8e8ebdbf276bb863 = 1;
	}

	if (30 <= $HY_5c8e8ebdbf276bb863) {
		$HY_2f9b5e0f6fa7275165 = ((int) $HY_5c8e8ebdbf276bb863 / 30) * $HY_2bd07a2196204f3cad["30"];
		$HY_2f9b5e0f6fa7275165 = $HY_2f9b5e0f6fa7275165 + (((int) $HY_5c8e8ebdbf276bb863 % 30) * $HY_2bd07a2196204f3cad["b1"]);
	}
	else if (20 < $HY_5c8e8ebdbf276bb863) {
		$HY_2f9b5e0f6fa7275165 = 0.8;
	}
	else if (10 < $HY_5c8e8ebdbf276bb863) {
		$HY_2f9b5e0f6fa7275165 = 0.6;
	}
	else if (7 <= $HY_5c8e8ebdbf276bb863) {
		$HY_2f9b5e0f6fa7275165 = 0.4;
	}
	else {
		$HY_2f9b5e0f6fa7275165 = $HY_5c8e8ebdbf276bb863 * $HY_2bd07a2196204f3cad["a1"];
	}

	return round($HY_2f9b5e0f6fa7275165 * $HY_adfed9c2e13a3b63f8, 2);
}

function error_report_fun($HY_79dd530b16454e1698, $HY_dfb6820a73cd9a022f, $HY_759798a253a6baead6, $HY_798f005d842acbb20f)
{
	global $HY_1276480e4aa8dc6b22;

	if (preg_match("/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\.rmdir/i", $HY_dfb6820a73cd9a022f)) {
		return true;
	}

	$HY_1276480e4aa8dc6b22 = true;
	$HY_759798a253a6baead6 = str_replace(KSSROOTDIR, "", $HY_759798a253a6baead6);
	$HY_dfb6820a73cd9a022f = str_replace(KSSROOTDIR, "", $HY_dfb6820a73cd9a022f);

	if (stripos($HY_dfb6820a73cd9a022f, "mysql_") !== false) {
		$HY_dfb6820a73cd9a022f = preg_replace("/\[.*\]/", "", $HY_dfb6820a73cd9a022f);
		$HY_dfb6820a73cd9a022f = preg_replace("/\'[^\']*\'/", "'***'", $HY_dfb6820a73cd9a022f);
	}

	$HY_dfb6820a73cd9a022f = str_replace(ADMINFOLDER, "***", $HY_dfb6820a73cd9a022f);
	$HY_8240f677cf01dabac4 = array(1 => "E_ERROR", 2 => "E_WARNING", 4 => "E_PARSE", 8 => "E_NOTICE", 16 => "E_CORE_ERROR", 32 => "E_CORE_WARNING", 64 => "E_COMPILE_ERROR", 128 => "E_COMPILE_WARNING", 256 => "E_USER_ERROR", 512 => "E_USER_WARNING", 1024 => "E_USER_NOTICE", 2048 => "E_STRICT", 4096 => "E_RECOVERABLE_ERROR", 30719 => "E_ALL");
	$HY_1b2de0d9208ba0bcbd = "<b>" . $HY_8240f677cf01dabac4[$HY_79dd530b16454e1698] . " : " . $HY_dfb6820a73cd9a022f . " in " . $HY_759798a253a6baead6 . " on line " . $HY_798f005d842acbb20f . "</b>";

	if (1 < PHPERROUPUT) {
		$HY_c5231369cc955d6ea4 = KSSLOGDIR . "err_log.php";

		if (is_file($HY_c5231369cc955d6ea4)) {
			if (1048576 < filesize($HY_c5231369cc955d6ea4)) {
				$HY_e6b77c37c3104b66e7 = "?";
				$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
				file_put_contents($HY_c5231369cc955d6ea4, $HY_975f0ca9eb0aaa39ee . date("Y-m-d H:i:s") . "\t" . $_SERVER["PHP_SELF"] . "\r\n\t" . $HY_1b2de0d9208ba0bcbd . "\r\n\r\n");
			}
			else {
				file_put_contents($HY_c5231369cc955d6ea4, date("Y-m-d H:i:s") . "\t" . $_SERVER["PHP_SELF"] . "\r\n\t" . $HY_1b2de0d9208ba0bcbd . "\r\n\r\n", FILE_APPEND);
			}
		}
		else {
			$HY_e6b77c37c3104b66e7 = "?";
			$HY_975f0ca9eb0aaa39ee = "<" . $HY_e6b77c37c3104b66e7 . "php exit('Access denied to view this page!');" . $HY_e6b77c37c3104b66e7 . ">\r\n";
			file_put_contents($HY_c5231369cc955d6ea4, $HY_975f0ca9eb0aaa39ee . date("Y-m-d H:i:s") . "\t" . $_SERVER["PHP_SELF"] . "\r\n\t" . $HY_1b2de0d9208ba0bcbd . "\r\n\r\n");
		}
	}

	if (stripos($HY_dfb6820a73cd9a022f, "mysql_") !== false) {
		return true;
	}

	if ((PHPERROUPUT == 1) || (PHPERROUPUT == 3)) {
		echo $HY_1b2de0d9208ba0bcbd;
	}

	exit();
}

function HY_eb430b8c32f4118ef7($HY_2f8bed6ff1de4c24da = "index.php", $HY_8df22c04952dd5666e = 1)
{
	$HY_7652edf2f704b58f3b = array("crypteno501" => "服务端需要重新登记：重新申请时系列号应为Y开头！", "crypteno502" => "服务端需要重新登记：授权非法005！", "crypteno503" => "服务端需要重新登记：服务器日期小于授权日期！", "crypteno504" => "服务端需要重新登记：授权已到期！", "crypteno505" => "服务端需要重新登记：授权主机名或端口变动！", "crypteno506" => "服务端需要重新登记：主机环境变动项目N！", "crypteno507" => "服务端需要重新登记：主机环境变动项目D！", "crypteno508" => "服务端需要重新登记：授权串自效验失败！", "crypteno509" => "服务器的日期不正确，请纠正！", "crypteno510" => "服务器需要安装登记才可以使用9.5.*.*及以后的版本客户端！", "crypteno511" => "服务端源码已安全生命周期，请更新！");

	//if (strtotime("2016-12-30 12:00:00") < time()) {//屏蔽 服务端源码已安全生命周期，请更新！
	if (strtotime(date("2037-12-01 12:00:00")) < time()){//屏蔽 服务端源码已安全生命周期，请更新！
		if ($HY_2f8bed6ff1de4c24da == "index.php") {
			return $HY_7652edf2f704b58f3b["crypteno511"];
		}

		if ($HY_2f8bed6ff1de4c24da == "api.php") {
			if ($HY_8df22c04952dd5666e == 1) {
				exit("crypteno511");
			}

			exit("kssdata" . $HY_7652edf2f704b58f3b["crypteno511"]);
		}
	}

	if (($HY_2f8bed6ff1de4c24da == "index.php") && (strtotime(date("2037-12-01 12:00:00")) < time())) {
		echo "alert('当前服务端源码将于2016-12-30失效，请尽快更新服务端。\\r\\n\\r\\n点击确定后，检查是否有新版本，如若没有新版本，请联系可可网络验证售后发布新版本的升级包！');";
	}

	return true;
}

function HY_9886e6c1facd13c62b($HY_2f8bed6ff1de4c24da, $HY_8df22c04952dd5666e)
{
	$HY_3d596d6ba84db4acb1 = "已正式登记授权";
	return true;
}

function HY_0108ebb5d9320ee08e()
{
}

error_reporting(30719);
@ini_set("display_errors", "On");

if (stripos($_SERVER["PHP_SELF"], "/io.php") === false) {
	session_start();
}

@ob_start();
@header("content-type:text/html;charset=utf-8");

if (function_exists("date_default_timezone_set")) {
	date_default_timezone_set("PRC");
}
//屏蔽版本限制
/*
if (5.3 < (substr(PHP_VERSION, 0, 3) * 1)) {
	exit("Does not support this version of PHP" . PHP_VERSION);
}
*/
$HY_a9bd054236ed9e584c = false;
$HY_3d596d6ba84db4acb1 = "已正式登记授权";
define("YH2", chr(34));
define("YH1", chr(39));
define("PETIME", 2110000000);
$HY_3fb3415441688353e5 = array(9 => "管理员", 8 => "作者", 7 => "总代理", 6 => "代理");
$HY_2bd07a2196204f3cad = array("a1" => 0.05, "b1" => 0.03, "7" => 0.4, "30" => 1);
define("KSSROOTDIR", str_ireplace("kss_inc", "", dirname(__FILE__)));
define("KSSINCDIR", dirname(__FILE__) . DIRECTORY_SEPARATOR);
define("KSSLOGDIR", KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR);
$HY_c896b9940487a44396 = array(
	"index.php"            => array("52" => "1894f2b32256909d9294943fc85bcd08", "53" => "36670ad7b2ae142c6d83650fe8e8ed22"),
	"admin.php"            => array("52" => "7c6927fd723bde6ce052a25cdbc1e4e7", "53" => "68af86ed15052a066483a0bd4e8d9a6f"),
	"admin_soft.php"       => array("52" => "70a20307a46e96ee528c5a67bb117cda", "53" => "d3768107c409e6026b73013159c3fd32"),
	"soft/addsoft.php"     => array("52" => "871bf827f4cd282562667f8a58a7b3ea", "53" => "b388e6c98cadb02d9097122924ac998f"),
	"soft/softlistbar.php" => array("52" => "e6ef82ff83f683131c8f7b9ab4ac8156", "53" => "1b7e1ff329ffdc2908938d4452386028"),
	"../kss_api/io.php"    => array("52" => "45d259322e38ee56d27f6e6ece4f2ae8", "53" => "67633467eb05e1afd846f9993936b9f7")
	);
require (KSSINCDIR . "version.php");
require (KSSINCDIR . "_config.php");
set_error_handler("error_report_fun");
define("SYNC1URL", "http://" . HOST1_DOMAIN . INSTALLPATH . "kss_inc/sync_mysql.php");
define("SYNC2URL", "http://" . HOST2_DOMAIN . INSTALLPATH . "kss_inc/sync_mysql.php");
define("FORM_URL", "http://" . (SVRID == 1 ? HOST1_DOMAIN : HOST2_DOMAIN) . INSTALLPATH . ADMINFOLDER . "/");
require (KSSINCDIR . "function.php");
require (KSSINCDIR . "db_function.php");
require (KSSINCDIR . "mysql.cls.php");
$HY_bd8fbbe77cd2ca3e88 = "notfind";

if (hy_8ea23c5626d65adda5("php_uname")) {
	$HY_bd8fbbe77cd2ca3e88 = php_uname();
}
else {
	$HY_b72d7f9238fc01f231 = array("admin_homepage.php", "api.php", "admin_lic.php", "admin_soft.php", "io.php");
	$HY_eb873ec8a2ee781c35 = substr($_SERVER["SCRIPT_NAME"], strripos($_SERVER["SCRIPT_NAME"], "/") + 1);

	if (in_array($HY_eb873ec8a2ee781c35, $HY_b72d7f9238fc01f231)) {
		if (hy_8ea23c5626d65adda5("phpinfo")) {
			phpinfo();
			$HY_119910cf6ebc4415f9 = ob_get_contents();
			ob_end_clean();
			$HY_1134e87f4c7592160e = stripos($HY_119910cf6ebc4415f9, "system");
			$HY_0673346be44d7c72e0 = substr($HY_119910cf6ebc4415f9, $HY_1134e87f4c7592160e + 15, 200);
			$HY_119910cf6ebc4415f9 = "";
			$HY_d7a6e98b06f97ec0b7 = stripos($HY_0673346be44d7c72e0, ">");
			$HY_f31ee888f23773bedb = stripos($HY_0673346be44d7c72e0, "<");
			$HY_bd8fbbe77cd2ca3e88 = trim(substr($HY_0673346be44d7c72e0, $HY_d7a6e98b06f97ec0b7 + 1, $HY_f31ee888f23773bedb - $HY_d7a6e98b06f97ec0b7 - 1));
		}
	}
}

$HY_063c1f55878eb36837 = hy_095bbb306fa343426f(1);
$HY_db2c979ce78a26ded8 = array();

if (SVRID == 1) {
	$HY_e83242934e1fdef61f = array("dbhost" => MYSQL1HostNameOrIp, "dbuser" => MYSQL1UserName, "dbpass" => MYSQL1Password, "dbname" => MYSQL1DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 0);
	$HY_de7cf704210fc885cc = array("dbhost" => MYSQL2HostNameOrIp, "dbuser" => MYSQL2UserName, "dbpass" => MYSQL2Password, "dbname" => MYSQL2DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 1);
}
else {
	$HY_e83242934e1fdef61f = array("dbhost" => MYSQL2HostNameOrIp, "dbuser" => MYSQL2UserName, "dbpass" => MYSQL2Password, "dbname" => MYSQL2DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 0);
	$HY_de7cf704210fc885cc = array("dbhost" => MYSQL1HostNameOrIp, "dbuser" => MYSQL1UserName, "dbpass" => MYSQL1Password, "dbname" => MYSQL1DataBaseName, "dbcharset" => "utf8", "pconnect" => 0, "newlink" => 1);
}

?>
