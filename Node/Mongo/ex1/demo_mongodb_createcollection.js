var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/mydb1";

MongoClient.connect(url, function(err, db1) {
  if (err) throw err;
  var db1o = db1.db("mydb1");
  db1o.createCollection("customers", function(err, res){
	  if (err) throw err;
	  console.log("Collection created!");
	  db1.close();
  });
});

