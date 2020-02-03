<?php
/* Smarty version 3.1.33, created on 2020-02-03 10:28:32
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e37f5d0bc3958_12550433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137141e5f5f30b361b24b5863815b9251cb03034' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\page.tpl',
      1 => 1575271170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e37f5d0bc3958_12550433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15067184925e37f5d0bc3950_69481627', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_11837031305e37f5d0bc3953_59184633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2992096545e37f5d0bc3952_00681478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16285928125e37f5d0bc3957_33549393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11837031305e37f5d0bc3953_59184633', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2992096545e37f5d0bc3952_00681478', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_9952639125e37f5d0bc3950_89243937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15067184925e37f5d0bc3950_69481627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15067184925e37f5d0bc3950_69481627',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16285928125e37f5d0bc3957_33549393',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11837031305e37f5d0bc3953_59184633',
  ),
  'page_content' => 
  array (
    0 => 'Block_2992096545e37f5d0bc3952_00681478',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_9952639125e37f5d0bc3950_89243937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16285928125e37f5d0bc3957_33549393', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9952639125e37f5d0bc3950_89243937', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
