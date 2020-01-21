<?php
/* Smarty version 3.1.33, created on 2019-12-05 02:45:37
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de86f51c662c2_92713169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd1151a380ddd8c12dcad167bb303119afe16d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1575363325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-1.tpl' => 1,
    'file:catalog/_partials/miniatures/product-2.tpl' => 1,
    'file:catalog/_partials/miniatures/product-3.tpl' => 1,
  ),
),false)) {
function content_5de86f51c662c2_92713169 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-2') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-3') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
 <?php }
}
}
