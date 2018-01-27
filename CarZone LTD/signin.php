<!-- Signin Page -->

<!DOCTYPE html>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>

        <!--add your individual style/js here-->
        <link rel="stylesheet" type="text/css" href="style/registerstyles.css">
        <script type="text/javascript" src="js/signin.js"></script>
        <!--addtitle-->
        <title>Login</title>

    </head>

    <body>

        <?php include 'header.html';?>

        <!--Add your content in this div-->
        <div class="mainCon" style="background-image: url('images/showcase.jpg');">
            <br><br><br><br>
            <div class="LoginBox2" id="LoginBox2">
            <img src="images/user2.png" class="user"alt="not found">
            
            
            <h2>Login</h2>
            <br>
            <form name="form1" action="php/loginprocess.php" method="post">
                
                
                <input type="text" name="email" id="email" placeholder="E-mail address"><span id="email_err"></span><br><br>
                <!-- <p>Password</p> -->
                
                <input type="password" name="password" id="password" placeholder="Password">
                <span id="pass_err"></span>

                <br>
                <br>
                <input type="button" name="btnSubmitSI" id="btnSubmitSI" value="Sign In" onclick="f2()"><br><br>
                <a href="signup.php">Not a member?  Sign up here.</a>

        </div>
        <br>
            <p id="login_message"></p>
            
        </div>

        

            
        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
</html>