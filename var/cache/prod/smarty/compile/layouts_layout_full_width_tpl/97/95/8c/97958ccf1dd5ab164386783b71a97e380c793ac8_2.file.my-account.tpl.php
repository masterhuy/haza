<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:01:47
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db2eb1426c6_59745553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97958ccf1dd5ab164386783b71a97e380c793ac8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\my-account.tpl',
      1 => 1585291895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db2eb1426c6_59745553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14930457165e7db2eb100034_28673281', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6973698395e7db2eb107d31_74790008', 'page_content');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19357663415e7db2eb13e846_63225585', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_14930457165e7db2eb100034_28673281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_14930457165e7db2eb100034_28673281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_customer_account'} */
class Block_15109909005e7db2eb136b43_07306147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_content'} */
class Block_6973698395e7db2eb107d31_74790008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_6973698395e7db2eb107d31_74790008',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_15109909005e7db2eb136b43_07306147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="">
    <div class="links row no-margin">
      <div class="col">
          <a id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="fal fa-user"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
      <div class="col">
          <a id="addresses-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="far fa-address-card"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php } else { ?>
      <div class="col">
          <a id="address-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="fa fa-address-card"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="history-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="fal fa-calendar-alt"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="order-slips-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="fal fa-list-alt"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="discounts-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="fal fa-tags"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <div class="col">
          <a id="returns-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
              <i class="fal fa-box-open"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

            </span>
          </a>
      </div>
      <?php }?>
      <div class="col">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15109909005e7db2eb136b43_07306147', 'display_customer_account', $this->tplIndex);
?>

      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_13465747235e7db2eb13e840_48494184 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="text-sm-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
    </div>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_19357663415e7db2eb13e846_63225585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_19357663415e7db2eb13e846_63225585',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_13465747235e7db2eb13e840_48494184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13465747235e7db2eb13e840_48494184', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
