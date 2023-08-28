//navbar2-sticky//
$(document).scroll(function(e){
    var scrollTop = $(document).scrollTop();
    if(scrollTop > 0){
        //console.log(scrollTop);
        $('.nav2').css("position","fixed");
        $('.nav2').css("top","-0.1px");
    } else {
        $('.nav2').css("position","relative");
    }
});
