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
        <div id="overlay" >
            <button id="btnClose">X</button>
            <!--<img src="images/locationmap.png" alt="img">-->
            <div id="garageLocation"></div>
        </div>
        <!--endoverlay-->
        
        <?php
            include 'header.html';
        ?>

        <div class="mainCon" style="background-image: url('images/showcase.jpg');">
            <table id="contacttable">
                <tr>
                    <td>
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
                                <input type="submit" value="Submit" onclick="return validateAll()" name="submitbtn" id="submitbtn">
                                <input type="button" onclick="resetAll()" value="Reset" id="resetbtn">
                            </fieldset>
                            </form>                
                        </div>
                    </td>
                    
                    <td>
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
                                        <input type="button" value="Locate us on Map" id="locatebutton" >
                                    </td>
                                </tr>
                                
                            </table>
                            </fieldset>
                            
                        </div>
                    </td>
                </tr>
            </table>

        
        </div>


        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php
            include 'footer.html';
        ?>

        <script type="text/javascript">
            function mapInit(){

                var mapCenter = new google.maps.LatLng(-20.260016, 57.485919);
                var mapCanvas = document.getElementById("garageLocation");
                var mapOptions = {center:mapCenter,zoom:14};

                var map = new google.maps.Map(mapCanvas,mapOptions);

                var center = map.getCenter(); 
                google.maps.event.trigger(map, 'resize'); 
                map.setCenter(center);
                var marker = new google.maps.Marker({position:mapCenter});
                marker.setMap(map);
             }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpsD7Tf_ByUXFJYJGiI4zipuBrGnDvHkE&callback=mapInit"></script>

    </body>
</html>