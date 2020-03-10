<div class="btn-group blockcart cart-preview dropdown col-auto{if $jmsSetting.addtocart_type !=''} {$jmsSetting.addtocart_type}{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#" class="cart-icon" data-toggle="dropdown" data-display="static" aria-expanded="false">
		<span class="text-cart text-uppercase">{l s='Cart' d='Shop.Theme.Actions'}</span>
		{if $jmsSetting.addtocart_type == 'circle-filled'}
			{if $cart.products_count > 0}<span class="circle-notify"></span>{/if}
		{else}
			<span class="ajax_cart_quantity">{$cart.products_count}</span>
			<span class="ajax_cart_quantity type-2">({$cart.products_count})</span>
		{/if}
		{assign var="str_at" value=$jmsSetting.cart_icon|strpos:"_"}
		{if $str_at && $jmsSetting.cart_icon_thickness}
			{assign var="cart_icon" value=$jmsSetting.cart_icon|substr:0:($str_at)}
			{assign var="cart_icon" value=$cart_icon|cat:$jmsSetting.cart_icon_thickness}
		{else}
			{assign var="cart_icon" value=$jmsSetting.cart_icon}
		{/if}
		<i class="fal fa-shopping-bag"></i>
	</a>
	<div class="dropdown-menu shoppingcart-box{if $jmsSetting.cart_type =='sidebar'} shoppingcart-sidebar{/if}">
		<div class="cart-title">{l s='Shopping Cart' d='Shop.Theme.Actions'} ({$cart.products_count})</div>
		{if $cart.products_count == 0}
		<span class="ajax_cart_no_product">{l s='There is no product' d='Shop.Theme.Actions'}</span>
		{else}
			<ul class="list products cart_block_list">
				{foreach from=$cart.products item=product}
					<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
				{/foreach}
			</ul>
		{/if}
		{if $cart.products_count != 0}
			<div class="billing-info">
				{if $jmsSetting.cart_subtotal == 1}
					{foreach from=$cart.subtotals item="subtotal"}
						{if $subtotal.type != ''}
							<div class="{$subtotal.type} cart-prices-line">
								<span class="label">{$subtotal.label}</span>
								<span class="value">{$subtotal.value}</span>
							</div>
						{/if}
					{/foreach}
				{/if}
				{if $jmsSetting.cart_total == 1}
					<div class="cart-total cart-prices-line">
						<span class="label">{$cart.totals.total.label}</span>
						<span class="value">{$cart.totals.total.value}</span>
					</div>
				{/if}
			</div>
			<div class="cart-button">
				{if $jmsSetting.cart_links && 'checkout'|in_array:$jmsSetting.cart_links}
					<a href="{url entity=order}" class="btn-default checkout-btn w-100 text-center">{l s='Checkout' d='Shop.Theme.Actions'}</a>
				{/if}
				{if $jmsSetting.cart_links && 'cart'|in_array:$jmsSetting.cart_links}
					<a class="btn cart-btn" href="{$cart_url}" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}" rel="nofollow">
						{l s='Cart' d='Shop.Theme.Actions'}
					</a>
				{/if}
			</div>
		{/if}
	</div>
</div>
