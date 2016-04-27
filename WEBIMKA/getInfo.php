<?php
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

	$sql = "SELECT `info` FROM `database` ORDER BY `id` DESC LIMIT 1;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			if ($row['info'] == 0) {
				echo 'Aman';
			}else {
				echo 'Bahaya';
			}
		}
	} else {
    echo "No Results"; }

	$sql = "SELECT `password` FROM `pass` ORDER BY `id` DESC LIMIT 1;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br><br>Password : ".$row['password'];
		}
	} else {
    echo "No Results";}

	$conn->close();
?>