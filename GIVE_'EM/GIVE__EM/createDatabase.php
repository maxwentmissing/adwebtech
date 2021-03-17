<?php
include 'config.php'; //uses php of the config file to connect to database

//creates database
$sql = "CREATE DATABASE userInformation";
if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully";
} else {
    //echo "Error creating database: " . mysqli_error($conn);
}

//query to create users table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL ,
lastname VARCHAR(30) NOT NULL,
birthday date NOT NULL,
email VARCHAR(40) NOT NULL UNIQUE,
username VARCHAR(30) NOT NULL ,
password VARCHAR(100) NOT NULL,
securityQuestion VARCHAR(200) NOT NULL,
securityAnswer VARCHAR(50) NOT NULL,
score int(3),
passedQuiz boolean NOT NULL
)";

//selects database
mysqli_select_db($conn,'userInformation');

//runs query
if (mysqli_query($conn, $sql)) {
    //echo "Table userInformation created successfully";
} else {
    //echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT IGNORE INTO users (firstname, lastname, birthday, email, username, password,securityQuestion, securityAnswer, passedQuiz)
VALUES ('Dan', 'Doe', '1970-10-03', 'dan@gmail.com', 'ddoe','ddoe713!','Do you have a will to live','No lol :*)', false),('Bill', 'Boe', '1970-10-03', 'bill@gmail.com', 'bboe','bboe713!','Do you have a will to live','No lol :*)', false),('Jack', 'Joe', '1970-10-03', 'jack@gmail.com', 'jjoe','jjoe713!','Do you have a will to live','No lol :*)', false),('Hank', 'Hill', '1970-10-03', 'hank@gmail.com', 'hhill','hhill713!','Do you have a will to live','No lol :*)', false)";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>