<?php
/* Smarty version 3.1.33, created on 2020-03-06 09:09:50
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\jmspagebuilder_body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e62135eb0aa72_31403834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd9c55ef67c422e98ea213d546239fe8e70895e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\jmspagebuilder_body.tpl',
      1 => 1569916440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e62135eb0aa72_31403834 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<div class="jms-row<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->custom_class) && $_smarty_tpl->tpl_vars['row']->value->settings->custom_class) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->custom_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img) && $_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>style="
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_img) && $_smarty_tpl->tpl_vars['row']->value->settings->background_img) {?>background-image:url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_img,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_size) && $_smarty_tpl->tpl_vars['row']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_size,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) && $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_attachment,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) && $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) {?>background-repeat:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_position) && $_smarty_tpl->tpl_vars['row']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_position,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		<?php }?>"
		<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->fluid) && $_smarty_tpl->tpl_vars['row']->value->settings->fluid == '0') {?>
			<div class="container">
		<?php } else { ?>
			<div class="container-fluid">
		<?php }?>
		<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->cols, 'column', false, 'cindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cindex']->value => $_smarty_tpl->tpl_vars['column']->value) {
?>
			<div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->className,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->custom_class) && $_smarty_tpl->tpl_vars['column']->value->settings->custom_class) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->custom_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" style="
			<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_img) && $_smarty_tpl->tpl_vars['column']->value->settings->background_img) {?>
				background-image:url('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_img,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) && $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat) {?>
				background-repeat:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->settings->background_repeat,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_size) && $_smarty_tpl->tpl_vars['column']->value->settings->background_size) {?>background-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_size,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_attachment) && $_smarty_tpl->tpl_vars['column']->value->settings->background_attachment) {?>background-attachment:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_attachment,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (isset($_smarty_tpl->tpl_vars['column']->value->settings->background_position) && $_smarty_tpl->tpl_vars['column']->value->settings->background_position) {?>background-position:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->settings->background_position,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value->addons, 'addon', false, 'aindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['aindex']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
					<div class="addon-box">
						<?php if (isset($_smarty_tpl->tpl_vars['addon']->value->return_value) && $_smarty_tpl->tpl_vars['addon']->value->return_value) {
echo $_smarty_tpl->tpl_vars['addon']->value->return_value;
}?>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
