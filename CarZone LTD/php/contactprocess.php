<?php
	
	$connection = mysqli_connect("localhost","root","","webproject");

	

	$name = $_POST["txtname"];
	$email = $_POST["txtemail"];
	$tel = $_POST["txtphonenum"];
	$message = $_POST["mytextarea"];

	
	$query = "INSERT INTO inbox(name,email,telephonenum,message) 
					VALUES('$name','$email','$tel','$message')";

	mysqli_query($connection,$query);
	
	mysqli_close($connection);

	echo "done";
?>