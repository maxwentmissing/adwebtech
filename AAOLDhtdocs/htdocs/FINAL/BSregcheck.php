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
	setcookie('username', $_POST['user_name']);
	setcookie('pass', $_POST['pass_word']);
	setcookie('type', $_POST['user_type']);
	$user = $_POST['user_name'];
	$pass = $_POST['pass_word'];
	//all the variables are initialized
	$usertype = $_POST['user_type'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	mysqli_select_db($conn, 'radmembers');
	//checks if student or staff
	if($usertype == 'member'){
		$checkuser = mysqli_query($conn, "SELECT * from member where user_name = '$user' ");
		if (mysqli_num_rows($checkuser) == 1){
			//gives an error if the name already exists
			$message = "Username already exists";
			echo "<p>$message</p><br>
			<a href = 'BSmemberpage.php'>Go Back</a>";
		}
		else{
			if($usertype == 'member'){
				//if it all matches the account is created
				mysqli_query($conn, "INSERT INTO 	member(member_no, first_name, last_name, user_name, pass_word) VALUES ('$firstname', '$lastname', '$user', '$pass')");
				setcookie('type', $usertype);
				setcookie('firstname',$firstname);
				header("Location:BStagsradindex.php");
			}
		}
	}
	?>
</div>
</body>
</html>