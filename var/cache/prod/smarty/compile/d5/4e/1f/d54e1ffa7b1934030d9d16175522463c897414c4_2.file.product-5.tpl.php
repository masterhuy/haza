<?php
/* Smarty version 3.1.33, created on 2020-03-27 03:57:11
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\miniatures\product-5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d79974d5f61_51772371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd54e1ffa7b1934030d9d16175522463c897414c4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\miniatures\\product-5.tpl',
      1 => 1582529055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5e7d79974d5f61_51772371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-miniature js-product-miniature productbox-5" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
	<div class="product-preview">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3941315835e7d79974aee56_76148538', 'product_thumbnail');
?>

	</div>

	<div class="product-info">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_variant']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11618921735e7d79974d5f61_72145526', 'product_variants');
?>

        <?php }?>
        <div class="title-price align-items-center">
    		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10116695485e7d79974d5f67_88682577', 'product_name');
?>

        </div>
        <div class="product-action">
            <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_price']) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21036837695e7d79974d5f63_21501562', 'product_price_and_shipping');
?>

            <?php }?>
            <?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon'],"_"));?>
            <?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon_thickness']) {?>
                <?php $_smarty_tpl->_assignInScope('cart_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
                <?php $_smarty_tpl->_assignInScope('cart_icon', ($_smarty_tpl->tpl_vars['cart_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon_thickness']));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('cart_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['cart_icon']);?>
            <?php }?>
        </div>
	</div>
</div>
<?php }
/* {block 'product_thumbnail'} */
class Block_3941315835e7d79974aee56_76148538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_3941315835e7d79974aee56_76148538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-image<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_hover'] == 'swap-image' && isset($_smarty_tpl->tpl_vars['product']->value['images'][1]) && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?> swap-image<?php } else { ?> blur-image<?php }?>">
				<img class="img-responsive product-img1<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?> owl-lazy<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?>data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
				    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
					title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				    data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
				/>
				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['productbox_hover'] == 'swap-image' && isset($_smarty_tpl->tpl_vars['product']->value['images'][1]) && $_smarty_tpl->tpl_vars['product']->value['images'][1]) {?>
					<img class="img-responsive product-img2<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?> owl-lazy<?php }?>"
                    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_lazyload']) {?>data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
					    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['legend'], ENT_QUOTES, 'UTF-8');?>
"
						title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
					    data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					/>
				<?php }?>
		  	</a>
		<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_variants'} */
class Block_11618921735e7d79974d5f61_72145526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_11618921735e7d79974d5f61_72145526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_10116695485e7d79974d5f67_88682577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_10116695485e7d79974d5f67_88682577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h3 class="product-title" itemprop="name"><a class="product-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
            <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_21036837695e7d79974d5f63_21501562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_21036837695e7d79974d5f63_21501562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="content_price">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                        <span class="old price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <span class="price new"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                    </div>
                <?php }?>
                <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
