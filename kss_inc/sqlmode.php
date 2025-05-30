<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php defined('YH2') or exit('Access denied to view this page!');
function HY_cac5713fc6be3b274c(){
global $HY_e83242934e1fdef61f,$HY_de7cf704210fc885cc,$HY_82d6536edf704aabc5,$HY_8a79dfcb4d67fab949,$HY_1768f920a33ba395ac,$HY_5db36be9db8bff44a9;
$HY_82d6536edf704aabc5->HY_8adfa6fa6f18be3e6f($HY_e83242934e1fdef61f,1);
$HY_e1ea7a9a9c50bc26d0=$HY_8a79dfcb4d67fab949->HY_8adfa6fa6f18be3e6f($HY_de7cf704210fc885cc,0);
echo '123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890';	
if($HY_e1ea7a9a9c50bc26d0=='success'){
HY_d1d4ca7a0f847e44fe('↓↓↓↓↓↓↓↓↓↓↓连接备用服务器'.$HY_de7cf704210fc885cc['dbhost'].'数据库'.$HY_de7cf704210fc885cc['dbname'].'成功');
}else{
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑连接备用数据库'.$HY_de7cf704210fc885cc['dbhost'].'数据库'.$HY_de7cf704210fc885cc['dbname'].'失败,'.SYNCTIME.'秒后自动重试');
exit();
}	

$HY_f455e9b2efa0e48583=array();
//查询备服kss_tb_sql_active更新主服 tbname  username  starttime  pccode  
$HY_0b2197fa139eb04d9f=$HY_8a79dfcb4d67fab949->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_active` order by id asc');	
if(!empty($HY_0b2197fa139eb04d9f)){
HY_d1d4ca7a0f847e44fe('开始处理kss_tb_sql_active表');	
$HY_3f59db0d149c463b7e=0;
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
$HY_cd8b3ae467873f4310='insert into `kss_tb_sql` (`addtime`,`sqltext`,`isact`) VALUES('.time().',\''.mysql_real_escape_string($HY_777e4274cea5cd565a[0]).'\','.$HY_777e4274cea5cd565a[1].')';
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_cd8b3ae467873f4310,'notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('repair table kss_tb_sql','notsync');
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_cd8b3ae467873f4310,'notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_3b22eac9ea6b5c92a5=$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql where id>'.$HY_019723a5bdda441a70.' and isact>0','notsync');
HY_d1d4ca7a0f847e44fe('录入临时数据时出错'.$HY_777e4274cea5cd565a[0]);
exit();	
}
}			
}
$HY_8a79dfcb4d67fab949->HY_e6e8aeec74e7b16058('delete from `kss_tb_sql_active` where id<'.($HY_3f59db0d149c463b7e+1),'notsync');  
unset($HY_0b2197fa139eb04d9f);
HY_d1d4ca7a0f847e44fe('kss_tb_sql_active表处理完成');	
}else{	
HY_d1d4ca7a0f847e44fe('备服kss_tb_sql_active表无数据');	
}

//查询备服kss_tb_sql_points更新主服 addtime  tbname  username  points  guid  svrid  

$HY_8c15ede9666f45d449='';
$HY_0a67e1c651c73d4a27=$HY_8a79dfcb4d67fab949->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql_points` order by id asc');	
if(!empty($HY_0a67e1c651c73d4a27)){
HY_d1d4ca7a0f847e44fe('开始处理kss_tb_sql_points表');	
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

$HY_8c15ede9666f45d449=HY_6bfeee86cee6e24af6(24);
foreach($HY_10bef590c6b19cf56e as $HY_5380a89366e616d954=>$HY_39f33d52374bdc42f7){  
$HY_1768f920a33ba395ac[1]=HY_c28ffe58a6314b1fd4();
if(HY_9887b284c1cb9655e9($HY_1768f920a33ba395ac)+2000>$HY_5db36be9db8bff44a9){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where guid=\''.$HY_8c15ede9666f45d449.'\'','notsync'); 
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑'.$HY_5db36be9db8bff44a9.'秒[points]');
$HY_82d6536edf704aabc5->HY_d3ead542a9f1e5cece();
$HY_8a79dfcb4d67fab949->HY_d3ead542a9f1e5cece();
exit();	
}
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('insert into kss_tb_sql_points (`addtime`,`tbname`,`username`,`points`,`guid`,`svrid`) values ('.time().',\''.$HY_39f33d52374bdc42f7[0].'\',\''.$HY_39f33d52374bdc42f7[1].'\','.$HY_39f33d52374bdc42f7[2].',\''.$HY_8c15ede9666f45d449.'\',2)','notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_3b22eac9ea6b5c92a5=$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('REPAIR TABLE kss_tb_sql_points','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where guid=\''.$HY_8c15ede9666f45d449.'\'','notsync'); 
HY_d1d4ca7a0f847e44fe('录入kss_tb_sql_points临时数据时出错'.$HY_3b22eac9ea6b5c92a5);
$HY_82d6536edf704aabc5->HY_d3ead542a9f1e5cece();
$HY_8a79dfcb4d67fab949->HY_d3ead542a9f1e5cece();
exit();	
}
}

