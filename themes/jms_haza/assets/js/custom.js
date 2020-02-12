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

    // $('#header-sidebar .btn-close').click(function(e){
    //     e.preventDefault();
    //     $('body').removeClass('sidebar-right-open');
    //     $('body').removeClass('sidebar-left-open');
    // });
});
jQuery(window).load(function() {
    /*
        Stop carousel
    */
    $('.carousel').carousel('pause');
});

