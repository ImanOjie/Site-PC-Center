$(document).ready(function(){
//navbar2-sticky//
    $(document).scroll(function(e){
        let scrollTop = $(document).scrollTop();
        if(scrollTop > 0){
            $('.nav2').css("position","fixed");
            $('.nav2').css("top","-0.5px");
        } else {
            $('.nav2').css("position","relative");
        }
    });

//

    /*$('.item-menubar').hover(function(e){
        $(this).next('dropdown-submenu').hover();
        e.stopPropagation();
        e.preventDefault();
    });*/



});



