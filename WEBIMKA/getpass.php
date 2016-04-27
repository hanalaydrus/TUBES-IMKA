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

	$sql = "SELECT `password` FROM `pass` ORDER BY `id` DESC LIMIT 1;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "Password : ".$row['info'];
		}
	} else {
    echo "No Results";
}

	$conn->close();
?>