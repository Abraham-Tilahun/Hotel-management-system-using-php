<html>
<head>
<title>Create Account</title>
<style type="text/css">
body {
	background-color:#CCFFFF;
	border: groove #9999FF;
}
a {color:#3300FF; text-decoration:none; height:20px;}
a:hover { background-color:#FF0000; color:#FFFF33; text-decoration:blink; font-size:18px; text-transform:uppercase;}
</style>
</head>
<body bgcolor="FFCCFF">
<h2><a href="createacount.html">Back to previous page</a></h2>

<table border="0"width="300" bordercolor="#3399CC"  bgcolor="#33CC99" align="center">
  <caption align="center"> <h2><i><b>Your Account Information</b></i></h2></caption>
<tr>
    <td>
<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$usertype=$_POST['usertype'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=$_POST['repassword'];


if($password==$repassword){
$con=mysql_connect("localhost","root","");
if(!$con){
die("error:".mysql_error());}
$db=mysql_select_db("newyegof",$con);
if(!$db){
die("error:".mysql_error());}

else {
	$query="INSERT INTO login values('','$firstname','$lastname','$username','".$usertype."','".$password."','$repassword')";
	$r=mysql_query($query);
	if($r){
		echo $firstname.' Welcome!'.'<h4> Congratulation Now you have an account in yegofview hotel.</h4>';
		echo 'User Name='.$username.'<br>';
		echo 'User Type='.$usertype.'<br>';
		echo 'Password='.$password.'<br>';
	}
	else{
		echo $username. '<h2 align="center"> Please fill information correctly!</h2> <a href="createaccount.html">Try Again</a>';
	}
}
}
else{echo 'Password Comfirmation Failed! <a href="createacount.html">Try Again</a>';}
?>
</td>
  </tr>
</table>		 
</body>
</html>