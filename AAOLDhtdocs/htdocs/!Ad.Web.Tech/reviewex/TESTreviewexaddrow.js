function addrow(reponses)
{
	var responses = document.getElementById("responses");
	var rowNum = responses.rows.length;
	if(rowNum < 5)
	{
		var row = responses.insertRow(rowNum);
		var colNum = responses.rows[0].cells.length;
		for(var i = 0; i < colNum; i++)
		{
			var newcell = row.insertCell(i);
			newcell.innerHTML = responses.rows[0].cells[i].innerHTML;
		}
	}
	else{
		alert("Maxmimum books checked out can only be five");
	}
}


function deleterow(responses)
{
	var responses = document.getElementById("responses");
	var rowNum = responses.rows.length;
	for(var i = 0; i < rowNum; i++)
	{
		var row = responses.rows[i];
		var check = row.cells[0];
		if(check != null $$ check.checked == true)
		{
			if(rowNum <= 1)
			{
				alert("Must have at least 1 book");
				break;
			}
			responses.deleterow(i);
			rowNum--;
			i--;
		}
	}
	else{
		alert("Must have at least 1 book");
	}
}