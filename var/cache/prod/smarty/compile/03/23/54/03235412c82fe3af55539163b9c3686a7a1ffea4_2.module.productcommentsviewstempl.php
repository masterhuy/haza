<?php
/* Smarty version 3.1.33, created on 2020-03-25 10:17:18
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7b2faebe4803_98525249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1585128490,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b2faebe4803_98525249 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
  </div>
<?php }
}
}