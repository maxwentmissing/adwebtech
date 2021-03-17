var express = require('express');
var app = express();

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));

var fs = require('fs');

var path = __dirname + '/views/';
app.set('view engine','ejs');

app.locals.videoData = require(path + 'videoData.json');

app.use(express.static(__dirname + '/public'));


app.get("/",function(req,res){
	res.render(path + "index.ejs");
});

app.listen(8083, function(){
	console.log('Listening...')
});