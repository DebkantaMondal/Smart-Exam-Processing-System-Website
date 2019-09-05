<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: /main/institute/Home/"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Institute Home Page</title>
  <link rel="stylesheet" href="/main/styles/genDisplayMaterialViewGoogle1234Compat.css">
  <link rel="shortcut icon" href="http://buildingbrightfutures.org/wp-content/uploads/2015/08/Wiki-tech-logo-300x300.png" sizes="16x16">
  <style>
  .iframe{
    border-radius: 2px 2px 2px 2px;
  }
  .TextTitleEmbed{
    font-weight: bold;
    font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
    letter-spacing: 0.5px;

    font-size: 20px;
  }
  .TextDescEmbed{

    font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
    letter-spacing: 0.5px;

    font-size: 12px;
  }
  span {
color:red
}

h2 {
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px
}

hr {
border:0;
border-bottom:1px solid;
margin:10px -40px;
margin-bottom:30px
}

#login {
margin: auto;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:#b6e6ff;
}

input[type=text],input[type=password] {
width:96.5%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:20px;
}

input[type=submit] {
width:100%;
background-color:#2f90ff;
color:#fff;
border:2px solid #white;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
}

#profile {
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7
}

#logout {
float:right;
padding:5px;
border:dashed 1px gray
}

a {
text-decoration:none;
color:#6495ed
}

i {
color:#6495ed
}
  </style>
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
  <link rel="icon" href="/main/assets/images/logo.png" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12" align="center"> <img alt="Logo is Loading..." src="http://buildingbrightfutures.org/wp-content/uploads/2015/08/Wiki-tech-logo-300x300.png" > </div>
         <div class="hidden-lg col-md-1 col-sm-1 col-xs-1"></div>
         <div class="col-lg-11 col-md-11  col-sm-10 hidden-xs ">
           <h1>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : INSTITUTE HOME PAGE</h1>
         </div>
         <div class=" hidden-lg  hidden-md   hidden-sm col-xs-12" align="center">
           <h3>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : INSTITUTE HOME PAGE</h3>
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
 <div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="/main/institute/logout/">Log Out</a></b>
  <br/><br/><br/>
  <center>
    <b>INSTRUCTIONS FOR INSTITUTES FROM EXAMINATION CELL AUTHORITY:</b><a href="?enteredFileNotExist">Instruction.pdf</a>
  </center>
</div>
<br/><br/>
<center>
 <!--<div class="card"></div>-->
 <div class="card card-1">

   <center>
<img class="iframe" width="675" height="350" src="/main/assets/images/admin.png" alt="Web Admin">

<p class="TextTitleEmbed"><a href="?=adminSystemOutofRange/cdc=2019">INSTITUTE WORKING PAGE</a></p>

<p class="TextDescEmbed">Web Institute v6.0.1 is a Institute Working Smart Auto Working System<br/>
System @WBCEA 2019<br/>
Developer: Debkanta Mondal<br/>
This is an auto-working panel processing system.@v6.0.1@apps</p>

</center>
 </div>
   </center>
 <!--<div class="card card-2"></div>
 <div class="card card-3"></div>
 <div class="card card-4"></div>
 <div class="card card-5"></div>-->

 <br/><br/><br/><br/>
 <div class="footer">
   <center>
       <p>This Site is Developed By APPSINDIA , Developer : Debkanta Mondal</p>
   </center>
 </div>

</body>
</html>
