<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:01:42
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db2e619f103_49228509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2453f7660e12078b752277586d386960a431e64' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\addresses.tpl',
      1 => 1583393898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/block-address.tpl' => 1,
  ),
),false)) {
function content_5e7db2e619f103_49228509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8047513505e7db2e618b877_49667700', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_924786055e7db2e618f6f7_74192091', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_8047513505e7db2e618b877_49667700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_8047513505e7db2e618b877_49667700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'customer_address'} */
class Block_14607832625e7db2e61973f6_02927197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/block-address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('address'=>$_smarty_tpl->tpl_vars['address']->value), 0, true);
?>
    <?php
}
}
/* {/block 'customer_address'} */
/* {block 'page_content'} */
class Block_924786055e7db2e618f6f7_74192091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_924786055e7db2e618f6f7_74192091',
  ),
  'customer_address' => 
  array (
    0 => 'Block_14607832625e7db2e61973f6_02927197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value['addresses'], 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
    <div class="col-4">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14607832625e7db2e61973f6_02927197', 'customer_address', $this->tplIndex);
?>

    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <div class="clearfix"></div>
  <div class="addresses-footer">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-address" class="btn-default">
      <i class="fal fa-plus-circle"></i>
      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
<?php
}
}
/* {/block 'page_content'} */
}
