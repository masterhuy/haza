<?php
/* Smarty version 3.1.33, created on 2020-02-12 10:15:36
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e43d048f07a44_34878049',
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
function content_5e43d048f07a44_34878049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5725973965e43d048f07a41_00908947', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_4564117355e43d048f07a43_82093622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_543873435e43d048f07a43_87494963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2341025015e43d048f07a43_98023439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4564117355e43d048f07a43_82093622', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543873435e43d048f07a43_87494963', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_2585912485e43d048f07a42_84322523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5725973965e43d048f07a41_00908947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5725973965e43d048f07a41_00908947',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2341025015e43d048f07a43_98023439',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4564117355e43d048f07a43_82093622',
  ),
  'page_content' => 
  array (
    0 => 'Block_543873435e43d048f07a43_87494963',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2585912485e43d048f07a42_84322523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2341025015e43d048f07a43_98023439', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2585912485e43d048f07a42_84322523', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
