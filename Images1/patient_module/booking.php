<html>
<head>
<title></title>
<script>
 function printpage()
 {
  window.print();
 }
 function closepage()
 {
  window.close();
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
	 <li><a href="" class="active" onclick="printpage()">PRINT this page</a></li>	
	 <li><a href="" onclick="closepage()" >CLOSE this page</a></li>
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

<!-- background table --/><!-->
 <table border="3" height="550" width="880" bgcolor="">
 <tr><td>
 <table>
 <div style="position:absolute;left:10pt;top:20pt;width:830px;color:yellow;font-size:28pt;background-color:green;"><center>Booking Completed</center></div>
 <img src="images/img2.jpg" style="position:absolute;left:20pt;top:60pt;"/>
 <div style="position:absolute;left:200pt;top:60pt;font-size:22pt;color:red">
 <?php
 include "connect.php";
 $query="select *from app_tab";
 $sql_query=mysql_query($query);
 while($row=mysql_fetch_array($sql_query))
 {
  if($row['name']==$_GET['uname'] & $row['docid']==$_GET['docid'])
  {
   $appid=$row['appid'];
   $name=$row['name'];
   $appdate=$row['appdate'];
   $apptime=$row['apptime'];
   $dname=$row['dname'];
   $hospital=$row['hospital']; 
   $venue=$row['venue'];
  }
 }
 $query="select *from doc_tab";
 $sql_query=mysql_query($query);
 while($row=mysql_fetch_array($sql_query))
 {
  if($row['dname']==$dname)
  {
   $qualification=$row['qualification'];
  }
 }
 ?>
 APPID:<?php echo "<div style='position:absolute;left:100pt;top:0pt;color:red;'>".$appid."</div>"?><br>
 <hr width="550"/>
 Patient:<?php echo "<div style='position:absolute;left:100pt;top:40pt;color:#00FF00;'>".$name."</div>"?><br>
 <hr width="550"/>
 When:<?php echo "<div style='position:absolute;left:100pt;top:100pt;color:#00FF00;;'>".$appdate."<br>".$apptime."</div>"?><br></br>
 <hr/>
 With:<?php echo "<div style='position:absolute;left:100pt;top:180pt;color:#00FF00;;'>".$dname."</div><br><div style='position:absolute;left:100pt;top:210pt;color:#00FF00;;font-size:15pt'>".$qualification."</div>"?><br>
 <hr/>
 Where:<?php echo "<div style='position:absolute;left:100pt;top:250pt;color:#00FF00;;'>".$hospital."</div><br><div style='position:absolute;left:100pt;top:280pt;color:#00FF00;;font-size:15pt'>".$venue."</div>"?><br>
 <hr/>
 </div>
 <br><br><br>
 </table>
 </td></tr>
 </table>
 </hr>

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>