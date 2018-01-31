<?php
	
    session_start();
	$db = mysqli_connect("localhost", "root", "", "carzone");
	$member_email = $_SESSION["member_email"];
    $booking_date = $_POST["bkdate"];
    $booking_time = $_POST["bktime"];
    $booking_subject = $_POST["bksubject"];
    $booking_details = $_POST["bkdetails"];
    $booking_vehicle = $_POST["bkvehicle"];

    $sql = "INSERT INTO rendezvous (subject,message,time,date,member_email,immat_num) VALUES ('$booking_subject', '$booking_details', '$booking_time', '$booking_date', '$member_email', '$booking_vehicle');";
    // $sql2 = "INSERT INTO 'rendezvous' VALUES (NULL, 'Engine', 'Engine heats up', '12:30', '2018-02-01', 'shravan@dell.com', '142CZ13');"

    

    if (mysqli_query($db,$sql)){
        echo "Insertion successful";
    }
    else{
        echo "Insertion error";
    }
?>