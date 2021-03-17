<?php 
		session_start();
		session_destroy(); 
?>
<!-- Urvi Awasthi and Eden Maxey; March 13th, 2018; Logout Page for Quarter Project -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Logged Out </title>
		<link rel = "stylesheet" type = "text/css" href = "style1.css">
		
	</head>
	
	<body>
		<h1> Congratulations! You have successfully logged out. </h1>
	
		<!--Put results of quiz here later -->
		<form action = "index.php" method = "POST">
				<input type = "submit" id = "submit" value = "Go back to login"> 	<!-- Button to go back to log in -->
		</form>

	</body>
</html>