<!---->

<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: /main/Home/adminLogin/"); // Redirecting To Home Page
}
?>

<html>

<head>
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
  background-color:#DCE6F7;
  }

  </style>
</head>

<body>

  <div id="profile">
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="/main/Home/logout/">Log Out</a></b>
  </div>


<?php
echo 'ID:';
echo '2019';
echo(mt_rand(100,199));
echo(mt_rand(1000,9999));

?>


</body>
</html>
