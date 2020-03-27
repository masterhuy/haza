<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:00:50
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db2b20053a1_42399352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e4976310d1398c541d9065fe3a7488448df5ef' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\address.tpl',
      1 => 1581654734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db2b20053a1_42399352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5292445985e7db2b1f3faa4_20608466', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16208971015e7db2b2001525_26673081', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_5292445985e7db2b1f3faa4_20608466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_5292445985e7db2b1f3faa4_20608466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['editing']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update your address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  <?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  <?php }
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_16208971015e7db2b2001525_26673081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_16208971015e7db2b2001525_26673081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="address-form">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('template'=>"customer/_partials/address-form.tpl",'ui'=>$_smarty_tpl->tpl_vars['address_form']->value),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'page_content'} */
}
