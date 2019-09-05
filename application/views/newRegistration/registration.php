<!DOCTYPE HTML5>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE">
  <meta name="keywords" content="WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE">
  <meta name="author" content="WBCEA">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/main/assets/images/logo.png" sizes="16x16">
  <title>
    Registration Portal
  </title>
<!DOCTYPE CSS3>
  <style>
  .header {
  	background: #007399;
    color: white;
  }


</style>
<!--<style>
  .header img {

  	margin-bottom: 10px;

  	margin-top: 10px;

  	width: 65px;

  	height: 70px;

  }



  .header h1 {

  	padding: 0 0 0 0;
  	text-transform: uppercase;

  	font-size: 19px;

  	margin: 7px 0 0 0;

  	line-height: 19px;

  	color: #fff;

  	font-weight: bold;

  	<!--font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;

  }



  .header h3 {

  	text-transform: uppercase;

  	font-size: 16px;

  	margin: 7px 0 0 0;

  	line-height: 16px;

  	color: #fff;

  	font-weight: bold;

  	<!--font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;

  }



  .header h2 {
  	padding: 0 0 0 0;
  	font-size: 14px;

  	margin: 0 0 0 0;

  	line-height: 15px;

  	color: #fff;

  	font-style: italic;

  	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;

  }
  </style>-->
  <style>
  body{
    font-style: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
  }
  fieldset{
    border: 1px solid green;
    border-radius: 6px 6px 6px 6px;
  }
  button{
    width: 230px;
    height: 40px;
    font-size: 15px;
    font-weight: bold;
    font-style: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
    background-color: blue;
    color: white;
    border-radius: 3px 3px 3px 3px;
    border: 2px solid black;
  }
  input{
    width: 160px;
    border-radius: 3px 3px 3px 3px;
    border: 1px solid #ccc;
    font-weight: bold;
    font-style: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
    background-color: #eee;
  }
  select{
    width: 160px;
    border-radius: 3px 3px 3px 3px;
    border: 1px solid #ccc;
    font-style: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
    background-color: #eee;
  }
  .footer{
    color:#aaa;
    font-style: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
    font-weight: bold;
    font-size: 15px;
  }
  </style>
  <!DOCTYPE JAVASCRIPT>
  <script>
  function Validate()
{

  if(!document.getElementById("psw1").value==document.getElementById("psw2").value)alert("Passwords do no match");
    return document.getElementById("psw1").value==document.getElementById("psw2").value;
   return false;
    }

    var email = document.forms["RegForm"]["cEMail"];
    var Id =  document.forms["RegForm"]["cID"];
    var state =  document.forms["RegForm"]["cState"];
    var gender =  document.forms["RegForm"]["cGender"];
    var passCheck1 =  document.forms["RegForm"]["cRePassword"];



    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }



    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (ID.selectedIndex < 1)
 {
     alert("Please select your ID Type.");
     what.focus();
     return false;
 }
 if (gender.selectedIndex < 1)
{
  alert("Please select your Gender.");
  what.focus();
  return false;
}
if (state.selectedIndex < 1)
{
 alert("Please select your State.");
 what.focus();
 return false;
}

 return true;
}
  </script>
  <script type="text/javascript">
  $(document).ready(function() {

$("#cState").change(function() {

var el = $(this) ;

if(el.val() === "West Bengal" ) {
$("#cDist option:last-child").remove() ;
$("#cDist").append("<option>Purulia</option><option>South 24 Pgs</option><option>Uttar Dinajpur</option>");
}
 else if(el.val() === "Other State" ) {
   $("#cDist option:last-child").remove() ;
   $("#cDist").append(" <option>Any District outside West Bengal</option>") ;}
});
});

  </script>
