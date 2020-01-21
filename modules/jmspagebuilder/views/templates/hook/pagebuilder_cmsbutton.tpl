{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script type="text/template" id="tmpl-btn-add-page-cms">
    <div class="form-group row">
        <label class="form-control-label">{l s='Pagebuilder - Add Page to Content' mod='jmspagebuilder'}</label>
        <div class="col-auto">
            <select name="page_id" id="page_id" class="custom-select fixed-">
              {foreach from=$pages key=i item=page}
              <option value="{$page.id_page|escape:'html':'UTF-8'}">{$page.title|escape:'html':'UTF-8'}</option>
              {/foreach}
            </select>
        </div>
        <div class="col-auto">
          <a class="btn btn-primary add-page"><i class="icon-external-link"></i> {l s='Add' mod='jmspagebuilder'}</a>
        </div>
    </div>
</script>