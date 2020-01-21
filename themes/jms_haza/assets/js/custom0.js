jQuery(function ($) {
    var win = $(window),
      header = $('.header-sticky'),
      offset = (header.offset().top);

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
   if($(".slick-thumbs").length) {
       $(".slick-thumbs").slick({
           dots: false,
           vertical: true,
           infinite: false,
           centerMode: true,
           slidesToShow: 4,
           slidesToScroll: 2
       });
   }
   if($(".hor-slick-thumbs").length) {
       $(".hor-slick-thumbs").slick({
         dots: false,
         infinite: false,
         slidesToShow: 4,
         slidesToScroll: 2
       });
    }
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

prestashop.on('updatedProduct',function() {
  $(".hor-slick-thumbs").slick({
    dots: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 2
  });
  $(".slick-thumbs").slick({
      dots: false,
      vertical: true,
      infinite: false,
      centerMode: true,
      slidesToShow: 4,
      slidesToScroll: 2
  });
});
$(document).ready(function () {
  prestashop.on(
    'clickQuickView',
    function (event) {
      setTimeout(function(){
          if($(".slick-thumbs").length) {
              $(".slick-thumbs").slick({
                  dots: false,
                  vertical: true,
                  infinite: false,
                  centerMode: true,
                  slidesToShow: 4,
                  slidesToScroll: 2
              });
          }
          if($(".hor-slick-thumbs").length) {
              $(".hor-slick-thumbs").slick({
                dots: false,
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 2
              });
           }
      }, 2000);
    }
  );
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
});
