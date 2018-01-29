<!DOCTYPE html>
<?php include("startsession.php"); ?>
<html lang="en-UK">
    <head>
        <?php include 'head.html'; ?>

        <!--add your individual style/js here-->
        <link rel="stylesheet" type="text/css" href="style/feedbackstyles.css">
        <script type="text/javascript" src="js/feedback.js"></script>
        <title>Feedback | CarZone</title>

    </head>

    <body>

        <!--overlay-->
        <div id="feedbackresult">
            <p>Thank you for your feedback!<br>
            Overall rating: <span id="feedbackrating" name="feedbackrating"></span></p>
        </div> 
        <!--endoverlay-->

        <?php include 'header.php';?>

        <!--Add your content in this div-->
        <div class="mainCon" style="background-image: url('images/showcase.jpg');">
            <form id="feedbackform" method="post">
                <table id="feedbacktable">
                    <caption>Customer Feedback</caption>
                    <tr>
                        <td><label>How was the customer service?</label></td>
                        <td>
                            <div id="1">            
                                  <label for="fb11">
                                    <input id="fb11" type="radio" name="fb1" value="1" />
                                    <img src="images/feedbackimages/1.png">
                                  </label>
                                  
                                  <label for="fb12">
                                    <input id="fb12" type="radio" name="fb1" value="2"/>
                                    <img src="images/feedbackimages/2.png">
                                  </label>
                                  
                                  <label for="fb13">
                                    <input id="fb13" type="radio" name="fb1" value="3" />
                                    <img src="images/feedbackimages/3.png">
                                  </label>
                                  
                                  <label for="fb14">
                                    <input id="fb14" type="radio" name="fb1" value="4" />
                                    <img src="images/feedbackimages/4.png">
                                  </label>

                                  <label for="fb15">
                                    <input id="fb15" type="radio" name="fb1" value="5" />
                                    <img src="images/feedbackimages/5.png">
                                  </label>
                              </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Were the mechanics helpful and friendly?</label></td>
                        <td>
                            <div id="2">
                    
                                  <label for="fb21">
                                    <input id="fb21" type="radio" name="fb2" value="1" />
                                    <img src="images/feedbackimages/1.png">
                                  </label>
                                  
                                  <label for="fb22">
                                    <input id="fb22" type="radio" name="fb2" value="2"/>
                                    <img src="images/feedbackimages/2.png">
                                  </label>
                                  
                                  <label for="fb23">
                                    <input id="fb23" type="radio" name="fb2" value="3" />
                                    <img src="images/feedbackimages/3.png">
                                  </label>
                                  
                                  <label for="fb24">
                                    <input id="fb24" type="radio" name="fb2" value="4" />
                                    <img src="images/feedbackimages/4.png">
                                  </label>

                                  <label for="fb25">
                                    <input id="fb25" type="radio" name="fb2" value="5" />
                                    <img src="images/feedbackimages/5.png">
                                  </label>
                              </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Was the job done professionally?</label></td>
                        <td>
                            <div id="3">
                    
                                  <label for="fb31">
                                    <input id="fb31" type="radio" name="fb3" value="1" />
                                    <img src="images/feedbackimages/1.png">
                                  </label>
                                  
                                  <label for="fb32">
                                    <input id="fb32" type="radio" name="fb3" value="2"/>
                                    <img src="images/feedbackimages/2.png">
                                  </label>
                                  
                                  <label for="fb33">
                                    <input id="fb33" type="radio" name="fb3" value="3" />
                                    <img src="images/feedbackimages/3.png">
                                  </label>
                                  
                                  <label for="fb34">
                                    <input id="fb34" type="radio" name="fb3" value="4" />
                                    <img src="images/feedbackimages/4.png">
                                  </label>

                                  <label for="fb35">
                                    <input id="fb35" type="radio" name="fb3" value="5" />
                                    <img src="images/feedbackimages/5.png">
                                  </label>
                              </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Was the job done professionally?</label></td>
                        <td>
                            <div id="4">
                    
                                  <label for="fb41">
                                    <input id="fb41" type="radio" name="fb4" value="1" />
                                    <img src="images/feedbackimages/1.png">
                                  </label>
                                  
                                  <label for="fb42">
                                    <input id="fb42" type="radio" name="fb4" value="2"/>
                                    <img src="images/feedbackimages/2.png">
                                  </label>
                                  
                                  <label for="fb43">
                                    <input id="fb43" type="radio" name="fb4" value="3" />
                                    <img src="images/feedbackimages/3.png">
                                  </label>
                                  
                                  <label for="fb44">
                                    <input id="fb44" type="radio" name="fb4" value="4" />
                                    <img src="images/feedbackimages/4.png">
                                  </label>

                                  <label for="fb45">
                                    <input id="fb45" type="radio" name="fb4" value="5" />
                                    <img src="images/feedbackimages/5.png">
                                  </label>
                              </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Was the job done professionally?</label></td>
                        <td>
                            <div id="5">
                    
                                  <label for="fb51">
                                    <input id="fb51" type="radio" name="fb5" value="1" />
                                    <img src="images/feedbackimages/1.png">
                                  </label>
                                  
                                  <label for="fb52">
                                    <input id="fb52" type="radio" name="fb5" value="2"/>
                                    <img src="images/feedbackimages/2.png">
                                  </label>
                                  
                                  <label for="fb53">
                                    <input id="fb53" type="radio" name="fb5" value="3" />
                                    <img src="images/feedbackimages/3.png">
                                  </label>
                                  
                                  <label for="fb54">
                                    <input id="fb54" type="radio" name="fb5" value="4" />
                                    <img src="images/feedbackimages/4.png">
                                  </label>

                                  <label for="fb55">
                                    <input id="fb55" type="radio" name="fb5" value="5" />
                                    <img src="images/feedbackimages/5.png">
                                  </label>
                              </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Was the job done professionally?</label></td>
                        <td>
                            <div id="6">
                    
                                  <label for="fb61">
                                    <input id="fb61" type="radio" name="fb6" value="1" />
                                    <img src="images/feedbackimages/1.png">
                                  </label>
                                  
                                  <label for="fb62">
                                    <input id="fb62" type="radio" name="fb6" value="2"/>
                                    <img src="images/feedbackimages/2.png">
                                  </label>
                                  
                                  <label for="fb63">
                                    <input id="fb63" type="radio" name="fb6" value="3" />
                                    <img src="images/feedbackimages/3.png">
                                  </label>
                                  
                                  <label for="fb64">
                                    <input id="fb64" type="radio" name="fb6" value="4" />
                                    <img src="images/feedbackimages/4.png">
                                  </label>

                                  <label for="fb65">
                                    <input id="fb65" type="radio" name="fb6" value="5" />
                                    <img src="images/feedbackimages/5.png">
                                  </label>
                              </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Leave us a short message!</label></td>
                        <td><textarea id="txtfeedback" name="txtfeedback" rows="4" cols="40"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="button" value="Submit" id="btnSubmit" /></td>
                        <td><input type="reset" value="Reset" id="btnReset" /></td>
                    </tr>
                </table>
            </form>
            <p id="finalmessage"></p>
        </div>


        
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 

        <?php include 'footer.html'; ?>
    </body>
</html>