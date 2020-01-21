{*
 * 2013-2018 MADEF IT
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@madef.fr so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    MADEF IT <contact@madef.fr>
 *  @copyright 2013-2018 MADEF IT
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

<div class="rm-overlay rm-overlay--close js-rm-trigger {if $rm_display_close}rm-display-close{/if}">
</div>
<div class="rm-pannel rm-pannel--close {if $rm_display_bar_login}rm-display-login{/if} {if $rm_display_bar_search}rm-display-search{/if}">
    <div class="rm-container" id="rm-container">
        {if $rm_display_bar_login}
            <div class="rm-login-bar js-rm-column">
                {if Context::getContext()->customer->isLogged() }
                    <a class="rm-login-bar__hello" href="{Context::getContext()->link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='See my customer account' mod='responsivemenu'}"></span>{l s='Hello %1s' mod='responsivemenu' sprintf=[Context::getContext()->customer->firstname, Context::getContext()->customer->lastname]}</a>
                    <a class="rm-login-bar__logout" href="{Context::getContext()->link->getPageLink('index', true, NULL, "mylogout")}" rel="nofollow" title="{l s='Log out' mod='responsivemenu'}"></a>
                {else}
                    <a class="rm-login-bar__login" href="{Context::getContext()->link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='responsivemenu'}">{l s='Log In' mod='responsivemenu'}</a>
                {/if}
            </div>
        {/if}
        {if $rm_display_bar_search}
            <form
                class="rm-search-bar js-rm-column"
                action="{Context::getContext()->link->getPageLink('search', true)|escape:'htmlall':'UTF-8'}"
                method="GET"
            >
                <input type="hidden" name="controller" value="search" />
                <input type="hidden" name="orderby" value="position" />
                <input type="hidden" name="orderway" value="desc" />
                <input type="text" class="rm-search-bar__input" name="search_query" placeholder="{l s='Search' mod='responsivemenu'}" value="{$search_query|escape:'htmlall':'UTF-8'}"/>
                <input type="submit" class="rm-search-bar__submit" value="&#xf002;"/>
            </form>
        {/if}
    </div>
</div>
