<html>
<head>
<title>Rad</title>
  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src ="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="Queriescss.css" media="screen">
  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
<link rel = "icon" href = "icon.gif">
<audio autoplay = "true" src = "audio1.mp3"></audio>
</head>


<script>
/*$(document).ready(function(){
	for(i=1;i<=10;i++)
	{
		div = "#query"+i;
		$(div).DataTable({
		});
	}
});*/
</script>

<body>

<!--navbar-->
<nav id = "navbarscroll" class="navbar navbar-inverse">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#Query1">Query1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#Query2">Query2</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query3">Query3</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query4">Query4</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query5">Query5</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query6">Query6</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query7">Query7</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query8">Query8</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query9">Query9</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#Query10">Query10</a>
    </li>
  </ul>
</nav>
<!--End Nav-->
<div data-spy="scroll" data-target="#navbarscroll">
<center>
<div id = "Query1">
<h2>Exercise 1</h2>
<h3>Question 1<h3>
<h4>Show all orders, sorted by total amount, the largest first, in descending order<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');

$sql = "SELECT * FROM orders ORDER BY totalAmount DESC";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query1'>
		<thead>
			<tr>
				<th>id</th>
				<th>orderDate</th>
				<th>customerID</th>
				<th>totalAmount</th>
				<th>orderNumber</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$id = $row["id"];
	$orderDate = $row["orderDate"];
	$customerID = $row["customerID"];
	$totalAmount = $row["totalAmount"];
	$orderNumber = $row["orderNumber"];
	
	$table .= "
		<tr>
			<td>$id</td>
			<td>$orderDate</td>
			<td>$customerID</td>
			<td>$totalAmount</td>
			<td>$orderNumber</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query1').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query2">
<h2>Exercise 2</h2>
<h3>Question 2<h3>
<h4>List the number of customers in each country<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT country, COUNT(*) AS num FROM customer GROUP BY country";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query2'>
		<thead>
			<tr>
				<th>Country</th>
				<th>Number of Customers</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$country = $row["country"];
	$num_of_cus = $row["num"];
	
	$table .= "
		<tr>
			<td>$country</td>
			<td>$num_of_cus</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query2').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query3">
<h2>Exercise 3</h2>
<h3>Question 3<h3>
<h4>List the number of customers in each country. Only include countries with more than 10 customers.<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT country, COUNT(*) AS num FROM customer GROUP BY country";
$result = mysqli_query($conn,$sql);
echo "$sql<br>";
echo "there are 3 records for this query";
$table = "<table id = 'query3'>
		<thead>
			<tr>
				<th>Country</th>
				<th>Number of Customers</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$country = $row["country"];
	$num_of_cus = $row["num"];
	
	if($num_of_cus >= 10){
	$table .= "
		<tr>
			<td>$country</td>
			<td>$num_of_cus</td>
		</tr>
	";}
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query3').DataTable({
	});
});
</script>
</center>
</div>

<center>
<div id = "Query4">
<h2>Exercise 4</h2>
<h3>Question 4<h3>
<h4>List total customers in each country. Display results with easy to understand column headers.<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT country, COUNT(*) AS num FROM customer GROUP BY country";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query4'>
		<thead>
			<tr>
				<th>Country</th>
				<th>Number of Customers</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$country = $row["country"];
	$num_of_cus = $row["num"];
	
	$table .= "
		<tr>
			<td>$country</td>
			<td>$num_of_cus</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query4').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query5">
<h2>Exercise 5</h2>
<h3>Question 5<h3>
<h4>List all orders with customer information<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT * FROM orders JOIN customer ON orders.customerID = customer.Id";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query5'>
		<thead>
			<tr>
				<th>orderNumber</th>
				<th>totalAmount</th>
				<th>firstName</th>
				<th>lastName</th>
				<th>city</th>
				<th>country</th>
				
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$orderNumber = $row["orderNumber"];
	$totalAmount = $row["totalAmount"];
	$firstName = $row["firstName"];
	$lastName = $row["lastName"];
	$city = $row["city"];
	$country = $row["country"];
	
	$table .= "
		<tr>
			<td>$orderNumber</td>
			<td>$totalAmount</td>
			<td>$firstName</td>
			<td>$lastName</td>
			<td>$city</td>
			<td>$country</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query5').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query6">
