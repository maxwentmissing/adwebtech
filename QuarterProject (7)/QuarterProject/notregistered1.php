<!-- Urvi Awasthi and Eden Maxey; March 13th, 2019; Registration Page for Quarter Project -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Not Registered </title>
		<link rel = "stylesheet" type = "text/css" href = "style1.css">
	</head>
	
	<body>
		<h1> To access our website, you must register first. </h1>
	
		<form action = "database1.php" method = "POST">
				Full Name: 
				<input type = "text" name = "fullname"><br>
				Your imsa username: 
				<input type = "text" name = "username"> <br>
				Your own password: 
				<input type = "password" name = "password"> <br>
				
				<input type = "submit" id = "submit" value = "Submit">
		</form>

	</body>
</html>