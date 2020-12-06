<div style="position:absolute;top:800pt;left:255pt;font-size:22pt;color:red;font-weight:bold" id="fail">
<?php
 if($_GET['con']=="1")
  echo "Fields should not be empty";
 else if($_GET['con']=="2")
  echo "You have registered successfully";
 else if($_GET['con']=="3")
  echo "Both the passwords should match";
 else if($_GET['con']=="4")
  echo "You Have already Registered";
?>
</div>

<html>
<head>
<title>doctor</title>
<script type="text/javascript" src="doctor.js">
</script>
<link rel="stylesheet" href="style.css" type="text/css" />
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
						

 <div align="center" style="Font-Size:27pt;Color:#660066;">Doctors Information</div><br>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <form action="doctor1.php" method="POST" name="reg">
 <div style="position:absolute;top:50pt;left:130pt;">
 <table style="height: 673px;">
 <tr>
 <td style="Font-Size:16pt;">Doctor Name</td>
 <td><input type="text" name="dname" placeholder="Doctor Name" onblur="validate_dname()" onclick="val_email('message1')"/></td>
 <td><span id="message1" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td style="Font-Size:16pt">Email Id</td>
 <td > <input type="text" name="email" placeholder="E-mail" onblur="validate_email(this.value,'message2','Enter the Email')" onclick="val_email('message2')"/></td>
 <td><span id="message2" style="color:red;font-size:16pt;"></span></td></tr>   
 <tr>
 <td style="Font-Size:16pt;">Specialist</td>
 <td ><select name="spl" onblur="validate_email(this.value,'message3','Select the Specialist')" onclick="val_email('message3')">
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
	<option Value="Orthapaedic">Orthapaedic</option>
    </select></td>
 <td><span id="message3" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td style="Font-Size:16pt">Qualification</td>
 <td ><input type="text" name="qual" placeholder="Qualification" onblur="validate_email(this.value,'message4','Enter the Qualification')" onclick="val_email('message4')"/></td>
 <td><span id="message4" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td style="Font-Size:16pt;">Gender</td>
 <td><select name="gender" onblur="validate_email(this.value,'message5','Select the Gender')" onclick="val_email('message5')">
     <option Value=""/>-Select-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <option Value="male">Male</option>
     <option Value="female">Female</option>
     </select></td>
 <td><span id="message5" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td style="Font-Size:16pt">Address</td>
 <td><textarea cols="16" rows="2" name="address" placeholder="Address of the hospital" onblur="validate_email(this.value,'message6','Enter the Address')" onclick="val_email('message6')"></textarea></td>
 <td><span id="message6" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td style="Font-Size:16pt">Mobile No</td>
 <td ><input type="text" name="phone" placeholder="Mobile Number" maxlength="10" onblur="validate_phone(this.value,'message7','Enter the Mobile No')" onclick="val_email('message7')"/></td>
 <td><span id="message7" style="color:red;font-size:16pt;"></span></td></tr> 
 <tr><td style="Font-Size:16pt">Hospital</td>
 <td ><input type="text" name="hospital" placeholder="Hospital Name" onblur="validate_email(this.value,'message8','Enter the hospital Name')" onclick="val_email('message8')" /> </td>
 <td><span id="message8" style="color:red;font-size:16pt;"></span> </td></tr> 
 <tr><td style="Font-Size:16pt">Available Timings</td>
 <td style="Font-Size:16pt">
 From:<select name="availtime1" onblur="validate_email(this.value,'message9','Select the Specialist')" onclick="val_email('message9')">
 <option value=""/>select
 <option>12:00am</option>
 <option>12:30am</option>
 <option>1:00am</option>
 <option>1:30am</option>
 <option>2:00am</option>
 <option>2:30am</option>
 <option>3:00am</option>
 <option>3:30am</option>
 <option>4:00am</option>
 <option>4:30am</option>
 <option>5:00am</option>
 <option>5:30am</option>
 <option>6:00am</option>
 <option>6:30am</option>
 <option>7:00am</option>
 <option>7:30am</option>
 <option>8:00am</option>
 <option>8:30am</option>
 <option>9:00am</option>
 <option>9:30am</option>
 <option>10:00am</option>
 <option>10:30am</option>
 <option>11:00am</option>
 <option>11:30am</option>
 <option>12:00pm</option>
 <option>12:30pm</option>
 <option>1:00pm</option>
 <option>1:30pm</option>
 <option>2:00pm</option>
 <option>2:30pm</option>
 <option>3:00pm</option>
 <option>3:30pm</option>
 <option>4:00pm</option>
 <option>4:30pm</option>
 <option>5:00pm</option>
 <option>5:30pm</option>
 <option>6:00pm</option>
 <option>6:30pm</option>
 <option>7:00pm</option>
 <option>7:30pm</option>
 <option>8:00pm</option>
 <option>8:30pm</option>
 <option>9:00pm</option>
 <option>9:30pm</option>
 <option>10:00pm</option>
 <option>10:30pm</option>
 <option>11:00pm</option>
 <option>11:30pm</option>
 </select><br>To&nbsp;&nbsp;&nbsp;:
 <select name="availtime2" onblur="validate_email(this.value,'message9','Select the Specialist')" onclick="val_email('message9')">
 <option value=""/>select
 <option>12:00am</option>
 <option>12:30am</option>
 <option>1:00am</option>
 <option>1:30am</option>
 <option>2:00am</option>
  <option>2:30am</option>
  <option>3:00am</option>
 <option>3:30am</option>
 <option>4:00am</option>
 <option>4:30am</option>
 <option>5:00am</option>
 <option>5:30am</option>
 <option>6:00am</option>
 <option>6:30am</option>
 <option>7:00am</option>
 <option>7:30am</option>
 <option>8:00am</option>
 <option>8:30am</option>
 <option>9:00am</option>
 <option>9:30am</option>
 <option>10:00am</option>
 <option>10:30am</option>
 <option>11:00am</option>
 <option>11:30am</option>
 <option>12:00pm</option>
 <option>12:30pm</option>
 <option>1:00pm</option>
 <option>1:30pm</option>
 <option>2:00pm</option>
 <option>2:30pm</option>
 <option>3:00pm</option>
 <option>3:30pm</option>
 <option>4:00pm</option>
 <option>4:30pm</option>
 <option>5:00pm</option>
 <option>5:30pm</option>
 <option>6:00pm</option>
 <option>6:30pm</option>
 <option>7:00pm</option>
 <option>7:30pm</option>
 <option>8:00pm</option>
 <option>8:30pm</option>
 <option>9:00pm</option>
 <option>9:30pm</option>
 <option>10:00pm</option>
 <option>10:30pm</option>
 <option>11:00pm</option>
 <option>11:30pm</option>
 </select>
 </td>
 <td><span id="message9" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td style="Font-Size:16pt">Available Days</td>
 <td ><input type="checkbox" value="Monday" name="day[]"/>Monday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="checkbox" value="Tuesday" name="day[]"/>Tuesday<br>
 <input type="checkbox" value="Wednesday" name="day[]"/>Wednesday&nbsp;<input type="checkbox" value="Thursday" name="day[]"/>Thursday<br>
 <input type="checkbox" value="Friday" name="day[]"/>Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="checkbox" value="Saturday" name="day[]"/>Saturday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input type="checkbox" value="Sunday" name="day[]"/>sunday</td>
 <td><span id="message10" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td style="Font-Size:16pt">Password</td>
 <td><input type="password" name="password" placeholder="Password" onblur="validate_email(this.value,'message11','Enter the password')" onclick="val_email('message11')"/></td>
 <td><span id="message11" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td style="Font-Size:16pt">confirm Password</td>
 <td><input type="password" name="cpassword" placeholder="Confirm Password" onblur="validate_email(this.value,'message12','Enter the confirm password')" onclick="val_email('message12')"/></td>
 <td><span id="message12" style="color:red;font-size:16pt;"></span></td></tr>
 </table>
<br><br><br>
 <input type="submit" value="SUBMIT" onmousedown="validate()"/><input type="reset" value="RESET"/>
  </div>
 </form> 
 
 <br><br><br><br><br>
     
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
