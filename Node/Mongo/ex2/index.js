var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";
var express = require('express');
var app = express();
var path = __dirname + '/views/';
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));
app.set('view engine','ejs');

app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.use(express.static(__dirname + '/views'));

app.use(express.static('public'));
app.use(express.static('images'));

var db2o;

app.get('/',function(req,res){
	res.render('index');
});

MongoClient.connect(url, function(err, db2) {
  if (err) throw err;
  console.log("Database created!");
  db2o = db2.db("mydb2");
  db2o.createCollection("people", function(err, res){
	  if (err) throw err;
	  console.log("Collection created!");
  });
});
app.post('/subbmit',(req,res)=>{
	db2o.collection('people').insertOne(req.body,(err,result)=>{
		if(err) return console.log(err);
		res.redirect('/');
	});
});
var str = "<html><head></head><body><center><h1>Records</h1><br><ul>";
app.post('/display',(req,res)=>{
	db2o.collection('people').find({}).toArray(function(err, result) {
    result.forEach(function(doc){
		str += "<li> Name: "+doc.name+"<li>";
		str += "<li> E-mail: "+doc.email+"<li>";
		str += "<li> Home Address: "+doc.home+"<li>";
		str += "<li> Phone Numer: "+doc.phone+"<li>";
		str += "<br><br>";
	});
	res.send("</ul>"+str+"</body></html>");
});
});

var query = {gcheck: "on"};
app.post('/guest_only',(req,res)=>{
	db2o.collection('people').find(query).toArray(function(err, result) {
    result.forEach(function(doc){
		str += "<li> Name: "+doc.name+"<li>";
		str += "<li> E-mail: "+doc.email+"<li>";
		str += "<li> Home Address: "+doc.home+"<li>";
		str += "<li> Phone Numer: "+doc.phone+"<li>";
		str += "<br><br>";
	});
	res.send("</ul>"+str+"</body></html>");
});
});


app.listen(3000, function(){
	console.log("listening")
});