/**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import $ from 'jquery';

$(document).ready(function () {
  createProductSpin();
  createInputFile();
  coverImage();
  imageScrollBox();

  prestashop.on('updatedProduct', function (event) {
    createInputFile();
    coverImage();
    if (event && event.product_minimal_quantity) {
      const minimalProductQuantity = parseInt(event.product_minimal_quantity, 10);
      const quantityInputSelector = '#quantity_wanted';
      let quantityInput = $(quantityInputSelector);

      // @see http://www.virtuosoft.eu/code/bootstrap-touchspin/ about Bootstrap TouchSpin
      quantityInput.trigger('touchspin.updatesettings', {min: minimalProductQuantity});
    }
    imageScrollBox();
    $($('.tabs .nav-link.active').attr('href')).addClass('active').removeClass('fade');
    $('.js-product-images-modal').replaceWith(event.product_images_modal);
  });

  function coverImage() {
    $('.js-thumb').on(
      'click',
      (event) => {
        $('.js-modal-product-cover').attr('src',$(event.target).data('image-large-src'));
        $('.selected').removeClass('selected');
        $(event.target).addClass('selected');
        $('.js-qv-product-cover').prop('src', $(event.currentTarget).data('image-large-src'));
        $('.zoomContainer').remove();
        $('.product-image-zoom').removeData('elevateZoom');
        $('.product-image-zoom').data('zoom-image', $(event.currentTarget).data('image-large-src'));
        // Reinitialize EZ
        $('.product-image-zoom').elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });
      }
    );
    $('.product-image-zoom').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });
  }

  function imageScrollBox()
  {
    let vertical = false;
    let slides = 4;
    let lazyLoad = 'ondemand';
    let responsive = [];

    if (jmsSetting.product_content_layout == 'thumbs-left' || jmsSetting.product_content_layout == 'thumbs-right') {
        vertical = true;
        slides = 4;
        lazyLoad = 'progressive';
    }

    if (jmsSetting.product_content_layout == 'thumbs-left') {
        responsive = [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    vertical: false,
                    verticalSwiping: false,
                }
            },
        ];
    }
    if (jmsSetting.product_content_layout == 'thumbs-left' || jmsSetting.product_content_layout == 'thumbs-right' || jmsSetting.product_content_layout == 'thumbs-bottom') {
        $('.js-qv-product-images').slick({
            slidesToShow: slides,
            slidesToScroll: slides,
            infinite: false,
            dots: false,
            arrows: true,
            vertical: vertical,
            verticalSwiping: vertical,
            focusOnSelect: true,
            lazyLoad: lazyLoad,
            responsive: responsive,
        });
    }

  }

  function createInputFile()
  {
    $('.js-file-input').on('change',(event)=>{
      $('.js-file-name').text($(event.currentTarget).val());
    });
  }

  function createProductSpin()
  {
    let quantityInput = $('#quantity_wanted');
    quantityInput.TouchSpin({
      verticalbuttons: true,
      verticalupclass: 'fa fa-angle-up touchspin-up',
      verticaldownclass: 'fa fa-angle-down touchspin-down',
      buttondown_class: 'btn btn-touchspin js-touchspin',
      buttonup_class: 'btn btn-touchspin js-touchspin',
      min: parseInt(quantityInput.attr('min'), 10),
      max: 1000000
    });

    quantityInput.on('change', function (event) {
      let $productRefresh = $('.product-refresh');
      $(event.currentTarget).trigger('touchspin.stopspin');
      $productRefresh.trigger('click', {eventType: 'updatedProductQuantity'});
      event.preventDefault();

      return false;
    });
  }
});
