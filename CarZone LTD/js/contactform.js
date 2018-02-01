var head = document.getElementsByTagName['head'];
var script = document.createElement('script');
script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";


function validateAll(){

	resetErrMessage();

	var name = document.getElementById('txtname').value;
	var email = document.getElementById('txtemail').value;
	var text = document.getElementById('mytextarea').value;
	var phnum = document.getElementById('txtphonenum').value;
	if(!validatename(name)){
		return false;
	}
	else if(!validateemail(email)){
		return false;
	}
	else if (!validatephonenum(phnum)){
		return false;
	}
	else if(!validatetextarea(text)){
		return false;
	}
	else{
		return true;
	}

}

function resetErrMessage(){
	document.getElementById('checkphonenum').innerHTML="";
	document.getElementById('requiredemail').innerHTML="";
	document.getElementById('requiredname').innerHTML="";
	document.getElementById('mytextarea').placeholder="";
}

function resetAll(){
	document.getElementById('txtphonenum').value="";
	document.getElementById('txtname').value="";
	document.getElementById('txtemail').value="";
	document.getElementById('mytextarea').value="";
	resetErrMessage();
}

function validatetextarea(text){
	if (text.length==0) {
		document.getElementById('mytextarea').placeholder="Please Enter Your Message!";
		return false;
	}
	return true;
}

function validatename(name){
	var pattern = /^([A-Za-z]+)$/;
	var message = document.getElementById('requiredname');
	if (name.length==0) {
		message.innerHTML="*Name required";
		return false;
	}
	else if(!pattern.test(name)){
		message.innerHTML="*Invalid name";
		return	false;
	}
	else{
		return true;
	}
}

function validateemail(email){
	var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var message = document.getElementById('requiredemail');
	if (email.length==0) {
		message.innerHTML="*Email required";
		return false;
	}
	else if(!pattern.test(email)){
		message.innerHTML="*Invalid Email";
		return	false;
	}
	else{
		return true;
	}
}

function validatephonenum(num){
	var pattern = /^([0-9]+)$/;
	var message = document.getElementById('checkphonenum');
	if (num.length!=0) {
		if (!pattern.test(num)) {
			message.innerHTML="Invalid Number";
			return false;
		}
		else if ((num.length<7)||(num.length>8)) {
			message.innerHTML="Invalid Number";
			return false;
		}
		else{
			return true;
		}
	}
	else{
		return true;
	}
}


//overlay

// function overlayOn(){
// 	document.getElementById('overlay').style.display="block";
// }

// function overlayOff(){
// 	document.getElementById('overlay').style.display="none";
// }

$(document).ready(function(){
	$('#locatebutton').click(function(){
		$("#overlay").fadeIn(500);
		$('body').addClass('noscroll');
		$("#garageLocation").css({"display":"block"});
		mapInit();
	});

	$("#btnClose").click(function(){
		$("#overlay").fadeOut(500);
		$('body').removeClass('noscroll');
	});
});

// $(document).ready(function(){
// 	$('#locatebutton').click(function(){
// 		$("#garageLocation").show();
// 	});

// 	// $("#overlay").click(function(){
// 	// 	$(this).fadeOut(1500);
// 	// });
// });