<h2>Exercise 6</h2>
<h3>Question 6<h3>
<h4>List all suppliers in reverse alphabetical order<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT * FROM supplier ORDER BY companyName DESC";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query6'>
		<thead>
			<tr>
				<th>id</th>
				<th>companyName</th>
				<th>contactName</th>
				<th>city</th>
				<th>country</th>
				<th>phone</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$id = $row["id"];
	$companyName = $row["companyName"];
	$contactName = $row["contactName"];
	$city = $row["city"];
	$country = $row["country"];
	$phone = $row["phone"];
	
	$table .= "
		<tr>
			<td>$id</td>
			<td>$companyName</td>
			<td>$contactName</td>
			<td>$city</td>
			<td>$country</td>
			<td>$phone</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query6').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query7">
<h2>Exercise 7</h2>
<h3>Question 7<h3>
<h4>Copy all Canadian suppliers into the Customer table<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sqll = "INSERT INTO customer (firstName, lastName, city, country, phone)
		SELECT LEFT (contactName, CHARINDEX(' ',contactName)-1) AS firstName,
			SUBSTRING(contactName, CHARINDEX(' ',contactName) + 1, 100) AS lastName,
		city, country, phone
		FROM supplier WHERE country = 'Canada'";
$resultt = mysqli_query($conn,$sqll);
$sql = "SELECT * FROM customer WHERE country = 'Canada'";
$result = mysqli_query($conn, $sql);
$rownum = mysqli_num_rows($result);
echo "$sqll<br>$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query7'>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>city</th>
				<th>country</th>
				<th>phone</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$firstName = $row["firstName"];
	$lastName = $row["lastName"];
	$city = $row["city"];
	$country = $row["country"];
	$phone = $row["phone"];
	
	if($country = 'Canada'){
	$table .= "
		<tr>
			<td>$firstName</td>
			<td>$lastName</td>
			<td>$city</td>
			<td>$country</td>
			<td>$phone</td>
		</tr>
	";}
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query7').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query8">
<h2>Exercise 8</h2>
<h3>Question 8<h3>
<h4>List all orders that not between $50 and $15000<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT * FROM orders WHERE NOT (totalAmount >= 50 AND totalAmount <= 15000)";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query8'>
		<thead>
			<tr>
				<th>id</th>
				<th>orderDate</th>
				<th>customerID</th>
				<th>totalAmount</th>
				<th>orderNumber</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$id = $row["id"];
	$orderDate = $row["orderDate"];
	$customerID = $row["customerID"];
	$totalAmount = $row["totalAmount"];
	$orderNumber = $row["orderNumber"];
	
	$table .= "
		<tr>
			<td>$id</td>
			<td>$orderDate</td>
			<td>$customerID</td>
			<td>$totalAmount</td>
			<td>$orderNumber</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query8').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query9">
<h2>Exercise 9</h2>
<h3>Question 9<h3>
<h4>Display the average price of all products<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT AVG(unitPrice) AS num FROM product";
$result = mysqli_query($conn,$sql);
$rownum = mysqli_num_rows($result);
echo "$sql<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query9'>
		<thead>
			<tr>
				<th>Average Price of All Products</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result)){
	$avgprice = $row["num"];
	
	$table .= "
		<tr>
			<td>$avgprice</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query9').DataTable({
	});
});
</script>
</div>
</center>

<center>
<div id = "Query10">
<h2>Exercise 10</h2>
<h3>Question 10<h3>
<h4>Display all products of two companies<h4>
<h3>Answer</h3>
<?php
include("config.php");
mysqli_select_db($conn,'inventorychain');
$sql = "SELECT * FROM product WHERE productName LIKE '%Sir Rodney%'";
$sqll = "SELECT * FROM product WHERE productName LIKE '%Chef Anton%'";
$result = mysqli_query($conn,$sql);
$resultt = mysqli_query($conn,$sqll);
$rownum = mysqli_num_rows($result);
echo "$sql<br>$sqll<br>";
echo "there are $rownum records for this query";
$table = "<table id = 'query10'>
		<thead>
			<tr>
				<th>Sir Rodney's Products</th>
				<th>Chef Anton's Products</th>
			</tr>
		</thead>
		<tbody>";
while($row = mysqli_fetch_assoc($result) AND $roww = mysqli_fetch_assoc($resultt)){
	$sirrod = $row["productName"];
	$chefant = $roww["productName"];
	
	$table .= "
		<tr>
			<td>$sirrod</td>
			<td>$chefant</td>
		</tr>
	";
}
$table .= "</tbody></table>";
echo $table;
?>
<script>
$(document).ready(function(){
	$('#query10').DataTable({
	});
});
</script>
</div>
</center>


</div>

</div>
</body>
</html>