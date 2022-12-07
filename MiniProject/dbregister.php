<!DOCTYPE html>
<html>

<head>
	<title>ProgRAmmer</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "miniproject");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
		$email = $_REQUEST['emailid'];
		$password = $_REQUEST['pswd'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO register VALUES ('$name','$username','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
