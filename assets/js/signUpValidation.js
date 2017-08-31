
function isValidFirstName(firstName){
	return (firstName.trim().length == 0) ? false : true ;

}

function isValidLastName(lastName){
	return (lastName.trim().length == 0) ? false : true ;
}

function isValidEmail(email){
	return email.match(/[a-z\.\-\_]+@[a-z\.\-\_]+\.[a-z]{2,4}/) ? true : false;
}

function isValidPassword(pass){
	if(pass.length < 5){
		return false;
	}else return true;
}

function validateField(element,isValidFunc){

		var error = element.previousElementSibling;
		
		if(!isValidFunc(element.value)){
		
			error.style.visibility = "visible";		
			return false;		
		}
		
		error.style.visibility = "hidden";
		return true;
	}
	
	
document.addEventListener('DOMContentLoaded', function() {

		var btnSignUp = document.querySelector('#submit');
		
		
		btnSignUp.addEventListener('click', function (event) {
		    
			var firstName = document.querySelector('#firstName');
			var lastName = document.querySelector("#lastName");
			var email = document.querySelector('#signUpEmail');
			var pass = document.querySelector("#signUpPass");
			
			var r1 = validateField(firstName, isValidFirstName);
			var r2 = validateField(lastName, isValidLastName);
			var r3 = validateField(email, isValidEmail);
			var r4 = validateField(pass, isValidPassword);

		
			if (r1 && r2 && r3 && r4) {
				
				function User(firstName, LastName, email,pass) {
					  this.firstName = firstName.value;
					  this.lastName = lastName.value;
					  this.email = email.value;
					  this.pass = pass.value;
					}
				var user = new User(firstName, lastName, email, pass);
				
				var userJson=JSON.stringify(user);
				
				 $.post('addUserDB.php', {userJson },function(data) {  
				
					 var data = JSON.parse(data);
					 if(data){
						 alert("Registration successful!");
						 
						 
					 }else{
						 alert("Registration unsuccessful!");
					 }
					 document.getElementById("upForm").reset();
				 }, 'json');
				 
				
				 
			}else{
				event.preventDefault();
			}
				
			
			
			
			
		}, false);
	}, false);