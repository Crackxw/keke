<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
require('./inc.php');
/*
*	创建日期：12:00 2012-10-1
*	更新日期：
*	功能：同步任务页面
*/


$HY_1768f920a33ba395ac=array();
$HY_1768f920a33ba395ac[0]=HY_c28ffe58a6314b1fd4();
$HY_5db36be9db8bff44a9=ini_get('max_execution_time');
if(ini_get('safe_mode')==false){
ini_set('max_execution_time',90);
$HY_5db36be9db8bff44a9=90;
}
$HY_5db36be9db8bff44a9=$HY_5db36be9db8bff44a9*1000;

if(SVRID==2 && MYSQLBAKPASSWORD==$_GET['pwd']){
if(isset($_GET['step']) && $_GET['step']=='bsaveapicode')HY_4807c25379e7b41b91();
}

if(SVRID==1 && MYSQLSYNCMODE==1){
$HY_82d6536edf704aabc5=New mysql_cls;
$HY_8a79dfcb4d67fab949=New mysql_cls;
include('./sqlmode.php');
HY_cac5713fc6be3b274c();
}else{
$HY_ad04eed60604008be4=$_GET['step'];
if($HY_ad04eed60604008be4=='b1'){
if(SVRID!=2 || IS2SVR!=1)
exit('备服_config.php配置不正确，SVRID应该为2  IS2SVR应该为1');
}
if(MYSQLBAKPASSWORD!=$_GET['pwd'])exit('主服和备服【系统参数设置】里的【备份数据库的接口密码】不相同，请修改。');
if(IS2SVR==1){
$HY_82d6536edf704aabc5=New mysql_cls;
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f);
if(SVRID==1){
switch ($HY_ad04eed60604008be4){
case 'a1': 
HY_122fd079f9aea979be();
break;
case 'a2': 
HY_e5b2cbbe6118eb5873();
break;
case 'a3': 
HY_3f6eb263bc1cc53569();
break;
case 'a4': 
HY_e87b3f7c0853c3a8b9();
break;
default:
break;
}
}else{  
switch ($HY_ad04eed60604008be4){
case 'b1': 
HY_6470e92c801633330e();
break;
case 'b2': 
HY_72601966ccd13cda9c();
break;
case 'b3': 
HY_4f6ac39b7385baf79c();
break;
default:
break;
}	
}	
exit();	
}
}


function HY_122fd079f9aea979be(){
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_47450f69adcf37d225=$_GET['notifyid'];
$HY_c59546dd50c15e7fc4=isset($_GET['trytimes'])?$_GET['trytimes']:0;
if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');
if($HY_c59546dd50c15e7fc4>3){
HY_d1d4ca7a0f847e44fe('取备服数据失败，'.($HY_c59546dd50c15e7fc4-1).'次重试均失败，同步结束！');
exit();
}
if($HY_c59546dd50c15e7fc4==0){
HY_d1d4ca7a0f847e44fe('CURL模式，同步开始！');
}else{
HY_d1d4ca7a0f847e44fe('取备服数据失败，开始第'.$HY_c59546dd50c15e7fc4.'次重试！');
}

$HY_6ef90d866d5d33e6ef=HY_6daeecad978867d96f(SYNC2URL.'?step=b1&notifyid='.$HY_47450f69adcf37d225.'&pwd='.MYSQLBAKPASSWORD,false,$HY_5db36be9db8bff44a9/1000-5);
if(substr($HY_6ef90d866d5d33e6ef,0,6)!='dataok'){  

HY_d1d4ca7a0f847e44fe('错误信息：'.$HY_6ef90d866d5d33e6ef);
$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC1URL.'?step=a1&notifyid='.$HY_47450f69adcf37d225.'&trytimes='.($HY_c59546dd50c15e7fc4+1).'&pwd='.MYSQLBAKPASSWORD,false,1);
exit();
}	


HY_d1d4ca7a0f847e44fe('取备服数据成功！');	

$HY_7ca5ec8be2d5ac613f=explode('|',$HY_6ef90d866d5d33e6ef);
unset($HY_6ef90d866d5d33e6ef);
$HY_0b2197fa139eb04d9f='';
$HY_0a67e1c651c73d4a27='';
if($HY_7ca5ec8be2d5ac613f[1]!=''){
$HY_0b2197fa139eb04d9f=HY_a1e101db11863d9c50($HY_7ca5ec8be2d5ac613f[1]);
}
if($HY_7ca5ec8be2d5ac613f[2]!=''){
$HY_0a67e1c651c73d4a27=HY_a1e101db11863d9c50($HY_7ca5ec8be2d5ac613f[2]);
}

