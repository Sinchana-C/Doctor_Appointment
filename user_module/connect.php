<?php
$username="root";
$password="";
$database="127_0_0_1";
$servername="localhost";
/*mysqli_connect($server,$username,$password);
mysqli_select_db($database);*/
$conn=new mysqli($servername, $username, $password, $database);
?>

