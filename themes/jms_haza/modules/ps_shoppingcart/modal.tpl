<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
                <h4 class="modal-title text-xs-center" id="myModalLabel">
                    {l s='Product successfully added to your shopping cart' d='Shop.Theme.Checkout'}
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-xs-6 divide-left">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="product-image" src="{$product.cover.large.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
                            </div>
                            <div class="col-md-6">
                                <div class="product-name">{$product.name}</div>
                                <div class="content_price">
                                    <span class="price new">{$product.price}</span>
                                </div>
                                {hook h='displayProductPriceBlock' product=$product type="unit_price"}
                                {foreach from=$product.attributes item="property_value" key="property"}
                                    <span>{l s='%label%:' sprintf=['%label%' => $property] d='Shop.Theme.Global'}{$property_value}</span><br>
                                {/foreach}
                                <span>{l s='Quantity:' d='Shop.Theme.Checkout'}&nbsp;{$product.cart_quantity}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-6 divide-right">
                        <div class="cart-content">
                            {if $cart.products_count > 1}
                                <p class="cart-products-count">{l s='There are %products_count% items in your cart.' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}</p>
                            {else}
                                <p class="cart-products-count">{l s='There is %product_count% item in your cart.' sprintf=['%product_count%' =>$cart.products_count] d='Shop.Theme.Checkout'}</p>
                            {/if}
                            <p>{l s='Total products:' d='Shop.Theme.Checkout'}{$cart.subtotals.products.value}</p>
                            <p>{l s='Total shipping:' d='Shop.Theme.Checkout'}{$cart.subtotals.shipping.value} {hook h='displayCheckoutSubtotalDetails' subtotal=$cart.subtotals.shipping}</p>
                            {if $cart.subtotals.tax}
                                <p>{$cart.subtotals.tax.label}{$cart.subtotals.tax.value}</p>
                            {/if}
                            <p>{l s='Total:' d='Shop.Theme.Checkout'}{$cart.totals.total.value} {$cart.labels.tax_short}</p>
                            <div class="btn-group">
                                <a class="btn-default" data-dismiss="modal">{l s='Continue shopping' d='Shop.Theme.Actions'}</a>
                                <a href="{$cart_url}" class="btn-default">{l s='proceed to checkout' d='Shop.Theme.Actions'}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
