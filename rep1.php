
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Kombolcha Billing System</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">

  </style>
</head>

<body>
  <div id="main">
    <div id="header" style="width: 1197px; height: 134px;">
	<!--<div id="logo" style="width: 269px; height: 99px;">
	
		<img alt="LOGO" height="105" src="BILL.png" width="311" class="auto-style5" /></div>-->
	<div id="title" style="left: -807px; top: 2px;width: 1197px; height: 159px;">
		<h1 style="height: 24px" class="auto-style1">&nbsp;</h1>
		<h1><strong>KOMBOLCHA TOWN CENTRALIZED BILLING SYSTEM</strong></h1>
		<h2><strong>የኮምቦልቻ ከተማ ማዕከላዊ ደረሰኝ አገልግሎት</strong></h2>
    </div>
</div>


	<div id="menubar">
     <ul id="menu">
	
      <li><a href="employee.php"><font color="white">HOME</font></a></li>
	   <!--li><a href="billsearch.php"><font color="white">pay online</font></a></li>
	   <li><a href="cash.php"><font color="white">pay incash</font></a></li>
	   <!--<li><a href="insertmoney.php"><font color="white">Add money</font></a></li>-->
	   <li><a href="ch.php"><font color="white">check payment</font></a></li>
	   <li><a href="cash.php"><font color="white">pay incash</font></a></li>
	   	  	  <li><a href="viewcustomer.php""><b><font color="white">View customer</font></b></a></li>
	  <li><a href="report.php"><font color="white">Generate report</font></a></li>
	  	  <!--li><a href="viewreport.php"><font color="white">View Report</font></a></li-->
	  <li><a href="change1.php""><b><font color="white">change password</font></b></a></li>
	 <li><a href="logout.php"><b><font color="white">logout</font></b></a></li>
		 
      </ul>
    </div><!--close menubar-->		
    
<div id="site_content">		

	  <div class="sidebar_container" style="width: 204px">       
		<div class="sidebar" style="width: 199px">
          <div class="sidebar_item">
<body bgcolor=#9494B8>

<!--<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>_-->
<hr><hr>
 <font size="3"color ="green">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?></font>
<br>
<hr><hr>
</body>
            
			 <!--<ul id="menu">
			 <ul id="menu">-->

		<img width="215" height="150" src="Img/wt.jpg"/>
		&nbsp; &nbsp;&nbsp;	
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td></td><td><img width="200" height="100"src="Img/11.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td>
			
					
			</tr>
			<tr><td></td><td><img width="200" height="50"src="Img/9.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			
			</tr>
			
			
			
			</table>
			<br><br>
			<hr><hr>
			 
			<hr></hr>
                     <marquee direction="up">
					 
                     <p>&nbsp;</p></marquee></th>
               </tr>
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<?php
include("see.php");


?>

<form  method='POST' action='rep1.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<table>
	<tr><td"><h3>To Generate Total  Report per Day Select date </h3></td></tr>
      <tr><td style="width: 172px">date: 
	  <select name="date" id="sch"  required>
          <option>date</option>
		  <?php
$result = mysql_query("SELECT * FROM payment");

while($row = mysql_fetch_array($result))
  {   	
   $rowdate=$row['date']; 
   
?>

           <option><?php echo $rowdate; ?> </option>
  <?php 
  }
  ?>   
		</select></td>
		 <td><input style="background-color:#808000"type='submit' class="button_example" value='report' name='submitMain' Onclick="return check(this.form);"/></td></tr>
		 
<tr><th>date</th>
<th>totalamountofbirr</th>


</tr>

<?php
$date =$_POST['date'];
$amount=0;
$result = mysql_query("select * FROM payment where date='$date'");
while($row = mysql_fetch_array($result))
  {   	
   $pdate=$row['date'];
   $dbamountofbirr=$row['amountofbirr'];   
   $amount=$amount+$dbamountofbirr;
   }
   
mysql_close($conn);
	  
?>

  <tr>
<td><?php echo $pdate; ?>  </td>
<td><?php echo $amount; ?></td>


</tr>
</table>
</form>

 </p>
		 </div>
		 </div>
		 <div id="emp">

		 
		  </center>
		  </div>
		 	   </div>
	  </div>
	  
  <!--<ul class="style10" id="menu">
        <li class="style9 style14 style13">
		<img width="1200" height="100" src="Img/footer.jpg"/>
          
        </li>
  </ul>-->
   	
	  <h2>
	    <!--close sidebar_container-->
    </h2>
</div>
	<!--close sidebar-->
</body>
</html>