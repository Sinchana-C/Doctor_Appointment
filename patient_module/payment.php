<html>
<head>
<title></title> 
<script type="text/javascript" src="payment.js">
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
	  <table>
	   <tr><td><img src="images/img7.png" width="100" height="100"/></td>
        <td> <h2 style="position:absolute;left:90pt;top:7pt;color:lightblue;font-size:20pt;" align="left">ONLINE</h2><BR><BR><BR>
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
	 <li><a href="time.php?con=5&date=select date&email=<?php echo $_GET['email']?>&dname=<?php echo $_GET['dname']?>&demail=<?php echo $_GET['demail']?>">Back</a></li>
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
 $query="select * from user_reg_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:10pt;left:10pt;font-size:22pt;color:pink;'>Welcome : ".$row['name']."</div>";  
 }
 ?>
 <div style="position:absolute;left:150pt;top:300pt;color:pink;font-size:17pt" id="fail">
 <?php
 $con=$_GET['con'];
 if($con=="1")
  echo "Enter Correct name to book app ";
 else if($con=="3")
  echo "You have already booked the appointment with ".$_GET['dname'];
 else
 {}
 ?>
 </div>

 <?php
 //session_start();
  $demail=$_GET['demail'];
  $appdate=$_GET['appdate'];
  $apptime=$_GET['apptime'];
  $appday=$_GET['appday'];
 ?>

 <br><br><br>
 <form action="payment1.php?email=<?php echo $_GET['email']?>&demail=<?php echo $_GET['demail']?>&appdate=<?php echo $_GET['appdate'];?>&apptime=<?php echo $_GET['apptime'];?>&appday=<?php echo $_GET['appday'];?>" method="post" name="reg" id="reg">
 <table style="position:absolute;top:100pt;left:150pt;">
 <tr>
  <td><div style="Font-Size:18pt;">Patient name</div></td>
  <td><input type="text" name="uname" onblur="validate_name()" onclick="val_name('message1')" size="25"/></td>
  <td><span id="message1" style="color:pink;font-size:16pt;"></span></td>
 </tr>
 <tr>
  <td><div style="Font-Size:18pt;">Patient Email</div></td>
  <td><input type="text" name="email" onblur="validate_name()" onclick="val_name('message1')" size="25"/></td>
  <td><span id="message1" style="color:pink;font-size:16pt;"></span></td>
 </tr>
 <tr>
  <td><div style="Font-Size:18pt;">Amount(Rs)</div></td>
  <td><select name="amount" onblur="validate_email(this.value,'message2','Select the Amount')" onclick="val_name('message2')">
   <option value=""/>--Select--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <option>100</option></select></td>
 <td><span id="message2" style="color:pink;font-size:16pt;"></span></td>
 </tr>
 <tr>
 <td><div style="Font-Size:18pt;">Card No</div></td>
 <td> <input type="text" size="4" name="cardno1" maxlength="4" onblur="validate_cardno()" onclick="val_name('message3')"/>
 <input type="text" size="4" name="cardno2" maxlength="4" onblur="validate_cardno()" onclick="val_name('message3')"/>
 <input type="text" size="4" name="cardno3" maxlength="4" onblur="validate_cardno()" onclick="val_name('message3')"/>
 <input type="text" size="4" name="cardno4" maxlength="4" onblur="validate_cardno()" onclick="val_name('message3')"/></td>
 <td><span id="message3" style="color:pink;font-size:16pt;"></span></td>
 </tr>
 <tr>
 <td><div style="Font-Size:18pt;">Card Type</div></td>
 <td><select name="cardtype" onblur="validate_email(this.value,'message4','Select the Card Type')" onclick="val_name('message4')">
 <option Value=""/>--Select--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <option Value="master card">Master Card</option>
 <option Value="visa">Visa</option>
 </select></td>
 <td><span id="message4" style="color:pink;font-size:16pt;"></span></td></tr>
 <tr>
 <td></td>
 <td align="center" ><br/><br/><input type="submit" name="kk" value="PAY" onclick="validate('payment1.php?email=<?php echo $_GET['email']?>&dname=<?php echo $_GET['dname']?>&demail=<?php echo $demail;?>&appdate=<?php echo $appdate?>&appday=<?php echo $appday?>&apptime=<?php echo $apptime ?>')"/>
 <input type="reset" value="Reset" size="8"/></td></tr>
 </table>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </form>

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>