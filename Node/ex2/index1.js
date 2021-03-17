/*variables start*/
var express = require('express');
var app = express();

var path = __dirname + '/views/';

var faker = require('faker');
var fs = require('fs');
var str = " ";
/*variables end*/

for(var i = 0; i <= 1000; i++){
	var rFName = faker.name.firstName();
	var rLName = faker.name.lastName();

	var rCity = faker.address.city();
	var rState = faker.address.state()
	var rZip = faker.address.zipCode()

	var rJob = faker.name.jobTitle();

	var rEmail = faker.internet.email();
	var rPhone = faker.phone.phoneNumber();

	var rAvatar = faker.image.avatar();

	str += rFName + "\t" + rLName + "\t";
	str += rCity + "\t" + rState + "\t" + rZip + "\t"; 
	str += rJob + "\t";
	str += rEmail + "\t" + rPhone + "\t";
	str += rAvatar+ "\n";
};
fs.writeFile('data.txt',str,(err) => {
	if (err) throw err;
	console.log('Done boiiiiii!');
});

app.listen(808);
