<?php
/* Smarty version 3.1.33, created on 2020-03-19 03:50:04
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e72ebec49b403_94936305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54604c449f55f49a40fedfbc9a06880784d07ae' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1582859180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 2,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5e72ebec49b403_94936305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_layout'] == 'right-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-right-column.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_layout'] == 'left-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-left-column.tpl');
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_layout'] == 'no-sidebar') {?>
    <?php $_smarty_tpl->_assignInScope('layout', 'layouts/layout-full-width.tpl');
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18672038715e72ebec49b402_10375403', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_1639455985e72ebec49b407_87777396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h2 id="js-product-list-header" class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h2>
        <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_9633911615e72ebec49b405_55036874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_10075865625e72ebec49b402_15004428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="active-filter" class="hidden-sm-down">
                            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                        </div>
                    <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_15633423175e72ebec49b401_73113374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list'} */
class Block_1248694985e72ebec49b407_69998648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, true);
?>
                        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_17057092065e72ebec49b409_52461787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_18672038715e72ebec49b402_10375403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18672038715e72ebec49b402_10375403',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_1639455985e72ebec49b407_87777396',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_9633911615e72ebec49b405_55036874',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_10075865625e72ebec49b402_15004428',
  ),
  'product_list' => 
  array (
    0 => 'Block_15633423175e72ebec49b401_73113374',
    1 => 'Block_1248694985e72ebec49b407_69998648',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_17057092065e72ebec49b409_52461787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639455985e72ebec49b407_87777396', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="products-top">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9633911615e72ebec49b405_55036874', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_activefilter'] == 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10075865625e72ebec49b402_15004428', 'product_list_active_filters', $this->tplIndex);
?>

                <?php }?>
                <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list'] == 'grid') {?>products-grid grid-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'], ENT_QUOTES, 'UTF-8');
} else { ?>products-list<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '1-2-1-2' || $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '1-3-1-3' || $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '2-1-2-1' || $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '3-1-3-1') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15633423175e72ebec49b401_73113374', 'product_list', $this->tplIndex);
?>

                    <?php } else { ?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1248694985e72ebec49b407_69998648', 'product_list', $this->tplIndex);
?>

                    <?php }?>
                </div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17057092065e72ebec49b409_52461787', 'product_list_bottom', $this->tplIndex);
?>

                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </section>
    </section>
<?php
}
}
/* {/block 'content'} */
}
