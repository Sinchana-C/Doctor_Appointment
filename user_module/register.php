
<div style="position:absolute;top:470pt;left:255pt;font-size:18pt;color:red;font-weight:bold" id="fail">
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
<title>Register</title>
<script type="text/javascript" src="register.js">
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
	 <li><a href="genhome.php" class="active">home</a></li>	
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
						

 <center style="height: 54px"><div style="Font-Size:28pt;Color:#0033CC;">Registration Form</div></center>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

 <form action="register1.php" method="post" name="reg">
 <div style="position:absolute;top:50pt;left:140pt;">
 <table style="height: 473px;">
 <tr>
 <td><div style="Font-Size:16pt;">Name</div></td>
 <td><input type="text"  name="name" placeholder="Name" onblur="validate_name()" onclick="val_password('message1')"/></td>
 <td><span id="message1" name="message1" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td><div style="Font-Size:16pt;">Email Id</div></td>
 <td><input type="text" name="email" placeholder="E-mail" onblur="validate_email(this.value,'message2','Enter the Email')" onclick="val_password('message2')"/></td>
 <td><span id="message2" name="message2" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><div style="Font-Size:16pt;">Gender</div></td>
 <td><select name="gender" onblur="validate_email(this.value,'message3','Select the Gender')" onclick="val_password('message3')">
 <option value="">-- Select Gender --</option>
 <option value="male" >Male</option>
 <option value="female">Female</option>
 </select>
 </td>
 <td><span id="message3" name="message3" style="color:red;font-size:16pt;"></span></td></tr>
 <tr><td><div style="Font-Size:16pt;">age</div></td>
 <td><input type="text" name="age" placeholder="Age"  maxlength="3" onblur="validate_age()" onclick="val_password('message4')"/>	</td>	
 <td><span id="message4" name="message4" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><div style="Font-Size:16pt;" >Date Of Birth</td></div>
 <td>
 <select name="dob1" onblur="validate_dob()" onclick="val_password('message5')">
 <option value=""/>Year
 <option>1971</option>
 <option>1972</option>
 <option>1973</option>
 <option>1974</option>
 <option>1975</option>
 <option>1976</option>
 <option>1977</option>
 <option>1978</option>
 <option>1979</option>
 <option>1980</option>
 <option>1981</option>
 <option>1982</option>
 <option>1983</option>
 <option>1984</option>
 <option>1985</option>
 <option>1986</option>
 <option>1987</option>
 <option>1988</option>
 <option>1989</option>
 <option>1990</option>
 <option>1991</option>
 <option>1992</option>
 <option>1993</option>
 <option>1994</option>
 <option>1995</option>
 <option>1996</option>
 <option>1997</option>
 <option>1998</option>
 <option>1999</option>
 <option>2000</option>
 </select>
 <select name="dob2" onblur="validate_dob()" onclick="val_password('message5')">
 <option value=""/>Month
 <option>01</option>
 <option>02</option>
 <option>03</option>
 <option>04</option>
 <option>05</option>
 <option>06</option>
 <option>07</option>
 <option>08</option>
 <option>09</option>
 <option>10</option>
 <option>11</option>
 <option>12</option>
 </select>
 <select name="dob3" onblur="validate_dob()" onclick="val_password('message5')">
 <option value=""/>Day
 <option>01</option> 
 <option>02</option>
 <option>03</option>
 <option>04</option>
 <option>05</option>
 <option>06</option>
 <option>07</option>
 <option>08</option>
 <option>09</option>
 <option>10</option>
 <option>11</option>
 <option>12</option>
 <option>13</option>
 <option>14</option>
 <option>15</option>
 <option>16</option>
 <option>17</option>
 <option>18</option>
 <option>19</option>
 <option>20</option>
 <option>21</option>
 <option>22</option>
 <option>23</option>
 <option>24</option>
 <option>25</option>
 <option>26</option>
 <option>27</option>
 <option>28</option>
 <option>29</option>
 <option>30</option>
 <option>31</option>
 </select></td>
 <td><span id="message5" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><div style="Font-Size:16pt;">Mobile No</div></td>
 <td><input type="text" name="phone" placeholder="Mobile NO" maxlength="10" onblur="validate_phone()" onclick="val_password('message6')"/></td> 

 <td><span id="message6" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><div style="Font-Size:16pt;">password</div></td>
 <td><input type="password" name="password" placeholder="Password" onblur="validate_email(this.value,'message7','Enter the password')" onclick="val_password('message7')"/></td> 

 <td><span id="message7" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><div style="Font-Size:16pt;">Comfirm password</div></td>
 <td><input type="password" name="cpassword" placeholder="Confirm Password" onblur="validate_email(this.value,'message8','Enter the Confirm Password')" onclick="val_password('message8')"/></td> 

 <td><span id="message8" style="color:red;font-size:16pt;"></span></td></tr>
 <tr>
 <td><input type="submit" value="SUBMIT" onmousedown="validate();"/>
 <input type="reset" value="RESET" /></td>
 <td></td>
 <td></td>
 </tr>
 </table>
 </div>
 </form>
	

	

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
