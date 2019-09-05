<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: /main/Registration/studentProfilePage/"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login | Apps</title>
  <link rel="icon" href="/main/assets/images/logo.png" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <style>
  body{
font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
letter-spacing: 0.5px;
text-align: justify;
}

  .header {
border-top:5px solid blue;
background: #007399;
border-bottom:10px solid blue;

}



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

<!--font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;-->

}



.header h3 {

text-transform: uppercase;

font-size: 16px;

margin: 7px 0 0 0;

line-height: 16px;

color: #fff;

font-weight: bold;

<!--font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;-->

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
  </style>
  <style>
       input{
     border-radius:6px 6px 6px 6px;
     border:2px solid green;
   }
  </style>

    <script type="text/javascript">

       function validate()
    {
    var a=document.myForm.regno.value;
    var patt1 = "^[0-9]{8}$";
if( a.match(patt1))
       {
        return( true );
       }

       alert( "Admin PIN Number is Invalid.Please provide your Valid Admin PIN Number!" );
       document.myForm.regno.focus() ;
       return false;
  }
    </script>

</head>
<body>
  <div class="col-xs-3 w" style="background-color:#443344"></div>
 <div class="col-xs-3 w" style="background-color:#aa5555"></div>
 <div class="col-xs-3 w" style="background-color:#668899"></div>
 <div class="col-xs-3 w" style="background-color:#dd8855"></div>
 <header class="header" >
   <center><div class="header-main container">
     <div class="row">
       <div class="row w1 ">
         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12" align="center"> <img alt="Logo is Loading..." src="/main/assets/images/logo.png" > </div>
         <div class="hidden-lg col-md-1 col-sm-1 col-xs-1"></div>
         <div class="col-lg-11 col-md-11  col-sm-10 hidden-xs ">
           <h1>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : REGISTERED STUDENT LOGIN</h1>
         </div>
         <div class=" hidden-lg  hidden-md   hidden-sm col-xs-12" align="center">
           <h3>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : REGISTERED STUDENT LOGIN</h3>
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
<div class="col-xs-3 w" style="background-color:#443344"></div>
 <div class="col-xs-3 w" style="background-color:#aa5555"></div>
 <div class="col-xs-3 w" style="background-color:#668899"></div>
 <div class="col-xs-3 w" style="background-color:#dd8855"></div>
<br/><br/><br/>
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
<br/>
<!--<marquee style="color:red;">***Enter Your Registration Number
(In Proper Box -- Beside it -- Enter Valid Eight Digit Number // Otherwise Site Says you to Enter Valid Number Again )
>> Click On "Submit" Button >> View Result >> Print Result from "Print Now"</marquee>-->
<br/><br/>
 <!--<div id="login">-->
   <form method="post" name="myForm" onsubmit="return(validate());">
      <center>
  <table cellspacing="2" cellpadding="2" border="1" style="background:#fff;border:1px solid green;">

         <tr>
            <td align="right" style="color:#000;"><b>Enter Candidate Email ID:</b></td>
            <td><input type="text" name="username" /></td>
         </tr>
         <tr>
            <td align="right" style="color:#000;"><b>Enter Choiced Unique ID Number:</b></td>
            <td><input type="number" name="idNumber" /></td>
         </tr>
         <tr>
            <td align="right" style="color:#000;"><b>Enter Password:</b></td>
            <td><input type="password" name="password" /></td>
         </tr>
         <!--<tr>
            <td align="right" style="color:#000;"><b>Enter Capcha Code:</b> <div id="captcha">
 </div></td>
            <td><input name="capcha" id="cpatchaTextBox" required/></td>
         </tr>-->
         <tr>
          <td align="right"><a href="?error">Forgot Password</a></td><!--  <td align="right"><a href="/main/rgson.pdf"><!--<a href="/main/Apps/resultLoginIde/"><input type="button" value="Reset" /></a>--><!--Register Now</a></td>-->
            <td><!--<input type="button" value="Check" />&nbsp;&nbsp;--><input type="submit" value="LOGIN" name="submit" /></td>
         </tr>

      </table>
  </center>
   <span><?php echo $error; ?></span>
  </form>
 <br/><br/><br/><br/><br/><br/>
 <div class="footer">
   <center>
       <p>This Site is Developed By APPSINDIA , Developer : Debkanta Mondal</p>
   </center>
 </div>

</body>
</html>
