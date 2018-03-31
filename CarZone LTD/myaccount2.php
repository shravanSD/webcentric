<!DOCTYPE html>
<?php include("startsession.php"); ?>
<html>
<head>
	<?php include 'head.html'; ?>
	<title>My Account</title>
	<link rel="stylesheet" type="text/css" href="style/myaccount2.css">
	<script type="text/javascript" src="js/account.js"></script>
</head>
<body>
	<?php include 'header.php';?>

	<!--Add your content in this div-->
	<div class="mainCon">
		<div class="container">
			
			<div id="accheader">
				<p id="accdetails">My Account Details</p>
			</div>

			<table id="accmaintable">
				<tr>
					<td id="accmaintablefirstcol">
						<table id="accoption">
							<tr>
								<td><input type="button" onclick="checkAndSendRequest('info')" value="My Information"></td>
							</tr>
							<tr>
								<td><input type="button" onclick="checkAndSendRequest('book')" value="My Bookings"></td>
							</tr>
							<tr>
								<td><input type="button" onclick="checkAndSendRequest('feed')" value="My feedbacks"></td>
							</tr>
						</table>
					</td>

					<td>
						<div id="demo">
							
						</div>
					</td>
				</tr>
			</table>


			<div class="con" id ="divData"><div id="demo"></div></div>

		</div>
	</div>

	<br>

	<button onclick="scrollToTop(750)" id="myBtn" title="Go to top">Top</button> 

	<?php include 'footer.html'; ?>	
</body>
</html>
