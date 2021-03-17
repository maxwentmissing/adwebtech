<html>
<head>
<?php include 'BSheader.php';?>
<style>
.form-group{
	width:500px;
}
</style>
</head>

<body>
<center>
<div class = "body">
<br>
	<div class = "container">
		<div class = "row">
			<div class = "login">
			<h1>LOGIN</h1>
			<br>
			<form action = "BSchecker.php" method = 'post'>
				<div class = "form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control" id="username" name="username">
				</div>
				<br><br>
				<div class = "form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<br><br>
				<input type = "submit">
			</form>
			<br>
			</div>
		</div><!--END LOG ROW-->
		<div class = "row">
			<div class = "register">
			<h1>REGISTER</h1>
			<br>
			<form action = "BSregcheck.php" method = 'post'>
				<div class = "form-group">
					<label for="firstname">First Name:</label>
					<input type="firstname" class="form-control" id="firstname" name="firstname">
					<label for="lastname">Last Name:</label>
					<input type="lastname" class="form-control" id="lastname" name="lastname">
				</div>
				<br>
				<div class = "form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<br>
				<div class = "form-group">
					<label for="user_name">Username:</label>
					<input type="user_name" class="form-control" id="user_name" name="user_name">
					<label for="pass_word">Password:</label>
					<input type="pass_word" class="form-control" id="pass_word" name="pass_word">
					<br>
					Agree to Terms and Conditions<input type = "radio" class = "form-control" id = "user_type" name = "user_type" value = "member" required>
				</div>
				<input type = "submit">
				<p name = 'result'></p>
			</form>
		</div>
		</div>
	</div>
</div>
<?php
	include ('config.php');
	$sql = 'CREATE DATABASE radmembers';
	if (mysqli_select_db($conn, 'radmembers')){
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
	mysqli_query($conn,"CREATE TABLE member(
	member INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(14),
	last_name VARCHAR(16),
	user_name VARCHAR(14),
	pass_word VARCHAR(16))");
	mysqli_query($conn, $sql);
?>
</body>
</html>