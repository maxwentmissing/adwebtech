<html>
<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<?php include 'DATAheader.php';
	  include 'config.php';
	  mysqli_select_db($conn,'movingon');
	  $sql = "select * from post";
	  $result = mysqli_query($conn,$sql);?>
<script>
$(document).ready(function() {
    $('#table1').DataTable( {
        /*"processing": true,
        "serverSide": true,*/
        
    } );
} );
</script>
</head>

<body>
	<div class = "body">
	<?php
	$table = "<table id = 'table1'>";
	$table.="<thead><tr><th>ID</th><th>Title</th><th>Detail</th></tr></thead><tbody>";
	while($row = mysqli_fetch_assoc($result))
	{
		$table .= "<tr> <td>".$row['id']."</td> <td>".$row['title']."</td> <td>".$row['detail']."</td> </tr>";
	}
	$table .= "</tbody></table>";
	echo $table;
	?>
	</div>
</body>
</html>