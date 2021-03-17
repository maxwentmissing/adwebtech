<!DOCTYPE html>
<!--styling for all the pages Trenton Lyke 12/8/2018-->
<html>
<head>
<style>
/*styling for the body*/
body{
	text-align: center; 
	color: yellow; 
	background-color: black; 
	font-size: 14pt
}
/*styling for fieldset*/
fieldset{
	text-align: left; 
	width: 700px; 
	margin: auto; 
	font-size: 20pt; 
	background-color: gray;
}
/*styling for table data*/
td{
	padding: 10px;
}
/*right aligning for text*/
.textAlignRight{
	text-align: right
}
/*styling for table*/
table{
	margin: auto; 
	text-align: left; 
	font-size: 20pt; 
}
/*styling for warnings*/
.warning {
	color: red; 
	font-size: 10pt
}

/*styling for input and select*/
input,select {
	border: 2px black solid; 
	border-radius: 25px
}

/*formats submit and reset buttons*/
input[type="submit"], input[type="reset"]{
	font-size: 25pt
}

/*orients reset button*/
input[type="reset"]{
	margin-left: 10px
}

/*styles the smaller links*/
.smallLink{
	font-size: 14pt
}

/*styles titles that a directions*/
.directionTitle{
	font-size: 20pt
}

/*styles additional directions for the user*/
.additionalDirections{
	color: blue; 
	font-size: 13pt
}
/*formats and positions unordered lists for navigation bar*/
ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #3c3c3c;
	position: fixed;
    top: 0;
	left: 0;
    width: 100%;
	z-index: 4;
	
}

/*formats and positions list Items for navigation bar*/
li {
	width: 200px;
	float: left;
}

/*formats list items links for navigation bar*/
li a {
    display: block;
	padding: 4px;
	text-decoration: none;
	font-family: Times New Roman;
	font-size: 25pt;
	color: white;
	text-align: center;

}
.logout {
	display: inline;
	padding: none;
	text-decoration: underline;
	font-family: Times New Roman;
	font-size: 14pt;
	color: blue;
	text-align: center;
}

/*changes color of list item links when it is hovered over for navigation bar*/
li a:hover {
    background-color: #111;
}

/*position title class items*/
.title {
	margin-top: 60px;
	font-style: bold;
	}
/*makes active tabs orange*/
.active{
	background-color: orange
}
/*sizes, postions, and styles division for slideshow*/
.slideshow{
	margin: auto;
	width:500px;
	height:300px;
	border: solid black 5px;
	border-radius: 25px;
}
/*sizes, postions, and styles images for slideshow*/
.slideshow > img{
	margin: auto;
	width:500px;
	height:300px;
	border: solid black 5px;
	border-radius: 25px;
	position: relative;
	top: -5px;
	left: -5px;
}
/*formats fading pictures*/
.w3-animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
/*indents and formats the intro paragraph*/
.intro{
	width: 650px;
	font-size: 20pt;
	text-align: left;
	margin: auto;
}
</style>
</head>
</html>