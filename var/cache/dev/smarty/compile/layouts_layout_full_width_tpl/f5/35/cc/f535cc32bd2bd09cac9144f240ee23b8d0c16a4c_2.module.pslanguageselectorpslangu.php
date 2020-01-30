<?php
/* Smarty version 3.1.33, created on 2020-01-30 10:27:14
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e32af829de4a1_94486583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f535cc32bd2bd09cac9144f240ee23b8d0c16a4c' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1579665735,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e32af829de4a1_94486583 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_haza/themes/jms_haza/modules/ps_languageselector/ps_languageselector-dropdown.tpl --><!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="btn-group languages-info">
		<a href="#" class="btn-xs text-uppercase" data-toggle="dropdown">
			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_language']->value['name_simple'],3,'' )), ENT_QUOTES, 'UTF-8');?>

		</a>
		<div class="dropdown-menu">
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="collapse-item text-uppercase">
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['name_simple'],3,'' )), ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
<?php }?>
<!-- /Block languages module -->
<!-- end D:\xamppp\htdocs\jms_haza/themes/jms_haza/modules/ps_languageselector/ps_languageselector-dropdown.tpl --><?php }
}
