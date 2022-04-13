<html><head>
<script type="text/javascript">
<!--
function AllowAlphabet(){
               if (!frm.fname.value.match(/^[a-zA-Z]+$/) && frm.fname.value !="")
               {
                    frm.fname.value="";
                    frm.fname.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			    if (!frm.lname.value.match(/^[a-zA-Z]+$/) && frm.lname.value !="")
               {
                    frm.lname.value="";
                    frm.lname.focus(); 
                    alert("Please Enter only alphabets for Last Name");
               }
			   if (!frm.profession.value.match(/^[a-zA-Z]+$/) && frm.profession.value !="")
               {
                    frm.profession.value="";
                    frm.profession.focus(); 
                    alert("Please Enter only alphabets for Profession");
               }
			    if (!frm.pnumber.value.match(/^[0-9]+$/) && frm.pnumber.value !="")
               {
                    frm.pnumber.value="";
                    frm.pnumber.focus(); 
                    alert("Please Enter only Number value for Phone Number");
               }
			   if (!frm.age.value.match(/^[0-9]+$/) && frm.age.value !="")
               {
                    frm.age.value="";
                    frm.age.focus(); 
                    alert("Please Enter only Number value for Age");
               }


}
function validateForm()
{
var x=document.forms["frm"]["email"].value;
var vphone=document.forms["frm"]["phone"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length ||x=="")
  {
  alert("Not a valid e-mail address");
  return false;
  }
if(vphone.length<10)
	{
  alert("Phone Should be 10 Digit");
  return false;
	}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<style type="text/css">
<!--
.style2 {font-size: 16}
h1 {text-decoration:blink; color:#0000FF;}
-->
</style>
</head>
<Body style="background-image:url(images/background.jpg)">
<center><h1 class="style3">Update Employee </h1>
</center>
<hr>
<a href="Contractor.html" target="content">Back to contractor page</a>
<hr>
<table align=center style="background-image:url(images/bgtable.jpg)" cellpadding="0" cellspacing="4" width="40%">
<caption align="center" style="font-weight:bold">
<span class="style5">Fill the following employee detail.</span>
</caption>
<form  action="updateThisEmployee.php" name="frm"  method="post" onsubmit="return validateForm();">
<tr><td align="right"><span class="style2">Old Employee ID:</span></td>
<td><input name="oldempid" type="text" size="30" required></td>
</tr>
<tr><td bgcolor="#666666">&nbsp;</td>
<td bgcolor="#666666">&nbsp;</td>
</tr>
<tr><td align="right"><span class="style2">Date of registration&nbsp;</span></td>
<td><span class="style2">
  <select name="date" required >
    <option></option>
    <option>	1	</option>	
    <option>	2	</option>	
    <option>	3	</option>	
    <option>	4	</option>	
    <option>	5	</option>	
    <option>	6	</option>	
    <option>	7	</option>	
    <option>	8	</option>	
    <option>	9	</option>	
    <option>	10	</option>	
    <option>	11	</option>	
    <option>	12	</option>	
    <option>	13	</option>	
    <option>	14	</option>	
    <option>	15	</option>	
    <option>	16	</option>	
    <option>	17	</option>	
    <option>	18	</option>	
    <option>	19	</option>	
    <option>	20	</option>	
    <option>	21	</option>	
    <option>	22	</option>	
    <option>	23	</option>	
    <option>	24	</option>	
    <option>	25	</option>	
    <option>	26	</option>	
    <option>	27	</option>	
    <option>	28	</option>	
    <option>	29	</option>	
    <option>	30	</option>	
    <option>	31	</option>
  </select>
  <select name="month" required >
    <option></option>
    <option>	January	</option>	
    <option>	February	</option>	
    <option>	March	</option>	
    <option>	April	</option>	
    <option>	May	</option>	
    <option>	June	</option>	
    <option>	July	</option>	
    <option>	August	</option>	
    <option>	September	</option>	
    <option>	October	</option>	
    <option>	November	</option>	
    <option>	December	</option>
  </select>
  <select name="year" required >
    <option></option>
    <option>	2013	</option>	
    <option>	2014	</option>	
    <option>	2015	</option>	
    <option>	2016	</option>	
    <option>	2017	</option>	
    <option>	2018	</option>	
    <option>	2019	</option>	
    <option>	2020	</option>	
    <option>	2021	</option>	
    <option>	2022	</option>	
    <option>	2023	</option>	
    <option>	2024	</option>	
    <option>	2025	</option>
  </select>
</span></td>
</tr>
<tr><td align="right"><span class="style2">Employee ID&nbsp;</span></td>
<td><input name="empId" type="text" size="30" required></td>
</tr>
<tr><td align="right"><span class="style2">First Name&nbsp;</span></td>
<td><input  name="fname" type="text" onKeyUp="AllowAlphabet()" size="30" required></td>
</tr>
<tr><td align="right"><span class="style2">Last Name&nbsp;</span></td>
<td><input name="lname" type="text" onKeyUp="AllowAlphabet()" size="30"  required></td>
</tr>
<tr><td align="right"><span class="style2">Sex&nbsp;</span></td>
  <td><span class="style2">
    <select name="sex" required >
      <option></option>
      <option>Female</option>
      <option>Male</option>
    </select>
  </span></td>
</tr>
<tr><td align="right"><span class="style2">Age&nbsp;</span></td>
<td><input name="age" type="text" onKeyUp="AllowAlphabet()" size="30" maxlength="2"  required></td>
</tr>
<tr><td align="right"><span class="style2">Phone Number&nbsp;</span></td>
<td><input name="pnumber" type="text" onKeyUp="AllowAlphabet()"  size="30"  maxlength="10"  required></td>
</tr>
<tr><td align="right"><span class="style2">Email&nbsp;</span></td>
<td><input name="email" type="text" onBlur="MM_validateForm('email','','NisEmail');return document.MM_returnValue" size="30"  required></td>
</tr>
<tr><td align="right"><span class="style2">Profession&nbsp;</span></td>
<td><input name="profession" type="text" onKeyUp="AllowAlphabet()"  size="30"  required></td>
</tr>
<tr><td align="right"><span class="style2">Nationality&nbsp;</span></td>
  <td><span class="style2">
    <select required  name="nationality">
      <option></option>
	      <option value="Argentina">Argentina</option> 
	      <option value="Armenia">Armenia</option> 
	      <option value="Aruba">Aruba</option> 
	      <option value="Australia">Australia</option> 
	      <option value="Austria">Austria</option> 
	      <option value="Azerbaijan">Azerbaijan</option> 
	      <option value="Bahamas">Bahamas</option> 
	      <option value="Bahrain">Bahrain</option> 
	      <option value="Eritrea">Eritrea</option> 
	      <option value="Estonia">Estonia</option> 
	      <option value="Ethiopia">Ethiopia</option> 
	      <option value="Seychelles">Seychelles</option> 
	      <option value="Sierra Leone">Sierra Leone</option> 
	      <option value="Singapore">Singapore</option> 
	      <option value="Slovakia">Slovakia</option> 
	      <option value="Yemen">Yemen</option> 
	      <option value="Zambia">Zambia</option> 
	      <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </span></td>
</tr>
<tr>
<td align = 'right'><font color="red">*</font>project name</td>
 <td><select id="proname" name="proname" required>
<option></option><?php 

	$connect=mysql_connect("localhost","root","");
	$db=mysql_select_db("dbucims",$connect);
	if(!$db)
	{
		echo'databse connction faild';
		
	}
$result_set = mysql_query ("SELECT * FROM project");
//echo '<option value="#">Select...</option>';
while($row=mysql_fetch_array($result_set)){
	$id=$row['pId'];
	$name=$row['pName'].'( ' .$row['pId'].')';
	//$row['addressNumber'] . ' ' . $row['addressStreet'] . '  ' . $row['city'] .
echo '<option value="'.$row['pId'].'">';
echo $name;
}
?>
</select></td>
</tr>
<tr><td>&nbsp;</td>
  <td><span class="style2">
  <input type="submit" value="Save Changes">
&nbsp;&nbsp;&nbsp;
  <input type="reset" value="Reset">
  </span></td>
</tr>
</form><br>
<div align=center style="font-size: 10px; color: #dadada;" id="dumdiv">
</div>
</td></tr>
<script type="text/javascript">document.onload = ctck();</script>
</td></tr>
</table>
<br><br><br>
</Body>
</html>