<html>
<head>
<style>
body{
	text-align: center;
	background-color: purple;
	color: white;
}
</style>
</head>
<?php
	$tireprice = $_POST['tires'] * 75.56;
	$oilprice = $_POST['oil'] * 25.89;
	$sparkprice = $_POST['sparks'] * 49.99;
	$pb4tax = ($tireprice + $oilprice + $sparkprice);
	$tax = ($pb4tax * 0.1);
	$p = ($pb4tax + $tax);
	//retrieves user input
	
	while($_POST['tires'] <= 0){
		if($_POST['oil'] <= 0){
			if($_POST['sparks'] <= 0){
				echo ("You ordered nothing!");
				break;
			}break;
		}break;
	}
	//for if no input is entered
?>
<body>
<h1>Order Information</h1>
<br>
Items ordered: <?php echo ($_POST['tires'] + $_POST['oil'] + $_POST['sparks'])?>
<br>
Number of tires: <?php echo $_POST['tires'] ?>
<br>
Number of oil bottles: <?php echo $_POST['oil'] ?>
<br>
Number of spark plugs: <?php echo $_POST['sparks'] ?>
<br><br>
Subtotal: <?php echo $pb4tax ?>
<br>
Total with tax: <?php echo $p ?>
<br>
Thanks for your order!
<body>
</html>