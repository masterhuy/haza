jQuery(function ($) {
    var win = $(window),
      header = $('.header-sticky');
    if(header.length == 0) return;
    var offset = (header.offset().top);
    win.scroll(function() {
      if (offset < win.scrollTop()) {
        if(header.hasClass('sticky-slide'))
            header.slideDown();
        header.addClass("sticky");
      } else {
        if(header.hasClass('sticky-slide'))
            header.slideUp();
        header.removeClass("sticky");
      }
    });
    $( ".btn-search-full" ).click(function() {
        $('#search-form-full').toggleClass('open');
    });
    $( ".search-box-close" ).click(function() {
        $('#search-form-full').removeClass('open');
    });
});
$(document).mouseup(function(e){
    var container = $('.search-box');
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.closest('.search-overlay').removeClass('open');
    }
});
jQuery(document).ready(function($) {
   $('.jms-megamenu').jmsMegaMenu({
     event: 'hover',
     duration: 100
   });
});
$(document).on('click', '.switch-view', function (e) {
  $('.switch-view').removeClass('active');
  $(this).addClass('active');
  if($(this).hasClass('view-grid')) {
      $('#product_list').removeClass('products-list');
      $('#product_list').addClass('products-grid');
  } else {
    $('#product_list').removeClass('products-grid');
    $('#product_list').addClass('products-list');
  }
});
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

jQuery(function ($) {
    "use strict";
    var c_lazyload = false;
    if(jmsSetting.carousel_lazyload)
      var c_lazyload = true;

    $.each( $(".owl-carousel"), function( key, value ) {
          $(this).owlCarousel({
              loop:true,
              margin:30,
              nav:$(this).data('nav'),
              dots:$(this).data('dots'),
              autoplay:$(this).data('auto'),
              rewind:$(this).data('rewind'),
              slideBy:$(this).data('slidebypage'),
              lazyLoad:c_lazyload,
              responsive:{
                0:{
                    items:$(this).data('xs')
                },
                768:{
                    items:$(this).data('sm')
                },
                991:{
                    items:$(this).data('md')
                },
                1199:{
                    items:$(this).data('lg')
                },
                1440:{
                    items:$(this).data('items')
                }
            }
          });
    });
    $('.product-image-zoom').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });
    $.each( $('.countdown'), function( key, value ) {
      var $expire_time = $(this).html();
      var _datetime = $expire_time.split(" ");
      var _date = _datetime[0];
      var _time = _datetime[1];
      var datestr = _date.split("-");
      var timestr = _time.split(":");

      var austDay = new Date(datestr[0], datestr[1]-1, datestr[2], timestr[0], timestr[1], timestr[2],0);

      $(this).countdown({until: austDay});
    });
});
function changeShopGrid() {
  if (jQuery(window).width() < 480) {
      $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
      $('.products-grid').addClass('grid-1');
  } else if(jQuery(window).width() < 768) {
    $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
    $('.products-grid').addClass('grid-2');
  } else if(jQuery(window).width() < 991) {
    $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
    $('.products-grid').addClass('grid-3');
  } else {
    $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
    $('.products-grid').addClass('grid-' + jmsSetting.shop_grid_column);
  }
}
function footerCollapse() {
  if ((jQuery(window).width() < 480) && jmsSetting.footer_block_collapse) {
      $('#footer-main .block .block-content').addClass('collapse');
  } else {
    $('#footer-main .block .block-content').removeClass('collapse');
  }
}
jQuery(document).ready(function(){
    changeShopGrid();
    footerCollapse();
});
jQuery(window).resize(function () {
    changeShopGrid();
    footerCollapse();
});
$(document).on('click', '#footer-main .block-title i', function (e) {
    $(this).parent().parent().find('.block-content').toggleClass('collapse');
    if($(this).parent().parent().find('.block-content').hasClass('collapse')) {
      $(this).removeClass('fa-minus');
      $(this).addClass('fa-plus');
    } else {
      $(this).removeClass('fa-plus');
      $(this).addClass('fa-minus');
    }
});
