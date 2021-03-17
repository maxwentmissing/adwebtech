<?php
	include 'createDatabase.php';
	$sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$table = "<table id='table3' class='display' style='width:100%'><thead><tr><th>First Name</th><th>Last Name</th><th>Username</th></tr></thead><tbody>";
		while($row = mysqli_fetch_assoc($result)) {
			$table .= "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["username"]."</td></tr>";	
		}
		$table .= "</tbody></table>";
		echo $table;
	}
?>