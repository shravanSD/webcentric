<!DOCTYPE html>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>
        <title>Leave Feedback | CarZone</title>
    </head>

    <body>
        <div class="header">
            <div class="image">
                <img src="images/banner.png" style="width:100%; height: 200px;">
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
                        <li class="dropdown"><a class="active" href="#">Feedback</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="feedback.php">Leave Feedback</a>
                                    <a href="review.php">View Review</a>
                                </li>
                            </ul>            
                        </li>
                        <li class="dropdown"><a href="#">Contact us</a>
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

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
        
        <?php
            include 'footer.html';
        ?>
    </body>
</html>