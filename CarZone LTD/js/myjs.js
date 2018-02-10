var head = document.getElementsByTagName['head'];

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
                navbar.addClass('fixedTop');
            }
            else
            {
                navbar.removeClass('fixedTop');
            }
        });
    $(".dropdown").mouseover(function(){
        $("> .dropdown-content",this).css({"display":"block"});
    });

    $(".dropdown").mouseleave(function(){
        $("> .dropdown-content",this).css({"display":"none"});
    });
}
);

