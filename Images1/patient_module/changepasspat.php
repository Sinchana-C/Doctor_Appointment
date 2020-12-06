<html>
<head>
<title></title>
<script type="text/javascript" src="changepasspat.js">
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
						
						
 <div style="position:absolute;left:220pt;top:250pt;color:red;font-size:20pt" id="fail"><br><br>
 <?php
 if($_GET['con']=="1")
  echo "Please enter the password";
 else if($_GET['con']=="2")
  echo "invalid old password";
 else if($_GET['con']=="3")
  echo "Both the new password and confirm password should Match";
 else if($_GET['con']=="4")
  echo "Password is Changed";
 else
 {}
 ?>
 </div>

 <br><br><br><br><br>
 <div align="center" style="Font-Size:22pt;Color:#660066;">Change Your PassWord</div>
 <form action="" method="post" name="reg">
 <table align="center" style="height: 254px">
 <tr><td><div style="Font-Size:16pt;">Enter Old Password</div></td>
 <td><input type="password" name="oldpass" placeholder="Enter old password" /></td></tr>
 <tr><td><div style="Font-Size:16pt;">Enter New Password</div></td>
 <td><input type="password" name="newpass" placeholder="Enter New password" /></td></tr>
 <tr><td><div style="Font-Size:16pt">Confirm Password</div></td>
 <td><input type="password" name="cpassword" placeholder="Enter Confirm password"/></td></tr>
 <tr><td align="center"><input type="submit" value="Change Password" onmousedown="validate('<?php echo $_GET['email']?>')"/>
 <input type="Reset" value="Reset" /></td>
 </tr>
 </table>
 </form>
 <?php 
 include "connect.php";
 $query="select *from user_reg_tab";
 $sql_query=mysql_query($query);
 while($row=mysql_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:10pt;left:10pt;font-size:22pt;color:red;'>Welcome : ".$row['name']."</div>";
 }
 ?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
