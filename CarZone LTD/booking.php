<!DOCTYPE html>
<html lang="en-UK">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <script src="js/myjs.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function()
                {
                    var nav = $('.navbar');
                    var banner = $('.header .image');
                    var pos = nav.position();

                    $(window).scroll(function()
                        {
                            var windowpos = $(window).scrollTop();
                            if (windowpos>=banner.outerHeight())
                            {
                                nav.addClass('fixedTop');
                            }
                            else
                            {
                                nav.removeClass('fixedTop');
                            }
                        });
                }
            );
        </script>
        <link rel="shortcut icon" href="images/logo-favicon.png">
        <title>Booking | CarZone</title>
    </head>

    <body>
        <div class="header">
            <div class="image">
                <img src="http://via.placeholder.com/1920x350/" style="width: 1366px;height: 350px;">
            </div>
            <div class="navbar">
                <ul>
                    <li style="width:90px;"><a href="index.php"><img src="images/logo-favicon.png" width="16px" height="16px" ></a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a class="active" href="booking.php">Booking</a></li>
                    <li><a href="rating.php">Rating</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li style="float: right;"><a href="login.php">Login</a></li>
                    <li style="float: right;"><a href="signup.php">Sign up</a></li>
                </ul>
            </div>
                
        </header>
    </body>
</html>