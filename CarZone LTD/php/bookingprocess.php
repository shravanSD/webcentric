<?php
	
    session_start();

	$db = mysqli_connect("localhost", "root", "", "carzone");
	$member_email = $_SESSION["member_email"];
    $booking_date = $_POST["bkdate"];
    $booking_time = $_POST["bktime"];
    $booking_subject = $_POST["bksubject"];
    $booking_details = $_POST["bkdetails"];
    $booking_vehicle = $_POST["bkvehicle"];

    $td=date('Y-m-d',strtotime($booking_date));	//Converts date to 'yyyy-mm-dd' acceptable to mysql
    $tt=date('H:i:s',strtotime($booking_time)); //converts time to 'HH:mm:ss' acceptable to mysql

    $sql = "INSERT INTO rendezvous (subject,message,time,date,member_email,immat_num) VALUES ('$booking_subject', '$booking_details', '$tt', '$td', '$member_email', '$booking_vehicle');";

    $sql_check = "SELECT * FROM rendezvous WHERE immat_num='$immat_num' AND date='$td' AND time='$tt'";

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