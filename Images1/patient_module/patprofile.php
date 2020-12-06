<html>
<head>
<title></title>
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

 <br><br>
 <?php 
 include "connect.php";
 $query="select *from user_reg_tab";
 $sql_query=mysql_query($query);
 while($row=mysql_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:10pt;left:10pt;font-size:22pt;color:red ;'>Welcome : ".$row['name']."</div>";
 }
 ?>

 <br><br>
 <table border="8" height="500" width="500" align="center" style="font-size:20pt;">
 <?php
 $query="select *from user_reg_tab";
 $sql_query=mysql_query($query);
 while($row=mysql_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  {
   echo "<tr><td>Name</td><td>".$row['name']."</td></tr>";  
   echo "<tr><td>Email</td><td>".$row['email']."</td></tr>";
   echo "<tr><td>Gender</td><td>".$row['gender']."</td></tr>";
   echo "<tr><td>age</td><td>".$row['age']."</td></tr>";
   echo "<tr><td>dob</td><td>".$row['dob']."</td></tr>";
   echo "<tr><td>phone</td><td>".$row['phone']."</td></tr>";
  }
 }
 ?>
 </table>
 <br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
