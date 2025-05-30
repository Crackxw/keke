<?php

function HY_f0c06fbba077871883($HY_5c9dc90df0df2239e7 = 1)
{
	$HY_242f4c4fdc956ad556 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_b3b74b098d8128ac66 = ($HY_c991813330bd1a98ed[$HY_5c9dc90df0df2239e7] << 4) + ($HY_c991813330bd1a98ed[$HY_5c9dc90df0df2239e7 + 1] >> 4);
		$HY_5c9dc90df0df2239e7 = $HY_5c9dc90df0df2239e7 + 2;
	} while ($HY_5c9dc90df0df2239e7 < 28);
}

function HY_4fc8fec40695af6c32($HY_aa7f93b873a07974e3, &$HY_dca51e3799833bca10, $HY_5d333936d2f3464141 = "GBK")
{
	$HY_614ae02b107253655b = "dFavUzx7vD5k";

	if (trim($HY_aa7f93b873a07974e3) == "") {
		return "";
	}

	$HY_63b5d5a67c8f893aa5 = hy_60b16fe77d53b1950e($HY_aa7f93b873a07974e3, "utf-8", $HY_5d333936d2f3464141);
	$HY_a3c07e2b26b6bcf0ee = hy_60b16fe77d53b1950e($HY_614ae02b107253655b, "utf-8", $HY_5d333936d2f3464141);
	$HY_b83b483df74b4db4df = "phQTIMvx58ZF47yPbKatk_Bmu0WHVi6JGnEYlrN3RgcDjCs|qzwSf21UdO9AoXeL";
	$HY_66eb587bc7c548b44f = strlen($HY_63b5d5a67c8f893aa5);

	if (($HY_66eb587bc7c548b44f % 3) != 0) {
		$HY_9210984049c8a7531a = 3 - ($HY_66eb587bc7c548b44f % 3);
		$HY_63b5d5a67c8f893aa5 .= str_repeat("0", $HY_9210984049c8a7531a);
		$HY_66eb587bc7c548b44f = $HY_66eb587bc7c548b44f + $HY_9210984049c8a7531a;
	}
	else {
		$HY_9210984049c8a7531a = 0;
	}

	if ($HY_dca51e3799833bca10 == 0) {
		$HY_dca51e3799833bca10 = rand(26, 254);
	}

	$HY_b83b483df74b4db4df = substr($HY_b83b483df74b4db4df, ($HY_dca51e3799833bca10 % 60) + 1, 63 - ($HY_dca51e3799833bca10 % 60)) . substr($HY_b83b483df74b4db4df, 0, ($HY_dca51e3799833bca10 % 60) + 1);
	$HY_97f4c3e5865f50a369 = unpack("C*", $HY_b83b483df74b4db4df);
	$HY_dd1b15f5629d5cbac4 = unpack("C*", $HY_a3c07e2b26b6bcf0ee);
	$HY_f26ba8b6516d831695 = unpack("C*", HTTPKEY);
	$HY_7f62bee576f4a62215 = unpack("C*", $HY_63b5d5a67c8f893aa5);
	$HY_26f1b3e1bfb7d1d33a = strtoupper(dechex(intval($HY_dca51e3799833bca10 . $HY_9210984049c8a7531a)));
	$HY_006b36c5065b4ecc2e = strlen($HY_a3c07e2b26b6bcf0ee);
	$HY_c47f2f39bb5322d969 = intval(($HY_66eb587bc7c548b44f * 4) / 3);
	$HY_3294e7f362da7486da = unpack("C*", str_repeat(chr(0), $HY_66eb587bc7c548b44f));
	$HY_3294e7f362da7486da[0] = 0;
	$HY_956e0e8ea474f093ec = $HY_dca51e3799833bca10 % 243;

	for ($HY_5c9dc90df0df2239e7 = 1; $HY_5c9dc90df0df2239e7 < ($HY_66eb587bc7c548b44f + 1); $HY_5c9dc90df0df2239e7++) {
		$HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] = $HY_7f62bee576f4a62215[$HY_5c9dc90df0df2239e7] ^ $HY_dd1b15f5629d5cbac4[(($HY_5c9dc90df0df2239e7 - 1) % $HY_006b36c5065b4ecc2e) + 1];

		for ($HY_bba8ebd7893f59c996 = 1; $HY_bba8ebd7893f59c996 < 12; $HY_bba8ebd7893f59c996++) {
			$HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] = $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] ^ ($HY_956e0e8ea474f093ec + $HY_bba8ebd7893f59c996);
		}
	}

	for ($HY_5c9dc90df0df2239e7 = 1; $HY_5c9dc90df0df2239e7 < ($HY_66eb587bc7c548b44f + 1); $HY_5c9dc90df0df2239e7++) {
		$HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] = $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] ^ $HY_f26ba8b6516d831695[(($HY_5c9dc90df0df2239e7 - 1) % 64) + 1];
	}

	for ($HY_bba8ebd7893f59c996 = 1; $HY_bba8ebd7893f59c996 < 12; $HY_bba8ebd7893f59c996++) {
		for ($HY_5c9dc90df0df2239e7 = 1; $HY_5c9dc90df0df2239e7 < ($HY_66eb587bc7c548b44f + 1); $HY_5c9dc90df0df2239e7++) {
			$HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] = $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] ^ $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7 - 1];
		}
	}

	$HY_5c9dc90df0df2239e7 = 1;

	do {
		$HY_bba8ebd7893f59c996 = intval($HY_5c9dc90df0df2239e7 / 3) * 4;
		$HY_abdf9e7ac6af0d2494 = ($HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] << 4) + ($HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7 + 1] >> 4);
		$HY_e1ec46c7163c1efe29 = (($HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7 + 1] & 15) << 8) + $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7 + 2];
		$HY_26f1b3e1bfb7d1d33a .= chr($HY_97f4c3e5865f50a369[intval($HY_abdf9e7ac6af0d2494 / 64) + 1]) . chr($HY_97f4c3e5865f50a369[($HY_abdf9e7ac6af0d2494 % 64) + 1]) . chr($HY_97f4c3e5865f50a369[intval($HY_e1ec46c7163c1efe29 / 64) + 1]) . chr($HY_97f4c3e5865f50a369[($HY_e1ec46c7163c1efe29 % 64) + 1]);
		$HY_5c9dc90df0df2239e7 = $HY_5c9dc90df0df2239e7 + 3;
	} while ($HY_5c9dc90df0df2239e7 < ($HY_66eb587bc7c548b44f + 1));

	return $HY_26f1b3e1bfb7d1d33a;
}

