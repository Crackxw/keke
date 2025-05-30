<?php

function HY_14c603b6770f212c91($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

if (!defined("KSSROOTDIR")) {
	exit("Access denied to view this page!");
}

$HY_80d2c8c607b8113d16[] = hy_c28ffe58a6314b1fd4();
$HY_82d6536edf704aabc5 = new mysql_cls();
$HY_825ad51e000ddc6ca5 = hy_242e1b6c92f22101bb(8);
$HY_c526045769477fea4c = file(KSSINCDIR . "signdata" . DIRECTORY_SEPARATOR . "_" . rand(1, 5) . ".php");
$HY_2ff9a360a3216622ba = trim($HY_c526045769477fea4c[rand(1, 100)]);
echo "signData签名数据每次取得的可能会不同，不影响使用！<br>\r\n<textarea style=\"width:450px;height:120px\">signData=\"";
echo $HY_2ff9a360a3216622ba;
echo "\"</textarea>\r\n<textarea style=\"display:none\" id=delphisdata>";
echo $HY_6d723edf57eb4d661a;
echo "</textarea>\r\n<textarea style=\"display:none\" id=vbsdata>";
echo $HY_27906bb77caf101ce7;
echo "</textarea>\r\n<textarea style=\"display:none\" id=vcsdata>";
echo $HY_a763d886962e3da3b4;
echo "</textarea>\r\n<textarea style=\"display:none\" id=esdata>";
echo $HY_60bd60135c0169b887;
echo "</textarea>\r\n";

?>
