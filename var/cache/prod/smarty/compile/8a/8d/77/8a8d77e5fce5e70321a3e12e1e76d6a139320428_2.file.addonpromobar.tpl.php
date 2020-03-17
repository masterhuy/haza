<?php
/* Smarty version 3.1.33, created on 2020-03-17 08:40:35
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addonpromobar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e708d03982621_50087157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8d77e5fce5e70321a3e12e1e76d6a139320428' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonpromobar.tpl',
      1 => 1581675292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e708d03982621_50087157 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="promobar" class="promobar<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['promobar_position']->value == 'top') {?> top<?php } else { ?> bottom<?php }
if ($_smarty_tpl->tpl_vars['promobar_fixed']->value == 'yes') {?> promobar-fixed<?php } else {
}?> collapse show" style="<?php if ($_smarty_tpl->tpl_vars['promobar_bg']->value) {?>background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promobar_bg']->value, ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['promobar_height']->value) {?> height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promobar_height']->value, ENT_QUOTES, 'UTF-8');?>
px;<?php }?>">
	<div class="container">
		<?php echo $_smarty_tpl->tpl_vars['promobar_message']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['promobar_expire_time']->value) {?>
			<span class="promo-countdown">
				<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['promobar_expire_time']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?>
			<a href="#" class="close" data-toggle="collapse" data-target="#promobar"></a>
		<?php }?>
	</div>
</div><?php }
}
