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
<div id="promobar" class="promobar{if $box_class} {$box_class}{/if}{if $promobar_position == top} top{else} bottom{/if}{if $promobar_fixed == 'yes'} promobar-fixed{else}{/if} collapse show" style="{if $promobar_bg}background-color: {$promobar_bg};{/if}{if $promobar_height} height: {$promobar_height}px;{/if}">
	<div class="container">
		{$promobar_message nofilter}
		{if $promobar_expire_time}
			<span class="promo-countdown">
				{$promobar_expire_time|escape:'html':'UTF-8'}
			</span>
		{/if}
		{if $show_close_btn}
			<a href="#" class="close" data-toggle="collapse" data-target="#promobar"></a>
		{/if}
	</div>
</div>