<?php
 include "connect.php";
 $appid=$_POST["appid"];
 $email=$_POST["email"];
 $pass=$_POST["password"];

 $query="select * from user_reg_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$email)
  {
   $password=$row['password'];  
   $email2=$row['email'];
  }
 }

 if($appid=="" || $email=="" || $pass=="")
 {
  //not deleted
  header('Location:cancelapp.php?con=1&status=fail&email='.$_GET['email']);
 }
 else if($email!=$email2)
 {
  //not deleted
  header('Location:cancelapp.php?con=2&status=fail&email='.$_GET['email']);
 }
 else if($pass!=$password)
 {
  //not deleted
  header('Location:cancelapp.php?con=3&status=fail&email='.$_GET['email']);
 }
 else
 {
  //deleted
  $query="delete from app_tab where appid='$appid'";
  $sql_query=mysqli_query($conn,$query);
  $query2="delete from pay_tab where appid='$appid'";
  $sql_query2=mysqli_query($conn,$query2);
  header('Location:cancelapp.php?con=4&status=send&email='.$_GET['email']);
 }
?>