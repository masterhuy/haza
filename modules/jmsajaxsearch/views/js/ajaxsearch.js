/**
* 2007-2019 PrestaShop
*
* Jms Ajax Search
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/


$(document).ready(function() {
	var timer;
	$( ".jms-search-input" ).keyup(function() {
		clearTimeout(timer);
		var search_key = $(this).val();
		var _this = $(this);
		timer = setTimeout(function() {
			$.ajax({
				type: 'GET',
				url: prestashop['urls']['base_url'] + 'modules/jmsajaxsearch/ajax_search.php',
				headers: { "cache-control": "no-cache" },
				async: true,
				data: 'search_key=' + search_key,
				success: function(data)
				{
					$('.search-result-area').innerHTML = data;
				}
			}) .done(function( msg ) {
				$(_this).closest('.search-form').find('.search-result-area').html(msg);
			});
		}, 1000);
	})
	$('html').click(function() {
		$( ".search-result-area" ).html('');
	});

	$('.search-result-area').click(function(event){
		event.stopPropagation();
	});
});
