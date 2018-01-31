<!DOCTYPE html>
<?php include 'startsession.php';
$db = mysqli_connect("localhost", "root", "", "carzone") or die("Could not connect to database."); //Vyas
 ?>

<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>
        <link rel="stylesheet" href="style/booking.css">
        <script type="text/javascript" src="js/booking.js"></script><!--Vyas -->
        <title>Booking | CarZone</title>
    </head>

	<body style="background-image: url('images/showcase.jpg');">

		<?php include 'header.php'; ?>

		<div class="mainCon" >
			<?php
				if (isset($_SESSION["sessionSet"])) {
				    if ($_SESSION["gender"]=="M") {
				        $designation ="Mr.";
				    }
				    else{
				        $designation = "Mrs./Ms.";
				    }
				    echo "<p style=\"text-align: center; font-size: 25px; background-color: #ddd; width: 300px; margin-left: auto; margin-right: auto;\" id=\"name\">{$designation} {$_SESSION["firstname"]} {$_SESSION["lastname"]}</p>";

				        include 'bookingform.php';
				}
				else
				{
					echo "<p id=\"error_login\">You must be a member to book a servicing.<br>Thank you,<br>Management.</p>";
				}
			?>
		</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

	<?php include 'footer.html' ?>

	</body>
</html>