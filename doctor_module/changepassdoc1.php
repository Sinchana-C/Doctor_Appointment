<?php
 include "connect.php";
 $oldpass=$_POST['oldpass'];
 $newpass=$_POST['newpass'];
 $cpassword=$_POST['cpassword'];
 $email=$_GET['email'];
 $query="select * from doc_tab";
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
  echo "Please enter the password";
  //header('Location:changepassdoc.php?status=fail&conn=1&email='.$_GET['email']);
 }
 else if($oldpass!=$password)
 {
  echo "invalid old password";
  //header('Location:changepassdoc.php?status=fail&conn=2&email='.$_GET['email']);
 }
 else if($newpass!=$cpassword)
 {
  echo "Both the new password and confirm password should Match";
 // header('Location:changepassdoc.php?status=fail&conn=3&email='.$_GET['email']);
 }
 else
 {
  $query2="UPDATE doc_tab SET password='$newpass' WHERE email='$email'";
  $sql_query2=mysqli_query($conn,$query2);
   echo "Password is Changed";
  //header('Location:changepassdoc.php?status=send&conn=4&email='.$_GET['email']);
 }
?>