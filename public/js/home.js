//navbar2-sticky//
$(document).scroll(function(e){
    let scrollTop = $(document).scrollTop();
    if(scrollTop > 0){
        $('.nav2').css("position","sticky");
        $('.nav2').css("top","-0.5px");
    } else {
        $('.nav2').css("position","relative");
    }
});
