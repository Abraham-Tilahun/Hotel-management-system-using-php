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
		    <span class="style15">You are here:</span><span class="style11"> <a href="index.php" class="style14">Home</a> <img src="images/arrow.gif"> <span class="style16">Update room</span></span>
			<p>&nbsp;</p>
			<p><span class="style10">Update  here:</span></p>
			<table width="264" >
			<form  action="" method="post" name="menuForm">
  <tr >
    <td colspan="2"><input name="fname2" class="box7" type="text" id="fname2" value="Enter you want to update room ID....." onClick="value=''" size="26"><input name="search" type="submit" value="Search"></td>
  
  </tr>		
  <tr >
    <td width="73"><span class="style20">room_id: </span></td>
    <td align="left" width="179"><input name="room_id" type="text" id="room_id" ></td>
  </tr>
  <tr>
    <td><span class="style20">room_no: </span></td>
    <td align="left"><input name="room_no" type="number" id="room_no" ></td>
  </tr>
  <tr>
    <td><span class="style20">room_type: </span></td>
    <td align="left"><input name="room_type" type="text" id="room_type" size="6"></td>
  </tr>
  <tr>
    <td><span class="style20">price: </span></td>
    <td align="left"><input name="price" type="price" id="price" size="9" ></td>
  </tr>
  <tr>
    <td><span class="style20">floor_no:</span></td>
    <td align="left"><input name="floor_no" type="number" id="floor_no" ></td>
  </tr>
  <tr>
    <td><span class="style20">max_guest:</span></td>
    <td align="left"><input name="max_guest" type="number" id="max_guest"></td>
  </tr>
  <tr>
    <td><span class="style20">status:</span></td>
    <td align="left"><input name="status" type="text" id="status" ></td>
  </tr>
  <tr>
    <td><span class="style20">detail:</span></td>
    <td align="left"><input name="detail" type="text" id="detail" ></td>
  </tr>
    <!--tr>
    <td><span class="style20">Email:</span></td>
    <td align="left"><input name="email" type="text" id="email"></td>
  </tr-->

  <tr>
      <td><span class="style20">discount:</span></td>
    <td align="left"><input name="discount" type="number" id="discount" ></td>
  </tr>
  <tr>
    <td><span class="style20">image:</span></td>
    <td align="left"><input name="file" type="file" id="file" ></td>
  </tr>
  <!--tr>
    <td><span class="style20">Departure Date:</span></td>
    <td align="left"><input name="dep_date" type="text" id="dep_date" ></td>
  </tr-->
  <tr>
    <td><span class="style20">Room Preferences: </span></td>
    <td align="left"><input name="preferences" type="text" id="preferences" ></td>
  </tr>
  
	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="update" type="submit" value="Update Room">
		<script type="text/javascript">		 
		document.menuForm.update.disabled = true;
        </script>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input name="Input" type="reset">	   
	    </span></td>
	  </tr>
	   </form>
</table>
		    <!--p><a href="reservation.php"><img src="images/register1.jpg" alt="" width="134" height="21" border="0"></a></p>
			 <p><a href="cancel_reservation.php"><br><img src="images/cacelregis.jpg" alt="" width="134" height="21" border="0"></a></p-->
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
		  <div style="border: double; width:300px"><br />
		  <?php 

				if(isset($_POST['search'])){
				$name2=$_POST['fname2'];
				 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
$sql="select  room_id, room_no, room_type, max_guest,detail from rooms where room_id = '$name2'";
$result = mysql_query($sql,$con);
If(!$result)
	die("unable to query:". mysql_error());
	echo "<img src='images/white.jpg' width='40' style='float:left'><span class='style11'></span><table border='1'><tr class='style15'><th bgcolor='#F8E6C0'></th><th bgcolor='#F8E6C0'>Room Address</th></tr>";
while($row=mysql_fetch_row($result)){
$room_no=$row[3];
echo "<tr class='style15' ><td align='center' bgcolor='#F8E6C0'><img src='images/check3.png' width='20' height='20' onClick='abc(\"$room_no\")'></td><td colspan='2' bgcolor='#F0F0F0'>";
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
	   room_no=x;
   	    prompt_room_no = prompt("Enter you want to update room id", "");
		if (room_no == prompt_room_no)
		 {
		 document.menuForm.update.disabled = false;
		
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $room_id=$_POST['fname2'];
mysql_select_db("newyegof",$con);
$sql="select * from rooms where room_id='$room_id'";
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
$discount=$row[8];
$image=$row[10];
$preferences=$row[11];
mysql_close($con);

		?>
var room_id='<?php echo $room_id; ?>';
var room_no='<?php echo $room_no; ?>';
var room_type='<?php echo $room_type; ?>';
var price='<?php echo $price; ?>';
var floor_no='<?php echo $floor_no; ?>';
var max_guest='<?php echo $max_guest; ?>';
var status='<?php echo $status; ?>';
var detail='<?php echo $detail; ?>';
var discount='<?php echo $discount; ?>';
var image='<?php echo $image; ?>';
var preferences='<?php echo $preferences; ?>';
        document.getElementById('fname2').value = room_id;
        document.getElementById('room_no').value = room_no;
        document.getElementById('room_type').value = room_type;
        document.getElementById('price').value = price;
        document.getElementById('floor_no').value = floor_no;
        document.getElementById('max_guest').value = max_guest;
        document.getElementById('status').value = status;
        document.getElementById('detail').value = detail;
		document.getElementById('discount').value = discount;
        document.getElementById('file').value = image;
        document.getElementById('preferences').value = preferences;
		}
		else alert("room ID doesn't belong to "+ prompt_room_no+"..., Please try again!");

			}
		</script>
		
		<?php
				if(isset($_POST['update']))
		{
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("unable to connect");
		mysql_select_db("newyegof",$con);
        $room_id=$_POST['fname2'];
		$room_no=$_POST['room_no'];
		$room_type=$_POST['room_type'];
		$price=$_POST['price'];
		$floor_no=$_POST['floor_no'];
		$max_guest=$_POST['max_guest'];
		$status=$_POST['status'];
		$detail=$_POST['detail'];
		$discount=$_POST['discount'];
		$image=$_POST['file'];
        $preferences=$_POST['preferences'];
		$sql="update rooms set room_id='$room_id',room_no= '$room_no',room_type='$room_type',price='$price',floor_no='$floor_no',max_guest='$max_guest',status='$status',detail='$detail',discount='$discount',image='$image' where room_id='$room_id'";
		$result=mysql_query($sql);
		if(!$result)
		die(mysql_error());
		echo '<script language="javascript">
alert("Room updated sucessfully!");</script>';
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
					<span>yegof mauntain </span>
					
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
