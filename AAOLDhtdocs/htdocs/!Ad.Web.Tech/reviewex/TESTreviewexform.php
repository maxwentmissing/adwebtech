<!--Eden Maxey-->
<html>
<head>
	<style>
		body{
			background-color:pink;
			color:white;
		}
		h1{
			text-align: center;
		}

		.reservation{
			margin: 20px;
			text-align: center;
			border-style: solid;
			border-width: 5px;
			border-color: white;
		}

		.pdetails{
			margin: 10px;
			text-align: center;
			border-style: dotted;
			border-width: 5px;
			border-color: white;
			background-color: #f788b0;
		}
		.binfo{
			margin: 10px;
			text-align: center;
			border-style: dotted;
			border-width: 5px;
			border-color: white;
			background-color: #f788b0;
		}
			.addbtn{
			}
			.removebtn{
			}
		.finfo{
			margin: 10px;
			text-align: center;
			border-style: dotted;
			border-width: 5px;
			border-color: white;
			background-color: #f788b0;
		}
		.termsmail{
			margin: 10px;
			text-align: center;
			border-style: dotted;
			border-width: 5px;
			border-color: white;
			background-color: #f788b0;
		}
		.td{
			text-align: center;
		}
		.tr{
			text-align: center;
		}
		.table{
			text-align: center;
		}
		.label{
			text-align: center;
		}
		.button{
			text-align: center;
			padding: 5px;
			background-color: #f24684;
			color: white;
			font-size: 15px;
			border-radius:12px;
		}
	</style>
</head>

<body>
<h1>Library Book Reservation</h1>


<script type = "text/javascript" src = "TESTreviewexjavascript.js"></script><!--connects js file-->


<div class = "reservation">


<form action = "TESTreviewexphp.php" method = "post"><!--connects other php file-->
	<br>
	<div class = "pdetails">
		<h2>Patron Details</h2>
		<label>Name</label><input type = "text" name = "name" required>
		<label>Phone Number</label><input type = "text" name = "pnumber" id = "pnumber" required>
		<label>Repeat Phone Number</label><input type = "text" name = "rpnumber" id = "rpnumber" required>
		<br><br><br>
	</div>
	<br>
	<div class = "binfo">
		<h2>Book Information</h2>
		<input type = "button" class = "button" onclick = "addrow('responses')" value = "Add Book"><!--add another book-->
		<input type = "button" class = "button" onclick = "delRow()" value = 'Remove Book'><!--delete book-->
		<br>
		<table id = "responses"><!--response table to be used in js file-->
			<tr>
				<td><input type = "checkbox" name = "checks[]" id = "check"></td>
				
				<td><label>Book Name</label></td>
				<td><input type = "text" name = "bnames[]" value = "QED"></td>
				
				<td><label>Book Genre</label></td>
				<td><input type = "text" name = "genre[]" value = "Physics"></td>
				
				<td><label>Checkout from</label></td>
				<td><input type = "date" name = "fdate[]" id = "fdate"></td>
				
				<td><label>Checkout until</label></td>
				<td><input type = "date" name = "udate[]" id = "udate"></td>
				
				<td><label>Branch</label></td>
				<td><select name = "branch[]">
					<option value = "School"> School</option>
					<option value = "Downtown">Downtown</option>
					</select></td>
			</tr>
		</table>
		<br>
	</div>
	<br>
	<div class = "finfo">
		<h2>Further Information</h2>
		<p>The identification details are required during the checkout. Each patron should have any of the identity cards(Library Card/PAN Card/Driving License/Photo ID card issued by Central/State Gvt/Student ID card with photograph) during the checkout. </p>
	</div>
	<br>
	<div class = "termsmail">
		<h2> Terms and Mailing</h2>
		<input type = "checkbox" required>I accept the Terms and Conditions
		<br>
		<input type = "checkbox">I want to receive personalized offers by your library
		<br><br>
	</div>
	<br>
	<center><input type="submit" value="Submit"> <input type = "reset" value = "Start Over"></center>
</form>
</div>
</body>