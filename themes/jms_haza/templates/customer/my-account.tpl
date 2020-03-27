{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @copyright 2007-2019 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Your account' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  <div class="">
    <div class="links row no-margin">
      <div class="col">
          <a id="identity-link" href="{$urls.pages.identity}">
            <span class="link-item">
              <i class="fal fa-user"></i>
              {l s='Information' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {if $customer.addresses|count}
      <div class="col">
          <a id="addresses-link" href="{$urls.pages.addresses}">
            <span class="link-item">
              <i class="far fa-address-card"></i>
              {l s='Addresses' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {else}
      <div class="col">
          <a id="address-link" href="{$urls.pages.address}">
            <span class="link-item">
              <i class="fa fa-address-card"></i>
              {l s='Add first address' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {/if}

      {if !$configuration.is_catalog}
      <div class="col">
          <a id="history-link" href="{$urls.pages.history}">
            <span class="link-item">
              <i class="fal fa-calendar-alt"></i>
              {l s='Order history and details' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {/if}

      {if !$configuration.is_catalog}
      <div class="col">
          <a id="order-slips-link" href="{$urls.pages.order_slip}">
            <span class="link-item">
              <i class="fal fa-list-alt"></i>
              {l s='Credit slips' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {/if}

      {if $configuration.voucher_enabled && !$configuration.is_catalog}
      <div class="col">
          <a id="discounts-link" href="{$urls.pages.discount}">
            <span class="link-item">
              <i class="fal fa-tags"></i>
              {l s='Vouchers' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {/if}

      {if $configuration.return_enabled && !$configuration.is_catalog}
      <div class="col">
          <a id="returns-link" href="{$urls.pages.order_follow}">
            <span class="link-item">
              <i class="fal fa-box-open"></i>
              {l s='Merchandise returns' d='Shop.Theme.Customeraccount'}
            </span>
          </a>
      </div>
      {/if}
      <div class="col">
        {block name='display_customer_account'}
          {hook h='displayCustomerAccount'}
        {/block}
      </div>
    </div>
  </div>
{/block}


{block name='page_footer'}
  {block name='my_account_links'}
    <div class="text-sm-center">
      <a href="{$logout_url}" >
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
    </div>
  {/block}
{/block}
