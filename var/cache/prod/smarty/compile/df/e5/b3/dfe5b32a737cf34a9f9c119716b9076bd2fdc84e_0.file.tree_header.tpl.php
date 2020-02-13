<?php
/* Smarty version 3.1.33, created on 2020-02-13 09:39:19
  from 'D:\xamppp\htdocs\jms_haza\admin041sahknz\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e45194702e521_07714861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfe5b32a737cf34a9f9c119716b9076bd2fdc84e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\admin041sahknz\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1566819320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e45194702e521_07714861 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
