<?php


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "result";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
            $email=$_POST["email"];
            $contact=$_POST["contact"];
            $query=$_POST["query"];
            $sql = "INSERT INTO studentdesk (email,contact,query) VALUES('$email','$contact','$query')";


            if ($conn->query($sql) === TRUE) {

              echo "Your Query Submitted Successfully.";





  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>
<a href="/main/Home/studentHelpdesk/">Go to Helpdesk Page</a>
<br/>
<p>We answer about your query within 72hours of working time and <b>Answer is sent to your registered Email ID provided @student HelpDesk.</b></p>
