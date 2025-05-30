<?php
/*
 *	创建日期：12:00 2012-10-1
 *	更新日期：
 *	功能：SQL导入
 */
error_reporting(E_ALL);
@ini_set('display_errors','On');
@ini_set('memory_limit','64M');
@ob_start();
@header('content-type:text/html;charset=utf-8');
if(ini_get('safe_mode')==false)
	ini_set('max_execution_time',90);

if(function_exists('date_default_timezone_set'))date_default_timezone_set('PRC');  /* 北京时间 */ 
set_error_handler('error_report_fun');
//# 错误输出控制函数 
function error_report_fun($errno, $errstr,$error_file,$error_line){ 
	$ErrArr=array(
		E_ERROR=>'E_ERROR', //#1致命的运行时错误
		E_WARNING=>'E_WARNING',	//#2非致命的运行时错误
		E_PARSE=>'E_PARSE',	//#4编译时解析错误
		E_NOTICE=>'E_NOTICE',	//#8运行时间的通知
		E_CORE_ERROR=>'E_CORE_ERROR',	//#16在PHP启动时的致命错误
		E_CORE_WARNING=>'E_CORE_WARNING',	//#32在PHP启动时的非致命的错误
		E_COMPILE_ERROR=>'E_COMPILE_ERROR',	//#64致命的编译时错误
		E_COMPILE_WARNING=>'E_COMPILE_WARNING',	//#128非致命的编译时错误
		E_USER_ERROR=>'E_USER_ERROR',	//#256致命的用户生成的错误
		E_USER_WARNING=>'E_USER_WARNING',	//#512非致命的用户生成的警告
		E_USER_NOTICE=>'E_USER_NOTICE',	//#1024用户生成的通知
		E_STRICT=>'E_STRICT',	//#2048运行时间的通知
		E_RECOVERABLE_ERROR=>'E_RECOVERABLE_ERROR',	//#4096捕捉致命的错误
		E_ALL=>'E_ALL'	//#8191所有的错误和警告
	);
	if(stripos($errstr,'mysql_')!==false)return true;   //#mysql错误转交给 mysql类处理
	if(preg_match('/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\.rmdir/i', $errstr)){
		return true;
	}
	$errinfo='<b>'.$ErrArr[$errno].' : '.$errstr.' in '.$error_file.' on line '.$error_line.'</b>';
	echo $errinfo;
	return true;

}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>服务端迁移、加装备服、数据还原工具</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<script type="text/javascript" src="../kss_inc/js/jquery.1.3.2.pack.js?version=20121124" charset="utf-8"></script>
<style>
*{word-wrap:break-word;font-size:12px;font-family: "Microsoft YaHei","Hiragino Sans GB","Verdana", "sans-serif","宋体";}
body{background:#F7FBFE}
h1{font-size:18px;font-weight:700;color:#00f}
.emsql{display:none}
#SVRAREA{display:none}
</style>
<script type="text/javascript">
$(document).ready(function() { 
			$("#safepassword").bind("blur",function (){
				
			}); 
			$("#SVRID_2").bind("click",function(){
				$("#IS2SVR").attr("checked",true);
				$("#hav2svr").hide();
			});
			$("#SVRID_1").bind("click",function(){
				$("#IS2SVR").attr("checked",false);
				$("#hav2svr").show();
			});
			$("#setmysql").bind("click",function(){
				if($(this).attr("checked")){
					$(".emsql").show();	
				}else{
					$(".emsql").hide();			
				}
			});
			$("#SETSVR").bind("click",function(){
				if($(this).attr("checked")){
					$("#SVRAREA").show();	
				}else{
					$("#SVRAREA").hide();			
				}
			});			
})
</script>
</head>
<body align="center"><?php
require('../kss_inc/_config.php');  
$retstring='';


$mmysqlhost='localhost';
$mmysqluser='';
$mmysqlpassword='';
$mmysqldb='';
$ssafepassword='';
if(isset($_POST['mysqlhost'])){
	$ssafepassword=$_POST['safepassword'];
	if(md5($_POST['safepassword'])!=MYSQLBAKPASSWORD){
		exit('安全接口密码错误');
	}
	
	$retstring='';
	$nsvrid=SVRID;
	$nis2svr=IS2SVR;
	if(isset($_POST['SETSVR'])){
		$nsvrid=$_POST['SVRID'];
		$nis2svr=isset($_POST['IS2SVR'])?1:0;	
	}
	

	if(isset($_POST['setmysql'])){
		$mmysqlhost=$_POST['mysqlhost'];
		$mmysqluser=$_POST['mysqluser'];
		$mmysqlpassword=$_POST['mysqlpassword'];
		$mmysqldb=$_POST['mysqldb'];
		$conn=mysql_connect($mmysqlhost,$mmysqluser,$mmysqlpassword);
		if(!$conn){
			$retstring='err,连接数据库服务器失败！'.mysql_error();
		}else{
			if($mmysqluser=='root'){
				$mmysqluser='kss_'.kk_rndstr(10);
				$mmysqlpassword=kk_rndstr(16);
				if(trim($mmysqldb)=='')$mmysqldb=$mmysqluser;
				$retstring='数据库用户名：'.$mmysqluser.'<br>数据库密码：'.$mmysqlpassword.'<br>数据库名：'.$mmysqldb.'<br><br>';
				$creatdatabase=array(
					'CREATE USER \''.$mmysqluser.'\'@\'%\' IDENTIFIED BY \''.$mmysqlpassword.'\'',
					'GRANT USAGE ON * . * TO \''.$mmysqluser.'\'@\'%\' IDENTIFIED BY \''.$mmysqlpassword.'\' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ',
					'CREATE DATABASE IF NOT EXISTS `'.$mmysqldb.'`',
					'GRANT ALL PRIVILEGES ON `'.$mmysqldb.'` . * TO \''.$mmysqluser.'\'@\'%\''
				);			
				$result=mysql_query($creatdatabase[0],$conn);
				if($result!==true)
					exit('err,创建新的数据库用户失败！'.mysql_error());
							
				$result=mysql_query($creatdatabase[1],$conn);
				if($result!==true)
					exit('err,设置新的数据库用户属性失败！'.mysql_error());
							
				$result=mysql_query($creatdatabase[2],$conn);
				if($result!==true)
					exit('err,添加新的数据库失败！'.mysql_error());
							
				$result=mysql_query($creatdatabase[3],$conn);
				if($result!==true)
					exit('err,绑定用户和数据库关系失败！'.mysql_error());			
			}
		
			$cd='';
			if(!mysql_select_db($mmysqldb, $conn)){
				$retstring='err,没找到数据库'.mysql_error();
			}else{
				$cd=file_get_contents("../kss_inc/_config.php");
				$cd=mco2($cd,'IS2SVR',$nis2svr);
				$cd=mco2($cd,'SVRID',$nsvrid);					

				if($nsvrid==1){
					$cd=mco($cd,'MYSQL1HostNameOrIp',$mmysqlhost);
					$cd=mco($cd,'MYSQL1UserName',$mmysqluser);
					$cd=mco($cd,'MYSQL1Password',$mmysqlpassword);
					$cd=mco($cd,'MYSQL1DataBaseName',$mmysqldb);
					$cd=mco($cd,'MYSQL2HostNameOrIp','');
					$cd=mco($cd,'MYSQL2UserName','');
					$cd=mco($cd,'MYSQL2Password','');
					$cd=mco($cd,'MYSQL2DataBaseName','');
				}else{
					$cd=mco($cd,'MYSQL1HostNameOrIp','');
					$cd=mco($cd,'MYSQL1UserName','');
					$cd=mco($cd,'MYSQL1Password','');
					$cd=mco($cd,'MYSQL1DataBaseName','');
					$cd=mco($cd,'MYSQL2HostNameOrIp',$mmysqlhost);
					$cd=mco($cd,'MYSQL2UserName',$mmysqluser);
					$cd=mco($cd,'MYSQL2Password',$mmysqlpassword);
					$cd=mco($cd,'MYSQL2DataBaseName',$mmysqldb);
				}
			
				if($_POST['restore']==1){
					mysql_query('SET NAMES \'utf8\'',$conn);

					
					$sql=file_get_contents('restore.sql');
					$sql = str_replace("\r", '',$sql);

					$ret = array();
					$num = 0;
					foreach(explode(";\n", trim($sql)) as $query) {
						$ret[$num] = '';
						$queries = explode("\n", trim($query));
						foreach($queries as $query) {
							$ret[$num] .= (isset($query[0]) && $query[0] == '#') || (isset($query[1]) && isset($query[1]) && $query[0].$query[1] == '--') || (isset($query[1]) && isset($query[2]) && $query[0].$query[1].$query[2] == '/*!') ? '' : $query;
						}
						$num++;
					}
					unset($sql);
					foreach($ret as $query) {
						$query = trim($query);
						if($query){
							$result=mysql_query($query,$conn);
							if($result!==true){
								exit('<font color=red>[err]->'.$query.'</font>'.mysql_error());
							}
						}
					}
					if(@unlink('restore.sql')!==true){
						$retstring.='删除restore.sql失败，请手动删除restore.sql<br>';
					}
					$retstring.='导入数据成功！';
					$kconfig=getrow('select * from kss_tb_config where id=1',$conn);

					$cd=mco2($cd,'RSACRYPT',$kconfig['s_rsamode']);
					$cd=mco($cd,'RSA_PRVKEY',$kconfig['s_rsaekey']);
					$cd=mco($cd,'RSA_MODULES',$kconfig['s_rsankey']);
					$cd=file_put_contents("../kss_inc/_config.php",$cd);
					$retstring.='RSA模式、私钥、模数从数据库中写入到config.php<br>';
					
					$retstring.='配置文件../kss_inc/_config.php更新完成<br>';
					$advrs=getrows('select * from kss_tb_soft',$conn);
					$qtag='?';
					if(!empty($advrs)){
						foreach($advrs as $rs){
							$rsa_cache='<';
							$rsa_cache.='?';
							$rsa_cache.='php /* 编码 */  define(\'SOFTRSAMODE\','.$rs['rsaenable'].'); define(\'SOFTRSAEKEY\',\''.$rs['rsaekey'].'\');  define(\'SOFTRSANKEY\',\''.$rs['rsankey'].'\'); ?';
							$rsa_cache.='>';		

							file_put_contents('../kss_inc/advapi/rsa'.$rs['softcode'].'.php',$rsa_cache);
							
							$sadvapi='<'.$qtag.'php defined(\'YH2\') or exit(\'Access denied to view this page!\');'."\r\n".base64_decode($rs['advapi'])."\r\n".$qtag.'>';
							file_put_contents('../kss_inc/advapi/'.$rs['pid'].$rs['id'].'.php',$sadvapi);
						
						}
						$retstring.='advapi文件生成完成<br>';					
					}
				}
			}
		}
	}else{
		$cd=file_get_contents("../kss_inc/_config.php");
		$cd=mco2($cd,'IS2SVR',$nis2svr);
		$cd=mco2($cd,'SVRID',$nsvrid);	
		$cd=file_put_contents("../kss_inc/_config.php",$cd);
		$retstring.='配置文件../kss_inc/_config.php更新完成<br>';	
	}
}

function mco($c,$n,$v){		//字符串
	return preg_replace('/define\(\''.$n.'\',\'[^\']*\'\)/i','define(\''.$n.'\',\''.$v.'\')', $c); 
} 
function mco2($c,$n,$v){		//数字
	return preg_replace('/define\(\''.$n.'\',[^\)]*\)/i','define(\''.$n.'\','.$v.')', $c); 
} 

/*# 
	功能：取随机字符串  */
function kk_rndstr($kk_len){
	$kk_output='';
	for ($kk_i=0; $kk_i<$kk_len; $kk_i++){
		$kk_which = mt_rand(0,2);
		if($kk_which == 0){
			$kk_output .= mt_rand(0,9);
		}elseif ($kk_which == 1){
			$kk_output .= chr(mt_rand(65,90));
		}else{
			$kk_output .= chr(mt_rand(97,122));
		}
	}
	return $kk_output;
}

		
		//仅获取一条记录
	function getrow($sql, $conn) {
		$rs = mysql_query ( $sql,$conn);
		if ($rs !== false) {
			return mysql_fetch_array($rs, 1);
		} else {
			return false;
		}
	}
	
		//获取数据列表
	function getrows($sql, $conn) {
		$rs = mysql_query ( $sql,$conn);
		if ($rs !== false) {
			$arr = array ();
			while ( $row = mysql_fetch_array ($rs,1) ) {
				$arr[] = $row;
			}
			mysql_free_result($rs);
			return $arr;
		}else{
			return false;
		}
	}

?>
<h1>服务端迁移、加装备服、数据还原工具</h1>

<table border=0  style="border:1px solid #aaa" CELLPADDING="5" CELLSPACING="5">
<form method="post" enctype="multipart/form-data">
<tr><td align=right><label for="file">检查安全接口密码:</label></td><td><input type="password" value="<?php echo $ssafepassword ?>" name="safepassword" id="safepassword"  style="width:300px"/> </td></tr>	
<tr><td align=right height=36>主备服重定位<input type='checkbox'  name='SETSVR' value='1' id='SETSVR'></td><td align=left><span id="SVRAREA">					
<input type=radio value='1' name="SVRID" id="SVRID_1" checked><label for="SVRID_1">主服</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type=radio value='2' name="SVRID" id="SVRID_2"><label for="SVRID_2">备服</label>   &nbsp;&nbsp;&nbsp;&nbsp;<span id="hav2svr">有两个服务器<input type='checkbox'  name='IS2SVR' value='1' id='IS2SVR'></span></span></td>
</tr>				
<tr><td align=right height=36>重配置数据库<input type='checkbox' name='setmysql' value='1' id='setmysql'></td><td align=left>&nbsp;</td>
</tr>
<tr class='emsql'><td align=right width=100><label for="file">数据库主机:</label></td><td><input type="text" value="<?php echo $mmysqlhost ?>" name="mysqlhost" id="mysqlhost"  style="width:300px" /> *一般情况下是localhost</td></tr>
<tr class='emsql'><td align=right><label for="file">数据库用户名:</label></td><td><input type="text" value="<?php echo $mmysqluser ?>"  name="mysqluser" id="mysqluser"  style="width:300px" /> *请使用kss_inc/_config.php里的数据库用户名</td></tr>
<tr class='emsql'><td align=right><label for="file">数据库用户密码:</label></td><td><input type="password" value="<?php echo $mmysqlpassword ?>"  name="mysqlpassword" id="mysqlpassword" style="width:300px" />  *请使用kss_inc/_config.php里的数据库密码</td></tr>
<tr class='emsql'><td align=right><label for="file">数据库名:</label></td><td><input type="text" value="<?php echo $mmysqldb ?>"  name="mysqldb" id="mysqldb" style="width:300px" /> *请使用kss_inc/_config.php里的数据库名 </td></tr>
<tr class='emsql'><td align=right height=36>导入SQL：</td><td align=left>					
<input type=radio value='0' name="restore" id="SVRIDxx_1" checked><label for="SVRIDxx_1">否</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type=radio value='1' name="restore" id="SVRIDxx_2"><label for="SVRIDxx_2">是</label> *如果你要导入SQL，请将SQL文件改名为restore.sql，用FTP软件上传到kss_tool文件夹里边。 本页面不提供文件上传功能</td>
</tr>
<tr><td align=right><input type="submit" name="submit" value="确定" />
</form>
</table>
<p style="color:#f00;font-size:14px;font-weight:700"><?php echo $retstring?></p>
</body>
</html>