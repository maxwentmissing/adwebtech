var express = require('express');
var app = express();

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));

var fs = require('fs');

var path = __dirname + '/views/';
app.set('view engine','ejs');

app.locals.videoData = require(path + 'videoData.json');
app.locals.fs = require('fs');
app.locals.path = path;
var router = express.Router();
app.use("/", router)

app.use(express.static(__dirname+'/views'));
app.use(express.static(__dirname+'/public'));


app.get("/fileWrite", function(req, res) {

	fs.writeFile(path + 'new.txt', 'beep beep lettuce', function(err) {
		if (err) throw err;
		console.log('Written');
		res.redirect("/");
	});
});
app.get("/fileUpdate", function(req, res) {

	fs.appendFile(path + 'new.txt',"added message", function(err) {
		if (err) throw err;
		console.log('added');
		res.redirect("/");
	});
});
app.get("/", function(req, res) {
    fs.readFile(path + 'videoData.json', 'utf8', function(err, jsonString) {
		if (err) {
			console.log('Error', err)
			return
		}
		else{
			try {
				app.locals.videoData = JSON.parse(jsonString);
				res.render("index");
				
			}
			catch(err){
				console.log('Error', err)
			}
		}
	})
});

app.listen(8083, function(){
	console.log('Listening...')
});
/*
1. Stringify turns an object into a string. Parse turns a JSON string into an object
2. 	For faster asynchronous, you put the code that uses the file info in the call back.
	For synchronous, you put the code after.
3. The hexadecimal
4. unlink() deletes file, rename() renames a file.

*/