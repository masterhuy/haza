<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:17:24
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7e547977f3_05412026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffe00dc9892e93dd93372adb679294df7652788' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\checkout\\checkout.tpl',
      1 => 1584928717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5e7d7e547977f3_05412026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8018745785e7d7e5477c260_43929526', 'head');
?>

    </head>
    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value) && $_smarty_tpl->tpl_vars['jpb_homeclass']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

        <div class="main-site">
            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6803935415e7d7e5478bc74_81675888', 'header');
?>

            </header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9182980575e7d7e5478faf2_07653979', 'notifications');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3075552215e7d7e5478faf1_86694979', 'breadcrumb');
?>

            <section id="wrapper">
                <div class="container">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2851039945e7d7e5478faf8_45371973', 'content');
?>

                </div>
            </section>
            <footer id="footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7161189695e7d7e54793977_40591004', 'footer');
?>

            </footer>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13959098025e7d7e547977f9_18703912', 'javascript_bottom');
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

        </div>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_8018745785e7d7e5477c260_43929526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8018745785e7d7e5477c260_43929526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_6803935415e7d7e5478bc74_81675888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6803935415e7d7e5478bc74_81675888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_9182980575e7d7e5478faf2_07653979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_9182980575e7d7e5478faf2_07653979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_3075552215e7d7e5478faf1_86694979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_3075552215e7d7e5478faf1_86694979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'content'} */
class Block_2851039945e7d7e5478faf8_45371973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2851039945e7d7e5478faf8_45371973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <section id="content">
                            <div class="row">
                                <div class="col-md-8 left">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                                </div>
                                <div class="col-md-4 right cart-grid-right">
                                    <div class="right-box">
                                        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_7161189695e7d7e54793977_40591004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7161189695e7d7e54793977_40591004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_13959098025e7d7e547977f9_18703912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_13959098025e7d7e547977f9_18703912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
            <?php
}
}
/* {/block 'javascript_bottom'} */
}
