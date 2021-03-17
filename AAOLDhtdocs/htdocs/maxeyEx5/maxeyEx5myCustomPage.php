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
</style>
</head>

<body>
<center>
<h1>Please choose a number between 0 and 255 for each of the following</h1>
<form method = "get" action = "maxeyEx5CustomPage.php">
	Red:<input type="number" min="0" max="255" name = "red">
	<br>
	Blue:<input type="number" min="0" max="255" name = "blue">
	<br>
	Green:<input type="number" min="0" max="255" name = "green">
	<br><br>
	<input type="submit" value="submit" onclick = "maxeyEx5CustomPage.php">
</form>
</body>
</html>