/*variables start*/
var express = require('express');
var app = express();
//variables so can use stuff in folders since on "server"
var path = __dirname + '/views/';

app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.use(express.static(__dirname + '/views'));

app.use(express.static('public'));
app.use(express.static('images'));

//lemme use faker
var faker = require('faker');
var fs = require('fs');
var str = " ";
/*variables end*/

//stuff from part 1 commented out
/*function generate(){
	/*for(var i = 0; i <= 1000; i++){*
		var rFName = faker.name.firstName();
		var rLName = faker.name.lastName();

		var rCity = faker.address.city();
		var rState = faker.address.state()
		var rZip = faker.address.zipCode()

		var rJob = faker.name.jobTitle();

		var rEmail = faker.internet.email();
		var rPhone = faker.phone.phoneNumber();

		var rAvatar = faker.image.avatar();
	/*};*
};*/

app.get('/',function(req,res){
	var rFName = faker.name.firstName();
	var rLName = faker.name.lastName();

	var rCity = faker.address.city();
	var rState = faker.address.state()
	var rZip = faker.address.zipCode()

	var rJob = faker.name.jobTitle();

	var rEmail = faker.internet.email();
	var rPhone = faker.phone.phoneNumber();
	var rAvatar = faker.image.avatar();
	var html = '';
	html += "<html>";
	html += "<head>";
	html += "<meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>";
	html += "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'> <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script><script src='https://code.jquery.com/jquery-3.3.1.js'></script><script src ='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script><link rel='stylesheet' href='JQheadercss.css' media='screen'>";
	
	html += "<script>";
	html += "$(document).ready(function() {";
	html += "$('#sunb').click(function(){";
	html += "$('#sung').animate({'top':'+=1535px'});";
	html+= "} );});</script>";
	html += "<script>";
	html += "$(document).ready(function() {";
	html += "$('#sunc').click(function(){";
	html += "$('#sung').animate({'top':'-=1535px'});";
	html+= "} );});</script>";
	
	html += "<audio autoplay = 'autoplay' loop = 'loop'>";
	html += "<source src = 'audio2.mp3'>";
	html += "</audio>";
	html += "</head>";
	html += '';
	html += "<body>";
	html += "<center>";
	html += "<h1>Cool fake stuff!! (+ a secret awesome thingy)</h1>";
	html += "<form action = '/generate' method = 'post'>";
	html += "First Name:<br><input type = 'text' name = 'FName' value='" + rFName + "'><br>";
	html += "Last Name:<br><input type = 'text' name = 'LName' value='"+ rLName + "'><br>";
	html += "City:<br><input type = 'text' name = 'city' value='" + rCity + "'><br>";
	html += "State:<br><input type = 'text' name = 'state' value='" + rState + "'><br>";
	html += "Zip Code:<br><input type = 'text' name = 'zipCode' value='" + rZip + "'><br>";
	html += "Job Title:<br><input type = 'text' name = 'jobTitle' value='" + rJob + "'><br>";
	html += "Email:<br><input type = 'text' name = 'email' value='" + rEmail + "'><br>";
	html += "Phone Number:<br><input type = 'text' name = 'phoneNumber' value='" + rPhone + "'><br>";
	html += "Avatar:"/*<br><input type='file' name='avatar' accept='image/*' src='" + rAvatar + "'><br>";*/;
	html += "<img src =" + rAvatar + "><br>";
	html += "<button type = 'submit' value = 'Generate' alt = 'Generate'>Generate</button>";
	html += "</form>";
	
	html+= "<br><br><br><br><br>";
	
	html += "<div><div class ='coolaf'><div class = 's'>";
	html += "<img id = 'sung' src = 'sung.png' width='100'>";
	html += "</div></div><!--end cool div-->";
	html += "<button id='sunb' class='ui-button ui-widget ui-corner-all'>Button 1!!!</button></div>";
	html += "<button id='sunc' class='ui-button ui-widget ui-corner-all'>Button 2!!!</button></div>";
	
	html += "</center>";
	html += "</body>";
	html += "</html>";
	res.send(html);
	console.log('aight aight');
});


