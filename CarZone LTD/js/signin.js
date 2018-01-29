			function f2(){

			emailadd = document.getElementById("email").value;
			password = document.getElementById("password").value;

			//test regEx
			// var regexp1=new RegExp("[^a-z|^A-Z]");
			
			if (emailadd=="") {
				email_err.innerHTML =  "*E-mail address required!";
				// return false;
			}

			//matching passwords?
			else if (password =="") {
				pass_err.innerHTML = "*Password required!";
				// return false;
			}
			else {
				alert("Processing...");
				signinprocessing(emailadd,password);

			}

		}

		function indexLoc(){
			window.location.assign("index.php");
		}

		function signinprocessing(emailadd,password){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState ==4 && this.status==200){
					var str = this.response;
					document.getElementById("login_message").innerHTML =str;
					if(str.charAt(0)=='L'){
						setTimeout(indexLoc(),2000);
					}
				}
			}

			xhttp.open("POST","php/loginprocess.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("email="+emailadd+"&password="+password);
		}