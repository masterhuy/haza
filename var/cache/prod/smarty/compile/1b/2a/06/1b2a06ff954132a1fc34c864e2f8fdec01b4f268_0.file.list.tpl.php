<?php
/* Smarty version 3.1.33, created on 2020-02-05 06:51:26
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsbrands\views\templates\hook\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3a65ee767313_07794829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2a06ff954132a1fc34c864e2f8fdec01b4f268' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsbrands\\views\\templates\\hook\\list.tpl',
      1 => 1569916430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a65ee767313_07794829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<h3>
		<i class="icon-list-ul"></i> 
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands list','d'=>'Modules.JmsBrands.Admin'),$_smarty_tpl ) );?>

		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&addLogo=1">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
					<i class="process-icon-new "></i>
				</span>
			</a>
		</span>
	</h3>
	<div id="slidesContent">
		<div id="slides">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
				<div id="slides_<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
							<?php if ($_smarty_tpl->tpl_vars['brand']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;
echo $_smarty_tpl->tpl_vars['brand']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
" class="img-thumbnail" />
							<?php }?>
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">#<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
 - <?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
</h4>
							<div class="btn-group-action pull-right">
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&changeStatus&id_brand=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
" title="title="<?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>"">
									<i class="<?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['brand']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>		
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&id_brand=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
">
									<i class="icon-edit"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.JmsBrands.Admin'),$_smarty_tpl ) );?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsbrands&delete_id_brand=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id_brand'];?>
">
									<i class="icon-trash"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.JmsBrands.Admin'),$_smarty_tpl ) );?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div><?php }
}
