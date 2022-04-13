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
<align="left"><a href="search&deleteresource.html" target="content">Back </a>
<table cellpadding = 5 width="50%" border="0" style="background-image:url(images/bgtable.jpg) " align="center">
  <caption align="center"> <h2><i><b>ROOM Information </b></i></h2></caption>
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
$query="delete from rooms where room_id="$room_id";
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
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;price: ';
echo $row['price'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;floor_no: ';
echo $row['floor_no'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;max_guest: ';
echo $row['max_guest'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp; status:';
echo $row['status'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;detail: ';
echo $row['detail'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;discount: ';
echo $row['discount'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;description: ';
echo $row['description'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;image: ';
echo $row['image'];
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=deleteroom1.php?id=".$row['room_id'].">
<input type='submit' value='delete' name='delete'></a>";
echo'<hr>';

echo '</p>';
}

echo '<input type="button" value="Print Report" Onclick="window.print()" align="left" style="margin-left:-420px"/><br>';
?>
<br>
<center><input type="button" value="Print Report" Onclick="window.print()" align="center" style="margin-left:-200px"></center>
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
