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
$result = mysql_query("SELECT * FROM reservation",$db);
echo '<center><table bgcolor="#c0c0c0" border="5" align="center">';
echo'<TR><TD bgcolor="#c0c0c0"  width="60"><B>fname</B>
<TD bgcolor="#c0c0c0"  width="60"><B>lname</B>
<TD bgcolor="#c0c0c0"  width="60"><B>age</B>
<TD bgcolor="#c0c0c0"  width="60"><B>sex</B>
<TD bgcolor="#c0c0c0"  width="60"><B>city</B>
<TD bgcolor="#c0c0c0"  width="60"><B>telephone</B>
<TD bgcolor="#c0c0c0"  width="60"><B>email</B>
<TD bgcolor="#c0c0c0"  width="60"><B>arrival date</B>
<TD bgcolor="#c0c0c0"  width="60"><B>departure date</B>
<TD bgcolor="#c0c0c0"  width="60"><B>reservation id</B>
</TR>';
while ($myrow = mysql_fetch_array($result))
{
echo '<tr>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["first_name"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["last_name"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["age"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["sex"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["city"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["telephone"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["email"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["arr_date"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["dep_date"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["res_id"];

echo '<td bgcolor="#b0c4de" width="60">';
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=deleteReport.php?id=".$myrow['res_id'].">
<input type='submit' value='delete' name='delete'></a>";
echo'</td>';
echo"</tr>";
}
echo "</TABLE>";

?>
<br>
<center><input type="button" value="Print Report" Onclick="window.print()" align="center" style="margin-left:-200px"></center>
<a href="manager.php"align="center"style="margin-right:-200px">Back</a>
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