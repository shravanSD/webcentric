<!--template-->

<!DOCTYPE html>
<?php include("startsession.php"); ?>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>

        <!--add your individual style/js here-->
        <link rel="stylesheet" type="text/css" href="">
        <script type="text/javascript" src=""></script>
        <!--addtitle-->
        <title></title>

    </head>

    <body>

        <?php include 'header.php';?>

        <!--Add your content in this div-->
        <div class="mainCon">
            Welcome to your account <?php echo $_SESSION["lastname"]." ".$_SESSION["firstname"]; ?>
        </div>


        <br>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
</html>