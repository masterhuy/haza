<?php
/* Smarty version 3.1.33, created on 2020-02-07 10:28:29
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3d3bcd2cc673_16255988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1580719257,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d3bcd2cc673_16255988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="email_subscription block">
	<div class="title">
		<h4 class="block-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
<i class="fa fa-plus"></i></h4>
		<h4 class="block-title type-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Newsletter','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</h4>
		<?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
			<p class="newsletter-desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
		<?php }?>
	</div>
	<div class="block-content">
		<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			<p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-error<?php } else { ?>alert-success<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</p>
		<?php }?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" method="post">
			<div class="input-group newsletter-input-group">
				<input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-control" required placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
" />
				<button type="submit" class="btn active" name="submitNewsletter">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>

				</button>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

			<input type="hidden" name="action" value="0" />
		</form>
	</div>
</div>
<?php }
}
