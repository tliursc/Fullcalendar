<?php
$host="localhost";
$db_user="root";
$db_pass="1qazxsw2";
//$db_name="adic_calendar_DB";
$db_name="demo";
$timezone="Asia/Shanghai";
//创建连接
$link=mysql_connect($host,$db_user,$db_pass);
//检测连接
if (!$link){
	die("Connection failed:" . mysql_connect_error());
}
mysql_select_db($db_name,$link);//选择db
mysql_query("SET names UTF8");//设置db编码

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>
