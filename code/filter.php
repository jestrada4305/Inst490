<?php

		if(isset($_POST['search']))
		{
			$valueToSearch = $_POST['valueToSearch'];
			$query = "SELECT * FROM `rooms` WHERE CONCAT(`room_number`, `building_id`, `sq_footage`, `floor_level`,`has_windows`, `has_carpet`, `has_lock`, `occupied`, `usage`) LIKE '%".$valueToSearch."%'";
    		$search_result = filterTable($query);
    

		}
		else {
			$query = "SELECT * FROM `rooms`";
			$search_result = filterTable($query);

		}

		function filterTable($query)
		{
			$con= mysqli_connect("localhost", "root", "root", "ischool_rooms");
			$filter_Result = mysqli_query($con, $query);
			return $filter_Result;
		}


?>
<!DOCTYPE html>
<html>
<title>Filter Rooms</title>
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
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ISCHOOL</span></h5>

       		<form action="filter.php" method="post">
       			<input type="text" name="valueToSearch" placeholder="Value To Search"> <br><br>
       			<input type="submit" name="search" value="Filter"> <br><br>
       			<table>
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
       				<?php while($row = mysqli_fetch_array($search_result)): ?>
       				<tr>
       					<td><?php echo $row["room_number"];?></td>
            <td><?php echo $row["building_id"];?></td>
						<td><?php echo $row["sq_footage"];?></td>
            <td><?php echo $row["floor_level"];?></td>
						<td><?php echo $row["has_windows"];?></td>
            <td><?php echo $row["has_carpet"];?></td>
            <td><?php echo $row["has_lock"];?></td>
						<td><?php echo $row["occupied"];?></td>
						<td><?php echo $row["usage"];?></td>

       				</tr>
       				<?php endwhile;?>
       			</table>
       		</form>
       			

   	</body>
  </html>


