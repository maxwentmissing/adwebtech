<html>
<head>
<?php include 'DATAheader.php';
	  include 'config.php';
	  mysqli_select_db($conn,'movingon');
	  $sql = "SELECT * FROM  post";
	  $result = mysqli_query($conn,$sql);
	  echo "<table id = 'example'>";
	  echo"<tr><th>ID</th><th>Title</th><th>Detail</th></tr>";
	  while($row = mysqli_fetch_assoc($result))
	  {
		  echo "<tr> <td>".$row['id']."</td> <td>".$row['title']."</td> <td>".$row['detail']."</td> </tr>";
	  }
	  echo "</table>";?>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        
    } );
} );
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body>
	<div class = "body">
	<?php
	
	?>
	</div>
</body>
</html>