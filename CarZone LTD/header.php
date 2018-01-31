<header>
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
                            <a href="aboutemployees.php">About Employees</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown"><a href="booking.php">Booking</a></li>

                <li class="dropdown"><a href="#">Feedback</a>
                    <ul class="dropdown-content">
                        <li>
                            <a href="customerfeedback.php">Leave Feedback</a>
                            <a href="review.php">View Review</a>
                        </li>
                    </ul>            
                </li>
                <li class="dropdown"><a href="contact.php">Contact us</a>         
                </li>
                
                <?php 
                    // session_start();
                    if(isset($_SESSION["sessionSet"])){
                       echo "<li style=\"float: right; margin-right: 40px;\"><a href=\"php/logoutprocess.php\">Log Out</a></li>
                            <li style=\"float: right;\"><a href=\"myaccount.php\">My Account</a></li>"; 
                    }
                    else{
                        
                        echo  "<li style=\"float: right; margin-right: 40px;\"><a href=\"signin.php\">Login</a></li>
                            <li style=\"float: right;\"><a href=\"signup.php\">Sign up</a></li>";
                    }
                ?>

            </ul>
        </nav>
    </div>
</header>