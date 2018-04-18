var myDiv=null;
var myAjax=null;
var flag=null;

function createAjaxRequest(){
	try{ 
		return new XMLHttpRequest(); 
	} catch(e) {}
	alert("XMLHttpRequest not supported");
	return null;
}

function checkAndSendRequest(value){
	flag=value;
	myDiv = document.getElementById("demo");
	if(myDiv.hasChildNodes()){
		for(var i=0;i<myDiv.childNodes.length;i++){
		myDiv.removeChild(myDiv.firstChild);
		}
	}
	//alert(value);
	sendAjaxRequest(value);
}

function sendAjaxRequest(value){
	myAjax=createAjaxRequest();
	if(!myAjax){
		alert("Ajax request could not be created...Use llatest firefox browser and reload application!");
		return false;
	}
	var element="boom";
	myAjax.open("GET","php/accountprocess.php?"+element+"="+value,true);
	myAjax.onreadystatechange=processAjaxResponse;
	myAjax.send(null);
}

var processAjaxResponse= function(){
	if(myAjax.readyState == 4 && myAjax.status ==200){
		var serverResponseViaAjax = myAjax.responseXML;
		// alert(serverResponseViaAjax);
		if(flag == 'info'){
			var mytable="<table id=\"accinfotable\"><tr><th>Email</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Gender</th></tr>";
			var x = serverResponseViaAjax.getElementsByTagName("member");
			for(i=0;i<x.length;i++){
				mytable += "<tr><td>" +
				x[i].getElementsByTagName("member_email")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("password")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("firstname")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("lastname")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("phonenumber")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("gender")[0].childNodes[0].nodeValue + 
				"</td></tr>"; 
			}
			mytable+="</table>";
			// alert(mytable);
			document.getElementById("accdetails").innerHTML = "My Information";
			document.getElementById("demo").innerHTML = mytable;
		}
		if(flag == 'book'){
			var mytable="<table id=\"accinfotable\"><tr><th>subject</th><th>message</th><th>time</th><th>date</th><th>member_email</th></tr>";
			var x = serverResponseViaAjax.getElementsByTagName("book");
			for(i=0;i<x.length;i++){
				mytable += "<tr><td>" +
				x[i].getElementsByTagName("subject")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("message")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("time")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("date")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("member_email")[0].childNodes[0].nodeValue + 
				"</td></tr>"; 
			}
			mytable+="</table>";
			// alert(mytable);
			// alert(document.getElementsByTagName("h1")[0].innerHTML);
			document.getElementById("accdetails").innerHTML = "My Booking Details";
			document.getElementById("demo").innerHTML = mytable;
		}
		if(flag == 'feed'){
			var mytable="<table id=\"accinfotable\"><tr><th>shortreaction</th><th>details</th><th>rating</th><th>member_email</th></tr>";
			var x = serverResponseViaAjax.getElementsByTagName("feed");
			for(i=0;i<x.length;i++){
				mytable += "<tr><td>" +
				x[i].getElementsByTagName("shortreaction")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("details")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("rating")[0].childNodes[0].nodeValue + 
				"</td><td>" + 
				x[i].getElementsByTagName("member_email")[0].childNodes[0].nodeValue + 
				"</td></tr>"; 
			}
			mytable+="</table>";
			document.getElementById("accdetails").innerHTML = "My Reviews";
			document.getElementById("demo").innerHTML = mytable;
		}
	}
}
