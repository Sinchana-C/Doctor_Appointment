<html>
<head>
<title></title>
<script type="text/javascript" src="changepassdoc.js">
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
	 <li><a href="dochome.php?con=2&email=<?php echo $_GET['email'] ?>" class="active">Home</a></li>	
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
				
<!--<div style="position:absolute;left:220pt;top:250pt;color:red;font-size:20pt" id="fail"><br><br>
 <?php
 /*if($_GET['con']=="1")
  echo "Please enter the password";
 else if($_GET['con']=="2")
  echo "invalid old password";
 else if($_GET['con']=="3")
  echo "Both the new password and confirm password should Match";
 else if($_GET['con']=="4")
  echo "Password is Changed";
 else
 {}*/
 ?>
 </div>-->

				
 <br /><br />
 <form action="changepassdoc.php?email=<?php echo $_GET['email']?>" method="post" name="reg">
 <table align="center" style="height: 254px">
 <tr><td align="center"><div style="Font-Size:16pt;Color:#660066;">Change Your PassWord</div></td></tr>
 <tr><td><div style="Font-Size:16pt;">Enter Old Password</div></td>
 <td><input type="password" name="oldpass"/></td></tr>
 <tr><td><div style="Font-Size:16pt;">Enter New Password</div></td>
 <td><input type="password" name="newpass"/></td></tr>
 <tr><td><div style="Font-Size:16pt">Confirm Password</div></td>
 <td><input type="password" name="cpassword"/></td></tr>
 <tr><td align="center"><input type="submit" value="Change Password" onclick="validate()"/><input type="hidden" name="submit">
 <input type="Reset" value="Reset" /></td>
 </tr>
 </table>
 </form>
 <?php 
 include "connect.php";
 $query="select * from doc_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$_GET['email'])
  echo "<div style='position:absolute;top:10pt;left:10pt;font-size:22pt;color:pink;'>Welcome : ".$row['dname']."</div>";
 }
 ?> 
 <br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>


<?php
 include "connect.php";
 
 if(isset($_POST['submit']))
 {
 $oldpass=isset($_POST['oldpass']) ? $_POST['oldpass'] : '';
 $newpass=isset($_POST['newpass']) ? $_POST['newpass'] : '';
 $cpassword=isset($_POST['cpassword']) ? $_POST['cpassword'] : '';
 //$newpass=$_POST['newpass'];
 //$cpassword=$_POST['cpassword'];
 $email=$_GET['email'];
 
 $query="select * from doc_tab";
 $sql_query=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql_query))
 {
  if($row['email']==$email)
  {
   $password=$row['password'];
  }
 }
?>
<div style="position:absolute;left:350pt;top:390pt;color:pink;font-size:25pt" id="fail">
<?php
 if($oldpass=="" || $newpass=="" || $cpassword=="")
 {
	echo "Please enter the password";
  //header('Location:changepassdoc.php?status=fail&conn=1&email='.$_GET['email']);
 }
 else if($oldpass!=$password)
 {
  echo "invalid old password";
  //header('Location:changepassdoc.php?status=fail&conn=2&email='.$_GET['email']);
 }
 else if($newpass!=$cpassword)
 {
	  echo "Both new and confirm password should Match";
  //header('Location:changepassdoc.php?status=fail&conn=3&email='.$_GET['email']);
 }
 else
 {
  $query2="UPDATE doc_tab SET password='$newpass' WHERE email='$email'";
  $sql_query2=mysqli_query($conn,$query2);
   echo "Password is Changed";
  //header('Location:changepassdoc.php?status=send&conn=4&email='.$_GET['email']);
 }
 ?>
 </div>
 <?php
 }
?>

