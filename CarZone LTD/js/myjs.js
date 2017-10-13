var head = document.getElementsByTagName['head'];
var script = document.createElement('script');
script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";

$(document).ready(function()
{
    var navbar = $('nav');
    var banner = $('header .image');
    var pos = navbar.position();

    $(window).scroll(function()
        {
            var windowpos = $(window).scrollTop();
            if (windowpos >= banner.outerHeight())
            {
                navbar.addClass("fixedTop");
            }
            else
            {
                navbar.removeClass('fixedTop');
            }
        });
}
);

