<?php
/* Smarty version 3.1.33, created on 2019-12-05 04:59:13
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de88ea12cb361_36892769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf2e26f32f3c23b120af85226da44c8c92a6b78' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1573720520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-gallery.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-left.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-right.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-bottom.tpl' => 1,
  ),
),false)) {
function content_5de88ea12cb361_36892769 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout'] == 'thumbs-gallery') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout'] == 'thumbs-left') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout'] == 'thumbs-right') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php } else { ?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
