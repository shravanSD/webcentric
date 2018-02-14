<!DOCTYPE html>
<?php include("startsession.php"); ?>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>

        <!--add your individual style/js here-->
        <link rel="stylesheet" type="text/css" href="style/aboutemployeesstyles.css">
        <script type="text/javascript" src="js/aboutemployees.js"></script>
        <!--addtitle-->
        <title>About Employees</title>

    </head>

    <body>

        <?php include 'header.php';?>

        <!--Add your content in this div-->
        <div class="mainCon" style="background-image: url('images/showcase.jpg');">
            <?php
                $db_host="localhost";
                $db_username="root";
                $db_pass="";
                $db_name="carzone";
                $connection =mysqli_connect($db_host,$db_username,$db_pass) or die ("Could not connect to database.");
                $db = mysqli_select_db($connection,$db_name) or die ("No database");
                //echo "successful connection <br>";
                $me=0;
            ?>
            <?php
                $pic = array('images/profilepics/download (1).jpg','images/profilepics/download.jpg','images/profilepics/images (1).jpg','images/profilepics/images (2).jpg','images/profilepics/images.jpg','images/profilepics/22a15ba4b06b1e7c55e89e5c3189e9ac--disney-xd-phineas-and-ferb.jpg','images/profilepics/Buford_drawing.jpg','images/profilepics/Isabella_blue_background_SBTY.jpg','images/profilepics/Phineas_and_Ferb_Interrupted_Image106.jpg','images/profilepics/Stacy_in_SBTY.jpg');
                
                ?>

            <div id="abtbox1">
                        
            <?php
            
            $query=mysqli_query($connection,"SELECT * FROM stakeholders");
            while($row=mysqli_fetch_array($query)){
                
                $id=$row['id'];
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $phonenum=$row['phonenum'];
                $stakeholder_email=$row['stakeholder_email'];
                $priviledge=$row['priviledge'];
                $job=$row['job'];
                if($priviledge ==1){
                    echo "<table class=\"abttable\" border=\"2\" style=\"width:450px\">";
                    echo "<tr><td align=\"center\" width=\"100px\" rowspan=\"7\"><img src=\"$pic[$me]\" height=\"100\" width=\"125\"></td></tr>";
                    echo "<tr><td width=\"100px\">ID: $id</td></tr>";
                    echo "<tr><td width=\"100px\">Firstname: $firstname</td></tr>";
                    echo "<tr><td width=\"100px\">Lastname: $lastname</td></tr>";
                    echo "<tr><td width=\"100px\">Tel: $phonenum</td></tr>";
                    echo "<tr><td width=\"100px\">Email: $stakeholder_email</td></tr>";
                    echo "<tr><td width=\"100px\">Job: $job</td></tr>";
                    echo "</table>";
                    echo "<br>";
                
                }
                $me++;
            }
            ?>
            </div>

            <div id="abtbox2">
            <?php
            
            $query=mysqli_query($connection,"SELECT * FROM stakeholders");
            $me=0;
            while($row=mysqli_fetch_array($query)){
                //echo "<img src=\"$pic[$me]\" height=\"125\" width=\"125\">";
                $id=$row['id'];
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $phonenum=$row['phonenum'];
                $stakeholder_email=$row['stakeholder_email'];
                $priviledge=$row['priviledge'];
                $job=$row['job'];
                if($priviledge ==2){
                    echo "<table class=\"abttable\" border=\"2\" style=\"width:450px\">";
                    echo "<tr><td align=\"center\" width=\"100px\" rowspan=\"7\"><img src=\"$pic[$me]\" height=\"100\" width=\"125\"></td></tr>";
                    echo "<tr><td width=\"100px\">ID: $id</td></tr>";
                    echo "<tr><td width=\"100px\">Firstname: $firstname</td></tr>";
                    echo "<tr><td width=\"100px\">Lastname: $lastname</td></tr>";
                    echo "<tr><td width=\"100px\">Tel: $phonenum</td></tr>";
                    echo "<tr><td width=\"100px\">Email: $stakeholder_email</td></tr>";
                    echo "<tr><td width=\"100px\">Job: $job</td></tr>";
                    echo "</table>";
                    echo "<br>";
                
                }
                $me++;
            }
            ?>
            </div>
            <!--Show/hide button-->
            <button id="btn" type="button">Show more</button>
        </div>
        
        <button onclick="scrollToTop(750)" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
</html>