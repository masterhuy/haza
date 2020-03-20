showAllDemo = () => {
    $(".js-show-all-demo").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $(".menu-item.sub-home").removeClass("show-8-demo");
    });
}


jQuery(function ($) {
    "use strict";
    $(window).scroll(function () {
		if ($(window).scrollTop() >= 50) {
			$("#back-to-top").addClass('show');
		} else if ($(window).scrollTop() < 50) {
			$("#back-to-top").removeClass('show');
		}
    });
});

function changeShopGrid() {
    if (jQuery(window).width() < 992) {
        $('.products-grid.grid-1-2-1-2').removeClass('grid-1 grid-2 grid-3 grid-4');
    } 
}

//back to top
function back_to_top() {   
    $('#back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    })
}

$(document).resize(function(){
    changeShopGrid();
});

$(window).load(function () {     
    back_to_top(); 
});

$(document).ready(function(){
    changeShopGrid();
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

    showAllDemo();
    back_to_top();

});

/* Stop carousel */
jQuery(window).load(function() {
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