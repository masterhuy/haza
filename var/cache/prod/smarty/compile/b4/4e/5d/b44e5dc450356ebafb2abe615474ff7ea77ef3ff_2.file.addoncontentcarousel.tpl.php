<?php
/* Smarty version 3.1.33, created on 2020-02-05 04:24:23
  from 'D:\xamppp\htdocs\jms_haza\modules\jmspagebuilder\views\templates\hook\addoncontentcarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3a4377032753_10865365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b44e5dc450356ebafb2abe615474ff7ea77ef3ff' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncontentcarousel.tpl',
      1 => 1580876206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a4377032753_10865365 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<div class="addon-title">
		<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
		<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
	<?php }?>
	</div>
<?php }?>
<div class="content-carousel<?php if (isset($_smarty_tpl->tpl_vars['box_class']->value) && $_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['box_class']->value;
}?> owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>5<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>5<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['content']->value['image'] || $_smarty_tpl->tpl_vars['content']->value['content']) {?>
			<div class="content-item">
				<?php if (isset($_smarty_tpl->tpl_vars['content']->value['image']) && $_smarty_tpl->tpl_vars['content']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;
echo $_smarty_tpl->tpl_vars['content']->value['image'];?>
" alt="Joommasters.com" /><?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['content']->value['content']) && $_smarty_tpl->tpl_vars['content']->value['content']) {
echo $_smarty_tpl->tpl_vars['content']->value['content'];
}?>
			</div>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
