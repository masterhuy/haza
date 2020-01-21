<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/headers/logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b248a54_56098003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f9869cd9639a38fc93eca6cf20ff59b7e2b4d1' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/headers/logo.tpl',
      1 => 1575627541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9b248a54_56098003 (Smarty_Internal_Template $_smarty_tpl) {
?> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'default') {?>
    <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'text') {?>
    <span class="site-logo-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_text'], ENT_QUOTES, 'UTF-8');?>
</span>
<?php }?>
</a>
<?php }
}
