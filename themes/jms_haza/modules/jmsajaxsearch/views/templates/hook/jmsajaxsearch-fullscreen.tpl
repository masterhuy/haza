{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div id="search-form-full" class="search-form search-overlay{if $jmsSetting.search_box_type} {$jmsSetting.search_box_type}{/if}">
    {assign var="str_at" value=$jmsSetting.search_icon|strpos:"_"}
    {if $str_at && $jmsSetting.search_icon_thickness}
      {assign var="search_icon" value=$jmsSetting.search_icon|substr:0:($str_at)}
      {assign var="search_icon" value=$search_icon|cat:$jmsSetting.search_icon_thickness}
    {else}
      {assign var="search_icon" value=$jmsSetting.search_icon}
    {/if}
		<div class="search-box">
			<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
        <div class="input-group">
    				<input type="text" name="search_query" placeholder="{l s='Search everything...' d='Modules.JmsAjaxsearch'}" class="jms-search-input form-control search-input" />
    				<button type="submit" name="submit_search" class="button-search">
    					<i class="ptw-icon {$search_icon}"></i>
    				</button>
        </div>
			</form>
			<div class="search-result-area"></div>
      <a class="search-box-close">
			     <i class="ptw-icon icon-closed_light"></i>
		  </a>
		</div>
</div>
