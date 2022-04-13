<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>yegofview Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body {
	background-image:url(images/background.jpg);
	border: groove #9999FF;
}
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
<align="left"><a href="index.php" target="content">Back </a>

<table cellpadding = 5 width="50%" border="0" style="background-image:url(images/bgtable.jpg) " align="center">
  <caption align="center"> <h2><i><b>ROOM Information </b></i></h2></caption>
  <form method="post"action="#">
  <input name="search" type="text" value=""placeholder="search here">
  <input name="check_room" type="submit" value="search">
  </form>
<tr>
    <td>

<?php
 $db= mysql_connect('localhost','root','');
if(!$db)
{
	echo 'Error';
	exit;
}
mysql_select_db('newyegof',$db);
$result = mysql_query("SELECT * FROM rooms",$db);
echo '<center><table bgcolor="#c0c0c0" border="5" align="center">';
echo'<TR><TD bgcolor="#c0c0c0"  width="60"><B>room_id</B>
<TD bgcolor="#c0c0c0"  width="60"><B>room_no</B>
<TD bgcolor="#c0c0c0"  width="60"><B>room_type</B>
<TD bgcolor="#c0c0c0"  width="60"><B>price</B>
<TD bgcolor="#c0c0c0"  width="60"><B>floor_no</B>
<TD bgcolor="#c0c0c0"  width="60"><B>max_guest</B>
<TD bgcolor="#c0c0c0"  width="60"><B>status</B>
<TD bgcolor="#c0c0c0"  width="60"><B>detail</B>
<TD bgcolor="#c0c0c0"  width="60"><B>discount</B>
<TD bgcolor="#c0c0c0"  width="60"><B>description</B>
<TD bgcolor="#c0c0c0"  width="60"><B>image</B>
<TD bgcolor="#c0c0c0"  width="60"><B>unreserve</B>

</TR>';
while ($myrow = mysql_fetch_array($result))
{
echo '<tr>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["room_id"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["room_no"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["room_type"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["price"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["floor_no"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["max_guest"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["status"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["detail"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["discount"];
echo '</td>';
echo '<td bgcolor="#b0c4de" width="60">';
echo $myrow["description"];
echo '</td>';

echo '<td bgcolor="#b0c4de" width="60">';
echo '<img src="'.$myrow["image"].'" width="150px" height="120px">';
echo '</td>';
if ($myrow['status'] == 'free') {
echo "<td>Not Reserved Yet!</td>";
	
}else{
echo "<td><a href='unreserve.php?id=".$myrow['room_no']."'>unreserve</a></td>";

}

echo'</td>';
echo"</tr>";
}
echo "</TABLE>";

echo '<input type="button" value="Print Report" Onclick="window.print()" align="left" style="margin-left:-420px"/><br>';

?>
<br>

<a href="index.php"align="center"style="margin-center:-200px">Back to Home</a>
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
