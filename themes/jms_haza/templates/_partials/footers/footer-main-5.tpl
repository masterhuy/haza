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
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column block-content col-left">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Help & Support</a></li>          
                </ul>
            </div>
            <div class="layout-column col-center">
                <a href="{$urls.base_url}" class="logo">
                    <img src="{$urls.theme_assets}img/logo-2.png" />
                </a>
                <div class="desc">New Fashion Lookbook!</div>
                {block name='footer-newsletter'}
                    <div class="block-footer block-newsletter">
                        {widget name="ps_emailsubscription" hook='displayFooter'}
                    </div>
                {/block}
                {include file='_partials/socials.tpl'}
            </div>
            <div class="layout-column block-content col-right">
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">My Address</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Return Exchanges</a></li>
                    <li><a href="#">Shopping FAQs</a></li>          
                </ul>
            </div>
        </div>
    </div>
</div>