if(!empty($HY_0b2197fa139eb04d9f)){
HY_d1d4ca7a0f847e44fe('备服有激活记录，开始处理激活记录');	
foreach ($HY_0b2197fa139eb04d9f as $HY_a1e3f7957087c929e0) {
HY_a4ad78c187f33b7070();
$HY_3f59db0d149c463b7e=$HY_a1e3f7957087c929e0['id'];
$HY_a6f894422dd4f999b5='kss_z_user_'.$HY_a1e3f7957087c929e0['tbname'];
$HY_38cb28df24b8fb51ba='kss_z_key_'.$HY_a1e3f7957087c929e0['tbname'];
$HY_70fdd4c095ad9a39f4=$HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b('select * from '.$HY_a6f894422dd4f999b5.' where `username`=\''.$HY_a1e3f7957087c929e0['username'].'\'');	
if(empty($HY_70fdd4c095ad9a39f4)){  
$HY_d4e252cc04f58cace9=$HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b('select * from '.$HY_38cb28df24b8fb51ba.' where `keys`=\''.substr($HY_a1e3f7957087c929e0['username'],4,6).'\' and `keyfix`=\''.substr($HY_a1e3f7957087c929e0['username'],0,4).'\'');	
if(empty($HY_d4e252cc04f58cace9)){	
$HY_2b051c35c3cffb9826='delete from '.$HY_a6f894422dd4f999b5.' where `username`=\''.$HY_a1e3f7957087c929e0['username'].'\'';
$HY_f455e9b2efa0e48583[]=array($HY_2b051c35c3cffb9826,2);
HY_d1d4ca7a0f847e44fe('主服未找到注册卡'.$HY_a1e3f7957087c929e0['username'].'，删除备服用户');
continue;
}else{

if($HY_d4e252cc04f58cace9['islock']!=0){
$HY_2b051c35c3cffb9826='update '.$HY_a6f894422dd4f999b5.' set islock='.$HY_d4e252cc04f58cace9['islock'].' where `username`=\''.$HY_a1e3f7957087c929e0['username'].'\'';
$HY_f455e9b2efa0e48583[]=array($HY_2b051c35c3cffb9826,2);
HY_d1d4ca7a0f847e44fe('主服注册卡用户被锁定'.$HY_a1e3f7957087c929e0['username'].'，锁定备服注册卡用户');
continue;
}				
if($HY_d4e252cc04f58cace9['isback']!=0){
$HY_2b051c35c3cffb9826='delete from '.$HY_a6f894422dd4f999b5.' where `username`=\''.$HY_a1e3f7957087c929e0['username'].'\'';
$HY_f455e9b2efa0e48583[]=array($HY_2b051c35c3cffb9826,2);					
HY_d1d4ca7a0f847e44fe('主服注册卡退款'.$HY_a1e3f7957087c929e0['username'].'，删除备服注册卡用户');
continue;
}
$HY_0ccc0f3f98ce3ff46a=array();
$HY_0ccc0f3f98ce3ff46a['username']=$HY_d4e252cc04f58cace9['keyfix'].$HY_d4e252cc04f58cace9['keys'];
$HY_0ccc0f3f98ce3ff46a['password']=substr($HY_d4e252cc04f58cace9['keyspassword'],0,10);
$HY_0ccc0f3f98ce3ff46a['password2']=substr($HY_d4e252cc04f58cace9['keyspassword'],10);
$HY_0ccc0f3f98ce3ff46a['addtime']=	$HY_a1e3f7957087c929e0['starttime'];
$HY_0ccc0f3f98ce3ff46a['starttime']= $HY_a1e3f7957087c929e0['starttime'];
$HY_0ccc0f3f98ce3ff46a['managerid']=$HY_d4e252cc04f58cace9['managerid'];
$HY_0ccc0f3f98ce3ff46a['cday']=$HY_d4e252cc04f58cace9['cday'];
$HY_0ccc0f3f98ce3ff46a['points']=$HY_d4e252cc04f58cace9['points'];
$HY_0ccc0f3f98ce3ff46a['tag']=$HY_d4e252cc04f58cace9['tag'];
$HY_0ccc0f3f98ce3ff46a['linknum']=$HY_d4e252cc04f58cace9['linknum'];
$HY_0ccc0f3f98ce3ff46a['keyextattr']=$HY_d4e252cc04f58cace9['keyextattr'];
$HY_0ccc0f3f98ce3ff46a['endtime']=$HY_a1e3f7957087c929e0['starttime']+$HY_d4e252cc04f58cace9['cday']*86400;
$HY_0ccc0f3f98ce3ff46a['cztimes']=1;


$HY_2b051c35c3cffb9826=$HY_82d6536edf704aabc5->HY_0ce06f9bfa146cc96d($HY_a6f894422dd4f999b5, $HY_0ccc0f3f98ce3ff46a, 'sql');
$HY_f455e9b2efa0e48583[]=array($HY_2b051c35c3cffb9826,1);



$HY_2b051c35c3cffb9826='update `'.$HY_38cb28df24b8fb51ba.'` set cztime='.$HY_a1e3f7957087c929e0['starttime'].',czusername=\''.$HY_a1e3f7957087c929e0['username'].'\' where `keys`=\''.$HY_d4e252cc04f58cace9['keys'].'\'';
$HY_f455e9b2efa0e48583[]=array($HY_2b051c35c3cffb9826,1);			
}
}else{					
if($HY_a1e3f7957087c929e0['starttime']<$HY_70fdd4c095ad9a39f4['starttime']){ 
$HY_5758960ce351e5e7a6=$HY_a1e3f7957087c929e0['starttime'];
$HY_0eabd6abd8db30593d=1;
HY_d1d4ca7a0f847e44fe('备服先激活'.$HY_a1e3f7957087c929e0['username']);
}else{
$HY_5758960ce351e5e7a6=$HY_70fdd4c095ad9a39f4['starttime'];
$HY_0eabd6abd8db30593d=2;
HY_d1d4ca7a0f847e44fe('主服先激活'.$HY_a1e3f7957087c929e0['username']);

}
$HY_a4f1232ce94d06b933=$HY_5758960ce351e5e7a6+$HY_70fdd4c095ad9a39f4['cday']*86400;
$HY_2b051c35c3cffb9826='update `'.$HY_a6f894422dd4f999b5.'` set cday=\''.$HY_70fdd4c095ad9a39f4['cday'].'\', starttime='.$HY_5758960ce351e5e7a6.', endtime='.$HY_a4f1232ce94d06b933.' where `username`=\''.$HY_70fdd4c095ad9a39f4['username'].'\'';
$HY_f455e9b2efa0e48583[]=array($HY_2b051c35c3cffb9826,$HY_0eabd6abd8db30593d);	

}
}
$HY_019723a5bdda441a70=$HY_82d6536edf704aabc5->HY_98bea57b3c5997f560('kss_tb_sql');
foreach($HY_f455e9b2efa0e48583 as $HY_777e4274cea5cd565a){
$HY_cd8b3ae467873f4310='insert into `kss_tb_sql` (`addtime`,`sqltext`,`isact`,`notifyid`) VALUES('.time().',\''.mysql_real_escape_string($HY_777e4274cea5cd565a[0]).'\','.$HY_777e4274cea5cd565a[1].',\''.$HY_47450f69adcf37d225.'\')';
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_cd8b3ae467873f4310,'notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('repair table kss_tb_sql','notsync');
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_cd8b3ae467873f4310,'notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_3b22eac9ea6b5c92a5=$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql where notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');
HY_d1d4ca7a0f847e44fe('录入临时数据时出错'.$HY_777e4274cea5cd565a[0]);
exit();	
}
}
}
unset($HY_0b2197fa139eb04d9f);
HY_d1d4ca7a0f847e44fe('激活记录处理完毕！');
}


