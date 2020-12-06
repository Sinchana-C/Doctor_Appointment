 <?php
 include "connect.php";
 $demail=$_GET['demail'];
 $appdate=$_GET['appdate'];
 $appday=$_GET['appday'];
 $apptime=$_GET['apptime'];
 //retriving doctor details from doc_tab
 $query2="select *from doc_tab";
 $sql_query2=mysql_query($query2);
 while($row=mysql_fetch_array($sql_query2))
 {
  if($row['email']==$demail)
  {
   $docid=$row['docid'];
   $dname=$row['dname'];
   $venue=$row['address'];
   $hospital=$row['hospital'];
  }
 }
 $uname=$_POST['uname'];
 $name=$_POST['uname'];
 $email=$_POST['email'];
 //checking the appointment is already booked or not
 $temp="0";
 $query4="select *from app_tab";
 $sql_query4=mysql_query($query4);
 while($row=mysql_fetch_array($sql_query4))
 {
  if($row['name']==$uname & $row['docid']==$docid)
   $temp="1";
 }
 echo $row['name'];
 $amount=$_POST['amount'];
 $cardno=$_POST['cardno1'].$_POST['cardno2'].$_POST['cardno3'].$_POST['cardno4'];
 $cardtype=$_POST['cardtype'];
 $appid=rand();
 if($email=="" )
 {
  header('Location:payment.php?con=1&status=fail&email='.$_GET['email'].'&dname='.$dname.'&demail='.$demail.'&appdate='.$appdate.'&apptime='.$apptime.'&appday='.$appday);
 }
 else if($name=="" || $email=="" || $docid=="" || $appid=="" || $amount=="00" || $cardno=="" || $cardtype=="" || $venue=="" || $hospital=="")
 {
  echo "not inserted";
  header('Location:payment.php?con=2&status=fail&email='.$_GET['email'].'&dname='.$dname.'&demail='.$demail.'&appdate='.$appdate.'&apptime='.$apptime.'&appday='.$appday);
 }
 else if($temp=="1")
 {
  header('Location:payment.php?con=3&status=fail&email='.$_GET['email'].'&dname='.$dname.'&demail='.$demail.'&appdate='.$appdate.'&apptime='.$apptime.'&appday='.$appday);
 }
 else
 {
  $query="INSERT INTO pay_tab VALUES('$name','$email','$docid','$appid','$amount','$cardno','$cardtype')";
  $sql_query=mysql_query($query);
  $query2="INSERT INTO app_tab VALUES('$appid','$name','$email','$docid','$dname','$venue','$appdate','$appday','$apptime','$hospital')";
  $sql_query2=mysql_query($query2);
  header("Location:pathome.php?con=2&con1=5&email=".$_GET['email']."&uname=".$uname."&docid=".$docid);
 }
 ?>