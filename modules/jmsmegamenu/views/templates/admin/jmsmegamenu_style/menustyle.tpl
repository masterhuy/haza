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
<div class="row">
		<div class="col-md-4 col-lg-4">
				<div class="select-menu jms-config">
						<h3>{l s='Select Menu to Style' d='Modules.jmsmegamenu'}</h3>
						<form action="{$link->getAdminLink('AdminJmsmegamenuStyle')|escape:'html':'UTF-8'}&configure=jmsmegamenu" method="post">
						<select id="select-menu-to-edit" name="menu_id" class="form-control">
							{foreach from=$menus item=menu key=k}
									<option value="{$menu.menu_id}" {if $selected_menu.menu_id == $menu.menu_id}selected="selected"{/if}>{$menu.name}</option>
							{/foreach}
						</select>
						<button class="btn btn-success" name="selectMenu" id="btn-select-menu" value="1" type="submit">
							{l s='Select' d='Modules.jmsmegamenu'}
						</button>
						<a href="{$link->getAdminLink('AdminJmsmegamenuManager')|escape:'html':'UTF-8'}&configure=jmsmegamenu&menu_id={$selected_menu.menu_id}" class="pull-right">{l s='Back to Menu Manager' d='Modules.jmsmegamenu'}  </a>
						</form>
				</div>
		</div>
		<div class="col-md-8 col-lg-8">
				<div class="info-config jms-config">
					<h3>{l s='Megamenu' d='Modules.jmsmegamenu'}</h3>
					{l s='This toolbox use for style megamenu.There are 3 objects need style : Menu item, dropdown(submenu), Column.' d='Modules.jmsmegamenu'}
					<br />1 - {l s='Click to menu item to style for menu item.' d='Modules.jmsmegamenu'}   <br />2 - {l s='Click to dropdown to style for dropdown or add row.' d='Modules.jmsmegamenu'}  <br /> 3 - {l s='and click to column to add/remove column and style for column.' d='Modules.jmsmegamenu'}
					<br />{l s='Hover option label on toolbox to show desc of them.' d='Modules.jmsmegamenu'}
				</div>
				<div class="submenu-config jms-config">
						<h3>{l s='Submenu Configuration' d='Modules.jmsmegamenu'}</h3>
							<div class="config-field">
										<ul>
										    <li>
										        <label data-placement="top" data-original-title="{l s='Submenu Configuration' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Add Row' d='Modules.jmsmegamenu'}</label>
														<fieldset class="btn-group">
										           <a data-action="addRow" class="btn toolcol-addcol toolbox-action"><i class="icon-plus"></i></a>
										        </fieldset>
										    </li>
										</ul>
										<ul>
										    <li>
													<label data-placement="top" data-original-title="{l s='Set for submenu fullwidth' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Full Width' d='Modules.jmsmegamenu'}</label>
													<fieldset class="btn-group">
														<span class="switch prestashop-switch">
														<input type="radio" value="1" id="fullwidth_on" name="fullwidth">
														<label for="fullwidth_on">{l s='Yes' d='Modules.jmsmegamenu'}</label>
														<input type="radio" checked="checked" value="0" id="fullwidth_off" name="fullwidth">
														<label for="fullwidth_off">{l s='No' d='Modules.jmsmegamenu'}</label>
														<a class="slide-button btn"></a>
														</span>
													</fieldset>
												</li>
										</ul>
										<ul>
										    <li>
													<label data-placement="top" data-original-title="{l s='Width of submenu dropdown' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Submenu Width(px)' d='Modules.jmsmegamenu'}</label>
													<fieldset class="btn-group">
													<input type="text" name="width"	value="" id="subwidth" />
													</fieldset>
											</li>
										</ul>
										<ul>
										    <li>
												<label data-placement="top" data-original-title="{l s='Add Extra Class to style menu' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Submenu Extra Class' d='Modules.jmsmegamenu'}</label>
												<fieldset class="btn-group">
												<input type="text" name="submenuclass" value="" id="submenu-class" />
												</fieldset>
											</li>
										</ul>
										<ul>
										    <li>
														<label data-placement="top" data-original-title="{l s='Alignment Dropdown Menu' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Submenu Align' d='Modules.jmsmegamenu'}</label>
														<fieldset class="toolsub-alignment">
										        <div class="btn-group">
										            <a title="Left" data-align="left" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-left"><i class="icon-align-left"></i></a>
										            <a title="Right" data-align="right" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-right"><i class="icon-align-right"></i></a>
										            <a title="Center" data-align="center" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-center"><i class="icon-align-center"></i></a>
										            <a title="Justify" data-align="justify" data-action="alignment" href="#" class="btn toolbox-action tool-align tool-align-justify"><i class="icon-align-justify"></i></a>
										        </div>
										        </fieldset>
											</li>
										</ul>
							</div>
				</div>
				<div class="column-config jms-config">
						<h3>{l s='Column Configuration' d='Modules.jmsmegamenu'}</h3>
						<div class="config-field">
							<ul>
							    <li>
							        <label data-placement="top" data-original-title="{l s='Add Column after selected column/ Remove selected Column' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Add/remove Column' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
							           <a data-action="addColumn" class="btn toolcol-addcol toolbox-action"><i class="icon-plus"></i></a>
							           <a data-action="removeColumn" class="btn toolcol-removecol toolbox-action"><i class="icon-minus"></i></a>
							        </fieldset>
							    </li>
							</ul>
							<ul>
								<li>
									<label title="" class="hasTip" data-original-title="">{l s='Width (1-12)' d='Modules.jmsmegamenu'}</label>
							        <fieldset class="btn-group">
							        <select data-name="width" name="col-width" class="col-width" id="col-width">
										<option value="1">1</option>
							            <option value="2">2</option>
							            <option value="3">3</option>
							            <option value="4">4</option>
							            <option value="5">5</option>
							            <option value="6">6</option>
							            <option value="7">7</option>
							            <option value="8">8</option>
							            <option value="9">9</option>
							            <option value="10">10</option>
							            <option value="11">11</option>
							            <option value="12">12</option>
							        </select>
							        </fieldset>
							    </li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="{l s='Add Extra Class to style Menu' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Column Extra Class' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
									<input type="text" name="col-class" value="" id="col-class" />
									</fieldset>
								</li>
							</ul>
							</div>
				</div>
				<div class="menuitem-config jms-config">
				<h3>{l s='Menu Item Configuration' d='Modules.jmsmegamenu'}</h3>
				<div class="config-field">
							<ul>
							    <li>
									<label data-placement="top" data-original-title="{l s='Show/Hide Menu Title (hide when menu is module assign or custom html)' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Show Title' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
										<span class="switch prestashop-switch">
										<input type="radio" checked="checked" value="1" id="showtitle_on" name="showtitle">
										<label for="showtitle_on">{l s='Yes' d='Modules.jmsmegamenu'}</label>
										<input type="radio" value="0" id="showtitle_off" name="showtitle">
										<label for="showtitle_off">{l s='No' d='Modules.jmsmegamenu'}</label>
										<a class="slide-button btn"></a>
										</span>
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="{l s='Set Menu to Group If you want it to be heading of column' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Group' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
										<span class="switch prestashop-switch">
										<input type="radio" value="1" id="group_on" name="group">
										<label for="group_on">{l s='Yes' d='Modules.jmsmegamenu'}</label>
										<input type="radio" checked="checked" value="0" id="group_off" name="group">
										<label for="group_off">{l s='No' d='Modules.jmsmegamenu'}</label>
										<a class="slide-button btn"></a>
										</span>
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="{l s='Add Extra Class to style Menu' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Item Extra Class' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
									<input type="text" name="itemclass" value="" id="item-class" />
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="{l s='Icon Class(awesome or other font icon), eg : fa fa-user, fa fa-home,...' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Icon Class' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
									<input type="text" name="iconclass" value="" id="icon-class" />
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
							        <label data-placement="top" data-original-title="{l s='Reset Menu Item Style of Selected Menu Item' d='Modules.jmsmegamenu'}" class="label-tooltip">{l s='Reset Item Style' d='Modules.jmsmegamenu'}</label>
									<fieldset class="btn-group">
							           <a data-action="resetStyle" class="btn btn-warning tool-reset toolbox-action"><i class="icon-rotate-left"></i></a>
							        </fieldset>
							    </li>
							</ul>
				</div>
				</div>
		</div>
</div>

{$menuhtml nofilter}
<input type="hidden" name="basedir" value="{$base_url nofilter}" id="basedir" />
