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
<div id="_desktop_user_info" class="col-auto">
	<div class="user-info btn-group">
      {assign var="str_at" value=$jmsSetting.customersignin_icon|strpos:"_"}
      {if $str_at && $jmsSetting.customersignin_icon_thickness}
        {assign var="customersignin_icon" value=$jmsSetting.customersignin_icon|substr:0:($str_at)}
        {assign var="customersignin_icon" value=$customersignin_icon|cat:$jmsSetting.customersignin_icon_thickness}
      {else}
        {assign var="customersignin_icon" value=$jmsSetting.customersignin_icon}
      {/if}
			<a href="#" class="account" data-toggle="dropdown" data-display="static"><i class="fal fa-user"></i></a>
      {if $logged}
			<div id="login" class="dropdown-menu user-info-content{if $jmsSetting.customersignin_type =='sidebar'} user-info-sidebar{/if}{if $jmsSetting.customersignin_class} {$jmsSetting.customersignin_class}{/if}">
				<ul>          
					{if $jmsSetting.customersignin_logged_links && 'my-account'|in_array:$jmsSetting.customersignin_logged_links}
          <li><a href="{$my_account_url}">{l s='My Account' d='Shop.Theme.Actions'}</a></li>
          {/if}
          {if $jmsSetting.customersignin_logged_links && 'my-orders'|in_array:$jmsSetting.customersignin_logged_links}
          <li><a href="{$urls.pages.history}">{l s='My Order' d='Shop.Theme.Actions'}</a></li>
          {/if}
          {if $jmsSetting.customersignin_logged_links && 'checkout'|in_array:$jmsSetting.customersignin_logged_links}
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
          {/if}
          {if $jmsSetting.customersignin_logged_links && 'logout'|in_array:$jmsSetting.customersignin_logged_links}
          <li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
          {/if}
				</ul>
			</div>
		  {else}
			<div id="login" class="dropdown-menu user-info-content{if $jmsSetting.customersignin_type =='sidebar'} user-info-sidebar{/if}{if $jmsSetting.customersignin_class} {$jmsSetting.customersignin_class}{/if}">
				<ul>
          {if $jmsSetting.customersignin_logged_links && 'register'|in_array:$jmsSetting.customersignin_notlogged_links}
					<li><a href="{$urls.pages.register}" title="{l s='Register' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Register' d='Shop.Theme.CustomerAccount'} </a></li>
          {/if}
          {if $jmsSetting.customersignin_logged_links && 'login'|in_array:$jmsSetting.customersignin_notlogged_links}
					<li><a class="login" href="{$my_account_url}" title="{l s='Login' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
          {/if}
				</ul>
			</div>
		  {/if}
	</div>
</div>
