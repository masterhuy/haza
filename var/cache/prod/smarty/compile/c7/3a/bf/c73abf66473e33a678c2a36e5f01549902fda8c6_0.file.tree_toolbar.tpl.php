<?php
/* Smarty version 3.1.33, created on 2020-03-30 08:28:30
  from 'D:\xamppp\htdocs\jms_haza\admin041sahknz\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e819f9e848e44_57997766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c73abf66473e33a678c2a36e5f01549902fda8c6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\admin041sahknz\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1566819320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e819f9e848e44_57997766 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
