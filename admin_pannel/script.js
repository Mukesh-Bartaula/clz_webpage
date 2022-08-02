
		// logIn_page

function checkValidation() {
	let password = document.getElementById("password").value;
	 let passwordSize = password.length;
	 var passwordErrorElement = document.getElementById("password-error")
	 let errorMessage = ""
	if(!password){
		errorMessage = "Password cann't be empty."
	 } else if (passwordSize <= 5) {
		
		 errorMessage = "Password must be atleast 6 character."
	}
	passwordErrorElement.innerHTML = errorMessage
}
function showPassword(){
 var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }	
}

    //slider js
var i = 1 ;
var img = [];
var time = 4000;
img[1] = "./img/ps-11.webp";
img[2] = "./img/ps-2.webp";
img[3] = "./img/ps-3.webp";
img[4] = "./img/ps-1.webp";
 
function changeImg(){
	document.img_slider.src = img[i];

	if(i < img.length-1){
		i++;
	}
	else{
		i = 1;
	}
	setTimeout("changeImg()", time);
	 
}
window.onload = changeImg;

