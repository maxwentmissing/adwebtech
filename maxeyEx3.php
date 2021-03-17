<!--Eden Maxey April 9 2018-->
<html>
<head>
<style>
body {
	color : white;
	background-color: pink;
	text-align: center;
}

ul {
	list-style-position:inside;
}


</style>
</head>

<body>
<center>
<?php
echo "<h1>My Array Exercises</h1>";
echo "<b>---------------------------------Exercise 1---------------------------------<br></b>";
echo "<h2>How's the Weather?</h2>";
$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6].
Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].<br>";

echo "<br><b>---------------------------------Exercise 2---------------------------------<br></b>";
echo "<h2>Large Cities</h2>";
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

echo "This is printing the array using print_r<br>";
print_r($cities);
echo"<br><br>";
echo "This is printing the array using var_dump and foreach()<br>";
foreach($cities as $c){
	echo var_dump($c). "<br>";
}
echo"<br>";
echo "These are the ten largest cities chosen randomly out of many larger cities, printed using foreach()";
echo"<br>";
foreach($cities as $c){
	echo($c . ", ");
}

echo"<br><br>";

echo"These are the cites printed as a bulleted list using foreach loop after sorting the array";
sort($cities);
echo "<ul>";
foreach($cities as $c){
	echo("<li>$c</li>");
}
echo "<ul>";

echo"<br><br>";

echo "These are the cities in ascending order after adding four new cities, again using a foreach loop";
array_push($cities, "Beijing", "Los Angeles", "Osaka", "Detroit");
sort($cities);
echo "<ul>";
foreach($cities as $c){
	echo("<li>$c</li>");
}
echo "<ul>";
?>
</body>
</html>