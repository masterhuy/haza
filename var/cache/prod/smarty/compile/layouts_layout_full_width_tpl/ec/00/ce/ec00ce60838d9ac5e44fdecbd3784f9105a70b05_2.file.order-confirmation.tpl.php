<?php
/* Smarty version 3.1.33, created on 2020-03-05 08:13:01
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60b48d0d3854_46660222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec00ce60838d9ac5e44fdecbd3784f9105a70b05' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\checkout\\order-confirmation.tpl',
      1 => 1583394220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_5e60b48d0d3854_46660222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18548576235e60b48d05a6c7_46662463', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'hook_order_confirmation'} */
class Block_8625444575e60b48d085658_51688916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

          <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'hook_payment_return'} */
class Block_10851301455e60b48d085658_90316995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
              <section id="content-hook_payment_return" class="definition-list">
                  <div class="row">
                    <div class="col-md-12">
                      <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

                    </div>
                  </div>
              </section>
            <?php }?>
          <?php
}
}
/* {/block 'hook_payment_return'} */
/* {block 'hook_order_confirmation_1'} */
class Block_2071587705e60b48d085659_49598721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_order_confirmation_1'} */
/* {block 'order_details'} */
class Block_20605045605e60b48d085652_55918749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="order-details">
              <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
              <ul>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
                <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
                  <li>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>

                    <em class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
                  </li>
                <?php }?>
              </ul>
            </div>
          <?php
}
}
/* {/block 'order_details'} */
/* {block 'order_confirmation_table'} */
class Block_5650885565e60b48d0ac752_76352985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
          <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'customer_registration_form'} */
class Block_14266060865e60b48d0d3858_99826565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
            <div id="registration-form" class="card">
                <div class="card-body">
                    <h4 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

                </div>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'customer_registration_form'} */
/* {block 'hook_order_confirmation_2'} */
class Block_9176364785e60b48d0d3850_46480294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook-order-confirmation-footer">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

    </section>
  <?php
}
}
/* {/block 'hook_order_confirmation_2'} */
/* {block 'content'} */
class Block_18548576235e60b48d05a6c7_46662463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18548576235e60b48d05a6c7_46662463',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_8625444575e60b48d085658_51688916',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_10851301455e60b48d085658_90316995',
  ),
  'hook_order_confirmation_1' => 
  array (
    0 => 'Block_2071587705e60b48d085659_49598721',
  ),
  'order_details' => 
  array (
    0 => 'Block_20605045605e60b48d085652_55918749',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_5650885565e60b48d0ac752_76352985',
  ),
  'customer_registration_form' => 
  array (
    0 => 'Block_14266060865e60b48d0d3858_99826565',
  ),
  'hook_order_confirmation_2' => 
  array (
    0 => 'Block_9176364785e60b48d0d3850_46480294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="content-hook_order_confirmation">
      <div class="row">
        <div class="col-sm-12 col-md-7 order-confirmation-title-payment">
          <h1 class="h1 page-title">
            <span><i class="fal fa-check rtl-no-flip" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
          </h1>

          <div class="mail-sent-info">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['customer']->value['email'])),$_smarty_tpl ) );?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

            <?php }?>
          </div>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8625444575e60b48d085658_51688916', 'hook_order_confirmation', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10851301455e60b48d085658_90316995', 'hook_payment_return', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2071587705e60b48d085659_49598721', 'hook_order_confirmation_1', $this->tplIndex);
?>



        </div>
        <div class="col-sm-12 col-md-5 order-confirmation-details">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20605045605e60b48d085652_55918749', 'order_details', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5650885565e60b48d0ac752_76352985', 'order_confirmation_table', $this->tplIndex);
?>



        </div>
      </div>
  </section>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14266060865e60b48d0d3858_99826565', 'customer_registration_form', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9176364785e60b48d0d3850_46480294', 'hook_order_confirmation_2', $this->tplIndex);
?>


<?php
}
}
/* {/block 'content'} */
}
