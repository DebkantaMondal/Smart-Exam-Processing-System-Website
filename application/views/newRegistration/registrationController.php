<?php


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "exam19";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
            $cName=$_POST["cName"];
            $cFatherName=$_POST["cFatherName"];
            $cMotherName=$_POST["cMotherName"];
            $dob=$_POST["dob"];
            $cID=$_POST["cID"];
            $cGender=$_POST["cGender"];
            $cIDNo=$_POST["cIDNo"];
            $cAddress=$_POST["cAddress"];
            $cLocality=$_POST["cLocality"];
            $cSublocality=$_POST["cSublocality"];
            $cState=$_POST["cState"];
            $cDist=$_POST["cDist"];
            $cPin=$_POST["cPin"];
            $cEmail=$_POST["cEmail"];
            $cMobNo=$_POST["cMobNo"];
            $cPassword=md5($_POST["cPassword"]);
            $cSecurityPin=md5($_POST["cSecurityPin"]);

            $sql = "INSERT INTO registration (cName,cFatherName,cMotherName,dob,cID,cGender,cIDNo,cAddress,cLocality,cSublocality,cState,cDist,cPin,cEmail,cMobNo,cPassword,cSecurityPin)
            VALUES('$cName','$cFatherName','$cMotherName','$dob','$cID','$cGender','$cIDNo','$cAddress','$cLocality','$cSublocality','$cState','$cDist','$cPin','$cEmail','$cMobNo','$cPassword','$cSecurityPin')";


            if ($conn->query($sql) === TRUE) {

              echo "Your are Registered Successfully.";





  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>
<p><a href="/main/Home/IndexContent/">Go To Home</p>
