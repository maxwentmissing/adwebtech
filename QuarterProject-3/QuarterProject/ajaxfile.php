		<?php
		include 'config.php';

		## Read value
		$draw = $_POST['draw'];
		$row = $_POST['start'];
		$rowperpage = $_POST['length']; // Rows display per page
		$columnIndex = $_POST['order'][0]['column']; // Column index
		$columnname = $_POST['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
		$searchValue = $_POST['search']['value']; // Search value

		## Custom Field value
		$name = $_POST['name'];
		$price = $_POST['price'];
		$location = $_POST['location'];
		$type = $_POST['type'];
		$flavor = $_POST['flavor'];

		## Search 
		$searchQuery = " ";
		if($name != ''){
		   $searchQuery .= " and (name like '%".$name."%' ) ";
		}
		if($location != ''){
		   $searchQuery .= " and (location ='".$location."') ";
		}
		
		if($flavor != ''){
		   $searchQuery .= " and (flavor ='".$flavor."') ";
		}
		
		if($type != ''){
		   $searchQuery .= " and (type ='".$type."') ";
		}
		
		if($price != ''){
		   $searchQuery .= " and (price ='%".$price."%') ";
		}
		
		if($searchValue != ''){
		   $searchQuery .= " and (name like '%".$searchValue."%' or 
			  flavor like '%".$searchValue."%' or 
			  price like '%".$searchValue."%' or 
			  location like '%".$searchValue."%' or 
			  type like'%".$searchValue."%' ) ";
		}

		## Total number of records without filtering
		$sel = mysqli_query($conn,"select count(*) as allcount from products");
		$records = mysqli_fetch_assoc($sel);
		$totalRecords = $records['allcount'];

		## Total number of records with filtering
		$sel = mysqli_query($conn,"select count(*) as allcount from products WHERE 1 ".$searchQuery);
		$records = mysqli_fetch_assoc($sel);
		$totalRecordwithFilter = $records['allcount'];

		## Fetch records
		$empQuery = "select * from products WHERE 1 ".$searchQuery." order by ".$columnname." ".$columnSortOrder." limit ".$row.",".$rowperpage;
		$empRecords = mysqli_query($conn, $empQuery);
		$data = array();

		while ($row = mysqli_fetch_assoc($empRecords)) {
		   $data[] = array(
			 "name"=>$row['name'],
			 "location"=>$row['location'],
			 "price"=>$row['price'],
			 "type"=>$row['type'],
			 "flavor"=>$row['flavor']
		   );
		}

		## Response
		$response = array(
		  ##"draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data
		);

		echo json_encode($response); 
?>