<html>
<head>
<?php include 'JQheader.php';?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$( function() {
	<!--drag&drop function-->
	$( "#draggable1" ).draggable();
	$( "#draggable2" ).draggable();
	$( "#droppable" ).droppable({
		drop: function( event, ui ) {
		<!--edited to change background image on drop-->
		$( this ).css('background-image', 'url(magicpush.gif)')
		.addClass( "dropyes" )
		.find( "p" )
			.html( "She is!!!<br>I think.." );
	}
	});
	} );
	<!--sortable function-->
	$( function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	} );
	$(document).ready(function() {
		$('#sunb').click(function(){
			$('#sung').animate({'top':"+=1535px"});
		} );
	});

	$( function() {
		$( "#accordion" ).accordion();
	} );
</script>

<style>
#sortable { 
	list-style-type: none; 
	margin: 0; 
	padding: 0; 
	width:550px;
}

#sortable li { 
	margin: 0 3px 3px 3px; 
	padding: 0.4em; 
	padding-left: 1.5em; 
	font-size: 1.4em; 
	width:550px;
	height:50px;
	background-image:url("sortt.gif");
	background-position:-1px 100px
	color:grey;
}
#accordion{
	width:500px;
	margin-left:auto;
	margin-right:auto;
}
</style>
</head>

<body>

<div class = "body">
		<br><br>
		<!--drag and drop answer div-->
		<div class = "dragboi">
			<div id="draggable1" class="ui-widget-content">
				<p>Yes!</p>
			</div>
			<div id="draggable2" class="ui-widget-content">
				<p>NO!!!</p>
			</div>
			 
			<div id="droppable" class="ui-widget-header">
				<p>Is Ms. Pandya a Wizard?</p>
			</div>
		</div>
		
		<br><br><br>
		
		<!--sortable div-->
		<div class="sortboi">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<ul id="sortable">
			<h1>EVIDENCE!!</h1>
			<li class="ui-state-default"><p>She has never died</p></li><br>
			<li class="ui-state-default"><p>She looks too young to have been at IMSA so long</p></li><br>
			<li class="ui-state-default"><p>She fights for justice</p></li><br>
			<li class="ui-state-default"><p>Infinitely wise</p></li><br>
		</ul>
		</div>
		
		<!--sparkle image div-->
		<div class ="sparkle">
			<div class = "sparkL">
			<img id="spark1" src="spark.png">
			<br>
			<img id="spark2" src="spark.png">
			</div>
			<br><br><br><br>
			<div class = "sparkR">
			<img id="spark3" src="spark.png">
			<br>
			<label>      </label>
			<img id="spark4" src="spark.png">
			</div>
		<script src="JQsizeani.js"></script>
		</div><!--end sparkle div-->
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div>
		<div class ="coolaf">
			<div class = "s">
			<img id = "sung" src = "sung.png" width="100">
			</div>
		</div><!--end cool div-->
		<center>
		<button id="sunb" class="ui-button ui-widget ui-corner-all">Click Here!!!</button>
		</center>
		</div>
	<!--Accordion div-->
	<br><br>
	<div>
	<div id="accordion">
	  <h3>Does she have this magic item?</h3>
	  <div>
		<img src ="cursor1.gif" height="100">
	  </div>
	  <h3>Or maybe this magic item??</h3>
	  <div>
		<img src ="sort.gif" height="200">
	  </div>
	</div>
	</div>
</div><!--end body div-->
<center>
</body>
</html>