<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon" href="images/google.jpg">
<title>yegof Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 16px;
	font-weight: bold;
}
.style3 {color: #006600}
.style5 {font-size: 12px}
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style8 {color: #000000}
.style11 {font-size: 12px; font-weight: bold; }
.style12 {color: #660000}
.style14 {color: #000000; font-weight: bold; }
-->
</style>
</head>

<body>
<?php
if(isset($_GET['logged']))
{
setcookie("logged","",time()-1);
setcookie("page","",time()-1);
Header("location:index.php");
}
?>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/wollo.jpg" alt="" width="70" height="88" ><img src="images/head.jpg" alt="" width="807" height="88" /></a>																																																																																					
		<marquee direction="left"><span>Come and feel like home!|| yegofe-view-hotel!</span></marquee>
		<ul id="menu">
			<li style="background-color: #590000"><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<li><a href="slectroom22.php">Contacts</a></li>
			<li><a href="searchroom.php">search room here</a></li>
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
		<div class="inside">&nbsp;&nbsp;&nbsp; <span class="style11"><span class="style8">You are here</span>: <span class="style12">Home</span></span>
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


		echo '<img src="images/white.jpg" width="675" height="1"><span align="right" class="style8 style11"> Welcome <a href="'; echo $role.".php"; echo'" class="style8 style11">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
		  <script language="JavaScript">
var clockID = 0;
function UpdateClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
   var tDate = new Date();

   document.theClock.theTime.value = "" 
                                   + tDate.getHours() + ":" 
                                   + tDate.getMinutes() + ":" 
                                   + tDate.getSeconds();
   clockID = setTimeout("UpdateClock()", 1000);
}
function StartClock() {
   clockID = setTimeout("UpdateClock()", 500);
}
function KillClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }
}
</script>
<!--</head>--><br><br>
<body onload="StartClock()" onunload="KillClock()">
<form name="theClock">&nbsp;
<img src="images/white.jpg" width="65"><?php
		echo "Today is: ".date("l")." ".date("jS")." of ".date("F")." 20".date("y");
		?>
 <input type=text name="theTime" size=8 style="text-align: center" readonly="true">
 

</form>
<!--</body>-->
		  
		  <div id="sidebar">
				<div class="order">
					<form action="index.php" method="post">
						<h3>cheching customer in and out</h3>
						<table width="239" cellpadding="0" cellspacing="0">
							<tr>
								<td class="first">
								
	
								
									Arrival Date<br />
							
									<select name="month">
										<option selected="selected">January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
								</td>
								<td class="second"><br />
									<select class="year">
									
	<script language="javascript">
	for (i = 2019; i < 	2030; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									
										
									</select>
									<select class="date">
	<script language="javascript">
	j=32
		
	for (i = 1; i < 	j; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									</select>
								</td>
							</tr>
							<tr>
								<td class="first">
									Nights<br />
									<select>
											<script language="javascript">
	j=32
		
	for (i = 1; i < 	j; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									</select>
								</td>
								<td class="third">
									Rooms<br />
									<select>
											<script language="javascript">
	j=11
		
	for (i = 1; i < 	j; i++)
	{
		document.write("<option>"+i+"</option>");
	}
    </script>
									</select>
								</td>
							</tr>
							<tr>
								<td class="first">
									Adults<br />
									<select>
										<option>1</option>
									</select>
								</td>
								<td class="third">
									Children<br />
									<select>
										<option>1</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="reset"><a href="#">RESET</a></td>
							</tr>
						</table>
						
						<!--div class="button">
					<div align="left"><a href="reservation.php?mon="><img src="images/register1.jpg" alt="" width="134" height="21" /></a></div>
					 <div align="left"><br><a href="update_reservation.php"><img src="images/updateregis.jpg" alt="" width="134" height="21" /></a></div>
				          <div align="left"><br><a href="cancel_reservation.php"><img src="images/cacelregis.jpg" alt="cancel reservation" width="134" height="21"></a>
						  <!--div align="left"><br><a href="search engine.html"><img src="images/seach.jpg" alt="cancel reservation" width="134" height="21"></a>
					      </div>
						</div-->																																																																																																												
					</form>
						</form>
						
					
				</div>
			<div class="block">
					<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Locations</h4>
					<p>YegofeView Hotel is a well-established tree-star hotel found at a convenient location in the center of the city Kombolcha. The name derives from “Yegofe Mountain”, which is the biggest and Known Mountain in Kombolcha.</p>
					
					<br />
				
			</div>
				<span class="style2 style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Click and stay on the map to</span> <span class="style3">Zoom in</span></span>      <img  src="images/map11.jpg" width="304" height="207" onclick="this.width=820;this.height=486;" onmouseout="this.width=304;this.height=207" />	
					  </div>
			<div id="center">				
				<div class="block">
					<h4>Last News</h4>
					<p>A Hotel Information Management System (HIMS):- is an automated system for the hotel management; it thus creates standards in hotels according to customer needs, satisfying their general comfort.It is the job of the Hotel Manager to coordinate the many operational tasks of running a successful hotel. .<br /> Managing a hotel requires knowledge and skills within a wide variety of fields. This is why educations in hotel management can be so diverse and interesting.  </p>
					<a href="#" class="more">more info</a>
				</div>
				<div class="block">
					<h4>Welcome to our hotel</h4>
					<p><strong>YegofeView Hotel is a well-established tree-star hotel </strong> An education in hotel management teaches students the skills to effectively manage different responsibilities such as reception and concierge services, restaurant and bar functions, administration, management and marketing.  </p>
				</div>
				<div class="block">
					<h4>Our Services</h4><br><br><br>
					<li>Fast and convenient room service.</li>
			            <li>DSTV and many free channels in  room.</li>
			            <li>Clean rooms with private terrace and quiet surroundings.</li>
			            <li>Delicious meals.</li>
			            <li>Well-trained and very cooperative staff.</li>
			           <li>Very convenient for town taxi service.</li>
			            <li>Free parking</li>
			            <li>First class restaurant with international menu.</li>
						<li>Meeting halls with all required accessories.</li>
					<a href="#" class="more">more info about our services</a>
				</div>
			</div>
			<div id="photogallery">
				<div class="photos">
					<img src="images/photogallery_title.gif" alt="" width="270" height="40" id="title" />
					<a href="#" target="_blank"><img src="images/bed11.jpg" alt="" width="158" height="100" /></a>
					<span>yegofeview</span>
					<a href="#" target="_blank"><img src="images/yegofe-view-hotel1.jpg" alt="" width="158" height="100" /></a>
					<span>kombolcha </span>
					<a href="#" target="_blank"><img src="images/mountain.jpg" alt="" width="158" height="100" /></a>
					<span>yegof mauntain </span>
					<a href="#" target="_blank"><img src="images/img4.jpg" alt="" width="158" height="100" /></a>
					<span>Cultural foods </span>
					<a href="#" id="all"><img src="images/all.gif" alt="" width="134" height="21" /></a>				</div>
				<img src="images/end.gif" alt="" width="270" height="60" />
			</div>
	  </div>	
		
	
	</div>
	<div id="footer">
		<ul>
			<li><a href="index.php" class="style6">Home</a>|</li>
			<li><a href="about_us.php">About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php">Testimonials</a>|</li>
			<li><a href="locations.php">Locations</a>|</li>
			<li><a href="contact_us.php">Contacts</a></li>
	  </ul>
		<div id="copyright"> 
		  <p><span>Copyright &copy; yegofeview hotel, kombolcha, Ethiopia </span><span>&copy; Design by <a href="" target="_blank">Information Technology GC Students</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
		  <p>&nbsp;</p>
		  <p>2019</p>
		</div>
	</div>
</body>
</html>
