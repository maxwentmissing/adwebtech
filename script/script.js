$(document).ready(function(){
	//performs function when the button is clicked
	$("#button").click(function(){
		var user = $("#user").val();
		//retrieves info from https://api.github.com/users
		$.get("https://api.github.com/users", function(data, login){
			//boolean that switches to true if the name exists
			var exists = false;
			//loop to check through all users on the page
			for(var i = 0; i < data.length; i++)
			{
				//retrieves the user's login name from the current data element in the array
				login = data[i].login;
				if(login === user)
				{
					//if the login is found, boolean switches to true
					//no check condition for multiple logins of the same name, because all logins are inherently unique
					exists = true;
				}
			}
			if(exists == true)
			{
				//retrieves data from https://api.github.com/users/user
				$.get("https://api.github.com/users/" + user, function(data){
					//changes #display div to show the information requested
					$("#display").html(data.name + " (@" + data.login + ") <br /> <br />" +
					"<img id = 'profile' alt = '" + data.name + ", @" + data.login + "' src = '" + data.avatar_url + "' /> <br /> " +
					"Followers: " + data.followers + "<br /> Following: " + data.following + "<br /> " +
					"Repos: " + data.public_repos + "<br /> <br /> Public Repos List: <br /> <br />");
				});
				//requests info from https://api.github.com/users/user/repos to list the user's repositories
				$.get("https://api.github.com/users/" + user + "/repos", function(data){
					//loops through each repository listed
					for(var i = 0; i < data.length; i++)
					{
						//creates a button labeled with the repository's name and links to the repository's page
						$("#display").append("<a target = '_blank' href = '" + data[i].html_url + "'> <button type = 'button'>" + data[i].name + "</button> </a>");
						//adds some blank space every 8 repos to make things look neater
						if(i%8 == 0 && i != 0)
						{
							$("#display").append("<br /> <br />");
						}
					}
				});
			}
			//displays an error message if the user is not in the database
			else
			{
				$("#display").html("User does not exist");
			}
		});
	});
});