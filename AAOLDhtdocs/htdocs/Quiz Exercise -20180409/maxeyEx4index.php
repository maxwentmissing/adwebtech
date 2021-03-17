<!--Eden Maxey April 9 2018-->
<html>
<head>
<style>
body {
	color : white;
	background-color: orange;
	text-align: center;
}

input{
	vertical-align: middle;
}
</style>
</head>

<body>
<?php
echo "<img src= 'rosette.gif'><h1>Certification</h1><img src= 'rosette.gif'><br>";
echo "You too can earn your (semi) highly respected PHP certification from the world famous-ish Fictional Institute of PHP Certification<br>";
echo "<br>Simply answer the questions below:<br>";
echo "<br><form action='maxeyEx4score.php' method='post'>
	Your Name: <input type = 'text' name = 'name'>
	<br>
	<br>What does PHP statement echo do?<br>
	1.<input type = 'radio' name = 'q1' value = '1'> Outputs strings<br>
	2.<input type = 'radio' name = 'q1' value = '2'> Adds two numbers together<br>
	3.<input type = 'radio' name = 'q1' value = '3'> Makes cheese<br>
	<br>
	<br>What does the PHP function cos() do?<br>
	1.<input type = 'radio' name = 'q2' value = '1'>Calculates cosine in radians<br>
	2.<input type = 'radio' name = 'q2' value = '2'>Calculates tangent in radians<br>
	3.<input type = 'radio' name = 'q2' value = '3'>It is not a PHP function. It is lettuce<br>
	<br>
	<br>What does the PHP function mail() do?<br>
	1.<input type = 'radio' name = 'q3' value = '1'>Sends a mail message<br>
	2.<input type = 'radio' name = 'q3' value = '2'>Checks for new mail<br>
	3.<input type = 'radio' name = 'q3' value = '3'>Toggles PHP between male and female mode<br>
	<br>
	<br>What class is this for?<br>
	1.<input type = 'radio' name = 'q4' value = '1'>WebTech<br>
	2.<input type = 'radio' name = 'q4' value = '2'>CSI<br>
	3.<input type = 'radio' name = 'q4' value = '3'>Moving and Learning<br>
	<br>
	<br>What is the return value of echo?<br>
	1.<input type = 'radio' name = 'q5' value = '1'>None.<br>
	2.<input type = 'radio' name = 'q5' value = '2'>1<br>
	3.<input type = 'radio' name = 'q5' value = '3'>Infinite<br>
	<br>
	<br>What is the return value of print?<br>
	1.<input type = 'radio' name = 'q6' value = '1'>None.<br>
	2.<input type = 'radio' name = 'q6' value = '2'>1<br>
	3.<input type = 'radio' name = 'q6' value = '3'>Infinite<br>
	<input type = 'image' src = 'certify-me.gif' alt = 'submit'>";
?>
</body>
</html>