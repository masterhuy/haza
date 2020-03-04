<?php
/* Smarty version 3.1.33, created on 2020-03-04 06:46:37
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5f4ecdefe710_56355158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecac957167fec7be13085222c97ab61ab20dee28' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1582171719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-1.tpl' => 1,
    'file:catalog/_partials/miniatures/product-2.tpl' => 1,
    'file:catalog/_partials/miniatures/product-3.tpl' => 1,
    'file:catalog/_partials/miniatures/product-4.tpl' => 1,
  ),
),false)) {
function content_5e5f4ecdefe710_56355158 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-2') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-3') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_type'] == 'product-4') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
}
}
}
