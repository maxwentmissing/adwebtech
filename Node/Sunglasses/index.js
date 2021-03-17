/*variables start*/
var express = require('express');
var app = express();

var bodyParser = require('body-parser');
var router = express.Router();

var path = __dirname + '/views/';

app.use("/",router);

app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.use(express.static(__dirname + '/views'));

app.use(express.static('public'));
app.use(express.static('images'));

app.use(bodyParser.json()); 
app.use(bodyParser.urlencoded({ extended: true })); 

//lemme use faker
var faker = require('faker');
var fs = require('fs');

router.get("/",function(req,res){
	res.sendFile(path + "sunglasses.html");
});

app.get('/',function(req,res){
	res.sendfile('sunglasses.html');
	console.log("Ye boiii");
});

app.listen(3033);