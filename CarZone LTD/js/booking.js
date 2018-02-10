$(document).ready(function() {

	displayCars();

});

$(document).on('click','#addnew',function(event) { //binding after document has been loaded
		$('#overlay').show(500);
		$('body').addClass('noscroll');
		$("#autoRefresh").empty();	
});

$(document).on('click','#btnClose',function(event) {//binding after document has been loaded
		$("#overlay").hide(500);
		$('body').removeClass('noscroll');	
		displayCars();
});

$(document).on('click','#btnsubmitcar',function(event) {//binding after document has been loaded
		addCar();
		$("#overlay").hide(500);
		$('body').removeClass('noscroll');	
});

$(document).on( 'keydown', function ( e ) {
	if ( e.keyCode === 27 ) { // ESC
		$('#overlay').hide(500);
		$('body').removeClass('noscroll');	
		displayCars();
	}
});

// function getData() {
// 		$.ajax({
// 			url: 'addcar.php',
// 			type: 'post',
// 			success: function(data) {
// 				if (data.success) {
// 					setTimeout(function() {
// 						location.reload;
// 					}, 1000);
// 				}
// 			}
// 		});
// 	}

function displayCars(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState ==4 && this.status==200){
			document.getElementById("autoRefresh").innerHTML = this.response;	
		}
	}
	xhttp.open("post", "addcar.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

}


function submitData() {
	var bookdate = document.getElementById('bkdate').value
	var booktime = document.getElementById('bktime').value;
	var vehiclegroup = document.getElementsByName('vehicle');
	var bookvehicle;

	for (var i = 0; i < vehiclegroup.length; i++) {
		if (vehiclegroup[i].checked) {        
    		bookvehicle = vehiclegroup[i].value;
		}
	}
	
	var booksubject = document.getElementById('bksubject').value;
	var bookdetails = document.getElementById('bkdetails').value;

	// if (!checkDate(bookdate))
	// {
	// 	alert("Date must be in the future");
	// 	return false;
	// }

	if (bookdate == '' | booktime == '' | bookvehicle == '' | booksubject == '' | bookdetails == '')
	{
		alert("Fields cannot be left blank.")
	}
	else
	{
		bookingprocessing(bookdate, booktime, booksubject, bookdetails, bookvehicle);
	}
}

function addCar() {
	var immat = document.getElementById('immatnum').value;
	var make = document.getElementById('make').value;
	var model = document.getElementById('model').value;
	var year = document.getElementById('year').value;

	if (immat == '' | make == '' | model == '' )
	{
		alert("Fields cannot be left blank");
	}
	else
	{
		addnewcarprocessing(immat, make, model, year);
	}
}



function addnewcarprocessing(immat, make, model, year) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status== 200) {
			$("#overlay").hide(500);
			displayCars();
		}
	}

	xhttp.open("POST", "php/addcarprocess.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("immatnum=" + immat + "&make=" + make + "&model=" + model + "&year=" + year);
}

function bookingprocessing(bookdate, booktime, booksubject, bookdetails, bookvehicle) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status== 200) {
			var str = this.response;
			document.getElementById("bookingform").reset();
			document.getElementById("message").innerHTML = str;
		}
	}

	xhttp.open("POST","php/bookingprocess.php",true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("bkdate=" + bookdate + "&bktime=" + booktime + "&bksubject=" + booksubject + "&bkdetails=" + bookdetails + "&bkvehicle=" + bookvehicle);
}

function checkDate(value) {
	var now = new Date();
	if (value <= now) {
		return false;
	}
}