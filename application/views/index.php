<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: /main/Home/loginAdmin/"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login | Apps</title>
  <link rel="icon" href="http://buildingbrightfutures.org/wp-content/uploads/2015/08/Wiki-tech-logo-300x300.png" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/main/styles/right_tooltip.css">

<!--Keyboard Style-->
<style>

/* caret "after" content visible outside of keyboard popup */
.ui-keyboard-preview-wrapper {
    overflow: visible;
}
/* add caret character preview popup */
.ui-keyboard-caret:after {
    content: attr(data-character);
    background: red;
    color: white;
    font-family: Verdana, Tahoma, Segoe, sans-serif;
    font-size: 1.1em;
    min-width: 1em;
    position: absolute;
    z-index: 100;
    top: -1.4em;
    left: -.5em;
}
/* for password, set font to monospace to ensure caret stays lined up */
input[type=password] {
	font-family: monospace !important;
}


/* jsFiddle demo stuff */

#wrap {
    display: block;
    margin: 0 auto;
    width: 200px;
}
.spacer {
    height: 20px;
}

</style>


<script type="text/javascript">
var simulateTyping = "Hello World!";
$('.keyboard')
    .keyboard({
		layout: 'custom',
		customLayout: {
			'normal': [
				'` 1 2 3 4 5 6 7 8 9 0 - = {bksp}',
				'{tab} q w e r t y u i o p [ ] \\',
				'a s d f g h j k l ; \' {enter}',
				'{shift} z x c v b n m , . / {shift}',
				'{accept} {space} {left} {right}'
			],
			'shift': [
				'~ ! @ # $ % ^ & * ( ) _ + {bksp}',
				'{tab} Q W E R T Y U I O P { } |',
				'A S D F G H J K L : " {enter}',
				'{shift} Z X C V B N M < > ? {shift}',
				'{accept} {space} {left} {right}'
			]
		}
    })
    .addTyping()
    .addCaret({
        caretClass: '',
        // *** for future use ***
        // data-attribute containing the character(s) next to the caret
        charAttr: 'data-character',
        // # character(s) next to the caret (can be negative for RTL)
        // default is 1 which shows the character to the right of the caret
        // setting this to -1 shows the character to the left
        charIndex: -1,
        // tweak caret position & height
        offsetX: 0,
        offsetY: 0,
        adjustHt: 0
    });

// Typing Extension
$('.icon').click(function () {
    var kb = $(this).prev().getkeyboard();
    // typeIn( text, delay, callback );
    kb.reveal().typeIn(simulateTyping, 500, function () {
        // do something after text is added
        // kb.accept();
    });
});
</script>


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
	.turuncubaslik-bold {
	color:#333;
font-size:14px;
 border-bottom: 1px dotted #000;
    text-decoration: none;
	}
/******keyboard*******/

ul.keyboard {
  list-style-type: none;
  font-family: verdana;
  background-color: #fff;
  border-radius: 5px;
  padding: 0;
  width: 100%;
  height: 50%;
}

