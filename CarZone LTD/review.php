<?php
$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="carzone";
$connection =mysqli_connect($db_host,$db_username,$db_pass) or die ("could not connect to mysql");
$db = mysqli_select_db($connection,$db_name) or die ("no database");
?>
<div id="abtbox1">
			
<?php
$query=mysqli_query($connection,"SELECT * FROM feedback");

echo "<table border=\"2\" style=\"width:400px\">";
echo "<tr><td width=\"100px\">Comments</td><td width=\"100px\">Name</td><td width=\"100px\">Rating</td></tr>";
while($row=mysqli_fetch_array($query)){
	
	$shortreaction=$row['shortreaction'];
	$details=$row['details'];
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
			$lastname=$row1['lastname'];
			$lastname=substr($lastname,0,1);
		}
	echo "<tr><td width=\"100px\">&quot;$shortreaction&quot;</td><td width=\"100px\">$lastname.$firstname</td><td width=\"100px\">$rating<img src=\"GoldStar.png\" height=\"25\" width=\"25\"></td></tr>";		
	}

?>
</div>

