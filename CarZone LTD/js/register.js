$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

//validation still has bugs

// function f1(){
// fname = document.getElementById("fname").value;
// lname = document.getElementById("lname").value;
// emailadd = document.getElementById("email").value;
// password = document.getElementById("password").value;
// confpassword = document.getElementById("confpassword").value;

// //test regEx
// // var regexp1=new RegExp("[^a-z|^A-Z]");
// var regexp1 = /[a-zA-Z]{6,15}/;
// if(!regexp1.test(document.getElementById("fname").value))
// {
//   alert("Only alphabets from a-z and A-Z are allowed for first name and should be between 6-15 characters");
//   return false;
// }

// if(!regexp1.test(document.getElementById("lname").value))
// {
//   alert("Only alphabets from a-z and A-Z are allowed for first name and should be between 6-15 characters");
//   return false;
// }

// if (fname=="") {
//   alert("You have not entered a first name");
//   return false;
// }

// if (fname.length<6 || lname.length<6) {
//   alert("Name too short");
//   return false;
// }

// if (fname.length>15 || lname.length>15) {
//   alert("Name too long");
//   return false;
// }

// if (lname=="") {
//   alert("You have not entered a last name!");
//   return false;
// }

// if (emailadd=="") {
//   alert("You have not entered an email address!");
//   return false;
// }


// if(password=="" || confpassword=="")
// {
//   alert("Both password fields are required!");
//   return false;
// }

// //matching passwords?
// if (password != confpassword) {
//   alert("The passwords do not match!");
//   return false;
// }

// //checkmail
// var regExMail = /([a-zA-Z.-_]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// if (!regExMail.test(document.getElementById("email").value)) {
//   alert("E-mail format not valid");
//   return false;
// }
// }