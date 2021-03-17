<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<audio autoplay = "true" src = "https://www.youtube.com/embed/w_RMMzohBDQ"></audio>
<style>
audio {
	display:none;
}
</style>
</head>


<body>
	<?php
	$json_file = file_get_contents('posts.json');
	$jfo = json_decode($json_file);
	$title = $jfo->result->title;
	$posts = $jfo->result->posts; 
	/*foreach ($posts as $post) {
		echo $post->title;
	}*/
	?>
	<div class = "row">
		<?php
			//foreach ($posts as $post) {
			for($i = 0; $i < count($posts)/2; $i++){
		?>
		<div class = "col-6">
			<a href="<?php echo $posts[$i]->img; ?>">
			  <h2><?php echo $posts[$i]->title; ?></h2>
			  <img src="<?php echo $posts[$i]->img; ?>">
			</a>    
			<?php
			}
			?>
		</div>
	</div>
</body>
</html>