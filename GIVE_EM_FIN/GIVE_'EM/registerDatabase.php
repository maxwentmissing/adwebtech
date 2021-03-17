<!--file that adds the user's information to the database Trenton Lyke 12/8/2018-->
<?php

//starts session
session_start();
// Create database
include 'createDatabase.php';


//code runs if the user previously submit the form with information
if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['birthday']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['securityQuestion']) && isset($_POST['securityAnswer'])){
	//checks to see if the email is already in the data base
	$sql = "SELECT DISTINCT email FROM users where email = '$_POST[email]'";
    $result = mysqli_query($conn, $sql);
	$isEmailUnique = true;
	$_SESSION["isEmailUnique"] = "true"; 
	if (mysqli_num_rows($result) > 0) {
        $isEmailUnique = false;
		$_SESSION["isEmailUnique"] = "false"; 
    }
	
	
	
	
	//checks to see if the username is not already in the data base
	$sql = "SELECT DISTINCT username FROM users where username = '$_POST[username]'";
    $result = mysqli_query($conn, $sql);
	$isUsernameUnique = true;
	$_SESSION["isUsernameUnique"] = "true"; 
	if (mysqli_num_rows($result) > 0) {
        $isUsernameUnique = false;
		$_SESSION["isUsernameUnique"] = "false"; 
    }
	

	
	//checks to see if the password is not already in the data base
	$password = md5($_POST['password']);
	$sql = "SELECT DISTINCT password FROM users where password = '$password'";
    $result = mysqli_query($conn, $sql);
	$isPasswordUnique = true;
	$_SESSION["isPasswordUnique"] = "true"; 
	if (mysqli_num_rows($result) > 0) {
		$_SESSION["isPasswordUnique"] = "false"; 
        $isPasswordUnique = false;
    }
	
	
	
	//stores users registration info in the database if the username, password, and email are unique
	if($isUsernameUnique && $isPasswordUnique && $isEmailUnique){
		$sql = "INSERT INTO users (firstname, lastname, birthday, email, username, password,securityQuestion, securityAnswer, passedQuiz)
		VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[birthday]', '$_POST[email]', '$_POST[username]','$password','$_POST[securityQuestion]','$_POST[securityAnswer]', false)";

		if (mysqli_query($conn, $sql)) {
			//echo "New record created successfully";
		} else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		//puts user's info into the session
		$_SESSION["firstName"] = $_POST["firstName"];
		$_SESSION["lastName"] = $_POST["lastName"];
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["password"] = md5($_POST['password']);
		
		$_SESSION["passedQuiz"] = "false";
		
		//goes to the page to welcome the user
		header("Location: welcomeUser.php");
	}
}


?>