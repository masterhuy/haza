{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}
<div class="testimonial-carousel owl-carousel" data-items="{if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}5{/if}" data-lg="{if $items_show}{$items_show|escape:'htmlall':'UTF-8'}{else}5{/if}" data-md="{if $items_show_md}{$items_show_md|escape:'htmlall':'UTF-8'}{else}4{/if}" data-sm="{if $items_show_sm}{$items_show_sm|escape:'htmlall':'UTF-8'}{else}3{/if}" data-xs="{if $items_show_xs}{$items_show_xs|escape:'htmlall':'UTF-8'}{else}2{/if}" data-nav="{if $navigation == '0'}false{else}true{/if}" data-dots="{if $pagination == '1'}true{else}false{/if}" data-auto="{if $autoplay == '1'}true{else}false{/if}" data-rewind="{if $rewind == '1'}true{else}false{/if}" data-slidebypage="{if $slidebypage == '1'}page{else}1{/if}">
{foreach from=$testimonials item=testimonial}
<div class="testimonial-box">
	{if $show_image}
	<div class="testimonial-img">
		<img class="img-responsive" src="{$image_url|escape:'html':'UTF-8'}resized_{$testimonial.image|escape:'html':'UTF-8'}" />
	</div>
	{/if}
	<div class="testimonial-author">
		{$testimonial.author|escape:'html':'UTF-8'}{if $show_office} - {$testimonial.office|escape:'html':'UTF-8'} {/if}
	</div>
	{if $show_time}
	<div class="testimonial-date">
		{$testimonial.posttime|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="testimonial-comment" >
		{$testimonial.comment|escape:'html':'UTF-8'}
	</div>
</div>
{/foreach}
</div>
