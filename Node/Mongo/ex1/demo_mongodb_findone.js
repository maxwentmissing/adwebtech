var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

MongoClient.connect(url, function(err, db1) {
  if (err) throw err;
  var db1o = db1.db("mydb1");
  db1o.collection("customers").findOne({}, function(err, result) {
    if (err) throw err;
    console.log(result.name);
    db1.close();
  });
});