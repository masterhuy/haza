<?php
/* Smarty version 3.1.33, created on 2020-02-24 10:16:56
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\ps_facetedsearch\views\templates\front\catalog\active-filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53a298231898_66308062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e845c65a0cd9f7ef3ee402879f128fd60b16c57' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\ps_facetedsearch\\views\\templates\\front\\catalog\\active-filters.tpl',
      1 => 1578901114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53a298231898_66308062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17457611915e53a298231890_87884378', 'active_filters_title');
?>


  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20638871305e53a298231891_58887165', 'active_filters_item');
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
</section>
<?php }
/* {block 'active_filters_title'} */
class Block_17457611915e53a298231890_87884378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_17457611915e53a298231890_87884378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter-title<?php } else { ?>hidden-xs-up<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
  <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_20638871305e53a298231891_58887165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_20638871305e53a298231891_58887165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="filter-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="ptw-icon icon-closed_light close"></i></a>
          </li>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
