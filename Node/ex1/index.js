var express = require('express');
var app = express();

var multer = require('multer');
var upload = multer();

var bodyParser = require('body-parser');
var router = express.Router();
var path = __dirname + '/views/';
app.use("/",router);

app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.use(express.static(__dirname + '/views'));
app.get('/',function(req,res){
	res.render('form');
});
app.engine('html',require('ejs').renderFile);
app.set('view engine','html');


router.get("/",function(req,res){
	res.sendFile(path + "JQindex.html");
});
router.get("/",function(req,res){
	res.sendFile(path + "page2.html");
});
router.get("/",function(req,res){
	res.sendFile(path + "JQformpage.html");
});
router.get('/', function(req, res){
   res.render('form');
});

app.use(bodyParser.json()); 
app.use(bodyParser.urlencoded({ extended: true })); 
app.use(upload.array()); 
app.use(express.static('public'));
app.use(express.static('images'));

app.post('/form', function(req, res){
   /*s.render("form-success",{data: req.body})*/
   text += "<br>Answers  is " + req.body.q1 + "<br>"+ req.body.q2 + "<br>"+ req.body.q3 + "<br>"+ req.body.q4 + "<br>"+ req.body.q5+ "<br>"+ req.body.q6+ "<br>";
   text +="</body></html>";
   res.send(text);
});


app.listen(3000);