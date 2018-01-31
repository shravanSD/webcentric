<!DOCTYPE html>
<?php include("startsession.php"); ?>
<html lang="en-UK">
    <head>
        <?php
            include 'head.html';
        ?>


        <link rel="stylesheet" href="style/indexstyles.css">
        <script src="js/slide.js"></script>
        <title>Home | CarZone</title>
    </head>

    <body>
        
        <?php
            include 'header.php';
        ?>
        


        <div class="mainCon">
            <div class="welcomeTagDiv">
                <?php
                    if (isset($_SESSION["sessionSet"])) {
                        if ($_SESSION["gender"]=="M") {
                            $designation ="Mr.";
                        }
                        else{
                            $designation = "Mrs./Ms.";
                        }
                        echo "<p id=welcomeTag>CarZone LTD welcomes you {$designation} {$_SESSION["firstname"]}.</p>";
                    }
                 ?>
            </div>
            <div class="showcaseImage"></div>
            <div class="sliderwrap">
                <div class="slider" style="max-width: 900px;">
                    <img class="mySlides" src="images/1.jpg" style="width:100%; height: 600px;">
                    <img class="mySlides" src="images/2.jpg" style="width:100%; height: 600px;">
                    <img class="mySlides" src="images/3.jpg" style="width:100%; height: 600px;">
                    <img class="mySlides" src="images/4.jpeg" style="width:100%; height: 600px;">
                    <img class="mySlides" src="images/5.jpg" style="width:100%; height: 600px;">
                    <img class="mySlides" src="images/6.jpg" style="width:100%; height: 600px;">
                </div>
            </div>

            <div class="indexintro">
                <section>
                    <table id="cont" cellspacing="30px">
                        <tr>
                            <td id="desc">
                                <h3>Brief history &amp Info </h3>
                                <p>We opened our dors in the fall of 2007 and thanks to you, our dear customers, we've grown a lot!  Our repair shops boast the latest equipment in car repair as well as trained personnel to take care of your cars' needs and ensure you are completely satisfied with our services.</p>
                            </td>
                        </tr>    

                        <tr>
                            <td id="services">
                                <h3>Services</h3><br>
                                <img src="images/Services/services.jpg" alt="services.jpg">
                            </td> 
                        </tr> 

                        <tr>
                            <td id="services">
                                <h3>Why Choose Us?</h3><br>
                                <p>Over the years, we've built up our reputation and trust with our loyal clientele. Today, we are happy to have 5000 of you among us. Moreover, last year's customer satisfaction survey has yielded a 99% positive response which we are definitely proud of. </p>

                                <p>Did we mention? We understand that not having your car for even one day may cause inconveniences, which is why our mechanics operate efficiently to get your car back to you as fast as possible in the best conditions</p>
                            </td> 
                        </tr> 



<!--                         <tr>
                            <td id="review">
                                <h3>Reviews</h3>
                                <img src="images/Reviews/speech-left.png" alt="speech-left.jpg" width="500px" id="speech-l">
                                <img src="images/Reviews/speech-right.png" alt="speech-right.jpg" width="700px" id="speech-r">
                            </td>
                        </tr>  -->

                        <tr>
                            <td id="help">
                                <h3>Need any help?</h3>
                                    <p>Hey there! Are you having any issues with your car lately? Don't know who to ask for help? No worries! We've got you covered. Contact our experts <a href="contact.php">here</a> and we'll be happy to answer your questions <strong>FREE</strong> of charge OR <a href="bookingserv.php">book</a> an appointment should you require any of the services we offer.</p>
                                </td>
                        </tr>   

                        <tr>
                            <td id="services">
                                <h3>Satisfied with our services?</h3>
                                <p>Leave us feedback <a href="customerfeedback.php">here</a>.</p>
                            </td> 
                        </tr> 

                    </table>
                </section>
            </div>

            <div class="review">
            
            </div>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php
            include 'footer.html';
        ?>

    </body>
</html>