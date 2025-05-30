<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
function HY_ddf6692b9232aa2368($HY_08b5dc543be0f86beb) {
if(!preg_match("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/", $HY_08b5dc543be0f86beb)) {
return '';
}


if(is_file(KSSROOTDIR.'ip.dat') && $HY_62ed1efbd1a995af3f = @fopen(KSSROOTDIR.'ip.dat', 'rb')) {
$HY_08b5dc543be0f86beb = explode('.', $HY_08b5dc543be0f86beb);
$HY_80c16c3b12bc233ec8 = $HY_08b5dc543be0f86beb[0] * 16777216 + $HY_08b5dc543be0f86beb[1] * 65536 + $HY_08b5dc543be0f86beb[2] * 256 + $HY_08b5dc543be0f86beb[3];
$HY_d4c44c64c4a9f3991d = fread($HY_62ed1efbd1a995af3f, 4);
$HY_77949a037a628432db = fread($HY_62ed1efbd1a995af3f, 4);
$HY_fc970a501f9e956a4b = implode('', unpack('L', $HY_d4c44c64c4a9f3991d));
if($HY_fc970a501f9e956a4b < 0) $HY_fc970a501f9e956a4b += pow(2, 32);
$HY_959c0150e54417caf3 = implode('', unpack('L', $HY_77949a037a628432db));
if($HY_959c0150e54417caf3 < 0) $HY_959c0150e54417caf3 += pow(2, 32);
$HY_05bb0ddf29a1f38b38 = ($HY_959c0150e54417caf3 - $HY_fc970a501f9e956a4b) / 7 + 1;
$HY_c1b83ed404560b585b = 0;
$HY_3f476c99f3cb44a53e = $HY_05bb0ddf29a1f38b38;
$HY_f08be210c133d8e5c2=0;
$HY_184e0c4dcc23fe0261=0;		
$HY_4e7188e79c4e16fedd='';			
$HY_eb80d428a3a7386c5a='';
while($HY_f08be210c133d8e5c2 > $HY_80c16c3b12bc233ec8 || $HY_184e0c4dcc23fe0261 < $HY_80c16c3b12bc233ec8) {
$HY_3be37533bf7d439892= intval(($HY_3f476c99f3cb44a53e + $HY_c1b83ed404560b585b) / 2);
fseek($HY_62ed1efbd1a995af3f, $HY_fc970a501f9e956a4b + 7 * $HY_3be37533bf7d439892);
$HY_809b43fdea5dfa7186 = fread($HY_62ed1efbd1a995af3f, 4);
if(strlen($HY_809b43fdea5dfa7186) < 4) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_f08be210c133d8e5c2 = implode('', unpack('L', $HY_809b43fdea5dfa7186));
if($HY_f08be210c133d8e5c2 < 0) $HY_f08be210c133d8e5c2 += pow(2, 32);
if($HY_f08be210c133d8e5c2 > $HY_80c16c3b12bc233ec8) {
$HY_3f476c99f3cb44a53e = $HY_3be37533bf7d439892;
continue;
}

$HY_f1d213a861fdd5d7fe = fread($HY_62ed1efbd1a995af3f, 3);
if(strlen($HY_f1d213a861fdd5d7fe) < 3) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_f1d213a861fdd5d7fe = implode('', unpack('L', $HY_f1d213a861fdd5d7fe.chr(0)));
fseek($HY_62ed1efbd1a995af3f, $HY_f1d213a861fdd5d7fe);
$HY_aa7ca60bd819f2de4f = fread($HY_62ed1efbd1a995af3f, 4);
if(strlen($HY_aa7ca60bd819f2de4f) < 4) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_184e0c4dcc23fe0261 = implode('', unpack('L', $HY_aa7ca60bd819f2de4f));
if($HY_184e0c4dcc23fe0261 < 0) $HY_184e0c4dcc23fe0261 += pow(2, 32);

if($HY_184e0c4dcc23fe0261 < $HY_80c16c3b12bc233ec8) {
if($HY_3be37533bf7d439892 == $HY_c1b83ed404560b585b) {
fclose($HY_62ed1efbd1a995af3f);
return 'Unknown';
}
$HY_c1b83ed404560b585b = $HY_3be37533bf7d439892;
}
}

$HY_71809205cdf041f0f1 = fread($HY_62ed1efbd1a995af3f, 1);
if($HY_71809205cdf041f0f1 == chr(1)) {
$HY_8fcb388da2d7c85f63 = fread($HY_62ed1efbd1a995af3f, 3);
if(strlen($HY_8fcb388da2d7c85f63) < 3) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_8fcb388da2d7c85f63 = implode('', unpack('L', $HY_8fcb388da2d7c85f63.chr(0)));
fseek($HY_62ed1efbd1a995af3f, $HY_8fcb388da2d7c85f63);
$HY_71809205cdf041f0f1 = fread($HY_62ed1efbd1a995af3f, 1);
}

if($HY_71809205cdf041f0f1 == chr(2)) {
$HY_9c43db08d930f840f8 = fread($HY_62ed1efbd1a995af3f, 3);
if(strlen($HY_9c43db08d930f840f8) < 3) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_71809205cdf041f0f1 = fread($HY_62ed1efbd1a995af3f, 1);
if($HY_71809205cdf041f0f1 == chr(2)) {
$HY_cfc633565df3079ef1 = fread($HY_62ed1efbd1a995af3f, 3);
if(strlen($HY_cfc633565df3079ef1) < 3) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_cfc633565df3079ef1 = implode('', unpack('L', $HY_cfc633565df3079ef1.chr(0)));
fseek($HY_62ed1efbd1a995af3f, $HY_cfc633565df3079ef1);
} else {
fseek($HY_62ed1efbd1a995af3f, -1, SEEK_CUR);
}
while(($HY_227b839a5dd7a8b54c = fread($HY_62ed1efbd1a995af3f, 1)) != chr(0))
$HY_eb80d428a3a7386c5a .= $HY_227b839a5dd7a8b54c;

$HY_9c43db08d930f840f8 = implode('', unpack('L', $HY_9c43db08d930f840f8.chr(0)));
fseek($HY_62ed1efbd1a995af3f, $HY_9c43db08d930f840f8);
while(($HY_227b839a5dd7a8b54c = fread($HY_62ed1efbd1a995af3f, 1)) != chr(0))
$HY_4e7188e79c4e16fedd .= $HY_227b839a5dd7a8b54c;
} else {
fseek($HY_62ed1efbd1a995af3f, -1, SEEK_CUR);
while(($HY_227b839a5dd7a8b54c = fread($HY_62ed1efbd1a995af3f, 1)) != chr(0))
$HY_4e7188e79c4e16fedd .= $HY_227b839a5dd7a8b54c;

$HY_71809205cdf041f0f1 = fread($HY_62ed1efbd1a995af3f, 1);
if($HY_71809205cdf041f0f1 == chr(2)) {
$HY_cfc633565df3079ef1 = fread($HY_62ed1efbd1a995af3f, 3);
if(strlen($HY_cfc633565df3079ef1) < 3) {
fclose($HY_62ed1efbd1a995af3f);
return 'System Error';
}
$HY_cfc633565df3079ef1 = implode('', unpack('L', $HY_cfc633565df3079ef1.chr(0)));
fseek($HY_62ed1efbd1a995af3f, $HY_cfc633565df3079ef1);
} else {
fseek($HY_62ed1efbd1a995af3f, -1, SEEK_CUR);
}
while(($HY_227b839a5dd7a8b54c = fread($HY_62ed1efbd1a995af3f, 1)) != chr(0))
$HY_eb80d428a3a7386c5a .= $HY_227b839a5dd7a8b54c;
}
fclose($HY_62ed1efbd1a995af3f);

if(preg_match('/http/i', $HY_eb80d428a3a7386c5a)) {
$HY_eb80d428a3a7386c5a = '';
}
$HY_7a2bcd1c84a62c1d5a = $HY_4e7188e79c4e16fedd.' '.$HY_eb80d428a3a7386c5a;
$HY_7a2bcd1c84a62c1d5a = preg_replace('/CZ88\.NET/is', '', $HY_7a2bcd1c84a62c1d5a);
$HY_7a2bcd1c84a62c1d5a = preg_replace('/^\s*/is', '', $HY_7a2bcd1c84a62c1d5a);
$HY_7a2bcd1c84a62c1d5a = preg_replace('/\s*$/is', '', $HY_7a2bcd1c84a62c1d5a);
if(preg_match('/http/i', $HY_7a2bcd1c84a62c1d5a) || $HY_7a2bcd1c84a62c1d5a == '') {
$HY_7a2bcd1c84a62c1d5a = 'Unknown';
}
return HY_7c52668390800e672a($HY_7a2bcd1c84a62c1d5a,"GBK","UTF-8");
} else {
if(HY_8ea23c5626d65adda5('curl_init')){
if($HY_08b5dc543be0f86beb=='255.255.255.255'){
return '当前使用IP138接口<br>建议使用纯真ip库：下载<a href=http://www.onlinedown.net/soft/19051.htm target=_blank>QQWry.Dat</a>改名为ip.dat上传到KSS根目录！';
}

$HY_b145448aa76bc95b5e=HY_6daeecad978867d96f('http://www.ip138.com/ips1388.asp?ip='.$HY_08b5dc543be0f86beb.'&action=2',false,10);
if(substr($HY_b145448aa76bc95b5e,0,7)=='curlerr')
return substr($HY_b145448aa76bc95b5e,8);
$HY_b145448aa76bc95b5e=HY_7c52668390800e672a($HY_b145448aa76bc95b5e,"GBK","UTF-8");
$HY_a6b6c691fc6e44bcbd=stripos($HY_b145448aa76bc95b5e,'<ul class='.YH2.'ul1'.YH2.'>');
$HY_e843c95a1528509626=stripos($HY_b145448aa76bc95b5e,'</ul>',$HY_a6b6c691fc6e44bcbd+5);
$HY_b145448aa76bc95b5e=substr($HY_b145448aa76bc95b5e,$HY_a6b6c691fc6e44bcbd+20,$HY_e843c95a1528509626-$HY_a6b6c691fc6e44bcbd-20);
$HY_b145448aa76bc95b5e=str_replace('</li><li>','<br>',$HY_b145448aa76bc95b5e);
$HY_b145448aa76bc95b5e=str_replace('本站','',$HY_b145448aa76bc95b5e);
return $HY_b145448aa76bc95b5e;
}else{
return '请将传纯真ip库<a href=http://www.onlinedown.net/soft/19051.htm target=_blank>QQWry.Dat</a>改名为ip.dat上传到根目录（favicon.ico所在目录）！';
}
}
}

?>