$HY_173d86697f24ffa1ee=$HY_8a79dfcb4d67fab949->HY_e6e8aeec74e7b16058('delete from `kss_tb_sql_points` where id<'.($HY_3f59db0d149c463b7e+1),'notsync');  
if($HY_173d86697f24ffa1ee===false){
$HY_3b22eac9ea6b5c92a5=$HY_8a79dfcb4d67fab949->HY_8def866213a3d931dd();
$HY_8a79dfcb4d67fab949->HY_e6e8aeec74e7b16058('REPAIR TABLE kss_tb_sql_points','notsync');
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where guid=\''.$HY_8c15ede9666f45d449.'\'','notsync'); 
if($HY_173d86697f24ffa1ee===false){  
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('REPAIR TABLE kss_tb_sql_points','notsync');
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where guid=\''.$HY_8c15ede9666f45d449.'\'','notsync'); 
}
HY_d1d4ca7a0f847e44fe('删除备服已获取的点数记录时发生错误'.$HY_3b22eac9ea6b5c92a5);
$HY_82d6536edf704aabc5->HY_d3ead542a9f1e5cece();
$HY_8a79dfcb4d67fab949->HY_d3ead542a9f1e5cece();
exit();			
}		
HY_d1d4ca7a0f847e44fe('kss_tb_sql_points表处理完成');	
}else{	
HY_d1d4ca7a0f847e44fe('kss_tb_sql_points表无数据');	
}

HY_d1d4ca7a0f847e44fe('开始同步kss_tb_sql表');
//获取主服reg_sql表记录	
$HY_230eee78ed797f68ed=$HY_82d6536edf704aabc5->HY_409ede9e08e04ca87b('select count(*) as tnum from `kss_tb_sql` ');
if($HY_230eee78ed797f68ed['tnum']==0){
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑未发现待同步数据');	
exit();
}


$HY_bc854a58778efeb1d8=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql` order by id asc limit 0,500 ',1,1);
while(!empty($HY_bc854a58778efeb1d8)){
foreach ($HY_bc854a58778efeb1d8 as $HY_970be7709f584ff59c) {

HY_a4ad78c187f33b7070();
if($HY_970be7709f584ff59c['isact']==1){
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c['sqltext']);
}else{
$HY_173d86697f24ffa1ee=$HY_8a79dfcb4d67fab949->HY_e6e8aeec74e7b16058($HY_970be7709f584ff59c['sqltext']);			
}
if($HY_173d86697f24ffa1ee!==false){
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from `kss_tb_sql` where `id`='.$HY_970be7709f584ff59c['id'],'notsync');
}else{
if($HY_970be7709f584ff59c['isact']==1){
$HY_3b22eac9ea6b5c92a5=$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
}else{
$HY_3b22eac9ea6b5c92a5=$HY_8a79dfcb4d67fab949->HY_8def866213a3d931dd();				
}
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_config SET `sync_state`=`sync_state`+1 where id=1','notsync');
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑同步到日志ID='.$HY_970be7709f584ff59c['id'].'时出错！'.$HY_3b22eac9ea6b5c92a5.'	'.$HY_970be7709f584ff59c['sqltext']);
exit();
}
}
unset($HY_bc854a58778efeb1d8);
$HY_bc854a58778efeb1d8=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from `kss_tb_sql` order by id asc limit 0,500',1,1);
}
HY_d1d4ca7a0f847e44fe('kss_tb_sql表同步完成');
if($HY_8c15ede9666f45d449!=''){
$HY_9ad6ea74c0e2e149ff=$HY_82d6536edf704aabc5->HY_7cbdce9f890757a7f0('select * from kss_tb_sql_points where guid=\''.$HY_8c15ede9666f45d449.'\' ');  
foreach($HY_9ad6ea74c0e2e149ff as $HY_bd5db93722583f18d0){
$HY_173d86697f24ffa1ee=$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_z_user_'.$HY_bd5db93722583f18d0['tbname'].' set points=points-'.$HY_bd5db93722583f18d0['points'].' where `username`=\''.$HY_bd5db93722583f18d0['username'].'\'','notsync');
if($HY_173d86697f24ffa1ee===false){
$HY_3b22eac9ea6b5c92a5=$HY_82d6536edf704aabc5->HY_8def866213a3d931dd();
HY_d1d4ca7a0f847e44fe('更新主服点数时出错'.$HY_3b22eac9ea6b5c92a5);
exit();	
}
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('delete from kss_tb_sql_points where id='.$HY_bd5db93722583f18d0['id'],'notsync');
}
HY_d1d4ca7a0f847e44fe('点数处理完成');
}		
$HY_82d6536edf704aabc5->HY_e6e8aeec74e7b16058('update kss_tb_config SET `sync_state`=0 where id=1','notsync');
HY_d1d4ca7a0f847e44fe('↑↑↑↑↑↑↑↑↑↑↑所有待同步数据同步完成，本次共同步'.$HY_230eee78ed797f68ed['tnum'].'条SQL语句');
$HY_8a79dfcb4d67fab949->HY_d3ead542a9f1e5cece();
exit();
}
?>