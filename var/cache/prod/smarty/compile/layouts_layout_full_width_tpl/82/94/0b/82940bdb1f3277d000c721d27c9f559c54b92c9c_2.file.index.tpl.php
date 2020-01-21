<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:29
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9990f527_76788697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82940bdb1f3277d000c721d27c9f559c54b92c9c' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/index.tpl',
      1 => 1569916433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9990f527_76788697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_486361415dea2c99908d16_03283051', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15896721185dea2c9990a007_87030546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3560718035dea2c9990b0b6_15310442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_486361415dea2c99908d16_03283051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_486361415dea2c99908d16_03283051',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15896721185dea2c9990a007_87030546',
  ),
  'page_content' => 
  array (
    0 => 'Block_3560718035dea2c9990b0b6_15310442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15896721185dea2c9990a007_87030546', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3560718035dea2c9990b0b6_15310442', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