//server at localhost:8082
app.post('/generate',function(req,res){
	/*faker info in variables, changes with every '/generate' (submit) button click*/
	//internal variables so can change with every /generate and not remain the same
	var rFName = faker.name.firstName();
	var rLName = faker.name.lastName();

	var rCity = faker.address.city();
	var rState = faker.address.state()
	var rZip = faker.address.zipCode()

	var rJob = faker.name.jobTitle();

	var rEmail = faker.internet.email();
	var rPhone = faker.phone.phoneNumber();
	var rAvatar = faker.image.avatar();
	//html form + page	
	var html = '';
	html += "<html>";
	html += "<head>";
	html += "<meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>";
	html += "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'> <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script><script src='https://code.jquery.com/jquery-3.3.1.js'></script><script src ='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script><link rel='stylesheet' href='JQheadercss.css' media='screen'>";
	
	html += "<script>";
	html += "$(document).ready(function() {";
	html += "$('#sunb').click(function(){";
	html += "$('#sung').animate({'top':'+=1535px'});";
	html+= "} );});</script>";
	html += "<script>";
	html += "$(document).ready(function() {";
	html += "$('#sunc').click(function(){";
	html += "$('#sung').animate({'top':'-=1535px'});";
	html+= "} );});</script>";
	
	//html with variables previously defined in place of value
	html += "<audio autoplay = 'autoplay' loop = 'loop'>";
	html += "<source src = 'audio2.mp3'>";
	html += "</audio>";
	html += "</head>";
	html += '';
	html += "<body>";
	html += "<center>";
	html += "<h1>Cool fake stuff!! (+ a secret awesome thingy)</h1>";
	html += "<form action = '/generate' method = 'post'>";
	html += "First Name:<br><input type = 'text' name = 'FName' value='" + rFName + "'><br>";
	html += "Last Name:<br><input type = 'text' name = 'LName' value='"+ rLName + "'><br>";
	html += "City:<br><input type = 'text' name = 'city' value='" + rCity + "'><br>";
	html += "State:<br><input type = 'text' name = 'state' value='" + rState + "'><br>";
	html += "Zip Code:<br><input type = 'text' name = 'zipCode' value='" + rZip + "'><br>";
	html += "Job Title:<br><input type = 'text' name = 'jobTitle' value='" + rJob + "'><br>";
	html += "Email:<br><input type = 'text' name = 'email' value='" + rEmail + "'><br>";
	html += "Phone Number:<br><input type = 'text' name = 'phoneNumber' value='" + rPhone + "'><br>";
	html += "Avatar:"/*<br><input type='file' name='avatar' accept='image/*' src='" + rAvatar + "'><br>";*/;
	html += "<img src =" + rAvatar + "><br>";
	html += "<button type = 'submit' value = 'Generate' alt = 'Generate'>Generate</button>";
	html += "</form>";
	
	html+= "<br><br><br><br><br>";
	
	html += "<div><div class ='coolaf'><div class = 's'>";
	html += "<img id = 'sung' src = 'sung.png' width='100'>";
	html += "</div></div><!--end cool div-->";
	html += "<button id='sunb' class='ui-button ui-widget ui-corner-all'>Button 1!!!</button></div>";
	html += "<button id='sunc' class='ui-button ui-widget ui-corner-all'>Button 2!!!</button></div>";

	html += "</center>";
	html += "</body>";
	html += "</html>";
	res.send(html);
	console.log('aight aight');//logs on console so knows can use
});

app.listen(8082, function(){
	console.log('this part is working?');
});
/*fs.writeFile('data.txt',str,(err) => {
	if (err) throw err;
	console.log('Done boiiiiii!');
});*/