</head>
<body>
  <!--header-->

  <header class="header" >
    <center><div class="header-main container">
      <div class="row">
        <div class="row w1 ">
          <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12" align="center"> </div>
          <div class="hidden-lg col-md-1 col-sm-1 col-xs-1"></div>
          <div class="col-lg-11 col-md-11  col-sm-10 hidden-xs ">
            <h1>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE</h1>
          </div>
          <!--<div class=" hidden-lg  hidden-md   hidden-sm col-xs-12" align="center">
            <h3>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE</h3>
          </div>
          <div class="col-lg-11 col-md-11 hidden-sm hidden-xs ">
            <h2>(A Recognised Authority of West Bengal for Competetive Examination Conduction Purpose)<br>
            <strong>Directorate of Competetive Examination Control Authorisation</strong><br>
            (Community of All Examination Authority of West Bengal)<br>
            375, Prince Anwar Shah Road, Kolkata - 700068 (Beside South City Mall, Kolkata)
            </h2>
            </div>
        </div>
        <!--//logo-->
      </div>

    </div></center>
    <!--//header-main-->
  </header>

  <br/><br/>
  <div>
    <fieldset>
      <legend><button>Registration Form</button></legend>
      <br/>
    <form onsubmit="return validate()" action="/main/Registration/registered/" method="post" name="RegForm" >
      <center>
        <fieldset>
          <legend><button>Personal Information</button></legend>
          <br/>
      <table border='0'>

        <tr>
          <td>Candidate's Name:*</td><td><input type="text" name="cName" required></td>
          <td>Father's Name:*</td><td><input type="text" name="cFatherName" required></td>
        </tr>
        <tr>
          <td>Mother's Name:*</td><td><input type="text" name="cMotherName" required></td>
          <td>Date of Birth:*</td><td><input type="text" name="dob" placeholder="Format: dd/mm/yyyy"required></td>
        </tr>
        <tr>
          <td>Select Identification Type:*</td><td><select type="dropdown" name="cID" id="cID" required>
            <option value="">--Select--</option>
            <option value="Aadhar Card">Aadhar Card</option>
            <option value="Voter Card">Voter Card</option>
            <option value="Pan Card">Pan Card</option>
          </td>
          <td>Gender:*</td><td><select type="dropdown" name="cGender" required>
            <option value="">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Transgender">Transgender</option>
          </td>
        </tr>
        <tr>
          <td>Identification Card Number:*</td><td><input type="text" name="cIDNo" required></td>
          <td></td><td></td>
        </tr>
        <!--<tr>
          <td></td><td></td>
          <td></td><td></td>
        </tr>-->
      </table>
    </fieldset>
    <br/>
    <fieldset>
      <legend><button>Contact Information</button></legend>
      <br/>
  <table border='0'>

    <tr>
      <td>Premises No / Name:*</td><td><input type="text" name="cAddress" required></td>
      <td>Locality:*</td><td><input type="text" name="cLocality"></td>
    </tr>
    <tr>
      <td>Sub Locality:</td><td><input type="text" name="cSublocality" required></td>
      <td>State:*</td><td><select type="dropdown" name="cState" id="cState" required>
        <option value="">--Select--</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Other State">Other State</option>
      </td>
    </tr>
    <tr>
      <td>District:*</td><td><input id="cDist" name="cDist" required>
      </td>

      <td>Pin Code:*</td><td><input type="Number" name="cPin" required></td>
      </tr>
    <tr>
      <td>Email ID:*</td><td><input type="email" name="cEmail" required></td>
      <td>Mobile No:*</td><td><input type="text" name="cMobNo" required></td>
    </tr>
    <!--<tr>
      <td></td><td></td>
      <td></td><td></td>
    </tr>-->
  </table>
</fieldset>
<br/>
<fieldset>
  <legend><button>Security Information</button></legend>
  <br/>
<table border='0'>

<tr>
  <td>Create Password:*</td><td><input type="password" name="cPassword" id="psw1" required></td>
  <td>Create Security mPIN:*</td><td><input type="password" max="4" name="cSecurityPin" required></td>
</tr>
<tr>
  <!--<td>Re Enter Password:*</td><td><input type="password" name="cRePassword" id="psw2" required></td>
</tr>-->

  <!--<td>State:*</td><td><select type="dropdown" name="cState" required>
    <option value="">--Select--</option>
    <option value="West Bengal">West Bengal</option>
    <option value="Other State">Other State</option>
  </td>-->

<!--<tr>
  <td>District:*</td><td><input type="text" name="cDist" required>
  </td>
  <td>Pin Code:*</td><td><input type="Number" name="cPin" required></td>
  </tr>
<tr>
  <td>Email ID:*</td><td><input type="text" name="cEmail" required></td>
  <td>Mobile No:*</td><td><input type="text" name="cMobNo" required></td>
</tr>
<tr>
  <td></td><td></td>
  <td></td><td></td>
</tr>-->
</table>
<br/>
<Button type="submit" name="submit">Submit</Button>
      </center>
    </form>
  </fieldset>
  </div>
  <br/>
  <center>
    <div class="footer">
    <h2>This Site is Developed By APPS. Developer: Debkanta Mondal</h2>
  </div>
  </center>
  <script language="JavaScript">

window.onload = function() {
document.addEventListener("contextmenu", function(e){
  e.preventDefault();
}, false);
document.addEventListener("keydown", function(e) {
//document.onkeydown = function(e) {
  // "I" key
  if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
    disabledEvent(e);
  }
  // "J" key
  if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
    disabledEvent(e);
  }
  // "S" key + macOS
  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
    disabledEvent(e);
  }
  // "U" key
  if (e.ctrlKey && e.keyCode == 85) {
    disabledEvent(e);
  }
  // "F12" key
  if (event.keyCode == 123) {
    disabledEvent(e);
  }
}, false);
function disabledEvent(e){
  if (e.stopPropagation){
    e.stopPropagation();
  } else if (window.event){
    window.event.cancelBubble = true;
  }
  e.preventDefault();
  return false;
}
};
</script>
<!--<center>
  <b style="color:red;"><h2>New Registration is Closed.Go to <a href="?error">Login</a> Page</h2></b>
</center>-->
</body>
</html>
