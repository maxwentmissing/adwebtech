<!--Eden Maxey-->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	$model = $_COOKIE["model"];
	$color = $_POST["color"];
	$finalcar = $model.$color;
	echo "<img src = '$finalcar.jpg' alt = 'car'>";
?>
<br><br>