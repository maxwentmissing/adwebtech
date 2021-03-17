<!--Eden Maxey April 12 2018-->
<html>
<head>
<style>
body {
	color : #c0a7ef;
	background-color: #dce5ea;
	text-align: center;
	font-family: Arial;
}

.colorblock{
	text-align: center;
	height: 500;
	width:500;
}
</style>
</head>

<body>
<center>
<?php
$red = $_GET['red'];
$blue = $_GET['blue'];
$green = $_GET['green'];
echo "Your entered values are:<br>";
echo "Red: $red, Blue: $blue, Green:$green";
echo "<div class = colorblock style = 'background-color: rgb($red, $green, $blue); background-image: url(image.gif); border: 5px solid rgb($green, $blue, $red);'></div>";
echo "Wow! What a prize!";
?>
</body>
</html>