<!DOCTYPE html>
<!--Aurora Harkleroad and Eden Maxey Q4 Project 5/23/18-->
<html>
<head>
<link rel= "stylesheet" type = "text/css" href = "custom.css">
</head>
<body>
<!--this page is for staff specific user account-->
<ul>
	<li><a href="display.php">Check Your Info</a></li>
	<li><a href="homepage.php">Log Out</a></li>
</ul>

<?php
include('config.php');
$username = $_COOKIE['username'];
mysqli_select_db($conn, 'attendance');
$user = $_COOKIE['firstname'];
//This page just initiates the task bar and sets up the user specific page
setcookie('firstname', $user);
echo "<h1>Welcome $user</h1><br><br>
<img src = 'babe.gif'>";
?>
</body>
</html>
