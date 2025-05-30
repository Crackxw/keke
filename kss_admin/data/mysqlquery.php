<?php

function HY_f497d5e4ef4a47e987($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

defined("YH2") || exit("Access denied to view this page!");
hy_af470935131a2269b8();
$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(9);
hy_3df13eaab5a6295338();
$HY_040af70e369786c2e4 = hy_ba8120f86a7df1aecc("op", "gp", "sql", "");

if ($HY_040af70e369786c2e4 == "执行语句") {
	if (md5($_POST["syspassword"]) != MYSQLBAKPASSWORD) {
		hy_bd307d155f057feb55("ok安全接口密码错误!");
	}

	$HY_2325e5d520c6fdb530 = $_POST["base64sql"];

	if (get_magic_quotes_gpc()) {
		$HY_2325e5d520c6fdb530 = stripslashes($HY_2325e5d520c6fdb530);
	}

	$HY_2325e5d520c6fdb530 = base64_decode($HY_2325e5d520c6fdb530);
	$HY_2325e5d520c6fdb530 = str_replace("\;", "┾", $HY_2325e5d520c6fdb530);
	$HY_2325e5d520c6fdb530 = str_replace("\r", "", $HY_2325e5d520c6fdb530);
	$HY_2325e5d520c6fdb530 = str_replace("\n", "", $HY_2325e5d520c6fdb530);
	$HY_2325e5d520c6fdb530 = preg_replace("/time:\((\d{4}-\d{1,2}-\d{1,2} \d{1,2}(:\d{1,2}){1,2})\)/ie", "strtotime('\$1')", $HY_2325e5d520c6fdb530);

	if (substr($HY_2325e5d520c6fdb530, 0, 6) == "select") {
		$HY_0b585285247831cc95 = mysql_query($HY_2325e5d520c6fdb530);

		if ($HY_0b585285247831cc95 !== false) {
			ob_clean();
			echo "yes<table class=listtable border=0 cellspacing=1 cellpadding=3 align=center>\r\n";
			$HY_fc12e3cf6043961fb3 = 0;
			echo "\t<tr>\r\n";

			while ($HY_fc12e3cf6043961fb3 < mysql_num_fields($HY_0b585285247831cc95)) {
				echo "<td bgcolor=#f6f6f6>" . mysql_field_name($HY_0b585285247831cc95, $HY_fc12e3cf6043961fb3) . "</td>";
				$HY_fc12e3cf6043961fb3++;
			}

			echo "\t</tr>\r\n";

			while ($HY_a2c631eee87742f39d = mysql_fetch_array($HY_0b585285247831cc95, 1)) {
				echo "\t<tr>\r\n";

				foreach ($HY_a2c631eee87742f39d as $HY_a1e3f7957087c929e0 ) {
					echo "\t\t<td bgcolor=#ffffff  nowrap='nowrap'>" . substr($HY_a1e3f7957087c929e0, 0, 32) . "</td>\r\n";
				}

				echo "\t</tr>\r\n";
			}

			echo "</table>";
			mysql_free_result($HY_0b585285247831cc95);
		}
		else {
			echo "查询错误" . $HY_2325e5d520c6fdb530;
		}

		exit();
	}
	else {
		$HY_4989b92f3c5bddc7e4 = explode(";", $HY_2325e5d520c6fdb530);
		$HY_49c1c4f0adaa157d41 = "ok<textarea style='width:650px;height:100px'>";

		foreach ($HY_4989b92f3c5bddc7e4 as $HY_970be7709f584ff59c ) {
			if (trim($HY_970be7709f584ff59c) != "") {
				$HY_970be7709f584ff59c = str_replace("┾", ";", trim($HY_970be7709f584ff59c));
				$HY_76e20cf55607b0db63 = $HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c, "sync");

				if ($HY_76e20cf55607b0db63 !== false) {
					$HY_49c1c4f0adaa157d41 = $HY_49c1c4f0adaa157d41 . "Yes->&nbsp;&nbsp;&nbsp;&nbsp;" . $HY_970be7709f584ff59c . "\r\n";
				}
				else {
					$HY_49c1c4f0adaa157d41 = $HY_49c1c4f0adaa157d41 . "Err->&nbsp;&nbsp;&nbsp;&nbsp;" . $HY_970be7709f584ff59c . "\r\n";
				}
			}
		}

		$HY_49c1c4f0adaa157d41 .= "</textarea>";
		hy_bd307d155f057feb55($HY_49c1c4f0adaa157d41);
	}
}

