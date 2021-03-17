/*//ajax
var ourRequest = new XMLHttpRequest();
//POST is to send GET is to recieve data
ourRequest.open('GET','https://learnwebcode.github.io/json-example/animals-1.json')
ourRequest.onload = function (){
	var ourData = JSON.parse(ourRequest.responseText);
	console.log(ourData[0])
};
ourRequest.send();*/
$( document ).ready(function() {
	loadJSON();
	loadPHPJSON();
	loadServerData();
	
});

function loadJSON() {
	//Some Ajax that will be explained later
	var file = "http://localhost/GIVE_'EM/data.json";
	var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
			var rawJSONData = rawFile.responseText;
			
			/*Remember a JSON file is just text in a certain syntax so we must change
			it into compatible JavaScript arrays and objects to access the data with JavaScript efficiently. Therefore we use the built in JSON parse function*/
            var data = JSON.parse(rawJSONData);
			var aContainer = document.getElementById("jsonExample");
            aContainer.innerHTML += "<h1>Booky Boys</h1>";
			var table = "<table id='table1' class='display' style='width:100%'><thead><tr><th>id</th><th>language</th><th>edition</th><th>author</th></tr></thead><tbody>";
			//using object's keys and array's indexes to get the information we want
			for(var i = 0; i < data.books.length; i++){
				table += "<tr><td>"+data.books[i].id+"</td><td>"+data.books[i].language+"</td><td>"+data.books[i].edition+"</td><td>"+data.books[i].author+"</td></tr>";
			}
			table += "</tbody></table>";
			aContainer.innerHTML = table + "<a href='data.json' target='blank' class='dataFiles' >Data file</a>";
			$('#table1').DataTable();
        }
    }
    rawFile.send();
	
}	
	
	
	
function loadPHPJSON() {
	//web server url
	var data_file = "http://localhost/GIVE_'EM/phpJSON.php";
	//creates a new object for the request for info that will be sent to the web server
	var http_request = new XMLHttpRequest();
	//find which type of object should be used for the request based on the browser
	try{
		// Opera 8.0+, Firefox, Chrome, Safari
		http_request = new XMLHttpRequest();
	}catch (e) {
		// Internet Explorer Browsers
		try{
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		}catch (e) {
			try{
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e) {
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	//specifies the type of request
	http_request.open("GET", data_file, true);
	//sends request (since we are only getting data we don't need any arguments)
	http_request.send();
	//Sets up a function to be called when the readyState property changes
	http_request.onreadystatechange = function() {
	//4: request finished and response is ready
	//if statment contains JSON stuff we already went over
	if (http_request.readyState == 4  ) {
			
			var rawJSONData = http_request.responseText;
			
			/*Remember a JSON file is just text in a certain syntax so we must change
			it into compatible JavaScript arrays and objects to access the data with JavaScript efficiently. Therefore we use the built in JSON parse function*/
            var data = JSON.parse(rawJSONData);
			var aContainer = document.getElementById("PHPJSONExample");
			
            aContainer.innerHTML += "<h1>Booky Boys</h1>";
			var table = "<table id='table2' class='display' style='width:100%'><thead><tr><th>id</th><th>language</th><th>edition</th><th>author</th></tr></thead><tbody>";
			//using object's keys and array's indexes to get the information we want
			for(var i = 0; i < data.books.length; i++){
				table += "<tr><td>"+data.books[i].id+"</td><td>"+data.books[i].language+"</td><td>"+data.books[i].edition+"</td><td>"+data.books[i].author+"</td></tr>";
			}
			table += "</tbody></table>";
			aContainer.innerHTML = table  + "<a href='phpJSON.php' target='blank' class='dataFiles' >Data file</a>";
			$('#table2').DataTable();
	   }
	}
}

function loadServerData() {
	//web server url
	var data_file = "http://localhost/GIVE_'EM/getUserTable.php";
	//creates a new object for the request for info that will be sent to the web server
	var http_request = new XMLHttpRequest();
	//find which type of object should be used for the request based on the browser
	try{
		// Opera 8.0+, Firefox, Chrome, Safari
		http_request = new XMLHttpRequest();
	}catch (e) {
		// Internet Explorer Browsers
		try{
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		}catch (e) {
			try{
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e) {
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	//specifies the type of request
	http_request.open("GET", data_file, true);
	//sends request (since we are only getting data we don't need any arguments)
	http_request.send();
	//Sets up a function to be called when the readyState property changes
	http_request.onreadystatechange = function() {
	//4: request finished and response is ready
	//if statment contains JSON stuff we already went over
	if (http_request.readyState == 4  ) {
			
			var rawJSONData = http_request.responseText;
			
			
			var aContainer = document.getElementById("serverDataExample");
			aContainer.innerHTML = rawJSONData  + "<a href='getUserTable.php' target='blank' class='dataFiles' >Data file</a>";
			$('#table3').DataTable();
            
	   }
	}
}

$(document).ready(function(){
	setInterval(loadServerData,5000);
});