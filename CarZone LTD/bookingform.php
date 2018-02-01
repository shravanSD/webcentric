<form id="bookingform" method="post" action="">
	<!-- <fieldset> -->
		<legend style="margin-left: 10px; font-size: 20px;"><strong>Fill</strong> the form below to <strong>complete</strong> booking</legend>
		<br>
		<br>
		<table id="bktable">
			<tr>
				<td class="rightadj"><label for="bkdate">Booking Date</label></td>
				<td style="text-align: center;"><input type="date" id="bkdate" name="bkdate"></td>
			</tr>

			<tr>
				<td><label for="bktime">Booking Time</label></td>
				<td style="text-align: center;"><input type="time" id="bktime" name="bktime"></td>
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
								echo "<td style=\"background-color: lightblue;\">" . $immat . "<br>" . $mk . "<br>" . $mdl . "<br>" . $yr . "<br> <input type='radio' value='{$immat}' name='vehicle'></td>";

								if ($inserted == $rowcount && !($inserted % 2))
								{
									echo "</tr>";
									echo "<tr><td style=\"background-color: red;\"><br>Add new car<br><br><input type=\"button\" name=\"#addnew\" id=\"addnew\" value=\"Add\" ><br><br></td>";
								}
								
								if (!($inserted % 2))
								{
									break;
								}
							}
							if (($inserted % 2))
								echo "<td style=\"background-color: red;\"><br>Add new car<br><br><input type=\"button\" name=\"#addnew\" id=\"addnew\" value=\"Add\" ><br><br></td>";
							echo "</tr>";
						}
						if (!($rowcount))
						{
							echo "<td style=\"background-color: red;\"><br>Add new car<br><br><input type=\"button\" name=\"#addnew\" id=\"addnew\" value=\"Add\" ><br><br></td>";
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
					<input type="button" class="buttoncss" name="btnsubmit" id="btnsubmit" value="Submit" onclick="submitData()"> <!-- Vyas-type change from submit to button -->
					<input type="reset" class="buttoncss" name="btnreset" id="btnreset" value="Reset">
				</td>
			</tr>
		</table>
		<br>
<!-- 	</fieldset> -->

</form>