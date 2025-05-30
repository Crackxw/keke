<?php

function HY_be3c5b35bb1b816eaf($HY_fc12e3cf6043961fb3 = 1)
{
	$HY_b82d21ca0e0bf53f05 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_94d81d317ac6f7e6a6 = ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3] << 4) + ($HY_3582284ada7175f52d[$HY_fc12e3cf6043961fb3 + 1] >> 4);
		$HY_fc12e3cf6043961fb3 = $HY_fc12e3cf6043961fb3 + 2;
	} while ($HY_fc12e3cf6043961fb3 < 28);
}

require ("../kss_inc/inc.php");
$HY_d762a272713d62924f = hy_ba8120f86a7df1aecc("action", "gp", "sql", "");
$HY_934420d37157dbd4eb = array("managerlogin" => "管理登录日志", "agentrmb" => "财务日志", "user_log" => "会员登陆日志", "userczlog" => "会员充值日志", "pubuser_log" => "公用帐号记录", "witesyncdata" => "待同步数据", "synclogs" => "数据同步日志", "outline" => "强制下线日志", "addcday" => "加时操作日志", "v8data" => "V8卡->新卡");
$HY_b07b5c485e84d4d218 = array("managerlogin" => "管理登录日志", "agentrmb" => "财务日志", "user_log" => "会员登陆日志", "userczlog" => "会员充值日志", "pubuser_log" => "公用帐号记录", "witesyncdata" => "待同步数据", "synclogs" => "数据同步日志", "outline" => "强制下线日志", "addcday" => "加时操作日志", "v8data" => "V8卡->新卡");

if (array_key_exists($HY_d762a272713d62924f, $HY_934420d37157dbd4eb)) {
	$HY_b0a23355aa9ae9f34d = $HY_934420d37157dbd4eb[$HY_d762a272713d62924f];
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "c_head.php");
}

if (array_key_exists($HY_d762a272713d62924f, $HY_b07b5c485e84d4d218)) {
	include (dirname(__FILE__) . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . $HY_d762a272713d62924f . ".php");
}
else {
	hy_bd307d155f057feb55("未知的action请求！");
}

?>
