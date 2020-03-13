<?php
/* Smarty version 3.1.33, created on 2020-03-13 10:02:31
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6b5a377f9285_51598667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ebe522af4f8239a6b9fdc727787df6689b987af' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\layouts\\layout-full-width.tpl',
      1 => 1569916436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6b5a377f9285_51598667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6947658605e6b5a377ed700_70582322', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20980352565e6b5a377f1583_51592496', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1261655225e6b5a377f1582_15230448', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_6947658605e6b5a377ed700_70582322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_6947658605e6b5a377ed700_70582322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_20980352565e6b5a377f1583_51592496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_20980352565e6b5a377f1583_51592496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_7977111795e6b5a377f5400_96730606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1261655225e6b5a377f1582_15230448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1261655225e6b5a377f1582_15230448',
  ),
  'content' => 
  array (
    0 => 'Block_7977111795e6b5a377f5400_96730606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != "index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7977111795e6b5a377f5400_96730606', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
