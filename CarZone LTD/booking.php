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

		<div id="overlay" name="overlay">
            <button id="btnClose">X</button>

            <div id="addnewcar">
            	<form id="addnewcarform" method="post" action="php/addcarprocess.php">
            		<fieldset>
            			<legend>Add your new car</legend>
	            		<table id="addnewcartable">
	            			<tr>
	            				<td class="fcol"><label for="immatnum">Immatriculation Number</label></td>
	            				<td class="scol"><input type="text" id="immatnum" name="immatnum" autofocus required maxlength="15"></td>
	            			</tr>
	            			<tr>
	            				<td class="fcol"> <label for="make">Make</label> </td>
	            				<td class="scol"><input type="text" id="make" name="make" required maxlength="15"></td>
	            			</tr>
	            			<tr>
	            				<td class="fcol"> <label for="model">Model</label> </td>
	            				<td class="scol"><input type="text" id="model" name="model" required maxlength="15"></td>
	            			</tr>
	            			<tr>
	            				<td class="fcol"><label for="year">Year</label></td>
	            				<td class="scol"><input type="number" id="year" name="year" min="1990" max="2018" value="2018"></td>
	            			</tr>
	            			<tr>
	            				<td colspan="2" style="text-align: right;"><input type="button" name="btnsubmit" id="btnsubmit" value="Submit" onclick="addCar()"><input type="reset" name="btnreset" id="reset" value="Reset"></td>
	            			</tr>
	            		</table>
            		</fieldset>
            	</form>
            </div>
        </div>

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
				    echo "<p style=\"text-align: center; font-size: 25px; background-color: rgba(66, 114, 191, 0.8); width: 300px; margin-left: auto; margin-right: auto; border-radius: 5px 10px;\" id=\"name\">{$designation} {$_SESSION["firstname"]} {$_SESSION["lastname"]}</p>";

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