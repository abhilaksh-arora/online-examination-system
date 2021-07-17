<html>
<head>
	<link rel="stylesheet" href="css/final.css">
</head>
<body>

<div class="head">
<?php
$uid = filter_input(INPUT_POST, 'uid');

if (!empty($uid)){{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login (uid) values ('$uid')";
if ($conn->query($sql)){
echo "You have succesfully logged in!!!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
?>
</div>

<div class="cont">

	<h3>Thank you for chosing AMCAT. </h3>
	<h4>You will be redirected to the exam page shortly.</h4>

<div class="btn-group"><center>
<button class="btn btn-primary b1" onclick="window.location.href = 'index.html';">End Exam</button>
</div><center>
</div>
</body>
</html>