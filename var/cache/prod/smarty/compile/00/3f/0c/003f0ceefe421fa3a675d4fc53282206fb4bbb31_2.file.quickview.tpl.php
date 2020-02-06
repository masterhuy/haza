<?php
/* Smarty version 3.1.33, created on 2020-02-06 10:25:04
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3be9809d6088_18749295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003f0ceefe421fa3a675d4fc53282206fb4bbb31' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\quickview.tpl',
      1 => 1578901908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5e3be9809d6088_18749295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog container" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ptw-icon icon-closed_light"></i>
                </button>
            </div>
            <div class="modal-body" id="main">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 left">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5021033675e3be9809aef80_55322155', 'product_cover_thumbnails');
?>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 right">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14712552205e3be9809aef83_24068242', 'page_header_container');
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3098101115e3be9809aef80_52095162', 'product_prices');
?>


                        <div class="product-information">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2490425645e3be9809aef86_53511145', 'product_description_short');
?>


                            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6092364465e3be9809aef86_76971532', 'product_customization');
?>

                            <?php }?>


                            <div class="product-actions">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12076567325e3be9809aef83_73951942', 'product_buy');
?>

                            </div>

                            <ul class="other-info">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                                    <!-- number of item in stock -->
                                    <li id="product_reference">
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Code:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                                        <span class="editable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </li>
                                <?php }?>
                                <!-- availability or doesntExist -->
                                <li id="availability_statut">
                                    <label id="availability_label">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                    </label>
                                    <span id="availability_value" class="label-availability">
                                        <?php if (intval($_smarty_tpl->tpl_vars['product']->value['quantity']) <= 0) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </span>
                                </li>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'] > 0) {?>
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax: '),$_smarty_tpl ) );?>
</label>
                                        <span class="shipping_cost"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php } else { ?>
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping tax:'),$_smarty_tpl ) );?>
</label>
                                        <span class="shipping_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Free'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </li>
                            </ul>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['quickview_sharing']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_5021033675e3be9809aef80_55322155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_5021033675e3be9809aef80_55322155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_18861200845e3be9809aef89_72053370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_7365383955e3be9809aef80_69558274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <h2 itemprop="name" class="product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18861200845e3be9809aef89_72053370', 'page_title', $this->tplIndex);
?>
</h2>
                            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_14712552205e3be9809aef83_24068242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_14712552205e3be9809aef83_24068242',
  ),
  'page_header' => 
  array (
    0 => 'Block_7365383955e3be9809aef80_69558274',
  ),
  'page_title' => 
  array (
    0 => 'Block_18861200845e3be9809aef89_72053370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7365383955e3be9809aef80_69558274', 'page_header', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_3098101115e3be9809aef80_52095162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_3098101115e3be9809aef80_52095162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_2490425645e3be9809aef86_53511145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_2490425645e3be9809aef86_53511145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],350,"..." ));?>
</div>
                            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_6092364465e3be9809aef86_76971532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_6092364465e3be9809aef86_76971532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                                <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_miniature'} */
class Block_20062526605e3be9809d6085_24614006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_9840347595e3be9809aef82_22484983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                                <section class="product-pack">
                                                    <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                                                    <article>
                                                        <div class="card">
                                                            <div class="pack-product-container">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Products</th>
                                                                            <th>Price</th>
                                                                            <th>Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20062526605e3be9809d6085_24614006', 'product_miniature', $this->tplIndex);
?>

                                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </section>
                                            <?php }?>
                                        <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_17097208025e3be9809d6085_95258077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_variants'} */
class Block_13509370055e3be9809d6082_23849283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_8858075885e3be9809d6080_68616638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_buy'} */
class Block_12076567325e3be9809aef83_73951942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_12076567325e3be9809aef83_73951942',
  ),
  'product_pack' => 
  array (
    0 => 'Block_9840347595e3be9809aef82_22484983',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_20062526605e3be9809d6085_24614006',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_17097208025e3be9809d6085_95258077',
  ),
  'product_variants' => 
  array (
    0 => 'Block_13509370055e3be9809d6082_23849283',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_8858075885e3be9809d6080_68616638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                                        <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9840347595e3be9809aef82_22484983', 'product_pack', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17097208025e3be9809d6085_95258077', 'product_discounts', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13509370055e3be9809d6082_23849283', 'product_variants', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8858075885e3be9809d6080_68616638', 'product_add_to_cart', $this->tplIndex);
?>


                                    </form>
                                <?php
}
}
/* {/block 'product_buy'} */
}
