<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /main/institute/Home/"); // Redirecting To Home Page
}
?>
