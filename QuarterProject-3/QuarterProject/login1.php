<!-- Urvi Awasthi and Eden Maxey; March 13th, 2019; Login Page for Quarter Project -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Login Page </title>
		<link rel = "stylesheet" type = "text/css" href = "style1.css">
	<?php 
		include "config.php";
		include "createdatabases1.php"; 
	?>
	</head>
	
	<body>
		<h1> Want to Access Our Vending Machine Database? </h1>
		<h2> Log In  </h2>
		<!-- Form to Log In -->
		<form action = "checker1.php" method = "POST">
			<!-- this first form asks for the user's name and the password-->
			<h2>
				Username: 
				<input type = "text" name = "username"><br>
				Password:  
				<input type = "password" name = "password"> <br>
				<input type = "submit" name = "submit" id = "submit">
			</h2>
		</form>

		
	</body>
</html>