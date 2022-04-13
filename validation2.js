function Sure()
{
		if(confirm("Are You Sure You Want?"))
		{
			return true;
		}
		else
		{
			return false;
		}
}

function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
}

function isGreater(a,b,n)
{
	if ( a.value =="" || b.value=="")
	{
	a.style.background = 'Yellow';
	return " -Please Enter Both Minimum & Maximum Number Of Student Of " + n + "\n";
  }
  else if(a.value > b.value)
  {
  	a.style.background = 'Yellow';
	return " -Please Correct Minimum Than Maximum Number Of Student Of " + n + "\n";
  }
  else
  {
  	a.style.background = 'White';
	return "";
  }
}


function isEntered(fld,n)
{
	if(fld.value=="")
	{
		fld.style.background = 'Yellow';
		return " -Please Enter " + n + "\n";
		
	}
	else
	{
		fld.style.background = 'White';
		return "";
	}
}
function isDate(fld)
{
	var re_dt = /^(\d{1,2})\-(\d{1,2})\-(\d{4})$/;
	var e = ""
	if (!re_dt.test(fld.value))
	{
			fld.style.background = 'Yellow';
			e = " -Please Enter A Valida Date Like Day-Month-Year\n";
	}
		// check allowed ranges	
	if (RegExp.$1 > 31 || RegExp.$2 > 12)
	{
			fld.style.background = 'Yellow';
			e = " -Please Enter A Valida Range Date\n";
	}
		// check number of day in month
	var dt_test = new Date(RegExp.$3, Number(RegExp.$2-1), RegExp.$1);
	if (dt_test.getMonth() != Number(RegExp.$2-1))
	{
			fld.style.background = 'Yellow';
			e = " -Please Enter A Valida Range Date\n";
	}
	if(e=="")
		fld.style.background = 'White';
	return e;
}

function isAlphabet(fld,n,l) {
		var error = "";
		var alpha = /^[a-zA-Z\.\-]*$/;
		fld.value = trim(fld.value);
		if (fld.value=="")
		{
			fld.style.background = 'Yellow';
			error = " -Please Enter " + n + ".\n";
		}
		else if(!alpha.test(fld.value))
		{
			
			fld.style.background = 'Yellow';
			error = " -Please Enter Only Alphabet For " + n + ".\n";
		}
		else if(fld.value.length < l)
		{
			fld.style.background = 'Yellow';
			error = " -The " + n + " Must Be Greater Than " + l + "Length.\n";
		}
		else
			fld.style.background = 'White';
	    return error;
	}
function isReal(fld,n,l){
	    var error = "";
		var real = /^[\+\-]?\d*\.?\d*$/; 
		if (fld.value=="")
		{
			fld.style.background = 'Yellow';
			error = " -Please Enter " + n + ".\n";
		}
		else if(!real.test(fld.value))
		{
			fld.style.background = 'Yellow';
			error = " -Plase Enter Only Real Number For " + n + "\n";
		}	 
		else
			fld.style.background = 'White';
	    return error;
}

function isPassword(fld) {
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers 
 
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter a password.\n";
    } else if ((fld.value.length < 7) || (fld.value.length > 15)) {
        error = "The password must be greater than 8 lenght. \n";
        fld.style.background = 'Yellow';
    } else if (illegalChars.test(fld.value)) {
        error = "The password contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } else if (!((fld.value.search(/(a-z)+/)) && (fld.value.search(/(0-9)+/)))) {
        error = "The password must contain at least one numeral.\n";
        fld.style.background = 'Yellow';
    } else {
        fld.style.background = 'White';
    }
   return error;
}   

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
   
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = "You didn't enter an email address.\n";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        fld.style.background = 'Yellow';
        error = "Please enter a valid email address.\n";
    } else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Yellow';
        error = "The email address contains illegal characters.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;
}

function validateFormOnSubmit(theForm) {
		var reason = "";
		  reason += validateUsername(theForm.name);	
		  reason += validateNumber(theForm.reg,'Registration Number',1);
		  reason += validateSex(theForm.sex);
		  reason += validateReal(theForm.tot,1);	
		  reason += validateNumber(theForm.mob,'Mobile Number',10);
		  reason += validateReal(theForm.s1,2);
		  reason += validateReal(theForm.s2,2);
		  reason += validateReal(theForm.s3,2);
		  reason += validateReal(theForm.s4,2);
		  reason += validateReal(theForm.s5,2);
		  reason += validateReal(theForm.s6,2);
		  reason += validateReal(theForm.s7,2);
		  
		      
		  if (reason != "") {
		    return confirm("Some Fields Need Correction:\n" + reason + "(PLEASE ENTER THE CORRECT VALUE FOR YELLOWED TEXT BOX)\n\nDo You Want To Add/Save Student Any Way?");
		  }
		
		  return true;
}

// Script by Drew Noakes
// http://drewnoakes.com
// 14 Dec 2006 - Initial release
// 08 Jun 2010 - Added support for password textboxes

var HintClass = "hintTextbox";
var HintActiveClass = "hintTextboxActive";

// define a custom method on the string class to trim leading and training spaces
String.prototype.trim = function() { return this.replace(/^\s+|\s+$/g, ''); };

function initHintTextboxes() {
  var inputs = document.getElementsByTagName('input');
  for (i=0; i<inputs.length; i++) {
    var input = inputs[i];
    if (input.type!="text" && input.type!="password")
      continue;
      
    if (input.className.indexOf(HintClass)!=-1) {
      input.hintText = input.value;
      input.className = HintClass;
      input.onfocus = onHintTextboxFocus;
      input.onblur = onHintTextboxBlur;
    }
  }
}

function onHintTextboxFocus() {
  var input = this;
  if (input.value.trim()==input.hintText) {
    input.value = "";
    input.className = HintActiveClass;
  }
}

function onHintTextboxBlur() {
  var input = this;
  if (input.value.trim().length==0) {
    input.value = input.hintText;
    input.className = HintClass;
  }
}

window.onload = initHintTextboxes;
