<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /main/Home/adminLogin/"); // Redirecting To Home Page
}
?>
