<?php

function HY_faf1f853099dcf6a72($HY_ca813622bba21699ac = 1)
{
	$HY_7d09ec05a54c42cf9f = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_4374734d04f9c915c6 = ($HY_7eb1a661a6f4867214[$HY_ca813622bba21699ac] << 4) + ($HY_7eb1a661a6f4867214[$HY_ca813622bba21699ac + 1] >> 4);
		$HY_ca813622bba21699ac += 2;
	} while ($HY_ca813622bba21699ac < 28);
}

function HY_df8fb5929e03bb4889($HY_e24cfe50ca4a8d5f4a, &$HY_660f0045c29a19b23e, $HY_03bcb4d7226fc43fba = "GBK")
{
	$HY_1b823a25277e990697 = "http://" . $_SERVER["HTTP_HOST"];

	if (trim($HY_e24cfe50ca4a8d5f4a) == "") {
		return "";
	}

	$HY_80f54d614c170cf040 = hy_3cb1a2c4a0f976a50e($HY_e24cfe50ca4a8d5f4a, "utf-8", $HY_03bcb4d7226fc43fba);
	$HY_aa28ac714688994d1d = hy_3cb1a2c4a0f976a50e($HY_1b823a25277e990697, "utf-8", $HY_03bcb4d7226fc43fba);
	$HY_2856e036e6313df0e5 = "phQTIMvx58ZF47yPbKatk_Bmu0WHVi6JGnEYlrN3RgcDjCs|qzwSf21UdO9AoXeL";
	$HY_89302a633518c545a3 = strlen($HY_80f54d614c170cf040);

	if (($HY_89302a633518c545a3 % 3) != 0) {
		$HY_4d5b877b1d42c3ee4b = 3 - ($HY_89302a633518c545a3 % 3);
		$HY_80f54d614c170cf040 .= str_repeat("0", $HY_4d5b877b1d42c3ee4b);
		$HY_89302a633518c545a3 += $HY_4d5b877b1d42c3ee4b;
	}
	else {
		$HY_4d5b877b1d42c3ee4b = 0;
	}

	if ($HY_660f0045c29a19b23e == 0) {
		$HY_660f0045c29a19b23e = rand(26, 254);
	}

	$HY_2856e036e6313df0e5 = substr($HY_2856e036e6313df0e5, ($HY_660f0045c29a19b23e % 60) + 1, 63 - ($HY_660f0045c29a19b23e % 60)) . substr($HY_2856e036e6313df0e5, 0, ($HY_660f0045c29a19b23e % 60) + 1);
	$HY_071cfe585eceb78318 = unpack("C*", $HY_2856e036e6313df0e5);
	$HY_f8162cb9bc89816172 = unpack("C*", $HY_aa28ac714688994d1d);
	$HY_c9e1eba8066e1b6bd8 = unpack("C*", HTTPKEY);
	$HY_ecccea099c794a4ee6 = unpack("C*", $HY_80f54d614c170cf040);
	$HY_39945e665b8905935c = strtoupper(dechex(intval($HY_660f0045c29a19b23e . $HY_4d5b877b1d42c3ee4b)));
	$HY_36d395d2b7b005d2a1 = strlen($HY_aa28ac714688994d1d);
	$HY_cf2f544ad03fe50a27 = intval(($HY_89302a633518c545a3 * 4) / 3);
	$HY_78d593c73b1898c2a9 = unpack("C*", str_repeat(chr(0), $HY_89302a633518c545a3));
	$HY_78d593c73b1898c2a9[0] = 0;
	$HY_a2b2525eb538388220 = $HY_660f0045c29a19b23e % 238;

	for ($HY_ca813622bba21699ac = 1; $HY_ca813622bba21699ac < ($HY_89302a633518c545a3 + 1); ++$HY_ca813622bba21699ac) {
		$HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] = $HY_ecccea099c794a4ee6[$HY_ca813622bba21699ac] ^ $HY_f8162cb9bc89816172[(($HY_ca813622bba21699ac - 1) % $HY_36d395d2b7b005d2a1) + 1];

		for ($HY_3a9f95cd61bca0257c = 1; $HY_3a9f95cd61bca0257c < 17; ++$HY_3a9f95cd61bca0257c) {
			$HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] = $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] ^ ($HY_a2b2525eb538388220 + $HY_3a9f95cd61bca0257c);
		}
	}

	for ($HY_ca813622bba21699ac = 1; $HY_ca813622bba21699ac < ($HY_89302a633518c545a3 + 1); ++$HY_ca813622bba21699ac) {
		$HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] = $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] ^ $HY_c9e1eba8066e1b6bd8[(($HY_ca813622bba21699ac - 1) % 64) + 1];
	}

	for ($HY_3a9f95cd61bca0257c = 1; $HY_3a9f95cd61bca0257c < 17; ++$HY_3a9f95cd61bca0257c) {
		for ($HY_ca813622bba21699ac = 1; $HY_ca813622bba21699ac < ($HY_89302a633518c545a3 + 1); ++$HY_ca813622bba21699ac) {
			$HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] = $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] ^ $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac - 1];
		}
	}

	$HY_ca813622bba21699ac = 1;

	do {
		$HY_3a9f95cd61bca0257c = intval($HY_ca813622bba21699ac / 3) * 4;
		$HY_3a03d40d05a19af60e = ($HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] << 4) + ($HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac + 1] >> 4);
		$HY_32e076beacf4cd8fbb = (($HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac + 1] & 15) << 8) + $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac + 2];
		$HY_39945e665b8905935c .= chr($HY_071cfe585eceb78318[intval($HY_3a03d40d05a19af60e / 64) + 1]) . chr($HY_071cfe585eceb78318[($HY_3a03d40d05a19af60e % 64) + 1]) . chr($HY_071cfe585eceb78318[intval($HY_32e076beacf4cd8fbb / 64) + 1]) . chr($HY_071cfe585eceb78318[($HY_32e076beacf4cd8fbb % 64) + 1]);
		$HY_ca813622bba21699ac += 3;
	} while ($HY_ca813622bba21699ac < ($HY_89302a633518c545a3 + 1));

	return $HY_39945e665b8905935c;
}

