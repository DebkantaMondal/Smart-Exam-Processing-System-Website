<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Admin PIN Number or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "admin");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from data where username=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $username; // Initializing Session
          header("location: /main/Home/loginAdmin/"); // Redirecting To Profile Page
        }
else {
       $error = "Admin PIN Number or Password is/are invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>
