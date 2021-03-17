<!--Eden Maxey April 9 2018-->
<html>
<head>
<style>
body {
	color : white;
	background-color: orange;
	text-align: center;
}
</style>
</head>

<body>
<?php
$name = $_POST['name'];
echo "Welcome to my scoring page, $name. Here is how you did: ";
$score = 0;
if($_POST["q1"] == '1') $score++;
if($_POST["q2"] == '1') $score++;
if($_POST["q3"] == '1') $score++;
if($_POST["q4"] == '1') $score++;
if($_POST["q5"] == '1') $score++;
if($_POST["q6"] == '2') $score++;

$fscore = floor(($score/6)*100);
echo "<br>You scored: $fscore"."%";

if ($fscore > 70) echo "<br><a href = 'cert.html'>Click here for your certificate </a>";
else echo "<br>You did not pass the quiz. Please refer to <a href = 'https://www.w3schools.com/php/'>This</a>";



?>
</body>

</html>