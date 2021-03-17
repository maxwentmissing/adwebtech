<?php
include_once ('LABconfig.php');
if(mysqli_select_db($conn, 'Guestbook')){
	echo "Database exists";
}else{
	echo "Database does not exist";
	if (mysqli_query($conn, "CREATE DATABASE Guestbook"))
	{
		echo "Database created<br />";
	}
	else
	{
		echo "Error creating database : <br />" . mysqli_error($conn);
	}
}

$name = ($_POST["name"]);
$email = ($_POST["email"]);
$date = ($_POST["date"]);
$message = ($_POST["message"]);

mysqli_select_db($conn, "Guestbook");
$sql = "CREATE TABLE IF NOT EXISTS Guestbook
(
id int Not Null auto_increment, primary key(id),
name varchar(30),
email varchar(30),
date date,
message varchar(500))";

if (mysqli_query($conn, $sql)) {
    echo "Table Guestbook created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_query($conn, $sql);

mysqli_query($conn, "INSERT INTO Guestbook (name, email, date, message)
			VALUES ('$name', '$email', '$date', '$message')");
$result = mysqli_query($conn, "SELECT * FROM Guestbook");
echo "<center><h1>Guests</h1></br>";
while($row = mysqli_fetch_array($result)){
  echo "<br /><center>";
  echo " ID: ".$row['id'] . "</br>" . "  Name: ".$row['name'] . "</br>" . "   Email: " . $row['email']. "</br>".  "  Date: " . $row['date']. "</br>".  " Message: " . $row['message'];
  echo "<br />";
  }
 echo "<center><br><br><a href = 'LABindex.php'>Sign Guestbook</a>";
?>