if(!empty($HY_0a67e1c651c73d4a27)){
HY_d1d4ca7a0f847e44fe('备服有扣点记录，开始处理扣点记录');
$HY_3f59db0d149c463b7e=0;
$HY_10bef590c6b19cf56e=array(); 
foreach ($HY_0a67e1c651c73d4a27 as $HY_110260edf47b09ae98) {	
HY_a4ad78c187f33b7070();
$HY_3f59db0d149c463b7e=$HY_110260edf47b09ae98['id'];
if(isset($HY_10bef590c6b19cf56e[$HY_110260edf47b09ae98['tbname'].$HY_110260edf47b09ae98['username']])){
$HY_10bef590c6b19cf56e[$HY_110260edf47b09ae98['tbname'].$HY_110260edf47b09ae98['username']]=array($HY_110260edf47b09ae98['tbname'],$HY_110260edf47b09ae98['username'],$HY_10bef590c6b19cf56e[$HY_110260edf47b09ae98['tbname'].$HY_110260edf47b09ae98['username']][2]+$HY_110260edf47b09ae98['points']);
}else{
$HY_10bef590c6b19cf56e[$HY_110260edf47b09ae98['tbname'].$HY_110260edf47b09ae98['username']]=array($HY_110260edf47b09ae98['tbname'],$HY_110260edf47b09ae98['username'],$HY_110260edf47b09ae98['points']);
}

}
unset($HY_0a67e1c651c73d4a27);

foreach($HY_10bef590c6b19cf56e as $HY_5380a89366e616d954=>$HY_39f33d52374bdc42f7){  
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`svrid`) values ('.time().',\''.$HY_39f33d52374bdc42f7[0].'\',\''.$HY_39f33d52374bdc42f7[1].'\','.$HY_39f33d52374bdc42f7[2].',2)','notsync');
}

HY_d1d4ca7a0f847e44fe('扣点记录处理完毕');	
}

if(!empty($HY_0a67e1c651c73d4a27) || !empty($HY_0b2197fa139eb04d9f)){  
file_put_contents(KSSROOTDIR.'kss_logs'.DIRECTORY_SEPARATOR.'notifyid.txt','11112');
$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC1URL.'?step=a2&notifyid='.$HY_47450f69adcf37d225.'&trytimes=0&pwd='.MYSQLBAKPASSWORD,false,1);
}else{
$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC1URL.'?step=a3&notifyid='.$HY_47450f69adcf37d225.'&trytimes=0&pwd='.MYSQLBAKPASSWORD,false,1);
}
exit();
}


