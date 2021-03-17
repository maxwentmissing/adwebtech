<?php
//info used to access server
$servername = "localhost";
$username = "root";
$password = "";

// Creates connection
$conn = mysqli_connect($servername, $username, $password);

// Checks connection
if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>