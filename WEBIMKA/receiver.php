<?php
	$var1 = $_GET['info'];
	$var2 = $_GET['pass'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "IMKA";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO `database`(`id`, `waktu`, `info`) VALUES (NULL,NOW(),'".$var1."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$sql = "INSERT INTO `pass`(`id`, `waktu`, `password`) VALUES (NULL,NOW(),'".$var2."')";

	if ($conn->query($sql) === TRUE) {
		echo "Another new record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>