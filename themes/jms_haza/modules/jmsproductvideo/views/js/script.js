jQuery(document).ready(function() {
	jQuery('.popup-active h3').click(function(event) {
		$('.popup-active').addClass('open-video');
	});
		
	jQuery('#jmsproductvideo .jms-popup-overlay').click(function(event) {
		$('.popup-active').removeClass('open-video');
	});
	jQuery('.popup_close').click(function(event) {
		$('.popup-active').removeClass('open-video');
	});
});  
