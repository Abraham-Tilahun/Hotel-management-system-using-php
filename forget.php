<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon" href="images/google.jpg">
<title>yegofview Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {
	font-family: "Adine Kirnberg";
	font-size: 36px;
}
.style8 {
	font-size: 46px;
	font-weight: bold;
}
.style9 {
	font-size: 36px;
	color: #990000;
}
.style10 {
	font-size: 18px;
	color: #000000;
}
.style11 {
	font-size: 12px;
	font-weight: bold;
}
.style13 {color: #000000}
.style14 {color: #660000}
-->
</style>
</head>

<body>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/head.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li style="background-color: #590000"><a href="contact_us.php">Contacts</a></li>
			<?php
			if(isset($_COOKIE['logged']))
			echo '<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>';
			else
			echo '<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>';
			?>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
</div>
	<form id="form1" name="login" method="POST" action="forget.php" onsubmit="return validateForm()">
<center>
<tr>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
	  <?php
 if(isset($_POST['change_password']))
  {  
    //$email=$_POST['kk'];
	 $username=$_POST['username'];
	$password=mysql_real_escape_string($_POST['password']); 
    $new_password=$password;
	 $confpass=$_POST['gg'];
 	$con=mysql_connect("localhost","root","");
mysql_select_db("newyegof",$con);
$result=mysql_query("select * from accounts where username='$username'");
$row=mysql_fetch_array($result);
$username1=$row['username'];
//$email1=$row['email'];
if($username==$username1)
 {
        $updateqry = mysql_query("Update accounts set password ='$new_password' where 
		username='$username1'") or die(mysql_error());
        if($updateqry > 0){
       	echo '<script language="javascript">';
    echo 'alert("Your password successfully recovered you may login now!"); index.href="login.php"';
    echo '</script>';
		}
		else
		{		
	echo '<script language="javascript">';
    echo 'alert("Wrong input ! please try once unless contact to system admin"); location.href="forget.php"';
    echo '</script>';	
		}
    }
  }
?>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:820px;height:400px;border-radius:15px;box-shadow:1px 10px 10px green" align="center"><tr><td>	
			<h1><center>Forgot password</center></h1>  
	   <td></td>	  <tr><td style="text-align: center;font-size: 20px"> User  name: </td><td><input type="text" name="username" required x-moz-errormessage="Enter Your username"  onDrag="return false" onDrop="return false"  size="20px;"> </td></tr>	  
	  <tr><td style="text-align: center;font-size: 20px"> New password: </td><td><input type="password" name="password" required x-moz-errormessage="Enter Your new password" onDrag="return false" onDrop="return false" size="20px;"> </td></tr>
     <tr><td style="text-align: center;font-size: 20px"> Confirm password:</td><td ><input type="password" name="gg" required x-moz-errormessage="Enter Your new retiry new  password"  onDrag="return false" onDrop="return false"  size="20px;"> </td>
	  </tr>      
       <tr>  <td style="text-align: center;font-size: 40px"> </td>      
                <td style="color:black;font-size: 20px;"><input type="submit" name="change_password" value="Change Password"  align="center"/> </td>
				
</td><tr><td><input type="reset"  value="resent" align="center"style ="float:left" /></td><td></td></tr>        
		 </tr>
		 </table>
  </form>
		</td>
</tr>
</table>
</center>
		  <?php
		if(isset($_COOKIE['logged'])){
		$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
$page=$_COOKIE['page'];
$user=$_COOKIE['logged'];
$sql="select password, username, role from accounts where username='$user'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$password=$row[0];
$username=$row[1];
$role=$row[2];
mysql_close($con);
		echo '<img src="images/white.jpg" width="210" height="0"><span class="style13 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style13 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
		  <p>&nbsp;</p>
		  </div>
			<!--div id="photogallery">
				<div class="photos"><a href="#" target="_blank"><img src="images/yegof.jpg" alt="" width="158" height="100" /></a>
					<span>yegofview</span>
					<a href="#" target="_blank"><img src="images/kom.jpg" alt="" width="158" height="100" /></a>
					<span>kombolcha </span>
					<a href="#" target="_blank"><img src="images/mountain.jpg" alt="" width="158" height="100" /></a>
					<span>yegof mountain </span>
					
					<a href="#" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>				</div>
				<img src="images/end.gif" alt="" width="270" height="60" />
			</div-->
		</div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php" >About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php">Locations</a>|</li>
			<li><a href="contact_us.php" class="style6">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; yegofview Hotel, kombolcha, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information Technology GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2019</p>
		</div>
	</div>
</body>
</html>
