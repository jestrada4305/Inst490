<?php 
	// connects to the database 
	$hostname = 'localhost';
	$database = 'ischool_rooms';
	$user = 'root';
	$pword = 'root';

	$con=mysqli_connect($hostname, $user, $pword, $database);
	//checks if website connects to the database 
	//if($con)
		//echo 'connected successfully to iSchool room database';

	if ($conn->connect_error) die($conn->connect_error);
	
?>