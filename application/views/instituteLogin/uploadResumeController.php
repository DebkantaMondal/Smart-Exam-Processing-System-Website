<?php


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "InstituteBase";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
    $upload=$_POST["upload"];

    $sql = "INSERT INTO InstituteLogin (registerResume) VALUES ('$upload');

    if ($conn->query($sql) === TRUE) {


      echo "Your Registration Resume Uploaded Succeessfully.";
      





} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
