$(document).ready(function(){
    var counter = 0;
//tooltip
    $('[data-toggle="tooltip"]').tooltip();
//wowjs
    new WOW().init();
//slick
    $('.project-img-modal').slick();
//progress bar color
    $(function() {
        $(".prg-color").addClass("progress-bar-black");
    });
//progress bar animation


    $('.progress-bar-container').hide()
    $(".show-skills").click(function(){
        var test = $(this).find("a").attr("data-id");
        if ($(this).offset().top = 1000) {
            if(counter == 0){
            counter = 1;
            $('.skills-bulb').fadeOut();
            increment_prg(".prg1");
            increment_prg(".prg2");
            increment_prg(".prg3");
            increment_prg(".prg4");
            increment_prg(".prg5");
            increment_prg(".prg6");
            increment_prg(".prg7");
            increment_prg(".prg8");

            animate(".prg1","85%");
            animate(".prg2","86%");
            animate(".prg3","84%");
            animate(".prg4","75%");
            animate(".prg5","64%");
            animate(".prg6","64%");
            animate(".prg7","65%");
            animate(".prg8","89%");
            function animate(p,r){
                $(p).animate({
                    width: r
                }, 2000);
            };
                $('.progress-bar-container').fadeIn();
                function increment_prg(s){
                    var timer = setTimeout(function(){
                        increment_prg(s)
                    }, 30);
                    $(s).text(parseInt($(s).text())+1 +'%');
                    if($(s).text() == $(s).data('per')+'%'){
                        clearTimeout(timer);
                    }
                }
            }
        }
    });
//nav bar
    $(".navbar ul li").click(function(){
        var test = $(this).find("a").attr("data-id");
        $('html, body').animate({
            scrollTop: $(test).offset().top
        }, 1000);

        $(".navbar ul li").removeClass();
        $(this).addClass("active");
    });
//scroll top button
    $('.scroll-top').hide()
    $(window).scroll(function() {
        if ($(this).scrollTop() > 400) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });
    $("a[href='#page-top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

 //scroll active nav bar
    $(window).scroll(function() {
        if ($(this).scrollTop() > 923) {
            $(".navbar ul li").removeClass();
            $("#about-li").addClass("active");
        } if ($(this).scrollTop() > 1300) {
            $(".navbar ul li").removeClass();
            $("#skills-li").addClass("active");
        } if ($(this).scrollTop() > 1600) {
            $(".navbar ul li").removeClass();
            $("#experience-li").addClass("active");
        } if ($(this).scrollTop() > 2800) {
            $(".navbar ul li").removeClass();
            $("#projects-li").addClass("active");
        }
    });

});
