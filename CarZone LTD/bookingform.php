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
					<input type="button" id="refreshbutton" name="refreshbutton" value="Refresh" onclick="getData()">
				</td>
				<td>
					<div id="autorefresh">
						<?php include 'addcar.php'; ?>
					</div>
				</td>
			</tr>

			<tr>
				<td style="width: 40%;"><label for="bksubject">Subject</label></td>
				<td style="text-align: left; width: 60%;"><input style="width: 95%;" type="text" id="bksubject" name="bksubject" placeholder="Subject"></td>
			</tr>

			<tr>
				<td style="width: 40%;"><label style="vertical-align: text-top;" for="bkdetails">Details</label></td>
				<td style="text-align: left; width: 60%;"><textarea style="width: 100%; height: 100px; text-align: top; resize: none;" type="text" id="bkdetails" name="bkdetails" placeholder="Details"></textarea></td>
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