function HY_e5b2cbbe6118eb5873(){   
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_47450f69adcf37d225=$_GET['notifyid'];
$HY_c59546dd50c15e7fc4=$_GET['trytimes'];
if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');

if($HY_c59546dd50c15e7fc4>2){
HY_d1d4ca7a0f847e44fe('删除备服已处理数据2次重试均失败，同步结束！');
exit();
}
if($HY_c59546dd50c15e7fc4==0){
HY_d1d4ca7a0f847e44fe('向备服发送删除已处理数据的命令！');
}else{
HY_d1d4ca7a0f847e44fe('删除备服已处理数据命令失败，开始第'.$HY_c59546dd50c15e7fc4.'次重试！');
}	
$HY_e771bce9db844d4de6=HY_6daeecad978867d96f(SYNC2URL.'?step=b2&notifyid='.$HY_47450f69adcf37d225.'&trytimes='.$HY_c59546dd50c15e7fc4.'&pwd='.MYSQLBAKPASSWORD,false,$HY_5db36be9db8bff44a9/1000-5);

if(substr($HY_e771bce9db844d4de6,0,6)!='dataok'){  

$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC1URL.'?step=a2&notifyid='.$HY_47450f69adcf37d225.'&trytimes='.($HY_c59546dd50c15e7fc4+1).'&pwd='.MYSQLBAKPASSWORD,false,1);
exit();
}		


HY_d1d4ca7a0f847e44fe('备服已处理数据删除成功，开始处理主服数据变更到备服！');


$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC1URL.'?step=a3&notifyid='.$HY_47450f69adcf37d225.'&trytimes=0&limit=0&pwd='.MYSQLBAKPASSWORD,false,1);
exit();

}


function HY_3f6eb263bc1cc53569(){   
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_47450f69adcf37d225=$_GET['notifyid'];

if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');


HY_d1d4ca7a0f847e44fe('开始处理主服数据');

//主服reg_sql表记录数	
$HY_019723a5bdda441a70=$HY_82d6536edf704aabc5->HY_98bea57b3c5997f560('kss_tb_sql');
if($HY_019723a5bdda441a70==0){
HY_d1d4ca7a0f847e44fe('未发现待同步数据');	
exit();
}

$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_sql set notifyid=\''.$HY_47450f69adcf37d225.'\' where notifyid=\'\' ','notsync');
$HY_25ddfb4025ba75169c=array('sqldata'=>'');
$HY_1697beaeaab061fd0e=0;
$HY_08bb98379d45946250=0;
$HY_bc854a58778efeb1d8=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql` where notifyid=\''.$HY_47450f69adcf37d225.'\' order by id asc limit 0,300 ',1,1);
while(!empty($HY_bc854a58778efeb1d8)){
foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c) {
if($HY_970be7709f584ff59c['isact']==1){
$HY_08bb98379d45946250=1;
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c['sqltext']);
if($HY_173d86697f24ffa1ee!==false){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from `kss_tb_sql` where `id`='.$HY_970be7709f584ff59c['id'],'notsync');
}else{
$HY_3b22eac9ea6b5c92a5=$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_config SET `sync_state`=`sync_state`+1 where id=1','notsync');
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑同步到日志ID='.$HY_970be7709f584ff59c['id'].'时出错！'.$HY_3b22eac9ea6b5c92a5.'	'.$HY_970be7709f584ff59c['sqltext']);
exit();
}
}else{
$HY_25ddfb4025ba75169c['sqldata'].=$HY_970be7709f584ff59c['sqltext'].chr(1);
}
}
unset($HY_bc854a58778efeb1d8);
$HY_1697beaeaab061fd0e=$HY_1697beaeaab061fd0e+300;
$HY_bc854a58778efeb1d8=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql` where notifyid=\''.$HY_47450f69adcf37d225.'\' order by id asc limit '.$HY_1697beaeaab061fd0e.',300',1,1);
}
if($HY_08bb98379d45946250==1)
HY_d1d4ca7a0f847e44fe('注册卡激活记录主服相关变更完成！');


$HY_1697beaeaab061fd0e=0;
$HY_0e1db5584041b65281=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_points` where `svrid`=2 order by id asc limit 0,300 ',1,1);
while(!empty($HY_0e1db5584041b65281)){
foreach ($HY_0e1db5584041b65281 as $HY_f5aa1b7e4f8e4d669a) {
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_z_user_'.$HY_f5aa1b7e4f8e4d669a['tbname'].' SET `points`=`points`-'.$HY_f5aa1b7e4f8e4d669a['points'].' where `username`=\''.$HY_f5aa1b7e4f8e4d669a['username'].'\'','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from `kss_tb_sql_points` where `id`='.$HY_f5aa1b7e4f8e4d669a['id'],'notsync');
}
unset($HY_0e1db5584041b65281);
$HY_1697beaeaab061fd0e=$HY_1697beaeaab061fd0e+300;
$HY_0e1db5584041b65281=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_points` where `svrid`=2 order by id asc limit '.$HY_1697beaeaab061fd0e.',300',1,1);
HY_d1d4ca7a0f847e44fe('点数处理'.$HY_1697beaeaab061fd0e);
}

