<?php
//info from form, many arrays
$name = $_POST["name"];
$pnumber = $_POST["pnumber"];
$rpnumber = $_POST["rpnumber"];
$bnames = $_POST["bnames"];
$genre = $_POST["genre"];
$fdate = $_POST["fdate"];
$udate = $_POST["udate"];
$branch = $_POST["branch"];

if($pnumber !== $rpnumber)//if numbers don't match
	{
		exit(
		'<html>
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
					text-align: center;
				}

				.pdetails{
					text-align: center;
				}
				.binfo{
					text-align: center;
				}
					.addbtn{
					}
					.removebtn{
					}
				.finfo{
					text-align: center;
				}
				.termsmail{
					text-align: center;
				}

			</style>
		</head>
		<body>
		<center>
		Numbers do not match 
		<br> 
		<a href = "TESTreviewexform.php">Go Back</a>
		</center>
		</body>
		</html>');//tells user the error and offers link back
}
elseif($udate < $fdate)//if dates don't make sense
	{
		exit(
		'<html>
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
					text-align: center;
				}

				.pdetails{
					text-align: center;
				}
				.binfo{
					text-align: center;
				}
					.addbtn{
					}
					.removebtn{
					}
				.finfo{
					text-align: center;
				}
				.termsmail{
					text-align: center;
				}

			</style>
		</head>
		<body>
		<center>
		Dates incorrect 
		<br> 
		<a href = "TESTreviewexform.php">Go Back</a>
		</center>
		</body>
		</html>');//tells user error and offers way back
}
else{
	echo "
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
				text-align: center;
			}

			.pdetails{
				text-align: center;
			}
			.binfo{
				text-align: center;
			}
				.addbtn{
				}
				.removebtn{
				}
			.finfo{
				text-align: center;
			}
			.termsmail{
				text-align: center;
			}

		</style>
	</head>
	<body>
	<center>
	<h1>For Your Records</h1>
	<h2> Books Checked Out</h2>
	$name : Here is your book list
	<br><br>";//otherwise prints info
	foreach($bnames as $a => $bname) //$a is index, $bname is book name
		{
			echo"
			<center>
			Book Name: $bname
			<br>
			Book Genre: $genre[$a]
			<br>
			Checked out from: $fdate[$a]
			<br>
			Checked out until: $udate[$a]
			<bt>
			Checked out at: $branch[$a]
			<br><br>
			</center>
			</body>
			</html>";
	}
}
?>