<?php
/* Smarty version 3.1.33, created on 2020-03-03 09:40:08
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\footer-main-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5e25f8657467_28491439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d331a169c2fe646370686f178d7fd76da9b3a6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\footer-main-3.tpl',
      1 => 1580953980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials-2.tpl' => 1,
  ),
),false)) {
function content_5e5e25f8657467_28491439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20235802315e5e25f8657464_79180232', 'hook_footer');
?>

            <div class="layout-column wrapper block">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column wrapper block contact">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3624707485e5e25f8657466_95232017', 'footer-contact');
?>

            </div>
        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_470612665e5e25f8657462_63732671', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_20235802315e5e25f8657464_79180232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_20235802315e5e25f8657464_79180232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'footer-contact'} */
class Block_3624707485e5e25f8657466_95232017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-contact' => 
  array (
    0 => 'Block_3624707485e5e25f8657466_95232017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="block block-footer block-contact">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'footer-contact'} */
/* {block 'hook_footer_after'} */
class Block_470612665e5e25f8657462_63732671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_470612665e5e25f8657462_63732671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
}
