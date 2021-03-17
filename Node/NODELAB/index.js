var express = require('express');
var app = express();
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));
app.set('view engine','ejs');
var path = __dirname + '/views/';

app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/images'));
app.use(express.static(__dirname + '/views'));

app.use(express.static('public'));
app.use(express.static('images'));

var str = '';

app.get('/',function(req,res){
 var html = '';
 html += '<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">';
 html += '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><script src="https://code.jquery.com/jquery-3.3.1.js"></script><script src ="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script></head>';
 html += '<body><center><div class="jumbotron"><h1 class="display-4">My Simple Calculator</h1></div>';
 html += "<form action = '/calculate' method = 'post'>";
 html += '<p>Enter first number:</p><br><input type = "number" name = "firstnum"><br>';
 html += '<p>Enter second number</p><br><input type = "number" name = "secondnum"><br>';
 html += "<select name = 'calc'><option value = 'add'>+</option><option value = 'sub'>-</option><option value = 'divi'>/</option><option value = 'mult'>*</option></select>";
 html += '<br><button formaction = "/calculate" type = "submit">Calculate</form>';
 html += '</body></html>';
 res.send(html);
});

app.post('/',function(req,res){
 var html = '';
 html += '<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">';
 html += '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><script src="https://code.jquery.com/jquery-3.3.1.js"></script><script src ="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script></head>';
 html += '<body><center><div class="jumbotron"><h1 class="display-4">My Simple Calculator</h1></div>';
 html += "<form action = '/calculate' method = 'post'>";
 html += '<p>Enter first number:</p><br><input type = "number" name = "firstnum><br>';
 html += '<p>Enter second number</p><br><input type = "number" name = "secondnum"><br>';
 html += "<select name = 'calc'><option value = 'add'>+</option><option value = 'sub'>-</option><option value = 'divi'>/</option><option value = 'mult'>*</option></select>";
 html += '<br><button formaction = "/calculate" type = "submit">Calculate</form>';
 html += '</body></html>';
 res.send(html);
 calculate(html,res);
});
app.listen(3000);
function calculate(vars, res){
 var int firstnum = +vars.firstnum;
 var int secondnum = +vars.secondnum;
 var calc = document.getElementById('calc').value;
 var int ans = firstnum calc secondnum;
 htmli = '<div><p>The calculator produced this result!</p><br>'+ firstnum + calc + secondnum +' = </div>';
 res.send(htmli);
};
