<?php
/* Smarty version 3.1.33, created on 2020-03-03 08:16:47
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\_partials\login\layout-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5e126f7979d7_26561049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b5b643c5ddd980c55df98f9ecbceec343b548c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\_partials\\login\\layout-4.tpl',
      1 => 1581654919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e126f7979d7_26561049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17875551305e5e126f7979d8_61789697', 'page_content');
?>

<?php }
/* {block 'display_after_login_form'} */
class Block_20349398395e5e126f7979d0_80782491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

                      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_4132905475e5e126f7979d6_45710742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="login-layout-1" id="login-wrapper">
          <div class="row login-row">
              <div class="col-md-6">
                  <div class="login-box login-form">
                      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20349398395e5e126f7979d0_80782491', 'display_after_login_form', $this->tplIndex);
?>

                  </div>
              </div>
              <div class="col-md-6">
                  <div class="login-box signup-form">
                      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
                      <div class="signup-content">
                          <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_signup_content'];?>

                      </div>
                      <div class="no-account">
                          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                          </a>
                      </div>
                  </div>
              </div>
          </div>
     <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_17875551305e5e126f7979d8_61789697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17875551305e5e126f7979d8_61789697',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_4132905475e5e126f7979d6_45710742',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_20349398395e5e126f7979d0_80782491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4132905475e5e126f7979d6_45710742', 'login_form_container', $this->tplIndex);
?>

 <?php
}
}
/* {/block 'page_content'} */
}
