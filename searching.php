<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>yegofview Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--

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
.style14 {color: #000000}
.style15 {font-size: 12px; font-weight: bold; color: #000000; }
.style16 {color: #660000}
.style20 {font-size: 12; color: #000000; }
-->
.box7 {
         border: 3px double #848484;
		 background-color : #F7F799;
		 -webkit-border-radius: 5px;
         -moz-border-radius: 5px;
         border-radius: 5px;
	     box-shadow: 0 0 5px 3px #ffa853;
   }
    </style>

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
		  
		    <div class="block style14"></div>
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <span class="style16">search customer information</span></span>
			<p>&nbsp;</p>
			<p><span class="style10">search  here:</span></p>
			<table width="264" >
			<form  action="" method="post" name="menuForm">
  <tr >
    <td colspan="2"><input name="fname2" class="box7" type="text" id="fname2" value=" Enter you want to search custom ID" onClick="value=''" size="26"><input name="search" type="submit" value="Search"></td>
  
  </tr>		
  <tr >
    <td width="73"><span class="style20">First Name: </span></td>
    <td align="left" width="179"><input name="fname" type="text" id="fname" ></td>
  </tr>
  <tr>
    <td><span class="style20">Last Name: </span></td>
    <td align="left"><input name="lname" type="text" id="lname" ></td>
  </tr>
  <tr>
    <td><span class="style20">Age: </span></td>
    <td align="left"><input name="age" type="text" id="age" size="6"></td>
  </tr>
  <tr>
    <td><span class="style20">Sex: </span></td>
    <td align="left"><input name="sex" type="text" id="sex" size="9" ></td>
  </tr>
  <tr>
    <td><span class="style20">City:</span></td>
    <td align="left"><input name="city" type="text" id="city" ></td>
  </tr>
  <tr>
    <td><span class="style20">State/Province:</span></td>
    <td align="left"><input name="state" type="text" id="state"></td>
  </tr>
  <tr>
    <td><span class="style20">Country:</span></td>
    <td align="left"><input name="country" type="text" id="country" ></td>
  </tr>
  <tr>
    <td><span class="style20">Telephone:</span></td>
    <td align="left"><input name="telephone" type="text" id="telephone" ></td>
  </tr>
    <tr>
    <td><span class="style20">Email:</span></td>
    <td align="left"><input name="email" type="text" id="email"></td>
  </tr>

  <tr>
      <td><span class="style20">Share With:</span></td>
    <td align="left"><input name="share_with" type="text" id="share_with" ></td>
  </tr>
  <tr>
    <td><span class="style20">Arrival Date:</span></td>
    <td align="left"><input name="arr_date" type="text" id="arr_date" ></td>
  </tr>
  <tr>
    <td><span class="style20">Departure Date:</span></td>
    <td align="left"><input name="dep_date" type="text" id="dep_date" ></td>
  </tr>
  <tr>
    <td><span class="style20">Room Preferences: </span></td>
    <td align="left"><input name="preferences" type="text" id="preferences" ></td>
  </tr>
  
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="update" type="submit" value="Update Reservation">
		<script type="text/javascript">		 
		document.menuForm.update.disabled = true;
        </script>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input name="Input" type="reset">	   
	    </span></td>
	  </tr>
	   </form>
</table>
		    <p><a href="reservation.php"><img src="images/new.jpg" alt="" width="134" height="21" border="0"></a></p>
			 <p><a href="cancel_reservation.php"><br><img src="images/cancel.jpg" alt="" width="134" height="21" border="0"></a></p>
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
		echo '<img src="images/white.jpg" width="210" height="0"><span class="style14 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style14 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
				<img src="images/white.jpg"><br>
		  <span class="style15">Results:</span><br>
		  <div style="border: double; width:300px"><br />
		  <?php 

				if(isset($_POST['search'])){
				$name2=$_POST['fname2'];
				 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
$sql="select  first_name,last_name,city, state, country from reservation where res_id = '$name2'";
$result = mysql_query($sql,$con);
If(!$result)
	die("unable to query:". mysql_error());
	echo "<img src='images/white.jpg' width='40' style='float:left'><span class='style11'></span><table border='1'><tr class='style15'><th bgcolor='#F8E6C0'></th><th bgcolor='#F8E6C0'> Address</th></tr>";
while($row=mysql_fetch_row($result)){
$fname=$row[3];
echo "<tr class='style15' ><td align='center' bgcolor='#F8E6C0'><img src='images/check3.png' width='20' height='20' onClick='abc(\"$fname\")'></td><td colspan='2' bgcolor='#F0F0F0'>";
	for($i=0;$i<count($row)-1;$i++){
		echo ucfirst($row[$i]).", ";
		}
		echo "</td></tr>";
	 }
	 echo "</table></span>"; 	
mysql_close($con);

				}
				
				?>	
	   <script type="text/javascript">
	   function abc(x){
	   fname=x;
   	    prompt_fname = prompt("Enter your first name", "");
		if (fname == prompt_fname)
		 {
		 document.menuForm.update.disabled = false;
		
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $res_id=$_POST['fname2'];
mysql_select_db("newyegof",$con);
$sql="select * from reservation where res_id='$res_id'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$fname=$row[0];
$lname=$row[1];
$age=$row[2];
$sex=$row[3];
$city=$row[4];
$state=$row[5];
$country=$row[6];
$telephone=$row[7];
$email=$row[8];
$share_with=$row[9];
$arr_date=$row[10];
$dep_date=$row[11];
$preferences=$row[12];
$res_id=$row[13];
mysql_close($con);

		?>
var fname='<?php echo $fname; ?>';
var lname='<?php echo $lname; ?>';
var age='<?php echo $age; ?>';
var sex='<?php echo $sex; ?>';
var city='<?php echo $city; ?>';
var state='<?php echo $state; ?>';
var country='<?php echo $country; ?>';
var telephone='<?php echo $telephone; ?>';
var email='<?php echo $email; ?>';
var share_with='<?php echo $share_with; ?>';
var arr_date='<?php echo $arr_date; ?>';
var dep_date='<?php echo $dep_date; ?>';
var preferences='<?php echo $preferences; ?>';
var res_id='<?php echo $res_id; ?>';

        document.getElementById('fname').value = fname;
        document.getElementById('lname').value = lname;
        document.getElementById('age').value = age;
        document.getElementById('sex').value = sex;
        document.getElementById('city').value = city;
        document.getElementById('state').value = state;
        document.getElementById('country').value = country;
        document.getElementById('telephone').value = telephone;
        document.getElementById('email').value = email;
        document.getElementById('share_with').value = share_with;
        document.getElementById('arr_date').value = arr_date;
        document.getElementById('dep_date').value = dep_date;
        document.getElementById('preferences').value = preferences;
        document.getElementById('fname2').value = res_id;
		}
		else alert("Reservation ID doesn't belong to "+ prompt_fname+"..., Please try again!");

			}
		</script>
		
		<?php
				if(isset($_POST['update']))
		{
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect");
		mysql_select_db("newyegof",$con);
        $res_id=$_POST['fname2'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$country=$_POST['country'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$share_with=$_POST['share_with'];
		$arr_date=$_POST['arr_date'];
		$dep_date=$_POST['dep_date'];
		$preferences=$_POST['preferences'];
		$sql="update reservation set first_name= '$fname',last_name='$lname',age='$age',sex='$sex',city='$city',state='$state',country='$country',telephone='$telephone',email='$email',share_with='$share_with',arr_date='$arr_date',dep_date='$dep_date',preference='$preferences' where res_id='$res_id'";
		$result=mysql_query($sql);
		if(!$result)
		die(mysql_error());
		echo '<script language="javascript">
alert("Registration updated sucessfully!");</script>';
		mysql_close($con);
		}
		?>	  
<br>
</div>
		  </div>
			<div id="photogallery">
				<div class="photos"><a href="#" target="_blank"><img src="images/yegof.jpg" alt="" width="158" height="100" /></a>
					<span>yegofview</span>
					<a href="#" target="_blank"><img src="images/kom.jpg" alt="" width="158" height="100" /></a>
					<span>kombolcha </span>
					<a href="#" target="_blank"><img src="images/mountain.jpg" alt="" width="158" height="100" /></a>
					<span>yegof mauntain </span>
					
					<a href="#" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>				</div>
				<img src="images/end.gif" alt="" width="270" height="60" />
			</div>
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
