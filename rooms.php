
<?php
session_start();

if (isset($_POST['Submit'])){
		 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("newyegof",$con);
$sql="select password, username from accounts where username='$user' && role='system_admin'";
$result = mysql_query($sql,$con);
If(!$result)
	die("Unable to query:");
$row=mysql_fetch_row($result);
$password=$row[0];
$username=$row[1];
mysql_close($con);
	switch ($action) {
		case 'Add Rooms Detail':
			$fv=new formValidator(); //from functions.php
			$fv->validateEmpty('roomno','Please enter room no.');
			if($fv->checkErrors()){
				// display errors
				echo "<div align=\"center\">";
				echo '<h2>Resubmit the form after correcting the following errors:</h2>';
				echo $fv->displayErrors();
				echo "</div>";
			}
			else {
				//gets photo.
				if ((isset($_REQUEST['form_submit'])) && ('form_uploader' == $_REQUEST['form_submit'])){
				{
				if  (is_uploaded_file($_FILES['photo']['tmp_name']))
				{
				$filename = $_FILES['photo']['name'];
				$filetype=$_FILES['photo']['type'];
				$file_temp=$_FILES['photo']['tmp_name'];	
				} 
				$filesize=filesize($file_temp);
				$photo=base64_encode(fread(fopen($file_temp, "rb"),$filesize));
				}}
				
				$roomno=$_POST["roomno"];
				$roomtypeid=$_POST["roomtypeid"];
				$roomname=!empty($_POST["roomname"]) ? "'" . $_POST["roomname"] . "'" : 'NULL';
				$noofrooms=$_POST["noofrooms"];
				$occupancy=$_POST["occupancy"];
				$tv=!empty($_POST["tv"]) ? "'" . $_POST["tv"] . "'" : 'NULL';
				$aircondition=!empty($_POST["aircondition"]) ? "'" . $_POST["aircondition"] . "'" : 'NULL';
				$fun=!empty($_POST["fun"]) ? "'" . $_POST["fun"] . "'" : 'NULL';
				$safe=!empty($_POST["safe"]) ? "'" . $_POST["safe"] . "'" : 'NULL';
				$fridge=!empty($_POST["fridge"]) ? "'" . $_POST["fridge"] . "'" : 'NULL';
				$reserverd=!empty($_POST["status"]) ? "'" . $_POST["status"] . "'" : 'NULL';
				$photo=!empty($_POST["photo"]) ? "'" . $photo . "'" : 'NULL';
				$filetype=!empty($_POST["filetype"]) ? "'" . $filetype . "'" : 'NULL';
				
				$sql="INSERT INTO rooms (roomno,roomtypeid,roomname,noofrooms,occupancy,tv,aircondition,fun,safe,fridge,status,photo,filetype)
				 VALUES($roomno,$roomtypeid,$roomname,$noofrooms,$occupancy,$tv,$aircondition,$fun,$safe,$fridge,$status,$photo,$filetype)";
				$results=mkr_query($sql,$conn);		
				AddSuccess($results,$conn);
			}
			break;
		case 'List':
			
			break;
		case 'Find':
			//check if user is searching using name, payrollno, national id number or other fields
			$search=$_POST["search"];
			$sql="Select rooms.roomid,rooms.roomno,rooms.roomtypeid,roomtype.roomtype,rooms.roomname,
			rooms.noofrooms,rooms.occupancy,rooms.tv,rooms.aircondition,rooms.fun,rooms.safe,rooms.fridge,rooms.status,rooms.photo
			From rooms Inner Join roomtype ON rooms.roomtypeid = roomtype.roomtypeid where roomno='$search'";
			$results=mkr_query($sql,$conn);
			$rooms=fetch_object($results);
			break;
	}

}
?>


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
.style12 {color: #000000}
.style13 {color: #660000}
.style15 {
	color: #000000;
	font-weight: bold;
	font-size: 14px;
}
.style16 {font-size: 14px; color: #000000;}
.style17 {
	color: #F5D107;
	font-family: "Adine Kirnberg";
	font-size: 42px;
	font-weight: bold;
}
.style18 {font-size: 40px}
.style19 {font-family: "Adine Kirnberg"; font-size: 42px; color: #F5D107;}
-->
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
			<a href="index.php?logged=out"><img src="images/logout.jpg" border="0" align="right"></a>
		</ul>
		<img src="images/yegofe-view-hotel1.jpg" alt="" width="1000" height="311" /><br />
	</div>
	<div id="content">
		<div class="inside">

		<div id="sidebar2">
		    <td width="67%" bgcolor="#FFFFFF"><table width="100%"  border="0" cellpadding="1">
      <tr>
        <td align="center"></td>
      </tr>
      <tr>
        <td>
		<h2>ROOMS</h2>
		</td>
      </tr>
      <tr>
        <td valign="top"><table width="100%"  border="0" cellpadding="1">
  <tr>
    <td width="26%">Room No. </td>
    <td width="74%"><input type="text" name="roomno" value="<?php echo trim($rooms->roomno); ?>" /></td>
  </tr>
  <tr>
    <td>Room Type </td>
    <td><select name="roomtypeid"><?php populate_select("roomtype","roomtypeid","roomtype",$rooms="roomtypeid");?>
    </select></td>
  </tr>
  <tr>
    <td>Room Name </td>
    <td><input type="text" name="roomname" value="<?php echo trim($rooms->roomname); ?>" /></td>
  </tr>
  <tr>
    <td>No. of rooms </td>
    <td><input type="text" name="noofrooms" value="<?php echo trim($rooms->noofrooms); ?>" /></td>
  </tr>
  <tr>
    <td>Occupancy</td>
    <td><input type="text" name="occupancy" value="<?php echo trim($rooms->occupancy); ?>" /></td>
  </tr>
  <tr>
    <td>TV</td>
    <td><input type="checkbox" name="tv" value="Y" /></td>
  </tr>
  <tr>
    <td>Aircondition</td>
    <td><input type="checkbox" name="aircondition" value="Y" /></td>
  </tr>
  <tr>
    <td>Fun</td>
    <td><input type="checkbox" name="fun" value="Y" /></td>
  </tr>
  <tr>
    <td>Safe</td>
    <td><input type="checkbox" name="safe" value="Y" /></td>
  </tr>
  <tr>
    <td>Fridge</td>
    <td><input type="checkbox" name="fridge" value="Y" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><table width="90%" border="0" cellpadding="1">
      <tr>
        <td width="24%" ><label><input type="radio" name="status" value="V" <?php echo ($rooms->status=="V" ? "checked=\"checked\"" : ""); ?> />
      Vacant</label></td>
        <td width="28%"><label><input type="radio" name="status" value="R" <?php echo ($rooms->status=="R" ? "checked=\"checked\"" : ""); ?> />
      Reserved</label></td>
        <td width="25%"><label><input type="radio" name="status" value="B" <?php echo ($rooms->status=="B" ? "checked=\"checked\"" : ""); ?> />
      Booked</label></td>
	  <td width="23%"><label><input type="radio" name="status" value="B" <?php echo ($rooms->status=="L" ? "checked=\"checked\"" : ""); ?> />
      Locked</label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Attach Photo</td>
    <td><input type="file" name="photo" />
            <input name="form_submit" type="hidden" id="form_submit" value="form_uploader" /></td>
  </tr>
</table>
		</td>
		
      </tr>
	  <tr>
        <td align="left"><div id="RequestDetails"></div>
		</td>
      </tr>
    </table></td>
	<td width="16%" bgcolor="#FFFFFF">
	<table><tr><td bgcolor="#66CCCC">
	<table width="100%"  border="0" cellpadding="1" bgcolor="#FFFFFF">
       <tr>
        <td>Image</td>
      </tr>
	  <tr>
        <td align="center"><input type="submit" name="Submit" value="Add Rooms Detail" /></td>
      </tr>
      <tr>
        <td align="center"><input type="button" name="Submit" value="Rooming List" /></td>
      </tr>
      <tr>
        <td align="center"><input type="button" name="Submit" value="Room Details" /></td>
      </tr>
      <tr>
        <td>
            <label> Search By:<br />
            <input type="radio" name="optFind" value="Name" />
        Agent Name</label>
            <br />
            <label>
            <input type="radio" name="optFind" value="Payrollno" />
        Room No. </label>
            <br>
        <input type="text" name="search" width="100" /><br>
        <input type="submit" name="Submit" value="Find"/>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
	</td></tr></table>
	</td>
	<div id="content">
		<div class="inside">

		   <div id="sidebar2"><img src="images/white.jpg" style="float:left"><span style="font-size:14px; color:red">You didnt login, please login here.</span>	<table width="205">
			<form  action="';?><?php echo $_SERVER["PHP_SELF"]; ?><?php echo'" method="post" name="menuForm">
			<tr><td colspan="2" align="center">';?><?php
	if(isset($_GET["msg"]))
	echo "<span style='color:red'>Sorry, wrong username or password</span>";
	?><?php echo'</td></tr>
  <tr >
    <td width="53"><span class="style20">Username: </span></td>
    <td align="left" width="257"><input name="username" type="text" ></td>
  </tr>
  <tr>
    <td><span class="style20">Password: </span></td>
    <td align="left" ><input name="password" type="password" >
  </tr>

	  <tr>
	  <td colspan="2" align="center"><span class="style20">
	    <input name="login" type="submit" value="Login">
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="register.php" class="style15" >Not a member yet?</a> </td>
	  </tr>
	   </form>';?>
	   <?php
	   if(isset($_POST['login']))
	   {
$user=$_POST['username'];
$pass=$_POST['password'];
$conn=mysql_connect("localhost","root","");
if(!$conn)
die("unable to connect ".mysql_error());
$db=mysql_select_db("newyegof",$conn);
if(!$db)
die("unable to find database ".mysql_error());
$sql="select * from accounts where username='$user'";
$result=mysql_query($sql);
if(!$result)
die("unable to process query ".mysql_error());
$row=mysql_fetch_row($result);
$username=$row[0];
$password=$row[1];
if($pass===$password){
setcookie("logged",$username,time()+21600);
setcookie("page",$row[2],time()+21600);
Header("location:".$row[2].".php");
}
else
Header("location:?msg=wrg");
mysql_close($conn);
	   }
	   ?><?php echo'</table></div><div id="photogallery">
			  <div class="photos2">	You didnt sign in.
			    <p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/hrm/.jpg" width="145" height="120" alt="Not signed in."></p>
			    <p><span class="style15">Not signed in. </span><span class="style16">Please login first to get access.</span> </p>
			  </div>
			  <img src="images/end.gif" alt="" width="270" height="60" />		
	</div>'?>
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