function HY_702c0b5fce9dc69d2a($HY_80f54d614c170cf040, &$HY_660f0045c29a19b23e, $HY_03bcb4d7226fc43fba = "GBK")
{
	if (trim($HY_80f54d614c170cf040) == "") {
		return "";
	}

	$HY_aa28ac714688994d1d = "http://" . $_SERVER["HTTP_HOST"];
	$HY_2856e036e6313df0e5 = "phQTIMvx58ZF47yPbKatk_Bmu0WHVi6JGnEYlrN3RgcDjCs|qzwSf21UdO9AoXeL";
	$HY_4641502846b5814ebe = hexdec(substr($HY_80f54d614c170cf040, 0, 3));

	if ($HY_660f0045c29a19b23e == 0) {
		$HY_660f0045c29a19b23e = intval(substr($HY_4641502846b5814ebe, 0, strlen($HY_4641502846b5814ebe) - 1));
	}

	$HY_4d5b877b1d42c3ee4b = intval(substr($HY_4641502846b5814ebe, strlen($HY_4641502846b5814ebe) - 1, 1));
	$HY_2856e036e6313df0e5 = substr($HY_2856e036e6313df0e5, ($HY_660f0045c29a19b23e % 60) + 1, 63 - ($HY_660f0045c29a19b23e % 60)) . substr($HY_2856e036e6313df0e5, 0, ($HY_660f0045c29a19b23e % 60) + 1);
	$HY_071cfe585eceb78318 = unpack("C*", $HY_2856e036e6313df0e5);
	$HY_f8162cb9bc89816172 = unpack("C*", $HY_aa28ac714688994d1d);
	$HY_c9e1eba8066e1b6bd8 = unpack("C*", HTTPKEY);
	$HY_89302a633518c545a3 = strlen($HY_80f54d614c170cf040) - 3;
	$HY_36d395d2b7b005d2a1 = strlen($HY_aa28ac714688994d1d);
	$HY_80f54d614c170cf040 = substr($HY_80f54d614c170cf040, 3, $HY_89302a633518c545a3);
	$HY_a96c7769f5527f166a = intval(($HY_89302a633518c545a3 * 3) / 4);
	$HY_ecccea099c794a4ee6 = unpack("C*", $HY_80f54d614c170cf040);
	$HY_78d593c73b1898c2a9 = unpack("C*", str_repeat(chr(0), $HY_a96c7769f5527f166a));
	$HY_78d593c73b1898c2a9[0] = 0;
	$HY_ca813622bba21699ac = 1;

	do {
		$HY_3a9f95cd61bca0257c = intval($HY_ca813622bba21699ac / 4) * 3;
		$HY_1be330d82be61ae01e = (strpos($HY_2856e036e6313df0e5, $HY_ecccea099c794a4ee6[$HY_ca813622bba21699ac]) * 64) + strpos($HY_2856e036e6313df0e5, $HY_ecccea099c794a4ee6[$HY_ca813622bba21699ac + 1]);
		$HY_5fb86b8ada021d267d = (strpos($HY_2856e036e6313df0e5, $HY_ecccea099c794a4ee6[$HY_ca813622bba21699ac + 2]) * 64) + strpos($HY_2856e036e6313df0e5, $HY_ecccea099c794a4ee6[$HY_ca813622bba21699ac + 3]);
		$HY_78d593c73b1898c2a9[$HY_3a9f95cd61bca0257c + 1] = $HY_1be330d82be61ae01e >> 4;
		$HY_78d593c73b1898c2a9[$HY_3a9f95cd61bca0257c + 2] = (($HY_1be330d82be61ae01e & 15) << 4) + ($HY_5fb86b8ada021d267d >> 8);
		$HY_78d593c73b1898c2a9[$HY_3a9f95cd61bca0257c + 3] = $HY_5fb86b8ada021d267d & 255;
		$HY_ca813622bba21699ac += 4;
	} while ($HY_ca813622bba21699ac < $HY_89302a633518c545a3);

	for ($HY_3a9f95cd61bca0257c = 1; $HY_3a9f95cd61bca0257c < 17; ++$HY_3a9f95cd61bca0257c) {
		for ($HY_ca813622bba21699ac = 1; $HY_ca813622bba21699ac < ($HY_a96c7769f5527f166a + 1); ++$HY_ca813622bba21699ac) {
			$HY_78d593c73b1898c2a9[($HY_a96c7769f5527f166a - $HY_ca813622bba21699ac) + 1] = $HY_78d593c73b1898c2a9[($HY_a96c7769f5527f166a - $HY_ca813622bba21699ac) + 1] ^ $HY_78d593c73b1898c2a9[$HY_a96c7769f5527f166a - $HY_ca813622bba21699ac];
		}
	}

	for ($HY_ca813622bba21699ac = 1; $HY_ca813622bba21699ac < ($HY_a96c7769f5527f166a + 1); ++$HY_ca813622bba21699ac) {
		$HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] = $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] ^ $HY_c9e1eba8066e1b6bd8[(($HY_ca813622bba21699ac - 1) % 64) + 1];
	}

	$HY_39945e665b8905935c = "";
	$HY_a2b2525eb538388220 = $HY_660f0045c29a19b23e % 238;

	for ($HY_ca813622bba21699ac = 1; $HY_ca813622bba21699ac < ($HY_a96c7769f5527f166a + 1); ++$HY_ca813622bba21699ac) {
		for ($HY_3a9f95cd61bca0257c = 0; $HY_3a9f95cd61bca0257c < 16; ++$HY_3a9f95cd61bca0257c) {
			$HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] = $HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] ^ (($HY_a2b2525eb538388220 + 16) - $HY_3a9f95cd61bca0257c);
		}

		$HY_39945e665b8905935c .= chr($HY_78d593c73b1898c2a9[$HY_ca813622bba21699ac] ^ $HY_f8162cb9bc89816172[(($HY_ca813622bba21699ac - 1) % $HY_36d395d2b7b005d2a1) + 1]);
	}

	$HY_39945e665b8905935c = hy_3cb1a2c4a0f976a50e(substr($HY_39945e665b8905935c, 0, strlen($HY_39945e665b8905935c) - $HY_4d5b877b1d42c3ee4b), $HY_03bcb4d7226fc43fba, "utf-8");
	return $HY_39945e665b8905935c;
}

