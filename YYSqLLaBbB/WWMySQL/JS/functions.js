$(function loadPHPData(){
	$.ajax({url: "http://localhost/WWMySQL/getData.php", 
		dateType: 'json',
		success: function(data){
			data = JSON.parse(data);
			var table1 = "<table id='table1' class='display' style='width:100%'><thead><tr><th>Name</th><th>Age</th><th>Rating</th></tr></thead><tbody>";
			var userArray = [[],[],[]];
			for(var i = 0; i < data.userList.length; i++){
				table1 += "<tr><td>"+ data.userList[i].name+"</td><td>"+data.userList[i].rating+"</td><td>"+data.userList[i].age+"</td></tr>";
				userArray[0][i] = data.userList[i].name;
				userArray[1][i] = data.userList[i].rating;
				userArray[2][i] = data.userList[i].age;
			}
			table1 += "</tbody></table>";
			$('#display1').html(table1)
			$('#table1').DataTable();
			drawGraph(userArray,0,1,2,"user's rating of Service",'age of user',"myChart", "bar");
			var table2 = "<table id='table2' class='display' style='width:100%'><thead><tr><th>Age</th><th>Number of People</th></tr></thead><tbody>";
			var ageArray = [[],[]];
			for(var i = 0; i < data.ageList.length; i++){
				table2 += "<tr><td>"+ data.ageList[i].age+"</td><td>"+data.ageList[i].numberOfPeople+"</td></tr>";
				ageArray[0][i] = data.ageList[i].age;
				ageArray[1][i] = data.ageList[i].numberOfPeople;
				
			}
			table2 += "</tbody></table>";
			$('#display2').html(table2)
			$('#table2').DataTable();
			drawSinglYGraph(ageArray,0,1,"number of users this age", "myChart2", "pie");
			var table3 = "<table id='table3' class='display' style='width:100%'><thead><tr><th>Rating</th><th>Number of People</th></tr></thead><tbody>";
			var ratingArray = [[],[]];
			for(var i = 0; i < data.ratingList.length; i++){
				table3 += "<tr><td>"+ data.ratingList[i].rating+"</td><td>"+data.ratingList[i].numberOfPeople+"</td></tr>";
				ratingArray[0][i] = data.ratingList[i].rating;
				ratingArray[1][i] = data.ratingList[i].numberOfPeople;
				
			}
			table3 += "</tbody></table>";
			$('#display3').html(table3)
			$('#table3').DataTable();
			drawSinglYGraph(ratingArray,0,1,"number of users that gave this rating", "myChart3", "radar");
			var table4 = "<table id='table4' class='display' style='width:100%'><thead><tr><th>Name</th><th>Age</th><th>Rating</th></tr></thead><tbody>";
			var jUserArray = [[],[],[]];
			for(var i = 0; i < data.jUserList.length; i++){
				table4 += "<tr><td>"+ data.jUserList[i].name+"</td><td>"+data.jUserList[i].rating+"</td><td>"+data.jUserList[i].age+"</td></tr>";
				jUserArray[0][i] = data.jUserList[i].name;
				jUserArray[1][i] = data.jUserList[i].rating;
				jUserArray[2][i] = data.jUserList[i].age;
			}
			table4 += "</tbody></table>";
			$('#display4').html(table4)
			$('#table4').DataTable();
			drawGraph(jUserArray,0,1,2,"user's rating of Service",'age of user',"myChart4", "bar");
			var table5 = "<table id='table5' class='display' style='width:100%'><thead><tr><th>Name</th><th>Age</th><th>Rating</th></tr></thead><tbody>";
			var jUserArray4 = [[],[],[]];
			for(var i = 0; i < data.jUserList4.length; i++){
				table5 += "<tr><td>"+ data.jUserList4[i].name+"</td><td>"+data.jUserList4[i].rating+"</td><td>"+data.jUserList4[i].age+"</td></tr>";
				jUserArray4[0][i] = data.jUserList4[i].name;
				jUserArray4[1][i] = data.jUserList4[i].rating;
				jUserArray4[2][i] = data.jUserList4[i].age;
			}
			table5 += "</tbody></table>";
			$('#display5').html(table5)
			$('#table5').DataTable();
			drawGraph(jUserArray4,0,1,2,"user's rating of Service",'age of user',"myChart5", "bar");
		},
		error: function(){
			alert("Error");
			
		}
	});
});

function drawGraph(dataArray, xIndex, yIndex, zIndex, yLabel, zLabel, chart, typeOfGraph){
	var ctx = document.getElementById(chart).getContext('2d');
	
	var myChart = new Chart(ctx, {
		type: typeOfGraph,
		data: {
			labels: dataArray[xIndex],
			datasets: [{
				label: yLabel,
				data: dataArray[yIndex],
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255,99,132,1)',
				borderWidth: 1
			},
			{
				label: zLabel,
				data: dataArray[zIndex],
				backgroundColor: 'rgba(153, 102, 255, .2)',
				borderColor: 'rgba(153, 102, 255, 1)',
				borderWidth: 1
			}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
}
function drawSinglYGraph(dataArray, xIndex, yIndex, yLabel, chart, typeOfGraph){
	
	var ctx = document.getElementById(chart).getContext('2d');
	var myChart = new Chart(ctx, {
		type: typeOfGraph,
		data: {
			labels: dataArray[xIndex],
			datasets: [{
				label: yLabel,
				data: dataArray[yIndex],
				backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(30, 200, 72, 0.2)', 'rgba(90, 250, 102, 0.2)', 'rgba(90, 80, 20, 0.2)'],
				borderColor: ['rgba(255, 99, 132, 0.2)', 'rgba(30, 200, 72, 0.2)', 'rgba(90, 250, 102, 0.2)', 'rgba(90, 80, 20, 0.2)'],
				borderWidth: 1
			}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
}
function drawSinglYGraph(dataArray, xIndex, yIndex, yLabel, chart, typeOfGraph){
	
	var ctx = document.getElementById(chart).getContext('2d');
	var myChart = new Chart(ctx, {
		type: typeOfGraph,
		data: {
			labels: dataArray[xIndex],
			datasets: [{
				label: yLabel,
				data: dataArray[yIndex],
				backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(30, 200, 72, 0.2)', 'rgba(90, 250, 102, 0.2)', 'rgba(90, 80, 20, 0.2)'],
				borderColor: ['rgba(255, 99, 132, 0.2)', 'rgba(30, 200, 72, 0.2)', 'rgba(90, 250, 102, 0.2)', 'rgba(90, 80, 20, 0.2)'],
				borderWidth: 1
			}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
}