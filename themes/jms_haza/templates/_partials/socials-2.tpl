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

{block name='footer-social'}
    <div class="block">
        <h3 class="h3 block-title">FOLLOW US<i class="fa fa-plus" aria-hidden="true"></i></h3>
        <ul id="social-links" class="social-links">
            {if isset($jmsSetting.social_facebook) && $jmsSetting.social_facebook != ''}
                <li class="facebook">
                    <a href="{$jmsSetting.social_facebook}" target="_blank"><i class="fa fa-facebook" ></i>Facebook</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_twitter) && $jmsSetting.social_twitter != ''}
                <li class="twitter">
                    <a href="{$jmsSetting.social_twitter}" target="_blank"><i class="fa fa-twitter" ></i>Twitter</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_gplus) && $jmsSetting.social_gplus != ''}
                <li class="google-plus">
                    <a href="{$jmsSetting.social_gplus}" target="_blank"><i class="fa fa-google-plus" ></i>Google</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_instagram) && $jmsSetting.social_instagram != ''}
                <li class="instagram">
                    <a href="{$jmsSetting.social_instagram}" target="_blank"><i class="fa fa-instagram" ></i>Instagram</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_pinterest) && $jmsSetting.social_pinterest != ''}
                <li class="pinterest">
                    <a href="{$jmsSetting.social_pinterest}" target="_blank"><i class="fa fa-pinterest" ></i>Pinterest</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_youtube) && $jmsSetting.social_youtube != ''}
                <li class="youtube">
                    <a href="{$jmsSetting.social_youtube}" target="_blank"><i class="fa fa-youtube" ></i>Youtube</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_vimeo) && $jmsSetting.social_vimeo != ''}
                <li class="vimeo">
                    <a href="{$jmsSetting.social_vimeo}" target="_blank"><i class="fa fa-vimeo" ></i>Vimeo</a>
                </li>
            {/if}
            {if isset($jmsSetting.social_linkedin) && $jmsSetting.social_linkedin != ''}
                <li class="linkedin">
                    <a href="{$jmsSetting.social_linkedin}" target="_blank"><i class="fa fa-linkedin" ></i>Linkedin</a>
                </li>
            {/if}
        </ul>
    </div>
{/block}
