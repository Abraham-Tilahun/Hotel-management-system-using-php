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
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <span class="style16">Cancel Room</span></span>
			<p>&nbsp;</p>
			<p><span class="style10">Cancel  here:</span></p>
			<table width="264" >
			<form  action="" method="post" name="menuForm">
  <tr >
    <td colspan="2"><input name="fname2" class="box7" type="text" id="fname2" value="Enter your cancel room ID....." onClick="value=''" size="26"><input name="search" type="submit" value="Search"></td>
  
  </tr>		
  <tr >
    <td width="73"><span class="style20">room-ID: </span></td>
    <td align="left" width="179"><input name="fname" id="fname" type="number" value="" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">room-No: </span></td>
    <td align="left"><input name="lname" type="number" id="lname" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">Room-type: </span></td>
    <td align="left"><input name="age" type="text" id="age" size="6" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">price: </span></td>
    <td align="left"><input name="sex" type="number" id="sex" size="9" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">floar-No:</span></td>
    <td align="left"><input name="city" type="number" id="city" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">Max-guest:</span></td>
    <td align="left"><input name="state" type="number" id="state" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">status:</span></td>
    <td align="left"><input name="country" type="text" id="country" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">detail:</span></td>
    <td align="left"><input name="detain" type="text" id="telephone" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">dicount:</span></td>
    <td align="left"><input name="number" type="number" id="email" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">description:</span></td>
    <td align="left"><input name="share_with" type="text" id="share_with" disabled="disabled"></td>
  </tr>
  <tr>
    <!--td><span class="style20">Arrival Date:</span></td>
    <td align="left"><input name="arr_date" type="text" id="arr_date" disabled="disabled"></td>
  </tr>
  <tr>
    <td><span class="style20">Departure Date:</span></td>
    <td align="left"><input name="dep_date" type="text" id="dep_date" disabled="disabled"></td>
  </tr-->
  <tr>
    <td><span class="style20">Room Preferences: </span></td>
    <td align="left"><input name="preferences" type="text" id="preferences" disabled="disabled"></td>
  </tr>
  
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="cancel" type="submit" value="Cancel Room" >
		<script type="text/javascript">		 
		document.menuForm.cancel.disabled = true;
        </script>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    </span></td>
	  </tr>
	   </form>
</table>
		    <p><a href="reservation.php"><img src="images/register1.jpg" alt="" width="134" height="21" border="0"></a></p>
			<p><br><a href="update_reservation.php"><img src="images/updateregis.jpg" alt="" width="134" height="21" border="0"></a></p>
			<p><br><a href="search engine.html"><img src="images/seach.jpg" alt="" width="134" height="21" border="0"></a></p>
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
		  <div style="border: double; width:300px">
		  <br>
		 
		  <?php 

if(isset($_POST['search'])){
  $name2=$_POST['fname2'];
  $con = mysql_connect("localhost","root","");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
$sql="select  room_id, room_no, room_type, price from rooms where res_id = '$name2'";
$result = mysql_query($sql,$con);
If(!$result)
	die("unable to query:". mysql_error());
	echo "<img src='images/white.jpg' width='40' style='float:left'><span class='style11'></span><table border='1'><tr class='style15'><th bgcolor='#F8E6C0'></th><th bgcolor='#F8E6C0'>Reserver's Address</th></tr>";
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
	   room_id=x;
   	    prompt_room_id = prompt("Enter your room-ID", "");
		if (room_id == prompt_room_id)
		 {
		 document.menuForm.cancel.disabled = false;
		
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $res_id=$_POST['fname2'];
mysql_select_db("newyegof",$con);
$sql="select * from rooms where res_id='$res_id'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$room_id=$row[0];
$room_no=$row[1];
$room_type=$row[2];
$price=$row[3];
$floor_no=$row[4];
$max_guest=$row[5];
$status=$row[6];
$detail=$row[7];
$descount=$row[8];
$discription=$row[9];
//$arr_date=$row[10];
//$dep_date=$row[11];
$preferences=$row[12];
$res_id=$row[13];
mysql_close($con);

		?>
var room_id='<?php echo $room_id; ?>';
var room_no='<?php echo $room_no; ?>';
var room_type='<?php echo $room_type; ?>';
var price='<?php echo $price; ?>';
var floor-no='<?php echo $floar-no; ?>';
var max_guest='<?php echo $max_guest; ?>';
var status='<?php echo $status; ?>';
var detail='<?php echo $detail; ?>';
var discount='<?php echo $discount; ?>';
var description='<?php echo $discription; ?>';
//var arr_date='<?php echo $arr_date; ?>';
//var dep_date='<?php echo $dep_date; ?>';
var preferences='<?php echo $preferences; ?>';
var res_id='<?php echo $res_id; ?>';

        document.getElementById('room_id').value = room_id;
        document.getElementById('room_no').value = room_no;
        document.getElementById('room_type').value = room_type;
        document.getElementById('price').value = price;
        document.getElementById('floor-no').value = floor-no;
        document.getElementById('max_guest').value = max_guest;
        document.getElementById('status').value = status;
        document.getElementById('detail').value = detail;
        document.getElementById('discount').value = dicount;
        document.getElementById('description').value = description;
        //document.getElementById('arr_date').value = arr_date;
        //document.getElementById('dep_date').value = dep_date;
        document.getElementById('preferences').value = preferences;
        document.getElementById('fname2').value = res_id;
		}
		else alert("room-ID doesn't belong to "+ prompt_room_id+"..., Please try again!");

			}
		</script>
		
		<?php
		if(isset($_POST['cancel']))
		{
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect");
		mysql_select_db("newyegof",$con);
        $res_id=$_POST['fname2'];
		$sql="delete from rooms where res_id='$res_id'";
		$result=mysql_query($sql);
		if(!$result)
		die(mysql_error());
		echo '<script language="javascript">
alert("room  canceled sucessfully!");</script>';
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
