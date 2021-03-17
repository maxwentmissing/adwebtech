<html>
<head>
<?php include 'BSheader.php';?>
<style>
</style>
</head>

<body>
<div class = "body">
<br>
	<div class = "container">
		<div class = "row">
			<div class = "login">
			<h1>LOGIN</h1>
			<br>
			<form action = "checker.php" method = 'post'>
				<div class = "form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control" id="username" name="username">
				</div>
				<br><br>
				<div class = "form-group">
					<label for="password">Username:</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<br><br>
				<input type = "submit">
			</form>
			<br>
			</div>
		</div>
	</div>
</div>
</body>
</html>