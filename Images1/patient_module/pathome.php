<?php
 include 'connect.php';
 session_start();
 if(!isset($_SESSION['patient_email']))
 {
  header('location://localhost/Doctor_Appointment/user_module/login.php?con=5&status=send');
 }

 if($_GET['con']=="2")
 {
  if($_GET['con1']=="5")
  { ?>
  <script type="text/javascript">
  function book(value,docid)
  {
   window.open("booking.php?uname="+value+"&docid="+docid);
  } 
  book('<?php echo $_GET['uname'] ?>','<?php echo $_GET['docid'] ?>'); 
  </script>
  <?php } ?>

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
	 <li><a href="" class="active">appointment</a>
	  <ul><li><a href="searchspl.php?con=2&spec=select&email=<?php echo $_GET['email']?>">Book Appointment</a></li>
	   <li><a href="cancelapp.php?con=5&email=<?php echo $_GET['email']?>">Cancel Appointment</a></li>
	  </ul>
	 </li>	
	 <li><a href="patprofile.php?email=<?php echo $_GET['email']?>">My Profile</a></li>	
	 <li><a href="changepasspat.php?con=5&email=<?php echo $_GET['email']?>">Change Password</a></li>
	 <li><a href="feedback.php?con=5&email=<?php echo $_GET['email']?>">Feedback</a></li>
	 <li><a href="//localhost/Doctor_Appointment/user_module/logout.php">Logout</a></li>
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
<div align="right">
 <img src="images/img2.jpg" width="150" height="150"/></td>
 <img src="images/img3.jpg"  width="150" height="150" /></td>
 <img src="images/img5.jpg"  width="150" height="150"/></td>
 <img src="images/img4.jpg" width="150" height="150" /></td>
</div>

<hr size="1" />
 <table>
  <tr><td><div style="Font-Size:16pt;Color:Red;">Health Tips and Techniques</div></td></tr>
  <tr><td style="height:37px"><div style="Font-Size:16pt;Color:Maroon">Summer Care - Beat the heat with Fruit Juices</div></td></tr>
 
  <tr><td style="height: 239px;font-size:16pt;">
 <p>Try out juices of grapes, watermelon, banana, jack fruit, lemon and pineapple during summer. Consumption of fruits and juices reduces body heat and benefits in controlling body temperature.ature.</p> 
 <p><b><font color=yellow size=4>SUMMER</font></b> is one of the six seasons of the year. Every two months will make a season or Ritu. Summer is in between the 16th May to 15th July. The strength of the body will be lost during this period. People feel tired and exhausted during the season due to extensive heat rays of the sun, the watery portion (or Kapha) of the body of people, animals, plants, foods and the entire environment will become dry and the vata will become more in the body and the atmosphere. The skin will become dry and may precipitate skin diseases as eczema..</p>
 <p><b><font color=yellow size=4>What to Drink and Eat: </font></b>One must drink the juices of grapes, watermelon, banana, jack fruit, lemon and pineapple. This is to say foods and juices of sweet and cold and easily digestible must be consumed. The preparations of sugar, barely/green gram, sharbats, buttermilk with sugar candy are to be used daily to cool the body. One must take the food of white rice with meat soup of meat of animals reared in cold areas.areas.</p></td>
  </td></tr>
 </table>

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