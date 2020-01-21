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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $addon_title}
    <div class="addon-title">
        <h3>{$addon_title|escape:'htmlall':'UTF-8'}</h3>
    </div>
{/if}
{if $addon_desc}
    <p class="addon-desc">{$addon_desc|escape:'htmlall':'UTF-8'}</p>
{/if}
<div id="social_block">
	<ul class="find-us">
       	{if $facebook_url != ''}
       		<li class="divider">
		       	<a href="{$facebook_url|escape:'html':'UTF-8'}" class="social-icon facebook" title="Facebook">
		       		<span class="fa fa-facebook"></span>Facebook
		       	</a>
       	{/if}
        {if $twitter_url != ''}
        	<li class="divider">
        		<a href="{$twitter_url|escape:'html':'UTF-8'}" class="social-icon twitter" title="Twitter">
        			<span class="fa fa-twitter"></span>Twitter
        		</a>
        {/if}
        {if $google_plus_url != ''}
            <li class="divider">
                <a href="{$google_plus_url|escape:'html':'UTF-8'}" class="social-icon gplus" title="Gplus">
                    <span class="fa fa-google"></span>Google
                </a>
        {/if}
        {if $instagram_url != ''}
            <li class="divider">
                <a href="{$instagram_url|escape:'html':'UTF-8'}" class="social-icon instagram" title="Instagram">
                    <span class="fa fa-instagram"></span>Instagram
                </a>
        {/if}
        {if $pinterest_url != ''}
            <li class="divider">
                <a href="{$pinterest_url|escape:'html':'UTF-8'}" class="social-icon pinterest" title="Pinterest">
                    <span class="fa fa-pinterest"></span>Pinterest
                </a>
        {/if}  
        {if $youtube_url != ''}
            <li class="divider">
                <a href="{$youtube_url|escape:'html':'UTF-8'}" class="social-icon youtube" title="Youtube">
                    <span class="fa fa-youtube"></span>Youtube
                </a>
        {/if}
        {if $linkedin_url != ''}
        	<li class="divider">
        		<a href="{$linkedin_url|escape:'html':'UTF-8'}" class="social-icon linkedin" title="Linkedin">
        			<span class="fa fa-linkedin"></span>Linkedin
        		</a>
        {/if}        
  </ul>
</div>
