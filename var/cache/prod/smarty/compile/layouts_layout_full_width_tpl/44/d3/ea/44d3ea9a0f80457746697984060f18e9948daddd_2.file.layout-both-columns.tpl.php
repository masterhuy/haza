<?php
/* Smarty version 3.1.33, created on 2020-02-06 10:26:57
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3be9f13107f5_76913090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d3ea9a0f80457746697984060f18e9948daddd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1580722075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5e3be9f13107f5_76913090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18432935595e3be9f12e96f9_90342054', 'head');
?>

    </head>

    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktitle_layout']) {?> blocktitle-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktitle_layout'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktab_layout']) {?> blocktab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['blocktab_layout'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_type']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_type'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_show']) {?> carousel-nav-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_nav_show'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_pag_show']) {?> carousel-pag-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['carousel_pag_show'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_pageclass']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>


        <div class="main-site">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4330901385e3be9f12e96f9_34384370', 'product_activation');
?>

            <header id="header">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15445537545e3be9f12e96f8_74469505', 'header');
?>

            </header>

    		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' && $_smarty_tpl->tpl_vars['jmsSetting']->value['breadcrumb']) {?>
    			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16656124805e3be9f13107f7_99494825', 'breadcrumb');
?>

    		<?php }?>
            <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>class="container"<?php }?>>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20360067935e3be9f13107f2_36145076', 'notifications');
?>

                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                    <div class="row">
                <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8504002055e3be9f13107f1_44922908', "left_column");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17068661795e3be9f13107f9_06697277', "content_wrapper");
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2569174265e3be9f13107f9_48484426', "right_column");
?>


                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                </div>
                <?php }?>

    		</div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13628926005e3be9f13107f6_04815077', "footer");
?>

        </div>



        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21141624285e3be9f13107f9_47708239', 'javascript_bottom');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    </body>
</html>
<?php }
/* {block 'head'} */
class Block_18432935595e3be9f12e96f9_90342054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_18432935595e3be9f12e96f9_90342054',
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
/* {block 'product_activation'} */
class Block_4330901385e3be9f12e96f9_34384370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_4330901385e3be9f12e96f9_34384370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_15445537545e3be9f12e96f8_74469505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15445537545e3be9f12e96f8_74469505',
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
/* {block 'breadcrumb'} */
class Block_16656124805e3be9f13107f7_99494825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_16656124805e3be9f13107f7_99494825',
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
/* {block 'notifications'} */
class Block_20360067935e3be9f13107f2_36145076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_20360067935e3be9f13107f2_36145076',
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
/* {block "left_column"} */
class Block_8504002055e3be9f13107f1_44922908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_8504002055e3be9f13107f1_44922908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="page-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                    <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_4640128195e3be9f13107f5_75210607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <p>Hello world! This is HTML5 Boilerplate.</p>
                            <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_17068661795e3be9f13107f9_06697277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_17068661795e3be9f13107f9_06697277',
  ),
  'content' => 
  array (
    0 => 'Block_4640128195e3be9f13107f5_75210607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-6">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4640128195e3be9f13107f5_75210607', "content", $this->tplIndex);
?>

                        </div>
                    <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_2569174265e3be9f13107f9_48484426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2569174265e3be9f13107f9_48484426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="right-column" class="col-xs-12 col-sm-12 col-md-4">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                            <?php }?>
                        </div>
                    <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_13628926005e3be9f13107f6_04815077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13628926005e3be9f13107f6_04815077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_21141624285e3be9f13107f9_47708239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_21141624285e3be9f13107f9_47708239',
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
