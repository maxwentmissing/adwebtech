<?php
	$json_file = file_get_contents('movies.json');
	$jfo = json_decode($json_file);
	$title = $jfo->result->title;
	$rank = $jfo->result->rank; 
	$id = $jfo->result->id;
	
	include 'movies.sql';
	$sql = "SELECT * FROM movies";
    $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$table = "<table id='table3' class='display' style='width:100%'><thead><tr><th>ID</th><th>Title</th><th>Rank</th></tr></thead><tbody>";
		while($row = mysqli_fetch_assoc($result)) {
			$table .= "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["rank"]."</td></tr>";	
		}
		$table .= "</tbody></table>";
		echo $table;
	}
?>