<html>
<head>
<?php include 'BSheader.php';?>
<style>
.well .well-lg{
	width:500px;
}
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<!--:root {
  --height: 100px;
  --margin: 5px;
}
.element {
  height: var(--height); /* Each element has the base height */
  margin: var(--margin); /* Each element has the base margin */
  padding: 10px;
}

.left .element {
  /* left element has [element_count] times as much height 
  and [element_count + 1] times as much margin */
  height: calc((var(--height) * 2) + ((var(--margin) * (2 + 1))));
  width:50%;
}-->
.<!--element{
	height: 100px;
	background: red;
	margin: 5px;
	padding: 10px;
}

.right .element{
	height: 320px;
}-->
</style>
</head>

<body>
<div class = "body">
<br>
	<div class="container">
		<div class = "row">
		
		<div class = "col-6" style="float:right; margin-left:2px;"> 
			<div class = "row">
				<div class = "col-12">
				<div class = "element">
					<iframe width="500" height = "300" controls src="https://www.youtube.com/embed/s2uAeQmI7Ro"></iframe>
				</div>
				</div><!--end col right top-->
			</div><!--end row right top-->
			<div class = "row">
				<div class = "col-12">
				<div class = "element">
					<div class = "well well-lg">
						<center>
						My grandfather watched the documentary above and was touched<br> by the family
						burdened by the crushing, life-long debt. With the help of my <br>aunt, who was
						going to Burma for the Thingyan holiday, he was able to deliver<br>the money directly
						to the family, and they now live debt free.
						</center>
					</div>
				</div>
				</div><!--end col right mid-->
			</div><!--end row right mid-->
			<div class = "row">
				<div class = "col-12">
				<div class = "element" style ="margin-top:0px;">
					<img src = "take11.jpg" width = "500">
				</div>
				</div><!--end col right bot-->
			</div><!--end row right bot-->
		</div><!--END COL RIGHT-->
			
			
		<div class = "col-6 left">
		<div class = "element">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner"><!--ITEMS HERE-->
					<!--<div class="item">
					<center>
					<img src="take5.jpg" style="width:100%;">
					</center>
					</div>-->
							
					<div class="item active">
						<center>
						<img src="take1.jpg" style="width:120%;">
						</center>
					</div>

					<div class="item">
						<center>
						<img src="take7.jpg" style="width:120%;">
						</center>
					</div>
								
					<div class="item">
						<center>
						<img src="take10.jpg" style="width:120%;">
						</center>
					</div>
								  
					<div class="item">
						<center>
						<img src="take4.jpg" style="width:120%;">
						</center>
					</div>
								  
					<div class="item">
						<center>
						<img src="take6.jpg" style="width:120%;">
						</center>
					</div>
								  
					<div class="item">
						<center>
						<img src="take3.jpg" style="width:120%;">
						</center>
					</div>
				</div><!--END ITEMS-->

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div><!--end carousel-->
		</div>
		</div><!--END COLUMN RIGHT-->
			
		</div><!--end row-->
	</div><!--end container-->
</div>

</body>
</html>