<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<audio autoplay = "true" src = "https://www.youtube.com/embed/w_RMMzohBDQ"></audio>

<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
  <nav class = "navbar navbar-expand-sm ">
<a class = "navbar-brand" href = "#">
<img src = "lilac2.jpg" alt = "logo" style = "width:40px;">
</a>
<ul class="navbar-nav">
<li class = "nav-item">
<a class = "nav-link" href = "ajaxex.html">.ajax</a>
</li>
<li class = "nav-item">
<a class = "nav-link" href = "page2.php">JSON and PHP</a>
</li>
<li class = "nav-item">
<a class = "nav-link" href = "jvx.html">JSON vs. XML</a>
</li>
</ul>
</nav>
<div class = "container">
	<?php
	$json_file = file_get_contents('posts.json');
	$jfo = json_decode($json_file);
	$title = $jfo->result->title;
	$posts = $jfo->result->posts; 
	$numberOfPosts = count($posts);
	$numberOfRows = 2;
	
	
		for($currentRow = 0; $currentRow < $numberOfRows; $currentRow++){	
			$row = "<div class = 'row'>";
			for($i = $currentRow * ($numberOfPosts/$numberOfRows ); $i < $currentRow * ($numberOfPosts/$numberOfRows )+($numberOfPosts/$numberOfRows ); $i++){
				$row .= "<div class='col-6'>";
				$row .= "<a href='".$posts[$i]->img."'>";
				$row .= "<h2>'".$posts[$i]->title."'</h2>";
				$row .= "<img class='img-fluid' src='".$posts[$i]->img."'></a>";
				$row .= "</div>";
			}
			$row .= "</div>";
			echo $row;
		}
		?>
</div>	
</body>
</html>