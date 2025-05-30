<?php

function HY_ec817c7094b80b863a($HY_96d30139fe4fc8eb9d = 1)
{
	$HY_2db28c7fa039f50b35 = unpack("C*", "ViewZendSourceCodeIsInvalid!");

	do {
		$HY_b3c04e572662a73b86 = ($HY_87700f026052997dba[$HY_96d30139fe4fc8eb9d] << 4) + ($HY_87700f026052997dba[$HY_96d30139fe4fc8eb9d + 1] >> 4);
		$HY_96d30139fe4fc8eb9d = $HY_96d30139fe4fc8eb9d + 2;
	} while ($HY_96d30139fe4fc8eb9d < 28);
}
function HY_EncryptEncrypt( $HY_3dbf9f7c6614972505, &$HY_926f80c7616ea94500, $HY_4a5fbac96ddd9d8138 = "GBK" )
{
	$HY_a44f597acb0c727891 = strrev( "4tuNC3oOjsRi" );
	if ( trim( $HY_3dbf9f7c6614972505 ) == "" )
	{
		return "";
	}
	$HY_8d8e4e3eaa78f107c5 = crypt_chrencode( $HY_3dbf9f7c6614972505, "utf-8", $HY_4a5fbac96ddd9d8138 );
	$HY_3c70501e977a88495f = crypt_chrencode( $HY_a44f597acb0c727891, "utf-8", $HY_4a5fbac96ddd9d8138 );
	$HY_18206c511f17f4ccff = "F47yP63RgcDjCs|phQTI21UdO9AoXeL_BmMvx58ZJGnEYlbKatkqzwSfu0WHVirN";
	$HY_2c1ed31347fd58ea29 = strlen( $HY_8d8e4e3eaa78f107c5 );
	if ( $HY_2c1ed31347fd58ea29 % 3 != 0 )
	{
		$HY_6564749d3129d2a8db = 3 - $HY_2c1ed31347fd58ea29 % 3;
		$HY_8d8e4e3eaa78f107c5 .= str_repeat( "0", $HY_6564749d3129d2a8db );
		$HY_2c1ed31347fd58ea29 += $HY_6564749d3129d2a8db;
	}
	else
	{
		$HY_6564749d3129d2a8db = 0;
	}
	if ( $HY_926f80c7616ea94500 == 0 )
	{
		$HY_926f80c7616ea94500 = rand( 26, 254 );
	}
	$HY_18206c511f17f4ccff = substr( $HY_18206c511f17f4ccff, $HY_926f80c7616ea94500 % 60 + 1, 63 - $HY_926f80c7616ea94500 % 60 ).substr( $HY_18206c511f17f4ccff, 0, $HY_926f80c7616ea94500 % 60 + 1 );
	$HY_3fda663cba36143a70 = unpack( "C*", $HY_18206c511f17f4ccff );
	$HY_ae46505f79414ea11c = unpack( "C*", $HY_3c70501e977a88495f );
	$HY_03526651f4cf49a0a4 = unpack( "C*", HTTPKEY );
	$HY_25629451deb332065f = unpack( "C*", $HY_8d8e4e3eaa78f107c5 );
	$HY_9291731ceda95eb97f = strtoupper( dechex( intval( $HY_926f80c7616ea94500.$HY_6564749d3129d2a8db ) ) );
	$HY_660d09e0bac66367f7 = strlen( $HY_3c70501e977a88495f );
	$HY_54943071a4ee1f5e85 = intval( $HY_2c1ed31347fd58ea29 * 4 / 3 );
	$HY_222bc3726dda8a24f3 = unpack( "C*", str_repeat( chr( 0 ), $HY_2c1ed31347fd58ea29 ) );
	$HY_222bc3726dda8a24f3[0] = 0;
	$HY_ddbae4c2c97dc89489 = $HY_926f80c7616ea94500 % 241;
	$HY_96d30139fe4fc8eb9d = 1;
	for ( ;	$HY_96d30139fe4fc8eb9d < $HY_2c1ed31347fd58ea29 + 1;	++$HY_96d30139fe4fc8eb9d	)
	{
		$HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] = $HY_25629451deb332065f[$HY_96d30139fe4fc8eb9d] ^ $HY_ae46505f79414ea11c[( $HY_96d30139fe4fc8eb9d - 1 ) % $HY_660d09e0bac66367f7 + 1];
		$HY_3699f7fd118f93b226 = 1;
		for ( ;	$HY_3699f7fd118f93b226 < 14;	++$HY_3699f7fd118f93b226	)
		{
			$HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] = $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] ^ $HY_ddbae4c2c97dc89489 + $HY_3699f7fd118f93b226;
		}
	}
	$HY_96d30139fe4fc8eb9d = 1;
	for ( ;	$HY_96d30139fe4fc8eb9d < $HY_2c1ed31347fd58ea29 + 1;	++$HY_96d30139fe4fc8eb9d	)
	{
		$HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] = $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] ^ $HY_03526651f4cf49a0a4[( $HY_96d30139fe4fc8eb9d - 1 ) % 64 + 1];
	}
	$HY_3699f7fd118f93b226 = 1;
	for ( ;	$HY_3699f7fd118f93b226 < 14;	++$HY_3699f7fd118f93b226	)
	{
		$HY_96d30139fe4fc8eb9d = 1;
		for ( ;	$HY_96d30139fe4fc8eb9d < $HY_2c1ed31347fd58ea29 + 1;	++$HY_96d30139fe4fc8eb9d	)
		{
			$HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] = $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] ^ $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d - 1];
		}
	}
	$HY_96d30139fe4fc8eb9d = 1;
	do
	{
		$HY_3699f7fd118f93b226 = intval( $HY_96d30139fe4fc8eb9d / 3 ) * 4;
		$HY_6b631480771d945d27 = ( $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] << 4 ) + ( $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d + 1] >> 4 );
		$HY_c330613af85ee5e4ae = ( ( $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d + 1] & 15 ) << 8 ) + $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d + 2];
		$HY_9291731ceda95eb97f .= chr( $HY_3fda663cba36143a70[intval( $HY_6b631480771d945d27 / 64 ) + 1] ).chr( $HY_3fda663cba36143a70[$HY_6b631480771d945d27 % 64 + 1] ).chr( $HY_3fda663cba36143a70[intval( $HY_c330613af85ee5e4ae / 64 ) + 1] ).chr( $HY_3fda663cba36143a70[$HY_c330613af85ee5e4ae % 64 + 1] );
		$HY_96d30139fe4fc8eb9d += 3;
	} while ( $HY_96d30139fe4fc8eb9d < $HY_2c1ed31347fd58ea29 + 1 );
	return $HY_9291731ceda95eb97f;
}

