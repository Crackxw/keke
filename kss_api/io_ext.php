<?php
get_language_name();
define('STOPDDOSPASSWORD','');    //# ���ó���ֵ��Ϊ''��ʱ���ͻ��˱������ ks_setf("�ó���ֵ")
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


// ��չ���ܺ���������ͻ����Զ����˼��ܺ�������ô�ú�����߾�Ҫд��Ӧ�Ľ��ܺ���
function extfun_decode($sdata){
	// �������Լ��Ľ��ܹ���

	return $sdata;
}
?>