if(empty($HY_25ddfb4025ba75169c['sqldata'])){
HY_d1d4ca7a0f847e44fe('无需同步数据取备服');	
file_put_contents(KSSLOGDIR.'sendsqldata.php','<'.'?'.'php exit(\'x\');'.'?'.'>');
exit();	
}
$HY_bd101d897515714f37=strlen($HY_25ddfb4025ba75169c['sqldata']);
$HY_25ddfb4025ba75169c['sqldata']=substr($HY_25ddfb4025ba75169c['sqldata'],0,strlen($HY_25ddfb4025ba75169c['sqldata'])-1);	
$HY_25ddfb4025ba75169c['sqldata']=base64_encode(gzcompress($HY_25ddfb4025ba75169c['sqldata']));
$HY_25ddfb4025ba75169c['sqldata']=strtr($HY_25ddfb4025ba75169c['sqldata'],'+/=','*_-');
file_put_contents(KSSLOGDIR.'sendsqldata.php','<'.'?'.'php exit(\'x\');'.'?'.'>'.$HY_47450f69adcf37d225.$HY_25ddfb4025ba75169c['sqldata']);
$HY_02e0e8afb8004dd0de=strlen($HY_25ddfb4025ba75169c['sqldata']);
HY_d1d4ca7a0f847e44fe('主服数据处理完毕，开始发送数据到备服！'.round($HY_02e0e8afb8004dd0de/1024,2).'KB数据压缩率'.round($HY_02e0e8afb8004dd0de*100/$HY_bd101d897515714f37).'%');
$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC2URL.'?step=b3&notifyid='.$HY_47450f69adcf37d225.'&trytimes=0&randid='.time().'&limit=0&pwd='.MYSQLBAKPASSWORD,$HY_25ddfb4025ba75169c,intval($HY_5db36be9db8bff44a9/1000-10));

if(substr($HY_26a5886619eca759a5,0,6)!='dataok'){	
HY_d1d4ca7a0f847e44fe($HY_26a5886619eca759a5);
$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC2URL.'?step=a4&notifyid='.$HY_47450f69adcf37d225.'&trytimes=1&limit=0&pwd='.MYSQLBAKPASSWORD,$HY_25ddfb4025ba75169c,1);
exit();
}
HY_d1d4ca7a0f847e44fe('备服处理主服数据结果：'.substr($HY_26a5886619eca759a5,6));
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql where notifyid=\''.$HY_47450f69adcf37d225.'\' ','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_config SET `sync_state`=0 where id=1','notsync');
file_put_contents(KSSLOGDIR.'sendsqldata.php','<'.'?'.'php exit(\'x\');'.'?'.'>');
HY_d1d4ca7a0f847e44fe('本次同步完成');
exit();		
}

function HY_e87b3f7c0853c3a8b9(){ 
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_47450f69adcf37d225=$_GET['notifyid'];
$HY_c59546dd50c15e7fc4=$_GET['trytimes'];
if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');

if($HY_c59546dd50c15e7fc4>3){
HY_d1d4ca7a0f847e44fe('发送数据到备服'.($HY_c59546dd50c15e7fc4-1).'次重试均失败，同步结束！');
exit();
}

HY_d1d4ca7a0f847e44fe('发送数据到备服，开始第'.$HY_c59546dd50c15e7fc4.'次重试！');

$HY_251b2fafde8beaee8f=file_get_contents(KSSLOGDIR.'sendsqldata.php');
if(substr($HY_251b2fafde8beaee8f,18,20)!=$HY_47450f69adcf37d225){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_config SET `sync_state`=10 where id=1','notsync');
HY_d1d4ca7a0f847e44fe('同步结束sendsqldata内容被改变，建议手工同步一次数据库！');
exit();
}
$HY_25ddfb4025ba75169c=array();
$HY_25ddfb4025ba75169c['sqldata']=substr($HY_251b2fafde8beaee8f,38);

$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC2URL.'?step=b3&notifyid='.$HY_47450f69adcf37d225.'&trytimes=0&pwd='.MYSQLBAKPASSWORD,$HY_25ddfb4025ba75169c,$HY_5db36be9db8bff44a9/1000-5);
if(substr($HY_26a5886619eca759a5,0,6)!='dataok'){	
$HY_26a5886619eca759a5=HY_6daeecad978867d96f(SYNC2URL.'?step=a4&notifyid='.$HY_47450f69adcf37d225.'&trytimes='.($HY_c59546dd50c15e7fc4+1).'&limit=0&pwd='.MYSQLBAKPASSWORD,$HY_25ddfb4025ba75169c,1);
exit();
}
HY_d1d4ca7a0f847e44fe('备服处理主服数据结果：'.substr($HY_26a5886619eca759a5,6));
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql where notifyid=\''.$HY_47450f69adcf37d225.'\' ','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_config SET `sync_state`=0 where id=1','notsync');
file_put_contents(KSSLOGDIR.'sendsqldata.php','<'.'?'.'php exit(\'x\');'.'?'.'>');
HY_d1d4ca7a0f847e44fe('本次同步完成');
exit();	
}


