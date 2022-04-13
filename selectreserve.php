<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>yegofview Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
</style>

<script type="text/javascript">
imageArray = new Array("images/bed13.JPG","images/bed3.JPG","images/bed4.JPG","images/bed5.JPG", "images/bed2.JPG", "images/bed12.JPG","images/white.jpg");
altArray = new Array("Family", "Single", "Twin","white"); 
function changeTest () { 
var Index = document.menuForm.select1.options[document.menuForm.select1.selectedIndex].value; 
document.testStar.src = imageArray[Index]; document.testStar.alt = altArray[Index]; 
} 
</script>
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
			<li><a href="Help.html">Help</a></li>
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
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <span class="style16">Room information</span></span>
			<p>&nbsp;</p>
			<p><span class="style10"> search room here:</span></p>
<table width="224" border="0" style="color:#000000">
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="menuForm">
<?php //form values here
$sel="";
if(isset($_POST['reserve'])||isset($_POST['check_room']))
{
$sel=$_POST['select1'];
}
?>
	<?php echo'	</td>
  </tr>
  <tr>
    <td><span class="style20">Room Preferences: </span></td>
    <td align="left">
          <select id="select1" onchange="changeTest()" name="select1">
            <option value="3">Choose a room type...</option>
            <option value="1"';?><?php if($sel=="1") echo "selected";?>
			
			<?php echo'>Single</option>
            <option value="2"';?><?php if($sel=="2") echo "selected";?>
			
			<?php echo'>Twin</option>
            <option value="0"';?><?php if($sel=="0") echo "selected";?>
			
			<?php echo'>Family</option>
          </select>
        	</td>
			<td><input name="check_room" type="submit" value="Check Availability"></td>
  </tr>
   <tr>
    <td><span class="style20">:</span></td>
    <td align="left">';

	function randomString($length){
	$chars = "abcdefghijkmnopqrstuvwxyz0123456789";
	srand((double)microtime()*1000000);
	$str = "";
	$i=0;
		
		while($i <= $length){
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$str = $str . $tmp;
			$i++;
		}
	return $str;
}
$string = randomString(rand(7,7));

?>
	
 </tr>
  <tr>
    <td colspan="2">
	  <span class="style20">
<?php	  
ob_start();
session_start();
	echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
	echo "<tr><td></td></tr>\n";
	//echo "<tr><td align='left'><image src='captcha.php'></td></tr>\n";
	echo "<tr><td align='left'></td>
	<td>";?>
	
	<?php echo"</td>
	</tr>\n";
	echo "</table>\n";
ob_end_flush();
?>
	  <?php
	  if(isset($_POST['reserve'])&&$check==0)
	{
if($sel=="0")$pref="Family";else if($sel=="1")$pref="Single";else if($sel=="2")	$pref="Twin";

$con=mysql_connect("localhost","root","");
if(!$con)
die("unable to connect");
mysql_select_db("newyegof",$con);
$sql="insert into reservation values('$first','$last','$age','$sex','$city','$state','$country','$telephone','$email','$share_with','$arr_date','$dep_date','$pref','$res_id')";
$result=mysql_query($sql);
if($result)
{
echo"<span class='style22'>You reserve sucessfully, Thank you!</span>";
}
mysql_close($con);}
	?>
	   </form>
	   
</table>
			
		    <p align="right" class="style7 style8 style9"><br>Come And Feel Like Home </p>
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
				<p> 
				<?php 

				if(isset($_POST['check_room'])){
				$preference=$_POST['select1'];
				 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
if(isset($_COOKIE['logged'])){
$sql="select room_no,room_type,discount,detail from rooms where floor_no = $preference && status = 'free'";			
}
else{
$sql="select room_no,room_type,price,detail from rooms where floor_no = $preference && status = 'offline'";}
$result = mysql_query($sql,$con);
If(!$result)
	die("unable to query:");
	echo "<span class='style11'><caption>Room Results</caption></span><table border='1'><tr class='style15'><th>Room No.</th><th>Room Type</th><th>Price</th><th>Room Detail</th></tr>";
while($row=mysql_fetch_row($result)){
echo "<tr class='style23'>";
	for($i=0;$i<count($row);$i++){
		echo "<td>$row[$i]</td>";
		}
		echo "</tr>";
	 }
	 echo "</table></span>"; 	
mysql_close($con);


				}
				
				?>
				
				
				<?php
						 if(isset($_COOKIE['logged'])){
			echo"<br><span class='style22'>Congraduation!!!, you got a discont on every rooms price.</span><br>";}

			if(isset($_POST['reserve'])||isset($_POST['check_room']))
	        {
				if(isset($_POST['select1']))
				{
				  if($sel==0)
				  echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/bed13.jpg"  border="0" name="testStar"></img>';
				  else if($sel==1)
				  echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/bed2.jpg"  border="0" name="testStar"></img>';
				  else if($sel==2)
				  echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/bed12.jpg"  border="0" name="testStar"></img>';
				  else
			      echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/white.jpg"  border="0" name="testStar"></img>';
				}
				else
			    echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/white.jpg"  border="0" name="testStar"></img>';
			}	
				else
			echo'<br><img id="testStar" width="293" height="178" alt="red star" src="images/white.jpg"  border="0" name="testStar"></img>';
				?>
				<br>
			</p>

		  </div>
			<div id="photogallery">
				<div class="photos"><a href="#" target="_blank"><img src="images/yegofe-view-hotel1.jpg" alt="" width="158" height="100" /></a>
					<span>yegofview</span>
					<a href="#" target="_blank"><img src="images/kom.jpg" alt="" width="158" height="100" /></a>
					<span>kombolcha </span>
					<a href="#" target="_blank"><img src="images/mountain.jpg" alt="" width="158" height="100" /></a>
					<span>yegof mountain </span>
					
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
