{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="email_subscription block">
  <h4 class="block-title">{l s='Newsletter' d='Modules.Emailsubscription.Shop'}<i class="fa fa-plus"></i></h4>
	<div class="block-content">
	  {if $msg}
	    <p class="alert {if $nw_error}alert-error{else}alert-success{/if}">{$msg}</p>
	  {/if}
	  <form action="{$urls.pages.index}" method="post">
			{if $conditions}
	      <p class="newsletter-desc">{$conditions}</p>
	    {/if}
			<div class="input-group newsletter-input-group">
	    		<input type="text" name="email" value="{$value}" class="form-control" placeholder="{l s='Your e-mail' d='Modules.Emailsubscription.Shop'}" />
	    		<button type="submit" class="" name="submitNewsletter"><i class="fa fa-send-o"></i></button>
			</div>
	    {hook h='displayGDPRConsent' id_module=$id_module}
	    <input type="hidden" name="action" value="0" />
	  </form>
	</div>
</div>