function HY_622972f1441b79f5f1($HY_63b5d5a67c8f893aa5, &$HY_dca51e3799833bca10, $HY_5d333936d2f3464141 = "GBK")
{
	if (trim($HY_63b5d5a67c8f893aa5) == "") {
		return "";
	}

	$HY_a3c07e2b26b6bcf0ee = "dFavUzx7vD5k";
	$HY_b83b483df74b4db4df = "phQTIMvx58ZF47yPbKatk_Bmu0WHVi6JGnEYlrN3RgcDjCs|qzwSf21UdO9AoXeL";
	$HY_726ae36b541864e804 = hexdec(substr($HY_63b5d5a67c8f893aa5, 0, 3));

	if ($HY_dca51e3799833bca10 == 0) {
		$HY_dca51e3799833bca10 = intval(substr($HY_726ae36b541864e804, 0, strlen($HY_726ae36b541864e804) - 1));
	}

	$HY_9210984049c8a7531a = intval(substr($HY_726ae36b541864e804, strlen($HY_726ae36b541864e804) - 1, 1));
	$HY_b83b483df74b4db4df = substr($HY_b83b483df74b4db4df, ($HY_dca51e3799833bca10 % 60) + 1, 63 - ($HY_dca51e3799833bca10 % 60)) . substr($HY_b83b483df74b4db4df, 0, ($HY_dca51e3799833bca10 % 60) + 1);
	$HY_97f4c3e5865f50a369 = unpack("C*", $HY_b83b483df74b4db4df);
	$HY_dd1b15f5629d5cbac4 = unpack("C*", $HY_a3c07e2b26b6bcf0ee);
	$HY_f26ba8b6516d831695 = unpack("C*", HTTPKEY);
	$HY_66eb587bc7c548b44f = strlen($HY_63b5d5a67c8f893aa5) - 3;
	$HY_006b36c5065b4ecc2e = strlen($HY_a3c07e2b26b6bcf0ee);
	$HY_63b5d5a67c8f893aa5 = substr($HY_63b5d5a67c8f893aa5, 3, $HY_66eb587bc7c548b44f);
	$HY_8a798230b6d9ccb5d5 = intval(($HY_66eb587bc7c548b44f * 3) / 4);
	$HY_7f62bee576f4a62215 = unpack("C*", $HY_63b5d5a67c8f893aa5);
	$HY_3294e7f362da7486da = unpack("C*", str_repeat(chr(0), $HY_8a798230b6d9ccb5d5));
	$HY_3294e7f362da7486da[0] = 0;
	$HY_5c9dc90df0df2239e7 = 1;

	do {
		$HY_bba8ebd7893f59c996 = intval($HY_5c9dc90df0df2239e7 / 4) * 3;
		$HY_903c3a361866307ba4 = (strpos($HY_b83b483df74b4db4df, $HY_7f62bee576f4a62215[$HY_5c9dc90df0df2239e7]) * 64) + strpos($HY_b83b483df74b4db4df, $HY_7f62bee576f4a62215[$HY_5c9dc90df0df2239e7 + 1]);
		$HY_987a619fc3869dd3a7 = (strpos($HY_b83b483df74b4db4df, $HY_7f62bee576f4a62215[$HY_5c9dc90df0df2239e7 + 2]) * 64) + strpos($HY_b83b483df74b4db4df, $HY_7f62bee576f4a62215[$HY_5c9dc90df0df2239e7 + 3]);
		$HY_3294e7f362da7486da[$HY_bba8ebd7893f59c996 + 1] = $HY_903c3a361866307ba4 >> 4;
		$HY_3294e7f362da7486da[$HY_bba8ebd7893f59c996 + 2] = (($HY_903c3a361866307ba4 & 15) << 4) + ($HY_987a619fc3869dd3a7 >> 8);
		$HY_3294e7f362da7486da[$HY_bba8ebd7893f59c996 + 3] = $HY_987a619fc3869dd3a7 & 255;
		$HY_5c9dc90df0df2239e7 = $HY_5c9dc90df0df2239e7 + 4;
	} while ($HY_5c9dc90df0df2239e7 < $HY_66eb587bc7c548b44f);

	for ($HY_bba8ebd7893f59c996 = 1; $HY_bba8ebd7893f59c996 < 12; $HY_bba8ebd7893f59c996++) {
		for ($HY_5c9dc90df0df2239e7 = 1; $HY_5c9dc90df0df2239e7 < ($HY_8a798230b6d9ccb5d5 + 1); $HY_5c9dc90df0df2239e7++) {
			$HY_3294e7f362da7486da[($HY_8a798230b6d9ccb5d5 - $HY_5c9dc90df0df2239e7) + 1] = $HY_3294e7f362da7486da[($HY_8a798230b6d9ccb5d5 - $HY_5c9dc90df0df2239e7) + 1] ^ $HY_3294e7f362da7486da[$HY_8a798230b6d9ccb5d5 - $HY_5c9dc90df0df2239e7];
		}
	}

	for ($HY_5c9dc90df0df2239e7 = 1; $HY_5c9dc90df0df2239e7 < ($HY_8a798230b6d9ccb5d5 + 1); $HY_5c9dc90df0df2239e7++) {
		$HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] = $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] ^ $HY_f26ba8b6516d831695[(($HY_5c9dc90df0df2239e7 - 1) % 64) + 1];
	}

	$HY_26f1b3e1bfb7d1d33a = "";
	$HY_956e0e8ea474f093ec = $HY_dca51e3799833bca10 % 243;

	for ($HY_5c9dc90df0df2239e7 = 1; $HY_5c9dc90df0df2239e7 < ($HY_8a798230b6d9ccb5d5 + 1); $HY_5c9dc90df0df2239e7++) {
		for ($HY_bba8ebd7893f59c996 = 0; $HY_bba8ebd7893f59c996 < 11; $HY_bba8ebd7893f59c996++) {
			$HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] = $HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] ^ (($HY_956e0e8ea474f093ec + 11) - $HY_bba8ebd7893f59c996);
		}

		$HY_26f1b3e1bfb7d1d33a .= chr($HY_3294e7f362da7486da[$HY_5c9dc90df0df2239e7] ^ $HY_dd1b15f5629d5cbac4[(($HY_5c9dc90df0df2239e7 - 1) % $HY_006b36c5065b4ecc2e) + 1]);
	}

	$HY_26f1b3e1bfb7d1d33a = hy_60b16fe77d53b1950e(substr($HY_26f1b3e1bfb7d1d33a, 0, strlen($HY_26f1b3e1bfb7d1d33a) - $HY_9210984049c8a7531a), $HY_5d333936d2f3464141, "utf-8");
	return $HY_26f1b3e1bfb7d1d33a;
}

