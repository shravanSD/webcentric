function submit() {
	var bookdate = document.getElementbyId('bkdate').value;
	var booktime = document.getElementbyId('bktime').value;
	var bookinput = document.getElementsByṆame('vehicle').value;
	var booksubject = document.getElementbyId('bksubject').value;
	var bookdetails = document.getElementbyId('bkdetails').value;

	alert("as");

	bookingprocessing(bookdate, booktime, booksubject, bookdetails, bookvehicle);
}

function checkDate(value) {
	var now = new Date();
	if (value = now) {
		alert("Date must be in the future");
		return false;
	}
}

function bookingprocessing(bookdate, booktime, booksubject, bookdetails, bookvehicle) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status== 200) {
			var str = this.response;
			document.getElementById("message").innerHTML =str;
		}
	}

	xhttp.open("POST","php/bookingprocess.php",true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("bkdate=" + bookdate + "&bktime=" + booktime + "&bksubject=" + booksubject + "&bkdetails=" + bookdetails + "&bkvehicle=" + bookvehicle);
}