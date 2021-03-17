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
<?php
include "maxeyEx5header.php";
echo "<b>include()</b><br>";
echo "Produces error message and continue script.";
echo "<br><b>require()</b><br>";
echo "Produces fatal error and stops script";
include "maxeyEx5footer.php";
?>
</body>
</html>