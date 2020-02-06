<?php
/* Smarty version 3.1.33, created on 2020-02-06 03:00:09
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3b8139ee95a5_06243316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b16dc0b4d3f117b4f86779b78426e07391977a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1580789575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3b8139ee95a5_06243316 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-alertbox">
	<div id="alert-box" class="collapse show">
		<div class="alert alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alert_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}?> text-center">
			<?php echo $_smarty_tpl->tpl_vars['alert_message']->value;?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?>
			<a href="#" class="close" data-toggle="collapse" data-target="#alert-box">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/icons/alert-close.png" />
			</a>
		<?php }?>
	</div>
</div>


<?php }
}
