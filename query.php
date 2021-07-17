<html>
<head>
	<link rel="stylesheet" href="css/final_query.css">
</head>
<body>
	<div class="head">

<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');


if (!empty($name)){
if (!empty($message)){
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
$sql = "INSERT INTO query (name, email, subject, message)values ('$name','$email','$subject', '$message')";
if ($conn->query($sql)){
echo "Your Message is Saved Successfully.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
// else{
// echo "email should not be empty";
// die();
// }    
}

?>
</div>

<div class="cont">
	<h3>We will reach out to you within 24 hours.</h3>
	<h4>Thank you for your concern.</h4>

<div class="btn-group"><center>
<button class="btn btn-primary b1" onclick="window.location.href = 'student.html';">Student Login</button>
<button class="btn btn-primary b1" onclick="window.location.href = 'teacher.html';">Teacher Login</button>
<button class="btn btn-primary b1" onclick="window.location.href = 'index.html';">Home</button>
</div>
</center></div>
</body>
</html>