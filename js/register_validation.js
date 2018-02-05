// JavaScript Document


	function emailValidation()
    {
		var email = document.getElementById('email');
		var emailm = document.getElementById('error');
		 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Form1.email.value))  
  {  
    return (true)  
  }  
    emailm.innerHTML = "You have entered an invalid email address!" 
    return (false)   
  } 
  
  function ordinaryValidation1()
  {
	  var first_name = document.getElementById('error');
	  if(Form1.fname.value.length < 1)
    {
        first_name.innerHTML = "You have not entered a first name!"
		
    }
  }
  
  function ordinaryValidation2()
  {
	  var lname = document.getElementById('error');
	  if(Form1.lname.value.length < 1)
    {
        lname.innerHTML = "You have not entered a last name!"
		
    }
  }
  
   function ordinaryValidation3()
  {
	  var password = document.getElementById('error');
	  if(Form1.password1.value.length < 1)
    {
        password.innerHTML = "You have not entered a password!"
		
    }
	if(Form1.password1.value.length < 8)
	{
		password.innerHTML = "Your password needs more than 8 characters!"
  }
  }
  
  function checkPass()
  {
	  var passwordERROR = document.getElementById('error');
	  if (Form1.password1.value !== Form1.password2.value) {
        passwordERROR.innerHTML = "Passwords do not match!"
    }
  }
 
var attempt = 2;
function validate_login(){
var ERROR = document.getElementById('error');
var email = document.getElementById("email").value;
var password = document.getElementById("password1").value;
/*if ( email == "admin@next-shop.com" && password == "iloveshopping"){
alert ("Login successfully");
window.location.href = "user_home.html"; // Redirecting to other page.
return true;
}
else{
attempt --;// Decrementing by one.
alert( "Login details are incorrect! "+ attempt+ " times left");
return false;
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("email").disabled = true;
document.getElementById("password1").disabled = true;
document.getElementById("submit").disabled = true;
}
*/
}

 