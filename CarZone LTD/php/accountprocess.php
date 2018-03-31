<?php
	header("Cache-Control: no-cache");
	header("Content-type: text/xml");
	
	$dis = $_GET["boom"];
	//$dis="info";
	$res = "";

	 session_start();
	$member_email = $_SESSION["member_email"];
	
	$db_host="localhost";
	$db_username="root";
	$db_pass="";
	$db_name="carzone";
	$connection = mysqli_connect($db_host,$db_username,$db_pass) or die ("could not connect to mysql");
	$db = mysqli_select_db($connection,$db_name) or die ("no database");
	
	
	
	if($dis == 'info'){
		$query=mysqli_query($connection,"SELECT * FROM member where member_email='$member_email'");
		$res.="<?xml version=\"1.0\" encoding=\"utf-8\"?>";
		$res.="<information>";
		
		while($row=mysqli_fetch_array($query)){
			$mail=$row['member_email'];
			$pass=$row['password'];
			$first=$row['firstname'];
			$last=$row['lastname'];
			$phone=$row['phonenumber'];
			$gender=$row['gender'];

			$res.="<member>";
			$res.="<member_email> $mail </member_email>";
			$res.="<password> $pass </password>";
			$res.="<firstname> $first </firstname>";
			$res.="<lastname> $last </lastname>";
			$res.="<phonenumber> $phone </phonenumber>";
			$res.="<gender> $gender </gender>";
			$res.="</member>";
		}
		$res.="</information>";
		
	}
	
	if($dis == 'book'){
		$query=mysqli_query($connection,"SELECT * FROM rendezvous where member_email='$member_email'");
		$res.="<?xml version=\"1.0\" encoding=\"utf-8\"?>";
		$res.="<booking>";
		
		while($row=mysqli_fetch_array($query)){
			$id=$row['id'];
			$subject=$row['subject'];
			$message=$row['message'];
			$time=$row['time'];
			$date=$row['date'];
			$member_email=$row['member_email'];
			$res.="<book>";
			
			$res.="<subject> $subject </subject>";
			$res.="<message> $message </message>";
			$res.="<time> $time </time>";
			$res.="<date> $date </date>";
			$res.="<member_email> $member_email </member_email>";
			$res.="</book>";
		}
		$res.="</booking>";
		
	}
	
	if($dis == 'feed'){
		$query=mysqli_query($connection,"SELECT * FROM feedback where member_email='$member_email'");
		$res.="<?xml version=\"1.0\" encoding=\"utf-8\"?>";
		$res.="<feedback>";
		
		while($row=mysqli_fetch_array($query)){
			// $id=$row['id'];
			$shortreaction=$row['shortreaction'];
			$details=$row['details'];
			$rating=$row['rating'];
			$member_email=$row['member_email'];
			$res.="<feed>";
			// $res.="<id> $id </id>";
			$res.="<shortreaction> $shortreaction </shortreaction>";
			$res.="<details> $details </details>";
			$res.="<rating> $rating </rating>";
			$res.="<member_email> $member_email </member_email>";
			$res.="</feed>";
		}
		$res.="</feedback>";
		
	}
	
	echo $res;
	
	
?>