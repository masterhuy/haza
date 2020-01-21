{*
 * @package Jms Ajax Search
 * @version 1.1
 * @Copyright (C) 2009 - 2015 Joommasters.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: http://www.joommasters.com
*}
<div class="btn-group jms_ajax_search col-auto" id="jms_ajax_search">
  {assign var="str_at" value=$jmsSetting.search_icon|strpos:"_"}
  {if $str_at && $jmsSetting.search_icon_thickness}
    {assign var="search_icon" value=$jmsSetting.search_icon|substr:0:($str_at)}
    {assign var="search_icon" value=$search_icon|cat:$jmsSetting.search_icon_thickness}
  {else}
    {assign var="search_icon" value=$jmsSetting.search_icon}
  {/if}
	<a href="#" id="btn-search" class="btn-search btn-search-full" data-toggle="dropdown" data-display="static"><i class="ptw-icon {$search_icon}"></i></a>
</div>