function HY_6470e92c801633330e(){  
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_47450f69adcf37d225=$_GET['notifyid'];	
if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');

$HY_81b718541e23a3ceaa='';
$HY_8f57c68a30877aa9a7='';


$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_active where notifyid not in(\''.$HY_47450f69adcf37d225.'\',\'\')','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where notifyid not in(\''.$HY_47450f69adcf37d225.'\',\'\')','notsync');


$HY_edfcd974364de3b247=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_points` where notifyid=\''.$HY_47450f69adcf37d225.'\' order by id asc');
if(!empty($HY_edfcd974364de3b247)){
$HY_81b718541e23a3ceaa=HY_a6c62c3d135a269bc9($HY_edfcd974364de3b247);
}else{
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_sql_points set notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');
$HY_edfcd974364de3b247=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_points` where notifyid=\''.$HY_47450f69adcf37d225.'\' order by id asc');
if(!empty($HY_edfcd974364de3b247)){
$HY_81b718541e23a3ceaa=HY_a6c62c3d135a269bc9($HY_edfcd974364de3b247);
}
}


$HY_d16ceea0079f35988c=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_active` where notifyid=\''.$HY_47450f69adcf37d225.'\' order by id asc');
if(!empty($HY_d16ceea0079f35988c)){
$HY_8f57c68a30877aa9a7=HY_a6c62c3d135a269bc9($HY_d16ceea0079f35988c);
}else{
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_sql_active set notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');
$HY_d16ceea0079f35988c=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_active` where notifyid=\''.$HY_47450f69adcf37d225.'\' order by id asc');
if(!empty($HY_d16ceea0079f35988c)){
$HY_8f57c68a30877aa9a7=HY_a6c62c3d135a269bc9($HY_d16ceea0079f35988c);
}
}
exit('dataok|'.$HY_8f57c68a30877aa9a7.'|'.$HY_81b718541e23a3ceaa);
}


function HY_72601966ccd13cda9c(){
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_47450f69adcf37d225=$_GET['notifyid'];	
if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');

$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_active where notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('REPAIR TABLE kss_tb_sql_active','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_active where notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');
}

$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');	
if($HY_173d86697f24ffa1ee===false){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('REPAIR TABLE kss_tb_sql_points','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where notifyid=\''.$HY_47450f69adcf37d225.'\'','notsync');	
}

HY_d1d4ca7a0f847e44fe($HY_47450f69adcf37d225.'激活与点数数据成功发送到主服');
exit();
}


function HY_4f6ac39b7385baf79c(){
global $HY_82d6536edf704aabc5,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
HY_25cc92c03c77184f34();
$HY_47450f69adcf37d225=$_GET['notifyid'];	
$HY_f58754090edd18f202=$_POST['sqldata'];	
$HY_f58754090edd18f202=strtr($HY_f58754090edd18f202,'*_-','+/=');
if(!HY_d6173c9bc272354dd2($HY_47450f69adcf37d225))exit('notifyid invalid!');
$HY_f58754090edd18f202=gzuncompress(base64_decode($HY_f58754090edd18f202));
$HY_38239eb298f02bd58e=explode(chr(1),$HY_f58754090edd18f202);
if(is_file(KSSLOGDIR.'notifyid'.DIRECTORY_SEPARATOR.$HY_47450f69adcf37d225.'.txt')){		
$HY_b0e6112fa56939e858=file_get_contents(KSSLOGDIR.'notifyid'.DIRECTORY_SEPARATOR.$HY_47450f69adcf37d225.'.txt');
}else{
$HY_b0e6112fa56939e858=0;
file_put_contents(KSSLOGDIR.'notifyid'.DIRECTORY_SEPARATOR.$HY_47450f69adcf37d225.'.txt','0');
}

if(!empty($HY_38239eb298f02bd58e)){
if(count($HY_38239eb298f02bd58e)>$HY_b0e6112fa56939e858){
$HY_38239eb298f02bd58e=array_slice($HY_38239eb298f02bd58e,$HY_b0e6112fa56939e858);
$HY_fc12e3cf6043961fb3=0;
foreach($HY_38239eb298f02bd58e as $HY_2b051c35c3cffb9826){
$HY_1768f920a33ba395ac[1]=HY_c28ffe58a6314b1fd4();
if(HY_9887b284c1cb9655e9($HY_1768f920a33ba395ac)+5000>$HY_5db36be9db8bff44a9){
exit('try主服发送'.count($HY_38239eb298f02bd58e).'条，备服已执行'.($HY_b0e6112fa56939e858+$HY_fc12e3cf6043961fb3+1).'条，主服需重试发送');
}
$HY_fc12e3cf6043961fb3=$HY_fc12e3cf6043961fb3+1;
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826,'notsync');
if($HY_173d86697f24ffa1ee===true){
file_put_contents(KSSLOGDIR.'notifyid'.DIRECTORY_SEPARATOR.$HY_47450f69adcf37d225.'.txt',$HY_fc12e3cf6043961fb3+$HY_b0e6112fa56939e858);
}else{
exit('try备服执行到第'.($HY_b0e6112fa56939e858+$HY_fc12e3cf6043961fb3+1).'条语句【'.$HY_2b051c35c3cffb9826.'】时出错【'.$HY_82d6536edf704aabc5->HY_8def866213a3d931dd().'】');
}
}
exit('dataok数据处理完毕1！');		
}else{
exit('dataok数据处理完毕2！');
}
}else{
exit('dataok接收到的数据是空的！');
}
}

