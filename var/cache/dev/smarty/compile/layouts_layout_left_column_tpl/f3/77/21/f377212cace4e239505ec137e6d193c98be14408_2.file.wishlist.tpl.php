<?php
/* Smarty version 3.1.33, created on 2020-01-30 09:57:01
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\headers\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e32a86d3179e4_93634565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f377212cace4e239505ec137e6d193c98be14408' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\headers\\wishlist.tpl',
      1 => 1579516236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e32a86d3179e4_93634565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon'],"_"));
if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon_thickness']) {?>
   <?php $_smarty_tpl->_assignInScope('wishlist_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
   <?php $_smarty_tpl->_assignInScope('wishlist_icon', ($_smarty_tpl->tpl_vars['wishlist_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon_thickness']));
} else { ?>
   <?php $_smarty_tpl->_assignInScope('wishlist_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist_icon']);
}?>
<div id="wishlist_block"class="col-auto">
    <a href="index.php?fc=module&module=jmswishlist&controller=mywishlist"><i class="fal fa-heart"></i></a>
</div>
<?php }
}
