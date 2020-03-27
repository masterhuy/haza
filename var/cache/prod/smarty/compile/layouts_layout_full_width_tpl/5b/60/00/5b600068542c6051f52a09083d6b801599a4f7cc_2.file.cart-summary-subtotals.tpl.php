<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:17:25
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\checkout\_partials\cart-summary-subtotals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7e552f03f5_32498792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b600068542c6051f52a09083d6b801599a4f7cc' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\checkout\\_partials\\cart-summary-subtotals.tpl',
      1 => 1576119708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d7e552f03f5_32498792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card-block cart-summary-subtotals-container">

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['value'] && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
      <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">

        <span class="label">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </span>

        <span class="value">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>

        </span>
      </div>
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

<?php }
}
