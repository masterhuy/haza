{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div id="search-form" class="search-form">
    {assign var="str_at" value=$jmsSetting.search_icon|strpos:"_"}
    {if $str_at && $jmsSetting.search_icon_thickness}
        {assign var="search_icon" value=$jmsSetting.search_icon|substr:0:($str_at)}
        {assign var="search_icon" value=$search_icon|cat:$jmsSetting.search_icon_thickness}
    {else}
        {assign var="search_icon" value=$jmsSetting.search_icon}
    {/if}
    <div class="search-box">
		<form method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" class="search-box">
            <input type="hidden" name="controller" value="search" />
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <div class="input-group">
    			<input type="text" name="search_query" placeholder="{l s='Search for products, brands,...' d='Modules.JmsAjaxsearch'}" class="jms-search-input form-control search-input type-1" />
                <input type="text" name="search_query" placeholder="{l s='Search...' d='Modules.JmsAjaxsearch'}" class="jms-search-input form-control search-input type-2" />
                <input type="text" name="search_query" placeholder="{l s='Search everything' d='Modules.JmsAjaxsearch'}" class="jms-search-input form-control search-input type-3" />
                <button type="submit" name="submit_search" class="button-search">
                    <i class="fal fa-search"></i>
                </button>
            </div>
		</form>
		<div class="search-result-area"></div>
    </div>
</div>
