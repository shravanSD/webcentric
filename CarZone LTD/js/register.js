

			function f1(){
			fname = document.getElementById("fname").value;
			lname = document.getElementById("lname").value;
			emailadd = document.getElementById("email").value;
			tel = document.getElementById("tel").value;
			gender = document.getElementById("gender").value;
			password = document.getElementById("password").value;
			confpassword = document.getElementById("confpassword").value;

			clearall();
			//test regEx
			// var regexp1=new RegExp("[^a-z|^A-Z]");
			var telnoexp = /^([0-9]{8})$/;
			var regexp1 = /^([a-zA-Z]+)$/;
			var regExMail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


			if (fname=="") {
				fname_err.innerHTML = "*First name required!"
				//return false;
			}
			else if (lname=="") {
				lname_err.innerHTML = "*Last Name required!"
				//return false;
			}

			else if(!regexp1.test(fname))
			{
				fname_err.innerHTML = "*Invalid name!";
				//return false;
			}

			else if(!regexp1.test(lname))
			{
				lname_err.innerHTML = "*Invalid name!"
				//return false;
			}

			else if (emailadd=="") {
				email_err.innerHTML = "*Email address required!"
				//return false;
			}
			else if (!regExMail.test(emailadd)) {
				email_err.innerHTML = "*E-mail format not valid!";
				//return false;
			}

			else if(!telnoexp.test(tel))
			{
				tel_err.innerHTML =  "*Invalid Telephone no.!";
				//return false;
			}


			else if(password=="")
			{
				pass_err.innerHTML = "*Password required!";
				//return false;
			}

			else if (password.length<6) {
				pass_err.innerHTML = "*Minimum characters is 6";
				//return false;
			}

			//matching passwords?
			else if (password != confpassword) {
				passmatch_err.innerHTML = "*Unmatched passwords!";
				//return false;
			}

			///check terms and conditions --- error
			else if(!document.getElementById("signupterms").checked) {
				alert("Please Accept terms & Conditions");
				//return false;
			}


			//ajax-php
			else{
				alert("a");
				signupprocessing(fname,lname,emailadd,tel,gender,password);
				alert("z");
			}
		}


		function clearall(){

			fname_err.innerHTML = "";
			lname_err.innerHTML = "";
			email_err.innerHTML = "";
			tel_err.innerHTML = "";
			pass_err.innerHTML = "";
			passmatch_err.innerHTML = "";
		}

		function signupprocessing(fname,lname,emailadd,tel,gender,password){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState ==4 && this.status==200){
					document.getElementById("sign_message").innerHTML = this.response;
				}
			}

			xhttp.open("POST","php/registerprocess.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("fname="+fname+"&lname="+lname+"&email="+emailadd+"&tel="+tel+"&gender="+gender+"&password="+password);
		}