{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{if ($jmsSetting.header_topbar == 1)}
<div id="header-topbar" class="{if $jmsSetting.topbar_class} {$jmsSetting.topbar_class}{/if}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-4 header-left">
                {$jmsSetting.topbar_content nofilter}
            </div>
            <div class="layout-column col-4 header-center text-center">Fast and free international shipping</div>
            <div class="layout-column col-4 header-right">
                {widget_block name="ps_languageselector"}
                    {include 'module:ps_languageselector/ps_languageselector-dropdown.tpl'}
                {/widget_block}
                {widget_block name="ps_currencyselector"}
                    {include 'module:ps_currencyselector/ps_currencyselector-dropdown.tpl'}
                {/widget_block}
                <div class="position-relative">
                    <a href="#">Help & FAQ’s</a>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}
<div id="header-top" class="header-top{if $jmsSetting.header_sticky == 1} header-sticky{/if}{if ($jmsSetting.header_sticky == 1) && ($jmsSetting.header_sticky_effect != '')} {$jmsSetting.header_sticky_effect}{/if}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-auto header-left">
                {include file='_partials/headers/logo.tpl'}
            </div>
            <div class="layout-column col-auto megamenu">
                <div id="hor-menu" class="{if $jmsSetting.hormenu_class} {$jmsSetting.hormenu_class}{/if} {if $jmsSetting.hormenu_align} align-{$jmsSetting.hormenu_align}{/if}">
                    {widget name="jmsmegamenu" hook='HorMenu'}
                </div>
            </div>
            <div class="layout-column">
                {if $jmsSetting.search}
                    {widget_block name="jmsajaxsearch"}
                        {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl'}
                    {/widget_block}
                {/if}    
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row">
                    {if ($jmsSetting.customersignin == 1)}
                        {widget_block name="ps_customersignin"}
                            {include 'module:ps_customersignin/ps_customersignin-dropdown.tpl'}
                        {/widget_block}
                    {/if}
                    {if ($jmsSetting.wishlist == 1)}
                        {include file='_partials/headers/wishlist.tpl'}
                    {/if}
                    {if ($jmsSetting.cart == 1)}
                        {widget_block name="ps_shoppingcart"}
                            {include 'module:ps_shoppingcart/ps_shoppingcart.tpl'}
                        {/widget_block}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
{if $jmsSetting.search && $jmsSetting.search_box_type != 'dropdown'}
    {widget_block name="jmsajaxsearch"}
        {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl'}
    {/widget_block}
{/if}
