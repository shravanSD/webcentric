var head = document.getElementsByTagName['head'];
var script = document.createElement('script');
script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
script.src="jquery-3.2.1.js";
script.src="jquery-3.2.1.min.js";

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

