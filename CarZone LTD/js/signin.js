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
				alert("aa");
				signinprocessing(emailadd,password);

			}

		}

		function signinprocessing(emailadd,password){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState ==4 && this.status==200){
					document.getElementById("login_message").innerHTML = this.response;
				}
			}

			xhttp.open("POST","php/loginprocess.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("email="+emailadd+"&password="+password);
		}