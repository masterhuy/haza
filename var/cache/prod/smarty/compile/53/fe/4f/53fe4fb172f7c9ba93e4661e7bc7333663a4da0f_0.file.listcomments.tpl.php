<?php
/* Smarty version 3.1.33, created on 2020-03-02 02:27:41
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsblog\views\templates\admin\jmsblog_comment\listcomments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5c6f1d3b7641_36446944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53fe4fb172f7c9ba93e4661e7bc7333663a4da0f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_comment\\listcomments.tpl',
      1 => 1569916428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5c6f1d3b7641_36446944 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<h3><i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['waiting_total']->value > 0) {?>
		<div class="pull-right">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is ','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['waiting_total']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments waiting approve','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 	
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment');?>
&configure=jmsblog&ApproveAll" class="btn" title="#" >
		<i class="icon-warning"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve All','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

		</a>	
		</div>
	<?php }?>
	</h3>
	<div class="table-responsive-row clearfix">
		<table class="table tableDnD"><tbody id="posts">
			<tr class="heading">
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>				
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>				
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>				
				<th class="right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'comment', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
				<tr id="posts_<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?>odd<?php }?>">					
					<td class="row-id">
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
 
					</td>					
					<td class="name">
						<h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
</h4>
					</td>
					<td class="time">
						<h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['comment']->value['time_add'];?>
</h4>
					</td>
					<td class="comment">
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>

					</td>					
					<td>
						<div class="btn-group-action pull-right">
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == -2) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment');?>
&configure=jmsblog&status_id_comment=<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
&Approve" class="btn btn-warning" title="#" >
									<i class="icon-warning"></i> <?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == -2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );
}?>
								</a>
							<?php } else { ?>
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == 1) {?>btn-success<?php } else { ?>btn-danger<?php }?>"	href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment');?>
&configure=jmsblog&status_id_comment=<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
&changeCommentStatus" title="<?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == 1) {?>Enabled<?php } else { ?>Disabled<?php }?>">
								<i class="<?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == 1) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == 1) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
							<?php }?>
							<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment');?>
&configure=jmsblog&delete_id_comment=<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
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
