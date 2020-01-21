{*
* 2007-2019 PrestaShop
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
*  @copyright  2007-2019 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/javascript">
	var h_items = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktop = {if $items_show}{$items_show nofilter}{else}1{/if},
	    h_itemsDesktopSmall = {if $items_show_md}{$items_show_md nofilter}{else}1{/if},
	    h_itemsTablet = {if $items_show_sm}{$items_show_sm nofilter}{else}1{/if},
	    h_itemsMobile = {if $items_show_xs}{$items_show_xs nofilter}{else}1{/if};
	    h_nav = {if $navigation == 1}true{else}false{/if};
		h_pag = {if $pagination == 1}true{else}false{/if};
		h_auto_play_carousel = {if $autoplay == 1}true{else}false{/if};
</script>
{if $addon_title}
<div class="addon-title">
	<h3>{$addon_title nofilter}</h3>
</div>
{/if}
{if $addon_desc}
<p class="addon-desc">{$addon_desc nofilter}</p>
{/if}
<div class="jms-hotdeal">
	<div class="label">hot offer</div>
	<div class="product_box">
		<div class="hotdeal-carousel">
			{foreach from=$products item=product key=k}	
				<div class="item">
					<div class="product-box product-preview js-product-miniature" itemtype="http://schema.org/Product" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
						{block name='product_thumbnail'}
						<div class="img-hotdeal">
						  	<a href="{$product.url nofilter}" class="product-image">
								<img class="img-responsive"
								  src = "{$product.cover.bySize.home_default.url nofilter}"
								  alt = "{$product.cover.legend nofilter}"
								  data-full-size-image-url = "{$product.cover.large.url nofilter}"
								>
						 	</a>				 
						 </div>
						 <div class="block-label">
						  	{block name='product_flags'}
								{if $product.has_discount}
									{if $product.discount_type === 'percentage'}
				                	<span class="label label-discount discount-percentage discount-product">{$product.discount_percentage}</span>
									{/if}
								{/if}
						   {/block}	
						</div>
						{/block}
						<a class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '26', false, 1); return false;" data-id-product="26" title="Add to Wishlist"></a>


						<div class="product-info hotdeal">
							{if isset($jpb_categoryname) && $jpb_categoryname}
							    <span class="categoryname">
									<a href="{url entity='category' id=$product.id_category_default}">
									{$product.category|escape:'html':'UTF-8'}</a>
								</span>
						    {/if}
							
							{block name='product_name'}
							   	<a href="{$product.url nofilter}" class="product-link">{$product.name nofilter}</a>
							{/block}

							{block name='product_price_and_shipping'}
								{if $product.show_price}
									<div class="content_price">
									  	{hook h='displayProductPriceBlock' product=$product type="before_price"}

									  	{if $product.has_discount}
										  	{hook h='displayProductPriceBlock' product=$product type="old_price"}
										  	<span class="old price">{$product.regular_price nofilter}</span>
										{/if}

										<span itemprop="price" class="price new">{$product.price nofilter}</span>
										
										
										{hook h='displayProductPriceBlock' product=$product type='unit_price'}

										{hook h='displayProductPriceBlock' product=$product type='weight'}
									</div>
								{/if}
							{/block}
							
							<div class="product-sold">
					        	<div class="sold-quantyties">
					        		<div class="already_sold pull-left">Sold: 
					        			<span>
					        				{if $product.sold != "" }
					        					{$product.sold}
					        				{else}
					        					0
					        				{/if}
					        			</span>
					        		</div>
					        		<div class="available pull-right">Qty: <span>{$product.quantity_all_versions}</span></div>
					        	</div>

						        <div class="proces-bars">
						        	<span style="width:{($product.sold/$product.quantity_all_versions)*100}%;"></span>
						        </div>
						    </div>

							<div class="countdown" id="countdown-{$hotdeals[$k].id_hotdeals nofilter}">{$hotdeals[$k].deals_time nofilter}</div>
						</div>

						<div class="product_action">
							<button {if $product.quantity < 1}disabled{/if} title="{if $product.quantity < 1}{l s='Out of Stock' d='Shop.Theme.Actions'}{else}{l s='Add to Cart' d='Shop.Theme.Actions'}{/if}" class="ajax-add-to-cart product-btn cart-button btn-effect1 {if $product.quantity < 1}disabled{/if}" data-id-product="{$product.id}" data-minimal-quantity="{$product.minimal_quantity}" data-token="{if isset($static_token) && $static_token}{$static_token}{/if}">
								<span class="fa fa-spin fa-spinner"></span>
								<span class="fa fa-check"></span>
								<span class="text-addcart">{l s='Add to cart' d='Shop.Theme.Actions'}</span>		
								<span class="text-outofstock">{l s='Out of stock' d='Shop.Theme.Actions'}</span>			
						   	</button>
						   	<a data-link-action="quickview" class="quick-view product-btn hidden-xs" title="{l s='Quick view' d='Shop.Theme.Actions'}">
								Quick view
							</a>
					    </div>
		  			</div>
		  		</div>
			{/foreach}
		</div>
	</div>
	{if ($showall_link == '1')} 
		<div class="hotdeal-viewall col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<a href="{$link->getModuleLink('hotdeals','allproduct') nofilter}" class="btn-shopnow btn-effect1">{l s='View All Product' d='Modules.JmsPagebuilder'}</a>
		</div>
	{/if}
</div>