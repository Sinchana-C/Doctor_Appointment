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
	
	
<div align="center" style="Font-Size:32pt;Color:orange;">All Patients</div>
<br><br><br><br><br><br>
     
 <?php
 include "connect.php";
 $query="select * from app_tab";
 $sql_query=mysqli_query($conn,$query);
 ?>  

 <table align="center" border="5" style="font-size:9pt">
 <tr><td><div style='Font-Size:15pt;'>App ID</div></td>
 <td><div style='Font-Size:15pt;'>Name</div></td>
 <td><div style='Font-Size:15pt;'>Email</div></td>
 <td><div style='Font-Size:15pt;'>Doc Id</div></td>
 <td><div style='Font-Size:15pt;'>Dname</div></td>
 <td><div style='Font-Size:15pt;'>Address</div></td>
 <td><div style='Font-Size:15pt;'>Appdate</div>
 <td><div style='Font-Size:15pt;'>Appday</div>
 <td><div style='Font-Size:15pt;'>Apptime</div></td></tr>
 <?php while($row=mysqli_fetch_array($sql_query))
 {
 ?>
 <tr><td><?php echo $row["appid"] ?></td>
 <td><?php echo $row["name"] ?></td>
 <td><?php echo $row["email"] ?></td>
 <td><?php echo $row["docid"]?></td>
 <td><?php echo $row["dname"]?></td>
 <td><?php echo $row["venue"]?></td>
 <td><?php echo $row["appdate"]?></td>
 <td><?php echo $row["appday"]?></td>
 <td><?php echo $row["apptime"]; }?></td></tr> </table>
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