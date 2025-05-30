<?php

function HY_e7d7b9578ce9402a97($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("../kss_inc/inc.php");
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "gp", "sql", "softlist");
$HY_934420d37157dbd4eb = array("softlist" => "软件列表", "addsoft" => "添加或编辑软件", "keygroup" => "软件卡类设置");
$HY_b07b5c485e84d4d218 = array("softlist" => "软件列表", "addsoft" => "添加或编辑软件", "addsoft_save" => "保存软件", "delsoft" => "删除软件", "softlistbar" => "小软件列表", "keygroup" => "软件卡类设置", "radvapi" => "更新advapi", "signdata" => "取签名数据");

if (array_key_exists($HY_d762a272713d62924f, $HY_934420d37157dbd4eb)) {
	$HY_b0a23355aa9ae9f34d = $HY_934420d37157dbd4eb[$HY_d762a272713d62924f];
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
}

if (array_key_exists($HY_d762a272713d62924f, $HY_b07b5c485e84d4d218)) {
	$HY_029edc4ee795ba9f1c = explode("_", $HY_d762a272713d62924f);
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "soft" . DIRECTORY_SEPARATOR . $HY_029edc4ee795ba9f1c[0] . ".php");
}
else {
	hy_bd307d155f057feb55("未知的action请求！");
}

?>
