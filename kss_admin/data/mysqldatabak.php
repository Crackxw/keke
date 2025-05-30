<?php

function HY_c7805c2d4faa76371c($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

function HY_c23da586b2e2dccec1()
{
}

function HY_0a1b2067f991643454($HY_de13b17528948259e8, $HY_d556ec4cf69458ec97 = 0)
{
	global $HY_82d6536edf704aabc5;
	global $HY_1061b1fabd377baea6;
	global $HY_cf5570b92fbd118bc7;
	$HY_f0a6ad9e5704ad0a9c = "";
	$HY_3033f20beb8fa053e0 = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("SHOW CREATE TABLE `" . $HY_de13b17528948259e8 . "`");
	$HY_3b250fcfcdf5b450de = $HY_82d6536edf704aabc5->HY_e40b0b63957de4bc3b($HY_3033f20beb8fa053e0);
	$HY_f0a6ad9e5704ad0a9c = "DROP TABLE IF EXISTS `" . $HY_de13b17528948259e8 . "`;\r\n";
	$HY_17f8b32fad2869aa92 = str_replace("\r", "", $HY_3b250fcfcdf5b450de[1]);
	$HY_17f8b32fad2869aa92 = str_replace("\n", "\r\n", $HY_17f8b32fad2869aa92);
	$HY_f0a6ad9e5704ad0a9c .= $HY_17f8b32fad2869aa92 . ";\r\n";
	$HY_26af504ec5da498f72 = fopen($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql", "a");

	if ($HY_26af504ec5da498f72) {
		if (!fwrite($HY_26af504ec5da498f72, $HY_f0a6ad9e5704ad0a9c)) {
			hy_bd307d155f057feb55($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql文件不可写");
		}
	}
	else {
		hy_bd307d155f057feb55($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql文件打开或创建失败");
	}

	fclose($HY_26af504ec5da498f72);
	unset($HY_3033f20beb8fa053e0);
	unset($HY_3b250fcfcdf5b450de);

	if (!preg_match("/kss_z_log_|kss_tb_sql|kss_tb_log_task|kss_tb_lock/i", $HY_de13b17528948259e8)) {
		$HY_8cc862f6469e5943dc = "INSERT INTO `" . $HY_de13b17528948259e8 . "` (";
		$HY_bd4e19f11e035f572a = "";
		$HY_8711b0f13472c637bd = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058("SHOW COLUMNS FROM `" . $HY_de13b17528948259e8 . "`");

		while ($HY_bc854a58778efeb1d8 = mysql_fetch_array($HY_8711b0f13472c637bd, MYSQL_ASSOC)) {
			$HY_8cc862f6469e5943dc .= $HY_bd4e19f11e035f572a . "`" . $HY_bc854a58778efeb1d8["Field"] . "`";
			$HY_bd4e19f11e035f572a = ",";
		}

		$HY_8cc862f6469e5943dc .= ") VALUES \r\n";
		$HY_0245a2547c9ca9d30d = 0;
		$HY_23a8f4d050bef6dc9f = false;

		while ($HY_23a8f4d050bef6dc9f == false) {
			$HY_b169ba816b834677c0 = "";
			$HY_6db03adc55f6d00390 = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("select * from `" . $HY_de13b17528948259e8 . "` order by id asc LIMIT " . $HY_0245a2547c9ca9d30d . ",200", 2);

			if (!empty($HY_6db03adc55f6d00390)) {
				$HY_2d1e4f2ebfa795677b = count($HY_6db03adc55f6d00390);
				$HY_59365fea46b246f8c9 = ",\r\n";
				$HY_fc12e3cf6043961fb3 = 0;

				foreach ($HY_6db03adc55f6d00390 as $HY_970be7709f584ff59c ) {
					if ($HY_fc12e3cf6043961fb3 == $HY_2d1e4f2ebfa795677b - 1) {
						$HY_59365fea46b246f8c9 = ";\r\n";
					}

					$HY_b169ba816b834677c0 .= "(";
					$HY_2985572346dd87a7d9 = count($HY_970be7709f584ff59c);
					$HY_a5afe2551657aae844 = "";
					$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 1;

					for ($HY_c5d03c965a457403be = 0; $HY_c5d03c965a457403be < $HY_2985572346dd87a7d9; $HY_c5d03c965a457403be++) {
						if ($HY_970be7709f584ff59c[$HY_c5d03c965a457403be] === NULL) {
							$HY_b169ba816b834677c0 .= $HY_a5afe2551657aae844 . "NULL";
						}
						else {
							$HY_970be7709f584ff59c[$HY_c5d03c965a457403be] = str_replace("\\", "\\\\", $HY_970be7709f584ff59c[$HY_c5d03c965a457403be]);
							$HY_970be7709f584ff59c[$HY_c5d03c965a457403be] = str_replace("'", "\'", $HY_970be7709f584ff59c[$HY_c5d03c965a457403be]);
							$HY_970be7709f584ff59c[$HY_c5d03c965a457403be] = str_replace("\r", "\\r", $HY_970be7709f584ff59c[$HY_c5d03c965a457403be]);
							$HY_970be7709f584ff59c[$HY_c5d03c965a457403be] = str_replace("\n", "\\n", $HY_970be7709f584ff59c[$HY_c5d03c965a457403be]);
							$HY_b169ba816b834677c0 .= $HY_a5afe2551657aae844 . "'" . $HY_970be7709f584ff59c[$HY_c5d03c965a457403be] . "'";
						}

						$HY_a5afe2551657aae844 = ",";
					}

					$HY_b169ba816b834677c0 .= ")" . $HY_59365fea46b246f8c9;
				}

				unset($HY_6db03adc55f6d00390);
				$HY_b169ba816b834677c0 = $HY_8cc862f6469e5943dc . $HY_b169ba816b834677c0;

				if ($HY_2d1e4f2ebfa795677b < 200) {
					$HY_23a8f4d050bef6dc9f = true;
				}
				else {
					$HY_0245a2547c9ca9d30d = $HY_0245a2547c9ca9d30d + $HY_2d1e4f2ebfa795677b;
				}
			}
			else {
				$HY_23a8f4d050bef6dc9f = true;
			}

			if (!empty($HY_b169ba816b834677c0)) {
				file_put_contents($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql", $HY_b169ba816b834677c0, FILE_APPEND);
				unset($HY_b169ba816b834677c0);
			}
		}
	}
	else {
		file_put_contents($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql", "-- 表[" . $HY_de13b17528948259e8 . "]不需要同步数据 \r\n", FILE_APPEND);
		unset($HY_b169ba816b834677c0);
	}

	return "";
}

function HY_e7157cf278e1ce04b9()
{
	$HY_9960e0e43c75b1d2fc = "Unknown";
	$HY_cd0f909eb875ddd1de = $_SERVER["HTTP_USER_AGENT"];
	$HY_883c35703e277da928 = strpos($HY_cd0f909eb875ddd1de, "(") + 1;
	$HY_cb4961c192c657b664 = strpos($HY_cd0f909eb875ddd1de, ")") - $HY_883c35703e277da928;
	$HY_3be37533bf7d439892 = trim(substr($HY_cd0f909eb875ddd1de, $HY_883c35703e277da928, $HY_cb4961c192c657b664));
	$HY_e843c95a1528509626 = trim(substr($HY_cd0f909eb875ddd1de, $HY_883c35703e277da928 + $HY_cb4961c192c657b664 + 1));
	$HY_cd7b0071fac2fd6ff5 = explode(";", $HY_3be37533bf7d439892);

	if (count($HY_cd7b0071fac2fd6ff5) < 2) {
		return "unknow";
	}

	if (isset($HY_cd7b0071fac2fd6ff5[1])) {
		$HY_6d6a5784d1a5cbe1ac = trim($HY_cd7b0071fac2fd6ff5[1]);
	}
	else {
		return "unknow";
	}

	if (preg_match("/msie/i", $HY_6d6a5784d1a5cbe1ac)) {
		return "IE";
	}
	else {
		$HY_6d6a5784d1a5cbe1ac = explode(" ", $HY_e843c95a1528509626);

		if (count($HY_6d6a5784d1a5cbe1ac) < 2) {
			return "unknow";
		}

		$HY_94b751fdc8efe91fba = explode("/", $HY_6d6a5784d1a5cbe1ac[1]);
		return $HY_94b751fdc8efe91fba[0];
	}
}

if (hy_8ea23c5626d65adda5("set_time_limit")) {
	@set_time_limit(300);
}

defined("YH2") || exit("Access denied to view this page!");
$HY_cf5570b92fbd118bc7 = KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "databasecache" . DIRECTORY_SEPARATOR;
$HY_20d38f40f6a0b5b430 = KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "databak" . DIRECTORY_SEPARATOR;
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_6abe4922b3a2d15a6b = hy_ba8120f86a7df1aecc("pwd", "gp", "no", "");

if ($HY_6abe4922b3a2d15a6b == "") {
	$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(9);
}
else {
	ob_clean();
	if ((md5($HY_6abe4922b3a2d15a6b) == MYSQLBAKPASSWORD) || ($HY_6abe4922b3a2d15a6b == MYSQLBAKPASSWORD)) {
		if ($HY_6abe4922b3a2d15a6b == MYSQLBAKPASSWORD) {
			if (BAKDATAMODE == 0) {
				exit("未开启自动备份数据库！");
			}

			$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
			$HY_202bffafb2803c2afb = $HY_82d6536edf704aabc5->HY_e9890ac0540efd6af3("databaklock");
			$HY_4984ca3529723c4ade = hy_ba8120f86a7df1aecc("qz", "g", "int", 0);
			$HY_6d4ada6332f44bb9ab = file_get_contents($HY_20d38f40f6a0b5b430 . "index.html");
			if ((trim($HY_6d4ada6332f44bb9ab) == intval(date("d"))) && ($HY_4984ca3529723c4ade == 0)) {
				$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655("databaklock");
				exit("今天已经自动备份过数据库！");
			}

			if ($HY_4984ca3529723c4ade == 0) {
				file_put_contents($HY_20d38f40f6a0b5b430 . "index.html", intval(date("d")));
			}

			$HY_82d6536edf704aabc5->HY_a060a3d43d6a913655("databaklock");
		}
		else {
			$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
		}
	}
	else {
		exit("无权限访问备份接口！");
	}
}

if ($HY_d762a272713d62924f == "mysqldatabak_down") {
	$HY_73b29540e623fe80c8 = 0;
	$HY_8565d02e28ab63be16 = "";
	$HY_51dfbf89c1a4942f8e = hy_3c956344ed050d8c7e($HY_cf5570b92fbd118bc7, "zip");

	if (!empty($HY_51dfbf89c1a4942f8e)) {
		foreach ($HY_51dfbf89c1a4942f8e as $HY_ff78aa8a3e91f69b9f ) {
			if ((2048 < filesize($HY_ff78aa8a3e91f69b9f)) && ((time() - filectime($HY_ff78aa8a3e91f69b9f)) < 60)) {
				$HY_73b29540e623fe80c8 = 1;
				$HY_8565d02e28ab63be16 = $HY_ff78aa8a3e91f69b9f;
			}
			else {
				@unlink($HY_ff78aa8a3e91f69b9f);
			}
		}
	}

	$HY_51dfbf89c1a4942f8e = hy_3c956344ed050d8c7e($HY_20d38f40f6a0b5b430, "zip");

	if (!empty($HY_51dfbf89c1a4942f8e)) {
		foreach ($HY_51dfbf89c1a4942f8e as $HY_ff78aa8a3e91f69b9f ) {
			$HY_a7abff56ed6b71b83a = substr(basename($HY_ff78aa8a3e91f69b9f), 0, 10);

			if ((86400 * 7) < (time() - strtotime($HY_a7abff56ed6b71b83a))) {
				@unlink($HY_ff78aa8a3e91f69b9f);
			}
		}
	}

	if ($HY_73b29540e623fe80c8 == 1) {
		header("Content-Type: application/zip");
		header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Content-Disposition: attachment; filename=" . YH2 . basename($HY_8565d02e28ab63be16) . YH2);

		if (hy_e7157cf278e1ce04b9() == "IE") {
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Pragma: public");
			header("Content-Length: " . filesize($HY_8565d02e28ab63be16));
		}
		else {
			header("Pragma: no-cache");
			header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			header("Content-Length: " . filesize($HY_8565d02e28ab63be16));
		}

		echo file_get_contents($HY_8565d02e28ab63be16);
		exit();
	}

	$HY_1061b1fabd377baea6 = date("Y-m-d_H-i-s") . hy_6bfeee86cee6e24af6(32);
	$HY_05eba0d3594125f418 = "";
	$HY_cc48e8bd31b11792d7 = "-- KSS网络用户管理系统备份数据\r\n";
	$HY_cc48e8bd31b11792d7 .= "-- \r\n";
	$HY_cc48e8bd31b11792d7 .= "-- 备份日期: " . date("Y年 m月 d日 H:i") . "\r\n";
	$HY_cc48e8bd31b11792d7 .= "-- 主机: " . $_SERVER["SERVER_NAME"] . "\r\n";
	$HY_cc48e8bd31b11792d7 .= "-- 数据库: " . $HY_e83242934e1fdef61f["dbname"] . "\r\n";
	$HY_cc48e8bd31b11792d7 .= "-- --------------------------------------------------------\r\n\r\n";
	$HY_cc48e8bd31b11792d7 .= "SET NAMES 'utf8';\r\n\r\n";
	file_put_contents($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql", $HY_cc48e8bd31b11792d7);
	$HY_b145448aa76bc95b5e = $HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0("SHOW TABLE STATUS ");

	foreach ($HY_b145448aa76bc95b5e as $HY_970be7709f584ff59c ) {
		if ("kss_" == substr($HY_970be7709f584ff59c["Name"], 0, 4)) {
			hy_0a1b2067f991643454($HY_970be7709f584ff59c["Name"]);
		}
	}

	include (KSSINCDIR . "zip.cls.php");
	$HY_aa5b042857c5e92d2a = new PHPzip();

	if ($HY_aa5b042857c5e92d2a->startfile($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip")) {
		$HY_aa5b042857c5e92d2a->addfile(file_get_contents($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql"), $HY_1061b1fabd377baea6 . ".sql");
		$HY_aa5b042857c5e92d2a->createfile();
	}

	$HY_61e5a0e49c361f116a = 0;
	if (is_file($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip") && (1024 < filesize($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip"))) {
		$HY_61e5a0e49c361f116a = 1;
	}

	ob_clean();

	if ($HY_61e5a0e49c361f116a == 1) {
		unlink($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql");

		if ($HY_6abe4922b3a2d15a6b == MYSQLBAKPASSWORD) {
			@copy($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip", $HY_20d38f40f6a0b5b430 . $HY_1061b1fabd377baea6 . ".zip");
			@unlink($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip");

			if (BAKDATAMODE < 2) {
				exit("bakok");
			}

			$HY_6c370550d94caffe93 = array();
			$HY_6c370550d94caffe93["filename"] = $HY_1061b1fabd377baea6 . ".zip";
			$HY_6c370550d94caffe93["begin"] = 0;
			$HY_6c370550d94caffe93["password"] = MYSQLBAKPASSWORD;
			$HY_7b0391503f73755d87 = hy_6daeecad978867d96f(hy_5170dc4897c581d8f2() . INSTALLPATH . "kss_inc/sendbak.php", $HY_6c370550d94caffe93, 1);

			if (substr($HY_7b0391503f73755d87, 0, 8) == "curlerr:") {
				exit(substr($HY_7b0391503f73755d87, 8));
			}

			exit("正在备份数据库……");
		}

		$HY_f8208e22e80f04f795 = file_get_contents($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip");
		$HY_1b25137b44a8943554 = filesize($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".zip");
		header("Content-Type: application/zip");
	}
	else {
		$HY_f8208e22e80f04f795 = file_get_contents($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql");
		$HY_1b25137b44a8943554 = filesize($HY_cf5570b92fbd118bc7 . $HY_1061b1fabd377baea6 . ".sql");
		header("Content-Type: application/zip");
	}

	header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Content-Disposition: attachment; filename=" . YH2 . $HY_1061b1fabd377baea6 . ".zip" . YH2);

	if (hy_e7157cf278e1ce04b9() == "IE") {
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Pragma: public");
		header("Content-Length: " . $HY_1b25137b44a8943554);
	}
	else {
		header("Pragma: no-cache");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Content-Length: " . $HY_1b25137b44a8943554);
	}

	echo $HY_f8208e22e80f04f795;
	exit();
}

$HY_51dfbf89c1a4942f8e = hy_3c956344ed050d8c7e(KSSROOTDIR . "kss_logs" . DIRECTORY_SEPARATOR . "databasecache" . DIRECTORY_SEPARATOR, "zip");

if (!empty($HY_51dfbf89c1a4942f8e)) {
	foreach ($HY_51dfbf89c1a4942f8e as $HY_ff78aa8a3e91f69b9f ) {
		if (180 < (time() - filectime($HY_ff78aa8a3e91f69b9f))) {
			@unlink($HY_ff78aa8a3e91f69b9f);
		}
	}
}

echo "<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"input[clear=1]\").bind(\"click\",function(e){\r\nMouse(e);\nvar op=$(this).val();\r\n$.ajax({\r\nurl: 'admin_data.php?action=mysqldatayh&isajax=1&op='+encodeURIComponent(op),\r\ncache: false,\r\nsuccess: function(html){\r\nif(html.substr(0,7)=='clearok'){\r\nmview(html.substr(7));\t\r\n}else{\r\nmalert(html);\r\n}\r\n},\r\nerror:function(XMLHttpRequest, textStatus, errorThrown) {\r\nalert(ourl)\r\n} \r\n});\r\n});\r\n});\r\n</script>\r\n<div class=\"edittable\">\r\n<table class=\"edittable_th4\" width=\"97%\" height=\"35\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n<tr>\r\n<td width=8 class=\"edittable_th1\">&nbsp;</td>\r\n<td width=250  class=\"edittable_th2\">数据库备份</td>\r\n<td width=8 class=\"edittable_th3\">&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td width=6 class=\"edittable_th5\">&nbsp;</td>\r\n</tr>\r\n</table><br><br>\r\n\r\n<div>\r\n\r\n<table border=0  cellpadding=\"10\" cellspacing=\"10\" >\r\n";
if ((IS2SVR == 1) && (SVRID == 1)) {
	echo "<tr><td >如果你本次备份是想手动同步数据库到备服，请先执行：<input type='button' clear='1' malt='清空所有kss_z_log_*_*表的所有数据' value='手动同步前清理数据' class='submitbtnn'></td></tr>\r\n";
}

echo "<tr><td >立即备份数据库到你当前使用的电脑：<input id=\"downsql\" type=button class=submitbtn onclick=window.open(\"admin_data.php?action=mysqldatabak_down&cmdtime=\"+sTime()) value=\"开始备份\"></td></tr>\r\n<tr><td >每天自动备份数据库到你当前使用电脑的小工具：<input id='downbaktools' type=button class=submitbtn onclick=window.open(\"down_mysqldata_tool.rar\") value=点击下载></td></tr>\r\n<tr><td >自动备份API接口：<u>";
echo hy_5170dc4897c581d8f2() . $_SERVER["PHP_SELF"];
echo "?action=mysqldatabak_down&pwd=您设置的数据库备份密码</u></td></tr>\r\n\r\n<tr>\r\n<td>使用备份的数据恢复数据库，请参见官方网站文档</td>\r\n</tr>\r\n</table>\r\n</div>\r\n\r\n</div>\r\n</body>\r\n</html>";

?>
