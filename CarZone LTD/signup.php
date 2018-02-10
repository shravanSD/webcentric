 

<!-- Registration Page -->

<!DOCTYPE html>
<html lang="en-UK">
<head>
    <?php include 'head.html'; ?>

    <!--add your individual style/js here-->
    <link rel="stylesheet" type="text/css" href="style/registerstyles.css">
    <script type="text/javascript" src="js/register.js"></script>
    <!--addtitle-->
    <title>Sign Up</title>

</head>

<body>

    <?php include 'header.php';?>

    <!--Add your content in this div-->
    <div class="mainCon" style="background-image: url('images/showcase.jpg');">
        <br><br><br><br>
        <div class="LoginBox" id="LoginBox">
            <img src="images/user2.png" class="user" alt="not found">
            
            
            <h2>Sign Up</h2>
            <br>
            <form name="form1" action="php/registerprocess.php" method="post" >
                <!-- <p>First Name</p> -->
                <input type="text" name="fname" id="fname" placeholder="First Name">
                <span id="fname_err"></span>
                <!-- <p>Last Name</p> -->
                <input type="text" name="lname" id="lname" placeholder="Last Name">
                <span id="lname_err"></span>
                <!-- <p>Email</p> -->
                <input type="text" name="email" id="email" placeholder="E-mail address">
                <span id="email_err"></span>

                <input type="password" name="password" id="password" placeholder="Password">
                <span id="pass_err"></span><br>
                <!-- <p>Confirm Password</p> -->
                
                <input type="password" name="confpassword" id="confpassword" placeholder="Confirm Password">
                <span id="confpass_err"></span><br>
                <span id="passmatch_err"></span><br>

                Gender:
                <select name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select><br><br>

                <input type="text" name="tel" id="tel" placeholder="Telephone no."><span id="tel_err"></span><br>


                
                <!-- <p>Password</p> -->
                

                
                <input type="checkbox" name="signupterms" id="signupterms" value="terms">I agree to terms of use.<br>
                <a href="terms.php">Terms &amp Conditions</a>
                <br>
                <br>
                <input type="button" name="btnSubmitSu" id="btnSubmitSu" onclick="f1()" value="Sign up"><br><br>
                Already a member? <a href="signin.php">Sign in</a> instead.
            </div>
            <br>

            <p id="sign_message"></p>

        </div>


        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
    </html>