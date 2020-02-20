$(document).ready(function(){
    $(".home_2 .addon-alertbox .close").click(function(){
        $(".home_2 .header-2 ").css("margin-top", 0)
    });
    $("#header-sidebar, #sidebar-btn").on("click", function(e) {
        e.preventDefault();
    });

    $("#header-sidebar .block-newsletter").on("click", function(e) {
        e.stopPropagation();
    });

    var promobarHeight = $("#promobar").innerHeight();
    if(promobarHeight > 0){
        $("body").css("margin-top", promobarHeight)
    }
    $("#promobar .close").click(function(){
        $("body").css({"margin-top": "0", "transition": "all .4s"})
    });
});
jQuery(window).load(function() {
    /*
        Stop carousel
    */
    $('.carousel').carousel('pause');
});

jQuery(function ($) {
    "use strict"; 
    $.each( $('.promo-countdown'), function( key, value ) {
        var $expire_time = $(this).html();
        var datetime = $expire_time.split(" ");
        var date = datetime[0];
        var time = datetime[1];
        var datestr = date.split("-");
        var timestr = time.split(":");
        var austDay = new Date(datestr[0],datestr[1]-1,datestr[2],timestr[0],timestr[1],timestr[2],0);
        $(this).countdown({until: austDay});	
    });
});