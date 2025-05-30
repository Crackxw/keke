<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
require('../kss_inc/inc.php');
$HY_cfb4d8e68e2a1987b9='';
if(isset($_POST['tb']))$HY_cfb4d8e68e2a1987b9=$_POST['tb'];

if(preg_match('/^([a-zA-Z0-9_]*)$/i',$HY_cfb4d8e68e2a1987b9)){
//
}else{
$HY_cfb4d8e68e2a1987b9='';
}
?><html>
<head>
<title>修复表</title>
</head>
<body>
<form id="rep" action="repair.php" method="post">
请输入要修复的表名<input name='tb' value='<?php echo $HY_cfb4d8e68e2a1987b9;?>' type=text>
<input type=submit value='修复'>
</form>
<?php
if($HY_cfb4d8e68e2a1987b9!=''){
$HY_82d6536edf704aabc5=New mysql_cls;
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
$HY_246f1953d6efdb4f8a=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('REPAIR TABLE '.$HY_cfb4d8e68e2a1987b9,'notsync');
if($HY_246f1953d6efdb4f8a!==false){
echo '修复表成功！<br>';
}else{
echo '修复表失败:'.$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
}
}
?>
</body>
</html>