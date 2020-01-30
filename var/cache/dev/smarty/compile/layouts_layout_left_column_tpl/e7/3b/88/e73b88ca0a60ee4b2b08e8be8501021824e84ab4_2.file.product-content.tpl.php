<?php
/* Smarty version 3.1.33, created on 2020-01-30 09:57:01
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\product-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e32a86d605a94_64834612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e73b88ca0a60ee4b2b08e8be8501021824e84ab4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\product-content.tpl',
      1 => 1576555408,
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
function content_5e32a86d605a94_64834612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
        <div class="row product-detail default">
            <div class="pb-left-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pd-left-content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14093619485e32a86d5dab06_71473186', 'page_content_container');
?>

                </div>
            </div>
            <div class="pb-right-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1775909365e32a86d5de989_42257587', 'page_header_container');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13784815585e32a86d5e2803_49265883', 'product_prices');
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3229948585e32a86d5e2805_32874168', 'product_description_short');
?>


                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] > 0) {?>
                        <div class="specific_prices">
                            <div class="countdown-box">
                                <div class="countdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15522374695e32a86d5ee388_27812880', 'product_customization');
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15826959215e32a86d5ee385_53481575', 'product_buy');
?>

                    </div>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_8833418205e32a86d5dab09_96439626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_15930150605e32a86d5dab09_89701621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
                                
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8833418205e32a86d5dab09_96439626', 'product_cover_thumbnails', $this->tplIndex);
?>

                            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14093619485e32a86d5dab06_71473186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14093619485e32a86d5dab06_71473186',
  ),
  'page_content' => 
  array (
    0 => 'Block_15930150605e32a86d5dab09_89701621',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_8833418205e32a86d5dab09_96439626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <section class="page-content" id="content">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15930150605e32a86d5dab09_89701621', 'page_content', $this->tplIndex);
?>

                        </section>
                    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_3075495155e32a86d5de983_79278874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_16966168015e32a86d5de983_26845933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 itemprop="name" class="product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3075495155e32a86d5de983_79278874', 'page_title', $this->tplIndex);
?>
</h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1775909365e32a86d5de989_42257587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_1775909365e32a86d5de989_42257587',
  ),
  'page_header' => 
  array (
    0 => 'Block_16966168015e32a86d5de983_26845933',
  ),
  'page_title' => 
  array (
    0 => 'Block_3075495155e32a86d5de983_79278874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16966168015e32a86d5de983_26845933', 'page_header', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_13784815585e32a86d5e2803_49265883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_13784815585e32a86d5e2803_49265883',
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
class Block_3229948585e32a86d5e2805_32874168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_3229948585e32a86d5e2805_32874168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],400,"..." ));?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_15522374695e32a86d5ee388_27812880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_15522374695e32a86d5ee388_27812880',
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
class Block_12071748905e32a86d5f6088_29483493 extends Smarty_Internal_Block
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
class Block_19527497935e32a86d5f2206_71030988 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12071748905e32a86d5f6088_29483493', 'product_miniature', $this->tplIndex);
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
class Block_4425537865e32a86d5f9f00_40916404 extends Smarty_Internal_Block
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
class Block_19965341275e32a86d5f9f05_25067503 extends Smarty_Internal_Block
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
class Block_1565452225e32a86d5fdd97_92047220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_8151599325e32a86d601c13_05193517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_15826959215e32a86d5ee385_53481575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_15826959215e32a86d5ee385_53481575',
  ),
  'product_pack' => 
  array (
    0 => 'Block_19527497935e32a86d5f2206_71030988',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_12071748905e32a86d5f6088_29483493',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_4425537865e32a86d5f9f00_40916404',
  ),
  'product_variants' => 
  array (
    0 => 'Block_19965341275e32a86d5f9f05_25067503',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1565452225e32a86d5fdd97_92047220',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_8151599325e32a86d601c13_05193517',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19527497935e32a86d5f2206_71030988', 'product_pack', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4425537865e32a86d5f9f00_40916404', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19965341275e32a86d5f9f05_25067503', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1565452225e32a86d5fdd97_92047220', 'product_add_to_cart', $this->tplIndex);
?>

                                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_page_sharing']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                <?php }?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8151599325e32a86d601c13_05193517', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
}
