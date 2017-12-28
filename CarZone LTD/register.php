<!DOCTYPE html>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>

        <!--add your individual style/js here-->
        <link rel="stylesheet" type="text/css" href="style/registerstyles.css">
        <script type="text/javascript" src="register.js"></script>
        <!--addtitle-->
        <title></title>

    </head>

    <body background="images/showcase.jpg">

        <?php include 'header.html';?>

        <!--Add your content in this div-->
        <div class="mainCon">
        
    <div class="form">
        
        <ul class="tab-group">
            <li class="tab"><a href="#signup">Sign Up</a></li>
            <li class="tab active"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">
            
            <div id="login">
                <h1>Welcome Back!</h1>

                <form action="index.php" method="post" autocomplete="off">
                    
                    <div class="field-wrap">
                        <label>
                          Email Address<span class="req">*</span>
                        </label>
                        <input type="email" required autocomplete="off" name="email"/>  
                    </div>
                  
                    <div class="field-wrap">
                        <label>
                          Password<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="password"/>
                    </div>
                  
                    <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                  
                  <button class="button button-block" name="login" /><img src="images/registration/SIGNIN.png" alt="register" width="250" height="75"></button>                 

                </form>
                
            </div>

            <div id="signup">   
                <h1>Sign Up</h1>
          
                    <form action="index.php" method="post" autocomplete="off">
                  
                    <div class="top-row">
                    <div class="field-wrap">
                      <label>
                        First Name<span class="req">*</span>
                      </label>
                      <input type="text" required autocomplete="off" name='firstname' id="fname" />
                    </div>
                
                    <div class="field-wrap">
                      <label>
                        Last Name<span class="req">*</span>
                      </label>
                      <input type="text"required autocomplete="off" name='lastname' id="lname" />
                    </div>
                  </div>

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' id="emailadd" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password' id="password" />
          </div>

          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='confpassword' id="confpassword" />
          </div>

          


        <button class="button button-block" name="login" /><img src="images/registration/SIGNUP.png" alt="register" width="250" height="75"></button>
          
          </form>

        </div>  

        </div>

    </div>
    
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/register.js"></script>
        </div>


        <br>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
</html>