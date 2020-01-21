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

{block name='footer-copyright'}
<div id="footer-copyright" class="footer-copyright{if $jmsSetting.footer_copyright_class} {$jmsSetting.footer_copyright_class}{/if}">
    <div class="container">
          <div class="row align-items-center">
              {if isset($jmsSetting.footer_copyright_content) && $jmsSetting.footer_copyright_content}
              <div class="layout-column col-auto">
                    {$jmsSetting.footer_copyright_content nofilter}
              </div>
              {/if}
              <div class="layout-column col-auto payment-img text-right">
                    {include file='_partials/socials.tpl'}
              </div>
          </div>
    </div>
</div>
{/block}
