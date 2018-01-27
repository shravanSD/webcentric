<?php  
	
    $db = mysqli_connect("localhost", "root", "", "carzone");

    //if (isset($_POST['btnSubmitSU'])) {
        
        // $firstname = mysqli_real_escape_string($db,$_POST['fname']);
        // $lastname = mysqli_real_escape_string($db,$_POST['lname']);
        // $member_email = mysqli_real_escape_string($db,$_POST['email']);
        // $phonenumber = mysqli_real_escape_string($db,$_POST['tel']);
        // $gender = mysqli_real_escape_string($db,$_POST['gender']);
        // $password = mysqli_real_escape_string($db,$_POST['password']);

        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $member_email = $_POST["email"];
        $phonenumber = $_POST["tel"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        

	    $duplicatycheck = "SELECT * FROM member where member_email='$member_email'";
	    $result1 = mysqli_query($db,$duplicatycheck);

	    if (mysqli_num_rows($result1)>0) {
	    	echo "You are already a member!";
	    }
	    else{
	    		$sql = "INSERT INTO member(member_email, password, firstname, lastname, phonenumber, gender) VALUES ('$member_email', '$password', '$firstname', '$lastname', '$phonenumber', '$gender')";
	            if(mysqli_query($db, $sql)){
	            	echo "You are now a member! You can now login";
	    		}
	        	else{
	        		echo "an error has occured";
	        	}
	           //$_SESSION['firstname'] = $firstname;
	            //header("location: index.php"); //redirect
	    }   
	        	        	        
	//}

?>