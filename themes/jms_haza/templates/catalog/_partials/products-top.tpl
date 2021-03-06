{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="js-product-list-top" class="filters-panel">
	<div class="row align-items-center">
		<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-left">
			{if $jmsSetting.shop_switchlist == 1}
				<div class="view-mode">
					<a class="switch-view view-grid {if $jmsSetting.shop_list == 'grid'}active{/if}"></a>
					<a class="switch-view view-list {if $jmsSetting.shop_list == 'list'}active{/if}"></a>
				</div>
			{/if}
			{if !empty($listing.rendered_facets)}
				<div class="filter-button">
					<button id="search_filter_toggler" class="btn-default">
						{l s='Filter' d='Shop.Theme.Actions'}
					</button>
				</div>
			{/if}
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-right">
			<div class="sort-by">
				{block name='pagination'}
					{include file='_partials/pagination.tpl' pagination=$listing.pagination}
				{/block}
				{if $jmsSetting.shop_sortby == 1}
					{block name='sort_by'}
						{include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
					{/block}
				{/if}
			</div>
		</div>
	</div>
</div>
