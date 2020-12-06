<html>
<head>
<title></title>
<script type="text/javascript" src="cancelapp.js">
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
	
 <br>
 <div align="right"><h2><?php echo date("d-m-y");?></h2></div>
 <form action="" method="post" name="reg">
 <table align="center">
 <tr><td><div style="Font-Size:32pt;Color:#9900CC;">Cancel Appointment</div></td></tr>
 </table>
 <br><br><br><br><br><br><br><br><br>
 <div style="position:absolute;top:120pt;left:200pt;">
 <table style="height:173px;">
 <tr><td><div style="Font-Size:15pt;">Appointment Id</div></td>
 <td><input name="appid" placeholder="App ID" onblur="validate_appid2(this.value,'message1','Enter the App ID')" onclick="val_appid('message1')"></td>
 <td><span id="message1" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td><div style="Font-Size:15pt;">Email</div></td>
 <td><input type="text" placeholder="E-mail" name="email" onblur="validate_appid(this.value,'message2','Enter the Email')" onclick="val_appid('message2')"></td>
 <td><span id="message2" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td><div style="Font-Size:15pt;" >Password</div></td>
 <td><input type="password" placeholder="Password" name="password" onblur="validate_appid(this.value,'message3','Enter the password')" onclick="val_appid('message3')"></td>
 <td><span id="message3" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td><input type="submit" VALUE="Cancel Appointment" onmousedown="validate('<?php echo $_GET['email']?>')"></td></tr>
 </table>
 </div>
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
 <div align="center" style="font-size:22pt;color:red;" id="fail"><br><br>
 <?php
 if($_GET['con']=="1")
 echo "fields should not be empty";
 else if($_GET['con']=="3")
 echo "Incorrect Password";
 else if($_GET['con']=="2")
 echo "Incorrect Email ID";
 else if($_GET['con']=="4")
 echo "Appointment is cancelled";
 else
 {}
 ?>
 </div>

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>