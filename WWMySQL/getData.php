<?php
class data {
    function data($userList, $ageList, $ratingList, $jUserList, $jUserList4) {
        $this->userList = $userList;
		$this->ageList = $ageList;
		$this->ratingList = $ratingList;
		$this->jUserList= $jUserList;
		$this->jUserList4= $jUserList4;
    }
}
class user {
    function user($name, $age, $rating) {
        $this->name = $name;
		$this->age = $age;
		$this->rating = $rating;
    }
}
class ageCount {
    function ageCount($age, $numberOfPeople) {
		$this->age = $age;
		$this->numberOfPeople = $numberOfPeople;
    }
}
class ratingCount {
    function ratingCount($rating, $numberOfPeople) {
		$this->rating = $rating;
		$this->numberOfPeople = $numberOfPeople;
    }
}
$dataArray = array();
include 'createDatabase.php';
$sql = "SELECT * FROM users INNER JOIN userRatings ON users.name=userRatings.name;";
$result = runSQLQuery($conn, $database, $sql);
$userArray = array();
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		array_push($userArray, new user($row["name"], $row["age"], $row["rating"]));
	}
}

$sql = "SELECT age, COUNT(*) FROM users GROUP BY age;";
$result = runSQLQuery($conn, $database, $sql);
$ageCountArray = array();
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		array_push($ageCountArray, new ageCount($row["age"], $row['COUNT(*)']));
	}
}

$sql = "SELECT rating, COUNT(*) FROM userRatings GROUP BY rating;";
$result = runSQLQuery($conn, $database, $sql);
$ratingCountArray = array();
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		array_push($ratingCountArray, new ratingCount($row["rating"], $row['COUNT(*)']));
	}
}
$sql = "SELECT * FROM users INNER JOIN userRatings ON users.name=userRatings.name WHERE users.name LIKE 'j%';";
$result = runSQLQuery($conn, $database, $sql);
$jUserArray = array();
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		array_push($jUserArray, new user($row["name"], $row["age"], $row["rating"]));
	}
}
$sql = "SELECT * FROM users INNER JOIN userRatings ON users.name=userRatings.name WHERE users.name LIKE 'j___';";
$result = runSQLQuery($conn, $database, $sql);
$jUserArray4 = array();
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)) {
		array_push($jUserArray4, new user($row["name"], $row["age"], $row["rating"]));
	}
}
$rawJSONData = new data($userArray,$ageCountArray,$ratingCountArray, $jUserArray, $jUserArray4);
echo json_encode($rawJSONData );

?>
