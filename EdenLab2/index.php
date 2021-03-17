<html>
<head>
<script type = "text/javascript" src = "confirmName.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body>
<div class = "big">
<h1>Welcome to Lab2!</h1>
</div>

<form>
<label>Please enter your name here</label>
<input name="name" type = "text" id = "name" onkeyup="checkName()" required><span id="confirmMessage" class='warning'></span>
<input type = "submit" name ="submit">

<?php include 'gettable.php'?>
</form>

</body>
</html>