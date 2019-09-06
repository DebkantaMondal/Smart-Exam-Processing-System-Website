<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: /main/institute/InstitutePage/"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Institute Login | Apps</title>
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
<style>
/*http://drbl.in/nYHu*/

/*
Author : Himateja
Editor : Codepen
Permissions : Open Source
*/

*,
*:after,
*:before
{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

html, body
{
	position: absolute;
	height: 100%;
	width: 100%;
	background: rgb(243, 243, 243);
	color: rgba(0,0,0,0.6);
	font-family: RobotoDraft,Roboto;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}

body header {
	position: relative;
	width: 100%;
	height: 80px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26);
	background: rgb(3, 169, 245);
	font-size: 30px;
	font-weight: 300;
	color: rgb(242, 251, 253);
	text-align: center;
	line-height: 75px;
}

.login {
position: relative;
    padding: 10px;
    margin: 40px auto 80px auto;
    width: 400px;
    height: 460px;
    border-radius: 3px;
    background: white;
    box-shadow: 0 1px 5px 0 rgba(0,0,0,0.26);
    overflow: hidden;
}

.login > i {
	position: relative;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	float: right;
	cursor: pointer;
}

.login .photo {
	position: relative;
	width: 100px;
	height: 100px;
	margin: 30px 135px;
	border-radius: 50%;
	background: rgb(223, 223, 223);
	border: 13px solid rgb(223, 223, 223);
	overflow: hidden !important;
	transform: rotate(-1deg);
}

.login .photo:before {
	position: absolute;
	content: '';
	width: 35px;
	height: 35px;
	top: 0px;
	right: 20px;
	border-radius: 50%;
	background: #aaa;
	border: 2px solid #fff;
	transform: scale(0);
	transition: 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
	-webkit-animation: user-head 0.5s 0s forwards;
	-moz-animation: user-head 0.5s 0s forwards;
	animation: user-head 0.5s 0s forwards;
}

.login .photo:after {
	position: absolute;
	content: '';
	width: 140px;
	height: 220px;
	top: 38px;
	right: -32px;
	border-radius: 50%;
	background: #aaa;
	border: 2px solid #fff;
	transform: translateY(36px);
	transition: 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
	-webkit-animation: user-body 0.5s 0.3s forwards;
	-moz-animation: user-body 0.5s 0.3s forwards;
	animation: user-body 0.5s 0.3s forwards;
}

.login > span {
	display: block;
	text-align: center;
	margin: -15px 0;
	font-size: 15px;
}

form {
	position: relative;
	width: 350px;
	margin: 50px 15px;
}

.form-group {
  position: relative;
  margin-top: 35px;
  margin-bottom: 20px;
}

.form-control {
  display: block;
  height: 36px;
  width: 100%;
  border: none;
  border-radius: 0 !important;
  font-size: 15px;
  font-family: inherit;
  font-weight: 300;
  padding: 0;
  background-color: transparent;
  box-shadow: none;
  border-bottom: 1px solid rgba(117, 117, 117, 0.15);
}

.form-control:focus {
  border-bottom: 2px solid rgb(3, 169, 245);
  outline: none;
  box-shadow: none;
}

.form-highlight {
  position: absolute;
  height: 60%;
  width: 60px;
  top: 25%;
  left: 0;
  pointer-events: none;
  opacity: 0.4;
}

.form-control:focus ~ .form-highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

