{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="btn-group menu-collapse compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#" class="btn-search dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
	<div id="search-form" class="dropdown-menu">
		<div class="search-box">
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="searchbox">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				<input type="text" id="ajax_search" name="search_query" placeholder="{l s='Search everything...' d='Modules.JmsAjaxsearch'}" class="form-control ajax_search" />
				<button type="submit" name="submit_search" class="button-search">
					<span>{l s='Search' d='Modules.JmsAjaxsearch'}</span>
				</button>
			</form>
			<div id="search_result"></div>
		</div>
	</div>
</div>
