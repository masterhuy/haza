/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/


jQuery(function ($) {
	$(document).on('change','input[type=radio][name=JPB_HEADER_STICKY]',function(event) {
      if (this.value == '1') {
          $('.sticky-effect').parent().parent().show();
      } else {
          $('.sticky-effect').parent().parent().hide();
      }
	});
  prefixs = ['','f-','ft-','fb-'];
  $.each( prefixs, function( key, value ) {
    $(document).on('change','.' + value + 'height-switch',function(event) {
        if (this.value == '1') {
            $('.' + value + 'custom-height').parent().parent().hide();
        } else {
            $('.' + value + 'custom-height').parent().parent().show();
        }
    });
    $(document).on('change','.' + value + 'bg-switch',function(event) {
        if (this.value == '1') {
            $('.' + value + 'bg-image-group').parent().parent().show();
            $('#' + value.replace("-", "_") + 'bg_image').parent().parent().parent().parent().show();
            $('.' + value + 'bg-color-group').parent().parent().parent().parent().parent().parent().hide();
        } else {
            $('.' + value + 'bg-image-group').parent().parent().hide();
            $('#' + value.replace("-", "_") + 'bg_image').parent().parent().parent().parent().hide();
            $('.' + value + 'bg-color-group').parent().parent().parent().parent().parent().parent().show();
        }
  	});
  });
});
$( document ).ready(function() {
  if ($('input[type=radio][name=JPB_HEADER_STICKY]:checked').val() == '1') {
      $('.sticky-effect').parent().parent().show();
  } else {
      $('.sticky-effect').parent().parent().hide();
  }
  prefixs = ['','f-','ft-','fb-'];
  $.each( prefixs, function( key, value ) {
      if ($('.' + value + 'height-switch:checked').val() == '1') {
          $('.' + value + 'custom-height').parent().parent().hide();
      } else {
          $('.' + value + 'custom-height').parent().parent().show();
      }
      if ($('.' + value + 'bg-switch:checked').val() == '1') {
          $('.' + value + 'bg-image-group').parent().parent().show();
          $('#' + value.replace("-", "_") + 'bg_image').parent().parent().parent().parent().show();
          $('.' + value + 'bg-color-group').parent().parent().parent().parent().parent().parent().hide();
      } else {
          $('.' + value + 'bg-image-group').parent().parent().hide();
          $('#' + value.replace("-", "_") + 'bg_image').parent().parent().parent().parent().hide();
          $('.' + value + 'bg-color-group').parent().parent().parent().parent().parent().parent().show();
      }
  });
});
