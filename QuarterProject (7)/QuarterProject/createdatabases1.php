<?php
	$sql = "CREATE DATABASE login"; //creates database
	mysqli_query($conn, $sql); 
	mysqli_select_db($conn, 'login');//chooses the database
		
	// sql to create register table here so that when you register it is already made for you :))))
	$sql = "CREATE TABLE register(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		fullname VARCHAR(100) NOT NULL,
		username VARCHAR(100) NOT NULL,
		password VARCHAR(100) NOT NULL,
		haveTaken VARCHAR(3) NOT NULL,
		gradeGiven INT NOT NULL
		)";
	mysqli_select_db($conn, 'login');//chooses the database

?>