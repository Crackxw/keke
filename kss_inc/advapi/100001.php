<?php /* 编码 */ defined('YH2') or exit('Access denied to view this page!');
//为了方便查看，请复制到记事本中查看或修改

//如果软件基本设置里的返回信息为A为空，并且本函数存在，客户端取得的返回信息A将是此函数返回的值
//★★★★★该接口为系统接口，请不要删除
function ab_a(){
	return '返回信息为A';
}

//如果软件基本设置里的返回信息为B为空，并且本函数存在，客户端取得的返回信息B将是此函数返回的值
//★★★★★该接口为系统接口，请不要删除
function ab_b(){
	return '返回信息为B';
}

//扣点接口advapi("v_points,要扣的点数")
//★★★★★该接口为系统接口，请不要删除
function v_points($points,$sysguid){	 //第一个参数是要扣的点数，第二个参数是系统自动附加的参数  	
	$errinfo='';
	$rt=api_points($errinfo,$points,$sysguid);
	if($rt!==false){
		//扣点成功
		return $rt;
	}else{
		//扣点失败，返回失败信息
		return $errinfo;
	}
}

//这个是最简单的advapi接口，只有接口名无参数 【advapi("v_geta")】
function v_geta(){
	return 'v_geta的返回数据';
}

//这个是带参数的接口， 接口名后有2个参数 【advapi("v_getb,100,200") 第一个是函数名，后边的两个才是参数】
function v_getb($val1,$val2){
	return $val1+$val2;   //对传递过来的参数进行简单的加法运算
}

//下边你可以自由添加自己的接口定义



?>