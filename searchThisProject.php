<html>
<head>
<title>Project Information</title>
</head>
<body style="background-image:url(images/bgtable.jpg) ">
<h4><a href="deleteproject.html">Back to previous page</a></4>

<table cellpadding = 5 width="50%" border="0" style="background-image:url(images/bgtable.jpg) " align="center">
  <caption align="center"> <h2><i><b>Project Information</b></i></h2></caption>
<tr>
    <td>

<?php
$searchtype=$_POST['searchtype'];
$searchterm=$_POST['searchterm'];



 $db= mysql_connect('localhost','root','');
if(!$db)
{
	echo 'Error';
	exit;
}

mysql_select_db('dbucims',$db);
$query="select * from project where PId = '".$searchterm."'";
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
echo '<p><strong>'.($i+1).'. Project ID: ';
echo $row['pId'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;project name: ';
echo $row['pName'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;project type: ';
echo $row['ptype'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Sart Date: ';
echo $row['stratdate'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Finish Date: ';
echo $row['finishdate'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Project Location: ';
echo $row['pLocation'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Project Owner: ';
echo $row['pOwner'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Floor Level: ';
echo $row['floorlevel'];
echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;Total budget: ';
echo $row['Tbudget'];


echo'<br>';
echo'<br>';

echo '</p>';
}

echo '<input type="button" value="Print This Report" Onclick="window.print()" align="center" style="margin-left:-420px"/><br>';
?>
</td></tr></table>
</body>
</html>
