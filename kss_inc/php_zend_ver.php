<?php  /*# Copyright(C) 2008-2014 www.hphu.com, All rights Reserved.  version:100414  KEY:ksreg20151129 */ ?><?php
// ���ļ������ phpinfo()����������еĵ�һ��table�͵�����table����
ob_start();
phpinfo();
$HY_da450c36068b42610f = ob_get_contents();
ob_end_clean();

//���ҵ�һ��table�Ľ�����ǩ
$HY_4b4267526813e74cc7=stripos($HY_da450c36068b42610f,'</table>');
$HY_92759b34038f62a394=substr($HY_da450c36068b42610f,0,$HY_4b4267526813e74cc7+8);

//���ҵ�����table�Ŀ�ʼ��ǩ
$HY_30ffe8a299c1160fa9=substr($HY_da450c36068b42610f,$HY_4b4267526813e74cc7+100);
$HY_05524c0e805d9bc7ec=stripos($HY_30ffe8a299c1160fa9,'<table');
$HY_9e67959ffad4d6ad3e=substr($HY_30ffe8a299c1160fa9,$HY_05524c0e805d9bc7ec);

//���ҵ�����table�Ľ�����ǩ
$HY_05524c0e805d9bc7ec=stripos($HY_9e67959ffad4d6ad3e,'</table>');
$HY_841b13aec7725082c8=substr($HY_9e67959ffad4d6ad3e,0,$HY_05524c0e805d9bc7ec+8);

echo $HY_92759b34038f62a394,'<br><br>',$HY_841b13aec7725082c8;
?>