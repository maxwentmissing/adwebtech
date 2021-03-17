<?php
include_once ('config.php');
/*if(mysqli_select_db($conn, 'Grades')){
	echo "Database exists";
}else{
	echo "Database does not exist";
	if (mysqli_query($conn, "CREATE DATABASE Grades"))
	{
		echo "Database created<br />";
	}
	else
	{
		echo "Error creating database : <br />" . mysqli_error($conn);
	}
}*/

$fname = ($_POST["fname"]);
$lname = ($_POST["lname"]);
$date = ($_POST["date"]);
$score = ($_POST["score"]);

mysqli_select_db($conn, "Grades");
$sql = "CREATE TABLE IF NOT EXISTS Quizzes
(
id int Not Null auto_increment, primary key(id),
FirstName varchar(30),
LastName varchar(30),
dateoftest date,
score int)";

mysqli_query($conn, $sql);

mysqli_query($conn, "INSERT IGNORE INTO Quizzes (FirstName, LastName, dateoftest, score)
			SELECT '$fname', '$lname', '$date', '$score' FROM DUAL
			WHERE NOT EXISTS (SELECT * FROM Quizzes WHERE FirstName = '$fname' AND LastName = '$lname')
			LIMIT 1");
			//VALUES ('$fname' '$lname', '$date', '$score'));
			//!!can replace VALUES for SELECT-LIMIT 1
$result = mysqli_query($conn, "SELECT * FROM Quizzes");
echo "<h1>Records in table, 'Quizzes': </h1>";
while($row = mysqli_fetch_array($result))
  {
  echo "<br />";
  echo "FirstName: ".$row['FirstName'] . "   LastName: " . $row['LastName']. "    Date of Test: " . $row['dateoftest']. "   Score: " . $row['score'];
  echo "<br />";
  }

$result = mysqli_query($conn, "SELECT * FROM Quizzes where score <70");
echo "<h1>Records in table, 'Quizzes' with a score of less than 70: </h1>";
while($row = mysqli_fetch_array($result))
  {
  echo "<br />";
  echo "FirstName: ".$row['FirstName'] . "   LastName: " . $row['LastName']. "    Date of Test: " . $row['dateoftest']. "   Score: " . $row['score'];
  echo "<br />";
  }

$result = mysqli_query($conn, "SELECT * FROM Quizzes where dateoftest <'2017-11-28'");
echo "<h1>Records in table, 'Quizzes' taken before 11/28/2017 </h1>";
while($row = mysqli_fetch_array($result))
  {
  echo "<br />";
  echo "FirstName: ".$row['FirstName'] . "   LastName: " . $row['LastName']. "    Date of Test: " . $row['dateoftest']. "   Score: " . $row['score'];
  echo "<br />";
  }

?>