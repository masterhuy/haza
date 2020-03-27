<?php
/* Smarty version 3.1.33, created on 2020-03-27 06:38:09
  from 'module:jmswishlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d9f51613828_71914689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397b03fe774dde055b6ffa7f0521750a7ec80dc2' => 
    array (
      0 => 'module:jmswishlistviewstemplates',
      1 => 1583397048,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5e7d9f51613828_71914689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14039545315e7d9f5159e502_07123967', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_container'} */
class Block_14039545315e7d9f5159e502_07123967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14039545315e7d9f5159e502_07123967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

	<div id="mywishlist">
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
			<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
			<span class="navigation-pipe"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist'),'html' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
			<?php if (isset($_smarty_tpl->tpl_vars['current_wishlist']->value)) {?>
				<span class="navigation-pipe"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8');?>
</span>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_wishlist']->value['name'], ENT_QUOTES, 'UTF-8');?>

			<?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h1>

		<?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0, false);
?>
		<?php if (intval($_smarty_tpl->tpl_vars['id_customer']->value) != 0) {?>
			<form method="post" id="form_wishlist">
				<input type="hidden" name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
				<div class="row align-items-center">
					<div class="col"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist Name','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span></div>
					<div class="col-8"><input type="text" id="name" name="name" class="inputTxt form-control" value="<?php if (isset($_POST['name']) && count($_smarty_tpl->tpl_vars['errors']->value) > 0) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" /></div>
					<div class="col text-right"><button type="submit" name="submitWishlist" id="submitWishlist" class="btn btn-default form-control" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
" class="exclusive" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</button></div>
				</div>
			</form>
			<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
			<div id="block-history" class="block-center">
				<table class="table">
					<thead>
						<tr>
							<th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Direct Link','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
							<th class="item mywishlist_second"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
							<th class="last_item mywishlist_first"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wishlists']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<tr id="wishlist_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
">
								<td style="width:200px;">
									<a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
');"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'],30,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
								</td>
								<td class="bold align_center">
									<?php $_smarty_tpl->_assignInScope('n', 0);?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nbProducts']->value, 'nb', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nb']->value) {
?>
										<?php if ($_smarty_tpl->tpl_vars['nb']->value['id_wishlist'] == $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']) {?>
											<?php $_smarty_tpl->_assignInScope('n', intval($_smarty_tpl->tpl_vars['nb']->value['nbProducts']));?>
										<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php if ($_smarty_tpl->tpl_vars['n']->value) {?>
										<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['n']->value), ENT_QUOTES, 'UTF-8');?>

									<?php } else { ?>
										0
									<?php }?>
								</td>
								<td><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['counter']), ENT_QUOTES, 'UTF-8');?>
</td>
								<td><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date_add'],"%Y-%m-%d"), ENT_QUOTES, 'UTF-8');?>
</td>
								<td><a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a></td>
								<td class="wishlist_default">
									<?php if ((($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['default'] !== null )) && $_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['default'] == 1) {?>
										<span class="is_wish_list_default">
											<i class="fal fa-check"></i>
										</span>
									<?php } else { ?>
										<a href="#" onclick="javascript:event.preventDefault();(WishlistDefault('wishlist_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
'));">
											<i class="fal fa-times"></i>
										</a>
									<?php }?>
								</td>
								<td class="wishlist_delete">
									<a class="icon" href="#" onclick="javascript:event.preventDefault();return (WishlistDelete('wishlist_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_wishlist']), ENT_QUOTES, 'UTF-8');?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this wishlist ?','mod'=>'blockwishlist','js'=>1),$_smarty_tpl ) );?>
'));">
										<i class="fal fa-trash"></i>
									</a>
								</td>
							</tr>
						<?php
}
}
?>
					</tbody>
				</table>
			</div>
			<div id="block-order-detail">&nbsp;</div>
			<?php }?>
		<?php }?>
	</div>
<?php
}
}
/* {/block 'page_content_container'} */
}
