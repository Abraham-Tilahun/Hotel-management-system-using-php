<html>
<head>
<title>Feedback Information</title>
</head>
<body background="images/background.jpg"><br>
<h4 align="left"><a href="contractor.html">Back to Contractor page</a></h4>

<table cellpadding = 5 width="50%" border="0" style="background-image:url(images/bgtable.jpg) " align="center">
  <caption align="center"> <h2><i><b>Feedback Information</b></i></h2></caption>
<tr>
    <td>

<?php

 $db= mysql_connect('localhost','root','');
if(!$db)
{
	echo 'Error';
	exit;
}

mysql_select_db('dbucims',$db);
$query="select * from comment";
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
echo '<p><strong>'.($i+1).'. First Name: ';
echo $row['fname'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Last Name: ';
echo $row['lname'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;User Type: ';
echo $row['usertype'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Project Name: ';
echo $row['ProjectName'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Comment: ';
echo $row['feedback'];
echo'<br>';
echo'<hr>';

echo '</p>';
}

echo '<br>';
?>

</td></tr></table>
<br>
<center><input type="button" value="Print Report" Onclick="window.print()" align="center" style="margin-left:-200px"></center>
</body>
</html>
