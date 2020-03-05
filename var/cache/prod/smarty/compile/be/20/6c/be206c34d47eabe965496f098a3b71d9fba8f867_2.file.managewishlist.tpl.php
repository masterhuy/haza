<?php
/* Smarty version 3.1.33, created on 2020-03-05 08:55:58
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmswishlist\views\templates\front\managewishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60be9eb51939_50553356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be206c34d47eabe965496f098a3b71d9fba8f867' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmswishlist\\views\\templates\\front\\managewishlist.tpl',
      1 => 1583398512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60be9eb51939_50553356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
		<div class="wishlistLinkTop">
		<div class="wishlist-btns">
			<a href="#" id="hideWishlist" class="btn-default" onclick="WishlistVisibility('wishlistLinkTop', 'Wishlist'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close this wishlist','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
" rel="nofollow">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close this wishlist','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

			</a>
			<ul class="clearfix display_list">
				<li>
					<a href="#" id="hideBoughtProducts" class="btn-default"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
				</li>
				<li>
					<a href="#" id="showBoughtProducts" class="btn-default"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
				</li>
				<?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
				<li>
					<a href="#" id="hideBoughtProductsInfos" class="btn-default" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Hide products",'d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Hide bought products' info",'d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
				</li>
				<li>
					<a href="#" id="showBoughtProductsInfos" class="btn-default"  onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Show products",'d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Show bought products' info",'d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
				</li>
				<?php }?>
			</ul>
		</div>
		<div class="wishlisturl form-group">
			<div id="showSendWishlist">
				<a href="#" class="btn-default" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send this wishlist','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send this wishlist','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
			</div>
		</div>
	<?php }?>
	<div class="wlp_bought">
		<ul class="clearfix wlp_bought_list row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
?>
			<li id="wlp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 clearfix address <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'] : null)%2) {?>alternate_<?php }?>item">
				<div class="product-box">
					<div class="product_image">
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']),'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
">
							<img class="w-100" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],ImageType::getFormatedName('home')),'html' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
						</a>
					</div>
					<div class="product_infos">
						<p id="s_title" class="product-link" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
						<div class="wishlist_product_detail">
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']),'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attributes_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
							<?php }?>
							<div class="form-group">
								<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
:</label>
								<input type="text" class="form-control" id="quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" size="3"  />
							</div>
							<div class="form-group">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Priority','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
:
								<select id="priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="form-control">
									<option value="0"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority'] == 0) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'High','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</option>
									<option value="1"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority'] == 1) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Medium','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</option>
									<option value="2"<?php if ($_smarty_tpl->tpl_vars['product']->value['priority'] == 2) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Low','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</option>
								</select>
							</div>
							<?php if (count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?>
							<div class="form-group">
								<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Move'),$_smarty_tpl ) );?>
:</label>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist', false, NULL, 'wl', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['total'];
?>
									<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['first'] : null)) {?>
										<select class="wishlist_change_button form-control">
											<option>---</option>
											<?php }?>
											<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['id_wishlist']->value != $_prefixVariable1) {?>
											<option title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" data-quantity="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" data-priority="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['priority'], ENT_QUOTES, 'UTF-8');?>
" data-id-old-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-new-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('Move to %s',$_smarty_tpl->tpl_vars['wishlist']->value['name']),'d'=>'Shop.Theme'),$_smarty_tpl ) );?>

											</option>
											<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wl']->value['last'] : null)) {?>
										</select>
									<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
				<br />
				<div class="group_btn">
					<a class="btn-default" href="javascript:;" class="exclusive lnksave" onclick="WishlistProductManage('wlp_bought_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', 'update', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', $('#quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val(), $('#priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val());" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
					<a class="btn-default" href="javascript:;" class="lnkdel" onclick="WishlistProductManage('wlp_bought', 'delete', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
', $('#quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val(), $('#priority_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
').val());" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
				</div>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['refresh']->value) {?>
		<form method="post" class="wl_send std" onsubmit="return (false);" style="display: none;">
			<a id="hideSendWishlist" class="button_account btn icon"  href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close this wishlist','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
">
				<i class="ptw-icon icon-closed_light"></i>
			</a>
			<fieldset>
				<p class="required">
					<label for="email1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
1 <sup>*</sup></label>
					<input type="text" name="email1" id="email1" />
				</p>
				<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 2; $__section_i_0_iteration <= 9; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<p>
					<label for="email<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','d'=>'Shop.Theme'),$_smarty_tpl ) );
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
</label>
					<input type="text" name="email<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
" id="email<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null), ENT_QUOTES, 'UTF-8');?>
" />
				</p>
				<?php
}
}
?>
				<p class="submit">
					<input class="btn-default button" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
" name="submitWishlist" onclick="WishlistSend('wl_send', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
', 'email');" />
				</p>
				<p class="required">
					<sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

				</p>
			</fieldset>
		</form>
		<?php if (count($_smarty_tpl->tpl_vars['productsBoughts']->value)) {?>
		<table class="wlp_bought_infos hidden std">
			<thead>
				<tr>
					<th class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offered by','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
					<th class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productsBoughts']->value, 'product', false, NULL, 'i', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['bought'], 'bought', false, NULL, 'j', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bought']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['bought']->value['quantity'] > 0) {?>
							<tr>
								<td class="first_item">
									<span style="float:left;"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'small'),'html' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /></span>
									<span style="float:left;">
										<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
										<br /><i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attributes_small'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</i>
										<?php }?>
									</span>
								</td>
								<td class="item align_center"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['bought']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
</td>
								<td class="item align_center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bought']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bought']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</td>
								<td class="last_item align_center"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['bought']->value['date_add'],"%Y-%m-%d"), ENT_QUOTES, 'UTF-8');?>
</td>
							</tr>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<?php }?>
	<?php }
} else { ?>
	<p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
<?php }
}
}
