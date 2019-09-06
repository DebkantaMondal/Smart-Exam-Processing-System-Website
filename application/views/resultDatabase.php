

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

$regno = $_POST['regno'];
$sql = "SELECT * FROM resultdtls where regno='$regno'";
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

		echo "<br/><a onclick='window.print();'>Print Now</a>";
    }
} else {
    echo "Please Contact to Council HelpLine Number to know about your Result.";
}

$conn->close();
?>


<!--HTML-->
<br/><br/><br/><br/>
<center>
<b>Disclaimer : Any Mistake(s) or crept in Result/Rank Card , Web Authority will not responsible.
 Soon Contact Council of Exam to verify about it.</b>
</center>
