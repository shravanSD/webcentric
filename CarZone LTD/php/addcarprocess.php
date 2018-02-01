<?php
	
    session_start();

	$db = mysqli_connect("localhost", "root", "", "carzone");
	$member_email = $_SESSION["member_email"];
    $immat = $_POST["immatnum"];
    $make = $_POST["make"];
    $model = $_POST["model"];
    $year = $_POST["year"];

    $sql = "INSERT INTO car (immat_num,make,model,year,member_email) VALUES ('$immat', '$make', '$model', '$year', '$member_email');";

    $sql_check = "SELECT * FROM car WHERE immat_num='$immat'";

    $res = mysqli_query($db, $sql_check);

    if (!mysqli_num_rows($res))
    {
    	if (mysqli_query($db,$sql)){
	        echo "Insertion successful";
	    }
	    else{
	        echo "Insertion error";
	    }
    }
    else
    {
    	
    	echo "Record already added";
    }
    
?>