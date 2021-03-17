<?php
include_once('config.php');

$sql = "CREATE DATABASE employee";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn, 'myEmployees');

$sql1 = mysqli_query($conn,"CREATE TABLE employees (
emp_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
birth_date DATE,
firstname VARCHAR(20),
lastname VARCHAR(20),
gender ENUM('M','F'),
hire_date DATE
)";
$createtable = mysqli_query($conn, $sql1);

$sql2 = mysqli_query($conn,"CREATE TABLE salaries (
emp_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
salary INT(11),
from_date DATE,
to_date DATE
)";
$createtable = mysqli_query($conn, $sql2);

$sql3 = mysqli_query($conn,"CREATE TABLE titles (
emp_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50),
from_date DATE,
to_date DATE
)";
$createtable = mysqli_query($conn, $sql3);

$sql4 = mysqli_query($conn,"CREATE TABLE dept_manager (
dept_no CHAR(4),
emp_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
from_date DATE,
to_date DATE
)";
$createtable = mysqli_query($conn, $sql4);

$sql5 = mysqli_query($conn,"CREATE TABLE dept_emp (
emp_no INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
dept_no CHAR(4),
from_date DATE,
to_date DATE
)";
$createtable = mysqli_query($conn, $sql5);

$sql6 = mysqli_query($conn,"CREATE TABLE departments (
dept_no CHAR(4),
dept_name VARCHAR(40)
)";
$createtable = mysqli_query($conn, $sql6);

phpmyadmin input employeeData.sql;



mysqli_query($conn, 'myEmployees');
$result = mysqli_query($conn, "SELECT DISTINCT lastName FROM employees");
echo "<table>";
echo"<tr><th>Last Name</th></tr>";
while($row = mysqli_fetch_array($result)
{
	echo "<tr><td>".$row['last_name']."</td></tr>";
}
echo"</table>"

$result = mysqli_query($conn, "SELECT first_name, last_name, salary 
 employees join salaries on employees.emp_no = salaries.emp_no");
echo"<table>"
echo"<tr><th>FirstName</th><th>LastName</th><th>Salary</th><th>PF</th></tr>";
while($row = mysqli_fetch_array($result){
	echo"<tr>";
	echo "<td>".$row['first name']."</td><td>".$row['last name'].
	"</td><td>".$row['salary']."</td><td>".$row['salary']*0.15.
	"</td></tr>";
	echo"<br>";
}
echo"</table>"

if($result){
	while($row = mysqli_fetch_array($result)){
	echo "firstName".$row['firstName']."lastName".$row['lastname']."salary".$row['salary'];
	"PF" 0.15*$row['salary']."<br>"
	}
}

echo"<h1>TOTAL SALARIES</h1>";
$result = mysqli_query($conn, 'SELECT sum(salary) as total from salaries');
echo"<table>"
echo"<tr><th>Salary</th></tr>";
while($row = mysqli_fetch_array($result)){
	echo"<tr><td>".$row['total']."</td></tr>";
}
echo"<table>";

echo"<h1>DIFFERENT JOBS</h1>";
$result = mysqli_query($conn, 'SELECT COUNT(DISTINCT tite) as title from titles';
echo"<table>";
echo"<tr><th>Job titles</th></tr>";
while($row = mysqli_fetch_array($result)){
	echo"<tr><td>".$row['title']."</td></tr>";
}
echo"<table>";


echo"<h1>SALARY NOT 40000-60000</h1>";
$result = mysqli_query($conn, 'SELECT first_name, last_name, ID FROM employees';
echo"<table>";
echo"<tr><th>Job titles</th></tr>";
while($row = mysqli_fetch_array($result)){

	echo "<tr><td>".$row['first name']."</td><td>".$row['last name'].
	"</td><td>".$row['salary']."</td><td>";
}
echo"<table>";


$result = mysqli_query($conn, 'SELECT first_name, last_name, salary FROM employees join salaries on employees.emp_no = salaries.emp_no where salary NOT BETWEEN 40000 AND 60000';
echo"<table>";
echo"<tr><th>Job titles</th></tr>";
while($row = mysqli_fetch_array($result)){

	echo "<tr><td>".$row['first name']."</td><td>".$row['last name'].
	"</td><td>".$row['salary']."</td><td>";
}
echo"<table>";
?>
