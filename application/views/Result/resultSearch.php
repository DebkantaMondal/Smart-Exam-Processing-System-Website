<?php  ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE">
	<meta name="keywords" content="WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE">
	<meta name="author" content="WBCEA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://buildingbrightfutures.org/wp-content/uploads/2015/08/Wiki-tech-logo-300x300.png" sizes="16x16">
  <title>Result Login</title>
  <style>
  .title{font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;letter-spacing: 0.5px;}
  .title1{font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;letter-spacing: 0.5px;color:#990000;}
  .title2{font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;letter-spacing: 0.5px;font-weight: bold;font-size: 22px;}
  .inputBox{min-width:300px;min-height:30px;color:#262626;border: 2px solid #004d1a;border-radius: 5px 5px 5px 5px;font-family:"verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;font-size: 15px;text-align: center;background-image: linear-gradient(#8c8c8c 3%, #bfbfbf 5%, #ffffff 92%);}
  .button{min-width:150px;min-height:40px;transition: 0.4s;background-image: linear-gradient(to right, #00ff55 20%,#00b33c 40%,#00802b 100%);color:#fff;border:2px solid #004d1a;border-radius: 5px 5px 5px 5px;font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;letter-spacing: 0.5px;}
  .button:hover{background-position: right center;}
  .form{padding: 6px;border-radius: 8px 8px 8px 8px;background-color: #e6e6e6;box-shadow: 0 0 20px #004d1a;}
  </style>
  <script>
  </script>
</head>
<body  style="position:relative;background-image: linear-gradient(-75deg, #00ff55 15%,#00b33c 35%,#00802b 50%);">
  <div class="form">
    <center>
    <marquee behavior="alternate"><p class="title2">WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : OFFICIAL SITE : RESULT SITE</p></marquee>
  </center>
  </div>
  <br/>
  <form action="/main/Apps/resultView#id=result" method="post" class="form">
    <center>
      <br/>
  <b class="title">Enter Your Roll No:</b>
  <input class="inputBox" placeholder="Type Roll Number..." name="rollno" required>
  <br/><br/>
  <b class="title">Enter Security Code:</b>
  <input name="captcha_code" type="text" class="inputBox" placeholder="Type Security Code Here..." required>
  <br/><br/>
  <b class="title">Your Security Code:</b>&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="/main/Apps/captcha" alt="captchaID=false" refresh>&nbsp;&nbsp;
  <p class="title1">(If you have any Problem about Security Code, Just Refresh the Browser Page)</p>
  <button class="button" type="submit">Search Result</button>
  <br/><br/>
</center>
</form>
<br/>
<center>
  <div class="form">
    <p class="title1"><u>Instruction</u></p>
    <p class="title1">1.Enter Your Roll Number in proper Box (top of box write Type Roll no...)</p>
    <p class="title1">2.Enter Security Code in proper Box (second top of box write Security Code...)</p>
    <p class="title1">3.Click on 'Search Result' Button to Get Result</p>
  </div>
</center>
<br/>
<center>
  <p style="color:#fff;" class="title">Site is Designed & Administrated By Apps.Content Provided by WBCEA</p>
</center>
</body>
</html>
