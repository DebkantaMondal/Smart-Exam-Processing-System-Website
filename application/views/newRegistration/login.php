<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Candidate Email ID or ID Number or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password =md5($_POST['password']);
$IDnumber = $_POST['idNumber'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "exam19");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT cEmail, cPassword, cIDNo from registration where cEmail=? AND cPassword=? AND cIDNo=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("sss", $username, $password, $IDnumber);
$stmt->execute();
$stmt->bind_result($username, $password, $IDnumber);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $IDnumber; // Initializing Session
          header("location: /main/Registration/studentProfilePage/"); // Redirecting To Profile Page
        }
else {
       $error = "Candidate Email ID or ID Number or Password is/are invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>
