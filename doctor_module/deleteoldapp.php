<?php
 //DELETE Appointment
 include "connect.php";
 $demail=$_GET['demail'];
 $query="select * from doc_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$demail)
  $docid=$row['docid'];
 }
 $query="select * from app_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['appdate']<date("Y-m-d") && $docid==$row['docid'])
  { 
   $appid=$row['appid'];
   $query1="delete from app_tab where appid='$appid'";
   $sql_query1=mysqli_query($conn,$query1);
   $query2="delete from pay_tab where appid='$appid'";
   $sql_query2=mysqli_query($conn,$query2);
  }
 }
 echo $demail;
 header('Location:appgrid.php?con=5&email='.$demail);
?>