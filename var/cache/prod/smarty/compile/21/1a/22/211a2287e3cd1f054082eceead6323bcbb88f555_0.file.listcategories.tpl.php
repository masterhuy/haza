<?php
/* Smarty version 3.1.33, created on 2020-02-28 09:31:44
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsblog\views\templates\admin\jmsblog_categories\listcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e58de00cc3914_73363532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '211a2287e3cd1f054082eceead6323bcbb88f555' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_categories\\listcategories.tpl',
      1 => 1569916428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58de00cc3914_73363532 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel"><h3><i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

	<span class="panel-heading-action">
		<a class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&addCategory=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>	
	<div class="table-responsive-row clearfix">
		<table class="table tableDnD"><tbody id="categories">
			<tr class="heading">
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Title','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>
				<th></th>
				<th class="right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'category', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
				<tr id="categories_<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?>odd<?php }?>">					
					<td class="row-id">
						<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
 
					</td>
					<td class="title">
						<h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</h4>
					</td>
					<td>
						<span><i class="icon-arrows "></i></span>
					</td>
					<td>
						<div class="btn-group-action pull-right">
							<a class="btn <?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&status_id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&changeCategoryStatus" title="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
							</a>
							<a class="btn btn-default"									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
								<i class="icon-edit"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

							</a>								
							<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogCategories');?>
&configure=jmsblog&delete_id_category=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" onclick="return confirm('Are you sure you want to delete this item?');">
								<i class="icon-trash"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

							</a>
						</div>
					</td>
				</tr>				
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody></table>
	</div>		
</div><?php }
}
