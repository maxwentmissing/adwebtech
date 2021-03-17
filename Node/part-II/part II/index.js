//requires express for creating server
var express = require('express');


//requires fs because it was originally used to read html files to be used later
var fs = require('fs');




//creates express object 
var app = express();



//requires the file system module
app.locals.fs = require('fs');

//creates router object
var router = express.Router();

//creates path for html files
var path = __dirname + '/views/';

app.locals.path = path;


//user the router at the root of the directory
app.use("/", router)

//static directories for html,image, and css files
app.use(express.static(__dirname+'/views'));
app.use(express.static(__dirname+'/public'));


//requires ejs to be used in the rendering of html files

app.set('view engine', 'ejs');

//writes file and redirects back to root directory
app.get("/fileWrite", function(req, res) {

	fs.writeFile(path + 'mynewfile.txt', "apples bananas pear mango potatoe tomatoe", function(err) {
		if (err) throw err;
		console.log('Saved!');
		res.redirect("/");
	});
});

//updates file and redirects back to root directory
app.get("/fileUpdate", function(req, res) {

	fs.appendFile(path + 'mynewfile.txt',"added fruit", function(err) {
		if (err) throw err;
		console.log('added');
		res.redirect("/");
	});
});
//render the ejs and send the json data
app.get("/", function(req, res) {
    fs.readFile(path + 'videoData.json', 'utf8', function(err, jsonString) {
		if (err) {
			console.log("File read failed:", err)
			return
		}
		else{
			try {
				app.locals.videoData = JSON.parse(jsonString);
				res.render("index");
				
			}
			catch(err){
				console.log('Error parsing JSON string:', err)
			}
		}
	})
});
//the server is listening on port 3000 for connections
app.listen(3000, function () {
  console.log('Example app listening on port 3000!')
});
/*
Answer the following questions: 
1.	Revisit stringify and parse methods. Explain their functionality. 
	Stringify turns a JavaScript object into a string and parse turns a string in a JSON format into a JavaScript object.

2. Compare the synchronous reading and asynchronous reading of a file using the methods that are available for the fs module.
	You have to put the code that uses the information within the file in the call back function of the read file if you want it to work asynchronously which is faster, but if you use the synchronous read file you can put the code right after it.

3. In the following code, what happens if utf8 is removed from the list of parameters? What will it print? 
fs.readFile('my-file.txt', 'utf8', function(err, data) { 
if (err) throw err; 
console.log(data); 
});

	It will print the hexadecimal code for the text


4. Talk about at least two more methods for the fs module, the methods that you did not use in part I or part II.  These tutorials are good place to look at fs module and its methods: 

	fs.rename(): renames a file 
	fs.unlink(): deletes a file

*/