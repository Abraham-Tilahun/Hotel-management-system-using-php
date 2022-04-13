<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("newyegof",$conn);
$id = $_GET['id'];
    $query="UPDATE rooms SET status = 'free' WHERE room_no = '$id'";
    $query2="UPDATE reservation SET status = 'inactive' WHERE room_number = '$id'";
$result=mysql_query($query);
$result2=mysql_query($query2);

if($result && $result2)
{
	echo"room is Unreserved successfully";
	echo '<meta content = "3; searchResource.php" http-equiv = "refresh"/>';
}
else
{
	echo"report is  not found in the database";
	echo '<meta content = "3;searchResource.php" http-equiv = "refresh"/>';
}
mysql_close($conn);
?>