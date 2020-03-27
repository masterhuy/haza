<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:42:05
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\footer-main-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dbc5d542834_19063232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953c486d405f6b67744730fb59f4b5df9f2a1aac' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\footer-main-1.tpl',
      1 => 1583482254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dbc5d542834_19063232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21360943155e7dbc5d53e9b6_12167777', 'hook_footer');
?>

            <div class="layout-column newsletter">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9950265e7dbc5d53e9b3_59256145', 'footer-newsletter');
?>

            </div>
        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12716406325e7dbc5d542839_11380961', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_21360943155e7dbc5d53e9b6_12167777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_21360943155e7dbc5d53e9b6_12167777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'footer-newsletter'} */
class Block_9950265e7dbc5d53e9b3_59256145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-newsletter' => 
  array (
    0 => 'Block_9950265e7dbc5d53e9b3_59256145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="block block-footer block-newsletter">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'footer-newsletter'} */
/* {block 'hook_footer_after'} */
class Block_12716406325e7dbc5d542839_11380961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_12716406325e7dbc5d542839_11380961',
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
