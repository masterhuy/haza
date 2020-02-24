<?php
/* Smarty version 3.1.33, created on 2020-02-24 10:16:57
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53a2990167e0_59763644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ece84e372330ab3ba5df0ad0ba0c65d0d0892b0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\products.tpl',
      1 => 1574146790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5e53a2990167e0_59763644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<div id="js-product-list">
    <div class="products row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5228987505e53a2990167e0_77714166', 'product_miniature');
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9943212455e53a2990167e3_47208221', 'pagination');
?>

</div>
<?php }
/* {block 'product_miniature'} */
class Block_5228987505e53a2990167e0_77714166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_5228987505e53a2990167e0_77714166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
            <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_9943212455e53a2990167e3_47208221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_9943212455e53a2990167e3_47208221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
    <?php
}
}
/* {/block 'pagination'} */
}
