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
	 <li><a href="admin.php?con=2" class="active">home</a></li>	
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
	

<div align="center" style="Font-Size:32pt;Color:orange;">Registered USERs</div>
<br><br><br><br><br><br>
     
 <?php
 include "connect.php";
 $query="select *from user_reg_tab";
 $sql_query=mysqli_query($conn,$query);
 ?>   

 <table align="center" border="3" style="font-size:15pt">
 <tr><td><div style='Font-Size:16pt;'>Name</div></td>
 <td><div style='Font-Size:16pt;'>Email</div></td>
 <td><div style='Font-Size:16pt;'>Gender</div></td>
 <td><div style='Font-Size:16pt;'>Age</div></td>
 <td><div style='Font-Size:16pt;'>DOB</div></td>
 <td><div style='Font-Size:16pt;'>phone No</div></td></tr>

 <?php while($row=mysqli_fetch_array($sql_query))
 {
 ?>
 <tr><td><?php echo $row["name"] ?></td>
 <td><?php echo $row["email"]?></td>
 <td><?php echo $row["gender"]?></td>
 <td><?php echo $row["age"]?></td>
 <td><?php echo $row["dob"]?></td>
 <td><?php echo $row["phone"]; }?></td></tr> </table>
 <?php   
 mysqli_close($conn);
 ?>
	
<br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>