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


	// stores post data into an array 
	$roomnumber = $_POST['room_number'];
	$sqfootage = $_POST['sq_footage'];
	$window = $_POST['has_windows'];
	$occupied = $_POST['occupied'];
	$buildingnum = $_POST['building_map_num'];
	$lock = $_POST['has_lock'];
	$carpet = $_POST['has_carpet'];
	$floorlevel = $_POST['floor_level'];


	$sql = "INSERT INTO form (room_number, sq_footage, has_windows, occupied, building_map_num, has_lock, has_carpet, floor_level) VALUES ('$roomnumber', '$sqfootage', '$window', '$occupied', '$buildingnum', '$lock', '$carpet', '$floorlevel');";
	$result = $conn->query($sql);
 ?>