echo "<script type=\"text/javascript\" src=\"";
echo INSTALLPATH;
echo "kss_inc/js/base64.js\" charset=\"utf-8\"></script>\r\n<script type=\"text/javascript\">\r\n$(document).ready(function() { \r\n$(\"#mysqlquery\").bind(\"click\",function(e){\r\n$(\"#base64sql\").val(Base64.encode($(\"#sqltext\").val()));\r\n});\r\n\r\n$('#mysqlquery').ajaxForm({\r\nbeforeSubmit:function (arr, \$form, options) {\r\nreturn true;\r\n},\r\nsuccess:function (responseText, statusText, xhr, \$form) {\r\nif(responseText.substr(0,2)=='ok'){\r\nmalert(responseText.substr(2),'执行SQL语句结果',700,150);\r\n}else if(responseText.substr(0,3)=='yes'){\r\n$(\"#sqllisttable\").html(responseText.substr(3));\r\n}else{\r\nmalert(responseText);\r\n}\r\n},\r\nerror:function(){isclickadd=0;alert(\"error!\");}\r\n});\t\r\n});\r\n\r\n</script>\t\r\n\r\n<table class=\"listtable\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\" width=\"99%\">\r\n<tr class=trd>\r\n<td valign=top >MySQL语句【多条语句请用;号分隔，如果语句中有;号请用\;表示】<br><textarea id=\"sqltext\" name=\"sqltext\" style=\"width:98%;height:100px\" /></textarea></td>\r\n</tr>\r\n<tr class=trd>\r\n<td>\r\n<form action=\"?action=mysqlquery\" method=\"post\" target=\"_self\" id=\"mysqlquery\" name=\"mysqlquery\">\r\n效验全安接口密码：<input type=password name='syspassword' value=''>\t执行SQL必须效验安全接口密码<br>\t\t\r\n<input type=\"hidden\" alt=\"ajax提交必须添加此项\" name=\"isajax\" value=\"1\" />\t\t\r\n<input type=\"hidden\" name=\"base64sql\" id=\"base64sql\" value=\"\" />\r\n&nbsp;&nbsp;<input type='submit' name='op' id='query' malt='执行输入框中的SQL语句' value='执行语句' class='submitbtn'>\r\n</form>\r\n&nbsp;&nbsp;支持update、delete和简单的select语句，如果你有备服该处执行的update与delete语句也会自动在备服执行。<br><br>\r\n<span style=\"color:red\"><b>软件ID</b>：软件列表页面第一列的蓝色数字即为软件ID</span><br><br>\r\n下边一条select语名可取登陆次数最多的前50个用户名，只用改蓝色文字部份即可<br>\r\n\nselect username as 用户名,activetimes as 登陆次数  from kss_z_user_10000_<span style=\"color:blue\">软件ID</span> order by activetimes desc limit 0,50<br>\nselect username as 用户名,keyextattr as 附属性  from kss_z_user_10000_<span style=\"color:blue\">软件ID</span>  order by keyextattr desc limit 0,50 <br>\n\narray(`锁` => `islock`, `锁定` => `islock`, `标签` => `tag`, `备注` => `intro`, `天数` => `cday`, `点数` => `points`, `开始时间` => `starttime`, `到期时间` => `endtime`, `附属性` => `keyextattr`, `付属性` => `keyextattr`, `机器码` => `pccode`, `私有数据` => `updata`, `绑定信息` => `bdinfo`);\n<br>\n\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n<div id=sqllisttable></div>";

?>
