<html>
<head>
<title></title>
<script type="text/javascript" src="feedback.js">
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
						
							
 <br><br><br><br>			
 <div align="center" style="Font-Size:22pt;Color:#6600FF;">Write your Comments here</div><br>
 <form action="feedback1.php?email=" method="post" name="reg">
 <table style="position:absolute;left:220pt;top:100pt;">
 <tr>
 <td><div style="Font-Size:16pt;">Name</div></td>
 <td><input type="text" name="name" maxlength="20" placeholder="Enter your Name" onblur="validate_name1(this.value,'message1','Enter your Name')" onclick="val_name('message1')"/></td>
 <td><span id="message1" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td><div style="Font-Size:16pt;">Email Id</div></td>
 <td><input type="text" name="email" maxlength="30" placeholder="Enter your E-mail" onblur="validate_name(this.value,'message2','Enter the Email')" onclick="val_name('message2')"/></td>
 <td><span id="message2" style="color:red;font-size:16pt;"></span></td></tr>
 </table>
 <table style="position:absolute;left:220pt;top:150pt;">
 <tr><td><div style="Font-Size:16pt;">Comment</div></td>
 </tr><br/>
 <tr><td><textarea rows="5" cols="25" maxlength="100" name="comment" placeholder="Enter the Comment" onblur="validate_name(this.value,'message3','Enter the Comment')" onclick="val_name('message3')"></textarea></td>
 <td><span id="message3" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><br /><div align="center"><br /><input type="submit" value="SEND" onmousedown="validate('<?php echo $_GET['email']?>')" />
 <input type="reset" value="RESET" /></div></td>
 </tr>
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
 ?>
 <div style="position:absolute;left:180pt;top:250pt;color:red;font-size:20pt" id="fail"><br><br>
 <?php
 if($_GET['con']=="1")
  echo "fields should not be empty";
 else if($_GET['con']=="4")
  echo "Thank You for your Feedback";
 else
 {}
 ?>
 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>