function checkName()
{
	var submitButton = document.getElementById('submit');
    //Store the password field objects into variables ...
    var name = document.getElementById('name');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');

	
    //Compare the values in the password field 
    //and the confirmation field
    if(name.value == null){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        name.style.backgroundColor = "blue";
        message.style.color = "blue";
        message.innerHTML = "Please Enter Name!";
		submitButton.disabled = true;
    }else{

    }