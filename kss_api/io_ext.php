<?php
get_language_name();
define('STOPDDOSPASSWORD','');    //# 当该常量值不为''空时，客户端必须调用 ks_setf("该常量值")
if(STOPDDOSPASSWORD != ''){$notcc=$_GET['f'];if($notcc != STOPDDOSPASSWORD)exit(0);}


include('../kss_ip/cc_config.php');
if(NOTCCKG==1){
  require('../kss_ip/ip.php');
  $clientip=cc_getip();
  $mem = memcache_connect(MEMHOST, MEMPORT);
  if('Y'!=memcache_get($mem,$clientip)){
    memcache_close($mem);
    exit('Please check the IP,kss_ip/index.php');
  }
  memcache_close($mem);
}



function get_language_name(){
	$languageid=0;
	if(isset($_GET['lgid']))$languageid=$_GET['lgid'];
	switch ($languageid){
	case 0:
		define('Client_Language','GBK');
		break;
	case 1:
		define('Client_Language','GBK');
		break;
	case 2:
		define('Client_Language','BIG5');
		break;
	default:
		define('Client_Language','GBK');
		break;
	}
}


// 扩展解密函数，如果客户端自定义了加密函数，那么该函数里边就要写相应的解密函数
function extfun_decode($sdata){
	// 加入你自己的解密过程

	return $sdata;
}
?>