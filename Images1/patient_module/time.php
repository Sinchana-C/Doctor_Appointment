<html>
<head>
<title></title>
<script type="text/javascript">
 function myFunction()
 {
  var date=document.reg.date.value;
  if(date=="select date")
   alert("Select date");
 }
</script>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="art-main">
<!-- />start 	header<!-->	
<div class="cleared reset-box"></div>
<div class="art-header">
 <div class="art-header-position">
  <div class="art-header-wrapper">
   <div class="cleared reset-box"></div>
    <div class="art-header-inner">
     <div class="art-logo">
	  <table><tr>
	   <td><img src="images/img7.png" width="100" height="100"/></td>
       <td> <h2 style="position:absolute;left:90pt;top:7pt;color:lightblue;font-size:20pt;" align="left">ONLINE</h2>
	   <h1 class="art-logo-name" ><a href="#" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;Doctor Appointment</a></h1>
          </td>
	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/img1.jpg" width="100" height="100"/></td></tr>
	  </table>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- />end 	header<!-->	
	
<!-- />	start header Buttons<!-->
<div class="cleared reset-box"></div>
<div class="art-bar art-nav">
 <div class="art-nav-outer">
  <div class="art-nav-wrapper">
   <div class="art-nav-inner">
	<ul class="art-hmenu">
	 <li><a href="pathome.php?con=2&con1=4&email=<?php echo $_GET['email']?>" class="active">home</a></li>	
     <li><a href="searchspl.php?con=2&spec=select&email=<?php echo $_GET['email']?>">Back</a></li>
	</ul>
   </div>
  </div>
 </div>
</div>
<!-- />	end header Buttons<!-->	
	
<!--/> start body <!-->
<div class="cleared reset-box"></div>
 <div class="art-box art-sheet">
  <div class="art-box-body art-sheet-body">
   <div class="art-layout-wrapper">
    <div class="art-content-layout">
     <div class="art-content-layout-row">
      <div class="art-layout-cell art-sidebar1">
						
						
 <br>
 <?php 
 include "connect.php";
 $query="select *from user_reg_tab";
 $sql_query=mysql_query($query);
 while($row=mysql_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:20pt;left:30pt;font-size:22pt;color:red ;'>Welcome : ".$row['name']."</div>";
 }
 ?><br><br>
 <div style='position:absolute;top:50pt;left:150pt;font-size:18pt;color:yellow;'>
 <?php
 $dname=$_GET['dname'];
 $demail=$_GET['demail'];
 echo "Appointment With : ".$dname;
 ?>

 <form action="time.php?con=1&email=<?php echo $_GET['email']?>&dname=<?php echo $_GET['dname'];?>&demail=<?php echo $_GET['demail'];?>  " method="POST" name="reg">


 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 DATE :&nbsp;<select name="date"><option>select date</option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d"),date("Y")); echo date("Y-m-d@l", $tomorrow);?> </option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+2,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+3,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+4,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+5,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+6,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+7,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+8,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+9,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+10,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+11,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+12,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+13,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+14,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 <option><?php $tomorrow = mktime(0,0,0,date("m"),date("d")+15,date("Y")); echo date("Y-m-d@l", $tomorrow);?></option>
 </select>
 </div>

<div style='position:absolute;top:75pt;left:565pt;font-size:18pt;color:green;'><input type="submit" value="Check Availability" onclick="myFunction()"/></div>
 </form>
 </table>


 <?php
 if($_GET['con']=="1")
 {
  $k=$_POST['date'];
  $date=explode("@",$k);
  if($date[0]=="select date")
  {
   header("Location:time.php?con=5&date=".$date[0]."&email=".$_GET['email']."&dname=".$_GET['dname']."&demail=".$_GET['demail']);
  }
 }
 else
 {
  $date[]=$_GET['date'];$date[1]="";
 } 
 if($date[0]!="select date"){?>
 <div style='position:absolute;top:100pt;left:400pt;font-size:18pt;color:red;font-weight:bold'><?php echo $date[0]." @ ".$date[1]; ?></div>
 <?php }//display the table
 if($date[0]!="select date")
 {?>
  <br><br>
  <table align="center" border="2" style="font-size:15pt;font-weight:bold;">
  <tr><td>WHEN</td><td>Is Appointment Available</td></tr>
 <?php $mail=$_GET['email'];
 
  include "connect.php";
  $query="select *from doc_tab";
  $sql_query=mysql_query($query);
  while($row=mysql_fetch_array($sql_query))
  {
   if($row['email']==$_GET['demail'])
   {
    $availtime=$row['availtime'];
    $dname=$row['dname'];
	$availdays=$row['availdays'];
   }
  }
  //checking doctor is available on particular day
 $sdate="/".$date[1]."/";
 if(preg_match($sdate,$availdays))
 {
  $day="1";
 }
 else
 {
  $day="0";?>
  <div style='position:absolute;top:100pt;left:149pt;font-size:18pt;color:red;font-weight:bold'><?php
  echo "Doctor is not available on "; ?></div><?php
 }
 
 $number=$availtime;
 $number1="0";
 $num1=explode(' to ',$number);
 function create_time_range($start, $end, $by='30 mins')
 {
  $start_time = strtotime($start);
  $end_time = strtotime($end);
  $times = array();
  for ( ;$start_time < $end_time; )
  {
   $times[] = $start_time;
   $start_time = strtotime('+'.$by, $start_time);
  }
  $times[] = $start_time;
  return $times;
 }
 $times = create_time_range($num1[0],$num1[1], '30 mins');
 $i="0";
 foreach ($times as $key => $time)
 {
  $times[$key] = date('g:ia', $time);
  // to print next times
  if($key!="0")
  $key1=$key-"1";
  else
  $key1="0";
  if($key!="0")
  { ?>
  <tr><td><?php $kri=$times[$key1]." to ". $times[$key]; echo $times[$key1]." to ". $times[$key]?></td><td>
  <?php
  $j="0";
  $k="0";
  $d="0";
  //print no
  if($day=="0")
  $d="1";
  $query2="select *from app_tab";
  $sql_query2=mysql_query($query2);
  while($row=mysql_fetch_array($sql_query2))
  { 
   if($row['dname']==$dname)
   {	  
    $dname1=$row['dname'];
    $apptime=$row['apptime'];
	$date1=$row['appdate'];
    if($dname1==$dname && $apptime==$kri && $date1==$date[0])
     $j="1";
    else
     $k="1";
	 $i="1";
   }
  }
  if($j=="1" || $d=="1")
  {
   echo "<div style='color:orange'>No</div>";
   $i="1";
  }
  else
  {
    $sdname=$_GET['dname'];
   echo "<a style='color:orange' href='payment.php?con=5&status=send&email=$mail&dname=$sdname&demail=$demail&appdate=$date[0]&apptime=$kri&appday=$date[1]'>Yes.Book Now</a>";
   $i="1";
  }
 
 if($i=="0")
 {
  $sdname=$_GET['dname'];
  echo "<a style='color:orange' href='payment.php?con=5&status=send&email=$mail&dname=$sdname&demail=$demail&appdate=$date[0]&apptime=$kri&appday=$date[1]'>Yes.Book Now</a>";
} 
 $i="1";
 ?> 
 </td></tr>
 <?php } } } ?>

<br><br><br><br><br><br>
<tr></tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
