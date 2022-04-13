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
			<li><a href="Help.html">Help</a></li>
			<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
	</div>
<tr><td>
<?php
$db = mysql_connect("localhost", "root", "");
mysql_select_db("newyegof",$db);
$result = mysql_query("SELECT * FROM employees",$db);
echo '<center><table bgcolor="#c0c0c0" border="5" align="center">';
echo'<TR><TD bgcolor="#c0c0c0"  width="60"><B>Emp_id</B>
<TD bgcolor="#c0c0c0"  width="60"><B>username</B>
<TD bgcolor="#c0c0c0"  width="60"><B>fname</B>
<TD bgcolor="#c0c0c0"  width="60"><B>lname</B>
<TD bgcolor="#c0c0c0"  width="60"><B>salary</B>
<TD bgcolor="#c0c0c0"  width="60"><B>start_date</B>
<TD bgcolor="#c0c0c0"  width="60"><B>Date of borth</B>
<TD bgcolor="#c0c0c0"  width="60"><B>age</B>
<TD bgcolor="#c0c0c0"  width="60"><B>sex</B>
<TD bgcolor="#c0c0c0"  width="60"><B>city</B>
<TD bgcolor="#c0c0c0"  width="60"><B>state</B>
<TD bgcolor="#c0c0c0"  width="60"><B>Nationality</B>
<TD bgcolor="#c0c0c0"  width="60"><B>telephone</B>
<TD bgcolor="#c0c0c0"  width="60"><B>email</B>
<TD bgcolor="#c0c0c0"  width="60"><B>job_title</B>
<TD bgcolor="#c0c0c0"  width="60"><B>photo</B></TR>';
while ($myrow = mysql_fetch_array($result))
{
echo '<tr>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["emp_id"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["username"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["fname"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["lname"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["salary"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["start_date"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["dob"];
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
echo $myrow["state"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["nationality"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["telephone"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["email"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["job_title"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo '<img src="'.$myrow["picture"].'" width="150px" height="120px">';
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=deleteepmloyee1.php?id=".$myrow['emp_id'].">
<input type='submit' value='delete' name='delete'></a>";
echo'</td>';
echo"</tr>";
}
echo "</TABLE>";
?>
<br><br>
<input type="button" value="Print Report" Onclick="window.print()" align="left" style="margin-left:-420px"/>
<a href="manager.php"align="center"style="margin-right:-200px">Back</a><br>
</td></tr></table>
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

