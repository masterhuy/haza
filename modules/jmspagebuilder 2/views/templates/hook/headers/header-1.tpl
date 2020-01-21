{*
* 2007-2017 PrestaShop
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
*  @copyright  2007-2017 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="header-top" class="header-top{if $header_style.JPB_HEADER_CLASS} {$header_style.JPB_HEADER_CLASS}{/if}">
		<div class="container{if $header_style.JPB_HEADER_WIDTH == 0}-fluid{/if}">
				<div class="row align-items-center">
						<div class="layout-column col-auto header-left">
							{$header_elements.LOGO nofilter}
						</div>
						<div class="layout-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
							{$header_elements.HORMENU nofilter}
						</div>
						<div class="layout-column col-auto header-right">
							{$header_elements.SEARCH nofilter}
							{$header_elements.LOGIN nofilter}
							{$header_elements.CART nofilter}
						</div>
				</div>
		</div>
		
</div>
