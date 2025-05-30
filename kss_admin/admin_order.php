<?php

function HY_5416f95479ba357f49($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("../kss_inc/inc.php");
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "gp", "sql", "softlist");
$HY_934420d37157dbd4eb = array("orderlist" => "订单列表");
$HY_b07b5c485e84d4d218 = array("orderlist" => "订单列表", "vieworder" => "查看订单");

if (array_key_exists($HY_d762a272713d62924f, $HY_934420d37157dbd4eb)) {
	$HY_b0a23355aa9ae9f34d = $HY_934420d37157dbd4eb[$HY_d762a272713d62924f];
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
}

if (array_key_exists($HY_d762a272713d62924f, $HY_b07b5c485e84d4d218)) {
	$HY_029edc4ee795ba9f1c = explode("_", $HY_d762a272713d62924f);
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "order" . DIRECTORY_SEPARATOR . $HY_029edc4ee795ba9f1c[0] . ".php");
}
else {
	hy_bd307d155f057feb55("未知的action请求！");
}

?>
