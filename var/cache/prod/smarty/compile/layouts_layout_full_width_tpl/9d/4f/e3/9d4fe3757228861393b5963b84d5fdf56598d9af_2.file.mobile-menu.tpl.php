<?php
/* Smarty version 3.1.33, created on 2020-02-04 10:23:44
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\headers\mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e394630150012_94685796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4fe3757228861393b5963b84d5fdf56598d9af' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\headers\\mobile-menu.tpl',
      1 => 1578901890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e394630150012_94685796 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
		<i class="ptw-icon icon-menu-3"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button"><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3> <i class="ptw-icon icon-closed_light"></i></button>
    <nav id="off-canvas-menu">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"jmsmegamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

    </nav>
</div>
<?php }
}
