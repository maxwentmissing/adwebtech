<!DOCTYPE html>
<!--page that welcomes the user Trenton Lyke 12/8/2018-->
<?php
//starts session
session_start();
//adds the style for the page onto the page
include 'styling.php';

?>
<html>
	
	
	<head>
		<!--title of page-->
		<title>Welcome</title>
		
		

		
	</head>
	<body>
		<!--Navigation bar of the page-->
		<ul>
		  <li><a href="home.php" >Home</a></li>
		  <li><a href="register.php" >Register</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="quiz.php">Quiz</a></li>
		  <?php  if(isset($_SESSION["username"])){echo "<li>$_SESSION[username]<br><a href='logout.php' class='logout'>log out</a></li>";}?>
		</ul>
		<!--heading for page-->
		<?php echo "<h1 class='title'>Welcome ".$_SESSION["firstName"]." ".$_SESSION["lastName"]."</h1>"?>
		
	</body>
</html>