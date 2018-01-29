<?php 
	session_start();
	if(isset($_SESSION["sessionSet"])){
		session_destroy();
		header("Location:../");
	}else{

	}
?>