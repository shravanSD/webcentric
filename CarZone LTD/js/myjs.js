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
                // sp.css('margin-top', '50px;');
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