function hy_e04dfe04a243f84e77($HY_4c17aae9123af4f65a, $HY_37d7570d333a46ac26, $HY_a81e257669bbc0ac09, $HY_a7e5305b4655398409, $HY_14e96949f1cbef9bcf)
{
	global $HY_9e7b0aeb9d3285c43c;
	global $HY_70d869ca4bb6bef92f;
	$HY_3c5f264d95d50f0059 = array("EEE9D3EE113E");

	if (in_array($HY_14e96949f1cbef9bcf, $HY_3c5f264d95d50f0059)) {
		$HY_9e7b0aeb9d3285c43c->HY_e908acda61e846cbec("update kss_z_user_" . $HY_4c17aae9123af4f65a . " set islock=3,intro='该用户使用调试工具登陆' where username='" . $HY_a81e257669bbc0ac09 . "' and password='" . $HY_a7e5305b4655398409 . "'", "sync");
		$HY_9e7b0aeb9d3285c43c->HY_e908acda61e846cbec("update kss_tb_soft set `mac_blacklist`=`mac_blacklist`+'," . $HY_70d869ca4bb6bef92f . "' where softcode=" . $HY_37d7570d333a46ac26, "sync");
		exit("crypteno129");
	}
}

include ("../kss_inc/signdata/crypt93.php");

?>
