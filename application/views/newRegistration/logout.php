<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /main/Registration/Login/"); // Redirecting To Home Page
}
?>