.keyboard li {
  cursor: pointer;
  display: inline;
  float: left;
  height: 18%;
 /** margin: auto; **/
  line-height: 50px;
  padding: 0;
  margin: 0.3% 0.6% 0.6% 0.2%;
  background-color: #ddd;
  color: black;
  vertical-align: middle;
  text-align: center;
  border-radius: 4px;
  font-size: 1vw;
  -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.char {
    width: 5.75%;
    -webkit-transition: background-color 100ms;
}

.tab {
  width: 20%;
}

.at {
  width: 7.2%;
}

.last {
  margin-right: 0%;
}

.backspace {
  width: 14%;
}

.capslock {
  width: 12%
}

.capslock.on {
	background-color: #CA4200;
}

.return {
  width: 14%;
}

.shift {
  width: 7.2%;
}

.last {
  margin-right: 0;
}

.space {
  width: 99%;
}

.keyboard .touch {
	background-color: #CA4200;
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
    <script type='text/javascript'>
    function refreshCaptcha(){
    	var img = document.images['captchaimg'];
    	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    }
    </script>

	<script>
	$(function() {

 // $('textarea').focus();

  var $caps = $('.capslock'),
      $char = $('.char');

  $caps.click(function() {
    if($caps.hasClass('on')) {
      $('.char,.capslock').each(function() {
        $(this).text($(this).text().toLowerCase());
      });
    $caps.removeClass('on');

    } else {
      $('.char,.capslock').each(function() {
        $(this).text($(this).text().toUpperCase());
      });
      $caps.addClass('on');
    }
  });

  $('li').click(function() {
    var t = this;
     $(this).addClass('touch');
     setTimeout(function() {
       $(t).removeClass('touch');
     },100);
  });

  var lastFocus,
      selectionStart,
      selectionEnd;

  $('textarea,input').on('focus', function() {
    $('textarea,input').removeClass('focus');
    $(this).addClass('focus');
  });

  $('textarea,input').on('blur', function() {
    lastFocus = this;
    selStart = this.selectionStart;
    selEnd = this.selectionEnd;
  });

  $('.char').click(function() {
    var char = $(this).text();
    sendChar(char);
  });

  $('.return').click(function() {
    sendChar('\n');
  });

  $('.space').click(function() {
    sendChar(' ');
  });

  $('.backspace').click(function() {
    backspace();
  });

  $('.tab').click(function() {
    tab();
  });

  function tab() {
    var $inputs = $('textarea,input');
    var currIndex = parseInt($(lastFocus).attr('tabIndex'));
    var highestIndex = -1;
    var selected = false;
    $inputs.each(function() {
      var index = parseInt($(this).attr('tabIndex'));
      if(index > highestIndex) {
        highestIndex = index;
      }
      if(index === currIndex+1) {
        $(this).focus();
        selected = true;
      }
    });

    if(!selected && currIndex === highestIndex) {
      $inputs.each(function() {
        var index = parseInt($(this).attr('tabIndex'));
        if(index === 1) {
          $(this).focus();
        }
      });
    }
  }

  function backspace() {
     var orig = $(lastFocus).val();
     var updated = orig.substring(0, selStart-1) + orig.substring(selEnd, orig.length);
     $(lastFocus).val(updated);
     selEnd = --selStart;
     $(lastFocus).focus();
     lastFocus.selectionStart = selStart;
     lastFocus.selectionEnd = selEnd;
  }

  function sendChar(char) {
    var orig = $(lastFocus).val();
    var updated =  orig.substring(0, selStart) + char + orig.substring(selEnd, orig.lenght);
    $(lastFocus).val(updated);
    selEnd=++selStart;
    $(lastFocus).focus();
    lastFocus.selectionStart = selStart;
    lastFocus.selectionEnd = selEnd;
  };

});

document.getElementById("keyboard").focus();

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
         <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12" align="center"> <img alt="Logo is Loading..." src="http://buildingbrightfutures.org/wp-content/uploads/2015/08/Wiki-tech-logo-300x300.png" > </div>
         <div class="hidden-lg col-md-1 col-sm-1 col-xs-1"></div>
         <div class="col-lg-11 col-md-11  col-sm-10 hidden-xs ">
           <h1>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : ADMIN LOGIN PANEL</h1>
         </div>
         <div class=" hidden-lg  hidden-md   hidden-sm col-xs-12" align="center">
           <h3>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : ADMIN LOGIN PANEL</h3>
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
>> Click On "Submit" Button >> View Result >> Print Result from "Print Now"</marquee>
<br/><br/>-->
 <!--<div id="login">-->
   <!--<form method="post" name="myForm" onsubmit="return(validate());">
     <!-- <center>

<marquee style="color:red;">***If Virtual Keyboard dont work, Use Manual Keyboard. We will start virtual keyboard soon.</marquee>

  <table cellspacing="2" cellpadding="2" border="1" style="background:#fff;border:1px solid green;">

         <tr>
           <div id="wrap">
            <td align="right" style="color:#000;"><b>Enter Admin PIN Number:</b></td>
            <td>

            <input type="text" name="username" class="keyboard"/>
            <!--<img class="icon" src="http://mottie.github.com/Keyboard/docs/css/images/keyboard.png" />-->


       <!-- </td>
         </tr>
         <!--<div class="spacer"></div>-->
         <!--<tr>
            <td align="right" style="color:#000;"><b>Enter Admin Password:</b></td>

            <td><input type="password" name="password" class="keyboard"  />
              <!--<img class="icon" src="http://mottie.github.com/Keyboard/docs/css/images/keyboard.png" />
  </td>
</div>
         </tr>
        <!-- <tr>
           <td align="right" valign="top"> Validation code:</td>
<td><img src="captcha.php?rand=" id='captchaimg'><br>
  <label for='message'>Enter the code above here :</label>
  <br>
  <input id="captcha_code" name="captcha_code" type="text">
  <br>
  Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>

</tr>-->
         <!--<tr>
            <td align="right" style="color:#000;"><b>Enter Capcha Code:</b> <div id="captcha">
 </div></td>
            <td><input name="capcha" id="cpatchaTextBox" required/></td>
         </tr>
         <tr>
            <td align="right"><a href="/main/rgson.pdf"><!--<a href="/main/Apps/resultLoginIde/"><input type="button" value="Reset" /></a>Register Now</a></td>
            <td><input type="button" value="Check" />&nbsp;&nbsp;<input type="submit" value="LOGIN" name="submit" /></td>
         </tr>

      </table>
  </center>-->
  <!------------boşluk--------------------->
<div class="container">
 <div class="row">
   <div class=" col-sm-2 col-md-2 col-lg-1" style="padding:35px;">
    </div>
 </div>
</div>
<!------------boşluk bitti--------------->


<div class="container">
 <div class="row" style="background-color:#FFF">
    <div class="col-sm-6 col-md-6 col-lg-6">
        <br>
        <br><br>
        <br>

        <blockquote class="pull-right text-right">
        "This Page is Developed to Easy Login of WBCEA Administratives to WBCEA ADMIN SMART PANEL. "
      </blockquote><br>

        <br>
    </div>
    <div class="col-sm-5 col-md-5 col-lg-5 form-group">
      <form action="" method="post">
    <input type="hidden" value="1" name="kontrol">
    <h3 class="turuncubaslik-bold"><span class="glyphicon glyphicon-lock"></span>ADMIN LOGIN</h3>
    <br>

          <label for="musterino">Username</label>
          <input name="username" type="text" autofocus required class="form-control" id="keyboard" tabindex="1">

        <br>

          <label for="pwd">Password</label>
          <input name="password" type="password" required class="form-control" id="pwd" tabindex="2"><br>
         <input type="submit" class="btn btn-danger btn-lg btn-block" id="fat-btn" value="Sign In" name="submit">
</form>
</div>
<!-- sanal klavye başladı -->
<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs">
<p class="text-right hidden-xs"><a data-toggle="collapse" data-parent="#accordion" href="#virtualkeyboard" class="text-danger">Virtual Keyboard <span class="caret"></span></a></p>
                 <div id="virtualkeyboard" class="panel-collapse collapse">
        <div class="panel-body">
<ul class="keyboard">
  <li class="char">^</li>
  <li class="char">1</li>
  <li class="char">2</li>
  <li class="char">3</li>
  <li class="char">4</li>
  <li class="char">5</li>
  <li class="char">6</li>
  <li class="char">7</li>
  <li class="char">8</li>
  <li class="char">9</li>
  <li class="char">0</li>
  <li class="char">-</li>
  <li class="char">_</li>
  <li class="backspace last"><span class="glyphicon glyphicon-arrow-left"></span></li>
  <li class="tab"><span class="glyphicon glyphicon-transfer"></span></li>
  <li class="char">q</li>
  <li class="char">w</li>
  <li class="char">e</li>
  <li class="char">r</li>
  <li class="char">t</li>
  <li class="char">y</li>
  <li class="char">u</li>
  <li class="char">ı</li>
  <li class="char">o</li>
  <li class="char">p</li>
  <li class="char">ğ</li>
  <li class="char">ü</li>

  <li class="capslock">c.lock</li>
  <li class="char">a</li>
  <li class="char">s</li>
  <li class="char">d</li>
  <li class="char">f</li>
  <li class="char">g</li>
  <li class="char">h</li>
  <li class="char">j</li>
  <li class="char">k</li>
  <li class="char">l</li>
  <li class="char">ş</li>
  <li class="char">i</li>

  <li class="return last">return</li>
  <li class="char at">@</li>
  <li class="char">`</li>
  <li class="char">z</li>
  <li class="char">x</li>
  <li class="char">c</li>
  <li class="char">v</li>
  <li class="char">b</li>
  <li class="char">n</li>
  <li class="char">m</li>
  <li class="char">ö</li>
  <li class="char">ç</li>
  <li class="char">?</li>
  <li class="char">_</li>
  <li class="char">=</li>
  <li class="char">|</li>
  <li class="space"><span class="glyphicon glyphicon-resize-horizontal"></span></li>
</ul>
    </div>
    </div>
</div>
<!-- sanal klavye bitti -->
</div>
</div>
<!----------login bitti----->

<!------------boşluk--------------------->
<div class="container">
 <div class="row">
   <div class=" col-sm-2 col-md-2 col-lg-1" style="padding:50px;">
    </div>
 </div>
</div>
<!------------boşluk bitti--------------->
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
