<?php>
	
	//Connects with MYSQL
	$con= mysqli_connect("localhost", "root", "root", "ischool_rooms");


	//Selects Query
	$sql = "SELECT * FROM `rooms`";

	//Execute the query
	$records = mysqli_query($con,$sql);

?>


<html>
<head> 
	<title> Edit Rooms</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("http://yx.umd.edu/wp-content/uploads/2016/08/iSchool_SECONDARY_LOGO.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
</style>

	<style>
		table,tr,th,td
		{
			border: 1px solid black;

		}


	</style>
<body>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="index.html" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="addrooms.html" class="w3-button w3-block w3-black">ADD ROOMS</a>
    </div>
    <div class="w3-col s3">
      <a href="editrooms.php" class="w3-button w3-block w3-black">EDIT ROOMS</a>
    </div>
    <div class="w3-col s3">
      <a href="filter.php" class="w3-button w3-block w3-black">FILTER ROOMS</a>
    </div>
  </div>
</div>

<!-- Header with image -->


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:50000px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ISCHOOL</span></h5>

    <table cellspacing="3" cellpadding="5" width="1">
     	<tr>

       		<th> Room Number</th>
       		<th> Building ID</th>
       		<th> Square Footage</th>
       	 	<th> Floor Level </th>
       		<th> Windows</th>
        	<th> Carpet</th>
        	<th> Lock</th>
       		<th> Occupied</th>
        	<th> Usage</th>

       	</tr>
       	<?php 
       	while($row = mysqli_fetch_array($records))
       	{
       		echo "<tr><form action=update.php method=post>";
       		echo "<td><input type=text name=room_number value='".$row['room_number']."'</td>";
       		echo "<td><input type=text name=building_id value='".$row['building_id']."'</td>";
       		echo "<td><input type=text name=sq_footage value='".$row['sq_footage ']."'</td>";
       		echo "<td><input type=text name=floor_level value='".$row['floor_level']."'</td>";
       		echo "<td><input type=text name=has_windows value='".$row['has_windows ']."'</td>";
       		echo "<td><input type=text name=has_carpet value='".$row['has_carpet']."'</td>";
       		echo "<td><input type=text name=has_lock value='".$row['has_lock']."'</td>";
       		echo "<td><input type=text name=occupied value='".$row['occupied']."'</td>";
       		echo "<td><input type=text name=usage value='".$row['usage']."'</td>";
       		echo "<input type=hidden name=room_id value='".$row['room_id']."'>";
       		echo "<td><input type=submit>";
       		echo "</form> </td>";
       	} 

       	?>




    </table>

</body>
</html>