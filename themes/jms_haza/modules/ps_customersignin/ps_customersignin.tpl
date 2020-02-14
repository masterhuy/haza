{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden">
		{if $logged}
			<a href="#" class="account dropdown-toggle text-uppercase" data-toggle="dropdown">
				{l s='Logout' d='Shop.Theme.Customeraccount'}
			</a>
			<div class="dropdown-menu">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}">{$customerName}</a></li>
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Checkout' d='Shop.Theme.Customeraccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}
			<a href="#" class="account dropdown-toggle text-uppercase" data-toggle="dropdown">
				{l s='Login' d='Shop.Theme.Customeraccount'}
			</a>
			<div class="dropdown-menu">
				<ul>
					<li><a href="{$urls.pages.register}" title="{l s='Register' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Register' d='Shop.Theme.Customeraccount'} </a></li>
					<li><a class="login" href="{$my_account_url}" title="{l s='Login' d='Shop.Theme.Customeraccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>
