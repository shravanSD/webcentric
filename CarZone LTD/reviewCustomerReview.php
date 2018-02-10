<?php
$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="carzone";
$connection =mysqli_connect($db_host,$db_username,$db_pass,$db_name) or die ("could not connect to mysql");

?>
<div id="fbDiv">

	<?php
	$query=mysqli_query($connection,"SELECT * FROM feedback");

	echo "<table class=\"fbTable\">";
	echo "<tr>";
	echo "<td id=\"fbTitle\" colspan=\"3\"><h3>Customer Feedback<h3></td>";
	echo "</tr>";

	while($row=mysqli_fetch_array($query)){

		$shortreaction=$row['shortreaction'];
		$rating=$row['rating'];
		$member_email=$row['member_email'];
		if (!mysqli_query($connection, "SELECT * FROM member WHERE member_email=('$member_email')")) {
		}

		$member_email = mysqli_real_escape_string($connection, $member_email);


		if (mysqli_query($connection, "SELECT * FROM member WHERE member_email=('$member_email')")) {
			$query1=mysqli_query($connection,"SELECT * FROM member WHERE member_email=('$member_email')");
		}
		while($row1=mysqli_fetch_array($query1)){
			$firstname=$row1['firstname'];
			$firstname=substr($firstname,0,1);
			$lastname=$row1['lastname'];
			
		}
		echo "<tr>
		<td class=\"fbReaction\">&quot;$shortreaction&quot;</td>
		<td class=\"fbName\">-$lastname $firstname.</td>
		<td class=\"fbRating\">$rating<img id=\"goldstar\"src=\"images\GoldStar.png\"></td>
	</tr>";		
}
	echo "</table>";
?>
<p id="fbNote">Note: The maximum rating is 5.</p>
</div>

