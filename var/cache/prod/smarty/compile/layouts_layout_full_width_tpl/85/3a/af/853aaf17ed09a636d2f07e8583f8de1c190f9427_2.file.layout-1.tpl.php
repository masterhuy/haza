<?php
/* Smarty version 3.1.33, created on 2020-02-04 09:20:50
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\contacts\layout-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e393772d9d084_86166566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '853aaf17ed09a636d2f07e8583f8de1c190f9427' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\contacts\\layout-1.tpl',
      1 => 1574045592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e393772d9d084_86166566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6377631215e393772d75f84_07552264', 'page_header_container');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9430514275e393772d75f87_27579859', 'page_content');
?>

<?php }
/* {block 'page_header_container'} */
class Block_6377631215e393772d75f84_07552264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_6377631215e393772d75f84_07552264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_9430514275e393772d75f87_27579859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_9430514275e393772d75f87_27579859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="contact-layout-1" id="contact-wrapper">
    <div class="contact-map" id="contact-map">
        <div class="contact-box">
          <iframe width="100%" height="500" style="border:0" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_map_src'], ENT_QUOTES, 'UTF-8');?>
" allowfullscreen=""></iframe>
        </div>
    </div>
    <div class="row contact-row">
          <div class="col-md-5" id="contact-info">
            <div class="contact-box">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

            </div>
          </div>
          <div class="col-md-7" id="contact-form">
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
