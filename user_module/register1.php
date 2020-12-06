
	
<?php
$ak="0";
include "connect.php";
$email=$_POST['email'];
$query="SELECT *FROM user_reg_tab";
$sql_query=mysqli_query($query);
while($row=mysqli_fetch_array($sql_query))
{
  if($email==$row['email'])
  {
   header('Location:register.php?con=4&status=fail');
   $ak="1";
  }
 }
?>
<?php 
include "connect.php";
 $name=$_POST['name'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $age=$_POST['age'];
 $dob=$_POST['dob1']."-".$_POST['dob2']."-".$_POST['dob3'];
 $phone=$_POST['phone'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
 if($name=="" || $email=="" || $gender=="" || $age=="" || $_POST['dob1']=="00" || $_POST['dob2']=="00" || $_POST['dob3']=="00" || $phone=="" || $password=="")
 {
  echo "not inserted"; header('Location:register.php?con=1&status=fail');
 }
 else if($password != $cpassword)
 {
  echo "wrong pass"; header('Location:register.php?con=3&status=fail');
 }
 else if($ak=="0")
 {
  $query="INSERT INTO user_reg_tab(name,email,gender,age,dob,phone,password) VALUES('$name','$email','$gender','$age','$dob','$phone','$password')";
  $result=mysqli_query($conn,$query);
  echo "inserted";
  header('Location:login.php?con=2&status=send');
}
mysqli_close($conn);
?>