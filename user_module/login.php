
<?php
 include('connect.php');
 session_start();
 if(isset($_SESSION['patient_email']))
 {
  $k=$_SESSION['patient_email'];
  header('location://localhost/Doctor_Appointment/patient_module/pathome.php?con=2&con1=4&email='.$k);
 }
 if(isset($_SESSION['doctor_email']))
 {
  $k=$_SESSION['doctor_email'];
  header('location://localhost/Doctor_Appointment/doctor_module/dochome.php?con=2&email='.$k);
 }
 if(isset($_SESSION['admin_email']))
 {
  $k=$_SESSION['admin_email'];
  header('location://localhost/Doctor_Appointment/admin_module/admin.php?con=2&email='.$k);
 }	
?>

<html>
<head>
<title>login</title>
<script type="text/javascript" src="login.js">
</script>
<link rel="stylesheet" href="style.css" type="text/css" />
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
	 <li><a href="genhome.php" class="active">home</a></li>	
	 <li><a href="searchspl.php?con=2&spec=select">Doctor Availability</a></li>	
     <li><a href="feedback.php?con=3">FeedBack</a></li>	
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
 <div align="right"><h2><?php echo date("d-m-y");?></h2></div>
 <form action="login1.php" method="POST" name="reg">
 <div style="position:absolute;left:200pt;top:100pt;font-size:19pt;"><a style="color:orange;" href="register.php?con=5">NEW USER</a></div>

 <br><br><br><br>
 <div style="position:absolute;left:200pt;top:50pt;font-size:20pt;"><input type="radio" name="login" value="2" checked="checked">Patient</div>
 <div style="position:absolute;left:290pt;top:50pt;font-size:20pt;"><input type="radio" name="login" value="1">Doctor</div>
 <div style="position:absolute;left:370pt;top:50pt;font-size:20pt;"><input type="radio" name="login" value="3">admin</div>
 <br><br>
 <table align="center">
 <tr>
 <td><div style="Font-Size:22pt;Color:Pink;">Login Now</div></td></tr>
 <tr>
 <td><div style="Font-Size:16pt;">Email:</div></td>
 <td><input type="text" name="email" placeholder="E-mail" onblur="validate_email(this.value,'message1','Enter the Email')" onclick="val_email('message1')"/></td></tr>
 <tr><td><div style="Font-Size:16pt;" >Password:</div></td>
 <td><input type="password" name="password" placeholder="Password" onblur="validate_email(this.value,'message2','Enter the password')" onclick="val_email('message2')"/></td></tr>
 <span id="message1" style="position:absolute;left:460pt;top:160pt;color:red;font-size:16pt;"></span>
 <span id="message2" style="position:absolute;left:460pt;top:180pt;color:red;font-size:16pt;"></span> 
 <tr><td><input type="submit" value="Log In" onmousedown="validate()" />
 <input type="reset" value="Reset"/></td>
 </tr>
 </table>
 </form>

<?php
 include "connect.php";
 $status=$_GET['status'];
 if($status=="fail")
 {?>
  <div style="position:absolute;left:150pt;top:260pt;Font-Size:22pt;color:pink;" id="fail" > <?php echo "incorrect username or password";?></div><?php 
 }
 ?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>