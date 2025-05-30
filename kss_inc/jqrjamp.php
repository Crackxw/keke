<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><html>
<head><title>跳转中</title></head>
<body>
<?php
$HY_243589d656d86939a8=$_POST['rmb'];
$HY_a0fb213a8c33c14267=$_POST['aliusername'];
$HY_7e3958ca51847ad2e2=$_POST['ordernum'];
$HY_476a869b1de05220c0='https://shenghuo.alipay.com/send/payment/fill.htm?title='.$HY_7e3958ca51847ad2e2.'&optEmail='.$HY_a0fb213a8c33c14267.'&payAmount='.$HY_243589d656d86939a8;
?>
<script>
function open_without_referrer(link){
document.body.appendChild(document.createElement('iframe')).src='javascript:"<script>top.location.replace(\''+link+'\')<\/script>"';
}
open_without_referrer('<?php echo $HY_476a869b1de05220c0;?>');
</script>
</body>
</html>