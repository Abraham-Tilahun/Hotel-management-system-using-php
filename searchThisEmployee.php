<html>
<head>
<title>Employee Information</title>
</head>
<body style="background-image:url(images/background.jpg) ">
<a href="deleteemployee.html">Go Back to Previous Page</a>
<br><br><br>
<table cellpadding = 5 width="30%" border="1" style="background-image:url(images/bgtable.jpg) " align="center">
  <caption align="center"> <h2><i><b>Employee Information</b></i></h2></caption>


<?php
$searchtype=$_POST['emp_id'];
$searchterm=$_POST['username'];
$searchterm=trim($searchterm);

if(empty($searchtype) || empty($searchterm))
{
	echo'Please enter search details.';
echo'<br>';
echo'<br>';

	exit;
}
 $db= mysql_connect('localhost','root','');
if(!$db)
{
	echo 'Error';
	exit;
}

mysql_select_db("newyegof",$db);
$query="select * from employees where ".$usernames." = '".$emp_id."'";
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
echo '<tr>';
echo '<td align="right">';
echo ($i+1);
echo '</td>';


echo '<td align="right">';
echo 'Registration Date:';
echo '</td>';

echo '<td>';
echo $row['month'].', '.$row['date'].' ,'.$row['year'];
echo '</td>';

echo '</tr>';

echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Emplyee ID:';
echo '</td>';

echo '<td>';
echo $row['Employee_ID'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'First Name:';
echo '</td>';

echo '<td>';
echo $row['fname'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Last Nmae';
echo '</td>';

echo '<td>';
echo $row['lname'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Sex';
echo '</td>';

echo '<td>';
echo $row['sex'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Age';
echo '</td>';

echo '<td>';
echo $row['age'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Phone Number';
echo '</td>';

echo '<td>';
echo $row['pnumber'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Email';
echo '</td>';

echo '<td>';
echo $row['email'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Profession';
echo '</td>';

echo '<td>';
echo $row['profession'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'Nationality';
echo '</td>';

echo '<td>';
echo $row['nationality'];
echo '</td>';

echo '</tr>';
echo '<tr>';
echo '<td align="right">';

echo '</td>';


echo '<td align="right">';
echo 'project ID';
echo '</td>';

echo '<td>';
echo $row['pId'];
echo '</td>';

echo '</tr>';
}


?>
</table>
<input type="button" value="Print This Report" Onclick="window.print()" align="center" style="margin-left:-200px"/><br>
<br><br><br>
</body>
</html>
