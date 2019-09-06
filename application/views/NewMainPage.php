<!--Code Generation by Debkanta Mondal-->

<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: /main/Home/adminLogin/"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/main/styles/Home/MainPageCard.css">

<script type="text/javascript" src="/main/scripts/HomeCardview.js"></script>


<style>

#logout {
float:right;
padding:5px;
border:dashed 1px gray
}

#profile {
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7
}

</style>

</head>


<body>

<div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="/main/Home/logout/">Log Out</a></b>
</div>

<center>
<table border="0">
<tr>
  <td>

<div class="wrapper">



            <div class="card radius shadowDepth1">
                <div class="card__image border-tlr-radius">
                   <img src="/main/assets/images/image1.png" alt="image1" class="border-tlr-radius" height="200">
                </div>

                <div class="card__content card__padding">
                    <div class="card__share">

                        <div class="card__social">
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                        <center>
                        <a id="share" class="share-toggle share-icon" href="#">
                          <i class="fa fa-pencil" style="font-size:24px"></i>
                        </a>
                      </center>
                    </div>

                    <div class="card__meta">
                        <a href="#">STUDENT QUERY</a>
                        <time>18/01/2019</time>
                    </div>

                    <article class="card__article">
                        <h2><a href="#">STUDENT HELPDESK -- QUERY HANDLING</a></h2>

                        <p>Students Query answering and accepting Web Services...<a href="?id=40">Read More</a></p>
                    </article>
                </div>

                <div class="card__action">

                    <div class="card__author">
                        <img src="/main/assets/images/admin.png" alt="user" width="40" height="40">
                        <div class="card__author-content">
                            By <a href="#">WBCEA Web Admin</a>
                        </div>
                    </div>
                </div>

                </div>
</div>

</td>
<td>
<div class="wrapper">



            <div class="card radius shadowDepth1">
                <div class="card__image border-tlr-radius">
                   <img src="/main/assets/images/image2.jpg" alt="image2" class="border-tlr-radius" height="200">
                </div>

                <div class="card__content card__padding">
                    <div class="card__share">

                        <div class="card__social">
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                        <center>
                        <a id="share" class="share-toggle share-icon" href="localhost:5000/Marksheet Panel.html">
                          <i class="fa fa-pencil" style="font-size:24px"></i>
                        </a>
                      </center>
                    </div>

                    <div class="card__meta">
                        <a href="localhost:5000/Marksheet Panel.htm">MARKSHEET GENERATION</a>
                        <time>20/02/2019</time>
                    </div>

                    <article class="card__article">
                        <h2><a href="localhost:5000/Marksheet Panel.html">Student Marksheet Panel Generation</a></h2>

                        <p>Generating Auto Result -- CEE 2019 -- Web Services...<a href="?id=40">Read More</a></p>
                    </article>
                </div>

                <div class="card__action">

                    <div class="card__author">
                        <img src="/main/assets/images/admin.png" alt="user" width="40" height="40">
                        <div class="card__author-content">
                            By <a href="#">WBCEA Web Admin</a>
                        </div>
                    </div>
                </div>

                </div>
</div>

</td>
<td>
<div class="wrapper">



            <div class="card radius shadowDepth1">
                <div class="card__image border-tlr-radius">
                   <img src="/main/assets/images/image3.jpg" alt="image3" class="border-tlr-radius" height="200">
                </div>

                <div class="card__content card__padding">
                    <div class="card__share">

                        <div class="card__social">
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>
                        <center>
                        <a id="share" class="share-toggle share-icon" href="#">
                          <i class="fa fa-pencil" style="font-size:24px"></i>
                        </a>
                      </center>
                    </div>

                    <div class="card__meta">
                        <a href="#">INSTITUTE PASSCODE GENERATION</a>
                        <time>18/01/2019</time>
                    </div>

                    <article class="card__article">
                        <h2><a href="#">Institute Passcode Generation</a></h2>

                        <p>Generating Every Institutes Passcode --  Web Services...<a href="?id=40">Read More</a></p>
                    </article>
                </div>

                <div class="card__action">

                    <div class="card__author">
                        <img src="/main/assets/images/admin.png" alt="user" width="40" height="40">
                        <div class="card__author-content">
                            By <a href="#">WBCEA Web Admin</a>
                        </div>
                    </div>
                </div>

                </div>
</div>

</td>


</tr>
</table>

</center>

<br/><br/><br/><br/>
<div class="footer">
  <center>
      <p>This Site is Developed By APPSINDIA , Developer : Debkanta Mondal</p>
  </center>
</div>

<!--Prevents from code overlooking and Disable Right Click on this page-->
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

</body>
</html>
