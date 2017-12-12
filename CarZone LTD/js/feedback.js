$(document).ready(function(){
	$("#btnSubmit").click(function(){
		//var val1 = $("input[name=fb1]:checked").val();
		//var count = $("#feedbacktable tr").length - 2;
		//e.preventDefault();
		var sum = 0;
		var fb = [];
		count = 0;
		fb[1] = convertToFloat($("input[name=fb1]:checked").val());
		fb[2] = convertToFloat($("input[name=fb2]:checked").val());
		fb[3] = convertToFloat($("input[name=fb3]:checked").val());
		fb[4] = convertToFloat($("input[name=fb4]:checked").val());
		fb[5] = convertToFloat($("input[name=fb5]:checked").val());
		fb[6] = convertToFloat($("input[name=fb6]:checked").val());

		//sum of all elements
		for (var i = 1; i<fb.length;i++) {
			sum = sum + fb[i];
		}
		// average calculation
		if(sum==0){
			var average = 0;
		}
		else{
			var average = sum/count;
		}

		//rating highlight
		if (average>=0 && average<2) {
			$("#feedbackrating").css({"background-color": "#cc0000"});
		}
		else if (average>=2 && average<3.5) {
			$("#feedbackrating").css({"background-color": "#ffcc00"});
		}
		else{
			$("#feedbackrating").css({"background-color": "#009900"});
		}

		globalAverage = average.toFixed(2);
		$("#feedbackrating").html(globalAverage);
		$("#feedbackresult").fadeIn(1200);

		txtFeedback = $("#txtfeedback").val();
		
		//ajax to send value to php
		fbProcessing();
	
	});


	$("#feedbackresult").click(function(){
		$(this).fadeOut(1000);
		//reset form after submit
		$("#feedbackform")[0].reset();
	});
});

//global variable
var count; 
var globalAverage;
var txtFeedback ;

function convertToFloat(value){
	if (!value) {
		return 0;
	}
	else {
		count++;
		return parseFloat(value);
	}
}


function fbProcessing(){
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status==200){
			//get echoed strings from php file
			$("#finalmessage").html(this.response);
		}

	};
	xhttp.open("POST","php/feedbackprocess.php",true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("feedbackrating="+globalAverage+"&txtfeedback="+txtFeedback);

}