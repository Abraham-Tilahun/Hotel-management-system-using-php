<script type="text/javascript">

 function checkFName(form)
{
  var eobj=document.getElementById('realnameerror');
  var fname = form.firstname.value;
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
  if (fname == '') {
   error='Error: First Name cannot be blank!';
   form.firstname.focus();
  }
  else if (fname.length < 2) 
{
    error="First Name should be atleast 2 characters long";
  }
  else if (!oRE.test(fname))
{
   error="Please insert only letters.";
  }
  if (error)
{
   form.firstname.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
function checkLName(form)
{
  var eobj=document.getElementById('lnameerror');
  var lname = form.lastname.value;
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
  if (lname == '') {
   error='Error: Last Name cannot be blank!';
   form.lastname.focus();
  }
  else if (lname.length < 2) 
{
    error="Last Name should be atleast 2 characters long";
  }
  else if (!oRE.test(lname))
{
   error="Please insert only letters.";
  }
  if (error)
{
   form.lastname.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }


function checkFback(form)
{
  var eobj=document.getElementById('commenterror');
  var scomment = form.comment.value;
  var oRE = /^[a-zA-Z0-9\s\,\.\?\'\!]+$/;
  var error=false;
  eobj.innerHTML='';
  if (scomment == '') {
   error='Error: Feed back cannot be blank!';
   form.comment.focus();
  }
  else if (scomment < 5) 
{
    error="Feed back should be atleast 2 characters long";
  }
  else if (!oRE.test(scomment))
{
   error="Please insert only letters.";
  }
  if (error)
{
   form.comment.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }

function validate() 
 {
 var form = document.forms['form'];
 var ary=[checkFName,checkLName,checkEmail,checkSubject,checkFback];
 var rtn=true;
 var z0=0;
 for (var z0=0;z0<ary.length;z0++)
{
  if (!ary[z0](form))
  {
    rtn=false;
  }
 }
 return rtn;
}
</script>
