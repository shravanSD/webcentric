<div id="reviewtab">

		<?php
			
	        $servername="localhost";
	        $username="root";
	        $password="";
	        $db_name="carzone";
	        $connection =mysqli_connect($servername,$username,$password) or die ("Could not connect to database.");
	        $db = mysqli_select_db($connection,$db_name) or die ("No database");
	        $query = mysqli_query($connection, "SELECT CONCAT(m.lastname,'  ',LEFT(m.firstname,1), '. ') AS Name, f.shortreaction, f.rating FROM feedback f, member m WHERE m.member_email = f.member_email LIMIT 5");

				echo "<table class=\"fbTable\">";
				echo "<tr>";
				// echo "<td><p>Reaction</p></td>";
				echo "<td id=\"fbTitle\" colspan=\"3\"><h3>Customer Feedback<h3></td>";
				// echo "<td>Name</td>";
				// echo "<td>Rating</td>";
				echo "</tr>";

	        while($row = mysqli_fetch_assoc($query))
	        {


	        	$name = $row["Name"];
	        	$detail = $row["shortreaction"];
	        	$rating = $row["rating"];

	        	

	        	echo "<tr><td class=\"fbReaction\">\"$detail\"</td>";
	        	
	        	echo "<td class=\"fbName\"> - $name</td>";
	       
	        	echo "<td class=\"fbRating\">";	
				echo " &nbsp &nbsp $rating";
				echo "		<span class=\"fa fa-star checked\" style=\"font-size:22px;\"></span>";
				echo "</td>";
	        	echo "</tr>";
	        	
	        }
	        echo "<td id=\"fbFooter\" colspan=\"3\">Click <a href=\"customerreviews.php\">here</a> to see more customer reviews.</td>";

 		echo "</table>";

    	?>
    	<p id="fbNote">Note: The maximum rating is 5.</p>
	</div>