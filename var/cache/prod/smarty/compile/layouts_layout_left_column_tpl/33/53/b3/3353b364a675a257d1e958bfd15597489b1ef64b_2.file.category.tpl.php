<?php
/* Smarty version 3.1.33, created on 2020-02-25 09:35:17
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e54ea55c9ad48_30109674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3353b364a675a257d1e958bfd15597489b1ef64b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\listing\\category.tpl',
      1 => 1573458692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_5e54ea55c9ad48_30109674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1155713685e54ea55c93041_21566750', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_1155713685e54ea55c93041_21566750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_1155713685e54ea55c93041_21566750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
?>
 <?php
}
}
/* {/block 'product_list_header'} */
}
