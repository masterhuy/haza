<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:01:47
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db2eb161ad0_33211533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '004b71612bc73722b66522ae42e576ffecb888dd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\page.tpl',
      1 => 1569916436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_5e7db2eb161ad0_33211533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16793432145e7db2eb1520c2_49512548', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21279551775e7db2eb155f46_26071244', 'page_content_top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14836718545e7db2eb15dc56_98624575', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_16793432145e7db2eb1520c2_49512548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_16793432145e7db2eb1520c2_49512548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_17477092055e7db2eb155f48_45238383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_21279551775e7db2eb155f46_26071244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_top' => 
  array (
    0 => 'Block_21279551775e7db2eb155f46_26071244',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_17477092055e7db2eb155f48_45238383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17477092055e7db2eb155f48_45238383', 'customer_notifications', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'my_account_links'} */
class Block_13164908275e7db2eb161ad7_52455078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_14836718545e7db2eb15dc56_98624575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_14836718545e7db2eb15dc56_98624575',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_13164908275e7db2eb161ad7_52455078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13164908275e7db2eb161ad7_52455078', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
