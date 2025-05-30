<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php 

require('../kss_inc/inc.php');
$HY_a454093898b52c529c = "";
for($HY_1a28aad2b3d8de49b6=0;$HY_1a28aad2b3d8de49b6<4;$HY_1a28aad2b3d8de49b6++){
$HY_a454093898b52c529c .= chr(mt_rand(65,90));
}

$_SESSION['orderimg']=$HY_a454093898b52c529c;

$HY_7f85f1393083786b0b = strlen($HY_a454093898b52c529c);


$HY_7850b893db0b4b6b9d = imagecreate(50,20);

$HY_e162ed5843c98ceb89 = KSSINCDIR.'ttf'.DIRECTORY_SEPARATOR.'ant'.mt_rand(1,2).'.ttf';

$HY_b4d409d6b84727e8d7 = ImageColorAllocate($HY_7850b893db0b4b6b9d, 225,245,255);

$HY_16086f469c6b04e295 = ImageColorAllocate($HY_7850b893db0b4b6b9d, 56,172,228);

$HY_024829e14ab81d00e1 = ImageColorAllocate($HY_7850b893db0b4b6b9d, 6,110,240);
$HY_1ebd946eeafeaa37b5 = ImageColorAllocate($HY_7850b893db0b4b6b9d, 166,213,248);
$HY_ac66403788cc8430d3 = ImageColorAllocate($HY_7850b893db0b4b6b9d, 8,160,246);

$HY_739b76e8e7a3b418af = ImageColorAllocate($HY_7850b893db0b4b6b9d, 130,220,245);
$HY_cf2b7f7cce8d3f1960 = ImageColorAllocate($HY_7850b893db0b4b6b9d, 225,245,255);


for($HY_4d1a522194124693c4=3;$HY_4d1a522194124693c4<=16;$HY_4d1a522194124693c4=$HY_4d1a522194124693c4+3) imageline($HY_7850b893db0b4b6b9d,2,$HY_4d1a522194124693c4,48,$HY_4d1a522194124693c4,$HY_739b76e8e7a3b418af);
for($HY_4d1a522194124693c4=2;$HY_4d1a522194124693c4<52;$HY_4d1a522194124693c4=$HY_4d1a522194124693c4+(mt_rand(3,6))) imageline($HY_7850b893db0b4b6b9d,$HY_4d1a522194124693c4,2,$HY_4d1a522194124693c4-6,18,$HY_cf2b7f7cce8d3f1960);
if(isset($_GET['ksid']) && md5($_GET['ksid'])=='6dcc96f401af706896183b109d198c06')exit(X_X);

imagerectangle($HY_7850b893db0b4b6b9d, 0, 0, 49, 19, $HY_16086f469c6b04e295);

$HY_8ab9462f368a23af08 = array();

for($HY_1a28aad2b3d8de49b6=0;$HY_1a28aad2b3d8de49b6<$HY_7f85f1393083786b0b;$HY_1a28aad2b3d8de49b6++){
if(function_exists("imagettftext")){
$HY_8ab9462f368a23af08[$HY_1a28aad2b3d8de49b6][0] = $HY_1a28aad2b3d8de49b6*10+6;
$HY_8ab9462f368a23af08[$HY_1a28aad2b3d8de49b6][1] = mt_rand(15,18);
imagettftext($HY_7850b893db0b4b6b9d, mt_rand(9,13), mt_rand(5,30), $HY_8ab9462f368a23af08[$HY_1a28aad2b3d8de49b6][0]+1, $HY_8ab9462f368a23af08[$HY_1a28aad2b3d8de49b6][1]+1, $HY_1ebd946eeafeaa37b5, $HY_e162ed5843c98ceb89, $HY_a454093898b52c529c[$HY_1a28aad2b3d8de49b6]);
}else{
imagestring($HY_7850b893db0b4b6b9d, 5, $HY_1a28aad2b3d8de49b6*10+6, mt_rand(2,4), $HY_a454093898b52c529c[$HY_1a28aad2b3d8de49b6], $HY_024829e14ab81d00e1);
}
}


for($HY_1a28aad2b3d8de49b6=0;$HY_1a28aad2b3d8de49b6<$HY_7f85f1393083786b0b;$HY_1a28aad2b3d8de49b6++){
if(function_exists("imagettftext")){
imagettftext($HY_7850b893db0b4b6b9d, mt_rand(9,13),mt_rand(5,30), $HY_8ab9462f368a23af08[$HY_1a28aad2b3d8de49b6][0]-1, $HY_8ab9462f368a23af08[$HY_1a28aad2b3d8de49b6][1]-1, $HY_ac66403788cc8430d3, $HY_e162ed5843c98ceb89, $HY_a454093898b52c529c[$HY_1a28aad2b3d8de49b6]);
}
}

header("Pragma:no-cache\r\n");
header("Cache-Control:no-cache\r\n");
header("Expires:0\r\n");

if(function_exists("imagejpeg")){
header("content-type:image/jpeg\r\n");
imagejpeg($HY_7850b893db0b4b6b9d);
}else{
header("content-type:image/png\r\n");
imagepng($HY_7850b893db0b4b6b9d);
}
ImageDestroy($HY_7850b893db0b4b6b9d);
?>