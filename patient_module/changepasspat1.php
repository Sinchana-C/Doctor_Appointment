<?php
 include "connect.php";
 $oldpass=$_POST['oldpass'];
 $newpass=$_POST['newpass'];
 $cpassword=$_POST['cpassword'];
 $email=$_GET['email'];
 
 $query="select * from user_reg_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$email)
  {
   $password=$row['password'];
  }
 }

 if($oldpass=="" || $newpass=="" || $cpassword=="")
 {
  header('Location:changepasspat.php?status=fail&con=1&email='.$_GET['email']);
 }
 else if($oldpass!=$password)
 {
  header('Location:changepasspat.php?status=fail&con=2&email='.$_GET['email']);
 }
 else if($newpass!=$cpassword)
 {
  header('Location:changepasspat.php?status=fail&con=3&email='.$_GET['email']);
 }
 else
 {
  $query2="UPDATE user_reg_tab SET password='$newpass' WHERE email='$email'";
  $sql_query2=mysqli_query($conn,$query2);
  header('Location:changepasspat.php?status=send&con=4&email='.$_GET['email']);
 }
?>