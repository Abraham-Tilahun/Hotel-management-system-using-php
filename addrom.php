<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="shortcut icon" href="images/google.jpg">
<link rel="shortcut icon" href="images/google.jpg">
<title>Yegofe view  Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
<!--
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {
	font-size: 16px;
	color: #000000;
}
.style8 {
	font-size: 12px;
	font-weight: bold;
}
.style9 {color: #000000}
.style10 {color: #660000}
.style21 {color: red;}
.style22 {color: #009900;
	      font-size: 14px;}
-->
</style>

<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>
</head>

<body>
<?php 
 $check=0;
 $ip = getenv("REMOTE_ADDR");
 //$ip = $_SERVER['SERVER_ADDR'];
 $ip = (float)$ip;
?>
	<div id="header">
		<a href="index.php" id="logo"><img src="images/space.jpg" alt="" width="70" height="88" ><img src="images/head.jpg" alt="" width="507" height="88" /></a>																																																																																					
		<marquee>
		<span>Come and feel like home! </span>
		</marquee>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about_us.php">About our Hotel</a></li>
			<li><a href="photogallery.php">Photogallery</a></li>
			<li style="background-color: #590000"><a href="system_admin.php">system administrator</a></li>
			<li><a href="locations.php">Locations</a></li>
			<li><a href="contact_us.php">Contacts</a></li>
			<li><a href="Help.html">Help</a></li>
			<?php
			if(isset($_COOKIE['logged']))
			echo '<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>';
			else
			echo '<a href="login.php"><img src="images/login.jpg" border="0" align="right"></a>';
			?>
	  </ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="985" height="303" /><div style="height:9px"></div>
		
	</div>
<div id="content">&nbsp;<span class="style9">&nbsp;<span class="style8">You are here:</span></span><span class="style8"> <a href="index.php" class="style9">Home</a> <img src="images/arrow.gif" width="5" height="10"><span class="style10"> system admin</span></span>
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
	echo '<img src="images/white.jpg" width="630" height="1"><span align="right" class="style8 style9"> Welcome <a href="'; echo $role.".php"; echo'" class="style8 style9">'; echo strtoupper($username); echo'</a></span>';}
		  ?>
  <div align="center">
   
	  <span class="style7">add Room here<br><br></span>
      <p style="float:left">&nbsp;&nbsp;<img src="images/white.jpg" width="220"></p>
	  <img src="images/bed11.jpg" alt="image" style="float:left"><img style="float:left" src="images/white.jpg" width="50">
    <table width="450" style="float:left">
  <form name="form1" method="post" action="" enctype="multipart/form-data">
        <?php 
  	       $room_id="";
			$room_no="";
			$room_type="";
			$price="";
			$floor_no="";
			$max_guest="";
			$status="";
			$detail="";
			$discount="";
			$description="";
	
	if(isset($_POST['send']))
	{
	      $room_id=$_POST['room_id'];
			$room_no=$_POST['room_no'];
			$room_type=$_POST['room_type'];
			$price=$_POST['price'];
			$floor_no=$_POST['floor_no'];
			$max_guest=$_POST['max_guest'];
			$status=$_POST['status'];
			$detail=$_POST['detail'];
			$discount=$_POST['discount'];
			$description=$_POST['description'];
	      $target_path=$_FILES['file']['name'];
    }

  ?>
    <tr>
    <td width="44" col>room_id </td>
    <td width="299" colspan="2"><input name="room_id" type="text" value="<?php echo $room_id; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['room_id'])||strlen($_POST['room_id'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid room_id</span>";
				}
				if($_POST['room_id']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter room_id</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>room_no </td>
    <td width="299" colspan="2"><input name="room_no" type="number" value="<?php echo $room_no; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['room_no'])||strlen($_POST['room_no'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid room_no</span>";
				}
				if($_POST['room_no']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter room_no</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>room_type </td>
    <td width="299" colspan="2"><input name="room_type" type="text" value="<?php echo $room_type; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['room_type'])||strlen($_POST['room_type'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid room type</span>";
				}
				if($_POST['room_type']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter room_type</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>price </td>
    <td width="299" colspan="2"><input name="price" type="number" value="<?php echo $price; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['price'])||strlen($_POST['price'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid price</span>";
				}
				if($_POST['price']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter room_price</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>floor_no </td>
    <td width="299" colspan="2"><input name="floor_no" type="text" value="<?php echo $floor_no; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['floor_no'])||strlen($_POST['floor_no'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid room_floor _no</span>";
				}
				if($_POST['floor_no']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter floor_no</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>max_guest </td>
    <td width="299" colspan="2"><input name="max_guest" type="number" value="<?php echo $max_guest; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['max_guest'])||strlen($_POST['max_guest'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid max_guest</span>";
				}
				if($_POST['max_guest']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter max_guest</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>status </td>
    <td width="299" colspan="2"><input name="status" type="text" value="<?php echo $status; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['status'])||strlen($_POST['status'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid status</span>";
				}
				if($_POST['status']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter status</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>detail </td>
    <td width="299" colspan="2"><input name="detail" type="text" value="<?php echo $detail; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['detail'])||strlen($_POST['detail'])>130)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid detail</span>";
				}
				if($_POST['detail']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter detail</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>discount </td>
    <td width="299" colspan="2"><input name="discount" type="number" value="<?php echo $discount; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(!is_numeric($_POST['discount'])||strlen($_POST['discount'])>30)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid discount</span>";
				}
				if($_POST['discount']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter discount</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td width="44" col>description </td>
    <td width="299" colspan="2"><input name="description" type="text" value="<?php echo $description; ?>">
      <?php 
			if(isset($_POST['send']))
			{
				if(is_numeric($_POST['description'])||strlen($_POST['description'])>150)
				{
				$check+=1;
				echo "<span class='style21'>Not a valid description</span>";
				}
				if($_POST['description']=="")
				{
				$check+=1;
				echo "<span class='style21'>Please enter room_description</span>";
				}
				}
				?></td>
  </tr>
  <tr>
    <td>Photo</td>
    <td><input type="file" name="file" id="file" />
	<?php 
			if(isset($_POST['send']))
			{				
				if($target_path=="")
				{
				$check+=1;
				echo "<span class='style21'>Please choose a picture</span>";
				}
				}
				?>
	</td>
  </tr>
  	
  <tr align="left"><td colspan="2" align="left">
  <?php	  
ob_start();
session_start();
	echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
	echo "<tr><td>Type The Letters You See Below</td></tr>\n";
	echo "<tr><td align='left'><image src='captcha.php'></td></tr>\n";
	echo "<tr><td align='left'><input size='24' type='text' name='image'></td>
	</tr>\n";
	echo "</table>\n";
ob_end_flush();
?>
<?php
				if(isset($_POST['send']))
			{
	$image = $_POST["image"];
	if($image != $_SESSION["string"])
	{
	$check+=1;
		echo "<span class='style21'>Please enter the code correctly</span>";
	}
	}
	if(isset($_POST['send']) && $check==0)
			{
$target_path="images/comments/";
$target_path=$target_path.$_FILES['file']['name'];
if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
}
else
{
echo "there was an error uploading the file, pleas try again";
}
	       $room_id=$_POST['room_id'];
			$room_no=$_POST['room_no'];
			$room_type=$_POST['room_type'];
			$price=$_POST['price'];
			$floor_no=$_POST['floor_no'];
			$max_guest=$_POST['max_guest'];
			$status=$_POST['status'];
			$detail=$_POST['detail'];
			$discount=$_POST['discount'];
			$description=$_POST['description'];
	      $target_path=$_FILES['file']['name'];
$con=mysql_connect("localhost","root","");
if(!$con)
die("unable to connect");
mysql_select_db("newyegof",$con);
$sql="insert into rooms values('$room_id','$room_no','$room_type','$price','$floor_no','$max_guest','$status','$detail','$discount','$description','$target_path','$ip')";
$result=mysql_query($sql);
if($result)
{
echo"<span class='style22'> you register room succssfully!</span>";
}
mysql_close($con);

			}
	?>
</tr>


  <tr align="center">
   
    <td height="41" colspan="2" align="left"><img src="images/white.jpg" width="70"><input name="send" type="submit" value="send">&nbsp;&nbsp;&nbsp;<input name="reset" type="submit" value="Reset"></td>
  </tr>
  </form>
</table>
</div>
</div>

	<div id="footer">
		<ul>
			<li><a href="index.php">Home</a>|</li>
			<li><a href="about_us.php">About our Hotel</a>|</li>
			<li><a href="photogallery.php">Photogallery</a>|</li>
			<li><a href="testimonials.php" class="style6">Testimonials</a>|</li>
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
