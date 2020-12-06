<html>
<head>
    <title></title>
  
</head>
<body background="Images1/pic14.jpg">
   
    <div>
    <table bgcolor="black">
<tr>
<td>
<img src="images/img7.png" width="100" height="100"/></td>
<td><img src="images/img1.jpg" width="100" height="100"/></td>
<td style="width: 325px;">  </td>
<td style="width: 1065px;"><div style="Font-Size:31pt;Color:Yellow;">E-Health Care System</div></td></tr>
<tr><td><a  href="dochome.php?email=<?php echo $_GET['email']?>" style="color:yellow">HOME</a></td>
<td></td>
<td></td></tr>
</table>
<br /><br />



<table align="center">
<tr><td><div style="Font-Size:22pt;Color:#6600FF;">Prescription Details</div>
</table>
<br /><br />
    
	
<table align="center">
<tr>
<td><div style="Font-Size:16pt;">Patient Id</div></td>
<td><select>
<option Value="0">-Select-</option></select></tr>
<tr>
<td><div style="Font-Size:16pt;">Patient Name</div></td>
<td><input type="Text"/></td></tr>
<tr>
<td><div style="Font-Size:16pt;"> Disease</div></td>
<td><input type="Text"/></td></tr>
<tr>
<td><div style="Font-Size:16pt;">Prescription Id</div></td>
<td><input type="text"/>
</td></tr>
<tr>
<td><div style="Font-Size:16pt;">Prescription</bel></td>
<td><textarea></textarea></td></tr>
<tr>
<td><div style="Font-Size:Large;">No Of Days to Continue</div></td>
<td><input type="text" /></td></tr>
<tr>
<td><div style="Font-Size:16pt;">Last Patient Visit</div></td>
<td><input type="Text"/></td></tr>
<td><div style="Font-Size:16pt;">Doctor Id</div></td>
<td><input type="Text"/></td></tr>
<tr>
<td><div style="Font-Size:16pt;">Prescribed By Doctor</div></td>
<td><input type="text"/></td></tr>
<tr><td align="right" ><input type="button" value="SAVE"/></td>
<td><input type="button" value="CANCEL"/></td></tr>
</table>
</div>
<?php 
include "connect.php";
$query="select * from doc_tab";
$sql_query=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($sql_query))
{
 if($row['email']==$_GET['email'])
 echo "<div style='position:absolute;top:120pt;left:30pt;font-size:18pt;color:MediumBlue ;'>Welcome : ".$row['dname']."</div>";
}
?>	
	
	
	
	
</body>
</html>
