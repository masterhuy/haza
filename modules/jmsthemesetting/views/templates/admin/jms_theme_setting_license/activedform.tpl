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
<form class="defaultForm form-horizontal">
<div class="panel">
	<div class="form-wrapper">
		{if $code.0 == $domain}
			<div class="form-group">
				<label class="control-label col-lg-3">{l s='Status' d='Modules.JmsThemeSetting'} : </label>
				<div class="col-lg-9"><span class="alert alert-success">{l s='The License Key is actived' d='Modules.JmsThemeSetting'}</span></div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">{l s='Domain' d='Modules.JmsThemeSetting'} : </label>
				<div class="col-lg-9"><label class="control-label">{$code.0}</label></div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">{l s='Subscription' d='Modules.JmsThemeSetting'} : </label>
				<div class="col-lg-9"><label class="control-label"><strong>{$code.1}</strong></label></div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"></label>
				<div class="col-lg-9">{l s='Do you want Re-Active your license ?' d='Modules.JmsThemeSetting'} <a href="{$link->getAdminLink('AdminJmsThemeSettingLicense') nofilter}&configure=jmsthemesetting&action=reactive">{l s='Click Here' d='Modules.JmsThemeSetting'}</a></div>
			</div>
		{else}
			<div class="form-group">
					<label class="control-label col-lg-3">{l s='Registered Domain' d='Modules.JmsThemeSetting'} : </label>
					<div class="col-lg-9"><label class="control-label">{$code.0}</label></div>
			</div>
			<div class="form-group">
					<label class="control-label col-lg-3">{l s='Site Domain' d='Modules.JmsThemeSetting'} : </label>
					<div class="col-lg-9"><label class="control-label">{$domain}</label></div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3"></label>
				<div class="col-lg-9">{l s='Domains is difference so you need reactive key to confirm new domain.' d='Modules.JmsThemeSetting'} <a href="{$link->getAdminLink('AdminJmsThemeSettingLicense') nofilter}&configure=jmsthemesetting&action=reactive">{l s='Click Here to Re-Active' d='Modules.JmsThemeSetting'}</a></div>
			</div>
		{/if}
	</div>
</div>
</div>
