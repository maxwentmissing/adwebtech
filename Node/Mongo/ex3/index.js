var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/mydb3";

var fs = require('fs');

var express = require('express');
var app = express();

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));

const readline = require('readline');
const rl = readline.createInterface({
	input: process.stdin,
	output: process.stdout,
});

app.set('view engine','ejs');

var path = __dirname + '/views/';
app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.use(express.static(__dirname + '/views'));

app.use(express.static('public'));
app.use(express.static('images'));

app.get('/',function(req,res){
	res.render('index.html');
});

var db3o;
var docs;

MongoClient.connect(url, {useNewUrlParser:true},function(err, db3) {
  if (err) throw err;
  db3o = db3.db("mydb3");
  db3o.collection('colors').createIndex({color:1}, {unique: true})
  fs.readFile('./views/colors.json', function(err,docs){
	if(err)console.log(err);
	docs = JSON.parse(docs);
	db3o.collection('colors').insertMany(docs, function(err,res){
				if(err){};
				if (res){
				console.log(res.insertCount + " documents inserted");
				}
				else{
					console.log(0 + " documents inserted; no duplicates please");
				}
	});
  });
});	  

app.post('/list', function(err,res){
		
	db3o.collection("colors").find({}).toArray( function(err, databaseResult) {
		if (err){
			throw err;
		}
		app.locals.results = databaseResult;
		res.render("display")
	});		
});

app.post("/code", function(req, res){
	rl.question("Which color's code?: ", function(answer){
		console.log("Color: " + answer)
		var query = {color:  answer};
		db3o.collection("colors").find(query).toArray( function(err, databaseResult) {
		if (err){
			console.log("error")
			throw err;
		}
		app.locals.results = databaseResult;
		res.render("display")
		});
	})	
});



app.listen(3000);