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
.style12 {color: #000000}
.style13 {color: #660000}
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
			<li style="background-color: #590000"><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<?php
			if(isset($_COOKIE['logged']))
			echo '<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>';
			else
			echo '<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>';
			?>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
	</div>
	<div id="content">
		<div class="inside">
		
		<div id="sidebar">
		    <p class="style11"><span class="style12">You are here:</span> <a href="index.php" class="style12">Home</a> <img src="images/arrow.gif"> <span class="style13">Locations</span>	     
			  
		    </p>
			<p class="style11">&nbsp;</p>
		    <div class="block"></div>
			<p><span class="style10">Locations:</span>		    </p>
			<p>Here is a part of kombolcha City map , and you can move to any direction of the city through the map and you can see your distance 
			  from our hotel. <img src="images/map11.jpg" scrolling="no" height="400px" width="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		      
		      <br>
	      </p>
			<p align="right" class="style7 style8 style9">Come And Feel Like Home </p>
		  </div>
		  <div id="center">
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


		echo '<img src="images/white.jpg" width="210" height="0"><span class="style12 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style12 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
			  <p class="style7 style8">&nbsp;</p>
		  </div>
		  
			<div id="photogallery">
			
				<div class="photos">
				
				<a href="#" target="_blank"><img src="images/yegof.jpg" alt="" width="158" height="100" /></a>
					<span>yegofview</span>
					<a href="#" target="_blank"><img src="images/mountain.jpg" alt="" width="158" height="100" /></a>
					<span>kombolcha </span>
					<a href="#" target="_blank"><img src="images/center.jpg" alt="" width="158" height="100" /></a>
					<span>City center </span>
					
					<a href="#" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>				</div>
				<img src="images/end.gif" alt="" width="270" height="60" />			</div>
	  </div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php" >About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php" class="style6">Locations</a>|</li>
			<li><a href="contact_us.php">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; yegofviewHotel, kombolcha, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information Technology GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2019</p>
		</div>
	</div>
</body>
</html>
