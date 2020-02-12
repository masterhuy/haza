<?php
/* Smarty version 3.1.33, created on 2020-02-12 07:10:55
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsajaxsearch\views\templates\hook\search-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e43a4ff1ae707_11315242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a1322cccc6d1e4573f8ae4aa565c48cd6bdbd53' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsajaxsearch\\views\\templates\\hook\\search-ajax.tpl',
      1 => 1572598512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e43a4ff1ae707_11315242 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-result-content">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="search_product_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <div class="row align-items-center clearfix">
					          <?php if ($_smarty_tpl->tpl_vars['show_image']->value == 1) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="search-product-image col-auto layout-column">
    				            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
    				        </a>
					          <?php }?>
                    <div class="product-info layout-column">
                        <a class="product-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],35,'...' ));?>

                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['show_desc']->value == 1) {?>
                        <p class="desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['desc'],$_smarty_tpl->tpl_vars['desc_count']->value,'...' ));?>
</p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['show_price']->value == 1) {?>
                        <div class="content_price">
                            <span class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                        </div>
                        <?php }?>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['no_text']->value;?>

    <?php }?>
</div>
<?php }
}
