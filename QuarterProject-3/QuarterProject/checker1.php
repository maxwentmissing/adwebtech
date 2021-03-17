
<?php 
 
	//creating my own hash function
	//creating my own hash function
	function encrypt($text) 
	{
		$newText = 0; 
		$text = strval ($text); 
		for ($i = 0; $i< strlen($text); $i++)
		{
			$newText = implode(unpack('n', mb_convert_encoding($text, 'UTF-16BE', 'UTF-8')));
		}
		
		return $newText; 
	}
	
	
	session_start();

 //this is what creates everything!!!
	include "config.php";
	$un = $_POST['username'];
	$_SESSION["username"] = $un;
	$pw = encrypt($_POST['password']);
	mysqli_select_db($conn, 'login');
	$sql="SELECT * FROM register WHERE username='$un'AND password = '$pw'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 0) {//checks to see if username is not there
		header("Location: notregistered1.php");
		exit;			
	} 
	else {
		$sql="SELECT * FROM register WHERE username= '$un' AND haveTaken='no'"; //checks to see if the person has taken it yet
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) == 1){ //if havetaken=no, they take it
			header("Location: starter.php");
			exit;
		}
	}
			

?>
