<?php
/* Smarty version 3.1.33, created on 2020-02-25 02:25:23
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5485930cd9a0_46087481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9dc551e157a01e6cef2df58d8523058362ba858' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1582535088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/pagination.tpl' => 1,
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5e5485930cd9a0_46087481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row align-items-center">
		<div class="col-4 col-md-6 col-sm-5 text-left">
			<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_switchlist'] == 1) {?>
				<div class="view-mode">
					<a class="switch-view view-grid <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list'] == 'grid') {?>active<?php }?>"></a>
					<a class="switch-view view-list <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_list'] == 'list') {?>active<?php }?>"></a>
				</div>
			<?php }?>
		</div>
		<div class="col-8 col-md-6 col-sm-7 text-right">
			<div class="sort-by">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12743045915e5485930cd9a8_76852187', 'pagination');
?>

				<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['shop_sortby'] == 1) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8027416655e5485930cd9a7_48077877', 'sort_by');
?>

				<?php }?>
			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'pagination'} */
class Block_12743045915e5485930cd9a8_76852187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_12743045915e5485930cd9a8_76852187',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
				<?php
}
}
/* {/block 'pagination'} */
/* {block 'sort_by'} */
class Block_8027416655e5485930cd9a7_48077877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_8027416655e5485930cd9a7_48077877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
					<?php
}
}
/* {/block 'sort_by'} */
}
