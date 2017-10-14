<!DOCTYPE html>
<html lang="en-UK">
    <head>

        <?php include 'head.html';
        ?>

        <link rel="stylesheet" type="text/css" href="style/contactstyles.css">

        <script type="text/javascript" src="js/contactform.js"></script>

        <title>Contact | CarZone</title>
    </head>

    <body>

        

        <!--overlay-->
        <div id="overlay" onclick="overlayOff()">
            <img src="images/locationmap.png" alt="img">
        </div>

        <!--endoverlay-->


        <div class="header">
            <div class="image">
                <img src="images/banner.png" style="width:100%; height:190px;">
            </div>
            
            <div class="below_header">
                <nav>
                    <ul>
                        <li style="width:70px; margin-left: 40px;"><a href="index.php"><img src="images/logo-favicon.png" width="16px" height="16px" ></a></li>

                        <li class="dropdown"><a href="#">About</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="about.php">About Us</a>
                                    <a href="#mechanics">About Employees</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#">Booking</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="bookingserv.php">Book a servicing date</a>
                                    <a href="bookingcheck.php">Book a check-up date</a>
                                </li>
                            </ul>            
                        </li>
                        <li class="dropdown"><a href="#">Feedback</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="feedback.php">Leave Feedback</a>
                                    <a href="review.php">View Review</a>
                                </li>
                            </ul>            
                        </li>
                        <li class="dropdown"><a class="active" href="#">Contact us</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="#location">Find us</a>
                                    <a href="https://www.facebook.com/CarZoneLtd">Facebook</a>
                                    <a href="mailto:shravan_dwarka@live.com">Mail</a>
                                    <a href="#form">Form</a>
                                </li>
                            </ul>            
                        </li>
                        <li style="float: right; margin-right: 40px;"><a href="login.php">Login</a></li>
                        <li style="float: right;"><a href="signup.php">Sign up</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="mainCon" style="background-image: url('images/pa1.png');">

            <div class="contactusform">
                <form id="contactform" method="post" action="php/contactprocess.php">
                        <fieldset>
                            <legend>Contact us by E-mail</legend>

                            <label>Name: </label>
                            <input type="text" name="txtname" id="txtname" class="txtname" placeholder="Enter name" size="25"> <span id="requiredname"></span>
                            <br>

                            <label id="emaillabel">Email: </label>
                            <input type="text" name="txtemail" id="txtemail" class="txtemail" placeholder="Enter Email Address" size="25"><span id="requiredemail"></span>
                            <br>

                            <label>Phone Number: </label>
                            <input type="text" name="txtphonenum" id="txtphonenum" class="txtphonenum" placeholder="Optional" size="10"><span id="checkphonenum"></span>
                            <br>

                            <label>Message:</label>
                            <br>
                            <textarea rows="10" cols="50" placeholder="" id="mytextarea" name="mytextarea"></textarea>

                            <br>
                            <input type="submit" value="Submit" onclick="return validateAll()" name="submitbtn">
                            <input type="button" onclick="resetAll()" value="Reset">
                        </fieldset>
                 </form>                
            </div>

            <div class="addInfo">
                <fieldset>
                    <legend>Additional Information</legend>

                    <table id="addInfoTable" style="border: 1px solid black;">
                    <tr>
                        <td rowspan="3">
                            <ul>
                                <li>
                                    <img src="images/tel.png" alt="Telephone"> 
                                </li>
                                <li>
                                    <p>Call us</p>
                                </li>
                            </ul>
                        </td>
                        <td><p>123 45678</p></td>
                    </tr>
                    <tr>
                        <td><p>5230 1234</p></td>
                    </tr>
                    <tr>
                        <td><p>999 9999</p></td>
                    </tr>

                    <tr>
                        <td>
                            <ul>
                                <li>
                                    <img src="images/map.png" alt="Pin">
                                </li>
                                <li>
                                    <p>Meet us at</p>
                                </li>
                            </ul>
                        </td>
                        <td><p>5, Royal Des Tenebres,Quatre Bornes</p></td>
                    </tr>

                    <tr>
                        <td>
                            <ul>
                                <li>
                                    <img src="images/staycon.png" alt="Link">
                                </li>
                                <li>
                                    <p>Stay connected</p>
                                </li>
                                
                            </ul>
                        </td>
                        <td>
                            <ul id="socialmedia">
                                <li><a href="http://www.facebook.com" target="_blank"><img src="images/facebook.png" id="firstimage" alt="facebook"></a></li>
                                <li><a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png" alt="facebook"></a></li>
                                <li><a href="http://www.youtube.com" target="_blank"><img src="images/youtube.png" alt="facebook"></a></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="button" value="Locate us on Map" id="locatebutton" onclick="overlayOn()">
                        </td>
                    </tr>
                    
                </table>
                </fieldset>
                
            </div>



        </div>


        <br>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php
            include 'footer.html';
        ?>
    </body>
</html>