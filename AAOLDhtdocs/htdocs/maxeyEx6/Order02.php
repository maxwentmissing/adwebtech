<!--Eden Maxey-->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	setcookie("user", $_POST['user']);
	setcookie("model", $_POST['model']);
	$user = $_POST['user']
?>

<br><br>
	Select car color, 
	<?php echo $_COOKIE['user'];?>
	<form action="Order03.php" method="post">
	<br>
	<input type = "radio" value = "Red" name = "color">Red<br>
	<input type = "radio" value = "Yellow" name = "color">Yellow<br>
	<input type = "radio" value = "Blue" name = "color">Blue<br>
	<input type="submit" value="Submit">
	</form>
</body>
</html>
