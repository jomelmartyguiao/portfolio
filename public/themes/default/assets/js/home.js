$(document).ready(function(){
    //nav bar
    $(".navbar ul li").click(function(){
        var test = $(this).find("a").attr("data-id");
        $('html, body').animate({
            scrollTop: $(test).offset().top
        }, 1000);

        $(".navbar ul li").removeClass();
        $(this).addClass("active");
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 0) {
            $(".navbar ul li").removeClass();
            $("#white-li").addClass("active");
        } if ($(this).scrollTop() > 660) {
            $(".navbar ul li").removeClass();
            $("#blue-li").addClass("active");
        } if ($(this).scrollTop() > 1320) {
            $(".navbar ul li").removeClass();
            $("#orange-li").addClass("active");
        } if ($(this).scrollTop() > 1980) {
            $(".navbar ul li").removeClass();
            $("#yellow-li").addClass("active");
        }
    });


    //full page scroll
    var divs = $('.mydiv');
    var dir = 'up'; // wheel scroll direction
    var div = 0; // current div
    $(document.body).on('DOMMouseScroll mousewheel', function (e) {
        if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
            dir = 'down';
        } else {
            dir = 'up';
        }
        // find currently visible div :
        div = -1;
        divs.each(function(i){
            if (div<0 && ($(this).offset().top >= $(window).scrollTop())) {
                div = i;
            }
        });
        if (dir == 'up' && div > 0) {
            div--;
        }
        if (dir == 'down' && div < divs.length) {
            div++;
        }
        //console.log(div, dir, divs.length);
        $('html,body').stop().animate({
            scrollTop: divs.eq(div).offset().top
        }, 500);
        return false;
    });
    $(window).resize(function () {
        $('html,body').scrollTop(divs.eq(div).offset().top);
    });
});




