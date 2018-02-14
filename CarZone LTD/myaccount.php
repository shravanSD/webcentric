<!--template-->

<!DOCTYPE html>
<?php include("startsession.php"); ?>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>

        <!--add your individual style/js here-->
        <link rel="stylesheet" type="text/css" href="style/myaccount.css">
        <script type="text/javascript" src=""></script>
        <!--addtitle-->
        <title></title>

    </head>

    <body>

        <?php include 'header.php';?>

        <!--Add your content in this div-->
        <div class="mainCon">
            <div class="grid-container">
                Welcome to your account
                <p id="name"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]; ?></p>
            </div>
        </div>


        <br>
        <button onclick="scrollToTop(750)" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
</html>