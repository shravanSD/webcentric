$(document).ready(function() {
	$('a[href^="#"]').on('click', function(event) {

	    var target = $( $(this).attr('href') );
	    target.fadeToggle(100);
	    /*if( target.length ) {
	        event.preventDefault();
	        $('html, body').animate({
	            scrollTop: target.offset().top
	        }, 2000);
	    }*/

	});
});

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

function checkDate(value) {
	var now = new Date();
	if (value <= now) {
		return false;
	}
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