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

<div class="note">
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Drap &amp; Drop Menu Item to Change Order.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use Collapse tool to Collapse Menu. It will be easy when change order.</p>
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Use Checkbox and Tools On right Side when want to Change State/Remove more items.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use <strong>Collapse All</strong> and <strong>Check All</strong> When you want Collapse all item and check to all checkbox.</p>
</div>
<div class="row">
		<div class="col-md-4 col-lg-4">
				<form action="{$link->getAdminLink('AdminJmsmegamenuManager')|escape:'html':'UTF-8'}&configure=jmsmegamenu" method="post" class="jms-config">
					<h3>
			      <i class="icon-edit"></i>&nbsp;&nbsp;{l s='Select a menu to edit' d='Modules.jmsmegamenu'}
			    </h3>
					<div class="form-group row">
						<select id="select-menu-to-edit" name="menu_id" class="form-control">
							{foreach from=$menus item=menu key=k}
									<option value="{$menu.menu_id}" {if $selected_menu.menu_id == $menu.menu_id}selected="selected"{/if}>{$menu.name}</option>
							{/foreach}
						</select>
						<button class="btn btn-success" name="selectMenu" id="btn-select-menu" value="1" type="submit">
							{l s='Select' d='Modules.jmsmegamenu'}
						</button>
						<a href="#" id="add-menu" class="pull-right"><i class="material-icons ps-togglable-row grid-toggler-icon-valid">add</i>{l s='Create New Menu' d='Modules.jmsmegamenu'}</a>
					</div>
				</form>
				<form action="{$link->getAdminLink('AdminJmsmegamenuManager')|escape:'html':'UTF-8'}&configure=jmsmegamenu" method="post" id="add-menu-form" class="jms-config" style="display:none;">
					<h3>
						<i class="icon-plus"></i>&nbsp;&nbsp;{l s='Add New Menu' d='Modules.jmsmegamenu'}
					</h3>
						<label>{l s='Menu Name' d='Modules.jmsmegamenu'}:</label>
						<input type="textbox" name="name" value="" class="form-control" />
						<button class="btn btn-success" name="addMenu" id="btn-add-menu" value="1" type="submit">
							{l s='Add' d='Modules.jmsmegamenu.Shop'}
						</button>
				</form>
				{if $selected_menu}
				<form action="{$link->getAdminLink('AdminJmsmegamenuManager')|escape:'html':'UTF-8'}&configure=jmsmegamenu" class="jms-config" method="post">
						<h3>
							<i class="icon-edit"></i>&nbsp;&nbsp;{l s='Edit Menu' d='Modules.jmsmegamenu'}
						</h3>
						<label>{l s='Menu Name' d='Modules.jmsmegamenu'}:</label>
						<input type="textbox" name="name" value="{$selected_menu.name}" class="form-control" />
						<input type="hidden" name="menu_id" value="{$selected_menu.menu_id}" />
						<button class="btn btn-success" name="editMenu" id="btn-edit-menu" value="1" type="submit">
							{l s='Save' d='Modules.jmsmegamenu.Shop'}
						</button>
						<a href="{$link->getAdminLink('AdminJmsmegamenuManager')|escape:'html':'UTF-8'}&configure=jmsmegamenu&deleteMenu&menu_id={$selected_menu.menu_id}" data-confirm="Are you sure to delete this item ?" class="delete-link pull-right"><i class="material-icons grid-toggler-icon-not-valid">delete</i>{l s='Delete Menu' d='Modules.jmsmegamenu'}</a>  <a href="{$link->getAdminLink('AdminJmsmegamenuStyle')|escape:'html':'UTF-8'}&configure=jmsmegamenu&menu_id={$selected_menu.menu_id}" class="pull-right"><i class="material-icons">star_half</i>{l s='Menu Style' d='Modules.jmsmegamenu'}</a>
				</form>
				{/if}
		</div>
		<div class="col-md-8 col-lg-8 item-list">
			<h3>
			  <i class="icon-list-ul"></i> {l s='Menu Items' d='.Modules.JmsMegamenu'}
				<span class="pull-right check-all">
					<input type="checkbox" onclick="checkAll(this)" title="{l s='Check All' d='.Modules.JmsMegamenu'}" value="" name="checkall-toggle">&nbsp;&nbsp;{l s='Check / UnCheck All' d='.Modules.JmsMegamenu'}
				</span>
				<span class="collapse-expand-all pull-right">
					<i class="material-icons ">remove</i>&nbsp;&nbsp;{l s='Collapse / Expand All' d='.Modules.JmsMegamenu'}
				</span>
			</h3>
			<form name="adminForm" action="{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu" method="post">
				<div class="menus_container">
				<ul id="menus">
					{foreach from=$menuitems item=menuitem key=k}
						{$n = $k|intval + 1}
						{if $n >=  $menuitems|@count}
							{$nextitem = NULL}

						{else}
							{$nextitem = $menuitems[$n]}
						{/if}
						<li id="menus_{$menuitem.mitem_id nofilter}" class="menu-item lvl{$menuitem.level}">
							<div class="menu-item-bar">
									<div class="menu-item-handle">
										<input type="checkbox" class="jms-checkbox" title="Checkbox" onclick="isChecked(this);" value="{$menuitem.mitem_id nofilter}" name="cid[]" id="cb{$k nofilter}">
										<span class="menu-item-title">{$menuitem.name nofilter}</span>
										<div class="btn-group-action pull-right">
											<a class="btn label-tooltip" data-toggle="tooltip" data-placement="top" onclick="cStatus('cb{$k nofilter}','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&menu_id={$selected_menu.menu_id}',{if $menuitem.active}0{else}1{/if})" title="{if $menuitem.active}{l s='Unactive' d='.Modules.JmsMegamenu'}{else}{l s='Active' d='.Modules.JmsMegamenu'}{/if}">
												{if $menuitem.active}
														<i class="material-icons ps-togglable-row grid-toggler-icon-valid">check</i>
												{else}
														<i class="material-icons ps-togglable-row grid-toggler-icon-not-valid">clear</i>
												{/if}
											</a>
											<a class="btn label-tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{l s='Edit' d='.Modules.JmsMegamenu'}"
												href="{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&editItem&menu_id={$selected_menu.menu_id}&mitem_id={$menuitem.mitem_id nofilter}" title="Edit">
												<i class="material-icons">edit</i>
											</a>
											<a class="btn label-tooltip" data-toggle="tooltip" data-placement="top" data-original-title="{l s='Delete' d='.Modules.JmsMegamenu'}"
												onclick="cRemove('cb{$k nofilter}','{$link->getAdminLink('AdminJmsmegamenuManager') nofilter}&configure=jmsmegamenu&menu_id={$selected_menu.menu_id}')">
													<i class="material-icons">delete</i>
											</a>
										</div>
										<span class="item-type pull-right">{$menuitem.type nofilter}</span>
									</div>
									{if $menuitem.level < $nextitem.level}
									<div class="button-expand">
											<a class="collapse-expand" title="{l s='Collapse / Expand' d='.Modules.JmsMegamenu'}">
												<i class="material-icons">remove</i>
											</a>
									</div>
									{/if}
							</div>
							{if $menuitem.level < $nextitem.level}
								<ul class="jms-submenu jms-submenu{$nextitem.level nofilter}">
							{elseif $menuitem.level > $nextitem.level}
								{if $menuitem.level - $nextitem.level == 1}
							</li></ul>
								{elseif $menuitem.level - $nextitem.level == 2}
							</ul></li></ul>
								{elseif $menuitem.level - $nextitem.level == 3}
							</li></ul></li></ul>
								{/if}
							{else}
								</li>
							{/if}
					{/foreach}
				</ul>
				</div>
				<input type="hidden" name="task" value="" />
				<input type="hidden" value="" name="boxchecked">
			</form>
		</div>
</div>
<script type="text/javascript">
$('ul#menus').sortable( {
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu1').sortable( {
	forceHelperSize: true,
	forcePlaceholderSize: true,
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url nofilter}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu2').sortable( {
	forceHelperSize: true,
	forcePlaceholderSize: true,
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url nofilter}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.jms-submenu3').sortable( {
	connectWith: '.jms-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl3",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("{$base_url nofilter}modules/jmsmegamenu/ajax_jmsmegamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
</script>
