<?php
/* Smarty version 3.1.33, created on 2020-03-20 07:47:02
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addonpopupadvertising.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7474f6a35612_56225399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f962235a2f6b47e6253120c68f50264457f7d0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonpopupadvertising.tpl',
      1 => 1583895232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
  ),
),false)) {
function content_5e7474f6a35612_56225399 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-popup-overlay" style="display:none;">
	<div class="jms-popup">
		<div class="layout-column col-auto header-left">
			<?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['popup_title']->value) {?>
			<h2>
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			</h2>
		<?php }?>
		<p class="desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Get the top stories newsletter everymorning",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
		<a class="popup-close">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/icons/close.png" />
		</a>
		<div class="dontshow">
			<input type="checkbox" name="dontshowagain" value="1" id="dontshowagain" />
			<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"I’d like to also receive information about HAZA programs and events",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</label>
			<span class="checkmark"></span>
		</div>
		<input type="hidden" name="width_default" id="width-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_width']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="height_default" id="height-default" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['popup_height']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="loadtime" id="loadtime" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loadtime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />

		<div class="jms-popup-content">
			<?php echo $_smarty_tpl->tpl_vars['popup_content']->value;?>

		</div>
		<button type="text" class="btn btn-grey">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I’M NOT INTERESTED','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		</button>
	</div>
</div>
<?php }
}
