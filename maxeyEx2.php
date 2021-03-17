<!--Eden Maxey 4/4/18-->
<html>
<head>
<style>
body{
	background-color: grey;
	color: white;
	text-align: center;
}
</style>
</head>

<body>
<?php
//EX 1
function number(){
	$randnum = rand(1,7);

	switch($randnum){
		case 1:
			echo "The number generated is $randnum. Today is Sunday";
			break;
		case 2:
			echo "The number generated is $randnum. Today is Monday";
			break;
		case 3:
			echo "The number generated is $randnum. Today is Tuesday";
			break;
		case 4:
			echo "The number generated is $randnum. Today is Wedneday";
			break;
		case 5:
			echo "The number generated is $randnum. Today is Thursday";
			break;
		case 6:
			echo "The number generated is $randnum. Today is Friday";
			break;
		case 7:
			echo "The number generated is $randnum. Today is Saturday";
			break;
	}
}
number();

//EX 2
function reverse(){
	$string = "This is WebTech.";
	echo "<br><br>This is the original string: $string <br>";
	$string = strrev($string);
	echo "This is the reversed string: $string <br><br>";
}
reverse();

//EX 3
$x = 1;
	while($x <= 9){
		echo "abc ";
		$x++;
	}
echo "<br><br>";
$y = 1;	
	do{
		echo "xyz ";
		$y++;
	} while ($y <= 9);
echo "<br><br>";
$z = 1;
	for($z = 1; $z <= 9; $z++){
		echo "$z ";
	}
echo "<br><br>";
$q = 1;
$s = array("K", "A", "B", "C", "D", "E", "F");
	for($q = 1; $q <= 6; $q++){
		echo "$q. Item $s[$q] <br>";
	}
?>
</body>