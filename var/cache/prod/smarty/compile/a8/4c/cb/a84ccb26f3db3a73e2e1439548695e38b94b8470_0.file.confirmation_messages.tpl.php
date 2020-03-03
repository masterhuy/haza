<?php
/* Smarty version 3.1.33, created on 2020-03-03 09:46:04
  from 'D:\xamppp\htdocs\jms_haza\admin041sahknz\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5e275c4a2a00_70156388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a84ccb26f3db3a73e2e1439548695e38b94b8470' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\admin041sahknz\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1566819320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e275c4a2a00_70156388 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
