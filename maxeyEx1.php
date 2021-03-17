<!--Eden Maxey April 2 2018-->
<html>
<head>
<style>
body {
	color : blue;
	background-color: yellow;
}
</style>
</head>

<body>
<center>
<?php
//EX 1
$name = "Mario";
echo "I am $name";
echo "<br>";
echo "<br>";

//EX 2/3
if($name == "Mario"){
	print "I am Mario";
} else{
	print "No, no, no. That is not my name!";
}
echo "<br>";
echo "<br>";

//EX 4
$variable = "8";
echo "Value is now $variable";
echo "<br>";
$variable = "10";
echo "Add 2. Value is now $variable";
echo "<br>";
$variable = "6";
echo "Subtract 4. Value is now $variable";
echo "<br>";
$variable = "30";
echo "Multiply by 5. Value is now $variable";
echo "<br>";
$variable = "10";
echo "Divide by 3. Value is now $variable";
echo "<br>";
$variable = "11";
echo "Increment value by one. Value is now $variable";
echo "<br>";
$variable = "10";
echo "Decrement value by one. Value is now $variable";
echo "<br>";
echo "<br>";

//EX 5
$whatsit = gettype('3');
echo "Value is $whatsit";
echo "<br>";
$whatsit = gettype(3.);
echo "Value is $whatsit";
echo "<br>";
$whatsit = gettype(true);
echo "Value is $whatsit";
echo "<br>";
$whatsit = gettype(3);
echo "Value is $whatsit";
echo "<br>";
$whatsit = gettype(null);
echo "Value is $whatsit";
echo "<br>";

?>
</body>
</html>