.float-label {
  position: absolute;
  left: 0;
  top: 10px;
  font-size: 16px;
  color: #999;
  font-weight: 300;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

.form-control:focus ~ .float-label, .form-control:valid ~ .float-label {
  top: -15px;
  font-size: 12px;
}

.form-group erroru, .form-group errorp {
	position: absolute;
	width: 100%;
	left: 0;
	top: 38px;
	font-size: 11px;
	color: #d34336;
	font-weight: 300;
	transition: 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
	-moz-transition: 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
	-webkit-transition: 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
	opacity: 0;
}

.form-group erroru i,.form-group errorp i {
	position: absolute;
	right: 0;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	float: right;
}

.form-group erroru i svg, .form-group errorp i svg {
	fill:#d34336;
}

.form-group[errr] .float-label {
	color: #d34336 !important;
}

.form-group[errr] .form-control {
	border-bottom: 1px solid #d34336 !important;
}

.form-group[errr] .form-control:focus {
	border-bottom: 2px solid #d34336 !important;
}


.form-group[errr] erroru, .form-group[errr] errorp  {
	opacity: 1;
}

input[type=checkbox]
{
    display: none;
    visibility: hidden;
}

input[type="checkbox"] + label
{
    cursor: pointer;
    font-size: 15px;
    font-weight: 500;
    transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
}

input[type="checkbox"] + label:before
{
    display: inline-block;
    content: "";
    margin: 0 15px 3px 0px;
    width: 18px;
    height: 18px;
    background-color: #fff;
    border: 2px solid #5a5a5a;
    border-radius: 2px;
    vertical-align: middle;
}

input[type=checkbox]:checked + label:before
{
    background-image: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjIwcHgiIGhlaWdodD0iMTVweCIgdmlld0JveD0iMCAwIDIwIDE1Ij4NCjxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIHBvaW50cz0iNy4xNDMsMTQuOTM4IDAsNy43OTYgMi4wMjEsNS43NzYgNy4xNDMsMTAuODk4IDE3Ljk3OSwwLjA2MiAyMCwyLjA4MiAiLz4NCjwvc3ZnPg0K');
    background-color: rgb(3, 169, 245);
    border-color: rgb(3, 169, 245);
    background-repeat: no-repeat;
    background-position: 50% 50%;
    -webkit-background-size: 11px auto;
    -moz-background-size: 11px auto;
    -o-background-size: 11px auto;
    background-size: 11px auto;
}

button[type="submit"] {
	position: relative;
	float: right;
	font-family: inherit;
	font-weight: 100;
	font-size: 15px;
	border: 0;
	margin: -3px 0px;
	padding: 5px 15px;
	border-radius: 3px;
	cursor: pointer;
	background: rgb(3, 169, 245);
	color: #fff;
	box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
}

button[type="submit"]:focus {
	outline: none;
}

footer {
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 30px;
	margin-left: -10px;
	line-height: 29px;
	text-align: center;
	cursor: pointer;
	border-top: 1px solid rgba(117, 117, 117, 0.15);
}

footer a {
	display: block;
	text-decoration: none;
	font-size: 12px;
	color: inherit;
}

footer a:hover {
	color: rgba(0,0,0,0.9);
	text-decoration: underline;
}

footer a:focus {
	outline: none;
}

.copyright {
	position: fixed;
	width: 100%;
	bottom: 5px;
	text-align: center;
	font-size: 12px;
}

.copyright a {
  text-decoration: none;
  color: rgb(3, 169, 245);
}

.copyright a:hover {
  transition: none;
  border-bottom: 1px solid rgb(3, 169, 245);
}

/* -- highlighter animation --------------------------- */
@-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#5264AE; }
  to { width:0; background:transparent; }
}

@-webkit-keyframes user-head {
100% {
	-webkit-transform:scale(1);
	transform:scale(1);
	-moz-transform:scale(1);
} }
@-moz-keyframes user-head {
100% {
	-webkit-transform:scale(1);
	transform:scale(1);
	-moz-transform:scale(1);
} }
@keyframes user-head {
100% {
	-webkit-transform:scale(1);
	transform:scale(1);
	-moz-transform:scale(1);
} }

@-webkit-keyframes user-body {
100% {
	-webkit-transform:translateY(2px);
	transform:translateY(2px);
	-moz-transform:translateY(2px);
} }
@-moz-keyframes user-body {
100% {
	-webkit-transform:translateY(2px);
	transform:translateY(2px);
	-moz-transform:translateY(2px);
} }
@keyframes user-body {
100% {
	-webkit-transform:translateY(2px);
	transform:translateY(2px);
	-moz-transform:translateY(2px);
} }

[ripple] {
  position: relative;
  overflow: hidden;
  -webkit-transition: box-shadow .4s;
  -moz-transition: box-shadow .4s;
  -ms-transition: box-shadow .4s;
  -o-transition: box-shadow .4s;
  transition: box-shadow .4s;
  cursor: inherit;
}

[ripple] .touch {
  background: rgba(255, 255, 255, 0.3);
  pointer-events: none;
  border-radius: 100%;
}
</style>
<script>
// button ripple effect from @ShawnSauce 's pen https://codepen.io/ShawnSauce/full/huLEH
$(document).ready(function() {
$(function(){

  var animationLibrary = 'animate';

  $.easing.easeOutQuart = function (x, t, b, c, d) {
    return -c * ((t=t/d-1)*t*t*t - 1) + b;
  };
  $('[ripple]:not([disabled],.disabled)')
  .on('mousedown', function( e ){

    var button = $(this);
    var touch = $('<touch><touch/>');
    var size = button.outerWidth() * 1.8;
    var complete = false;

    $(document)
    .on('mouseup',function(){
      var a = {
        'opacity': '0'
      };
      if( complete === true ){
        size = size * 1.33;
        $.extend(a, {
          'height': size + 'px',
          'width': size + 'px',
          'margin-top': -(size)/2 + 'px',
          'margin-left': -(size)/2 + 'px'
        });
      }

      touch
      [animationLibrary](a, {
        duration: 500,
        complete: function(){touch.remove();},
        easing: 'swing'
      });
    });

    touch
    .addClass( 'touch' )
    .css({
      'position': 'absolute',
      'top': e.pageY-button.offset().top + 'px',
      'left': e.pageX-button.offset().left + 'px',
      'width': '0',
      'height': '0'
    });

    /* IE8 will not appendChild */
    button.get(0).appendChild(touch.get(0));

    touch
    [animationLibrary]({
      'height': size + 'px',
      'width': size + 'px',
      'margin-top': -(size)/2 + 'px',
      'margin-left': -(size)/2 + 'px'
    }, {
      queue: false,
      duration: 500,
      'easing': 'easeOutQuart',
      'complete': function(){
        complete = true
      }
    });
  });
});

var username = $('#username'),
    password = $('#password'),
    erroru = $('erroru'),
    errorp = $('errorp'),
    submit = $('#submit'),
    udiv = $('#u'),
    pdiv = $('#p');

username.blur(function() {
  if (username.val() == '') {
    udiv.attr('errr','');
  } else {
    udiv.removeAttr('errr');
  }
});

password.blur(function() {
if(password.val() == '') {
    pdiv.attr('errr','');
  } else {
    pdiv.removeAttr('errr');
  }
});

submit.on('click', function(event) {
  event.preventDefault();
  if (username.val() == '') {
    udiv.attr('errr','');
  } else {
    udiv.removeAttr('errr');
  }
  if(password.val() == '') {
    pdiv.attr('errr','');
  } else {
    pdiv.removeAttr('errr');
  }
});
});

