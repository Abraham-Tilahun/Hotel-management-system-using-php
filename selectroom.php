<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>yegofview Hotel Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
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
<script type="text/javascript">
function validateForm()
{
var y=document.forms["room"]["no_rooms"].value;
var a=document.forms["room"]["madult"].value;
var b=document.forms["room"]["adult"].value;

if ((y==null || y==""))
  {
  alert("all field are required!");
  return false;
  }

}
</script>
<script type="text/javascript">
	// Error checking kept to a minimum for brevity
 
	function setDifference(frm) {
	var dtElem1 = frm.elements['start'];
	var dtElem2 = frm.elements['end'];
	var resultElem = frm.elements['result'];
	 
// Return if no such element exists
	if(!dtElem1 || !dtElem2 || !resultElem) {
return;
	}
	 
	//assuming that the delimiter for dt time picker is a '/'.
	var x = dtElem1.value;
	var y = dtElem2.value;
	var arr1 = x.split('/');
	var arr2 = y.split('/');
	 
// If any problem with input exists, return with an error msg
if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
resultElem.value = "Invalid Input";
return;
	}
	 
var dt1 = new Date();
dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
var dt2 = new Date();
dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
}
</script>



<!--the input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	<div class="right3">
  <form action="index.php" method="post" name="room">
  <label style="margin-left: 119px;">Number of rooms: </label><INPUT id="txtChar" onkeypress="return isNumberKey(event)" type="text" name="arr_date" class="ed">
 <span id="errmsg"></span>
  <br />
  <br />
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("newyegof", $con);

$result = mysql_query("SELECT * FROM rooms");

while($row = mysql_fetch_array($result))
  {
  $a=$_POST['arr_date'];
  $query = mysql_query("SELECT sum(qty_reserve) FROM reservation where arr_date <= '$a' ");
while($rows = mysql_fetch_array($query))
  {
  $in=$rows['sum(qty_reserve)'];
  }
  $an = $row['qty'] - $in;
  echo '<div style="height: 117px;">';
	  echo '<div style="float: left; width: 100px; margin-left: 19px;">';
	  echo "<img width=92 height=72 alt='Unable to View' src='" . $row["image"] . "'>";
	  echo '</div>';
	  echo '<div style="float: right; width: 575px; margin-top: -10px;">';
	  echo '<span class="style5">'.'Avalable Rooms: '.$an.'</span>';
	  if ($angavil > 0){
					echo '<input name="roomid" type="checkbox" value="' .$row["room_id"]. '" />';
					echo '<input type="submit" name="Submit" value="reserve" onclick="setDifference(this.form);"/>';
					}
				if ($an <= 0){
				echo '<span class="style5">'.'their is no free room'.'</span>';
				}	
	  echo '<br>';		
	  echo '<span class="style5">'.'Room_ype: '.$row['room_type'].'</span><br>';
	  echo '<span class="style5">'.'Room room_no: '.$row['room_no'].'</span><br>';
          echo '<span class="style5">'.'max_guest: '.$row['max_guest'].'</span><br>';
          echo '<input name="mchild" type="hidden" value="' .$row["max_guest"]. '" />';
	  echo '<span class="style5">'.'Room Description: '.$row['description'].'</span><br>';
	  echo '</div>';
  echo '</div>';
}

mysql_close($con);
?> 
<input type="hidden" name="result" id="result" />
</form>
  </div>
	
	</div>
  </div>
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 16px;">Check In Date : <?php echo $arr_date; ?></label><br />
<label style="margin-left: 3px;">Check Out Date : <?php echo $dep_date; ?></label><br />
      <BR />
  </div>
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
