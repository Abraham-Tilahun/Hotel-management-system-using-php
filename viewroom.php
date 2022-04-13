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
	<div id="content">
		<div class="inside">
		
		<div id="sidebar2">
		    <p class="style11"><span class="style12">You are here:</span> <a href="index.php" class="style12">Home</a> <img src="images/arrow.gif"> <span class="style13">Manager</span>	      </p>
		    <p class="style11">&nbsp;</p>
		    <div class="block"></div>
			</p>
<?php
 $db= mysql_connect('localhost','root','');
if(!$db)
{
	echo 'Error';
	exit;
}

mysql_select_db("newyegof",$db);
$query="select * from rooms";
$result=mysql_query($query);
$num_results=mysql_num_rows($result);
if($num_results)
echo '';
else
{
echo ' Search Result is not found in the database';
}
for($i=0;$i<$num_results;$i++)
{
$row=mysql_fetch_array($result);

echo '<p><strong>'.($i+1).'. room_id: ';
echo $row['room_id'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;room_no: ';
echo $row['room_no'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;room_type: ';
echo $row['room_type'];
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=deleteroom2.php?id=".$row['room_id'].">
<input type='submit' value='delete' name='delete'></a>";
echo'<br>';
echo'<hr>';

echo '</p>';
}
echo '<br>';
?>
<br>
<center><input type="button" value="Print Report" Onclick="window.print()" align="center" style="margin-left:-200px"></center>
<a href="index.php"align="center"style="margin-right:-200px">Back</a>
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