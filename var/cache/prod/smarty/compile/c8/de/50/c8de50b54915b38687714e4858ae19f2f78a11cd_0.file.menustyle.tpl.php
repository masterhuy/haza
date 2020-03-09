<?php
/* Smarty version 3.1.33, created on 2020-03-09 07:05:11
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsmegamenu\views\templates\admin\jmsmegamenu_style\menustyle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e65eaa707b3b6_02027005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8de50b54915b38687714e4858ae19f2f78a11cd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsmegamenu\\views\\templates\\admin\\jmsmegamenu_style\\menustyle.tpl',
      1 => 1570507776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e65eaa707b3b6_02027005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
		<div class="col-md-4 col-lg-4">
				<div class="select-menu jms-config">
						<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Menu to Style','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</h3>
						<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsmegamenuStyle'),'html','UTF-8' ));?>
&configure=jmsmegamenu" method="post">
						<select id="select-menu-to-edit" name="menu_id" class="form-control">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['menu']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'] == $_smarty_tpl->tpl_vars['menu']->value['menu_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<button class="btn btn-success" name="selectMenu" id="btn-select-menu" value="1" type="submit">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>

						</button>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsmegamenuManager'),'html','UTF-8' ));?>
&configure=jmsmegamenu&menu_id=<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
" class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Menu Manager','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
  </a>
						</form>
				</div>
		</div>
		<div class="col-md-8 col-lg-8">
				<div class="info-config jms-config">
					<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Megamenu','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</h3>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This toolbox use for style megamenu.There are 3 objects need style : Menu item, dropdown(submenu), Column.','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>

					<br />1 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to menu item to style for menu item.','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
   <br />2 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to dropdown to style for dropdown or add row.','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
  <br /> 3 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and click to column to add/remove column and style for column.','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>

					<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hover option label on toolbox to show desc of them.','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>

				</div>
				<div class="submenu-config jms-config">
						<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submenu Configuration','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</h3>
							<div class="config-field">
										<ul>
										    <li>
										        <label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submenu Configuration','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Row','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
														<fieldset class="btn-group">
										           <a data-action="addRow" class="btn toolcol-addcol toolbox-action"><i class="icon-plus"></i></a>
										        </fieldset>
										    </li>
										</ul>
										<ul>
										    <li>
													<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set for submenu fullwidth','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full Width','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
													<fieldset class="btn-group">
														<span class="switch prestashop-switch">
														<input type="radio" value="1" id="fullwidth_on" name="fullwidth">
														<label for="fullwidth_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
														<input type="radio" checked="checked" value="0" id="fullwidth_off" name="fullwidth">
														<label for="fullwidth_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
														<a class="slide-button btn"></a>
														</span>
													</fieldset>
												</li>
										</ul>
										<ul>
										    <li>
													<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width of submenu dropdown','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submenu Width(px)','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
													<fieldset class="btn-group">
													<input type="text" name="width"	value="" id="subwidth" />
													</fieldset>
											</li>
										</ul>
										<ul>
										    <li>
												<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Extra Class to style menu','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submenu Extra Class','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
												<fieldset class="btn-group">
												<input type="text" name="submenuclass" value="" id="submenu-class" />
												</fieldset>
											</li>
										</ul>
										<ul>
										    <li>
														<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alignment Dropdown Menu','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submenu Align','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
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
						<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column Configuration','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</h3>
						<div class="config-field">
							<ul>
							    <li>
							        <label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Column after selected column/ Remove selected Column','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add/remove Column','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
							           <a data-action="addColumn" class="btn toolcol-addcol toolbox-action"><i class="icon-plus"></i></a>
							           <a data-action="removeColumn" class="btn toolcol-removecol toolbox-action"><i class="icon-minus"></i></a>
							        </fieldset>
							    </li>
							</ul>
							<ul>
								<li>
									<label title="" class="hasTip" data-original-title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width (1-12)','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
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
									<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Extra Class to style Menu','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column Extra Class','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
									<input type="text" name="col-class" value="" id="col-class" />
									</fieldset>
								</li>
							</ul>
							</div>
				</div>
				<div class="menuitem-config jms-config">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu Item Configuration','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</h3>
				<div class="config-field">
							<ul>
							    <li>
									<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show/Hide Menu Title (hide when menu is module assign or custom html)','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show Title','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
										<span class="switch prestashop-switch">
										<input type="radio" checked="checked" value="1" id="showtitle_on" name="showtitle">
										<label for="showtitle_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
										<input type="radio" value="0" id="showtitle_off" name="showtitle">
										<label for="showtitle_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
										<a class="slide-button btn"></a>
										</span>
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set Menu to Group If you want it to be heading of column','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
										<span class="switch prestashop-switch">
										<input type="radio" value="1" id="group_on" name="group">
										<label for="group_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
										<input type="radio" checked="checked" value="0" id="group_off" name="group">
										<label for="group_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
										<a class="slide-button btn"></a>
										</span>
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Extra Class to style Menu','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item Extra Class','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
									<input type="text" name="itemclass" value="" id="item-class" />
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
									<label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Icon Class(awesome or other font icon), eg : fa fa-user, fa fa-home,...','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Icon Class','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
									<input type="text" name="iconclass" value="" id="icon-class" />
									</fieldset>
								</li>
							</ul>
							<ul>
							    <li>
							        <label data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Menu Item Style of Selected Menu Item','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
" class="label-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Item Style','d'=>'Modules.jmsmegamenu'),$_smarty_tpl ) );?>
</label>
									<fieldset class="btn-group">
							           <a data-action="resetStyle" class="btn btn-warning tool-reset toolbox-action"><i class="icon-rotate-left"></i></a>
							        </fieldset>
							    </li>
							</ul>
				</div>
				</div>
		</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['menuhtml']->value;?>

<input type="hidden" name="basedir" value="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" id="basedir" />
<?php }
}
