<?php
/* Smarty version 3.1.33, created on 2020-02-07 10:28:28
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3d3bcc6663c1_73614725',
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
function content_5e3d3bcc6663c1_73614725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12095561255e3d3bcc6663c2_01544021', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_20270199505e3d3bcc6663c0_76330502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15268275565e3d3bcc6663c6_66692198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12561826685e3d3bcc6663c7_48618649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20270199505e3d3bcc6663c0_76330502', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15268275565e3d3bcc6663c6_66692198', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_5286018565e3d3bcc6663c3_29710780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12095561255e3d3bcc6663c2_01544021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12095561255e3d3bcc6663c2_01544021',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12561826685e3d3bcc6663c7_48618649',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20270199505e3d3bcc6663c0_76330502',
  ),
  'page_content' => 
  array (
    0 => 'Block_15268275565e3d3bcc6663c6_66692198',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5286018565e3d3bcc6663c3_29710780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12561826685e3d3bcc6663c7_48618649', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5286018565e3d3bcc6663c3_29710780', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
