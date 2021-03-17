var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

MongoClient.connect(url, function(err, db1) {
  if (err) throw err;
  var db1o = db1.db("mydb1");
  var myobj = [
    { _id: 154, name: 'Chocolate Heaven'},
    { _id: 155, name: 'Tasty Lemon'},
    { _id: 156, name: 'Vanilla Dream'}
  ];
  db1o.collection("products").insertMany(myobj, function(err, res) {
    if (err) throw err;
    console.log(res);
    db1.close();
  });
});