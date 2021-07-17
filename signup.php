<html>
<head>
	<link rel="stylesheet" href="css/final.css">
</head>
<body>
<div class="head">

<?php
$name = filter_input(INPUT_POST, 'name');
$uname = filter_input(INPUT_POST, 'uname');
$college = filter_input(INPUT_POST, 'college');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');

if (!empty($name)){
if (!empty($college)){
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
$sql = "INSERT INTO student (name, uname, college, email, phone)values ('$name','$uname','$college', '$email', '$phone')";
if ($conn->query($sql)){
echo "Your account has been created sucessfully!!!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "email should not be empty";
die();
}
}
?>
</div>

<div class="cont">
<h3>You can now log in from home page!! </h3>

<div class="btn-group"><center>
<button class="btn btn-primary b1" onclick="window.location.href = 'student.html';">Student Login</button>
<button class="btn btn-primary b1" onclick="window.location.href = 'teacher.html';">Teacher Login</button>
<button class="btn btn-primary b1" onclick="window.location.href = 'index.html';">Home</button>
</div></center>
</div>
</body>
</html>