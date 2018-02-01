<?php
	$db = mysqli_connect("localhost", "root", "", "carzone");
	$member_email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM member where member_email='$member_email' AND password='$password'";

    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result)==1){
    	while ($row = mysqli_fetch_assoc($result)) {

            //session variables
            session_start();
            $_SESSION["sessionSet"] = 1;
            $_SESSION["member_email"] = $row["member_email"];
            $_SESSION["firstname"] = $row["firstname"];
            $_SESSION["lastname"] = $row["lastname"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["phonenumber"] = $row["phonenumber"];

    		echo "Logged in. Redirecting to Homepage";
    	}
    }
    else{
    	echo "Invalid User";
    }


?>