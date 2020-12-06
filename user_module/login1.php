<?php 
include "connect.php";
$login=$_POST['login'];
 if($login=="1")//doctor login
 {
  $i="0";
  $query="select * from doc_tab";
  $sql_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($sql_query))
  {
   if($_POST['email'] == $row['email'] && $_POST['password'] == $row['password'])
	{
     $i="1";
	 session_start();
	 $_SESSION['doctor_email']=$_POST['email'];
     header("Location://localhost/Doctor_Appointment/doctor_module/dochome.php?con=2&email=".$_POST['email']);
	}
   }
  if($i=="0")
  header('Location:login.php?con=5&status=fail');  
 }
 else if($login=="2")//user or patient login
 {
  $i="0";
  $query="select * from user_reg_tab";
  $sql_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($sql_query))
  {
   if($_POST['email'] == $row['email'] && $_POST['password'] == $row['password'])
   {
	$i="1";
	session_start();
	$_SESSION['patient_email']=$_POST['email'];
	header("Location://localhost/Doctor_Appointment/patient_module/pathome.php?con=2&conn1=4&email=".$_POST['email']);
   }
  }
  if($i=="0")
  {
   header('Location:login.php?con=5&status=fail');
  }
 }
 if($i=="0")
 {
  header('Location:login.php?con=5&status=fail');
 }
 else//admin login
 {
  $i="0";
  $query="select *from admin_tab";
  $sql_query=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($sql_query))
  {
   if($_POST['email'] == $row['email'] && $_POST['password'] == $row['password'])
   {
	$i="1";
	session_start();
	$_SESSION['admin_email']=$_POST['email'];
    header("Location://localhost/Doctor_Appointment/admin_module/admin.php?con=2&email=".$_POST['email']);
   }
  }
  if($i=="0")
  {  
    header('Location:login.php?con&status=fail');
  }
 }
?>