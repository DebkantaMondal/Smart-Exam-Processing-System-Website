<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO register (Name, Email)
VALUES ('$name','$email')";

if ($conn->query($sql) === TRUE) {
    echo "Your Registration is Successful.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
