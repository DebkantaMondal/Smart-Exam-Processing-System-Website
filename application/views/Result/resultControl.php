


<html>
<head>
  <link rel="shortcut icon" href="http://buildingbrightfutures.org/wp-content/uploads/2015/08/Wiki-tech-logo-300x300.png" sizes="16x16">
  <style>
h2{
	background-color:#bbb;
	color:hsl(30, 100%, 40%);
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

td:hover{
	background-color:#eee;
	font-weight:bold;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
</html>
<?php
session_start();
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

if (count($_POST) > 0) {
    if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
$rollno = $_POST['rollno'];
$sql = "SELECT * FROM resultdtls where croll='$rollno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Reg No: ". $row["regno"].
		" <br> Name: ". $row["cname"].
		"<br><b> Roll: " . $row["croll"] .
		"</b><hr><p><b><u>Mark Sheet</u></b></p><table border=1>".

		"<tr><td> Physics</td><td>" . $row["pmark"] ."</td></tr>" .
		"<tr><td> Chemistry</td><td>" . $row["cmark"] . "</td></tr>".
		"<tr><td> Mathematics</td><td> " . $row["mmark"] . "</td></tr>".
		"<tr><td><b> Total</b></td><td><b> " . $tot = $row["pmark"]+$row["cmark"]+$row["mmark"] . "</b></td></b></tr>"  .
		"</table>" ;

		if($tot>=90){

			echo "<br/><b>You Are Passed.</b>";

		}else{

			echo "<br/><b>Sorry!You encounterd Fail.</b>";

		}

		echo "<br/><a onclick='window.print();'><h2>Print Now</h2></a>";
    }
} else {
    echo "Please Contact to Council HelpLine Number to know about your Result.";
}
}
else{echo "Captcha Code Error. Write Proper Captcha Again.";}
}

$conn->close();
?>


<!--HTML-->
<br/><br/><br/><br/>
<center>
<b>Disclaimer : Any Mistake(s) or crept in Result/Rank Card , Web Authority will not responsible.
 Soon Contact Council of Exam to verify about it.</b>
</center>
