<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:01:47
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmswishlist\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db2ebb1a196_99864066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cfacd4961302920d4563e2334695a102f78efca' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmswishlist\\views\\templates\\hook\\my-account.tpl',
      1 => 1585284976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7db2ebb1a196_99864066 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE WishList -->
<a class="wishlist_top home_page lnk_wishlist" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
<a class=" wishlist_top my_account lnk_wishlist" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
  <span class="link-item">
		<i class="fal fa-heart"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

	</span>
</a>
<!-- END : MODULE WishList -->
<?php }
}
