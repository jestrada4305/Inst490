<?php

		if(isset($_POST['search']))
		{
			$valueToSearch = $_POST['valueToSearch'];
			$query = "SELECT * FROM `rooms` WHERE CONCAT(`room_number`, `sq_footage`, `has_windows`, `occupied`, `building_map_num`, `has_lock`, `has_carpet`, `floor_level`) LIKE '%".$valueToSearch."%'";
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

	<style>
		table,tr,th,td
		{
			border: 1px solid black;

		}


	</style>

	<body>

       		<form action="filter.php" method="post">
       			<input type="text" name="valueToSearch" placeholder="Value To Search"> <br><br>
       			<input type="submit" name="search" value="Filter"> <br><br>
       			<table>
       				<tr>

       					<th> Room Number</th>
       					<th> Square Footage</th>
       					<th> Windows</th>
       					<th> Occupied</th>
       					<th> Building Map Number</th>
       					<th> Lock</th>
       					<th> Carpet</th>
       					<th> Floor Level </th>
       				</tr>
       				<?php while($row = mysqli_fetch_array($search_result)): ?>
       				<tr>
       					<td><?php echo $row["room_number"];?></td>
						<td><?php echo $row["sq_footage"];?></td>
						<td><?php echo $row["has_windows"];?></td>
						<td><?php echo $row["occupied"];?></td>
						<td><?php echo $row["building_map_num"];?></td>
						<td><?php echo $row["has_lock"];?></td>
						<td><?php echo $row["has_carpet"];?></td>
						<td><?php echo $row["floor_level"];?></td>

       				</tr>
       				<?php endwhile;?>
       			</table>
       		</form>
       			

   	</body>
  </html>


