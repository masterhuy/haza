<?php
/* Smarty version 3.1.33, created on 2020-03-30 09:49:52
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e81b2b00d0384_90273623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156e1d3d4d3aefd5c6b70066b4fe192d49f001e3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1585537258,
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
function content_5e81b2b00d0384_90273623 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout'] == 'thumbs-gallery') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout'] == 'thumbs-left') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_content_layout'] == 'thumbs-right') {?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
