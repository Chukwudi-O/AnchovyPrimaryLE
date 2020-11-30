user = document.getElementById("user");
pw = document.getElementById("pass");
function validateLogin(){
	if (user.value == "" || pw.user == ""){
		return false;
	} else{
		return true;
	}
}