<?php
	$db = mysqli_connect("localhost", "root", "", "carzone");
	$member_email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM member where member_email='$member_email' AND password='$password'";

    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result)==1){
    	while ($row = mysqli_fetch_assoc($result)) {
    		echo "Logged In";
    	}
    }
    else{
    	echo "No rec";
    }


?>