<?php
 include "connect.php";
 $name=$_POST['name'];
 $email=$_POST['email'];
 $comment=$_POST['comment'];
 if($name=="" || $email=="" || $comment=="")
 {
  header('Location:feedback.php?status=fail&con=1&email='.$_GET['email']);
 }
 else
 {
  $query="INSERT INTO feedback_tab(name,email,comment) VALUES('$name','$email','$comment')";
  $result=mysqli_query($conn,$query);
  header('Location:feedback.php?status=send&con=4&email='.$_GET['email']);
 }
 mysql_close(); 
?>