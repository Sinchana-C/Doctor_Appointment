<?php//patient module?>
<html>
<head>
<title></title>
<script type="text/javascript" src="searchspl.js">
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

 <br><br><br>
 <form action="searchspl.php?con=1&email=<?php echo $_GET['email']?>" method="POST" name="reg">
 <div><center><div style="Font-Size:22pt;Color:#660066;">Search the Specialists To Take Appointments</div></center></div>
 <table align="center">
 <tr><td><select name="spec">
    <option Value="">-Select-</option>
    <option Value="physician">Physician</option>
    <option Value="skin">Skin</option>
    <option Value="neurologist">Neurologist</option>
    <option Value="cardiologist">Cardiologist</option>
    <option Value="children">Children Specialist</option>
    <option Value="dentist">Dentist</option>
    <option Value="psychiatrist">Psychiatrist</option>
    <option Value="eye">Eye Specialist</option>
    <option Value="general surgeon">General Surgeon</option>
	<option Value="orthapaedic">Orthapaedic</option>
    </select></td>
 <td><input type="submit" value="SEARCH" onclick="validate('<?php echo $_GET['email']?>')"/></td></tr>
 </table>
 </form>

 <?php 
 include "connect.php";
 $query="select * from user_reg_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:10pt;left:10pt;font-size:22pt;color:pink;'>Welcome : ".$row['name']."</div>";
 }
 
 $query="select * from doc_tab";
 $sql_query=mysqli_query($conn,$query);
 if($_GET['con']=="1")
  $spl=$_POST["spec"];
 else
  $spl=$_GET["spec"];

if($_GET['con']=="1")
{ ?>
 
 <table align='center' style="height:100px;bgcolor:olive;">
 <tr><td align='center'><div style='Font-Size:22pt;Color:Yellow;'>Doctor Details</div></td></tr>
 </table>
 <div align="right" style='Font-Size:16pt;color:pink;'><blink>click on DOCTOR NAME to check availability and book appoinment</blink></div>
 <table align="center" border="5" style="font-size:10pt;font-weight:bold;">
 <tr><td><div style='Font-Size:16pt;'>Name</div></td>
 <td><div style='Font-Size:16pt;'>E-mail</div></td>
 <td><div style='Font-Size:16pt;'>Specialist</div></td>
 <td><div style='Font-Size:16pt;'>Qualification</div></td>
 <td><div style='Font-Size:16pt;'>Mobile No</div></td>
 <td><div style='Font-Size:16pt;'>Current Hospital</div></td>
 <td><div style='Font-Size:16pt;'>Address</div></td>
 <td><div style='Font-Size:16pt;'>Time</div></td></tr>
 <?php while($row=mysqli_fetch_array($sql_query))
 {
  $spl2=$row["specialist"];
 ?>
 <form action="time.php" method="post">
 <?php if($spl==$spl2){ ?><tr><td><a style="color:#FFFF00" href="time.php?con=5&date=select date&email=<?php echo $_GET['email']?>&dname=<?php echo $row['dname']?>&demail=<?php echo $row['email']?>  "><?php echo $row["dname"] ?></a></td>
 <td><?php echo $row["email"]?></td>
 <td><?php echo $row["specialist"]?></td>
 <td><?php echo $row["qualification"]?></td>
 <td><?php echo $row["phone"]?></td>
 <td><?php echo $row["hospital"]?></td>
 <td><?php echo $row["address"]?></td>
 <td><?php echo $row["availtime"];?></td>
 <?php } ?></tr>
 <?php }  
  }   
 mysqli_close($conn); 
 ?>
 </form>
 </table>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     
	  </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>