<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>yegofview Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
</style>
</head>

<body>
<?php
		$user="";
		if(isset($_COOKIE['logged']))
		{
		$user=$_COOKIE['logged'];
		}
		 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
$sql="select password, username from accounts where username='$user' &&  role='manager'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$password=$row[0];
$username=$row[1];
mysql_close($con);
		if(isset($_COOKIE['logged']) && $_COOKIE['logged']==$username){
		echo'
	<div id="header">
		<a href="index.php" id="logo"><img src="images/wollo.jpg" alt="" width="70" height="88" ><img src="images/head.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="employeeReport.php">employeeReport</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
	</div>
	<div id="content">
		<div class="inside">
		
		<div id="sidebar2">
		    <p class="style11"><span class="style12">You are here:</span> <a href="index.php" class="style12">Home</a> <img src="images/arrow.gif"> <span class="style13">Manager</span>	      </p>
		    <p class="style11">&nbsp;</p>
		    <div class="block"></div>
		  <p><span class="style10">Menu:</span><br><br><br><br>
		  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		  
		  <table width="160" height="60" border="0" bgcolor="pink"align="center"padding ="120">
  <tr>
  <td><a href="view empcomment.php"><input name="check_room" type="submit" value="view comment"></a></td>
  <td><a href="view_report1.php"><input name="check_room" type="submit" value="veiw report"></a></td>
  <td><a href="searchAllAccounts.php"><input name="check_room" type="submit" value="view account"></a></td>
  <td><a href="employeeReport.php"><input name="check_room" type="submit" value="view employee"></a></td>
  </tr>
</table>

			</p>
			<p>&nbsp;</p>
			<p align="center" class="style7 style8 style9">Come And Feel Like Home </p>
		  </div>
		  <div id="photogallery">
			  <div class="photos2">	
			  <span class="style11 style12"> Welcome <a href="manager.php" class="style11 style12">'; echo strtoupper($username); echo'</a></span>
			    <p><img src="images/11.jpg" width="160" height="180"><span class="style15">Mr. Shumi Kebede</span><span class="style16">General Manager of yegofview Hotel</span> </p>
		      </div>
			  <img src="images/end.gif" alt="" width="270" height="60" />			</div>';}
			   else{
		   echo '
		   			<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/head.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
	</div>
	<div id="content">
		<div class="inside">

		   <div id="sidebar2"><img src="images/white.jpg" style="float:left"><span style="font-size:14px; color:red">You didnt login, please login here.</span>	<table width="205">
			<form  action="';?><?php echo $_SERVER["PHP_SELF"]; ?><?php echo'" method="post" name="menuForm">
			<tr><td colspan="2" align="center">';?><?php
	if(isset($_GET["msg"]))
	echo "<span style='color:red'>Sorry, wrong username or password</span>";
	?><?php echo'</td></tr>
  <tr >
    <td width="53"><span class="style20">Username: </span></td>
    <td align="left" width="257"><input name="username" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Password: </span></td>
    <td align="left" ><input name="password" type="password" >
  </tr>
 
 
 
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="login" type="submit" value="Login">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="register.php" class="style15" >Not a member yet?</a> </td>
	  </tr>
	   </form>';?>
	   <?php
	   if(isset($_POST['login']))
	   {
$user=$_POST['username'];
$pass=$_POST['password'];
$conn=mysql_connect("localhost","root","");
if(!$conn)
die("unable to connect ".mysql_error());
$db=mysql_select_db("newyegof",$conn);
if(!$db)
die("unable to find database ".mysql_error());
$sql="select * from accounts where username='$user'";
$result=mysql_query($sql);
if(!$result)
die("unable to process query ".mysql_error());
$row=mysql_fetch_row($result);
$username=$row[0];
$password=$row[1];
if($pass===$password){
setcookie("logged",$username,time()+21600);
setcookie("page",$row[2],time()+21600);
Header("location:".$row[2].".php");
}
else
Header("location:?msg=wrg");
mysql_close($conn);

	   }
	   ?><?php echo'</table></div><div id="photogallery">
			  <div class="photos2">	You didnt sign in.
			    <p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/hrm/.jpg" width="145" height="120" alt="Not signed in."></p>
			    <p><span class="style15">Not signed in. </span><span class="style16">Please login first to get access.</span> </p>
			  </div>
			  <img src="images/end.gif" alt="" width="270" height="60" />			</div>';}?>
	  </div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php" >About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php">Locations</a>|</li>
			<li><a href="contact_us.php">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; yegofview Hotel, kombolcha, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information Technology GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2019</p>
		</div>
	</div>
</body>
</html>