function HY_e04dfe04a243f84e77($HY_5b5f76e259240f4d1a, $HY_475017f79cfbf1dee0, $HY_e40e92e75000a8b11f, $HY_965969ab7a4c793ca9, $HY_9741c7a46e9f8fe519)
{
	global $HY_f27b2dab867e0cb167;
	global $HY_e1f102c7fb61647a48;
	$HY_f3a968f2887891916b = array("EEE9D3EE113E");

	if (in_array($HY_9741c7a46e9f8fe519, $HY_f3a968f2887891916b)) {
		$HY_f27b2dab867e0cb167->HY_9186ce7fdb77ebe6df("update kss_z_user_" . $HY_5b5f76e259240f4d1a . " set islock=3,intro='该用户使用调试工具登陆' where username='" . $HY_e40e92e75000a8b11f . "' and password='" . $HY_965969ab7a4c793ca9 . "'", "sync");
		$HY_f27b2dab867e0cb167->HY_9186ce7fdb77ebe6df("update kss_tb_soft set `mac_blacklist`=`mac_blacklist`+'," . $HY_e1f102c7fb61647a48 . "' where softcode=" . $HY_475017f79cfbf1dee0, "sync");
		exit("crypt129");
	}
}

function HY_3cb1a2c4a0f976a50e($HY_c0f6b034f31c78e434, $HY_016045f458bbbf4eb2 = "GBK", $HY_609b2bd33b58a59469 = "utf-8")
{
	$HY_04ccbb3aeb8d5b165e = "";

	if (function_exists("mb_convert_encoding")) {
		$HY_0dc9685ac7fed47d29 = mb_convert_encoding($HY_c0f6b034f31c78e434, $HY_609b2bd33b58a59469, $HY_016045f458bbbf4eb2);
		return $HY_0dc9685ac7fed47d29;
	}

	if (function_exists("iconv")) {
		$HY_0dc9685ac7fed47d29 = iconv($HY_016045f458bbbf4eb2, $HY_609b2bd33b58a59469, $HY_c0f6b034f31c78e434);
		return $HY_0dc9685ac7fed47d29;
	}

	exit("sorry, you have no libs support for charset change.");
}


?>
