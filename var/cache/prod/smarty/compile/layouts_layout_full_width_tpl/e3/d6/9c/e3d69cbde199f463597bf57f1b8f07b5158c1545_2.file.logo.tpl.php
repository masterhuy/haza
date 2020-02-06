<?php
/* Smarty version 3.1.33, created on 2020-02-06 10:26:57
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\headers\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3be9f1979209_26317257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d69cbde199f463597bf57f1b8f07b5158c1545' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\headers\\logo.tpl',
      1 => 1580724892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3be9f1979209_26317257 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'default') {?>
        <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'image') {?>
        <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">  
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_source'] == 'text') {?>
        <span class="site-logo-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['logo_text'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }?>
</a>
<?php }
}
