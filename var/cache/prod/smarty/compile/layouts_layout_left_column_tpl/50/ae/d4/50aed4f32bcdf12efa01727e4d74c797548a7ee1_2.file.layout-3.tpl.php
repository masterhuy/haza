<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:06:27
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\contacts\layout-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7bc37ce3b3_50888186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50aed4f32bcdf12efa01727e4d74c797548a7ee1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\contacts\\layout-3.tpl',
      1 => 1584688283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d7bc37ce3b3_50888186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12310049135e7d7bc37c66a8_98143300', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10679132405e7d7bc37ca531_06988864', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_12310049135e7d7bc37c66a8_98143300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_12310049135e7d7bc37c66a8_98143300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_10679132405e7d7bc37ca531_06988864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_10679132405e7d7bc37ca531_06988864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-3" id="contact-wrapper">
    <div class="row contact-row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-image">
            <div class="contact-box">
                <img width="100%" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_image'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>    
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-7">
            <div id="contact-info">
                <div class="contact-box">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

                </div>
            </div>
            <div id="contact-form" class="contact-row">
                <div class="contact-box">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