</script>
</head>
<body>
  <!--<div class="col-xs-3 w" style="background-color:#443344"></div>
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
           <h1>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : INSTITUTE LOGIN PANEL</h1>
         </div>
         <div class=" hidden-lg  hidden-md   hidden-sm col-xs-12" align="center">
           <h3>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY : INSTITUTE LOGIN PANEL</h3>
         </div>
         <div class="col-lg-11 col-md-11 hidden-sm hidden-xs ">
           <h2>(A Recognised Authority of West Bengal for Competetive Examination Conduction Purpose)<br>
           <strong>Directorate of Competetive Examination Control Authorisation</strong><br>
           (Community of All Examination Authority of West Bengal)<br>
           375, Prince Anwar Shah Road, Kolkata - 700068 (Beside South City Mall, Kolkata)
           </h2>
           </div>
       </div>-->
       <!--//logo-->
     <!--</div>

   </div></center>
   <!--//header-main-->
 <!--</header>
<div class="col-xs-3 w" style="background-color:#443344"></div>
 <div class="col-xs-3 w" style="background-color:#aa5555"></div>
 <div class="col-xs-3 w" style="background-color:#668899"></div>
 <div class="col-xs-3 w" style="background-color:#dd8855"></div>
<br/><br/><br/>-->
<header>
INSTITUTE LOGIN (WBCEA) -- WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY
</header>
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


<div class="login">
<i ripple>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
<path fill="#C7C7C7" d="m12,2c-5.52,0-10,4.48-10,10s4.48,10,10,10,10-4.48,10-10-4.48-10-10-10zm1,17h-2v-2h2zm2.07-7.75-0.9,0.92c-0.411277,0.329613-0.918558,0.542566-1.20218,1.03749-0.08045,0.14038-0.189078,0.293598-0.187645,0.470854,0.02236,2.76567,0.03004-0.166108,0.07573,1.85002l-1.80787,0.04803-0.04803-1.0764c-0.02822-0.632307-0.377947-1.42259,1.17-2.83l1.24-1.26c0.37-0.36,0.59-0.86,0.59-1.41,0-1.1-0.9-2-2-2s-2,0.9-2,2h-2c0-2.21,1.79-4,4-4s4,1.79,4,4c0,0.88-0.36,1.68-0.930005,2.25z"/>
</svg>
</i>
<div class="photo">
</div>
<span>Sign in with your WBCEA Account</span>
<form action="" id="login-form" method="post">
<div id="u" class="form-group">

  <input id="username" spellcheck=false class="form-control" name="username" type="text" size="18" alt="login" required="">
  <span class="form-highlight"></span>
  <span class="form-bar"></span>
  <label for="username" class="float-label">Username</label>
  <erroru>
  	Username is required
  	<i>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
		    <path d="M0 0h24v24h-24z" fill="none"/>
		    <path d="M1 21h22l-11-19-11 19zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
		</svg>
  	</i>
  </erroru>
</div>
<div id="p" class="form-group">
  <input id="password" class="form-control" spellcheck=false name="password" type="password" size="18" alt="login" required="">
  <span class="form-highlight"></span>
  <span class="form-bar"></span>
  <label for="password" class="float-label">Password</label>
  <errorp>
  	Password is required
  	<i>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
		    <path d="M0 0h24v24h-24z" fill="none"/>
		    <path d="M1 21h22l-11-19-11 19zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
		</svg>
  	</i>
  </errorp>
</div>
<div class="form-group">
<input type="checkbox" id="rem">
<label for="rem">Stay Signed in</label>
<button id="submit" type="submit" name="submit" ripple>Sign in</button>
</div>
</form>
</div>
<!-- sanal klavye başladı -->
<!--<div class="col-sm-12 col-md-12 col-lg-12 hidden-xs">
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
<!-- sanal klavye bitti
</div>
</div>
<!----------login bitti----->

<!------------boşluk---------------------
<div class="container">
 <div class="row">
   <div class=" col-sm-2 col-md-2 col-lg-1" style="padding:50px;">
    </div>
 </div>
</div>
<!------------boşluk bitti--------------->
   <span><?php echo $error; ?></span>
  </form>
 <br/><br/>
 <div class="footer">
   <center>
       <p>This Site is Developed By APPSINDIA , Developer : Debkanta Mondal</p>
   </center>
 </div>



</body>
</html>
