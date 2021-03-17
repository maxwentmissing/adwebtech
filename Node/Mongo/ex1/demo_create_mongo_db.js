var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/mydb1";

MongoClient.connect(url, function(err, db1) {
  if (err) throw err;
  console.log("Database created!");
  db1.close();
});