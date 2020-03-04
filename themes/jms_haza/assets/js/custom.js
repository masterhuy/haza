showAllDemo = () => {
    $(".js-show-all-demo").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $(".menu-item.sub-home").removeClass("show-8-demo");
    });
}

$(document).ready(function(){
    $("#header-sidebar, #sidebar-btn").on("click", function(e) {
        e.preventDefault();
    });

    $("#header-sidebar .block-newsletter").on("click", function(e) {
        e.stopPropagation();
    });

    var promobarHeight = $("#promobar").innerHeight();
    console.log(promobarHeight);
    if(promobarHeight > 0){
        $("body").css("margin-top", promobarHeight)
    }
    $("#promobar .close").click(function(){
        $("body").css({"margin-top": "0", "transition": "all .4s"})
    });

    showAllDemo();

});
jQuery(window).load(function() {
    /* Stop carousel */
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