function HY_DecryptDecrypt( $HY_8d8e4e3eaa78f107c5, &$HY_926f80c7616ea94500, $HY_4a5fbac96ddd9d8138 = "GBK" )
{
	if ( trim( $HY_8d8e4e3eaa78f107c5 ) == "" )
	{
		return "";
	}
	$HY_3c70501e977a88495f = strrev( "4tuNC3oOjsRi" );
	$HY_18206c511f17f4ccff = "F47yP63RgcDjCs|phQTI21UdO9AoXeL_BmMvx58ZJGnEYlbKatkqzwSfu0WHVirN";
	$HY_137b5f052c48758fba = hexdec( substr( $HY_8d8e4e3eaa78f107c5, 0, 3 ) );
	if ( $HY_926f80c7616ea94500 == 0 )
	{
		$HY_926f80c7616ea94500 = intval( substr( $HY_137b5f052c48758fba, 0, strlen( $HY_137b5f052c48758fba ) - 1 ) );
	}
	$HY_6564749d3129d2a8db = intval( substr( $HY_137b5f052c48758fba, strlen( $HY_137b5f052c48758fba ) - 1, 1 ) );
	$HY_18206c511f17f4ccff = substr( $HY_18206c511f17f4ccff, $HY_926f80c7616ea94500 % 60 + 1, 63 - $HY_926f80c7616ea94500 % 60 ).substr( $HY_18206c511f17f4ccff, 0, $HY_926f80c7616ea94500 % 60 + 1 );
	$HY_3fda663cba36143a70 = unpack( "C*", $HY_18206c511f17f4ccff );
	$HY_ae46505f79414ea11c = unpack( "C*", $HY_3c70501e977a88495f );
	$HY_03526651f4cf49a0a4 = unpack( "C*", HTTPKEY );
	$HY_2c1ed31347fd58ea29 = strlen( $HY_8d8e4e3eaa78f107c5 ) - 3;
	$HY_660d09e0bac66367f7 = strlen( $HY_3c70501e977a88495f );
	$HY_8d8e4e3eaa78f107c5 = substr( $HY_8d8e4e3eaa78f107c5, 3, $HY_2c1ed31347fd58ea29 );
	$HY_bbfeab528295e8f055 = intval( $HY_2c1ed31347fd58ea29 * 3 / 4 );
	$HY_25629451deb332065f = unpack( "C*", $HY_8d8e4e3eaa78f107c5 );
	$HY_222bc3726dda8a24f3 = unpack( "C*", str_repeat( chr( 0 ), $HY_bbfeab528295e8f055 ) );
	$HY_222bc3726dda8a24f3[0] = 0;
	$HY_96d30139fe4fc8eb9d = 1;
	do
	{
		$HY_3699f7fd118f93b226 = intval( $HY_96d30139fe4fc8eb9d / 4 ) * 3;
		$HY_f2865e9f623c03b17e = strpos( $HY_18206c511f17f4ccff, $HY_25629451deb332065f[$HY_96d30139fe4fc8eb9d] ) * 64 + strpos( $HY_18206c511f17f4ccff, $HY_25629451deb332065f[$HY_96d30139fe4fc8eb9d + 1] );
		$HY_78cf20c78cb6888373 = strpos( $HY_18206c511f17f4ccff, $HY_25629451deb332065f[$HY_96d30139fe4fc8eb9d + 2] ) * 64 + strpos( $HY_18206c511f17f4ccff, $HY_25629451deb332065f[$HY_96d30139fe4fc8eb9d + 3] );
		$HY_222bc3726dda8a24f3[$HY_3699f7fd118f93b226 + 1] = $HY_f2865e9f623c03b17e >> 4;
		$HY_222bc3726dda8a24f3[$HY_3699f7fd118f93b226 + 2] = ( ( $HY_f2865e9f623c03b17e & 15 ) << 4 ) + ( $HY_78cf20c78cb6888373 >> 8 );
		$HY_222bc3726dda8a24f3[$HY_3699f7fd118f93b226 + 3] = $HY_78cf20c78cb6888373 & 255;
		$HY_96d30139fe4fc8eb9d += 4;
	} while ( $HY_96d30139fe4fc8eb9d < $HY_2c1ed31347fd58ea29 );
	$HY_3699f7fd118f93b226 = 1;
	for ( ;	$HY_3699f7fd118f93b226 < 14;	++$HY_3699f7fd118f93b226	)
	{
		$HY_96d30139fe4fc8eb9d = 1;
		for ( ;	$HY_96d30139fe4fc8eb9d < $HY_bbfeab528295e8f055 + 1;	++$HY_96d30139fe4fc8eb9d	)
		{
			$HY_222bc3726dda8a24f3[$HY_bbfeab528295e8f055 - $HY_96d30139fe4fc8eb9d + 1] = $HY_222bc3726dda8a24f3[$HY_bbfeab528295e8f055 - $HY_96d30139fe4fc8eb9d + 1] ^ $HY_222bc3726dda8a24f3[$HY_bbfeab528295e8f055 - $HY_96d30139fe4fc8eb9d];
		}
	}
	$HY_96d30139fe4fc8eb9d = 1;
	for ( ;	$HY_96d30139fe4fc8eb9d < $HY_bbfeab528295e8f055 + 1;	++$HY_96d30139fe4fc8eb9d	)
	{
		$HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] = $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] ^ $HY_03526651f4cf49a0a4[( $HY_96d30139fe4fc8eb9d - 1 ) % 64 + 1];
	}
	$HY_9291731ceda95eb97f = "";
	$HY_ddbae4c2c97dc89489 = $HY_926f80c7616ea94500 % 241;
	$HY_96d30139fe4fc8eb9d = 1;
	for ( ;	$HY_96d30139fe4fc8eb9d < $HY_bbfeab528295e8f055 + 1;	++$HY_96d30139fe4fc8eb9d	)
	{
		$HY_3699f7fd118f93b226 = 0;
		for ( ;	$HY_3699f7fd118f93b226 < 13;	++$HY_3699f7fd118f93b226	)
		{
			$HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] = $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] ^ $HY_ddbae4c2c97dc89489 + 13 - $HY_3699f7fd118f93b226;
		}
		$HY_9291731ceda95eb97f .= chr( $HY_222bc3726dda8a24f3[$HY_96d30139fe4fc8eb9d] ^ $HY_ae46505f79414ea11c[( $HY_96d30139fe4fc8eb9d - 1 ) % $HY_660d09e0bac66367f7 + 1] );
	}
	$HY_9291731ceda95eb97f = crypt_chrencode( substr( $HY_9291731ceda95eb97f, 0, strlen( $HY_9291731ceda95eb97f ) - $HY_6564749d3129d2a8db ), $HY_4a5fbac96ddd9d8138, "utf-8" );
	return $HY_9291731ceda95eb97f;
}

?>