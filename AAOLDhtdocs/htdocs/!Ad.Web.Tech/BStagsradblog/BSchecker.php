<html>
<head>
<?php include 'BSheader.php';?>
<style>
</style>
</head>

<body>
<center>
<div class = "body">
	<?php
		include('config.php');
		setcookie('username', $_POST['username']);
		setcookie('pass', $_POST['password']);

		$user = $_POST['username'];
		$pass = $_POST['password'];
		mysqli_select_db($conn, 'radmembers');
		//checks first if it is a student account
		$checkuser = mysqli_query($conn, "SELECT * from member where user_name = '$user' ");
		//number of rows function, if produces one row then name is there
		//password and confirm password on registration, check if those match
		if (mysqli_num_rows($checkuser) == 1){
			if($row = mysqli_fetch_array($checkuser)){
				if ($row['pass_word'] == $pass){
					$user_type = 'student';
					$namee = $row['first_name'];
					setcookie('type', $user_type);
					setcookie('firstname',$namee);
					//sets up the cookies for the next few pages
					header("Location:BStagsradindex.php");
				}
				else{
					//error message is released
					$message = "Bro ur password is v wrong";
					echo "<p>$message</p><br>
					<a href = 'BSmemberpage.php'>Go Back</a>";
				}
				}
		}
		else{
			//gives an error if the user cannot be found
			$message = "User does not exist, please register if you have not.";
			echo "<p>$message</p><br>
			<a href = 'BSmemberpage.php'>Go Back</a>";
		}


?>
	?>
</div>
</body>
</html>