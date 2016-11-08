<?
error_reporting(E_ALL ^ E_NOTICE);
$dbhost="localhost";
$dbname="homevisit";
$dbuser="root";
$dbpass="";

mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

mysql_connect($dbhost,$dbuser,$dbpass) or die("ติดต่อฐานข้อมูลไม่ได้");
$db_found = mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");



?>