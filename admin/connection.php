<?php   
   $servername = "localhost:3306";
   $username = "root";
   $password = "";
   $database = "db_cigs";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
?>