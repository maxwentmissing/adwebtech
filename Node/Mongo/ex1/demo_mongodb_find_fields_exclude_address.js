var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

MongoClient.connect(url, function(err, db1) {
  if (err) throw err;
  var db1o = db1.db("mydb1");
  db1o.collection("customers").find({}, { projection: { address: 0 } }).toArray(function(err, result) {
	  /*excludes address after setting to 0*/
      /*cannot do {name:1, address:0} or other things where one is 0 and another is not
	  UNLESS it is _id that is 0
	  {_id:0, name:1} is fine*/
    if (err) throw err;
    console.log(result);
    db1.close();
  });
});