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
<div id="footer-top" class="footer-top-1 {if $jmsSetting.footer_top_class} {$jmsSetting.footer_top_class}{/if}">
    <div class="container">
        <div class="row align-items-center">
            {if isset($jmsSetting.footer_copyright_content) && $jmsSetting.footer_copyright_content}
                <div class="layout-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 socials">
                    {include file='_partials/socials.tpl'}
                </div>
            {/if}
            {if isset($jmsSetting.footer_payment_image) && $jmsSetting.footer_payment_image}
                <div class="layout-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 payment-img">
                    <img src="{$jmsSetting.footer_payment_image}" class="img-fluid" alt="{l s='Payments' d='Shop.jmstheme'}"/>
                </div>
            {/if}
        </div>
    </div>
</div>
