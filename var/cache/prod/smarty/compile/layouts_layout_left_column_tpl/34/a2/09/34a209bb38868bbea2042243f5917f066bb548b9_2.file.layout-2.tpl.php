<?php
/* Smarty version 3.1.33, created on 2020-03-20 07:01:41
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\contacts\layout-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e746a552e90b9_83649199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a209bb38868bbea2042243f5917f066bb548b9' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\contacts\\layout-2.tpl',
      1 => 1584686201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e746a552e90b9_83649199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18455408555e746a552c1fb4_90391574', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16618846445e746a552c1fb1_40025397', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_18455408555e746a552c1fb4_90391574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_18455408555e746a552c1fb4_90391574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_16618846445e746a552c1fb1_40025397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_16618846445e746a552c1fb1_40025397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-2" id="contact-wrapper">
    <div class="row contact-row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5" id="contact-info">
            <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

            </div>
            <div class="contact-map contact-row" id="contact-map">
                <div class="contact-box">
                    <iframe width="100%" height="300" style="border:0"
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_map_src'], ENT_QUOTES, 'UTF-8');?>
"
                        allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-7" id="contact-form">
            <div class="contact-box">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
