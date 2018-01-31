<?php
	include 'startsession.php';

	$db = mysqli_connect("localhost", "root", "", "carzone");
	$member_email = $_SESSION["member_email"];
    $booking_date = $_POST["bk_date"];
    $booking_time = $_POST["bk_time"];
    $booking_subject = $_POST["bk_subject"];
    $booking_details = $_POST["bk_details"];
    $booking_vehicle = $_POST["vehicle"];

    $sql = "INSERT INTO 'rendezvous' VALUES (NULL, {$booking_subject}, {$booking_details}, {$booking_time}, {$booking_date}, {$member_email}, {$booking_vehicle});"
    $sql2 = "INSERT INTO 'rendezvous' VALUES (NULL, 'Engine', 'Engine heats up', '12:30', '2018-02-01', 'shravan@dell.com', '142CZ13');"

    $result = mysqli_query($db,$sql);

    if ($result)
    	echo "Submitted!";
?>