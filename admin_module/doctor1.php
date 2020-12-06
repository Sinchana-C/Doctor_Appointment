<?php
 $ak="0";
 include "connect.php";
 $email=$_POST['email'];
 $query="SELECT *FROM doc_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($email==$row['email'])
  {
   header('Location:doctor.php?con=4&status=fail');
   $ak="1";
  }
 }

 $docid=rand();
 $dname=$_POST['dname'];
 $email=$_POST['email'];
 $spl=$_POST['spl'];
 $qual=$_POST['qual'];
 $gender=$_POST['gender'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
 $hospital=$_POST['hospital'];
 $availtime1=$_POST['availtime1'];
 $availtime2=$_POST['availtime2'];
 $availtime=$availtime1." to ".$availtime2;
 $days=$_POST['day'];
 $availdays="";
 $k="0";
 for($i=0;$i<sizeof($days);$i++)
 {
  echo $days[$i];
  if($k=="0"){
   $availdays=$availdays.$days[$i];
   $k="1"; }
  else
   $availdays=$availdays.",".$days[$i];
 }
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];

 if($docid=="" || $dname=="" || $email=="" || $spl=="" || $qual=="" || $gender=="" || $address=="" || $phone=="" || $hospital=="" || $availtime1=="select" || $availtime2=="select" || $availdays=="" || $password=="" || $cpassword=="")
 {
  //echo "not inserted"; 
  header('Location:doctor.php?con=1&status=fail');
 }
 else if($password != $cpassword)
 {
  echo "wrong pass"; 
  header('Location:doctor.php?con=3&status=fail');
 }
 else if($ak=="0")
 {
  $query="INSERT INTO doc_tab(docid,dname,email,specialist,qualification,gender,address,phone,hospital,availtime,availdays,password) VALUES('$docid','$dname','$email','$spl','$qual','$gender','$address','$phone','$hospital','$availtime','$availdays','$password')";
  $result=mysqli_query($conn,$query);
  header('Location:admin.php?con=2&status=send');
 }
 mysqli_close();
?>