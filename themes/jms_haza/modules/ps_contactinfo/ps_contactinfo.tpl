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

<div class="block-contact links wrapper block">
    <h3 class="block-title">
        {l s='Contact info' d='Shop.Theme.Global'}
        <i class="fal fa-plus"></i>
    </h3>
    <h3 class="block-title type-2">
        {l s='Contact' d='Shop.Theme.Global'}
        <i class="fal fa-plus"></i>
    </h3>
    <h3 class="block-title type-3">
        {l s='Help' d='Shop.Theme.Global'}
        <i class="fal fa-plus"></i>
    </h3>
    <div class="block-content">
        <div class="address section">
            <p class="info-address">{$contact_infos.address.address1 nofilter}</p>
        </div>

        {if $contact_infos.phone}
            <div class="phone section">
                Call:
                {* [1][/1] is for a HTML tag. *}

                {l s='[1]%phone%[/1]'
                    sprintf=[
                    '[1]' => '<span>',
                    '[/1]' => '</span>',
                    '%phone%' => $contact_infos.phone
                    ]
                d='Shop.Theme.Global'}
            </div>
        {/if}

        {if $contact_infos.email}
            <div class="email section">
                Email:
                {* [1][/1] is for a HTML tag. *}                    
                    {l
                        s='[1]%email%[/1]'
                        sprintf=[
                        '[1]' => '<span>',
                        '[/1]' => '</span>',
                        '%email%' => $contact_infos.email
                        ]
                    d='Shop.Theme.Global'}
            </div>
        {/if}
        <div class="opening section">
            <p>{$contact_infos.address.address2 nofilter}</p>
        </div>
    </div>
</div>
