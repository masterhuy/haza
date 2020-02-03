<?php
/* Smarty version 3.1.33, created on 2020-02-03 08:45:31
  from 'D:\xamppp\htdocs\jms_haza\modules\ps_emailsubscription\views\templates\admin\list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e37ddabf1cc41_76945775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cff1d6d6b8b8ddef27f21026af254af8c414dff9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\ps_emailsubscription\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1527074784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e37ddabf1cc41_76945775 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }
}
