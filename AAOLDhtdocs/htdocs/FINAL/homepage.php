<!DOCTYPE html>
<!--Eden Maxey and Aurora Harkleroad Q4 Project 5/23/18-->
<html>
<head>
	<link rel= "stylesheet" type = "text/css" href = "custom.css">
</head>

<div class = "login">
	<body>
	<h1>LOGIN</h1>
	<br>
	<form action = "checker.php" method = 'post'>
	Username: <input type = "text" name = "username">
	<br><br>
	Password: <input type = "text" name = "password">
	<br><br>
	<input type = "submit">
	</form>
	<br>
	<a href = 'homepage.php'><img src = "http://www.stickpng.com/assets/images/584ac2d03ac3a570f94a666d.png">
	<img src = "https://assets.materialup.com/uploads/82eae29e-33b7-4ff7-be10-df432402b2b6/preview"></a>
</div>
<!--there are two divs for the login and the registration-->
<div class = "register">
	<h1>REGISTER</h1>
	<br><br>
	<form action = "registercheck.php" method = 'post'>
		E-Mail: <input type = "text" name = "email">
		<br>
		Staff:
		<input type = 'radio' name = "user_type" value = "staff"><br>
		Student:<input type = "radio" name = "user_type" value = "student">
		<br><br>
		Enter ID: <input type = 'text' name = 'ID'>
		Username: <input type = "text" name = "user_name">
		Password: <input type = "text" name = "pass_word">
		Confirm Password: <input type = 'text' name = "conpass">
		<br><br>
		First Name: <input type = "text" name = "firstname">
		Last Name: <input type = "text" name = "lastname">
		<br><br>
		Birth Date:<input type = "date" name = "birthdate">
		<br><br>
		<input type = "submit">
		<p name = 'result'></p>
	</form>
</div>
<?php
	include ('config.php');
	$sql = 'CREATE DATABASE attendance';
	if (mysqli_select_db($conn, 'attendance')){
		//echo "database exists";
	}
	else{
	//this code is for when the database doesn't exist
	if (mysqli_query($conn,$sql)){
		echo "Database Created Successfully";
	}
	else{
		echo "Error creating database: ".mysqli_error($conn);
	}
	}
	//creates the tables for the database
	mysqli_query($conn,"CREATE TABLE student(
	student_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	birth_date DATE,
	first_name VARCHAR(14),
	last_name VARCHAR(16),
	user_name VARCHAR(14),
	pass_word VARCHAR(16))");
	mysqli_query($conn,"CREATE TABLE staff(
	staff_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	birth_date DATE,
	first_name VARCHAR(14),
	last_name VARCHAR(16),
	user_name VARCHAR(14),
	pass_word VARCHAR(16))");
	//this is to prevent a boolean result in the staff page to display student info
	mysqli_query($conn, $sql);
	mysqli_query($conn, "INSERT INTO student (student_no, birth_date, first_name, last_name, user_name, pass_word)
				VALUES ('1', '2000-03-05', 'Bobby', 'Darin', 'pizzabox','lolurmom')");
	mysqli_query($conn, "INSERT INTO staff (staff_no, birth_date, first_name, last_name, user_name, pass_word)
				VALUES ('1', '2000-03-15', 'Lovely', 'Butt', 'bepis','luvbutts')");
?>
</body>
</html>
