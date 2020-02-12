<?php
/* Smarty version 3.1.33, created on 2020-02-12 10:15:36
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e43d048f07a44_46971817',
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
function content_5e43d048f07a44_46971817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21088258225e43d048f07a44_18669963', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12366123975e43d048f07a47_07083364', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7227615305e43d048f07a42_52299988', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_21088258225e43d048f07a44_18669963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_21088258225e43d048f07a44_18669963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_12366123975e43d048f07a47_07083364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_12366123975e43d048f07a47_07083364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_10900757245e43d048f07a47_36349894 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_7227615305e43d048f07a42_52299988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_7227615305e43d048f07a42_52299988',
  ),
  'content' => 
  array (
    0 => 'Block_10900757245e43d048f07a47_36349894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != "index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10900757245e43d048f07a47_36349894', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
