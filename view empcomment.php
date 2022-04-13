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
<table width="100%" align="center" cellpadding="4" cellspacing="10" background="images/bgtable.jpg">
  <caption align="center"> <h2><i><b>Feedback informatoin</b></i></h2></caption>
</table>
<?php
 $db= mysql_connect('localhost','root','');
if(!$db)
{
	echo 'Error';
	exit;
}

mysql_select_db("newyegof",$db);
$result = mysql_query("SELECT * FROM testimonials",$db);
echo '<center><table bgcolor="#c0c0c0" border="5" align="center">';
echo'<TR><TD bgcolor="#c0c0c0"  width="60"><B>name</B>
<TD bgcolor="#c0c0c0"  width="60"><B>sex</B>
<TD bgcolor="#c0c0c0"  width="60"><B>age</B>
<TD bgcolor="#c0c0c0"  width="60"><B>job</B>
<TD bgcolor="#c0c0c0"  width="60"><B>photo</B>
<TD bgcolor="#c0c0c0"  width="60"><B>feedback</B>
<TD bgcolor="#c0c0c0"  width="60"><B>delete</B>
</TR>';
while ($myrow = mysql_fetch_array($result))
{
echo '<tr>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["name"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["sex"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["age"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["job"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo '<img src="'.$myrow["picture"].'" width="150px" height="120px">';
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["feedback"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=deleteempcomment.php?id=".$myrow['name'].">
<input type='submit' value='delete' name='delete'></a>";
echo'</td>';
echo"</tr>";
}
echo "</TABLE>";
?>
<a href="manager.php"align="center"style="margin-center:-200px">Back </a>
<center><input type="button" value="Print Report" Onclick="window.print()" align="center" style="margin-left:-200px"><o/center>

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