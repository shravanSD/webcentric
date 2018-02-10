<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "", "carzone") or die("Could not connect to database."); //Vyas
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
			echo "<td style=\"background-color: red;\"><br>Add new car<br><br><input type=\"button\" name=\"addnew\" id=\"addnew\" value=\"Add\" ><br><br></td>";
		echo "</tr>";
	}
	if (!($rowcount))
	{
		echo "<td style=\"background-color: red;\"><br>Add new car<br><br><input type=\"button\" name=\"addnew\" id=\"addnew\" value=\"Add\" ><br><br></td>";
	}
	echo "</table>";
?>