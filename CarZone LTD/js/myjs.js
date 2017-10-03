var head = document.getElementsByTagName['head'];
var script = document.createElement('script');
script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";

$(document).ready(function()
{
    var nav = $('.navbar');
    var sp = $('.spacer');
    var banner = $('.header .image');
    var pos = nav.position();

    $(window).scroll(function()
        {
            var windowpos = $(window).scrollTop();
            if (windowpos >= banner.outerHeight())
            {
                nav.addClass("fixedTop");
            }
            else
            {
                nav.removeClass('fixedTop');
            }
        });
}
);



window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.documentElement.scrollTop > 350) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

$( document ).ready(function() {
    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 5000);    
    }
});