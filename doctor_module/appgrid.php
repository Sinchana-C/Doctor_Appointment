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
	 <!--<li><a href="deleteoldapp.php?demail=<?php echo $_GET['email']; ?>" class="active">Delete Old appoitment</a></li>-->	
	 <li><a href="dochome.php?con=2&email=<?php echo $_GET['email'] ?>">home</a></li>
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
		
			
 <?php
 include "connect.php";
 $query="select * from doc_tab";
 $sql_query=mysqli_query($conn,$query);
 $dname="Dr.vishnu";
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:10pt;left:10pt;font-size:22pt;color:pink;'>Welcome : ".$row['dname']."</div>";
 }
 
 $query1="select * from doc_tab";
 $sql_query1=mysqli_query($conn,$query1);
 while($row=mysqli_fetch_array($sql_query1))
 {
  if($row['email']==$_GET['email'])
  {
   $dname=$row['dname'];
  }
 }
 $c="0";
 $query="select * from app_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row["dname"]==$dname)
  {
   $c="1";
  }
 }
 ?>
 <br><br><br>
 <div align="center" style="Font-Size:32pt;color:yellow;">My Appointments</div>
 <?php
 if($c=="1")
 {
  include "connect.php";
  $query="select * from app_tab";
  $sql_query=mysqli_query($conn,$query);
 ?>  
 <br><br>
 <table align="center" border="3" style="font-size:10pt;">
 <tr><td><div style='Font-Size:14pt;'>App ID</div></td>
 <td><div style='Font-Size:14pt;'>Patient Name</div></td>
 <td><div style='Font-Size:14pt;'>Patient Email</div></td>
 <td><div style='Font-Size:14pt;'>Doc Id</div></td>
 <td><div style='Font-Size:14pt;'>Dname</div></td>
 <td><div style='Font-Size:14pt;'>Hospital</div></td>
 <td><div style='Font-Size:14pt;'>Address</div></td>
 <td><div style='Font-Size:14pt;'>Appdate</div></td>
 <td><div style='Font-Size:14pt;'>Appday</div></td>
 <td><div style='Font-Size:14pt;'>Apptime</div></td></tr>
 <?php while($row=mysqli_fetch_array($sql_query))
 {?>
 <?php if($row["dname"]==$dname){?>
 <tr><td><?php echo $row["appid"] ?></td>
 <td><?php echo $row["name"] ?></td>
 <td><?php echo $row["email"] ?></td>
 <td><?php echo $row["docid"]?></td>
 <td><?php echo $row["dname"]?></td>
 <td><?php echo $row["hospital"]?></td>
 <td><?php echo $row["venue"]?></td>
 <td><?php echo $row["appdate"]?></td>
 <td><?php echo $row["appday"]?></td>
 <td><?php echo $row["apptime"]?></td></tr>
 <?php } } ?>
 </table>
 <?php
 mysqli_close($conn);
 }
 else
 {
  echo "<br><br><br><br><br><br><div align='center' style='Font-Size:25pt;color:pink;'>You Don't have Apointments</div>";
 }
 ?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
