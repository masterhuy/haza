<?php
/* Smarty version 3.1.33, created on 2020-02-27 10:20:36
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\product-content-3columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5797f4426e99_24182048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac4d559a6c80bfa24e6a8f8c2f68409c4c39be8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\product-content-3columns.tpl',
      1 => 1582798818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-bottom.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5e5797f4426e99_24182048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <div class="row product-detail product-layout-3columns">
        <div class="pb-left-column col-4">
      	   <div class="pd-left-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10354507385e5797f43ffd85_97086653', 'page_content_container');
?>

      		 </div>
        </div>
        <div class="pb-right-column col-8">
            <div class="row">
          		<div class="column_left col-lg-7 col-sm-6 col-md-6 col-sx-12">
          			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17478569315e5797f4403c12_50006317', 'page_header_container');
?>

          			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11244835415e5797f4407a95_14322529', 'product_prices');
?>

          			<div class="product-information">
          				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12626349415e5797f4407a94_96229594', 'product_description_short');
?>


          				<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
          					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2108827145e5797f440f799_99254958', 'product_customization');
?>

          				<?php }?>
          		</div>
          	</div>
      			<div class="column-right col-lg-5 col-md-6 col-sm-6 col-xs-12">
      				<div class="product-actions">
      					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5230021905e5797f440f791_00773881', 'product_buy');
?>

      				</div>
  				    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

  			   </div>
  		   </div>
      </div>
	 </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_6442697565e5797f43ffd87_56382880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
                      
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_16485427665e5797f43ffd82_09933186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6442697565e5797f43ffd87_56382880', 'product_cover_thumbnails', $this->tplIndex);
?>

                  <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10354507385e5797f43ffd85_97086653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10354507385e5797f43ffd85_97086653',
  ),
  'page_content' => 
  array (
    0 => 'Block_16485427665e5797f43ffd82_09933186',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_6442697565e5797f43ffd87_56382880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content" id="content">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16485427665e5797f43ffd82_09933186', 'page_content', $this->tplIndex);
?>

                </section>
              <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_15329459775e5797f4403c15_68883928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_838267585e5797f4403c16_27218976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          					<h1 class="product-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15329459775e5797f4403c15_68883928', 'page_title', $this->tplIndex);
?>
</h1>
          				<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_17478569315e5797f4403c12_50006317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_17478569315e5797f4403c12_50006317',
  ),
  'page_header' => 
  array (
    0 => 'Block_838267585e5797f4403c16_27218976',
  ),
  'page_title' => 
  array (
    0 => 'Block_15329459775e5797f4403c15_68883928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_838267585e5797f4403c16_27218976', 'page_header', $this->tplIndex);
?>

          			<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_11244835415e5797f4407a95_14322529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_11244835415e5797f4407a95_14322529',
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
class Block_12626349415e5797f4407a94_96229594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_12626349415e5797f4407a94_96229594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          					<div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-desc"itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],800,"..." ));?>
</div>
          				<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_2108827145e5797f440f799_99254958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_2108827145e5797f440f799_99254958',
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
class Block_5117519625e5797f4417496_02331437 extends Smarty_Internal_Block
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
class Block_2190732585e5797f4413619_90662255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      							<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
      								<section class="product-pack">
      									<h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
      									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
      										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5117519625e5797f4417496_02331437', 'product_miniature', $this->tplIndex);
?>

      									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      								</section>
      							<?php }?>
      							<?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_4814541685e5797f441b313_67985665 extends Smarty_Internal_Block
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
class Block_20328139945e5797f441f190_17116545 extends Smarty_Internal_Block
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
class Block_1924578205e5797f441f197_69524117 extends Smarty_Internal_Block
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
class Block_15381818875e5797f4423019_96429541 extends Smarty_Internal_Block
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
class Block_5230021905e5797f440f791_00773881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_5230021905e5797f440f791_00773881',
  ),
  'product_pack' => 
  array (
    0 => 'Block_2190732585e5797f4413619_90662255',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_5117519625e5797f4417496_02331437',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_4814541685e5797f441b313_67985665',
  ),
  'product_variants' => 
  array (
    0 => 'Block_20328139945e5797f441f190_17116545',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1924578205e5797f441f197_69524117',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_15381818875e5797f4423019_96429541',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2190732585e5797f4413619_90662255', 'product_pack', $this->tplIndex);
?>


      							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4814541685e5797f441b313_67985665', 'product_discounts', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20328139945e5797f441f190_17116545', 'product_variants', $this->tplIndex);
?>


      							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1924578205e5797f441f197_69524117', 'product_add_to_cart', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['product_page_sharing']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php }?>

      							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15381818875e5797f4423019_96429541', 'product_refresh', $this->tplIndex);
?>

      						</form>
      					<?php
}
}
/* {/block 'product_buy'} */
}
