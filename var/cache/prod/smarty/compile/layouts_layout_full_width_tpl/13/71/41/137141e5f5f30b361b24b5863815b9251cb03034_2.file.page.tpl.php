<?php
/* Smarty version 3.1.33, created on 2020-03-13 10:02:31
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6b5a377e59f2_86823733',
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
function content_5e6b5a377e59f2_86823733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16604880245e6b5a377ddcf7_87995277', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_18846663455e6b5a377e1b73_81571559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1407475035e6b5a377e1b70_10810382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15824707795e6b5a377ddcf8_64480275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18846663455e6b5a377e1b73_81571559', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407475035e6b5a377e1b70_10810382', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_16228143405e6b5a377e1b79_77621480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16604880245e6b5a377ddcf7_87995277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16604880245e6b5a377ddcf7_87995277',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15824707795e6b5a377ddcf8_64480275',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18846663455e6b5a377e1b73_81571559',
  ),
  'page_content' => 
  array (
    0 => 'Block_1407475035e6b5a377e1b70_10810382',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16228143405e6b5a377e1b79_77621480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15824707795e6b5a377ddcf8_64480275', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16228143405e6b5a377e1b79_77621480', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
