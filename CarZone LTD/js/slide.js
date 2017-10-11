script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
script.src="jquery-3.2.1.js";
script.src="jquery-3.2.1.min.js";

$(document).ready(function() {
    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++)
        {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length)
        {
            myIndex = 1;
        }    
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000);
    }
});