function HY_4807c25379e7b41b91(){
$HY_2f8bed6ff1de4c24da=HY_ba8120f86a7df1aecc('fname','g','int',0);
$HY_0c87abe5916200b1e8=HY_ba8120f86a7df1aecc('scode','p','int',0);
if(strlen($HY_2f8bed6ff1de4c24da)<6 || strlen($HY_0c87abe5916200b1e8)!=7)
HY_bd307d155f057feb55('，同步advapi代码到备服时出错：软件标识错误'.$HY_2f8bed6ff1de4c24da);

$HY_d9a4fbe9ced85f4f93=$_POST['advapicode'];
$HY_d9a4fbe9ced85f4f93=HY_9138d0c8c0390b8ad8($HY_d9a4fbe9ced85f4f93);

$HY_b3cc76f9038ca26c06=$_POST['rsacode'];
$HY_b3cc76f9038ca26c06=HY_9138d0c8c0390b8ad8($HY_b3cc76f9038ca26c06);

file_put_contents('./advapi/'.$HY_2f8bed6ff1de4c24da.'.php',$HY_d9a4fbe9ced85f4f93);
file_put_contents('./advapi/rsa'.$HY_0c87abe5916200b1e8.'.php',$HY_b3cc76f9038ca26c06);
exit('，advapi和rsa缓存代码已更新到备服');

}

function HY_25cc92c03c77184f34(){
clearstatcache();
$HY_b90e1263e2d6722d93=KSSLOGDIR.'notifyid'.DIRECTORY_SEPARATOR;
$HY_89acbc3d1587895075=@dir($HY_b90e1263e2d6722d93); 
while($HY_67c423a6c617f13b9e=$HY_89acbc3d1587895075->/* nothy */read()){ 
if(pathinfo($HY_67c423a6c617f13b9e, PATHINFO_EXTENSION)=='txt' && is_file($HY_b90e1263e2d6722d93.$HY_67c423a6c617f13b9e) && filemtime($HY_b90e1263e2d6722d93.$HY_67c423a6c617f13b9e)<time()-36000){
@unlink($HY_b90e1263e2d6722d93.$HY_67c423a6c617f13b9e);
}
}	
$HY_89acbc3d1587895075->/* nothy */close();
}

function HY_d1d4ca7a0f847e44fe($HY_ab681fc721a0974f8e){
global $HY_82d6536edf704aabc5;
$HY_2b051c35c3cffb9826='insert into `kss_tb_log_task` (`addtime`, `intro`) values ('.time().', \''.mysql_real_escape_string($HY_ab681fc721a0974f8e).'\')';
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_2b051c35c3cffb9826,'nosync');
if($HY_173d86697f24ffa1ee!==true){
HY_fb45b18d1c30ed39eb($HY_2b051c35c3cffb9826,$HY_82d6536edf704aabc5->HY_8def866213a3d931dd(),__FILE__,__LINE__);
}
}

function HY_a4ad78c187f33b7070(){
global $HY_82d6536edf704aabc5,$HY_8a79dfcb4d67fab949,$HY_5db36be9db8bff44a9,$HY_1768f920a33ba395ac;
$HY_1768f920a33ba395ac[1]=HY_c28ffe58a6314b1fd4();
if(HY_9887b284c1cb9655e9($HY_1768f920a33ba395ac)+2000>$HY_5db36be9db8bff44a9){
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑'.$HY_5db36be9db8bff44a9.'秒');
$HY_82d6536edf704aabc5->HY_d3ead542a9f1e5cece();
$HY_8a79dfcb4d67fab949->HY_d3ead542a9f1e5cece();
exit();	
}
}

