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
            <div class="layout-column col-6 col-left">
                <div class="position-relative">
                    <a href="#">Store Locator</a>
                </div>
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
            <div class="layout-column col-6 col-right">
                {if $jmsSetting.search}
                    {widget_block name="jmsajaxsearch"}
                        {include 'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl'}
                    {/widget_block}
                {/if}
            </div>
        </div>
    </div>
</div>
{/if}
<div id="header-top" class="header-top{if $jmsSetting.header_sticky == 1} header-sticky{/if}{if ($jmsSetting.header_sticky == 1) && ($jmsSetting.header_sticky_effect != '')} {$jmsSetting.header_sticky_effect}{/if}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-logo">
                {include file='_partials/headers/logo.tpl'}
            </div>
        </div>
        <div class="row align-items-center">
            <div class="layout-column megamenu">
                <div id="hor-menu" class="{if $jmsSetting.hormenu_class} {$jmsSetting.hormenu_class}{/if} {if $jmsSetting.hormenu_align} align-{$jmsSetting.hormenu_align}{/if}">
                    {widget name="jmsmegamenu" hook='HorMenu'}
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

