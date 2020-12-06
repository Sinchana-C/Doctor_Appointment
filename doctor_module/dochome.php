<?php
 include 'connect.php';
 session_start();
 if(!isset($_SESSION['doctor_email']))
 {
  header('location://localhost/Doctor_Appointment/user_module/login.php?con=5&status=send');
 }
?>

<?php
if($_GET['con']=="2")
{
?>
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
	 <li><a href="appgrid.php?email=<?php echo $_GET['email'] ?>" class="active">My Appointments</a></li>	
	 <li><a href="docprofile.php?email=<?php echo $_GET['email'] ?>">My Profile</a></li>	
	 <li><a href="changepassdoc.php?email=<?php echo $_GET['email'] ?>">Change Password</a></li>
     <li><a href="//localhost/Doctor_Appointment/user_module/logout.php">logout</a></li>
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
 <table>
 <tr><td style="width:164px;"></td>
 <td>
 <table><tr>
  <td><img src="images/img2.jpg" width="200" height="200" /></td>
  <td><img src="images/img3.jpg" width="200" height="200" /></td>
  <td><img src="images/img5.jpg" width="200" height="200" /></td>
  <td><img src="images/img4.jpg" width="200" height="200"/></td>
 </tr>
 </table>
 <hr size="1" /></td>
 </tr>
 <td style="width:164px";></td>
 <td>
 <table>
 <tr><td style="height:37px">
 <div style="Font-Size:26pt;Color:yellow;"><b><center>Health Tips and Techniques &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></b></div></td></tr>
 <tr><td style="height:37px">
 <div style="background:pink;Font-Size:20pt;Color:red;"><center><b>Summer Care - Beat the heat with Fruit Juices</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></div>
 </td></tr>
 <tr>
 <td style="Font-Size:16pt;height:239px;width:1000px;color:white;"><br/>
 <p>Try out juices of grapes, watermelon, banana, jack fruit, lemon and pineapple during summer. Consumption of fruits and juices reduces body heat and benefits in controlling body temperature.ature.</p> 
 <p><b><font color=yellow size=4>SUMMER</font></b> is one of the six seasons of the year. Every two months will make a season or Ritu. Summer is in between the 16th May to 15th July. The strength of the body will be lost during this period. People feel tired and exhausted during the season due to extensive heat rays of the sun, the watery portion (or Kapha) of the body of people, animals, plants, foods and the entire environment will become dry and the vata will become more in the body and the atmosphere. The skin will become dry and may precipitate skin diseases as eczema..</p>
 <p><b><font color=yellow size=4>What to Drink and Eat: </font></b>One must drink the juices of grapes, watermelon, banana, jack fruit, lemon and pineapple. This is to say foods and juices of sweet and cold and easily digestible must be consumed. The preparations of sugar, barely/green gram, sharbats, buttermilk with sugar candy are to be used daily to cool the body. One must take the food of white rice with meat soup of meat of animals reared in cold areas.areas.</p></td>
 </table>
 </td></tr></table>
 </form>

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
 ?>
 <br><br><br><br>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>

<?php } ?>
