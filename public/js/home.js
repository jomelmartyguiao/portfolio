$(document).ready(function(){
    new WOW().init();
    $('.employee-of-the-month-container').slick();
    $(function() {
        $(".prg-color").addClass("progress-bar-black");
    });

    increment_prg(".prg1");
    increment_prg(".prg2");
    increment_prg(".prg3");
    increment_prg(".prg4");
    increment_prg(".prg5");
    increment_prg(".prg6");
    increment_prg(".prg7");
    increment_prg(".prg8");

    animate(".prg1","50%");
    animate(".prg2","90%");
    animate(".prg3","80%");
    animate(".prg4","98%");
    animate(".prg5","76%");
    animate(".prg6","83%");
    animate(".prg7","75%");
    animate(".prg8","89%");

    function increment_prg(s){
        var timer = setTimeout(function(){
            increment_prg(s)
    }, 30);
    $(s).text(parseInt($(s).text())+1 +'%');
    if($(s).text() == $(s).data('per')+'%'){
            clearTimeout(timer);
        }
    };

    function animate(p,r){
        $(p).animate({
            width: r
        }, 2000);
    };

    $(".navbar ul li").click(function(){
        var test = $(this).find("a").attr("data-id");
        $('html, body').animate({
            scrollTop: $(test).offset().top
        }, 1000);

        $(".navbar ul li").removeClass();
        $(this).addClass("active");
    });
});