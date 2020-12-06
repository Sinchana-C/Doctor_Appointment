<?php
$username="root";
$password="";
$database="127_0_0_1";
$servername="localhost";
/*mysql_connect($server,$root,$root123);
mysql_select_db($database);*/
$conn=new mysqli($servername, $username, $password, $database);
?>