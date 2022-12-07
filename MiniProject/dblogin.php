<!DOCTYPE html>
<html>

<head>
	<title>ProgRAmmer</title>
</head>

<body>
<?php
$con= mysqli_connect("localhost", "root", "", "miniproject");

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['pswd'];

//to prevent from mysqli injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from register where username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header('Location:home.php');
    echo '<script>alert("Login Successful")</script>';
} else {
    echo '<script>alert("Login Failed")</script>';
}
mysqli_close($con);
?>
</body>
</html>