<?php
/* Smarty version 3.1.33, created on 2020-03-13 10:02:31
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6b5a377d5ff1_91077470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6911ef4d27b15efcaa951b274727e8f175e6989d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\index.tpl',
      1 => 1569916434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6b5a377d5ff1_91077470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9707563975e6b5a377d2177_92132788', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4534205685e6b5a377d2170_26996449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13118387925e6b5a377d2178_73578711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9707563975e6b5a377d2177_92132788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9707563975e6b5a377d2177_92132788',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4534205685e6b5a377d2170_26996449',
  ),
  'page_content' => 
  array (
    0 => 'Block_13118387925e6b5a377d2178_73578711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4534205685e6b5a377d2170_26996449', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13118387925e6b5a377d2178_73578711', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
