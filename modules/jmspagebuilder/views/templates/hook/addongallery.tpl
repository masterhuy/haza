{*
* 2007-2014 PrestaShop
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
<script type="text/javascript">
{if $gallery_fancybox == 1}
	$(document).ready(function() {
	/* Apply fancybox to multiple items */
		$('.grouped_elements').fancybox();
	});
{/if}
{if $gallery_masonry == 1}
		$(document).ready(function() {
			var $grid = $('.masonry-gallery').imagesLoaded( function() {
			// init Masonry after all images have loaded
			$grid.masonry({});
			});
		});
		$( document ).ready(function () {
				$(".gallery_img").hover(
					function() {
						$(this).next().fadeIn(1000);
					},
					function() {
						$(this).next().fadeOut(1000);
					}
				);

				$(".gallery_img").hover(
					function() {
						$(this).next().css("title-disable");
					},
					function() {
						$(this).next().addClass("title-disable");
					}
				);
		});
{/if}
</script>
{if isset($items) AND $items}
	{if $gallery_masonry == 1}
	<div class="masonry-gallery row">
		{foreach from=$items item=item}
			<div class="item">
				<div class="gallery-masonry-img gallery_img">
						<a class="grouped_elements" data-fancybox-group="gallery" href="{$image_baseurl|escape:'htmlall':'UTF-8'}{$item.image|escape:'htmlall':'UTF-8'}">
							<img src="{$image_baseurl|escape:'htmlall':'UTF-8'}{$item.image|escape:'htmlall':'UTF-8'}" alt="{$item.title|escape:'htmlall':'UTF-8'}" />
						</a>
				</div>
				<div class="title-disable gallery-title">
					<span>{$item.title nofilter}</span>
				</div>
			</div>
		{/foreach}
	</div>
	{else}
	<div class="gallery-carousel owl-carousel" data-items="{if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if}" data-lg="{if $cols}{$cols|escape:'htmlall':'UTF-8'}{else}4{/if}" data-md="{if $cols_md}{$cols_md|escape:'htmlall':'UTF-8'}{else}3{/if}" data-sm="{if $cols_sm}{$cols_sm|escape:'htmlall':'UTF-8'}{else}2{/if}" data-xs="{if $cols_xs}{$cols_xs|escape:'htmlall':'UTF-8'}{else}1{/if}" data-nav="{if $navigation == '0'}false{else}true{/if}" data-dots="{if $pagination == '1'}true{else}false{/if}" data-auto="{if $autoplay == '1'}true{else}false{/if}" data-rewind="{if $rewind == '1'}true{else}false{/if}" data-slidebypage="{if $slidebypage == '1'}page{else}1{/if}">
		{foreach from = $items item = images_slide}
			{foreach from = $images_slide item=item}
				<div class="gallery-item">
					<a class="grouped_elements" data-fancybox-group="gallery" href="{$image_baseurl|escape:'htmlall':'UTF-8'}{$item.image|escape:'htmlall':'UTF-8'}">
						<img src="{$image_baseurl|escape:'htmlall':'UTF-8'}thumb_{$item.image|escape:'htmlall':'UTF-8'}" alt="{$item.title|escape:'htmlall':'UTF-8'}" />
					</a>
				</div>
			{/foreach}
		{/foreach}
	</div>
	{/if}
{else}
{l s='Sorry, dont have any image in this section' d='Modules.JmsPagebuilder'}
{/if}
