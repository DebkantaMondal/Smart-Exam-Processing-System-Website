<html>
<head>
  <script type="text/javascript">
          function PrintDiv(id) {
              var data=document.getElementById(id).innerHTML;
              var myWindow = window.open('', 'printItem', 'height=400,width=600');
              myWindow.document.write('<html><head><title>my div</title>');
              /*optional stylesheet*/ //myWindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
              myWindow.document.write('</head><body >');
              myWindow.document.write(data);
              myWindow.document.write('</body></html>');
              myWindow.document.close(); // necessary for IE >= 10

              myWindow.onload=function(){ // necessary if the div contain images

                  myWindow.focus(); // necessary for IE >= 10
                  myWindow.print();
                  myWindow.close();
              };
          }
      </script>
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



tr:nth-child(odd) {background-color: #ddd;}
  </style>
</head>
<body>
  <div id='printItem'>
<?php
include('session.php');
?>
<b id="logout"><a href="/main/Registration/logout/">Log Out</a></b>
<center>
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

$regno = $login_reg_no;
$sql = "SELECT * FROM registration where registrationnumber='$regno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<b><u><h2>Conformation Page</h2></u></b><br/>";
      echo
		"</b><table border=1>".
    "<tr><th> Registration Number</th><td><b>" . $row["registrationnumber"] ."</b></td></tr>" .
    "<tr><th> Candidate Name</th><td>" . $row["cName"] ."</td></tr>" .
    "<tr><th> Candidate Email ID</th><td><b>" . $row["cEmail"] ."</b></td></tr>" .
		"<tr><th> Father's Name</th><td>" . $row["cFatherName"] ."</td></tr>" .
		"<tr><th> Mother's Name</th><td>" . $row["cMotherName"] . "</td></tr>".
    "<tr><th> Mobile Number/Contact Number</th><td>" . $row["cMobNo"] . "</td></tr>".
		"<tr><th> Date of Birth</th><td> " . $row["dob"] . "</td></tr>".
		"<tr><th> Gender</th><td> " . $row["cGender"] . "</td></b></tr>"  .
    "<tr><th> Identity Type</th><td>" . $row["cID"] . "</td></tr>".
    "<tr><th> Identity Card Unique Number</th><td><b>" . $row["cIDNo"] . "</b></td></tr>".
    "<tr><th> Address</th><td>" . $row["cAddress"] . "</td></tr>".
    "<tr><th> Locality</th><td>" . $row["cLocality"] . "</td></tr>".
    "<tr><th> Sublocality</th><td>" . $row["cSublocality"] . "</td></tr>".
    "<tr><th> State</th><td>" . $row["cState"] . "</td></tr>".
    "<tr><th> District</th><td>" . $row["cDist"] . "</td></tr>".
    "<tr><th> Pin Number/Postal ID Number</th><td>" . $row["cPin"] . "</td></tr>".
    "<tr><td rowspan=2><i>Disclaimer : This Confirm Page is auto-generated page.So if there is any mistakes
      please contact with Authority Helpline as soon as possible</i></td></tr>".
		"</table>" ;


    }
} else {
    echo "Please Contact to Authority HelpLine Number to know about your Registration and Confirm Page Disabilities.";
}

$conn->close();
?>
</div>
<a href="javascript:void(0);" id="print" >Print</a>
<script type="text/javascript">
$(function() {
    $("#print").click(function() {
        var contents = $("#printItem").html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({
            "position": "absolute",
            "top": "-1000000px"
        });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html><head><title>DIV Contents</title>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="https://exam.webscte.co.in/assets/css/style.css" rel="stylesheet" type="text/css" />');
        frameDoc.document.write('<link href="https://exam.webscte.co.in/assets/css/home.css" rel="stylesheet" type="text/css" />');
        frameDoc.document.write('</head><body>');
        frameDoc.document.write('<h1 id="print-header"><center>WEST BENGAL COMPETETIVE EXAMINATION AUTHORITY</center></h1>');
        //Append the DIV contents.
        frameDoc.document.write(contents);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function() {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
});
</script>
</body>
</html>
