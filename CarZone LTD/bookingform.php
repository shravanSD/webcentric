<!DOCTYPE html>
<?php
	include 'startsession.php';
	$db = mysqli_connect("localhost", "root", "", "carzone") or die("Could not connect to database.");
?>
<html>
	<head>
		<?php include 'head.html';?>
		<link rel="stylesheet" href="style/booking.css">
		<script type="text/javascript" src="js/booking.js"></script>
		<!-- <script>
			$(document).ready(function(){
			    $("input:radio").click(function(){
			        alert(this.value);
			    });
			});
		</script> -->
	</head>

	<body>
		<form id="bookingform" method="post">
			<fieldset>
				<legend>Fill the form below to complete booking</legend>
				<table id="bktable">
					<tr>
						<td class="rightadj"><label for="bkdate">Booking Date</label></td>
						<td><input type="date" id="bkdate" name="bkdate"></td>
					</tr>

					<tr>
						<td><label for="bktime">Booking Time</label></td>
						<td><input type="time" id="bktime" name="bktime"></td>
					</tr>

					<tr id="choosecarrow" >
						<td>
							<label for="choosecar">Choose/Add your car</label>
						</td>
						<td>
							<?php
								$query=mysqli_query($db,"SELECT * FROM car where member_email = '" . $_SESSION["member_email"] . "'");
								$rowcount = mysqli_num_rows($query);
								$inserted = 0;
								echo "<table id=\"cartable\">";
								
								while ($inserted < $rowcount)
								{
									echo "<tr>";
									while ($row = mysqli_fetch_array($query))
									{
										$inserted++;
										$immat = $row["immat_num"];
										$mk = $row["make"];
										$mdl = $row["model"];
										$yr = $row["year"];
										echo "<td>" . $immat . "<br>" . $mk . "<br>" . $mdl . "<br>" . $yr . "<br> <input type='radio' value='" . $immat . "' name='vehicle'></td>";

										if (!($inserted % 2))
										{
											break;
										}
									}
									echo "</tr>";
								}
								echo "</table>";
							?>
						</td>
					</tr>

					<tr>
						<td style="width: 40%;"><label for="bksubject">Subject</label></td>
						<td style="text-align: left; width: 60%;"><input style="width: 95%;" type="text" id="bksubject" name="bksubject" placeholder="Subject"></td>
					</tr>

					<tr>
						<td style="width: 40%;"><label style="vertical-align: text-top;" for="bkdetails">Details</label></td>
						<td style="text-align: left; width: 60%;"><input style="width: 95%; height: 100px; text-align: top;" type="text" id="bkdetails" name="bkdetails" placeholder="Details"></td>
					</tr>

					<tr>
						<td>
							<p id="message"></p>
						</td>
						<td style="text-align: right;">
							<input type="submit" name="btnsubmit" value="Submit" onclick="submit()">
							<input type="reset" name="btnreset" value="Reset">
						</td>
					</tr>
				</table>
			</fieldset>

		</form>
	</body>
</html>