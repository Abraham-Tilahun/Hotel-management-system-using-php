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
	<div id="header">
		<a href="index.php" id="logo"><img src="images/wollo.jpg" alt="" width="70" height="88" ><img src="images/head.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<span>Come and feel like home! </span>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
	</div>
<style type="text/css">
<!--
.style2 {font-size: 16}
h1 {text-decoration:blink; color:#0000FF;}
-->
</style>

</head>
<body style="background-image:url(images/background.jpg)">
<h4><a href="modifyemployee1.php">Back to previous page</a></h4>

<?php
mysql_connect("localhost", "root", "");
mysql_select_db("newyegof") or die("database could not connect ");

$first=$_POST['fname'];
$last=$_POST['lname'];
$age=$_POST['age'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$emp_id=$_POST['emp_id'];
$salary=$_POST['salary'];
$start_date=$_POST['start_date'];
$sex=$_POST['sex'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$sel=$_POST['catagory'];
$target_path=$_FILES['file']['name'];
 if(strlen($telephone)<10 )
	{
echo'<script type="text/javascript"> alert("Phone Number Should be 10 Digit!"); location.href="system_admin.php"; </script>'; 
	}
if($age<18 )
	{
echo'<script type="text/javascript"> alert("your age should be between 18 and 99 Digit!"); location.href="system_admin.php"; </script>'; 
	}
	if(strlen($first)<3)
	{
echo'<script type="text/javascript"> alert("first name should be greater than three character!"); location.href="system_admin.php"; </script>'; 
	}
	if(strlen($last)<3)
	{
echo'<script type="text/javascript"> alert("lastname should be greater than three character!"); location.href="system_admin.php"; </script>'; 
	}
	/*if(strlen($professione)<3)
	{
echo'<script type="text/javascript"> alert("profession should be greater than three character!"); location.href="Registration.html"; </script>'; 
	} */
	else
	{
		echo'';
	}

	  $con = mysql_connect('localhost','root','');
	  if(!$con){
		 
		 echo 'Could not connect:'.mysql_error();   
		  
	  }
	  else
	  {
	  mysql_select_db("dbucims",$con);
		$query="UPDATE employees SET fname='$first',lname='$last', salary='$salary',start_date='$start_date',dob='dd && mm && yy',age='$age',sex='$sex', 
		fname='$firstname', lname='$lastname', sex='$sex', , telephone='$telephone', email='$email',
		state='$state', nationality='$nationality' ,job_title='$job_title',picture='$target_path' WHERE emp_id='$emp_id'";
	  $result = mysql_query($query); 
	  if($result)
	  {
		   echo "<h1>Successfully Updated !</h1>";	
		   echo '<meta content = "3;modifyEmployee1.php" http-equiv = "refresh"/>';
		   
		  } 
	   else
	   {
		  echo "Employee ID is not found in the database"; 
echo '<meta content = "3;modifyEmployee1.php" http-equiv = "refresh"/>';		  
		   
		}
	  }
?>
</body>
</html>