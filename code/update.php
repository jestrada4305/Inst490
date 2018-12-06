<?php>
	//Connects with MYSQL
	$con= mysqli_connect("localhost", "root", "root", "ischool_rooms");


	//Selects Query // WHERE ID='$_POST[room_id]'
	$sql = "UPDATE rooms SET room_number='$_POST[room_number]',building_id='$_POST[building_id]',sq_footage='$_POST[sq_footage]',floor_level='$_POST[floor_level]',has_windows='$_POST[has_windows]',has_carpet='$_POST[has_carpet]',has_lock='$_POST[has_lock]',occupied='$_POST[occupied]',usage='$_POST[usage]' WHERE room_id='$_POST[room_id]'";

	//Execute the query
	if(mysqli_query($con,$sql))
		header("refresh:1; url=editrooms.php");
	else 
		echo "Not Updated"; 


?>