function HY_a6c62c3d135a269bc9($HY_ac3b0490509a59e8d3){
$HY_831926894f82917d3d='';
foreach($HY_ac3b0490509a59e8d3 as $HY_5380a89366e616d954=>$HY_39f33d52374bdc42f7){
$HY_831926894f82917d3d.=$HY_5380a89366e616d954.chr(1);
foreach($HY_39f33d52374bdc42f7 as $HY_c3f25386429c1a3d91=>$HY_2d9fa23ce4bc9843bc){
$HY_831926894f82917d3d.=$HY_c3f25386429c1a3d91.chr(2).$HY_2d9fa23ce4bc9843bc.chr(2);
}
$HY_831926894f82917d3d=substr($HY_831926894f82917d3d,0,strlen($HY_831926894f82917d3d)-1).chr(1);
}
$HY_831926894f82917d3d=substr($HY_831926894f82917d3d,0,strlen($HY_831926894f82917d3d)-1);
$HY_831926894f82917d3d=base64_encode(gzcompress($HY_831926894f82917d3d));
$HY_831926894f82917d3d=strtr($HY_831926894f82917d3d,'+/=','*_-');
return $HY_831926894f82917d3d;
}

function HY_a1e101db11863d9c50($HY_831926894f82917d3d){
$HY_831926894f82917d3d=strtr($HY_831926894f82917d3d,'*_-','+/=');
$HY_831926894f82917d3d=gzuncompress(base64_decode($HY_831926894f82917d3d));

$HY_4e9f482c5050ad4540=explode(chr(1),$HY_831926894f82917d3d);
$HY_24eea392cec603d192=count($HY_4e9f482c5050ad4540);
$HY_76b382a7bfbc9d0924=array();
for($HY_fc12e3cf6043961fb3=0;$HY_fc12e3cf6043961fb3<$HY_24eea392cec603d192;$HY_fc12e3cf6043961fb3=$HY_fc12e3cf6043961fb3+2){
$HY_c5d03c965a457403be=intval($HY_fc12e3cf6043961fb3/2);
$HY_582f05a866f1138e82=explode(chr(2),$HY_4e9f482c5050ad4540[$HY_c5d03c965a457403be*2+1]);
$HY_cd54a3ca326beba95e=count($HY_582f05a866f1138e82);
$HY_845161a5ab0d4e8ee5=array();

for($HY_05524c0e805d9bc7ec=0;$HY_05524c0e805d9bc7ec<$HY_cd54a3ca326beba95e;$HY_05524c0e805d9bc7ec=$HY_05524c0e805d9bc7ec+2){
$HY_845161a5ab0d4e8ee5[$HY_582f05a866f1138e82[$HY_05524c0e805d9bc7ec]]=$HY_582f05a866f1138e82[$HY_05524c0e805d9bc7ec+1];
}		
$HY_76b382a7bfbc9d0924[$HY_c5d03c965a457403be]=$HY_845161a5ab0d4e8ee5;		
unset($HY_845161a5ab0d4e8ee5)	;	
}
return $HY_76b382a7bfbc9d0924;
}
function HY_731780439955d051c9($HY_ac3b0490509a59e8d3){
$HY_831926894f82917d3d='';
foreach($HY_ac3b0490509a59e8d3 as $HY_5380a89366e616d954=>$HY_39f33d52374bdc42f7){
$HY_831926894f82917d3d.=$HY_5380a89366e616d954.chr(1).$HY_39f33d52374bdc42f7.chr(1);
}
$HY_831926894f82917d3d=substr($HY_831926894f82917d3d,0,strlen($HY_831926894f82917d3d)-1);
$HY_831926894f82917d3d=base64_encode(gzcompress($HY_831926894f82917d3d));
$HY_831926894f82917d3d=strtr($HY_831926894f82917d3d,'+/=','*_-');
return $HY_831926894f82917d3d;
}

function HY_1a65a6faeb616ba3fb($HY_831926894f82917d3d){
$HY_831926894f82917d3d=strtr($HY_831926894f82917d3d,'*_-','+/=');
$HY_831926894f82917d3d=gzuncompress(base64_decode($HY_831926894f82917d3d));
$HY_4e9f482c5050ad4540=explode(chr(1),$HY_831926894f82917d3d);
$HY_24eea392cec603d192=count($HY_4e9f482c5050ad4540);
$HY_76b382a7bfbc9d0924=array();
for($HY_fc12e3cf6043961fb3=0;$HY_fc12e3cf6043961fb3<$HY_24eea392cec603d192;$HY_fc12e3cf6043961fb3=$HY_fc12e3cf6043961fb3+2){
$HY_c5d03c965a457403be=intval($HY_fc12e3cf6043961fb3/2);
$HY_76b382a7bfbc9d0924[$HY_4e9f482c5050ad4540[$HY_c5d03c965a457403be]]=$HY_4e9f482c5050ad4540[$HY_c5d03c965a457403be*2+1];
}
return $HY_76b382a7bfbc9d0924;
}
?>