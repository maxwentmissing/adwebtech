<!DOCTYPE html>
<!--page that the user uses to register and create an account Trenton Lyke 12/8/2018-->
<?php
//adds the style for the page onto the page
include 'styling.php';

//includes code to add info to database
include 'registerDatabase.php';
?>
<html>
	
	
	<head>
		<!--title of page-->
		<title>Registration</title>
		
		<!--code to check password-->
		<script type="text/javascript" src="confirmPassword.js"></script>
		

		
	</head>
	<body>
		<!--Navigation bar of the page-->
		<ul>
		  <li><a href="home.php" >Home</a></li>
		  <li><a href="register.php" class="active">Register</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="quiz.php">Quiz</a></li>
		  <?php  if(isset($_SESSION["username"])){echo "<li>$_SESSION[username]<br><a href='logout.php' class='logout'>log out</a></li>";}?>
		</ul>
		<!--heading for page-->
		<h1 class="title">Please Register Here</h1>
		
		
		<!--Form for registration-->
		<form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<fieldset>
				<?php if(isset($_POST["username"])){if($_SESSION["isUsernameUnique"] == "false" || $_SESSION["isPasswordUnique"] == "false" || $_SESSION["isEmailUnique"] == "false"){echo "<span class='warning'> *there was a problem with the information given to us</span>";}}?>
				<table>
					<!--first name-->
					<tr>
						<td>First Name:</td> 
					</tr>
					<tr>
						<td><input type="text" name="firstName" required><br>
					</tr>
					<!--last name-->
					<tr>
						<td >Last Name:</td>
					</tr>
					<tr>
						<td><input name="lastName"type="text" required></td>
					</tr>
					<!--birthday-->
					<tr>
						<td >Birthday:</td>
					</tr>
					<tr>
						<td><input name="birthday"type="date" required></td>
					</tr>
					<!--email-->
					<tr>
						<td >Email:</td>
					</tr>
					<tr>
						<td><input name="email"type="email" min="0"max="100"required><?php if(isset($_POST["email"])){if($_SESSION["isEmailUnique"] == "false"){echo "<span class='warning'> *that email was taken</span>";}}?></td>
					</tr>
					<!--username-->
					<tr>
						<td >Username:</td>
					</tr>
					<tr>
						<td><input name="username"type="text" id="username" required><?php if(isset($_POST["username"])){if($_SESSION["isUsernameUnique"] == "false"){echo "<span class='warning'> *that username was taken</span>";}}?></td>
					</tr>
					<!--password-->
					<tr>
						<td >Password:<span class="additionalDirections"><br>must contain an uppercase letter, a lowercase<br> letter, a number, a special character and be at least 8 characters</span></td>
					</tr>
					<tr>
						<td><input name="password"type="password" id="pass1" onkeyup="checkPassValid(); checkPass();" required><span class='warning' id="validMessage"><?php if(isset($_POST["password"])){if($_SESSION["isPasswordUnique"] == "false"){echo " *that password was taken";}}?></span></td>
					</tr>
					<!--confirm password-->
					<tr>
						<td >Confirm Password:</td>
					</tr>
					<tr>
						<td><input name="confirmPassword"type="password" id="pass2" onkeyup="checkPass()" required><span id="confirmMessage" class='warning'></span></td>
					</tr>
					<!--security question-->
					<tr>
						<td>Security question for password recovery:<br><span class="additionalDirections">select one or make your own</span></td>
					</tr>
					<tr>
						
						<td>
						<input list="questions" name="securityQuestion">
						<datalist id="questions">
							<option value="What was the name your first pet?">
							<option value="What was your childhood nickname?">
							<option value="What street did you live on as a child?">
							<option value="What was the name of your high school?">
							<option value="What hospital were you born in?">
						</datalist></td>
					</tr>
					<!--security question answer-->
					<tr>
						<td >Answer to security question:</td>
					</tr>
					<tr>
						<td><input name="securityAnswer"type="text" required></td>
					</tr>
					<tr>
						<!--submit button and reset button-->
						<td><input type="submit" id="submit"><input type="Reset"></td>
						
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>