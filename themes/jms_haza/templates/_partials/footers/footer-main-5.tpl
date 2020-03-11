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
            <div class="layout-column block col-12 col-sm-12 col-md-3 col-lg-3 col-left">
                <h3 class="h3 block-title">Support<i class="fal fa-plus"></i></h3>
                <div class="block-content">
                    <ul>
                        <li><a href="index.php?id_cms=4&controller=cms">About Us</a></li>
                        <li><a href="index.php?id_cms=14&controller=cms">Privacy Policy</a></li>
                        <li><a href="index.php?id_cms=7&controller=cms">Shipping</a></li>
                        <li><a href="index.php?id_cms=13&controller=cms">Terms & Conditions</a></li>
                        <li><a href="index.php?id_cms=8&controller=cms">Help & Support</a></li>          
                    </ul>
                </div>
            </div>
            <div class="layout-column block col-12 col-sm-12 col-md-6 col-lg-6 col-center">
                <h3 class="h3 block-title">Newsletter<i class="fal fa-plus"></i></h3>
                <div class="block-content">
                    <div class="layout-column col-auto header-left">
                        {include file='_partials/headers/logo.tpl'}
                    </div>
                    <div class="desc">New Fashion Lookbook!</div>
                    {block name='footer-newsletter'}
                        <div class="block-footer block-newsletter">
                            {widget name="ps_emailsubscription" hook='displayFooter'}
                        </div>
                    {/block}
                    {include file='_partials/socials.tpl'}
                </div>
            </div>
            <div class="layout-column block col-12 col-sm-12 col-md-3 col-lg-3 col-right">
                <h3 class="h3 block-title">Order<i class="fal fa-plus"></i></h3>
                <div class="block-content">
                    <ul>
                        <li><a href="index.php?controller=my-account">Account</a></li>
                        <li><a href="index.php?controller=addresses">My Address</a></li>
                        <li><a href="index.php?controller=contact">Contact Us</a></li>
                        <li><a href="index.php?id_cms=16&controller=cms">Return Exchanges</a></li>
                        <li><a href="index.php?id_cms=12&controller=cms">Shopping FAQs</a></li>          
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
