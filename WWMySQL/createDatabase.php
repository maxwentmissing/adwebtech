<?php
include 'config.php'; //uses php of the config file to connect to database
$database = "WWMySQL";
//creates database
$sql = "CREATE DATABASE $database";
if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully";
} else {
    //echo "Error creating database: " . mysqli_error($conn);
}

//query to create users table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL UNIQUE,
age INT(3) NOT NULL

)";
runSQLQuery($conn, $database, $sql);

//query to create userRatings table
$sql = "CREATE TABLE userRatings (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL UNIQUE,
rating INT(3) NOT NULL

)";
runSQLQuery($conn, $database, $sql);

$sql = "INSERT IGNORE INTO users (name, age)
VALUES ('Dan', 21),('Bill', 30),('Jack', 25),('Hank', 34),('Daniel', 25),('Billy', 34),('Jackie', 21),('Danny', 34),('John', 30),('Johnathen', 30),('Johnny', 34),('Jann', 21), ('Jannet', 27),('Bob', 34),('Bobby', 30),('Boberty', 30),('Billybob', 34),('Jacklin', 21), ('Jacklan', 27)";
runSQLQuery($conn, $database, $sql);

$sql = "INSERT IGNORE INTO userRatings (name, rating)
VALUES ('Dan', 10),('Bill', 5),('Jack', 7),('Hank', 3),('Daniel', 2),('Billy', 8),('Jackie', 6),('Danny', 5),('John', 5),('Johnathen', 10),('Johnny', 3),('Jann', 9), ('Jannet', 7),('Bob', 7),('Bobby', 1),('Boberty', 2),('Billybob', 1),('Jacklin', 2), ('Jacklan', 7)";
runSQLQuery($conn, $database, $sql);
function runSQLQuery($conn, $database, $sql){
	//selects database
	mysqli_select_db($conn,$database);

	$result = mysqli_query($conn, $sql);
	//runs query
	return $result;

}
?>