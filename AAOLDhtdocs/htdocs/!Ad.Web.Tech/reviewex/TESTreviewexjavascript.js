function addrow(reponses)
{
	var responses = document.getElementById("responses");
	var rowNum = responses.rows.length;
	if(rowNum < 5)//can only add up to 4 rows
	{
		var row = responses.insertRow(rowNum);
		var colNum = responses.rows[0].cells.length;//num of columns by counting cells in row
		for(var i = 0; i < colNum; i++)
		{
			var newcell = row.insertCell(i);
			newcell.innerHTML = responses.rows[0].cells[i].innerHTML;//inserts cells for new row
		}
	}
	else{
		alert("Maxmimum books checked out can only be five");//cannot add more than 4 rows
	}
}

function delRow()
{
	var responses = document.getElementById("responses");
	var rowNum = responses.rows.length;
	for(var i = 0; i < rowNum; i++)
	{
		var row = responses.rows[i];
		var check = row.cells[0].getElementsByTagName('input')[0];
		if(check.checked == true)//if box is checked
		{
			if(rowNum <= 1)
			{
				alert("Must have at least 1 book");
				break;//cannot have 0 rows; breaks off code
			}
			responses.deleteRow(i);//delete row at i
			rowNum--;
			i--;
		}
	}
}