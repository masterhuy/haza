<?php
/* Smarty version 3.1.33, created on 2020-02-13 07:18:58
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e44f862a45ff7_07017419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54604c449f55f49a40fedfbc9a06880784d07ae' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1574071386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products-big.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5e44f862a45ff7_07017419 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6183796835e44f862a2e8e3_70597968', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_6932118655e44f862a32774_04981854 extends Smarty_Internal_Block
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
class Block_21124667605e44f862a32775_60217320 extends Smarty_Internal_Block
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
class Block_20180504485e44f862a365f5_50435218 extends Smarty_Internal_Block
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
class Block_9699564165e44f862a3e2f2_11499244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-big.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list'} */
class Block_18826550695e44f862a42170_35941503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_11819275725e44f862a42174_99441245 extends Smarty_Internal_Block
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
class Block_6183796835e44f862a2e8e3_70597968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6183796835e44f862a2e8e3_70597968',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_6932118655e44f862a32774_04981854',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_21124667605e44f862a32775_60217320',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_20180504485e44f862a365f5_50435218',
  ),
  'product_list' => 
  array (
    0 => 'Block_9699564165e44f862a3e2f2_11499244',
    1 => 'Block_18826550695e44f862a42170_35941503',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_11819275725e44f862a42174_99441245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6932118655e44f862a32774_04981854', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <div id="products-top">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21124667605e44f862a32775_60217320', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_activefilter'] == 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20180504485e44f862a365f5_50435218', 'product_list_active_filters', $this->tplIndex);
?>

                <?php }?>
                <div id="product_list" class="product_list <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list'] == 'grid') {?>products-grid grid-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'], ENT_QUOTES, 'UTF-8');
} else { ?>products-list<?php }?>">
                  <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '1-2-1-2' || $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '1-3-1-3' || $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '2-1-2-1' || $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_grid_column'] == '3-1-3-1') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9699564165e44f862a3e2f2_11499244', 'product_list', $this->tplIndex);
?>

                  <?php } else { ?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18826550695e44f862a42170_35941503', 'product_list', $this->tplIndex);
?>

                  <?php }?>
                </div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11819275725e44f862a42174_99441245', 'product_list_bottom', $this->tplIndex);
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
